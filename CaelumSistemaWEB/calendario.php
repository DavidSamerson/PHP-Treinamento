<?php 
	
	function linha($semana){

		echo "<tr>";

			for ($i=0; $i <= 6; $i++) { 
				if (isset($semana[$i])) { // se a variavel não estiver vazia, criar td com conteudo.
					if ($semana[$i] == date('d')) {
						echo "<td>{$semana[$i]}</td>";
					}
					echo "<td>{$semana[$i]}</td>";
				} else {
					echo "<td></td>"; // se a variavel estiver vazia, criar td sem nada dentro.
				}
			}

		echo "</tr>";

		// echo "
		// 	<tr>
		// 	<td>{$semana[0]}</td>
		// 	<td>{$semana[1]}</td>
		// 	<td>{$semana[2]}</td>
		// 	<td>{$semana[3]}</td>
		// 	<td>{$semana[4]}</td>
		// 	<td>{$semana[5]}</td>
		// 	<td>{$semana[6]}</td>
		// 	</tr>
		// ";

	}

	function calendario(){

		$dia    = 1;
		$semana = array();

		while ($dia <= 31) {

			array_push($semana, $dia); //faz o push dos valores de dia para variavel semana.
			$dia ++; //vai adicionando os dias no array enquanto semana = 7;


			if (count($semana) == 7) {  // quando semana = 7  entra no for
				linha($semana); //cria uma nova linha
				$semana = array(); //reseta o vetor copo
			}
			
		}

		linha($semana);
	}
 ?>

 <?php 

 	if (date('H:m') >= '00:00' and date('H:m') <= '11:59') {
 		echo "BOM DIA";
 	}

 	if (date('H:m') >= '11:59' and date('H:m') <= '17:59' ) {
 		echo "BOA TARDE";
 	} 

 	else{
 		echo "BOA NOITE";
 	}

  ?>

<table border="5" align="center">
	<tr>
		<th>
			Dom
		</th>
		<th>
			Seg
		</th>
		<th>
			Ter
		</th>
		<th>
			Qua
		</th>
		<th>
			Qui
		</th>
		<th>
			Sex
		</th>
		<th>
			Sab
		</th>
	</tr>
		<?php calendario(); ?>
</table>

