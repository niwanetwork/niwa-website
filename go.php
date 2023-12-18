<?php
    $title = 'Redirect Service';
    include('_header.php');

    $dataHelper = new NiwaDataHelper();
    $wikis = $dataHelper->getMemberWikis();

    $url = $_SERVER['REQUEST_URI'];
    $urlParts = parse_url($url);
    $path = $urlParts['path'];
    $pathSegments = explode('/', $path);

    if (count($pathSegments) > 2) {
        $site = $pathSegments[2] ?? null;
        $article = implode('/', array_slice($pathSegments, 3)) ?? null;
        $target = null;

        foreach ($wikis as $wiki) {
            if ($wiki->id === $site) {
                $target = $wiki->url;
                $target = str_replace('$1', $article, $target);
            }
        }

        if ($target) {
            header("Location: {$target}");
            exit();
        }
    }
?>

<div class="main">
    <h1>NIWA Redirect Service</h1>
    
    This URL serves as a gateway to link to any article on any NIWA member wiki.

    <br /><br />

    URL format: <code>https://niwanetwork.org/go/{site}/{article}</code>

    <br /><br />

    Replace <code>{site}</code> with the site ID from the table below, and <code>{article}</code> with your desired article name.

    <br /><br />

    <table>
        <tr>
            <th>Site ID</th>
            <th>Site URL</th>
        </tr>
        <?php
            foreach ($wikis as $wiki) {
                echo "
                <tr>
                    <td>{$wiki->id}</td>
                    <td>{$wiki->url}</td>
                </tr>
                ";
            }
        ?>
    </table>
</div>

<?php
    include('_sidebar.php');
    include('_footer.php');
?>