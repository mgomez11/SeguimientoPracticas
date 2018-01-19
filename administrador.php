<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
  * {
  margin: 0;
  padding: 0;
}
	.fondo{
		    background: linear-gradient(180deg, rgb(3, 95, 141) 0%, rgb(34, 64, 153) 50%);
    position: absolute;
    width: 100%;
    height: 100%;
	}
	
	.form{
		background-color: white;
		width: 350px;
			height: 250px;
			border: 1px solid grey;
			margin: 5% auto;
			padding: 0px 10px 10px 10px;
			border-radius: 4px;
		
	}
	.title{
		margin-bottom: 20px;
		color: rgb(3, 95, 141);
	}
	.right{
	float: right;
	}
  </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Inicia Sesion</title>
	
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
  </head>
  <body>

	<div id="fondo" class="fondo">
	<?php
		session_start();
		require('verificacion.php');
	?>
	<div class="form">
	<form action="#" method="post">
	<h3 class="title" > Administration Panel </h3>
	<div class="input-group">
	<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
</span>

	  <input name="username" type="text" class="form-control" placeholder="Usuario" aria-describedby="basic-addon1">
	</div><br>
	<div class="input-group">
<span class="input-group-addon" id="basic-addon2"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
</span>
	  <input name="password" type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon2">
	  </div>  <br>
	  <button name="login" type="submit" class="btn btn-default right">Login</button>

	</form>
	</div>
	</div>

</body>
<footer>
	

</footer>
</html>
