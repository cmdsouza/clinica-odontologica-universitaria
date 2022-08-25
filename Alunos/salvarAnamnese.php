<?php

date_default_timezone_set('america/sao_paulo');
include "../conexao.php";

$cpfPaciente = $_POST['cpfPaciente'];
$cpfMedico = $_POST['cpfMedico'];
$remedio = $_POST['remedio'];
$quaisRemedios = $_POST['quaisRemedios'];
$alergia = $_POST['alergia'];
$quaisAlergias = $_POST['quaisAlergias'];
$pressao = $_POST['pressao'];
$coracao = $_POST['coracao'];
$ar = $_POST['ar'];
$sangramento = $_POST['sangramento'];
$cicatrizacao = $_POST['cicatrizacao'];
$cirurgia = $_POST['cirurgia'];

$generoPaciente = $_POST['generoPaciente'];
if($generoPaciente == 'Masculino'){
	$gravidez = 'Nao';
	$semanasGravidez = '0';
}else{
	$gravidez = $_POST['gravidez'];
	$semanasGravidez = $_POST['semanasGravidez'];
}

$problemasSaude = $_POST['problemasSaude'];
$principalQueixa = $_POST['principalQueixa'];
$reacaoAnestesia = $_POST['reacaoAnestesia'];
$quaisReacoes = $_POST['quaisReacoes'];
$ultimoTratamento = $_POST['ultimoTratamento'];
$dorDenteGengiva = $_POST['dorDenteGengiva'];
$sangramentoGengiva = $_POST['sangramentoGengiva'];
$gostoBocaSeca = $_POST['gostoBocaSeca'];
$quantidadeEscovar = $_POST['quantidadeEscovar'];
$fioDental = $_POST['fioDental'];
$estalos = $_POST['estalos'];
$ranger = $_POST['ranger'];
$feridaBolha = $_POST['feridaBolha'];
$fuma = $_POST['fuma'];

$preenchimento = date('d/m/Y');

$idConsulta = $_POST['idConsulta'];

$sql = "INSERT INTO tb_anamnese(nr_idAnamnese, nr_cpfPaciente, nr_cpfAluno, dt_preenchimento, nm_remedio, nm_quaisRemedios, nm_alergia, nm_quaisAlergias, nm_pressao, nm_coracao, nm_ar, nm_sangramento, nm_cicatrizacao, nm_cirurgia, nm_sexo, nm_gravidez, nm_semanasGravidez, nm_problemaSaude, nm_principalQueixa, nm_reacaoAnestesia, nm_quaisReacoes, nm_ultimoTratamento, nm_dorDenteGengiva, nm_sangramentoGengiva, nm_gostoBocaSeca, nm_quantidadeEscovar, nm_fioDental, nm_estalos, nm_ranger, nm_feridaBolha, nm_fuma) VALUES (NULL, '".$cpfPaciente."', '".$cpfMedico."', '".$preenchimento."', '".$remedio."', '".$quaisRemedios."', '".$alergia."', '".$quaisAlergias."', '".$pressao."', '".$coracao."', '".$ar."', '".$sangramento."', '".$cicatrizacao."', '".$cirurgia."', '".$generoPaciente."', '".$gravidez."', '".$semanasGravidez."', '".$problemasSaude."', '".$principalQueixa."', '".$reacaoAnestesia."', '".$quaisReacoes."', '".$ultimoTratamento."', '".$dorDenteGengiva."', '".$sangramentoGengiva."', '".$gostoBocaSeca."', '".$quantidadeEscovar."', '".$fioDental."', '".$estalos."', '".$ranger."', '".$feridaBolha."', '".$fuma."')";
$resultado = mysql_query($sql) or die();

header("Location: odontograma.php?idConsulta=".$idConsulta);

?>