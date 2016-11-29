<!DOCTYPE HTML>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="estilo.css"/>
	<?php

		$idade_i = $_GET['idade_i'];
		$idade_f = $_GET['idade_f'];
		$inicial = $_GET['qnt_mes'];
		$taxa = $_GET['taxa'];
		
		$inicial  = $inicial *100;
		$total  = $inicial;
		$tempo = ($idade_f - $idade_i) * 12;
		
		while ($tempo >=1) {
			$juros = ($total * $taxa)/100;
			$total = $total + $inicial + $juros;
			$tempo = $tempo -1;
		}
		
			$totalf = $total/100;
			$totalf = number_format($totalf, 2, ',', ' ');
			$totalr = number_format(($totalf* $taxa), 2, ',', ' ');
			if ($totalf <> 0){
				echo "<script> alert('Voce tera o total de: R$ $totalf \\n Que podera render ate: R$ $totalr ao mes')</script>"; }
	?>
	</head>

	<body>
		<div class="center">
			<form align="center" method="GET" action="trabalho.php">
			<label>Informe a sua idade atual: <input type="number" name="idade_i" placeholder="Ex.: 25" required></label><br/>
			<label>Informe a idade que pretende se aposentar: <input type="number" name="idade_f" placeholder="Ex.: 55" required></label><br/>
			<label>Informe a quantia depositada mensal: <input type="number" name="qnt_mes" placeholder="Ex.: 100" required></label><br/>
			<label>Informe a taxa mensal <input type="number" name="taxa" placeholder="somente numeros" required></label><br/>
			<input type="submit" value="Calcular" id ="botao" target>
			</form>

		</div>
	<img src="_img/bg.jpg"/ class="bg">
	</body>
</html>