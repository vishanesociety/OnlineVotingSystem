<html>
<head>
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

$result = mysql_query("select partyid, pname, president, chperson, headquar from party"); 

echo "<center><h1> PARTY INFORMATION </h1></center>";

if(!$result)
{
die("could not get data");
}

echo "<center><table width=100%>
<tr>
<th>PARTY ID</th>
<th>PARTY NAME </th>
<th>PRESIDENT</th>
<th>CHAIR PERSON</th>
<th>HEADQUATER</th>
</tr>";
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>{$row['partyid']}</td>";
echo "<td>{$row['pname']}</td>";
echo "<td>{$row['president']}</td>";
echo "<td>{$row['chperson']}</td>";
echo "<td>{$row['headquar']}</td>";
echo "</tr>";
}
echo"</table></center>";
mysql_close();
?>
</body>
</html>