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
.btn{border-radius : 2px;
     }
	
table {
    border-collapse: collapse;
    width: 38%;
	margin-left:225px;
	margin-top:20px;
	font family:'Bitter';
}

th, td {
    padding: 2px;
    text-align: right;
    border-bottom: 0px;
	font family:'Bitter';
}

td{
   font family:'Amiri';}

tr:hover {background-color:#f5f5f5;}
fieldset{
         margin-top:50px;
		 margin-right:380px;
		 margin-left:400px;}
 .btn {
  background-color: #9F1717;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 1;
  transition: 0.3s;
}

.btn:hover {opacity: 0.6}
.btn  {
       margin-left:350px;}
.topnav-right {
  float: right;
}
</style>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
function msg()
{
	alert('All the fields are mandatory');
}
function msg2()
{
	alert('Successfullly added');
}
function msg3()
{
	alert('Entry already exists');
}
function fetch_select()
{
	var strUser=$('#select_box').find(":selected").text();
	
 $.ajax({
 type: 'post',
 url: 'fetch_well.php',
 data: {name:strUser},
 cache: false,
 success: function (response) {
  document.getElementById("new_select").innerHTML=response; 
 }
 });
 return false;
}

</script>
<form method="POST" action='indexed.php'>
<img src="ongc.jpg" width="100" height="100">
<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="https://www.ongcindia.com/wps/wcm/connect/en/home/">ONGC Official</a></li>
  <li><a href="">Contact us</a></li>
  <div class="topnav-right">
  <li><a href="navigate.php">Logout</a></li>
  </div>
</ul>
<div>
<link href='https://fonts.googleapis.com/css?family=BioRhyme' rel='stylesheet'>
<fieldset>

<table>
  <tr>
    <td>Field name :</td>
    <th>
		<select name="field" id="select_box" onchange="return fetch_select();">
			<option  value="">Select field</option>
			<?php
			$con=mysqli_connect('localhost','root','');
			$db=mysqli_select_db($con,'ongc');
			$select="SELECT DISTINCT `field` FROM `total_info` ORDER BY `field` ASC";
			if($qqq=mysqli_query($con,$select))
			{
				while($row=mysqli_fetch_assoc($qqq))
				{
					foreach ($row as $field) 
					{
					echo '<option  value="'.$field.'">'.$field.'</option>';
					}
				}
			}
			?>
		</select><br><br>
	</th>
  </tr>
  <tr>
    <td>Well name :</td>
    <td>
	<select id="new_select" name="well">
	<option  value="">Select field</option>
	</select><br><br>
	</td>
  
  </tr>
  <tr>
    <td>Document :</td>
    <td><select name="doc" id="select_doc" >
			<option  value="">Select field</option>
			<?php
			$rack="SELECT `doc_type` FROM `doc_type` WHERE 1";
			$qqq=mysqli_query($con,$rack);
			while($row=mysqli_fetch_assoc($qqq))
			{
				foreach ($row as $rackr) {
				echo '<option  value="'.$rackr.'">'.$rackr.'</option>';
				}
			}
    ?>
		</select><br><br></td>
  </tr>
  <tr>
    <td>Rack number:</td>
    <td><select name="rack" id="rack_id" onchange="return rack_select();">
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
</select><br><br></td>
  </tr>
  <tr>
    <td>Shelf number:</td>
    <td><select name="shelf" id="rack_id" onchange="return rack_select();">
    <option  value="">Select field</option>
	<?php
	$rack="SELECT `shelf` FROM `shelf_info` WHERE 1";
	$qqq=mysqli_query($con,$rack);
	while($row=mysqli_fetch_assoc($qqq))
		{
		foreach ($row as $rackr) {
        echo '<option  value="'.$rackr.'">'.$rackr.'</option>';
		}
	}
    ?>
</select><br><br></td>
  </tr>
  </table>
<meta name="viewport" content="width=device-width, initial-scale=1">
<button class="btn" name="add">Add</button>
</fieldset>
</div>
</form>
<?php
if (isset($_POST['add']))
{	
  $fields = array('field', 'well', 'doc','rack','shelf');
  $error = "true"; 
  $select="SELECT * FROM `total_info` WHERE ";
  $insert="INSERT INTO `total_info`(`field`, `well_name`, `doc_type`, `rack_num`, `shelf`) VALUES (";
  $count=0;
  $sql = "SHOW COLUMNS FROM `total_info`";
	$result1 = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($result1))
	{
		$colm[$count]= $row['Field'];
		$count=$count+1;
	}
  
	foreach($fields as $fieldname)
	{ 
		if(!isset($_POST[$fieldname])||empty($_POST[$fieldname])) 
		{	
			$error="false";
		}
	}
	if($error=="false")
	{
		echo '<script type="text/javascript">',
			'msg();',
			'</script>';
	}
	else
	{
		$num=0;
		foreach($fields as $fieldname)
		{ 
			$insert=$insert." '".$_POST[$fieldname]."',";
			 $select=$select."`".$colm[$num]."`="."'".$_POST[$fieldname]."' AND";
			 $num=$num+1;
		}
		$insert=rtrim($insert,", ");
		$select= preg_replace('/\W\w+\s*(\W*)$/', '$1', $select);
		$insert=$insert.")";
		if($qq=mysqli_query($con,$select))
		{
			if($row=mysqli_fetch_assoc($qq))
			{
				echo '<script type="text/javascript">',
					'msg3();',
					'</script>';
			}
			else
			{
				if($qqq=mysqli_query($con,$insert))
				{
					echo '<script type="text/javascript">',
					'msg2();',
					'</script>';
				}
			}
		}
		
		
	}
}
?>
</body>
</html>



        
    


