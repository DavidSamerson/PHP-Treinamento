
<?php
	
	$hostname = "localhost:3388";
	$bancodedados = "cliente";
	$usuario = "root";
	$senha = "";


	$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);


	if ($mysqli->connect_errno) {
	echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	

	mysqli_set_charset ($mysqli, 'utf8');

?>