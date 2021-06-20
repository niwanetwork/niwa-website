<?php
$title = 'Affiliates';

include('_header.php');
?>

<div class="main">
    <h1>NIWA Affiliates</h1>

    <p>
        Our affiliates consist of great websites, communities, and organizations that share our goals and collaborative spirit, and typically cover videogames or other media. Affiliates have access to our members-only Discord community where we support each other's projects. If you're interested in becoming an affiliate and think you'd be a great fit, please <a href="/contact">reach out to us</a>!
    </p>

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