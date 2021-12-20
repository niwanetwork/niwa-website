<?php
$title = 'Join';
include('_header.php');
include('_parsedown.php');
?>

<div class="main">
    <h1>Join NIWA</h1>

    <p>
        NIWA is always looking for new members and affiliates. If you are interested in joining, please review the following guidelines to see if you'd be a good fit, and then <a href="/contact">reach out to us</a> to apply! You may also join our <a href="https://discord.gg/59Mq6qB">public Discord server</a> with any questions.
    </p>
    <p>
        While only members receive voting powers within the organization, both members and affiliates receive access to NIWA's private Discord community where we collaborate and support each other's projects.
    </p>

    <h1>Member criteria</h1>

    <?php
        $html = file_get_contents('https://raw.githubusercontent.com/niwanetwork/niwa-docs/main/criteria-members.md');
        $Parsedown = new Parsedown();
        echo $Parsedown->text($html);
    ?>

    <h1>Affiliate criteria</h1>

    <?php
        $html = file_get_contents('https://raw.githubusercontent.com/niwanetwork/niwa-docs/main/criteria-affiliates.md');
        $Parsedown = new Parsedown();
        echo $Parsedown->text($html);
    ?>
</div>

<?php
include('_sidebar.php');
include('_footer.php');
?>
