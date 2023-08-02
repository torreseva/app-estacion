<?php 

	// Router

	// Constantes para el motor de plantillas
	define("URL_WEB", "http://huertaenred.com.ar");
	define("CACHE", false);

	// incluimos el motor de plantillas
	include 'lib/primel.php';

	// analizamos lo que vino por la url y buscamos las variables que ahora se pasan como si fueran carpetas (/perfil/1000)
	$_SECTION = explode("/", $_SERVER["REQUEST_URI"]);  

	// Borramos la primer posicion porqué siempre esta vacia
	unset($_SECTION[0]);

	// como se borro la primer posicion del vector hay que reindexar el vector, osea que arranque desde el 0
	$_SECTION = array_values($_SECTION);


	// section en la posicion 0 siempre tiene la seccion a la cual quiero acceder
	if($_SECTION[0]!=""){

		$section = $_SECTION[0];

		if(!file_exists("controllers/{$section}Controller.php")){
			$section = "error404";	
		}

		
	}else{ // si no existe section

		$section = "landing";
	}


	include "controllers/{$section}Controller.php";
 ?>