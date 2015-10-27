<?php
    ini_set('display_errors', '0');
    parse_str($_SERVER['QUERY_STRING']);
    
    if (!isset($rss))
        $rss = "http://sb.cc.stonybrook.edu/happenings/feed";
    
    if (!isset($start))
        $start = 0;
    
    if (!isset($end))
        $end = 5;
    
    if (!isset($count))
        $count = 5;
    
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

            $rss_title = str_replace("<![CDATA[","",$rss_title);
            $rss_title = str_replace("]]>","",$rss_title);

            $rss_desc = str_replace("<![CDATA[","",$rss_desc);
            $rss_desc = str_replace("]]>","",$rss_desc);

            $dateFormat = 'D, d M Y H:i:s O'; // Mon, 06 Aug 2015 16:53:14 +0000

            $eventDate = DateTime::createFromFormat($dateFormat, $rss_datetime);

            $eventMonth = $eventDate->format('n');
            $eventDay   = $eventDate->format('j');
            $eventYear  = $eventDate->format('y');

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
                $html .= '<a href="'.$rss_url.'" target="_blank"><span>'.$rss_title.'</span> <strong class="date">'.$eventMonth.'/'.$eventDay.'/'.$eventYear.'</strong></a>';
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
