<?php

session_start();
date_default_timezone_set('america/sao_paulo');
include "../conexao.php";

header('Content-Type: text/html; charset=utf-8');
	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');

	
if($_POST['estado'] == 'fechar'){
	
	$sql = "UPDATE `tb_paciente` SET `nm_encerrado`='Sim',`nm_motivoEncerramento`='".$_POST['motivo']."' WHERE `nr_cpfPaciente`='".$_POST['cpf']."'";
	$resultado = mysql_query($sql) or die(mysql_error());
	
}else{
	
	$sql = "UPDATE `tb_paciente` SET `nm_encerrado`='Nao',`nm_motivoEncerramento`='N/R' WHERE `nr_cpfPaciente`='".$_POST['cpf']."'";
	$resultado = mysql_query($sql) or die(mysql_error());

}

header("Location: odontograma.php?cpf=".$_POST['cpf']."&semestre=".$_POST['semestre']);

?>