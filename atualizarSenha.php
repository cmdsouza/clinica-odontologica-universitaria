<?php

date_default_timezone_set('america/sao_paulo');
include "conexao.php";

$cpf = $_POST['cpf'];
$senha = $_POST['senha'];
$tipo = $_POST['tipo'];


switch($tipo){

	case 'aluno':
	
		$sql3 = "UPDATE `tb_aluno` SET `nm_senha`='".$senha."' WHERE `nr_cpfAluno` = '".$cpf."'";
		$resultado3 = mysql_query($sql3) or die(mysql_error());

		header("Location: Alunos/alunos2.php");
	
	break;
	
	case 'funcionario':
	
		$sql3 = "UPDATE `tb_funcionarios` SET `nm_senha`='".$senha."' WHERE `nr_cpfFuncionario`= '".$cpf."'";
		$resultado3 = mysql_query($sql3) or die();

		header("Location: Funcionarios/funcionarios.php");
	
	break;

}


?>