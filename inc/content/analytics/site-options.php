<?php
    function validateFolderName($string) {
        $invalidTerms = array(
            "old",
            "OMNI-ASSETS",
            "OMNI-RESOURCES",
            "dont-use",
            "-orig",
            "test",
            "hello"
        );
        
        foreach ($invalidTerms as $invalidTerm){
            /* contains invalid term */
            if (strpos($string,$invalidTerm) !== false) {
                return false;
            }
            /* starts with _ */
            if (strpos($string,'_') === 0) {
                return false;
            }
        }

        return true;
    }

    $directoryXML = 'http://www.stonybrook.edu/commcms/_data/folderListing.xml';
    $siteList = simplexml_load_file($directoryXML);
   
    //var_dump($siteList);
    $k = 0;
    $folders = array();
    foreach ($siteList->list->directory as $item){
        $itemString = (string)$item;
        if(validateFolderName($itemString)) {
            $folders[$k] = $itemString;
            $k++;
        }
    }
    asort($folders);
    foreach ($folders as $item){
        echo('<option id="commcms\/'.$item.'">'.$item.'</option>');
    }
?>