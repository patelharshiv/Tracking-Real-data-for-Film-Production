<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style>
		 #container {
        height: 100vh;
        background: #112 url(https://cdn.pixabay.com/photo/2017/02/12/12/42/wall-2059909_960_720.png) center no-repeat;
        background-size: cover;
         font-family: Comic Sans MS;
         margin: 0;
            padding: 0;
    }

  #text,#shadow {
        position: absolute;
        font-size: 7em;
        letter-spacing: 20px;
        font-family: Bad Script;
        color: #fff;
    }

    #text {
        color: #333
    }

    #shadow {
        text-shadow: 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #228DFF, 0 0 70px #228DFF, 0 0 80px #228DFF, 0 0 100px #228DFF, 0 0 150px #228DFF;
    }

   #glow {
        animation: neon1 linear infinite 2s;
        will-change: opacity;
    }

    #blink {
        animation: blink linear infinite 2s;
    }


    @keyframes neon1 {
        20% {
            opacity: 1;
        }
        80% {
            opacity: 0.6;
        }
    }


    @keyframes blink {
        70% {
            opacity: 1;
        }
        79% {
            opacity: 0;
        }
        81% {
            opacity: 1;
        }
        82% {
            opacity: 0;
        }
        83% {
            opacity: 1;
        }
        92% {
            opacity: 0;
        }
        92.5% {
            opacity: 1;
        }
    }
	</style>
</head>

<body>
  <div id="container">
  
    <!-- to increase performance, we change the opacity of shadow instead of changing the text-shadow directly -->
  
    
    <p id="text"></p>


  
    <p id="shadow">
        <span id="glow"  style=" font-family:Comic Sans MS ;margin-left: 550px; margin-bottom: 200px; letter-spacing: 1px;">LL</span>
        <span id="blink" style="margin-left: -40px;  font-family:Comic Sans MS ;">B </span> 
        <br>
        <span id="glow" style="font-size: 40px; margin-left: 500px; letter-spacing: 1px; margin-top: -100px;"> Lord of Last</span>
        <span id="blink" style="font-size: 40px; margin-left:-35px ; letter-spacing: 1px;" > Bench </span>
    </p>
  </div>
</body>
</html>