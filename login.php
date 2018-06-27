<?php
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,'ongc');
if(isset($_POST['user'])&&!empty($_POST['user'])&&isset($_POST['pass'])&&!empty($_POST['pass']))
{	
			$user=trim($_POST['user']);
			$pass=trim($_POST['pass']);
		if($table=mysqli_query($con,"SELECT * FROM `user` WHERE `cpf_user` = '$user' AND `password` = '$pass' "))
		{	
			echo 'connected done';
		}
}

?>
<form action='login.php' action='POST'>
username<input type='text' name='user'><br>
password<input type='password' name='pass'><br>
<input type='submit' name='sub' value='login'>
</form>