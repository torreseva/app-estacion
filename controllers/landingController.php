<?php 

	$tpl = new Primel('views/landingView.html');

	$tpl->assign("usuarios", 6666);
	$tpl->assign("ACTUAL_YEAR",date('Y'));

	$tpl->assign("author", "mattprofe@mb");

	$tpl->printToScreen();
 ?>