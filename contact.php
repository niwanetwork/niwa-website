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
	<form method="post" action="/mail.php">
		<p class="form">Name:</p>
		<input type="text" name="name" class="contact" />
		<p class="form">E-mail Address:</p>
		<input type="text" name="email" class="contact" />
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
