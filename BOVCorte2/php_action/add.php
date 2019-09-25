<?php
session_start();
require_once 'php_action/conection.php';

if(isset($_POST['cadastrar'])):
$nome =  $_POST['nome'];
$endereco =  $_POST['endereco'];
$cnpj =  $_POST['cnpj'];
$ins = $_POST['ins'];


$sql = "INSERT INTO fazenda (nome, endereco, cnpj, num_escricao_estadual) VALUES ('{$nome}', '{$endereco}','{$cnpj}','{$ins}')";
	if (mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
	header('Location: ../cad_fazend.php?sucesso');
	else:
	$_SESSION['mensagem'] = "Erro ao cadastrar";
	header('Location: ../cad.fazend.php?erro');
	endif;

endif;
?>