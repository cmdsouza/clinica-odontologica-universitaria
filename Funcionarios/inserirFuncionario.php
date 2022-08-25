<?php

session_start();
include "../conexao.php";

$aleatorio = mt_rand(1000, 9999);
$numImg = 0;
$numImg2 = 0;

while(($numImg != 0) && ($numImg2 != 0)){
	$sqlNome = "SELECT * FROM tb_funcionarios WHERE nr_cpfFuncionario = '".$aleatorio."'";
	$resultadoNome = mysql_query($sqlNome) or die();
	$numImg = mysql_num_rows($resultadoNome);
	
	$sqlNome2 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$aleatorio."'";
	$resultadoNome2 = mysql_query($sqlNome2) or die();
	$numImg2 = mysql_num_rows($resultadoNome2);
	
	$aleatorio = mt_rand(1000, 9999);
}

$cpf = $aleatorio;


$nome = $_POST['nome'];
$email = $_POST['email'];
$tipo = $_POST['tipo'];
$senha = '12345678';

$sql2 = "INSERT INTO tb_funcionarios(nr_cpfFuncionario, nm_senha, nm_nomeFuncionario, nm_emailFuncionario, nm_tipo) VALUES ('".$cpf."', '".$senha."', '".$nome."', '".$email."', '".$tipo."')";
$resultado2 = mysql_query($sql2) or die();


$_SESSION['mensagem'] = "Colaborador Cadastrado";
header("Location: gerenciarFuncionario.php");


?>