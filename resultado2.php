<!DOCTYPE html>
<html>

	<head>
		<?php include("login_top.php"); ?>
		<meta charset="utf-8">
		<?php
		
		if( isset($_POST['favorito']) && isset($logado) ){
			$_SESSION['favorito'][] = $_POST['favorito'];
		}
		
		include_once('simple_html_dom.php');

		if(!isset($_GET['Confira']))
			$ing1 = "";
		else
			$ing1 = $_GET['Confira'];

		$url = "https://www.tastemade.com.br".$ing1;

		$html = (file_get_html($url))->plaintext;

		preg_match_all('/<div class=\"MediaCard__InfoContainer-zlkxh-2 cDjZPS\">(.*?)<\/div>/', $html, $result);

		$termo = 'Ingredientes';

		$pattern = '/' . $termo . '/';//Padrão a ser encontrado na string $tags

		if(preg_match($pattern, $html)){ //descobrir se o que foi aberto é realmente uma receita
			$pieces = explode("Ingredientes", $html);
			$pieces2 = explode("Instruções", $pieces[1]);
			$pieces3 = explode("E-mail", $pieces2[1]);
			$ingredientes = $pieces2[0];
			$preparo = explode(".", $pieces3[0]);
			$titulo = "COMO FAZER: ";
		}else{
			$titulo = "CONFIRA: ";
			$ingredientes = $html;
			$preparo = "";
		}

		//preg_match_all('/<div class=\"VideoRecipe h-recipe VideoRecipe__Container-sc-4pl27p-6 bHnvZH\">(.*?)<\/div>/', $html, $result);

		?>
		<title>Lista de Receitas</title>
		<link rel="stylesheet" type="text/css" href="basico.css">
	</head>
	
	<body>
	
	<div id="ini"><a href="index.php"><h1>Inicio</h1></a></div>
	<div id="titp"><h1>Receita na Hora</h1></div>
	<?php include("login_logoff.php"); ?>

	<div id="divpesquisa" class="divform">
			<?php echo $titulo?><br />
	</div>
	
	<ul>
		<?php
			if(is_array($preparo))
				echo "Ingredientes:"."<br><br><ul><li>";
			echo $ingredientes;
			if(is_array($preparo)){
				echo "</li></ul><br><br>"."Preparo:"."<br><br>";
				echo "<ol>";
				for($i = 0; $i < sizeof($preparo)-1; $i++){
					if($preparo[$i] != "" && $preparo[$i] != NULL)
					echo "<li>".$preparo[$i]."."."</li>";
				} 
				echo "</ol>";
			}	
			?>
	</ul>
	
	<?php
	if(isset($logado)){
		echo "<div id='divFav'>";

		echo "<form method='post' action='resultado2.php?Confira=$ing1'>";
		echo "<input type='hidden' name='favorito' value='$ing1'>";
		echo "<button type='submit'>Adicionar aos Favoritos</button>";
		echo "</form>";
		
		echo "</div>";
	}
	?>
	
    </body>
</html>
