<?php
	$con=mysqli_connect('localhost','root','');
	$db=mysqli_select_db($con,'ongc');
	$field = $_POST['name'];
	$opt="Select";
	$select="SELECT `well_name` FROM `field_well` WHERE `field`='$field'";
	if($qqq=mysqli_query($con,$select))
	{ echo '<option  value="">'.$opt.'</option>';
	while($row=mysqli_fetch_assoc($qqq))
		{
		foreach ($row as $field) {
        echo '<option  value="'.$field.'">'.$field.'</option>';
		}
		}
	}
    ?>