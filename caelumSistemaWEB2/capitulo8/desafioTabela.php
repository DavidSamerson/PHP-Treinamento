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
			<th colspan="2">Opções</th>
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
				<td><a href="desafioEditar.php?id=<?php echo $tarefa['id']; ?>">Editar</a></td>
				<td><a href="desafioExcluir.php?id=<?php echo $tarefa['id']; ?>">Excluir</a></td>
			</tr>
		<?php endforeach; ?>

</table>