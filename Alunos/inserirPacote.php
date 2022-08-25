<?php

session_start();
date_default_timezone_set('america/sao_paulo');
include "../conexao.php";

$sqlNome = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$_SESSION['cpf']."'";
$resultadoNome = mysql_query($sqlNome) or die();
while($linhaNome = mysql_fetch_array($resultadoNome)){
	$periodo = $linhaNome['nr_periodo'];
	$turma = $linhaNome['nm_turma'];
	$nome = $linhaNome['nm_nomeAluno'];
}

$identificador = $nome." - ".$periodo."º periodo - ".$turma." - ".date("d/m/Y H:i:s");

$pacotes = $_POST['pacotes'];
$obs = $_POST['obs'];

$sql = "INSERT INTO tb_pacoteesterilizacao(nr_idPacote, nm_identificador, nr_quantidadePacotes, nm_local, nm_estado, nr_cpfAluno, dt_movimentacao, dt_devolucao, nm_observacoesPacote) VALUES (NULL, '".$identificador."', ".$pacotes.", 'Com o Aluno', 'Aguardando Movimentacao', '".$_SESSION['cpf']."', 'Nao Se Aplica', 'Nao Se Aplica', '".$obs."')";
$resultado = mysql_query($sql) or die();
	
header("Location: criarPacotes.php");
?>