<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Curso de PHP</title>
</head>
<body>
	<form method="post" action="processaLogin.php">
		<fieldset> 
		<legend> LOGIN </legend>
		<input type="text" name="usuario" id="login" size="30" placeholder="digite seu login" required=""> <br>
		<input type="password" name="senha" id="senha" size="30" placeholder="digite sua senha" required=""> <br>
		<input type="submit" name="enviar" value="enviar" size="30" >
		<br>
		Ou <a href="cadastro.php"> Cadastre-se </a>
		</fieldset>
	</form>
</body>
</html>
