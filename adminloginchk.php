<?php
session_start();
if (!isset($_SESSION['admin']))
{
$_SESSION['redirect'] = $_SERVER['PHP_SELF'];
header("Refresh: 3; URL=adminlogin.php?redirect=". $_SESSION['redirect']);
echo "You are being redirected to the login page!<br>";
die();
}
else
{
 echo "<div style="."float:right; position:absolute; top:5px; ".">";
echo "current user is ".$_SESSION['admin'];
echo " <a href=adminlogout.php>Logout</a>";
echo "</div>";
}
?>