<?php 
	session_start();


	if (isset($_GET['nome']) && $_GET['nome'] != '') // Se existir algo na label nome
	{
		$tarefa = array();

		$tarefa['nome'] = $_GET['nome'];

		if (isset($_GET['descricao'])) {
			$tarefa['descricao'] = $_GET['descricao'];
		} else {
			$tarefa['descricao'] = '';
		}

		if (isset($_GET['prazo'])) {
			$tarefa['prazo'] = $_GET['prazo'];
		} else {
			$tarefa['prazo'] = '';
		}

		$tarefa['prioridade'] = $_GET['prioridade'];

		if (isset($_GET['concluida'])) {
			$tarefa['concluida'] = $_GET['concluida'];
		} else {
			$tarefa['concluida'] = '';
		}

		if (isset($_GET['telefone'])) {
			$tarefa['telefone'] = $_GET['telefone'];
		} else {
			$tarefa['telefone'] = '';
		}

		if (isset($_GET['favorito'])) {
			$tarefa['favorito'] = $_GET['favorito'];
		} else{
			$tarefa['favorito'] = '';
		}

		if (isset($_GET['email'])) {
			$tarefa['email'] = $_GET['email'];
		} else {
			$tarefa['email'] = '';
		}


		$_SESSION['lista_tarefas'][] = $tarefa;
	}

	if (isset($_SESSION['lista_tarefas'])) // Se existir algum dado na variavel de sessão
	{
		$lista_tarefas = $_SESSION['lista_tarefas'];
	} 
	else
	{
		$lista_tarefas = array(); // Se não existir nada, cria o array.
	}

	include "desafioTemplate.php"; //código php para incluir ou importar novas paginas (Tipo herança);
 ?>