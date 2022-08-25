<?php

session_start();
date_default_timezone_set('america/sao_paulo');
include "../conexao.php";

header('Content-Type: text/html; charset=utf-8');
	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');

$cpf = $_GET['cpf'];
$id = $_GET['id'];
	
$sql = "UPDATE `tb_notificacao` SET `nm_estado`='Lida' WHERE `nr_idNotificacao`=".$id;
$resultado = mysql_query($sql) or die(mysql_error());

header("Location: alunos.php");

?>