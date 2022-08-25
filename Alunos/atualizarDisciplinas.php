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
$semestre = $_POST['semestre'];
$disciplina = $_POST['disciplina'];

$sqlDisc = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_periodo = '".$_POST['semestre']."'";
$resultadoDisc = mysql_query($sqlDisc) or die();
while($linhaDisc = mysql_fetch_array($resultadoDisc)){
	$disciplinasAntigas = $linhaDisc['nm_disciplina'];
}

if($_POST['acao'] == 'adicionar'){
	$disciplinaNova = $disciplinasAntigas.",".$disciplina;
	$sql = "UPDATE `tb_odontograma` SET `nm_disciplina`='".$disciplinaNova."' WHERE `nr_cpfPaciente` ='".$_POST['cpf']."' AND `nr_periodo` = '".$_POST['semestre']."'";
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
		header("Location: odontograma.php?cpf=".$_POST['cpf']."&semestre=".$_POST['semestre']);
	}else{
		
		$comma_separated = implode(",", $novo);
		$sql = "UPDATE `tb_odontograma` SET `nm_disciplina`='".$comma_separated."' WHERE `nr_cpfPaciente` ='".$_POST['cpf']."' AND `nr_periodo` = '".$_POST['semestre']."'";
		$resultado = mysql_query($sql) or die(mysql_error());
		
	}
	
}

header("Location: odontograma.php?cpf=".$_POST['cpf']."&semestre=".$_POST['semestre']);

?>