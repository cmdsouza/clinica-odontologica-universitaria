<?php

session_start();
date_default_timezone_set('america/sao_paulo');
include "../conexao.php";


$plano = $_POST['plano'];
$dente = $_POST['dente'];
$diagnostico = $_POST['diagnostico'];
$tratamento = $_POST['tratamento'];
$observacao = $_POST['observacao'];
$cpf = $_POST['cpf'];
$situacao = $_POST['situacao'];
$ausente = $_POST['ausente'];

$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$cpf."' AND nm_ativo='Sim' ORDER BY nr_idOdontogramaInfantil LIMIT 1";
$resultadoNome = mysql_query($sqlNome) or die();
while($linhaNome = mysql_fetch_array($resultadoNome)){
	$denticao = $linhaNome['nm_tipoDenticao'];
	$dupla = $linhaNome['nr_idDupla'];
	$semestre = $linhaNome['nr_semestre'];
	$cpfProfessor = $linhaNome['nr_cpfProfessor'];
	$professor = $linhaNome['nm_professor'];
	$disciplina = $linhaNome['nm_disciplina'];
	$acompanhante = $linhaNome['nm_acompanhante'];
}

$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '".$dente."', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
$resultado = mysql_query($sql) or die(mysql_error());

	if(isset($_POST['repetir18'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '18', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir17'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '17', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir16'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '16', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir15'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '15', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir14'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '14', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir13'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '13', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir12'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '12', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir11'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '11', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir21'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '21', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir22'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '22', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir23'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '23', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir24'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '24', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir25'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '25', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir26'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '26', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir27'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '27', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir28'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '28', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir55'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '55', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir54'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '54', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir53'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '53', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir52'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '52', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir51'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '51', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir61'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '61', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir62'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '62', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir63'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '63', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir64'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '64', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir65'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '65', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir85'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '85', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir84'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '84', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir83'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '83', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir82'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '82', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir81'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '81', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir71'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '71', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir72'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '72', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir73'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '73', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir74'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '74', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir75'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '75', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir48'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '48', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir47'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '47', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir46'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '46', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir45'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '45', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir44'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '44', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir43'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '43', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir42'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '42', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir41'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '41', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir31'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '31', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir32'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '32', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir33'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '33', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir34'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '34', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir35'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '35', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir36'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '36', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir37'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '37', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

	if(isset($_POST['repetir38'])){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, `nm_tipoPlano`, `nm_observacao`, `nm_situacao`, `nm_disciplina` , `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$cpf."', '".$denticao."', '".$dupla."', '".$semestre."', '38', '".$diagnostico."', '".$tratamento."', '".$cpfProfessor."', '".$professor."', 'Nao', '".date('d/m/Y')."', 'N/R', '".$plano."', '".$observacao."', '".$situacao."', '".$disciplina."', '".$ausente."', '".$acompanhante."')";
		$resultado = mysql_query($sql) or die(mysql_error());	
	}else{}

header("Location: odontogramainfantil.php?cpf=".$_POST['cpf']);

?>