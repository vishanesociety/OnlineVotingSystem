<html><head>
<style>
th{
text-decoration:underline;
}
h1{
color:red;
font-style:lucida bright;
background-color:linen;
}
td{
text-align:center;
}
</style>
</head>
<body>
<?php
include 'adminloginchk.php';

$con = mysql_connect('localhost:3307', 'root', 'root') or die("connection not found");
$db = mysql_select_db("onlinevote", $con) or die("db not found");

$result = mysql_query("select voterid,vfname,vlname,gen,dob,age,mob1 from voter"); 

echo "<center><h1> VOTER INFORMATION </h1></center>";

if(!$result)
{
die("could not get data");
}

echo "<center><table width=100%>
<tr>
<th>VOTER ID</th>
<th>VOTER'S FIRST NAME </th>
<th>VOTER'S LAST NAME </th>
<th>GENDER </th>
<th>DATE OF BIRTH</th>
<th>AGE</th>
<th>MOBILE NO.</th>
</tr>";
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>{$row['voterid']}</td>";
echo "<td>{$row['vfname']}</td>";
echo "<td>{$row['vlname']}</td>";
echo "<td>{$row['gen']}</td>";
echo "<td>{$row['dob']}</td>";
echo "<td>{$row['age']}</td>";
echo "<td>{$row['mob1']}</td>";
echo "</tr>";
}
echo"</table></center>";
mysql_close();
?>
</body>
</html>