<?php

include "../conexao.php";

$aluno1 = $_GET['cpf1'];
$periodo1 = $_GET['periodo1'];
$aluno2 = $_GET['cpf2'];
$periodo2 = $_GET['periodo2'];

$sqlNome2 = "UPDATE `tb_aluno` SET `nr_periodo`=".($periodo1-1)." WHERE nr_cpfAluno = '".$aluno1."'";
$resultadoNome2 = mysql_query($sqlNome2) or die();

$sqlNome2 = "UPDATE `tb_aluno` SET `nr_periodo`=".($periodo2-1)." WHERE nr_cpfAluno = '".$aluno2."'";
$resultadoNome2 = mysql_query($sqlNome2) or die();

$_session['alerta'] = 'cadastrado';
header("Location: gerenciarDuplas.php");
		
?>