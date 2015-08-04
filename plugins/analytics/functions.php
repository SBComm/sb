<?php

require_once('google-api-php-client/src/Google_Client.php');
require_once('google-api-php-client/src/contrib/Google_AnalyticsService.php');

const PATH_TO_KEYFILE = 'keys/SBU Analytics Dashboard-9327adc0f59a.p12';
const PROFILE_ID = 'ga:57480079'; //Values must match the following regular expression: 'ga:[0-9]+'

function getOUSites($urlPath) {
    /*
    int xml_parse_into_struct ( resource $parser , string $data , array &$values [, array &$index ] )
    //This function parses an XML string into 2 parallel array structures, one (index) containing pointers to the location of the appropriate values in the values array. These last two parameters must be passed by reference.
     */
    $directoryXML = simplexml_load_file('http://www.stonybrook.edu/commcms/_data/folderListing.xml');
    $p = xml_parser_create();
    xml_parse_into_struct($p, $directoryXML, $vals, $index);
    xml_parser_free($p);

    var_dump($directoryXML);
}

function queryAnalytics($startDate, $endDate, $metrics, $include, $sort, $filter) {

    //getOUSites('http://www.stonybrook.edu/commcms/_data/folderListing.xml');

    $filters = 'ga:pagePath!@/servlet';
    if (isset($include) && $include != "") {
        $filters .= ';ga:pagePath=~' . $include;
    }
    if (isset($filter) && $filter != "") {
        $filters .= '/' . trim(strtolower($filter));
    }
    $optParams = array('dimensions' => 'ga:pageTitle,ga:pagePath', 'sort' => $sort, 'filters' => $filters);

    $client = new Google_Client();
    $client->setApplicationName('SBU Analytics Dashboard');

    $client->setAssertionCredentials(new Google_AssertionCredentials('121194114401-q3hp2pm44r6qjvh69l23s5imuf6esln5@developer.gserviceaccount.com', array('https://www.googleapis.com/auth/analytics.readonly'), file_get_contents(PATH_TO_KEYFILE)));

    $client->setClientId('sbu-analytics-dashboard@appspot.gserviceaccount.com');
    $client->setAccessType('offline_access');
    $client->setUseObjects(true);

    $service = new Google_AnalyticsService($client);
    return $service->data_ga->get(PROFILE_ID, $startDate, $endDate, $metrics, $optParams);
}

?>