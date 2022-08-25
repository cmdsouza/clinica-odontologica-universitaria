<?php

date_default_timezone_set('america/sao_paulo');
include "../conexao.php";

$id = $_GET['id'];
//$data = $_POST['data'];
//$horario = $_POST['horario'];

$sql3 = "DELETE FROM `tb_consulta` WHERE `nr_idConsulta`=".$id;
$resultado3 = mysql_query($sql3) or die();

header("Location: remarcarConsulta.php");


?>