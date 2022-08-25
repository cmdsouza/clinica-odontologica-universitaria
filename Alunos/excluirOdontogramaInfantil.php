<?php

date_default_timezone_set('america/sao_paulo');
include "../conexao.php";

$cpf = $_POST['cpf'];
$login = $_POST['login'];
$senha = $_POST['senha'];

					$sqlAnam2 = "SELECT * FROM tb_funcionarios WHERE nr_cpfFuncionario ='".$login."'";
					$resultadoAnam2 = mysql_query($sqlAnam2) or die();
					while($linhaAnam2 = mysql_fetch_array($resultadoAnam2)){
						$senhaCerta = $linhaAnam2['nm_senha'];
					}
					
					if($senha == $senhaCerta){
						
						$sql3 = "DELETE FROM `tb_odontogramainfantil` WHERE `nr_cpfPaciente`='".$cpf."'";
						$resultado3 = mysql_query($sql3) or die(mysql_error());
						
					}else{
						header("Location: consultarPaciente.php?cpf=".$_POST['cpf']);
					}



header("Location: consultarPaciente.php?cpf=".$_POST['cpf']);


?>