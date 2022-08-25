<?php

session_start();
date_default_timezone_set('america/sao_paulo');
include "../conexao.php";

$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_POST['paciente']."' AND nr_periodo ='".$_POST['semestre']."'";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$tipo = $linhaNome['nm_tipoDenticao'];
		$id = $linhaNome['nr_idOdontograma'];
		$dupla = $linhaNome['nr_idDupla'];
		$prof = $linhaNome['nr_cpfProfessor'];
		$disciplina = $linhaNome['nm_disciplina'];
}

if($tipo == 'Permanente'){
	$dente = $_POST['dente'];
	$paciente = $_POST['paciente'];
	$face = $_POST['face'];
	$tratamento = $_POST['tratamento'];
	$diagnostico = $_POST['diagnostico'];
	$situacao = $_POST['situacao'];
	$ausente = $_POST['ausente'];
	$semestre = $_POST['semestre'];
	$plano = $_POST['plano'];
	
	if($ausente == 'Sim'){
		$tratamento = 0;
		$diagnostico = 0;
		$face = 'Todas';
		$situacao = 'Existente';
	}else{}
	
	switch($dente){

		case "arcada_completa":
			$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_POST['paciente']."' AND nr_dente='0' AND nm_face='0' AND nr_idTratamento=0 AND nr_diagnostico=0 AND nr_periodo = '".$semestre."'";
			$resultadoNome = mysql_query($sqlNome) or die();
			$quant = mysql_num_rows($resultadoNome);
			
			if($quant != 0){
				$sql = "UPDATE tb_odontograma SET nr_dente='".$dente."', nm_face='N/A', nr_idTratamento=".$tratamento.", nr_diagnostico=".$diagnostico.", nm_situacao='".$situacao."', nm_professor = 'N/R', dt_inclusao = '".date('d/m/Y')."', dt_realizacao = 'N/R', nm_ausente='N/A', nm_disciplina = '".$disciplina."', nm_plano = '".$plano."'  WHERE nr_idOdontograma=".$id." AND nr_periodo = '".$semestre."'";
				$resultado = mysql_query($sql) or die(mysql_error());
			}else{
				echo $sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', '".$dente."', 'N/A', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', 'N/A', '".$semestre."','".$disciplina."','".$plano."')";
				$resultado = mysql_query($sql) or die(mysql_error());
			}
		break;
		
		case "arcada_superior":
			$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_POST['paciente']."' AND nr_dente='0' AND nm_face='0' AND nr_idTratamento=0 AND nr_diagnostico=0 AND nr_periodo = '".$semestre."'";
			$resultadoNome = mysql_query($sqlNome) or die();
			$quant = mysql_num_rows($resultadoNome);
			
			if($quant != 0){
				$sql = "UPDATE tb_odontograma SET nr_dente='".$dente."', nm_face='N/A', nr_idTratamento=".$tratamento.", nr_diagnostico=".$diagnostico.", nm_situacao='".$situacao."', nm_professor = 'N/R', dt_inclusao = '".date('d/m/Y')."', dt_realizacao = 'N/R', nm_ausente='N/A', nm_disciplina = '".$disciplina."', nm_plano = '".$plano."' WHERE nr_idOdontograma=".$id." AND nr_periodo = '".$semestre."'";
				$resultado = mysql_query($sql) or die(mysql_error());
			}else{
				$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', '".$dente."', 'N/A', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', 'N/A', '".$semestre."','".$disciplina."','".$plano."')";
				$resultado = mysql_query($sql) or die(mysql_error());
			}
		break;
		
		case "arcada_inferior":
			$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_POST['paciente']."' AND nr_dente='0' AND nm_face='0' AND nr_idTratamento=0 AND nr_diagnostico=0 AND nr_periodo = '".$semestre."'";
			$resultadoNome = mysql_query($sqlNome) or die();
			$quant = mysql_num_rows($resultadoNome);
			
			if($quant != 0){
				$sql = "UPDATE tb_odontograma SET nr_dente='".$dente."', nm_face='N/A', nr_idTratamento=".$tratamento.", nr_diagnostico=".$diagnostico.", nm_situacao='".$situacao."', nm_professor = 'N/R', dt_inclusao = '".date('d/m/Y')."', dt_realizacao = 'N/R', nm_ausente='N/A', nm_disciplina = '".$disciplina."', nm_plano = '".$plano."' WHERE nr_idOdontograma=".$id." AND nr_periodo = '".$semestre."'";
				$resultado = mysql_query($sql) or die(mysql_error());
			}else{
				$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', '".$dente."', 'N/A', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', 'N/A', '".$semestre."','".$disciplina."','".$plano."')";
				$resultado = mysql_query($sql) or die(mysql_error());
			}
		break;
		
		default:
			if($face != 'Todas'){
				if(($face == 'MOD') || ($face == 'MOV') || ($face == 'MOL/P') || ($face == 'MV') || ($face == 'ML/P') || ($face == 'MD') || ($face == 'OD') || ($face == 'OV') || ($face == 'OL/P') || ($face == 'DL/P') || ($face == 'DV')){
					
					switch($face){
						case "MOD":
						
							$contador2 = 0;
							$teste2 = array('Distal','Mesial','Oclusal');
							while($contador2 < 3){
								
								echo $face = $teste2[$contador2];
								$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_POST['paciente']."' AND nr_dente='0' AND nm_face='0' AND nr_idTratamento=0 AND nr_diagnostico=0 AND nr_periodo = '".$semestre."'";
								$resultadoNome = mysql_query($sqlNome) or die();
								$quant = mysql_num_rows($resultadoNome);
								
								if($quant != 0){
									echo $sql = "UPDATE tb_odontograma SET nr_dente='".$dente."', nm_face='".$face."', nr_idTratamento=".$tratamento.", nr_diagnostico=".$diagnostico.", nm_situacao='".$situacao."', nm_professor = 'N/R', dt_inclusao = '".date('d/m/Y')."', dt_realizacao = 'N/R', nm_ausente = '".$ausente."', nm_disciplina = '".$disciplina."', nm_plano = '".$plano."' WHERE nr_idOdontograma=".$id." AND nr_periodo = '".$semestre."'";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', '".$dente."', '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}

								if(isset($_POST['repetir18'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 18, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir17'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 17, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir16'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 16, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir15'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 15, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir14'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 14, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir13'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 13, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir12'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 12, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir11'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 11, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir21'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 21, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir22'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 22, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir23'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 23, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir24'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 24, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir25'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 25, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir26'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 26, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir27'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 27, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir28'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 28, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir48'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 48, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir47'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 47, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir46'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 46, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir45'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 45, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir44'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 44, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir43'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 43, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir42'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 42, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir41'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 41, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir31'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 31, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir32'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 32, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir33'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 33, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir34'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 34, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir35'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 35, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir36'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 36, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir37'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 37, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir38'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 38, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								$contador2 = $contador2 + 1;
							}
												
						break;
						
						case "MOV":
						
							$contador2 = 0;
							$teste2 = array('Oclusal','Mesial','Vestibular');
							while($contador2 < 3){
								
								echo $face = $teste2[$contador2];
								$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_POST['paciente']."' AND nr_dente='0' AND nm_face='0' AND nr_idTratamento=0 AND nr_diagnostico=0 AND nr_periodo = '".$semestre."'";
								$resultadoNome = mysql_query($sqlNome) or die();
								$quant = mysql_num_rows($resultadoNome);
								
								if($quant != 0){
									echo $sql = "UPDATE tb_odontograma SET nr_dente='".$dente."', nm_face='".$face."', nr_idTratamento=".$tratamento.", nr_diagnostico=".$diagnostico.", nm_situacao='".$situacao."', nm_professor = 'N/R', dt_inclusao = '".date('d/m/Y')."', dt_realizacao = 'N/R', nm_ausente = '".$ausente."', nm_disciplina = '".$disciplina."', nm_plano = '".$plano."' WHERE nr_idOdontograma=".$id." AND nr_periodo = '".$semestre."'";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', '".$dente."', '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}

								if(isset($_POST['repetir18'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 18, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir17'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 17, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir16'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 16, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir15'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 15, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir14'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 14, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir13'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 13, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir12'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 12, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir11'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 11, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir21'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 21, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir22'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 22, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir23'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 23, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir24'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 24, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir25'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 25, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir26'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 26, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir27'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 27, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir28'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 28, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir48'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 48, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir47'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 47, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir46'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 46, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir45'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 45, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir44'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 44, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir43'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 43, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir42'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 42, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir41'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 41, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir31'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 31, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir32'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 32, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir33'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 33, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir34'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 34, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir35'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 35, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir36'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 36, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir37'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 37, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir38'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 38, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								$contador2 = $contador2 + 1;
							}
						
						break;
						
						case "MOL/P":
						
							$contador2 = 0;
							$teste2 = array('Mesial','Lingual/Palatina','Oclusal');
							while($contador2 < 3){
								
								echo $face = $teste2[$contador2];
								$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_POST['paciente']."' AND nr_dente='0' AND nm_face='0' AND nr_idTratamento=0 AND nr_diagnostico=0 AND nr_periodo = '".$semestre."'";
								$resultadoNome = mysql_query($sqlNome) or die();
								$quant = mysql_num_rows($resultadoNome);
								
								if($quant != 0){
									echo $sql = "UPDATE tb_odontograma SET nr_dente='".$dente."', nm_face='".$face."', nr_idTratamento=".$tratamento.", nr_diagnostico=".$diagnostico.", nm_situacao='".$situacao."', nm_professor = 'N/R', dt_inclusao = '".date('d/m/Y')."', dt_realizacao = 'N/R', nm_ausente = '".$ausente."', nm_disciplina = '".$disciplina."', nm_plano = '".$plano."' WHERE nr_idOdontograma=".$id." AND nr_periodo = '".$semestre."'";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', '".$dente."', '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}

								if(isset($_POST['repetir18'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 18, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir17'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 17, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir16'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 16, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir15'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 15, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir14'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 14, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir13'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 13, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir12'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 12, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir11'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 11, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir21'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 21, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir22'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 22, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir23'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 23, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir24'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 24, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir25'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 25, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir26'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 26, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir27'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 27, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir28'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 28, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir48'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 48, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir47'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 47, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir46'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 46, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir45'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 45, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir44'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 44, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir43'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 43, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir42'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 42, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir41'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 41, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir31'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 31, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir32'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 32, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir33'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 33, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir34'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 34, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir35'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 35, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir36'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 36, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir37'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 37, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir38'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 38, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								$contador2 = $contador2 + 1;
							}
						
						break;
						
						case "MV":
						
							$contador2 = 0;
							$teste2 = array('Mesial','Vestibular');
							while($contador2 < 2){
								
								echo $face = $teste2[$contador2];
								$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_POST['paciente']."' AND nr_dente='0' AND nm_face='0' AND nr_idTratamento=0 AND nr_diagnostico=0 AND nr_periodo = '".$semestre."'";
								$resultadoNome = mysql_query($sqlNome) or die();
								$quant = mysql_num_rows($resultadoNome);
								
								if($quant != 0){
									echo $sql = "UPDATE tb_odontograma SET nr_dente='".$dente."', nm_face='".$face."', nr_idTratamento=".$tratamento.", nr_diagnostico=".$diagnostico.", nm_situacao='".$situacao."', nm_professor = 'N/R', dt_inclusao = '".date('d/m/Y')."', dt_realizacao = 'N/R', nm_ausente = '".$ausente."', nm_disciplina = '".$disciplina."', nm_plano = '".$plano."' WHERE nr_idOdontograma=".$id." AND nr_periodo = '".$semestre."'";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', '".$dente."', '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}

								if(isset($_POST['repetir18'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 18, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir17'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 17, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir16'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 16, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir15'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 15, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir14'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 14, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir13'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 13, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir12'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 12, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir11'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 11, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir21'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 21, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir22'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 22, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir23'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 23, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir24'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 24, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir25'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 25, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir26'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 26, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir27'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 27, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir28'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 28, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir48'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 48, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir47'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 47, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir46'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 46, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir45'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 45, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir44'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 44, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir43'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 43, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir42'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 42, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir41'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 41, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir31'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 31, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir32'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 32, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir33'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 33, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir34'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 34, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir35'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 35, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir36'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 36, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir37'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 37, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir38'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 38, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								$contador2 = $contador2 + 1;
							}
						
						break;
						
						case "ML/P":
						
							$contador2 = 0;
							$teste2 = array('Mesial','Lingual/Palatina');
							while($contador2 < 2){
								
								echo $face = $teste2[$contador2];
								$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_POST['paciente']."' AND nr_dente='0' AND nm_face='0' AND nr_idTratamento=0 AND nr_diagnostico=0 AND nr_periodo = '".$semestre."'";
								$resultadoNome = mysql_query($sqlNome) or die();
								$quant = mysql_num_rows($resultadoNome);
								
								if($quant != 0){
									echo $sql = "UPDATE tb_odontograma SET nr_dente='".$dente."', nm_face='".$face."', nr_idTratamento=".$tratamento.", nr_diagnostico=".$diagnostico.", nm_situacao='".$situacao."', nm_professor = 'N/R', dt_inclusao = '".date('d/m/Y')."', dt_realizacao = 'N/R', nm_ausente = '".$ausente."', nm_disciplina = '".$disciplina."', nm_plano = '".$plano."' WHERE nr_idOdontograma=".$id." AND nr_periodo = '".$semestre."'";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', '".$dente."', '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}

								if(isset($_POST['repetir18'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 18, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir17'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 17, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir16'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 16, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir15'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 15, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir14'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 14, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir13'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 13, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir12'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 12, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir11'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 11, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir21'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 21, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir22'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 22, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir23'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 23, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir24'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 24, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir25'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 25, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir26'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 26, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir27'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 27, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir28'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 28, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir48'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 48, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir47'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 47, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir46'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 46, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir45'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 45, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir44'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 44, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir43'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 43, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir42'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 42, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir41'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 41, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir31'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 31, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir32'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 32, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir33'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 33, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir34'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 34, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir35'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 35, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir36'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 36, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir37'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 37, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir38'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 38, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								$contador2 = $contador2 + 1;
							}
						
						break;
						
						case "MD":
						
							$contador2 = 0;
							$teste2 = array('Distal','Mesial');
							while($contador2 < 2){
								
								echo $face = $teste2[$contador2];
								$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_POST['paciente']."' AND nr_dente='0' AND nm_face='0' AND nr_idTratamento=0 AND nr_diagnostico=0 AND nr_periodo = '".$semestre."'";
								$resultadoNome = mysql_query($sqlNome) or die();
								$quant = mysql_num_rows($resultadoNome);
								
								if($quant != 0){
									echo $sql = "UPDATE tb_odontograma SET nr_dente='".$dente."', nm_face='".$face."', nr_idTratamento=".$tratamento.", nr_diagnostico=".$diagnostico.", nm_situacao='".$situacao."', nm_professor = 'N/R', dt_inclusao = '".date('d/m/Y')."', dt_realizacao = 'N/R', nm_ausente = '".$ausente."', nm_disciplina = '".$disciplina."', nm_plano = '".$plano."' WHERE nr_idOdontograma=".$id." AND nr_periodo = '".$semestre."'";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', '".$dente."', '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}

								if(isset($_POST['repetir18'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 18, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir17'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 17, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir16'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 16, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir15'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 15, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir14'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 14, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir13'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 13, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir12'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 12, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir11'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 11, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir21'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 21, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir22'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 22, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir23'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 23, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir24'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 24, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir25'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 25, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir26'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 26, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir27'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 27, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir28'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 28, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir48'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 48, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir47'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 47, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir46'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 46, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir45'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 45, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir44'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 44, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir43'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 43, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir42'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 42, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir41'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 41, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir31'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 31, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir32'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 32, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir33'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 33, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir34'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 34, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir35'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 35, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir36'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 36, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir37'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 37, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir38'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 38, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								$contador2 = $contador2 + 1;
							}
						
						break;
						
						case "OD":
						
							$contador2 = 0;
							$teste2 = array('Distal','Oclusal');
							while($contador2 < 2){
								
								echo $face = $teste2[$contador2];
								$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_POST['paciente']."' AND nr_dente='0' AND nm_face='0' AND nr_idTratamento=0 AND nr_diagnostico=0 AND nr_periodo = '".$semestre."'";
								$resultadoNome = mysql_query($sqlNome) or die();
								$quant = mysql_num_rows($resultadoNome);
								
								if($quant != 0){
									echo $sql = "UPDATE tb_odontograma SET nr_dente='".$dente."', nm_face='".$face."', nr_idTratamento=".$tratamento.", nr_diagnostico=".$diagnostico.", nm_situacao='".$situacao."', nm_professor = 'N/R', dt_inclusao = '".date('d/m/Y')."', dt_realizacao = 'N/R', nm_ausente = '".$ausente."', nm_disciplina = '".$disciplina."', nm_plano = '".$plano."' WHERE nr_idOdontograma=".$id." AND nr_periodo = '".$semestre."'";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', '".$dente."', '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}

								if(isset($_POST['repetir18'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 18, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir17'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 17, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir16'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 16, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir15'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 15, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir14'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 14, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir13'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 13, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir12'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 12, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir11'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 11, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir21'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 21, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir22'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 22, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir23'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 23, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir24'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 24, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir25'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 25, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir26'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 26, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir27'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 27, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir28'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 28, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir48'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 48, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir47'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 47, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir46'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 46, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir45'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 45, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir44'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 44, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir43'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 43, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir42'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 42, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir41'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 41, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir31'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 31, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir32'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 32, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir33'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 33, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir34'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 34, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir35'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 35, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir36'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 36, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir37'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 37, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir38'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 38, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								$contador2 = $contador2 + 1;
							}
						
						break;
						
						case "OV":
						
							$contador2 = 0;
							$teste2 = array('Vestibular','Oclusal');
							while($contador2 < 2){
								
								echo $face = $teste2[$contador2];
								$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_POST['paciente']."' AND nr_dente='0' AND nm_face='0' AND nr_idTratamento=0 AND nr_diagnostico=0 AND nr_periodo = '".$semestre."'";
								$resultadoNome = mysql_query($sqlNome) or die();
								$quant = mysql_num_rows($resultadoNome);
								
								if($quant != 0){
									echo $sql = "UPDATE tb_odontograma SET nr_dente='".$dente."', nm_face='".$face."', nr_idTratamento=".$tratamento.", nr_diagnostico=".$diagnostico.", nm_situacao='".$situacao."', nm_professor = 'N/R', dt_inclusao = '".date('d/m/Y')."', dt_realizacao = 'N/R', nm_ausente = '".$ausente."', nm_disciplina = '".$disciplina."', nm_plano = '".$plano."' WHERE nr_idOdontograma=".$id." AND nr_periodo = '".$semestre."'";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', '".$dente."', '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}

								if(isset($_POST['repetir18'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 18, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir17'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 17, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir16'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 16, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir15'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 15, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir14'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 14, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir13'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 13, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir12'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 12, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir11'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 11, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir21'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 21, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir22'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 22, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir23'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 23, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir24'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 24, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir25'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 25, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir26'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 26, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir27'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 27, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir28'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 28, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir48'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 48, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir47'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 47, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir46'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 46, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir45'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 45, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir44'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 44, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir43'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 43, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir42'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 42, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir41'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 41, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir31'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 31, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir32'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 32, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir33'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 33, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir34'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 34, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir35'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 35, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir36'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 36, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir37'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 37, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir38'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 38, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								$contador2 = $contador2 + 1;
							}
						
						break;
						
						case "OL/P":
						
							$contador2 = 0;
							$teste2 = array('Lingual/Palatina','Oclusal');
							while($contador2 < 2){
								
								echo $face = $teste2[$contador2];
								$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_POST['paciente']."' AND nr_dente='0' AND nm_face='0' AND nr_idTratamento=0 AND nr_diagnostico=0 AND nr_periodo = '".$semestre."'";
								$resultadoNome = mysql_query($sqlNome) or die();
								$quant = mysql_num_rows($resultadoNome);
								
								if($quant != 0){
									echo $sql = "UPDATE tb_odontograma SET nr_dente='".$dente."', nm_face='".$face."', nr_idTratamento=".$tratamento.", nr_diagnostico=".$diagnostico.", nm_situacao='".$situacao."', nm_professor = 'N/R', dt_inclusao = '".date('d/m/Y')."', dt_realizacao = 'N/R', nm_ausente = '".$ausente."', nm_disciplina = '".$disciplina."', nm_plano = '".$plano."' WHERE nr_idOdontograma=".$id." AND nr_periodo = '".$semestre."'";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', '".$dente."', '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}

								if(isset($_POST['repetir18'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 18, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir17'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 17, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir16'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 16, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir15'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 15, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir14'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 14, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir13'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 13, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir12'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 12, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir11'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 11, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir21'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 21, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir22'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 22, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir23'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 23, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir24'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 24, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir25'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 25, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir26'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 26, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir27'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 27, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir28'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 28, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir48'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 48, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir47'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 47, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir46'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 46, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir45'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 45, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir44'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 44, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir43'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 43, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir42'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 42, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir41'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 41, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir31'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 31, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir32'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 32, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir33'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 33, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir34'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 34, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir35'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 35, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir36'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 36, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir37'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 37, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir38'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 38, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								$contador2 = $contador2 + 1;
							}
						
						break;
						
						case "DL/P":
						
							$contador2 = 0;
							$teste2 = array('Distal','Lingual/Palatina');
							while($contador2 < 2){
								
								echo $face = $teste2[$contador2];
								$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_POST['paciente']."' AND nr_dente='0' AND nm_face='0' AND nr_idTratamento=0 AND nr_diagnostico=0 AND nr_periodo = '".$semestre."'";
								$resultadoNome = mysql_query($sqlNome) or die();
								$quant = mysql_num_rows($resultadoNome);
								
								if($quant != 0){
									echo $sql = "UPDATE tb_odontograma SET nr_dente='".$dente."', nm_face='".$face."', nr_idTratamento=".$tratamento.", nr_diagnostico=".$diagnostico.", nm_situacao='".$situacao."', nm_professor = 'N/R', dt_inclusao = '".date('d/m/Y')."', dt_realizacao = 'N/R', nm_ausente = '".$ausente."', nm_disciplina = '".$disciplina."', nm_plano = '".$plano."' WHERE nr_idOdontograma=".$id." AND nr_periodo = '".$semestre."'";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', '".$dente."', '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}

								if(isset($_POST['repetir18'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 18, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir17'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 17, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir16'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 16, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir15'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 15, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir14'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 14, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir13'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 13, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir12'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 12, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir11'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 11, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir21'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 21, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir22'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 22, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir23'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 23, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir24'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 24, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir25'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 25, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir26'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 26, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir27'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 27, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir28'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 28, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir48'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 48, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir47'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 47, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir46'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 46, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir45'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 45, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir44'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 44, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir43'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 43, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir42'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 42, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir41'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 41, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir31'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 31, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir32'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 32, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir33'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 33, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir34'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 34, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir35'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 35, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir36'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 36, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir37'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 37, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir38'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 38, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								$contador2 = $contador2 + 1;
							}
						
						break;
						
						case "DV":
						
							$contador2 = 0;
							$teste2 = array('Distal','Vestibular');
							while($contador2 < 2){
								
								echo $face = $teste2[$contador2];
								$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_POST['paciente']."' AND nr_dente='0' AND nm_face='0' AND nr_idTratamento=0 AND nr_diagnostico=0 AND nr_periodo = '".$semestre."'";
								$resultadoNome = mysql_query($sqlNome) or die();
								$quant = mysql_num_rows($resultadoNome);
								
								if($quant != 0){
									echo $sql = "UPDATE tb_odontograma SET nr_dente='".$dente."', nm_face='".$face."', nr_idTratamento=".$tratamento.", nr_diagnostico=".$diagnostico.", nm_situacao='".$situacao."', nm_professor = 'N/R', dt_inclusao = '".date('d/m/Y')."', dt_realizacao = 'N/R', nm_ausente = '".$ausente."', nm_disciplina = '".$disciplina."', nm_plano = '".$plano."' WHERE nr_idOdontograma=".$id." AND nr_periodo = '".$semestre."'";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', '".$dente."', '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}

								if(isset($_POST['repetir18'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 18, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir17'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 17, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir16'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 16, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir15'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 15, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir14'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 14, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir13'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 13, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir12'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 12, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir11'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 11, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir21'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 21, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir22'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 22, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir23'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 23, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir24'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 24, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir25'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 25, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir26'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 26, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir27'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 27, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir28'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 28, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir48'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 48, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir47'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 47, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir46'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 46, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir45'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 45, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir44'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 44, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir43'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 43, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir42'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 42, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir41'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 41, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir31'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 31, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir32'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 32, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir33'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 33, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir34'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 34, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir35'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 35, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir36'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 36, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir37'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 37, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								if(isset($_POST['repetir38'])){
									$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 38, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
									$resultado = mysql_query($sql) or die(mysql_error());
								}else{}
								
								$contador2 = $contador2 + 1;
							}
						
						break;
					}
					
				}else{
					$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_POST['paciente']."' AND nr_dente='0' AND nm_face='0' AND nr_idTratamento=0 AND nr_diagnostico=0";
					$resultadoNome = mysql_query($sqlNome) or die();
					$quant = mysql_num_rows($resultadoNome);
					
					if($quant != 0){
						echo $sql = "UPDATE tb_odontograma SET nr_dente='".$dente."', nm_face='".$face."', nr_idTratamento=".$tratamento.", nr_diagnostico=".$diagnostico.", nm_situacao='".$situacao."', nm_professor = 'N/R', dt_inclusao = '".date('d/m/Y')."', dt_realizacao = 'N/R', nm_ausente = '".$ausente."', nm_disciplina = '".$disciplina."', nm_plano = '".$plano."' WHERE nr_idOdontograma=".$id." AND nr_periodo = '".$semestre."'";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', '".$dente."', '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}

					if(isset($_POST['repetir18'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 18, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir17'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 17, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir16'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 16, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir15'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 15, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir14'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 14, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir13'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 13, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir12'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 12, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir11'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 11, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir21'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 21, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir22'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 22, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir23'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 23, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir24'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 24, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir25'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 25, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir26'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 26, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir27'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 27, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir28'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 28, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir48'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 48, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir47'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 47, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir46'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 46, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir45'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 45, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir44'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 44, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir43'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 43, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir42'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 42, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir41'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 41, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir31'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 31, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir32'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 32, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir33'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 33, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir34'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 34, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir35'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 35, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir36'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 36, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir37'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 37, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir38'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 38, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
				}
			}else{
				
				$contador = 0;
				$teste = array('Vestibular','Distal','Lingual/Palatina','Mesial','Terco Mesial','Terco Medio','Terco Distal','Oclusal');
				while($contador < 8){
					
					$face = $teste[$contador];
					$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_POST['paciente']."' AND nr_dente='0' AND nm_face='0' AND nr_idTratamento=0 AND nr_diagnostico=0 AND nr_periodo = '".$semestre."'";
					$resultadoNome = mysql_query($sqlNome) or die();
					$quant = mysql_num_rows($resultadoNome);
					
					if($quant != 0){
						echo $sql = "UPDATE tb_odontograma SET nr_dente='".$dente."', nm_face='".$face."', nr_idTratamento=".$tratamento.", nr_diagnostico=".$diagnostico.", nm_situacao='".$situacao."', nm_professor = 'N/R', dt_inclusao = '".date('d/m/Y')."', dt_realizacao = 'N/R', nm_ausente = '".$ausente."', nm_disciplina = '".$disciplina."', nm_plano = '".$plano."' WHERE nr_idOdontograma=".$id." AND nr_periodo = '".$semestre."'";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', '".$dente."', '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}

					if(isset($_POST['repetir18'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 18, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir17'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 17, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir16'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 16, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir15'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 15, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir14'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 14, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir13'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 13, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir12'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 12, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir11'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 11, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir21'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 21, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir22'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 22, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir23'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 23, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir24'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 24, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir25'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 25, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir26'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 26, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir27'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 27, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir28'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 28, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir48'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 48, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir47'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 47, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir46'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 46, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir45'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 45, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir44'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 44, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir43'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 43, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir42'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 42, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir41'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 41, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir31'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 31, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir32'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 32, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir33'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 33, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir34'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 34, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir35'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 35, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir36'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 36, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir37'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 37, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					if(isset($_POST['repetir38'])){
						$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`,`nm_disciplina`,`nm_plano`) VALUES (NULL, '".$paciente."', '".$tipo."', ".$dupla.", '".$prof."', 38, '".$face."', ".$tratamento.", ".$diagnostico.", '".$situacao."', 'N/R', '".date('d/m/Y')."', 'N/R', '".$ausente."', '".$semestre."','".$disciplina."','".$plano."')";
						$resultado = mysql_query($sql) or die(mysql_error());
					}else{}
					
					$contador = $contador + 1;
					
				}
				
			}
		}
}

header("Location: odontograma.php?semestre=".$_POST['semestre']."&cpf=".$paciente);

?>