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
Analyst Expert
</title>
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
    
<style>
	

  body {
  background-image: url("../images/a1a3.jpeg");
  height: 100%;
  opacity: 100%;


  /* Center and scale the image nicely */
  background-position: cover;
  background-repeat: no-repeat;
  background-size: cover;
  font-family: Open Sans;
  
}

.form-control{
  width: 600px;
  background: transparent;
  border-style: solid;
  border-width: 1.5px;
  outline: none;
  border-bottom: 1px solid gray;
  color: #fff;
  font-size: 18px;
  margin-bottom: 16px;

}



#sa{
  color:#5c7eb2;
}
#wa{
  color:#FAF0E6;
  text-indent: 30px;

}
#ta{
  color:white;
  text-indent:30px;
}
#k1{
  
color:#FAF0E6;
}
.btn{
  color: #00d600;
  font-size:17px;
  text-decoration: none;
  text-transform: uppercase;
  transition: 0.5s;
  letter-spacing: 1.5px;
}
.btn:hover{
  background:#00d600;
  color:;
  box-shadow: 0 0 5px #00d600;
}
.btn span{
  display: block;
  position: absolute;
}
.btn span:nth-child(1)
{
  top:0;
  left: 0;
  width:100;
  height: 2px;
  background: linear-gradient(90deg,transparent,##00d600);
  animation: animate1 2s linear infinite;

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

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="../home1.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="../analysisnew.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Some Of Our Work</a>
    <a href="../aboutus/aboutusnew.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ABOUT US</a>
    <a href="../Contact\contactnew.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
    <?php
      if(($_SESSION['work']) == "productionmanager"){?>
    <a href="../releasetrailer.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Release Trailer</a>
    <a href="../releaseposter.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Release Poster</a>
     <?php }
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
</br> 
<h2 class="text-danger">
<div id="wa" class=" p-1"></h2>
</div>
<strong>
<div class="p-2 mb-3 bg-hide"><ul style="list-style-type:disc;" id="sa"><strong>
       <!--<p class="bg-warning text-white"> --><li><b><p><strong><h5 id="sa" class="bg-hide">We wish you to be a part of our analyst team.</h5></strong></p></b></li>
        <!--<p class="bg-warning text-white"> --><li><p><strong><h5 id="sa" class="bg-hide">We would like to see what recent analyst you new done in any field.</h5></strong></p></li>
        <!--<p class="bg-warning text-white"> --><li><p><strong><h5 id="sa" class="bg-hide ">Our team would lookout to your work & would make you update as soon as possible.</h5></strong></p></li></strong></ul>
</div></br>



<form id="k1" action="upload.php" method="post" enctype="multipart/form-data">
   
   <ul> <input type="file" name="fileToUpload" id="fileToUpload" class="text-" >
    <input type="submit" value="Upload Resume" name="submit">
  </br></br>

    <input type="file" name="fileToUpload" id="fileToUpload"  class="text-">
    <input type="submit" value="Upload Work" name="submit"></ul>
</form>

<div class="p-2 mb-3 bg-hide">
       <!--<p class="bg-warning text-white"> --><p><h5 id="ta" class="bg-hide"><strong>Reason you want to become part of our organization</strong></h5></p>
</div>

<form>
  
 <ul><textarea id="" name="message" class="form-control" placeholder="Message "  rows="4" cols="5" required></textarea> 
 </br>

 <span>
    <button type="button" style="border:2px solid green;" class="btn " text-align="center" onclick="addrecord()">SUBMIT</button></span>
    </ul>
</form>


</body>
</html>