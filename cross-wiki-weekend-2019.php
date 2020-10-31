<?php
$title = 'Cross-Wiki Weekend 2019';
include('_header.php');
?>

<style>
	a.special:link {color: #B22222 !important;}
	a.special:visited {color: #B22222 !important;}
	a.special:hover {color: #B22222 !important;}
	a.special:active {color: #B22222 !important;}
</style>
<!-- Tabs derived from https://codepen.io/oknoblich/pen/tfjFl -->
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

<div id="main">

	<h1>Cross-Wiki Weekend 2019</h1>

	<input id='tab1' type='radio' name='tabs' checked>
	<label for='tab1'>English</label>

	<input id='tab2' type='radio' name='tabs'>
	<label for='tab2'>Italian</label>

	<section id='content1'>
		To celebrate Nintendo's birthday on September 23<sup>rd</sup>, NIWA is hosting a <b>Cross-Wiki Weekend Event</b>!
		<br><br>
		From <b>September 20<sup>th</sup> - 22<sup>nd</sup></b>, everyone is invited to constructively edit NIWA wikis that they have never (or infrequently) edited before.
		Whether it's adding some new content, uploading an image, or adding a reference, we want you to take your experience and love for Nintendo to a new wiki.
		<br><br>
		At the end of the event, one random participant will win a <b>$20 Nintendo e-Shop Gift Card</b>! At the end of the event, submit your contributions using the button at the bottom of this page.
		<br><br>

		<h1 id="Goals">Goals</h1>

		Why are we hosting this event? In addition to being a fun way of celebrating Nintendo's birthday, we hope this event...
		<ul>
			<li>...exposes editors to new wikis</li>
			<li>...promotes cooperation between NIWA wikis</li>
			<li>...provides more support for smaller wikis</li>
			<li>...creates some new long-term editors</li>
		</ul>

		<div style="width: 100%; text-align: center;"><img src="/images/nintendo_characters.png" alt="Some of Nintendo's finest." width="400px"></div>

		<br>

		<h1 id="Rules">Rules</h1>

		Before participating, please take a few moments to review these rules - especially if you want a shot at the prize!

		<ul>
			<li>The event starts at 00:01 (UTC) on Friday, September 20, and runs until 23:59 (UTC) on Sunday, September 22.</li>
			<li>To participate, contribute to at least one <a class="special" href="http://niwanetwork.org/members.php">NIWA wiki</a> that you have never (or rarely) contributed to.</li>
			<li>To simplify contribution tracking, participants must have an account on the wiki(s) they are contributing to for a chance to win.</li>
			<li>Each contributor's edits are ranked 1 to 10. The more substantial your contributions are, the higher chance you have of winning the prize!</li>
			<li>Contributions should improve the wiki in some way. More substantial contributions mean more entries into the contest. Try some of the following:
			<ul>
				<li>Adding new prose to articles.</li>
				<li>Copy-editing large sections or entire articles.</li>
				<li>Adding references to verify information.</li>
				<li>Uploading photos.</li>
				<li>Creating new articles.</li>
				<li>Categorizing pages.</li>
				<li>Adding template documentation.</li>
			</ul>
			<li>As long as you make at least one non-minor edit, you're eligible to win the prize.</li>
			<li>Each wiki is a bit different! Become familiar with the differing guidelines, styling, and policies of each wiki. Reach out to each wiki's help resources if you have any questions.</li>
			<li>At the end of the event, fill out and submit the participation form below by <b>September 30<sup>th</sup></b> for a chance to win the prize. Even if you don't want the prize, we appreciate you filling the form out for statistical purposes.</li>
		</ul>

		<br>

		<a name="guide"></a>
		<h1 id="Editing Guide">Editing Guide</h1>

		Below is a list of participating wikis and links to to-do lists and guides.
		Some wikis have created guides just for this event, which have been linked in bold.
		If you're unsure of where to begin, you'll hopefully find these links useful!
		Take a moment to familiarize yourself with each wiki's rules and customs before diving in.

		<br>

		<h3 style="text-align: center;">English Wikis</h3>
		<table style="margin: 5px; width: 100%;">
			<tr>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="font-weight: normal;" href="https://armswiki.org/wiki/ARMS_Institute:To_Do"><img src="/images/logos/armswiki.png" alt="ARMS Institute" width="90px"><br/>To-Do List</a></td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="font-weight: normal;" href="https://bulbapedia.bulbagarden.net/wiki/Help:Contents"><img src="/images/logos/bulbapedia.png" alt="Bulbapedia" width="90px"><br/>Contents</a></td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="font-weight: normal;" href="http://dragon-quest.org/wiki/Dragon_Quest_Wiki:Community_portal"><img src="/images/logos/dragonquestwiki.png" alt="Dragon Quest Wiki" width="90px"><br/>Community Portal</a></td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="color:#53C651;" href="https://www.fireemblemwiki.org/wiki/Fire_Emblem_Wiki:Cross-Wiki_Weekend"><img src="/images/logos/fireemblemwiki.png" alt="Fire Emblem Wiki" width="90px"><br/><b>Cross-Wiki Guide</b></a></td>
			</tr>
			<tr>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="color:#53C651;" href="http://mutecity.org/wiki/F-Zero_Wiki:Cross-Wiki_Weekend"><img src="/images/logos/fzerowiki.png" alt="F-Zero Wiki" width="90px"><br/><b>Cross-Wiki Guide</b></a></td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="font-weight: normal;" href="https://goldensunwiki.net/wiki/Help:Contents"><img src="/images/logos/goldensununiverse.png" alt="Golden Sun Universe" width="90px"><br/>Contents</a></td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="font-weight: normal;" href="https://harddrop.com/wiki/Tetris_Wiki"><img src="/images/logos/harddrop.png" alt="Hard Drop Wiki" width="90px"><br/>Main Page</a></td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="color:#53C651;" href="http://www.kidicaruswiki.org/Icaruspedia:Cross-Wiki_Weekend"><img src="/images/logos/icaruspedia.png" alt="Icaruspedia" width="90px"><br/>Cross-Wiki Guide</a></td>
			</tr>
			<tr>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="color:#53C651;" href="https://splatoonwiki.org/wiki/Inkipedia:Cross-Wiki_Weekend"><img src="/images/logos/inkipedia.png" alt="Inkipedia" width="90px"><br/><b>Cross-Wiki Guide</b></a></td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="color:#53C651;" href="https://starfoxwiki.info/wiki/Lylat_Wiki:Cross-Wiki_Weekend"><img src="/images/logos/lylatwiki.png" alt="Lylat Wiki" width="90px"><br/>Cross-Wiki Guide</a></td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="font-weight: normal;" href="https://www.metroidwiki.org/wiki/Metroid_Wiki:Maintenance"><img src="/images/logos/metroidwiki.png" alt="Metroid Wiki" width="90px"><br/>Maintenance</a></td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="color:#53C651;" href="http://www.niwanetwork.org/wiki/NintendoWiki:Cross-Wiki_Weekend"><img src="/images/logos/nintendowiki.png" alt="NintendoWiki" width="90px"><br/><b>Cross-Wiki Guide</b></a></td>
			</tr>
			<tr>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="color:#53C651;" href="https://nookipedia.com/wiki/Nookipedia:Cross-Wiki_Weekend"><img src="/images/logos/nookipedia.png" alt="Nookipedia" width="90px"><br/><b>Cross-Wiki Guide</b></a></td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="color:#53C651;" href="https://www.pikminwiki.com/Pikipedia:Cross-Wiki_Weekend"><img src="/images/logos/pikipedia.png" alt="Pikipedia" width="90px"><br/><b>Cross-Wiki Guide</b></a></td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="color:#53C651;" href="https://www.ssbwiki.com/SmashWiki:Cross-Wiki_Weekend"><img src="/images/logos/smashwiki.png" alt="SmashWiki" width="90px"><br/><b>Cross-Wiki Guide</b></a></td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="font-weight: normal;" href="http://www.starfywiki.org/wiki/Starfy_Wiki:Community_portal"><img src="/images/logos/starfywiki.png" alt="Starfy Wiki" width="90px"><br/>Community Portal</a></td>
			</tr>
			<tr>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="font-weight: normal;" href="https://strategywiki.org/wiki/StrategyWiki:Community_Portal"><img src="/images/logos/strategywiki.png" alt="StrategyWiki" width="90px"><br/>Community Portal</a></td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="color:#53C651;" href="https://www.mariowiki.com/MarioWiki:Cross-Wiki_Weekend"><img src="/images/logos/mariowiki.png" alt="Super Mario Wiki" width="90px"><br/><b>Cross-Wiki Guide</b></a></td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="color:#53C651;" href="https://wikibound.info/wiki/WikiBound:Cross-Wiki_Weekend"><img src="/images/logos/wikibound.png" alt="WikiBound" width="90px"><br/><b>Cross-Wiki Guide</b></a></td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="color:#53C651;" href="http://wikirby.com/wiki/WiKirby:Cross-Wiki_Weekend"><img src="/images/logos/wikirby.png" alt="WiKirby" width="90px"><br/><b>Cross-Wiki Guide</b></a></td>
			</tr>
			<tr>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="color:#53C651;" href="https://zelda.gamepedia.com/Zelda_Wiki:Cross-Wiki_Weekend"><img src="/images/logos/zeldawiki.png" alt="Zelda Wiki" width="90px"><br/><b>Cross-Wiki Guide</b></a></td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"> </td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"> </td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"> </td>
			</tr>
		</table>

		<h3 style="text-align: center;">Italian Wikis</h3>
		<table style="margin: 5px; width: 100%;">
			<tr>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="color:#53C651;" href="https://wiki.pokemoncentral.it/Meta:Cross-Wiki_Weekend"><img src="/images/logos/pokemoncentral.png" alt="Pokémon Central Wiki" width="90px"><br/>Cross-Wiki Guide</a></td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="color:#53C651;" href="https://www.mariocastle.it/wiki/Super_Mario_Wiki:Cross-Wiki_Weekend"><img src="/images/logos/mariowikiit.png" alt="Super Mario Wiki (IT)" width="90px"><br/>Cross-Wiki Guide</a></td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="color:#53C651;" href="https://www.xenopedia.it/Meta:Cross-Wiki_Weekend"><img src="/images/logos/xenopediait.png" alt="Xenopedia (IT)" width="90px"><br/>Cross-Wiki Guide</a></td>
			</tr>
		</table>

		<br>
		<div style="text-align: center; width: 100%;"><i>Donkey Kong Wiki, WarsWiki, and Pikmin Fanon are not participating this year.</i></div>
		<br>

		<h1 id="Form">Form</h1>
		<style>
			.button {
				-webkit-appearance: button;
				-moz-appearance: button;
				appearance: button;
				background-color: #7F7F7F;
				border: none;
				padding: 15px 15px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
			}
		</style>

		At the end of the event, please report your contributions by filling out the following form by <b>September 30<sup>th</sup></b>.
		Filling out the form is also how you enter yourself for a chance to win the prize.
		<br><br>
		<div style="width: 100%; text-align: center;">
			<div class="button">Submit Contributions</div>
		</div>

		<br><br>

		<h1 id="Drawing">Drawing</h1>
		The winner of the contest is determined by random draw.
		Each person's contributions are rated on a scale of 1 to 5; the more substantial one's contributions, the greater the chance of winning.
		Be sure to make some substantive edits for a better shot at the prize!

		<br><br>

		While event organizers are free to participate, they are disallowed from entering the drawing and winning the prize.

		<br><br>

		<h1 id="Conclusion">Conclusion</h1>
		Thank you to everyone who participated! We received a total of 13 valid entries from editors both new and old. Participants from 7 NIWA wikis, as well as the outside public, contributed to 11 NIWA wikis.

		Thank you to the following participants:
		<table style="width: 100%;">
			<tr>
				<td style="width: 50%; vertical-align: top;">
					<ul>
						<li>Alex95</li>
						<li>Alternis</li>
						<li>Cookies and Creme</li>
						<li>Coolpic783</li>
						<li>Doomhiker</li>
						<li>Duraner Hawkeye</li>
						<li>Koopastefo</li>
					</ul>
				</td>
				<td style="width: 50%; vertical-align: top;">
					<ul>
						<li>Mud</li>
						<li>Phantom Dusclops'92</li>
						<li>Snorlite</li>
						<li>Sunmarsh</li>
						<li>Viperision</li>
						<li>tent2</li>
					</ul>
				</td>
			</tr>
		</table>

		Finally, the moment we've all been waiting for - the winner of the $20 eShop Gift Card was <b>Cookies and Creme</b> from SmashWiki. Congratulations!

		<br><br>

		We look forward to hosting this event again next year!

		<br><br>

		<hr>

		<br>

		Event organizers this year were <a class="special" href="https://www.pikminwiki.com/User:Espyo">Espyo</a>, <a class="special" href="https://www.ssbwiki.com/User:Serpent_King">Serpent King</a>, <a class="special" href="https://www.mariocastle.it/wiki/Utente:Stormkyleis">Stormkyleis</a>, <a class="special" href="https://nookipedia.com/wiki/User:SuperHamster">SuperHamster</a>, and <a class="special" href="https://fireemblemwiki.org/wiki/User:Tacopill">tacopill</a>.
		An extra thanks to everyone who contributed to the event with suggestions and guides.

		<br><br>

		<span style="font-size: 70%;">
			Disclaimer: There is no purchase necessary to win. Participants need only meet the requirements listed in the rules above.
			In questionable cases, final discretion of eligibility is determined by the host of the event.
			The prize will be a $20 Nintendo e-Shop Gift Card.
			If participant is in a country where an e-Shop Gift Card is not usable (region restrictions, no e-Shop support, etc.), another prize of equal value will be coordinated with the winner.
			Winner is determined by a random drawing after contributions are judged on a 1-10 scale by event organizers. Organizers cannot win the prize.
		</span>
	</section>

	<section id='content2'>
		L'anniversario di Nintendo cadr&#224; il 23 settembre. Per celebrarlo NIWA sta organizzando un <b>Cross-Wiki Weekend</b>!
		<br><br>
		Dal <b>20 al 22 settembre</b> siete tutti invitati a modificare costruttivamente almeno un wiki di NIWA al quale non avete mai (o raramente) contribuito.
		Che si tratti di inserire dei nuovi contenuti, caricare un'immagine o aggiungere un riferimento, il nostro desiderio &#232; che portiate la vostra esperienza e la vostra passione su un nuovo wiki.
		<br><br>
		Al termine dell'evento, un partecipante sorteggiato casualmente vincer&#224; una <b>Nintendo eShop Card da $20</b>! Quando l'evento sar&#224; concluso potrete inviare le vostre modifiche attraverso il pulsante situato in fondo a questa pagina.
		<br><br>

		<h1 id="Goals">Obiettivi</h1>

		Perch&#233; stiamo organizzando questo evento? Oltre ad essere un modo divertente per celebrare l'anniversario di Nintendo, ci auguriamo che esso...
		<ul>
			<li>... esponga gli utenti a nuovi wiki</li>
			<li>... promuova la collaborazione tra wiki di NIWA</li>
			<li>... fornisca maggiore sostegno per i wiki pi&#249; piccoli</li>
			<li>... risulti nella nascita di nuovi utenti abituali</li>
		</ul>

		<div style="width: 100%; text-align: center;"><img src="/images/nintendo_characters.png" alt="La cr&#232;me de la cr&#232;me di Nintendo." width="400px"></div>

		<br>

		<h1 id="Rules">Regole</h1>

		Prima di partecipare, chiediamo gentilmente un attimo del vostro tempo per leggere queste regole... specialmente se volete una possibilit&#224; di vincere il premio!

		<ul>
			<li>L'evento inizia alle 02:01 ora italiana (00:01 UTC) di venerd&#236; 20 settembre e dura fino alle 01:59 ora italiana di luned&#236; 23 settembre (23:59 UTC di domenica 22 settembre).</li>
			<li>Per partecipare, contribuite ad almeno un <a class="special" href="http://niwanetwork.org/members.php">wiki di NIWA</a> al quale non avete mai (o raramente) contribuito.</li>
			<li>Per tenere traccia dei vostri contributi pi&#249; facilmente, i partecipanti devono possedere un account nei wiki ai quali contribuiscono per avere una possibilit&#224; di vincere.</li>
			<li>I contributi di ciascun utente riceveranno una valutazione da 1 a 5. Pi&#249; sostanziosi saranno i vostri contributi, pi&#249; possibilit&#224; avrete di vincere!</li>
			<li>I contributi dovrebbero migliorare i wiki in qualche modo. I contributi pi&#249; sostanziosi risulteranno in maggiori possibilit&#224; di vittoria. Per esempio, provate a:
			<ul>
				<li>Aggiungere testo all'interno delle voci.</li>
				<li>Effettuare correzioni all'interno di paragrafi lunghi o voci intere;</li>
				<li>Aggiungere riferimenti per verificare la provenienza delle informazioni;</li>
				<li>Caricare immagini;</li>
				<li>Creare nuove voci;</li>
				<li>Aggiungere le categorie appropriate alle pagine;</li>
				<li>Aggiungere pi&#249; documentazione in merito ai template.</li>
			</ul>
			<li>Purch&#233; apportiate almeno una modifica non minore, sarete idonei ad essere sorteggiati per la vittoria del premio.</li>
			<li>Ciascun wiki &#232; leggermente differente! Prima di apportare modifiche, familiarizzate con le linee guida, i manuali di stile e le pratiche adottate da ciascun wiki. Per qualsiasi domanda, consultate le pagine di aiuto dei rispettivi wiki.</li>
			<li>Alla fine dell'evento, compilate e inviate il modulo di partecipazione sottostante entro il <b>30 settembre</b> per avere una possibilit&#224; di vincere il premio. Anche se non doveste volere il premio, apprezzeremmo se compilaste il modulo per fini statistici.</li>
		</ul>

		<br>

		<h1 id="Editing Guide">Manuali di stile</h1>

		Di seguito trovate una lista dei wiki partecipanti, le rispettive guide e le liste di cose da fare.
		Alcuni wiki hanno creato delle guide appositamente per questo evento, evidenziate in grassetto.
		Se non siete sicuri di dove iniziare, ci auguriamo che questi link possano tornarvi utili!
		Prendete un momento per familiarizzare con le regole e le abitudini di ciascun wiki prima di mettervi al lavoro.

		<br>

		<h3 style="text-align: center;">Wiki in inglese</h3>
		<table style="margin: 5px; width: 100%;">
			<tr>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="font-weight: normal;" href="https://armswiki.org/wiki/ARMS_Institute:To_Do"><img src="/images/logos/armswiki.png" alt="ARMS Institute" width="90px"><br/>To-Do List</a></td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="font-weight: normal;" href="https://bulbapedia.bulbagarden.net/wiki/Help:Contents"><img src="/images/logos/bulbapedia.png" alt="Bulbapedia" width="90px"><br/>Contents</a></td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="font-weight: normal;" href="http://dragon-quest.org/wiki/Dragon_Quest_Wiki:Community_portal"><img src="/images/logos/dragonquestwiki.png" alt="Dragon Quest Wiki" width="90px"><br/>Community Portal</a></td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="color:#53C651;" href="https://www.fireemblemwiki.org/wiki/Fire_Emblem_Wiki:Cross-Wiki_Weekend"><img src="/images/logos/fireemblemwiki.png" alt="Fire Emblem Wiki" width="90px"><br/><b>Cross-Wiki Guide</b></a></td>
			</tr>
			<tr>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="color:#53C651;" href="http://mutecity.org/wiki/F-Zero_Wiki:Cross-Wiki_Weekend"><img src="/images/logos/fzerowiki.png" alt="F-Zero Wiki" width="90px"><br/><b>Cross-Wiki Guide</b></a></td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="font-weight: normal;" href="https://goldensunwiki.net/wiki/Help:Contents"><img src="/images/logos/goldensununiverse.png" alt="Golden Sun Universe" width="90px"><br/>Contents</a></td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="font-weight: normal;" href="https://harddrop.com/wiki/Tetris_Wiki"><img src="/images/logos/harddrop.png" alt="Hard Drop Wiki" width="90px"><br/>Main Page</a></td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="color:#53C651;" href="http://www.kidicaruswiki.org/Icaruspedia:Cross-Wiki_Weekend"><img src="/images/logos/icaruspedia.png" alt="Icaruspedia" width="90px"><br/>Cross-Wiki Guide</a></td>
			</tr>
			<tr>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="color:#53C651;" href="https://splatoonwiki.org/wiki/Inkipedia:Cross-Wiki_Weekend"><img src="/images/logos/inkipedia.png" alt="Inkipedia" width="90px"><br/><b>Cross-Wiki Guide</b></a></td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="color:#53C651;" href="https://starfoxwiki.info/wiki/Lylat_Wiki:Cross-Wiki_Weekend"><img src="/images/logos/lylatwiki.png" alt="Lylat Wiki" width="90px"><br/>Cross-Wiki Guide</a></td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="font-weight: normal;" href="https://www.metroidwiki.org/wiki/Metroid_Wiki:Maintenance"><img src="/images/logos/metroidwiki.png" alt="Metroid Wiki" width="90px"><br/>Maintenance</a></td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="color:#53C651;" href="http://www.niwanetwork.org/wiki/NintendoWiki:Cross-Wiki_Weekend"><img src="/images/logos/nintendowiki.png" alt="NintendoWiki" width="90px"><br/><b>Cross-Wiki Guide</b></a></td>
			</tr>
			<tr>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="color:#53C651;" href="https://nookipedia.com/wiki/Nookipedia:Cross-Wiki_Weekend"><img src="/images/logos/nookipedia.png" alt="Nookipedia" width="90px"><br/><b>Cross-Wiki Guide</b></a></td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="color:#53C651;" href="https://www.pikminwiki.com/Pikipedia:Cross-Wiki_Weekend"><img src="/images/logos/pikipedia.png" alt="Pikipedia" width="90px"><br/><b>Cross-Wiki Guide</b></a></td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="color:#53C651;" href="https://www.ssbwiki.com/SmashWiki:Cross-Wiki_Weekend"><img src="/images/logos/smashwiki.png" alt="SmashWiki" width="90px"><br/><b>Cross-Wiki Guide</b></a></td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="font-weight: normal;" href="http://www.starfywiki.org/wiki/Starfy_Wiki:Community_portal"><img src="/images/logos/starfywiki.png" alt="Starfy Wiki" width="90px"><br/>Community Portal</a></td>
			</tr>
			<tr>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="font-weight: normal;" href="https://strategywiki.org/wiki/StrategyWiki:Community_Portal"><img src="/images/logos/strategywiki.png" alt="StrategyWiki" width="90px"><br/>Community Portal</a></td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="color:#53C651;" href="https://www.mariowiki.com/MarioWiki:Cross-Wiki_Weekend"><img src="/images/logos/mariowiki.png" alt="Super Mario Wiki" width="90px"><br/><b>Cross-Wiki Guide</b></a></td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="color:#53C651;" href="https://wikibound.info/wiki/WikiBound:Cross-Wiki_Weekend"><img src="/images/logos/wikibound.png" alt="WikiBound" width="90px"><br/><b>Cross-Wiki Guide</b></a></td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="color:#53C651;" href="http://wikirby.com/wiki/WiKirby:Cross-Wiki_Weekend"><img src="/images/logos/wikirby.png" alt="WiKirby" width="90px"><br/><b>Cross-Wiki Guide</b></a></td>
			</tr>
			<tr>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="color:#53C651;" href="https://zelda.gamepedia.com/Zelda_Wiki:Cross-Wiki_Weekend"><img src="/images/logos/zeldawiki.png" alt="Zelda Wiki" width="90px"><br/><b>Cross-Wiki Guide</b></a></td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"> </td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"> </td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"> </td>
			</tr>
		</table>

		<h3 style="text-align: center;">Wiki in italiano</h3>
		<table style="margin: 5px; width: 100%;">
			<tr>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="color:#53C651;" href="https://wiki.pokemoncentral.it/Meta:Cross-Wiki_Weekend"><img src="/images/logos/pokemoncentral.png" alt="Pokémon Central Wiki" width="90px"><br/>Cross-Wiki Guide</a></td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="color:#53C651;" href="https://www.mariocastle.it/wiki/Super_Mario_Wiki:Cross-Wiki_Weekend"><img src="/images/logos/mariowikiit.png" alt="Super Mario Wiki (IT)" width="90px"><br/>Cross-Wiki Guide</a></td>
				<td style="padding: 8px 4px; text-align: center; width: 25%;"><a style="color:#53C651;" href="https://www.xenopedia.it/Meta:Cross-Wiki_Weekend"><img src="/images/logos/xenopediait.png" alt="Xenopedia (IT)" width="90px"><br/>Cross-Wiki Guide</a></td>
			</tr>
		</table>

		<br>
		<div style="text-align: center; width: 100%;"><i>Donkey Kong Wiki, WarsWiki, e Pikmin Fanon non partecipano all'edizione di quest'anno.</i></div>
		<br>

		<h1 id="Form">Modulo</h1>

		Una volta concluso l'evento, siete pregati di segnalare i vostri contributi compilando il seguente modulo entro il <b>30 settembre</b>.
		Compilare questo modulo &#232; necessario per partecipare all'estrazione del premio.
		<br><br>
		<div style="width: 100%; text-align: center;">
			<a href="https://niwa.typeform.com/to/tUzhdR"><div class="button">Submit</div></a>
		</div>

		<br><br>

		<h1 id="Drawing">Estrazione del premio</h1>
		Il vincitore del concorso sar&#224; stabilito con un sorteggio casuale.
		I contributi di ciascun utente verranno valutati con un punteggio da 1 a 5; pi&#249; sostanziosi saranno i contributi, maggiori saranno le probabilit&#224; di vittoria.
		Assicuratevi di effettuare delle modifiche sostanziosi per avere pi&#249; possibilit&#224; di vincere il premio!

		<br><br>

		Sebbene gli organizzatori dell'evento siano liberi di partecipare, essi verranno esclusi dal sorteggio e di conseguenza non avranno la possibilit&#224; di vincere il premio.

		<br><br>

		<h1 id="Conclusion">Conclusione</h1>
		Grazie a tutti per aver partecipato! Hanno preso parte all'evento un totale di 13 contributori, sia nuovi che vecchi. Sono stati effettuati contributi all'interno di 11 wiki di NIWA, provenienti dai membri di 7 wiki di NIWA oltre che dal pubblico esterno. Grazie ai seguenti partecipanti:
		<table style="width: 100%;">
			<tr>
				<td style="width: 50%; vertical-align: top;">
					<ul>
						<li>Alex95</li>
						<li>Alternis</li>
						<li>Cookies and Creme</li>
						<li>Coolpic783</li>
						<li>Doomhiker</li>
						<li>Duraner Hawkeye</li>
						<li>Koopastefo</li>
					</ul>
				</td>
				<td style="width: 50%; vertical-align: top;">
					<ul>
						<li>Mud</li>
						<li>Phantom Dusclops'92</li>
						<li>Snorlite</li>
						<li>Sunmarsh</li>
						<li>Viperision</li>
						<li>tent2</li>
					</ul>
				</td>
			</tr>
		</table>

		Infine, il momento più atteso da tutti: il vincitore della Nintendo eShop Card da $20 è Cookies and Creme di SmashWiki. Congratulazioni!

		<br><br>

		Ci vediamo l'anno prossimo con una nuova edizione dell'evento!

		<br><br>

		<hr>

		<br>

		I contatti principali dell'evento sono <a class="special" href="https://www.pikminwiki.com/User:Espyo">Espyo</a>, <a class="special" href="https://www.ssbwiki.com/User:Serpent_King">Serpent King</a>, <a class="special" href="https://www.mariocastle.it/wiki/Utente:Stormkyleis">Stormkyleis</a>, <a class="special" href="https://nookipedia.com/wiki/User:SuperHamster">SuperHamster</a>, e <a class="special" href="https://fireemblemwiki.org/wiki/User:Tacopill">tacopill</a>.
		Un ringraziamento speciale a tutti coloro che hanno contribuito all'organizzazione dell'evento con suggerimenti e guide.

		<br><br>

		<span style="font-size: 70%;">
			Avvertenze: Non &#232; necessario effettuare alcun acquisto per vincere il premio. &#232; sufficiente che i partecipanti soddisfino i requisiti elencati nelle regole sovrastanti.
			In casi dubbi, l'idoneit&#224; all'estrazione &#232; a discrezione degli organizzatori dell'evento.
			La posta in palio &#232; una Nintendo eShop Card da $20.
			Se il vincitore dovesse risiedere in un paese nel quale risulta impossibile utilizzare l'eShop Card (per esempio a causa delle restrizioni regionali, eShop non supportato in quella determinata regione, ecc.) verr&#224; contattato per stabilire un premio di pari valore.
			Il vincitore verr&#224; estratto con un sorteggio casuale dopo che i contributi verranno giudicati su una scala da 1 a 10 dagli organizzatori dell'evento. Gli organizzatori non possono vincere il premio.
		</span>
	</section>

</div>

<?php
include('_sidebar.php');
include('_footer.php');
?>
