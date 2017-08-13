<table>
	<thead><tr><th>Nome</th><th>Email</th></tr></thead>
	<tbody>
	<?php

	   include ("conexao.php");

	   $sqlListar = "SELECT * FROM pessoas";
	   $query = $mysqli->query($sqlListar);

	   while($resultado = $query->fetch_array(MYSQL_BOTH)){

	   	print "
	   	<tr>
		<td>
		   $resultado[nome]
		</td>
		<td>
		   $resultado[email]
		</td>
		<td><a href='index.php?id=$resultado[id]'>Alterar</a></td>
		<td><a href='excluir.php?id=$resultado[id]'>Excluir</a></td>
	    </tr>";

	   }

    ?>
	</tbody>
</table>
