<?php 


	// clase
		// atributos
		// metodos


	/**
	 * 
	 */
	class User
	{

		public $nombre;
		
		function __construct()
		{
			echo "Hola soy un usuario<br>";
		}

		public function hola(){
			$this->nombre = "Duende";
		}
	}
	

	$usuario = new User;

	$usuario->hola();

	var_dump($usuario);




 ?>