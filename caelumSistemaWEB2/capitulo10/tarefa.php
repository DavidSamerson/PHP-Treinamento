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
		$tarefa_id = $_POST['tarefa_id'];

		if (isset($_FILES['anexo'])) {
			$tem_erros = true;
			$erros_validacao['anexo'] = 'você deve selecionar um arquivo para anexar';
		} else {
			if (tratar_anexo($_FILES['anexo'])) {
				$anexo = array();
				$anexo['tarefa_id']=$tarefa_id;
				$anexo['nome']=$_FILES['anexo']['name'];
				$anexo['arquivo']=$_FILES['anexo']['name'];
			} else {
				$tem_erros = true;
				$erros_validacao['anexo'] = 'Envie apenas anexos nos formatos ZIP ou PDF.';
			}

			if (! $tem_erros) {
				gravar_anexo($conexao, $anexo);
			}
		}
	}

	$tarefa = buscar_tarefa($conexao, $_GET['id']);
	$anexos = buscar_anexos($conexao, $_GET['id']);

	//esse codigo foi descontinuado, só servia pra variavel de sessão, agora estamos usando sql.
	// if (isset($_SESSION['lista_tarefas'])) // Se existir algum dado na variavel de sessão
	// {
	// 	$lista_tarefas = $_SESSION['lista_tarefas'];
	// } 
	// else
	// {
	// 	$lista_tarefas = array(); // Se não existir nada, cria o array.
	// }

	include "template_tarefa.php"; //código php para incluir ou importar novas paginas (Tipo herança);
 ?>