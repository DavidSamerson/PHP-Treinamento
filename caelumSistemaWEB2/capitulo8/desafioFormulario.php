<form>

	<input type="hidden" name="id" value="<?php echo $tarefas['id']; ?>">
		<fieldset>
			<legend>Nova Tarefa</legend>

			<label>
				Tarefa:
				<input type="text" name="nome" value="<?php echo $tarefas['nome']; ?>">
			</label>

			<label>
				Descrição (Opcional):
				<textarea name="descricao"><?php echo $tarefas['descricao']; ?></textarea>
			</label>

			<label>
				Prazo (Opcional):
				<input type="text" name="prazo" value="<?php echo traduz_data_para_exibir($tarefas['prazo']); ?>">
			</label>

				<fieldset>
					<legend>Prioridade</legend>
					<label>
						<input type="radio" name="prioridade" value="1" <?php echo ($tarefas['prioridade'] == 1)? 'checked' : ''; ?>> BAIXA
						<input type="radio" name="prioridade" value="2" <?php echo ($tarefas['prioridade'] == 2)? 'checked' : ''; ?>> MEDIA
						<input type="radio" name="prioridade" value="3" <?php echo ($tarefas['prioridade'] == 3)? 'checked' : ''; ?>> ALTA
					</label>
				</fieldset>

			<label>
				Tarefa Concluída:
				<input type="checkbox" name="concluida" value="1" <?php echo ($tarefas['concluida'] == 1)? 'checked' : ''; ?>>
			</label>

			<fieldset>

				<legend>Dados Pessoais</legend>

				<label>
					Telefone:
					<input type="number" name="telefone" value="<?php echo $tarefas['telefone']; ?>">
				</label>
				<label>
					Contato Favorito:
					<input type="checkbox" name="favorito" value="1" <?php echo ($tarefas['favorito'] == 1)? 'checked' : ''; ?>>
				</label>

				<label>
					Email:
					<input type="email" name="email" value="<?php echo $tarefas['email']; ?>">
				</label>

			</fieldset>

			<input type="submit" name="Cadastrar">

		</fieldset>
	</form>