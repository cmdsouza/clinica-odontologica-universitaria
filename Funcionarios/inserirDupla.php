<?php

session_start();
include "../conexao.php";

$aluno1 = $_POST['aluno1'];
$aluno2 = $_POST['aluno2'];

if($aluno1 == $aluno2){
	$_SESSION['mensagem'] = "Você escolheu o mesmo aluno";
	header("Location: gerenciarDuplas.php");
}else{
		$sqlEnd = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$aluno1."'";
		$resultadoEnd = mysql_query($sqlEnd) or die();
		while($linhaEnd = mysql_fetch_array($resultadoEnd)){
			$periodo1 = $linhaEnd['nr_periodo'];
		}
		
		$sqlEnd2 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$aluno2."'";
		$resultadoEnd2 = mysql_query($sqlEnd2) or die();
		while($linhaEnd2 = mysql_fetch_array($resultadoEnd2)){
			$periodo2 = $linhaEnd2['nr_periodo'];
		}
	
		if($periodo1 != $periodo2){
			$_SESSION['mensagem'] = "Os alunos são de períodos diferentes";
			header("Location: gerenciarDuplas.php");
		}else{
		
			$sql2 = "INSERT INTO tb_duplas(nr_idDupla, nr_cpf1, nr_cpf2, nm_situacao) VALUES (NULL, '".$aluno1."', '".$aluno2."', 'Ativo')";
			$resultado2 = mysql_query($sql2) or die();

			$_SESSION['mensagem'] = "Dupla Cadastrada";
			header("Location: gerenciarDuplas.php");
		
		}
}

?>