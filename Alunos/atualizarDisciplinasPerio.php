<?php

session_start();
date_default_timezone_set('america/sao_paulo');
include "../conexao.php";

header('Content-Type: text/html; charset=utf-8');
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

$cpf = $_POST['cpf'];
$disciplina = $_POST['disciplina'];

$sqlDisc = "SELECT * FROM tb_periograma WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND dt_data = '".$_POST['data']."'";
$resultadoDisc = mysql_query($sqlDisc) or die();
while($linhaDisc = mysql_fetch_array($resultadoDisc)){
	$disciplinasAntigas = $linhaDisc['nm_disciplina'];
}

if($_POST['acao'] == 'adicionar'){
	$disciplinaNova = $disciplinasAntigas.",".$disciplina;
	$sql = "UPDATE `tb_periograma` SET `nm_disciplina`='".$disciplinaNova."' WHERE `nr_cpfPaciente` ='".$_POST['cpf']."' AND dt_data = '".$_POST['data']."'";
	$resultado = mysql_query($sql) or die(mysql_error());
}

if($_POST['acao'] == 'excluir'){
	$pieces = explode(",", $disciplinasAntigas);
	$tamanho = count($pieces);
	
	$a = 0;
	$b = 0;
	$novo = array();
	while($a < $tamanho){
		if($pieces[$a] == $disciplina){
			$b = $b + 1;
		}else{
			$novo[$a] = $pieces[$a];
		}
		$a = $a + 1;
	}
	
	if($b == 0){
		header("Location: periodontia.php?cpf=".$_POST['cpf']);
	}else{
		
		$comma_separated = implode(",", $novo);
		echo $sql = "UPDATE `tb_periograma` SET `nm_disciplina`='".$comma_separated."' WHERE `nr_cpfPaciente` ='".$_POST['cpf']."' AND dt_data = '".$_POST['data']."'";
		$resultado = mysql_query($sql) or die(mysql_error());
		
	}
	
}

header("Location: periodontia.php?cpf=".$_POST['cpf']);

?>