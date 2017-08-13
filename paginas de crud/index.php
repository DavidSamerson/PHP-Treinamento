<?php

		if (isset($_GET["id"])) {

			include ("conexao.php");

			 $sqlListar = "SELECT * FROM pessoas WHERE id = '$_GET[id]'";
	  		 $query = $mysqli->query($sqlListar);
		

		if($query->num_rows == 0){
			print "<script> alert('Não Encontrado'); </script>";
		} else{
			$resultado = $query->fetch_array(MYSQL_BOTH);
		}
	}
?>

<html>
	<head><title>Teste</title></head>
	<body>
	<form action="salvar.php" method="get">
		<input type="text" name="nome" id="nome" value="<?php print $resultado[nome]; ?>">
		<input type="email" name="email" id="email" value="<?php print $resultado[email]; ?>">
		<input type="submit" name="enviar" id="enviar">
		<input type="hidden" name="idPessoa" id="idPessoa" value="<?php print $_GET["id"]; ?>">

	</body>
</html>