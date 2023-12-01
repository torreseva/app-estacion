<?php 

	// Router
	include 'env.php';
	// Constantes para el motor de plantillas
	define("URL_WEB", "http://mattprofe.com.ar:81/alumno/11996/ACTIVIDADES/app-clima");
	define("CACHE", false);
	// define("DB_HOST", "localhost");
	// define("DB_USER", "11996");
	// define("DB_PASS", "serpiente.abeto.camion");
	// define("DB_NAME", "11996");
	define("DB_PORT", 3306);

	include 'models/dbAbstract.php';
	include 'models/userModel.php';
	// incluimos el motor de plantillas
	include 'lib/primel.php';

	// analizamos lo que vino por la url y buscamos las variables que ahora se pasan como si fueran carpetas (/perfil/1000)
	$_SECTION = explode("/", $_SERVER["REQUEST_URI"]);  

	// Borramos la primer posicion porqué siempre esta vacia
	unset($_SECTION[0]);
	unset($_SECTION[1]);
	unset($_SECTION[2]);
	unset($_SECTION[3]);
	unset($_SECTION[4]);
	// var_dump($_SECTION);

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