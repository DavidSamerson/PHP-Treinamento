<?php 
	
	$servidor = 'localhost';
	$usuario = 'contatos';
	$senha = 'contatos';
	$banco = 'contatos';

	$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);


	if (mysqli_connect_errno($conexao)) {
			echo "Erro! verifique os dados de conexão";
			die();
	}





	function cadastrar_novo($conexao, $tarefa){

		$sqlCadastrar = "INSERT INTO contatos (telefone, favorito, email, nome, descricao, prazo, prioridade, concluida)
						 VALUES (
						 		{$tarefa['telefone']},
								{$tarefa['favorito']},
								'{$tarefa['email']}',
								'{$tarefa['nome']}',
								'{$tarefa['descricao']}',
								'{$tarefa['prazo']}',
								{$tarefa['prioridade']},
								{$tarefa['concluida']}
							)";

	    mysqli_query($conexao, $sqlCadastrar);

	}

	function buscar_dados_contatos($conexao){

		$sqlBuscar = "SELECT * FROM contatos";

		$resultado = mysqli_query($conexao, $sqlBuscar);

		$tarefas = array();

		while ($tarefa = mysqli_fetch_assoc($resultado)) {

			$tarefas[] = $tarefa;
		}

		return $tarefas;
	}

	function excluir_selecionado($conexao, $id){

		$sqlExcluir = "DELETE FROM contatos WHERE id =" . $id;

		mysqli_query($conexao, $sqlExcluir);

	}

	function editar_dados($conexao, $tarefa){

		$sqlEditar = "UPDATE contatos
						SET nome = '{$tarefa['nome']}',
						telefone = {$tarefa['telefone']},
						favorito = {$tarefa['favorito']},
						email = '{$tarefa['email']}',
						descricao = '{$tarefa['descricao']}',
						prazo = '{$tarefa['prazo']}',
						prioridade = {$tarefa['prioridade']},
						concluida = {$tarefa['concluida']}
						WHERE id = {$tarefa['id']}";

		mysqli_query($conexao, $sqlEditar);

		header("Location: desafioTarefas.php");

		die();
	}

	function buscar_dados_contato($conexao, $id){

		$sqlBuscar = "SELECT * FROM contatos WHERE id =" . $id;

		$resultado = mysqli_query($conexao, $sqlBuscar);

		$contato = array();

		$contato = mysqli_fetch_assoc($resultado);

		return $contato;
	}

 ?>