<?php

define("HOSTNAME", 'localhost');
define("USERNAME", 'root');
define("PASSWORD", '');
define("DATABASE", 'db_login');

$link = @mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

if (!$link) {
	
	print("Conexão Recusada");
}

?>