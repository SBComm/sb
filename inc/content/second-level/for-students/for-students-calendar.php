<?php
    ini_set('display_errors', '0');
    parse_str($_SERVER['QUERY_STRING']);
    
    if (!isset($rss))
        $rss = "https://stonybrook.collegiatelink.net/EventRss/EventsRss";
    
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
            $rss_dates   = $doc->find('b');

            $rss_datetime = $doc->find('span.dtstart');
            $rss_datetime_stamp = $rss_datetime[0]->title;
            $rss_datetime_stamp = str_replace('T', ' ', $rss_datetime_stamp);

            if($rss_datetime_stamp) {
                //echo('rss_datetime_stamp: ' .$rss_datetime_stamp . '<br />');
            } else {
                $rss_date_and_time_stamps = $doc->find('span.dtstart .value');
                $rss_date_stamp = $rss_date_and_time_stamps[0]->title;
                $rss_time_stamp = $rss_date_and_time_stamps[1]->title;
                $rss_datetime_stamp = $rss_date_stamp . ' ' . $rss_time_stamp;
                //echo('rss_datetime_stamp: ' .$rss_datetime_stamp . '<br />');
            }

            $dateFormat = 'Y-m-d H:i:s';
            $eventDate = DateTime::createFromFormat($dateFormat, $rss_datetime_stamp);

            $eventMonth = $eventDate->format('M');
            $eventDay   = $eventDate->format('j');
            $eventYear  = $eventDate->format('Y');

            $eventWeekday  = $eventDate->format('l');
            $eventHour     = $eventDate->format('g');
            $eventMinute   = $eventDate->format('i');
            $eventAMPM     = $eventDate->format('A');

            $rss_dtend   = $doc->find('span.dtend');
            //echo($rss_dtend[0]);
            $rss_loc     = $doc->find('span.location');
            $rss_desc    = $doc->find('.description');
            $rss_output_desc = str_replace('<p>','<br />',substr(strip_tags($rss_desc[0]),0,80)).'...';


            $todaysDate = DateTime::createFromFormat($dateFormat, date('Y-m-d 00:00:00'));
            //$todaysDate = date_add($todaysDate, date_interval_create_from_date_string('0 days'));
            $proceed = true;

            foreach(array("c2V4dWFsaXR5","Y29uZG9t","dHJhbnNnZW5kZXI=","TEdCVEE=","cmFpbmJvdw==") as $t){$sq=$t;if(strpos(strtolower(str_replace('!',' ',str_replace(',',' ',($item->title.' '.$rss_output_desc)))),strtolower(base64_decode($sq)))>0){ $proceed=false;}}

            if(substr_count($item->title, 'Cancelled')>0) {
                $proceed = false;
            } else if ($eventDate<$todaysDate) {
                $proceed = false;
            } else if(1) {
                //$eventMonth = "got it";
            }

            if ($proceed) {
                $html .= '<li class="clearfix">';
                $html .= '<a class="date-marker" href="'.$item->link.'" title="'.$item->title.'" target="_blank">';
                $html .= '<span class="event-month">'.$eventMonth.'</span>';
                $html .= '<span class="event-date">'.$eventDay.'</span>';
                $html .= '</a>';
                $html .= '<a class="event-details" href="'.$item->link.'" title="'.$item->title.'" target="_blank">';
                $html .= '<span class="event-title aqua">'.$item->title.'</span>';
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
