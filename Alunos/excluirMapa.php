<?php

session_start();
date_default_timezone_set('america/sao_paulo');
include "../conexao.php";

$sql = "DELETE FROM `tb_mapa` WHERE `nr_idMapa` =".$_GET['id'];
$resultado = mysql_query($sql) or die(mysql_error());	
	
header("Location: mapa.php?cpf=".$_GET['cpf']);

?>