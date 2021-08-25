<?php

require_once("conexao.php");
	
	$permissao = 0;
	extract($_POST);

	if ($senhacad == $confirmsenha){
			$sql = "INSERT INTO usuario VALUES(0,?,?,?,?,?)";
			$comando = $pdo->prepare($sql);
			$comando->bindParam(1, $nome);
			$comando->bindParam(2, $email);
			$comando->bindParam(3, $senhacad);
			$comando->bindParam(4, $telefone);
			$comando->bindParam(5, $permissao);
			$comando->execute();

		echo "Usurio cadastro com sucesso";
		header("Location: formcadsucesso.php");

		
	}

	else{

		echo "Senhas não coencidem";
		header("Location: formcaderro.php");

	}



?>
		<!--<script>alert("Usurio cadastro com sucesso")</script>
		<meta http-equiv="refresh" content="0;url=home.html">-->