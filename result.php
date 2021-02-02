<html><head>
<style>
h3{
padding:5px 5px;
color:white;
}
a{
align:right;}
</style>
<link rel="stylesheet" type="text/css" href="css.css">
<script src="js.js" type="text/javascript"></script>
</head>
<body style="background-image:url(images/indexbg.jpg);">
<a href="index.php">HOME</a>
 <h1>CANDIDATE REPORT</h1>
<?php
//include 'adminloginchk.php';

$con = mysql_connect('localhost:3307', 'root', 'root') or die("connection not found");
$db = mysql_select_db("onlinevote", $con) or die("db not found");

//$result = mysql_query("select count(candidateid),candidateid from voting group by candidateid order by count(candidateid) //desc"); 

$result = mysql_query("select cfname,v.candidateid,ward,count(v.candidateid) from voting v,candidate c where v.candidateid=c.candidateid and c.ward='$_POST[txtward]' group by candidateid order by count(v.candidateid) desc"); 

$result1 = mysql_query("select count(v.candidateid) from voting v,candidate c where v.candidateid=c.candidateid and c.ward='$_POST[txtward]' "); 
$row1=mysql_fetch_array($result1);
//echo $row1['count(v.candidateid)'];

if(!$result)
{
die("could not get data");
}
echo"<section>";
$mydiv='<div class="tbl-header">';
   $mydiv .='<table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Candidateid</th>
          <th>Count</th>
          <th>Report</th>
</tr>
      </thead>
    </table>';
$mydiv .='</div>';
echo $mydiv;
echo "<div class='tbl-content'>";
echo "<table class='tbl-content' cellpadding='0' cellspacing='0' border='0'>";
echo "<tbody>";
while($row=mysql_fetch_array($result))
{
$p=($row['count(v.candidateid)']*100)/$row1['count(v.candidateid)'];
echo"<tr>
<td>{$row['candidateid']}</td>
<td>{$row['count(v.candidateid)']}</td>"; ?>
<td><div style="border-style:solid;border-width:2px;border-color:rgba(255,255,255,0.3);height:20px;width:100%;" >
<div style="background-color:yellow;height:20px;width:<?php echo $p; ?> "></div></div>
<?php 
echo "</td>
</tr>";}
echo "</tbody>";
echo "</table>";
echo "</div>";
echo "</section>";
echo "<h3>Total no. of votes casted: &nbsp".$row1['count(v.candidateid)']."</h3>";
mysql_close();
?>
</body>
</html>