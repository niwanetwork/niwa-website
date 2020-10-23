<?php 
include('_header.php');
$topbar = off;
?>

<div id="main">

<div id="logos">

<?php 
 foreach($memberWikis["en"] as $wiki) {
    echo "<a href='".$wiki["url"]."'><img src='".$wiki["logo"]."' alt='".$wiki["title"]."' height='150' /></a>";
 }
?>

</div>
</div>

<?php 
include('_sidebar.php');
include('_footer.php');
?>
