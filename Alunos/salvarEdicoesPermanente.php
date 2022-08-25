<?php


session_start();
date_default_timezone_set('america/sao_paulo');
include "../conexao.php";

$diagnostico = $_POST['diagnostico'];
$tratamento = $_POST['tratamento'];
$situacao = $_POST['situacao'];
$id = $_POST['id'];
$cpf = $_POST['cpf'];
//$semestre = $_POST['semestre'];
$dente = $_POST['dente'];
$ausente = $_POST['ausente'];


$sqlDiag2 = "SELECT * FROM tb_odontograma WHERE nr_idOdontograma = ".$id;
$resultadoDiag2 = mysql_query($sqlDiag2) or die();
while($linhaDiag2 = mysql_fetch_array($resultadoDiag2)){
	$semestre = $linhaDiag2['nr_periodo'];
	$situacaoAnt = $linhaDiag2['nm_situacao'];
}


if($situacaoAnt == 'Realizado'){
	$sql = "UPDATE `tb_odontograma` SET `nr_idTratamento`=".$tratamento.", `nr_diagnostico`=".$diagnostico.", `nm_situacao`='".$situacao."', `dt_realizacao` = 'N/R' WHERE `nr_idOdontograma`=".$id ;
	$resultado = mysql_query($sql) or die(mysql_error());
}else{
	$sql = "UPDATE `tb_odontograma` SET `nr_idTratamento`=".$tratamento.", `nr_diagnostico`=".$diagnostico.", `nm_situacao`='".$situacao."' WHERE `nr_idOdontograma`=".$id ;
	$resultado = mysql_query($sql) or die(mysql_error());
}

$sql = "UPDATE `tb_odontograma` SET `nm_ausente`='".$ausente."' WHERE `nr_dente`='".$dente."' AND nr_periodo = '".$semestre."'";
$resultado = mysql_query($sql) or die(mysql_error());

header("Location: editarPermanente.php?cpf=".$cpf."&semestre=".$semestre);

?>