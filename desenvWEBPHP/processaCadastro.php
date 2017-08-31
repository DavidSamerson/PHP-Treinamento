<?php

require_once 'conexao.php';

$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "insert into tb_usuarios values (default, '$nome', '$usuario', '$senha')";

$query = mysqli_query($link, $sql);

$linhas = mysqli_affected_rows($link);



if ($linhas > 0) {
	print("Cadastro Efetuado com sucesso");
} else {
	print("O nome de usuario escolhido já existe");
}

?>