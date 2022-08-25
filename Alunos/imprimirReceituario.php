<?php

session_start();

date_default_timezone_set('america/sao_paulo');
header('Content-Type: text/html; charset=utf-8');
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

include "../conexao.php";

$cpfPaciente = $_GET['cpf'];

$sqlNomePaciente = "SELECT * FROM tb_paciente WHERE nr_cpfPaciente ='".$cpfPaciente."'";
$resultadoNomePaciente = mysql_query($sqlNomePaciente) or die();
while($linhaNomePaciente = mysql_fetch_array($resultadoNomePaciente)){
	$nomePaciente = $linhaNomePaciente['nm_nomePaciente'];
	$idEnd = $linhaNomePaciente['nr_idEndereco'];
}

$sqlEndPaciente = "SELECT * FROM tb_endereco WHERE nr_idEndereco =".$idEnd;
$resultadoEndPaciente = mysql_query($sqlEndPaciente) or die();
while($linhaEndPaciente = mysql_fetch_array($resultadoEndPaciente)){
	$endereco = "CEP: ".$linhaEndPaciente['nr_cep'].", Rua: ".$linhaEndPaciente['nm_rua'].", Complemento: ".$linhaEndPaciente['nm_complemento'].", Bairro: ".$linhaEndPaciente['nm_bairro'].", Cidade: ".$linhaEndPaciente['nm_cidade']."";
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
	<center><h2>RECEITUÁRIO</h2></center>
	<b>Paciente:</b> ".$nomePaciente."<br>
	<b>Endereço:</b> ".$endereco."
	<br><br>
	
	".$_GET['txtArtigo']."

	<br>
	<p align='right'>Vitória, ".date('d/m/Y')."</p><br>
	
	<br>
	<center>
	_____________________________________<br>
	Assinatura e Carimbo do Profissional
	</center>
	
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