<?php

session_start();
include "../conexao.php";
date_default_timezone_set('America/Sao_Paulo');

$denticao = $_POST['denticao'];
$paciente = $_POST['paciente'];
$dupla = $_POST['dupla'];
$professor = $_POST['professor'];
$semestre = $_POST['semestre'];
$disciplina = $_POST['disciplina'];

if($denticao == 'Permanente'){
	
	$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$paciente."' AND nr_periodo = '".$semestre."'";
	$resultadoAnam = mysql_query($sqlAnam) or die();
	$numImg = mysql_num_rows($resultadoAnam);
	
	switch($semestre){
		case "2019/2":
			$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`, `nm_disciplina`) VALUES (NULL, '".$paciente."', '".$denticao."', ".$dupla.", '".$professor."', 0, 0, 0, 0, 'N/R', 'N/R', 'N/R', 'N/R', '".$semestre."', '".$disciplina."')";
			$resultado = mysql_query($sql) or die(mysql_error());
			header("Location: odontograma.php?cpf=".$paciente."&semestre=".$_POST['semestre']);
		break;
		
		case "2020/1":
			$anterior = '2019/2';
		break;
		
		case "2020/2":
			$anterior = '2020/1';
		break;
		
		case "2021/1":
			$anterior = '2020/2';
		break;
		
		case "2021/2":
			$anterior = '2020/1';
		break;
		
		default:
			$anterior = '2019/2';
	}
	
	$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$paciente."' AND nr_periodo = '".$anterior."'";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$sql = "INSERT INTO `tb_odontograma`(`nr_idOdontograma`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_cpfProfessor`, `nr_dente`, `nm_face`, `nr_idTratamento`, `nr_diagnostico`, `nm_situacao`, `nm_professor`, `dt_inclusao`, `dt_realizacao`, `nm_ausente`, `nr_periodo`, `nm_disciplina`, `nm_plano`) VALUES (NULL, '".$linhaNome['nr_cpfPaciente']."', '".$linhaNome['nm_tipoDenticao']."', ".$linhaNome['nr_idDupla'].", '".$linhaNome['nr_cpfProfessor']."', '".$linhaNome['nr_dente']."', '".$linhaNome['nm_face']."', ".$linhaNome['nr_idTratamento'].", ".$linhaNome['nr_diagnostico'].", '".$linhaNome['nm_situacao']."', '".$linhaNome['nm_professor']."', '".$linhaNome['dt_inclusao']."', '".$linhaNome['dt_realizacao']."', '".$linhaNome['nm_ausente']."', '".$semestre."', '".$disciplina."', '".$linhaNome['nm_plano']."')";
		$resultado = mysql_query($sql) or die(mysql_error());
	}
	
	header("Location: odontograma.php?cpf=".$paciente."&semestre=".$_POST['semestre']);
	
}else{
	$contador1 = 51;
	while($contador1 < 56){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, nm_tipoPlano, `nm_observacao`, `nm_situacao`, `nm_disciplina`, `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$paciente."', '".$denticao."', '".$dupla."', '".$semestre."', '".$contador1."', 'N/R', 'N/R', '".$professor."', 'N/R', 'Sim', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', '".$disciplina."', 'Não', '".$_POST['responsavel']."')";
		$resultado = mysql_query($sql) or die(mysql_error());
		$contador1 = $contador1 + 1;
	}
	
	$contador2 = 61;
	while($contador2 < 66){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, nm_tipoPlano, `nm_observacao`, `nm_situacao`, `nm_disciplina`, `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$paciente."', '".$denticao."', '".$dupla."', '".$semestre."', '".$contador2."', 'N/R', 'N/R', '".$professor."', 'N/R', 'Sim', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', '".$disciplina."', 'Não', '".$_POST['responsavel']."')";
		$resultado = mysql_query($sql) or die(mysql_error());
		$contador2 = $contador2 + 1;
	}
	
	$contador3 = 71;
	while($contador3 < 76){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, nm_tipoPlano, `nm_observacao`, `nm_situacao`, `nm_disciplina`, `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$paciente."', '".$denticao."', '".$dupla."', '".$semestre."', '".$contador3."', 'N/R', 'N/R', '".$professor."', 'N/R', 'Sim', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', '".$disciplina."', 'Não', '".$_POST['responsavel']."')";
		$resultado = mysql_query($sql) or die(mysql_error());
		$contador3 = $contador3 + 1;
	}
	
	$contador4 = 81;
	while($contador4 < 86){
		$sql = "INSERT INTO `tb_odontogramainfantil`(`nr_idOdontogramaInfantil`, `nr_cpfPaciente`, `nm_tipoDenticao`, `nr_idDupla`, `nr_semestre`, `nr_dente`, `nm_diagnostico`, `nm_tratamento`, `nr_cpfProfessor`, `nm_professor`, `nm_ativo`, `dt_inclusao`, `dt_aprovacao`, nm_tipoPlano, `nm_observacao`, `nm_situacao`, `nm_disciplina`, `nm_ausente`, `nm_acompanhante`) VALUES (NULL, '".$paciente."', '".$denticao."', '".$dupla."', '".$semestre."', '".$contador4."', 'N/R', 'N/R', '".$professor."', 'N/R', 'Sim', 'N/R', 'N/R', 'N/R', 'N/R', 'N/R', '".$disciplina."', 'Não', '".$_POST['responsavel']."')";
		$resultado = mysql_query($sql) or die(mysql_error());
		$contador4 = $contador4 + 1;
	}
	
	header("Location: odontogramainfantil.php?cpf=".$paciente);
}

?>