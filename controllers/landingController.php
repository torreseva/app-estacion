<?php 

	$tpl = new Primel('views/langView.html');

	$tpl->assign("usuarios", 6666);
	$tpl->assign("ACTUAL_YEAR",date('Y'));

	$tpl->assign("duende", 6666);

	$tpl->printToScreen();
 ?>