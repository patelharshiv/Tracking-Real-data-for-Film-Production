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
  $errorattachment = "true";
extract($_POST);
if(!empty($_SESSION['user_id'])){
 $userid = $_SESSION['user_id'];
}
if(isset($_FILES['attachment']) && isset($_POST['textarea12']) && isset($_POST['text12'])){
  $about = $_POST['textarea12'];
  $text = $_POST['text12'];
 $files = $_FILES['attachment'];
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
  }
  else{
    $errorattachment="true";
  }
  if ($errorattachment == "false") {
      $query3 = "INSERT INTO movies() VALUES('$first')";
      if(!mysqli_query($conn,$query3))
      {
        echo "Something went wrong please try again later";
      }
      
  }


}
