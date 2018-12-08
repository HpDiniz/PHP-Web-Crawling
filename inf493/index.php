<!DOCTYPE html>
<html>
	<head>
		<?php include("login_top.php"); ?>
		
		<meta charset="utf-8">
		<title>Receitas</title>
		<link rel="stylesheet" type="text/css" href="basico.css">
	</head>
	
	<body>

	<div id="ini"><a href="index.php"><h1>Inicio</h1></a></div>
	<div id="titp"><h1>Receita na Hora</h1></div>
	<?php include("login_logoff.php"); ?>

	<div id="divindex" class="divform">
		<h3>Qual ingrediente você possui?</h3>
		<form action="resultado.php" method="get">
			<input type="text" name="ingrediente1" placeholder="Ingrediente 1"> <br />
			<input type="text" name="ingrediente2" placeholder="Ingrediente 2"> <br />
			<input type="text" name="ingrediente3" placeholder="Ingrediente 3"> <br />
			<input type="submit" value="Pesquisar">
		</form>
	</div>

	</body>
</html>
