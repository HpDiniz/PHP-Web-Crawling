<?php
	session_start();

	if( isset($_POST['loginControl']) && $_POST['loginControl'] == "logoff" ){
		unset($_SESSION['login']);
		unset($_SESSION['senha']);
	}
	else if( isset($_POST['loginControl']) && isset($_POST['login']) && isset($_POST['senha']) ){

		if( $_POST['loginControl'] == "logon" && $_POST['login'] == "Teste" && $_POST['senha'] == "123" ){
			$_SESSION['login'] = $_POST['login'];
			$_SESSION['senha'] = $_POST['senha'];
		}
		else{
			unset ($_SESSION['login']);
			unset ($_SESSION['senha']);
		}

	}

	if( !isset($_SESSION['login']) && !isset($_SESSION['senha']) ){
		unset($_SESSION['login']);
		unset($_SESSION['senha']);
	}
	else{
		$logado = $_SESSION['login'];
	}
?>