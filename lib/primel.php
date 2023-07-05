<?php 

	/**
	 * 
	 */
	class Primel
	{

		public $tpl = '';
		
		function __construct($url_tpl)
		{
			$this->tpl = file_get_contents($url_tpl);
		}

		public function assign($needle, $value){
			$this->tpl = str_replace("{{{$needle}}}", $value, $this->tpl);
		}

		public function printToScreen(){
			echo $this->tpl;
		}


	}

 ?>