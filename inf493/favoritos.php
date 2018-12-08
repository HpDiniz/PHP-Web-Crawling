<!DOCTYPE html>
<html>
	<head>
		<?php
		 include("login_top.php"); ?>
		
		<meta charset="utf-8">
		<title>Receitas - Favoritos</title>
		<link rel="stylesheet" type="text/css" href="basico.css">
	</head>
	
	<body>

	<div id="ini"><a href="index.php"><h1>Inicio</h1></a></div>
	<div id="titp"><h1>Receita na Hora</h1></div>
	<?php include("login_logoff.php"); ?>

	<div id="divindex" class="divform">
		<h2>Suas Receitas Favoritas</h2>
		
		<ul>
			<?php
			if( isset($_SESSION['favorito']) ){
				foreach ( $_SESSION['favorito'] as $val){
					$rnome = substr($val, 8);
					echo "<a href='resultado2.php?Confira=$val'>";
					echo "<li class='receita rfavorita'>";
					echo "$rnome";
					echo "</li>";
					echo "</a>";
				}
			}
			?>
		</ul>
	</div>

	</body>
</html>
