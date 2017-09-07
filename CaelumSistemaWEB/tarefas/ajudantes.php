<?php 
function traduz_prioridade($tarefa){

	$prioridade = 0;

	switch ($tarefa) {

		case '1':
			$prioridade = 'Baixa';
			break;

		case '2':
			$prioridade = 'Media';
			break;

		case '3':
			$prioridade = 'Alta';
			break;
		
	}

	return $prioridade;

}

function traduz_data_para_banco($data){

	if ($data == "") {
		return "";
	}

	$dados = explode("/", $data);

	$data_mysql = "{$dados[2]}-{$dados[1]}-{$dados[0]}";

	return $data_mysql;
}

function traduz_data_para_exibir($data){

	if ($data == "" or $data == "0000-00-00") {
		return "";
	}

	$dados = explode("-", $data);

	$data_exibir = "{$dados[2]}/{$dados[1]}/{$dados[0]}";

	return $data_exibir;
}

function traduz_concluida($data){

	if ($data == 1) {
		return "Sim";
	} else {
		return "Não";
	}
}
?>