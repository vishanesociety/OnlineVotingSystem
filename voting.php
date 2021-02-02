<html>
<head>
<style>
a{
padding:5px 5px;
background-color:rgba(0,0,0,0.5);
color:white;
}
input[type=submit]:hover{
border:none;
background-color:rgba(0,0,0,0.5);
color:white;
}

input[type=reset]:hover{
border:none;
background-color:rgba(0,0,0,0.5);
color:white;
}

input[type=submit]{
margin-top:10px;
font-size:20px;
height:50px;
width:100px;
margin-left:450px;
}
input[type=reset]{
margin-top:10px;
font-size:20px;
margin-left:50px;
height:50px;
width:100px;

border:none;
}

h1{
text-transform:uppercase;
text-align:center;
text-decoration:underline;
color:linen;}
table{
margin-left:320px;
border-color:black;
border-width:2px;
border-collapse:collapse;
}
td{
font-size:20px;
color:linen;
text-align:center;
}
th{
padding:5px 5px;
font-size:20px;
color:white;
}
body{
background-image:url("images/indexbg.jpg");
}
</style>
</head>
<body>
<?php
include 'voterloginchk.php';

$con = mysql_connect('localhost:3307', 'root', 'root') or die("connection not found");
$db = mysql_select_db("onlinevote", $con) or die("db not found");
$result = mysql_query("select voterid,ward from voter where voterid=".$_SESSION['voter']); 
if(!$result)
{
die("could not get data");
}
$row=mysql_fetch_array($result);

$result1= mysql_query("select candidateid,cfname,clname,party,ward,pname,p.path from candidate c,party p where c.party=p.pname AND c.ward={$row['ward']}");
if(!$result1){die(mysql_error());}
//$result2= mysql_query("select pname,path from party where ");


echo "<h1>Choose your representative</h1>";
echo "<form action=insert_voting.php method=post>";
echo "<table border=1>
<tr>
<th>Candidate Name</th><th>Party Name</th><th>Party logo</th><th>Your choice</th>
</tr>";


while($row1=mysql_fetch_array($result1))
{
echo "<tr>";
echo "<td>";
echo "{$row1['cfname']}{$row1['clname']}";
echo "</td><td>";
echo "{$row1['party']}";
echo "</td><td>";
echo "<img src={$row1['path']} width=100px height=100px>";
echo "</td><td><input type=radio name=rd1 value={$row1['candidateid']} required></td></tr>";
}
echo "</table>";
echo "<input type=submit value=SUBMIT>";
echo "<input type=reset value=RESET>";

echo "</form>";
mysql_close();
?>

