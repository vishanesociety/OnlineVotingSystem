<?php
session_start();
if(!isset($_SESSION['redirect']))
{
$_SESSION['redirect']="voterprofile.php";
}
include 'database.php'; 
$result=mysql_query("SELECT voterid, password from voter WHERE voterid = '$_POST[txtuser]' AND password= '$_POST[txtpassword]' ");

$rows=mysql_num_rows($result);
$row=mysql_fetch_array($result);
if(!empty($row['voterid']) AND !empty($row['password']))
{
$_SESSION['voter']= $row['voterid'];
header ("Refresh: 2; URL=" . $_SESSION['redirect'] );
echo "You are being redirected to your original page request" ;
}
else
{
echo "Invalid User or password";
echo "<br>You are being redirected to the login page....";
header("Refresh:2; url=voterlogin.php");
}

mysql_close();
?>
