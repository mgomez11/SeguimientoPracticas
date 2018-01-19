<?php

if(isset($_POST["login"])){
		if($_POST["username"]=="admin"){
			if($_POST["password"]=="admin"){
				$_SESSION["username"] = $_POST["username"];
				$_SESSION["logged"] = "logged";
				header("Location: /panelblog.php");				
		}
		else{
				echo "	<script>
						var iDiv = document.createElement('div');		
						iDiv.id = 'aviso';
						iDiv.className = 'alert alert-danger'; 
						document.getElementById('fondo').appendChild(iDiv); 
						document.getElementById('aviso').innerHTML = 'ERROR! Contraseña incorrecta';
						</script>";
		}
		}		
		else{
		echo "	<script>
				var iDiv = document.createElement('div');		
				iDiv.id = 'aviso';
				iDiv.className = 'alert alert-danger'; 
				document.getElementById('fondo').appendChild(iDiv); 
				document.getElementById('aviso').innerHTML = 'ERROR! Nombre de usuario incorrecto';
				</script>";
		}
}

?>