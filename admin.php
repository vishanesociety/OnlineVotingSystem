<?php
echo"<style>
.header{
text-shadow:0px 5px black,1px 1px grey;
font-size:45px;
color:Black;
text-transform:uppercase;
text-align:center;
background-image:url(images/indexbg.jpg);
background-size:cover;
width:100%;
}


body{
background-image:url(images/indexbg.jpg);
background-size:cover;
}

a{
text-transform:uppercase;
color:black;
padding:12px;
text-decoration:none;
font-size:18px; 
border-right-style:solid;
}
a:hover{
color:white;
background-color:rgba(0,0,0,0.3);
}
</style>";

echo "<h1 class=header>Admin Page</h1>";
echo "<a href=index.php>Home</a>";
echo "<a href=about.php target=frame>About</a>";
echo "<a href=selward.php target=frame>Result</a>";
echo "<br/><br/><br/>";
echo "<iframe src=adminlogin.php name=frame height=500px; width=100% style=border:none;></iframe>";
?>
