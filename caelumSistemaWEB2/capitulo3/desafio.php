<?php 

function linha($semana) //função no PHP
{

	echo "<tr>";

		for($i = 0; $i <=6; $i++) //for
		{
			if (isset($semana[$i])) { //se existir = isset
				if ($semana[$i] == date('d')) {
					echo "<td><strong>{$semana[$i]}</strong></td>";
				} 
				else {
					if ($i == 0) {
						echo "<td style='color:red'>{$semana[$i]}</td>";
					}
					if ($i == 6) {
						echo "<td style='color:grey'>{$semana[$i]}</td>";
					} 
					if ($i >= 1 && $i <= 5) {
					    echo "<td>{$semana[$i]}</td>";
					}
					
				}
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
		<td colspan="7" align="center"><?php 

				if (date('H:i') <= '11:59' and date('H:i') >= '00:00') {
					echo "Bom Dia";
				}
				if (date('H:i') >= '12:00' and date('H:i') <= '17:59') {
					echo "Boa Tarde";
				}
				if (date('H:i') >= '18:00' and date('H:i') <= '23:59') {
					echo "Boa Noite";
				}

		 ?></td>
	</tr>

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