<?php
	
	include ("conexao.php");

	$id = $_GET["idPessoa"];
	$nome = $_GET["nome"];
	$email = $_GET["email"];

	if ($id == "") {

	$sql = "INSERT INTO pessoas (nome, email) values ('$nome','$email')";

	$query = $mysqli->query($sql);

	header("location: index.php"); //volta pro index.html

	}
	else{

	$sql = "UPDATE pessoas SET nome = '$nome',
								email = '$email'
								WHERE id = '$id'";

	$query = $mysqli->query($sql);

	header("location: listar.php"); //volta pro index.html


	}

?>