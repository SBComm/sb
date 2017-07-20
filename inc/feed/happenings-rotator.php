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

    $no_items = true;
    
    $rssFeed = simplexml_load_file($rss);
    $html = '';

    $html .= '<div class="slick-content-wrapper slick-content-wrapper--one-up">';
    $html .= '<div class="slick-slider promo-section-inside one-up-promo-slider" data-num-slides="1">';
    
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

            preg_match( '@src="([^"]+)"@' , $rss_desc, $img_src );
            $img_src = array_pop($img_src);

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
                $no_items = false;

                $html .= 
                    '<div class="one-up-promo-slider_wrapper">
                        <img src="'.$img_src.'" alt="Image for the story '.$rss_title.'" />
                        <div class="one-up-promo-slider_content">
                            <div class="one-up-promo-slider_content_wrapper">
                                <p><strong>'.$rss_title.'</strong></p>
                                '.$rss_output_desc.'
                                <a class="sbu-outline-button sbu-outline-button--red sbu-outline-button--on-red arrow-after" href="'.$rss_url.'">Continue Reading</a>
                            </div>
                        </div>
                    </div>';
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

    $html .= '</div>';
    $html .= '</div>';

    if($no_items) {
        if(is_null($no_results_text)) {
            $no_results_text = 'No news yet! Check back soon...';
        }
        $html .= '<div class="error-text">'.$no_results_text.'</div>';
    }
    
    if(strlen($callback) > 1){
        header("Content-Type: application/javascript");
        $html = "{$callback}({\"html\":" . json_encode($html) . "});";
    }
    
    echo $html;
    
?>
