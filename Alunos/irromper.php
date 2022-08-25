<?php

session_start();
date_default_timezone_set('america/sao_paulo');
include "../conexao.php";

$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' LIMIT 1";
$resultadoNome = mysql_query($sqlNome) or die();
while($linhaNome = mysql_fetch_array($resultadoNome)){
	$paciente = $linhaNome['nr_cpfPaciente'];
	$denticao = $linhaNome['nm_tipoDenticao'];
	$dupla = $linhaNome['nr_idDupla'];
	$semestre = $linhaNome['nr_semestre'];
	$professor = $linhaNome['nr_cpfProfessor'];
	$disciplina = $linhaNome['nm_disciplina'];
	$ausente = $linhaNome['nm_ausente'];
	$acompanhante = $linhaNome['nm_acompanhante'];
}

if(isset($_POST['erupcionar18'])){
	$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, nm_tipoPlano, nm_observacao, nm_situacao, nm_disciplina, nm_ausente, nm_acompanhante) VALUES (NULL, '".$paciente."', '".$denticao."', '".$dupla."', '".$semestre."', '18', 'Erupcionar', 'N/A', '".$professor."', 'N/R', 'Sim', '".date('d/m/Y')."', 'N/A', 'Historico', 'Irrompeu', 'N/R', '".$disciplina."', 'Não', '".$acompanhante."')";
	$resultado = mysql_query($sql) or die(mysql_error());
}else{}

if(isset($_POST['erupcionar17'])){
	$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, nm_tipoPlano, nm_observacao, nm_situacao, nm_disciplina, nm_ausente, nm_acompanhante) VALUES (NULL, '".$paciente."', '".$denticao."', '".$dupla."', '".$semestre."', '17', 'Erupcionar', 'N/A', '".$professor."', 'N/R', 'Sim', '".date('d/m/Y')."', 'N/A', 'Historico', 'Irrompeu', 'N/R', '".$disciplina."', 'Não', '".$acompanhante."')";
	$resultado = mysql_query($sql) or die(mysql_error());
}else{}

if(isset($_POST['erupcionar16'])){
	$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, nm_tipoPlano, nm_observacao, nm_situacao, nm_disciplina, nm_ausente, nm_acompanhante) VALUES (NULL, '".$paciente."', '".$denticao."', '".$dupla."', '".$semestre."', '16', 'Erupcionar', 'N/A', '".$professor."', 'N/R', 'Sim', '".date('d/m/Y')."', 'N/A', 'Historico', 'Irrompeu', 'N/R', '".$disciplina."', 'Não', '".$acompanhante."')";
	$resultado = mysql_query($sql) or die(mysql_error());
}else{}

if(isset($_POST['erupcionar55'])){
	
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='55' AND nm_ativo='Sim' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
			
	$sqlU = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Nao',`dt_inclusao`='".date('d/m/Y')."',`nm_tipoPlano`='Historico',`nm_observacao`='Esfoliou' WHERE `nr_idOdontogramaInfantil`=".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, nm_tipoPlano, nm_observacao, nm_situacao, nm_disciplina, nm_ausente, nm_acompanhante) VALUES (NULL, '".$paciente."', '".$denticao."', '".$dupla."', '".$semestre."', '15', 'Erupcionar', 'N/A', '".$professor."', 'N/R', 'Sim', '".date('d/m/Y')."', 'N/A', 'Historico', 'Irrompeu', 'N/R', '".$disciplina."', 'Não', '".$acompanhante."')";
	$resultado = mysql_query($sql) or die(mysql_error());
}else{}

if(isset($_POST['erupcionar53'])){
	
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='53' AND nm_ativo='Sim' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
			
	$sqlU = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Nao',`dt_inclusao`='".date('d/m/Y')."',`nm_tipoPlano`='Historico',`nm_observacao`='Esfoliou' WHERE `nr_idOdontogramaInfantil`=".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, nm_tipoPlano, nm_observacao, nm_situacao, nm_disciplina, nm_ausente, nm_acompanhante) VALUES (NULL, '".$paciente."', '".$denticao."', '".$dupla."', '".$semestre."', '13', 'Erupcionar', 'N/A', '".$professor."', 'N/R', 'Sim', '".date('d/m/Y')."', 'N/A', 'Historico', 'Irrompeu', 'N/R', '".$disciplina."', 'Não', '".$acompanhante."')";
	$resultado = mysql_query($sql) or die(mysql_error());
}else{}

if(isset($_POST['erupcionar54'])){
	
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='54' AND nm_ativo='Sim' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
			
	$sqlU = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Nao',`dt_inclusao`='".date('d/m/Y')."',`nm_tipoPlano`='Historico',`nm_observacao`='Esfoliou' WHERE `nr_idOdontogramaInfantil`=".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, nm_tipoPlano, nm_observacao, nm_situacao, nm_disciplina, nm_ausente, nm_acompanhante) VALUES (NULL, '".$paciente."', '".$denticao."', '".$dupla."', '".$semestre."', '14', 'Erupcionar', 'N/A', '".$professor."', 'N/R', 'Sim', '".date('d/m/Y')."', 'N/A', 'Historico', 'Irrompeu', 'N/R', '".$disciplina."', 'Não', '".$acompanhante."')";
	$resultado = mysql_query($sql) or die(mysql_error());
}else{}

if(isset($_POST['erupcionar52'])){
	
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='52' AND nm_ativo='Sim' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
			
	$sqlU = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Nao',`dt_inclusao`='".date('d/m/Y')."',`nm_tipoPlano`='Historico',`nm_observacao`='Esfoliou' WHERE `nr_idOdontogramaInfantil`=".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, nm_tipoPlano, nm_observacao, nm_situacao, nm_disciplina, nm_ausente, nm_acompanhante) VALUES (NULL, '".$paciente."', '".$denticao."', '".$dupla."', '".$semestre."', '12', 'Erupcionar', 'N/A', '".$professor."', 'N/R', 'Sim', '".date('d/m/Y')."', 'N/A', 'Historico', 'Irrompeu', 'N/R', '".$disciplina."', 'Não', '".$acompanhante."')";
	$resultado = mysql_query($sql) or die(mysql_error());
}else{}

if(isset($_POST['erupcionar51'])){
	
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='51' AND nm_ativo='Sim' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
			
	$sqlU = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Nao',`dt_inclusao`='".date('d/m/Y')."',`nm_tipoPlano`='Historico',`nm_observacao`='Esfoliou' WHERE `nr_idOdontogramaInfantil`=".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, nm_tipoPlano, nm_observacao, nm_situacao, nm_disciplina, nm_ausente, nm_acompanhante) VALUES (NULL, '".$paciente."', '".$denticao."', '".$dupla."', '".$semestre."', '11', 'Erupcionar', 'N/A', '".$professor."', 'N/R', 'Sim', '".date('d/m/Y')."', 'N/A', 'Historico', 'Irrompeu', 'N/R', '".$disciplina."', 'Não', '".$acompanhante."')";
	$resultado = mysql_query($sql) or die(mysql_error());
}else{}

if(isset($_POST['erupcionar61'])){
	
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='61' AND nm_ativo='Sim' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
			
	$sqlU = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Nao',`dt_inclusao`='".date('d/m/Y')."',`nm_tipoPlano`='Historico',`nm_observacao`='Esfoliou' WHERE `nr_idOdontogramaInfantil`=".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, nm_tipoPlano, nm_observacao, nm_situacao, nm_disciplina, nm_ausente, nm_acompanhante) VALUES (NULL, '".$paciente."', '".$denticao."', '".$dupla."', '".$semestre."', '21', 'Erupcionar', 'N/A', '".$professor."', 'N/R', 'Sim', '".date('d/m/Y')."', 'N/A', 'Historico', 'Irrompeu', 'N/R', '".$disciplina."', 'Não', '".$acompanhante."')";
	$resultado = mysql_query($sql) or die(mysql_error());
}else{}

if(isset($_POST['erupcionar62'])){
	
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='62' AND nm_ativo='Sim' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
			
	$sqlU = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Nao',`dt_inclusao`='".date('d/m/Y')."',`nm_tipoPlano`='Historico',`nm_observacao`='Esfoliou' WHERE `nr_idOdontogramaInfantil`=".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, nm_tipoPlano, nm_observacao, nm_situacao, nm_disciplina, nm_ausente, nm_acompanhante) VALUES (NULL, '".$paciente."', '".$denticao."', '".$dupla."', '".$semestre."', '22', 'Erupcionar', 'N/A', '".$professor."', 'N/R', 'Sim', '".date('d/m/Y')."', 'N/A', 'Historico', 'Irrompeu', 'N/R', '".$disciplina."', 'Não', '".$acompanhante."')";
	$resultado = mysql_query($sql) or die(mysql_error());
}else{}

if(isset($_POST['erupcionar63'])){
	
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='63' AND nm_ativo='Sim' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
			
	$sqlU = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Nao',`dt_inclusao`='".date('d/m/Y')."',`nm_tipoPlano`='Historico',`nm_observacao`='Esfoliou' WHERE `nr_idOdontogramaInfantil`=".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, nm_tipoPlano, nm_observacao, nm_situacao, nm_disciplina, nm_ausente, nm_acompanhante) VALUES (NULL, '".$paciente."', '".$denticao."', '".$dupla."', '".$semestre."', '23', 'Erupcionar', 'N/A', '".$professor."', 'N/R', 'Sim', '".date('d/m/Y')."', 'N/A', 'Historico', 'Irrompeu', 'N/R', '".$disciplina."', 'Não', '".$acompanhante."')";
	$resultado = mysql_query($sql) or die(mysql_error());
}else{}

if(isset($_POST['erupcionar64'])){
	
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='64' AND nm_ativo='Sim' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
			
	$sqlU = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Nao',`dt_inclusao`='".date('d/m/Y')."',`nm_tipoPlano`='Historico',`nm_observacao`='Esfoliou' WHERE `nr_idOdontogramaInfantil`=".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, nm_tipoPlano, nm_observacao, nm_situacao, nm_disciplina, nm_ausente, nm_acompanhante) VALUES (NULL, '".$paciente."', '".$denticao."', '".$dupla."', '".$semestre."', '24', 'Erupcionar', 'N/A', '".$professor."', 'N/R', 'Sim', '".date('d/m/Y')."', 'N/A', 'Historico', 'Irrompeu', 'N/R', '".$disciplina."', 'Não', '".$acompanhante."')";
	$resultado = mysql_query($sql) or die(mysql_error());
}else{}

if(isset($_POST['erupcionar65'])){
	
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='65' AND nm_ativo='Sim' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
			
	$sqlU = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Nao',`dt_inclusao`='".date('d/m/Y')."',`nm_tipoPlano`='Historico',`nm_observacao`='Esfoliou' WHERE `nr_idOdontogramaInfantil`=".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, nm_tipoPlano, nm_observacao, nm_situacao, nm_disciplina, nm_ausente, nm_acompanhante) VALUES (NULL, '".$paciente."', '".$denticao."', '".$dupla."', '".$semestre."', '25', 'Erupcionar', 'N/A', '".$professor."', 'N/R', 'Sim', '".date('d/m/Y')."', 'N/A', 'Historico', 'Irrompeu', 'N/R', '".$disciplina."', 'Não', '".$acompanhante."')";
	$resultado = mysql_query($sql) or die(mysql_error());
}else{}

if(isset($_POST['erupcionar26'])){
	$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, nm_tipoPlano, nm_observacao, nm_situacao, nm_disciplina, nm_ausente, nm_acompanhante) VALUES (NULL, '".$paciente."', '".$denticao."', '".$dupla."', '".$semestre."', '26', 'Erupcionar', 'N/A', '".$professor."', 'N/R', 'Sim', '".date('d/m/Y')."', 'N/A', 'Historico', 'Irrompeu', 'N/R', '".$disciplina."', 'Não', '".$acompanhante."')";
	$resultado = mysql_query($sql) or die(mysql_error());
}else{}

if(isset($_POST['erupcionar27'])){
	$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, nm_tipoPlano, nm_observacao, nm_situacao, nm_disciplina, nm_ausente, nm_acompanhante) VALUES (NULL, '".$paciente."', '".$denticao."', '".$dupla."', '".$semestre."', '27', 'Erupcionar', 'N/A', '".$professor."', 'N/R', 'Sim', '".date('d/m/Y')."', 'N/A', 'Historico', 'Irrompeu', 'N/R', '".$disciplina."', 'Não', '".$acompanhante."')";
	$resultado = mysql_query($sql) or die(mysql_error());
}else{}

if(isset($_POST['erupcionar28'])){
	$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, nm_tipoPlano, nm_observacao, nm_situacao, nm_disciplina, nm_ausente, nm_acompanhante) VALUES (NULL, '".$paciente."', '".$denticao."', '".$dupla."', '".$semestre."', '28', 'Erupcionar', 'N/A', '".$professor."', 'N/R', 'Sim', '".date('d/m/Y')."', 'N/A', 'Historico', 'Irrompeu', 'N/R', '".$disciplina."', 'Não', '".$acompanhante."')";
	$resultado = mysql_query($sql) or die(mysql_error());
}else{}

if(isset($_POST['erupcionar46'])){
	$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, nm_tipoPlano, nm_observacao, nm_situacao, nm_disciplina, nm_ausente, nm_acompanhante) VALUES (NULL, '".$paciente."', '".$denticao."', '".$dupla."', '".$semestre."', '46', 'Erupcionar', 'N/A', '".$professor."', 'N/R', 'Sim', '".date('d/m/Y')."', 'N/A', 'Historico', 'Irrompeu', 'N/R', '".$disciplina."', 'Não', '".$acompanhante."')";
	$resultado = mysql_query($sql) or die(mysql_error());
}else{}

if(isset($_POST['erupcionar47'])){
	$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, nm_tipoPlano, nm_observacao, nm_situacao, nm_disciplina, nm_ausente, nm_acompanhante) VALUES (NULL, '".$paciente."', '".$denticao."', '".$dupla."', '".$semestre."', '47', 'Erupcionar', 'N/A', '".$professor."', 'N/R', 'Sim', '".date('d/m/Y')."', 'N/A', 'Historico', 'Irrompeu', 'N/R', '".$disciplina."', 'Não', '".$acompanhante."')";
	$resultado = mysql_query($sql) or die(mysql_error());
}else{}

if(isset($_POST['erupcionar48'])){
	$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, nm_tipoPlano, nm_observacao, nm_situacao, nm_disciplina, nm_ausente, nm_acompanhante) VALUES (NULL, '".$paciente."', '".$denticao."', '".$dupla."', '".$semestre."', '48', 'Erupcionar', 'N/A', '".$professor."', 'N/R', 'Sim', '".date('d/m/Y')."', 'N/A', 'Historico', 'Irrompeu', 'N/R', '".$disciplina."', 'Não', '".$acompanhante."')";
	$resultado = mysql_query($sql) or die(mysql_error());
}else{}

if(isset($_POST['erupcionar85'])){
	
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='85' AND nm_ativo='Sim' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
			
	$sqlU = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Nao',`dt_inclusao`='".date('d/m/Y')."',`nm_tipoPlano`='Historico',`nm_observacao`='Esfoliou' WHERE `nr_idOdontogramaInfantil`=".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, nm_tipoPlano, nm_observacao, nm_situacao, nm_disciplina, nm_ausente, nm_acompanhante) VALUES (NULL, '".$paciente."', '".$denticao."', '".$dupla."', '".$semestre."', '45', 'Erupcionar', 'N/A', '".$professor."', 'N/R', 'Sim', '".date('d/m/Y')."', 'N/A', 'Historico', 'Irrompeu', 'N/R', '".$disciplina."', 'Não', '".$acompanhante."')";
	$resultado = mysql_query($sql) or die(mysql_error());
}else{}

if(isset($_POST['erupcionar84'])){
	
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='84' AND nm_ativo='Sim' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
			
	$sqlU = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Nao',`dt_inclusao`='".date('d/m/Y')."',`nm_tipoPlano`='Historico',`nm_observacao`='Esfoliou' WHERE `nr_idOdontogramaInfantil`=".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, nm_tipoPlano, nm_observacao, nm_situacao, nm_disciplina, nm_ausente, nm_acompanhante) VALUES (NULL, '".$paciente."', '".$denticao."', '".$dupla."', '".$semestre."', '44', 'Erupcionar', 'N/A', '".$professor."', 'N/R', 'Sim', '".date('d/m/Y')."', 'N/A', 'Historico', 'Irrompeu', 'N/R', '".$disciplina."', 'Não', '".$acompanhante."')";
	$resultado = mysql_query($sql) or die(mysql_error());
}else{}

if(isset($_POST['erupcionar83'])){
	
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='83' AND nm_ativo='Sim' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
			
	$sqlU = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Nao',`dt_inclusao`='".date('d/m/Y')."',`nm_tipoPlano`='Historico',`nm_observacao`='Esfoliou' WHERE `nr_idOdontogramaInfantil`=".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, nm_tipoPlano, nm_observacao, nm_situacao, nm_disciplina, nm_ausente, nm_acompanhante) VALUES (NULL, '".$paciente."', '".$denticao."', '".$dupla."', '".$semestre."', '43', 'Erupcionar', 'N/A', '".$professor."', 'N/R', 'Sim', '".date('d/m/Y')."', 'N/A', 'Historico', 'Irrompeu', 'N/R', '".$disciplina."', 'Não', '".$acompanhante."')";
	$resultado = mysql_query($sql) or die(mysql_error());
}else{}

if(isset($_POST['erupcionar82'])){
	
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='82' AND nm_ativo='Sim' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
			
	$sqlU = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Nao',`dt_inclusao`='".date('d/m/Y')."',`nm_tipoPlano`='Historico',`nm_observacao`='Esfoliou' WHERE `nr_idOdontogramaInfantil`=".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, nm_tipoPlano, nm_observacao, nm_situacao, nm_disciplina, nm_ausente, nm_acompanhante) VALUES (NULL, '".$paciente."', '".$denticao."', '".$dupla."', '".$semestre."', '42', 'Erupcionar', 'N/A', '".$professor."', 'N/R', 'Sim', '".date('d/m/Y')."', 'N/A', 'Historico', 'Irrompeu', 'N/R', '".$disciplina."', 'Não', '".$acompanhante."')";
	$resultado = mysql_query($sql) or die(mysql_error());
}else{}

if(isset($_POST['erupcionar81'])){
	
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='81' AND nm_ativo='Sim' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
			
	$sqlU = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Nao',`dt_inclusao`='".date('d/m/Y')."',`nm_tipoPlano`='Historico',`nm_observacao`='Esfoliou' WHERE `nr_idOdontogramaInfantil`=".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, nm_tipoPlano, nm_observacao, nm_situacao, nm_disciplina, nm_ausente, nm_acompanhante) VALUES (NULL, '".$paciente."', '".$denticao."', '".$dupla."', '".$semestre."', '41', 'Erupcionar', 'N/A', '".$professor."', 'N/R', 'Sim', '".date('d/m/Y')."', 'N/A', 'Historico', 'Irrompeu', 'N/R', '".$disciplina."', 'Não', '".$acompanhante."')";
	$resultado = mysql_query($sql) or die(mysql_error());
}else{}

if(isset($_POST['erupcionar71'])){
	
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='71' AND nm_ativo='Sim' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
			
	$sqlU = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Nao',`dt_inclusao`='".date('d/m/Y')."',`nm_tipoPlano`='Historico',`nm_observacao`='Esfoliou' WHERE `nr_idOdontogramaInfantil`=".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, nm_tipoPlano, nm_observacao, nm_situacao, nm_disciplina, nm_ausente, nm_acompanhante) VALUES (NULL, '".$paciente."', '".$denticao."', '".$dupla."', '".$semestre."', '31', 'Erupcionar', 'N/A', '".$professor."', 'N/R', 'Sim', '".date('d/m/Y')."', 'N/A', 'Historico', 'Irrompeu', 'N/R', '".$disciplina."', 'Não', '".$acompanhante."')";
	$resultado = mysql_query($sql) or die(mysql_error());
}else{}

if(isset($_POST['erupcionar72'])){
	
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='72' AND nm_ativo='Sim' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
			
	$sqlU = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Nao',`dt_inclusao`='".date('d/m/Y')."',`nm_tipoPlano`='Historico',`nm_observacao`='Esfoliou' WHERE `nr_idOdontogramaInfantil`=".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, nm_tipoPlano, nm_observacao, nm_situacao, nm_disciplina, nm_ausente, nm_acompanhante) VALUES (NULL, '".$paciente."', '".$denticao."', '".$dupla."', '".$semestre."', '32', 'Erupcionar', 'N/A', '".$professor."', 'N/R', 'Sim', '".date('d/m/Y')."', 'N/A', 'Historico', 'Irrompeu', 'N/R', '".$disciplina."', 'Não', '".$acompanhante."')";
	$resultado = mysql_query($sql) or die(mysql_error());
}else{}

if(isset($_POST['erupcionar73'])){
	
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='73' AND nm_ativo='Sim' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
			
	$sqlU = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Nao',`dt_inclusao`='".date('d/m/Y')."',`nm_tipoPlano`='Historico',`nm_observacao`='Esfoliou' WHERE `nr_idOdontogramaInfantil`=".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, nm_tipoPlano, nm_observacao, nm_situacao, nm_disciplina, nm_ausente, nm_acompanhante) VALUES (NULL, '".$paciente."', '".$denticao."', '".$dupla."', '".$semestre."', '33', 'Erupcionar', 'N/A', '".$professor."', 'N/R', 'Sim', '".date('d/m/Y')."', 'N/A', 'Historico', 'Irrompeu', 'N/R', '".$disciplina."', 'Não', '".$acompanhante."')";
	$resultado = mysql_query($sql) or die(mysql_error());
}else{}

if(isset($_POST['erupcionar74'])){
	
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='74' AND nm_ativo='Sim' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
			
	$sqlU = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Nao',`dt_inclusao`='".date('d/m/Y')."',`nm_tipoPlano`='Historico',`nm_observacao`='Esfoliou' WHERE `nr_idOdontogramaInfantil`=".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, nm_tipoPlano, nm_observacao, nm_situacao, nm_disciplina, nm_ausente, nm_acompanhante) VALUES (NULL, '".$paciente."', '".$denticao."', '".$dupla."', '".$semestre."', '34', 'Erupcionar', 'N/A', '".$professor."', 'N/R', 'Sim', '".date('d/m/Y')."', 'N/A', 'Historico', 'Irrompeu', 'N/R', '".$disciplina."', 'Não', '".$acompanhante."')";
	$resultado = mysql_query($sql) or die(mysql_error());
}else{}

if(isset($_POST['erupcionar75'])){
	
	$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_POST['cpf']."' AND nr_dente='75' AND nm_ativo='Sim' LIMIT 1";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$id = $linhaNome['nr_idOdontogramaInfantil'];
	}
			
	$sqlU = "UPDATE `tb_odontogramainfantil` SET `nm_ativo`='Nao',`dt_inclusao`='".date('d/m/Y')."',`nm_tipoPlano`='Historico',`nm_observacao`='Esfoliou' WHERE `nr_idOdontogramaInfantil`=".$id;
	$resultadoU = mysql_query($sqlU) or die(mysql_error());
	
	$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, nm_tipoPlano, nm_observacao, nm_situacao, nm_disciplina, nm_ausente, nm_acompanhante) VALUES (NULL, '".$paciente."', '".$denticao."', '".$dupla."', '".$semestre."', '35', 'Erupcionar', 'N/A', '".$professor."', 'N/R', 'Sim', '".date('d/m/Y')."', 'N/A', 'Historico', 'Irrompeu', 'N/R', '".$disciplina."', 'Não', '".$acompanhante."')";
	$resultado = mysql_query($sql) or die(mysql_error());
}else{}

if(isset($_POST['erupcionar36'])){
	$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, nm_tipoPlano, nm_observacao, nm_situacao, nm_disciplina, nm_ausente, nm_acompanhante) VALUES (NULL, '".$paciente."', '".$denticao."', '".$dupla."', '".$semestre."', '36', 'Erupcionar', 'N/A', '".$professor."', 'N/R', 'Sim', '".date('d/m/Y')."', 'N/A', 'Historico', 'Irrompeu', 'N/R', '".$disciplina."', 'Não', '".$acompanhante."')";
	$resultado = mysql_query($sql) or die(mysql_error());
}else{}

if(isset($_POST['erupcionar37'])){
	$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, nm_tipoPlano, nm_observacao, nm_situacao, nm_disciplina, nm_ausente, nm_acompanhante) VALUES (NULL, '".$paciente."', '".$denticao."', '".$dupla."', '".$semestre."', '37', 'Erupcionar', 'N/A', '".$professor."', 'N/R', 'Sim', '".date('d/m/Y')."', 'N/A', 'Historico', 'Irrompeu', 'N/R', '".$disciplina."', 'Não', '".$acompanhante."')";
	$resultado = mysql_query($sql) or die(mysql_error());
}else{}

if(isset($_POST['erupcionar38'])){
	$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, nm_tipoPlano, nm_observacao, nm_situacao, nm_disciplina, nm_ausente, nm_acompanhante) VALUES (NULL, '".$paciente."', '".$denticao."', '".$dupla."', '".$semestre."', '38', 'Erupcionar', 'N/A', '".$professor."', 'N/R', 'Sim', '".date('d/m/Y')."', 'N/A', 'Historico', 'Irrompeu', 'N/R', '".$disciplina."', 'Não', '".$acompanhante."')";
	$resultado = mysql_query($sql) or die(mysql_error());
}else{}

/*
			
			}else{
				$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', '".$dente."', 'N/A', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', 'N/A')";
				$resultado = mysql_query($sql) or die(mysql_error());
			}

*/
header("Location: odontogramaInfantil.php?cpf=".$_POST['cpf']);

?>