<?php
session_start();
include 'database.php';
$qry_insert= "INSERT INTO voting(candidateid,voterid) VALUES($_POST[rd1],".$_SESSION['voter'].")";

mysql_query($qry_insert) or die("You have casted your vote.");

echo "Voting Successful";

echo "<br>You are being logged out....";
header("Refresh:3; url=voterlogout.php");

mysql_close();

?>