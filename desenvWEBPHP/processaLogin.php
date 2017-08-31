<?php 

require_once "conexao.php";
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];


$sql = "select nome, usuario, senha from tb_usuarios where usuario = '$usuario' and senha='$senha' ";
$query = mysqli_query($link, $sql);
$linhas = mysqli_affected_rows($link);

if ($linhas > 0) {

	session_start();
	$_SESSION['usuario'] = $usuario;
	while ($exibirNome = mysqli_fetch_array($query)) {
		$nome = $exibirNome[0];
		$nomeUsuario  = $exibirNome[1];
		$senha = $exibirNome[2];
	}

	$_SESSION['nome'] = $nome;

} else {

	print("Dados Incorretos");

}


// if ($usuario == 'fabio' and $senha == '123') {

// 	session_start();

// 	$_SESSION['usuario'] = $usuario;
// 	$_SESSION['nome'] = $nome;
// 	header ("Location: sistema.php");
	
// } else {

// 	print("dados incorretos");

// }

?>