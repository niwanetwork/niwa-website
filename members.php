<?php
$topbar = 'off';
$title = 'Members';
include('_header.php');
?>

<div id="main">
<h1>NIWA Members</h1>

<?php echo "
<!-- Derived from https://codepen.io/oknoblich/pen/tfjFl -->
<!--
Copyright (c) 2017 by Oliver Knoblich (http://codepen.io/oknoblich/pen/tfjFl)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the 'Software'), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->
<style>
*, *:before, *:after {
	box-sizing: border-box;
}

input {
    display: none;
}

input:checked + label {
    border: 1px solid #BBBBBB;
    border-top: 2px solid #B22222;
    border-bottom: 0px solid;
	color: #555;
}

label {
    border: 0px solid;
	color: #BBBBBB;
	display: inline-block;
    padding: 15px 25px;
    text-align: center;
}

label:hover {
    color: #B22222;
    cursor: pointer;
}

section {
	border-top: 1px solid #BBBBBB;
    display: none;
    padding: 10px 0px 0px;
}

#tab1:checked ~ #content1,
#tab2:checked ~ #content2 {
    display: block;
}
#tab3:checked ~ #content3 {
    display: block;
}
</style>

<input id='tab1' type='radio' name='tabs' checked>
<label for='tab1'>English Members</label>

<input id='tab2' type='radio' name='tabs'>
<label for='tab2'>German Members</label>

<input id='tab3' type='radio' name='tabs'>
<label for='tab3'>Italian Members</label>

<section id='content1'>
<div class='member'>
<div class='logo'><a href='".$armswiki["url"]."'><img src='".$armswiki["logo"]."' alt='ARMS Institute' /></a></div>
<div class='description'>
<div class='links'><a href='".$armswiki["url"]."'>ARMS Institute</a> <a href='".$armswiki["discord"]."'>Discord</a></div>
ARMS Institute is a comprehensive resource for information about the Nintendo Switch game, ARMS. Founded on May 1st, 2017 and growing rapidly, the wiki strives to offer in-depth coverage of ARMS from both a competitive and casual perspective. Join us and ARM yourself with knowledge!
</div>
<p style='clear: both;'></p>
</div>

<div class='member'>
<div class='logo'><a href='".$bulbapedia["url"]."'><img src='".$bulbapedia["logo"]."' alt='Bulbapedia' /></a></div>
<div class='description'>
<div class='links'><a href='".$bulbapedia["url"]."'>Bulbapedia</a> <a href='".$bulbapedia["site"]."'>Bulbagarden</a> <a href='".$bulbapedia["forums"]."'>Forums</a> <a href='".$bulbapedia["chat"]."'>Chat</a> <a href='".$bulbapedia["discord"]."'>Discord</a> <a href='".$bulbapedia["twitter"]."'>Twitter</a> <a href='".$bulbapedia["facebook"]."'>Facebook</a></div>
A part of the Bulbagarden community, Bulbapedia was founded on December 21st, 2004 by Liam Pomfret. Everything you need to know about Pokémon can be found at Bulbapedia, whether about the games, the anime, the manga or something else entirely. With its Bulbanews section and the Bulbagarden forums, it's your one stop online place for Pokémon.
</div>
<p style='clear: both;'></p>
</div>

<div class='member'>
<div class='logo'><a href='".$dqwiki["url"]."'><img src='".$dqwiki["logo"]."' alt='Dragon Quest Wiki' /></a></div>
<div class='description'>
<div class='links'><a href='".$dqwiki["url"]."'>Dragon Quest Wiki</a> <a href='".$dqwiki["forums"]."'>Forums</a></div>
Originally founded on Wikia, the Dragon Quest Wiki was largely inactive until FlyingRagnar became an admin in late 2009.  The wiki went independent about a year later when it merged with the Dragon Quest Dictionary/Encyclopedia which was run by Zenithian and supported by the Dragon's Den.  The Dragon Quest Wiki aims to be the most complete resource for Dragon Quest information on the web.  It continues to grow in the hope that one day the series will be as popular in the rest of the world as it is in Japan.
</div>
<p style='clear: both;'></p>
</div>

<div class='member'>
<div class='logo'><a href='".$fewiki["url"]."'><img src='".$fewiki["logo"]."' alt='Fire Emblem Wiki' /></a></div>
<div class='description'>
<div class='links'><a href='".$fewiki["url"]."'>Fire Emblem Wiki</a> <a href='".$fewiki["forums"]."'>Forums</a> <a href='".$fewiki["discord"]."'>Discord</a> <a href='".$fewiki["twitter"]."'>Twitter</a> <a href='".$fewiki["facebook"]."'>Facebook</a></div>
Growing since August 26th, 2010, Fire Emblem Wiki is a relatively new project whose goal is to cover all information pertaining to the Fire Emblem series. Although it is still small, it aspires to become the most complete and accurate independent source of information on this series.
</div>
<p style='clear: both;'></p>
</div>

<div class='member'>
<div class='logo'><a href='".$fzerowiki["url"]."'><img src='".$fzerowiki["logo"]."' alt='F-Zero Wiki' /></a></div>
<div class='description'>
<div class='links'><a href='".$fzerowiki["url"]."'>F-Zero Wiki</a> <a href='".$fzerowiki["forums"]."'>Forums</a> <a href='".$fzerowiki["chat"]."'>Chat</a> <a href='".$fzerowiki["twitter"]."'>Twitter</a> <a href='".$fzerowiki["facebook"]."'>Facebook</a></div>
Founded on Wikia in November 2007, F-Zero Wiki became independent with NIWA's help in 2011. F-Zero Wiki is quickly growing into the Internet's definitive source for the world of 2200 km/h+, from pilots to machines, and is the founding part of MuteCity.org, the web's first major F-Zero community.
</div>
<p style='clear: both;'></p>
</div>

<div class='member'>
<div class='logo'><a href='".$gsuwiki["url"]."'><img src='".$gsuwiki["logo"]."' alt='Golden Sun Universe' /></a></div>
<div class='description'>
<div class='links'><a href='".$gsuwiki["url"]."'>Golden Sun Universe</a> <a href='".$gsuwiki["forums"]."'>Forums</a></div>
Originally founded on Wikia in late 2006, Golden Sun Universe has always worked hard to meet one particular goal: to be the single most comprehensive yet accessible resource on Nintendo's RPG series Golden Sun on the Internet. It became an independent wiki four years later. Covering characters and plot, documenting all aspects of the gameplay, featuring walkthroughs both thorough and bare-bones, and packed with all manner of odd and fascinating minutiae, Golden Sun Universe leaves no stone unturned!
</div>
<p style='clear: both;'></p>
</div>

<div class='member'>
<div class='logo'><a href='".$harddrop["url"]."'><img src='".$harddrop["logo"]."' alt='Hard Drop Tetris Wiki' /></a></div>
<div class='description'>
<div class='links'><a href='".$harddrop["url"]."'>Hard Drop Tetris Wiki</a> <a href='".$harddrop["forums"]."'>Forums</a> <a href='".$harddrop["discord"]."'>Discord</a> <a href='".$harddrop["twitter"]."'>Twitter</a> <a href='".$harddrop["twitch"]."'>Twitch</a></div>
The Tetris Wiki was founded by Tetris fans for Tetris fans on tetrisconcept.com in March 2006. The Tetris Wiki torch was passed to harddrop.com in July 2009. Hard Drop is a Tetris community for all Tetris players, regardless of skill or what version of Tetris you play.
</div>
<p style='clear: both;'></p>
</div>

<div class='member'>
<div class='logo'><a href='".$icaruspedia["url"]."'><img src='".$icaruspedia["logo"]."' alt='Icaruspedia' /></a></div>
<div class='description'>
<div class='links'><a href='".$icaruspedia["url"]."'>Icaruspedia</a> <a href='".$icaruspedia["chat"]."'>Chat</a> <a href='".$icaruspedia["forums"]."'>Forums</a></div>
Icaruspedia is the Kid Icarus wiki that keeps flying to new heights. After going independent on January 8th, 2012, Icaruspedia has worked to become the largest and most trusted independent source of Kid Icarus information. Just like Pit, they'll keep on fighting until the job is done.
</div>
<p style='clear: both;'></p>
</div>

<div class='member'>
<div class='logo'><a href='".$inkipedia["url"]."'><img src='".$inkipedia["logo"]."' alt='Inkipedia' /></a></div>
<div class='description'>
<div class='links'><a href='".$inkipedia["url"]."'>Inkipedia</a> <a href='".$inkipedia["discord"]."'>Discord</a> <a href='".$inkipedia["twitter"]."'>Twitter</a> <a href='".$inkipedia["facebook"]."'>Facebook</a></div>
Inkipedia is your ever-growing go-to source for all things Splatoon related. Though founded on Wikia on June 10th, 2014, Inkipedia went independent on May 18th, 2015, just days before Splatoon's release. Our aim is to cover all aspects of the series, both high and low. Come splat with us now!
</div>
<p style='clear: both;'></p>
</div>

<div class='member'>
<div class='logo'><a href='".$lylatwiki["url"]."'><img src='".$lylatwiki["logo"]."' alt='Lylat Wiki' /></a></div>
<div class='description'>
<div class='links'><a href='".$lylatwiki["url"]."'>Lylat Wiki</a> <a href='".$lylatwiki["forums"]."'>Forums</a> <a href='".$lylatwiki["twitter"]."'>Twitter</a> <a href='".$lylatwiki["facebook"]."'>Facebook</a></div>
Out of seemingly nowhere, Lylat Wiki sprung up one day in early 2010. Led by creator, Justin Folvarcik, and project head, Tacopill, the wiki has reached stability since the move to its own domain. The staff of Lylat Wiki are glad to help out the NIWA wikis and are even prouder to join NIWA's ranks as the source for information on the Star Fox series.
</div>
<p style='clear: both;'></p>
</div>

<div class='member'>
<div class='logo'><a href='".$metroidwiki["url"]."'><img src='".$metroidwiki["logo"]."' alt='Metroid Wiki' /></a></div>
<div class='description'>
<div class='links'><a href='".$metroidwiki["url"]."'>Metroid Wiki</a> <a href='".$metroidwiki["forums"]."'>Forums</a> <a href='".$metroidwiki["discord"]."'>Discord</a> <a href='".$metroidwiki["twitter"]."'>Twitter</a></div>
Metroid Wiki, founded on January 27th, 2010 by Nathanial Rumphol-Janc and Zelda Informer is a rapidly expanding wiki that covers everything Metroid, from the games, to every suit, vehicle and weapon. Metroid Wiki is still new, so show it your support and get involved in the community.
</div>
<p style='clear: both;'></p>
</div>

<div class='member'>
<div class='logo'><a href='".$nintendowiki["url"]."'><img src='".$nintendowiki["logo"]."' alt='Nintendo Wiki' /></a></div>
<div class='description'>
<div class='links'><a href='".$nintendowiki["url"]."'>Nintendo Wiki</a> <a href='".$nintendowiki["forums"]."'>Forums</a></div>
Created on May 12th, 2010, NintendoWiki (N-Wiki) is a collaborative project by the NIWA team to create an encyclopedia dedicated to Nintendo, being the company around which all other NIWA content is focused. It ranges from mainstream information such as the games and people who work for the company, to the most obscure info like patents and interesting trivia.
</div>
<p style='clear: both;'></p>
</div>

<div class='member'>
<div class='logo'><a href='".$nookipedia["url"]."'><img src='".$nookipedia["logo"]."' alt='Nookipedia' /></a></div>
<div class='description'>
<div class='links'><a href='".$nookipedia["url"]."'>Nookipedia</a> <a href='".$nookipedia["forums"]."'>Forums</a> <a href='".$nookipedia["discord"]."'>Discord</a> <a href='".$nookipedia["twitter"]."'>Twitter</a> <a href='".$nookipedia["facebook"]."'>Facebook</a></div>
Founded in August 2005 on Wikia, Nookipedia was originally known as Animal Crossing City. Shortly after its fifth year anniversary, Animal Crossing City decided to merge with the independent Animal Crossing Wiki, which in December 2010 was renamed to Nookipedia. Covering everything from the series including insects, fish, furniture, characters, tools, and much more, Nookipedia is your number one resource for everything Animal Crossing!
</div>
<p style='clear: both;'></p>
</div>

<div class='member'>
<div class='logo'><a href='".$pikipedia["url"]."'><img src='".$pikipedia["logo"]."' alt='Pikipedia' /></a></div>
<div class='description'>
<div class='links'><a href='".$pikipedia["url"]."'>Pikipedia</a> <a href='".$pikipedia["forums"]."'>Forums</a> <a href='".$pikipedia["chat"]."'>Chat</a> <a href='".$pikipedia["discord"]."'>Discord</a> <a href='".$pikipedia["twitter"]."'>Twitter</a> <a href='".$pikipedia["facebook"]."'>Facebook</a></div>
Pikipedia, also known as Pikmin Wiki, was founded by Dark Lord Revan on Wikia in December 2005. In September 2010, with NIWA's help, Pikipedia moved away from Wikia to become independent. Pikipedia is working towards their goal of being the foremost source for everything Pikmin.
</div>
<p style='clear: both;'></p>
</div>

<div class='member'>
<div class='logo'><a href='".$pikifanon["url"]."'><img src='".$pikifanon["logo"]."' alt='Pikmin Fanon' /></a></div>
<div class='description'>
<div class='links'><a href='".$pikifanon["url"]."'>Pikmin Fanon</a> <a href='".$pikifanon["forums"]."'>Forums</a> <a href='".$pikifanon["discord"]."'>Discord</a></div>
Pikmin Fanon is a Pikmin wiki for fan stories (fanon). Founded back on November 1st, 2008 by Rocky0718 as a part of Wikia, Pikmin Fanon has been independent since September 14th, 2010. Check them out for fan created stories based around the Pikmin series.
</div>
<p style='clear: both;'></p>
</div>

<div class='member'>
<div class='logo'><a href='".$smashwiki["url"]."'><img src='".$smashwiki["logo"]."' alt='SmashWiki' /></a></div>
<div class='description'>
<div class='links'><a href='".$smashwiki["url"]."'>SmashWiki</a> <a href='".$smashwiki["forums"]."'>Forums</a> <a href='".$smashwiki["chat"]."'>Chat</a> <a href='".$smashwiki["discord"]."'>Discord</a></div>
Originally two separate wikis (one on SmashBoards, the other on Wikia), SmashWiki as we know it was formed out of a merge on February 29th, 2008, becoming independent on September 28th, 2010. SmashWiki is the premier source of Smash Bros. information, from simple tidbits to detailed mechanics, and also touches on the origins of its wealth of content from its sibling franchises.
</div>
<p style='clear: both;'></p>
</div>

<div class='member'>
<div class='logo'><a href='".$starfywiki["url"]."'><img src='".$starfywiki["logo"]."' alt='Starfy Wiki' /></a></div>
<div class='description'>
<div class='links'><a href='".$starfywiki["url"]."'>Starfy Wiki</a> <a href='".$starfywiki["forums"]."'>Forums</a> <a href='".$starfywiki["chat"]."'>Chat</a><a href='".$starfywiki["twitter"]."'>Twitter</a></div>
Founded on May 30th, 2009, Starfy Wiki's one goal is to become the best source on Nintendo's elusive game series The Legendary Starfy. After gaining independence in 2011 with the help of Tappy and the wiki's original administrative team, the wiki still hopes to achieve its goal and be the best source of Starfy info for all present and future fans.
</div>
<p style='clear: both;'></p>
</div>

<div class='member'>
<div class='logo'><a href='".$strategywiki["url"]."'><img src='".$strategywiki["logo"]."' alt='StrategyWiki' /></a></div>
<div class='description'>
<div class='links'><a href='".$strategywiki["url"]."'>StrategyWiki</a> <a href='".$strategywiki["forums"]."'>Forums</a> <a href='".$strategywiki["discord"]."'>Discord</a> <a href='".$strategywiki["twitter"]."'>Twitter</a> <a href='".$strategywiki["facebook"]."'>Facebook</a></div>
StrategyWiki was founded in December 2005 by former member Brandon Suit with the idea that the existing strategy guides on the internet could be improved. Three years later, in December 2008, Scott Jacobi officially established Abxy LLC for the purpose of owning and operating StrategyWiki as a community. Their vision is to bring free, collaborative video game strategy guides to the masses, including Nintendo franchise strategy guides.
</div>
<p style='clear: both;'></p>
</div>

<div class='member'>
<div class='logo'><a href='".$mariowiki["url"]."'><img src='".$mariowiki["logo"]."' alt='Super Mario Wiki' /></a></div>
<div class='description'>
<div class='links'><a href='".$mariowiki["url"]."'>Super Mario Wiki</a> <a href='".$mariowiki["forums"]."'>Forums</a> <a href='".$mariowiki["chat"]."'>Chat</a> <a href='".$mariowiki["discord"]."'>Discord</a> <a href='".$mariowiki["twitter"]."'>Twitter</a> <a href='".$mariowiki["facebook"]."'>Facebook</a></div>
Online since August 12th, 2005, when it was founded by Steve Shinn, Super Mario Wiki has you covered for anything Mario, Donkey Kong, Wario, Luigi, Yoshi - the whole gang in fact. With its own large community in its accompanying forum, Super Mario Wiki is not only a great encyclopedia, but a fansite for you to talk anything Mario.
</div>
<p style='clear: both;'></p>
</div>

<div class='member'>
<div class='logo'><a href='".$warswiki["url"]."'><img src='".$warswiki["logo"]."' alt='Wars Wiki' /></a></div>
<div class='description'>
<div class='links'><a href='".$warswiki["url"]."'>Wars Wiki</a> <a href='".$warswiki["forums"]."'>Forums</a> <a href='".$warswiki["discord"]."'>Discord</a></div>
Created in February 2009, Wars Wiki is a small wiki community with a large heart. Founded by JoJo and Wars Central, Wars Wiki is going strong on one of Nintendo's lesser known franchises. Wars Wiki is keen to contribute to NIWA, and we're proud to be able to support them. With the Wars Central community, including forums, it's definitely worth checking out.
</div>
<p style='clear: both;'></p>
</div>

<div class='member'>
<div class='logo'><a href='".$wikibound["url"]."'><img src='".$wikibound["logo"]."' alt='WikiBound' /></a></div>
<div class='description'>
<div class='links'><a href='".$wikibound["url"]."'>WikiBound</a> <a href='".$wikibound["forums"]."'>Forums</a> <a href='".$wikibound["discord"]."'>Discord</a></div>
Founded in early 2010 by Tacopill, WikiBound strives to create a detailed database on the Mother/EarthBound games, a quaint series only having one game officially released outside of Japan. WikiBound is still a very young wiki, and needs assistance in expanding. Help spread the PK Love!
</div>
<p style='clear: both;'></p>
</div>

<div class='member'>
<div class='logo'><a href='".$wikirby["url"]."'><img src='".$wikirby["logo"]."' alt='WiKirby' /></a></div>
<div class='description'>
<div class='links'><a href='".$wikirby["url"]."'>WiKirby</a> <a href='".$wikirby["forums"]."'>Forums</a> <a href='".$wikirby["facebook"]."'>Facebook</a> <a href='".$wikirby["discord"]."'>Discord</a></div>
WiKirby. It's a wiki. About Kirby! Amongst the excitement of NIWA being founded, Josh LeJeune decided to create a Kirby Wiki, due to lack of a strong independent one online. Coming online on Janury 24th, 2010, WiKirby continues its strong launch with a dedicated community and a daily growing source of Kirby based knowledge.
</div>
<p style='clear: both;'></p>
</div>

<div class='member'>
<div class='logo'><a href='".$zeldawiki["url"]."'><img src='".$zeldawiki["logo"]."' alt='Zelda Wiki' /></a></div>
<div class='description'>
<div class='links'><a href='".$zeldawiki["url"]."'>Zelda Wiki</a> <a href='".$zeldawiki["forums"]."'>Forums</a> <a href='".$zeldawiki["discord"]."'>Discord</a> <a href='".$zeldawiki["twitter"]."'>Twitter</a> <a href='".$zeldawiki["facebook"]."'>Facebook</a></div>
Founded on April 23rd, 2005 by Jason Rappaport, Zelda Wiki is your definitive source for encyclopedic information on The Legend of Zelda series, as well as all of the latest Zelda news. Not only that, but Zelda Wiki also provides exclusive articles found nowhere else. The site is now run by its own independent staff alongside the Zelda Universe webmasters.
</div>
<p style='clear: both;'></p>
</div>
</section>

<section id='content2'>
<div class='member'>
<div class='logo'><a href='".$mariowikide["url"]."'><img src='".$mariowikide["logo"]."' alt='Mario Wiki (DE)' /></a></div>
<div class='description'>
<div class='links'><a href='".$mariowikide["url"]."'>MarioWiki</a> <a href='".$mariowikide["forums"]."'>Forums</a> <a href='".$mariowikide["facebook"]."'>Facebook</a></div>
Das MarioWiki ist eine Enzyklopädie rund um alle Themen der äußerst berühmten, von Nintendo produzierten Mario-Serie, mit den wohl populärsten Videospielcharakteren aller Zeiten in der Hauptrolle.
</div>
<p style='clear: both;'></p>
</div>".

/*<div class='member'>
<div class='logo'><a href='".$nintendowikide["url"]."'><img src='".$nintendowikide["logo"]."' alt='NintendoWiki (DE)' /></a></div>
<div class='description'>
<div class='links'><a href='".$nintendowikide["url"]."'>NintendoWiki</a></div>
Das Nintendo Wiki ist eine freie Enzyklopädie zum Thema Nintendo, welche sich besonders mit den Spielen und Konsolen dieses Unternehmens beschäftigt und alle möglichen Informationen zu den Themen um Nintendo sammeln will.
</div>
<p style='clear: both;'></p>
</div>*/

"<div class='member'>
<div class='logo'><a href='".$zeldapendium["url"]."'><img src='".$zeldapendium["logo"]."' alt='Zeldapendium' /></a></div>
<div class='description'>
<div class='links'><a href='".$zeldapendium["url"]."'>Zeldapendium</a></div>
Zeldapendium ist eine Enzyklopädie, also ein umfassendes Lexikon, die möglichst alle erhältlichen Informationen zu Nintendos Videospiel-Serie The Legend of Zelda sammeln und schön aufbereiten möchte. Unser Name setzt sich aus dem Namen des Spiels, Zelda, und dem ursprünglich lateinischen Wort für Nachschlagewerk, Compendium, zusammen. Wir verstehen uns als Mediaprojekt von Fans für Fans. Ins Leben gerufen wurde dieses Gemeinschaftsprojekt in Zusammenarbeit von Zeldafans, Zelda Kingdom und Zelda Europe.
</div>
<p style='clear: both;'></p>
</div>
</section>

<section id='content3'>

The Italian NIWA refers to themselves as <i>NiwiN</i> (<i>Network italiano wiki indipendenti Nintendo</i>).
<br><br>
<div class='member'>
<div class='logo'><a href='".$pokemoncentral["url"]."'><img src='".$pokemoncentral["logo"]."' alt='Pokémon Central Wiki (IT)' /></a></div>
<div class='description'>
<div class='links'><a href='".$pokemoncentral["url"]."'>Pokémon Central Wiki</a> <a href='".$pokemoncentral["forums"]."'>Forums</a> <a href='".$pokemoncentral["chat"]."'>Chat</a> <a href='".$pokemoncentral["twitter"]."'>Twitter</a> <a href='".$pokemoncentral["facebook"]."'>Facebook</a></div>
Pokémon Central Wiki è un'enciclopedia Pokémon in lingua italiana. È stata creata il 28 marzo 2008 da Gkx e Ipergorilla. Il 19 agosto 2010 è entrata a far parte del progetto Encyclopædiæ Pokémonis.
</div>
<p style='clear: both;'></p>
</div>

<div class='member'>
<div class='logo'><a href='".$mariowikiit["url"]."'><img src='".$mariowikiit["logo"]."' alt='Super Mario Wiki (IT)' /></a></div>
<div class='description'>
<div class='links'><a href='".$mariowikiit["url"]."'>Super Mario Wiki (IT)</a> <a href='".$mariowikiit["forums"]."'>Forums</a> <a href='".$mariowikiit["twitter"]."'>Twitter</a> <a href='".$mariowikiit["facebook"]."'>Facebook</a> <a href='".$mariowikiit["discord"]."'>Discord</a></div>
La Super Mario Wiki è un'enciclopedia su tutto ciò che riguarda la serie di Super Mario. È stata fondata il 30 novembre 2011 ed è affiliata con la Super Mario Wiki inglese e la Mario Wiki tedesca. Fa parte del Mario's Castle, primo sito italiano su Mario.
</div>
<p style='clear: both;'></p>
</div>

<div class='member'>
<div class='logo'><a href='".$wikiboundit["url"]."'><img src='".$wikiboundit["logo"]."' alt='WikiBound (IT)' /></a></div>
<div class='description'>
<div class='links'><a href='".$wikiboundit["url"]."'>WikiBound (IT)</a> <a href='".$wikiboundit["twitter"]."'>Twitter</a> <a href='".$wikiboundit["facebook"]."'>Facebook</a></div>
WikiBound è il wiki italiano interamente dedicato alla serie di EarthBound/Mother. È stata fondata il 1° novembre 2018 e si è unita al circuito NiwiN il 26 gennaio.
</div>
<p style='clear: both;'></p>
</div>

<div class='member'>
<div class='logo'><a href='".$xenopediait["url"]."'><img src='".$xenopediait["logo"]."' alt='Xenopedia (IT)' /></a></div>
<div class='description'>
<div class='links'><a href='".$xenopediait["url"]."'>Xenopedia (IT)</a> <a href='".$xenopediait["chat"]."'>Chat</a> <a href='".$xenopediait["twitter"]."'>Twitter</a> <a href='".$xenopediait["facebook"]."'>Facebook</a>  <a href='".$xenopediait["discord"]."'>Discord</a></div>
La Xenopedia è il primo wiki italiano completamente dedicato alla serie Xenoblade Chronicles, con qualche accenno alla serie Xeno in generale. È nata il 26 gennaio 2019 all'interno del circuito NiwiN.
</div>
<p style='clear: both;'></p>
</div>

</section>


"; ?>


</div>

<?php
include('_sidebar.php');
include('_footer.php');
?>
