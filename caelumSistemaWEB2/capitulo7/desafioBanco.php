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

 ?>