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
if(!empty($_SESSION['user_id'])){
	$userid = $_SESSION['user_id'];
}
if(!empty($_SESSION['fname']) && !empty($_SESSION['lname'])){
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];
  $fullname = $fname." ".$lname;

}

if(isset($_FILES['upload1']) && isset($_POST['textarea12']) && isset($_POST['ta1'])){
	 $files = $_FILES['upload1'];
  $filename = $files['name'];
  $fileerror = $files['error'];
  $filetmp = $files['tmp_name'];
  $filesize = $files['size'];
  $fileext = explode('.', $filename);
  $fileonlyname = $fileext['0'];
  $fileonlyext = $fileext['1'];
  $filecheck = strtolower(end($fileext));
  $allowed = array( 'jpg', 'jpeg', 'gif', 'png', 'bmp');
  if(in_array($filecheck, $allowed))
  {
    $destinationfile = "uploadimages/".$filename;
    move_uploaded_file($filetmp, $destinationfile);
    $errorattachment="false";
      $textarea12 = $_POST['textarea12'];
  $ta1 = $_POST['ta1'];
  $query = "INSERT INTO advertise(image_dir,advertise_by, about_info, user_id) VALUES('$destinationfile','$fullname','$textarea12','$userid') ";
  if(!mysqli_query($conn,$query))
  { 
    echo "failed";
  }
  else{
    echo "success";
  } 
  }
  else{
    $errorattachment="true";

}
}



?>