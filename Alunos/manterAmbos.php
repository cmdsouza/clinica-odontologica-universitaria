<?php

session_start();
date_default_timezone_set('america/sao_paulo');
include "../conexao.php";

header('Content-Type: text/html; charset=utf-8');
	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');

$dente = $_POST['dente'];
/*
//18
if($dente == '18'){
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='".$dente."' AND nm_ativo='Sim' AND nm_diagnostico = 'Erupcionar' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Irrompeu' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
	
	echo $sqlU = "DELETE FROM `tb_odontogramainfantil` WHERE `nr_idOdontogramaInfantil` =".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
}	

//17
if($dente == '17'){
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='".$dente."' AND nm_ativo='Sim' AND nm_diagnostico = 'Erupcionar' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Irrompeu' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
	
	echo $sqlU = "DELETE FROM `tb_odontogramainfantil` WHERE `nr_idOdontogramaInfantil` =".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
}
*/

//16
if($dente == '55'){
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='55' AND nm_tipoPlano = 'Historico' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$sqlU = "UPDATE `tb_odontogramainfantil` SET nm_ativo = 'Sim', dt_inclusao = '".date('d/m/Y')."', nm_observacao = 'Retenção Prolongada e/ou Irrupção Precoce' WHERE `nr_idOdontogramaInfantil` =".$linhaNome['nr_idOdontogramaInfantil'];
			$resultadoU = mysql_query($sqlU) or die(mysql_error());
	}
	
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='15' AND nm_ativo='Sim' AND nm_tipoPlano = 'Historico' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$sqlU = "UPDATE `tb_odontogramainfantil` SET nm_ativo = 'Sim', dt_inclusao = '".date('d/m/Y')."', nm_observacao = 'Retenção Prolongada e/ou Irrupção Precoce' WHERE `nr_idOdontogramaInfantil` =".$linhaNome['nr_idOdontogramaInfantil'];
			$resultadoU = mysql_query($sqlU) or die(mysql_error());
	}
	
	
}

/*
//15
if($dente == '15'){
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='".$dente."' AND nm_ativo='Sim' AND nm_diagnostico = 'Erupcionar' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Irrompeu' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
	
	echo $sqlU = "DELETE FROM `tb_odontogramainfantil` WHERE `nr_idOdontogramaInfantil` =".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='55' AND nm_ativo='Nao' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Esfoliou' LIMIT 1";
	$resultadoNome2 = mysql_query($sqlNome2) or die();
	while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
		$id2 = $linhaNome2['nr_idOdontogramaInfantil'];
	}
	
	$sqlU2 = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Sim',`dt_inclusao`='N/R', `nm_tipoPlano`='N/R',`nm_observacao`='N/R' WHERE `nr_idOdontogramaInfantil`=".$id2;
	$resultadoU2 = mysql_query($sqlU2) or die(mysql_error());
}	

//14
if($dente == '14'){
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='".$dente."' AND nm_ativo='Sim' AND nm_diagnostico = 'Erupcionar' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Irrompeu' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
	
	echo $sqlU = "DELETE FROM `tb_odontogramainfantil` WHERE `nr_idOdontogramaInfantil` =".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='54' AND nm_ativo='Nao' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Esfoliou' LIMIT 1";
	$resultadoNome2 = mysql_query($sqlNome2) or die();
	while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
		$id2 = $linhaNome2['nr_idOdontogramaInfantil'];
	}
	
	$sqlU2 = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Sim',`dt_inclusao`='N/R', `nm_tipoPlano`='N/R',`nm_observacao`='N/R' WHERE `nr_idOdontogramaInfantil`=".$id2;
	$resultadoU2 = mysql_query($sqlU2) or die(mysql_error());
}	

//13
if($dente == '13'){
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='".$dente."' AND nm_ativo='Sim' AND nm_diagnostico = 'Erupcionar' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Irrompeu' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
	
	echo $sqlU = "DELETE FROM `tb_odontogramainfantil` WHERE `nr_idOdontogramaInfantil` =".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='53' AND nm_ativo='Nao' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Esfoliou' LIMIT 1";
	$resultadoNome2 = mysql_query($sqlNome2) or die();
	while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
		$id2 = $linhaNome2['nr_idOdontogramaInfantil'];
	}
	
	$sqlU2 = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Sim',`dt_inclusao`='N/R', `nm_tipoPlano`='N/R',`nm_observacao`='N/R' WHERE `nr_idOdontogramaInfantil`=".$id2;
	$resultadoU2 = mysql_query($sqlU2) or die(mysql_error());
}	

//12
if($dente == '12'){
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='".$dente."' AND nm_ativo='Sim' AND nm_diagnostico = 'Erupcionar' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Irrompeu' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
	
	echo $sqlU = "DELETE FROM `tb_odontogramainfantil` WHERE `nr_idOdontogramaInfantil` =".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='52' AND nm_ativo='Nao' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Esfoliou' LIMIT 1";
	$resultadoNome2 = mysql_query($sqlNome2) or die();
	while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
		$id2 = $linhaNome2['nr_idOdontogramaInfantil'];
	}
	
	$sqlU2 = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Sim',`dt_inclusao`='N/R', `nm_tipoPlano`='N/R',`nm_observacao`='N/R' WHERE `nr_idOdontogramaInfantil`=".$id2;
	$resultadoU2 = mysql_query($sqlU2) or die(mysql_error());
}	

//11
if($dente == '11'){
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='".$dente."' AND nm_ativo='Sim' AND nm_diagnostico = 'Erupcionar' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Irrompeu' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
	
	echo $sqlU = "DELETE FROM `tb_odontogramainfantil` WHERE `nr_idOdontogramaInfantil` =".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='51' AND nm_ativo='Nao' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Esfoliou' LIMIT 1";
	$resultadoNome2 = mysql_query($sqlNome2) or die();
	while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
		$id2 = $linhaNome2['nr_idOdontogramaInfantil'];
	}
	
	$sqlU2 = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Sim',`dt_inclusao`='N/R', `nm_tipoPlano`='N/R',`nm_observacao`='N/R' WHERE `nr_idOdontogramaInfantil`=".$id2;
	$resultadoU2 = mysql_query($sqlU2) or die(mysql_error());
}	

//21
if($dente == '21'){
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='".$dente."' AND nm_ativo='Sim' AND nm_diagnostico = 'Erupcionar' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Irrompeu' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
	
	echo $sqlU = "DELETE FROM `tb_odontogramainfantil` WHERE `nr_idOdontogramaInfantil` =".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='61' AND nm_ativo='Nao' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Esfoliou' LIMIT 1";
	$resultadoNome2 = mysql_query($sqlNome2) or die();
	while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
		$id2 = $linhaNome2['nr_idOdontogramaInfantil'];
	}
	
	$sqlU2 = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Sim',`dt_inclusao`='N/R', `nm_tipoPlano`='N/R',`nm_observacao`='N/R' WHERE `nr_idOdontogramaInfantil`=".$id2;
	$resultadoU2 = mysql_query($sqlU2) or die(mysql_error());
}

//22
if($dente == '22'){
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='".$dente."' AND nm_ativo='Sim' AND nm_diagnostico = 'Erupcionar' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Irrompeu' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
	
	echo $sqlU = "DELETE FROM `tb_odontogramainfantil` WHERE `nr_idOdontogramaInfantil` =".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='62' AND nm_ativo='Nao' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Esfoliou' LIMIT 1";
	$resultadoNome2 = mysql_query($sqlNome2) or die();
	while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
		$id2 = $linhaNome2['nr_idOdontogramaInfantil'];
	}
	
	$sqlU2 = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Sim',`dt_inclusao`='N/R', `nm_tipoPlano`='N/R',`nm_observacao`='N/R' WHERE `nr_idOdontogramaInfantil`=".$id2;
	$resultadoU2 = mysql_query($sqlU2) or die(mysql_error());
}

//23
if($dente == '23'){
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='".$dente."' AND nm_ativo='Sim' AND nm_diagnostico = 'Erupcionar' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Irrompeu' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
	
	echo $sqlU = "DELETE FROM `tb_odontogramainfantil` WHERE `nr_idOdontogramaInfantil` =".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='63' AND nm_ativo='Nao' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Esfoliou' LIMIT 1";
	$resultadoNome2 = mysql_query($sqlNome2) or die();
	while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
		$id2 = $linhaNome2['nr_idOdontogramaInfantil'];
	}
	
	$sqlU2 = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Sim',`dt_inclusao`='N/R', `nm_tipoPlano`='N/R',`nm_observacao`='N/R' WHERE `nr_idOdontogramaInfantil`=".$id2;
	$resultadoU2 = mysql_query($sqlU2) or die(mysql_error());
}

//24
if($dente == '24'){
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='".$dente."' AND nm_ativo='Sim' AND nm_diagnostico = 'Erupcionar' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Irrompeu' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
	
	echo $sqlU = "DELETE FROM `tb_odontogramainfantil` WHERE `nr_idOdontogramaInfantil` =".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='64' AND nm_ativo='Nao' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Esfoliou' LIMIT 1";
	$resultadoNome2 = mysql_query($sqlNome2) or die();
	while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
		$id2 = $linhaNome2['nr_idOdontogramaInfantil'];
	}
	
	$sqlU2 = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Sim',`dt_inclusao`='N/R', `nm_tipoPlano`='N/R',`nm_observacao`='N/R' WHERE `nr_idOdontogramaInfantil`=".$id2;
	$resultadoU2 = mysql_query($sqlU2) or die(mysql_error());
}

//25
if($dente == '25'){
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='".$dente."' AND nm_ativo='Sim' AND nm_diagnostico = 'Erupcionar' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Irrompeu' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
	
	echo $sqlU = "DELETE FROM `tb_odontogramainfantil` WHERE `nr_idOdontogramaInfantil` =".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='65' AND nm_ativo='Nao' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Esfoliou' LIMIT 1";
	$resultadoNome2 = mysql_query($sqlNome2) or die();
	while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
		$id2 = $linhaNome2['nr_idOdontogramaInfantil'];
	}
	
	$sqlU2 = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Sim',`dt_inclusao`='N/R', `nm_tipoPlano`='N/R',`nm_observacao`='N/R' WHERE `nr_idOdontogramaInfantil`=".$id2;
	$resultadoU2 = mysql_query($sqlU2) or die(mysql_error());
}


//16
if($dente == '26'){
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='".$dente."' AND nm_ativo='Sim' AND nm_diagnostico = 'Erupcionar' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Irrompeu' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
	
	echo $sqlU = "DELETE FROM `tb_odontogramainfantil` WHERE `nr_idOdontogramaInfantil` =".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
}

//27
if($dente == '27'){
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='".$dente."' AND nm_ativo='Sim' AND nm_diagnostico = 'Erupcionar' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Irrompeu' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
	
	echo $sqlU = "DELETE FROM `tb_odontogramainfantil` WHERE `nr_idOdontogramaInfantil` =".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
}

//28
if($dente == '28'){
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='".$dente."' AND nm_ativo='Sim' AND nm_diagnostico = 'Erupcionar' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Irrompeu' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
	
	echo $sqlU = "DELETE FROM `tb_odontogramainfantil` WHERE `nr_idOdontogramaInfantil` =".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
}

//48
if($dente == '48'){
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='".$dente."' AND nm_ativo='Sim' AND nm_diagnostico = 'Erupcionar' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Irrompeu' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
	
	echo $sqlU = "DELETE FROM `tb_odontogramainfantil` WHERE `nr_idOdontogramaInfantil` =".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
}

//47
if($dente == '47'){
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='".$dente."' AND nm_ativo='Sim' AND nm_diagnostico = 'Erupcionar' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Irrompeu' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
	
	echo $sqlU = "DELETE FROM `tb_odontogramainfantil` WHERE `nr_idOdontogramaInfantil` =".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
}

//46
if($dente == '46'){
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='".$dente."' AND nm_ativo='Sim' AND nm_diagnostico = 'Erupcionar' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Irrompeu' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
	
	echo $sqlU = "DELETE FROM `tb_odontogramainfantil` WHERE `nr_idOdontogramaInfantil` =".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
}

//45
if($dente == '45'){
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='".$dente."' AND nm_ativo='Sim' AND nm_diagnostico = 'Erupcionar' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Irrompeu' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
	
	echo $sqlU = "DELETE FROM `tb_odontogramainfantil` WHERE `nr_idOdontogramaInfantil` =".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='85' AND nm_ativo='Nao' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Esfoliou' LIMIT 1";
	$resultadoNome2 = mysql_query($sqlNome2) or die();
	while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
		$id2 = $linhaNome2['nr_idOdontogramaInfantil'];
	}
	
	$sqlU2 = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Sim',`dt_inclusao`='N/R', `nm_tipoPlano`='N/R',`nm_observacao`='N/R' WHERE `nr_idOdontogramaInfantil`=".$id2;
	$resultadoU2 = mysql_query($sqlU2) or die(mysql_error());
}

//44
if($dente == '44'){
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='".$dente."' AND nm_ativo='Sim' AND nm_diagnostico = 'Erupcionar' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Irrompeu' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
	
	echo $sqlU = "DELETE FROM `tb_odontogramainfantil` WHERE `nr_idOdontogramaInfantil` =".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='84' AND nm_ativo='Nao' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Esfoliou' LIMIT 1";
	$resultadoNome2 = mysql_query($sqlNome2) or die();
	while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
		$id2 = $linhaNome2['nr_idOdontogramaInfantil'];
	}
	
	$sqlU2 = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Sim',`dt_inclusao`='N/R', `nm_tipoPlano`='N/R',`nm_observacao`='N/R' WHERE `nr_idOdontogramaInfantil`=".$id2;
	$resultadoU2 = mysql_query($sqlU2) or die(mysql_error());
}

//43
if($dente == '43'){
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='".$dente."' AND nm_ativo='Sim' AND nm_diagnostico = 'Erupcionar' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Irrompeu' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
	
	echo $sqlU = "DELETE FROM `tb_odontogramainfantil` WHERE `nr_idOdontogramaInfantil` =".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='83' AND nm_ativo='Nao' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Esfoliou' LIMIT 1";
	$resultadoNome2 = mysql_query($sqlNome2) or die();
	while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
		$id2 = $linhaNome2['nr_idOdontogramaInfantil'];
	}
	
	$sqlU2 = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Sim',`dt_inclusao`='N/R', `nm_tipoPlano`='N/R',`nm_observacao`='N/R' WHERE `nr_idOdontogramaInfantil`=".$id2;
	$resultadoU2 = mysql_query($sqlU2) or die(mysql_error());
}

//42
if($dente == '42'){
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='".$dente."' AND nm_ativo='Sim' AND nm_diagnostico = 'Erupcionar' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Irrompeu' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
	
	echo $sqlU = "DELETE FROM `tb_odontogramainfantil` WHERE `nr_idOdontogramaInfantil` =".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='82' AND nm_ativo='Nao' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Esfoliou' LIMIT 1";
	$resultadoNome2 = mysql_query($sqlNome2) or die();
	while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
		$id2 = $linhaNome2['nr_idOdontogramaInfantil'];
	}
	
	$sqlU2 = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Sim',`dt_inclusao`='N/R', `nm_tipoPlano`='N/R',`nm_observacao`='N/R' WHERE `nr_idOdontogramaInfantil`=".$id2;
	$resultadoU2 = mysql_query($sqlU2) or die(mysql_error());
}

//41
if($dente == '41'){
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='".$dente."' AND nm_ativo='Sim' AND nm_diagnostico = 'Erupcionar' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Irrompeu' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
	
	echo $sqlU = "DELETE FROM `tb_odontogramainfantil` WHERE `nr_idOdontogramaInfantil` =".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='81' AND nm_ativo='Nao' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Esfoliou' LIMIT 1";
	$resultadoNome2 = mysql_query($sqlNome2) or die();
	while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
		$id2 = $linhaNome2['nr_idOdontogramaInfantil'];
	}
	
	$sqlU2 = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Sim',`dt_inclusao`='N/R', `nm_tipoPlano`='N/R',`nm_observacao`='N/R' WHERE `nr_idOdontogramaInfantil`=".$id2;
	$resultadoU2 = mysql_query($sqlU2) or die(mysql_error());
}

//31
if($dente == '31'){
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='".$dente."' AND nm_ativo='Sim' AND nm_diagnostico = 'Erupcionar' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Irrompeu' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
	
	echo $sqlU = "DELETE FROM `tb_odontogramainfantil` WHERE `nr_idOdontogramaInfantil` =".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='71' AND nm_ativo='Nao' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Esfoliou' LIMIT 1";
	$resultadoNome2 = mysql_query($sqlNome2) or die();
	while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
		$id2 = $linhaNome2['nr_idOdontogramaInfantil'];
	}
	
	$sqlU2 = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Sim',`dt_inclusao`='N/R', `nm_tipoPlano`='N/R',`nm_observacao`='N/R' WHERE `nr_idOdontogramaInfantil`=".$id2;
	$resultadoU2 = mysql_query($sqlU2) or die(mysql_error());
}

//32
if($dente == '32'){
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='".$dente."' AND nm_ativo='Sim' AND nm_diagnostico = 'Erupcionar' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Irrompeu' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
	
	echo $sqlU = "DELETE FROM `tb_odontogramainfantil` WHERE `nr_idOdontogramaInfantil` =".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='72' AND nm_ativo='Nao' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Esfoliou' LIMIT 1";
	$resultadoNome2 = mysql_query($sqlNome2) or die();
	while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
		$id2 = $linhaNome2['nr_idOdontogramaInfantil'];
	}
	
	$sqlU2 = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Sim',`dt_inclusao`='N/R', `nm_tipoPlano`='N/R',`nm_observacao`='N/R' WHERE `nr_idOdontogramaInfantil`=".$id2;
	$resultadoU2 = mysql_query($sqlU2) or die(mysql_error());
}

//33
if($dente == '33'){
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='".$dente."' AND nm_ativo='Sim' AND nm_diagnostico = 'Erupcionar' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Irrompeu' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
	
	echo $sqlU = "DELETE FROM `tb_odontogramainfantil` WHERE `nr_idOdontogramaInfantil` =".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='73' AND nm_ativo='Nao' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Esfoliou' LIMIT 1";
	$resultadoNome2 = mysql_query($sqlNome2) or die();
	while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
		$id2 = $linhaNome2['nr_idOdontogramaInfantil'];
	}
	
	$sqlU2 = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Sim',`dt_inclusao`='N/R', `nm_tipoPlano`='N/R',`nm_observacao`='N/R' WHERE `nr_idOdontogramaInfantil`=".$id2;
	$resultadoU2 = mysql_query($sqlU2) or die(mysql_error());
}

//34
if($dente == '34'){
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='".$dente."' AND nm_ativo='Sim' AND nm_diagnostico = 'Erupcionar' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Irrompeu' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
	
	echo $sqlU = "DELETE FROM `tb_odontogramainfantil` WHERE `nr_idOdontogramaInfantil` =".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='74' AND nm_ativo='Nao' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Esfoliou' LIMIT 1";
	$resultadoNome2 = mysql_query($sqlNome2) or die();
	while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
		$id2 = $linhaNome2['nr_idOdontogramaInfantil'];
	}
	
	$sqlU2 = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Sim',`dt_inclusao`='N/R', `nm_tipoPlano`='N/R',`nm_observacao`='N/R' WHERE `nr_idOdontogramaInfantil`=".$id2;
	$resultadoU2 = mysql_query($sqlU2) or die(mysql_error());
}

//35
if($dente == '35'){
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='".$dente."' AND nm_ativo='Sim' AND nm_diagnostico = 'Erupcionar' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Irrompeu' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
	
	echo $sqlU = "DELETE FROM `tb_odontogramainfantil` WHERE `nr_idOdontogramaInfantil` =".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='75' AND nm_ativo='Nao' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Esfoliou' LIMIT 1";
	$resultadoNome2 = mysql_query($sqlNome2) or die();
	while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
		$id2 = $linhaNome2['nr_idOdontogramaInfantil'];
	}
	
	$sqlU2 = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Sim',`dt_inclusao`='N/R', `nm_tipoPlano`='N/R',`nm_observacao`='N/R' WHERE `nr_idOdontogramaInfantil`=".$id2;
	$resultadoU2 = mysql_query($sqlU2) or die(mysql_error());
}

//36
if($dente == '36'){
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='".$dente."' AND nm_ativo='Sim' AND nm_diagnostico = 'Erupcionar' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Irrompeu' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
	
	echo $sqlU = "DELETE FROM `tb_odontogramainfantil` WHERE `nr_idOdontogramaInfantil` =".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
}

//37
if($dente == '37'){
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='".$dente."' AND nm_ativo='Sim' AND nm_diagnostico = 'Erupcionar' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Irrompeu' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
	
	echo $sqlU = "DELETE FROM `tb_odontogramainfantil` WHERE `nr_idOdontogramaInfantil` =".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
}

//38
if($dente == '38'){
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='".$dente."' AND nm_ativo='Sim' AND nm_diagnostico = 'Erupcionar' AND nm_tipoPlano = 'Historico' AND nm_observacao = 'Irrompeu' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
	
	echo $sqlU = "DELETE FROM `tb_odontogramainfantil` WHERE `nr_idOdontogramaInfantil` =".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
}


header("Location: odontogramaInfantil.php?cpf=".$_POST['cpf']);
*/
?>