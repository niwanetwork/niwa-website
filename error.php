<?php
$errorid = $_GET['error'];
$title = 'NIWA - Nintendo Independence Wiki Alliance';
include('_header.php');
?>

<p>
<span style="font-size: 36px; font-weight: bold;">Oh dear... <?php if ($errorid == 404) echo '404 - Page Not Found'; elseif ($errorid == 503)  echo '503 - Service Unavailable'; elseif ($errorid == 403) echo '403 - Forbidden'; elseif ($errorid == 500) echo '500 - Internal Server Error'; ?></span>
<br/><br/>
<?php if ($errorid == 404)
echo '
It seems you have tried to access a page that does not exist! Hopefully you can try finding your way again by using the navigation above.';
elseif ($errorid == 503)
echo '
It seems we are currently busier than we thought! Our services may be temporarily down due to excessive traffic. Please try again in a few minutes.';
elseif ($errorid == 403)
echo '
Tsk tsk tsk... seems you are being a little nosy! How about you use the navigation to access any other parts of the site that you are allowed to.';
elseif ($errorid == 500)
echo '
This can\'t be good! Hopefully we know and are already working on it and will be back up shortly. If not feel free to contact us: <a href=\"mailto:coordinator@niwanetwork.org\">coordinator@niwanetwork.org</a>';
else
echo '
Seems you have discovered an error we can\'t explain... You are welcome to try and contact us: <a href="mailto:coordinator@niwanetwork.org">coordinator@niwanetwork.org</a>. Please make sure you include the page you were trying to access!
';
?>
</p>
<?php
include('_footer.php');
?>
