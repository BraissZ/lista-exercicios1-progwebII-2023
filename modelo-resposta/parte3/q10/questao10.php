<?php
	$l = $_POST["num"] ?? 0; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Entre em contato</h2>
			<form action="questao10.php" method="post">
				<label>Insira o valor de linhas:
					<input type="number" id="num" name="num" min="1" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$saida="";
					for ($i=0; $i < $l; $i++) {
						for ($j=0; $j <$l ; $j++) { 
							if($i >= $j){
								$saida .= " *";
							}
						}
						$saida .= "<br>";
					}
					echo "{$saida}";
				}
			?>
		</div>
	</div>
</body>
</html>