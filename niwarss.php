<?php
$title = 'RSS News Feed';
include('_header.php');

// Include the SimplePie RSS scripts
include_once("php/autoloader.php");

// We'll process this feed with all of the default options.
$feed = new SimplePie();

// Set the feed to process.
$feed->set_feed_url(array(
	"http://bulbanews.bulbagarden.net/feed/news.rss",
	"http://www.zeldauniverse.net/feed/",
	"http://www.nintendo.com/feed",
	//Can anyone find a way to clean up the output of this? (wikicode, divs, etc.)
	//"http://www.mariowiki.com/index.php?title=Special:NewPages&feed=atom&namespace=104",
	));

// Run SimplePie.
$feed->init();

// This makes sure that the content is sent to the browser as text/html and the UTF-8 character set (since we didn't change it).
$feed->handle_content_type();
?>
<style type="text/css">
	div.item {
		padding:5px 0;
		border-bottom:1px solid #999;
	}
</style>
<div class="main">


	<?php
	/*
	Here, we'll loop through all of the items in the feed, and $item represents the current item in the loop.
	To get data relating to the source feed (Bulbanews, ZU, etc.), use $item->get_feed()->get_foobar();
	*/
	foreach ($feed->get_items() as $item):
	?>

		<div class="item">
			<h2><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a></h2>
			<p><?php echo $item->get_description(); ?></p>
			<p><small>Posted on <a href="<?php echo $item->get_feed()->get_permalink(); ?>"><?php echo $item->get_feed()->get_title(); ?></a> on <?php echo $item->get_date('j F Y'); ?> at <?php echo $item->get_date('g:i a'); ?></small></p>
		</div>

	<?php endforeach; ?>
</div>

<?php
include('_sidebar.php');
include('_footer.php');
?>
