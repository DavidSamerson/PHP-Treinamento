<?php 

	include("desafioBanco.php");

	excluir_selecionado($conexao, $_GET['id']);

	header("Location: desafioTarefas.php");

 ?>