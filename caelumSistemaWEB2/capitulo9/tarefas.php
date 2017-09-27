<?php 
	session_start();
	include "banco.php";
	include "ajudantes.php";

	$exibir_tabela = true;
	$tem_erros= false;
	$erros_validacao = array();


	// if (isset($_POST['nome']) && $_POST['nome'] != '') // Se existir algo na label nome
	if (tem_post())
	{
		$tarefa = array();

		if(isset($_POST['nome']) && strlen($_POST['nome']) > 0){ // strlen significa contar o tamanho do texto
			$tarefa['nome'] = $_POST['nome'];
		} else {
			$tem_erros = true;
			$erros_validacao['nome'] = "O nome da tarefa é obrigatório";
		}

		if (isset($_POST['descricao'])) {
			$tarefa['descricao'] = $_POST['descricao'];
		} else {
			$tarefa['descricao'] = '';
		}

		if (isset($_POST['prazo']) && strlen($_POST['prazo']) > 0) {
			if (validar_data($_POST['prazo'])) {
				$tarefa['prazo'] = traduz_data_para_banco($_POST['prazo']);
			} else {
				$tem_erros = true;
				$erros_validacao['prazo'] = 'O prazo não é uma data válida';
			}	
		} else {
			$tarefa['prazo'] = '';
		}

		$tarefa['prioridade'] = $_POST['prioridade'];

		if (isset($_POST['concluida'])) {
			$tarefa['concluida'] = 1;
		} else {
			$tarefa['concluida'] = 0;
		}

		if (! $tem_erros) {

			gravar_tarefa($conexao, $tarefa);
			header("Location: tarefas.php");
			die();
		}

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
		'nome' => (isset($_POST['nome']))?$_POST['nome']:'',
		'descricao' =>(isset($_POST['descricao']))?$_POST['descricao']:'',
		'prazo' =>(isset($_POST['prazo']))?traduz_data_para_banco($_POST['prazo']):'',
		'prioridade' =>(isset($_POST['prioridade']))?$_POST['prioridade']:1,
		'concluida' => (isset($_POST['concluida']))?$_POST['concluida']:''
	);

	include "template.php"; //código php para incluir ou importar novas paginas (Tipo herança);
 ?>