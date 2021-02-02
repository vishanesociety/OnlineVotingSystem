<html>
<head>
<style>
body{
background:url("images/image2.png");
}

textarea:hover,input[type="text"]:hover{
background:#ffff66;
}
table{
width:50%; 	
}
td{
padding-top:10px;
padding-bottom:10px;
}
h1{
text-align:center;
color:red;
text-decoration:underline;
font-family:lucida handwriting;
}

</style>
</head>
<body>
<script   type="text/javascript">
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
<h1>Party Registration</h1>
<center>
<form action="insert_party.php" method="post">
<table>
<tr><td>Party Name</td><td><input type=text name="txtpname" placeholder="Party name" required autofocus></td></tr>
<tr><td>President</td><td><input type=text name="txtpresident" placeholder="President" required></td></tr>
<tr><td>Chairperson</td><td><input type=text name="txtchperson" placeholder="Chairperson"></td></tr>
<tr><td>Year of Foundation</td><td><input type=text name="txtfyear" placeholder="Foundation Year"></td></tr>
<tr><td>Headquarters</td><td><input type=text name="txtheadquar" placeholder="Headquarters"></td></tr>
<tr><td>No. of MLA</td><td><input type=text name="txtnomla" placeholder="Numbers of MLA"></td></tr>

<tr><td>Password</td><td><input type="password" name="txtpassword" id="txtpass" placeholder="password" required></td></tr>
<tr><td>Confirm Password</td><td><input type="password" name="txtcpassword" id="txtcpass" placeholder="re-enter password" required></td></tr>

<tr><td><input type="submit" value="SUBMIT" onclick="return validate()"></td><td><input type=reset value="RESET"></td></tr>
</table>
</form>

</center>
</body>
</html>
