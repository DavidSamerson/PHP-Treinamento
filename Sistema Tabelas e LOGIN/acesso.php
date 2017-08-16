<?php

	include ("conexao.php");

	$login = $_POST["login"];
	$senha = $_POST["password"];

	$sql = "SELECT * FROM login WHERE login = '$login' AND senha = '$senha'";
	$query = $mysqli->query($sql);
	$linhas = $query->num_rows;

	if ($linhas == 0) {
		header("location: login.php?erro=acesso");
	} else{
		setcookie("login", $login);
		setcookie("senha", $senha);

		header("location: index.php");
	}

?>