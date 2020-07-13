<!DOCTYPE html>
<html>
<head>
	<title>Advertise with us</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>


h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {
height: 100%;
  opacity: 100%;


  /* Center and scale the image nicely */
  background-position: cover;
  background-repeat: no-repeat;
  background-size: cover;
  font-family: Open Sans;

}
   #k1{
  
color:#000000;
}
</style>
<style>

	#k1
	{
  	color:#000000;

    border-style: groove;
  }


  .login-box{
    width: 330px;
    height: auto;
    background: rgba(0, 0, 0, .5);
    color: #fff024;
    top: 60%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    padding: 20px 15px;
    word-spacing: 1px; letter-spacing: 1px;
    border-radius: 5px;
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
  background: linear-gradient(90deg,transparent,#00d600);
  animation: animate1 2s linear infinite;

}

</style>
</head>
<body>
 <body class="w3-light-grey">

<!-- Navbar -->


 <form type="post">
<h1 style="margin-left: 38%; margin-top: 1%; text-shadow: 1px 4px 2px ">-: ADVERTISE WITH US :-</h1>
  <div class="login-box">
    <div class="form-group">
    	<form id="k1" style="margin-left: 30%; margin-right: 38%; padding-left:2%; "action="upload.php" method="post" enctype="multipart/form-data">
   
     <label style="font-size: 17px; word-spacing: 1px; letter-spacing: 1px; margin-left: 1%; text-shadow: 1px 1px 1px ;">UPLOAD IMAGE :</label></br>

    <input type="file" style="font-size: 17px; margin-left: 1%;" class="btn1" name="IMAGEToUpload" id="uploadimage" value="choose Poster" class="text-" ></br>
</form>

<div class=" bg-hide">
      <p><h5 id="ta" class="bg-hide" style="font-family: Open Sans;"> Brief About Advertise : </h5></p>
</div>

  
 <textarea id="textarea1" name="message" class="form-control" placeholder="type here"  rows="4" cols="5" required></textarea> </br>
 <label for="Name" style="font-size: 20px;">Advertiser Name :</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname" autocomplete="false">
</br>
 	 <span>
    <button type="button" style="border:2px solid green; margin-left: 33%;" class="btn " text-align="center" onclick="addadv()">SUBMIT</button>
	</span>
  <p id="complain"></p>

    </div>
</div>
</form>
<script type="text/javascript">
  function addadv(){
    var upload = document.getElementById('uploadimage').files[0];
    var textarea1 = $('#textarea1').val();
    var ta = $('#ta').val();

    var formdata = new FormData();
    formdata.append('upload1',upload);
    formdata.append('textarea12',textarea1);
    formdata.append('ta1',ta);
    $.ajax({
      url:"advbackend.php",
      type:"post",
      data:formdata,
      contentType: false,
      processData: false,
      cache:false,
      success:function(data){
        console.log(data);
        if (data == "success") {
          $(location).attr('href','home1.php');
        }else{
          $('#complain').html("please try again later");
        }
      }


    });
  }

</script>
</body>
</html>