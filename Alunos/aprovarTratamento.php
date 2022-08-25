<?php

session_start();
include "../conexao.php";
date_default_timezone_set('America/Sao_Paulo');

header('Content-Type: text/html; charset=utf-8');
	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');

$login = $_POST['login'];
$senha = $_POST['senha'];

if(isset($_POST['tipo'])){
	if($_POST['tipo'] == 'infantil'){
	
		$sqlAnam2 = "SELECT * FROM tb_funcionarios WHERE nr_cpfFuncionario ='".$login."' AND nm_senha='".$senha."' AND nm_tipo = 'Professor'";
		$resultadoAnam2 = mysql_query($sqlAnam2) or die();
		$numImg = mysql_num_rows($resultadoAnam2);
		if($numImg == 0){
			header("Location: odontogramainfantil.php?cpf=".$_POST['paciente']);
		}else{
			while($linhaAnam2 = mysql_fetch_array($resultadoAnam2)){
				$prof = $linhaAnam2['nm_nomeFuncionario'];
			}
		}

		$paciente = $_POST['paciente'];
		$tratamento = $_POST['tratamento'];


		$sql = "UPDATE `tb_odontogramainfantil` SET `nm_situacao`='Realizado',`nm_professor`='".$login."' WHERE `nr_idOdontogramaInfantil`=".$tratamento;
		$resultado = mysql_query($sql) or die(mysql_error());

		header("Location: odontogramainfantil.php?cpf=".$paciente);
	
	}
}else{
	$sqlAnam2 = "SELECT * FROM tb_funcionarios WHERE nr_cpfFuncionario ='".$login."' AND nm_senha='".$senha."' AND nm_tipo = 'Professor'";
	$resultadoAnam2 = mysql_query($sqlAnam2) or die();
	$numImg = mysql_num_rows($resultadoAnam2);
	if($numImg == 0){
		header("Location: odontograma.php?cpf=".$_POST['paciente']."&semestre=".$_POST['semestre']);
	}else{
		while($linhaAnam2 = mysql_fetch_array($resultadoAnam2)){
			$prof = $linhaAnam2['nm_nomeFuncionario'];
		}
	}

	$paciente = $_POST['paciente'];
	$tratamento = $_POST['tratamento'];


	$sql = "UPDATE `tb_odontograma` SET `nm_situacao`='Realizado',`nm_professor`='".$login."' WHERE `nr_idOdontograma`=".$tratamento;
	$resultado = mysql_query($sql) or die(mysql_error());

	header("Location: odontograma.php?cpf=".$paciente."&semestre=".$_POST['semestre']);
	
}

?>