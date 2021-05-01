<?php
include('_api.php');

$randomUrls = [];
foreach ($memberWikis->en as $wiki) {
    if ($wiki->baseurl) {
        $randomUrls[] = $wiki->baseurl . 'Special:Random';
    }
}
$random = rand(0, count($randomUrls));
header("Location: {$randomUrls[$random]}");
