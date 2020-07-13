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
  $errorfname = true;
  $errorlname = true;
  $erroremail = true;
  $errormno = true;
  $erroruname = true;
  $errorpwd = true;
  $first= "guest";
  $second= "Reviewer";
  $third= "AnalystExpert";
  $fourth= "Admin";
  $fifth = "productionmanager";
extract($_POST);
/*if(isset($_POST['uname']))
{
	$uname=$_POST['uname'];
	$_SESSION['uname']=$uname;
}*/
if(isset($_POST['y'])){
	echo $y;
}
if(isset($_POST['uname']) && isset($_POST['z']))
{
	$uname=$_POST['uname'];
	if(empty($uname)){
		echo "Please Enter username..";
	}
	else{
		if($z == $second){
		$query= "SELECT * FROM form12 WHERE username='$uname'"; 
		$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
		$row=mysqli_fetch_assoc($result);
		if(empty($row)){
			echo "no such user found";
		} 
		}
		if($z == $third){
		$query= "SELECT * FROM analyst WHERE username='$uname'"; 
		$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
		$row=mysqli_fetch_assoc($result);
		if(empty($row)){
			echo "No such user found";
		}
		}
		if($z == $fourth){
		$query= "SELECT * FROM administrator WHERE Name='$uname'"; 
		$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
		$row=mysqli_fetch_assoc($result);
		if(empty($row)){
			echo "no such user found";
		}
		}
		if($z == $fifth){
		$query= "SELECT * FROM productionmanager123 WHERE uname='$uname'"; 
		$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
		$row=mysqli_fetch_assoc($result);
		if(empty($row)){
			echo "no such user found";
		}
		}
		$erroruname=false;
	} 
}
if(isset($_POST['uname']) && isset($_POST['pwd']))
{
	if($z == $second){
	$query= "SELECT * FROM form12 WHERE username='$uname'"; 
	$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
	$row=mysqli_fetch_assoc($result);
	if($row){
		if($row['password']!= $pwd){ echo "<span style='color:red;'><b><h5>Your Bad!! Password does not matched...</h5</b></span>";}
		else{
			$uname=$_POST['uname'];
			$userid = $row['id'];
			$_SESSION['fname'] = $row['firstname'];
			$_SESSION['lname'] = $row['lastname'];
			$_SESSION['user_id'] = $userid;
			$_SESSION['email'] = $row['email'];
			$_SESSION['mno'] = $row['Mobileno'];
			$_SESSION['uname']=$uname;
			$_SESSION['work']=$fourth;
			$_SESSION['timestamp']=time();
			echo "password matched successfully"; 
			}
	}else{
		echo "no such user found";
	}
}
}
if(isset($_POST['uname']) && isset($_POST['pwd']))
{	
	if($z == $third){
			$query= "SELECT * FROM analyst WHERE username='$uname'"; 
			$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
			$row=mysqli_fetch_assoc($result);
	if($row){
		if($row['Password']!= $pwd){ echo "<span style='color:red;'><b><h5>Your Bad!! Password does not matched...</h5</b></span>";
		}
		else{
					$uname=$_POST['uname'];
					$_SESSION['uname']=$uname;
					$_SESSION['timestamp']=time();
					echo "password matched successfully"; 
			}
		}else{
			echo "no such user found";
		}
}
}
if(isset($_POST['uname']) && isset($_POST['pwd']))
{	
	if($z == $fourth){
	$query= "SELECT * FROM administrator WHERE Name='$uname'"; 
	$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
	$row=mysqli_fetch_assoc($result);
	if($row){
		if($row['Password']!= $pwd)
		{ echo "<span style='color:red;'><b><h5>Your Bad!! Password does not matched...</h5</b></span>";}
		else{
					$uname=$_POST['uname'];
					 $_SESSION['uname']=$uname;
					 $_SESSION['timestamp']=time();
					echo "password matched successfully"; 
		}
	}
	else{
			echo "No Such User Found";
	}
}
}

if(isset($_POST['uname']) && isset($_POST['pwd']))
{	
	if($z == $fifth){
	$query= "SELECT * FROM productionmanager123 WHERE uname='$uname'"; 
	$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
	$row=mysqli_fetch_assoc($result);
	if($row){
		if($row['password']!= $pwd)
		{ echo "<span style='color:red;'><b><h5>Your Bad!! Password does not matched...</h5</b></span>";}
		else{
			$uname=$_POST['uname'];
			$userid = $row['id'];
			$_SESSION['user_id'] = $userid;
			$_SESSION['uname']=$uname;
			$_SESSION['work']=$fifth;
			$_SESSION['timestamp']=time();
			echo "password matched successfully"; 
		}
	}
	else{
			echo "No Such User Found";
	}
}
}
if(isset($_POST['fname']))
{
	$fname=$_POST['fname'];
	if(empty($fname)){
		$errorfname=true;
		echo "Please Enter firstname..";
	}
	else{
		$errorfname=false;
	}
}
if(isset($_POST['lname']))
{
	$lname=$_POST['lname'];
	if(empty($lname)){
		$errorlname=true;
		echo "Please Enter Lastname..";
	}
	else{
		$errorlname=false;
	}
}
if(isset($_POST['email']))
{
	$query= "SELECT * FROM form12 WHERE email='$email'"; 
	$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
	$row=mysqli_fetch_assoc($result);
	$email=$_POST['email'];
	if(empty($email)){
		$erroremail=true;
		echo "Please Enter email..";
	}
	elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$erroremail=true;
		echo "Please Enter valid email..";	
	}
	elseif($row > 0){
		$erroremail=true;
		echo "Already A registered email";
	}
	else{
		$erroremail=false;
	}
}
if(isset($_POST['mno']))
{
	$mno=$_POST['mno'];
	$mno1 = strlen($mno);
	if(empty($mno)){
		$errormno=true;  
		echo "Please Enter mobile no..";
	}
	elseif (($mno1)<10) {
		# code...
		$errormno=true;
		echo "enter valid no";
	}
	elseif (!is_numeric($mno)) {
		# code...
		$errormno=true;
		echo "enter Valid No Please";
	}
	else{
		$errormno=false;
	}
}
if(isset($_POST['uname1']))
{
	$uname=$_POST['uname1'];
	$query= "SELECT * FROM form12 WHERE username='$uname1'"; 
	$result = mysqli_query($conn, $query) or die( mysqli_error($conn));
	$row=mysqli_fetch_assoc($result);
	if($row > 0){
		$erroruname=true;
		echo "Already a user found";
	}
	elseif(preg_match('/[\s]/i', $uname)){
		$erroruname=true;
		echo "space is not allowed";
	}
	elseif (preg_match('/[^a-zA-Z0-9]/i', $uname)) {
		$erroruname=true;
		echo "Only letters and numbers are allowed";
	}
	elseif(empty($uname)){
		$erroruname=true;
		echo "Please Enter username..";
	}
	else{
		$erroruname=false;
	}
}
if(isset($_POST['pwd1'])){
	$pwd = $_POST['pwd1'];
	$pwd2 = strlen($pwd);
	if(preg_match('/[\s]/i', $pwd)){
		$errorpwd=true;

		echo "space not allowed";
	}
	elseif(empty($pwd)){
		$errorpwd=true;
		echo "Please Enter Password";
	}
	elseif(($pwd2)<8){
		$errorpwd=true;
		echo "Password length too small";
	}
	elseif(!preg_match('/[0-9]/i', $pwd)) {
		# code...
		echo "One number compulsary";
	}
	elseif(!preg_match('/[\!\@\#\$\%\^\&\*]/i', $pwd)) {
		# code...
		echo "Special Character Required";
	}
	elseif(!preg_match('/[A-Z]/i', $pwd)) {
		# code...
		echo "Uppercasr Letter Required";
	}


	else{
		$errorpwd=false;
	}
	
}
if(isset($_POST['pwd2'])&&isset($_POST['rpwd']))
{
	$pwd=$_POST['pwd2'];
	$rpwd=$_POST['rpwd'];
	if($pwd == $rpwd){
		$errorpwd=false;
	}
	else{
		$errorpwd=true;
		echo "Password Mismatched";
	}
}
if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['mno']) && isset($_POST['email']) && isset($_POST['pwd1']) && isset($_POST['uname1']) && isset($_POST['rpwd']) && isset($_POST['pwd2'])){
if(($errorfname==false) && ($errorlname==false) && ($erroremail==false) && ($errormno==false) && ($erroruname==false)&& ($errorpwd==false))
{
	$query = "INSERT INTO form12(firstname, lastname, Mobileno, email, username, password) VALUES('$fname','$lname','$mno','$email','$uname1','$pwd1')";
	if(!mysqli_query($conn,$query))
	{
		echo "Something went wrong please try again later";
	}
	else
	{
		echo "You are Successfully Registered..";
		$query1 = "SELECT * FROM form12 WHERE username='$uname1'";
		$result1 = mysqli_query($conn, $query1) or die( mysqli_error($conn));
		$row=mysqli_fetch_array($result1);
		if($row){
			$userid = $row['id'];
		}
		else{
			$userid = 0;
			echo $userid;
		}

		$query2 = "INSERT INTO profilepic(user_id) VALUES('$userid')";
		if(!mysqli_query($conn,$query2))
		{
			echo "Something went wrong please try again later";
		}

		$query3 = "INSERT INTO knowingpublic(user_id) VALUES('$userid')";
		if(!mysqli_query($conn,$query3))
		{
			echo "Something went wrong please try again later";
		}
	}
}
}


if(isset($_POST['first'])){
	$query1 = "SELECT * FROM usersession ORDER BY id DESC LIMIT 1";
		$result1 = mysqli_query($conn, $query1) or die( mysqli_error($conn));
		$row=mysqli_fetch_array($result1);
		if($row){
			$userid = $row['guest_session'];
			$first = ($userid + (507 + 3));
			$_SESSION['first'] = $first;
			$query2 = "INSERT INTO usersession(guest_session) VALUES('$first')";
			if(!mysqli_query($conn,$query2))
			{
				echo "Something went wrong please try again later";
			}
			$query3 = "INSERT INTO knowingpublic(user_id) VALUES('$first')";
			if(!mysqli_query($conn,$query3))
			{
				echo "Something went wrong please try again later";
			}
		}
		else{
			$first= 507;
			$_SESSION['first'] = $first;
			$query2 = "INSERT INTO usersession(guest_session) VALUES('$first')";
			if(!mysqli_query($conn,$query2))
			{
				echo "Something went wrong please try again later";
			}
			$query3 = "INSERT INTO knowingpublic(user_id) VALUES('$first')";
			if(!mysqli_query($conn,$query3))
			{
				echo "Something went wrong please try again later";
			}

		}

}



if (isset($_POST['checkanswered'])) {
	if(($_SESSION['work']) == "productionmanager"){
		echo "productionmanager";
	}
	else{
		if(!empty($_SESSION['uname'])){
		$uname1 = $_SESSION['uname'];
		$query1 = "SELECT * FROM form12 WHERE username='$uname1'";
		$result1 = mysqli_query($conn, $query1) or die( mysqli_error($conn));
		$row=mysqli_fetch_array($result1);
		if($row){
			$answer = $row['answered'];
		}
		echo $answer;
	}
	else {
		echo "guest";
	}	
	}
	
		
}
?>