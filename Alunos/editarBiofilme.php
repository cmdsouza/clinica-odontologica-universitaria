<?php
	session_start();
	date_default_timezone_set('america/sao_paulo');
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

$cpf = $_GET['cpf'];
$id = $_GET['id'];

	$sqlPerio = "SELECT * FROM tb_placa WHERE nr_idPlaca ='".$_GET['id']."'";
		$resultadoPerio = mysql_query($sqlPerio) or die();
		while($linhaPerio = mysql_fetch_array($resultadoPerio)){
			$disciplina = $linhaPerio['nm_disciplina'];
			$dupla = $linhaPerio['nr_idDupla'];
			$professor = $linhaPerio['nr_cpfProfessor'];
			$dataAntiga = $linhaPerio['dt_data'];
			$r1 = $linhaPerio['1'];
			$r2 = $linhaPerio['2'];
			$r3 = $linhaPerio['3'];
			$r4 = $linhaPerio['4'];
			$r5 = $linhaPerio['5'];
			$r6 = $linhaPerio['6'];
			$r7 = $linhaPerio['7'];
			$r8 = $linhaPerio['8'];
			$r9 = $linhaPerio['9'];
			$r10 = $linhaPerio['10'];
			$r11 = $linhaPerio['11'];
			$r12 = $linhaPerio['12'];
			$r13 = $linhaPerio['13'];
			$r14 = $linhaPerio['14'];
			$r15 = $linhaPerio['15'];
			$r16 = $linhaPerio['16'];
			$r17 = $linhaPerio['17'];
			$r18 = $linhaPerio['18'];
			$r19 = $linhaPerio['19'];
			$r20 = $linhaPerio['20'];
			$r21 = $linhaPerio['21'];
			$r22 = $linhaPerio['22'];
			$r23 = $linhaPerio['23'];
			$r24 = $linhaPerio['24'];
			$r25 = $linhaPerio['25'];
			$r26 = $linhaPerio['26'];
			$r27 = $linhaPerio['27'];
			$r28 = $linhaPerio['28'];
			$r29 = $linhaPerio['29'];
			$r30 = $linhaPerio['30'];
			$r31 = $linhaPerio['31'];
			$r32 = $linhaPerio['32'];
			$r33 = $linhaPerio['33'];
			$r34 = $linhaPerio['34'];
			$r35 = $linhaPerio['35'];
			$r36 = $linhaPerio['36'];
			$r37 = $linhaPerio['37'];
			$r38 = $linhaPerio['38'];
			$r39 = $linhaPerio['39'];
			$r40 = $linhaPerio['40'];
			$r41 = $linhaPerio['41'];
			$r42 = $linhaPerio['42'];
			$r43 = $linhaPerio['43'];
			$r44 = $linhaPerio['44'];
			$r45 = $linhaPerio['45'];
			$r46 = $linhaPerio['46'];
			$r47 = $linhaPerio['47'];
			$r48 = $linhaPerio['48'];
			$r49 = $linhaPerio['49'];
			$r50 = $linhaPerio['50'];
			$r51 = $linhaPerio['51'];
			$r52 = $linhaPerio['52'];
			$r53 = $linhaPerio['53'];
			$r54 = $linhaPerio['54'];
			$r55 = $linhaPerio['55'];
			$r56 = $linhaPerio['56'];
			$r57 = $linhaPerio['57'];
			$r58 = $linhaPerio['58'];
			$r59 = $linhaPerio['59'];
			$r60 = $linhaPerio['60'];
			$r61 = $linhaPerio['61'];
			$r62 = $linhaPerio['62'];
			$r63 = $linhaPerio['63'];
			$r64 = $linhaPerio['64'];
			$r65 = $linhaPerio['65'];
			$r66 = $linhaPerio['66'];
			$r67 = $linhaPerio['67'];
			$r68 = $linhaPerio['68'];
			$r69 = $linhaPerio['69'];
			$r70 = $linhaPerio['70'];
			$r71 = $linhaPerio['71'];
			$r72 = $linhaPerio['72'];
			$r73 = $linhaPerio['73'];
			$r74 = $linhaPerio['74'];
			$r75 = $linhaPerio['75'];
			$r76 = $linhaPerio['76'];
			$r77 = $linhaPerio['77'];
			$r78 = $linhaPerio['78'];
			$r79 = $linhaPerio['79'];
			$r80 = $linhaPerio['80'];
			$r81 = $linhaPerio['81'];
			$r82 = $linhaPerio['82'];
			$r83 = $linhaPerio['83'];
			$r84 = $linhaPerio['84'];
			$r85 = $linhaPerio['85'];
			$r86 = $linhaPerio['86'];
			$r87 = $linhaPerio['87'];
			$r88 = $linhaPerio['88'];
			$r89 = $linhaPerio['89'];
			$r90 = $linhaPerio['90'];
			$r91 = $linhaPerio['91'];
			$r92 = $linhaPerio['92'];
			$r93 = $linhaPerio['93'];
			$r94 = $linhaPerio['94'];
			$r95 = $linhaPerio['95'];
			$r96 = $linhaPerio['96'];
			$r97 = $linhaPerio['97'];
			$r98 = $linhaPerio['98'];
			$r99 = $linhaPerio['99'];
			$r100 = $linhaPerio['100'];
			$r101 = $linhaPerio['101'];
			$r102 = $linhaPerio['102'];
			$r103 = $linhaPerio['103'];
			$r104 = $linhaPerio['104'];
			$r105 = $linhaPerio['105'];
			$r106 = $linhaPerio['106'];
			$r107 = $linhaPerio['107'];
			$r108 = $linhaPerio['108'];
			$r109 = $linhaPerio['109'];
			$r110 = $linhaPerio['110'];
			$r111 = $linhaPerio['111'];
			$r112 = $linhaPerio['112'];
			$r113 = $linhaPerio['113'];
			$r114 = $linhaPerio['114'];
			$r115 = $linhaPerio['115'];
			$r116 = $linhaPerio['116'];
			$r117 = $linhaPerio['117'];
			$r118 = $linhaPerio['118'];
			$r119 = $linhaPerio['119'];
			$r120 = $linhaPerio['120'];
			$r121 = $linhaPerio['121'];
			$r122 = $linhaPerio['122'];
			$r123 = $linhaPerio['123'];
			$r124 = $linhaPerio['124'];
			$r125 = $linhaPerio['125'];
			$r126 = $linhaPerio['126'];
			$r127 = $linhaPerio['127'];
			$r128 = $linhaPerio['128'];
		}


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

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
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
			.trapecio-bottom {
				width: 41px;
				height: 0px;
				border-right: 10px solid transparent;
				border-left: 10px solid transparent;
				border-bottom: 20px solid white;
				margin-top:-4px;
				
			}

			.trapecio-top {
				width: 40px;
				height: 0px;
				border-right: 10px solid transparent;
				border-left: 10px solid transparent;
				border-top: 20px solid white;
			}

			.trapecio-right {
				width: 10px;
				height: 0px;
				border-right: 20px solid transparent;
				border-left: 20px solid transparent;
				border-top: 10px solid white;
				transform: rotate(90deg);
				margin-left:33.5px;
				margin-top:-10px;
				
			}

			.trapecio-left {
				width: 16px;
				height: 0px;
				border-right: 20px solid transparent;
				border-left: 20px solid transparent;
				border-top: 10px solid white;
				transform: rotate(270deg);
				margin-left: -32px;
				margin-top:-5px;
			}
			</style>
		</head>
		<body>

		  <header id="header" id="home">
		    <div class="container">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li class="menu-active"><a href="alunos2.php">Página Inicial</a></li>
					  <li class="menu"><a href="" data-toggle="modal" data-target="#examplePaciente">Consultar Pacientes</a></li>
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->

			<section class="generic-banner relative">	
				<div class="container">
					<div class="row height align-items-center justify-content-center">
						<div class="col-lg-10">
							<div class="generic-banner-content">
								<?php
									if($sexo == 'Masculino'){
										$d = "do";
									}else{
										$d = "da";
									}
								
									echo "<h2 class='text-white'>Atualizar o Controle de Placa Bacteriana <br>".$d." ".$paciente."</h2>";								
								?>
							</div>							
						</div>
					</div>
				</div>
			</section>		
			<!-- End banner Area -->
			
		<!-- jQuery library -->
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<!-- Bootstrap JS -->
			<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

			<!-- Initialize Bootstrap functionality -->
			<script>
			// Initialize tooltip component
			$(function () {
			  $('[data-toggle="tooltip"]').tooltip()
			})

			// Initialize popover component
			$(function () {
			  $('[data-toggle="popover"]').popover()
			})
			</script>
		
		
		
		<br>
		<center>
					<form method='POST' action='atualizarBiofilme.php'>
					<input type='hidden' name='cpf' value='<?php echo $_GET['cpf']; ?>'>
					<input type='hidden' name='id' value='<?php echo $_GET['id']; ?>'>
					<table>
						<tr>
							<td><b>Data:</b></td>
							<td><input type='text' name='dia' disabled value='<?php echo $dataAntiga; ?>' class='single-input' style='height:25px; width:200px;' required></td>
							<td> &nbsp; &nbsp; </td>
							<td><b>Disciplina:</b></td>
							<td>
								<select class='single-input' name='disciplina'>
												<?php echo "<option value='".$disciplina."'>".$disciplina."</option>"; ?>
													<option value='Estágio Supervisionado III'>Estágio Supervisionado III</option>
													<option value='Clínica Integrada I'>Clínica Integrada I</option>
													<option value='Clínica Integrada II'>Clínica Integrada II</option>
													<option value='Clínica Integrada III'>Clínica Integrada III</option>
													<option value='Clínica Integrada IV'>Clínica Integrada IV</option>
													<option value='Clínica Integrada V'>Clínica Integrada V</option>
													<option value='Clínica Infantil I'>Clínica Infantil I</option>
													<option value='Clínica Infantil II'>Clínica Infantil II</option>
													<option value='Clínica Integrada PNE'>Clínica Integrada PNE</option>
								</select>
							</td>
							
						</tr>
						<tr>
							<td><b>Dupla:</b></td>
							<td>
								<select class='single-input' name='dupla'>
												<?php			

															$sqlNome = "SELECT * FROM tb_duplas WHERE nr_idDupla = ".$dupla." LIMIT 1";
															$resultadoNome = mysql_query($sqlNome) or die();
															while($linhaNome = mysql_fetch_array($resultadoNome)){
																
																	$sqlNome1 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linhaNome['nr_cpf1']."'";
																	$resultadoNome1 = mysql_query($sqlNome1) or die();
																	while($linhaNome1 = mysql_fetch_array($resultadoNome1)){
																		$nome1 = $linhaNome1['nm_nomeAluno']; 
																		$periodo = $linhaNome1['nr_periodo']; 
																	}
																	
																	$sqlNome2 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linhaNome['nr_cpf2']."'";
																	$resultadoNome2 = mysql_query($sqlNome2) or die();
																	while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
																		$nome2 = $linhaNome2['nm_nomeAluno']; 
																	}
																	
																	
																	echo "<option value='".$linhaNome['nr_idDupla']."'>".$nome1." e ".$nome2." (".$periodo."º Periodo)</option>";
																
															}
															
												
															$sqlNome = "SELECT * FROM tb_duplas";
															$resultadoNome = mysql_query($sqlNome) or die();
															while($linhaNome = mysql_fetch_array($resultadoNome)){
																
																if($linhaNome['nr_idDupla'] == $dupla){
																	
																}else{
																
																	$sqlNome1 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linhaNome['nr_cpf1']."'";
																	$resultadoNome1 = mysql_query($sqlNome1) or die();
																	while($linhaNome1 = mysql_fetch_array($resultadoNome1)){
																		$nome1 = $linhaNome1['nm_nomeAluno']; 
																		$periodo = $linhaNome1['nr_periodo']; 
																	}
																	
																	$sqlNome2 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linhaNome['nr_cpf2']."'";
																	$resultadoNome2 = mysql_query($sqlNome2) or die();
																	while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
																		$nome2 = $linhaNome2['nm_nomeAluno']; 
																	}
																	
																	
																	echo "<option value='".$linhaNome['nr_idDupla']."'>".$nome1." e ".$nome2." (".$periodo."º Periodo)</option>";
																}
															}
												
												?>
								</select>
							</td>
							<td> &nbsp; &nbsp; </td>
							<td><b>Professor:</b></td>
							<td>
								<select class='single-input' name='professor'>
								<?php							
															$sqlNome = "SELECT * FROM tb_funcionarios WHERE nr_cpfFuncionario = '".$professor."'";
															$resultadoNome = mysql_query($sqlNome) or die();
															while($linhaNome = mysql_fetch_array($resultadoNome)){
																echo "<option value='".$linhaNome['nr_cpfFuncionario']."'>".$linhaNome['nm_nomeFuncionario']."</option>";
															}
								
															$sqlNome = "SELECT * FROM tb_funcionarios WHERE nm_tipo = 'Professor'";
															$resultadoNome = mysql_query($sqlNome) or die();
															while($linhaNome = mysql_fetch_array($resultadoNome)){
																if($linhaNome['nr_cpfFuncionario'] == $professor){
																	
																}else{
																	echo "<option value='".$linhaNome['nr_cpfFuncionario']."'>".$linhaNome['nm_nomeFuncionario']."</option>";
																}
															}
												
								?>
								</select>
							</td>
						</tr>
						
					</table>
				</center>
				<br>
				
				<center>	
					
					
					<table border=0 width='80%'>
						<tr>
							<td></td>
							<td><b><center>Lado A <img src='icones/customer-service.png' width='6%' height='6%' data-toggle="modal" data-target="#modalExemplo"></center></b></td>
							<td><b><center>Lado B <img src='icones/customer-service.png' width='6%' height='6%' data-toggle="modal" data-target="#modalExemplo"></center></b></td>
							<td><b><center>Lado C <img src='icones/customer-service.png' width='6%' height='6%' data-toggle="modal" data-target="#modalExemplo"></center></b></td>
							<td><b><center>Lado D <img src='icones/customer-service.png' width='6%' height='6%' data-toggle="modal" data-target="#modalExemplo"></center></b></td>
						</tr>
						<tr>
							<td><b><center>Dente 18</center></b></td>
							<td style='padding:3px;'>
								<center>
									<select name='18A' class='single-input'>
									<?php
										switch($r1){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='18B' class='single-input'>
									<?php
										switch($r2){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='18C' class='single-input'>
									<?php
										switch($r3){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='18D' class='single-input'>
									<?php
										switch($r4){
											case '1':
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '0':
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '3':
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
						</tr>
						<tr>
							<td><b><center>Dente 17</center></b></td>
							<td style='padding:3px;'>								<center>
									<select name='17A' class='single-input'>
									<?php
										switch($r5){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='17B' class='single-input'>
									<?php
										switch($r6){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='17C' class='single-input'>
									<?php
										switch($r7){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='17D' class='single-input'>
									<?php
										switch($r8){
											case '1':
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '0':
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '3':
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
						</tr>
						<!-- Inicio 16 -->
						<tr>
							<td><b><center>Dente 16</center></b></td>
							<td style='padding:3px;'>								<center>
									<select name='16A' class='single-input'>
									<?php
										switch($r9){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='16B' class='single-input'>
									<?php
										switch($r10){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='16C' class='single-input'>
									<?php
										switch($r11){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='16D' class='single-input'>
									<?php
										switch($r12){
											case '1':
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '0':
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '3':
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
						</tr>
						<!-- Fim 16 -->
						<!-- Inicio 15 -->
						<tr>
							<td><b><center>Dente 15</center></b></td>
							<td style='padding:3px;'>								<center>
									<select name='15A' class='single-input'>
									<?php
										switch($r13){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='15B' class='single-input'>
									<?php
										switch($r14){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='15C' class='single-input'>
									<?php
										switch($r15){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='15D' class='single-input'>
									<?php
										switch($r16){
											case '1':
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '0':
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '3':
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
						</tr>
						<!-- Fim 15 -->
						<!-- Inicio 14 -->
						<tr>
							<td><b><center>Dente 14</center></b></td>
							<td style='padding:3px;'>								<center>
									<select name='14A' class='single-input'>
									<?php
										switch($r17){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='14B' class='single-input'>
									<?php
										switch($r18){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='14C' class='single-input'>
									<?php
										switch($r19){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='14D' class='single-input'>
									<?php
										switch($r20){
											case '1':
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '0':
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '3':
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
						</tr>
						<!-- Fim 14 -->
						<!-- Inicio 13 -->
						<tr>
							<td><b><center>Dente 13</center></b></td>
							<td style='padding:3px;'>								<center>
									<select name='13A' class='single-input'>
									<?php
										switch($r21){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='13B' class='single-input'>
									<?php
										switch($r22){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='13C' class='single-input'>
									<?php
										switch($r23){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='13D' class='single-input'>
									<?php
										switch($r24){
											case '1':
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '0':
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '3':
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
						</tr>
						<!-- Fim 13 -->
						<!-- Inicio 12 -->
						<tr>
							<td><b><center>Dente 12</center></b></td>
							<td style='padding:3px;'>								<center>
									<select name='12A' class='single-input'>
									<?php
										switch($r25){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='12B' class='single-input'>
									<?php
										switch($r26){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='12C' class='single-input'>
									<?php
										switch($r27){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='12D' class='single-input'>
									<?php
										switch($r28){
											case '1':
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '0':
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '3':
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
						</tr>
						<!-- Fim 12 -->
						<!-- Inicio 11 -->
						<tr>
							<td><b><center>Dente 11</center></b></td>
							<td style='padding:3px;'>								<center>
									<select name='11A' class='single-input'>
									<?php
										switch($r29){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='11B' class='single-input'>
									<?php
										switch($r30){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='11C' class='single-input'>
									<?php
										switch($r31){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='11D' class='single-input'>
									<?php
										switch($r32){
											case '1':
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '0':
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '3':
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
						</tr>
						<!-- Fim 11 -->
						<!-- Inicio 21 -->
						<tr>
							<td><b><center>Dente 21</center></b></td>
							<td style='padding:3px;'>								<center>
									<select name='21A' class='single-input'>
									<?php
										switch($r33){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='21B' class='single-input'>
									<?php
										switch($r34){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='21C' class='single-input'>
									<?php
										switch($r35){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='21D' class='single-input'>
									<?php
										switch($r36){
											case '1':
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '0':
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '3':
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
						</tr>
						<!-- Fim 21 -->
						<!-- Inicio 22 -->
						<tr>
							<td><b><center>Dente 22</center></b></td>
							<td style='padding:3px;'>								<center>
									<select name='22A' class='single-input'>
									<?php
										switch($r37){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='22B' class='single-input'>
									<?php
										switch($r38){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='22C' class='single-input'>
									<?php
										switch($r39){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='22D' class='single-input'>
									<?php
										switch($r40){
											case '1':
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '0':
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '3':
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
						</tr>
						<!-- Fim 22 -->
						<!-- Inicio 23 -->
						<tr>
							<td><b><center>Dente 23</center></b></td>
							<td style='padding:3px;'>								<center>
									<select name='23A' class='single-input'>
									<?php
										switch($r41){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='23B' class='single-input'>
									<?php
										switch($r42){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='23C' class='single-input'>
									<?php
										switch($r43){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='23D' class='single-input'>
									<?php
										switch($r44){
											case '1':
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '0':
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '3':
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
						</tr>
						<!-- Fim 23 -->
						<!-- Inicio 24 -->
						<tr>
							<td><b><center>Dente 24</center></b></td>
							<td style='padding:3px;'>								<center>
									<select name='24A' class='single-input'>
									<?php
										switch($r45){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='24B' class='single-input'>
									<?php
										switch($r46){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='24C' class='single-input'>
									<?php
										switch($r47){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='24D' class='single-input'>
									<?php
										switch($r48){
											case '1':
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '0':
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '3':
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
						</tr>
						<!-- Fim 24 -->
						<!-- Inicio 25 -->
						<tr>
							<td><b><center>Dente 25</center></b></td>
							<td style='padding:3px;'>								<center>
									<select name='25A' class='single-input'>
									<?php
										switch($r49){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='25B' class='single-input'>
									<?php
										switch($r50){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='25C' class='single-input'>
									<?php
										switch($r51){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='25D' class='single-input'>
									<?php
										switch($r52){
											case '1':
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '0':
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '3':
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
						</tr>
						<!-- Fim 25 -->
						<!-- Inicio 26 -->
						<tr>
							<td><b><center>Dente 26</center></b></td>
							<td style='padding:3px;'>								<center>
									<select name='26A' class='single-input'>
									<?php
										switch($r53){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='26B' class='single-input'>
									<?php
										switch($r54){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='26C' class='single-input'>
									<?php
										switch($r55){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='26D' class='single-input'>
									<?php
										switch($r56){
											case '1':
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '0':
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '3':
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
						</tr>
						<!-- Fim 26 -->
						<!-- Inicio 27 -->
						<tr>
							<td><b><center>Dente 27</center></b></td>
							<td style='padding:3px;'>								<center>
									<select name='27A' class='single-input'>
									<?php
										switch($r57){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='27B' class='single-input'>
									<?php
										switch($r58){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='27C' class='single-input'>
									<?php
										switch($r59){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='27D' class='single-input'>
									<?php
										switch($r60){
											case '1':
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '0':
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '3':
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
						</tr>
						<!-- Fim 27 -->
						<!-- Inicio 28 -->
						<tr>
							<td><b><center>Dente 28</center></b></td>
							<td style='padding:3px;'>								<center>
									<select name='28A' class='single-input'>
									<?php
										switch($r61){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='28B' class='single-input'>
									<?php
										switch($r62){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='28C' class='single-input'>
									<?php
										switch($r63){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='28D' class='single-input'>
									<?php
										switch($r64){
											case '1':
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '0':
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '3':
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
						</tr>
						<!-- Fim 28 -->
						<!-- Inicio 48 -->
						<tr>
							<td><b><center>Dente 48</center></b></td>
							<td style='padding:3px;'>								<center>
									<select name='48A' class='single-input'>
									<?php
										switch($r65){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='48B' class='single-input'>
									<?php
										switch($r66){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='48C' class='single-input'>
									<?php
										switch($r67){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='48D' class='single-input'>
									<?php
										switch($r68){
											case '1':
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '0':
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '3':
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
						</tr>
						<!-- Fim 48 -->
						<!-- Inicio 47 -->
						<tr>
							<td><b><center>Dente 47</center></b></td>
							<td style='padding:3px;'>								<center>
									<select name='47A' class='single-input'>
									<?php
										switch($r69){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='47B' class='single-input'>
									<?php
										switch($r70){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='47C' class='single-input'>
									<?php
										switch($r71){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='47D' class='single-input'>
									<?php
										switch($r72){
											case '1':
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '0':
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '3':
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
						</tr>
						<!-- Fim 47 -->
						<!-- Inicio 46 -->
						<tr>
							<td><b><center>Dente 46</center></b></td>
							<td style='padding:3px;'>								<center>
									<select name='46A' class='single-input'>
									<?php
										switch($r73){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='46B' class='single-input'>
									<?php
										switch($r74){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='46C' class='single-input'>
									<?php
										switch($r75){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='46D' class='single-input'>
									<?php
										switch($r76){
											case '1':
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '0':
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '3':
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
						</tr>
						<!-- Fim 46 -->
						<!-- Inicio 45 -->
						<tr>
							<td><b><center>Dente 45</center></b></td>
							<td style='padding:3px;'>								<center>
									<select name='45A' class='single-input'>
									<?php
										switch($r77){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='45B' class='single-input'>
									<?php
										switch($r78){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='45C' class='single-input'>
									<?php
										switch($r79){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='45D' class='single-input'>
									<?php
										switch($r80){
											case '1':
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '0':
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '3':
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
						</tr>
						<!-- Fim 45 -->
						<!-- Inicio 44 -->
						<tr>
							<td><b><center>Dente 44</center></b></td>
							<td style='padding:3px;'>								<center>
									<select name='44A' class='single-input'>
									<?php
										switch($r81){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='44B' class='single-input'>
									<?php
										switch($r82){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='44C' class='single-input'>
									<?php
										switch($r83){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='44D' class='single-input'>
									<?php
										switch($r84){
											case '1':
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '0':
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '3':
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
						</tr>
						<!-- Fim 44 -->
						<!-- Inicio 43 -->
						<tr>
							<td><b><center>Dente 43</center></b></td>
							<td style='padding:3px;'>								<center>
									<select name='43A' class='single-input'>
									<?php
										switch($r85){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='43B' class='single-input'>
									<?php
										switch($r86){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='43C' class='single-input'>
									<?php
										switch($r87){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='43D' class='single-input'>
									<?php
										switch($r88){
											case '1':
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '0':
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '3':
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
						</tr>
						<!-- Fim 43 -->
						<!-- Inicio 42 -->
						<tr>
							<td><b><center>Dente 42</center></b></td>
							<td style='padding:3px;'>								<center>
									<select name='42A' class='single-input'>
									<?php
										switch($r89){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='42B' class='single-input'>
									<?php
										switch($r90){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='42C' class='single-input'>
									<?php
										switch($r91){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='42D' class='single-input'>
									<?php
										switch($r92){
											case '1':
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '0':
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '3':
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
						</tr>
						<!-- Fim 42 -->
						<!-- Inicio 41 -->
						<tr>
							<td><b><center>Dente 41</center></b></td>
							<td style='padding:3px;'>								<center>
									<select name='41A' class='single-input'>
									<?php
										switch($r93){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='41B' class='single-input'>
									<?php
										switch($r94){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='41C' class='single-input'>
									<?php
										switch($r95){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='41D' class='single-input'>
									<?php
										switch($r96){
											case '1':
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '0':
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '3':
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
						</tr>
						<!-- Fim 41 -->
						<!-- Inicio 31 -->
						<tr>
							<td><b><center>Dente 31</center></b></td>
							<td style='padding:3px;'>								<center>
									<select name='31A' class='single-input'>
									<?php
										switch($r97){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='31B' class='single-input'>
									<?php
										switch($r98){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='31C' class='single-input'>
									<?php
										switch($r99){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='31D' class='single-input'>
									<?php
										switch($r100){
											case '1':
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '0':
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '3':
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
						</tr>
						<!-- Fim 31 -->
						<!-- Inicio 32 -->
						<tr>
							<td><b><center>Dente 32</center></b></td>
							<td style='padding:3px;'>								<center>
									<select name='32A' class='single-input'>
									<?php
										switch($r101){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='32B' class='single-input'>
									<?php
										switch($r102){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='32C' class='single-input'>
									<?php
										switch($r103){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='32D' class='single-input'>
									<?php
										switch($r104){
											case '1':
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '0':
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '3':
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
						</tr>
						<!-- Fim 32 -->
						<!-- Inicio 33 -->
						<tr>
							<td><b><center>Dente 33</center></b></td>
							<td style='padding:3px;'>								<center>
									<select name='33A' class='single-input'>
									<?php
										switch($r105){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='33B' class='single-input'>
									<?php
										switch($r106){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='33C' class='single-input'>
									<?php
										switch($r107){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='33D' class='single-input'>
									<?php
										switch($r108){
											case '1':
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '0':
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '3':
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
						</tr>
						<!-- Fim 33 -->
						<!-- Inicio 34 -->
						<tr>
							<td><b><center>Dente 34</center></b></td>
							<td style='padding:3px;'>								<center>
									<select name='34A' class='single-input'>
									<?php
										switch($r109){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='34B' class='single-input'>
									<?php
										switch($r110){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='34C' class='single-input'>
									<?php
										switch($r111){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='34D' class='single-input'>
									<?php
										switch($r112){
											case '1':
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '0':
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '3':
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
						</tr>
						<!-- Fim 34 -->
						<!-- Inicio 35 -->
						<tr>
							<td><b><center>Dente 35</center></b></td>
							<td style='padding:3px;'>								<center>
									<select name='35A' class='single-input'>
									<?php
										switch($r113){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='35B' class='single-input'>
									<?php
										switch($r114){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='35C' class='single-input'>
									<?php
										switch($r115){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='35D' class='single-input'>
									<?php
										switch($r116){
											case '1':
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '0':
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '3':
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
						</tr>
						<!-- Fim 35 -->
						<!-- Inicio 36 -->
						<tr>
							<td><b><center>Dente 36</center></b></td>
							<td style='padding:3px;'>								<center>
									<select name='36A' class='single-input'>
									<?php
										switch($r117){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='36B' class='single-input'>
									<?php
										switch($r118){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='36C' class='single-input'>
									<?php
										switch($r119){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='36D' class='single-input'>
									<?php
										switch($r120){
											case '1':
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '0':
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '3':
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
						</tr>
						<!-- Fim 36 -->
						<!-- Inicio 37 -->
						<tr>
							<td><b><center>Dente 37</center></b></td>
							<td style='padding:3px;'>								<center>
									<select name='37A' class='single-input'>
									<?php
										switch($r121){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='37B' class='single-input'>
									<?php
										switch($r122){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='37C' class='single-input'>
									<?php
										switch($r123){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='37D' class='single-input'>
									<?php
										switch($r124){
											case '1':
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '0':
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '3':
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
						</tr>
						<!-- Fim 37 -->
						<!-- Inicio 38 -->
						<tr>
							<td><b><center>Dente 38</center></b></td>
							<td style='padding:3px;'>								<center>
									<select name='38A' class='single-input'>
									<?php
										switch($r125){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='38B' class='single-input'>
									<?php
										switch($r126){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='38C' class='single-input'>
									<?php
										switch($r127){
											case 1:
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 0:
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case 3:
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
							<td style='padding:3px;'>								<center>
									<select name='38D' class='single-input'>
									<?php
										switch($r128){
											case '1':
												echo "<option value='1'>Corado</option><option value='0'>Não Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '0':
												echo "<option value='0'>Não Corado</option><option value='1'>Corado</option><option value='3'>Ausente</option>";
											break;
											
											case '3':
												echo "<option value='3'>Ausente</option><option value='1'>Corado</option><option value='0'>Não Corado</option>";
											break;
										}
									?>
									</select>
								</center>
							</td>
						</tr>
						<!-- Fim 38 -->
						
					</table>
					
					<!-- Modal Legenda -->
					<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Legenda</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
								x
							</button>
						  </div>
						  <div class="modal-body" style='background-color:rgb(207,207,212);'>
							<img src='icones/base placa.png'>
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
						  </div>
						</div>
					  </div>
					</div>
						
						<br><br>
						<input type='submit' class="genric-btn primary" value='Salvar'>
						<a href='periodontia.php?cpf=<?php echo $_GET['cpf']; ?>' class="genric-btn primary">Voltar</a>
					</form>	
				</center>	
			
		<!-- End price Area -->
		<br>
		
		
		<br>
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Equipe de Desenvolvimento</h6>
								<p>
									Carlos Matheus (Eng. Elétrica), Conrado Neto (Odontologia) e Adan Lúcio (Me. Energia).
								</p>
								
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Logoff</h6>
								<p><a href='../logout.php'>Clique aqui para sair do sistema.</a></p>
								
							</div>
						</div>						
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6><center>Faculdade Multivix</center></h6>
								<div class="footer-social d-flex align-items-center">
									<center><a href="https://multivix.edu.br/"><i><img width='90%' height='90%' src='../img/Logo-Multivix.png'></i></a></center>
								</div>
							</div>
						</div>	
				<p class="footer-text" style='font-size:8px;'>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados | Template adaptado fornecido por <a href="https://colorlib.com" target="_blank">Colorlib</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
							
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->
			
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

<!-- Modal -->
<div class="modal fade" id="examplePaciente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Escolha um Paciente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form method='GET' action='consultarPaciente.php'>
       <div class="mt-10">
		<select class="single-input" name='cpf'>
		<?php
			$sqlNome = "SELECT * FROM tb_paciente";
			$resultadoNome = mysql_query($sqlNome) or die();
			while($linhaNome = mysql_fetch_array($resultadoNome)){
				echo "<option value='".$linhaNome['nr_cpfPaciente']."'>".$linhaNome['nm_nomePaciente']."</option>";
			}
		?>
		</select>
      </div>
      <div class="modal-footer">
        <button type="submit" class="genric-btn success">Consultar</button>
      </div></form>
    </div>
  </div>

