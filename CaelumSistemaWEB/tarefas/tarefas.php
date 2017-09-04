<!DOCTYPE html>
<?php  session_start(); 


if (isset($_GET[nome])) {
	$_SESSION['listaTarefas'][] = $_GET['nome'];
}

if (isset($_SESSION['listaTarefas'])) {
	$listaTarefas = $_SESSION['listaTarefas'];
} else {
	$listaTarefas = array();
}

include "template.php";

?>

<html>
<head>
	<title>Gerenciador de Tarefas</title>
	<link rel="stylesheet" type="text/css" href="../css/tarefas.css">
</head>
<body>
	<nav><h1>Gerenciador de Tarefas</h1></nav>
	<section>
	<!-- <form>
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
				Numero:
				<input type="number" name="numero" placeholder="Numero" id="numero" class="campo" maxlength="8">
			</label>
			</div>
			<br>
			<div>
		 	<label>
		 		E-mail:
		 		<input type="email" name="email" placeholder="E-MAIL" id="email" class="campo"> 
		 	</label>
		 	</div>
			<input type="submit" value="Cadastrar" class="bntCadastrar">
			<br><br>
		</fieldset>
	</form>
	<?php 

		$listaTarefas = array();

		if (isset($_GET['nome'])) {

			$_SESSION['listaTarefas'][] = $_GET['nome'];
			// echo "Nome informado: " . $_GET['nome'];
		}

		if (isset($_SESSION['listaTarefas']) ) {
			$listaTarefas = $_SESSION['listaTarefas'];  
		}

	?>
	<br> -->
	<table>
		<tr>
			<th>Tarefas</th>
			<th>Descrição</th>
			<th>Prazo</th>
			<th>Prioridade</th>
			<th>Concluida</th>
		</tr>
		<?php  foreach ($listaTarefas as $tarefa): ?>

		 <tr>
		 	<td> <?php echo "$tarefa['nome']"; ?> </td>
		    <td> <?php echo "$tarefa['descricao']"; ?> </td> 
		    <td> <?php echo "$tarefa['prazo']"; ?> </td>
		    <td> <?php echo "$tarefa['prioridade']"; ?> </td>
		    <td> <?php echo "$tarefa['concluida']"; ?> </td>
		 </tr>

		<?php endforeach; ?>

	</table>
	</section>
	<footer></footer>
</body>
</html>