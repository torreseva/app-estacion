<?php 

	header("Content-Type: application/json");

	$db = new mysqli("localhost", "huertaenred", "huertaenred1234", "huertaenred");

	$response = $db->query("SELECT * FROM users");

	$list = array("errno" => 400, "error" => "No hay usuarios");

	if($response->num_rows > 0 ){

		$list = $response->fetch_all(MYSQLI_ASSOC);

	}

	echo json_encode($list);


 ?>