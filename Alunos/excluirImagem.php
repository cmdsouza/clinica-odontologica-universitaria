<?php

session_start();
date_default_timezone_set('america/sao_paulo');
include "../conexao.php";

$sql = "DELETE FROM `tb_radiografias` WHERE `nr_idRadiografia` =".$_GET['id'];
$resultado = mysql_query($sql) or die(mysql_error());	
	
header("Location: radiografias.php?cpf=".$_GET['cpf']);

?>