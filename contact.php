<?php
$title = 'Contact Us';
include('_header.php');
?>

<div class="main">
	<h1>Contact Us</h1>

	<p>
		You may use this form to contact the current Coordinator of NIWA for discussion about the organization, including membership and affiliation applications.
		If you would like to reach out to a specific member wiki, please visit that wiki's website to find their contact information. You may also join our <a href="https://discord.gg/59Mq6qB">Discord server</a> to chat with members of the community.
	</p>
	<form class="contact" method="post" action="/mail.php">
		<label for="name">Name</label>
		<input id="name" type="text" name="name" />
		<label for="email">E-mail Address</label>
		<input id="email" type="text" name="email" />
		<label for="subject">Subject</label>
		<input id="subject" type="text" name="subject" />
		<label for="message">Message</label>
		<textarea id="message" rows="20" name="message"></textarea>
		<label for="captcha">What does the "N" in NIWA stand for?</label>
		<input id="captcha" type="text" name="captcha" />
		<br/>
		<input type="submit" value="Submit" name="submit" class="submit" />
	</form>
</div>

<?php
include('_sidebar.php');
include('_footer.php');
?>
