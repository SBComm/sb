<?php
    ini_set('display_errors', '1');
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
    $html = '<div class="home-item-wrapper">';
    
    foreach ($rssFeed->channel->item as $item){
        
        if($start == 0) {
            
            $doc = new DOMDocument();
            $doc = str_get_html($item->description);
            $rss_dates   = $doc->find('b');

            $rss_datetime = $doc->find('span.dtstart');
            $rss_datetime_stamp = $rss_datetime[0]->title;

            if($rss_datetime_stamp) {
                echo(' >>> ' .$rss_datetime_stamp . ' <<<');
            } else {
                $rss_date_and_time_stamps = $doc->find('span.dtstart .value');
                $rss_date_stamp = $rss_date_and_time_stamps[0]->title;
                $rss_time_stamp = $rss_date_and_time_stamps[1]->title;
                $rss_datetime_stamp = $rss_date_stamp . 'T' . $rss_time_stamp;
                echo(' >>> ' .$rss_datetime_stamp . ' <<<');
            }

            $rss_dtend   = $doc->find('span.dtend');

            $rss_loc     = $doc->find('span.location');
            $rss_desc    = $doc->find('.description');
            
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
            $count--;
        }
        else {
            $start--;
        }
        
        if($count == 0)
            break;
    }
    
    $html .= '</div>';
    
    if(strlen($callback) > 1){
        header("Content-Type: application/javascript");
        $html = "{$callback}({\"html\":" . json_encode($html) . "});";
    }
    
    echo $html;
    
?>
