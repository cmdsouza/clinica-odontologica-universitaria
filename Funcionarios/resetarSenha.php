<?php


$cpf = $_GET['cpf'];
$tipo = $_GET['tipo'];

date_default_timezone_set('america/sao_paulo');
include "../conexao.php";

if($tipo == 'funcionario'){
	$sql3 = "UPDATE `tb_funcionarios` SET `nm_senha`='12345678' WHERE `nr_cpfFuncionario` = '".$cpf."'";
	$resultado3 = mysql_query($sql3) or die(mysql_error());
}else{

	$sql3 = "UPDATE `tb_".$tipo."` SET `nm_senha`='12345678' WHERE `nr_cpf".$tipo."` = '".$cpf."'";
	$resultado3 = mysql_query($sql3) or die(mysql_error());

}

header("Location: funcionarios.php");


?>