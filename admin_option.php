<!DOCTYPE html>
<html>
<head>
<style>
input[type=submit] {
    padding:5px 15px; 
    background:#ccc; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 20px; 
	margin-top:170px;
}
.button1 {padding: 16px 32px;}
  .button2 {padding: 16px 32px;}
  .button3 {padding: 16px 32px;}
  .button1 {background-color: #f44336;} /* Green */
  .button2 {background-color: #f44336;}
  .button3 {background-color: #f44336;}
  .button1 {border-radius:20px;}
  .button2 {border-radius:20px;}
  .button3 {border-radius:20px;}
  .button1 {margin-top:300px;}
ul {
    list-style-type: none;
    margin: 0;
    margin-left: 0;
    margin-right: 0;
    padding: 0;
    overflow: hidden;
    background-color: #9F1717;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
li x {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    line-height: 1;
    margin-left: 910px;
    zoom: 1;
    text-decoration: none;
}

li x:hover {
  background-color: #111;
}
.topnav-right {
  float: right;
}
</style>
</head>
<body>
<img src="ongc.jpg" width="100" height="100">
<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="https://www.ongcindia.com/wps/wcm/connect/en/home/">ONGC Official</a></li>
  <li><a href="">Contact us</a></li>
 <div class="topnav-right">
  <li><a  href="navigate.php">Logout</a></li></div>
</ul>

<div>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.btn {
  border: 2px solid black;
  background-color: white;
  color: black;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
}

/* Green */
.success {
  border-color: #4CAF50;
  color: green;
  border-radius:20px;
  margin-top:50px;
}

.success:hover {
  background-color: #4CAF50;
  color: white;
}

/* Blue */
.info {
  border-color: #2196F3;
  color: dodgerblue;
  border-radius:20px;
}

.info:hover {
  background: #2196F3;
  color: white;
}

/* Orange */
.warning {
  border-color: #ff9800;
  border-radius:20px;
  color: orange;
}

.warning:hover {
  background: #ff9800;
  color: white;
}

/* Red */
.danger {
  border-color: #f44336;
  color: red;
  border-radius:20px;
}

.danger:hover {
  background: #f44336;
  color: white;
}

/* Gray */
.default {
  border-color: #e7e7e7;
  color: black;
}

.default:hover {
  background: #e7e7e7;
}
</style>
</head>
<body>
<?php

if (isset($_POST['add']))
{
	header("Location:indexed.php");
}
if (isset($_POST['view']))
{
	header("Location:userpage.php");
}
if (isset($_POST['update']))
{
	header("Location:indexed2.php");
}
if (isset($_POST['delete']))
{
	header("Location:delete.php");
}
?>
<form method="POST" action='admin_option.php'>
<button type='submit' class="btn success" name="add">Add</button>
<button type='submit' class="btn info" name="view">View</button>
<button type='submit' class="btn warning" name="update">Update</button>
<button type='submit' class="btn danger" name="delete">Delete<//button>
</form>
</body>
</html>

</div>
<div>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}


         
.myBtn{
       margin-top:300px;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
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
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
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
</style>
</head>
<body>



<!-- Trigger/Open The Modal -->
<button id="myBtn">Add Rack</button>
<button id="myBtn2">Add Field</button>
<button id="myBtn3">Add Well</button>
<button id="myBtn4">Add Shelf</button>
<button id="myBtn5">Add Document</button>

<!-- The Modal -->
<div id="myModal" class="modal">
 <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    Rack number:<input type="number" /><br><br>
	  <input type="submit" value="submit"/>
  </div>
  <div id="myModal2" class="modal">
 <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    Field:<input type="number" /><br><br>
	  <input type="submit" value="submit"/>
  </div>
  <div id="myModal3" class="modal">
 <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    Well Name:<input type="number" /><br><br>
	  <input type="submit" value="submit"/>
  </div>
    <div id="myModal4" class="modal">
 <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    Shelf Number:<input type="number" /><br><br>
	  <input type="submit" value="submit"/>
  </div>
    <div id="myModal5" class="modal">
 <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    Document Type:<input type="number" /><br><br>
	  <input type="submit" value="submit"/>
  </div>
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');
var modal2 = document.getElementById('myModal2');
var modal3 = document.getElementById('myModal3');
var modal4 = document.getElementById('myModal4');
var modal5 = document.getElementById('myModal5');
// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btn2 = document.getElementById("myBtn2");
var btn3 = document.getElementById("myBtn3");
var btn4 = document.getElementById("myBtn4");
var btn5 = document.getElementById("myBtn5");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}
btn2.onclick = function() {
    modal2.style.display = "block";
}
btn3.onclick = function() {
    modal3.style.display = "block";
}
btn4.onclick = function() {
    modal4.style.display = "block";
}
btn5.onclick = function() {
    modal5.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
	modal2.style.display = "block";
	 modal3.style.display = "block";
	  modal4.style.display = "block";
	  modal5.style.display = "block";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
		 modal2.style.display = "none";
		  modal3.style.display = "none";
		   modal4.style.display = "none";
		    modal5.style.display = "none";
    }
}
</script>

</body>
</html>


</div>
</body>
</html>

