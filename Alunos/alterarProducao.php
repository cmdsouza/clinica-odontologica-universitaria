<?php

session_start();
date_default_timezone_set('america/sao_paulo');
include "../conexao.php";

header('Content-Type: text/html; charset=utf-8');
	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');

$id = $_POST['id'];
$data = $_POST['data'];
$r1 = $_POST['1'];
$r2 = $_POST['2'];
$r3 = $_POST['3'];
$r4 = $_POST['4'];
$r5 = $_POST['5'];
$r6 = $_POST['6'];
$turma = $_POST['turma'];

				$login = $_POST['login'];
				$senha = $_POST['senha'];
					
				$sqlAnam2 = "SELECT * FROM tb_funcionarios WHERE nr_cpfFuncionario ='".$login."'";
				$resultadoAnam2 = mysql_query($sqlAnam2) or die();
				while($linhaAnam2 = mysql_fetch_array($resultadoAnam2)){
					$senhaCerta = $linhaAnam2['nm_senha'];
				}
					
				if($senha == $senhaCerta){
					$sql = "UPDATE `tb_producaoclinica` SET `nm_turma`='".$turma."', `dt_data`='".$data."', `1`='".$r1."', `2`='".$r2."', `3`='".$r3."', `4`='".$r4."', `5`='".$r5."', `6`='".$r6."', nm_validacao = '".$login."' WHERE `nr_idProducao`=".$id;
					$resultado = mysql_query($sql) or die(mysql_error());
				}else{
					header("Location: producaoClinica.php");
				}


header("Location: producaoClinica.php");

?>