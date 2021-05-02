<?php

/* This file pulls in member data from the json file
 * and defines helper functions that may be used
 * throughout the website
 */

// Pull member wiki info form json and store as memberWikis
// Can iterate and access properties like a php object.
$memberWikis = json_decode(file_get_contents("data/members.json"));


/* Generates the html string for Links with error checking for wikis that do not have
 * one of the options.
 *
 * Requires a individual wiki array from the api.
 */
function generateLinks($wiki)
{
	// Always render a link to the wiki homepage
	$links = "<a href='" . str_replace( '$1', $wiki->mainpage, $wiki->url ) . "'>" . $wiki->title . "</a> ";

	if (isset($wiki->site)) {
		$links .= "<a href='" . $wiki->site . "'>" . $wiki->siteName . "</a>";
	};
	if (isset($wiki->forums)) {
		$links .= "<a href='" . $wiki->forums . "'>Forums</a>";
	};
	if (isset($wiki->chat)) {
		$links .= "<a href='" . $wiki->chat . "'>Chat</a>";
	};
	if (isset($wiki->discord)) {
		$links .= "<a href='" . $wiki->discord . "'>Discord</a>";
	};
	if (isset($wiki->twitter)) {
		$links .= "<a href='" . $wiki->twitter . "'>Twitter</a>";
	};
	if (isset($wiki->twitch)) {
		$links .= "<a href='" . $wiki->twitch . "'>Twitch</a>";
	};
	if (isset($wiki->facebook)) {
		$links .= "<a href='" . $wiki->facebook . "'>Facebook</a>";
	};

	return $links;
}


/**
 * Return the affiliates array
 */
function getAffiliates()
{
	$affiliates = json_decode(file_get_contents("data/affiliates.json"));
	return $affiliates;
}
