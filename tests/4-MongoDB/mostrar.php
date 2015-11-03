<?php
	$mongo = new MongoClient("mongodb://test:test@ds049094.mongolab.com:49094/nati_test");
	$db = $mongo->selectDB('nati_test');

	$coll = $db->users;

	$cursor = $coll->find();

	foreach ($cursor as $id => $value) {
		echo "<html><head><link rel='stylesheet' type='text/css' href='estilos.css' /></head><body>";
		echo "<h2>$id: </h2><br/>";
		echo "<b>Nombre: </b>".$value['nombre'];
		echo "<br/>";
		echo "<b>Apellido: </b>".$value['apellido'];
		echo "<br/>";
		echo "<b>Edad: </b>".$value['edad'];
		echo "<br/>";
		echo "<<------------>>";
		echo "</body></html>";
	}
?>