<?php
/**
 * This file pulls in member/affiliate data from the json files
 * and defines helper functions that may be used throughout the website
 */

class NiwaDataHelper
{
	/**
	 * JSON object of member wikis
	 * 
	 * @var object
	 */
	protected $memberWikis;

	/**
	 * JSON object of affiliate wikis
	 * 
	 * @var object
	 */
	protected $affiliates;

	function __construct()
	{
		$this->memberWikis = json_decode(
			file_get_contents("data/members.json")
		);
		$this->affiliates = json_decode(
			file_get_contents("data/affiliates.json")
		);
	}

	/**
	 * Return all member wikis or if language code given,
	 * all wikis for that language code.
	 * 
	 * @param string $languageCode
	 * @return object
	 */
	public function getMemberWikis($languageCode = null)
	{
		if ($languageCode) {
			return $this->memberWikis->{$languageCode};
		}
		return $this->memberWikis;
	}

	/**
	 * Generates a link for the wiki member list
	 * 
	 * @param string $url The anchor tag href
	 * @param string $text The anchor tag display text
	 * @return string
	 */
	protected function generateMemberWikiLink($url, $text)
	{
		return "<a class='member-wiki-link' href='{$url}'>{$text}</a>";
	}

	/**
	 * Generates the html string for Links with error checking for wikis that do not have
	 * one of the options.
	 *
	 * Requires a individual wiki array from the api.
	 * 
	 * @param object $wiki
	 * @return string $links
	 */
	public function generateMemberWikiLinks($wiki)
	{
		// Always render a link to the wiki homepage
		$links = $this->generateMemberWikiLink(str_replace( '$1', $wiki->mainpage, $wiki->url ), $wiki->title);

		if (isset($wiki->site)) {
			$links .= $this->generateMemberWikiLink($wiki->site, $wiki->siteName);
		};
		if (isset($wiki->forums)) {
			$links .= $this->generateMemberWikiLink($wiki->forums, "Forums");
		};
		if (isset($wiki->chat)) {
			$links .= $this->generateMemberWikiLink($wiki->chat, "Chat");
		};
		if (isset($wiki->discord)) {
			$links .= $this->generateMemberWikiLink($wiki->discord, "Discord");
		};
		if (isset($wiki->twitter)) {
			$links .= $this->generateMemberWikiLink($wiki->twitter, "Twitter");
		};
		if (isset($wiki->twitch)) {
			$links .= $this->generateMemberWikiLink($wiki->twitch, "Twitch");
		};
		if (isset($wiki->facebook)) {
			$links .= $this->generateMemberWikiLink($wiki->facebook, "Facebook");
		};

		return $links;
	}

	/**
	 * Return the affiliates
	 * 
	 * @return object
	 */
	public function getAffiliates()
	{
		return $this->affiliates;
	}
}
