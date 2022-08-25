<?php

session_start();
date_default_timezone_set('america/sao_paulo');
include "../conexao.php";

header('Content-Type: text/html; charset=utf-8');
	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');

$acao = $_POST['lote'];

if(isset($_POST['tipo'])){
	if($_POST['tipo'] == 'infantil'){
	
		$sqlAnam = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' ORDER BY nm_situacao";
		$resultadoAnam = mysql_query($sqlAnam) or die();
		while($linhaAnam = mysql_fetch_array($resultadoAnam)){
			if(isset($_POST[$linhaAnam['nr_idOdontogramaInfantil']])){
				
				if($acao == 'realizado'){
					
					if($linhaAnam['nm_situacao'] == 'A Tratar'){
						$data = date("d/m/Y", strtotime($_POST['data']));
						
						$sqlNome = "UPDATE `tb_odontogramainfantil` SET `dt_aprovacao`='".$data."', nm_situacao ='Realizado' WHERE `nr_idOdontogramaInfantil`=".$linhaAnam['nr_idOdontogramaInfantil'];
						$resultadoNome = mysql_query($sqlNome) or die();
					}
					
					
				}
				
				
				if($acao == 'aprovar'){
					$login = $_POST['login'];
					$senha = $_POST['senha'];
					
					$sqlAnam2 = "SELECT * FROM tb_funcionarios WHERE nr_cpfFuncionario ='".$login."'";
					$resultadoAnam2 = mysql_query($sqlAnam2) or die();
					while($linhaAnam2 = mysql_fetch_array($resultadoAnam2)){
						$senhaCerta = $linhaAnam2['nm_senha'];
					}
					
					if($senha == $senhaCerta){
						
						if($linhaAnam['nm_situacao'] == 'Realizado'){
						
						$sqlNome = "UPDATE `tb_odontogramainfantil` SET `nm_professor`='".$login."', nm_situacao ='Realizado' WHERE `nr_idOdontogramaInfantil`=".$linhaAnam['nr_idOdontogramaInfantil'];
						$resultadoNome = mysql_query($sqlNome) or die();
						}
						
						if($linhaAnam['nm_situacao'] == 'Existente'){
						
						$sqlNome2 = "UPDATE `tb_odontogramainfantil` SET `nm_professor`='".$login."' WHERE `nr_idOdontogramaInfantil`=".$linhaAnam['nr_idOdontogramaInfantil'];
						$resultadoNome2 = mysql_query($sqlNome2) or die();
						}
						
						
					}else{
						$_SESSION['mensagem'] = "ID e/ou senha incorretos";
						header("Location: odontogramainfantil.php?cpf=".$_POST['cpf']);
					}
					
				}
				
				
			}else{
				
			}
		}

		header("Location: odontogramainfantil.php?cpf=".$_POST['cpf']);

	}
}else{

	$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_POST['cpf']."' ORDER BY nm_situacao";
	$resultadoAnam = mysql_query($sqlAnam) or die();
	while($linhaAnam = mysql_fetch_array($resultadoAnam)){
		if(isset($_POST[$linhaAnam['nr_idOdontograma']])){
			
			if($acao == 'realizado'){
				
				if($linhaAnam['nm_situacao'] == 'A Tratar'){
					$data = date("d/m/Y", strtotime($_POST['data']));
					
					$sqlNome = "UPDATE `tb_odontograma` SET `dt_realizacao`='".$data."', nm_situacao ='Realizado' WHERE `nr_idOdontograma`=".$linhaAnam['nr_idOdontograma'];
					$resultadoNome = mysql_query($sqlNome) or die();
				}
				
				
			}
			
			
			if($acao == 'aprovar'){
				$login = $_POST['login'];
				$senha = $_POST['senha'];
				
				$sqlAnam2 = "SELECT * FROM tb_funcionarios WHERE nr_cpfFuncionario ='".$login."'";
				$resultadoAnam2 = mysql_query($sqlAnam2) or die();
				while($linhaAnam2 = mysql_fetch_array($resultadoAnam2)){
					$senhaCerta = $linhaAnam2['nm_senha'];
				}
				
				if($senha == $senhaCerta){
					
					if($linhaAnam['nm_situacao'] == 'Realizado'){
						$sqlNome = "UPDATE `tb_odontograma` SET `nm_professor`='".$login."', nm_situacao ='Realizado' WHERE `nr_idOdontograma`=".$linhaAnam['nr_idOdontograma'];
						$resultadoNome = mysql_query($sqlNome) or die();
					}
					
					if($linhaAnam['nm_situacao'] == 'Existente'){
						$sqlNome = "UPDATE `tb_odontograma` SET `nm_professor`='".$login."' WHERE `nr_idOdontograma`=".$linhaAnam['nr_idOdontograma'];
						$resultadoNome = mysql_query($sqlNome) or die();
					}
					
					
				}else{
					$_SESSION['mensagem'] = "ID e/ou senha incorretos";
					header("Location: odontograma.php?cpf=".$_POST['cpf']."&semestre=".$_POST['semestre']);
				}
				
			}
			
			
		}else{
			
		}
	}

	header("Location: odontograma.php?cpf=".$_POST['cpf']."&semestre=".$_POST['semestre']);
	
}

?>