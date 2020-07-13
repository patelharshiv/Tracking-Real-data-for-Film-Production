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

    border-style: groove;
}

   #image1{
      max-height: 60px;
      max-width: 60px;

   }
</style>	
</head>


<body>

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
<form id="k1" style="margin-left: 30%; margin-right: 38%; padding-left:2%;"  method="post" enctype="multipart/form-data">
   
   <ul>  <label style="font-size: 19px; word-spacing: 1px; letter-spacing: 1px; margin-left: 10%; text-shadow: 2px 2px 5px lightgreen;">-: Select Poster :-</label></br>

    <input type="file" style="font-size: 17px; margin-left: -3%;" class="btn" name="fileToUpload" id="filename" value="choose Poster" class="text-" ></br>
    <label style="font-size: 19px; word-spacing: 1px; letter-spacing: 1px; margin-left: 10%; text-shadow: 2px 2px 5px lightgreen;">-:Poster Name:-</label>
 <center><input type="text" id="text1" name="message" class="form-control" style="font-size: 17px; margin-left: -22%;" placeholder="type here"></center></br>

  <label style="font-size: 19px; word-spacing: 1px; letter-spacing: 1px; margin-left: 10%; text-shadow: 2px 2px 5px lightgreen;">-:Actor Name:-</label>
 <center><input type="text" id="text2" name="message" class="form-control" style="font-size: 17px; margin-left: -22%;" placeholder="type here"></center></br>

   <label style="font-size: 19px; word-spacing: 1px; letter-spacing: 1px; margin-left: 10%; text-shadow: 2px 2px 5px lightgreen;">-:Actress Name:-</label>
 <center><input type="text" id="text3" name="message" class="form-control" style="font-size: 17px; margin-left: -22%;" placeholder="type here"></center></br>

   <label style="font-size: 19px; word-spacing: 1px; letter-spacing: 1px; margin-left: 10%; text-shadow: 2px 2px 5px lightgreen;">-:Production Name:-</label>
 <center><input type="text" id="text4" name="message" class="form-control" style="font-size: 17px; margin-left: -22%;" placeholder="type here"></center></br>

   <label style="font-size: 19px; word-spacing: 1px; letter-spacing: 1px; margin-left: 10%; text-shadow: 2px 2px 5px lightgreen;">-:Directed By:-</label>
 <center><input type="text" id="text5" name="message" class="form-control" style="font-size: 17px; margin-left: -22%;" placeholder="type here"></center></br>
<label style="font-size: 19px; word-spacing: 1px; letter-spacing: 1px; margin-left: 10%; text-shadow: 2px 2px 5px lightgreen;">-:Category:-</label>
     <select required="required" style="width:89%; border-radius: 2px;" autofocus="autofocus" id="loginas" name="loginas">
  <option><div id="getdata"> !---Select From Below---!</div></option>
  <option >Action</option>
  <option>Drama</option>
  <option >Thriller</option>
  <option >Horror</option>
   <option >Crime</option> <option >Sci-Fi</option> <option >Adventure</option> <option >Racing</option> <option >Spy</option>
    <option >Historical</option> <option >Mystery</option> <option >Suspence</option>  <option >Heroic</option>
</select>

<label style="font-size: 19px; word-spacing: 1px; letter-spacing: 1px; margin-left: 10%; text-shadow: 2px 2px 5px lightgreen;">-: About Poster :-</label>
 <center><textarea id="textarea1" name="message" class="form-control" style="font-size: 17px; margin-left: -22%;" placeholder="type here"  rows="4" cols="5" required></textarea> </center></br>

    <input type="submit"  class="btn btn-success" style=" font-size:17px; margin-left: 20% ; margin-top: -4.5%; border-radius: 4px; margin-left: 28%;" value="Submit" name="submit"  onclick="functionimage()">
  </br>

  </form>

<script type="text/javascript">
  function functionimage(){

            var attachment = document.getElementById('filename').files[0];
            var about = $('#textarea1').val();
             var text1 = $('#text1').val();
             var text2 = $('#text2').val();
             var text3 = $('#text3').val();
             var text4 = $('#text4').val();
             var text5 = $('#text5').val();
            console.log(attachment);
            var form_data = new FormData();
            form_data.append('filename',attachment);
            form_data.append('textarea12',about);
            form_data.append('text12',text1);
            form_data.append('text22',text2);
            form_data.append('text32',text3);
            form_data.append('text42',text4);
            form_data.append('text52',text5);
            $.ajax({
                            url: 'posterbackend.php',
                            type: 'post',
                            data: form_data,
                            contentType: false,
                            processData: false,
                            cache:false,
                            success: function(data){
                                console.log(data);
                        }
                    
            });

  }
</script>
   
</form>
</body>
















</html>