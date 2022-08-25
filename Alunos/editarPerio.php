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
$dataAntiga = $_GET['data'];
$dente = $_GET['dente'];

	$sqlPerio = "SELECT * FROM tb_periograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND dt_data = '".$dataAntiga."' AND nr_dente =".$dente;
		$resultadoPerio = mysql_query($sqlPerio) or die();
		while($linhaPerio = mysql_fetch_array($resultadoPerio)){
			$disciplina = $linhaPerio['nm_disciplina'];
			$dupla = $linhaPerio['nr_idDupla'];
			$professor = $linhaPerio['nr_cpfProfessor'];
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
	}


?>

	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="../img/elements/fav.png">
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
								
									echo "<h2 class='text-white'>Atualizar Periograma ".$d." ".$paciente."</h2>";
									echo "<p style='color:white;'>Dente: ".$dente." | Dia: ".$dataAntiga."</p>";									
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
					<form method='POST' action='atualizarPeriograma.php'>
					<input type='hidden' name='cpf' value='<?php echo $_GET['cpf']; ?>'>
					<input type='hidden' name='dente' value='<?php echo $_GET['dente']; ?>'>
					<input type='hidden' name='dataAntiga' value='<?php echo $_GET['data']; ?>'>
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
			
					
					<center><br>
						<div class="progress-table-wrap"  style='width:90%;'>
							<div class="progress-table">
								
								<table border=0>
								  <thead>
									<tr>
									  <td><center></center></td>
									  <td><center></center></td>
									  <td colspan=3><center><b>18</b></center></td>
									</tr>
								  </thead>
								  <tbody>
									<tr>
									  <td><center><b style='margin-left:35px; margin-right:35px;'>Dente</b></center></td>
									  <td><center><b style='margin-left:30px; margin-right:30px;'>Face</b></center></td>
									  <td><center><b style='color:black;'>D</b></center></td>
									  <td><center><b style='color:black;'>TM</b></center></td>
									  <td><center><b style='color:black;'>M</b></center></td>
									</tr>
									<tr>
									  <td><center><b style='color:black;'>Sangr. Sond.</b></center></td>
									  <td><center><b style='color:black;'>V</b></center></td>
									  <?php
										switch($r1){
											case "+":
												echo "<td><center><select name='sangrVD18' style='height:30px;' class='single-input'><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>";
											break;
											
											case "-":
												echo "<td><center><select name='sangrVD18' style='height:30px;' class='single-input'><option value='-'>-</option><option style='color:red;' value='+'>+</option></select></center></td>";
											break;
											
											default:
												echo "<td><center><select name='sangrVD18' style='height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>";
										}
										
										switch($r2){
											case "+":
												echo "<td><center><select name='sangrVTM18' style='height:30px;' class='single-input'><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>";
											break;
											
											case "-":
												echo "<td><center><select name='sangrVTM18' style='height:30px;' class='single-input'><option value='-'>-</option><option style='color:red;' value='+'>+</option></select></center></td>";
											break;
											
											default:
												echo "<td><center><select name='sangrVTM18' style='height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>";
										}
										
										switch($r3){
											case "+":
												echo "<td><center><select name='sangrVM18' style='height:30px;' class='single-input'><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>";
											break;
											
											case "-":
												echo "<td><center><select name='sangrVM18' style='height:30px;' class='single-input'><option value='-'>-</option><option style='color:red;' value='+'>+</option></select></center></td>";
											break;
											
											default:
												echo "<td><center><select name='sangrVM18' style='height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>";
										}
									  
									  
									  ?>
									 </tr>
									<tr>
									  <td><center><b style='color:black;'>PMG</b></center></td>
									  <td><center><b style='color:black;'>V</b></center></td>
									  <td><center><input type='number' name='pmgVD18' style='height:30px;' value='<?php echo $r4; ?>' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVTM18' style='height:30px;' value='<?php echo $r5; ?>' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVM18' style='height:30px;' value='<?php echo $r6; ?>' class='single-input'></center></td>
									</tr>
									<tr>
									  <td><center><b style='color:black;'>PSV</b></center></td>
									  <td><center><b style='color:black;'>V</b></center></td>
									  <td><center><input type='number' name='psvVD18' style='height:30px;' value='<?php echo $r7; ?>' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVTM18' style='height:30px;' value='<?php echo $r8; ?>' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVM18' style='height:30px;' value='<?php echo $r9; ?>' class='single-input'></center></td>
									  </tr>
									<tr>
									  <td><center><b style='color:black;'>NIC</b></center></td>
									  <td><center><b style='color:black;'>V</b></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente! Atualmente seu valor é igual a <?php echo $r10; ?>'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente! Atualmente seu valor é igual a <?php echo $r11; ?>'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente! Atualmente seu valor é igual a <?php echo $r12; ?>'></center></td>
									  </tr>
									<tr>
									  <td><center><b style='color:black;'>Sangr. Sond.</b></center></td>
									  <td><center><b style='color:black;'>P</b></center></td>
									  <?php
										switch($r13){
											case "+":
												echo "<td><center><select name='sangrPD18' style='height:30px;' class='single-input'><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>";
											break;
											
											case "-":
												echo "<td><center><select name='sangrPD18' style='height:30px;' class='single-input'><option value='-'>-</option><option style='color:red;' value='+'>+</option></select></center></td>";
											break;
											
											default:
												echo "<td><center><select name='sangrPD18' style='height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>";
										}
										
										switch($r14){
											case "+":
												echo "<td><center><select name='sangrPTM18' style='height:30px;' class='single-input'><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>";
											break;
											
											case "-":
												echo "<td><center><select name='sangrPTM18' style='height:30px;' class='single-input'><option value='-'>-</option><option style='color:red;' value='+'>+</option></select></center></td>";
											break;
											
											default:
												echo "<td><center><select name='sangrPTM18' style='height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>";
										}
										
										switch($r15){
											case "+":
												echo "<td><center><select name='sangrPM18' style='height:30px;' class='single-input'><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>";
											break;
											
											case "-":
												echo "<td><center><select name='sangrPM18' style='height:30px;' class='single-input'><option value='-'>-</option><option style='color:red;' value='+'>+</option></select></center></td>";
											break;
											
											default:
												echo "<td><center><select name='sangrPM18' style='height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>";
										}
									  
									  
									  ?>
									  </tr>
									<tr>
									  <td><center><b style='color:black;'>PMG</b></center></td>
									  <td><center><b style='color:black;'>P</b></center></td>
									  <td><center><input type='number' name='pmgPD18' style='height:30px;' value='<?php echo $r16; ?>' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPTM18' style='height:30px;' value='<?php echo $r17; ?>' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPM18' style='height:30px;' value='<?php echo $r18; ?>' class='single-input'></center></td>
									  </tr>
									<tr>
									  <td><center><b style='color:black;'>PSV</b></center></td>
									  <td><center><b style='color:black;'>P</b></center></td>
									  <td><center><input type='number' name='psvPD18' style='height:30px;' value='<?php echo $r19; ?>' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPTM18' style='height:30px;' value='<?php echo $r20; ?>' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPM18' style='height:30px;' value='<?php echo $r21; ?>' class='single-input'></center></td>
									 </tr>
									<tr>
									  <td><center><b style='color:black;'>NIC</b></center></td>
									  <td><center><b style='color:black;'>P</b></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente! Atualmente seu valor é igual a <?php echo $r22; ?>'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente! Atualmente seu valor é igual a <?php echo $r23; ?>'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente! Atualmente seu valor é igual a <?php echo $r24; ?>'></center></td>
									  </tr>
									<tr>
									  <td colspan=2><center><b style='color:black;'>Mobilidade</b></center></td>
									  <td colspan=3><center><input type='text' name='mobilidade18' value='<?php echo $r25; ?>' style='height:30px;' class='single-input'></center></td>
									</tr>
									<tr>
									  <td colspan=2><center><b style='color:black;'>Furca</b></center></td>
									  
									  <?php
										if(($dente == '18') || ($dente == '17') || ($dente == '16') || ($dente == '26')  || ($dente == '27')  || ($dente == '28') || ($dente == '48') || ($dente == '47') || ($dente == '46') || ($dente == '36')  || ($dente == '37')  || ($dente == '38')){
											switch($r26){
												case "1/3":
													echo "<td colspan=3><center><select name='furca18D' style='height:30px;' class='single-input'><option value='1/3'>1/3</option><option value='2/3'>2/3</option><option value='3/3'>3/3</option></select></center></td>";
												break;
												
												case "2/3":
													echo "<td colspan=3><center><select name='furca18D' style='height:30px;' class='single-input'><option value='1/3'>1/3</option><option value='2/3'>2/3</option><option value='3/3'>3/3</option></select></center></td>";
												break;
												
												case "3/3":
													echo "<td colspan=3><center><select name='furca18D' style='height:30px;' class='single-input'><option value='1/3'>1/3</option><option value='2/3'>2/3</option><option value='3/3'>3/3</option></select></center></td>";
												break;
												
												default:
													echo "<td colspan=3><center><select name='furca18D' style='height:30px;' class='single-input'><option value=''></option><option value='1/3'>1/3</option><option value='2/3'>2/3</option><option value='3/3'>3/3</option></select></center></td>";
											}
											echo "<input type='hidden' value='N/A' name='furca18M'";
										}
										
										
										if(($dente == '15') || ($dente == '13') || ($dente == '12') || ($dente == '11')  || ($dente == '21')  || ($dente == '22') || ($dente == '23') || ($dente == '25') || ($dente == '35') || ($dente == '33') || ($dente == '32') || ($dente == '31')  || ($dente == '41')  || ($dente == '42') || ($dente == '43') || ($dente == '45')){
											echo "<input type='hidden' value='N/A' name='furca18D'";
											echo "<input type='hidden' value='N/A' name='furca18M'";
										}
										
										
										if(($dente == '14') || ($dente == '24') || ($dente == '34') || ($dente == '44')){
											switch($r26){
												case "1/3":
													echo "<td colspan=3><center><select name='furca18D' style='height:30px;' class='single-input'><option value='1/3'>1/3</option><option value='2/3'>2/3</option><option value='3/3'>3/3</option></select></center></td>";
												break;
												
												case "2/3":
													echo "<td colspan=3><center><select name='furca18D' style='height:30px;' class='single-input'><option value='1/3'>1/3</option><option value='2/3'>2/3</option><option value='3/3'>3/3</option></select></center></td>";
												break;
												
												case "3/3":
													echo "<td colspan=3><center><select name='furca18D' style='height:30px;' class='single-input'><option value='1/3'>1/3</option><option value='2/3'>2/3</option><option value='3/3'>3/3</option></select></center></td>";
												break;
												
												default:
													echo "<td colspan=3><center><select name='furca18D' style='height:30px;' class='single-input'><option value=''></option><option value='1/3'>1/3</option><option value='2/3'>2/3</option><option value='3/3'>3/3</option></select></center></td>";
											}
											
											switch($r27){
												case "1/3":
													echo "<td colspan=3><center><select name='furca18M' style='height:30px;' class='single-input'><option value='1/3'>1/3</option><option value='2/3'>2/3</option><option value='3/3'>3/3</option></select></center></td>";
												break;
												
												case "2/3":
													echo "<td colspan=3><center><select name='furca18M' style='height:30px;' class='single-input'><option value='1/3'>1/3</option><option value='2/3'>2/3</option><option value='3/3'>3/3</option></select></center></td>";
												break;
												
												case "3/3":
													echo "<td colspan=3><center><select name='furca18M' style='height:30px;' class='single-input'><option value='1/3'>1/3</option><option value='2/3'>2/3</option><option value='3/3'>3/3</option></select></center></td>";
												break;
												
												default:
													echo "<td colspan=3><center><select name='furca18M' style='height:30px;' class='single-input'><option value=''></option><option value='1/3'>1/3</option><option value='2/3'>2/3</option><option value='3/3'>3/3</option></select></center></td>";
											}
										}
									  ?>
									</tr>
									</tbody>
								</table>
								
							</div>
						</div>
						
						<br>
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

