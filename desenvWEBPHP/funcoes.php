<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Curso de PHP</title>
</head>
<body>
	<?php

		function dadosPessoais() {

			$nome  = 'Julia';
			$idade = 18;
			$profissao = "Cabeleireira";

			print("Nome : $nome <br>");
			print("Idade : $idade <br>");
			print("Profissao : $profissao <br>");
		}

		dadosPessoais();
		// dadosPessoais($nome, $idade, $profissao);
		//utilizar pra repetir estruturas;

	?>
</body>
</html>
