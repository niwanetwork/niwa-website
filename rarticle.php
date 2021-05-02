<?php
include('_api.php');

$randomUrls = [];
foreach ($memberWikis->en as $wiki) {
    if ($wiki->baseurl) {
        $randomUrls[] = str_replace( '$1', 'Special:Random', $wiki->url );
    }
}
$random = rand(0, count($randomUrls));
header("Location: {$randomUrls[$random]}");
