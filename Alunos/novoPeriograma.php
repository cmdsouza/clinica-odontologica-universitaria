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
								
									echo "<h2 class='text-white'>Novo Periograma ".$d." ".$paciente."</h2>";								
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
					<form method='POST' action='inserirPeriograma.php'>
					<input type='hidden' name='cpf' value='<?php echo $_GET['cpf']; ?>'>
					<table>
						<tr>
							<td><b>Data:</b></td>
							<td><input type='date' name='dia' class='single-input' style='height:25px; width:200px;' required></td>
							<td> &nbsp; &nbsp; </td>
							<td><b>Disciplina:</b></td>
							<td>
								<select class='single-input' name='disciplina'>
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
															$sqlNome = "SELECT * FROM tb_duplas";
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
												
												?>
								</select>
							</td>
							<td> &nbsp; &nbsp; </td>
							<td><b>Professor:</b></td>
							<td>
								<select class='single-input' name='professor'>
								<?php												
															$sqlNome = "SELECT * FROM tb_funcionarios WHERE nm_tipo = 'Professor'";
															$resultadoNome = mysql_query($sqlNome) or die();
															while($linhaNome = mysql_fetch_array($resultadoNome)){
																echo "<option value='".$linhaNome['nr_cpfFuncionario']."'>".$linhaNome['nm_nomeFuncionario']."</option>";
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
									  <td colspan=3><center><b>17</b></center></td>
									  <td colspan=3><center><b>16</b></center></td>
									  <td colspan=3><center><b>15</b></center></td>
									  <td colspan=3><center><b>14</b></center></td>
									  <td colspan=3><center><b>13</b></center></td>
									  <td colspan=3><center><b>12</b></center></td>
									  <td colspan=3><center><b>11</b></center></td>
									  <td colspan=3><center><b>21</b></center></td>
									  <td colspan=3><center><b>22</b></center></td>
									  <td colspan=3><center><b>23</b></center></td>
									  <td colspan=3><center><b>24</b></center></td>
									  <td colspan=3><center><b>25</b></center></td>
									  <td colspan=3><center><b>26</b></center></td>
									  <td colspan=3><center><b>27</b></center></td>
									  <td colspan=3><center><b>28</b></center></td>
									</tr>
								  </thead>
								  <tbody>
									<tr>
									  <td><center><b style='margin-left:35px; margin-right:35px;'>Dente</b></center></td>
									  <td><center><b style='margin-left:30px; margin-right:30px;'>Face</b></center></td>
									  <td><center><b style='color:black;'>D</b></center></td>
									  <td><center><b style='color:black;'>TM</b></center></td>
									  <td><center><b style='color:black;'>M</b></center></td>
									  <td><center><b style='color:black;'>D</b></center></td>
									  <td><center><b style='color:black;'>TM</b></center></td>
									  <td><center><b style='color:black;'>M</b></center></td>
									  <td><center><b style='color:black;'>D</b></center></td>
									  <td><center><b style='color:black;'>TM</b></center></td>
									  <td><center><b style='color:black;'>M</b></center></td>
									  <td><center><b style='color:black;'>D</b></center></td>
									  <td><center><b style='color:black;'>TM</b></center></td>
									  <td><center><b style='color:black;'>M</b></center></td>
									  <td><center><b style='color:black;'>D</b></center></td>
									  <td><center><b style='color:black;'>TM</b></center></td>
									  <td><center><b style='color:black;'>M</b></center></td>
									  <td><center><b style='color:black;'>D</b></center></td>
									  <td><center><b style='color:black;'>TM</b></center></td>
									  <td><center><b style='color:black;'>M</b></center></td>
									  <td><center><b style='color:black;'>D</b></center></td>
									  <td><center><b style='color:black;'>TM</b></center></td>
									  <td><center><b style='color:black;'>M</b></center></td>
									  <td><center><b style='color:black;'>D</b></center></td>
									  <td><center><b style='color:black;'>TM</b></center></td>
									  <td><center><b style='color:black;'>M</b></center></td>
									  <td><center><b style='color:black;'>D</b></center></td>
									  <td><center><b style='color:black;'>TM</b></center></td>
									  <td><center><b style='color:black;'>M</b></center></td>
									  <td><center><b style='color:black;'>D</b></center></td>
									  <td><center><b style='color:black;'>TM</b></center></td>
									  <td><center><b style='color:black;'>M</b></center></td>
									  <td><center><b style='color:black;'>D</b></center></td>
									  <td><center><b style='color:black;'>TM</b></center></td>
									  <td><center><b style='color:black;'>M</b></center></td>
									  <td><center><b style='color:black;'>D</b></center></td>
									  <td><center><b style='color:black;'>TM</b></center></td>
									  <td><center><b style='color:black;'>M</b></center></td>
									  <td><center><b style='color:black;'>D</b></center></td>
									  <td><center><b style='color:black;'>TM</b></center></td>
									  <td><center><b style='color:black;'>M</b></center></td>
									  <td><center><b style='color:black;'>D</b></center></td>
									  <td><center><b style='color:black;'>TM</b></center></td>
									  <td><center><b style='color:black;'>M</b></center></td>
									  <td><center><b style='color:black;'>D</b></center></td>
									  <td><center><b style='color:black;'>TM</b></center></td>
									  <td><center><b style='color:black;'>M</b></center></td>
									  <td><center><b style='color:black;'>D</b></center></td>
									  <td><center><b style='color:black;'>TM</b></center></td>
									  <td><center><b style='color:black;'>M</b></center></td>
									</tr>
									<tr>
									  <td><center><b style='color:black;'>Sangr. Sond.</b></center></td>
									  <td><center><b style='color:black;'>V</b></center></td>
									  <td><center><select name='sangrVD18' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM18' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM18' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD17' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM17' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM17' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD16' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM16' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM16' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD15' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM15' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM15' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD14' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM14' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM14' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD13' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM13' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM13' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD12' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM12' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM12' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									 <td><center><select name='sangrVD11' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM11' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM11' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD21' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM21' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM21' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD22' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM22' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM22' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD23' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM23' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM23' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD24' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM24' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM24' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD25' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM25' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM25' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD26' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM26' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM26' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									 <td><center><select name='sangrVD27' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM27' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM27' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD28' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM28' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM28' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									</tr>
									<tr>
									  <td><center><b style='color:black;'>PMG</b></center></td>
									  <td><center><b style='color:black;'>V</b></center></td>
									  <td><center><input type='number' name='pmgVD18' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVTM18' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVM18' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVD17' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVTM17' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVM17' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVD16' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVTM16' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVM16' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVD15' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVTM15' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVM15' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVD14' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVTM14' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVM14' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVD13' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVTM13' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVM13' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVD12' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVTM12' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVM12' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVD11' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVTM11' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVM11' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVD21' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVTM21' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVM21' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVD22' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVTM22' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVM22' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVD23' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVTM23' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVM23' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVD24' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVTM24' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVM24' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVD25' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVTM25' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVM25' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVD26' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVTM26' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVM26' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVD27' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVTM27' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVM27' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVD28' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVTM28' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVM28' style='height:30px;' class='single-input'></center></td>
									</tr>
									<tr>
									  <td><center><b style='color:black;'>PSV</b></center></td>
									  <td><center><b style='color:black;'>V</b></center></td>
									  <td><center><input type='number' name='psvVD18' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVTM18' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVM18' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVD17' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVTM17' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVM17' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVD16' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVTM16' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVM16' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVD15' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVTM15' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVM15' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVD14' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVTM14' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVM14' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVD13' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVTM13' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVM13' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVD12' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVTM12' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVM12' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVD11' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVTM11' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVM11' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVD21' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVTM21' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVM21' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVD22' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVTM22' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVM22' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVD23' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVTM23' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVM23' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVD24' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVTM24' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVM24' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVD25' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVTM25' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVM25' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVD26' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVTM26' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVM26' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVD27' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVTM27' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVM27' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVD28' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVTM28' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVM28' style='height:30px;' class='single-input'></center></td>
									</tr>
									<tr>
									  <td><center><b style='color:black;'>NIC</b></center></td>
									  <td><center><b style='color:black;'>V</b></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									</tr>
									<tr>
									  <td><center><b style='color:black;'>Sangr. Sond.</b></center></td>
									  <td><center><b style='color:black;'>P</b></center></td>
									  <td><center><select name='sangrPD18' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM18' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM18' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD17' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM17' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM17' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD16' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM16' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM16' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD15' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM15' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM15' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD14' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM14' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM14' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD13' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM13' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM13' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD12' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM12' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM12' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									 <td><center><select name='sangrPD11' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM11' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM11' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD21' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM21' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM21' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD22' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM22' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM22' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD23' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM23' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM23' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD24' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM24' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM24' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD25' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM25' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM25' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD26' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM26' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM26' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									 <td><center><select name='sangrPD27' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM27' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM27' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD28' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM28' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM28' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									</tr>
									<tr>
									  <td><center><b style='color:black;'>PMG</b></center></td>
									  <td><center><b style='color:black;'>P</b></center></td>
									  <td><center><input type='number' name='pmgPD18' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPTM18' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPM18' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPD17' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPTM17' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPM17' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPD16' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPTM16' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPM16' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPD15' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPTM15' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPM15' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPD14' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPTM14' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPM14' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPD13' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPTM13' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPM13' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPD12' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPTM12' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPM12' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPD11' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPTM11' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPM11' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPD21' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPTM21' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPM21' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPD22' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPTM22' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPM22' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPD23' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPTM23' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPM23' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPD24' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPTM24' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPM24' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPD25' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPTM25' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPM25' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPD26' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPTM26' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPM26' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPD27' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPTM27' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPM27' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPD28' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPTM28' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPM28' style='height:30px;' class='single-input'></center></td>
									</tr>
									<tr>
									  <td><center><b style='color:black;'>PSV</b></center></td>
									  <td><center><b style='color:black;'>P</b></center></td>
									  <td><center><input type='number' name='psvPD18' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPTM18' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPM18' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPD17' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPTM17' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPM17' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPD16' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPTM16' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPM16' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPD15' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPTM15' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPM15' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPD14' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPTM14' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPM14' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPD13' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPTM13' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPM13' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPD12' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPTM12' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPM12' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPD11' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPTM11' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPM11' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPD21' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPTM21' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPM21' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPD22' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPTM22' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPM22' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPD23' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPTM23' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPM23' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPD24' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPTM24' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPM24' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPD25' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPTM25' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPM25' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPD26' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPTM26' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPM26' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPD27' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPTM27' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPM27' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPD28' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPTM28' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPM28' style='height:30px;' class='single-input'></center></td>
									</tr>
									<tr>
									  <td><center><b style='color:black;'>NIC</b></center></td>
									  <td><center><b style='color:black;'>P</b></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									</tr>
									<tr>
									  <td colspan=2><center><b style='color:black;'>Mobilidade</b></center></td>
									  <td colspan=3><center><input type='text' name='mobilidade18' style='height:30px;' class='single-input'></center></td>
									  <td colspan=3><center><input type='text' name='mobilidade17' style='height:30px;' class='single-input'></center></td>
									  <td colspan=3><center><input type='text' name='mobilidade16' style='height:30px;' class='single-input'></center></td>
									  <td colspan=3><center><input type='text' name='mobilidade15' style='height:30px;' class='single-input'></center></td>
									  <td colspan=3><center><input type='text' name='mobilidade14' style='height:30px;' class='single-input'></center></td>
									  <td colspan=3><center><input type='text' name='mobilidade13' style='height:30px;' class='single-input'></center></td>
									  <td colspan=3><center><input type='text' name='mobilidade12' style='height:30px;' class='single-input'></center></td>
									  <td colspan=3><center><input type='text' name='mobilidade11' style='height:30px;' class='single-input'></center></td>
									  <td colspan=3><center><input type='text' name='mobilidade21' style='height:30px;' class='single-input'></center></td>
									  <td colspan=3><center><input type='text' name='mobilidade22' style='height:30px;' class='single-input'></center></td>
									  <td colspan=3><center><input type='text' name='mobilidade23' style='height:30px;' class='single-input'></center></td>
									  <td colspan=3><center><input type='text' name='mobilidade24' style='height:30px;' class='single-input'></center></td>
									  <td colspan=3><center><input type='text' name='mobilidade25' style='height:30px;' class='single-input'></center></td>
									  <td colspan=3><center><input type='text' name='mobilidade26' style='height:30px;' class='single-input'></center></td>
									  <td colspan=3><center><input type='text' name='mobilidade27' style='height:30px;' class='single-input'></center></td>
									  <td colspan=3><center><input type='text' name='mobilidade28' style='height:30px;' class='single-input'></center></td>
									</tr>
									<tr>
									  <td colspan=2><center><b style='color:black;'>Furca</b></center></td>
									  <td colspan=3><center><select name='furca18' style='height:30px;' class='single-input'><option value=''></option><option value=''></option><option value='1/3'>1/3</option><option value='2/3'>2/3</option><option value='3/3'>3/3</option></select></center></td>
									  <td colspan=3><center><select name='furca17' style='height:30px;' class='single-input'><option value=''></option><option value='1/3'>1/3</option><option value='2/3'>2/3</option><option value='3/3'>3/3</option></select></center></td>
									  <td colspan=3><center><select name='furca16' style='height:30px;' class='single-input'><option value=''></option><option value='1/3'>1/3</option><option value='2/3'>2/3</option><option value='3/3'>3/3</option></select></center></td>
									  <td colspan=3><center></center></td>
									  <td><center><select name='furca14D' style='height:30px;' class='single-input'><option value=''></option><option value='1/3'>1/3</option><option value='2/3'>2/3</option><option value='3/3'>3/3</option></select></center></td>
									  <td><center></center></td>
									  <td><center><select name='furca14M' style='height:30px;' class='single-input'><option value=''></option><option value='1/3'>1/3</option><option value='2/3'>2/3</option><option value='3/3'>3/3</option></select></center></td>
									  <td colspan=3><center></center></td>
									  <td colspan=3><center></center></td>
									  <td colspan=3><center></center></td>
									  <td colspan=3><center></center></td>
									  <td colspan=3><center></center></td>
									  <td colspan=3><center></center></td>
									  <td><center><select name='furca24D' style='height:30px;' class='single-input'><option value=''></option><option value='1/3'>1/3</option><option value='2/3'>2/3</option><option value='3/3'>3/3</option></select></center></td>
									  <td><center></center></td>
									  <td><center><select name='furca24M' style='height:30px;' class='single-input'><option value=''></option><option value='1/3'>1/3</option><option value='2/3'>2/3</option><option value='3/3'>3/3</option></select></center></td>
									  <td colspan=3><center></center></td>
									  <td colspan=3><center><select name='furca26' style='height:30px;' class='single-input'><option value=''></option><option value='1/3'>1/3</option><option value='2/3'>2/3</option><option value='3/3'>3/3</option></select></center></td>
									  <td colspan=3><center><select name='furca27' style='height:30px;' class='single-input'><option value=''></option><option value='1/3'>1/3</option><option value='2/3'>2/3</option><option value='3/3'>3/3</option></select></center></td>
									  <td colspan=3><center><select name='furca28' style='height:30px;' class='single-input'><option value=''></option><option value='1/3'>1/3</option><option value='2/3'>2/3</option><option value='3/3'>3/3</option></select></center></td>
									</tr>
									<!-- Parte debaixo ######################################################### -->
									<tr><td><br></td></tr>
									<thead>
									<tr>
									  <td><center></center></td>
									  <td rowspan=2><center></center></td>
									  <td colspan=3><center><b>48</b></center></td>
									  <td colspan=3><center><b>47</b></center></td>
									  <td colspan=3><center><b>46</b></center></td>
									  <td colspan=3><center><b>45</b></center></td>
									  <td colspan=3><center><b>44</b></center></td>
									  <td colspan=3><center><b>43</b></center></td>
									  <td colspan=3><center><b>42</b></center></td>
									  <td colspan=3><center><b>41</b></center></td>
									  <td colspan=3><center><b>31</b></center></td>
									  <td colspan=3><center><b>32</b></center></td>
									  <td colspan=3><center><b>33</b></center></td>
									  <td colspan=3><center><b>34</b></center></td>
									  <td colspan=3><center><b>35</b></center></td>
									  <td colspan=3><center><b>36</b></center></td>
									  <td colspan=3><center><b>37</b></center></td>
									  <td colspan=3><center><b>38</b></center></td>
									</tr>
								  </thead>
								  <tbody>
									<tr>
									  <td><center><b style='margin-left:35px; margin-right:35px;'>Dente</b></center></td>
									  <td><center><b style='margin-left:30px; margin-right:30px;'>Face</b></center></td>
									  <td><center><b style='color:black;'>D</b></center></td>
									  <td><center><b style='color:black;'>TM</b></center></td>
									  <td><center><b style='color:black;'>M</b></center></td>
									  <td><center><b style='color:black;'>D</b></center></td>
									  <td><center><b style='color:black;'>TM</b></center></td>
									  <td><center><b style='color:black;'>M</b></center></td>
									  <td><center><b style='color:black;'>D</b></center></td>
									  <td><center><b style='color:black;'>TM</b></center></td>
									  <td><center><b style='color:black;'>M</b></center></td>
									  <td><center><b style='color:black;'>D</b></center></td>
									  <td><center><b style='color:black;'>TM</b></center></td>
									  <td><center><b style='color:black;'>M</b></center></td>
									  <td><center><b style='color:black;'>D</b></center></td>
									  <td><center><b style='color:black;'>TM</b></center></td>
									  <td><center><b style='color:black;'>M</b></center></td>
									  <td><center><b style='color:black;'>D</b></center></td>
									  <td><center><b style='color:black;'>TM</b></center></td>
									  <td><center><b style='color:black;'>M</b></center></td>
									  <td><center><b style='color:black;'>D</b></center></td>
									  <td><center><b style='color:black;'>TM</b></center></td>
									  <td><center><b style='color:black;'>M</b></center></td>
									  <td><center><b style='color:black;'>D</b></center></td>
									  <td><center><b style='color:black;'>TM</b></center></td>
									  <td><center><b style='color:black;'>M</b></center></td>
									  <td><center><b style='color:black;'>D</b></center></td>
									  <td><center><b style='color:black;'>TM</b></center></td>
									  <td><center><b style='color:black;'>M</b></center></td>
									  <td><center><b style='color:black;'>D</b></center></td>
									  <td><center><b style='color:black;'>TM</b></center></td>
									  <td><center><b style='color:black;'>M</b></center></td>
									  <td><center><b style='color:black;'>D</b></center></td>
									  <td><center><b style='color:black;'>TM</b></center></td>
									  <td><center><b style='color:black;'>M</b></center></td>
									  <td><center><b style='color:black;'>D</b></center></td>
									  <td><center><b style='color:black;'>TM</b></center></td>
									  <td><center><b style='color:black;'>M</b></center></td>
									  <td><center><b style='color:black;'>D</b></center></td>
									  <td><center><b style='color:black;'>TM</b></center></td>
									  <td><center><b style='color:black;'>M</b></center></td>
									  <td><center><b style='color:black;'>D</b></center></td>
									  <td><center><b style='color:black;'>TM</b></center></td>
									  <td><center><b style='color:black;'>M</b></center></td>
									  <td><center><b style='color:black;'>D</b></center></td>
									  <td><center><b style='color:black;'>TM</b></center></td>
									  <td><center><b style='color:black;'>M</b></center></td>
									  <td><center><b style='color:black;'>D</b></center></td>
									  <td><center><b style='color:black;'>TM</b></center></td>
									  <td><center><b style='color:black;'>M</b></center></td>
									</tr>
									<tr>
									  <td><center><b style='color:black;'>Sangr. Sond.</b></center></td>
									  <td><center><b style='color:black;'>V</b></center></td>
									  <td><center><select name='sangrVD48' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM48' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM48' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD47' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM47' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM47' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD46' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM46' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM46' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD45' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM45' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM45' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD44' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM44' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM44' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD43' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM43' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM43' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD42' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM42' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM42' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									 <td><center><select name='sangrVD41' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM41' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM41' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD31' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM31' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM31' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD32' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM32' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM32' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD33' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM33' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM33' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD34' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM34' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM34' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD35' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM35' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM35' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD36' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM36' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM36' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									 <td><center><select name='sangrVD37' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM37' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM37' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD38' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM38' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM38' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									</tr>
									<tr>
									  <td><center><b style='color:black;'>PMG</b></center></td>
									  <td><center><b style='color:black;'>V</b></center></td>
									  <td><center><input type='number' name='pmgVD48' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVTM48' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVM48' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVD47' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVTM47' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVM47' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVD46' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVTM46' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVM46' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVD45' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVTM45' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVM45' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVD44' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVTM44' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVM44' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVD43' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVTM43' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVM43' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVD42' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVTM42' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVM42' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVD41' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVTM41' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVM41' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVD31' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVTM31' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVM31' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVD32' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVTM32' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVM32' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVD33' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVTM33' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVM33' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVD34' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVTM34' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVM34' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVD35' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVTM35' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVM35' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVD36' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVTM36' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVM36' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVD37' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVTM37' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVM37' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVD38' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVTM38' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgVM38' style='height:30px;' class='single-input'></center></td>
									</tr>
									<tr>
									  <td><center><b style='color:black;'>PSV</b></center></td>
									  <td><center><b style='color:black;'>V</b></center></td>
									  <td><center><input type='number' name='psvVD48' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVTM48' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVM48' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVD47' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVTM47' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVM47' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVD46' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVTM46' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVM46' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVD45' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVTM45' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVM45' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVD44' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVTM44' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVM44' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVD43' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVTM43' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVM43' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVD42' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVTM42' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVM42' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVD41' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVTM41' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVM41' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVD31' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVTM31' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVM31' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVD32' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVTM32' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVM32' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVD33' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVTM33' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVM33' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVD34' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVTM34' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVM34' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVD35' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVTM35' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVM35' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVD36' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVTM36' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVM36' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVD37' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVTM37' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVM37' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVD38' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVTM38' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvVM38' style='height:30px;' class='single-input'></center></td>
									</tr>
									<tr>
									  <td><center><b style='color:black;'>NIC</b></center></td>
									  <td><center><b style='color:black;'>V</b></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									</tr>
									<tr>
									  <td><center><b style='color:black;'>Sangr. Sond.</b></center></td>
									  <td><center><b style='color:black;'>P</b></center></td>
									  <td><center><select name='sangrPD48' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM48' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM48' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD47' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM47' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM47' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD46' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM46' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM46' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD45' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM45' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM45' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD44' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM44' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM44' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD43' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM43' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM43' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD42' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM42' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM42' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									 <td><center><select name='sangrPD41' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM41' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM41' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD31' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM31' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM31' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD32' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM32' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM32' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD33' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM33' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM33' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD34' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM34' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM34' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD35' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM35' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM35' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD36' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM36' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM36' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									 <td><center><select name='sangrPD37' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM37' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM37' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD38' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM38' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM38' style='width:90px; height:30px;' class='single-input'><option value=''></option><option value='+'>+</option><option value='-'>-</option> </select></center></td>
									</tr>
									<tr>
									  <td><center><b style='color:black;'>PMG</b></center></td>
									  <td><center><b style='color:black;'>P</b></center></td>
									  <td><center><input type='number' name='pmgPD48' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPTM48' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPM48' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPD47' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPTM47' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPM47' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPD46' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPTM46' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPM46' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPD45' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPTM45' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPM45' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPD44' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPTM44' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPM44' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPD43' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPTM43' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPM43' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPD42' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPTM42' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPM42' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPD41' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPTM41' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPM41' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPD31' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPTM31' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPM31' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPD32' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPTM32' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPM32' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPD33' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPTM33' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPM33' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPD34' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPTM34' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPM34' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPD35' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPTM35' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPM35' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPD36' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPTM36' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPM36' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPD37' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPTM37' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPM37' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPD38' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPTM38' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='pmgPM38' style='height:30px;' class='single-input'></center></td>
									</tr>
									<tr>
									  <td><center><b style='color:black;'>PSV</b></center></td>
									  <td><center><b style='color:black;'>P</b></center></td>
									  <td><center><input type='number' name='psvPD48' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPTM48' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPM48' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPD47' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPTM47' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPM47' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPD46' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPTM46' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPM46' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPD45' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPTM45' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPM45' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPD44' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPTM44' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPM44' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPD43' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPTM43' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPM43' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPD42' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPTM42' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPM42' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPD41' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPTM41' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPM41' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPD31' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPTM31' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPM31' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPD32' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPTM32' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPM32' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPD33' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPTM33' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPM33' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPD34' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPTM34' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPM34' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPD35' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPTM35' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPM35' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPD36' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPTM36' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPM36' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPD37' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPTM37' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPM37' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPD38' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPTM38' style='height:30px;' class='single-input'></center></td>
									  <td><center><input type='number' name='psvPM38' style='height:30px;' class='single-input'></center></td>
									</tr>
									<tr>
									  <td><center><b style='color:black;'>NIC</b></center></td>
									  <td><center><b style='color:black;'>P</b></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									  <td><center><img src='icones/warning.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Será calculado automaticamente!'></center></td>
									</tr>
									<tr>
									  <td colspan=2><center><b style='color:black;'>Mobilidade</b></center></td>
									  <td colspan=3><center><input type='text' name='mobilidade48' style='height:30px;' class='single-input'></center></td>
									  <td colspan=3><center><input type='text' name='mobilidade47' style='height:30px;' class='single-input'></center></td>
									  <td colspan=3><center><input type='text' name='mobilidade46' style='height:30px;' class='single-input'></center></td>
									  <td colspan=3><center><input type='text' name='mobilidade45' style='height:30px;' class='single-input'></center></td>
									  <td colspan=3><center><input type='text' name='mobilidade44' style='height:30px;' class='single-input'></center></td>
									  <td colspan=3><center><input type='text' name='mobilidade43' style='height:30px;' class='single-input'></center></td>
									  <td colspan=3><center><input type='text' name='mobilidade42' style='height:30px;' class='single-input'></center></td>
									  <td colspan=3><center><input type='text' name='mobilidade41' style='height:30px;' class='single-input'></center></td>
									  <td colspan=3><center><input type='text' name='mobilidade31' style='height:30px;' class='single-input'></center></td>
									  <td colspan=3><center><input type='text' name='mobilidade32' style='height:30px;' class='single-input'></center></td>
									  <td colspan=3><center><input type='text' name='mobilidade33' style='height:30px;' class='single-input'></center></td>
									  <td colspan=3><center><input type='text' name='mobilidade34' style='height:30px;' class='single-input'></center></td>
									  <td colspan=3><center><input type='text' name='mobilidade35' style='height:30px;' class='single-input'></center></td>
									  <td colspan=3><center><input type='text' name='mobilidade36' style='height:30px;' class='single-input'></center></td>
									  <td colspan=3><center><input type='text' name='mobilidade37' style='height:30px;' class='single-input'></center></td>
									  <td colspan=3><center><input type='text' name='mobilidade38' style='height:30px;' class='single-input'></center></td>
									</tr>
									<tr>
									  <td colspan=2><center><b style='color:black;'>Furca</b></center></td>
									  <td colspan=3><center><select name='furca48' style='height:30px;' class='single-input'><option value=''></option><option value='1/3'>1/3</option><option value='2/3'>2/3</option><option value='3/3'>3/3</option></select></center></td>
									  <td colspan=3><center><select name='furca47' style='height:30px;' class='single-input'><option value=''></option><option value='1/3'>1/3</option><option value='2/3'>2/3</option><option value='3/3'>3/3</option></select></center></td>
									  <td colspan=3><center><select name='furca46' style='height:30px;' class='single-input'><option value=''></option><option value='1/3'>1/3</option><option value='2/3'>2/3</option><option value='3/3'>3/3</option></select></center></td>
									  <td colspan=3><center></center></td>
									  <td><center><select name='furca44D' style='height:30px;' class='single-input'><option value=''></option><option value='1/3'>1/3</option><option value='2/3'>2/3</option><option value='3/3'>3/3</option></select></center></td>
									  <td><center></center></td>
									  <td><center><select name='furca44M' style='height:30px;' class='single-input'><option value=''></option><option value='1/3'>1/3</option><option value='2/3'>2/3</option><option value='3/3'>3/3</option></select></center></td>
									  <td colspan=3><center></center></td>
									  <td colspan=3><center></center></td>
									  <td colspan=3><center></center></td>
									  <td colspan=3><center></center></td>
									  <td colspan=3><center></center></td>
									  <td colspan=3><center></center></td>
									  <td><center><select name='furca34D' style='height:30px;' class='single-input'><option value=''></option><option value='1/3'>1/3</option><option value='2/3'>2/3</option><option value='3/3'>3/3</option></select></center></td>
									  <td><center></center></td>
									  <td><center><select name='furca34M' style='height:30px;' class='single-input'><option value=''></option><option value='1/3'>1/3</option><option value='2/3'>2/3</option><option value='3/3'>3/3</option></select></center></td>
									  <td colspan=3><center></center></td>
									  <td colspan=3><center><select name='furca36' style='height:30px;' class='single-input'><option value=''></option><option value='1/3'>1/3</option><option value='2/3'>2/3</option><option value='3/3'>3/3</option></select></center></td>
									  <td colspan=3><center><select name='furca37' style='height:30px;' class='single-input'><option value=''></option><option value='1/3'>1/3</option><option value='2/3'>2/3</option><option value='3/3'>3/3</option></select></center></td>
									  <td colspan=3><center><select name='furca38' style='height:30px;' class='single-input'><option value=''></option><option value='1/3'>1/3</option><option value='2/3'>2/3</option><option value='3/3'>3/3</option></select></center></td>
									</tr>
									</tbody>
								</table>
								
							</div>
						</div>
						
						<br>
						<input type='submit' class="genric-btn primary" value='Salvar'>
						<a href='periodontia.php?cpf=<?php echo $_GET['cpf']; ?>' class="genric-btn primary">Voltar</a>
						
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

