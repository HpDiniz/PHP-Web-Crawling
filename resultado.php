<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<?php
		
		include_once('simple_html_dom.php');

		if(!isset($_GET['ingrediente1']))
			$ing1 = "";
		else
			$ing1 = trim($_GET['ingrediente1']);

		if(!isset($_GET['ingrediente2']))
			$ing2 = "";
		else
			$ing2 = trim($_GET['ingrediente2']);

		if(!isset($_GET['ingrediente3']))
			$ing3 = "";
		else
			$ing3 = trim($_GET['ingrediente3']);

		$url = "https://www.tastemade.com.br/pesquisa?q=".$ing1."+".$ing2."+".$ing3;

		$html = (file_get_html($url));

		$tag = "videos";

		$pattern = '/' . $tag . '/';//Padrão a ser encontrado na string $tags

		preg_match_all('/<div class=\"MediaCard__InfoContainer-zlkxh-2 cDjZPS\">(.*?)<\/div>/', $html, $result);

	//	foreach($html->getElementById("MediaCard__Thumbnail-zlkxh-1 mFqrq") as $element){
	//		echo $element
	//		if(preg_match($pattern, $element)){
	//	    	echo $element->last_child->href . '<br>';
	///	    }
	//	}

		//echo $html;

		//echo ($html);
		//include("pesquisa.php");
		?>
		<title>Lista de Receitas</title>
		<link rel="stylesheet" type="text/css" href="basico.css">
	</head>
	
	<body>
	<h1>Receitas</h1>

	<div id="divpesquisa" class="divform">
		<form action="resultado.php" method="get" id="formreceita">
			Exibindo receitas com:<br />
			<input type="text" name="ingrediente1" value="<?php echo $ing1?>"> <br />
			<input type="text" name="ingrediente2" value="<?php echo $ing2?>"> <br />
			<input type="text" name="ingrediente3" value="<?php echo $ing3?>"> <br />
			<input type="submit" value="Pesquisar">
		</form>
	</div>
	
	<ul>
		<?php

		$saudavel = array("<a href", "a>");
		$saboroso   = array("<input type='submit' class='buton' name='Confira' value", " ");

		if(sizeof($result[0]) == 0)
			echo "Nenhuma receita encontrada";
		else{
			for($i = 0; $i < sizeof($result[0]); $i++){
				echo "<li class='receita'>";
				$Modhtml = str_replace($saudavel, $saboroso, str_get_html($result[0][$i]));
				//$Modhtml->find('div[id=MediaCard__Thumbnail-zlkxh-1 mFqrq]', 0)->innertext = 'foo';
				?> <form action="/inf493/resultado2.php" method="get"> <?php
				echo $Modhtml; // Output: <div id="hello">foo</div><div id="world" class="bar">World</div>
				echo "</li>";
			}  ?> </form> <?php
		}

		/*
		while ($row = $receitas->fetch_assoc()) {
			echo "<li class='receita'>";
			echo "<h2>";
			echo $row['rnome'];
			echo "</h2>";
			echo "<h4>Ingredientes:</h4>";
			echo "<ul>";
			$idr = $row['IDreceita'];
			$ingredientes = $mysqli->query("SELECT ingrediente.nome AS inome, receita_ingrediente.quantidade FROM ((receita_ingrediente INNER JOIN ingrediente ON receita_ingrediente.IDingrediente = ingrediente.IDingrediente) INNER JOIN receita ON receita_ingrediente.IDreceita = receita.IDreceita AND receita_ingrediente.IDreceita = '$idr')");
			while ($row2 = $ingredientes->fetch_assoc()) {
				echo "<li>";
				echo $row2['inome'];
				echo "</li>";
			}
			echo "</ul>";
			echo "<h4>Preparo:</h4>";
			echo "<p>";
			echo $row['preparo'];
			echo "</p>";
			echo "</li>";
		}*/
		?>
	</ul>
    </body>
</html>
