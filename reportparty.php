<html><head>
<link rel="stylesheet" type="text/css" href="css.css">
<script src="js.js" type="text/javascript"></script>
</head>
<body>
 <h1>PARTY REPORT</h1>
<?php
include 'adminloginchk.php';

$con = mysql_connect('localhost:3307', 'root', 'root') or die("connection not found");
$db = mysql_select_db("onlinevote", $con) or die("db not found");

$result = mysql_query("select path,partyid,pname,president,fyear from party"); 


if(!$result)
{
die("could not get data");
}
echo"<section>";
$mydiv='<div class="tbl-header">';
   $mydiv .='<table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Party id</th>
          <th>Party Logo</th>
          <th>Party Name</th>
          <th>President</th>
          <th>Foundation Year</th>
          
        </tr>
      </thead>
    </table>';
$mydiv .='</div>';
echo $mydiv;
echo"<div class='tbl-content'>";
echo"<table class='tbl-content' cellpadding='0' cellspacing='0' border='0'>";
echo"<tbody>";
while($row=mysql_fetch_array($result))

{
echo"<tr>";
echo"
<td>{$row['partyid']}</td>
<td><img src={$row['path']} width=100px height=100px></td>
<td>{$row['pname']}</td>
<td>{$row['president']}</td>
<td>{$row['fyear']}</td>
</tr>";}
echo"</tbody>";
echo"</table>";
echo"</div>";
echo"</section>";
mysql_close();
?>
</body>
</html>