<html><head>
<link rel="stylesheet" type="text/css" href="css.css">
<script src="js.js" type="text/javascript"></script>
</head>
<body>
 <h1>CANDIDATE REPORT</h1>
<?php
include 'adminloginchk.php';

$con = mysql_connect('localhost:3307', 'root', 'root') or die("connection not found");
$db = mysql_select_db("onlinevote", $con) or die("db not found");

$result = mysql_query("select path,candidateid,cfname,clname,gen,dob,age,mob1,party from candidate"); 


if(!$result)
{
die("could not get data");
}
echo"<section>";
$mydiv='<div class="tbl-header">';
   $mydiv .='<table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Image</td>
          <th>Candidate id</th>
          <th>Candidate First Name</th>
          <th>Candidate Last Name</th>
          <th>Gender</th>
          <th>Date of Birth</th>
<th>Age</th>
          <th>Mobile No.</th>
<th>Party</th>        
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
echo "<td><img src={$row['path']} width=100px height=100px></td>
<td>{$row['candidateid']}</td>
<td>{$row['cfname']}</td>
<td>{$row['clname']}</td>
<td>{$row['gen']}</td>
<td>{$row['dob']}</td>
<td>{$row['age']}</td>
<td>{$row['mob1']}</td>
<td>{$row['party']}</td>
</tr>";}
echo"</tbody>";
echo"</table>";
echo"</div>";
echo"</section>";
mysql_close();
?>
</body>
</html>