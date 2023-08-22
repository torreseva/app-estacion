<?php 

	

	$tpl = new Primel('views/loginView.html');

	

	$response = array("errno" => 0, "error" => "");

	if(isset($_POST['btn_submit'])){

		$usuario = new User($_POST['txt_email']);

		$response = $usuario->login($_POST['txt_pass']);

		if($response["errno"]==200){
			header('Location: /panel');
		}

	}


	$tpl->assign("MSG", $response["error"]);
	$tpl->assign("ACTUAL_YEAR",date('Y'));


	$tpl->printToScreen();

 ?>