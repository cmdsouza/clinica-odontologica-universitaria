<?php

session_start();
date_default_timezone_set('america/sao_paulo');
include "../conexao.php";

$cpf = $_GET['cpf'];
$id = $_GET['id'];

$sql3 = "DELETE FROM `tb_paciente` WHERE `nr_cpfPaciente`='".$cpf."'";
$resultado3 = mysql_query($sql3) or die(mysql_error());

$sql4 = "DELETE FROM `tb_endereco` WHERE `nr_idEndereco`=".$id;
$resultado4 = mysql_query($sql4) or die(mysql_error());

$sqlNome4 = "SELECT * FROM tb_consulta WHERE nr_cpfPaciente = '".$cpf."'";
$resultadoNome4 = mysql_query($sqlNome4) or die();
while($linhaNome4 = mysql_fetch_array($resultadoNome4)){
	$sql4 = "DELETE FROM `tb_consulta` WHERE `nr_idConsulta`=".$linhaNome4['nr_idConsulta'];
	$resultado4 = mysql_query($sql4) or die(mysql_error());
}

$_SESSION['mensagem'] = "Paciente Excluído";
header("Location: gerenciarPaciente.php");


?>