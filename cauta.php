<!DOCTYPE html>
<html lang="ro">
<head>
<!DOCTYPE html>
<html lang="ro">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Doru's FOOD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
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
        <a class="navbar-brand" href="index.php">Doru's FOOD</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php">Sign in</a></li>
      </ul>
    </div>
  </div>
</nav>
<center>
<?php
 include 'Connection.php';
 
   if (isset($_POST['cauta'])) {
        $cauta1 = $_POST['cauta'];
        $cauta1 = preg_replace("#[^0-9a-z]#i","",$cauta1);
        $query = mysqli_query($con,"SELECT * FROM images WHERE title LIKE '%$cauta1%'")or die("could not search!");
        $count = mysqli_num_rows($query);
        if ($count == 0) {
            echo "Nu a fost gasita!";
        } else {
            while ($row = mysqli_fetch_array($query)) {
                $title = $row['title'];
                $image=$row['image'];
                echo $title."<br/><img src=".$image."><br/>";
               
                
            }
        }
    }
    ?>
<a href="login.php" class="btn btn-default btn-lg">Back</a>
</center>
</body>
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
</html>