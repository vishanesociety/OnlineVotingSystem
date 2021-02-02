<?php
session_start();
$con=mysql_connect('localhost:3307','root','root') or die("Mysql not connected");
$db=mysql_select_db('onlinevote',$con) or die("Database not connected");
$result=mysql_query("SELECT * from admin WHERE user='$_POST[txtuser]' AND 
password='$_POST[txtpassword]' ");

$rows=mysql_num_rows($result);
$row=mysql_fetch_array($result);
if(!empty($row['user']) AND !empty($row['password']))
{
$_SESSION ['user']=$row['user'];
echo"please wait while page is opening.....";
header("Refresh:2; url=voterreg.php");
}
else
{
echo"Invalid user or pasword ";
echo"<br>you are going to redirect to login page...";
header ("Refresh:2;url=login.php");
}
mysql_close();
?>
