<?php

session_start();
date_default_timezone_set('america/sao_paulo');
include "../conexao.php";

header('Content-Type: text/html; charset=utf-8');
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

$cpf = $_POST['cpf'];
$id = $_POST['id'];

				$login = $_POST['login'];
				$senha = $_POST['senha'];
				
				$sqlAnam2 = "SELECT * FROM tb_funcionarios WHERE nr_cpfFuncionario ='".$login."'";
				$resultadoAnam2 = mysql_query($sqlAnam2) or die();
				while($linhaAnam2 = mysql_fetch_array($resultadoAnam2)){
					$senhaCerta = $linhaAnam2['nm_senha'];
				}
				
				if($senha == $senhaCerta){
					$sqlNome = "UPDATE `tb_odontogramainfantil` SET `nm_professor`='N/R' WHERE `nr_idOdontogramaInfantil`=".$id;
					$resultadosqlNome = mysql_query($sqlNome) or die(mysql_error());
				}else{
					$_SESSION['mensagem'] = "ID e/ou senha incorretos";
				}

header("Location: odontogramainfantil.php?cpf=".$_POST['cpf']);

?>