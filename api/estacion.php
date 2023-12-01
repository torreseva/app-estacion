<?php
header("Content-Type: application/json");
	$db = new mysqli("localhost", "alumno", "alumno", "julio");
	// var_dump($db);
	$ssql="select * from estaciones where chipId'=".($_GET["chipId"]."'");
	 $response=$db->query($ssql);
	 // var_dump($response);
	 $matrix = $response->fetch_all( MYSQLI_ASSOC);
	  echo json_encode($matrix);


?>