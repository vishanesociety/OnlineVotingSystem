<html>
<body>
<?php

$con = mysql_connect('localhost:3306', 'root', 'root') or die("connection not found");
$db = mysql_select_db("database_name", $con) or die("db not found");

$result = mysql_query("select appointid, id, name, contact, doctor from appoint"); 

echo "<center><h1> APPOINTMENT INFORMATION </h1></center>";

if(!$result)
{
die("could not get data");
}

echo "<center><table border = 1 width=80%>
<tr>
<td>APPOINT ID</td>
<td>PATIENT ID </td>
<td>NAME</td>
<td>CONTACT</td>
<td>DOCTOR</td>
</tr>";
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>{$row['appointid']}</td>";
echo "<td>{$row['id']}</td>";
echo "<td>{$row['name']}</td>";
echo "<td>{$row['contact']}</td>";
echo "<td>{$row['doctor']}</td>";
echo "</tr>";
}
echo"</table></center>";
mysql_close();
?>
</body>
</html>