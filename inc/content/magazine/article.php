<?php
	if(!$slug_exists) {
        $file = "magazine/article-404.php";
        $is_404 = true;
        include($pathForContent . $content . $file);
    } else {
    	echo $magazine_article_html;
    }
?>