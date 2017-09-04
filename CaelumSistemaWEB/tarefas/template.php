<!DOCTYPE html>
<?php 
session_start();
if (isset($_GET['nome']) && $_GET['nome'] != '') {
		$tarefa = array();

		$tarefa['nome'] = $_GET['nome'];

	if (isset($_GET['descricao'])) {
		$tarefa['descricao'] = $_GET['nome'];
	} else {
		$tarefa['descricao'] = "";
	}

	if (isset($_GET['prazo'])) {
		$tarefa['prazo'] = $_GET['prazo'];
	} else {
		$tarefa['prazo'] = "";
	}

	$tarefa['prioridade'] = $_GET['prioridade'];

	if (isset($_GET['concluida'])) {
		$tarefa['concluida'] = $_GET['concluida'];
	} else {
		$tarefa['concluida'] = "";
	}

	$_SESSION['listaTarefas'][] = $tarefa;
 ?>
<html>
<head>
	<meta charset="utf-8">
	<title>Gerenciador de tarefas</title>
	<link rel="stylesheet" type="text/css" href="../css/tarefas2.css">
</head>
<body>
	<form>
		<fieldset>
			<legend>Nova Tarefa</legend>
			<br>
			<div>
			<label>
				Tarefa:
				<input type="text" name="nome" placeholder="Nome" id="nome" class="campo" maxlength="20">
			</label>
			</div>
			<br>
			<div>
			<label>
				Descrição (Opcional):
				<textarea name="Descricao"></textarea>
			</label>
			</div>
			<div>
			<label>
				Prazo (Opcional):
				<input type="text" name="nome" placeholder="Nome" id="nome" class="campo" maxlength="20">
			</label>
			</div>
			<fieldset>
				<legend>Prioridade:</legend>
				<label>
					<input type="radio" name="prioridade" value="baixa" checked> Baixa
					<input type="radio" name="prioridade" value="media"> Média
					<input type="radio" name="prioridade" value="alta"> Alta
				</label>
			</fieldset>
			<label>
				Tarefa Concluida:
				<input type="checkbox" name="concluida" value="sim">
			</label>
			<input type="submit" value="Cadastrar" class="bntCadastrar">
			<br><br>
		</fieldset>
	</form>
	</section>
	<footer>
		<?php include "tarefas.php"; ?>
	</footer>
</body>
</html>