<?php 

	include 'models/userModel.php';

	$tpl = new Primel('views/loginView.html');

	$usuario = new User("pablo@gmail.com", "pripri");

	$error = "";

	if(isset($_POST['btn_submit'])){

		$error= $usuario->login($_POST['txt_email'], $_POST['txt_pass']);

		if($error===true){
			header('Location: ?section=panel');
		}

	}


	$tpl->assign("MSG", $error);
	$tpl->assign("ACTUAL_YEAR",date('Y'));


	$tpl->printToScreen();

 ?>