<?php

session_start();
include "../conexao.php";
date_default_timezone_set('America/Sao_Paulo');

$paciente = $_POST['paciente'];
$data = $_POST['data'];
$horario = $_POST['horario'];
$sala = $_POST['sala'];
$dupla = $_POST['dupla'];
$motivo = $_POST['motivo'];

$sqlEnd2 = "SELECT * FROM tb_consulta WHERE nr_cpfPaciente = '".$paciente."' ORDER BY nm_numeroConsulta LIMIT 1";
$resultadoEnd2 = mysql_query($sqlEnd2) or die();
$numImg = mysql_num_rows($resultadoEnd2);
if($numImg != 0){
	while($linhaEnd2 = mysql_fetch_array($resultadoEnd2)){
		$numero = $linhaEnd2['nm_numeroConsulta'] + 1;
	}
}else{
	$numero = 1;
}

$sql = "INSERT INTO `tb_consulta`(`nr_idConsulta`, `nr_idSala`, `nr_idDupla`, `dt_dataAtendimento`, `hr_horarioAtendimento`, `nr_idProcedimento`, `nr_cpfPaciente`, `nr_situacao`, `nm_observacao`, `nm_numeroConsulta`) VALUES (NULL, ".$sala.", ".$dupla.", '".date('d/m/Y', strtotime($data))."', '".$horario."', '".$motivo."', '".$paciente."', 'Nao Confirmado', '', ".$numero.")";
$resultado = mysql_query($sql) or die();

$_SESSION['mensagem'] = "Marcação Efetuada";

header("Location: marcarConsulta.php");

?>