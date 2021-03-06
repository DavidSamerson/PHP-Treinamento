<!DOCTYPE html>
<html>
<head>
	<title>Gerenciador de Tarefas</title>
</head>
<body>
	<h1>Gerenciador de Tarefas</h1>
	<form>
		<fieldset>
			<legend>Nova Tarefa</legend>

			<label>
				Tarefa:
				<input type="text" name="nome">
			</label>

			<label>
				Descrição (Opcional):
				<textarea name="descricao"></textarea>
			</label>

			<label>
				Prazo (Opcional):
				<input type="text" name="prazo">
			</label>

				<fieldset>
					<legend>Prioridade</legend>
					<label>
						<input type="radio" name="prioridade" value="baixa" checked> BAIXA
						<input type="radio" name="prioridade" value="media"> MEDIA
						<input type="radio" name="prioridade" value="alta"> ALTA
					</label>
				</fieldset>

			<label>
				Tarefa Concluída:
				<input type="checkbox" name="concluida" value="sim">
			</label>

			<fieldset>

				<legend>Dados Pessoais</legend>

				<label>
					Telefone:
					<input type="phone" name="telefone">
				</label>
				<label>
					Contato Favorito:
					<input type="checkbox" name="favorito" value="sim">
				</label>

				<label>
					Email:
					<input type="email" name="email">
				</label>

			</fieldset>

			<input type="submit" name="Cadastrar">

		</fieldset>
	</form>

	<table>

		<tr>
			<th>Tarefas</th>
			<th>Descricao</th>
			<th>Prazo</th>
			<th>Prioridade</th>
			<th>Concluída</th>
			<th>Telefone</th>
			<th>Favorito</th>
			<th>Email</th>
		</tr>

		<?php foreach ($lista_tarefas as $tarefa) : ?>
			<tr>
				<td><?php echo $tarefa['nome']; ?></td>
				<td><?php echo $tarefa['descricao']; ?></td>
				<td><?php echo $tarefa['prazo']; ?></td>
				<td><?php echo $tarefa['prioridade']; ?></td>
				<td><?php echo $tarefa['concluida']; ?></td>
				<td><?php echo $tarefa['telefone']; ?></td>
				<td><?php echo $tarefa['favorito']; ?></td>
				<td><?php echo $tarefa['email']; ?></td>
			</tr>
		<?php endforeach; ?>

	</table>
</body>
</html>