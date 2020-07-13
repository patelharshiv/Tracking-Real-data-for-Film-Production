<?php
session_start();

if(!empty($_SESSION['uname'])){
       header("Location: home1.php");
 }
?>
<html>
<head>
  <title></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>



<style>

  body{
    margin: 0;
    padding: 0;
    	background-color:#3e8532;
    background-size:  cover;
    background-position: center;
    position: relative;
    font-family:cursive;
    background:absolute;

  }

  .login-box{
    width: 320px;
    height: 450px;
    background: rgba(0, 0, 5, 0.5);

    color: #fff;
    top: 50%;
    left: 50%;

    position: absolute;
    transform: translate(-45%,-50%);
    box-sizing: border-box;
    padding: 50px 39px;
    margin:auto;
    border-radius: 20px;
}
.btn:hover,
.btn:focus
{
  background:#ff5722;
  transition: 0.2s;

}


.btn{
  color: #000000;
  font-size:17px;
  text-decoration: none;
  text-transform: uppercase;
  transition: 0.5s;
  letter-spacing: 1.5px;
}
.btn:hover{
  background:#FFFF00;
  color:#050801;
  box-shadow: 0 0 5px #FFFF00;
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
  background: linear-gradient(90deg,transparent,#81ff00);
  animation: animate1 1s linear infinite;

}


  </style>



</head>
<body>
  <div id="container">
  <div class="login-box">
    <center><img src="images/pp1.png" alt="ll1" style="max-width: 60px; max-height: 60px; padding: auto; margin:auto;" align="center"></center>
    


    <div class="form-group">
      <label for="username" style="color:yellow;">Username :</label>
      <input type="Username" class="form-control" id="uname" placeholder="Enter Username" name="uname" onkeyup="unameerror()">
    </div>
    <div id="unameerror"></div>
    <div class="form-group">
      <label for="pwd" style="color:yellow;">Password :</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>  
      <input type="checkbox" onclick="myFunction()" style="color:yellow;"> <label style="color:yellow;" />Show password 
    </div>
    <div class="form-group form-check" style="margin-top: -5%;">
      <label class="form-check-label0 " style="color:yellow;" >
        <input class="form-check-input" style="" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <center><button type="button" class="btn btn-primary "  onclick="checkRecord()">Submit</button></center>
 

</form>
</div>

<script type="text/javascript">
  
  function directingfun(data){
    var check= "password matched successfully";

    if(data == check){
      $('#loaddata').html(data);
      $(location).attr('href','intronew.php');
      var uname = $('#uname').val();
      sessionStorage.setItem("uname", uname);
    }else{
      document.getElementById('loaddata').style.color="red";
      var string = data;
      $('#loaddata').html(data);

    }
  }
  function finaldirecting(data,result){
    var check= "password matched successfully";

    if(data == check && result == "yes")
    {
      $('#loaddata').html(data);
      $(location).attr('href','home1.php');
      var uname = $('#uname').val();
      sessionStorage.setItem("uname", uname);

    }
    else if(data == check && result == "no"){
      $('#loaddata').html(data);
      $(location).attr('href','personalnew.php');
      var uname = $('#uname').val();
      sessionStorage.setItem("uname", uname);
    }
    else{
      document.getElementById('loaddata').style.color="red";
      var string = data;
      $('#loaddata').html(data);
    }

  }
   function unameerror()
      {
              var uname = $('#uname').val();
              var x = document.getElementById("loginas").selectedIndex;
              var y=document.getElementsByTagName("option")[x].value;
              console.log(y);
              console.log(uname);
              $.ajax({
              url: 'backend.php',
              type: 'POST',
              data: {uname:uname, z:y},
              success: function(result){
            
              $('#unameerror').html(result);
            }
          
        });
        
    }
   function checkRecord(){
      var username = $('#uname').val();
      var password = $('#pwd').val();
      var x = document.getElementById("loginas").selectedIndex;
      var y=document.getElementsByTagName("option")[x].value;
      console.log(y);
      $.ajax({
          url:"backend.php",
          type:'post',
          data: {uname:username,
            pwd:password, z:y},
          success: function(data){
         
              var string = data;
              directingfun(string);
          }
      });
    }
    function directingfun12(data){
      var first= "guest";
      var second= "Reviewer";
      var third= "AnalystExpert";
      var fourth= "Admin";
      if(data == first)
      {
          $.ajax({
          url:"backend.php",
          type:'post',
          data: {first:first},
          success: function(data){
            <?php if(!empty($_SESSION['first'])){unset($_SESSION['first']); }  ?>
            console.log(data);
         }
          });
          $(location).attr('href','intronew.php');
      }

      else{
         $('#getdata').html(data);
           <?php if(!empty($_SESSION['first'])){unset($_SESSION['first']); }  ?>
      }
    
    }
    function myFunction12() {
      var x = document.getElementById("loginas").selectedIndex;
      var y=document.getElementsByTagName("option")[x].value;
      console.log(y);
      $.ajax({
              url: 'backend.php',
              type: 'POST',
              data: {y:y},
              success: function(result){
            
              $('#getdata').html(result);
              console.log(result);
              var string = result;
              directingfun12(string);
            }
          
    });
}
</script>

<script>
function myFunction() {
  var x = document.getElementById("pwd");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<p id="text"></p>

<script>
var input = document.getElementById("pwd");
var text = document.getElementById("text");
input.addEventListener("keyup", function(event) {

if (event.getModifierState("CapsLock")) {
    text.style.display = "block";
  } else {
    text.style.display = "none"
  }
});
</script>
</body>
</html>   
