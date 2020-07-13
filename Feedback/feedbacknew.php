<!DOCTYPE html>
<html>
<head>
  <title>Personal</title>
</head>
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


<style>*{
   background-color: #2F4F4F;
}
    body{
    font-family:Open Sans;
    
     background-color: #2F4F4F;
  }
/* The container */
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  color: white;

}

/* Hide the browser's default checkbox */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
  border-radius: 4px;

}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-width:2px;
  border-color: coral;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid black;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
#ka{
  color: #FF8C00;
}

.next {
  background-color: #3CB371;
  margin-left: 500px;
  border:1px
  cursor: pointer;
  font-size: 20px;
  
 
  
}
.previous{
  background-color: #3CB371;
  margin-left:0px;
  border:1px
  cursor: pointer;
  font-size: 20px;
  border-radius:4px;
  
}
#red1{
  visibility: visible;
  display: block;
  word-spacing: 1px;
  letter-spacing: 1px; 

  margin-left: 20%;
}
#red2{
  visibility: hidden;
  display: none; 
  word-spacing: 1px;
  letter-spacing: 1px; 
  margin-left: 20%;
}
#red3{
  visibility: hidden;
  display: none; 
  word-spacing: 1px;
  letter-spacing: 1px; 
  margin-left: 20%;
}
#red4{
  visibility: hidden;
  display: none; 
  word-spacing: 1px;
  letter-spacing: 1px; 
  margin-left: 20%;
}
#red5{
  visibility: hidden;
  display: none; 
  word-spacing: 1px;
  letter-spacing: 1px; 
  margin-left: 20%;
}
#red6{
  visibility: hidden;
  display: none; 
  word-spacing: 1px;
  letter-spacing: 1px; 
  margin-left: 20%;
}
#red7{
  visibility: hidden;
  display: none; 
  word-spacing: 1px;
  letter-spacing: 1px; 
  margin-left: 20%;
}
.star-rating {
  line-height:32px;
  font-size:1.25em;
}
.name{
  margin-left: 130px;
}

.star-rating .fa-star{
  color: yellow;
}
.button{
  margin-left: 130px;
}
.form-group{
  margin-right:0px;
}
.form-group1{
  margin-right:0px;
}
#btn1{
  margin-left: -1%;
}
#btn2{
  margin-left: 50%;
}
#btn3{
  margin-left: -1%;
}
#btn4{
  margin-left:  50%;
}
#btn5{
  margin-left:-1%;
}
#btn6{
  margin-left: 50%;
}
#btn7{
  margin-left:-1%;
}
#btn8{
  margin-left: 50%;
}
#btn9{
  margin-left: -1%;
}
#btn10{
  margin-left:  50%;
}
#btn11{
  margin-left: -1%;
}
#btn12{
  margin-left: 50%;
}
#btn13{
  margin-left:-1%;
}
#btn14{
  margin-left:  50%;
}
#btn15{
  margin-left: 50%;
}
#jk{
  color:white;
}
</style>

  

<body>


  <header>

     <body class="w3-light-grey">

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="../home1.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="../AnalystExpert/analystexpertnew.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">BE AN ANALYSIS EXPERT</a>
   
    <a href="../aboutus/aboutusnew.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ABOUT US</a>
    <a href="../Contact\contactnew.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
     <?php
      if(($_SESSION['work']) == "productionmanager"){?>
    <a href="releasetrailer.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Release Trailer</a>
    <a href="releaseposter.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Release Poster</a>
     <?php }
    ?>
    
    <?php 
  
      if(empty($_SESSION['uname'])){?>   
           <a class="w3-bar-item w3-button w3-padding-large w3-hide-small" href="Signin.php">SIGN UP</a>
          <a class="w3-bar-item w3-button w3-padding-large w3-hide-small" href="index.php">LOGIN</a>
        <?php
      }
      else{?>
        <div class="dropdown">
         <img id="image" src="images/pp1.png" alt="avatar" data-toggle="dropdown" class="w3-bar-item w3-button w3-padding-large w3-hide-small" style="padding-top: 1px; margin-top: 7px; margin-right: 5px;">
         <ul class="dropdown-menu">
         <li id="uname1"><?php echo $_SESSION['uname']; ?></li>
         <li><a href="logout.php">LOGOUT</a></li>
       </ul>
     </div>
         <?php 
      }
?>
    
  </div>
</div>
</header>


</br>

</br>
  <form>
<div id="red1">

<label><h2 id="jk">1) Which type of movie you are working on ?</h2></label> 
<label class="container">Action
  <input type="checkbox" value="Action" name="mycheckbox1" checked="checked" >
  <span class="checkmark"></span>
</label>
<label class="container">Thriller
  <input type="checkbox" value="Thriller" name="mycheckbox1">
  <span class="checkmark"></span>
</label>
<label class="container">Biography
  <input type="checkbox" value="Biography" name="mycheckbox1">
  <span class="checkmark"></span>
</label>
<label class="container">Horror
  <input type="checkbox" value="Horror" name="mycheckbox1">
  <span class="checkmark"></span>
</label>
<label class="container">Sci-Fi
  <input type="checkbox" value="Sci-fi" name="mycheckbox1">
  <span class="checkmark"></span>
</label>
<label class="container">Romantic
  <input type="checkbox" value="Romantic" name="mycheckbox1">
  <span class="checkmark"></span>
</label>
<label class="container">Period time
  <input type="checkbox" value="Period time" name="mycheckbox1">
  <span class="checkmark"></span>
</label>
<label class="container">Drama
  <input type="checkbox" value="Drama" name="mycheckbox1">
  <span class="checkmark"></span>
</label>
<label class="container">Comedy
  <input type="checkbox" value="Comedy" name="mycheckbox1">
  <span class="checkmark"></span>
</label>
<label class="container">Mystery
  <input type="checkbox" value="Mystery" name="mycheckbox1">
  <span class="checkmark"></span>
</label>
<label class="container">Crime
  <input type="checkbox" value="Crime" name="mycheckbox1">
  <span class="checkmark"></span>
</label>
<label class="container">Real life Films
  <input type="checkbox" value="Real life film" name="mycheckbox1">
  <span class="checkmark"></span>
</label>
<label class="container">Adventure
  <input type="checkbox" value="Adventure" name="mycheckbox1">
  <span class="checkmark"></span>
</label>
<label class="container">War films
  <input type="checkbox" value="War Films" name="mycheckbox1">
  <span class="checkmark"></span>
</label>
<button type="button" class="btn btn-success" id="btn2" onclick="question1()">NEXT</button>

</div>


<div id="red2">
  <label><h2 id="jk">2) Who is lead role in actor??</h2></label> 
    <label class="container"> Salman Khan
  <input type="checkbox" value="Salman Khan" name="mycheckbox2">
  <span class="checkmark"></span>
</label>
<label class="container"> Aamir khan
  <input type="checkbox" value="Aamir khan" name="mycheckbox2">
  <span class="checkmark"></span>
</label>
<label class="container"> Shahrukh khan
  <input type="checkbox" value="Shahrukh Khan" name="mycheckbox2">
  <span class="checkmark"></span>
</label>
<label class="container"> Kartik aryan
  <input type="checkbox" value="Kartik Aryan" name="mycheckbox2">
  <span class="checkmark"></span>
</label>
<label class="container"> Siddharth Kapoor
  <input type="checkbox" value="Siddharth Kapoor" name="mycheckbox2">
  <span class="checkmark"></span>
</label>
<label class="container"> Ranbir Kapoor
  <input type="checkbox" value="Ranbir kapoor" name="mycheckbox2">
  <span class="checkmark"></span>
</label>
<label class="container"> Ranveer Kapoor
  <input type="checkbox" value="Ranveer Kapoor" name="mycheckbox2">
  <span class="checkmark"></span>
</label>
<label class="container"> Pulkit Samrat
  <input type="checkbox" value="Pulkit Samrat" name="mycheckbox2">
  <span class="checkmark"></span>
</label>
<label class="container"> Akshay Kumar
  <input type="checkbox" value="Akshay Kumar" name="mycheckbox2">
  <span class="checkmark"></span>
</label>
<label class="container">Mark Wahlberg
  <input type="checkbox" value="Mark Wahlberg" name="mycheckbox2">
  <span class="checkmark"></span>
</label>
<label class="container"> Dwayne "The Rock" Johnson
  <input type="checkbox" value='Dwayne "The Rock" Johnson' name="mycheckbox2">
  <span class="checkmark"></span>
</label>
<label class="container"> Vin Diesel 
  <input type="checkbox" value="Vin Diesel" name="mycheckbox2">
  <span class="checkmark"></span>
</label>
<label class="container"> Adam Sandler
  <input type="checkbox" value="Adam Sandler" name="mycheckbox2">
  <span class="checkmark"></span>
</label>
<label class="container">Jackie Chan
  <input type="checkbox" value="Jackie Chan" name="mycheckbox2">
  <span class="checkmark"></span>
</label>
<label class="container"> Robert Downey Jr.
  <input type="checkbox" value="Robert Downey Jr." name="mycheckbox2">
  <span class="checkmark"></span>
</label>
<label class="container"> Tom Cruise
  <input type="checkbox" value="Tom Cruise" name="mycheckbox2">
  <span class="checkmark"></span>
</label>
<button type="button" class="btn btn-success" id="btn2" onclick="question2()">NEXT</button>
</div>


<div id="red3">

   <label><h2 id="jk">3) Who is lead role in actress??</h2></label> 
    <label class="container"> Deepika Padukone
  <input type="checkbox" value="Deepika Padukone" name="mycheckbox3">
  <span class="checkmark"></span>
</label>
<label class="container"> Katrina Kaif
  <input type="checkbox" value="Katrina Kaif" name="mycheckbox3">
  <span class="checkmark"></span>
</label>
<label class="container"> Shraddha Kapoor
  <input type="checkbox" value="Shraddha Kapoor" name="mycheckbox3">
  <span class="checkmark"></span>
</label>
<label class="container"> Disha Patani
  <input type="checkbox" value="Disha Patani" name="mycheckbox3">
  <span class="checkmark"></span>
</label>
<label class="container"> Sonam Kapoor
  <input type="checkbox" value="Sonam Kapoor" name="mycheckbox3">
  <span class="checkmark"></span>
</label>
<label class="container"> Sara Ali Khan
  <input type="checkbox" value="Sara Ali Khan" name="mycheckbox3">
  <span class="checkmark"></span>
</label>
<label class="container"> Kriti Sanon
  <input type="checkbox" value="Kriti Sanon" name="mycheckbox3">
  <span class="checkmark"></span>
</label>
<label class="container">  Priyanka Chopra
  <input type="checkbox" value="Priyanka Chopra" name="mycheckbox3">
  <span class="checkmark"></span>
</label>
<label class="container">  Kangana Ranaut
  <input type="checkbox" value="Kangana Ranaut" name="mycheckbox3">
  <span class="checkmark"></span>
</label>
<label class="container">  Jacqueline Fernandez
  <input type="checkbox" value="Jacqueline Fernandez" name="mycheckbox3">
  <span class="checkmark"></span>
</label>
<label class="container">   Alia Bhatt
  <input type="checkbox" value="Alia Bhatt" name="mycheckbox3">
  <span class="checkmark"></span>
</label>
<label class="container"> Kareena Kapoor
  <input type="checkbox" value="Kareena Kapoor" name="mycheckbox3">
  <span class="checkmark"></span>
</label>
<button type="button" class="btn btn-success" id="btn2" onclick="question3()">NEXT</button>
</div>


<div id="red4">
  <label><h2 id="jk">4) Expected releasing date??</h2></label> </br></br></br>
    
  <label for="bday">Enter date:
    <input type="date" name="bday" required pattern="\d{4}-\d{2}-\d{2}" id="bday">
    <span class="validity"></span>
  </label>
  </br>
</br>
</br>
<button type="button" class="btn btn-success" id="btn2" onclick="question4()">NEXT</button>
</div>


<div id="red5">
<div class=name>
    <label><h4>Enter your movie name :-</h4>  <input type="name"></label>
    <input type="text" name="movie" id="movie">
  </div>
<button type="button" class="btn btn-success" id="btn2" onclick="question5()">NEXT</button>
</div>

<div id="red6">
  <label><h2 id="jk"><p>6)  What you think people would like more about these??</h2></label> 
    <div class="container-fluid">
<div class="form-group">
      <label for="comment">Comment:</label>
      <textarea class="form-control" rows="5" id="comment"></textarea>
   </p> </div>
</div>
</br></br></br>
<button type="button" class="btn btn-success" id="btn2" onclick="question6()">NEXT</button>
</div>

<div id="red7">
 <label><h2 id="jk"><p> 7)  How is it different??</h2></label> 
    <div class="container-fluid">
<div class="form-group">
      <label for="comment">Comment:</label>
      <textarea class="form-control1" rows="5" id="different"></textarea>
   </p> </div>
</div>
</br></br></br>
<button type="button" class="btn btn-success" id="btn2" onclick="question7()">FINISH</button>
</div>
</form>






<script type="text/javascript">
        $(document).ready(function(){
          functionset();
        });
        function question1(){
        if(document.getElementById("red1").style.visibility = "visible")
        {
        document.getElementById("red1").style.visibility = "hidden";
        document.getElementById("red1").style.display = "none";
        document.getElementById("red2").style.visibility = "visible";
        document.getElementById("red2").style.display = "block"; 
        }
    }
        function question2(){
        if(document.getElementById("red2").style.visibility = "visible"){
        document.getElementById("red1").style.visibility = "hidden";
        document.getElementById("red1").style.display = "none";
        document.getElementById("red2").style.visibility = "hidden";
        document.getElementById("red2").style.display = "none";
        document.getElementById("red3").style.visibility = "visible";
        document.getElementById("red3").style.display = "block"; 
        }
      var a = document.getElementById('q1').value;
      console.log(a);
      var readRecord = [];
      $.each($("input[name='checkbox1']:checked"), function(){
                readRecord.push($(this).val());
      });
      var readRecord = readRecord.join();
      if(readRecord.length>0){
      console.log(readRecord);
            $.ajax({
              url: 'backend4.php',
              type: 'POST',
              data: {readRecord:readRecord, a:a},
              success: function(result){
            
              $('#getdata').html(result);
              console.log(result);
            }
          
    });
      }



    }
        function question3(){
        if(document.getElementById("red3").style.visibility = "visible"){
        document.getElementById("red1").style.visibility = "hidden";
        document.getElementById("red1").style.display = "none";
        document.getElementById("red2").style.visibility = "hidden";
        document.getElementById("red2").style.display = "none";
        document.getElementById("red3").style.visibility = "hidden";
        document.getElementById("red3").style.display = "none";
        document.getElementById("red4").style.visibility = "visible";
        document.getElementById("red4").style.display = "block";
    }
  }
        function question4(){
        if(document.getElementById("red4").style.visibility = "visible"){
        document.getElementById("red1").style.visibility = "hidden";
        document.getElementById("red1").style.display = "none";
        document.getElementById("red2").style.visibility = "hidden";
        document.getElementById("red2").style.display = "none";
        document.getElementById("red3").style.visibility = "hidden";
        document.getElementById("red3").style.display = "none";
        document.getElementById("red4").style.visibility = "hidden";
        document.getElementById("red4").style.display = "none";
        document.getElementById("red5").style.visibility = "visible";
        document.getElementById("red5").style.display = "block"; 
    }
      var b = document.getElementById('q2').value;
      console.log(b);  
      var readRecord1 = [];
      $.each($("input[name='checkbox2']:checked"), function(){
                readRecord1.push($(this).val());
      });
      var readRecord1 = readRecord1.join();
      if(readRecord1.length>0){
      console.log(readRecord1);
                  $.ajax({
              url: 'backend4.php',
              type: 'POST',
              data: {readRecord1:readRecord1, b:b},
              success: function(result){
            
              $('#getdata').html(result);
              console.log(result);
            }
          
    });
      }
  }

        function question5(){
           if(document.getElementById("red5").style.visibility = "visible"){
        document.getElementById("red1").style.visibility = "hidden";
        document.getElementById("red1").style.display = "none";
        document.getElementById("red2").style.visibility = "hidden";
        document.getElementById("red2").style.display = "none";
        document.getElementById("red3").style.visibility = "hidden";
        document.getElementById("red3").style.display = "none";
        document.getElementById("red4").style.visibility = "hidden";
        document.getElementById("red4").style.display = "none";
        document.getElementById("red5").style.visibility = "hidden";
        document.getElementById("red5").style.display = "none";
        document.getElementById("red6").style.visibility = "visible";
        document.getElementById("red6").style.display = "block";
      }
        var c = document.getElementById('q3').value;
        console.log(c);  
        var readRecord2 = [];
        $.each($("input[name='checkbox3']:checked"), function(){
                readRecord2.push($(this).val());
        });
        var readRecord2 = readRecord2.join();
        if(readRecord2.length>0){
          console.log(readRecord2);
                      $.ajax({
              url: 'backend4.php',
              type: 'POST',
              data: {readRecord2:readRecord2, c:c},
              success: function(result){
            
              $('#getdata').html(result);
              console.log(result);
            }
          
    });
        }
      
    }
        function question6(){
         if(document.getElementById("red6").style.visibility = "visible"){
        document.getElementById("red1").style.visibility = "hidden";
        document.getElementById("red1").style.display = "none";
        document.getElementById("red2").style.visibility = "hidden";
        document.getElementById("red2").style.display = "none";
        document.getElementById("red3").style.visibility = "hidden";
        document.getElementById("red3").style.display = "none";
        document.getElementById("red4").style.visibility = "hidden";
        document.getElementById("red4").style.display = "none";
        document.getElementById("red5").style.visibility = "hidden";
        document.getElementById("red5").style.display = "none";
        document.getElementById("red6").style.visibility = "hidden";
        document.getElementById("red6").style.display = "none";
        document.getElementById("red7").style.visibility = "visible";
        document.getElementById("red7").style.display = "block";
      }

    }
     
</script>

</body>
</header>
</html>