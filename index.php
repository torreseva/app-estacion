<?php 

	// Router


	// existe una variable de seccion?
	if(isset($_GET["section"])){

		$section = $_GET["section"];

		if(!file_exists("controllers/{$section}Controller.php")){
			$section = "error404";	
		}

		
	}else{ // si no existe section

		$section = "landing";
	}


	include "controllers/{$section}Controller.php";
 ?>