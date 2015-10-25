<html>
<head>
</head>
<body>
	<?php
		$personas = [
			"nombre" => "Iker",
			"apellido" => "Oñatibia",
			"edad" => 33,
		]

		$normal = (1,2,3,4,5,6,7,8,9,0);

		$multi = [
			"foo" => "bar",
			42 => 24,
			"multi" => [
				"foo1" => "bar1",
				"foo2" => "bar2",
			],
		];

		var_dump($personas["nombre"]);
	?>
</body>

