<?php 

 session_start();

if (!$_SESSION['usuario']) {
	
	header("Location:index.php");

} else {
 	
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Curso de PHP</title>
</head>
<body>
	<?php 
		print "BEM VINDO AO SISTEMA ". $_SESSION['nome'] . '<br>';
	?>
</body>
</html>

<?php } ?>