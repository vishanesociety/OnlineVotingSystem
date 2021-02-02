

<html>

<head>
<style>
img{
border-radius:50%;
}
body{
background-image:url(images/log.jpg);
background-size:cover;
}
input[type=submit]{
border:none;
width:55%;
background-color:green;
color:white;
height:30px;
}
h2{
text-align:center;
color:red;
}

.reg{
text-decoration:none;
//background-color:#ff3300;
//color:white;
padding:3px;
}

table{
margin-top:-60px;
width:35%;
}
td{
padding:15px;
text-align:center;
}
</style>
</head>
<body>
​

<a href="index.php"><img src="images/icon.jpg" height=50px width=50px></a>
<h2>CANDIDATE LOGIN</h2>
<form action="cndloginverify.php" method="post">
  
<table align=center>
<tr><td><center><img src="images/avatar.png">
</center></td></tr>


<tr><td><b>User_ID  &nbsp&nbsp&nbsp</b><input type="text" placeholder="Candidate_Id" name="txtuser" required autofocus>
​
 </td></tr>
 <tr><td><b>Password  &nbsp</b><input type="password" placeholder="Enter Password" name="txtpassword" required></td></tr>

<tr><td><center><input type="submit" value="LOGIN"></center></td></tr>
<tr><td><b>New Candidate ?  &nbsp</b><a href="candidatereg.php" class="reg">Register yourself</a></td></tr>
<br/><br/> 
</table>
 

</form>


</body>

</html>