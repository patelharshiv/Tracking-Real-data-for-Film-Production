<?php
session_start();
?>
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
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
</head>
<body>
	<div id="getdata"></div>


<script type="text/javascript">
	$(document).ready(function(){
		function123();
	});
	function function123(){
		var read = "read"
			$.ajax({
			url:"backend3.php",
			type:"post",
			data:{read:read},
			success:function(data){
				$('#getdata').html(data);
				console.log(data);
			}


		});
	}

</script>

</body>
</html>
     <!-- <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>JOKER</h3>
          <h5>2019 ‧ Drama/Thriller ‧ 2h 2m, </br>
            <span class="w3-opacity">2 October 2019 (India)</span></h5>
        </div>

        <div class="w3-justify">
          <img src="images/joker.jpg"  style="width:100% "  class="w3-padding-16">
          <p><strong>Director :</strong> Todd Phillips </p>
          <p><strong>Box office: </strong> 107.2 crores USD </p>
          <p><strong>Budget: </strong> $55–70 million </p>
          <p><strong>Actor: </strong> ‎Joaquin Phoenix as Arthur Fleck (Joker) </p>
          <p> Joaquin Phoenix expressed interest in acting in a low-budget "character study" type of film about a comic book villain, like the DC Comics character Joker.Phoenix had previously declined to act in the Marvel Cinematic Universe because he would have been required to play the roles, such as the Hulk and Doctor Strange, in multiple films.He did not believe his idea for a film should cover the Joker, as he thought the character had been depicted in a similar way before, and tried to think of a different one. Phoenix's agent suggested setting up a meeting with Warner Bros., but he declined.Similarly, Todd Phillips had been offered to direct comic-based films a number of times, but declined because he thought they were "loud" and did not interest him. According to Phillips, Joker was created from his idea to create a different, more grounded comic book film.He was attracted to the Joker because he did not think there was a definitive portrayal of the character, which he knew would provide considerable creative freedom.</p>
          
          <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
          <p class="w3-right"><button class="w3-button w3-black" onclick="myFunction('demo1')" id="myBtn"><b>Replies  </b> <span class="w3-tag w3-white">1</span></button></p>
          <p class="w3-clear"></p>
          <div class="w3-row w3-margin-bottom" id="demo1" style="display:none">
            <hr>
              <div class="w3-col l2 m3">
                <img src="images/user.jpg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>Mr. Maheta </br><span class="w3-opacity w3-medium">Oct 3, 2019, 6:32 PM</span></h4>
                <p>Can't stop myself from talking about this one......#no_spoilers

Dark as hell, Joker takes u through the disturbing journey of Arthur Fleck, from being a clown & a wanna be stand- up comedian (with only one joke in his hand.....his life) to become THE "JOKER"......this journey never looked unreal though, unlike that of a hulk or a spider man....as this journey was quite human, logical and beautifully graphed and captured(of course) !!!</p>
              </div>
          </div>
        </div>
      </div>
      <hr>

       Blog entry 
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>CONJURING 2013</h3>
          <h5>2013 ‧ Supernatural horror/Mystery ‧ 1h 52m,</br> <span class="w3-opacity"> 2 August 2013 (India)</span></h5>
        </div>

        <div class="w3-justify">
          <img src="images/m12.jpg" style="width:100%" class="w3-padding-16">
          <p><strong>Director :</strong>  James Wan </p>
          <p><strong>Box office: </strong> 31.95 crores USD </p>
          <p><strong>Budget: </strong>  $20 million </p>
          <p><strong>Starring </strong> ‎Vera Farmiga , Patrick Wilson, Ron Livingston , Lili Taylor </p>
          <p>In 1970, paranormal investigators and demonologists Lorraine (Vera Farmiga) and Ed (Patrick Wilson) Warren are summoned to the home of Carolyn (Lili Taylor) and Roger (Ron Livingston) Perron. The Perrons and their five daughters have recently moved into a secluded farmhouse, where a supernatural presence has made itself known. Though the manifestations are relatively benign at first, events soon escalate in horrifying fashion, especially after the Warrens discover the house's macabre history.</p>
          <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
          <p class="w3-right"><button class="w3-button w3-black" onclick="myFunction('demo2')"><b>Replies  </b> <span class="w3-tag w3-white">2</span></button></p>
          <p class="w3-clear"></p>
         
          <div id="demo2" style="display:none">
            <div class="w3-row">
              <hr>
              <div class="w3-col l2 m3">
                <img src="images/user.jpg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>Mrs. Shukla </br><span class="w3-opacity w3-medium">Sept 26, 2013, 10:52 PM</span></h4>
                <p>One of the best horror movies i have seen in recent years . James wan did a great job of creating a new horror universe.I like the story and telling of the movie. All the characters are lovable and u will be fan of Ed Lorraine Warren. The cinematography here is done really well becoz i have watched lot of horror movies which fails to do great horror cinematography.</p><br>
              </div>
            </div>
            <div class="w3-row w3-margin-bottom">
              <div class="w3-col l2 m3">
                <img src="images/user.jpg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>Mr. Patel </br> <span class="w3-opacity w3-medium">Aug 23, 2013, 9:12 PM</span></h4>
                <p>Both the Conjuring 1 and 2 are such terrific horror movies that you cannot get enough of. They are So Well Made that no matter how many times you watch them, you'll end up getting scared as if you're watching them for the very first time.The satisfaction of enjoying a good and CLEAN horror movie without gory stuff like the stupid Evil dead is insurmountable. The camera uses the shaky techniques rather than going straight. Vera and Patrick are such a strong and inspirational couple.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

     
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>Pyaar Ka Punchnama 2</h3>
          <h5>2015 ‧ Drama/Romance ‧ 2h 39m </br><span class="w3-opacity">16 October 2015 (India)</span></h5>
        </div>

        <div class="w3-justify">
          <img src="images/m4.jpg" style="width:100%" class="w3-padding-16">
           <p><strong>Director :</strong>  Luv Ranjan</p>
          <p><strong>Box office: </strong>est. ₹88 crore (US$12 million) </p>
          <p><strong>Budget: </strong>est. ₹22 crore (US$3.1 million)</p>
          <p><strong>Starring </strong> ‎ Kartik Aaryan, Nushrat Bharucha, Sonnalli Seygall, Ishita Raj Sharma, Omkar Kapoor, Sunny Singh </p>
          <p>Anshul, Siddharth and Tarun each fall in love at the same time with different women. However, their relationships soon turn toxic and make them realise the dark side of love.</p>
          <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
          <p class="w3-right"><button class="w3-button w3-black" onclick="myFunction('demo3')"><b>Replies  </b> <span class="w3-tag w3-white">3</span></button></p>
          <p class="w3-clear"></p>
          
       
          <div id="demo3" style="display:none">
            <hr>
            <div class="w3-row w3-margin-bottom">
              <div class="w3-col l2 m3">
                <img src="images/user.jpg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>Mrs. Neha </br><span class="w3-opacity w3-medium">  Oct 25, 2015, 7:22 PM</span></h4>
                <p>Great Movie... Some people said, it's a male dominanated society but it's true that some girls ready to go with another option  if they found nothing new in boys in most of the cases... Sometimes boys too... But more chances with girls... 😂😂😂</p>
              </div>
            </div>
            <div class="w3-row w3-margin-bottom">
              <div class="w3-col l2 m3">
                <img src="images/user.jpg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>Mr. Ram </br><span class="w3-opacity w3-medium">  Dec 12, 2015, 10:32 PM</span></h4>
                <p>Wow movie ! Love, a feeling that never leaves u till u die, sometimes it fades but yet it comes back. Everyone in love matters think that Love is like Yash Chopra's Movies, in which guys imagine they are like Shahrukh Khan, but it's not that simple boys, it can take any turn. Everything has its own pros and cons, hopefully Love also. This movie is all about some of pros and cons of being in a relationship with a girl.Gets little Boring in some parts but In all u will Definitely enjoy.Prequel of this movie is Hilarious but loose climax, In part 2 less Hilarious comedy but Climax is, a word above Hilarious.Do watch</p>
              </div>
            </div>
            <div class="w3-row w3-margin-bottom">
              <div class="w3-col l2 m3">
                <img src="images/user.jpg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>Mr. Thakur </br><span class="w3-opacity w3-medium">  April 7, 2016, 9:12 PM</span></h4>
                <p>Well the movie was really awesome treat to watch.. girls do feel about the concept however its the truth most of the girls does the same.. there are good girls an bad girls.. watch it as movie of entertainment not to take personally... Happy entertainment guys</p>
              </div>
            </div>
          </div>
        </div>
      </div>
        <div class="w3-container w3-padding w3-black">
          <h4>Advertise</h4>
        </div>
        <div class="w3-container w3-white">
          <div class="w3-container w3-display-container w3-section" style="height:200px">
            <span class="w3-display-middle"><img src="images/ss1.jpeg" style="max-width:216%; margin-left:-58%; max-height:300% ;"><center> 
              <b>Coming Soon </b></center></span>
          </div>
        </div>


if($row4){
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
                    <p class="w3-right"><button class="w3-button w3-black" onclick="myFunction(movie1'.$row["movie_id"].')" id="myBtn"><b>Replies  </b> <span class="w3-tag w3-white"></span></button></p></br>
                    <div class="input-group">
                    <input type="text" class="form-control" id="movies'.$row["movie_id"].'" placeholder="Add a review...">
                    <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-paper-plane" onclick="usercomment('.$row["movie_id"].')"></i>
                    </span>
                    </div>
                    </div>
                    </br>
                    <p class="w3-left w3-center" id="movie'.$row["movie_id"].'">You and '.$connec.' others liked this</p> 
                    <p class="w3-clear"></p>
                    <div class="w3-row w3-margin-bottom" id="movie1'.$row["movie_id"].'"  >
                    <hr>
                    <div class="w3-col l2 m3">
                      <img src="'.$row5['img_dir'].'" style="width:90px;"">
                    </div>
                    <div class="w3-col l10 m9">
                      <h4>'.$row4['uname'].'</br><span class="w3-opacity w3-medium">'.$row4['time1'].'</span></h4>
                      <p>'.$row4['comment'].'</p>
                    </div>
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
                    <p class="w3-right"><button class="w3-button w3-black" onclick="myFunction(movie1'.$row["movie_id"].')" id="myBtn"><b>Replies  </b> <span class="w3-tag w3-white"></span></button></p></br>
                    <div class="input-group">
                    <input type="text" class="form-control" placeholder="Add a review..." id="movies'.$row["movie_id"].'">
                    <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-paper-plane" onclick="usercomment('.$row["movie_id"].')"></i>
                    </span>
                    </div>
                    </div> 
                    </br>
                    <p class="w3-left w3-center" id="movie'.$row["movie_id"].'">You liked this</p>
                    <p class="w3-clear"></p>
                    <div class="w3-row w3-margin-bottom" id="movie1'.$row["movie_id"].'"  >
                    <hr>
                    <div class="w3-col l2 m3">
                      <img src="'.$row5['img_dir'].'" style="width:90px;"">
                    </div>
                    <div class="w3-col l10 m9">
                    <h4>'.$row4['uname'].'</br><span class="w3-opacity w3-medium">'.$row4['time1'].'</span></h4>
                    <p>'.$row4['comment'].'</p>
                    </div>
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
                      <p class="w3-right"><button class="w3-button w3-black" onclick="myFunction(movie1'.$row["movie_id"].')" id="myBtn"><b>Replies  </b> <span class="w3-tag w3-white"></span></button></p></br>
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Add a review..." id="movies'.$row["movie_id"].'">
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="fa fa-paper-plane" onclick="usercomment('.$row["movie_id"].')"></i>
                          </span>
                        </div>
                      </div>
                    </br>
                       <p class="w3-left w3-center" id="movie'.$row["movie_id"].'">'.$count.' people liked this</p> 
                      <p class="w3-clear"></p>
                    <div class="w3-row w3-margin-bottom" id="movie1'.$row["movie_id"].'"  >
                        <hr>
                          <div class="w3-col l2 m3">
                            <img src="'.$row5['img_dir'].'" style="width:90px;"">
                          </div>
                          <div class="w3-col l10 m9">
                            <h4>'.$row4['uname'].'</br><span class="w3-opacity w3-medium">'.$row4['time1'].'</span></h4>
                            <p>'.$row4['comment'].'</p>
                          </div>
                     </div>
                    </div>
                  </div>
                  <hr>';
                }
                else{
                    $data .= '<div class="w3-container w3-white w3-margin w3-padding-large">
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
                    <p class="w3-right"><button class="w3-button w3-black" onclick="myFunction(movie1'.$row["movie_id"].')" id="myBtn"><b>Replies  </b> 
                    <span class="w3-tag w3-white"></span></button></p></br>
                    <div class="input-group">
                    <input type="text" class="form-control" placeholder="Add a review..." id="movies'.$row["movie_id"].'">
                    <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-paper-plane" onclick="usercomment('.$row["movie_id"].')"></i>
                    </span>
                    </div>
                    </div>
                    </br>
                    <p class="w3-left w3-center" id="movie'.$row["movie_id"].'"></p> 
                    <p class="w3-clear"></p>
                    <div class="w3-row w3-margin-bottom" id="movie1'.$row["movie_id"].'"  >
                    <hr>
                    <div class="w3-col l2 m3">
                      <img src="'.$row5['img_dir'].'" style="width:90px;"">
                    </div>
                    <div class="w3-col l10 m9">
                    <h4>'.$row4['uname'].'</br><span class="w3-opacity w3-medium">'.$row4['time1'].'</span></h4>
                    <p>'.$row4['comment'].'</p>
                    </div>
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
          <p class="w3-right"><button class="w3-button w3-black" onclick="myFunction(movie1'.$row["movie_id"].')" id="myBtn"><b>Replies  </b> <span class="w3-tag w3-white"></span></button></p></br>
                  <div class="input-group">
            <input type="text" class="form-control" placeholder="Add a review..." id="movies'.$row["movie_id"].'">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fa fa-paper-plane" onclick="usercomment('.$row["movie_id"].')"></i>
              </span>
            </div>
          </div>
        </br>
       <p class="w3-left w3-center" id="movie'.$row["movie_id"].'">'.$count.' people liked this</p>  
          <p class="w3-clear"></p>
      <div class="w3-row w3-margin-bottom" id="movie1'.$row["movie_id"].'" style="display:none">
            <hr>
              <div class="w3-col l2 m3">
                <img src="'.$row5['img_dir'].'" style="width:90px;"">
              </div>
              <div class="w3-col l10 m9">
                <h4>'.$row4['uname'].'</br><span class="w3-opacity w3-medium">'.$row4['time1'].'</span></h4>
                <p>'.$row4['comment'].'</p>
              </div>
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
          <p class="w3-right"><button class="w3-button w3-black" onclick="myFunction(movie1'.$row["movie_id"].')" id="myBtn"><b>Replies  </b> <span class="w3-tag w3-white"></span></button></p></br>
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Add a review..." id="movies'.$row["movie_id"].'">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fa fa-paper-plane" onclick="usercomment('.$row["movie_id"].')"></i>
              </span>
            </div>
          </div>
        </br>
       <p class="w3-left w3-center" id="movie'.$row["movie_id"].'"></p> 
          <p class="w3-clear"></p>
      <div class="w3-row w3-margin-bottom" id="movie1'.$row["movie_id"].'" style="display:none">
            <hr>
              <div class="w3-col l2 m3">
                <img src="'.$row5['img_dir'].'" style="width:90px;"">
              </div>
              <div class="w3-col l10 m9">
                <h4>'.$row4['uname'].'</br><span class="w3-opacity w3-medium">'.$row4['time1'].'</span></h4>
                <p>'.$row4['comment'].'</p>
              </div>
          </div>
        </div>
      </div>
      <hr>';
      }
} 
}        
else{
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
          <p class="w3-right"><button class="w3-button w3-black" onclick="myFunction(movie1'.$row["movie_id"].')" id="myBtn"><b>Replies  </b> <span class="w3-tag w3-white"></span></button></p></br>
          <div class="input-group">
            <input type="text" class="form-control" id="movies'.$row["movie_id"].'" placeholder="Add a review...">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fa fa-paper-plane" onclick="usercomment('.$row["movie_id"].')"></i>
              </span>
            </div>
          </div>
        </br>
          <p class="w3-left w3-center" id="movie'.$row["movie_id"].'">You and '.$connec.' others liked this</p> 
          <p class="w3-clear"></p>
         <p id="movie1'.$row["movie_id"].'">No review</p>
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
          <p class="w3-right"><button class="w3-button w3-black" onclick="myFunction(movie1'.$row["movie_id"].')" id="myBtn"><b>Replies  </b> <span class="w3-tag w3-white"></span></button></p></br>
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Add a review..." id="movies'.$row["movie_id"].'">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fa fa-paper-plane" onclick="usercomment('.$row["movie_id"].')"></i>
              </span>
            </div>
          </div> 
          </br>
           <p class="w3-left w3-center" id="movie'.$row["movie_id"].'">You liked this</p>
          <p class="w3-clear"></p>
         <p id="movie1'.$row["movie_id"].'">No review</p>
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
          <p class="w3-right"><button class="w3-button w3-black" onclick="myFunction(movie1'.$row["movie_id"].')" id="myBtn"><b>Replies  </b> <span class="w3-tag w3-white"></span></button></p></br>
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Add a review..." id="movies'.$row["movie_id"].'">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fa fa-paper-plane" onclick="usercomment('.$row["movie_id"].')"></i>
              </span>
            </div>
          </div>
        </br>
           <p class="w3-left w3-center" id="movie'.$row["movie_id"].'">'.$count.' people liked this</p> 
          <p class="w3-clear"></p>
        <p id="movie1'.$row["movie_id"].'">No review</p>
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
          <p class="w3-right"><button class="w3-button w3-black" onclick="myFunction(movie1'.$row["movie_id"].')" id="myBtn"><b>Replies  </b> <span class="w3-tag w3-white"></span></button></p></br>
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Add a review..." id="movies'.$row["movie_id"].'">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fa fa-paper-plane" onclick="usercomment('.$row["movie_id"].')"></i>
              </span>
            </div>
          </div>
        </br>
           <p class="w3-left w3-center" id="movie'.$row["movie_id"].'"></p> 
          <p class="w3-clear"></p>
         <p id="movie1'.$row["movie_id"].'">No review</p>
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
          <p class="w3-right"><button class="w3-button w3-black" onclick="myFunction(movie1'.$row["movie_id"].')" id="myBtn"><b>Replies  </b> <span class="w3-tag w3-white"></span></button></p></br>
                  <div class="input-group">
            <input type="text" class="form-control" placeholder="Add a review..." id="movies'.$row["movie_id"].'">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fa fa-paper-plane" onclick="usercomment('.$row["movie_id"].')"></i>
              </span>
            </div>
          </div>
        </br>
       <p class="w3-left w3-center" id="movie'.$row["movie_id"].'">'.$count.' people liked this</p>  
          <p class="w3-clear"></p>
        <p id="movie1'.$row["movie_id"].'">No review</p>
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
          <p class="w3-right"><button class="w3-button w3-black" onclick="myFunction(movie1'.$row["movie_id"].')" id="myBtn"><b>Replies  </b> <span class="w3-tag w3-white"></span></button></p></br>
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Add a review..." id="movies'.$row["movie_id"].'">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fa fa-paper-plane" onclick="usercomment('.$row["movie_id"].')"></i>
              </span>
            </div>
          </div>
        </br>
       <p class="w3-left w3-center" id="movie'.$row["movie_id"].'"></p> 
          <p class="w3-clear"></p>
     <p id="movie1'.$row["movie_id"].'">No review</p>
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

      -->