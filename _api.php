<?php
/* This file pulls in member/affiliate data from the json files
 * and defines helper functions that may be used
 * throughout the website
 */

class NiwaDataHelper
{
	/**
	 * JSON object of member wikis
	 */
	protected $memberWikis;

	/**
	 * JSON object of affiliate wikis
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
	 * Return the member wikis
	 */
	public function getMemberWikis()
	{
		return $this->memberWikis;
	}

	/**
	 * Return the English member wikis
	 */
	public function getENMemberWikis()
	{
		return $this->memberWikis->en;
	}

	/**
	 * Return the Italian member wikis
	 */
	public function getITMemberWikis()
	{
		return $this->memberWikis->it;
	}

	/**
	 * Return the German member wikis
	 */
	public function getDEMemberWikis()
	{
		return $this->memberWikis->de;
	}

	protected function generateMemberWikiLink($url, $text)
	{
		return "<a class='member-wiki-link' href='{$url}'>{$text}</a>";
	}

	/**
	 * Generates the html string for Links with error checking for wikis that do not have
	 * one of the options.
	 *
	 * Requires a individual wiki array from the api.
	 */
	public function generateMemberWikiLinks($wiki)
	{
		// Always render a link to the wiki homepage
		$links = $this->generateMemberWikiLink($wiki->url, $wiki->title);

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
	 */
	public function getAffiliates()
	{
		return $this->affiliates;
	}
}
