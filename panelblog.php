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
textarea { 
   resize: none; 
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

  </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Panel de control</title>
        	<link rel="stylesheet" type="text/css" href="/css/style.css">

	
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
    <script>
    var code, code1;
    function showcode(id){
        code = '&lt/div&gt &ltdiv class="boximage"&gt &ltimg class="imagen" src="../img/'+id+'"&gt';
        document.getElementById("codigo").innerHTML = code;
    }
    function showcode1(info){
        code1 = '&ltp&gt '+info+' &lt/p&gt &lt/div&gt &ltdiv class="texto"&gt';
        document.getElementById("codigo1").innerHTML = code1;
    }
    function subirimage(){
    var file_data = $('#foto').prop('files')[0];   
    var form_data = new FormData();                  
    form_data.append('file', file_data);
    $.ajax({
                url: 'upload.php', // point to server-side PHP script 
                dataType: 'text',  // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                         
                type: 'post',
                success: function(php_script_response){
                }
     });
};
    </script>
  </head>
<body>
 <div id="wrapper" class="toggled">

        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="/index.php">
                        Lorem ipsum
                    </a>
                </li>
                <li>Blog                    
                    <a  class="active" href="panelblog.php">Blog Crear</a>
                    <a  href="#">Blog Gestionar</a>

                </li>
                <li>Perfiles
                    <a  href="panelperfil.php">Perfiles Crear</a>
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
						<div class="col-lg-6">
		                 <h1>Blog</h1><br>
						<div class="row">
                            <form action="#" method="post">
						  <div class="col-lg-6">
							  <input type="text" class="form-control" placeholder="Título del Post" name="titulo">
						  </div>
						  <div class="col-lg-6">
							<input type="text" class="form-control" placeholder="Categoría" name="Categoria">
						  </div>
						</div><br>
						<div class="row">
						  <div class="col-lg-6">
							  <input type="text" class="form-control" placeholder="Autor" name="Autor">
						  </div>
						  <div class="col-lg-6">
							<input type="text" class="form-control" placeholder="Fecha de publicación" name="Fecha">
						  </div>
						</div><br>
						<div class="row">
						  <div class="col-lg-12">
							  <textarea class="form-control" placeholder="Contenido del Post" rows="25" cols="50" name="contenido1"></textarea>
						  </div>                          
						</div><br>
						<div class="row">
						  <div class="col-lg-6">
						  <input type="submit" name="publicar" value="Publicar" class="btn btn-default">
    
						  </div>
						  <div class="col-lg-6">

						  </div>
						</div>
						</form>
                    </div>
					<div class="col-lg-6">
		                 <h1>Media</h1><br>
                                  <div class="row"> 
<div class="col-md-12">
    <div class="cont code">
    <h3> Código de inserción </h3>
    <center>
    <div id="codigo">
    </div>
    <div id="codigo1">
    </div>
    </center>
    </div>
  </div>
                    </div><br>
                         <div class="row"> <!-- inicio perfil -->
<div class="col-md-12">
    <div class="cont mediaf">
    <?php
$directorio = '/home/u664784038/public_html/img';
$ficheros1  = scandir($directorio);
 
foreach($ficheros1 as $valor){

    echo '<img src="img/'.$valor.'" id="'.$valor.'" onclick="showcode(this.id)">';
}
    ?>
    </div>
  </div>
                    </div><br>
                    <div class="row"> 
<div class="col-md-12">
		<input type="text" class="form-control" name="info" id="info" placeholder="Título para la foto" onkeyup="showcode1(this.value)">

  </div>
                    </div><br>
                          <div class="row"> <form action="#" method="post" enctype="multipart/form-data" >
                            <div class="col-lg-6">
							<input type="file" class="form-control" name="foto" id="foto">
						  </div>                            
						  <div class="col-lg-6">
						  <input type="button" name="subir" value="Subir imagen" class="btn btn-default" onclick="subirimage()">
						  </div>                                                   
						</div><br></form>

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
if(isset($_POST["publicar"])){


    $myfile = fopen('Blog/'.$_POST["titulo"].'.html', "w") or die("Unable to open file!");
    $txt = '    
    <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/style.css">

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
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://use.fontawesome.com/7d06976565.js"></script>
    <style>
        header{
	  font-size: 40px;
	  text-align: center;
border-bottom: 1px solid #e7e7e7;
    color: #777;
    margin-top: -15px;
  }
  nav{
      border: none!important;
  }
  .layer{
    max-width: 980px;
    margin: 0 auto;
    margin-top: 25px;
    margin-bottom: 75px;
  }
  .blogheader{
    margin-left: 15px!important;
        margin-right: 15px!important;

    font-weight: 400;
        font-size: 17px;
    font-family: "Gotham A", "Gotham B", "Helvetica Neue", "HelveticaNeue", Arial, Helvetica, "Roboto", sans-serif;

    
  }
  .category,.autor{
        border-right: solid 1px #dddddd;
    display: inline-block;
    margin-bottom: 10px;
    margin-right: 10px;
    padding-right: 10px;
}
.autor,.date{
      color: #777;

}
  .category{
        color: #00714a;
    text-transform: uppercase;
        font-weight: bold;


  }
  .blogtitle{
    font-size: 300%;
color: #454545;
    font-weight: 700;
    line-height: 1.1;
    margin-top: 10px!important;
  }
  .spam{
    margin-top: 20px;
    width: 230px;
    height: 50px;
    border-color: #dddddd;
    border-style: solid;
    border-width: 1px;
    border-radius: 6px;
    display: table;
    overflow: hidden;
    white-space: nowrap;

  }
  .spam-item{
        border-left: solid 1px #dddddd;
    display: table-cell;
    overflow: hidden;
    vertical-align: middle;
    padding: 15px;
    margin-left: 0px;
  }
  .contenido{
    margin-top: 30px;
    padding-left: 30px;
    padding-right: 30px;

  }
  .texto{
    font-family: "Klinic", "Palatino", "Palatino Linotype", "Palatino LT STD", "Book Antiqua", Georgia, "Times New Roman", serif;
    line-height: 1.5;
    margin-bottom: 1em;
    font-size: 20px;
    color: #444;

  }
  .imagen{
    max-width:100%;
margin-bottom: 5px;

  }
  .boximage{
    margin-top: 30px;
    margin-bottom: 30px;
text-align: right;
border-bottom: 1.5px solid #dddddd;
    color: #999999;
        text-align: center;

  }
  .boximage p{
          text-align: left;
              margin-top: 5px;
    font-family: "Klinic", "Palatino", "Palatino Linotype", "Palatino LT STD", "Book Antiqua", Georgia, "Times New Roman", serif;

}
  .recent{
   border-color: #dddddd;
    border-style: solid;
    border-width: 1px;
    border-radius: 6px;
    padding-left: 15px;
    padding-right: 15px;
    padding-bottom: 15px;
    margin-top: 30px;

  }
  .recent-title{
        font-weight: bold;
        font-size: 14px;

  }
  .recent-content{
    border-bottom: 1px solid #dddddd;
    padding-bottom: 15px;
  }
  .recent-info{
        color: #999999;

  }
  .recent h3{
    color: #999999;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    margin-bottom: 20px;
  }
  .last{
    border-bottom: none!important;
  }
  .coment-header{
    color: #454545;
    font-weight: 700;
    line-height: 1.1;
    border-bottom: 5px solid #00714a;
  }
  .caja-comentarios{
    padding-left: 15px;

  }
    </style>
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
      <a class="navbar-brand" href="#">Lorem Ipsum</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/participantes.php">Participantes</a></li>
        <li><a href="#">Instituciones</a></li>
		<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Eventos <span class="caret"></span></a>
		<ul class="dropdown-menu">
            <li><a href="#">Blog</a></li>
            <li><a href="#">Galería de imágenes</a></li>
          </ul>
		<li><a href="/contacto.php">Contacto</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<header>
BLOG
</header>
<div class="layer">
      <div class="blogheader">
        <span class="category">'.$_POST["Categoria"].'</span>
        <span class="autor">'.$_POST["Autor"].'</span>
        <span class="date">'.date("F j, Y").'</span>
        <h1 class="blogtitle">'.$_POST["titulo"].'</h1>
        <div class="spam">
          <div class="spam-item">Comparte
            </div>
            <div class="spam-item"><i class="fa fa-twitter fa-1x" aria-hidden="true"></i>

            </div>
            <div class="spam-item"><i class="fa fa-facebook-official fa-1x" aria-hidden="true"></i>
            </div>
<div class="spam-item"><i class="fa fa-envelope fa-1x" aria-hidden="true"></i>
            </div>
        </div>
      </div>
      
    <div class="row">

  <div class="col-sm-9 contenido">
    <div class="texto">'.$_POST["contenido1"].'
    </div>
  </div>
  <div class="col-sm-3">
    <div class="recent">
      <h3>Destacado</h3>
      <div class="recent-content last">
        <h4 class="recent-title">Gettysburg National Military Park Safe from a Casino – For Now</h4>
        <span class="recent-info">Jun 14, 2017</span>
      </div>
      </div>
    <div class="recent">
      <h3>Reciente</h3>
      <div class="recent-content">
        <h4 class="recent-title">Gettysburg National Military Park Safe from a Casino – For Now</h4>
        <span class="recent-info">Jun 14, 2017</span>
      </div>
      <div class="recent-content">
        <h4 class="recent-title">Gettysburg National Military Park Safe from a Casino – For Now</h4>
        <span class="recent-info">Jun 14, 2017</span>
      </div>
      <div class="recent-content last">
        <h4 class="recent-title">Gettysburg National Military Park Safe from a Casino – For Now</h4>
        <span class="recent-info">Jun 14, 2017</span>
      </div>

      </div>
  </div>
</div>
    <div class="caja-comentarios">
    <h1 class="coment-header">Comenta esta noticia</h1>
    </div>
    </div>
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
  </body>
  </html>
    ';

    fwrite($myfile, $txt);
    fclose($myfile);
}

?>