<?php 

function traduz_prioridade($codigo){

	$prioridade = '';

	switch ($codigo) {

		case 1:
			$prioridade = 'Baixa';
			break;
		case 2:
			$prioridade = 'Media';
			break;
		case 3:
			$prioridade = 'Alta';
			break;		
	}

	return $prioridade;

}

function traduz_data_para_banco($codigo){

	if ($codigo == "") {
		return "" ;
	}

	$data = explode("/", $codigo);

	$datanova = "{$data[2]}-{$data[1]}-{$data[0]}";

	return $datanova;
}

function traduz_data_para_exibir($dado) {

	if ($dado == "" or $dado == "0000-00-00") {
		return "";
	}

	$data = explode('-', $dado);

	$datanova = "{$data[2]}/{$data[1]}/{$data[0]}";

	return $datanova;

}

function traduz_concluida($dado){

	if ($dado == 1) {
		return "Sim";
	}

	return "Não";
}

function traduz_favorito($favorito){

	if ($favorito = 1) {
		return "Sim";
	} 
	return "Não";
}

?>
