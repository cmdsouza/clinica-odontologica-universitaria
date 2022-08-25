<?php

session_start();
date_default_timezone_set('america/sao_paulo');
include "../conexao.php";

$paciente = $_POST['cpf'];
$data = $_POST['data'];

$login = $_POST['login'];
$senha = $_POST['senha'];
					
$sqlAnam2 = "SELECT * FROM tb_funcionarios WHERE nr_cpfFuncionario ='".$login."'";
$resultadoAnam2 = mysql_query($sqlAnam2) or die();
while($linhaAnam2 = mysql_fetch_array($resultadoAnam2)){
	$senhaCerta = $linhaAnam2['nm_senha'];
}
					
if($senha == $senhaCerta){
	$sql = "DELETE FROM `tb_periograma` WHERE nr_cpfPaciente = '".$paciente."' AND dt_data = '".$data."'";
	$resultado = mysql_query($sql) or die(mysql_error());
}else{}	
	
header("Location: periodontia.php?cpf=".$paciente);

?>