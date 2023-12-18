<?php
    $title = 'Forwarding Service';
    include('_api.php');
    $dataHelper = new NiwaDataHelper();

    $wikis = $dataHelper->getMemberWikis();

    $queries = array();
    parse_str($_SERVER['QUERY_STRING'], $queries);

    if ($queries['target']) {
        $pathSegments = explode('/', $queries['target']);

        if (count($pathSegments) > 0) {
            $site = $pathSegments[0] ?? null;
            $article = implode('/', array_slice($pathSegments, 1)) ?? null;
            $target = null;

            foreach ($wikis as $wiki) {
                if ($wiki->id === $site) {
                $target = $wiki->url;
                    $target = str_replace('$1', $article, $target);
                    $target = rtrim($target, '/');
                }
            }

            if ($target) {
                header("Location: {$target}");
                exit();
            }
        }
    }

    include('_header.php');
?>

<style>
    .beta {
        box-sizing: border-box;
        width: 100%;
        padding: 1em;
        background-color: #f4ebab;
        border: 2px solid #f5e366;
        border-radius: 10px;
    }
</style>

<div class="main">
    <h1>NIWA Forwarding Service</h1>

    <div class="beta">
        This forwarding service is currently in <b>beta</b>. Site IDs are subject to change.
    </div>

    <br />
    
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