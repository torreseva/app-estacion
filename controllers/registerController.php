<?php 
	$tpl = new Primel('views/registerView.html');

	$response = array("errno" => 0, "error" => "");

	if(isset($_POST["btn_submit"])){
		$usuario = new User($_POST['txt_email']);

		$response = $usuario->register($_POST['txt_pass']);

		if($response["errno"]==200){
			header('Location: /login');
		}
	}

	$tpl->assign("MSG", $response["error"]);
	$tpl->assign("ACTUAL_YEAR",date('Y'));


	$tpl->printToScreen();
 ?>