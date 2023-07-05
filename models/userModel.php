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
				return "No ingreso email";
			}	

			if($pass==''){
				return "No ingreso contraseña";
			}

			if($email == $this->email){

				if(md5($pass) == $this->pass){

					$this->status = "online";

					return true;

				}else{

					return "Credenciales incorrectas";

				}

			}else{
				return "Credenciales incorrectas";
			}

		}
	}
	




 ?>