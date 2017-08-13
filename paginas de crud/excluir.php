<?php
	include ("conexao.php");

	$id = $_GET["id"];

	$sqlDeletar = "DELETE FROM pessoas WHERE id = '$id'";

	$query = $mysqli->query($sqlDeletar);

	header("location: listar.php")
?>