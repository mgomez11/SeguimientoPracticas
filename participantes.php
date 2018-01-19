<?php
require('conexion.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">


    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Lorem ipsum</title>
	


    <!-- Bootstrap -->
        	<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">


  </head>
  <body>
  

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/index.php">Lorem Ipsum</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/participantes.php">Participantes</a></li>
        <li><a href="/galeria.php">Galería de imágenes</a></li>
        <li><a href="/blog.php">Blog</a></li>
		<li><a href="/contacto.php">Contacto</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<center>
<div class="fondoparticipantes">
<h2>Lorem ipsum</h2>
	<p class="subtitulo">dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
	<p class="subtitulo">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p><p><br><br>
	</p></center>
  </div>
<div class="main"><br>
<div class="wrapperparticipantes">
<?php
$sql = "SELECT * FROM perfiles LIMIT 2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
echo '
<div class="row" id="'.$row["nombre"].'"> <!-- inicio perfil -->
<div class="col-md-12">
<div class="cont">
<div class="infoperfil">
<center>
  <div class="avatar" style="background-image: url(img/'.$row["foto"].')"></div>
</center>
<div class="margin">
<h3>'.$row["nombre"].'</h3>
<p class="info">('.$row["provincia"].', '.$row["yea_nacimiento"].')</p>
<p class="especializacion">'.$row["ocupacion"].'</p>
<p class="info">'.$row["centro"].'</p>
  </div>
  </div>
<div class="infoperfil">
<p class="descripcion">'.$row["descripcion"].'
</p>
</div>
</div>
</div>
  </div>
  <br> <!-- fin perfil -->
';
    }
} else {
    echo "0 results";
}
$_SESSION["cont"] = 0;

if(isset($_POST["mostrar"])){
  if($_SESSION["cont"]<10){
  $_SESSION["cont"]++;
 }

  $cont = $_SESSION["cont"];
$sql = "SELECT * FROM perfiles LIMIT 2 OFFSET 2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
echo '
<div class="row" id="'.$row["nombre"].'"> <!-- inicio perfil -->
<div class="col-md-12">
<div class="cont">
<div class="infoperfil">
<center>
  <div class="avatar" style="background-image: url(img/'.$row["foto"].')"></div>
</center>
<div class="margin">
<h3>'.$row["nombre"].'</h3>
<p class="info">('.$row["provincia"].', '.$row["yea_nacimiento"].')</p>
<p class="especializacion">'.$row["ocupacion"].'</p>
<p class="info">'.$row["centro"].'</p>
  </div>
  </div>
<div class="infoperfil">
<p class="descripcion">'.$row["descripcion"].'
</p>
</div>
</div>
</div>
  </div>
  <br> <!-- fin perfil -->
';
    }
} else {
    echo "0 results";
}
}
?>
<form action="#" method="POST">
  <input type="submit" class="btn btn-success masinfo" name="mostrar" value="Mostrar más">
</form>
</div>
<div class="sidebar">
  <div class="row">
<div class="col-md-12">
<div class="list-group">
  <a href="#" class="list-group-item active">
    <h4 class="list-group-item-heading">Listado de participantes</h4>
    <p class="list-group-item-text"></p>
  </a>
  <?php
  $sql = "SELECT * FROM perfiles";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
  echo'
  <a class="list-group-item" href="#'.$row["nombre"].'">
    <h4 class="list-group-item-heading">'.$row["nombre"].'</h4>
    <p class="list-group-item-text">'.$row["ocupacion"].'</p>
  </a>';
      }
} else {
    echo "0 results";
}
  ?>
  </div>
  </div>  
</div>
</div>
</div>
</div>
<script> 
 $('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
});
  </script>
<br>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-3 col">
			<h3 class="headerfooter">Columna</h3>
			<p class="textofooter">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
			</div>
			<div class="col-md-3 col">
			<h3 class="headerfooter">Columna</h3>
			<p class="textofooter">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
			</div>
			<div class="col-md-3 col">
			<h3 class="headerfooter">Columna</h3>
			<p class="textofooter">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
			</div>
			<div class="col-md-3 col">
			<h3 class="headerfooter">Columna</h3>
			<p class="textofooter">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
			</div>
			
		</div>
		<div class="copy">
			CC © 2015 Lorem ipsum dolor sit amet, consectetur adipiscing elit
		</div>
	</div>

</footer>
 
</body></html>
