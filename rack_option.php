<?php
$con=mysqli_connect('localhost','root','');
	$db=mysqli_select_db($con,'ongc');
	$field = $_POST['rack'];
	$opt="select";
	$select="SELECT DISTINCT `shelf` FROM `total_info` WHERE `rack_num`='$field'";
	if($qqq=mysqli_query($con,$select))
	{echo '<option  value="">'.$opt.'</option>';
	while($row=mysqli_fetch_assoc($qqq))
		{
		foreach ($row as $field) {
        echo '<option  value="'.$field.'">'.$field.'</option>';
		}
		}
	}
?>