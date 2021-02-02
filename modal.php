<html>
<head>
<style>
input[type=submit]{
background-color:#28bbf8;
}
input[type=text]:hover{
background-color:#ffff99;
}
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 50px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 70%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: rgba(0,0,0,0.4);
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

</style>
</head>
<body>

<h2>Admin Page</h2>

<!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>


<!-- The Modal -->
<div id="modal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>VOTER LOGIN</h2>
    
</div>
    
<div class="modal-body">
Username:<input type=text name=txtuser autofocus>&nbsp&nbsp Password:<input type=passwordname=txtpassword>
<input type=submit value=LOGIN>
<div class="modal-footer">
      <center><h2></h2></center><br/>
      <center></center>    
</div>

 </div>
</div>
</div>
<script>
var modal = document.getElementById('modal');

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];
 
btn.onclick =function() 
{
    modal.style.display = "block";
}

span.onclick =function() 
{
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>



<button id="myBtn1"> Modal</button>


<!-- The Modal -->
<div id="m" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2> LOGIN</h2>
    
</div>
    
<div class="modal-body">
Username:<input type=text name=txtuser autofocus>&nbsp&nbsp Password:<input type=passwordname=txtpassword>
<input type=submit value=LOGIN>
<div class="modal-footer">
      <center><h2></h2></center><br/>
      <center></center>    
</div>

 </div>
</div>


</div>


<script>
var modal = document.getElementById("m");
var btn = document.getElementById("myBtn1");

var span = document.getElementsByClassName("close")[0];
 
btn.onclick =function() 
{
    modal.style.display = "block";
}

span.onclick =function() 
{
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>