<?php 


	// clase
		// atributos
		// metodos


	/**
	 * 
	 */
	class User
	{
		public $email;
		public $pass;
		public $status;
		
		function __construct($email, $pass)
		{
			$this->email = $email;
			$this->pass = md5($pass);
			$this->status = "offline";
		}

		public function login($email, $pass){
			
			if($email==''){
				return array("errno" => 401, "error" => "No ingreso email");
			}	

			if($pass==''){
				return array("errno" => 402, "error"=>"No ingreso contraseña");
			}

			if($email == $this->email){

				if(md5($pass) == $this->pass){

					$this->status = "online";

					return array("errno" => 200, "error" => "Se logueo correctamente");

				}else{

					return array("errno"=> 403,"Credenciales incorrectas");

				}

			}else{
				return array("errno" => 404, "error" => "Credenciales incorrectas");
			}

		}
	}
	




 ?>