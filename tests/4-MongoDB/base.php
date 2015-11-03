<?php
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$edad = $_POST['edad'];

	$mongo = new MongoClient("mongodb://test:test@ds049094.mongolab.com:49094/nati_test");
	$db = $mongo->selectDB('nati_test');

	$coll = $db->users;

	$document = array("nombre" => $nombre, "apellido" => $apellido, "edad" => $edad);
	$coll->insert($document);

	header("Location: index.html");

?>