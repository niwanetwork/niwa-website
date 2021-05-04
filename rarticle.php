<?php
include('_api.php');

$dataHelper = new NiwaDataHelper();
$randomUrls = [];
foreach ($dataHelper->getMemberWikis('en') as $wiki) {
    if ($wiki->baseurl) {
        $randomUrls[] = str_replace( '$1', 'Special:Random', $wiki->url );
    }
}
$random = rand(0, count($randomUrls));
header("Location: {$randomUrls[$random]}");
