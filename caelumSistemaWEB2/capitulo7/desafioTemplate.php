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
						<input type="radio" name="prioridade" value="1" checked> BAIXA
						<input type="radio" name="prioridade" value="2"> MEDIA
						<input type="radio" name="prioridade" value="3"> ALTA
					</label>
				</fieldset>

			<label>
				Tarefa Concluída:
				<input type="checkbox" name="concluida" value="1">
			</label>

			<fieldset>

				<legend>Dados Pessoais</legend>

				<label>
					Telefone:
					<input type="number" name="telefone">
				</label>
				<label>
					Contato Favorito:
					<input type="checkbox" name="favorito" value="1">
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
				<td><?php echo traduz_data_para_exibir($tarefa['prazo']); ?></td>
				<td><?php echo traduz_prioridade($tarefa['prioridade']); ?></td>
				<td><?php echo traduz_concluida($tarefa['concluida']); ?></td>
				<td><?php echo $tarefa['telefone']; ?></td>
				<td><?php echo traduz_favorito($tarefa['favorito']); ?></td>
				<td><?php echo $tarefa['email']; ?></td>
			</tr>
		<?php endforeach; ?>

	</table>
</body>
</html>