<!DOCTYPE html>
<html>
<head>
<style>
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
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color:#992a13;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 30%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #992a13;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 20%;
}

.container {
    padding: 16px;
	align : Center;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
function msg()
{
	alert('Please enter valid Credentials');
}
</script>
<img src="ongc.jpg" width="100" height="100">
<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</a></li>
  <li><a href="https://www.ongcindia.com/wps/wcm/connect/en/home/">ONGC Official</a></li>
  <li><a href="">Contact us</a></li>
</ul>
<?php
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,'ongc');
if(! $con)
{
    die('Connection Failed'.mysql_error());
}
if (isset($_POST['use']))
{
if(isset($_POST['uname'])&&!empty($_POST['uname'])&&isset($_POST['psw'])&&!empty($_POST['psw']))
{	
			$user=trim($_POST['uname']);
			$pass=trim($_POST['psw']);
			$select="SELECT * FROM `user` WHERE `cpf_user`='$user' AND `password`='$pass'";
		$qqq=mysqli_query($con,$select);
		if($row=mysqli_fetch_assoc($qqq))
		{			
			 echo'connected';
			 header("Location:userpage.php");
		}else{echo '<script type="text/javascript">',
					'msg();',
				'</script>';}
}
}if (isset($_POST['admn']))
{
	if(isset($_POST['uname'])&&!empty($_POST['uname'])&&isset($_POST['psw'])&&!empty($_POST['psw']))
	{	
			$admn=trim($_POST['uname']);
			$pass=trim($_POST['psw']);
			$select="  SELECT `cpf_admin`, `password` FROM `admin`WHERE `cpf_admin`='$admn' AND `password`='$pass'";
		$qqq=mysqli_query($con,$select);
		if($row=mysqli_fetch_assoc($qqq))
		{			
			 echo'connected';
			 header("Location:admin_option.php");
		}else{echo '<script type="text/javascript">',
					'msg();',
				'</script>';}
	}
}

?>
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="navigate.php" method='POST'>
    <div class="imgcontainer">
	
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="ongc.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container" align=CENTER>
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required><br>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
      <br>
	  <br>
      <button type="submit" name="use">User Login</button>
	  <button type="submit" name="admn">Admin Login</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"><a href="#">Forgot password?</a></span>
    </div>
  </form>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
