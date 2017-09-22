<form>
	<input type="hidden" name="id" value="<?php echo $tarefa['id']; ?>">
		<fieldset>
			<legend>Nova Tarefa</legend>

			<label>
				Tarefa:
				<input type="text" name="nome" value="<?php echo $tarefa['nome']; ?>">
			</label>

			<label>
				Descrição (Opcional):
				<textarea name="descricao"> <?php echo $tarefa['descricao']; ?></textarea>
			</label>

			<label>
				Prazo (Opcional):
				<input type="text" name="prazo"  value="<?php echo traduz_data_para_exibir($tarefa['prazo']); ?>">
			</label>

				<fieldset>
					<legend>Prioridade</legend>
					<label>
						<input type="radio" name="prioridade" value="1" <?php echo ($tarefa['prioridade']==1)?'checked':''; ?>> BAIXA
						<input type="radio" name="prioridade" value="2" <?php echo ($tarefa['prioridade']==2)?'checked':''; ?>> MEDIA
						<input type="radio" name="prioridade" value="3" <?php echo ($tarefa['prioridade']==3)?'checked':''; ?>> ALTA
					</label>
				</fieldset>

			<label>
				Tarefa Concluída:
				<input type="checkbox" name="concluida" value="1" <?php echo ($tarefa['prioridade']==1)?'checked':''; ?>>
			</label>

			<input type="submit" name="Cadastrar" value="<?php echo ($tarefa['id']>0)?'Atualizar':'Cadastrar'; ?>">

		</fieldset>
	</form>

	<?php if ($exibir_tabela == false) : ?> <a href="tarefas.php">Cancelar</a> <?php endif ?>