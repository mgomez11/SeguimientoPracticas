<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="stylesheet" type="text/css" href="/css/style.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>
  <?php

    echo '
<div class="row"> <!-- inicio perfil -->
<div class="col-md-12">
<div class="cont">
<div class="infoperfil">
<center>
  <div class="avatar" style="background-image: url(img/Default.jpg)"></div>
</center>
<div class="margin">
<h3>'.$_POST["nombre"].'</h3>
<p class="info">('.$_POST["provincia"].', '.$_POST["yea_nacimiento"].')</p>
<p class="especializacion">'.$_POST['ocupacion'].'</p>
<p class="info">'.$_POST["centro"].'</p>
  </div>
  </div>
<div class="infoperfil">
<p class="descripcion">'.$_POST["descripcion"].'
</p>
</div>
</div>
</div>
  </div>
  <br> <!-- fin perfil -->
';

?>
  </body>
</html>