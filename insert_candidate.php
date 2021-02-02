<?php
//-----------------------------------------------------------
if($_FILES['file']['name']!="")
{$target_path="images/photo/";
$target_path=$target_path.basename($_FILES['file']['name']);
copy($_FILES['file']['tmp_name'],$target_path) or die("could not copy file!");
}
else
{
die("no file specified");
}

$tmp=$_FILES['file']['tmp_name'];

$fp=fopen($tmp,'r');
$img=fread($fp,filesize($tmp)) or die("Can't read properly");
$img=addslashes($img);
fclose($fp);

//------------------------------------------------------------


$con = mysql_connect('localhost:3307','root','root') or die("mysql not connected");

$db = mysql_select_db("onlinevote", $con) or die("db not connected");

$qry_insert= "INSERT INTO candidate(cfname,cmname,clname,fname,aadhar,gen,dob,age,mob1,mob2,qualify,email,address,city,state,pin,party,property,asset,area,nation,password,ward,path,image)
              VALUES('$_POST[txtcfname]','$_POST[txtcmname]','$_POST[txtclname]','$_POST[txtfname]', '$_POST[txtaadhar]','$_POST[txtgen]','$_POST[txtdob]','$_POST[txtage]','$_POST[txtmob1]','$_POST[txtmob2]','$_POST[txtqualify]','$_POST[txtemail]','$_POST[txtaddress]','$_POST[txtcity]','$_POST[txtstate]','$_POST[txtpin]','$_POST[txtparty]','$_POST[txtproperty]','$_POST[txtasset]','$_POST[txtarea]','$_POST[txtnation]','$_POST[txtpassword]','$_POST[txtward]','$target_path','$img')";


mysql_query($qry_insert) or die("entry fail");

$result=  mysql_query("SELECT candidateid  FROM candidate ORDER BY candidateid DESC LIMIT 1");
//print $qry_insert;              		  
$row = mysql_fetch_array($result);
echo "Your Registration Number is: " .  $row['candidateid'];
echo "<br>You are going to be redirected to login page....";
header("Refresh:3; url=cndlogin.php");

mysql_close();
?>


