<?php

session_start();

date_default_timezone_set('america/sao_paulo');
header('Content-Type: text/html; charset=utf-8');
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

include "../conexao.php";


if(isset($_POST['faltaTrabalho'])){
	$justificativa1 = "<img src='icones/marcado.png'> &nbsp; Justificativa de falta ao trabalho<br>";
}else{ $justificativa1 = ""; }

if(isset($_POST['atividadesEscolares'])){
	$justificativa2 = "<img src='icones/marcado.png'> &nbsp; Dispensa de atividades escolares<br>";
}else{ $justificativa2 = ""; }

if(isset($_POST['atividadesEsportivas'])){
	$justificativa3 = "<img src='icones/marcado.png'> &nbsp; Dispensa de atividades desportivas<br>";
}else{ $justificativa3 = ""; }

if(isset($_POST['atividadesJudiciais'])){
	$justificativa4 = "<img src='icones/marcado.png'> &nbsp; Justificativa de falta ao trabalho<br>";
}else{ $justificativa4 = ""; }

if(isset($_POST['atividadesMilitares'])){
	$justificativa5 = "<img src='icones/marcado.png'> &nbsp; Justificativa de falta ao trabalho<br>";
}else{ $justificativa5 = ""; }

$nome = $_POST['nomeRepresentante'];
$interessado = $_POST['interessado'];

$CPF = $_POST['CPF'];
$sqlNome = "SELECT * FROM tb_paciente WHERE nr_cpfPaciente ='".$CPF."'";
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


$hora1 = $_POST['hora1'];
$hora2 = $_POST['hora2'];
$hora = $_POST['hora'];
$cid = $_POST['cid'];
$dentista = $_POST['dentista'];

if($cid == 'vazio'){
	$cid1 = '';
	$cid2 = '';
}else{
	$cid1 = "<td width='50%'><div style='border-style: solid;' width='50%'><center>CID - ".$cid."</center></div></td>
			<td><br></td>
			<td><br></td>
			<td><br></td>
			<td><br></td>
			<td><br></td>
			<td><br></td>
			<td><br></td>
			<td><br></td>
			<td><br></td>
			<td><br></td>
			<td><br></td>
			<td><br></td>
			<td><br></td>
			<td><br></td>
			<td><br></td>
			<td><br></td>
			<td><br></td>
			<td><br></td>
			<td><br></td>
			<td><br></td>
			<td><br></td>
			<td><br></td>";
			
	$cid2 = "<p align='justify'>Eu, ".$paciente.", autorizo o Dr. ".$dentista.", a registrar o diagnostico codificado CID, ou por extenso neste atestado médico.</p>
	
	<br><br><br>
	<center>
		__________________________________<br>
		Assinatura do paciente/responsável
	</center>";
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
	
	<center><h2>ATESTADO MÉDICO</h2></center>
	<br>
	
	Atesto, para o fim específico de: 
	<br><br><p align='right'>".$justificativa1." ".$justificativa2." ".$justificativa3." ".$justificativa4." ".$justificativa5."</p>
	
	
	<p align='justify'>A pedido do ".$interessado." ".$nome.", que ".$paciente.", portador do RG. nº.: ".$rg.", residente e domiciliado à ".$endereco.", esteve sob meus cuidados profissionais no período das ".$hora1." às ".$hora2." horas, do dia ".date('d/m/Y').", devendo permanecer em repouso por ".$hora." horas a partir desta data.</p>

	
	<br>
	<center>
	
	<table border='0'>
		<tr>
			".$cid1."
			<td width='50%'>
				<center>
					____________________________________<br>
					Assinatura e carimbo do profissional
				</center>
			</td>
		<tr>
	</table>
	
	<center>
	<br><br>
	
	
	<br><br>
	
	".$cid2."
	
	<br>
	<p align='right'>Vitória, ".date('d/m/Y')."</p><br>
	
	<br>

	
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