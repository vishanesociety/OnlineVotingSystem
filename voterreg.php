<html>
<head><link rel=stylesheet type="text/css" href="button.css">
<style>
body{
background-image:url("images/reg.jpg");
}

textarea:hover,input[type="text"]:hover{
background:#ffff66;
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
h1{
text-shadow:5px 4px blue,5px 3px black,5px 0px black,2px 5px black;
text-align:center;
color:yellow;
font-family:trajan pro;
}

</style>
</head>

<body>
<script type="text/javascript">
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


<h1>VOTER'S REGISTRATION</h1>
<hr width=50% color="white">
<center>
<form action="insert_voter.php" method="post" enctype="multipart/form-data">
<table>

<tr><td>First Name</td><td><input type="text" name="txtvfname" placeholder="Voter's First Name" required autofocus></td></tr>
<tr><td>Middle Name</td><td><input type="text" name="txtvmname" placeholder="Voter's Middle Name" ></td></tr>
<tr><td>Last Name</td><td><input type="text" name="txtvlname" placeholder="Voter's Last Name" ></td></tr>


<tr><td>Father's Name</td><td><input type="text" name="txtffname" placeholder="Father's Name" required></td></tr>
<tr><td>Aadhar card no.</td><td><input type="text" name="txtaadharno" placeholder="Aadhar Card no." required></td></tr>
<tr><td>Gender</td><td><select name="txtgen"><option selected>select</option><option>Male</option><option>Female</option></select></td></tr>

<tr><td>Date of Birth</td><td><p id="resultBday"></p><input type="date" name="txtdob" id="bday" onchange="submitBday()"></td></tr>

<tr><td>Age</td><td><input type="text" name="txtage" id="age" placeholder="Age"></td></tr>
<tr><td>Mobile No.</td><td><input type="text" name="txtmob1" placeholder="Mobile No. 1" required></td></tr>
<tr><td>Mobile No.(Alternate)</td><td><input type="text" name="txtmob2" placeholder="Mobile No. 2"></td></tr>
<tr><td>E-mail </td><td><input type="text" name="txtemail" placeholder="e-mail id"></td></tr>

<tr><td>Upload Image</td><td><input type="file" name="file"></td></tr>

<tr><td>Address</td><td><textarea placeholder="Address" name="txtaddress"></textarea></td></tr>
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

<tr><td>State</td><td><select name="txtstate"><option selected>select</option><option>Jharkhand</option><option>West Bengal</option>
<option>Karnataka</option><option>Gujarat</option><option>Bihar</option><option>Maharastra</option></select></td></tr>

<tr><td>Pincode</td><td><input type="text" name="txtpin" placeholder="Pincode"></td></tr>
<tr><td>Nationality</td><td><input type="text" name="txtnation" placeholder="Nationality"></td></tr>
<tr><td>Password</td><td><input type="password" name="txtpassword" id="txtpass" placeholder="password" required></td></tr>
<tr><td>Confirm Password</td><td><input type="password" name="txtcpassword" id="txtcpass" placeholder="re-enter password" required></td></tr>
<tr>
<td><input type="submit" class="button" value="SUBMIT" onclick="return validate()"/></td>
<td><input type="reset" class="button" value="RESET"/></td></tr>
</table>
</form>
</center>
</body>
</html>