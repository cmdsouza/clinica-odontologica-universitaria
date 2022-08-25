<?php

session_start();
include "../conexao.php";
date_default_timezone_set('America/Sao_Paulo');

$paciente = $_GET['cpf'];

$sql = "DELETE FROM `tb_anamnese` WHERE `nr_cpfPaciente`='".$paciente."'";

$resultado = mysql_query($sql) or die(mysql_error());

header("Location: anamnese.php?cpf=".$paciente);

?>