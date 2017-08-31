<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Curso de PHP</title>
</head>
<body>
<form action=""  method="post" enctype="multipart/form-data" >
	<input type="file" name="arquivo" required="true">
	<input type="submit" name="enviar" value="enviar">
</form>
<?php 

	$arquivo = isset($_FILES['arquivo'])? $_FILES['arquivo']:"";

	if (isset($_FILES['arquivo'])) {

		$nome            = $arquivo['name']; //pegou o nome

		// move_uploaded_file($_FILE['arquivo']['tmp_name'], 'uploads/' . $nome);

		$tipospermitidos = array('jpg','jpeg','png');
		$tamanho         = $arquivo['size'];
		$extensao        = explode('.', $nome);
		$extensao        = end($extensao);
		$novoNome        = $nome . '-' . rand() . '.' . $extensao;

		if (in_array($extensao, $tipospermitidos)) {
			 print "OK";
			if ($tamanho > 1000000) {
				print("O Tamanho do arquivo excede o limite permitido");
			} else {
				 print("OK!");
				move_uploaded_file($_FILES['arquivo']['tmp_name'], 'uploads/' . $novoNome);
				print("<img src='uploads/$novoNome' width='300' height='300' >");
			}
		} else{
			 print("Tipo de arquivo não permitido");
		}

	}

?>
</body>
</html>
