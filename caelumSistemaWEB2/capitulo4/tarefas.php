<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
	<title>Gerenciador de Tarefas</title>
</head>
<body>
	<form>
		<fieldset>
			<legend> Nova Tarefa </legend>
			<label>
				Tarefa: <input type="text" name="nome" required autofocus>
			</label>
			<label>
				Telefone: <input type="tel" name="telefone" required>
			</label>
			<label>
				Email: <input type="email" name="email" required>
			</label>
			<input type="submit" name="enviar" value="Cadastrar">
		</fieldset>
	</form>
	<?php 

	    $lista_tarefas = array();
	    $lista = array();

		if (isset($_GET['nome'])) { // $_GET pegar variaveis e etc. pelo nome do atributo

			$lista['nome'] = $_GET['nome'];
			$lista['telefone'] = $_GET['telefone'];
			$lista['email'] = $_GET['email'];

			$_SESSION['lista_tarefas'][] = $lista;

		//	$lista_tarefas[] = $_GET['nome']; // [] depois do vetor para atribuir valores.

		// echo "<div>";
		// echo "Nome Informado: " . $_GET['nome'];
		// echo "</div>";

		}

		if (isset($_SESSION['lista_tarefas'])) {
			$lista_tarefas = $_SESSION['lista_tarefas'];	
		}
	 ?>
	 <table>
		
		<tr>
			<th>Tarefas</th>
			<th>Telefone</th>
			<th>Email</th>
		</tr>

			<?php foreach ($lista_tarefas as $tarefa): ?> <!-- Aqui temos um foreach -->
				<?php if (isset($tarefa['telefone']) && isset($tarefa['nome']) && isset($tarefa['email'])): ?>

			<tr>
				<td><?php echo $tarefa['nome']; ?></td>
				<td><?php echo $tarefa['telefone']; ?></td>
				<td><?php echo $tarefa['email']; ?></td>
			</tr>

				 <?php endif ?>
			<?php endforeach?>

	</table>
</body>
</html>