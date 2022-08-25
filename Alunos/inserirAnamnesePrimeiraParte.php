<?php

session_start();
include "../conexao.php";
date_default_timezone_set('America/Sao_Paulo');

$dupla = $_POST['dupla'];
$paciente = $_POST['paciente'];
$data = $_POST['data'];
$preenchimento = date("d/m/Y", strtotime($data));

$r1 = $_POST['1']."-".$_POST['1a'];
$r2 = $_POST['2'];
$r3 = $_POST['3']."-".$_POST['3a']."-".$_POST['3b'];
$r4 = $_POST['4']."-".$_POST['4a'];

if(!isset($_POST['5a'])){
	$p5a = "";
}else{
	$p5a = $_POST['5a'];
}

if(!isset($_POST['5b'])){
	$p5b = "";
}else{
	$p5b = $_POST['5b'];
}

if(!isset($_POST['5c'])){
	$p5c = "";
}else{
	$p5c = $_POST['5c'];
}

if(!isset($_POST['5d'])){
	$p5d = "";
}else{
	$p5d = $_POST['5d'];
}

$r5 = $_POST['5']."-".$p5a."-".$p5b."-".$p5c."-".$p5d."-".$_POST['5e'];

$r6 = $_POST['6']."-".$_POST['6a']."-".$_POST['6b'];
$r7 = $_POST['7']."-".$_POST['7a'];
$r8 = $_POST['8']."-".$_POST['8a'];
$r9 = $_POST['9']."-".$_POST['9a']."-".$_POST['9b'];
$r10 = $_POST['10']."-".$_POST['10a'];
$r11 = $_POST['11']."-".$_POST['11a'];
$r12 = $_POST['12']."-".$_POST['12a']."-".$_POST['12b']."-".$_POST['12c'];
$r13 = $_POST['13'];
$r14 = $_POST['14'];
$r15 = $_POST['15']."-".$_POST['15a'];
$r16 = $_POST['16']."-".$_POST['16a']."-".$_POST['16b'];
$r17 = $_POST['17'];
$r18 = $_POST['18'];
$r19 = $_POST['19'];
$r20 = $_POST['20'];
$r21 = $_POST['21'];
$r22 = $_POST['22'];
$r23 = $_POST['23'];
$r24 = $_POST['24'];
$r25 = $_POST['25'];
$r26 = $_POST['26']."-".$_POST['26a'];


$sql = "INSERT INTO `tb_anamnese`(`nr_idAnamnese`, `nr_idDupla`, `nr_cpfPaciente`, `dt_preenchimento`,`nm_tipo`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`, `24`, `25`, `26`, `27`, `28`, `29`, `30`, `31`, `32`, `33`, `34`, `35`, `36`, `37`, `38`, `39`, `40`, `41`, `42`, `43`, `44`, `45`, `46`, `47`, `48`, `49`, `50`, `51`, `52`, `53`, `54`, `55`, `56`, `57`, `58`, `59`, `60`, `61`, `62`, `63`, `64`, `65`, `66`, `67`, `68`, `69`, `70`) VALUES (NULL, ".$dupla.", '".$paciente."', '".$preenchimento."', 'Adulto', '".$r1."', '".$r2."', '".$r3."', '".$r4."', '".$r5."', '".$r6."', '".$r7."', '".$r8."', '".$r9."', '".$r10."', '".$r11."', '".$r12."', '".$r13."', '".$r14."', '".$r15."', '".$r16."', '".$r17."', '".$r18."', '".$r19."', '".$r20."', '".$r21."', '".$r22."', '".$r23."', '".$r24."', '".$r25."', '".$r25."', '".$r26."', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R')";

$resultado = mysql_query($sql) or die(mysql_error());

header("Location: anamnese2.php?cpf=".$paciente);

?>