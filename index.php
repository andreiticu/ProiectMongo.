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
    background-color:#00BFFF;
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
     <?php 

    if (!isset($_COOKIE['count']))
    {
        ?> 
                <center>Prima dată când ați accesat această pagină ! </center>
<?php 
        $cookie = 1;
        setcookie("count", $cookie);
    }
    else
    {
        $cookie = ++$_COOKIE['count'];
        setcookie("count", $cookie);
        ?> 
                <center><a>Ai vizitat această pagina de <?= $_COOKIE['count'] ?> ori.</a></center>
<?php  }// end else  ?>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
        <a class="navbar-brand" href="index.php">Doru's FOOD</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php">Sign in</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <img src="image//logo.png" class="img-responsive margin" style="display:inline" alt="Bird" width="500" height="500">
   <h3 class="margin">Doru's FOOD este un loc unde imaginația este la ea acasă.Noi am început cu rețete simple, de la celebrii cartofi prăjiți am ajuns la preparate de o stea Michelin.
La noi găsești de la cele mai simple rețete la cele mai gustoase și arătoase.</h3>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">Cauta informați despre noi!</h3>
<form method="post" action="cauta.php" class="container-fluid bg-2 text-center" >
            <center>
            <table> 
                <td><input type="text" name="cauta" class="btn btn-default btn-lg"></td>
                <td><input type="submit" value="cauta" class="btn btn-default btn-lg"></td>
            </table>
            </center>
        </form>
</div>

<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">    
  <h3 class="margin">Ce gasesti la noi?</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <p>In orice situație,inghețata unește oamenii!Asa că nu mai sta pe gânduri!Vin-o cu iubita ta la Doru's FOOD</p>
      <img src="image/im1.jpg" class="img-responsive margin" style="width:70%" alt="">
  <p>
      <a href="video.php" class="btn btn-default btn-lg"> Vezi video!
  </a>
      </p>
    </div>
    <div class="col-sm-4"> 
      <p>Te gândești mereu cum să o cucerești?Simplu!Cu aceste paste o faci să se îndrăgostească de tine, iar cu vinul o înebunești de cap! </p>
      <img src="image//im2.jpeg" class="img-responsive margin" style="width:70%" alt="">
      <a href="mp.php" class="btn btn-default btn-lg"> Vezi video!</a>
    </div>
    <div class="col-sm-4"> 
      <p>Cei care ne-au vizitat, încă ne laudă cu supa cremă de legume!Să știi ca avem și pentru tine!Nu sta pe gânduri!</p>
      <img src="image/im5.jpeg" class="img-responsive margin" style="width:70%" lt="">
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
    <p>Te așteptăm!Aici ne gasești:<a href="harta.php" class="btn btn-default btn-lg"> Vezi locație.!
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
