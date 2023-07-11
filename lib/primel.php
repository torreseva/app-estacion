<?php 

	/**
	 * 
	 */
	class Primel
	{

		public $tpl = '';
		public $url_tpl = '';
		
		function __construct($url_tpl)
		{
			if(!file_exists($url_tpl)){

				echo "<b>Error en plantilla ({$url_tpl}):</b> No existe la plantilla <u>$url_tpl</u>";
				exit();
			}else{
				$this->url_tpl = $url_tpl;
				$this->tpl = file_get_contents($url_tpl);
			}
		}

		/**
		 * 
		 * pasa un valor a una variable de la plantilla
		 * 
		 * */
		public function assign($needle, $value){

			if(strstr($this->tpl, "{{{$needle}}}")){
				$this->tpl = str_replace("{{{$needle}}}", $value, $this->tpl);
			}else{
				echo "<b>Error en plantilla ({$this->url_tpl}):</b> No existe la variable <u>$needle</u>";
				exit();
			}
		}

		public function printToScreen(){
			echo $this->tpl;
		}


	}

 ?>