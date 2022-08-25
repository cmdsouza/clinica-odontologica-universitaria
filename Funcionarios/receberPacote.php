<?php

session_start();
include "../conexao.php";

$identificador = $_POST['id'];
$pacotes = $_POST['pacotes'];

$sqlNome3 = "SELECT * FROM tb_pacoteesterilizacao  WHERE nm_identificador = '".$identificador."'";
$resultadoNome3 = mysql_query($sqlNome3) or die();
while($linhaNome3 = mysql_fetch_array($resultadoNome3)){
	$quant = $linhaNome3['nr_quantidadePacotes'];
}

if($pacotes == $quant){
	$sql2 = "UPDATE tb_pacoteesterilizacao SET nm_estado='Em Processamento', nm_local='Na Esterilizacao' WHERE nm_identificador='".$identificador."'";
	$resultado2 = mysql_query($sql2) or die();
}else{
	$_SESSION['mensagem'] = "A quantidade recebida é diferente da quantidade movimentada pelo aluno";
}

header("Location: gerenciarPacotes.php");

?>