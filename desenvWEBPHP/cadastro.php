<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Curso de PHP</title>
</head>
<body>

	<form method="post" action="processaCadastro.php">
		<fieldset> 
		<legend> Cadastre-se </legend>
		<input type="text"     name="nome"    id="nome"      size="30" placeholder="digite seu nome"  required="" autofocus=""> <br>
		<input type="text"     name="usuario" id="login"     size="30" placeholder="digite seu login" required=""> <br>
		<input type="password" name="senha"   id="senha"     size="30" placeholder="digite sua senha" required=""> <br>
		<input type="submit"   name="enviar"  value="enviar" size="30" >
		<br>
		Ou faça <a href="sessoes.php"> LOGIN </a>
		</fieldset>
	</form>
	
</body>
</html>
