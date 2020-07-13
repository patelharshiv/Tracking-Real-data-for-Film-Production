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
<title>About us</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style type="text/css">
 body{
  width: 100%;
  height:100%;
 } 
#heading p{
  text-align: center;
  margin:auto;
  padding: 0px;

}
#heading h1{
  margin-top: 60px;
  font-color:;
}
body {
  background-image: url("../images/q1q1.jpeg");
  height: 100%;
  opacity: 1.2;
font-family: Open Sans;
  
  

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
section{
	color:#c07b0a;
  font:  bold 20px ;
  justify-content: space-around; 
	
	
}
#heading{
 
  font:  bold arial;

}

   #image1{
      max-height: 60px;
      max-width: 60px;

   }
</style>
</head>
 <header>

 <body class="w3-light-grey">

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="../home1.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="../analysisnew.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Some Of Our Work</a>
    <a href="aboutusnew.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ABOUT US</a>
    <a href="../Contact\contactnew.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
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
</br></br>

<header>
  <div id="heading">
      <h1 align="center" style="color:white; font-size: 32px; font-family:OpenSans; text-indent: px;
  text-align: ;
  letter-spacing: 2px"> &#127909; " <u>Tracking Real Data for Film Production </u> " &#127909;</h1></br>
      <h3><p class="para" style="color:#FFF8DC ">Come let's Prediction of Real data by Film Production...</br>  <q>Analysis of Film </q> </p></h3>    
  </div>
</header></br></br>

    <h5 style="color:orange; font-size: 20px; font-family:OpenSans; text-indent: px;
  text-align: ;
  letter-spacing: 2px"><section>
"Tracking Real data for film Production" as the project name suggest the main objective, focus of our is on real data. 
		Data related to the feedback given by each viewers after watching movie about what they liked or what they didn't about movie, Reason they worked movie for and based on that data. We may able to help them (producer) at the time of management of production.
</section></br>
<section>
	Production cost in terms of Promotion,movie making cost and including all cost the total turnover movie did but at the time they want to know exact data of viewers for their future production our project come in picture their.
</section></br>
<section>
	To gather data and designing an algorithm to work effectively the problems faced by film Production industry.
</section></h5>

</article> 

</body>
</html>
