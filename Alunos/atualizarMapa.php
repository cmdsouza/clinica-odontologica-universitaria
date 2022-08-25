<?php

session_start();

date_default_timezone_set('america/sao_paulo');
header('Content-Type: text/html; charset=utf-8');
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

include "../conexao.php";

$paciente = $_POST['cpf'];
$dupla = $_POST['dupla'];
//$dia = $_POST['dia'];
$procedimento = $_POST['procedimento'];
//$horario = $_POST['horario'];
$obs = $_POST['obs'];
$id = $_POST['id'];

$sql = "UPDATE `tb_mapa` SET `nr_idDupla`=".$dupla.",`nm_procedimento`='".$procedimento."',`nm_observacao`='".$obs."' WHERE `nr_idMapa`=".$id;
$resultado = mysql_query($sql) or die(mysql_error());
	
header("Location: mapa.php?&cpf=".$paciente);

?>