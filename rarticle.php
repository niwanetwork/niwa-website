<?php
include('_api.php');

$dataHelper = new NiwaDataHelper();
$randomUrls = [];
foreach ($dataHelper->getENMemberWikis() as $wiki) {
    if ($wiki->baseurl) {
        $randomUrls[] = $wiki->baseurl . 'Special:Random';
    }
}
$random = rand(0, count($randomUrls));
header("Location: {$randomUrls[$random]}");
