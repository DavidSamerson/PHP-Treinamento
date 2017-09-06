<?php 

$servidor = '127.0.0.1';
$usuario = 'sistematarefas';
$senha = 'sistema';
$banco = 'tarefas';

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if (mysqli_connect_errno($conexao)) {
	echo "Problemas para conectar ao banco, verifique os dados!";
	die();
}



function buscar_tarefas($conexao){

		$sqlBuscar = 'SELECT * FROM tarefas';
		$resultado = mysqli_query($conexao, $sqlBuscar);

		$tarefas = array();

		while ($tarefa = mysqli_fetch_assoc($resultado)) {
			$tarefas[] = $tarefa;
		}

		return $tarefas;
}

function gravar_tarefa($conexao, $tarefa){

	$sqlGravar = "INSERT INTO tarefas (nome, descricao, prioridade, prazo, concluida) 
	VALUES ('{$tarefa['nome']}','{$tarefa['descricao']}',{$tarefa['prioridade']},'{$tarefa['prazo']}',{$tarefa['concluida']})";

	mysqli_query($conexao, $sqlGravar);
}


?>