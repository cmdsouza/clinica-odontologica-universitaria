<?php

session_start();

date_default_timezone_set('america/sao_paulo');
header('Content-Type: text/html; charset=utf-8');
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

include "../conexao.php";

$fim = $_POST['fim'];

$CPF = $_POST['CPF'];
$sqlNome = "SELECT * FROM tb_paciente WHERE nr_cpfPaciente ='".$CPF."'";
$resultadoNome = mysql_query($sqlNome) or die();
while($linhaNome = mysql_fetch_array($resultadoNome)){
	$paciente = $linhaNome['nm_nomePaciente'];
}

/* Carrega a classe DOMPdf */
require_once("dompdf/dompdf_config.inc.php");

/* Cria a instância */
$dompdf = new DOMPDF();

	/* Carrega seu HTML */
	$dompdf->load_html("<p>

	<header>
        <img src='dompdf/logo1.png' width='50%' height='100%' style='position: fixed; top: -30px; left: 185px; right: 0px; height: 50px;'/>
    </header>
	<br>
	
	<center><h2>DECLARAÇÃO DE COMPARECIMENTO</h2></center>
	<br>
	
	<p align='justify'>Declaro para fins ".$fim." que o (a) senhor (a) ".$paciente.", compareceu à clínica odontológica no período de ".$_POST['hora1']." às ".$_POST['hora2']." horas do dia ".date('d/m/Y').".</p>

	
	<br><br>
	
	<center>
		____________________________________<br>
		Assinatura e carimbo do profissional
	</center>
	
	<br><br>
	<p align='right'>Vitória, ".date('d/m/Y')."</p><br>
	
	<br>

	
	<footer>
        <img src='dompdf/logo2.png' width='80%' height='5%'  style='position: fixed; bottom: -50px; left: 80px; right: 0px; background-color: lightblue; height: 50px;'/>
    </footer>
	
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