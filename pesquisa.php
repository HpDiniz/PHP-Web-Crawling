<?php

include("config.php");

if( !isset($_GET['ingrediente1']) && !isset($_GET['ingrediente2']) && !isset($_GET['ingrediente3']) ){
	alert("Nenhum ingrediente recebido!");
	redirect("index.html");
	exit;
}

$ingr1 = $_GET['ingrediente1'];

$mysqli = new mysqli($host, $user, $pass, $db);
if ($mysqli->connect_errno) {
	echo $mysqli->connect_error;
	$mysqli->close();
	exit;
}

$receitas = $mysqli->query("SELECT ingrediente.nome AS inome, receita.nome AS rnome, receita.preparo, receita_ingrediente.IDreceita FROM ((receita_ingrediente INNER JOIN ingrediente ON receita_ingrediente.IDingrediente = ingrediente.IDingrediente) INNER JOIN receita ON receita_ingrediente.IDreceita = receita.IDreceita AND ingrediente.nome = '$ingr1')");

if ($receitas->num_rows == 0) {
	echo "Nenhuma receita encontrada..";
	exit;
}

function alert($msg) {
	echo "<script type='text/javascript'>alert('$msg');</script>";
}
function redirect($url) {
	echo "<script>window.location.href='$url';</script>";
}
?>