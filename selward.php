<html>
<head>
<style>
select{
width:50px;
height:25px;
}
input[type=submit]{
margin-top:10px;
text-transform:uppercase;
font-size:18px;
width:100px;
height:25px;
border:none;
background-color:white;
color:black;
}
input[type=submit]:hover{
color:white;
background-color:rgba(0,0,0,0.5);
}
form{
text-align:center;
}
h3{
font-size:20px;
color:linen;
}
h1{
color:linen;
text-align:center;
}
body{
background-image:url("images/indexbg.jpg");
</style>
</head>
<body>
<h1>Select Ward number to get the Result</h1>
<form action=result.php method=post>
<h3>Ward No.<select name=txtward></h3>
<?php
for($i=1;$i<=40;$i++)
{
echo"<option>$i</option>";
}
?>
</select>
<br/><input type=submit value=submit>
</form>

</body>
</html>
