<?php

date_default_timezone_set('america/sao_paulo');
include "../conexao.php";

$cpf = $_GET['cpf'];

$sql3 = "DELETE FROM `tb_funcionarios` WHERE `nr_cpfFuncionario`='".$cpf."'";
$resultado3 = mysql_query($sql3) or die(mysql_error());

header("Location: gerenciarFuncionario.php");


?>