<?php
$rurl = array(
				"http://bulbapedia.bulbagarden.net/wiki/Special:Random",
				"https://armswiki.org/wiki/Special:Random",
				"https://fireemblemwiki.org/wiki/Special:Random",
				"http://goldensunwiki.net/Special:Random",
				"http://starfoxwiki.info/Special:Random",
				"http://niwanetwork.org/wiki/index.php/Special:Random",
				"http://nookipedia.com/wiki/Special:Random",
				"https://kidicaruswiki.org/wiki/Special:Random",
				"https://metroidwiki.org/wiki/Special:Random",
				"https://www.pikminwiki.com/Special:Random",
				"https://splatoonwiki.org/wiki/Special:Random",
				"https://www.ssbwiki.com/Special:Random",
				"http://starfywiki.org/Special:Random",
				"https://www.mariowiki.com/Special:Random",
				"http://wikibound.info/Special:Random",
				"http://wikirby.com/wiki/Special:Random",
				"http://zeldawiki.org/Special:Random",
				"http://dragon-quest.org/wiki/Special:Random",
				"http://mutecity.org/wiki/Special:Random",
				"https://strategywiki.org/wiki/Special:Random",
				"https://warswiki.org/wiki/Special:Random",
);
$random=rand(0,count($rurl));
header("Location: $rurl[$random]");
?>
