<?php

session_start();
date_default_timezone_set('america/sao_paulo');
include "../conexao.php";

$disciplina = $_POST['disciplina'];
$aluno = $_POST['aluno'];
$turma = $_POST['turma'];
$periodo = $_POST['periodo'];
$data = $_POST['data'];
$r1 = $_POST['1'];
$r2 = $_POST['2'];
$r3 = $_POST['3'];
$r4 = $_POST['4'];
$r5 = $_POST['5'];
$r6 = $_POST['6'];

$sql = "INSERT INTO `tb_producaoclinica`(`nr_idProducao`, `nr_cpfAluno`, `nm_turma`, `dt_data`, `1`, `2`, `3`, `4`, `5`, `6`, `nm_validacao`, `nm_disciplina`) VALUES (NULL, '".$aluno."', '".$turma." - ".$periodo."', '".$data."', '".$r1."', '".$r2."', '".$r3."', '".$r4."', '".$r5."', '".$r6."', 'N/R', '".$disciplina."')";
$resultado = mysql_query($sql) or die(mysql_error());

header("Location: producaoClinica.php?cpf=".$aluno);

?>