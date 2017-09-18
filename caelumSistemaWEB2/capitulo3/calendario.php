<?php 

function linha($semana) //função no PHP
{

	echo "<tr>";

		for($i = 0; $i <=6; $i++) //for
		{
			if (isset($semana[$i])) { //se existir = isset
				echo "<td>{$semana[$i]}</td>";
			} else {
				echo "<td></td>";
			}
		}

	echo "</tr>";
	// echo "<tr>
	// 		<td>{$semana[0]}</td> <!-- para printar variaveis, eu ponho elas dentro de uma chave {} -->
	// 		<td>{$semana[1]}</td>
	// 		<td>{$semana[2]}</td>
	// 		<td>{$semana[3]}</td>
	// 		<td>{$semana[4]}</td>
	// 		<td>{$semana[5]}</td>
	// 		<td>{$semana[6]}</td>
	// 	 </tr>";
}

function calendario()
{
	$dia = 1; //variavel do php
	$semana = array(); //criação de array no php

	while ($dia <= 31) {

		array_push($semana, $dia);// adiciona automaticamente um novo valor no array (onde eu guardo, o que eu guardo)

		if (count($semana) == 7) { //if no PHP
			linha($semana); //como chamar uma função no php
			$semana = array(); // como resetar um vetor (Apagar tudo)
		}
		$dia++;
	}
	linha($semana);
}
?>


<table border="1">

	<tr>
		<th>Dom</th>
		<th>Seg</th>
		<th>Ter</th>
		<th>Qua</th>
		<th>Qui</th>
		<th>Sex</th>
		<th>Sab</th>
	</tr>

	<?php echo calendario(); ?>

</table>