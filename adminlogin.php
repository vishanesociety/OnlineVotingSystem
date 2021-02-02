

<html>

<head>
<style>
label{
padding-left:55px;
}
h2
{
margin-top:-20px;
text-align:center;
}

form {
margin-top:-20px;
border: 3px solid #f1f1f1;
margin-left:450;
margin-right:450;
}

input[type=submit]{
font-family:verdana;
color:white;
font-size:20;
border:none;
background-color:009933;
margin: 5px 0;
width:300px;
height:40px;
text-align:center;
}
input[type=text], input[type=password]{
height:30px;
width:200px;
margin: 8px 0;
display: inline-block;
border: 1px solid #ccc;
}


button {
background-color: #4CAF50;
color: white;
padding: 14px 20px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 100%;
}

.imgcontainer{margin-top:5px;
margin-left:120px;
text-align:center;
border-radius:50%;
width:40%;
height:180px;
}

img.avatar {
height:180px;
width: 100%;    
border-radius: 50%;
}

.container{  
margin-top:-18px;  
padding: 10px;
}

</style>
</head>
<body>
​

<h2>ADMIN LOGIN</h2>
<form action="adminloginverify.php" method="post">
  
<div class="imgcontainer">
    
		<img src="images/avatar.png" alt="Avatar" class="avatar">
  </div>
​
 
          <div class="container">
   
 		<label><b>Username &nbsp&nbsp&nbsp&nbsp</b></label>
  
	  <input type="text" placeholder="Enter Username" name="txtuser" autofocus>
​
 <br/><br/>
  	<label><b>Password &nbsp&nbsp&nbsp&nbsp&nbsp</b></label>
    
	<input type="password" placeholder="Enter Password" name="txtpassword">
	<br/><br/>
<center><input type="submit" value="LOGIN"></center></br>
</div>
</form>

</body>

</html>