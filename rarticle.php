<?php
include('_api.php');
$dataHelper = new NiwaDataHelper();

$randomUrls = [];
foreach ($dataHelper->getMemberWikis('en') as $wiki) {
    if ($wiki->url) {
        $randomUrls[] = $dataHelper->getWikiLink($wiki->url, "Special:Random");
    }
}
$random = rand(0, count($randomUrls));
header("Location: {$randomUrls[$random]}");
exit();
