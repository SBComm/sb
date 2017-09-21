<?php
    ini_set('display_errors', '0');
    parse_str($_SERVER['QUERY_STRING']);
    
    if (!isset($rss))
        $rss = "https://calendar.stonybrook.edu/page/rss/?id=47d0e689-72f7-48b3-9f8d-fef27c64ccb3";
    
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

    $opts = array(
        "ssl"=>array(
            "cafile" => "/usr/local/ssl/certs/cacert.pem",
            "verify_peer"=> true,
            "verify_peer_name"=> true,
        )
    );

    $context = stream_context_create($opts);
    libxml_set_streams_context($context);
    
    $rssFeed = simplexml_load_file($rss);

    $no_items = true;

    $col_class = '';
    if($col>0) {
        $col_class = 'flex-list-'.$col;
    }

    $html = '';
    //$html .= '<ul class="'.$col_class.'">';
    
    foreach ($rssFeed->channel->item as $item){
        
        if($start == 0) {
            
            $doc = new DOMDocument();
            $doc = str_get_html($item->description);

            $rss_title = $item->title;
            $rss_url = $item->link;
            $rss_desc = $item->description;
            $rss_datetime = $item->pubDate;

            $dateTimeFormat = 'D, j M Y H:i:s O'; // Mon, 24 Aug 2015 04:00:00 GMT
            $eventDateTime = DateTime::createFromFormat($dateTimeFormat, $rss_datetime);
            
            $tz = new DateTimeZone('America/New_York');
            $eventDateTime->setTimezone($tz);

            $eventMonth = $eventDateTime->format('M');
            $eventMonthNum = $eventDateTime->format('n');
            $eventMonthFull = $eventDateTime->format('F');
            $eventDay   = $eventDateTime->format('j');
            $eventYear  = $eventDateTime->format('Y');

            $eventWeekday  = $eventDateTime->format('l');
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

                $html .= '<li>';
                $html .= '<a class="clearfix" href="'.$rss_url.'" title="'.$rss_title.'">';
                $html .= '<div class="eventDate" aria-label="'.$eventMonthFull.' '.$eventDay.', '.$eventYear.'"><span class="eventDate_day">'.$eventDay.'</span><span class="eventDate_month">'.$eventMonth.'</span></div>';
                $html .= '<span class="event-title '.$calendar_title_color.'"><span class="item">'.$rss_title.'</span></span>';
                if($showTime) {
                    $html .= '<span class="event-time">'.$eventWeekday.', '.$eventMonthNum.'/'.$eventDay.' at '.$eventHour.':'.$eventMinute.' '.$eventAMPM.'</span>';
                }
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

    //$html .= '</ul>';
    
    if(strlen($callback) > 1){
        header("Content-Type: application/javascript");
        $html = "{$callback}({\"html\":" . json_encode($html) . "});";
    }
    
    echo $html;
    
?>
