<?php
$rurl = array(
				"http://www.niwanetwork.org/wiki/Special:Random",
				"http://www.starfywiki.org/wiki/Special:Random",
				"https://armswiki.org/wiki/Special:Random",
				"https://bulbapedia.bulbagarden.net/wiki/Special:Random",
				"https://dragon-quest.org/wiki/Special:Random",
				"https://fireemblemwiki.org/wiki/Special:Random",
				"https://goldensunwiki.net/wiki/Special:Random",
				"https://kidicaruswiki.org/wiki/Special:Random",
				"https://www.mariowiki.com/Special:Random",
				"https://metroidwiki.org/wiki/Special:Random",
				"https://mutecity.org/wiki/Special:Random",
				"https://nookipedia.com/wiki/Special:Random",
				"https://www.pikminwiki.com/Special:Random",
				"https://splatoonwiki.org/wiki/Special:Random",
				"https://www.ssbwiki.com/Special:Random",
				"https://starfoxwiki.info/wiki/Special:Random",
				"https://strategywiki.org/wiki/Special:Random",
				"https://warswiki.org/wiki/Special:Random",
				"https://wikibound.info/wiki/Special:Random",
				"https://wikirby.com/wiki/Special:Random",
				"https://zeldawiki.org/Special:Random",
);
$random=rand(0,count($rurl));
header("Location: $rurl[$random]");
?>
