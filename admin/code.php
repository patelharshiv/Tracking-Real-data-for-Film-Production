<?php
sesssion_start();
$connection = mysql_connect("localhost","root","","adminpanel");

if(isset($_POST['registerbtn']))
{
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['confirmpassword'];


	if($password === $cpassword)
	{

		$query = "INSERT INTO register (username,email,password) values ('$username','$email','$password')";
		$query_run = mysql_query($connection, $query);

		if($query_run)
		{
   	    	//echo "Saved";
       		$_SESSION['success'] = "Admin Profile added";
       		header('Location: register.php');
		}
		else
		{
			//echo "Not saved";
			$_SESSION['status'] = "Admin Profile not added";
       		header('Location: register.php');
		}

	}
	else
	{
		$_SESSION['status'] = "password and confirm password does not match";
       	header('Location: register.php');
	}

}







?>