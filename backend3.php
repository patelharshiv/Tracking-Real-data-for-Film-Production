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
if (isset($_POST['read'])) {

$query = "SELECT * FROM checkrow ORDER BY id DESC LIMIT 1";
	$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
	$row=mysqli_fetch_array($result);
	if($row){
		$userid = $row['id'];
	}
	else{
		$userid = 0;
		echo $userid;
	}
	$query1="UPDATE checkrow SET user='$userid' WHERE id='$userid'";
	if(!mysqli_query($conn,$query1))
	{
		echo "Something went wrong please try again later";
	}
	else
	{
	}

	$query2 = "SELECT id+20 FROM checkrow WHERE id='$userid'";
	$result2 = mysqli_query($conn, $query2) or die( mysqli_error($conn));
	$row1=mysqli_fetch_row($result2);
	if($row1){
		$data = $row1[0];
		echo $data." ".$userid;
	}



}


?>