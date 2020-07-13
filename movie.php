<!DOCTYPE html>
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
  margin-top: 39%;
  padding: 0;
    	background-color:#3e8532;
    background-size:  cover;
    background-position: center;
    position: relative;
    font-family:cursive;
    background:absolute;
    height:100%;

  }
  .container{
  	height:100%;
  }

  .login-box{
    width: 320px;
    height: 1000px;
    background: rgba(0, 0, 5, 0.5);

    color: #fff;
    top: -50%;
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



 <div id="container" style="margin-top: 22%;">
  <div class="login-box">



 <center><img src="images/pp1.png" alt="ll1" style="max-width: 60px; max-height: 60px; padding: auto; margin:auto;" align="center"></center>



 <div class="form-group">
      <label for="number" style="color:yellow;">Movie's ID :</label>
      <input type="number" class="form-control-sm" id="uname" placeholder="Enter Movie's ID" name="uname" onkeyup="unameerror()">
</br>
      <label for="name" style="color:yellow; margin-top: 5%;">Movie's Name :</label>
      <input type="name" class="form-control-sm" id="uname" placeholder="Enter Movie's Name" name="uname" onkeyup="unameerror()">

      </br>
      <label for="name" style="color:yellow; margin-top: 5%;">Movie-Actor's Name :</label>
      <input type="name" class="form-control-sm" id="uname" placeholder="Enter Movie-Actor's Name" name="uname" onkeyup="unameerror()">
    

 </br>
      <label for="name" style="color:yellow; margin-top: 5%;">Movie-Actress's Name : </label>
      <input type="name" class="form-control-sm" id="uname" placeholder="Enter Movie-Actress's Name" name="uname" onkeyup="unameerror()">

       </br>
      <label for="name" style="color:yellow; margin-top: 5%;">Movie's Category :</label>
     <select required="required" style="width:89%; border-radius: 2px;" autofocus="autofocus" id="loginas" name="loginas" onclick="myFunction12()">
  <option><div id="getdata"> !---Select From Below---!</div></option>
  <option >Action</option>
  <option>Drama</option>
  <option >Thriller</option>
  <option >Horror</option>
   <option >Crime</option> <option >Sci-Fi</option> <option >Adventure</option> <option >Racing</option> <option >Spy</option>
    <option >Historical</option> <option >Mystery</option> <option >Suspence</option>  <option >Heroic</option>
</select>



 <label for="bday" style="color:yellow; margin-top: 5%;">Movie's Release Date  : 
    
  
    <input type="date" style="width:89%; border-radius: 2px; padding-left: 10%; font-style: uppercase;" name="bday" required pattern="\d{4}-\d{2}-\d{2}">
    <span class="validity"></span>
  
</label>

 </br>
      <label for="name" style="color:yellow; margin-top: 5%;">Movie-Directed by :</label>
      <input type="name" class="form-control-sm" id="uname" placeholder="Enter Director Name" name="uname" onkeyup="unameerror()">



</br>
      <label for="number" style="color:yellow; margin-top: 5%;">Movie's Budget :</label>
      <input type="number" class="form-control-sm" id="uname" placeholder="Enter Budget's Value" name="uname" onkeyup="unameerror()">


</br>
      <label for="number" style="color:yellow; margin-top: 5%;">Movie_box_office_collection :</label>
      <input type="number" class="form-control-sm" id="uname" placeholder="Enter Value" name="uname" onkeyup="unameerror()">


</br>
      <label style="margin-left: 1%; color:yellow; margin-top: 5%; ">Upload Image of Movie:</label>

    <input type="file" style="font-size: 17px; margin-left: 1%; color:yellow;" class="btn1" name="IMAGEToUpload" id="upload image" value="choose Poster" class="text-" >


</br>
      <label for="name" style="color:yellow; margin-top: 5%;">About Movie's Name :</label>
      <input type="name" class="form-control-sm" id="uname" placeholder="Enter Name" name="uname" onkeyup="unameerror()">
<br>
 <center><button type="button" style=" margin-top: 10%;" class="btn btn-primary "  onclick="checkRecord()">Submit</button></center>
 

    </div>















</body>
</html>