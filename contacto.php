<?php
require('conexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">


    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Lorem ipsum</title>
	
	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Bootstrap -->

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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
  <script>
  function savespace(){
    str = document.getElementById("mensaje").value;
    str = str.replace(/(?:\r\n|\r|\n)/g, '<br />');
    document.getElementById("mensaje").value = str;

  }
  </script>
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
<div class="main">
<h2>Contacta con nosotros</h2><br>
<div class="container cont">
  <div class="row">
    <div class="col-md-4">
      <h3>Lorem Ipsum</h3>
      <p>Ut enim ad minim veniam</p>

    </div>
    <div class="col-md-8">
      <form action="#" method="POST" onsubmit="savespace()"><br><br>
		<div class="row">
        <div class="col-lg-6">
        <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre" required>
        </div>
        <div class="col-lg-6">
        <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
        </div>
        </div><br>
        <div class="row">
        <div class="col-lg-12">
        <textarea class="form-control" placeholder="Mensaje" rows="10" cols="50" name="mensaje" id="mensaje" required></textarea><br>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-12">
        <div class="right">
         <button type="submit" class="btn btn-default" name="enviar">Enviar</button>
        </div>
         </div>
        </div>
      </form><br>
    </div>
  </div>
</div>
</div>
<br><br>
<br>
</body>
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
</html>
<?php
require('conexion.php');
if(isset($_POST["enviar"])){
$sql = 'INSERT INTO mensajes (nombre, email, mensaje)
VALUES ("'.$_POST["nombre"].'","'.$_POST["email"].'","'.$_POST["mensaje"].'")';

if ($conn->query($sql) === TRUE) {
    echo '<script>
  alert("Tu mensaje ha sido enviado, Lorem ipsum");
</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
