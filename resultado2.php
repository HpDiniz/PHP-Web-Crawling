<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<?php
		
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
			$ingredientes = "Ingredientes:"."<br>".$pieces2[0];
			$preparo = "<br><br>"."Preparo:"."<br>".$pieces3[0];
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
	<h1>Receitas</h1>

	<div id="divpesquisa" class="divform">
			<?php echo $titulo?><br />
	</div>
	
	<ul>
		<?php
			//echo " <br> Ingredientes: <br><br>   ";
			echo $ingredientes;
			//echo " <br><br><br>  Preparo: <br><br>   ";
			echo $preparo;
			?>
	</ul>
    </body>
</html>
