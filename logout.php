<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
if(!empty($_SESSION['uname'])){
	session_destroy();
	header('location:index.php');
}
else{
	echo "You are not Logged IN ";
	header('location:index.php');
}
?>
</body>
</html>