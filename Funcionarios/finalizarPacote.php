<?php

include "../conexao.php";
date_default_timezone_set('america/sao_paulo');

$identificador = $_POST['identificador'];

$sql2 = "UPDATE tb_pacoteesterilizacao SET nm_estado='Finalizado' WHERE nm_identificador='".$identificador."'";
$resultado2 = mysql_query($sql2) or die();

$sqlPacote = "SELECT * FROM tb_pacoteesterilizacao WHERE nm_identificador='".$identificador."'";
$resultadoPacote = mysql_query($sqlPacote) or die();
while($linhaPacote = mysql_fetch_array($resultadoPacote)){
	$quant = $linhaPacote['nr_quantidadePacotes'];
	$aluno = $linhaPacote['nr_cpfAluno'];
}

$sql2 = "INSERT INTO `tb_notificacao`(`nr_idNotificacao`, `nm_conteudo`, `nr_cpfAluno`, `nm_estado`, `dt_criacao`) VALUES (NULL, 'A esterilização finalizou ".$quant." pacote(s)', '".$aluno."', 'Nova', '".date('d/m/Y')."' )";
$resultado = mysql_query($sql2) or die();

header("Location: gerenciarPacotes.php");

?>