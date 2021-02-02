<?php
session_start();
if (!isset($_SESSION['voter']))
{
$_SESSION['redirect'] = $_SERVER['PHP_SELF'];
header("Refresh: 3; URL=voterlogin.php?redirect=". $_SESSION['redirect']);
echo "You are being redirected to the login page!<br>";
die();
}
else
{
 echo "<div style="."float:right; position:absolute; top:10px; ".">";
echo "current user is ".$_SESSION['voter'];
echo " <a href=voterlogout.php>Logout</a>";
echo "</div>";
}
?>