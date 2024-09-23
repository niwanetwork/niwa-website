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
	
	/**
	 * JSON object of wiki Cross-Wiki Weekend guides
	 * 
	 * @var object
	 */
	protected $cww;

	const URL_REPLACE_STRING = "$1";

	function __construct()
	{
		$this->memberWikis = json_decode(
			file_get_contents("data/members.json")
		);
		$this->affiliates = json_decode(
			file_get_contents("data/affiliates.json")
		);
		$this->cww = json_decode(
			file_get_contents("data/cww.json")
		);
	}

	/**
	 * Return all member wikis or if language code given,
	 * all wikis for that language code.
	 * $includeFormer may be set to true to retrieve former members.
	 * 
	 * @param string $languageCode
	 * @param string $former
	 * @return object
	 */
	public function getMemberWikis($languageCode = null, $includeFormer = null)
	{
		$filteredMembers = [];

		if ($languageCode) {
			// If specific language is requested...
			if($includeFormer) {
				$filteredMembers = $this->memberWikis->{$languageCode};
			} else {
				$filteredMembers = array_filter(
				$this->memberWikis->{$languageCode}, 
				function($val){ 
					return !($val->former ?? FALSE);
				});
			}
		} else {
			// If all languages are requested...

			// Merge language arrays:
			$allMemberWikis = [];
			foreach ($this->memberWikis as $memberWikis) {
				$allMemberWikis = array_merge($allMemberWikis, $memberWikis);
			}
			
			if ($includeFormer) {
				$filteredMembers = $allMemberWikis;
			} else {
				$filteredMembers = array_filter(
				$allMemberWikis, 
				function($val){ 
					return !($val->former ?? FALSE);
				});
			}
		}

		return $filteredMembers;
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

	/**
	 * Return count of all member wikis or if language code given,
	 * count of all wikis for that language code.
	 * 
	 * @param string $languageCode
	 * @return int
	 */
	public function getMemberWikiCount($languageCode = null)
	{
		if ($languageCode) {
			return count(array_filter($this->memberWikis->{$languageCode}, function($val) {
				return !($val->former ?? FALSE);
			}));
		}

		$wikiCount = 0;
		foreach ($this->memberWikis as $languageMemberWikis) {
			$wikiCount += count(array_filter($languageMemberWikis, function($val){
				return !($val->former ?? FALSE);
			}));
		}
		return $wikiCount;
	}

	/**
	 * Return count of all affiliates
	 * 
	 * @return int
	 */
	public function getAffiliateCount()
	{
		return count($this->affiliates);
	}

	/**
	 * Returns a link for the given wiki's interwiki url and page
	 * 
	 * @param string $url Interwiki URL
	 * @param string $page Wiki page
	 * @return string
	 */
	public function getWikiLink($url, $page = "")
	{
		return str_replace(self::URL_REPLACE_STRING, urlencode($page), $url);
	}

	/**
	 * Returns a given wiki's mainpage
	 * 
	 * @param object $wiki
	 * @return string
	 */
	public function getWikiMainpage($wiki)
	{
		return $this->getWikiLink($wiki->url, $wiki->mainpage);
	}

	/**
	 * Generates a link for the member or affiliate
	 * 
	 * @param string $url The anchor tag href
	 * @param string $text The anchor tag display text
	 * @return string
	 */
	protected function generateMemberLink($url, $text)
	{
		return "<a class='member-wiki-link' href='{$url}'>{$text}</a>";
	}
	
	/**
	 * Return all member wikis or if language code given,
	 * all wikis for that language code.
	 * 
	 * @param string $languageCode
	 * @return object
	 */
	public function getCWW($year, $languageCode = null)
	{
		if ($languageCode) {
			return $this->cww->{$year}->{$languageCode};
		}
		return $this->cww->{$year};
	}

	/**
	 * Generates the HTML string for links with error checking for wikis that do not have
	 * one of the options.
	 *
	 * Requires a individual wiki array from the api.
	 * 
	 * @param object $member
	 * @return string $links
	 */
	public function generateMemberLinks($member)
	{
		// Check if wiki mainpage is specified or if we should just use the URL as-is
		if (isset($member->mainpage)) {
			$links = $this->generateMemberLink(
				$this->getWikiMainpage($member),
				$member->title
			);
		} else {
			$links = $this->generateMemberLink(
				$member->url,
				$member->title
			);
		}

		if (isset($member->site)) {
			$links .= $this->generateMemberLink($member->site, $member->siteName);
		};
		if (isset($member->forums)) {
			$links .= $this->generateMemberLink($member->forums, "Forums");
		};
		if (isset($member->chat)) {
			$links .= $this->generateMemberLink($member->chat, "Chat");
		};
		if (isset($member->discord)) {
			$links .= $this->generateMemberLink($member->discord, '<img src="/images/discord.png" alt="Discord" width="20" />');
		};
		if (isset($member->instagram)) {
			$links .= $this->generateMemberLink($member->instagram, '<img src="/images/instagram.png" alt="Instagram" width="20" />');
		};
		if (isset($member->twitter)) {
			$links .= $this->generateMemberLink($member->twitter, '<img src="/images/twitter.png" alt="Twitter" width="20" />');
		};
		if (isset($member->mastodon)) {
			$links .= $this->generateMemberLink($member->mastodon, '<img src="/images/mastodon.png" alt="Mastodon" width="20" />');
		};
		if (isset($member->bluesky)) {
			$links .= $this->generateMemberLink($member->bluesky, '<img src="/images/bluesky.png" alt="Bluesky" width="20" />');
		};
		if (isset($member->twitch)) {
			$links .= $this->generateMemberLink($member->twitch, '<img src="/images/twitch.png" alt="Twitch" width="20" />');
		};
		if (isset($member->facebook)) {
			$links .= $this->generateMemberLink($member->facebook, '<img src="/images/facebook.png" alt="Facebook" width="20" />');
		};
		if (isset($member->tumblr)) {
			$links .= $this->generateMemberLink($member->tumblr, '<img src="/images/tumblr.png" alt="Tumblr" width="20" />');
		};
		if (isset($member->reddit)) {
			$links .= $this->generateMemberLink($member->reddit, '<img src="/images/reddit.png" alt="Reddit" width="20" />');
		};
		if (isset($member->telegram)) {
			$links .= $this->generateMemberLink($member->telegram, '<img src="/images/telegram.png" alt="Telegram" width="20" />');
		};
		if (isset($member->youtube)) {
			$links .= $this->generateMemberLink($member->youtube, '<img src="/images/youtube.png" alt="YouTube" width="20" />');
		};

		return $links;
	}
}
