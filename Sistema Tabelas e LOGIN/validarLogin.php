<?php
	include ("conexao.php");

	if (isset($_COOKIE["login"]) && isset($_COOKIE["senha"])) {
		$login = $_COOKIE["login"];
		$senha = $_COOKIE["senha"];
	
	$sql = "SELECT * FROM `login` WHERE login = '$login' AND `senha` = '$senha'";
	$query = $mysqli->query($sql);
	$linhas = $query->num_rows;

	if ($linhas == 0) {
		setcookie("login", "");
		setcookie("senha", "");
		header("location: login.php");
	}
	}

	else{
		header("location: login.php");
	}

?>