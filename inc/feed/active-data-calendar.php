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
    
    $rssFeed = simplexml_load_file($rss);
    $html = '';
    
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

            $dateFormat = 'D, j M Y H:i:s O'; // Mon, 24 Aug 2015 04:00:00 GMT
            
            $eventDate = DateTime::createFromFormat($dateFormat, $rss_datetime);

            $eventMonth = $eventDate->format('M');
            $eventDay   = $eventDate->format('j');
            $eventYear  = $eventDate->format('Y');

            $eventWeekday  = $eventDate->format('l');
            $eventHour     = $eventDate->format('g');
            $eventMinute   = $eventDate->format('i');
            $eventAMPM     = $eventDate->format('A');

            $rss_output_desc = substr($rss_desc,0,80).'...';


            $todaysDate = DateTime::createFromFormat($dateFormat, date('Y-m-d 00:00:00'));
            //$todaysDate = date_add($todaysDate, date_interval_create_from_date_string('0 days'));
            $proceed = true;

            if(substr_count(strtolower($item->title), 'cancelled:')>0) {
                $proceed = false;
            } else if ($eventDate<$todaysDate) {
                $proceed = false;
            } else if(1) {
                //$eventMonth = "got it";
            }

            if ($proceed) {
                $html .= '<li class="clearfix">';
                $html .= '<a class="date-marker" href="'.$rss_url.'" title="'.$rss_title.'" target="_blank">';
                $html .= '<span class="event-month">'.$eventMonth.'</span>';
                $html .= '<span class="event-date">'.$eventDay.'</span>';
                $html .= '</a>';
                $html .= '<a class="event-details" href="'.$rss_url.'" title="'.$rss_title.'" target="_blank">';
                $html .= '<span class="event-title aqua">'.$rss_title.'</span>';
                $html .= '<span class="event-time">'.$eventWeekday.', '.$eventHour.':'.$eventMinute.' '.$eventAMPM.'</span>';
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
    
    if(strlen($callback) > 1){
        header("Content-Type: application/javascript");
        $html = "{$callback}({\"html\":" . json_encode($html) . "});";
    }
    
    echo $html;
    
?>
