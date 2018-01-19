<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Panel de control</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
    crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  
  <!-- Fuentes e iconos externos -->
  <script src="https://use.fontawesome.com/7d06976565.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

  <!-- Hojas de css -->
  <link href="css/css_menu.css" rel="stylesheet">

  <!-- Control -->
  <script src="js/js_menu.js"></script>
  <style>
  img{
        margin: 10px;
        width: 120px;
        height: 100px;
    }
    img:hover{
        cursor: pointer;
        border: 2px solid #1FBED6;
    }
    .mediaf{
        height: 320px;
    overflow-x: scroll;
    }
        .code{
        height: 120px;
    }
    .cont{
			width: 100%;
			text-align: left;
			padding-top: 10px;
			padding-left: 10px;
			padding-right: 10px;
			padding-bottom: 0px;
			border: 1px solid #ddd;
			border-radius: 4px;
			background-color: white;
			box-shadow: 0 2px 5px 0 rgba(0,0,0,.26);


	}
  </style>
</head>

<body>
  <!-- fondo "container" width - 100% -->
  <div class="main_page">

<div class="row control-menu style=" -moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none; " 
unselectable="on " onselectstart="return false; "  onmousedown="return false; "">

  <!-- fila LOGIN con la informacion ("nombre de usuario, links, etc") -->
  <div class="col col-md-12 menu_login menu-col">
    <p onclick="location.href='http://www.google.com';">Página principal <span class="right">Bienvenido, nombre usuario <i class="fa fa-user" aria-hidden="true"></i></span></p>
  </div>
</div>
<!-- FIN fila LOGIN -->

<div class="row control-menu">
  <div class="col col-md-1 menu_izquierda menu-col style=" -moz-user-select: none; -webkit-user-select: none; -ms-user-select:none;
    user-select:none;-o-user-select:none; " 
unselectable="on " onselectstart="return false; "  onmousedown="return false; ""><br>

    <!-- Categoria de Estadisticas -->
    <div class="categoria" id="estadisticas" onclick="">
      <div class="header_categoria">
        <p><i class="fa fa-line-chart" aria-hidden="true"></i> Estádisticas</p>
      </div>
      <div class="subcategoria">
      </div>
    </div>
    <!-- Categoria de Estadisticas -->

    <!-- Categoria de Blog -->
    <div class="categoria" id="blog" onclick="toggle(this.id)">
      <div class="header_categoria">
        <p><i class="fa fa-rss" aria-hidden="true"></i> Blog <span class="caret"></span></p>
      </div>
      <div class="subcategoria">
        <div class="enlace" onclick="location.href='http://www.google.com';">
          <p>Nuevo post</p>
        </div>
        <div class="enlace">
          <p>Todos los posts</p>
        </div>
      </div>
    </div>
    <!-- Fin Blog -->

    <!-- Categoria de Perfil -->
    <div class="categoria" id="perfil" onclick="toggle(this.id)">
      <div class="header_categoria">
        <p><i class="fa fa-users" aria-hidden="true"></i> Perfiles <span class="caret"></span></p>
      </div>
      <div class="subcategoria">
        <div class="enlace">
          <p>Crear un perfil</p>
        </div>
        <div class="enlace">
          <p>Todos los perfiles</p>
        </div>
      </div>
    </div>
    <!-- Fin de Perfil -->

    <!-- Categoria de media -->
    <div class="categoria" id="media" onclick="">
      <div class="header_categoria">
        <p><i class="fa fa-picture-o" aria-hidden="true"></i> Media</p>
      </div>
      <div class="subcategoria">
      </div>
    </div>
    <!-- Fin media -->

    <!-- Categoria de Contacto -->
    <div class="categoria" id="contacto" onclick="">
      <div class="header_categoria">
        <p><i class="fa fa-envelope-o" aria-hidden="true"></i> Contacto</p>
      </div>
      <div class="subcategoria">
      </div>
    </div>
    <!-- Fin Contacto -->
  </div>
      
      
<div class="col col-md-11 menu-col contenido_page">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
      <div id="page-content-wrapper">
            <div class="container-fluid">
                <h1>Bandeja de entrada</h1>
                  <h2>Lorem ipsum</h2>
  <p>Estos son todos los mensajes ordenados por antigüedad:</p>  
          <form method="get" action="#">
          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Leer mensaje</th>
      </tr>
    </thead>

    <tbody>
      <?php
        require('conexion.php');
        $sql = "SELECT * FROM mensajes ORDER BY id DESC" ;
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo'
        <tr>
        <td>'.$row["id"].'</td>
        <td>'.$row["nombre"].'</td>
        <td>'.$row["email"].'</td>
        <td>  <input type="submit" class="btn btn-info" value="Leer" id="'.$row["id"].'"  data-toggle="modal" data-target="#'.$row["id"].'msg">
        </td>
        <div id="'.$row["id"].'msg" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">'.$row["nombre"].'</h4>
            </div>
            <div class="modal-body">
                <p>'.$row["mensaje"].'</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            </div>

        </div>
        </div>
        </tr>
        ';
            }
        } else {
        echo "0 results";
        }
        ?>
        </tbody>

        </table>
        </div>
      </div>
    </div>
  </div><!-- FIN main_page -->


</body>

</html>
