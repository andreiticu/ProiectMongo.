<!DOCTYPE html>
<html lang="ro">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Doru's FOOD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
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
    <?php
            $number1=rand(1,9);
            $number2=rand(1,9);
            $sum=$number1+$number2;
        ?>
        <!-- cautare imagini-->
        <form method="post" action="cauta.php" class="container-fluid bg-1 text-center" >
            <h3>Cauta aici imagini cu preparatele noastre.</h3>
            <center>
            <table> 
                <td><input type="text" name="cauta" class="btn btn-default btn-lg"></td>
                <td><input type="submit" value="Cauta" class="btn btn-default btn-lg"></td>
            </table>
            </center>
        </form>
       <center>
<?php
       require_once 'connection_1.php';
        $query = new MongoDB\Driver\Query([]); 
        $rows = $client->executeQuery("images.images", $query);
?>
        
       <table width="10" cellpadding="2" cellspace="2" rules="rows">
           <tr>
               <th>Nume</th>
               <th>Imagine</th>
               <th colspan="3" align="center">Actions</th>
           </tr>
<?php foreach($rows as $val):?> 
<?php if((isset($val->title))&&(isset($val->image))&&($val-> title!="")&& ($val->image!="")):?>    
<tr>
    <td><?php echo $val->title;?></td>
    <td><img src="<?php echo $val->image;?>" width="300" height="300"></td>
    <td><?php echo "<a href=\"view.php?id=".$val->_id."\">View</a>";?></td>
       </tr>
    <?php endif;?>
    <?php endforeach;?>
       </table>
       </center>
       <br><br>
        <!--remember pass-->
        <form name="form" method="post" action="validate.php" class="container-fluid bg-1 text-center">
            <h3>Aici poți intra în contul tău pentru a adăuga imagini cu rețetele tale!</h3>
        <center>
            <table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
        <tr>
            <td align="center" colspan="2">Sign In</td>
        </tr>
        <tr>
            <td align="right">Email</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td align="right">Password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td align="right"><input type="hidden" name="correctsum" value="<?php echo $sum;?>"><?php echo $number1.'+'.$number2.'=';?></td>
            <td><input type="text" name="captcha"></td>

        </tr>
        
        <tr>
            <td colspan="2" align="center"><input type="checkbox" name="remember" value="1">Remember Me</td>
        </tr>
        
        <tr>
            <td align="center" colspan="2"><input type="submit" name="login" value="login" class="btn btn-default btn-lg"></td>
        </tr>
    </table>
            </center>
</form> 
        <?php
        if((isset($_COOKIE['email']))&&(isset($_COOKIE['pass']))){
       $email=$_COOKIE['email'];
       $pass=$_COOKIE['pass'];
        echo "<script>
     document.getElementById('email').value='$email';
     document.getElementById('pass').value='$pass';
</script>";
       
        }
        ?>
        <!--end remember-->      
    </div>
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
