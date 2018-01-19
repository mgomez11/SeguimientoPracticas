<?php
require('conexion.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
/* Toggle Styles */

#wrapper {
    padding-left: 0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled {
    padding-left: 250px;
}

#sidebar-wrapper {
    z-index: 1000;
    position: fixed;
    left: 250px;
    width: 0;
    height: 100%;
    margin-left: -250px;
    overflow-y: auto;
    background: #000;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled #sidebar-wrapper {
    width: 250px;
}

#page-content-wrapper {
    width: 100%;
    position: absolute;
    padding: 15px;
}

#wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-right: -250px;
}

/* Sidebar Styles */

.sidebar-nav {
    position: absolute;
    top: 0;
    width: 250px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.sidebar-nav li {
    text-indent: 20px;
    line-height: 40px;
}

.sidebar-nav li a {
    display: block;
    text-decoration: none;
    color: #999999;
}

.sidebar-nav li a:hover {
    text-decoration: none;
    color: #fff;
    background: rgba(255,255,255,0.2);
}

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
    text-decoration: none;
}

.sidebar-nav > .sidebar-brand {
    height: 65px;
    font-size: 18px;
    line-height: 60px;
}

.sidebar-nav > .sidebar-brand a {
    color: #999999;
}

.sidebar-nav > .sidebar-brand a:hover {
    color: #fff;
    background: none;
}
.active{
	text-decoration: none;
	background: rgba(255,255,255,0.2);
    color: white!important;
}
@media(min-width:768px) {
    #wrapper {
        padding-left: 0;
    }

    #wrapper.toggled {
        padding-left: 250px;
    }

    #sidebar-wrapper {
        width: 0;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 250px;
    }

    #page-content-wrapper {
        padding: 20px;
        position: relative;
    }

    #wrapper.toggled #page-content-wrapper {
        position: relative;
        margin-right: 0;
    }
	textarea{
		heigth: 2000px;
	}

}
	
  </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Panel de control</title>
	
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
  </head>
  
<body>
<script>
    function toggle(nombre, provincia, yea_nacimiento, ocupacion, centro, descripcion, foto){
            var parametros = {
                    "nombre" : nombre,
                    "provincia" : provincia,
                    "yea_nacimiento" : yea_nacimiento,
                    "ocupacion" : ocupacion,
                    "centro" : centro,
                    "descripcion" : descripcion,
                    "foto" : foto
            };
            $.ajax({
                    data:  parametros,
                    url:   'perfiles_preview.php',
                    type:  'post',
                    beforeSend: function () {
                            $("#resultado").html("Procesando, espere por favor...");
                    },
                    success:  function (response) {
                            $("#resultado").html(response);
                    }
            });
    }
</script>
 <div id="wrapper" class="toggled">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="/index.php">
                        Lorem ipsum
                    </a>
                </li>
                <li>Blog                    
                    <a  href="panelblog.php">Blog Crear</a>
                    <a  href="#">Blog Gestionar</a>

                </li>
                <li>Perfiles
                    <a  class="active" href="panelperfil.php">Perfiles Crear</a>
                    <a  href="panelperfil_gest.php">Perfiles Gestionar</a>
                </li>
                <li>Contacto
                     <a href="panel_contacto.php">Ver mensajes</a>
               </li>

            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
						<div class="col-lg-5">
		                 <h1>Perfil</h1><br>
                        <form action="#" method="post" enctype="multipart/form-data">
						<div class="row">
						  <div class="col-lg-6">
							<input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre" required>
						  </div>
						  <div class="col-lg-6">
							<input type="text" class="form-control" placeholder="Provincia" name="provincia" id="provincia" required>
						  </div>
						</div><br>
						<div class="row">
						  <div class="col-lg-6">
							  <input type="number" min="1817" max="2017" class="form-control" placeholder="Año de nacimiento" name="yea_nacimiento" id="yea_nacimiento" required>
						  </div>
						  <div class="col-lg-6">
							<input type="text" class="form-control" placeholder="Puesto de trabajo actual" name="ocupacion" id="ocupacion" required>
						  </div>
						</div><br>
                       <div class="row">
						  <div class="col-lg-6">
							  <input type="text" class="form-control" placeholder="Centro de trabajo" name="centro" id="centro" required>
						  </div>
						  <div class="col-lg-6">
							<input type="file" class="form-control" name="foto" id="foto" required>
						  </div>
						</div><br>
						<div class="row">
						  <div class="col-lg-12">
							  <textarea class="form-control" placeholder="Descripcion" rows="10" cols="50" name="descripcion" id="descripcion" required></textarea>
						  </div>
						</div><br>
						<div class="row">
						  <div class="col-lg-6">
						  <button type="submit" class="btn btn-default" name="enviar">Publicar</button>
						  <input type="button" value="Vista previa" class="btn btn-default" name="preview" onclick="toggle(document.getElementById('nombre').value,document.getElementById('provincia').value,document.getElementById('yea_nacimiento').value,document.getElementById('ocupacion').value,document.getElementById('centro').value,document.getElementById('descripcion').value,document.getElementById('foto').value)">

						  </div>
						  <div class="col-lg-6">

						  </div>
						</div>
						</form>
                    </div>
					<div class="col-lg-7">
		                 <h1>Vista previa</h1><br>
                        <div id="resultado"></div>
                    </div>
					</div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>

</html>
<?php
$target_dir = "img/";
$uploadOk = 1;
// Check if image file is a actual image or fake image
if(isset($_POST["enviar"])) {
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

$sql = 'INSERT INTO perfiles (nombre, provincia, yea_nacimiento, ocupacion, centro, descripcion, foto)
VALUES ("'.$_POST["nombre"].'", "'.$_POST["provincia"].'","'.$_POST["yea_nacimiento"].'","'.$_POST["ocupacion"].'","'.$_POST["centro"].'","'.$_POST["descripcion"].'","'.$_FILES["foto"]["name"].'")';;
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

    $check = getimagesize($_FILES["foto"]["tmp_name"]);
    if($check !== false) {
        move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}
?>