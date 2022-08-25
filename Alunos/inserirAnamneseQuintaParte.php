<?php

session_start();
include "../conexao.php";

$paciente = $_POST['paciente'];

$sqlNome = "SELECT * FROM tb_anamnese WHERE nr_cpfPaciente ='".$paciente."'";
$resultadoNome = mysql_query($sqlNome) or die(mysql_error());
while($linhaNome = mysql_fetch_array($resultadoNome)){
	$id = $linhaNome['nr_idAnamnese'];
}

$r63 = $_POST['63'];
$r64 = $_POST['64']."-".$_POST['64a'];
$r65 = $_POST['65'];
$r66 = $_POST['66'];
$r67 = $_POST['67'];
$r68 = $_POST['68'];

if(!isset($_POST['69a'])){
	$r69a = "";
}else{
	$r69a = $_POST['69a'];
}

if(!isset($_POST['69b'])){
	$r69b = "";
}else{
	$r69b = $_POST['69b'];
}

if(!isset($_POST['69c'])){
	$r69c = "";
}else{
	$r69c = $_POST['69c'];
}

if(!isset($_POST['69d'])){
	$r69d = "";
}else{
	$r69d = $_POST['69d'];
}

if(!isset($_POST['69e'])){
	$r69e = "";
}else{
	$r69e = $_POST['69e'];
}

$r69 = $_POST['69']."-".$r69a."-".$r69b."-".$r69c."-".$r69d."-".$r69e;

$r70 = $_POST['70'];
						
$sql = "UPDATE `tb_anamnese` SET `63`='".$r63."', `64`='".$r64."', `65`='".$r65."', `66`='".$r66."', `67`='".$r67."', `68`='".$r68."', `69`='".$r69."', `70`='".$r70."' WHERE nr_idAnamnese =".$id;

$resultado = mysql_query($sql) or die(mysql_error());

header("Location: anamnese.php?cpf=".$paciente);

?>