<?php

session_start();
include "../conexao.php";
date_default_timezone_set('America/Sao_Paulo');

header('Content-Type: text/html; charset=utf-8');
	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');

$paciente = $_POST['paciente'];
echo $id = $_POST['id'];

$sql = "

UPDATE `tb_anamnese` SET `1`='".$_POST['1']."', `2`='".$_POST['2']."',`3`='".$_POST['3']."',`4`='".$_POST['4']."',`5`='".$_POST['5']."',`6`='".$_POST['6']."',`7`='".$_POST['7']."',`8`='".$_POST['8']."',`9`='".$_POST['9']."',`10`='".$_POST['10']."',`11`='".$_POST['11']."',`12`='".$_POST['12']."',`13`='".$_POST['13']."',`14`='".$_POST['14']."',`15`='".$_POST['15']."',`16`='".$_POST['16']."',`17`='".$_POST['17']."',`18`='".$_POST['18']."',`19`='".$_POST['19']."',`20`='".$_POST['20']."',`21`='".$_POST['21']."',`22`='".$_POST['22']."',`23`='".$_POST['23']."',`24`='".$_POST['24']."',`25`='".$_POST['25']."',`26`='".$_POST['26']."',`27`='".$_POST['27']."' WHERE nr_idAnamnese=".$id;

$resultado = mysql_query($sql) or die(mysql_error());

header("Location: anamnese.php?cpf=".$paciente);
?>