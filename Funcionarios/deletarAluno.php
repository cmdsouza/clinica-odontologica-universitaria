<?php

session_start();
date_default_timezone_set('america/sao_paulo');
include "../conexao.php";

$cpf = $_GET['cpf'];

$sql3 = "DELETE FROM `tb_aluno` WHERE `nr_cpfAluno`='".$cpf."'";
$resultado3 = mysql_query($sql3) or die(mysql_error());

$_SESSION['mensagem'] = "Aluno Deletado";
header("Location: cadastrarAluno.php");


?>