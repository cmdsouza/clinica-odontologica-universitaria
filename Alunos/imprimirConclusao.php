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
$sqlNome = "SELECT * FROM tb_paciente WHERE nr_cpfPaciente ='".$cpfPaciente."'";
$resultadoNome = mysql_query($sqlNome) or die();
while($linhaNome = mysql_fetch_array($resultadoNome)){
	$paciente = $linhaNome['nm_nomePaciente'];
	$rg = $linhaNome['nr_rg'];
	$id = $linhaNome['nr_idEndereco'];
}

$sqlEndPaciente = "SELECT * FROM tb_endereco WHERE nr_idEndereco =".$id;
$resultadoEndPaciente = mysql_query($sqlEndPaciente) or die();
while($linhaEndPaciente = mysql_fetch_array($resultadoEndPaciente)){
	$endereco = $linhaEndPaciente['nm_rua'].", Complemento: ".$linhaEndPaciente['nm_complemento'].", Bairro: ".$linhaEndPaciente['nm_bairro'].", Cidade: ".$linhaEndPaciente['nm_cidade'].", CEP: ".$linhaEndPaciente['nr_cep'];
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
	<center><h3>DECLARAÇÃO DE CONCLUSÃO DE TRATAMENTO ODONTOLÓGICO</h3></center>
	<br><br>
	
	<p align='justify'> Eu ".$_GET['paciente'].", portador do RG. nº.: ".$rg.", residente e domiciliado à ".$endereco.", declaro que nessa data, concluí integralmente o tratamento odontológico iniciado na Clínica Odontológica Multivix - Vitória </p>
	<br>
	
	<p align='right'>Vitória, ".$_GET['data']."</p>
	
	<br>
	<br>
	<br>
	<br>
	<center>
	___________________________________________<br>
	Assinatura do Paciente ou Responsável Legal
	</center>
	
	<br>
	<br>
	<br>
	<br>
	<center>
	___________________________________________<br>
	Assinatura do Professor Responsável Legal
	</center>
	
	<br>
	<br>
	<br>
	<br>
	<center>
	___________________________________________<br>
	Assinatura do Acadêmico Responsável Legal
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