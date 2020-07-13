<?php
session_start();

if(isset($_SESSION['uname'])){
  if((time() - $_SESSION['timestamp']) > 300 ){
    header("location:logout.php");
  }
  else{
    $_SESSION['timestamp'] = time();
  }
}
?>
<html>
<head>

<title>
Contact Form
</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>


body{
	margin: 0;
	padding: 0;
	text-align: center;
	background: url(../images/CU.jpg);
	background-size: cover;
	font-family: Century Gothic;

}

.title{
	margin-top: 100px;
	color: #fff;

}	

.title h1{
	font-size:  32px;
	line-height: 10px;

}

.title h2{
	font-size: 16px;

}

form{
	margin-top: 50px;

}

.form-control{
	width: 600px;
	background: transparent;
	border:none;
	outline: none;
	border-bottom: 1px solid gray;
	color: #fff;
	font-size: 18px;
	margin-bottom: 16px;
}

input{
	height: 45px;
}

form .submit{
	background-color: #ffa500;
	border-color: transparent;;
	color: #fff;
	font-size: 20px;
	letter-spacing: 2px;
	height: 50px;
	margin-top: 20px;
	transition: 0.4s ease;

}

form .submit:hover{
background-color: #f44336;
cursor: pointer;
}
.w3-{
	left:100px;
}
   #image1{
      max-height: 60px;
      max-width: 60px;

   }
</style>
</head>
<body>

	<header>

     <body class="w3-light-grey">
 <body class="w3-light-grey">

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="../home1.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="../analysisnew.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Some Of Our Work</a>
    <a href="../aboutus/aboutusnew.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ABOUT US</a>
    <a href="contactnew.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
    <?php
    if (!empty($_SESSION['work'])) {
    if(($_SESSION['work']) == "productionmanager"){?>
    <a href="../releasetrailer.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Release Trailer</a>
    <a href="../releaseposter.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Release Poster</a>
     <?php }
    }
    ?>
    <?php
            if(!empty($_SESSION['uname'])){?>
            <div class="w3-dropdown-hover">
            <li><img id="image1" src="../images/avatar1.png" alt="avatar" class="w3-bar-item  w3-center"></li>
            <div class="w3-dropdown-content w3-bar-block">
                <a  href="../profile.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small"><?php echo $_SESSION['uname']; ?></a>
                <a href="../logout.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Logout</a>
            </div>
        </div> 
         <?php 
      }
      else{
        ?>
        <a href="../index.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Login</a>
        <?php
      }
      ?> 
  </div>
</div>
    

    

</header>

</br>
</br>



	<div class="title">
		<h1>CONTACT US</h1>
	</div>

	<div class="box">
		<form method="post">
			<input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" required></br>
			<input type="email" name="email" id="email" class="form-control" placeholder="Enter your E-mail" required></br>
			<textarea name="message" class="form-control" id="textarea" placeholder="Message" rows="4" required></textarea></br>
			<button type="button" id="btn" class="form-control submit" onclick="myfunction12()">SEND MESSAGE</button>
			<div id="loaddata"> </div>
		</form>
	</div>

	<script>
		function directingfun(){
			location.reload();
		}
		function myfunction12(){
			var email = $('#email').val();
			var message = $('#textarea').val();
			var name = $('#name').val();
			console.log(email);
			console.log(message);
			console.log(name);
			$.ajax({
				url:"backend12.php",
          		type:'post',
          		data: {email:email,
            	message:message, name:name},
          		success: function(data){
              	$('#loaddata').html(data);
              	var string = data;
              	var check= "You are Successfully Registered..";
              	if (string == check) {
              		directingfun(data);
              	}else{
              		$('#loaddata').html(data);
              	}
              }

			})
		}
	</script>
</body>
</html>