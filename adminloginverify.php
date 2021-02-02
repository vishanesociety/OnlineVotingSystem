<?php
session_start();
if(!isset($_SESSION['redirect']))
{
$_SESSION['redirect']="hover.html";
}
$con= mysql_connect('localhost:3307','root','root') or die("mysql not connected");
$db= mysql_select_db('onlinevote',$con) or die("database not connected");
$result=mysql_query("SELECT * from admin WHERE user = '$_POST[txtuser]' AND password= '$_POST[txtpassword]' ");

//$rows=mysql_num_rows($result);
$row=mysql_fetch_array($result);
if(!empty($row['user']) AND !empty($row['password']))
{
$_SESSION['admin']= $row['user'];
header ("Refresh: 2; URL=" . $_SESSION['redirect'] );
echo "You are being redirected to your original page request";
}
else
{
echo "Invalid User or password";
echo "<br>You are going to redirect login page....";
header("Refresh:2; url=adminlogin.php");
}

mysql_close();
?>
