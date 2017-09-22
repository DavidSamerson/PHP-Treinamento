<?php 
	session_start();
	include "banco.php";
	include "ajudantes.php";

	$exibir_tabela = true;


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
			$tarefa['prazo'] = traduz_data_para_banco($_GET['prazo']);
		} else {
			$tarefa['prazo'] = '';
		}

		$tarefa['prioridade'] = $_GET['prioridade'];

		if (isset($_GET['concluida'])) {
			$tarefa['concluida'] = 1;
		} else {
			$tarefa['concluida'] = 0;
		}

		gravar_tarefa($conexao, $tarefa);
		header("Location: tarefas.php");
		die();

		// $_SESSION['lista_tarefas'][] = $tarefa;  //código descontinuado por se tratar de variaveis de sessão.
	}

	$lista_tarefas = buscar_tarefas($conexao);

	//esse codigo foi descontinuado, só servia pra variavel de sessão, agora estamos usando sql.
	// if (isset($_SESSION['lista_tarefas'])) // Se existir algum dado na variavel de sessão
	// {
	// 	$lista_tarefas = $_SESSION['lista_tarefas'];
	// } 
	// else
	// {
	// 	$lista_tarefas = array(); // Se não existir nada, cria o array.
	// }

	$tarefa = array(
		'id' => 0,
		'nome' => '',
		'descricao' => '',
		'prazo' => '',
		'prioridade' => 1,
		'concluida' => ''
	);

	include "template.php"; //código php para incluir ou importar novas paginas (Tipo herança);
 ?>