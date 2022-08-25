<?php

session_start();
date_default_timezone_set('america/sao_paulo');
include "../conexao.php";

$id = $_POST['id'];
$data = $_POST['data'];
$horario = $_POST['horario'];

$sql3 = "UPDATE `tb_consulta` SET `dt_dataAtendimento`='".$data."',`hr_horarioAtendimento`='".$horario."' WHERE `nr_idConsulta`=".$id;
$resultado3 = mysql_query($sql3) or die();

$_SESSION['mensagem'] = "Remarcação Efetuada";

header("Location: remarcarConsulta.php");


?>