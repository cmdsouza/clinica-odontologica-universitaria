<?php

session_start();
include "../conexao.php";

$paciente = $_POST['paciente'];

$sqlNome = "SELECT * FROM tb_anamnese WHERE nr_cpfPaciente ='".$paciente."'";
$resultadoNome = mysql_query($sqlNome) or die(mysql_error());
while($linhaNome = mysql_fetch_array($resultadoNome)){
	$id = $linhaNome['nr_idAnamnese'];
}

if(!isset($_POST['51a'])){
	$r51 = $_POST['51b'];
}else{
	$r51 = $_POST['51a'];
}

if(!isset($_POST['52a'])){
	$r52 = $_POST['52b'];
}else{
	$r52 = $_POST['52a'];
}

if(!isset($_POST['53a'])){
	$r53 = $_POST['53b'];
}else{
	$r53 = $_POST['53a'];
}

if(!isset($_POST['54a'])){
	$r54 = $_POST['54b'];
}else{
	$r54 = $_POST['54a'];
}

$sql = "UPDATE `tb_anamnese` SET `51`='".$r51."', `52`='".$r52."', `53`='".$r53."', `54`='".$r54."' WHERE nr_idAnamnese =".$id;

$resultado = mysql_query($sql) or die(mysql_error());

header("Location: anamnese4.php?cpf=".$paciente);

?>