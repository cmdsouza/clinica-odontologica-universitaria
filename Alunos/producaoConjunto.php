<?php

session_start();
date_default_timezone_set('america/sao_paulo');
include "../conexao.php";

$acao = $_POST['lote'];

$sqlAnam = "SELECT * FROM tb_producaoclinica";
$resultadoAnam = mysql_query($sqlAnam) or die();
while($linhaAnam = mysql_fetch_array($resultadoAnam)){
	if(isset($_POST[$linhaAnam['nr_idProducao']])){
		switch($acao){
			case 'excluir':
				
				$login = $_POST['login'];
				$senha = $_POST['senha'];
					
				$sqlAnam2 = "SELECT * FROM tb_funcionarios WHERE nr_cpfFuncionario ='".$login."'";
				$resultadoAnam2 = mysql_query($sqlAnam2) or die();
				while($linhaAnam2 = mysql_fetch_array($resultadoAnam2)){
					$senhaCerta = $linhaAnam2['nm_senha'];
				}
					
				if($senha == $senhaCerta){
					$sqlNome = "DELETE FROM `tb_producaoclinica` WHERE nr_idProducao = ".$linhaAnam['nr_idProducao'];
					$resultadoNome = mysql_query($sqlNome) or die();
				}else{
					header("Location: producaoClinica.php");
				}
					
				
			break;
			
			case 'aprovar':
			
				$login = $_POST['login'];
				$senha = $_POST['senha'];
					
				$sqlAnam2 = "SELECT * FROM tb_funcionarios WHERE nr_cpfFuncionario ='".$login."'";
				$resultadoAnam2 = mysql_query($sqlAnam2) or die();
				while($linhaAnam2 = mysql_fetch_array($resultadoAnam2)){
					$senhaCerta = $linhaAnam2['nm_senha'];
				}
					
				if($senha == $senhaCerta){
					$sqlNome = "UPDATE `tb_producaoclinica` SET `nm_validacao`='".$login."' WHERE `nr_idProducao` = ".$linhaAnam['nr_idProducao'];
					$resultadoNome = mysql_query($sqlNome) or die();
				}else{
					header("Location: producaoClinica.php");
				}
				
			break;
			
			
		}
	}
}

header("Location: producaoClinica.php");

?>