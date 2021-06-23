<?php
$title = 'Policy';
include('_header.php');
include('_parsedown.php');
?>

<div class="main">
    <?php
    $html = file_get_contents('https://raw.githubusercontent.com/niwanetwork/niwa-docs/main/policy.md');
    $Parsedown = new Parsedown();
    echo $Parsedown->text($html);
    ?>
</div>

<?php
include('_sidebar.php');
include('_footer.php');
?>
