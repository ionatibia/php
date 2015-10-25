<?php
	//$nom = $_POST['nombre'];
	//$pass = $_POST['pass'];
	$nom = filter_input(INPUT_POST,'nombre', FILTER_SANITIZE_STRING);
	if ($nom == null) {
		echo "Error nombre";
	}
	$pass = filter_input(INPUT_POST,'pass', FILTER_VALIDATE_INT);
	if ($pass == null) {
		echo "Error password";
	}
	/*$mysqli = new mysqli("localhost", "root", "zubiri", "todoappprueba");
	if ($mysqli->connect_errno) {
    	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}

	$res = $mysqli->query("SELECT * FROM usuarios");

	for ($i=0; $i < $res->num_rows; $i++) { 
		$row = $res->fetch_assoc();
		echo "Numero: ".$row['numero'];
		echo "Nombre: ".$row['nombre'];
		echo "Pass: ".$row['pass'];
	}*/

	try {
		$con = new PDO('mysql:host=localhost;dbname=todoappprueba','root','zubiri');
		$statement = $con->query("SELECT * FROM usuarios");
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);
		foreach ($result as $key) {
			if ($key['nombre'] == $nom) {
				if ($key ['pass'] == $pass) {
					echo "Login ok";
				}
			}
		}
	} catch (Exception $e) {
		echo "Error: ".$e->getMessage();
		die();
	}
	$con = null;
?>