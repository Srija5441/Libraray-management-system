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
.topnav-right {
  float: right;
}
fieldset{
  border: 0.5px solid purple ;
  width:90%;
  margin:auto;
}
select
{
 width:400px;
 height:50px;
 border:1px solid #BDBDBD;
 margin-top:20px;
 padding:10px;
 font-size:20px;
 color:grey;
 border-radius:5px;
}
table , th , td{
	border : 1px solid #ddd;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="select_style.css">
<img src="ongc.jpg" width="100" height="100">
<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="https://www.ongcindia.com/wps/wcm/connect/en/home/">ONGC Official</a></li>
  <li><a href="">Contact us</a></li>
  <div class="topnav-right">
  <li><a href="navigate.php">Logout</a></li>
  </div>
</ul>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">

function all()
{
	alert('please enter atleast one field');
}
function rack_select()
{
	var strrack=$('#rack_id').find(":selected").text();
	$.ajax({
 type: 'post',
 url: 'rack_option.php',
 data: {rack:strrack},
 cache: false,
 success: function (response) {
  document.getElementById("shelf_id").innerHTML=response; 
 }
 });
}
function fetch_select()
{
	var strUser=$('#select_box').find(":selected").text();
	
 $.ajax({
 type: 'post',
 url: 'fetch_option.php',
 data: {name:strUser},
 cache: false,
 success: function (response) {
  document.getElementById("new_select").innerHTML=response; 
 }
 });
  $.ajax({
 type: 'post',
 url: 'fetch_option2.php',
 data: {name:strUser},
 cache: false,
 success: function (response) {
  document.getElementById("doc_box").innerHTML=response; 
 }
 });
 return false;
}

</script>

<form method="POST" action='userpage.php'>
 Field:
<select name="field" id="select_box" onchange="return fetch_select();">
    <option  value="">Select field</option>
	<?php
	//$_SESSION["field"] = fetch_select(this.value);
	$con=mysqli_connect('localhost','root','');
	$db=mysqli_select_db($con,'ongc');
	$select="SELECT DISTINCT `field` FROM `total_info` ORDER BY `field` ASC";
	if($qqq=mysqli_query($con,$select))
	{
	while($row=mysqli_fetch_assoc($qqq))
		{
		foreach ($row as $field) {
        echo '<option  value="'.$field.'">'.$field.'</option>';
		}
		}
	}
    ?>
</select>
<br>Well
<select id="new_select" name="well">
	<option  value="">Select field</option>
</select>
<br>DOCTYPE
<select id="doc_box" name="doc">
    <option  value="">Select field</option>
</select>

<br><input type="submit" name="button1" value="Search">
<br>RACK NUMBER:
<select name="rack" id="rack_id" onchange="return rack_select();">
    <option  value="">Select field</option>
	<?php
	$rack="SELECT `rack_num` FROM `rack_info`";
	$qqq=mysqli_query($con,$rack);
	while($row=mysqli_fetch_assoc($qqq))
		{
		foreach ($row as $rackr) {
        echo '<option  value="'.$rackr.'">'.$rackr.'</option>';
		}
	}
    ?>
</select>
<br>Shelf
<select id="shelf_id" name="shelf">
    <option  value="">Select field</option>
</select>
<br><input type="submit" name="button2" value="Search">
<br><input type="submit" name="viewall" value="View all">
</form>
<?php
$colm=[];
 $count=0;
 $sql = "SHOW COLUMNS FROM `total_info`";
$result1 = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result1))
{
	$colm[$count]= $row['Field'];
	$count=$count+1;
}
if(isset($_POST['viewall']))
{
	$sel="SELECT * FROM `total_info` WHERE 1";
	if($qqq=mysqli_query($con,$sel))
	{
		
	echo '<div class="container">';
		echo '<table  class="table table-hover">';
		echo ' <tr>
    <th>Field</th>
    <th>Well Name</th>
    <th>Document Type</th>
	<th>Rack</th>
	<th>Shelf</th>
  </tr>';
		while($row=mysqli_fetch_assoc($qqq))
		{echo '<tr>';
			 foreach ($row as $col => $val) 
			 {
				  
				  echo '<td>'.$val.'</td>';
				
		}  echo '</tr>';
	}echo '<table>';
	}
}




if (isset($_POST['button1']))
{ $fields = array('field', 'well', 'doc');
  $error = "false"; 
  $select="SELECT * FROM `total_info` WHERE ";
  $num=0;
foreach($fields as $fieldname)
 { 
  if(isset($_POST[$fieldname])&&!empty($_POST[$fieldname])) 
  {
	 $select=$select."`".$colm[$num]."`="."'".$_POST[$fieldname]."' AND";
	 $error="true";
  }
  $num=$num+1;
}
$select= preg_replace('/\W\w+\s*(\W*)$/', '$1', $select);
if($error!="false")
{
if($qqq=mysqli_query($con,$select))
	{
		
	echo '<div class="container">';
		echo '<table  class="table table-hover">';
		echo ' <tr>
    <th>Field</th>
    <th>Well Name</th>
    <th>Document Type</th>
	<th>Rack</th>
	<th>Shelf</th>
  </tr>';
		while($row=mysqli_fetch_assoc($qqq))
		{echo '<tr>';
			 foreach ($row as $col => $val) 
			 {
				  
				  echo '<td>'.$val.'</td>';
				
		}  echo '</tr>';
	}echo '<table>';
	}
}
  else
  {
	echo '<script type="text/javascript">',
     'all();',
     '</script>';
  }  
}



if (isset($_POST['button2']))
{
	 $fields1 = array('rack','shelf');
	   $error1 = "false"; 
		$select1="SELECT * FROM `total_info` WHERE ";
		$num1=3;
		foreach($fields1 as $fieldname1)
		{ 
			if(isset($_POST[$fieldname1])&&!empty($_POST[$fieldname1])) 
			{
				$select1=$select1."`".$colm[$num1]."`="."'".$_POST[$fieldname1]."' AND";
				$error1="true";
			}
			$num1=$num1+1;	
		}
		$select1= preg_replace('/\W\w+\s*(\W*)$/', '$1', $select1);
		if($error1!="false")
		{
		if($qq=mysqli_query($con,$select1))
		{
			echo '<div class="container">';
			echo '<table  class="table table-hover">';
			echo ' <tr>
			<th>Field</th>
			<th>Well Name</th>
			<th>Document Type</th>
			<th>Rack</th>
			<th>Shelf</th>
			</tr>';
		while($rows=mysqli_fetch_assoc($qq))
		{
				echo '<tr>';
			 foreach ($rows as $cols => $vals) 
			 {			  
				  echo '<td>'.$vals.'</td>';				
			}  
			echo '</tr>';
		}
		echo '<table>';
	  }
		}
	  else
  {
	echo '<script type="text/javascript">',
     'all();',
     '</script>';
  }  
}
?>
</body>
</html>
