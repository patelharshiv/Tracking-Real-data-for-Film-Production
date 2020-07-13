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
if(isset($_FILES['file'])){
 $files = $_FILES['file'];
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
    $query = "UPDATE profilepic SET img_name='$filename', img_dir='$destinationfile' WHERE user_id='$userid'";
  if(!mysqli_query($conn,$query))
  {
  $query1 = "SELECT * FROM profilepic WHERE user_id='$userid'";
  $result1 = mysqli_query($conn, $query1) or die( mysqli_error($conn));
  $row=mysqli_fetch_array($result1);
  if($row){
      $img_dir = $row['img_dir'];
      echo $img_dir;
    } 
  }
  else
  {
  $query1 = "SELECT * FROM profilepic WHERE user_id='$userid'";
  $result1 = mysqli_query($conn, $query1) or die( mysqli_error($conn));
  $row=mysqli_fetch_array($result1);
  if($row){
      $img_dir = $row['img_dir'];
      echo $img_dir;
    } 
  }
      
  }


}


if(isset($_FILES['myfile'])){
 $files = $_FILES['myfile'];
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
  echo $errorattachment;
}


if(isset($_FILES['myfile12'])){
 $files = $_FILES['myfile12'];
  $videoname = $files['name'];
  $fileerror = $files['error'];
  $filetmp = $files['tmp_name'];
  $filesize = $files['size'];
  $fileext = explode('.', $videoname);
  $fileonlyname = $fileext['0'];
  $fileonlyext = $fileext['1'];
  $filecheck = strtolower(end($fileext));
  $allowed = array( 'mp4', 'mkv', 'gif');
  if(in_array($filecheck, $allowed))
  {
    $destinationfile1 = "uploadtrailer/".$videoname;
    move_uploaded_file($filetmp, $destinationfile1);
    $errorattachment="false";
  }
  else{
    $errorattachment="true";
  }
echo $errorattachment;
}

if(isset($_FILES['myfile13'])){
 $files = $_FILES['myfile13'];
  $imagename = $files['name'];
  $fileerror = $files['error'];
  $filetmp = $files['tmp_name'];
  $filesize = $files['size'];
  $fileext = explode('.', $imagename);
  $fileonlyname = $fileext['0'];
  $fileonlyext = $fileext['1'];
  $filecheck = strtolower(end($fileext));
 $allowed = array( 'jpg', 'jpeg', 'gif', 'png', 'bmp');
  if(in_array($filecheck, $allowed))
  {
    $destinationfile2 = "uploadtrailer/".$imagename;
    move_uploaded_file($filetmp, $destinationfile2);
    $errorattachment="false";
  }
  else{
    $errorattachment="true";
  }
echo $errorattachment;
}

if (isset($_FILES['myfile12']) && isset($_FILES['myfile13'])) {
if($errorattachment == "false"){
$query2 = "INSERT INTO releasetrailer(user_id,image_name,image_dir,video_name,video_url) VALUES('$userid','$imagename','$destinationfile2','$videoname','$destinationfile1')";
      if(!mysqli_query($conn,$query2))
      {
        echo "Something went wrong please try again later";
      }
      else{
        echo "done";
      }

}

}
?>