<?php

$con = mysql_connect('localhost:3307','root','root') or die("mysql not connected");

$db = mysql_select_db("onlinevote", $con) or die("db not connected");

$qry_insert= "INSERT INTO party(pname,president,chperson,fyear,headquar,nomla)
              VALUES('$_POST[txtpname]','$_POST[txtpresident]','$_POST[txtchperson]','$_POST[txtfyear]', '$_POST[txtheadquar]','$_POST[txtnomla]')";

mysql_query($qry_insert) or die("entry fail");

$result=  mysql_query("SELECT partyid  FROM party ORDER BY partyid DESC LIMIT 1");
//print $qry_insert;              		  
$row = mysql_fetch_array($result);
echo "Your Registration Number is: " .  $row['partyid'];

mysql_close();
?>


