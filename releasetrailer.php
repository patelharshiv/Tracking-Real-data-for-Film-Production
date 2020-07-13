<?php
session_start();

?>
<!DOCTYPE html>
<html>

<head>
<title>TRACKING REAL DATA FOR FILM PRODUCTION</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {
height: 100%;
  opacity: 100%;


  /* Center and scale the image nicely */
  background-position: cover;
  background-repeat: no-repeat;
  background-size: cover;
  font-family: Open Sans;}
   #k1{
  
color:#000000;
}
  #k1
  {
    
    border-style: groove;
  }

     #image1{
      max-height: 60px;
      max-width: 60px;

   }
</style>
</head>

 <body class="w3-light-grey">

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="home1.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="analysisnew.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Some Of Our Work</a>
    <a href="aboutus/aboutusnew.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ABOUT US</a>
    <a href="Contact\contactnew.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
    <?php
      if(($_SESSION['work']) == "productionmanager"){?>
    <a href="releasetrailer.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Release Trailer</a>
    <a href="releaseposter.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Release Poster</a>
     <?php }
    ?>
          <?php
            if(!empty($_SESSION['uname'])){?>
            <div class="w3-dropdown-hover">
            <li><img id="image1" src="images/avatar1.png" alt="avatar" class="w3-bar-item  w3-center"></li>
            <div class="w3-dropdown-content w3-bar-block">
                <a  href="profile.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small"><?php echo $_SESSION['uname']; ?></a>
                <a href="logout.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Logout</a>
            </div>
        </div> 
         <?php 
      }
      else{
        ?>
        <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Login</a>
        <?php
      }
      ?> 
  </div>
</div>
</br>
</br>
</br>
</br>
<form id="k1" style="margin-left: 30%; margin-right: 38%; padding-left:2%;" method="post" enctype="multipart/form-data">

 <ul> <label style="font-size: 19px; word-spacing: 1px; letter-spacing: 1px; margin-left: 16%; text-shadow: 2px 2px 5px red;">-: Select Video :-</label></br>


  <input style="font-size: 17px; margin-left: 10%;" type="file" id="myFile12" name="filename" value="Select Video"></br>

  <label  style="font-size: 19px; word-spacing: 1px; letter-spacing: 1px;  text-shadow: 2px 2px 5px red;  margin-left: -5%;">-: Select Poster Image for Trailer :-</label>
   <input style="font-size: 17px;margin-left: 10%;" type="file" id="myfile13" name="filename" value="choose poster"></br> 
  <button type="button" onclick="functionvideo()" class="btn btn-danger" style="font-size: 17px; margin-left: 26%;">Release</button></ul>
</form>

<script type="text/javascript">
  function functionvideo(){
            var attachment = document.getElementById('myFile12').files[0];
            console.log(attachment);
            var attachment1 = document.getElementById('myfile13').files[0];
            console.log(attachment1);
            var formdata = new FormData();
            formdata.append('myfile13',attachment1)
            formdata.append('myfile12',attachment);
            console.log(formdata);
            $.ajax({
                            url: 'imagebackend.php',
                            type: 'post',
                            data: formdata,
                            contentType: false,
                            processData: false,
                            cache:false,
                            success: function(data){
                                console.log(data);
                                if(data == "falsefalsedone"){
                                  $(location).attr('href','home1.php');
                                }
                        }
                    
            });


  }

</script>
</body>
</html>