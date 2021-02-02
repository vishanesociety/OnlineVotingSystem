<html>
<head><link rel=stylesheet type="text/css" href="button.css">
<style>
h1{
text-shadow:5px 4px blue,5px 3px black,5px 0px black,2px 5px black;
text-align:center;
color:yellow;
font-family:trajan pro;
}

body{
background-image:url("images/reg.jpg");
background-size:cover;
}

textarea:hover,input[type="text"]:hover{
background:linen;
}
table{
width:50%; 	
}
td{
font-family:candara;
font-size:17;
padding-top:10px;
padding-bottom:10px;
}

</style>
</head>

<body><h1>CANDIDATE'S REGISTRATION</h1>
<hr width=50% color="white">
<script   type="text/javascript">
function submitBday() {
var input = document.createElement('input'); 
input.type = "text";     
    var Q4A = "";
    var Bdate = document.getElementById('bday').value;
    var Bday = +new Date(Bdate);
    Q4A = ~~ ((Date.now() - Bday) / (31557600000));
    var theBday = document.getElementById('resultBday');

document.getElementById('age').value=Q4A;

container.appendChild(input); 
}
function validate(){
var pass=document.getElementById("txtpass").value;
var cpass=document.getElementById("txtcpass").value;
if(pass!=cpass)
{
alert("Passwords do not match");
return false;}
return true;
}
</script>
?php
//$con = mysql_connect('localhost:3307', 'root', 'root') or die("connection not found");
//$db = mysql_select_db("onlinevote", $con) or die("db not found");

/*$result = mysql_query("select pname from party"); 
if(!$result)
{
die("could not get data");
}
?>*/

<center>
<form action="insert_candidate.php" method="post" enctype="multipart/form-data">
<table>
<tr><td>First Name</td><td><input type="text" name="txtcfname" placeholder="Candidate's First Name" required autofocus></td></tr>
<tr><td>Middle Name</td><td><input type="text" name="txtcmname" placeholder="Candidate's Middle Name" ></td></tr>
<tr><td>Last Name</td><td><input type="text" name="txtclname" placeholder="Candidate's Last Name" ></td></tr>


<tr><td>Father's Name</td><td><input type="text" name="txtfname" placeholder="Father's Name" required></td></tr>

<tr><td>Aadhar card no.</td><td><input type="text" placeholder="Aadhar card no." name="txtaadhar"required></td></tr>
<tr><td>Gender</td><td><select name="txtgen"><option selected>select</option><option>Male</option><option>Female</option></select></td></tr>
<tr><td>Date of Birth</td><td><p id="resultBday"></p><input type="date" name="txtdob" id="bday" onchange="submitBday()"></td></tr>
<tr><td>Age</td><td><input type="text" placeholder="Age" name="txtage" id="age" ></td></tr>
<tr><td>Mobile No.</td><td><input type="text" placeholder="Mobile no. 1" name="txtmob1" required></td></tr>
<tr><td>Mobile No.(alternate)</td><td><input type="text" placeholder="Mobile no. 2" name="txtmob2"></td></tr>

<tr><td>Qualification</td><td><select name="txtqualify"><option selected>select</option><option>below 10th</option>
<option>Matriculate</option><option>Intermediate</option><option>Graduate</option><option>Post Graduate</option>
<option>PhD</option></select></td></tr>

<tr><td>E-mail </td><td><input type="text" placeholder="e-mail" name="txtemail"></td></tr>

<tr><td>Upload Image</td><td><input type="file" name="file"></td></tr>


<tr><td>Address</td><td><textarea placeholder="Address" required=required name="txtaddress"></textarea></td></tr>
<tr><td>Ward Number</td><td> 
<select name="txtward">
<?php
echo"<option>select</option>";
for($i=1;$i<=40;$i++)
{
echo"<option>$i</option>";
}
?>
</select></td></tr>
<tr><td>City</td><td><input type="text" name="txtcity" placeholder="City"></td></tr>

<tr><td>State</td><td><select name="txtstate"><option selected>select</option>
<option>Jharkhand<option>West Bengal</option><option>Karnataka</option>
<option>Gujarat</option><option>Bihar</option><option>Maharastra</option></select></td></tr>

<tr><td>Pincode</td><td><input type="text" placeholder="Pincode" name="txtpin" required=required></td></tr>

<tr><td>Party Name</td><td><select name=txtparty><option selected>select</option>
<?php 
while($row1=mysql_fetch_array($result))
{
echo "<option>{$row1['pname']}</option>";
}
mysql_close();
?>
</td></tr>

<tr><td>Description of Property</td><td><textarea placeholder="Full details of property"  name="txtproperty"></textarea></td></tr>
<tr><td>Assets in Rupees</td><td><input type=text name="txtasset" placeholder="Assets in Rupees"></td></tr>
<tr><td>Area</td><td><input type=text name="txtarea" placeholder="Area"></td></tr>
<tr><td>Nationality</td> <td><input type="text" name="txtnation" required></td></tr>
<tr><td>Password</td><td><input type="password" name="txtpassword" id="txtpass" placeholder="password"></td></tr>
<tr><td>Confirm Password</td><td><input type="password" name="txtcpassword" id="txtcpass" placeholder="re-enter password"></td></tr>
<tr><td><input type="submit" value="SUBMIT" class="button" onclick="return validate()"/></td><td><input type="reset" class="button" value="RESET"/></td></tr>
</table>
</form>
</center>
</body>
</html>
