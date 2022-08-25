<?php

session_start();
date_default_timezone_set('america/sao_paulo');
include "../conexao.php";

$id = $_GET['id'];

	
$sql = "DELETE FROM `tb_placa` WHERE `nr_idPlaca` =".$id;
$resultado = mysql_query($sql) or die(mysql_error());	
	
header("Location: periodontia.php?cpf=".$_GET['cpf']);

?>