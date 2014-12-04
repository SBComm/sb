<?php
    /**
    * filename_based_cache_busting
    *
    * Used in conjunction with .htaccess configuration to rewrite requests for files such as main.12345.css to main.css, as follows:
    *  <IfModule mod_rewrite.c>
    *       RewriteEngine On
    *       RewriteCond %{REQUEST_FILENAME} !-f
    *       RewriteRule ^(.+)\.(\d+)\.(bmp|css|cur|gif|ico|jpe?g|js|png|svgz?|webp)$ $1.$3 [L]
    *   </IfModule>
    * This script rewrites the filename for a requested asset using the last modified date of the file. main.css will become something like main.12873645.css
    * 
    * 
    * @author           Josh Palmeri <palmerijosh@gmail.com>
    * @copyright        12/2/2014
    * 
    * @param            type        [REQUIRED, the type of asset to be included]
    * @param            filename    [REQUIRED, the name]
    * @param            attr1       [OPTIONAL, additional information about the included file
    *                                if type="css", attr1 is the value for the css media attribute
    *
    * @example          includeAsset('css','css/print.css','print');
    *
    * @todo  more use cases for $attr1; not used for cases of conditional IE CSS as it needs extra consideration, e.g. <!--[if lt IE 9]><link rel="stylesheet" href="css/default.css" media="all" /><![endif]-->; 
    */

    $cwd = getcwd();
    $is_localhost = strpos($cwd,'localhost');

    // Check if the current environment is local or remote based on presence of 'localhost/' in $cwd
    if($is_localhost) {
        $includes_base_url = substr_replace($cwd, 'localhost/'.$site, $is_localhost);
    } else {
        $includes_base_url = $site_domain;
    }

    // Build the new filename and echo the include statement
    function includeAsset($type,$filename,$attr1) {
        $extras = '';
        if($GLOBALS['filename_based_cache_busting']) {
            $asset_path = $GLOBALS['includes_base_url'] . '/' . $filename;
            
            if(file_exists($asset_path)) {
                clearstatcache();
                $lastModDate = filemtime($asset_path);
                if($lastModDate) {
                    
                    $last_dot_loc = strrpos($filename,'.');
                    
                    $lastModDate = '.'.$lastModDate;
                    $new_filename = substr_replace($filename, $lastModDate, $last_dot_loc, 0);
                    
                    $asset_path = $new_filename;
                }
            }

        } else {
            $asset_path = $filename;
        }
        if($type=='css') {
            if($attr1) {
                $extras = ' media="'.$attr1.'"';
            } else {
                $extras = '';
            }
            $include_asset = '<link rel="stylesheet" href="'.$asset_path.'"'.$extras.'>';
        }
        else if($type=='js') {
            $include_asset = '<script src="'.$asset_path.'"></script>';
        }
        if($include_asset) {
            echo($include_asset);
        }
    }
?>