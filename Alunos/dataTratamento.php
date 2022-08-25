<?php

session_start();
include "../conexao.php";
date_default_timezone_set('america/sao_paulo');

header('Content-Type: text/html; charset=utf-8');
	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');

$id = $_POST['id'];
$paciente = $_POST['cpf'];
$data = $_POST['data'];

if(isset($_POST['tipo'])){
	if($_POST['tipo'] == 'infantil'){
		$sqlNome = "UPDATE `tb_odontogramainfantil` SET `dt_aprovacao`='".date("d/m/Y", strtotime($data))."', nm_situacao ='Realizado' WHERE `nr_idOdontogramaInfantil`=".$id;
		$resultadoNome = mysql_query($sqlNome) or die();

		header("Location: odontogramainfantil.php?cpf=".$paciente);
	}
}else{

	$sqlNome = "UPDATE `tb_odontograma` SET `dt_realizacao`='".date("d/m/Y", strtotime($data))."', nm_situacao ='Realizado' WHERE `nr_idOdontograma`=".$id;
	$resultadoNome = mysql_query($sqlNome) or die();

	header("Location: odontograma.php?cpf=".$paciente."&semestre=".$_POST['semestre']);

}
?>