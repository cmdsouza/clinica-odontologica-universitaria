<center>
	<img src='dompdf/logo1.png'>
</center><br><br>

<?php
session_start();
date_default_timezone_set('america/sao_paulo');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
include "../conexao.php";

$sqlNome = "SELECT * FROM tb_paciente WHERE nr_cpfPaciente ='".$_GET['cpf']."'";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$paciente = $linhaNome['nm_nomePaciente'];
		$nascimento = $linhaNome['dt_nascimento'];
		$sexo = $linhaNome['nm_genero'];
}

header('Content-Type: text/html; charset=utf-8');
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

?>
	
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="../img/elements/logo.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Sistema Multplus | M+</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,300,550,550,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="../css/linearicons.css">
			<link rel="stylesheet" href="../css/owl.carousel.css">
			<link rel="stylesheet" href="../css/font-awesome.min.css">
			<link rel="stylesheet" href="../css/nice-select.css">			
			<link rel="stylesheet" href="../css/magnific-popup.css">
			<link rel="stylesheet" href="../css/bootstrap.css">
			<link rel="stylesheet" href="../css/main.css">
			
		<style>
			#table {
			  border: 1px solid rgb(59,172,230);
			}
			
			body{
				background-color:white;
			}
		</style>
		
		</head>
		<body>

		
		<style>
			#fadeout {
			  opacity: 1;
			  transition: 1s opacity;
			}
			</style>
			
		
		<!-- About Generic Start -->
		<div class="main-wrapper">	

				<div class="whole-wrap">
				<div class="container"><br><br>
					<div class="section">
	
		
		<div>
			<div>
				  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js'></script>
				  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js'></script>
				  
					
			</div>
		</div>
					</div>
			</div>
			<!-- End Generic Start -->		
		
		<?php
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '18' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg18 = mysql_num_rows($resultadoNome);
				if($numImg18 != 0){
					$ausente18_1 = "0";
					$ausente18_2 = "0";
				}else{
					$ausente18_1 = "1";
					$ausente18_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '17' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg17 = mysql_num_rows($resultadoNome);
				if($numImg17 != 0){
					$ausente17_1 = "0";
					$ausente17_2 = "0";
				}else{
					$ausente17_1 = "1";
					$ausente17_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '16' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg16 = mysql_num_rows($resultadoNome);
				if($numImg16 != 0){
					$ausente16_1 = "0";
					$ausente16_2 = "0";
				}else{
					$ausente16_1 = "1";
					$ausente16_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '15' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg15 = mysql_num_rows($resultadoNome);
				if($numImg15 != 0){
					$ausente15_1 = "0";
					$ausente15_2 = "0";
				}else{
					$ausente15_1 = "1";
					$ausente15_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '14' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg14 = mysql_num_rows($resultadoNome);
				if($numImg14 != 0){
					$ausente14_1 = "0";
					$ausente14_2 = "0";
				}else{
					$ausente14_1 = "1";
					$ausente14_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '13' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg13 = mysql_num_rows($resultadoNome);
				if($numImg13 != 0){
					$ausente13_1 = "0";
					$ausente13_2 = "0";
				}else{
					$ausente13_1 = "1";
					$ausente13_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '12' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg12 = mysql_num_rows($resultadoNome);
				if($numImg12 != 0){
					$ausente12_1 = "0";
					$ausente12_2 = "0";
				}else{
					$ausente12_1 = "1";
					$ausente12_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '11' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg11 = mysql_num_rows($resultadoNome);
				if($numImg11 != 0){
					$ausente11_1 = "0";
					$ausente11_2 = "0";
				}else{
					$ausente11_1 = "1";
					$ausente11_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '21' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg21 = mysql_num_rows($resultadoNome);
				if($numImg21 != 0){
					$ausente21_1 = "0";
					$ausente21_2 = "0";
				}else{
					$ausente21_1 = "1";
					$ausente21_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '22' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg22 = mysql_num_rows($resultadoNome);
				if($numImg22 != 0){
					$ausente22_1 = "0";
					$ausente22_2 = "0";
				}else{
					$ausente22_1 = "1";
					$ausente22_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '23' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg23 = mysql_num_rows($resultadoNome);
				if($numImg23 != 0){
					$ausente23_1 = "0";
					$ausente23_2 = "0";
				}else{
					$ausente23_1 = "1";
					$ausente23_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '24' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg24 = mysql_num_rows($resultadoNome);
				if($numImg24 != 0){
					$ausente24_1 = "0";
					$ausente24_2 = "0";
				}else{
					$ausente24_1 = "1";
					$ausente24_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '25' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg25 = mysql_num_rows($resultadoNome);
				if($numImg25 != 0){
					$ausente25_1 = "0";
					$ausente25_2 = "0";
				}else{
					$ausente25_1 = "1";
					$ausente25_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '26' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg26 = mysql_num_rows($resultadoNome);
				if($numImg26 != 0){
					$ausente26_1 = "0";
					$ausente26_2 = "0";
				}else{
					$ausente26_1 = "1";
					$ausente26_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '27' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg27 = mysql_num_rows($resultadoNome);
				if($numImg27 != 0){
					$ausente27_1 = "0";
					$ausente27_2 = "0";
				}else{
					$ausente27_1 = "1";
					$ausente27_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '28' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg28 = mysql_num_rows($resultadoNome);
				if($numImg28 != 0){
					$ausente28_1 = "0";
					$ausente28_2 = "0";
				}else{
					$ausente28_1 = "1";
					$ausente28_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '48' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg48 = mysql_num_rows($resultadoNome);
				if($numImg48 != 0){
					$ausente48_1 = "0";
					$ausente48_2 = "0";
				}else{
					$ausente48_1 = "1";
					$ausente48_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '47' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg47 = mysql_num_rows($resultadoNome);
				if($numImg47 != 0){
					$ausente47_1 = "0";
					$ausente47_2 = "0";
				}else{
					$ausente47_1 = "1";
					$ausente47_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '46' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg46 = mysql_num_rows($resultadoNome);
				if($numImg46 != 0){
					$ausente46_1 = "0";
					$ausente46_2 = "0";
				}else{
					$ausente46_1 = "1";
					$ausente46_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '45' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg45 = mysql_num_rows($resultadoNome);
				if($numImg45 != 0){
					$ausente45_1 = "0";
					$ausente45_2 = "0";
				}else{
					$ausente45_1 = "1";
					$ausente45_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '44' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg44 = mysql_num_rows($resultadoNome);
				if($numImg44 != 0){
					$ausente44_1 = "0";
					$ausente44_2 = "0";
				}else{
					$ausente44_1 = "1";
					$ausente44_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '43' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg43 = mysql_num_rows($resultadoNome);
				if($numImg43 != 0){
					$ausente43_1 = "0";
					$ausente43_2 = "0";
				}else{
					$ausente43_1 = "1";
					$ausente43_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '42' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg42 = mysql_num_rows($resultadoNome);
				if($numImg42 != 0){
					$ausente42_1 = "0";
					$ausente42_2 = "0";
				}else{
					$ausente42_1 = "1";
					$ausente42_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '41' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg41 = mysql_num_rows($resultadoNome);
				if($numImg41 != 0){
					$ausente41_1 = "0";
					$ausente41_2 = "0";
				}else{
					$ausente41_1 = "1";
					$ausente41_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '31' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg31 = mysql_num_rows($resultadoNome);
				if($numImg31 != 0){
					$ausente31_1 = "0";
					$ausente31_2 = "0";
				}else{
					$ausente31_1 = "1";
					$ausente31_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '32' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg32 = mysql_num_rows($resultadoNome);
				if($numImg32 != 0){
					$ausente32_1 = "0";
					$ausente32_2 = "0";
				}else{
					$ausente32_1 = "1";
					$ausente32_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '33' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg33 = mysql_num_rows($resultadoNome);
				if($numImg33 != 0){
					$ausente33_1 = "0";
					$ausente33_2 = "0";
				}else{
					$ausente33_1 = "1";
					$ausente33_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '34' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg34 = mysql_num_rows($resultadoNome);
				if($numImg34 != 0){
					$ausente34_1 = "0";
					$ausente34_2 = "0";
				}else{
					$ausente34_1 = "1";
					$ausente34_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '35' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg35 = mysql_num_rows($resultadoNome);
				if($numImg35 != 0){
					$ausente35_1 = "0";
					$ausente35_2 = "0";
				}else{
					$ausente35_1 = "1";
					$ausente35_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '36' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg36 = mysql_num_rows($resultadoNome);
				if($numImg36 != 0){
					$ausente36_1 = "0";
					$ausente36_2 = "0";
				}else{
					$ausente36_1 = "1";
					$ausente36_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '37' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg37 = mysql_num_rows($resultadoNome);
				if($numImg37 != 0){
					$ausente37_1 = "0";
					$ausente37_2 = "0";
				}else{
					$ausente37_1 = "1";
					$ausente37_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '38' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg38 = mysql_num_rows($resultadoNome);
				if($numImg38 != 0){
					$ausente38_1 = "0";
					$ausente38_2 = "0";
				}else{
					$ausente38_1 = "1";
					$ausente38_2 = "100";
				}
				
				//aqui
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '55' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg55 = mysql_num_rows($resultadoNome);
				if($numImg55 != 0){
					$ausente55_1 = "0";
					$ausente55_2 = "0";
				}else{
					$ausente55_1 = "1";
					$ausente55_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '54' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg54 = mysql_num_rows($resultadoNome);
				if($numImg54 != 0){
					$ausente54_1 = "0";
					$ausente54_2 = "0";
				}else{
					$ausente54_1 = "1";
					$ausente54_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '53' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg53 = mysql_num_rows($resultadoNome);
				if($numImg53 != 0){
					$ausente53_1 = "0";
					$ausente53_2 = "0";
				}else{
					$ausente53_1 = "1";
					$ausente53_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '52' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg52 = mysql_num_rows($resultadoNome);
				if($numImg52 != 0){
					$ausente52_1 = "0";
					$ausente52_2 = "0";
				}else{
					$ausente52_1 = "1";
					$ausente52_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '51' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg51 = mysql_num_rows($resultadoNome);
				if($numImg51 != 0){
					$ausente51_1 = "0";
					$ausente51_2 = "0";
				}else{
					$ausente51_1 = "1";
					$ausente51_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '61' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg61 = mysql_num_rows($resultadoNome);
				if($numImg61 != 0){
					$ausente61_1 = "0";
					$ausente61_2 = "0";
				}else{
					$ausente61_1 = "1";
					$ausente61_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '62' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg62 = mysql_num_rows($resultadoNome);
				if($numImg62 != 0){
					$ausente62_1 = "0";
					$ausente62_2 = "0";
				}else{
					$ausente62_1 = "1";
					$ausente62_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '63' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg63 = mysql_num_rows($resultadoNome);
				if($numImg63 != 0){
					$ausente63_1 = "0";
					$ausente63_2 = "0";
				}else{
					$ausente63_1 = "1";
					$ausente63_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '64' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg64 = mysql_num_rows($resultadoNome);
				if($numImg64 != 0){
					$ausente64_1 = "0";
					$ausente64_2 = "0";
				}else{
					$ausente64_1 = "1";
					$ausente64_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '65' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg65 = mysql_num_rows($resultadoNome);
				if($numImg65 != 0){
					$ausente65_1 = "0";
					$ausente65_2 = "0";
				}else{
					$ausente65_1 = "1";
					$ausente65_2 = "100";
				}
				
			
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '85' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg85 = mysql_num_rows($resultadoNome);
				if($numImg85 != 0){
					$ausente85_1 = "0";
					$ausente85_2 = "0";
				}else{
					$ausente85_1 = "1";
					$ausente85_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '84' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg84 = mysql_num_rows($resultadoNome);
				if($numImg84 != 0){
					$ausente84_1 = "0";
					$ausente84_2 = "0";
				}else{
					$ausente84_1 = "1";
					$ausente84_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '83' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg83 = mysql_num_rows($resultadoNome);
				if($numImg83 != 0){
					$ausente83_1 = "0";
					$ausente83_2 = "0";
				}else{
					$ausente83_1 = "1";
					$ausente83_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '82' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg82 = mysql_num_rows($resultadoNome);
				if($numImg82 != 0){
					$ausente82_1 = "0";
					$ausente82_2 = "0";
				}else{
					$ausente82_1 = "1";
					$ausente82_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '81' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg81 = mysql_num_rows($resultadoNome);
				if($numImg81 != 0){
					$ausente81_1 = "0";
					$ausente81_2 = "0";
				}else{
					$ausente81_1 = "1";
					$ausente81_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '71' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg71 = mysql_num_rows($resultadoNome);
				if($numImg71 != 0){
					$ausente71_1 = "0";
					$ausente71_2 = "0";
				}else{
					$ausente71_1 = "1";
					$ausente71_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '72' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg72 = mysql_num_rows($resultadoNome);
				if($numImg72 != 0){
					$ausente72_1 = "0";
					$ausente72_2 = "0";
				}else{
					$ausente72_1 = "1";
					$ausente72_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '73' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg73 = mysql_num_rows($resultadoNome);
				if($numImg73 != 0){
					$ausente73_1 = "0";
					$ausente73_2 = "0";
				}else{
					$ausente73_1 = "1";
					$ausente73_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '74' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg74 = mysql_num_rows($resultadoNome);
				if($numImg74 != 0){
					$ausente74_1 = "0";
					$ausente74_2 = "0";
				}else{
					$ausente74_1 = "1";
					$ausente74_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '75' AND nm_ausente='Sim'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg75 = mysql_num_rows($resultadoNome);
				if($numImg75 != 0){
					$ausente75_1 = "0";
					$ausente75_2 = "0";
				}else{
					$ausente75_1 = "1";
					$ausente75_2 = "100";
				}
				
			?>

		
			
			<center>
			<form method='POST' action='irromper.php'>
			<input type='hidden' name='cpf' value='<?php echo $_GET['cpf']; ?>'>
			<table width='90%' border=0>
				<tr>
		<?php
					
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='18' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			echo "<td><center><a><img src='dentes/18.png'  style='margin-top:10px;' style='opacity: ".$ausente81_1."; filter: alpha(opacity=".$ausente81_2.";' width='45px'></a></center></td>";
		}else{
			echo "<td><center></center></td>";
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='17' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			?>
			<td><center><a onClick="showHideDiv('contenido17')"><img src='dentes/17.png' style='margin-top:0px;' style='opacity: <?php echo $ausente17_1; ?>; filter: alpha(opacity=<?php echo $ausente17_2; ?>);' width='50px'></a></center></td>
			<?php
		}else{
			echo "<td><center></center></td>";
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='16' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			?>
			<td><center><a  onClick="showHideDiv('contenido16')"><img src='dentes/16.png' style='margin-top:0px;' style='opacity: <?php echo $ausente16_1; ?>; filter: alpha(opacity=<?php echo $ausente16_2; ?>);' width='60px'></a></center></td>
			<?php
		}else{
			echo "<td><center></center></td>";
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='55' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			?>
			<td><center><a onClick="showHideDiv('contenido55')"><img src='dentes/infantil/55.png' style='opacity: <?php echo $ausente55_1; ?>; filter: alpha(opacity=<?php echo $ausente55_2; ?>);' width='55%' height='55%'></a></center></td>
			<?php
		}else{
			?>
			<td><center><a onClick="showHideDiv('contenido15')"><img src='dentes/15.png' style='opacity: <?php echo $ausente15_1; ?>; filter: alpha(opacity=<?php echo $ausente15_2; ?>);' width='42px'></a></center></td>
			<?php
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='54' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			?>
			<td><center><a onClick="showHideDiv('contenido54')"><img src='dentes/infantil/54.png' style='opacity: <?php echo $ausente54_1; ?>; filter: alpha(opacity=<?php echo $ausente54_2; ?>);' width='55%' height='55%'></a></center></td>
			<?php
		}else{
			?>
			<td><center><a onClick="showHideDiv('contenido14')"><img src='dentes/14.png' style='opacity: <?php echo $ausente14_1; ?>; filter: alpha(opacity=<?php echo $ausente14_2; ?>);' width='42px'></a></center></td>
			<?php
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='53' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			?>
			<td><center><a onClick="showHideDiv('contenido53')"><img src='dentes/infantil/53.png' style='opacity: <?php echo $ausente53_1; ?>; filter: alpha(opacity=<?php echo $ausente53_2; ?>);' width='55%' height='55%'></a></center></td>
			<?php
		}else{
			?>
			<td><center><a onClick="showHideDiv('contenido13')"><img src='dentes/13.png' style='opacity: <?php echo $ausente13_1; ?>; filter: alpha(opacity=<?php echo $ausente13_2; ?>);' width='42px'></a></center></td>
			<?php
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='52' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			?>
			<td><center><a onClick="showHideDiv('contenido52')"><img src='dentes/infantil/52.png' style='opacity: <?php echo $ausente52_1; ?>; filter: alpha(opacity=<?php echo $ausente52_2; ?>);' width='55%' height='55%'></a></center></td>
			<?php
		}else{
			?>
			<td><center><a onClick="showHideDiv('contenido12')"><img src='dentes/12.png' style='opacity: <?php echo $ausente12_1; ?>; filter: alpha(opacity=<?php echo $ausente12_2; ?>);' style='margin-top:42px;' width='40px'></a></center></td>
			<?php
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='51' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			?>
			<td><center><a onClick="showHideDiv('contenido51')"><img src='dentes/infantil/51.png' style='opacity: <?php echo $ausente51_1; ?>; filter: alpha(opacity=<?php echo $ausente51_2; ?>);' width='55%' height='55%'></a></center></td>
			<?php
		}else{
			?>
			<td><center><a onClick="showHideDiv('contenido11')"><img src='dentes/11.png' style='opacity: <?php echo $ausente11_1; ?>; filter: alpha(opacity=<?php echo $ausente11_2; ?>);' width='42px'></a></center></td>
			<?php
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='61' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			?>
			<td><center><a onClick="showHideDiv('contenido61')"><img src='dentes/infantil/61.png' style='opacity: <?php echo $ausente61_1; ?>; filter: alpha(opacity=<?php echo $ausente61_2; ?>);' width='55%' height='55%'></a></center></td>
			<?php
		}else{
			?>
			<td><center><a onClick="showHideDiv('contenido21')"><img src='dentes/21.png' style='opacity: <?php echo $ausente21_1; ?>; filter: alpha(opacity=<?php echo $ausente21_2; ?>);' width='42px'></a></center></td>
			<?php
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='62' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			?>
			<td><center><a onClick="showHideDiv('contenido62')"><img src='dentes/infantil/62.png' style='opacity: <?php echo $ausente62_1; ?>; filter: alpha(opacity=<?php echo $ausente62_2; ?>);' width='55%' height='55%'></a></center></td>
			<?php
		}else{
			?>
			<td><center><a onClick="showHideDiv('contenido22')"><img src='dentes/22.png' style='opacity: <?php echo $ausente22_1; ?>; filter: alpha(opacity=<?php echo $ausente22_2; ?>);' width='42px'></a></center></td>
			<?php
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='63' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			?>
			<td><center><a onClick="showHideDiv('contenido63')"><img src='dentes/infantil/63.png' style='opacity: <?php echo $ausente63_1; ?>; filter: alpha(opacity=<?php echo $ausente63_2; ?>);' width='55%' height='55%'></a></center></td>
			<?php
		}else{
			?>
			<td><center><a onClick="showHideDiv('contenido23')"><img src='dentes/23.png' style='opacity: <?php echo $ausente23_1; ?>; filter: alpha(opacity=<?php echo $ausente23_2; ?>);' width='42px'></a></center></td>
			<?php
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='64' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			?>
			<td><center><a onClick="showHideDiv('contenido64')"><img src='dentes/infantil/64.png' style='opacity: <?php echo $ausente64_1; ?>; filter: alpha(opacity=<?php echo $ausente64_2; ?>);' width='55%' height='55%'></a></center></td>
			<?php
		}else{
			?>
			<td><center><a onClick="showHideDiv('contenido24')"><img src='dentes/24.png' style='opacity: <?php echo $ausente24_1; ?>; filter: alpha(opacity=<?php echo $ausente24_2; ?>);' width='42px'></a></center></td>
			<?php
		}
					
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='65' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			?>
			<td><center><a onClick="showHideDiv('contenido65')"><img src='dentes/infantil/65.png' style='opacity: <?php echo $ausente65_1; ?>; filter: alpha(opacity=<?php echo $ausente65_2; ?>);' width='55%' height='55%'></a></center></td>
			<?php
		}else{
			?>
			<td><center><a onClick="showHideDiv('contenido25')"><img src='dentes/25.png' style='opacity: <?php echo $ausente25_1; ?>; filter: alpha(opacity=<?php echo $ausente25_2; ?>);' width='42px'></a></center></td>
			<?php
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='26' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			?>
			<td><center><a onClick="showHideDiv('contenido26')"><img src='dentes/26.png' style='opacity: <?php echo $ausente26_1; ?>; filter: alpha(opacity=<?php echo $ausente26_2; ?>);' style='margin-top:0px;' width='60px'></a></center></td>
			<?php
		}else{
			echo "<td><center></center></td>";
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='27' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			?>
			<td><center><a onClick="showHideDiv('contenido27')"><img src='dentes/27.png' style='opacity: <?php echo $ausente27_1; ?>; filter: alpha(opacity=<?php echo $ausente272; ?>);' style='margin-top:0px;'  width='50px'></a></center></td>
			<?php
		}else{
			echo "<td><center></center></td>";
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='28' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			?>
			<td><center><a onClick="showHideDiv('contenido28')"><img src='dentes/28.png' style='margin-top:10px;' style='opacity: <?php echo $ausente28_1; ?>; filter: alpha(opacity=<?php echo $ausente28_2; ?>);' width='45px'></a></center></td>
			<?php
		}else{
			echo "<td><center></center></td>";
		}
					?>
					
			<td><center><a onClick="showHideDiv('contenidoSuperior')"><img src='dentes/arcada_superior.png'></a></center></td>
				</tr>
				<tr>
					<?php
					
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='18' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			echo "<td><center><b>18</b></center></td>";
		}else{
			echo "<td width='45px'><center><b><input type='checkbox' name='erupcionar18'>&nbsp;18</b></center></td>";
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='17' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			echo "<td><center><b>17</b></center></td>";
		}else{
			echo "<td width='45px'><center><b><input type='checkbox' name='erupcionar17'>&nbsp;17</b></center></td>";
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='16' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			echo "<td><center><b>16</b></center></td>";
		}else{
			echo "<td width='45px'><center><b><input type='checkbox' name='erupcionar16'>&nbsp;16</b></center></td>";
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='55' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			echo "<td><center><b><input type='checkbox' name='erupcionar55'>&nbsp;55</b></center></td>";
		}else{
			echo "<td><center><b>15</b></center></td>";
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='54' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			echo "<td><center><b><input type='checkbox' name='erupcionar54'>&nbsp;54</b></center></td>";
		}else{
			echo "<td><center><b>14</b></center></td>";
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='53' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			echo "<td><center><b><input type='checkbox' name='erupcionar53'>&nbsp;53</b></center></td>";
		}else{
			echo "<td><center><b>13</b></center></td>";
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='52' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			echo "<td><center><b><input type='checkbox' name='erupcionar52'>&nbsp;52</b></center></td>";
		}else{
			echo "<td><center><b>12</b></center></td>";
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='51' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			echo "<td><center><b><input type='checkbox' name='erupcionar51'>&nbsp;51</b></center></td>";
		}else{
			echo "<td><center><b>11</b></center></td>";
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='61' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			echo "<td><center><b><input type='checkbox' name='erupcionar61'>&nbsp;61</b></center></td>";
		}else{
			echo "<td><center><b>21</b></center></td>";
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='62' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			echo "<td><center><b><input type='checkbox' name='erupcionar62'>&nbsp;62</b></center></td>";
		}else{
			echo "<td><center><b>22</b></center></td>";
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='63' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			echo "<td><center><b><input type='checkbox' name='erupcionar63'>&nbsp;63</b></center></td>";
		}else{
			echo "<td><center><b>23</b></center></td>";
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='64' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			echo "<td><center><b><input type='checkbox' name='erupcionar64'>&nbsp;64</b></center></td>";
		}else{
			echo "<td><center><b>24</b></center></td>";
		}
					
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='65' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			echo "<td><center><b><input type='checkbox' name='erupcionar65'>&nbsp;65</b></center></td>";
		}else{
			echo "<td><center><b>25</b></center></td>";
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='26' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			echo "<td><center><b>26</b></center></td>";
		}else{
			echo "<td width='45px'><center><b><input type='checkbox' name='erupcionar26'>&nbsp;26</b></center></td>";
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='27' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			echo "<td><center><b>27</b></center></td>";
		}else{
			echo "<td width='45px'><center><b><input type='checkbox' name='erupcionar27'>&nbsp;27</b></center></td>";
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='28' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			echo "<td><center><b>28</b></center></td>";
		}else{
			echo "<td width='45px'><center><b><input type='checkbox' name='erupcionar28'>&nbsp;28</b></center></td>";
		}
					?>
		
		<td rowspan='2'><center><a onClick="showHideDiv('contenidoCompleto')"><img src='dentes/boca.png'></a></center></td>
				</tr>
				<tr>
					<?php
					
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='48' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			echo "<td><center><b>48</b></center></td>";
		}else{
			echo "<td width='45px'><center><b><input type='checkbox' name='erupcionar48'>&nbsp;48</b></center></td>";
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='47' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			echo "<td><center><b>47</b></center></td>";
		}else{
			echo "<td width='45px'><center><b><input type='checkbox' name='erupcionar47'>&nbsp;47</b></center></td>";
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='46' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			echo "<td><center><b>46</b></center></td>";
		}else{
			echo "<td width='45px'><center><b><input type='checkbox' name='erupcionar46'>&nbsp;46</b></center></td>";
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='85' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			echo "<td><center><b><input type='checkbox' name='erupcionar85'>&nbsp;85</b></center></td>";
		}else{
			echo "<td><center><b>45</b></center></td>";
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='84' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			echo "<td><center><b><input type='checkbox' name='erupcionar84'>&nbsp;84</b></center></td>";
		}else{
			echo "<td><center><b>44</b></center></td>";
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='83' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			echo "<td><center><b><input type='checkbox' name='erupcionar83'>&nbsp;83</b></center></td>";
		}else{
			echo "<td><center><b>43</b></center></td>";
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='82' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			echo "<td><center><b><input type='checkbox' name='erupcionar82'>&nbsp;82</b></center></td>";
		}else{
			echo "<td><center><b>42</b></center></td>";
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='81' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			echo "<td><center><b><input type='checkbox' name='erupcionar81'>&nbsp;81</b></center></td>";
		}else{
			echo "<td><center><b>41</b></center></td>";
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='71' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			echo "<td><center><b><input type='checkbox' name='erupcionar71'>&nbsp;71</b></center></td>";
		}else{
			echo "<td><center><b>31</b></center></td>";
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='72' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			echo "<td><center><b><input type='checkbox' name='erupcionar72'>&nbsp;72</b></center></td>";
		}else{
			echo "<td><center><b>32</b></center></td>";
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='73' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			echo "<td><center><b><input type='checkbox' name='erupcionar73'>&nbsp;73</b></center></td>";
		}else{
			echo "<td><center><b>33</b></center></td>";
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='74' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			echo "<td><center><b><input type='checkbox' name='erupcionar74'>&nbsp;74</b></center></td>";
		}else{
			echo "<td><center><b>34</b></center></td>";
		}
					
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='75' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			echo "<td><center><b><input type='checkbox' name='erupcionar75'>&nbsp;75</b></center></td>";
		}else{
			echo "<td><center><b>35</b></center></td>";
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='36' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			echo "<td><center><b>36</b></center></td>";
		}else{
			echo "<td width='45px'><center><b><input type='checkbox' name='erupcionar36'>&nbsp;36</b></center></td>";
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='37' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			echo "<td><center><b>37</b></center></td>";
		}else{
			echo "<td width='45px'><center><b><input type='checkbox' name='erupcionar37'>&nbsp;37</b></center></td>";
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='38' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			echo "<td><center><b>38</b></center></td>";
		}else{
			echo "<td width='45px'><center><b><input type='checkbox' name='erupcionar38'>&nbsp;38</b></center></td>";
		}
					?>
				</tr>
				
				<tr>
					<?php
					
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='48' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			?>
			<td><center><a onClick="showHideDiv('contenido48')"><img src='dentes/48.png' style='margin-top:-20px;' style='opacity: <?php echo $ausente48_1; ?>; filter: alpha(opacity=<?php echo $ausente48_2; ?>);' width='45px'></a></center></td>
			<?php
		}else{
			echo "<td><center></center></td>";
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='47' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			?>
			<td><center><a onClick="showHideDiv('contenido47')"><img src='dentes/47.png' style='margin-top:-10px;' style='opacity: <?php echo $ausente47_1; ?>; filter: alpha(opacity=<?php echo $ausente47_2; ?>);' width='50px'></a></center></td>
			<?php
		}else{
			echo "<td><center></center></td>";
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='46' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			?>
			<td><center><a onClick="showHideDiv('contenido46')"><img src='dentes/46.png' style='opacity: <?php echo $ausente46_1; ?>; filter: alpha(opacity=<?php echo $ausente46_2; ?>);' width='60px'></a></center></td>
			<?php
		}else{
			echo "<td><center></center></td>";
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='85' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			?>
			<td><center><a onClick="showHideDiv('contenido85')"><img src='dentes/infantil/85.png' style='opacity: <?php echo $ausente85_1; ?>; filter: alpha(opacity=<?php echo $ausente85_2; ?>);' width='55%' height='55%'></a></center></td>
			<?php
		}else{
			?>
			<td><center><a onClick="showHideDiv('contenido45')"><img src='dentes/45.png' style='opacity: <?php echo $ausente45_1; ?>; filter: alpha(opacity=<?php echo $ausente45_2; ?>);' width='42px'></a></center></td>
			<?php
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='84' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			?>
			<td><center><a onClick="showHideDiv('contenido84')"><img src='dentes/infantil/84.png' style='opacity: <?php echo $ausente84_1; ?>; filter: alpha(opacity=<?php echo $ausente84_2; ?>);' width='55%' height='55%'></a></center></td>
			<?php
		}else{
			?>
			<td><center><a onClick="showHideDiv('contenido44')"><img src='dentes/44.png' style='opacity: <?php echo $ausente44_1; ?>; filter: alpha(opacity=<?php echo $ausente44_2; ?>);' width='42px'></a></center></td>
			<?php
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='83' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			?>
			<td><center><a onClick="showHideDiv('contenido83')"><img src='dentes/infantil/83.png' style='opacity: <?php echo $ausente83_1; ?>; filter: alpha(opacity=<?php echo $ausente83_2; ?>);' width='55%' height='55%'></a></center></td>
			<?php
		}else{
			?>
			<td><center><a onClick="showHideDiv('contenido43')"><img src='dentes/43.png' style='opacity: <?php echo $ausente43_1; ?>; filter: alpha(opacity=<?php echo $ausente432; ?>);' width='42px'></a></center></td>
			<?php
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='82' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			?>
			<td><center><a onClick="showHideDiv('contenido82')"><img src='dentes/infantil/82.png' style='opacity: <?php echo $ausente82_1; ?>; filter: alpha(opacity=<?php echo $ausente82_2; ?>);' width='55%' height='55%'></a></center></td>
			<?php
		}else{
			?>
			<td><center><a onClick="showHideDiv('contenido42')"><img src='dentes/42.png' style='opacity: <?php echo $ausente42_1; ?>; filter: alpha(opacity=<?php echo $ausente42_2; ?>);' width='35px'></a></center></td>
			<?php
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='81' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			?>
			<td><center><a onClick="showHideDiv('contenido81')"><img src='dentes/infantil/81.png' style='opacity: <?php echo $ausente81_1; ?>; filter: alpha(opacity=<?php echo $ausente81_2; ?>);' width='55%' height='55%'></a></center></td>
			<?php
		}else{
			?>
			<td><center><a onClick="showHideDiv('contenido41')"><img src='dentes/41.png' style='opacity: <?php echo $ausente41_1; ?>; filter: alpha(opacity=<?php echo $ausente41_2; ?>);' width='32px'></a></center></td>
			<?php
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='71' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			?>
			<td><center><a onClick="showHideDiv('contenido71')"><img src='dentes/infantil/71.png' style='opacity: <?php echo $ausente71_1; ?>; filter: alpha(opacity=<?php echo $ausente71_2; ?>);' width='55%' height='55%'></a></center></td>
			<?php
		}else{
			?>
			<td><center><a onClick="showHideDiv('contenido31')"><img src='dentes/31.png' style='opacity: <?php echo $ausente31_1; ?>; filter: alpha(opacity=<?php echo $ausente31_2; ?>);' width='32px'></a></center></td>
			<?php
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='72' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			?>
			<td><center><a onClick="showHideDiv('contenido72')"><img src='dentes/infantil/72.png' style='opacity: <?php echo $ausente72_1; ?>; filter: alpha(opacity=<?php echo $ausente722; ?>);' width='55%' height='55%'></a></center></td>
			<?php
		}else{
			?>
			<td><center><a onClick="showHideDiv('contenido32')"><img src='dentes/32.png' style='opacity: <?php echo $ausente32_1; ?>; filter: alpha(opacity=<?php echo $ausente32_2; ?>);' width='35px'></a></center></td>
			<?php
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='73' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			?>
			<td><center><a onClick="showHideDiv('contenido73')"><img src='dentes/infantil/73.png' style='opacity: <?php echo $ausente73_1; ?>; filter: alpha(opacity=<?php echo $ausente73_2; ?>);' width='55%' height='55%'></a></center></td>
			<?php
		}else{
			?>
			<td><center><a onClick="showHideDiv('contenido33')"><img src='dentes/33.png' style='opacity: <?php echo $ausente33_1; ?>; filter: alpha(opacity=<?php echo $ausente33_2; ?>);' width='42px'></a></center></td>
			<?php
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='74' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			?>
			<td><center><a onClick="showHideDiv('contenido74')"><img src='dentes/infantil/74.png' style='opacity: <?php echo $ausente74_1; ?>; filter: alpha(opacity=<?php echo $ausente74_2; ?>);' width='55%' height='55%'></a></center></td>
			<?php
		}else{
			?>
			<td><center><a onClick="showHideDiv('contenido34')"><img src='dentes/34.png' style='opacity: <?php echo $ausente34_1; ?>; filter: alpha(opacity=<?php echo $ausente34_2; ?>);' width='42px'></a></center></td>
			<?php
		}
					
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='75' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			?>
			<td><center><a onClick="showHideDiv('contenido75')"><img src='dentes/infantil/75.png' style='opacity: <?php echo $ausente75_1; ?>; filter: alpha(opacity=<?php echo $ausente75_2; ?>);' width='55%' height='55%'></a></center></td>
			<?php
		}else{
			?>
			<td><center><a onClick="showHideDiv('contenido35')"><img src='dentes/35.png' style='opacity: <?php echo $ausente35_1; ?>; filter: alpha(opacity=<?php echo $ausente35_2; ?>);' width='42px'></a></center></td>
			<?php
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='36' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			?>
			<td><center><a onClick="showHideDiv('contenido36')"><img src='dentes/36.png' style='opacity: <?php echo $ausente36_1; ?>; filter: alpha(opacity=<?php echo $ausente36_2; ?>);' width='60px' ></a></center></td>
			<?php
		}else{
			echo "<td><center></center></td>";
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='37' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			?>
			<td><center><a onClick="showHideDiv('contenido37')"><img src='dentes/37.png' style='margin-top:-10px;' style='opacity: <?php echo $ausente37_1; ?>; filter: alpha(opacity=<?php echo $ausente372; ?>);' width='50px' ></a></center></td>
			<?php
		}else{
			echo "<td><center></center></td>";
		}
		
		$sqlNome2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente = '".$_GET['cpf']."' AND nr_dente='38' AND nm_ativo='Sim'";
		$resultadoNome2 = mysql_query($sqlNome2) or die();
		$numImg = mysql_num_rows($resultadoNome2);
		if($numImg != 0){
			?>
			<td><center><a onClick="showHideDiv('contenido38')"><img src='dentes/38.png' style='margin-top:-10px;' style='opacity: <?php echo $ausente38_1; ?>; filter: alpha(opacity=<?php echo $ausente38_2; ?>);' width='45px'></a></center></td>
			<?php
		}else{
			echo "<td><center></center></td>";
		}
					?>
			<td rowspan='2'><center><a onClick="showHideDiv('contenidoInferior')"><img src='dentes/arcada_inferior.png'></a></center></td>
				</tr>
			</table><br>
			</form>
			
		</div>	




		
			
		<center>
			
		<hr>	
		<h1>Planos de Tratamento</h1><br>
		<h4><b>Plano de Tratamento A </b></h4><br>
		<form method='POST' action='acoesConjunto.php'>
		<?php
		
		$sqlAnam = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nm_tipoPlano = 'A'";
		$resultadoAnam = mysql_query($sqlAnam) or die();
		$numImg = mysql_num_rows($resultadoAnam);
		
		$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' LIMIT 1";
		$resultadoNome = mysql_query($sqlNome) or die();
		while($linhaNome = mysql_fetch_array($resultadoNome)){
			echo "<center>Disciplina(s) Associada(s): ".$linhaNome['nm_disciplina']."</center><br>";
		}
		
		if($numImg == 0){
			echo "<center><b>Ainda não foi cadastrado nenhum tratamento!</b></center><br>";
		}else{
		?>
		
		<table width='95%' border=0>
			<tr>
				<td><center><h5>Dente / Região</h5></center></td>
				<td><center><h5>Diagnóstico</h5></center></td>
				<td><center><h5>Tratamento</h5></center></td>
				<td><center><h5>Observação</h5></center></td>
				<td><center><h5>Data de Inclusão</h5></center></td>
				<td><center><h5>Data de Realização</h5></center></td>
				<td><center><h5>Situação</h5></center></td>
				<td><center><h5>Dupla</h5></center></td>
				<td><center><h5>Ausente</h5></center></td>
				<td><center><h5>Prof. Responsável</h5></center></td>
			</tr>
			
			<?php
				$cont = 0;
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nm_tipoPlano = 'A'";
				$resultadoNome = mysql_query($sqlNome) or die();
				while($linhaNome = mysql_fetch_array($resultadoNome)){
				
				if(($cont%2) == 0){
					$cor2 = "rgb(240,240,240)";
				}else{
					$cor2 = "white";
				}
				
				switch($linhaNome['nm_situacao']){
					case "A Tratar":
						$cor = "red";
					break;
									
					case "Existente":
						$cor = "rgb(43,89,189)";
					break;
									
					case "Realizado":
						$cor = "rgb(32,163,101)";
					break;
				}
				
				if($linhaNome['nm_professor'] == 'N/R' && $linhaNome['nm_situacao'] == 'Realizado'){
					$link = "<span class='badge badge-danger>Validar</a></span>";
					
				}else{
					
					if($linhaNome['nm_professor'] == 'N/R'){
						$link = 'N/R';
					}else{
						$sqlProf = "SELECT * FROM tb_funcionarios WHERE nr_cpfFuncionario = '".$linhaNome['nm_professor']."'";
						$resultadoProf = mysql_query($sqlProf) or die();
						while($linhaProf = mysql_fetch_array($resultadoProf)){
							$link = $linhaProf['nm_nomeFuncionario']." <img src='icones/aprovado.png'> &nbsp; <a href='confirmarDesfazerInfantil.php?cpf=".$_GET['cpf']."&id=".$linhaNome['nr_idOdontogramaInfantil']."' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Desfazer Aprovação'><img src='icones/delete.png'></a>";
							
						}
					}
					
				}
				
				if($linhaNome['nm_situacao'] == 'A Tratar'){
									
									$editar = "<a href='' data-toggle='modal' data-target='#modalExemplo2".$linhaNome['nr_idOdontogramaInfantil']."'><img src='icones/delete.png'></a>";
									echo "
										
										<div class='modal fade' id='modalExemplo2".$linhaNome['nr_idOdontogramaInfantil']."' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
										  <div class='modal-dialog' role='document'>
											<div class='modal-content'>
											  <div class='modal-header'>
												<h5 class='modal-title' id='exampleModalLabel'>Excluir Tratamento</h5>
												<button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>
												  <span aria-hidden='true'>&times;</span>
												</button>
											  </div>
											  <div class='modal-body'>
												<b><p>Dente: ".$linhaNome['nr_dente']."</p></b>
												
													<a class='genric-btn success' href='excluirTratamento.php?id=".$linhaNome['nr_idOdontogramaInfantil']."&cpf=".$_GET['cpf']."&tipo=infantil'>Tem certeza que deseja excluir este tratamento?</a>
											  </div>
											</div>
										  </div>
										</div>
									
									";
									
									
								}else{
									if($linhaNome['nm_situacao'] == 'Realizado'){
										$editar = '';
									}else{
										$editar = "<a href='excluirTratamento.php?id=".$linhaNome['nr_idOdontogramaInfantil']."&cpf=".$_GET['cpf']."'><img src='icones/delete.png'></a>";	
									}
								}
					
								$sqlDupla = "SELECT * FROM tb_duplas WHERE nr_idDupla =".$linhaNome['nr_idDupla'];
								$resultadoDupla = mysql_query($sqlDupla) or die();
								while($linhaDupla3 = mysql_fetch_array($resultadoDupla)){
																
									$sqlDupla1 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linhaDupla3['nr_cpf1']."'";
									$resultadoDupla1 = mysql_query($sqlDupla1) or die();
									while($linhaDupla1 = mysql_fetch_array($resultadoDupla1)){
										$Dupla1 = $linhaDupla1['nm_nomeAluno']; 
										$periodo = $linhaDupla1['nr_periodo']; 
									}
																
									$sqlDupla2 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linhaDupla3['nr_cpf2']."'";
									$resultadoDupla2 = mysql_query($sqlDupla2) or die();
									while($linhaDupla2 = mysql_fetch_array($resultadoDupla2)){
										$Dupla2 = $linhaDupla2['nm_nomeAluno']; 
									}
																
																
									$dupla = $Dupla1." e<BR> ".$Dupla2;
								}
				
			?>
			<tr style='background-color: <?php echo $cor2; ?>; color:<?php echo $cor; ?>;'>
				<td><center><?php echo $linhaNome['nr_dente']; ?></center></td>
				<td><center><?php echo $linhaNome['nm_diagnostico']; ?></center></td>
				<td><center><?php echo $linhaNome['nm_tratamento']; ?></center></td>
				<td><center><?php echo $linhaNome['nm_observacao']; ?></center></td>
				<td><center><?php echo $linhaNome['dt_inclusao']; ?></center></td>
				<td><center><?php echo $linhaNome['dt_aprovacao']; ?></center></td>
				<td><center><?php echo $linhaNome['nm_situacao']; ?></center></td>
				<td><center><?php echo $dupla; ?></center></td>
				<td><center><?php echo $linhaNome['nm_ausente'];; ?></center></td>
				<td><center><?php echo $link; ?></center></td>
				<td width='30px'><center></center></td>
			</tr>	
			<?php
				$cont = $cont + 1;
				}
			?>
			
		</table>
						</form>
			
		<?php
		}
		?>
		
		<br>
		<h4><b>Plano de Tratamento Alternativo</b></h4><br>
		<form method='POST' action='acoesConjunto.php'>
		<?php
		
		$sqlAnam = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nm_tipoPlano = 'Alternativo'";
		$resultadoAnam = mysql_query($sqlAnam) or die();
		$numImg = mysql_num_rows($resultadoAnam);
		
		$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' LIMIT 1";
		$resultadoNome = mysql_query($sqlNome) or die();
		while($linhaNome = mysql_fetch_array($resultadoNome)){
			echo "<center>Disciplina(s) Associada(s): ".$linhaNome['nm_disciplina']."</center><br>";
		}
		
		if($numImg == 0){
			echo "<center><b>Ainda não foi cadastrado nenhum tratamento!</b></center><br>";
		}else{
		?>
		
		<table width='95%' border=0>
			<tr>
				<td width='30px'></td>
				<td><center><h5>Dente / Região</h5></center></td>
				<td><center><h5>Diagnóstico</h5></center></td>
				<td><center><h5>Tratamento</h5></center></td>
				<td><center><h5>Observação</h5></center></td>
				<td><center><h5>Data de Inclusão</h5></center></td>
				<td><center><h5>Data de Realização</h5></center></td>
				<td><center><h5>Situação</h5></center></td>
				<td><center><h5>Dupla</h5></center></td>
				<td><center><h5>Ausente</h5></center></td>
				<td><center><h5>Prof. Responsável</h5></center></td>
				<td width='30px'></td>
			</tr>
			
			<?php
				$cont = 0;
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nm_tipoPlano = 'Alternativo'";
				$resultadoNome = mysql_query($sqlNome) or die();
				while($linhaNome = mysql_fetch_array($resultadoNome)){
				
				if(($cont%2) == 0){
					$cor2 = "rgb(240,240,240)";
				}else{
					$cor2 = "white";
				}
				
				switch($linhaNome['nm_situacao']){
					case "A Tratar":
						$cor = "red";
					break;
									
					case "Existente":
						$cor = "rgb(43,89,189)";
					break;
									
					case "Realizado":
						$cor = "rgb(32,163,101)";
					break;
				}
				
				if($linhaNome['nm_professor'] == 'N/R' && $linhaNome['nm_situacao'] == 'Realizado'){
					$link = "<span class='badge badge-danger>Validar</a></span>";
					
				}else{
					
					if($linhaNome['nm_professor'] == 'N/R'){
						$link = $linhaNome['nm_professor'];
					}else{
						$sqlProf = "SELECT * FROM tb_funcionarios WHERE nr_cpfFuncionario = '".$linhaNome['nm_professor']."'";
						$resultadoProf = mysql_query($sqlProf) or die();
						while($linhaProf = mysql_fetch_array($resultadoProf)){
							$link = $linhaProf['nm_nomeFuncionario']." <img src='icones/aprovado.png'>";
							
						}
					}
					
				}
				
				if($linhaNome['nm_professor'] == 'N/R' && ($linhaNome['nm_situacao'] == 'A Tratar')){
									
									$editar = "<a href='' data-toggle='modal' data-target='#modalExemplo2".$linhaNome['nr_idOdontogramaInfantil']."'><img src='icones/delete.png'></a>";
									echo "
										
										<div class='modal fade' id='modalExemplo2".$linhaNome['nr_idOdontogramaInfantil']."' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
										  <div class='modal-dialog' role='document'>
											<div class='modal-content'>
											  <div class='modal-header'>
												<h5 class='modal-title' id='exampleModalLabel'>Excluir Tratamento</h5>
												<button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>
												  <span aria-hidden='true'>&times;</span>
												</button>
											  </div>
											  <div class='modal-body'>
												<b><p>Dente: ".$linhaNome['nr_dente']."</p></b>
												
													<input type='hidden' name='id' value='".$linhaNome['nr_idOdontogramaInfantil']."'>
													<input type='hidden' name='cpf' value='".$_GET['cpf']."'>
													<a class='genric-btn success' href='excluirTratamento.php?id=".$linhaNome['nr_idOdontogramaInfantil']."&cpf=".$_GET['cpf']."&tipo=infantil'>Tem certeza que deseja excluir este tratamento?</a>
											  </div>
											</div>
										  </div>
										</div>
									
									";
									
									
								}else{
									if($linhaNome['nm_situacao'] == 'Realizado'){
										$editar = '';
									}else{
										$editar = "<a href='excluirTratamento.php?id=".$linhaNome['nr_idOdontogramaInfantil']."&cpf=".$_GET['cpf']."'><img src='icones/delete.png'></a>";	
									}
								}
					
								$sqlDupla = "SELECT * FROM tb_duplas WHERE nr_idDupla =".$linhaNome['nr_idDupla'];
								$resultadoDupla = mysql_query($sqlDupla) or die();
								while($linhaDupla3 = mysql_fetch_array($resultadoDupla)){
																
									$sqlDupla1 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linhaDupla3['nr_cpf1']."'";
									$resultadoDupla1 = mysql_query($sqlDupla1) or die();
									while($linhaDupla1 = mysql_fetch_array($resultadoDupla1)){
										$Dupla1 = $linhaDupla1['nm_nomeAluno']; 
										$periodo = $linhaDupla1['nr_periodo']; 
									}
																
									$sqlDupla2 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linhaDupla3['nr_cpf2']."'";
									$resultadoDupla2 = mysql_query($sqlDupla2) or die();
									while($linhaDupla2 = mysql_fetch_array($resultadoDupla2)){
										$Dupla2 = $linhaDupla2['nm_nomeAluno']; 
									}
																
																
									$dupla = $Dupla1." e<BR> ".$Dupla2;
								}
				
			?>
			<tr style='background-color: <?php echo $cor2; ?>; color:<?php echo $cor; ?>;'>
				<td><center><?php echo $linhaNome['nr_dente']; ?></center></td>
				<td><center><?php echo $linhaNome['nm_diagnostico']; ?></center></td>
				<td><center><?php echo $linhaNome['nm_tratamento']; ?></center></td>
				<td><center><?php echo $linhaNome['nm_observacao']; ?></center></td>
				<td><center><?php echo $linhaNome['dt_inclusao']; ?></center></td>
				<td><center><?php echo $linhaNome['dt_aprovacao']; ?></center></td>
				<td><center><?php echo $linhaNome['nm_situacao']; ?></center></td>
				<td><center><?php echo $dupla; ?></center></td>
				<td><center><?php echo $linhaNome['nm_ausente'];; ?></center></td>
				<td><center><?php echo $link; ?></center></td>
				<td width='30px'><center></center></td>
			</tr>	
			<?php
				$cont = $cont + 1;
				}
			?>
			
		<table>
		
				
						</form>
			<br><br>
		
		<?php
		}
		?>	
			
			
		
			<script src="../js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="../js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="../js/easing.min.js"></script>			
			<script src="../js/hoverIntent.js"></script>
			<script src="../js/superfish.min.js"></script>	
			<script src="../js/jquery.ajaxchimp.min.js"></script>
			<script src="../js/jquery.magnific-popup.min.js"></script>	
			<script src="../js/owl.carousel.min.js"></script>			
			<script src="../js/jquery.sticky.js"></script>
			<script src="../js/jquery.nice-select.min.js"></script>			
			<script src="../js/parallax.min.js"></script>	
			<script src="../js/mail-script.js"></script>				
			<script src="../js/main.js"></script>	
			<script>
			function showHideDiv(ele) {
				var srcElement = document.getElementById(ele);
				if (srcElement != null) {
					if (srcElement.style.display == "block") {
		srcElement.style.display = 'none';
					}
					else {
		srcElement.style.display = 'block';
					}
					return false;
				}
			}
			</script>
		
		</body>
	</html>
		<br><br>	<br><br>
	<div class='whole-wrap'>
				<div class='container'>
					<div class='section'>
						<div class='row'>
							<div class='col-lg-14 col-md-14'>
								<p style='font-size:18px;' align='justify'>
								
								Declaro que os dados, inclusive cadastrais, por mim mencionados são verdadeiros. Comprometo-me a informar qualquer alteração no meu quadro de saúde atual.</p><br>
								
								<center>
								Vitória, <?php echo date('d/m/Y'); ?><br>
								<br><br>
								_________________________________<br>
								Assinatura do Paciente ou Responsável
								</center>
								
							</div>
						</div>
					</div>
				</div>
	</div>
<br><br>			
<center>
	<img src='dompdf/logo2.png'>
</center>