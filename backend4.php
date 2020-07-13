<?php
session_start();
$db_hostname = 'localhost';
$db_database = 'registration';
$db_username = 'root';
$db_password = '';
$conn=mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
extract($_POST);
if(!empty($_SESSION['user_id'])){
  $userid = $_SESSION['user_id'];  
}
else{
    if(!empty($_SESSION['first'])){
  $userid = $_SESSION['first'];
  }  
}

  if(isset($_POST['readRecord'])&& isset($_POST['a'])){
  	$query1="UPDATE knowingpublic SET question1='$readRecord' WHERE user_id='$userid'";
		$result1 = mysqli_query($conn, $query1) or die( mysqli_error($conn));
    echo $userid;


  }

  if(isset($_POST['readRecord1'])&& isset($_POST['b'])){
    $query2="UPDATE knowingpublic SET question2='$readRecord1' WHERE user_id='$userid'";
		$result2 = mysqli_query($conn, $query2) or die( mysqli_error($conn));


  }

  if(isset($_POST['readRecord2'])&& isset($_POST['c'])){
    $query3="UPDATE knowingpublic SET question3='$readRecord2' WHERE user_id='$userid'";
		$result3 = mysqli_query($conn, $query3) or die( mysqli_error($conn));


  }
  if(isset($_POST['readRecord3'])&& isset($_POST['d']) && isset($_POST['readRecord4'])&& isset($_POST['e'])&& isset($_POST['readRecord5'])&& isset($_POST['f'])){
    $query4="UPDATE knowingpublic SET question40='$readRecord3' WHERE user_id='$userid'";
		$result4 = mysqli_query($conn, $query4) or die( mysqli_error($conn));
		$query5="UPDATE knowingpublic SET question41='$readRecord4' WHERE user_id='$userid'";
		$result5 = mysqli_query($conn, $query5) or die( mysqli_error($conn));
    $query6="UPDATE knowingpublic SET question42='$readRecord5' WHERE user_id='$userid'";
		$result6 = mysqli_query($conn, $query6) or die( mysqli_error($conn));



  }

  if(isset($_POST['readRecord6'])&& isset($_POST['g'])&& isset($_POST['readRecord7'])&& isset($_POST['h'])&& isset($_POST['readRecord8'])&& isset($_POST['i'])&& isset($_POST['readRecord9'])&& isset($_POST['j'])){
    $query7="UPDATE knowingpublic SET question50='$readRecord6' WHERE user_id='$userid'";
		$result7 = mysqli_query($conn, $query7) or die( mysqli_error($conn));
		$query8="UPDATE knowingpublic SET question51='$readRecord7' WHERE user_id='$userid'";
		$result8 = mysqli_query($conn, $query8) or die( mysqli_error($conn));
    $query9="UPDATE knowingpublic SET question52='$readRecord8' WHERE user_id='$userid'";
		$result9 = mysqli_query($conn, $query9) or die( mysqli_error($conn));
    $query10="UPDATE knowingpublic SET question53='$readRecord9' WHERE user_id='$userid'";
		$result10 = mysqli_query($conn, $query10) or die( mysqli_error($conn));



  }

  if(isset($_POST['readRecord10'])&& isset($_POST['k']) && isset($_POST['readRecord11']) && isset($_POST['l']) && isset($_POST['readRecord12'])&& isset($_POST['m'])){
    $query11="UPDATE knowingpublic SET question60='$readRecord10' WHERE user_id='$userid'";
		$result11 = mysqli_query($conn, $query11) or die( mysqli_error($conn));
    $query12="UPDATE knowingpublic SET question61='$readRecord11' WHERE user_id='$userid'";
		$result12 = mysqli_query($conn, $query12) or die( mysqli_error($conn));
    $query13="UPDATE knowingpublic SET question62='$readRecord12' WHERE user_id='$userid'";
		$result13 = mysqli_query($conn, $query13) or die( mysqli_error($conn));


  }

  if(isset($_POST['readRecord13']) && isset($_POST['n'])){
    $answered ="yes";
    $query14="UPDATE knowingpublic SET question7='$readRecord13' WHERE user_id='$userid'";		
    $result14 = mysqli_query($conn, $query14) or die( mysqli_error($conn));
    if(!empty($_SESSION['user_id'])){
    $query15="UPDATE form12 SET answered='$answered' WHERE id='$userid'";    
    $result15 = mysqli_query($conn, $query15) or die( mysqli_error($conn));
  }
}


  if(isset($_POST['read'])){
    $id = $_SESSION['user_id'];
  	$query1 = "SELECT * FROM profilepic WHERE user_id='$id'";
    $result1 = mysqli_query($conn, $query1) or die( mysqli_error($conn));
    $row=mysqli_fetch_array($result1);
    if($row){
      $img_dir = $row['img_dir'];
      echo $img_dir;
    }
  }


  if(isset($_POST['read1'])){
  $files = $_FILES['attachment1'];
  echo $files;
  $filename = $files['name'];
  $fileerror = $files['error'];
  $filetmp = $files['tmp_name'];
  $filesize = $files['size'];
  $fileext = explode('.', $filename);
  $fileonlyname = $fileext['0'];
  $fileonlyext = $fileext['1'];
  $filecheck = strtolower(end($fileext));
  $allowed = array( 'jpg', 'jpeg', 'gif', 'png', 'bmp');
  if(in_array($filecheck, $allowed))
  {
    $destinationfile = "uploadimages/".$filename;
    move_uploaded_file($filetmp, $destinationfile);
    $errorattachment=false;
  }
  else{
    $errorattachment=true;
  }
  if ($errorattachment == false) {
    $query = "INSERT INTO profilepic(img_name, img_dir) VALUES('$filename','$destinationfile')";
  if(!mysqli_query($conn,$query))
  {
  $query1 = "SELECT * FROM profilepic WHERE user_id='$id'";
  $result1 = mysqli_query($conn, $query1) or die( mysqli_error($conn));
  $row=mysqli_fetch_array($result1);
  if($row){
      $img_dir = $row['img_dir'];
      echo $img_dir;
    } 
  }
  else
  {
  $query1 = "SELECT * FROM profilepic WHERE user_id='$id'";
  $result1 = mysqli_query($conn, $query1) or die( mysqli_error($conn));
  $row=mysqli_fetch_array($result1);
  if($row){
      $img_dir = $row['img_dir'];
      echo $img_dir;
    } 
  }
      
  }

}

if(isset($_POST['email123'])){
  $email123 = $_POST['email123'];
  $value = "yes";
  if(!empty($_SESSION['first'])){
  $userid = $_SESSION['first'];
  }
   $query = "INSERT INTO subscribe(user_id,subscribe, email) VALUES('$userid','$value','$email123') ";
  if(!mysqli_query($conn,$query))
  { 
    echo "failed";
  }
  else{
    echo "success";
  }


}

if(isset($_POST['check'])){
    if(!empty($_SESSION['first'])){
  $userid = $_SESSION['first'];
  }
   $query1 = "SELECT * FROM subscribe WHERE user_id='$userid'";
  $result1 = mysqli_query($conn, $query1) or die( mysqli_error($conn));
  $row=mysqli_fetch_array($result1);
  if($row){
      $subscribe = $row['subscribe'];
      echo $subscribe;
    } 


}


if(isset($_POST['checkvideo'])){
  $data = "";
  $query1 = "SELECT * FROM releasetrailer ORDER BY id DESC LIMIT 7";
  $result1 = mysqli_query($conn, $query1) or die( mysqli_error($conn));
  if((mysqli_num_rows($result1))> 0){
    $number1;
   while($row=mysqli_fetch_array($result1)){
      $data .= "<li onclick = \"videoUrl('".$row["video_url"]."')\"><img src='".$row['image_dir']."'></li>";
   }
  
}
echo $data;
}
if(isset($_POST['checkslider'])){
  $data = "";
  $query1 = "SELECT * FROM releasetrailer ORDER BY id DESC LIMIT 7";
  $result1 = mysqli_query($conn, $query1) or die( mysqli_error($conn));
  if((mysqli_num_rows($result1))> 0){
    $number1;
   while($row=mysqli_fetch_array($result1)){
      $data .= '<source src="'.$row['video_url'].'" type="video/mp4" media="">';
   }
  
}
echo $data;
}
if(isset($_POST['checkmovie'])){
  $data = "";
  $yes = "yes";
  $query1 = "SELECT * FROM movies ORDER BY movie_id DESC";
  $result1 = mysqli_query($conn, $query1) or die( mysqli_error($conn));
      if(!empty($_SESSION['first'])){
  $userid = $_SESSION['first'];
  }  
  $query2 = "SELECT * FROM likedpost WHERE user_id = '$userid'";
  $result2 = mysqli_query($conn, $query2) or die( mysqli_error($conn));
  if((mysqli_num_rows($result1))> 0){
   while($row=mysqli_fetch_array($result1)){
      $number = $row['movie_id'];
      $data1 = $row['movie_id'];
      $abcd =checkcomment($row['movie_id'], $conn, $userid);
      $abcd1 =countcomment($row['movie_id'], $conn, $userid);
      $query3 = "SELECT count(movie_id) from likedpost WHERE liked='$yes' AND movie_id ='$number'";
      $result3 = mysqli_query($conn, $query3) or die( mysqli_error($conn));
      $row3 = mysqli_fetch_array($result3);
      if($row3){
        $count = $row3[0];
      }else{
        $count = 0;
      }
      $connec = $count - 1;
      $query4 = "SELECT * from comment WHERE commented='$yes' AND movie_id ='$number'";
      $result4 = mysqli_query($conn, $query4) or die( mysqli_error($conn));
      $row4 = mysqli_fetch_array($result4);    
      $query5="SELECT * from profilepic WHERE user_id='$userid'";
      $result5=mysqli_query($conn, $query5) or die( mysqli_error($conn));
      $row5 = mysqli_fetch_array($result5);
     $row2=mysqli_fetch_array($result2);
     if($abcd1 >= 1){
      if($row2){
      $liked = $row2['liked'];
      if($liked == "yes"){
       if($count >= 2){    
        $data .=   '<div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>'.$row["movie_name"].'</h3>
          <h5>'.$row["movie_category"].' </br>
            <span class="w3-opacity">'.$row["movie_release_date"].'</span></h5>
        </div>

        <div class="w3-justify">
          <img src="'.$row["movie_img_dir"].'"  style="width:100% "  class="w3-padding-16">
          <p><strong>Director :</strong> '.$row["movie_directed_by"].' </p>
          <p><strong>Box office: </strong> '.$row["movie_box_office_collection"].' </p>
          <p><strong>Budget: </strong> '.$row["movie_budget"].'</p>
          <p><strong>Actor: </strong> ‎'.$row["movie_actor_name"].' </p>
          <p><strong>Actress: </strong> ‎'.$row["movie_actress_name"].' </p>

          <p> '.$row["about_movie"].'</p>
          
          <p class="w3-left"><button class="w3-button w3-red w3-border" onclick="likeFunction(this,'.$row["movie_id"].')"><b>✓ Liked</b><span class="w3-tag w3-white"></span></button></p>
          <div class="input-group">
            <input type="text" class="form-control" id="movies'.$row["movie_id"].'" placeholder="Add a review...">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fa fa-paper-plane" onclick="usercomment('.$row["movie_id"].')"></i>
              </span>
            </div>
          </div>
        </br>
          <p class="w3-left w3-center" id="movie'.$row["movie_id"].'">You and '.$connec.' others liked this</p> 
          <p class="w3-right w3-center" onclick="myFunction(movie575'.$row["movie_id"].')" id="movie1234'.$data1.'" style="cursor:pointer;">View All '.$abcd1.' Review</p>
          <p class="w3-clear"></p>
           <div class="w3-row w3-margin-bottom" id="movie575'.$data1.'" style="display:none;">
                    <hr>'.$abcd.'<hr>
                    </div>
      </div>
      </div>
      <hr>';
    }
    else{
        $data .=   '<div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>'.$row["movie_name"].'</h3>
          <h5>'.$row["movie_category"].' </br>
            <span class="w3-opacity">'.$row["movie_release_date"].'</span></h5>
        </div>

        <div class="w3-justify">
          <img src="'.$row["movie_img_dir"].'"  style="width:100% "  class="w3-padding-16">
          <p><strong>Director :</strong> '.$row["movie_directed_by"].' </p>
          <p><strong>Box office: </strong> '.$row["movie_box_office_collection"].' </p>
          <p><strong>Budget: </strong> '.$row["movie_budget"].'</p>
          <p><strong>Actor: </strong> ‎'.$row["movie_actor_name"].' </p>
          <p><strong>Actress: </strong> ‎'.$row["movie_actress_name"].' </p>

          <p> '.$row["about_movie"].'</p>
          
          <p class="w3-left"><button class="w3-button w3-red w3-border" onclick="likeFunction(this,'.$row["movie_id"].')"><b>✓ Liked</b><span class="w3-tag w3-white"></span></button></p>
                    
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Add a review..." id="movies'.$row["movie_id"].'">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fa fa-paper-plane" onclick="usercomment('.$row["movie_id"].')"></i>
              </span>
            </div>
          </div> 
          </br>
           <p class="w3-left w3-center" id="movie'.$row["movie_id"].'">You liked this</p>
           <p class="w3-right w3-center"  onclick="myFunction(movie575'.$row["movie_id"].')" id="movie1234'.$data1.'" style="cursor:pointer;">View All  '.$abcd1.'  Review</p>
          <p class="w3-clear"></p>
         <div class="w3-row w3-margin-bottom" id="movie575'.$data1.'" style="display:none;">
                    <hr>'.$abcd.'
                      <hr>
                    </div>
        </div>
      </div>
      <hr>';
    }
  }
      else{
        if($count >= 1){
        $data .=   '<div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>'.$row["movie_name"].'</h3>
          <h5>'.$row["movie_category"].' </br>
            <span class="w3-opacity">'.$row["movie_release_date"].'</span></h5>
        </div>

        <div class="w3-justify">
          <img src="'.$row["movie_img_dir"].'"  style="width:100% "  class="w3-padding-16">
          <p><strong>Director :</strong> '.$row["movie_directed_by"].' </p>
          <p><strong>Box office: </strong> '.$row["movie_box_office_collection"].' </p>
          <p><strong>Budget: </strong> '.$row["movie_budget"].'</p>
          <p><strong>Actor: </strong> ‎'.$row["movie_actor_name"].' </p>
          <p><strong>Actress: </strong> ‎'.$row["movie_actress_name"].' </p>
          <p> '.$row["about_movie"].'</p>
          <p class="w3-left"><button class="w3-button w3-white w3-border" id="likebtn" onclick="likeFunction(this,'.$row["movie_id"].')"><b><i class="fa fa-thumbs-up"></i> Like</b><span class="w3-tag w3-white"></span></button></p>
                    
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Add a review..." id="movies'.$row["movie_id"].'">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fa fa-paper-plane" onclick="usercomment('.$row["movie_id"].')"></i>
              </span>
            </div>
          </div>
        </br>
           <p class="w3-left w3-center" id="movie'.$row["movie_id"].'">'.$count.' people liked this</p>
           <p class="w3-right w3-center"  onclick="myFunction(movie575'.$row["movie_id"].')" id="movie1234'.$data1.'" style="cursor:pointer;">View All '.$abcd1.' Review</p> 
          <p class="w3-clear"></p>
          <div class="w3-row w3-margin-bottom" id="movie575'.$data1.'" style="display:none;">
                    <hr>'.$abcd.'
                      <hr>
                    </div>
        </div>
      </div>
      <hr>';
    }
    else{
              $data .=   '<div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>'.$row["movie_name"].'</h3>
          <h5>'.$row["movie_category"].' </br>
            <span class="w3-opacity">'.$row["movie_release_date"].'</span></h5>
        </div>

        <div class="w3-justify">
          <img src="'.$row["movie_img_dir"].'"  style="width:100% "  class="w3-padding-16">
          <p><strong>Director :</strong> '.$row["movie_directed_by"].' </p>
          <p><strong>Box office: </strong> '.$row["movie_box_office_collection"].' </p>
          <p><strong>Budget: </strong> '.$row["movie_budget"].'</p>
          <p><strong>Actor: </strong> ‎'.$row["movie_actor_name"].' </p>
          <p><strong>Actress: </strong> ‎'.$row["movie_actress_name"].' </p>

          <p> '.$row["about_movie"].'</p>
          
          <p class="w3-left"><button class="w3-button w3-white w3-border" id="likebtn" onclick="likeFunction(this,'.$row["movie_id"].')"><b><i class="fa fa-thumbs-up"></i> Like</b><span class="w3-tag w3-white"></span></button></p>
                    
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Add a review..." id="movies'.$row["movie_id"].'">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fa fa-paper-plane" onclick="usercomment('.$row["movie_id"].')"></i>
              </span>
            </div>
          </div>
        </br>
           <p class="w3-left w3-center" id="movie'.$row["movie_id"].'"></p> 
           <p class="w3-right w3-center"  onclick="myFunction(movie575'.$row["movie_id"].')" id="movie1234'.$data1.'" style="cursor:pointer;">View All '.$abcd1.' Review</p>
          <p class="w3-clear"></p>
           <div class="w3-row w3-margin-bottom" id="movie575'.$data1.'" style="display:none;">
                    <hr>'
                    .$abcd.'
                      <hr>
                    </div>
        </div>
      </div>
      <hr>';
    }
  }  
  }  
      else{
        if($count >= 1){
        $data .=   '<div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>'.$row["movie_name"].'</h3>
          <h5>'.$row["movie_category"].' </br>
            <span class="w3-opacity">'.$row["movie_release_date"].'</span></h5>
        </div>

        <div class="w3-justify">
          <img src="'.$row["movie_img_dir"].'"  style="width:100% "  class="w3-padding-16">
          <p><strong>Director :</strong> '.$row["movie_directed_by"].' </p>
          <p><strong>Box office: </strong> '.$row["movie_box_office_collection"].' </p>
          <p><strong>Budget: </strong> '.$row["movie_budget"].'</p>
          <p><strong>Actor: </strong> ‎'.$row["movie_actor_name"].' </p>
          <p><strong>Actress: </strong> ‎'.$row["movie_actress_name"].' </p>

          <p> '.$row["about_movie"].'</p>
          
          <p class="w3-left"><button class="w3-button w3-white w3-border" id="likebtn" onclick="likeFunction(this,'.$row["movie_id"].')"><b><i class="fa fa-thumbs-up"></i> Like</b><span class="w3-tag w3-white"></span></button></p>
                    
                  <div class="input-group">
            <input type="text" class="form-control" placeholder="Add a review..." id="movies'.$row["movie_id"].'">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fa fa-paper-plane" onclick="usercomment('.$row["movie_id"].')"></i>
              </span>
            </div>
          </div>
        </br>
       <p class="w3-left w3-center" id="movie'.$row["movie_id"].'">'.$count.' people liked this</p> 
       <p class="w3-right w3-center"  onclick="myFunction(movie575'.$row["movie_id"].')" id="movie1234'.$data1.'" style="cursor:pointer;">View All '.$abcd1.' Review</p> 
          <p class="w3-clear"></p>
        <div class="w3-row w3-margin-bottom" id="movie575'.$data1.'" style="display:none;">
                    <hr>'
                    .$abcd.'
                      <hr>
                    </div>
        </div>
      </div>
      <hr>';
      }
      else{
      $data .=   '<div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>'.$row["movie_name"].'</h3>
          <h5>'.$row["movie_category"].' </br>
            <span class="w3-opacity">'.$row["movie_release_date"].'</span></h5>
        </div>

        <div class="w3-justify">
          <img src="'.$row["movie_img_dir"].'"  style="width:100% "  class="w3-padding-16">
          <p><strong>Director :</strong> '.$row["movie_directed_by"].' </p>
          <p><strong>Box office: </strong> '.$row["movie_box_office_collection"].' </p>
          <p><strong>Budget: </strong> '.$row["movie_budget"].'</p>
          <p><strong>Actor: </strong> ‎'.$row["movie_actor_name"].' </p>
          <p><strong>Actress: </strong> ‎'.$row["movie_actress_name"].' </p>

          <p> '.$row["about_movie"].'</p>
          
          <p class="w3-left" ><button class="w3-button w3-white w3-border" id="likebtn" onclick="likeFunction(this,'.$row["movie_id"].')"><b><i class="fa fa-thumbs-up"></i> Like</b><span class="w3-tag w3-white"></span></button></p>
          
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Add a review..." id="movies'.$row["movie_id"].'">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fa fa-paper-plane" onclick="usercomment('.$row["movie_id"].')"></i>
              </span>
            </div>
          </div>
        </br>
       <p class="w3-left w3-center" id="movie'.$row["movie_id"].'"></p> 
       <p class="w3-right w3-center"  onclick="myFunction(movie575'.$row["movie_id"].')" id="movie1234'.$data1.'" style="cursor:pointer;">View All '.$abcd1.' Review</p>
          <p class="w3-clear"></p>
          <div class="w3-row w3-margin-bottom" id="movie575'.$data1.'" style="display:none;">
                    <hr>
                    '.$abcd.'
                    <hr>
          </div>

        </div>
      </div>
      <hr>';
      }
    }
     }else{

      if($row2){
      $liked = $row2['liked'];
      if($liked == "yes"){
       if($count >= 2){    
        $data .=   '<div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>'.$row["movie_name"].'</h3>
          <h5>'.$row["movie_category"].' </br>
            <span class="w3-opacity">'.$row["movie_release_date"].'</span></h5>
        </div>

        <div class="w3-justify">
          <img src="'.$row["movie_img_dir"].'"  style="width:100% "  class="w3-padding-16">
          <p><strong>Director :</strong> '.$row["movie_directed_by"].' </p>
          <p><strong>Box office: </strong> '.$row["movie_box_office_collection"].' </p>
          <p><strong>Budget: </strong> '.$row["movie_budget"].'</p>
          <p><strong>Actor: </strong> ‎'.$row["movie_actor_name"].' </p>
          <p><strong>Actress: </strong> ‎'.$row["movie_actress_name"].' </p>

          <p> '.$row["about_movie"].'</p>
          
          <p class="w3-left"><button class="w3-button w3-red w3-border" onclick="likeFunction(this,'.$row["movie_id"].')"><b>✓ Liked</b><span class="w3-tag w3-white"></span></button></p>
          <div class="input-group">
            <input type="text" class="form-control" id="movies'.$row["movie_id"].'" placeholder="Add a review...">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fa fa-paper-plane" onclick="usercomment('.$row["movie_id"].')"></i>
              </span>
            </div>
          </div>
        </br>
          <p class="w3-left w3-center" id="movie'.$row["movie_id"].'">You and '.$connec.' others liked this</p> 
          <p class="w3-right w3-center" onclick="myFunction(movie575'.$row["movie_id"].')" id="movie1234'.$data1.'" style="cursor:pointer;">No Review</p>
          <p class="w3-clear"></p>
           <div class="w3-row w3-margin-bottom" id="movie575'.$data1.'" style="display:none;">
                    <hr>'.$abcd.'
                      <hr>
                    </div>
      </div>
      </div>
      <hr>';
    }
    else{
        $data .=   '<div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>'.$row["movie_name"].'</h3>
          <h5>'.$row["movie_category"].' </br>
            <span class="w3-opacity">'.$row["movie_release_date"].'</span></h5>
        </div>

        <div class="w3-justify">
          <img src="'.$row["movie_img_dir"].'"  style="width:100% "  class="w3-padding-16">
          <p><strong>Director :</strong> '.$row["movie_directed_by"].' </p>
          <p><strong>Box office: </strong> '.$row["movie_box_office_collection"].' </p>
          <p><strong>Budget: </strong> '.$row["movie_budget"].'</p>
          <p><strong>Actor: </strong> ‎'.$row["movie_actor_name"].' </p>
          <p><strong>Actress: </strong> ‎'.$row["movie_actress_name"].' </p>

          <p> '.$row["about_movie"].'</p>
          
          <p class="w3-left"><button class="w3-button w3-red w3-border" onclick="likeFunction(this,'.$row["movie_id"].')"><b>✓ Liked</b><span class="w3-tag w3-white"></span></button></p>
                    
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Add a review..." id="movies'.$row["movie_id"].'">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fa fa-paper-plane" onclick="usercomment('.$row["movie_id"].')"></i>
              </span>
            </div>
          </div> 
          </br>
           <p class="w3-left w3-center" id="movie'.$row["movie_id"].'">You liked this</p>
           <p class="w3-right w3-center"  onclick="myFunction(movie575'.$row["movie_id"].')" id="movie1234'.$data1.'" style="cursor:pointer;">No Review</p>
          <p class="w3-clear"></p>
           <div class="w3-row w3-margin-bottom" id="movie575'.$data1.'" style="display:none;">
                    <hr>'.$abcd.'
                      <hr>
                    </div>
        </div>
      </div>
      <hr>';
    }
  }
      else{
        if($count >= 1){
        $data .=   '<div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>'.$row["movie_name"].'</h3>
          <h5>'.$row["movie_category"].' </br>
            <span class="w3-opacity">'.$row["movie_release_date"].'</span></h5>
        </div>

        <div class="w3-justify">
          <img src="'.$row["movie_img_dir"].'"  style="width:100% "  class="w3-padding-16">
          <p><strong>Director :</strong> '.$row["movie_directed_by"].' </p>
          <p><strong>Box office: </strong> '.$row["movie_box_office_collection"].' </p>
          <p><strong>Budget: </strong> '.$row["movie_budget"].'</p>
          <p><strong>Actor: </strong> ‎'.$row["movie_actor_name"].' </p>
          <p><strong>Actress: </strong> ‎'.$row["movie_actress_name"].' </p>
          <p> '.$row["about_movie"].'</p>
          <p class="w3-left"><button class="w3-button w3-white w3-border" id="likebtn" onclick="likeFunction(this,'.$row["movie_id"].')"><b><i class="fa fa-thumbs-up"></i> Like</b><span class="w3-tag w3-white"></span></button></p>
                    
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Add a review..." id="movies'.$row["movie_id"].'">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fa fa-paper-plane" onclick="usercomment('.$row["movie_id"].')"></i>
              </span>
            </div>
          </div>
        </br>
           <p class="w3-left w3-center" id="movie'.$row["movie_id"].'">'.$count.' people liked this</p>
           <p class="w3-right w3-center"  onclick="myFunction(movie575'.$row["movie_id"].')" id="movie1234'.$data1.'" style="cursor:pointer;">No Review</p> 
          <p class="w3-clear"></p>
            <div class="w3-row w3-margin-bottom" id="movie575'.$data1.'" style="display:none;">
                    <hr>'.$abcd.'
                      <hr>
                    </div>
        </div>
      </div>
      <hr>';
    }
    else{
              $data .=   '<div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>'.$row["movie_name"].'</h3>
          <h5>'.$row["movie_category"].' </br>
            <span class="w3-opacity">'.$row["movie_release_date"].'</span></h5>
        </div>

        <div class="w3-justify">
          <img src="'.$row["movie_img_dir"].'"  style="width:100% "  class="w3-padding-16">
          <p><strong>Director :</strong> '.$row["movie_directed_by"].' </p>
          <p><strong>Box office: </strong> '.$row["movie_box_office_collection"].' </p>
          <p><strong>Budget: </strong> '.$row["movie_budget"].'</p>
          <p><strong>Actor: </strong> ‎'.$row["movie_actor_name"].' </p>
          <p><strong>Actress: </strong> ‎'.$row["movie_actress_name"].' </p>

          <p> '.$row["about_movie"].'</p>
          
          <p class="w3-left"><button class="w3-button w3-white w3-border" id="likebtn" onclick="likeFunction(this,'.$row["movie_id"].')"><b><i class="fa fa-thumbs-up"></i> Like</b><span class="w3-tag w3-white"></span></button></p>
                    
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Add a review..." id="movies'.$row["movie_id"].'">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fa fa-paper-plane" onclick="usercomment('.$row["movie_id"].')"></i>
              </span>
            </div>
          </div>
        </br>
           <p class="w3-left w3-center" id="movie'.$row["movie_id"].'"></p> 
           <p class="w3-right w3-center"  onclick="myFunction(movie575'.$row["movie_id"].')" id="movie1234'.$data1.'" style="cursor:pointer;">No Review</p>
          <p class="w3-clear"></p>
          <div class="w3-row w3-margin-bottom" id="movie575'.$data1.'" style="display:none;">
                    <hr>'
                    .$abcd.'
                      <hr>
                    </div>
        </div>
      </div>
      <hr>';
    }
  }  
  }  
      else{
        if($count >= 1){
        $data .=   '<div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>'.$row["movie_name"].'</h3>
          <h5>'.$row["movie_category"].' </br>
            <span class="w3-opacity">'.$row["movie_release_date"].'</span></h5>
        </div>

        <div class="w3-justify">
          <img src="'.$row["movie_img_dir"].'"  style="width:100% "  class="w3-padding-16">
          <p><strong>Director :</strong> '.$row["movie_directed_by"].' </p>
          <p><strong>Box office: </strong> '.$row["movie_box_office_collection"].' </p>
          <p><strong>Budget: </strong> '.$row["movie_budget"].'</p>
          <p><strong>Actor: </strong> ‎'.$row["movie_actor_name"].' </p>
          <p><strong>Actress: </strong> ‎'.$row["movie_actress_name"].' </p>

          <p> '.$row["about_movie"].'</p>
          
          <p class="w3-left"><button class="w3-button w3-white w3-border" id="likebtn" onclick="likeFunction(this,'.$row["movie_id"].')"><b><i class="fa fa-thumbs-up"></i> Like</b><span class="w3-tag w3-white"></span></button></p>
                    
                  <div class="input-group">
            <input type="text" class="form-control" placeholder="Add a review..." id="movies'.$row["movie_id"].'">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fa fa-paper-plane" onclick="usercomment('.$row["movie_id"].')"></i>
              </span>
            </div>
          </div>
        </br>
       <p class="w3-left w3-center" id="movie'.$row["movie_id"].'">'.$count.' people liked this</p> 
       <p class="w3-right w3-center"  onclick="myFunction(movie575'.$row["movie_id"].')" id="movie1234'.$data1.'" style="cursor:pointer;">No Review</p> 
          <p class="w3-clear"></p>
        <div class="w3-row w3-margin-bottom" id="movie575'.$data1.'" style="display:none;">
                    <hr>'
                    .$abcd.'
                      <hr>
                    </div>
        </div>
      </div>
      <hr>';
      }
      else{
      $data .=   '<div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>'.$row["movie_name"].'</h3>
          <h5>'.$row["movie_category"].' </br>
            <span class="w3-opacity">'.$row["movie_release_date"].'</span></h5>
        </div>

        <div class="w3-justify">
          <img src="'.$row["movie_img_dir"].'"  style="width:100% "  class="w3-padding-16">
          <p><strong>Director :</strong> '.$row["movie_directed_by"].' </p>
          <p><strong>Box office: </strong> '.$row["movie_box_office_collection"].' </p>
          <p><strong>Budget: </strong> '.$row["movie_budget"].'</p>
          <p><strong>Actor: </strong> ‎'.$row["movie_actor_name"].' </p>
          <p><strong>Actress: </strong> ‎'.$row["movie_actress_name"].' </p>

          <p> '.$row["about_movie"].'</p>
          
          <p class="w3-left" ><button class="w3-button w3-white w3-border" id="likebtn" onclick="likeFunction(this,'.$row["movie_id"].')"><b><i class="fa fa-thumbs-up"></i> Like</b><span class="w3-tag w3-white"></span></button></p>
          
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Add a review..." id="movies'.$row["movie_id"].'">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fa fa-paper-plane" onclick="usercomment('.$row["movie_id"].')"></i>
              </span>
            </div>
          </div>
        </br>
       <p class="w3-left w3-center" id="movie'.$row["movie_id"].'"></p> 
       <p class="w3-right w3-center"  onclick="myFunction(movie575'.$row["movie_id"].')" id="movie1234'.$data1.'" style="cursor:pointer;">No Review</p>
          <p class="w3-clear"></p>
          <div class="w3-row w3-margin-bottom" id="movie575'.$data1.'" style="display:none;">
                    <hr>
                    '.$abcd.'
                    <hr>
          </div>
        </div>
      </div>
      <hr>';
      }
    }

  }
       
 }
 }
echo $data;
}

function checkcomment($data1, $conn, $userid){
  $data = "";
  $yes = "yes";
  $query4 = "SELECT * from comment WHERE commented='$yes' AND movie_id ='$data1'";
  $result4 = mysqli_query($conn, $query4) or die( mysqli_error($conn));    
  if((mysqli_num_rows($result4))> 0){
   while($row4=mysqli_fetch_array($result4)){
    $userid = $row4['user_id'];
  $query5="SELECT * from profilepic WHERE user_id='$userid'";
  $result5=mysqli_query($conn, $query5) or die( mysqli_error($conn));
  $row5 = mysqli_fetch_array($result5);

  $data .=
                  '<div class="w3-col l2 m3">
                      <img src="'.$row5['img_dir'].'" style="width:90px;"">
                    </div>
                    <div class="w3-col l10 m9">
                    <h4>'.$row4['uname'].'</br><span class="w3-opacity w3-medium">'.$row4['time1'].'</span></h4>
                    <p>'.$row4['comment'].'</p>
                    </div>';
}
}
else{
  $data .="No review";
  
}
return $data;
}


function countcomment($data1, $conn, $userid){
  $yes = "yes";
  $query3 = "SELECT count(movie_id) from comment WHERE commented='$yes' AND movie_id ='$data1'";
      $result3 = mysqli_query($conn, $query3) or die( mysqli_error($conn));
      $row3 = mysqli_fetch_array($result3);
      if($row3){
        $count = $row3[0];
      }else{
        $count = "";
      }
  return $count;
}

if(isset($_POST['checkadvertise'])){
  $data = "";
  $query1 = "SELECT * FROM advertise ORDER BY id DESC";
  $result1 = mysqli_query($conn, $query1) or die( mysqli_error($conn));
  if((mysqli_num_rows($result1))> 0){
    $number1;
   while($row=mysqli_fetch_array($result1)){
      $data .= "<div class='w3-white w3-margin' id='advertise' style='height:auto;'>
      <div class='w3-container w3-padding w3-black'>
          <h4>Advertise</h4>
        </div>
        <div class='w3-white'>
          <div class='w3-section' style='height:200%;'>
            <center><span><img src='".$row['image_dir']."' style='max-width:95%; max-height:100%;'></span></center>
              <center><b class='w3-container'>Advertised By ".$row['advertise_by']."</b></center>
              <b class='w3-container'>".$row['about_info']."</b>
          </div>
        </div>
        </div>
        ";
   }
  
}
echo $data;
}



  if(isset($_POST['movieidx'])){
    $movieid = $_POST['movieidx'];
    $query1 = "SELECT * FROM likedpost WHERE user_id='$userid' AND movie_id ='$movieid'";
    $result1 = mysqli_query($conn, $query1) or die( mysqli_error($conn));
    $row=mysqli_fetch_array($result1);
    $yes = "yes";
    $no = "no";
    if($row){
      $check = $row['liked'];
      if($check == "no"){
        $query11="UPDATE likedpost SET liked='$yes' WHERE user_id='$userid' AND movie_id ='$movieid'";
        $result11 = mysqli_query($conn, $query11) or die( mysqli_error($conn));
        if(mysqli_query($conn,$query11)){
          echo "yes";
        }
      }else{
        $query11="UPDATE likedpost SET liked='$no' WHERE user_id='$userid' AND movie_id ='$movieid'";
        $result11 = mysqli_query($conn, $query11) or die( mysqli_error($conn));
        if(mysqli_query($conn,$query11)){
          echo "no";
        }
      }
    }
    else{
    $query = "INSERT INTO likedpost(movie_id,user_id,liked) VALUES('$movieid','$userid','$yes') ";
    if(!mysqli_query($conn,$query))
    { 
      echo "failed";
    }else{
      echo "success";
    }  
    }
    
  }

if(isset($_POST['countlikes'])){
   $yes = "yes";
      $movieid = $_POST['countlikes'];
      $query3 = "SELECT count(movie_id) from likedpost WHERE liked='$yes' AND movie_id ='$movieid'";
      $result3 = mysqli_query($conn, $query3) or die( mysqli_error($conn));
      $row3 = mysqli_fetch_array($result3);
      if($row3){
        $count = $row3[0];
      }else{
        $count = 0;
      }
echo $count;

}

if(isset($_POST['comment']) && isset($_POST['y'])){
      $yes = "yes";
      if(!empty($_SESSION['uname'])){
          $uname = $_SESSION['uname'];
      }else{
          $uname = "guest";
      }
      $time = date("l jS \of F Y h:i:s A");
      $movieid = $_POST['y'];
      $comment = $_POST['comment'];
      $query = "INSERT INTO comment(user_id, movie_id, comment, commented, uname, time1) VALUES('$userid', '$movieid', '$comment', '$yes', '$uname', '$time')";
      if(!mysqli_query($conn,$query))
      { echo "failed";

      }else  $data = "";
  $query4 = "SELECT * from comment WHERE commented='$yes' AND movie_id ='$movieid'";
  $result4 = mysqli_query($conn, $query4) or die( mysqli_error($conn));    
  if((mysqli_num_rows($result4))> 0){
   while($row4=mysqli_fetch_array($result4)){
    $userid = $row4['user_id'];
    $query5="SELECT * from profilepic WHERE user_id='$userid'";
  $result5=mysqli_query($conn, $query5) or die( mysqli_error($conn));
  $row5 = mysqli_fetch_array($result5);
if($row5){
        $data .=
                        '<div class="w3-col l2 m3">
                            <img src="'.$row5['img_dir'].'" style="width:90px;"">
                          </div>
                          <div class="w3-col l10 m9">
                          <h4>'.$row4['uname'].'</br><span class="w3-opacity w3-medium">'.$row4['time1'].'</span></h4>
                          <p>'.$row4['comment'].'</p>
                          </div>';
      }else{
        '<div class="w3-col l2 m3">
        <img src="images/user.jpg" style="width:90px;"">
      </div>
      <div class="w3-col l10 m9">
      <h4>'.$row4['uname'].'</br><span class="w3-opacity w3-medium">'.$row4['time1'].'</span></h4>
      <p>'.$row4['comment'].'</p>
      </div>';
    }
  }
}
else{
  $data .="No review";
  
}
echo $data;
}

if(isset($_POST['abc'])){
   $yes = "yes";
      $movieid = $_POST['abc'];
      $query3 = "SELECT count(movie_id) from comment WHERE commented='$yes' AND movie_id ='$movieid'";
      $result3 = mysqli_query($conn, $query3) or die( mysqli_error($conn));
      $row3 = mysqli_fetch_array($result3);
      if($row3){
        $count = "View all ".$row3[0]." Review";
      }else{
        $count = "No review";
      }
echo $count;  


}

?>