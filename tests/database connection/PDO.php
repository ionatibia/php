<?php
	$pdo = new PDO('mysql:host=localhost;dbname=php', 'root', 'zubiri');
	$statement = $pdo->query("SELECT * FROM personas");
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);
	echo json_encode($result);
?>