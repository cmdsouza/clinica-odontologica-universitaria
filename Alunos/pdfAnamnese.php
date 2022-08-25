<?php

session_start();
$idConsulta = $_SESSION['idCOnsulta'];

date_default_timezone_set('america/sao_paulo');

include "../conexao.php";

$sqlNome = "SELECT * FROM tb_consulta WHERE nr_idConsulta =".$idConsulta;
$resultadoNome = mysql_query($sqlNome) or die();
while($linhaNome = mysql_fetch_array($resultadoNome)){
	$cpfPaciente = $linhaNome['nr_cpfPaciente'];
}

$sqlNomePaciente = "SELECT * FROM tb_paciente WHERE nr_cpfPaciente ='".$cpfPaciente."'";
$resultadoNomePaciente = mysql_query($sqlNomePaciente) or die();
while($linhaNomePaciente = mysql_fetch_array($resultadoNomePaciente)){
	$nomePaciente = $linhaNomePaciente['nm_nomePaciente'];
	$nascimento = $linhaNomePaciente['dt_nascimento'];
}

$sqlNome2 = "SELECT * FROM tb_anamnese WHERE nr_cpfPaciente ='".$cpfPaciente."'";
$resultadoNome2 = mysql_query($sqlNome2) or die();
while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
	$cpfAluno = $linhaNome2['nr_cpfAluno'];
	$dataPreenchimento = $linhaNome2['dt_preenchimento'];
	
	if($linhaNome2['nm_remedio']== 'Nao'){$remedio= "Não";}else{$remedio = $linhaNome2['nm_remedio'];}
	if($linhaNome2['nm_alergia']== 'Nao'){$alergia= "Não";}else{$alergia = $linhaNome2['nm_alergia'];}
	if($linhaNome2['nm_pressao']== 'Nao'){$pressao= "Não";}else{$pressao = $linhaNome2['nm_pressao'];}
	if($linhaNome2['nm_coracao']== 'Nao'){$coracao= "Não";}else{$coracao = $linhaNome2['nm_coracao'];}
	if($linhaNome2['nm_ar']== 'Nao'){$ar= "Não";}else{$ar = $linhaNome2['nm_ar'];}
	if($linhaNome2['nm_cirurgia']== 'Nao'){$cirurgia = "Não";}else{$cirurgia = $linhaNome2['nm_cirurgia'];}
	if($linhaNome2['nm_gravidez']== 'Nao'){$gravidez = "Não";}else{$gravidez = $linhaNome2['nm_gravidez'];}
	if($linhaNome2['nm_reacaoAnestesia']== 'Nao'){$anestesia= "Não";}else{$anestesia = $linhaNome2['nm_reacaoAnestesia'];}
	if($linhaNome2['nm_dorDenteGengiva']== 'Nao'){$dorDente= "Não";}else{$dorDente = $linhaNome2['nm_dorDenteGengiva'];}
	if($linhaNome2['nm_sangramentoGengiva']== 'Nao'){$sangramento= "Não";}else{$sangramento = $linhaNome2['nm_sangramentoGengiva'];}
	if($linhaNome2['nm_gostoBocaSeca']== 'Nao'){$gosto= "Não";}else{$gosto = $linhaNome2['nm_gostoBocaSeca'];}
	if($linhaNome2['nm_estalos']== 'Nao'){$estalos= "Não";}else{$estalos = $linhaNome2['nm_estalos'];}
	if($linhaNome2['nm_ranger']== 'Nao'){$ranger= "Não";}else{$ranger = $linhaNome2['nm_ranger'];}
	if($linhaNome2['nm_feridaBolha']== 'Nao'){$ferida= "Não";}else{$ferida = $linhaNome2['nm_feridaBolha'];}
	if($linhaNome2['nm_fuma']== 'Nao'){$fuma= "Não";}else{$fuma = $linhaNome2['nm_fuma'];}
	
	$quaisRemedios = $linhaNome2['nm_quaisRemedios'];
	$quaisAlergias = $linhaNome2['nm_quaisAlergias'];
	$sangramento = $linhaNome2['nm_sangramento'];
	$cicatrizacao = $linhaNome2['nm_cicatrizacao'];
	$sexo = $linhaNome2['nm_sexo'];
	$semanasGravidez = $linhaNome2['nm_semanasGravidez'];
	$problemaSaude = $linhaNome2['nm_problemaSaude'];
	$queixa = $linhaNome2['nm_principalQueixa'];
	$reacoesAnestesia = $linhaNome2['nm_quaisReacoes'];
	$ultimoTratamento = $linhaNome2['nm_ultimoTratamento'];
	$quantidade = $linhaNome2['nm_quantidadeEscovar'];
	$fioDental = $linhaNome2['nm_fioDental'];
}

$sqlNomeAluno = "SELECT * FROM tb_aluno WHERE nr_cpfAluno ='".$cpfAluno."'";
$resultadoNomeAluno = mysql_query($sqlNomeAluno) or die();
while($linhaNomeAluno = mysql_fetch_array($resultadoNomeAluno)){
	$nomeAluno = $linhaNomeAluno['nm_nomeAluno'];
}

/* Carrega a classe DOMPdf */
require_once("dompdf/dompdf_config.inc.php");

/* Cria a instância */
$dompdf = new DOMPDF();

	/* Carrega seu HTML */
	$dompdf->load_html("<p>

	<center><img src='dompdf/logo1.png'></center>
	<br>
	
	

	<br><br>
	<p align='justify'>Declaro, que após ter sido devidamente esclarecido sobre os propósitos, riscos, custos e alternativas de tratamento, conforme acima apresentados, aceito e autorizo a execução do tratamento, comprometendo-me a cumprir as orientações do profissional e arcar com os custos estipulados no planejamento de custos apresentado.</p><br>
	
	<p>Vitória, 2019.</p>

	<center><p>______________________________________________________</p></center>
	<center>Assinatura do Paciente ou seu Representante Legal </center> <br> <br>
	
	<center><p>______________________________________________________</p></center>
	<center>Assinatura do Aluno Responsável</center> <br>

	<br><br>
	<center><img src='dompdf/logo2.png'></center>
	
	</p>");

/* Renderiza */
$dompdf->render();

/* Exibe */
$dompdf->stream(
    "saida.pdf", /* Nome do arquivo de saída */
    array(
        "Attachment" => false /* Para download, altere para true */
    )
);
?>


