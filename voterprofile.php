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
.nav{
display:inline block;
width:100%;
height:25px;
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
padding:0px 30px;
}
</style>
</head>
<body>

<?php

include 'voterloginchk.php';

$con = mysql_connect('localhost:3307', 'root', 'root') or die("connection not found");
$db = mysql_select_db("onlinevote", $con) or die("db not found");

$result = mysql_query("SELECT path, vfname, vlname, fname, dob, voterid , address, city from voter where voterid=".$_SESSION['voter'] ); 

if(!$result)
{
die("could not get data");
}
$row=mysql_fetch_array($result);


echo "<div class=nav>";
echo "<a href=donation.php>DONATION</a>";
echo "<a href=voting.php>VOTING</a>";
echo "</div>";

echo "<img src={$row['path']} width=180px height=180px class=imgcontainer>";
echo "<table class=container align=center width=300px height=300px>";
echo "<tr>";
echo "<td colspan=2><h2><center>{$row['vfname']}&nbsp{$row['vlname']}</center></h2></td>";
echo "</tr>";
echo "<tr>";
echo "<td><center>Son of</center></td>";
echo "<td><center>{$row['fname']}</center></td>";
echo "</tr>";
echo "<tr>";
echo "<td><center>Born On</center></td>";
echo "<td><center>{$row['dob']}</center></td>";
echo "</tr>";
echo "<tr>";
echo "<td><center>Voter_ID No</center></td>";
echo "<td><center>{$row['voterid']}</center></td>";
echo "</tr>";
echo "<tr>";
echo "<td><center>Address</center></td>";
echo "<td><center>{$row['address']}</center></td>";
echo "</tr>";
echo "<tr>";
echo "<td><center>City</center></td>";
echo "<td><center>{$row['city']}</center></td>";
echo "</tr>";

echo "</table> ";
echo "<br/>";
mysql_close();
?>
</body>
</html>