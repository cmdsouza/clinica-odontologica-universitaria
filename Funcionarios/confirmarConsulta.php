<?php


$id = $_GET['id'];

date_default_timezone_set('america/sao_paulo');
include "../conexao.php";

$sql3 = "UPDATE `tb_consulta` SET `nr_situacao`='Confirmado' WHERE `nr_idConsulta`=".$id;
$resultado3 = mysql_query($sql3) or die();

header("Location: funcionarios.php");


?>