<?php
include('_header.php');
?>

<div class="main">
   <div id="logos">
      <?php
      foreach ($dataHelper->getMemberWikis('en') as $wiki) {
         echo "
            <a href='{$wiki->url}'>
               <img src='{$wiki->logo}' alt='{$wiki->title}' />
            </a>
         ";
      }
      ?>
   </div>
</div>

<?php
include('_sidebar.php');
include('_footer.php');
?>