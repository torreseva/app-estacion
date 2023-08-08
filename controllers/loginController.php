<?php 

	include 'models/userModel.php';

	$tpl = new Primel('views/loginView.html');

	$usuario = new User("pablo@gmail.com", "pripri");

	$response = array("errno" => 0, "error" => "");

	if(isset($_POST['btn_submit'])){

		$response = $usuario->login($_POST['txt_email'], $_POST['txt_pass']);

		if($response["errno"]==200){
			header('Location: ?section=panel');
		}

	}


	$tpl->assign("MSG", $response["error"]);
	$tpl->assign("ACTUAL_YEAR",date('Y'));


	$tpl->printToScreen();

 ?>