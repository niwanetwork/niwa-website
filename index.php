<?php
include('_header.php');
?>

<link rel="stylesheet" type="text/css" href="dependencies/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="dependencies/slick/slick-theme.css"/>

<div class="main">
   <div class="carousel text-center">
      <?php
         $enwikis = (array) $dataHelper->getMemberWikis('en');
         $dewikis = (array) $dataHelper->getMemberWikis('de');
         $itwikis = (array) $dataHelper->getMemberWikis('it');
         $wikis = array_merge($enwikis, $dewikis, $itwikis);
         shuffle($wikis);
         foreach ($wikis as $wiki) {
            echo "
            <div>
               <a href='{$dataHelper->getWikiLink($wiki->url, $wiki->mainpage)}'>
                  <img src='{$wiki->logo}' alt='{$wiki->title}' width='100px' style='margin: 0 auto;' />
               </a>
            </div>
            ";
         }
      ?>
   </div>

   <h1>Welcome to the Nintendo Independent Wiki Alliance</h1>

   <p>
      We are a network of independent wikis working together since 2010 to bring fans quality coverage of all things Nintendo. Together with our affiliates, we collaborate and support one another in our mission. 
   </p>

   <p>
      We are driven by our focus on our fans:
      <ul>
         <li><b>Fan communities should be run by the fans</b>, and not corporate entities that don't put the community first.</li>
         <li><b>Fan communities should be run for the fans</b>, by people who will always think about how they can continue to enhance the enjoyment of everyone in the community.</li>
         <li><b>Fan communities should be run together with the fans</b>, embracing a spirit of co-operation and camaraderie.</li>
      </ul>
   </p>

   <div class="flex-container">
      <div class="flex-section stats text-center white">
         <h2><?=$dataHelper->getMemberWikiCount()?> members</h2>
         covering Nintendo
         <br/><br/>
      </div>
      <div class="flex-section stats text-center white">
         <h2>260,000+ articles</h2>
         across three languages
         <br/><br/>
      </div>
      <div class="flex-section stats text-center white">
         <h2><?=$dataHelper->getAffiliateCount()?> affiliates</h2>
         supporting our mission
         <br/><br/>
      </div>
   </div>

   <p>
      Learn more about us on our <a href="/about">about page</a>, and check out our <a href="/members">members</a> and <a href="/affiliates">affiliates</a>.
   </p>

   <h1>Stay engaged</h1>

   <p>
      We have a public Discord server for Nintendo and wiki fans alike, as well as social media profiles to keep up-to-date with going-ons between our members.
   </p>

   <div class="flex-container">
      <div class="flex-section discord text-center white">
         <a href="https://discord.gg/59Mq6qB">Join our Discord</a>
      </div>
      <div class="flex-section twitter text-center white">
         <a href="https://twitter.com/niwanetwork">Follow on Twitter</a>
      </div>
      <div class="flex-section facebook text-center white">
         <a href="https://www.facebook.com/NIWANetwork">Like on Facebook</a>
      </div>
   </div>

   <p>
      You can also engage with our <a href="/members">members</a> and <a href="/affiliates">affiliates</a> through their own Discord servers and social media.
   </p>

</div>

<script type="text/javascript" src="dependencies/jquery/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="dependencies/jquery/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="dependencies/slick/slick.min.js"></script>
<script type="text/javascript">
$('.carousel').slick({
   infinite: true,
   slidesToShow: 5,
   slidesToScroll: 1,
   autoplay: true,
   autoplaySpeed: 1500,
   swipeToSlide: true,
});
</script>

<?php
include('_sidebar.php');
include('_footer.php');
?>
