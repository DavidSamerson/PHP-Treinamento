<?php 

	$bdServidor = '127.0.0.1';
	$bdUsuario = 'sistematarefas2';
	$bdSenha = 'sistema';
	$bdBanco = 'tarefas2';

	$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco); //variavel para abrir uma conexão com o banco de dados;

	if (mysqli_connect_errno($conexao)) { //se houver algum tipo de erro de conexão, então..

		echo "Problemas com o banco, por favor verifique os dados";
		die(); //mata a conexão.
	}


	function buscar_tarefas($conexao){

		$sqlBusca = 'SELECT * FROM tarefas';
		$resultado = mysqli_query($conexao, $sqlBusca); //vai buscar o resultado no banco com o codigo em sql e o conexao.

		$tarefas = array();

		while ($tarefa = mysqli_fetch_assoc($resultado)) { //executa até que tenha passado por todas as linhas do array resultado e sendo armazenado em tarefa
			$tarefas[] = $tarefa;
		}

		return $tarefas;
	}

	function gravar_tarefa($conexao, $tarefa){

		$sqlGravar = "INSERT INTO tarefas
					(nome, descricao, prioridade, prazo, concluida)
					VALUES
					('{$tarefa['nome']}','{$tarefa['descricao']}',{$tarefa['prioridade']}, '{$tarefa['prazo']}', {$tarefa['concluida']})";

		mysqli_query ($conexao, $sqlGravar);
	}

	function buscar_tarefa($conexao, $id){

		$sqlBuscar = "SELECT * FROM tarefas WHERE id =" . $id;

		$resultado = mysqli_query($conexao, $sqlBuscar);

		return mysqli_fetch_assoc($resultado);
	}

	function editar_tarefa($conexao, $tarefa)
	{

	    $sqlEditar = "
	        UPDATE tarefas SET
	            nome = '{$tarefa['nome']}',
	            descricao = '{$tarefa['descricao']}',
	            prioridade = {$tarefa['prioridade']},
	            prazo = '{$tarefa['prazo']}',
	            concluida = {$tarefa['concluida']}
	        WHERE id = {$tarefa['id']}
	    ";

	    mysqli_query($conexao, $sqlEditar);
	}

	function remover_tarefa($conexao, $id){

		$sqlExcluir = "DELETE FROM tarefas WHERE id = {$id}";
		mysqli_query($conexao, $sqlExcluir);
	}

	function gravar_anexo($conexao, $anexo){

		$sqlGravar = "INSERT INTO anexos
					(tarefa_id, nome, arquivo)
					VALUES
					(
					 {$anexo['tarefa_id']},
					'{$anexo['nome']}',
					'{$anexo['arquivo']}',
					)";

		mysqli_query($conexao, $sqlGravar);
	}

	function buscar_anexos($conexao, $tarefa_id){

		$sql = 'SELECT * FROM anexos WHERE tarefa_id = {$tarefa_id}';
		$resultado = mysqli_query($conexao, $sql);

		$anexos = array();

		while ($anexo = mysqli_fetch_assoc($resultado)) {
			$anexos[] = $anexo;
		}

		return $anexos;
	}
 ?>