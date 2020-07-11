<?php 
$topbar = 'off';
$title = 'Recent Changes';
include('_header.php');
?>

<div id="main">
<h1>Recent Changes</h1>

<h1>July 8th</h1>

<ul>
	<li>Added search bar. This does work, it will send you to search.php which will see what you entered and then redirect you to the search page for what you entered.</li>
</ul>
<p>I don't think I'm going to leave the search bar the whole width of the content area. Just thought I'd see how it looked... I'll probably have the search right there but shorter on the main page and then have it in the sidebar for all the other pages...</p>

<p>Eventually the search results page will look like the rest of the site.</p>

<p>A day after adding the Google +1 and Twitter Tweet buttons I'm not sure if it's particularly even necessary to have them. They don't look that good where they are.
<p>Options:</p>
<ul>
	<li>Use the small horizontal buttons and place them above the menu bar to the right next to the other icons</li>
    <li>Make them the last thing in the sidebar</li>
    <li>Small horizonal ones and senter them to the center of the content area at the bottom of the page.</li>
    <li>Remove them altogether</li>
</ul>

<h1>July 7th</h1>

<ul>
	<li>Added Google +1 and Twitter tweet buttons. Facebook for some reason wasn't working at the time...</li>
    <li>Started the <a href="compatability.php">Compatability</a> page. This will be an extremely dumbed down page giving information about compatability with older browsers. Eventually somehow let users have the ability to use the old hub site.</li>
</ul>

<h1>July 3rd</h1>

<ul>
	<li>Did some work to the sidebar, new title boxes.</li>
    <li>Did some  changes to the h1 tags, it should be obvious...</li>
    <li>Reduced spacing between links in the affiliates list.</li>
    <li>Added some Firefox and IE specific fixes for the issues posted below.</li>
</ul>
<p><del>Note: There are a couple of visual bugs for both Internet Explorer 9 and lower and Firefox 5 and lower, where the title boxes in the sidebar start from the outside of the main content holder. Webkit (Chrome, Safari), and Presto (Opera) browsers seem to be fine. Working on a fix...</del></p>
<h1>July 2nd</h1>

<ul>
	<li>Finished adding all of the NIWA members to the api.</li>
    <li>Finished adding all the NIWA members to the <a href="members.php">Members</a> page.</li>
    <li>Added some links/buttons to our Social sites (Facebook, Twitter, etc.)</li>
    <li>Updated the main Hub page to use the api</li>
    <li>Added some spacing for items in either a unordered or ordered list.</li>
    <li>Decreased the font size for lists</li>
    <li>Added the <a href="legal.php">Legal</a> and <a href="join.php">Join Us</a> pages.</li>
</ul>

<h1>June 25th</h1>

<ul>
	<li>Finished the fail-on-submit feature of the mail contact form. It will fail if none of the options is not completed.</li>
    <li>Font sizes are now "em" instead of "px."</li>
    <li>Changed some lazy code to be more proper</li>
    <li>Fixed the error page for the contact form so it shows the full page instead of it cutting off.</li>
    <li>Started to create an "api" that will provide information for each of the wikis.</li>
</ul>

<h1>June 23rd</h1>

<ul>
	<li>Set a max width on #container to 1000px</li>
	<li>Did some work on the contact page, labels and the actual input boxes are on their own line.</li>
    <li>Started implementing a fail-on-submit if something is not completed in the contact form, currently only the "Point of Contact" has this enabled.</li>
    <li>Shrunk the text size in p tags to 15px, will need to do the same for lists...</li>
    <li>Replaced the "Back to the Top" link with the "Changes" link.</li>
    <li>Created the "<a href="members.php">Members</a> page. Added an example of a member being displayed on the page. Don't particularly like it...
</ul>

<h1>June 22nd</h1>

<ul>
	<li>Website is now split into multiple files: _header.php, _menu.php, _sidebar.php, _footer.php</li>
	<li>Changed sidebar to have "margin-left: 76%" instead of "float: right"</li>
    <li>Added "margin-bottom: 10px" to "body"</li>
    <li>Added list of Affiliates to the sidebar, removed the Affiliates link from the menu</li>
    <li>Added some links to the footer and changed the a:hover to use a background color of #555 instead of #fff</li>
    <li>Created the "<a href="about.php">About</a>" page</li>
    <li>Created the "<a href="contact.php">Contact</a>" page with a fully working web contact form</li>
</ul>

</div>

<?php 
include('_sidebar.php');
include('_footer.php');
?>