<?php
$title = 'Contact Us';
include('_header.php');
?>

<div id="main">
<h1>Contact Us</h1>

<form method="post" action="/mail.php">
<p class="form">Name:</p>
<input type="text" name="name" class="contact" />
<p class="form">E-mail Address:</p>
<input type="text" name="email" class="contact" />
<p class="form">Point of Contact:</p>
<select size="1" name="contact" class="contact">
		<option></option>
		<!-- E-mails are stored in mail.php, to remove them from the html source -->
		<option value="coordinator">NIWA Coordinator</option>
		<option value="armswiki">ARMS Institute</option>
		<option value="bulbapedia">Bulbapedia</option>
		<option value="dqwiki">Dragon Quest Wiki</option>
		<option value="fewiki">Fire Emblem Wiki</option>
		<option value="fzerowiki">F-Zero Wiki</option>
		<option value="goldensun">Golden Sun Universe</option>
		<option value="harddrop">Hard Drop Tetris Wiki</option>
		<option value="icaruspedia">Icaruspedia</option>
		<option value="inkipedia">Inkipedia</option>
		<option value="lylatwiki">Lylat Wiki</option>
		<option value="metroidwiki">Metroid Wiki</option>
		<option value="nintendowiki">Nintendo Wiki</option>
		<option value="nookipedia">Nookipedia</option>
		<option value="pikipedia">Pikipedia</option>
		<option value="pikminfanon">Pikmin Fanon</option>
		<option value="smashwiki">SmashWiki</option>
		<option value="starfywiki">Starfy Wiki</option>
		<option value="strategywiki">StrategyWiki</option>
		<option value="supermariowiki">Super Mario Wiki</option>
		<option value="wikibound">WikiBound</option>
		<option value="wikirby">WiKirby</option>
		<option value="warswiki">Wars Wiki</option>
		<option value="zeldawiki">Zelda Wiki</option>
</select>
<input type="test" name="title" class="hidden" />
<p class="form">Subject:</p>
<input type="text" name="subject" class="contact" />
<p class="form">Message:</p>
<textarea rows="20" name="message" class="message"></textarea>
<input type="submit" value="Submit" name="submit" class="submit" />
</form>

</div>

<?php
include('_sidebar.php');
include('_footer.php');
?>
