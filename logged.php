<?php

if(isset($_SESSION["logged"])){
		echo "	<script>
				var aDiv = document.createElement('div');		
				var iDiv = document.createElement('div');		
				iDiv.id = 'aviso';
				aDiv.className = 'panel panel-default'; 
				iDiv.className = 'panel-body'; 
				aDiv.appendChild(iDiv);
				document.getElementsByTagName('body')[0].appendChild(aDiv);
				document.getElementById('aviso').innerHTML = 'Bienvenido Admin';
				</script>";
		
}

?>