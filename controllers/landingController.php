<?php 

	
	 $tpl = file_get_contents('views/landingView.html');

	 $cant_usuarios = 45;

	 $tpl = str_replace("{{usuarios}}", $cant_usuarios, $tpl);

	 echo $tpl;
 ?>