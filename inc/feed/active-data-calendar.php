<?php
    ini_set('display_errors', '0');
    parse_str($_SERVER['QUERY_STRING']);
    
    if (!isset($rss))
        $rss = "http://calendar.activedatax.com/stonybrook/RSSSyndicator.aspx";
    
    if (!isset($start))
        $start = 0;
    
    if (!isset($end))
        $end = 3;
    
    if (!isset($count))
        $count = 3;
    
    if (!isset($callback))
        $callback = "";

    if ($calendar_title_color=="")
        $calendar_title_color = "aqua";

    if (!isset($showTime))
        $showTime = false;
    
    //$rssFeed = simplexml_load_file($rss);

    $opts = array(
            "http"=>array(   
            "header"=>  "Accept: application/xml\r\n"
        ),
            "ssl"=>array(
            "cafile" => "/usr/local/ssl/certs/cacert.pem",
            "verify_peer"=> false,
            "verify_peer_name"=> false,
        )
    );
    $context = stream_context_create($opts);

    $rss2 = file_get_contents($rss, false, $context);
    $rssFeed = new SimpleXMLElement($rss2);

    $no_items = true;

    $col_class = '';
    if($col>0) {
        $col_class = 'flex-list-'.$col;
    }

    $html = '';
    $html .= '<ul class="'.$col_class.'">';
    
    foreach ($rssFeed->channel->item as $item){
        
        if($start == 0) {
            
            $doc = new DOMDocument();
            $doc = str_get_html($item->description);

            $rss_title = $item->title;
            $rss_url = $item->link;
            $rss_desc = $item->description;
            $rss_datetime = $item->pubDate;
            $rss_readable_date = $item->category;

            $rss_title = str_replace("<![CDATA[","",$rss_title);
            $rss_title = str_replace("]]>","",$rss_title);

            $rss_desc = str_replace("<![CDATA[","",$rss_desc);
            $rss_desc = str_replace("]]>","",$rss_desc);
            
            $dateFormat = 'n/d/Y'; // 12/1/2015 04:00:00 GMT
            $eventDate = DateTime::createFromFormat($dateFormat, $rss_readable_date);

            $dateTimeFormat = 'D, j M Y H:i:s O'; // Mon, 24 Aug 2015 04:00:00 GMT
            $eventDateTime = DateTime::createFromFormat($dateTimeFormat, $rss_datetime);
            
            $tz = new DateTimeZone('America/New_York');
            $eventDateTime->setTimezone($tz);

            $eventMonth = $eventDate->format('M');
            $eventMonthNum = $eventDate->format('n');
            $eventDay   = $eventDate->format('j');
            $eventYear  = $eventDate->format('Y');

            $eventWeekday  = $eventDate->format('l');
            $eventHour     = $eventDateTime->format('g');
            $eventMinute   = $eventDateTime->format('i');
            $eventAMPM     = $eventDateTime->format('A');

            $rss_output_desc = substr($rss_desc,0,140).'...';

            //remove date from title via regex, e.g. Title (12/15/2015) --> Title
            $date_pattern = "/\(([0-9])+\/([0-9])+\/([0-9])+\)/";
            $rss_title = preg_replace($date_pattern,'',$rss_title);


            $todaysDate = DateTime::createFromFormat($dateFormat, date('Y-m-d 00:00:00'));
            //$todaysDate = date_add($todaysDate, date_interval_create_from_date_string('0 days'));
            $proceed = true;

            if(substr_count(strtolower($item->title), 'cancelled:')>0) {
                $proceed = false;
            } else if ($eventDate<$todaysDate) {
                $proceed = false;
            }

            if ($proceed) {
                $no_items = false;

                $html .= '<li class="clearfix">';
                $html .= '<a class="date-marker" href="'.$rss_url.'" title="'.$rss_title.'" target="_blank">';
                $html .= '<span class="event-month">'.$eventMonth.'</span>';
                $html .= '<span class="event-date">'.$eventDay.'</span>';
                $html .= '</a>';
                $html .= '<a class="event-details" href="'.$rss_url.'" title="'.$rss_title.'" target="_blank">';
                $html .= '<span class="event-title '.$calendar_title_color.'">'.$rss_title.'</span>';
                if($showTime) {
                    $html .= '<span class="event-time">'.$eventWeekday.', '.$eventMonthNum.'/'.$eventDay.' at '.$eventHour.':'.$eventMinute.' '.$eventAMPM.'</span>';
                }
                $html .= '<span class="event-desc">'.$rss_output_desc.'</span>';
                $html .= '</a>';
                $html .= '</li>';
                $count--;
            }

            /*
            $html .= 'dates: ' . $rss_dates[0];
            $html .= '<br />';
            $html .= 'rss_datetime: ' . $rss_datetime[0];
            $html .= '<br />';
            $html .= 'rss_dtend: ' . $rss_dtend[0];
            $html .= '<br />';
            $html .= 'rss_loc: ' . $rss_loc[0];
            $html .= '<br />';
            $html .= 'rss_desc: ' . $rss_desc[0];
            $html .= '<br />';
            
            $html .= 'link: ' . $item->link;
            $html .= '<br />';
            $html .= 'title: ' . $item->title;
            $html .= '<br />';
            $html .= 'category: ' . $item->category;
            $html .= '<br />';
            $html .= 'description: ' . $item->description;
            $html .= '<br />';
            */
        }
        else {
            $start--;
        }
        
        if($count == 0)
            break;
    }

    if($no_items) {
        if(is_null($no_results_text)) {
            $no_results_text = 'Hm... It seems that there are no events scheduled at the moment.';
        }
        $html .= '<li class="error-text">'.$no_results_text.'</li>';
    }

    $html .= '</ul>';
    
    if(strlen($callback) > 1){
        header("Content-Type: application/javascript");
        $html = "{$callback}({\"html\":" . json_encode($html) . "});";
    }
    
    echo $html;
    
?>
