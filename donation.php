<html>
<head>
<style>
body{
background-image:url("images/indexbg.jpg");
}
h1{
color:linen;
text-align:center;
text-decoration:underline;
}
td{
padding:5px 5px 15px 5px;
text-align:right;
color:white;
font-size:20px;
}
input[type=submit]{
font-size:20px;
height:50px;
width:100px;
}
</style>
</head>
<body>
<?php
include 'voterloginchk.php';
include 'database.php';

$result = mysql_query("select voterid,vfname,vlname,mob1 from voter where voterid=".$_SESSION['voter']); 
if(!$result)
{
die("could not get data");
}
$row=mysql_fetch_array($result);
$result1= mysql_query("select pname from party");
echo "<h1>DONATE</h1>";
 echo "<form action=payment.html >";
echo "<table align=center>
<tr><td>Voter_ID:</td><td style=text-align:left;>{$row['voterid']}</td></tr>
<tr><td>Voter's Name:</td>
<td style=text-align:left;>{$row['vfname']} {$row['vlname']}</td>
</tr>
<tr><td>Contact No.:</td><td style=text-align:left;>{$row['mob1']}</td></tr>
<tr><td>Party:</td>
<td style=text-align:left;><select name=txtdonate><option selected>select</option>";
while($row1=mysql_fetch_array($result1))
{
echo "<option>{$row1['pname']}</option>";
}
echo "</td></tr>
<tr><center><td colspan=2><center><input type=submit value=PAY></center></td></center></tr>
</table>

</form>";
mysql_close();
?>
</body>
</html>
