<?php
 session_start();
 session_destroy();
 echo "Successfully Logged out";
 header("Refresh:2; url=index.php");
?>