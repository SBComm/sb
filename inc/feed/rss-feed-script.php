<?php
    ini_set('display_errors', '1');
    parse_str($_SERVER['QUERY_STRING']);
    
    if (!isset($rss))
        $rss = "http://sb.cc.stonybrook.edu/news/_resources/rss/all.rss";
    
    if (!isset($start))
        $start = 0;
    
    if (!isset($end))
        $end = 20;
    
    if (!isset($count))
        $count = 20;
    
    if (!isset($category))
        $category = "general";
    
    if (!isset($callback))
        $callback = "";
    
    $queryCategories = explode(",", $category);
    
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
    
    $html = '<div class="home-item-wrapper">';
    
    foreach ($rssFeed->channel->item as $item){
        $ns = $item->getNamespaces(true);
        $ous = $item->children($ns['ou']);
        $itemCategories = explode(",", $ous->categories);
        
        foreach($queryCategories as $category){
            if(in_array(strtolower($category), $itemCategories) && strlen($item->title) > 1){
                if($start == 0){
                    
                    $date_string = $item->pubDate;
                    if( ($comma_pos = strpos($date_string, ',')) !== FALSE ) {
                        $date_string = substr($date_string, $comma_pos + 1);
                    }
                    $date_string = strtotime($date_string);
                    $date_out = date('n/j/Y', $date_string);
                    
                    
                    $html .= '<div class="home-item-story">';
                    $html .= '<a class="home-item-title" href="'.$item->link.'" title="'.$item->title.'">'.$date_out.' '.$item->title.'</a>';
                    $html .= '<span class="home-item-date">'.$item->description.'</span>';
                    $html .= '</div>';  
                    $count--;
                }
                else
                    $start--;
                
                break;
            }
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
