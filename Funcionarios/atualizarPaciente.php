<?php


$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$nascimento = $_POST['nascimento'];
$rg = $_POST['rg'];
$civil = $_POST['civil'];
$genero = $_POST['genero'];
$id = $_POST['id'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$complemento = $_POST['complemento'];

date_default_timezone_set('america/sao_paulo');
include "../conexao.php";

$sql3 = "UPDATE `tb_paciente` SET `nm_nomePaciente`='".$nome."', `nr_telefone`='".$telefone."', `dt_nascimento`='".$nascimento."', `nm_genero`='".$genero."', `nr_rg`='".$rg."', `nm_estadoCivil`='".$civil."' WHERE `nr_cpfPaciente` = '".$cpf."'";
$resultado3 = mysql_query($sql3) or die();

$sql4 = "UPDATE `tb_endereco` SET `nr_cep`='".$cep."',`nm_rua`='".$rua."', `nm_bairro`='".$bairro."',`nm_cidade`='".$cidade."', `nm_complemento`='".$complemento."' WHERE `nr_idEndereco`=".$id;
$resultado4 = mysql_query($sql4) or die();

header("Location: gerenciarPaciente.php");


?>