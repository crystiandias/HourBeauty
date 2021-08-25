<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['emailcad'];
$telefone = $_POST['telefone'];
$senha = $_POST['senhacad'];
$confirmar = $_POST['confirmsenha'];

if($senha != $confirmar){

	echo "Senhas não cencidem";

}
else{

	$sql = "insert into usuario (nome, email, telefone, senha) values ('$nome', '$email', '$telefone', '$senha')";
	$salvar = mysqli_query($conexao, $sql);

	echo "Cadastrado!";

}
?>

