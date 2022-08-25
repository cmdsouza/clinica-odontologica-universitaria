<?php

include "../conexao.php";
date_default_timezone_set('America/Sao_Paulo');


$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$email = $_POST['email'];


$sql = "UPDATE `tb_funcionarios` SET `nm_nomeFuncionario`='".$nome."',`nm_emailFuncionario`='".$email."' WHERE `nr_cpfFuncionario`='".$cpf."'";
$resultado = mysql_query($sql) or die();


header("Location: gerenciarFuncionario.php");

?>