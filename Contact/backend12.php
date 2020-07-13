<?php
session_start();
$db_hostname = 'localhost';
$db_database = 'registration';
$db_username = 'root';
$db_password = '';
$conn=mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  extract($_POST);
 if(isset($_POST['email']) && isset($_POST['message']) && isset($_POST['name'])){
 	$query = "INSERT INTO contactus(email,message,Name) VALUES('$email','$message','$name')";
	if(!mysqli_query($conn,$query))
	{
		echo "Something went wrong please try again later";
	}
	else
	{
		echo "You are Successfully Registered..";
	}

 }