<?php 

	require 'conexao.php';

	if(isset($_SESSION['iduser']) && !empty($_SESSION['iduser'])){


	}else{
		header("Location: home.html");
	}

	if(($_SESSION['registro'])){

		$segundos = time() - $_SESSION['registro'];

	}

	if( $segundos > $_SESSION['limite']){

		unset($_SESSION['registro']);
		unset($_SESSION['limite']);
		session_destroy();
		header("Location: home.html");
	}

	else{
		$_SESSION['registro'] = time();
	}

?>