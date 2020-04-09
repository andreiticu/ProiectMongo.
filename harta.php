<!DOCTYPE html>
<html lang="ro">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Doru's FOOD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
  }
  p {font-size: 20px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
    background-color: #1abc9c; /* Green */
    color: #ffffff;
  }
  .bg-2 { 
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
  }
  .bg-3 { 
    background-color: #ffffff; /* White */
    color: #555555;
  }
  .bg-4 { 
    background-color: #2f2f2f; /* Black Gray */
    color: #fff;
  }
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
  }
  .navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
    color: #1abc9c !important;
  }
  #footer div .connect a {
	display: block;
	float: left;
	height: 30px;
	margin: 0 15px;
	padding: 0;
	text-indent: -99999px;
	width: 30px;
}
#footer div .connect a.facebook {
	background-position: 0 0;
}
#footer div .connect a.googleplus {
	background-position: 0 -32px;
}
#footer div .connect a.pinterest {
	background-position: 0 -64px;
}
#footer div .connect a.twitter {
	background-position: 0 -96px;
}
  </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="">Doru's FOOD</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php">Sign in</a></li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container-fluid bg-1 text-center">
  <h3 class="margin"></h3>
  <img src="image//logo.png" class="img-responsive margin" style="display:inline" alt="Bird" width="500" height="500">
  <p></p>
  <canvas id="myCanvas" width="260" height="100" style="border:1px solid #d3d3d3;">
</canvas>

<script>
var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");
ctx.font = "30px Convas";
ctx.strokeText("Te așteptăm cu drag!",10,50);
</script>
  <center>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7670.879094023211!2d27.559150490158885!3d47.17615780808542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40cafb61af5ef507%3A0x95f1e37c73c23e74!2sUniversitatea+Alexandru+Ioan+Cuza+din+Ia%C8%99i!5e0!3m2!1sro!2sro!4v1524842817985" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</center>
    </div>
<footer class="container-fluid bg-4 text-center">
    <p>Te asteptam!Aici ne gasesti:<a href="harta.php" class="btn btn-default btn-lg"> Vezi locație.!
  </a></p>
  <iframe src="//www.facebook.com/plugins/like.php?href=http://localhost/ProiectPHP/index.php&amp;width&amp;layout=standard&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:80px;" allowTransparency="true"></iframe>
<div class="connect">
   <a href="http://freewebsitetemplates.com/go/facebook/" class="btn btn-default btn-lg">Facebook</a>
   <a href="http://freewebsitetemplates.com/go/twitter/" class="btn btn-default btn-lg">Twitter</a>
   <a href="http://freewebsitetemplates.com/go/googleplus/" class="btn btn-default btn-lg">GooglePlus</a>
   <a href="http://pinterest.com/fwtemplates/" class="btn btn-default btn-lg">Pinterest</a>
				</div>
</footer>
</body>
</html>
