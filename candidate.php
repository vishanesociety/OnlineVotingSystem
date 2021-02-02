<html>
<head>
<style>
a{
padding-right:10px;
text-decoration:none;
color:white;
}
a:hover{
text-decoration:none;
background-color:rgba(255,255,255,1);
color:black;
}

body{
background-image:url("images/indexbg.jpg");
background-size:cover;
}
.container{
margin-top:200px;
background:rgba(0,0,0,0.8);
color:white;
font-size:20px;
height:350px;
width:600px;
}
.imgcontainer{
background:rgba(0,0,0,0.5);
position:absolute;
margin-top:45px;
margin-left:558px;
border-radius:50%;
}
td{
padding:5px 5px 5px 5px;
color:white;
font-size:20px;
}
</style>
</head>
<body>
<?php

include 'cndloginchk.php';

$con = mysql_connect('localhost:3307', 'root', 'root') or die("connection not found");
$db = mysql_select_db("onlinevote", $con) or die("db not found");

$result = mysql_query("SELECT path, cfname, clname, fname, dob, candidateid , address from candidate where candidateid=".$_SESSION['candidate'] ); 

if(!$result)
{
die("could not get data");
}
$row=mysql_fetch_array($result);

echo "<table align=center border=1 width=400px height=300px>";
echo "<tr>";
echo "<td rowspan=2><center><img src={$row['path']} width=200px height=200px></center></td>
<td><center>Candidate's Full Name</center></td>";
echo "</tr>";
echo "<tr>";
echo "<td><center>{$row['cfname']} {$row['clname']}</center></td>";
echo "</tr>";
echo "<tr>";
echo "<td><center></center></td>";
echo "</tr>";
echo "<tr>";
echo "<td><center>Father's Name</center></td>";
echo "<td><center>{$row['fname']}</center></td>";
echo "</tr>";
echo "<tr>";
echo "<td><center>Date of Birth</center></td>";
echo "<td><center>{$row['dob']}</center></td>";
echo "</tr>";
echo "<tr>";
echo "<td><center>Voter's_ID No</center></td>";
echo "<td><center>{$row['candidateid']}</center></td>";
echo "</tr>";
echo "<tr>";
echo "<td><center>Candidate's Address</center></td>";
echo "<td><center>{$row['address']}</center></td>";
echo "</tr>";
echo "</table> ";
echo "<br/>";
mysql_close();


?>
</body>
</html>