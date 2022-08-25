<?php

session_start();
date_default_timezone_set('america/sao_paulo');
include "../conexao.php";

$idConsulta = $_POST['idConsulta'];
$observacao = $_POST['observacao'];

if($observacao == ""){
	$sql2 = "UPDATE tb_consulta SET nr_situacao='Atendido' WHERE nr_idConsulta=".$idConsulta;
	$resultado2 = mysql_query($sql2) or die();
}else{
	$sql2 = "UPDATE tb_consulta SET nr_situacao='Atendido', nm_observacao='".$observacao."' WHERE nr_idConsulta=".$idConsulta;
	$resultado2 = mysql_query($sql2) or die();
}

header("Location: alunos.php");

?>