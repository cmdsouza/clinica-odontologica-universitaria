<?php

session_start();
include "../conexao.php";

$id = $_GET['id'];
$paciente = $_GET['cpf'];

if(isset($_GET['tipo'])){
	if($_GET['tipo'] == 'infantil'){
		$sqlNome = "DELETE FROM `tb_odontogramainfantil` WHERE `nr_idOdontogramaInfantil`=".$id;
		$resultadoNome = mysql_query($sqlNome) or die();

		header("Location: odontogramainfantil.php?cpf=".$paciente);
	} 
}else{

	$sqlNome = "DELETE FROM `tb_odontograma` WHERE `nr_idOdontograma`=".$id;
	$resultadoNome = mysql_query($sqlNome) or die();

	header("Location: odontograma.php?cpf=".$paciente."&semestre=".$_GET['semestre']);
	
}
?>