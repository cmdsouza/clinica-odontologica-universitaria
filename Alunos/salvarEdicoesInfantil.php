<?php


session_start();
date_default_timezone_set('america/sao_paulo');
include "../conexao.php";

$diagnostico = $_POST['diagnostico'];
$tratamento = $_POST['tratamento'];
$obs = $_POST['obs'];
$situacao = $_POST['situacao'];
$id = $_POST['id'];

echo $sql = "UPDATE `tb_odontogramainfantil` SET `nm_diagnostico`='".$diagnostico."', `nm_tratamento`='".$tratamento."', `nm_observacao`='".$obs."', `nm_situacao`='".$situacao."', nm_ausente = '".$_POST['ausente']."'  WHERE `nr_idOdontogramaInfantil`=".$id ;
$resultado = mysql_query($sql) or die(mysql_error());

header("Location: editarOdontogramaInfantil.php?cpf=".$_POST['cpf']);

?>