<?php
session_start();
include "../conexao.php";
date_default_timezone_set('America/Sao_Paulo');

$nome = $_POST['nome'];
$senha = '12345678';
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$nascimento = $_POST['nascimento'];
$CEP = $_POST['CEP'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$complemento = $_POST['complemento'];
$sexo = $_POST['sexo'];
$estadoCivil = $_POST['estadoCivil'];
$rg = $_POST['rg'];
$email = $_POST['email'];

$onde = $_POST['onde'];

$sql = "INSERT INTO tb_endereco(nr_idEndereco, nr_cep, nm_rua, nm_bairro, nm_cidade, nm_complemento) VALUES (NULL, '".$CEP."', '".$rua."', '".$bairro."', '".$cidade."', '".$complemento."')";
$resultado = mysql_query($sql) or die();

$sqlEnd = "SELECT * FROM tb_endereco WHERE nr_cep = '".$CEP."' AND  nm_rua = '".$rua."' AND nm_bairro = '".$bairro."' AND nm_cidade = '".$cidade."' AND  nm_complemento = '".$complemento."'";
$resultadoEnd = mysql_query($sqlEnd) or die();
while($linhaEnd = mysql_fetch_array($resultadoEnd)){
	$endereco = $linhaEnd['nr_idEndereco'];
}

$data = date("d/m/Y", strtotime($nascimento));

$sql2 = "INSERT INTO tb_paciente(nr_cpfPaciente, nm_senha, nm_nomePaciente, nr_telefone, nm_pagamento, nr_idEndereco, dt_nascimento, nm_genero, nr_rg, nm_estadoCivil, nm_email, `nm_encerrado`, `nm_motivoEncerramento`) VALUES ('".$cpf."', '".$senha."', '".$nome."', '".$telefone."', 'Pendente', ".$endereco.", '".$data."', '".$sexo."', '".$rg."', '".$estadoCivil."', '".$email."', 'Nao', 'N/R')";
$resultado2 = mysql_query($sql2) or die(mysql);




if($onde == 'index'){
	$_SESSION['mensagem'] = "Cadastrado. Entraremos em contato com você";
	header("Location: ../index.php");
}else{
	$_SESSION['mensagem'] = "Paciente Cadastrado";
	header("Location: cadastrarPaciente.php");
}

?>