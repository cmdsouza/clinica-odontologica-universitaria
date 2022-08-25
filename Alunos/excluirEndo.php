<?php

session_start();
date_default_timezone_set('america/sao_paulo');
include "../conexao.php";

	$id = $_GET['id'];

		$sqlNome = "SELECT * FROM tb_endodontia WHERE nr_idEndodontia =".$id;
		$resultadoNome = mysql_query($sqlNome) or die();
		while($linhaNome = mysql_fetch_array($resultadoNome)){
			$paciente = $linhaNome['nr_cpfPaciente'];
	}
	
$sql = "DELETE FROM `tb_endodontia` WHERE `nr_idEndodontia` =".$id;
$resultado = mysql_query($sql) or die(mysql_error());	
	
header("Location: endodontia.php?cpf=".$paciente);

?>