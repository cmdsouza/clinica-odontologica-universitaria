<?php

session_start();

date_default_timezone_set('america/sao_paulo');
header('Content-Type: text/html; charset=utf-8');
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

include "../conexao.php";

$paciente = $_POST['paciente'];
$dupla = $_POST['dupla'];
$dia = $_POST['dia'];
$procedimento = $_POST['procedimento'];
$horario = $_POST['horario'];
$obs = $_POST['obs'];

if(($horario == 'Entre 8:00 e 9:00') || ($horario == 'Entre 9:00 e 10:00') || ($horario == 'Entre 10:00 e 11:00') || ($horario == 'Entre 11:00 e 12:00')){
	
	echo $sqlNome = "SELECT * FROM tb_mapa WHERE (hr_horario = 'Entre 8:00 e 9:00' OR hr_horario = 'Entre 9:00 e 10:00' OR hr_horario = 'Entre 10:00 e 11:00' OR hr_horario = 'Entre 11:00 e 12:00') AND dt_data = '".date("d/m/Y", strtotime($dia))."' AND nm_procedimento = '".$procedimento."'";
	$resultadoNome = mysql_query($sqlNome) or die();
	echo $numImg = mysql_num_rows($resultadoNome);
	
	if($numImg < 5){
		$sql = "INSERT INTO `tb_mapa`(`nr_idMapa`, `nr_cpfPaciente`, `nr_idDupla`, `dt_data`, `nm_procedimento`, `hr_horario`, `nm_observacao`) VALUES (NULL, '".$paciente."', '".$dupla."', '".date("d/m/Y", strtotime($dia))."', '".$procedimento."', '".$horario."', '".$obs."')";
		$resultado = mysql_query($sql) or die(mysql_error());
	}else{
		$_SESSION['mensagem'] = "Já foram marcados 5 procedimentos no período escolhido";
	}
	
}

if(($horario == 'Entre 12:00 e 13:00') || ($horario == 'Entre 13:00 e 14:00') || ($horario == 'Entre 14:00 e 15:00') || ($horario == 'Entre 15:00 e 16:00')){
	$sqlNome = "SELECT * FROM tb_mapa WHERE (hr_horario = 'Entre 12:00 e 13:00' OR hr_horario = 'Entre 13:00 e 14:00' OR hr_horario = 'Entre 14:00 e 15:00' OR hr_horario = 'Entre 15:00 e 16:00') AND dt_data = '".date("d/m/Y", strtotime($dia))."' AND nm_procedimento = '".$procedimento."'";
	$resultadoNome = mysql_query($sqlNome) or die();
	$numImg = mysql_num_rows($resultadoNome);
	
	if($numImg < 5){
		$sql = "INSERT INTO `tb_mapa`(`nr_idMapa`, `nr_cpfPaciente`, `nr_idDupla`, `dt_data`, `nm_procedimento`, `hr_horario`, `nm_observacao`) VALUES (NULL, '".$paciente."', '".$dupla."', '".date("d/m/Y", strtotime($dia))."', '".$procedimento."', '".$horario."', '".$obs."')";
		$resultado = mysql_query($sql) or die(mysql_error());
	}else{
		$_SESSION['mensagem'] = "Já foram marcados 5 procedimentos no período escolhido";
	}
}

if(($horario == 'Entre 17:00 e 18:00') || ($horario == 'Entre 18:00 e 19:00') || ($horario == 'Entre 19:00 e 20:00') || ($horario == 'Entre 20:00 e 21:00') || ($horario == 'Entre 21:00 e 22:00')){
	$sqlNome = "SELECT * FROM tb_mapa WHERE (hr_horario = 'Entre 17:00 e 18:00' OR hr_horario = 'Entre 18:00 e 19:00' OR hr_horario = 'Entre 19:00 e 20:00' OR hr_horario = 'Entre 20:00 e 21:00') OR hr_horario = 'Entre 21:00 e 22:00' AND dt_data = '".date("d/m/Y", strtotime($dia))."' AND nm_procedimento = '".$procedimento."'";
	$resultadoNome = mysql_query($sqlNome) or die();
	$numImg = mysql_num_rows($resultadoNome);
	
	if($numImg < 5){
		$sql = "INSERT INTO `tb_mapa`(`nr_idMapa`, `nr_cpfPaciente`, `nr_idDupla`, `dt_data`, `nm_procedimento`, `hr_horario`, `nm_observacao`) VALUES (NULL, '".$paciente."', '".$dupla."', '".date("d/m/Y", strtotime($dia))."', '".$procedimento."', '".$horario."', '".$obs."')";
		$resultado = mysql_query($sql) or die(mysql_error());
	}else{
		$_SESSION['mensagem'] = "Já foram marcados 5 procedimentos no período escolhido";
	}
}	
	
header("Location: mapa.php?&cpf=".$paciente);

?>