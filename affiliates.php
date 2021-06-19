<?php
$title = 'Affiliates';

include('_header.php');
?>

<div class="main">
    <h1>NIWA Affiliates</h1>

    <section>
        <?php
        foreach ($dataHelper->getAffiliates() as $affiliate) {
            echo "
            <div class='member'>
                <div class='logo'>
                    <a href='{$affiliate->url}'>
                        <img src='{$affiliate->logo}' alt='{$affiliate->title}' />
                    </a>
                </div>
                <div class='description'>
                    <div class='links'>
                        {$dataHelper->generateMemberLinks($affiliate)}
                    </div>
                    <p>{$affiliate->description}</p>
                </div>
            </div>
            ";
        }
        ?>
    </section>
</div>

<?php
include('_sidebar.php');
include('_footer.php');
?>