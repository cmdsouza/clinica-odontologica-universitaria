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
								
									echo "<h2 class='text-white'>Periodontia ".$d." ".$paciente."</h2>";								
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
		
		<!-- Start price Area --><br>
			<section class="price-area " id="price">
				<div class="container">
					<div class='row'>
						<h3>Controle de Placa Bacteriana</h3>
					</div>	
				</div>	
			</section>
				<br>
				<center>
					<form method='POST' action='inserirPlaca.php'>
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
				<br>
				<center>	
					<table width='85%' border=0 style='background-color:rgb(207, 207, 212);'>
						<tr>
							<td><center><img src='biofilme/18.png' style='margin-top:-40%;'></td></center>
							<td><center><img src='biofilme/17.png' style='margin-top:-35%;'></td></center>
							<td><center><img src='biofilme/16.png' style='margin-top:-25%;'></td></center>
							<td><center><img src='biofilme/15.png' style='margin-top:-15%;'></td></center>
							<td><center><img src='biofilme/14.png' style='margin-top:-20%;'></td></center>
							<td><center><img src='biofilme/13.png'></td></center>
							<td><center><img src='biofilme/12.png' style='margin-top:-20%;'></td></center>
							<td><center><img src='biofilme/11.png' style='margin-top:-5%;'></td></center>
							<td><center><img src='biofilme/21.png' style='margin-top:-5%;'></td></center>
							<td><center><img src='biofilme/22.png' style='margin-top:-15%;'></td></center>
							<td><center><img src='biofilme/23.png'></td></center>
							<td><center><img src='biofilme/24.png' style='margin-top:-20%;'></td></center>
							<td><center><img src='biofilme/25.png' style='margin-top:-15%;'></td></center>
							<td><center><img src='biofilme/26.png' style='margin-top:-25%;'></td></center>
							<td><center><img src='biofilme/27.png' style='margin-top:-35%;'></td></center>
							<td><center><img src='biofilme/28.png' style='margin-top:-40%;'></td></center>
						</tr>
						<tr>
							<td><center><b>18</b></center></td>
							<td><center><b>17</b></center></td>
							<td><center><b>16</b></center></td>
							<td><center><b>15</b></center></td>
							<td><center><b>14</b></center></td>
							<td><center><b>13</b></center></td>
							<td><center><b>12</b></center></td>
							<td><center><b>11</b></center></td>
							<td><center><b>21</b></center></td>
							<td><center><b>22</b></center></td>
							<td><center><b>23</b></center></td>
							<td><center><b>24</b></center></td>
							<td><center><b>25</b></center></td>
							<td><center><b>26</b></center></td>
							<td><center><b>27</b></center></td>
							<td><center><b>28</b></center></td>
						</tr>
						<tr>
							<td>
								<center>
									<div class='trapecio-top' id='dente18A' onclick="myFunction18A()"></div>
									<div class='trapecio-left' id='dente18B' onclick="myFunction18B()"></div>
									<div class='trapecio-right' id='dente18D' onclick="myFunction18D()"></div>
									<div class='trapecio-bottom' id='dente18E' onclick="myFunction18E()"></div>
								</center>
							</td>
							<td>
								<center>
									<div class='trapecio-top' id='dente17A' onclick="myFunction17A()"></div>
									<div class='trapecio-left' id='dente17B' onclick="myFunction17B()"></div>
									<div class='trapecio-right' id='dente17D' onclick="myFunction17D()"></div>
									<div class='trapecio-bottom' id='dente17E' onclick="myFunction17E()"></div>
								</center>
							</td>
							<td>
								<center>
									<div class='trapecio-top' id='dente16A' onclick="myFunction16A()"></div>
									<div class='trapecio-left' id='dente16B' onclick="myFunction16B()"></div>
									<div class='trapecio-right' id='dente16D' onclick="myFunction16D()"></div>
									<div class='trapecio-bottom' id='dente16E' onclick="myFunction16E()"></div>
								</center>
							</td>
							<td>
								<center>
									<div class='trapecio-top' id='dente15A' onclick="myFunction15A()"></div>
									<div class='trapecio-left' id='dente15B' onclick="myFunction15B()"></div>
									<div class='trapecio-right' id='dente15D' onclick="myFunction15D()"></div>
									<div class='trapecio-bottom' id='dente15E' onclick="myFunction15E()"></div>
								</center>
							</td>
							<td>
								<center>
									<div class='trapecio-top' id='dente14A' onclick="myFunction14A()"></div>
									<div class='trapecio-left' id='dente14B' onclick="myFunction14B()"></div>
									<div class='trapecio-right' id='dente14D' onclick="myFunction14D()"></div>
									<div class='trapecio-bottom' id='dente14E' onclick="myFunction14E()"></div>
								</center>
							</td>
							<td>
								<center>
									<div class='trapecio-top' id='dente13A' onclick="myFunction13A()"></div>
									<div class='trapecio-left' id='dente13B' onclick="myFunction13B()"></div>
									<div class='trapecio-right' id='dente13D' onclick="myFunction13D()"></div>
									<div class='trapecio-bottom' id='dente13E' onclick="myFunction13E()"></div>
								</center>
							</td>
							<td>
								<center>
									<div class='trapecio-top' id='dente12A' onclick="myFunction12A()"></div>
									<div class='trapecio-left' id='dente12B' onclick="myFunction12B()"></div>
									<div class='trapecio-right' id='dente12D' onclick="myFunction12D()"></div>
									<div class='trapecio-bottom' id='dente12E' onclick="myFunction12E()"></div>
								</center>
							</td>
							<td>
								<center>
									<div class='trapecio-top' id='dente11A' onclick="myFunction11A()"></div>
									<div class='trapecio-left' id='dente11B' onclick="myFunction11B()"></div>
									<div class='trapecio-right' id='dente11D' onclick="myFunction11D()"></div>
									<div class='trapecio-bottom' id='dente11E' onclick="myFunction11E()"></div>
								</center>
							</td>
							<td>
								<center>
									<div class='trapecio-top' id='dente21A' onclick="myFunction21A()"></div>
									<div class='trapecio-left' id='dente21B' onclick="myFunction21B()"></div>
									<div class='trapecio-right' id='dente21D' onclick="myFunction21D()"></div>
									<div class='trapecio-bottom' id='dente21E' onclick="myFunction21E()"></div>
								</center>
							</td>
							<td>
								<center>
									<div class='trapecio-top' id='dente22A' onclick="myFunction22A()"></div>
									<div class='trapecio-left' id='dente22B' onclick="myFunction22B()"></div>
									<div class='trapecio-right' id='dente22D' onclick="myFunction22D()"></div>
									<div class='trapecio-bottom' id='dente22E' onclick="myFunction22E()"></div>
								</center>
							</td>
							<td>
								<center>
									<div class='trapecio-top' id='dente23A' onclick="myFunction23A()"></div>
									<div class='trapecio-left' id='dente23B' onclick="myFunction23B()"></div>
									<div class='trapecio-right' id='dente23D' onclick="myFunction23D()"></div>
									<div class='trapecio-bottom' id='dente23E' onclick="myFunction23E()"></div>
								</center>
							</td>
							<td>
								<center>
									<div class='trapecio-top' id='dente24A' onclick="myFunction24A()"></div>
									<div class='trapecio-left' id='dente24B' onclick="myFunction24B()"></div>
									<div class='trapecio-right' id='dente24D' onclick="myFunction24D()"></div>
									<div class='trapecio-bottom' id='dente24E' onclick="myFunction24E()"></div>
								</center>
							</td>
							<td>
								<center>
									<div class='trapecio-top' id='dente25A' onclick="myFunction25A()"></div>
									<div class='trapecio-left' id='dente25B' onclick="myFunction25B()"></div>
									<div class='trapecio-right' id='dente25D' onclick="myFunction25D()"></div>
									<div class='trapecio-bottom' id='dente25E' onclick="myFunction25E()"></div>
								</center>
							</td>
							<td>
								<center>
									<div class='trapecio-top' id='dente26A' onclick="myFunction26A()"></div>
									<div class='trapecio-left' id='dente26B' onclick="myFunction26B()"></div>
									<div class='trapecio-right' id='dente26D' onclick="myFunction26D()"></div>
									<div class='trapecio-bottom' id='dente26E' onclick="myFunction26E()"></div>
								</center>
							</td>
							<td>
								<center>
									<div class='trapecio-top' id='dente27A' onclick="myFunction27A()"></div>
									<div class='trapecio-left' id='dente27B' onclick="myFunction27B()"></div>
									<div class='trapecio-right' id='dente27D' onclick="myFunction27D()"></div>
									<div class='trapecio-bottom' id='dente27E' onclick="myFunction27E()"></div>
								</center>
							</td>
							<td>
								<center>
									<div class='trapecio-top' id='dente28A' onclick="myFunction28A()"></div>
									<div class='trapecio-left' id='dente28B' onclick="myFunction28B()"></div>
									<div class='trapecio-right' id='dente28D' onclick="myFunction28D()"></div>
									<div class='trapecio-bottom' id='dente28E' onclick="myFunction28E()"></div>
								</center>
							</td>
						</tr>
						
						<tr>
							<td><center><input type='checkbox' name='ausente18' data-toggle='popover' data-trigger='hover' data-placement='left' data-content='Dente 18 - Ausente'></center></td>
							<td><center><input type='checkbox' name='ausente17' data-toggle='popover' data-trigger='hover' data-placement='left' data-content='Dente 17 - Ausente'></center></td>
							<td><center><input type='checkbox' name='ausente16' data-toggle='popover' data-trigger='hover' data-placement='left' data-content='Dente 16 - Ausente'></center></td>
							<td><center><input type='checkbox' name='ausente15' data-toggle='popover' data-trigger='hover' data-placement='left' data-content='Dente 15 - Ausente'></center></td>
							<td><center><input type='checkbox' name='ausente14' data-toggle='popover' data-trigger='hover' data-placement='left' data-content='Dente 14 - Ausente'></center></td>
							<td><center><input type='checkbox' name='ausente13' data-toggle='popover' data-trigger='hover' data-placement='left' data-content='Dente 13 - Ausente'></center></td>
							<td><center><input type='checkbox' name='ausente12' data-toggle='popover' data-trigger='hover' data-placement='left' data-content='Dente 12 - Ausente'></center></td>
							<td><center><input type='checkbox' name='ausente11' data-toggle='popover' data-trigger='hover' data-placement='left' data-content='Dente 11 - Ausente'></center></td>
							<td><center><input type='checkbox' name='ausente21' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Dente 21 - Ausente'></center></td>
							<td><center><input type='checkbox' name='ausente22' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Dente 22 - Ausente'></center></td>
							<td><center><input type='checkbox' name='ausente23' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Dente 23 - Ausente'></center></td>
							<td><center><input type='checkbox' name='ausente24' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Dente 24 - Ausente'></center></td>
							<td><center><input type='checkbox' name='ausente25' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Dente 25 - Ausente'></center></td>
							<td><center><input type='checkbox' name='ausente26' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Dente 26 - Ausente'></center></td>
							<td><center><input type='checkbox' name='ausente27' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Dente 27 - Ausente'></center></td>
							<td><center><input type='checkbox' name='ausente28' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Dente 28 - Ausente'></center></td>
						</tr>
						<tr><td colspan=16><br></td></tr>
						<tr>
							<td><center><input type='checkbox' name='ausente48' data-toggle='popover' data-trigger='hover' data-placement='left' data-content='Dente 48 - Ausente'></center></td>
							<td><center><input type='checkbox' name='ausente47' data-toggle='popover' data-trigger='hover' data-placement='left' data-content='Dente 47 - Ausente'></center></td>
							<td><center><input type='checkbox' name='ausente46' data-toggle='popover' data-trigger='hover' data-placement='left' data-content='Dente 46 - Ausente'></center></td>
							<td><center><input type='checkbox' name='ausente45' data-toggle='popover' data-trigger='hover' data-placement='left' data-content='Dente 45 - Ausente'></center></td>
							<td><center><input type='checkbox' name='ausente44' data-toggle='popover' data-trigger='hover' data-placement='left' data-content='Dente 44 - Ausente'></center></td>
							<td><center><input type='checkbox' name='ausente43' data-toggle='popover' data-trigger='hover' data-placement='left' data-content='Dente 43 - Ausente'></center></td>
							<td><center><input type='checkbox' name='ausente42' data-toggle='popover' data-trigger='hover' data-placement='left' data-content='Dente 42 - Ausente'></center></td>
							<td><center><input type='checkbox' name='ausente41' data-toggle='popover' data-trigger='hover' data-placement='left' data-content='Dente 41 - Ausente'></center></td>
							<td><center><input type='checkbox' name='ausente31' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Dente 31 - Ausente'></center></td>
							<td><center><input type='checkbox' name='ausente32' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Dente 32 - Ausente'></center></td>
							<td><center><input type='checkbox' name='ausente33' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Dente 33 - Ausente'></center></td>
							<td><center><input type='checkbox' name='ausente34' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Dente 34 - Ausente'></center></td>
							<td><center><input type='checkbox' name='ausente35' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Dente 35 - Ausente'></center></td>
							<td><center><input type='checkbox' name='ausente36' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Dente 36 - Ausente'></center></td>
							<td><center><input type='checkbox' name='ausente37' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Dente 37 - Ausente'></center></td>
							<td><center><input type='checkbox' name='ausente38' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Dente 38 - Ausente'></center></td>
						</tr>
						<tr>
							<td>
								<center>
									<div class='trapecio-top' id='dente48A' onclick="myFunction48A()"></div>
									<div class='trapecio-left' id='dente48B' onclick="myFunction48B()"></div>
									<div class='trapecio-right' id='dente48D' onclick="myFunction48D()"></div>
									<div class='trapecio-bottom' id='dente48E' onclick="myFunction48E()"></div>
								</center>
							</td>
							<td>
								<center>
									<div class='trapecio-top' id='dente47A' onclick="myFunction47A()"></div>
									<div class='trapecio-left' id='dente47B' onclick="myFunction47B()"></div>
									<div class='trapecio-right' id='dente47D' onclick="myFunction47D()"></div>
									<div class='trapecio-bottom' id='dente47E' onclick="myFunction47E()"></div>
								</center>
							</td>
							<td>
								<center>
									<div class='trapecio-top' id='dente46A' onclick="myFunction46A()"></div>
									<div class='trapecio-left' id='dente46B' onclick="myFunction46B()"></div>
									<div class='trapecio-right' id='dente46D' onclick="myFunction46D()"></div>
									<div class='trapecio-bottom' id='dente46E' onclick="myFunction46E()"></div>
								</center>
							</td>
							<td>
								<center>
									<div class='trapecio-top' id='dente45A' onclick="myFunction45A()"></div>
									<div class='trapecio-left' id='dente45B' onclick="myFunction45B()"></div>
									<div class='trapecio-right' id='dente45D' onclick="myFunction45D()"></div>
									<div class='trapecio-bottom' id='dente45E' onclick="myFunction45E()"></div>
								</center>
							</td>
							<td>
								<center>
									<div class='trapecio-top' id='dente44A' onclick="myFunction44A()"></div>
									<div class='trapecio-left' id='dente44B' onclick="myFunction44B()"></div>
									<div class='trapecio-right' id='dente44D' onclick="myFunction44D()"></div>
									<div class='trapecio-bottom' id='dente44E' onclick="myFunction44E()"></div>
								</center>
							</td>
							<td>
								<center>
									<div class='trapecio-top' id='dente43A' onclick="myFunction43A()"></div>
									<div class='trapecio-left' id='dente43B' onclick="myFunction43B()"></div>
									<div class='trapecio-right' id='dente43D' onclick="myFunction43D()"></div>
									<div class='trapecio-bottom' id='dente43E' onclick="myFunction43E()"></div>
								</center>
							</td>
							<td>
								<center>
									<div class='trapecio-top' id='dente42A' onclick="myFunction42A()"></div>
									<div class='trapecio-left' id='dente42B' onclick="myFunction42B()"></div>
									<div class='trapecio-right' id='dente42D' onclick="myFunction42D()"></div>
									<div class='trapecio-bottom' id='dente42E' onclick="myFunction42E()"></div>
								</center>
							</td>
							<td>
								<center>
									<div class='trapecio-top' id='dente41A' onclick="myFunction41A()"></div>
									<div class='trapecio-left' id='dente41B' onclick="myFunction41B()"></div>
									<div class='trapecio-right' id='dente41D' onclick="myFunction41D()"></div>
									<div class='trapecio-bottom' id='dente41E' onclick="myFunction41E()"></div>
								</center>
							</td>
							<td>
								<center>
									<div class='trapecio-top' id='dente31A' onclick="myFunction31A()"></div>
									<div class='trapecio-left' id='dente31B' onclick="myFunction31B()"></div>
									<div class='trapecio-right' id='dente31D' onclick="myFunction31D()"></div>
									<div class='trapecio-bottom' id='dente31E' onclick="myFunction31E()"></div>
								</center>
							</td>
							<td>
								<center>
									<div class='trapecio-top' id='dente32A' onclick="myFunction32A()"></div>
									<div class='trapecio-left' id='dente32B' onclick="myFunction32B()"></div>
									<div class='trapecio-right' id='dente32D' onclick="myFunction32D()"></div>
									<div class='trapecio-bottom' id='dente32E' onclick="myFunction32E()"></div>
								</center>
							</td>
							<td>
								<center>
									<div class='trapecio-top' id='dente33A' onclick="myFunction33A()"></div>
									<div class='trapecio-left' id='dente33B' onclick="myFunction33B()"></div>
									<div class='trapecio-right' id='dente33D' onclick="myFunction33D()"></div>
									<div class='trapecio-bottom' id='dente33E' onclick="myFunction33E()"></div>
								</center>
							</td>
							<td>
								<center>
									<div class='trapecio-top' id='dente34A' onclick="myFunction34A()"></div>
									<div class='trapecio-left' id='dente34B' onclick="myFunction34B()"></div>
									<div class='trapecio-right' id='dente34D' onclick="myFunction34D()"></div>
									<div class='trapecio-bottom' id='dente34E' onclick="myFunction34E()"></div>
								</center>
							</td>
							<td>
								<center>
									<div class='trapecio-top' id='dente35A' onclick="myFunction35A()"></div>
									<div class='trapecio-left' id='dente35B' onclick="myFunction35B()"></div>
									<div class='trapecio-right' id='dente35D' onclick="myFunction35D()"></div>
									<div class='trapecio-bottom' id='dente35E' onclick="myFunction35E()"></div>
								</center>
							</td>
							<td>
								<center>
									<div class='trapecio-top' id='dente36A' onclick="myFunction36A()"></div>
									<div class='trapecio-left' id='dente36B' onclick="myFunction36B()"></div>
									<div class='trapecio-right' id='dente36D' onclick="myFunction36D()"></div>
									<div class='trapecio-bottom' id='dente36E' onclick="myFunction36E()"></div>
								</center>
							</td>
							<td>
								<center>
									<div class='trapecio-top' id='dente37A' onclick="myFunction37A()"></div>
									<div class='trapecio-left' id='dente37B' onclick="myFunction37B()"></div>
									<div class='trapecio-right' id='dente37D' onclick="myFunction37D()"></div>
									<div class='trapecio-bottom' id='dente37E' onclick="myFunction37E()"></div>
								</center>
							</td>
							<td>
								<center>
									<div class='trapecio-top' id='dente38A' onclick="myFunction38A()"></div>
									<div class='trapecio-left' id='dente38B' onclick="myFunction38B()"></div>
									<div class='trapecio-right' id='dente38D' onclick="myFunction38D()"></div>
									<div class='trapecio-bottom' id='dente38E' onclick="myFunction38E()"></div>
								</center>
							</td>
						</tr>
						<tr>
							<td><center><b>48</b></center></td>
							<td><center><b>47</b></center></td>
							<td><center><b>46</b></center></td>
							<td><center><b>45</b></center></td>
							<td><center><b>44</b></center></td>
							<td><center><b>43</b></center></td>
							<td><center><b>42</b></center></td>
							<td><center><b>41</b></center></td>
							<td><center><b>31</b></center></td>
							<td><center><b>32</b></center></td>
							<td><center><b>33</b></center></td>
							<td><center><b>34</b></center></td>
							<td><center><b>35</b></center></td>
							<td><center><b>36</b></center></td>
							<td><center><b>37</b></center></td>
							<td><center><b>38</b></center></td>
						</tr>
						<tr>
							<td><center><img src='biofilme/48.png' style='margin-bottom:-40%;'></td></center>
							<td><center><img src='biofilme/47.png' style='margin-bottom:-40%;'></td></center>
							<td><center><img src='biofilme/46.png' style='margin-bottom:-32%;'></td></center>
							<td><center><img src='biofilme/45.png' style='margin-bottom:-18%;'></td></center>
							<td><center><img src='biofilme/44.png' style='margin-bottom:-18%;'></td></center>
							<td><center><img src='biofilme/43.png'></td></center>
							<td><center><img src='biofilme/42.png' style='margin-bottom:-25%;'></td></center>
							<td><center><img src='biofilme/41.png' style='margin-bottom:-30%;'></td></center>
							<td><center><img src='biofilme/31.png' style='margin-bottom:-30%;'></td></center>
							<td><center><img src='biofilme/32.png' style='margin-bottom:-30%;'></td></center>
							<td><center><img src='biofilme/33.png'></td></center>
							<td><center><img src='biofilme/34.png' style='margin-bottom:-20%;'></td></center>
							<td><center><img src='biofilme/35.png' style='margin-bottom:-15%;'></td></center>
							<td><center><img src='biofilme/36.png' style='margin-bottom:-27%;'></td></center>
							<td><center><img src='biofilme/37.png' style='margin-bottom:-35%;'></td></center>
							<td><center><img src='biofilme/38.png' style='margin-bottom:-40%;'></td></center>
						</tr>
					</table>
					
					<!-- ############### Recolhimento de Informações ############### -->
					
					<input type='hidden' id='dente18AValor' name='dente18A'>
					<script>
						var teste18A = 0;
						var color18A;

						function myFunction18A() {
							teste18A = teste18A + 1;
												   
							switch(teste18A){
								case 0:
								color18A = "white";
								break;
							
							case 1:
								color18A = "rgb(255, 0, 255)";
								break;
							

							default:
							color18A = "white";
							}
												   
							if(teste18A == 2){
								teste18A = 0;
							}
													
							document.getElementById("dente18A").style.borderTopColor = color18A;
							document.getElementById('dente18AValor').value = teste18A;
						}
					</script>

					<input type='hidden' id='dente18BValor' name='dente18B'>
					<script>
						var teste18B = 0;
						var color18B;

						function myFunction18B() {
							teste18B = teste18B + 1;
												   
							switch(teste18B){
								case 0:
								color18B = "white";
								break;
							
							case 1:
								color18B = "rgb(255, 0, 255)";
								break;
							

							default:
							color18B = "white";
							}
												   
							if(teste18B == 2){
								teste18B = 0;
							}
													
							document.getElementById("dente18B").style.borderTopColor = color18B;
							document.getElementById('dente18BValor').value = teste18B;
						}
					</script>


					<input type='hidden' id='dente18DValor' name='dente18D'>
					<script>
						var teste18D = 0;
						var color18D;

						function myFunction18D() {
							teste18D = teste18D + 1;
												   
							switch(teste18D){
								case 0:
								color18D = "white";
								break;
							
							case 1:
								color18D = "rgb(255, 0, 255)";
								break;
							

							default:
							color18D = "white";
							}
												   
							if(teste18D == 2){
								teste18D = 0;
							}
													
							document.getElementById("dente18D").style.borderTopColor = color18D;
							document.getElementById('dente18DValor').value = teste18D;
						}
					</script>

					<input type='hidden' id='dente18EValor' name='dente18E'>
					<script>
						var teste18E = 0;
						var color18E;

						function myFunction18E() {
							teste18E = teste18E + 1;
												   
							switch(teste18E){
								case 0:
								color18E = "white";
								break;
							
							case 1:
								color18E = "rgb(255, 0, 255)";
								break;
							

							default:
							color18E = "white";
							}
												   
							if(teste18E == 2){
								teste18E = 0;
							}
													
							document.getElementById("dente18E").style.borderBottomColor = color18E;
							document.getElementById('dente18EValor').value = teste18E;
						}
					</script>
					
					<input type='hidden' id='dente17AValor' name='dente17A'>
					<script>
						var teste17A = 0;
						var color17A;

						function myFunction17A() {
							teste17A = teste17A + 1;
												   
							switch(teste17A){
								case 0:
								color17A = "white";
								break;
							
							case 1:
								color17A = "rgb(255, 0, 255)";
								break;
							

							default:
							color17A = "white";
							}
												   
							if(teste17A == 2){
								teste17A = 0;
							}
													
							document.getElementById("dente17A").style.borderTopColor = color17A;
							document.getElementById('dente17AValor').value = teste17A;
						}
					</script>

					<input type='hidden' id='dente17BValor' name='dente17B'>
					<script>
						var teste17B = 0;
						var color17B;

						function myFunction17B() {
							teste17B = teste17B + 1;
												   
							switch(teste17B){
								case 0:
								color17B = "white";
								break;
							
							case 1:
								color17B = "rgb(255, 0, 255)";
								break;
							

							default:
							color17B = "white";
							}
												   
							if(teste17B == 2){
								teste17B = 0;
							}
													
							document.getElementById("dente17B").style.borderTopColor = color17B;
							document.getElementById('dente17BValor').value = teste17B;
						}
					</script>


					<input type='hidden' id='dente17DValor' name='dente17D'>
					<script>
						var teste17D = 0;
						var color17D;

						function myFunction17D() {
							teste17D = teste17D + 1;
												   
							switch(teste17D){
								case 0:
								color17D = "white";
								break;
							
							case 1:
								color17D = "rgb(255, 0, 255)";
								break;
							

							default:
							color17D = "white";
							}
												   
							if(teste17D == 2){
								teste17D = 0;
							}
													
							document.getElementById("dente17D").style.borderTopColor = color17D;
							document.getElementById('dente17DValor').value = teste17D;
						}
					</script>

					<input type='hidden' id='dente17EValor' name='dente17E'>
					<script>
						var teste17E = 0;
						var color17E;

						function myFunction17E() {
							teste17E = teste17E + 1;
												   
							switch(teste17E){
								case 0:
								color17E = "white";
								break;
							
							case 1:
								color17E = "rgb(255, 0, 255)";
								break;
							

							default:
							color17E = "white";
							}
												   
							if(teste17E == 2){
								teste17E = 0;
							}
													
							document.getElementById("dente17E").style.borderBottomColor = color17E;
							document.getElementById('dente17EValor').value = teste17E;
						}
					</script>
					
										<input type='hidden' id='dente16AValor' name='dente16A'>
					<script>
						var teste16A = 0;
						var color16A;

						function myFunction16A() {
							teste16A = teste16A + 1;
												   
							switch(teste16A){
								case 0:
								color16A = "white";
								break;
							
							case 1:
								color16A = "rgb(255, 0, 255)";
								break;
							

							default:
							color16A = "white";
							}
												   
							if(teste16A == 2){
								teste16A = 0;
							}
													
							document.getElementById("dente16A").style.borderTopColor = color16A;
							document.getElementById('dente16AValor').value = teste16A;
						}
					</script>

					<input type='hidden' id='dente16BValor' name='dente16B'>
					<script>
						var teste16B = 0;
						var color16B;

						function myFunction16B() {
							teste16B = teste16B + 1;
												   
							switch(teste16B){
								case 0:
								color16B = "white";
								break;
							
							case 1:
								color16B = "rgb(255, 0, 255)";
								break;
							

							default:
							color16B = "white";
							}
												   
							if(teste16B == 2){
								teste16B = 0;
							}
													
							document.getElementById("dente16B").style.borderTopColor = color16B;
							document.getElementById('dente16BValor').value = teste16B;
						}
					</script>


					<input type='hidden' id='dente16DValor' name='dente16D'>
					<script>
						var teste16D = 0;
						var color16D;

						function myFunction16D() {
							teste16D = teste16D + 1;
												   
							switch(teste16D){
								case 0:
								color16D = "white";
								break;
							
							case 1:
								color16D = "rgb(255, 0, 255)";
								break;
							

							default:
							color16D = "white";
							}
												   
							if(teste16D == 2){
								teste16D = 0;
							}
													
							document.getElementById("dente16D").style.borderTopColor = color16D;
							document.getElementById('dente16DValor').value = teste16D;
						}
					</script>

					<input type='hidden' id='dente16EValor' name='dente16E'>
					<script>
						var teste16E = 0;
						var color16E;

						function myFunction16E() {
							teste16E = teste16E + 1;
												   
							switch(teste16E){
								case 0:
								color16E = "white";
								break;
							
							case 1:
								color16E = "rgb(255, 0, 255)";
								break;
							

							default:
							color16E = "white";
							}
												   
							if(teste16E == 2){
								teste16E = 0;
							}
													
							document.getElementById("dente16E").style.borderBottomColor = color16E;
							document.getElementById('dente16EValor').value = teste16E;
						}
					</script>
					
										<input type='hidden' id='dente15AValor' name='dente15A'>
					<script>
						var teste15A = 0;
						var color15A;

						function myFunction15A() {
							teste15A = teste15A + 1;
												   
							switch(teste15A){
								case 0:
								color15A = "white";
								break;
							
							case 1:
								color15A = "rgb(255, 0, 255)";
								break;
							

							default:
							color15A = "white";
							}
												   
							if(teste15A == 2){
								teste15A = 0;
							}
													
							document.getElementById("dente15A").style.borderTopColor = color15A;
							document.getElementById('dente15AValor').value = teste15A;
						}
					</script>

					<input type='hidden' id='dente15BValor' name='dente15B'>
					<script>
						var teste15B = 0;
						var color15B;

						function myFunction15B() {
							teste15B = teste15B + 1;
												   
							switch(teste15B){
								case 0:
								color15B = "white";
								break;
							
							case 1:
								color15B = "rgb(255, 0, 255)";
								break;
							

							default:
							color15B = "white";
							}
												   
							if(teste15B == 2){
								teste15B = 0;
							}
													
							document.getElementById("dente15B").style.borderTopColor = color15B;
							document.getElementById('dente15BValor').value = teste15B;
						}
					</script>


					<input type='hidden' id='dente15DValor' name='dente15D'>
					<script>
						var teste15D = 0;
						var color15D;

						function myFunction15D() {
							teste15D = teste15D + 1;
												   
							switch(teste15D){
								case 0:
								color15D = "white";
								break;
							
							case 1:
								color15D = "rgb(255, 0, 255)";
								break;
							

							default:
							color15D = "white";
							}
												   
							if(teste15D == 2){
								teste15D = 0;
							}
													
							document.getElementById("dente15D").style.borderTopColor = color15D;
							document.getElementById('dente15DValor').value = teste15D;
						}
					</script>

					<input type='hidden' id='dente15EValor' name='dente15E'>
					<script>
						var teste15E = 0;
						var color15E;

						function myFunction15E() {
							teste15E = teste15E + 1;
												   
							switch(teste15E){
								case 0:
								color15E = "white";
								break;
							
							case 1:
								color15E = "rgb(255, 0, 255)";
								break;
							

							default:
							color15E = "white";
							}
												   
							if(teste15E == 2){
								teste15E = 0;
							}
													
							document.getElementById("dente15E").style.borderBottomColor = color15E;
							document.getElementById('dente15EValor').value = teste15E;
						}
					</script>
					
										<input type='hidden' id='dente14AValor' name='dente14A'>
					<script>
						var teste14A = 0;
						var color14A;

						function myFunction14A() {
							teste14A = teste14A + 1;
												   
							switch(teste14A){
								case 0:
								color14A = "white";
								break;
							
							case 1:
								color14A = "rgb(255, 0, 255)";
								break;
							

							default:
							color14A = "white";
							}
												   
							if(teste14A == 2){
								teste14A = 0;
							}
													
							document.getElementById("dente14A").style.borderTopColor = color14A;
							document.getElementById('dente14AValor').value = teste14A;
						}
					</script>

					<input type='hidden' id='dente14BValor' name='dente14B'>
					<script>
						var teste14B = 0;
						var color14B;

						function myFunction14B() {
							teste14B = teste14B + 1;
												   
							switch(teste14B){
								case 0:
								color14B = "white";
								break;
							
							case 1:
								color14B = "rgb(255, 0, 255)";
								break;
							

							default:
							color14B = "white";
							}
												   
							if(teste14B == 2){
								teste14B = 0;
							}
													
							document.getElementById("dente14B").style.borderTopColor = color14B;
							document.getElementById('dente14BValor').value = teste14B;
						}
					</script>


					<input type='hidden' id='dente14DValor' name='dente14D'>
					<script>
						var teste14D = 0;
						var color14D;

						function myFunction14D() {
							teste14D = teste14D + 1;
												   
							switch(teste14D){
								case 0:
								color14D = "white";
								break;
							
							case 1:
								color14D = "rgb(255, 0, 255)";
								break;
							

							default:
							color14D = "white";
							}
												   
							if(teste14D == 2){
								teste14D = 0;
							}
													
							document.getElementById("dente14D").style.borderTopColor = color14D;
							document.getElementById('dente14DValor').value = teste14D;
						}
					</script>

					<input type='hidden' id='dente14EValor' name='dente14E'>
					<script>
						var teste14E = 0;
						var color14E;

						function myFunction14E() {
							teste14E = teste14E + 1;
												   
							switch(teste14E){
								case 0:
								color14E = "white";
								break;
							
							case 1:
								color14E = "rgb(255, 0, 255)";
								break;
							

							default:
							color14E = "white";
							}
												   
							if(teste14E == 2){
								teste14E = 0;
							}
													
							document.getElementById("dente14E").style.borderBottomColor = color14E;
							document.getElementById('dente14EValor').value = teste14E;
						}
					</script>
					
										<input type='hidden' id='dente13AValor' name='dente13A'>
					<script>
						var teste13A = 0;
						var color13A;

						function myFunction13A() {
							teste13A = teste13A + 1;
												   
							switch(teste13A){
								case 0:
								color13A = "white";
								break;
							
							case 1:
								color13A = "rgb(255, 0, 255)";
								break;
							

							default:
							color13A = "white";
							}
												   
							if(teste13A == 2){
								teste13A = 0;
							}
													
							document.getElementById("dente13A").style.borderTopColor = color13A;
							document.getElementById('dente13AValor').value = teste13A;
						}
					</script>

					<input type='hidden' id='dente13BValor' name='dente13B'>
					<script>
						var teste13B = 0;
						var color13B;

						function myFunction13B() {
							teste13B = teste13B + 1;
												   
							switch(teste13B){
								case 0:
								color13B = "white";
								break;
							
							case 1:
								color13B = "rgb(255, 0, 255)";
								break;
							

							default:
							color13B = "white";
							}
												   
							if(teste13B == 2){
								teste13B = 0;
							}
													
							document.getElementById("dente13B").style.borderTopColor = color13B;
							document.getElementById('dente13BValor').value = teste13B;
						}
					</script>


					<input type='hidden' id='dente13DValor' name='dente13D'>
					<script>
						var teste13D = 0;
						var color13D;

						function myFunction13D() {
							teste13D = teste13D + 1;
												   
							switch(teste13D){
								case 0:
								color13D = "white";
								break;
							
							case 1:
								color13D = "rgb(255, 0, 255)";
								break;
							

							default:
							color13D = "white";
							}
												   
							if(teste13D == 2){
								teste13D = 0;
							}
													
							document.getElementById("dente13D").style.borderTopColor = color13D;
							document.getElementById('dente13DValor').value = teste13D;
						}
					</script>

					<input type='hidden' id='dente13EValor' name='dente13E'>
					<script>
						var teste13E = 0;
						var color13E;

						function myFunction13E() {
							teste13E = teste13E + 1;
												   
							switch(teste13E){
								case 0:
								color13E = "white";
								break;
							
							case 1:
								color13E = "rgb(255, 0, 255)";
								break;
							

							default:
							color13E = "white";
							}
												   
							if(teste13E == 2){
								teste13E = 0;
							}
													
							document.getElementById("dente13E").style.borderBottomColor = color13E;
							document.getElementById('dente13EValor').value = teste13E;
						}
					</script>
					
										<input type='hidden' id='dente12AValor' name='dente12A'>
					<script>
						var teste12A = 0;
						var color12A;

						function myFunction12A() {
							teste12A = teste12A + 1;
												   
							switch(teste12A){
								case 0:
								color12A = "white";
								break;
							
							case 1:
								color12A = "rgb(255, 0, 255)";
								break;
							

							default:
							color12A = "white";
							}
												   
							if(teste12A == 2){
								teste12A = 0;
							}
													
							document.getElementById("dente12A").style.borderTopColor = color12A;
							document.getElementById('dente12AValor').value = teste12A;
						}
					</script>

					<input type='hidden' id='dente12BValor' name='dente12B'>
					<script>
						var teste12B = 0;
						var color12B;

						function myFunction12B() {
							teste12B = teste12B + 1;
												   
							switch(teste12B){
								case 0:
								color12B = "white";
								break;
							
							case 1:
								color12B = "rgb(255, 0, 255)";
								break;
							

							default:
							color12B = "white";
							}
												   
							if(teste12B == 2){
								teste12B = 0;
							}
													
							document.getElementById("dente12B").style.borderTopColor = color12B;
							document.getElementById('dente12BValor').value = teste12B;
						}
					</script>


					<input type='hidden' id='dente12DValor' name='dente12D'>
					<script>
						var teste12D = 0;
						var color12D;

						function myFunction12D() {
							teste12D = teste12D + 1;
												   
							switch(teste12D){
								case 0:
								color12D = "white";
								break;
							
							case 1:
								color12D = "rgb(255, 0, 255)";
								break;
							

							default:
							color12D = "white";
							}
												   
							if(teste12D == 2){
								teste12D = 0;
							}
													
							document.getElementById("dente12D").style.borderTopColor = color12D;
							document.getElementById('dente12DValor').value = teste12D;
						}
					</script>

					<input type='hidden' id='dente12EValor' name='dente12E'>
					<script>
						var teste12E = 0;
						var color12E;

						function myFunction12E() {
							teste12E = teste12E + 1;
												   
							switch(teste12E){
								case 0:
								color12E = "white";
								break;
							
							case 1:
								color12E = "rgb(255, 0, 255)";
								break;
							

							default:
							color12E = "white";
							}
												   
							if(teste12E == 2){
								teste12E = 0;
							}
													
							document.getElementById("dente12E").style.borderBottomColor = color12E;
							document.getElementById('dente12EValor').value = teste12E;
						}
					</script>
					
										<input type='hidden' id='dente11AValor' name='dente11A'>
					<script>
						var teste11A = 0;
						var color11A;

						function myFunction11A() {
							teste11A = teste11A + 1;
												   
							switch(teste11A){
								case 0:
								color11A = "white";
								break;
							
							case 1:
								color11A = "rgb(255, 0, 255)";
								break;
							

							default:
							color11A = "white";
							}
												   
							if(teste11A == 2){
								teste11A = 0;
							}
													
							document.getElementById("dente11A").style.borderTopColor = color11A;
							document.getElementById('dente11AValor').value = teste11A;
						}
					</script>

					<input type='hidden' id='dente11BValor' name='dente11B'>
					<script>
						var teste11B = 0;
						var color11B;

						function myFunction11B() {
							teste11B = teste11B + 1;
												   
							switch(teste11B){
								case 0:
								color11B = "white";
								break;
							
							case 1:
								color11B = "rgb(255, 0, 255)";
								break;
							

							default:
							color11B = "white";
							}
												   
							if(teste11B == 2){
								teste11B = 0;
							}
													
							document.getElementById("dente11B").style.borderTopColor = color11B;
							document.getElementById('dente11BValor').value = teste11B;
						}
					</script>


					<input type='hidden' id='dente11DValor' name='dente11D'>
					<script>
						var teste11D = 0;
						var color11D;

						function myFunction11D() {
							teste11D = teste11D + 1;
												   
							switch(teste11D){
								case 0:
								color11D = "white";
								break;
							
							case 1:
								color11D = "rgb(255, 0, 255)";
								break;
							

							default:
							color11D = "white";
							}
												   
							if(teste11D == 2){
								teste11D = 0;
							}
													
							document.getElementById("dente11D").style.borderTopColor = color11D;
							document.getElementById('dente11DValor').value = teste11D;
						}
					</script>

					<input type='hidden' id='dente11EValor' name='dente11E'>
					<script>
						var teste11E = 0;
						var color11E;

						function myFunction11E() {
							teste11E = teste11E + 1;
												   
							switch(teste11E){
								case 0:
								color11E = "white";
								break;
							
							case 1:
								color11E = "rgb(255, 0, 255)";
								break;
							

							default:
							color11E = "white";
							}
												   
							if(teste11E == 2){
								teste11E = 0;
							}
													
							document.getElementById("dente11E").style.borderBottomColor = color11E;
							document.getElementById('dente11EValor').value = teste11E;
						}
					</script>
					
										<input type='hidden' id='dente21AValor' name='dente21A'>
					<script>
						var teste21A = 0;
						var color21A;

						function myFunction21A() {
							teste21A = teste21A + 1;
												   
							switch(teste21A){
								case 0:
								color21A = "white";
								break;
							
							case 1:
								color21A = "rgb(255, 0, 255)";
								break;
							

							default:
							color21A = "white";
							}
												   
							if(teste21A == 2){
								teste21A = 0;
							}
													
							document.getElementById("dente21A").style.borderTopColor = color21A;
							document.getElementById('dente21AValor').value = teste21A;
						}
					</script>

					<input type='hidden' id='dente21BValor' name='dente21B'>
					<script>
						var teste21B = 0;
						var color21B;

						function myFunction21B() {
							teste21B = teste21B + 1;
												   
							switch(teste21B){
								case 0:
								color21B = "white";
								break;
							
							case 1:
								color21B = "rgb(255, 0, 255)";
								break;
							

							default:
							color21B = "white";
							}
												   
							if(teste21B == 2){
								teste21B = 0;
							}
													
							document.getElementById("dente21B").style.borderTopColor = color21B;
							document.getElementById('dente21BValor').value = teste21B;
						}
					</script>


					<input type='hidden' id='dente21DValor' name='dente21D'>
					<script>
						var teste21D = 0;
						var color21D;

						function myFunction21D() {
							teste21D = teste21D + 1;
												   
							switch(teste21D){
								case 0:
								color21D = "white";
								break;
							
							case 1:
								color21D = "rgb(255, 0, 255)";
								break;
							

							default:
							color21D = "white";
							}
												   
							if(teste21D == 2){
								teste21D = 0;
							}
													
							document.getElementById("dente21D").style.borderTopColor = color21D;
							document.getElementById('dente21DValor').value = teste21D;
						}
					</script>

					<input type='hidden' id='dente21EValor' name='dente21E'>
					<script>
						var teste21E = 0;
						var color21E;

						function myFunction21E() {
							teste21E = teste21E + 1;
												   
							switch(teste21E){
								case 0:
								color21E = "white";
								break;
							
							case 1:
								color21E = "rgb(255, 0, 255)";
								break;
							

							default:
							color21E = "white";
							}
												   
							if(teste21E == 2){
								teste21E = 0;
							}
													
							document.getElementById("dente21E").style.borderBottomColor = color21E;
							document.getElementById('dente21EValor').value = teste21E;
						}
					</script>
					
										<input type='hidden' id='dente22AValor' name='dente22A'>
					<script>
						var teste22A = 0;
						var color22A;

						function myFunction22A() {
							teste22A = teste22A + 1;
												   
							switch(teste22A){
								case 0:
								color22A = "white";
								break;
							
							case 1:
								color22A = "rgb(255, 0, 255)";
								break;
							

							default:
							color22A = "white";
							}
												   
							if(teste22A == 2){
								teste22A = 0;
							}
													
							document.getElementById("dente22A").style.borderTopColor = color22A;
							document.getElementById('dente22AValor').value = teste22A;
						}
					</script>

					<input type='hidden' id='dente22BValor' name='dente22B'>
					<script>
						var teste22B = 0;
						var color22B;

						function myFunction22B() {
							teste22B = teste22B + 1;
												   
							switch(teste22B){
								case 0:
								color22B = "white";
								break;
							
							case 1:
								color22B = "rgb(255, 0, 255)";
								break;
							

							default:
							color22B = "white";
							}
												   
							if(teste22B == 2){
								teste22B = 0;
							}
													
							document.getElementById("dente22B").style.borderTopColor = color22B;
							document.getElementById('dente22BValor').value = teste22B;
						}
					</script>


					<input type='hidden' id='dente22DValor' name='dente22D'>
					<script>
						var teste22D = 0;
						var color22D;

						function myFunction22D() {
							teste22D = teste22D + 1;
												   
							switch(teste22D){
								case 0:
								color22D = "white";
								break;
							
							case 1:
								color22D = "rgb(255, 0, 255)";
								break;
							

							default:
							color22D = "white";
							}
												   
							if(teste22D == 2){
								teste22D = 0;
							}
													
							document.getElementById("dente22D").style.borderTopColor = color22D;
							document.getElementById('dente22DValor').value = teste22D;
						}
					</script>

					<input type='hidden' id='dente22EValor' name='dente22E'>
					<script>
						var teste22E = 0;
						var color22E;

						function myFunction22E() {
							teste22E = teste22E + 1;
												   
							switch(teste22E){
								case 0:
								color22E = "white";
								break;
							
							case 1:
								color22E = "rgb(255, 0, 255)";
								break;
							

							default:
							color22E = "white";
							}
												   
							if(teste22E == 2){
								teste22E = 0;
							}
													
							document.getElementById("dente22E").style.borderBottomColor = color22E;
							document.getElementById('dente22EValor').value = teste22E;
						}
					</script>
					
										<input type='hidden' id='dente23AValor' name='dente23A'>
					<script>
						var teste23A = 0;
						var color23A;

						function myFunction23A() {
							teste23A = teste23A + 1;
												   
							switch(teste23A){
								case 0:
								color23A = "white";
								break;
							
							case 1:
								color23A = "rgb(255, 0, 255)";
								break;
							

							default:
							color23A = "white";
							}
												   
							if(teste23A == 2){
								teste23A = 0;
							}
													
							document.getElementById("dente23A").style.borderTopColor = color23A;
							document.getElementById('dente23AValor').value = teste23A;
						}
					</script>

					<input type='hidden' id='dente23BValor' name='dente23B'>
					<script>
						var teste23B = 0;
						var color23B;

						function myFunction23B() {
							teste23B = teste23B + 1;
												   
							switch(teste23B){
								case 0:
								color23B = "white";
								break;
							
							case 1:
								color23B = "rgb(255, 0, 255)";
								break;
							

							default:
							color23B = "white";
							}
												   
							if(teste23B == 2){
								teste23B = 0;
							}
													
							document.getElementById("dente23B").style.borderTopColor = color23B;
							document.getElementById('dente23BValor').value = teste23B;
						}
					</script>


					<input type='hidden' id='dente23DValor' name='dente23D'>
					<script>
						var teste23D = 0;
						var color23D;

						function myFunction23D() {
							teste23D = teste23D + 1;
												   
							switch(teste23D){
								case 0:
								color23D = "white";
								break;
							
							case 1:
								color23D = "rgb(255, 0, 255)";
								break;
							

							default:
							color23D = "white";
							}
												   
							if(teste23D == 2){
								teste23D = 0;
							}
													
							document.getElementById("dente23D").style.borderTopColor = color23D;
							document.getElementById('dente23DValor').value = teste23D;
						}
					</script>

					<input type='hidden' id='dente23EValor' name='dente23E'>
					<script>
						var teste23E = 0;
						var color23E;

						function myFunction23E() {
							teste23E = teste23E + 1;
												   
							switch(teste23E){
								case 0:
								color23E = "white";
								break;
							
							case 1:
								color23E = "rgb(255, 0, 255)";
								break;
							

							default:
							color23E = "white";
							}
												   
							if(teste23E == 2){
								teste23E = 0;
							}
													
							document.getElementById("dente23E").style.borderBottomColor = color23E;
							document.getElementById('dente23EValor').value = teste23E;
						}
					</script>
					
										<input type='hidden' id='dente24AValor' name='dente24A'>
					<script>
						var teste24A = 0;
						var color24A;

						function myFunction24A() {
							teste24A = teste24A + 1;
												   
							switch(teste24A){
								case 0:
								color24A = "white";
								break;
							
							case 1:
								color24A = "rgb(255, 0, 255)";
								break;
							

							default:
							color24A = "white";
							}
												   
							if(teste24A == 2){
								teste24A = 0;
							}
													
							document.getElementById("dente24A").style.borderTopColor = color24A;
							document.getElementById('dente24AValor').value = teste24A;
						}
					</script>

					<input type='hidden' id='dente24BValor' name='dente24B'>
					<script>
						var teste24B = 0;
						var color24B;

						function myFunction24B() {
							teste24B = teste24B + 1;
												   
							switch(teste24B){
								case 0:
								color24B = "white";
								break;
							
							case 1:
								color24B = "rgb(255, 0, 255)";
								break;
							

							default:
							color24B = "white";
							}
												   
							if(teste24B == 2){
								teste24B = 0;
							}
													
							document.getElementById("dente24B").style.borderTopColor = color24B;
							document.getElementById('dente24BValor').value = teste24B;
						}
					</script>


					<input type='hidden' id='dente24DValor' name='dente24D'>
					<script>
						var teste24D = 0;
						var color24D;

						function myFunction24D() {
							teste24D = teste24D + 1;
												   
							switch(teste24D){
								case 0:
								color24D = "white";
								break;
							
							case 1:
								color24D = "rgb(255, 0, 255)";
								break;
							

							default:
							color24D = "white";
							}
												   
							if(teste24D == 2){
								teste24D = 0;
							}
													
							document.getElementById("dente24D").style.borderTopColor = color24D;
							document.getElementById('dente24DValor').value = teste24D;
						}
					</script>

					<input type='hidden' id='dente24EValor' name='dente24E'>
					<script>
						var teste24E = 0;
						var color24E;

						function myFunction24E() {
							teste24E = teste24E + 1;
												   
							switch(teste24E){
								case 0:
								color24E = "white";
								break;
							
							case 1:
								color24E = "rgb(255, 0, 255)";
								break;
							

							default:
							color24E = "white";
							}
												   
							if(teste24E == 2){
								teste24E = 0;
							}
													
							document.getElementById("dente24E").style.borderBottomColor = color24E;
							document.getElementById('dente24EValor').value = teste24E;
						}
					</script>
					
										<input type='hidden' id='dente25AValor' name='dente25A'>
					<script>
						var teste25A = 0;
						var color25A;

						function myFunction25A() {
							teste25A = teste25A + 1;
												   
							switch(teste25A){
								case 0:
								color25A = "white";
								break;
							
							case 1:
								color25A = "rgb(255, 0, 255)";
								break;
							

							default:
							color25A = "white";
							}
												   
							if(teste25A == 2){
								teste25A = 0;
							}
													
							document.getElementById("dente25A").style.borderTopColor = color25A;
							document.getElementById('dente25AValor').value = teste25A;
						}
					</script>

					<input type='hidden' id='dente25BValor' name='dente25B'>
					<script>
						var teste25B = 0;
						var color25B;

						function myFunction25B() {
							teste25B = teste25B + 1;
												   
							switch(teste25B){
								case 0:
								color25B = "white";
								break;
							
							case 1:
								color25B = "rgb(255, 0, 255)";
								break;
							

							default:
							color25B = "white";
							}
												   
							if(teste25B == 2){
								teste25B = 0;
							}
													
							document.getElementById("dente25B").style.borderTopColor = color25B;
							document.getElementById('dente25BValor').value = teste25B;
						}
					</script>


					<input type='hidden' id='dente25DValor' name='dente25D'>
					<script>
						var teste25D = 0;
						var color25D;

						function myFunction25D() {
							teste25D = teste25D + 1;
												   
							switch(teste25D){
								case 0:
								color25D = "white";
								break;
							
							case 1:
								color25D = "rgb(255, 0, 255)";
								break;
							

							default:
							color25D = "white";
							}
												   
							if(teste25D == 2){
								teste25D = 0;
							}
													
							document.getElementById("dente25D").style.borderTopColor = color25D;
							document.getElementById('dente25DValor').value = teste25D;
						}
					</script>

					<input type='hidden' id='dente25EValor' name='dente25E'>
					<script>
						var teste25E = 0;
						var color25E;

						function myFunction25E() {
							teste25E = teste25E + 1;
												   
							switch(teste25E){
								case 0:
								color25E = "white";
								break;
							
							case 1:
								color25E = "rgb(255, 0, 255)";
								break;
							

							default:
							color25E = "white";
							}
												   
							if(teste25E == 2){
								teste25E = 0;
							}
													
							document.getElementById("dente25E").style.borderBottomColor = color25E;
							document.getElementById('dente25EValor').value = teste25E;
						}
					</script>
					
										<input type='hidden' id='dente26AValor' name='dente26A'>
					<script>
						var teste26A = 0;
						var color26A;

						function myFunction26A() {
							teste26A = teste26A + 1;
												   
							switch(teste26A){
								case 0:
								color26A = "white";
								break;
							
							case 1:
								color26A = "rgb(255, 0, 255)";
								break;
							

							default:
							color26A = "white";
							}
												   
							if(teste26A == 2){
								teste26A = 0;
							}
													
							document.getElementById("dente26A").style.borderTopColor = color26A;
							document.getElementById('dente26AValor').value = teste26A;
						}
					</script>

					<input type='hidden' id='dente26BValor' name='dente26B'>
					<script>
						var teste26B = 0;
						var color26B;

						function myFunction26B() {
							teste26B = teste26B + 1;
												   
							switch(teste26B){
								case 0:
								color26B = "white";
								break;
							
							case 1:
								color26B = "rgb(255, 0, 255)";
								break;
							

							default:
							color26B = "white";
							}
												   
							if(teste26B == 2){
								teste26B = 0;
							}
													
							document.getElementById("dente26B").style.borderTopColor = color26B;
							document.getElementById('dente26BValor').value = teste26B;
						}
					</script>


					<input type='hidden' id='dente26DValor' name='dente26D'>
					<script>
						var teste26D = 0;
						var color26D;

						function myFunction26D() {
							teste26D = teste26D + 1;
												   
							switch(teste26D){
								case 0:
								color26D = "white";
								break;
							
							case 1:
								color26D = "rgb(255, 0, 255)";
								break;
							

							default:
							color26D = "white";
							}
												   
							if(teste26D == 2){
								teste26D = 0;
							}
													
							document.getElementById("dente26D").style.borderTopColor = color26D;
							document.getElementById('dente26DValor').value = teste26D;
						}
					</script>

					<input type='hidden' id='dente26EValor' name='dente26E'>
					<script>
						var teste26E = 0;
						var color26E;

						function myFunction26E() {
							teste26E = teste26E + 1;
												   
							switch(teste26E){
								case 0:
								color26E = "white";
								break;
							
							case 1:
								color26E = "rgb(255, 0, 255)";
								break;
							

							default:
							color26E = "white";
							}
												   
							if(teste26E == 2){
								teste26E = 0;
							}
													
							document.getElementById("dente26E").style.borderBottomColor = color26E;
							document.getElementById('dente26EValor').value = teste26E;
						}
					</script>
					
										<input type='hidden' id='dente27AValor' name='dente27A'>
					<script>
						var teste27A = 0;
						var color27A;

						function myFunction27A() {
							teste27A = teste27A + 1;
												   
							switch(teste27A){
								case 0:
								color27A = "white";
								break;
							
							case 1:
								color27A = "rgb(255, 0, 255)";
								break;
							

							default:
							color27A = "white";
							}
												   
							if(teste27A == 2){
								teste27A = 0;
							}
													
							document.getElementById("dente27A").style.borderTopColor = color27A;
							document.getElementById('dente27AValor').value = teste27A;
						}
					</script>

					<input type='hidden' id='dente27BValor' name='dente27B'>
					<script>
						var teste27B = 0;
						var color27B;

						function myFunction27B() {
							teste27B = teste27B + 1;
												   
							switch(teste27B){
								case 0:
								color27B = "white";
								break;
							
							case 1:
								color27B = "rgb(255, 0, 255)";
								break;
							

							default:
							color27B = "white";
							}
												   
							if(teste27B == 2){
								teste27B = 0;
							}
													
							document.getElementById("dente27B").style.borderTopColor = color27B;
							document.getElementById('dente27BValor').value = teste27B;
						}
					</script>


					<input type='hidden' id='dente27DValor' name='dente27D'>
					<script>
						var teste27D = 0;
						var color27D;

						function myFunction27D() {
							teste27D = teste27D + 1;
												   
							switch(teste27D){
								case 0:
								color27D = "white";
								break;
							
							case 1:
								color27D = "rgb(255, 0, 255)";
								break;
							

							default:
							color27D = "white";
							}
												   
							if(teste27D == 2){
								teste27D = 0;
							}
													
							document.getElementById("dente27D").style.borderTopColor = color27D;
							document.getElementById('dente27DValor').value = teste27D;
						}
					</script>

					<input type='hidden' id='dente27EValor' name='dente27E'>
					<script>
						var teste27E = 0;
						var color27E;

						function myFunction27E() {
							teste27E = teste27E + 1;
												   
							switch(teste27E){
								case 0:
								color27E = "white";
								break;
							
							case 1:
								color27E = "rgb(255, 0, 255)";
								break;
							

							default:
							color27E = "white";
							}
												   
							if(teste27E == 2){
								teste27E = 0;
							}
													
							document.getElementById("dente27E").style.borderBottomColor = color27E;
							document.getElementById('dente27EValor').value = teste27E;
						}
					</script>
					
										<input type='hidden' id='dente28AValor' name='dente28A'>
					<script>
						var teste28A = 0;
						var color28A;

						function myFunction28A() {
							teste28A = teste28A + 1;
												   
							switch(teste28A){
								case 0:
								color28A = "white";
								break;
							
							case 1:
								color28A = "rgb(255, 0, 255)";
								break;
							

							default:
							color28A = "white";
							}
												   
							if(teste28A == 2){
								teste28A = 0;
							}
													
							document.getElementById("dente28A").style.borderTopColor = color28A;
							document.getElementById('dente28AValor').value = teste28A;
						}
					</script>

					<input type='hidden' id='dente28BValor' name='dente28B'>
					<script>
						var teste28B = 0;
						var color28B;

						function myFunction28B() {
							teste28B = teste28B + 1;
												   
							switch(teste28B){
								case 0:
								color28B = "white";
								break;
							
							case 1:
								color28B = "rgb(255, 0, 255)";
								break;
							

							default:
							color28B = "white";
							}
												   
							if(teste28B == 2){
								teste28B = 0;
							}
													
							document.getElementById("dente28B").style.borderTopColor = color28B;
							document.getElementById('dente28BValor').value = teste28B;
						}
					</script>


					<input type='hidden' id='dente28DValor' name='dente28D'>
					<script>
						var teste28D = 0;
						var color28D;

						function myFunction28D() {
							teste28D = teste28D + 1;
												   
							switch(teste28D){
								case 0:
								color28D = "white";
								break;
							
							case 1:
								color28D = "rgb(255, 0, 255)";
								break;
							

							default:
							color28D = "white";
							}
												   
							if(teste28D == 2){
								teste28D = 0;
							}
													
							document.getElementById("dente28D").style.borderTopColor = color28D;
							document.getElementById('dente28DValor').value = teste28D;
						}
					</script>

					<input type='hidden' id='dente28EValor' name='dente28E'>
					<script>
						var teste28E = 0;
						var color28E;

						function myFunction28E() {
							teste28E = teste28E + 1;
												   
							switch(teste28E){
								case 0:
								color28E = "white";
								break;
							
							case 1:
								color28E = "rgb(255, 0, 255)";
								break;
							

							default:
							color28E = "white";
							}
												   
							if(teste28E == 2){
								teste28E = 0;
							}
													
							document.getElementById("dente28E").style.borderBottomColor = color28E;
							document.getElementById('dente28EValor').value = teste28E;
						}
					</script>
					
					<input type='hidden' id='dente48AValor' name='dente48A'>
										<script>
						var teste48A = 0;
						var color48A;

						function myFunction48A() {
							teste48A = teste48A + 1;
												   
							switch(teste48A){
								case 0:
								color48A = "white";
								break;
							
							case 1:
								color48A = "rgb(255, 0, 255)";
								break;
							

							default:
							color48A = "white";
							}
												   
							if(teste48A == 2){
								teste48A = 0;
							}
													
							document.getElementById("dente48A").style.borderTopColor = color48A;
							document.getElementById('dente48AValor').value = teste48A;
						}
					</script>

					<input type='hidden' id='dente48BValor' name='dente48B'>
					<script>
						var teste48B = 0;
						var color48B;

						function myFunction48B() {
							teste48B = teste48B + 1;
												   
							switch(teste48B){
								case 0:
								color48B = "white";
								break;
							
							case 1:
								color48B = "rgb(255, 0, 255)";
								break;
							

							default:
							color48B = "white";
							}
												   
							if(teste48B == 2){
								teste48B = 0;
							}
													
							document.getElementById("dente48B").style.borderTopColor = color48B;
							document.getElementById('dente48BValor').value = teste48B;
						}
					</script>


					<input type='hidden' id='dente48DValor' name='dente48D'>
					<script>
						var teste48D = 0;
						var color48D;

						function myFunction48D() {
							teste48D = teste48D + 1;
												   
							switch(teste48D){
								case 0:
								color48D = "white";
								break;
							
							case 1:
								color48D = "rgb(255, 0, 255)";
								break;
							

							default:
							color48D = "white";
							}
												   
							if(teste48D == 2){
								teste48D = 0;
							}
													
							document.getElementById("dente48D").style.borderTopColor = color48D;
							document.getElementById('dente48DValor').value = teste48D;
						}
					</script>

					<input type='hidden' id='dente48EValor' name='dente48E'>
					<script>
						var teste48E = 0;
						var color48E;

						function myFunction48E() {
							teste48E = teste48E + 1;
												   
							switch(teste48E){
								case 0:
								color48E = "white";
								break;
							
							case 1:
								color48E = "rgb(255, 0, 255)";
								break;
							

							default:
							color48E = "white";
							}
												   
							if(teste48E == 2){
								teste48E = 0;
							}
													
							document.getElementById("dente48E").style.borderBottomColor = color48E;
							document.getElementById('dente48EValor').value = teste48E;
						}
					</script>
					
						<input type='hidden' id='dente47AValor' name='dente47A'>
										<script>
						var teste47A = 0;
						var color47A;

						function myFunction47A() {
							teste47A = teste47A + 1;
												   
							switch(teste47A){
								case 0:
								color47A = "white";
								break;
							
							case 1:
								color47A = "rgb(255, 0, 255)";
								break;
							

							default:
							color47A = "white";
							}
												   
							if(teste47A == 2){
								teste47A = 0;
							}
													
							document.getElementById("dente47A").style.borderTopColor = color47A;
							document.getElementById('dente47AValor').value = teste47A;
						}
					</script>

					<input type='hidden' id='dente47BValor' name='dente47B'>
					<script>
						var teste47B = 0;
						var color47B;

						function myFunction47B() {
							teste47B = teste47B + 1;
												   
							switch(teste47B){
								case 0:
								color47B = "white";
								break;
							
							case 1:
								color47B = "rgb(255, 0, 255)";
								break;
							

							default:
							color47B = "white";
							}
												   
							if(teste47B == 2){
								teste47B = 0;
							}
													
							document.getElementById("dente47B").style.borderTopColor = color47B;
							document.getElementById('dente47BValor').value = teste47B;
						}
					</script>


					<input type='hidden' id='dente47DValor' name='dente47D'>
					<script>
						var teste47D = 0;
						var color47D;

						function myFunction47D() {
							teste47D = teste47D + 1;
												   
							switch(teste47D){
								case 0:
								color47D = "white";
								break;
							
							case 1:
								color47D = "rgb(255, 0, 255)";
								break;
							

							default:
							color47D = "white";
							}
												   
							if(teste47D == 2){
								teste47D = 0;
							}
													
							document.getElementById("dente47D").style.borderTopColor = color47D;
							document.getElementById('dente47DValor').value = teste47D;
						}
					</script>

					<input type='hidden' id='dente47EValor' name='dente47E'>
					<script>
						var teste47E = 0;
						var color47E;

						function myFunction47E() {
							teste47E = teste47E + 1;
												   
							switch(teste47E){
								case 0:
								color47E = "white";
								break;
							
							case 1:
								color47E = "rgb(255, 0, 255)";
								break;
							

							default:
							color47E = "white";
							}
												   
							if(teste47E == 2){
								teste47E = 0;
							}
													
							document.getElementById("dente47E").style.borderBottomColor = color47E;
							document.getElementById('dente47EValor').value = teste47E;
						}
					</script>
					
					<input type='hidden' id='dente46AValor' name='dente46A'>
										<script>
						var teste46A = 0;
						var color46A;

						function myFunction46A() {
							teste46A = teste46A + 1;
												   
							switch(teste46A){
								case 0:
								color46A = "white";
								break;
							
							case 1:
								color46A = "rgb(255, 0, 255)";
								break;
							

							default:
							color46A = "white";
							}
												   
							if(teste46A == 2){
								teste46A = 0;
							}
													
							document.getElementById("dente46A").style.borderTopColor = color46A;
							document.getElementById('dente46AValor').value = teste46A;
						}
					</script>

					<input type='hidden' id='dente46BValor' name='dente46B'>
					<script>
						var teste46B = 0;
						var color46B;

						function myFunction46B() {
							teste46B = teste46B + 1;
												   
							switch(teste46B){
								case 0:
								color46B = "white";
								break;
							
							case 1:
								color46B = "rgb(255, 0, 255)";
								break;
							

							default:
							color46B = "white";
							}
												   
							if(teste46B == 2){
								teste46B = 0;
							}
													
							document.getElementById("dente46B").style.borderTopColor = color46B;
							document.getElementById('dente46BValor').value = teste46B;
						}
					</script>


					<input type='hidden' id='dente46DValor' name='dente46D'>
					<script>
						var teste46D = 0;
						var color46D;

						function myFunction46D() {
							teste46D = teste46D + 1;
												   
							switch(teste46D){
								case 0:
								color46D = "white";
								break;
							
							case 1:
								color46D = "rgb(255, 0, 255)";
								break;
							

							default:
							color46D = "white";
							}
												   
							if(teste46D == 2){
								teste46D = 0;
							}
													
							document.getElementById("dente46D").style.borderTopColor = color46D;
							document.getElementById('dente46DValor').value = teste46D;
						}
					</script>

					<input type='hidden' id='dente46EValor' name='dente46E'>
					<script>
						var teste46E = 0;
						var color46E;

						function myFunction46E() {
							teste46E = teste46E + 1;
												   
							switch(teste46E){
								case 0:
								color46E = "white";
								break;
							
							case 1:
								color46E = "rgb(255, 0, 255)";
								break;
							

							default:
							color46E = "white";
							}
												   
							if(teste46E == 2){
								teste46E = 0;
							}
													
							document.getElementById("dente46E").style.borderBottomColor = color46E;
							document.getElementById('dente46EValor').value = teste46E;
						}
					</script>
					
					<input type='hidden' id='dente45AValor' name='dente45A'>
										<script>
						var teste45A = 0;
						var color45A;

						function myFunction45A() {
							teste45A = teste45A + 1;
												   
							switch(teste45A){
								case 0:
								color45A = "white";
								break;
							
							case 1:
								color45A = "rgb(255, 0, 255)";
								break;
							

							default:
							color45A = "white";
							}
												   
							if(teste45A == 2){
								teste45A = 0;
							}
													
							document.getElementById("dente45A").style.borderTopColor = color45A;
							document.getElementById('dente45AValor').value = teste45A;
						}
					</script>

					<input type='hidden' id='dente45BValor' name='dente45B'>
					<script>
						var teste45B = 0;
						var color45B;

						function myFunction45B() {
							teste45B = teste45B + 1;
												   
							switch(teste45B){
								case 0:
								color45B = "white";
								break;
							
							case 1:
								color45B = "rgb(255, 0, 255)";
								break;
							

							default:
							color45B = "white";
							}
												   
							if(teste45B == 2){
								teste45B = 0;
							}
													
							document.getElementById("dente45B").style.borderTopColor = color45B;
							document.getElementById('dente45BValor').value = teste45B;
						}
					</script>


					<input type='hidden' id='dente45DValor' name='dente45D'>
					<script>
						var teste45D = 0;
						var color45D;

						function myFunction45D() {
							teste45D = teste45D + 1;
												   
							switch(teste45D){
								case 0:
								color45D = "white";
								break;
							
							case 1:
								color45D = "rgb(255, 0, 255)";
								break;
							

							default:
							color45D = "white";
							}
												   
							if(teste45D == 2){
								teste45D = 0;
							}
													
							document.getElementById("dente45D").style.borderTopColor = color45D;
							document.getElementById('dente45DValor').value = teste45D;
						}
					</script>

					<input type='hidden' id='dente45EValor' name='dente45E'>
					<script>
						var teste45E = 0;
						var color45E;

						function myFunction45E() {
							teste45E = teste45E + 1;
												   
							switch(teste45E){
								case 0:
								color45E = "white";
								break;
							
							case 1:
								color45E = "rgb(255, 0, 255)";
								break;
							

							default:
							color45E = "white";
							}
												   
							if(teste45E == 2){
								teste45E = 0;
							}
													
							document.getElementById("dente45E").style.borderBottomColor = color45E;
							document.getElementById('dente45EValor').value = teste45E;
						}
					</script>
					
					<input type='hidden' id='dente44AValor' name='dente44A'>
										<script>
						var teste44A = 0;
						var color44A;

						function myFunction44A() {
							teste44A = teste44A + 1;
												   
							switch(teste44A){
								case 0:
								color44A = "white";
								break;
							
							case 1:
								color44A = "rgb(255, 0, 255)";
								break;
							

							default:
							color44A = "white";
							}
												   
							if(teste44A == 2){
								teste44A = 0;
							}
													
							document.getElementById("dente44A").style.borderTopColor = color44A;
							document.getElementById('dente44AValor').value = teste44A;
						}
					</script>

					<input type='hidden' id='dente44BValor' name='dente44B'>
					<script>
						var teste44B = 0;
						var color44B;

						function myFunction44B() {
							teste44B = teste44B + 1;
												   
							switch(teste44B){
								case 0:
								color44B = "white";
								break;
							
							case 1:
								color44B = "rgb(255, 0, 255)";
								break;
							

							default:
							color44B = "white";
							}
												   
							if(teste44B == 2){
								teste44B = 0;
							}
													
							document.getElementById("dente44B").style.borderTopColor = color44B;
							document.getElementById('dente44BValor').value = teste44B;
						}
					</script>


					<input type='hidden' id='dente44DValor' name='dente44D'>
					<script>
						var teste44D = 0;
						var color44D;

						function myFunction44D() {
							teste44D = teste44D + 1;
												   
							switch(teste44D){
								case 0:
								color44D = "white";
								break;
							
							case 1:
								color44D = "rgb(255, 0, 255)";
								break;
							

							default:
							color44D = "white";
							}
												   
							if(teste44D == 2){
								teste44D = 0;
							}
													
							document.getElementById("dente44D").style.borderTopColor = color44D;
							document.getElementById('dente44DValor').value = teste44D;
						}
					</script>

					<input type='hidden' id='dente44EValor' name='dente44E'>
					<script>
						var teste44E = 0;
						var color44E;

						function myFunction44E() {
							teste44E = teste44E + 1;
												   
							switch(teste44E){
								case 0:
								color44E = "white";
								break;
							
							case 1:
								color44E = "rgb(255, 0, 255)";
								break;
							

							default:
							color44E = "white";
							}
												   
							if(teste44E == 2){
								teste44E = 0;
							}
													
							document.getElementById("dente44E").style.borderBottomColor = color44E;
							document.getElementById('dente44EValor').value = teste44E;
						}
					</script>
					
					<input type='hidden' id='dente43AValor' name='dente43A'>
										<script>
						var teste43A = 0;
						var color43A;

						function myFunction43A() {
							teste43A = teste43A + 1;
												   
							switch(teste43A){
								case 0:
								color43A = "white";
								break;
							
							case 1:
								color43A = "rgb(255, 0, 255)";
								break;
							

							default:
							color43A = "white";
							}
												   
							if(teste43A == 2){
								teste43A = 0;
							}
													
							document.getElementById("dente43A").style.borderTopColor = color43A;
							document.getElementById('dente43AValor').value = teste43A;
						}
					</script>

					<input type='hidden' id='dente43BValor' name='dente43B'>
					<script>
						var teste43B = 0;
						var color43B;

						function myFunction43B() {
							teste43B = teste43B + 1;
												   
							switch(teste43B){
								case 0:
								color43B = "white";
								break;
							
							case 1:
								color43B = "rgb(255, 0, 255)";
								break;
							

							default:
							color43B = "white";
							}
												   
							if(teste43B == 2){
								teste43B = 0;
							}
													
							document.getElementById("dente43B").style.borderTopColor = color43B;
							document.getElementById('dente43BValor').value = teste43B;
						}
					</script>


					<input type='hidden' id='dente43DValor' name='dente43D'>
					<script>
						var teste43D = 0;
						var color43D;

						function myFunction43D() {
							teste43D = teste43D + 1;
												   
							switch(teste43D){
								case 0:
								color43D = "white";
								break;
							
							case 1:
								color43D = "rgb(255, 0, 255)";
								break;
							

							default:
							color43D = "white";
							}
												   
							if(teste43D == 2){
								teste43D = 0;
							}
													
							document.getElementById("dente43D").style.borderTopColor = color43D;
							document.getElementById('dente43DValor').value = teste43D;
						}
					</script>

					<input type='hidden' id='dente43EValor' name='dente43E'>
					<script>
						var teste43E = 0;
						var color43E;

						function myFunction43E() {
							teste43E = teste43E + 1;
												   
							switch(teste43E){
								case 0:
								color43E = "white";
								break;
							
							case 1:
								color43E = "rgb(255, 0, 255)";
								break;
							

							default:
							color43E = "white";
							}
												   
							if(teste43E == 2){
								teste43E = 0;
							}
													
							document.getElementById("dente43E").style.borderBottomColor = color43E;
							document.getElementById('dente43EValor').value = teste43E;
						}
					</script>
					
					<input type='hidden' id='dente42AValor' name='dente42A'>
										<script>
						var teste42A = 0;
						var color42A;

						function myFunction42A() {
							teste42A = teste42A + 1;
												   
							switch(teste42A){
								case 0:
								color42A = "white";
								break;
							
							case 1:
								color42A = "rgb(255, 0, 255)";
								break;
							

							default:
							color42A = "white";
							}
												   
							if(teste42A == 2){
								teste42A = 0;
							}
													
							document.getElementById("dente42A").style.borderTopColor = color42A;
							document.getElementById('dente42AValor').value = teste42A;
						}
					</script>

					<input type='hidden' id='dente42BValor' name='dente42B'>
					<script>
						var teste42B = 0;
						var color42B;

						function myFunction42B() {
							teste42B = teste42B + 1;
												   
							switch(teste42B){
								case 0:
								color42B = "white";
								break;
							
							case 1:
								color42B = "rgb(255, 0, 255)";
								break;
							

							default:
							color42B = "white";
							}
												   
							if(teste42B == 2){
								teste42B = 0;
							}
													
							document.getElementById("dente42B").style.borderTopColor = color42B;
							document.getElementById('dente42BValor').value = teste42B;
						}
					</script>


					<input type='hidden' id='dente42DValor' name='dente42D'>
					<script>
						var teste42D = 0;
						var color42D;

						function myFunction42D() {
							teste42D = teste42D + 1;
												   
							switch(teste42D){
								case 0:
								color42D = "white";
								break;
							
							case 1:
								color42D = "rgb(255, 0, 255)";
								break;
							

							default:
							color42D = "white";
							}
												   
							if(teste42D == 2){
								teste42D = 0;
							}
													
							document.getElementById("dente42D").style.borderTopColor = color42D;
							document.getElementById('dente42DValor').value = teste42D;
						}
					</script>

					<input type='hidden' id='dente42EValor' name='dente42E'>
					<script>
						var teste42E = 0;
						var color42E;

						function myFunction42E() {
							teste42E = teste42E + 1;
												   
							switch(teste42E){
								case 0:
								color42E = "white";
								break;
							
							case 1:
								color42E = "rgb(255, 0, 255)";
								break;
							

							default:
							color42E = "white";
							}
												   
							if(teste42E == 2){
								teste42E = 0;
							}
													
							document.getElementById("dente42E").style.borderBottomColor = color42E;
							document.getElementById('dente42EValor').value = teste42E;
						}
					</script>
					
					<input type='hidden' id='dente41AValor' name='dente41A'>
										<script>
						var teste41A = 0;
						var color41A;

						function myFunction41A() {
							teste41A = teste41A + 1;
												   
							switch(teste41A){
								case 0:
								color41A = "white";
								break;
							
							case 1:
								color41A = "rgb(255, 0, 255)";
								break;
							

							default:
							color41A = "white";
							}
												   
							if(teste41A == 2){
								teste41A = 0;
							}
													
							document.getElementById("dente41A").style.borderTopColor = color41A;
							document.getElementById('dente41AValor').value = teste41A;
						}
					</script>

					<input type='hidden' id='dente41BValor' name='dente41B'>
					<script>
						var teste41B = 0;
						var color41B;

						function myFunction41B() {
							teste41B = teste41B + 1;
												   
							switch(teste41B){
								case 0:
								color41B = "white";
								break;
							
							case 1:
								color41B = "rgb(255, 0, 255)";
								break;
							

							default:
							color41B = "white";
							}
												   
							if(teste41B == 2){
								teste41B = 0;
							}
													
							document.getElementById("dente41B").style.borderTopColor = color41B;
							document.getElementById('dente41BValor').value = teste41B;
						}
					</script>


					<input type='hidden' id='dente41DValor' name='dente41D'>
					<script>
						var teste41D = 0;
						var color41D;

						function myFunction41D() {
							teste41D = teste41D + 1;
												   
							switch(teste41D){
								case 0:
								color41D = "white";
								break;
							
							case 1:
								color41D = "rgb(255, 0, 255)";
								break;
							

							default:
							color41D = "white";
							}
												   
							if(teste41D == 2){
								teste41D = 0;
							}
													
							document.getElementById("dente41D").style.borderTopColor = color41D;
							document.getElementById('dente41DValor').value = teste41D;
						}
					</script>

					<input type='hidden' id='dente41EValor' name='dente41E'>
					<script>
						var teste41E = 0;
						var color41E;

						function myFunction41E() {
							teste41E = teste41E + 1;
												   
							switch(teste41E){
								case 0:
								color41E = "white";
								break;
							
							case 1:
								color41E = "rgb(255, 0, 255)";
								break;
							

							default:
							color41E = "white";
							}
												   
							if(teste41E == 2){
								teste41E = 0;
							}
													
							document.getElementById("dente41E").style.borderBottomColor = color41E;
							document.getElementById('dente41EValor').value = teste41E;
						}
					</script>
					
					<input type='hidden' id='dente31AValor' name='dente31A'>
										<script>
						var teste31A = 0;
						var color31A;

						function myFunction31A() {
							teste31A = teste31A + 1;
												   
							switch(teste31A){
								case 0:
								color31A = "white";
								break;
							
							case 1:
								color31A = "rgb(255, 0, 255)";
								break;
							

							default:
							color31A = "white";
							}
												   
							if(teste31A == 2){
								teste31A = 0;
							}
													
							document.getElementById("dente31A").style.borderTopColor = color31A;
							document.getElementById('dente31AValor').value = teste31A;
						}
					</script>

					<input type='hidden' id='dente31BValor' name='dente31B'>
					<script>
						var teste31B = 0;
						var color31B;

						function myFunction31B() {
							teste31B = teste31B + 1;
												   
							switch(teste31B){
								case 0:
								color31B = "white";
								break;
							
							case 1:
								color31B = "rgb(255, 0, 255)";
								break;
							

							default:
							color31B = "white";
							}
												   
							if(teste31B == 2){
								teste31B = 0;
							}
													
							document.getElementById("dente31B").style.borderTopColor = color31B;
							document.getElementById('dente31BValor').value = teste31B;
						}
					</script>


					<input type='hidden' id='dente31DValor' name='dente31D'>
					<script>
						var teste31D = 0;
						var color31D;

						function myFunction31D() {
							teste31D = teste31D + 1;
												   
							switch(teste31D){
								case 0:
								color31D = "white";
								break;
							
							case 1:
								color31D = "rgb(255, 0, 255)";
								break;
							

							default:
							color31D = "white";
							}
												   
							if(teste31D == 2){
								teste31D = 0;
							}
													
							document.getElementById("dente31D").style.borderTopColor = color31D;
							document.getElementById('dente31DValor').value = teste31D;
						}
					</script>

					<input type='hidden' id='dente31EValor' name='dente31E'>
					<script>
						var teste31E = 0;
						var color31E;

						function myFunction31E() {
							teste31E = teste31E + 1;
												   
							switch(teste31E){
								case 0:
								color31E = "white";
								break;
							
							case 1:
								color31E = "rgb(255, 0, 255)";
								break;
							

							default:
							color31E = "white";
							}
												   
							if(teste31E == 2){
								teste31E = 0;
							}
													
							document.getElementById("dente31E").style.borderBottomColor = color31E;
							document.getElementById('dente31EValor').value = teste31E;
						}
					</script>
					
					<input type='hidden' id='dente32AValor' name='dente32A'>
										<script>
						var teste32A = 0;
						var color32A;

						function myFunction32A() {
							teste32A = teste32A + 1;
												   
							switch(teste32A){
								case 0:
								color32A = "white";
								break;
							
							case 1:
								color32A = "rgb(255, 0, 255)";
								break;
							

							default:
							color32A = "white";
							}
												   
							if(teste32A == 2){
								teste32A = 0;
							}
													
							document.getElementById("dente32A").style.borderTopColor = color32A;
							document.getElementById('dente32AValor').value = teste32A;
						}
					</script>

					<input type='hidden' id='dente32BValor' name='dente32B'>
					<script>
						var teste32B = 0;
						var color32B;

						function myFunction32B() {
							teste32B = teste32B + 1;
												   
							switch(teste32B){
								case 0:
								color32B = "white";
								break;
							
							case 1:
								color32B = "rgb(255, 0, 255)";
								break;
							

							default:
							color32B = "white";
							}
												   
							if(teste32B == 2){
								teste32B = 0;
							}
													
							document.getElementById("dente32B").style.borderTopColor = color32B;
							document.getElementById('dente32BValor').value = teste32B;
						}
					</script>


					<input type='hidden' id='dente32DValor' name='dente32D'>
					<script>
						var teste32D = 0;
						var color32D;

						function myFunction32D() {
							teste32D = teste32D + 1;
												   
							switch(teste32D){
								case 0:
								color32D = "white";
								break;
							
							case 1:
								color32D = "rgb(255, 0, 255)";
								break;
							

							default:
							color32D = "white";
							}
												   
							if(teste32D == 2){
								teste32D = 0;
							}
													
							document.getElementById("dente32D").style.borderTopColor = color32D;
							document.getElementById('dente32DValor').value = teste32D;
						}
					</script>

					<input type='hidden' id='dente32EValor' name='dente32E'>
					<script>
						var teste32E = 0;
						var color32E;

						function myFunction32E() {
							teste32E = teste32E + 1;
												   
							switch(teste32E){
								case 0:
								color32E = "white";
								break;
							
							case 1:
								color32E = "rgb(255, 0, 255)";
								break;
							

							default:
							color32E = "white";
							}
												   
							if(teste32E == 2){
								teste32E = 0;
							}
													
							document.getElementById("dente32E").style.borderBottomColor = color32E;
							document.getElementById('dente32EValor').value = teste32E;
						}
					</script>
					
					<input type='hidden' id='dente33AValor' name='dente33A'>
										<script>
						var teste33A = 0;
						var color33A;

						function myFunction33A() {
							teste33A = teste33A + 1;
												   
							switch(teste33A){
								case 0:
								color33A = "white";
								break;
							
							case 1:
								color33A = "rgb(255, 0, 255)";
								break;
							

							default:
							color33A = "white";
							}
												   
							if(teste33A == 2){
								teste33A = 0;
							}
													
							document.getElementById("dente33A").style.borderTopColor = color33A;
							document.getElementById('dente33AValor').value = teste33A;
						}
					</script>

					<input type='hidden' id='dente33BValor' name='dente33B'>
					<script>
						var teste33B = 0;
						var color33B;

						function myFunction33B() {
							teste33B = teste33B + 1;
												   
							switch(teste33B){
								case 0:
								color33B = "white";
								break;
							
							case 1:
								color33B = "rgb(255, 0, 255)";
								break;
							

							default:
							color33B = "white";
							}
												   
							if(teste33B == 2){
								teste33B = 0;
							}
													
							document.getElementById("dente33B").style.borderTopColor = color33B;
							document.getElementById('dente33BValor').value = teste33B;
						}
					</script>


					<input type='hidden' id='dente33DValor' name='dente33D'>
					<script>
						var teste33D = 0;
						var color33D;

						function myFunction33D() {
							teste33D = teste33D + 1;
												   
							switch(teste33D){
								case 0:
								color33D = "white";
								break;
							
							case 1:
								color33D = "rgb(255, 0, 255)";
								break;
							

							default:
							color33D = "white";
							}
												   
							if(teste33D == 2){
								teste33D = 0;
							}
													
							document.getElementById("dente33D").style.borderTopColor = color33D;
							document.getElementById('dente33DValor').value = teste33D;
						}
					</script>

					<input type='hidden' id='dente33EValor' name='dente33E'>
					<script>
						var teste33E = 0;
						var color33E;

						function myFunction33E() {
							teste33E = teste33E + 1;
												   
							switch(teste33E){
								case 0:
								color33E = "white";
								break;
							
							case 1:
								color33E = "rgb(255, 0, 255)";
								break;
							

							default:
							color33E = "white";
							}
												   
							if(teste33E == 2){
								teste33E = 0;
							}
													
							document.getElementById("dente33E").style.borderBottomColor = color33E;
							document.getElementById('dente33EValor').value = teste33E;
						}
					</script>
					
					<input type='hidden' id='dente34AValor' name='dente34A'>
										<script>
						var teste34A = 0;
						var color34A;

						function myFunction34A() {
							teste34A = teste34A + 1;
												   
							switch(teste34A){
								case 0:
								color34A = "white";
								break;
							
							case 1:
								color34A = "rgb(255, 0, 255)";
								break;
							

							default:
							color34A = "white";
							}
												   
							if(teste34A == 2){
								teste34A = 0;
							}
													
							document.getElementById("dente34A").style.borderTopColor = color34A;
							document.getElementById('dente34AValor').value = teste34A;
						}
					</script>

					<input type='hidden' id='dente34BValor' name='dente34B'>
					<script>
						var teste34B = 0;
						var color34B;

						function myFunction34B() {
							teste34B = teste34B + 1;
												   
							switch(teste34B){
								case 0:
								color34B = "white";
								break;
							
							case 1:
								color34B = "rgb(255, 0, 255)";
								break;
							

							default:
							color34B = "white";
							}
												   
							if(teste34B == 2){
								teste34B = 0;
							}
													
							document.getElementById("dente34B").style.borderTopColor = color34B;
							document.getElementById('dente34BValor').value = teste34B;
						}
					</script>


					<input type='hidden' id='dente34DValor' name='dente34D'>
					<script>
						var teste34D = 0;
						var color34D;

						function myFunction34D() {
							teste34D = teste34D + 1;
												   
							switch(teste34D){
								case 0:
								color34D = "white";
								break;
							
							case 1:
								color34D = "rgb(255, 0, 255)";
								break;
							

							default:
							color34D = "white";
							}
												   
							if(teste34D == 2){
								teste34D = 0;
							}
													
							document.getElementById("dente34D").style.borderTopColor = color34D;
							document.getElementById('dente34DValor').value = teste34D;
						}
					</script>

					<input type='hidden' id='dente34EValor' name='dente34E'>
					<script>
						var teste34E = 0;
						var color34E;

						function myFunction34E() {
							teste34E = teste34E + 1;
												   
							switch(teste34E){
								case 0:
								color34E = "white";
								break;
							
							case 1:
								color34E = "rgb(255, 0, 255)";
								break;
							

							default:
							color34E = "white";
							}
												   
							if(teste34E == 2){
								teste34E = 0;
							}
													
							document.getElementById("dente34E").style.borderBottomColor = color34E;
							document.getElementById('dente34EValor').value = teste34E;
						}
					</script>
					
					<input type='hidden' id='dente35AValor' name='dente35A'>
										<script>
						var teste35A = 0;
						var color35A;

						function myFunction35A() {
							teste35A = teste35A + 1;
												   
							switch(teste35A){
								case 0:
								color35A = "white";
								break;
							
							case 1:
								color35A = "rgb(255, 0, 255)";
								break;
							

							default:
							color35A = "white";
							}
												   
							if(teste35A == 2){
								teste35A = 0;
							}
													
							document.getElementById("dente35A").style.borderTopColor = color35A;
							document.getElementById('dente35AValor').value = teste35A;
						}
					</script>

					<input type='hidden' id='dente35BValor' name='dente35B'>
					<script>
						var teste35B = 0;
						var color35B;

						function myFunction35B() {
							teste35B = teste35B + 1;
												   
							switch(teste35B){
								case 0:
								color35B = "white";
								break;
							
							case 1:
								color35B = "rgb(255, 0, 255)";
								break;
							

							default:
							color35B = "white";
							}
												   
							if(teste35B == 2){
								teste35B = 0;
							}
													
							document.getElementById("dente35B").style.borderTopColor = color35B;
							document.getElementById('dente35BValor').value = teste35B;
						}
					</script>


					<input type='hidden' id='dente35DValor' name='dente35D'>
					<script>
						var teste35D = 0;
						var color35D;

						function myFunction35D() {
							teste35D = teste35D + 1;
												   
							switch(teste35D){
								case 0:
								color35D = "white";
								break;
							
							case 1:
								color35D = "rgb(255, 0, 255)";
								break;
							

							default:
							color35D = "white";
							}
												   
							if(teste35D == 2){
								teste35D = 0;
							}
													
							document.getElementById("dente35D").style.borderTopColor = color35D;
							document.getElementById('dente35DValor').value = teste35D;
						}
					</script>

					<input type='hidden' id='dente35EValor' name='dente35E'>
					<script>
						var teste35E = 0;
						var color35E;

						function myFunction35E() {
							teste35E = teste35E + 1;
												   
							switch(teste35E){
								case 0:
								color35E = "white";
								break;
							
							case 1:
								color35E = "rgb(255, 0, 255)";
								break;
							

							default:
							color35E = "white";
							}
												   
							if(teste35E == 2){
								teste35E = 0;
							}
													
							document.getElementById("dente35E").style.borderBottomColor = color35E;
							document.getElementById('dente35EValor').value = teste35E;
						}
					</script>
					
					<input type='hidden' id='dente36AValor' name='dente36A'>
										<script>
						var teste36A = 0;
						var color36A;

						function myFunction36A() {
							teste36A = teste36A + 1;
												   
							switch(teste36A){
								case 0:
								color36A = "white";
								break;
							
							case 1:
								color36A = "rgb(255, 0, 255)";
								break;
							

							default:
							color36A = "white";
							}
												   
							if(teste36A == 2){
								teste36A = 0;
							}
													
							document.getElementById("dente36A").style.borderTopColor = color36A;
							document.getElementById('dente36AValor').value = teste36A;
						}
					</script>

					<input type='hidden' id='dente36BValor' name='dente36B'>
					<script>
						var teste36B = 0;
						var color36B;

						function myFunction36B() {
							teste36B = teste36B + 1;
												   
							switch(teste36B){
								case 0:
								color36B = "white";
								break;
							
							case 1:
								color36B = "rgb(255, 0, 255)";
								break;
							

							default:
							color36B = "white";
							}
												   
							if(teste36B == 2){
								teste36B = 0;
							}
													
							document.getElementById("dente36B").style.borderTopColor = color36B;
							document.getElementById('dente36BValor').value = teste36B;
						}
					</script>


					<input type='hidden' id='dente36DValor' name='dente36D'>
					<script>
						var teste36D = 0;
						var color36D;

						function myFunction36D() {
							teste36D = teste36D + 1;
												   
							switch(teste36D){
								case 0:
								color36D = "white";
								break;
							
							case 1:
								color36D = "rgb(255, 0, 255)";
								break;
							

							default:
							color36D = "white";
							}
												   
							if(teste36D == 2){
								teste36D = 0;
							}
													
							document.getElementById("dente36D").style.borderTopColor = color36D;
							document.getElementById('dente36DValor').value = teste36D;
						}
					</script>

					<input type='hidden' id='dente36EValor' name='dente36E'>
					<script>
						var teste36E = 0;
						var color36E;

						function myFunction36E() {
							teste36E = teste36E + 1;
												   
							switch(teste36E){
								case 0:
								color36E = "white";
								break;
							
							case 1:
								color36E = "rgb(255, 0, 255)";
								break;
							

							default:
							color36E = "white";
							}
												   
							if(teste36E == 2){
								teste36E = 0;
							}
													
							document.getElementById("dente36E").style.borderBottomColor = color36E;
							document.getElementById('dente36EValor').value = teste36E;
						}
					</script>
					
					<input type='hidden' id='dente37AValor' name='dente37A'>
										<script>
						var teste37A = 0;
						var color37A;

						function myFunction37A() {
							teste37A = teste37A + 1;
												   
							switch(teste37A){
								case 0:
								color37A = "white";
								break;
							
							case 1:
								color37A = "rgb(255, 0, 255)";
								break;
							

							default:
							color37A = "white";
							}
												   
							if(teste37A == 2){
								teste37A = 0;
							}
													
							document.getElementById("dente37A").style.borderTopColor = color37A;
							document.getElementById('dente37AValor').value = teste37A;
						}
					</script>

					<input type='hidden' id='dente37BValor' name='dente37B'>
					<script>
						var teste37B = 0;
						var color37B;

						function myFunction37B() {
							teste37B = teste37B + 1;
												   
							switch(teste37B){
								case 0:
								color37B = "white";
								break;
							
							case 1:
								color37B = "rgb(255, 0, 255)";
								break;
							

							default:
							color37B = "white";
							}
												   
							if(teste37B == 2){
								teste37B = 0;
							}
													
							document.getElementById("dente37B").style.borderTopColor = color37B;
							document.getElementById('dente37BValor').value = teste37B;
						}
					</script>


					<input type='hidden' id='dente37DValor' name='dente37D'>
					<script>
						var teste37D = 0;
						var color37D;

						function myFunction37D() {
							teste37D = teste37D + 1;
												   
							switch(teste37D){
								case 0:
								color37D = "white";
								break;
							
							case 1:
								color37D = "rgb(255, 0, 255)";
								break;
							

							default:
							color37D = "white";
							}
												   
							if(teste37D == 2){
								teste37D = 0;
							}
													
							document.getElementById("dente37D").style.borderTopColor = color37D;
							document.getElementById('dente37DValor').value = teste37D;
						}
					</script>

					<input type='hidden' id='dente37EValor' name='dente37E'>
					<script>
						var teste37E = 0;
						var color37E;

						function myFunction37E() {
							teste37E = teste37E + 1;
												   
							switch(teste37E){
								case 0:
								color37E = "white";
								break;
							
							case 1:
								color37E = "rgb(255, 0, 255)";
								break;
							

							default:
							color37E = "white";
							}
												   
							if(teste37E == 2){
								teste37E = 0;
							}
													
							document.getElementById("dente37E").style.borderBottomColor = color37E;
							document.getElementById('dente37EValor').value = teste37E;
						}
					</script>
					
					<input type='hidden' id='dente38AValor' name='dente38A'>
										<script>
						var teste38A = 0;
						var color38A;

						function myFunction38A() {
							teste38A = teste38A + 1;
												   
							switch(teste38A){
								case 0:
								color38A = "white";
								break;
							
							case 1:
								color38A = "rgb(255, 0, 255)";
								break;
							

							default:
							color38A = "white";
							}
												   
							if(teste38A == 2){
								teste38A = 0;
							}
													
							document.getElementById("dente38A").style.borderTopColor = color38A;
							document.getElementById('dente38AValor').value = teste38A;
						}
					</script>

					<input type='hidden' id='dente38BValor' name='dente38B'>
					<script>
						var teste38B = 0;
						var color38B;

						function myFunction38B() {
							teste38B = teste38B + 1;
												   
							switch(teste38B){
								case 0:
								color38B = "white";
								break;
							
							case 1:
								color38B = "rgb(255, 0, 255)";
								break;
							

							default:
							color38B = "white";
							}
												   
							if(teste38B == 2){
								teste38B = 0;
							}
													
							document.getElementById("dente38B").style.borderTopColor = color38B;
							document.getElementById('dente38BValor').value = teste38B;
						}
					</script>


					<input type='hidden' id='dente38DValor' name='dente38D'>
					<script>
						var teste38D = 0;
						var color38D;

						function myFunction38D() {
							teste38D = teste38D + 1;
												   
							switch(teste38D){
								case 0:
								color38D = "white";
								break;
							
							case 1:
								color38D = "rgb(255, 0, 255)";
								break;
							

							default:
							color38D = "white";
							}
												   
							if(teste38D == 2){
								teste38D = 0;
							}
													
							document.getElementById("dente38D").style.borderTopColor = color38D;
							document.getElementById('dente38DValor').value = teste38D;
						}
					</script>

					<input type='hidden' id='dente38EValor' name='dente38E'>
					<script>
						var teste38E = 0;
						var color38E;

						function myFunction38E() {
							teste38E = teste38E + 1;
												   
							switch(teste38E){
								case 0:
								color38E = "white";
								break;
							
							case 1:
								color38E = "rgb(255, 0, 255)";
								break;
							

							default:
							color38E = "white";
							}
												   
							if(teste38E == 2){
								teste38E = 0;
							}
													
							document.getElementById("dente38E").style.borderBottomColor = color38E;
							document.getElementById('dente38EValor').value = teste38E;
						}
					</script>
					
					<!-- ############### Fim Recolhimento de Informações ############### -->
					
					
					
					
					<br><input type='submit' value='Salvar'  class="genric-btn primary">
					</form>
				</center>	
			<section class="price-area " id="price">
				<div class="container">	
						<hr>							
				</div>	
			</section>
			
				<center>
					<div id='accordion' style='width:95%;'>
						<?php
								$sqlNome = "SELECT * FROM tb_placa WHERE nr_cpfPaciente ='".$_GET['cpf']."' ORDER BY dt_data";
								$resultadoNome = mysql_query($sqlNome) or die();
								while($linhaNome = mysql_fetch_array($resultadoNome)){
									$cpfPaciente = $linhaNome['nr_cpfPaciente'];
									$disciplina = $linhaNome['nm_disciplina'];
									$cpfProf = $linhaNome['nr_cpfProfessor'];
									$data = $linhaNome['dt_data'];
									$idDupla = $linhaNome['nr_idDupla'];
									switch($linhaNome['1']){ case '0': $cor1 = 'white'; break; case '1': $cor1 = 'rgb(255, 0, 255)'; break; case '3': $cor1 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['2']){ case '0': $cor2 = 'white'; break; case '1': $cor2 = 'rgb(255, 0, 255)'; break; case '3': $cor2 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['3']){ case '0': $cor3 = 'white'; break; case '1': $cor3 = 'rgb(255, 0, 255)'; break; case '3': $cor3 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['4']){ case '0': $cor4 = 'white'; break; case '1': $cor4 = 'rgb(255, 0, 255)'; break; case '3': $cor4 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['5']){ case '0': $cor5 = 'white'; break; case '1': $cor5 = 'rgb(255, 0, 255)'; break; case '3': $cor5 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['6']){ case '0': $cor6 = 'white'; break; case '1': $cor6 = 'rgb(255, 0, 255)'; break; case '3': $cor6 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['7']){ case '0': $cor7 = 'white'; break; case '1': $cor7 = 'rgb(255, 0, 255)'; break; case '3': $cor7 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['8']){ case '0': $cor8 = 'white'; break; case '1': $cor8 = 'rgb(255, 0, 255)'; break; case '3': $cor8 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['9']){ case '0': $cor9 = 'white'; break; case '1': $cor9 = 'rgb(255, 0, 255)'; break; case '3': $cor9 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['10']){ case '0': $cor10 = 'white'; break; case '1': $cor10 = 'rgb(255, 0, 255)'; break; case '3': $cor10 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['11']){ case '0': $cor11 = 'white'; break; case '1': $cor11 = 'rgb(255, 0, 255)'; break; case '3': $cor11 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['12']){ case '0': $cor12 = 'white'; break; case '1': $cor12 = 'rgb(255, 0, 255)'; break; case '3': $cor12 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['13']){ case '0': $cor13 = 'white'; break; case '1': $cor13 = 'rgb(255, 0, 255)'; break; case '3': $cor13 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['14']){ case '0': $cor14 = 'white'; break; case '1': $cor14 = 'rgb(255, 0, 255)'; break; case '3': $cor14 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['15']){ case '0': $cor15 = 'white'; break; case '1': $cor15 = 'rgb(255, 0, 255)'; break; case '3': $cor15 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['16']){ case '0': $cor16 = 'white'; break; case '1': $cor16 = 'rgb(255, 0, 255)'; break; case '3': $cor16 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['17']){ case '0': $cor17 = 'white'; break; case '1': $cor17 = 'rgb(255, 0, 255)'; break; case '3': $cor17 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['18']){ case '0': $cor18 = 'white'; break; case '1': $cor18 = 'rgb(255, 0, 255)'; break; case '3': $cor18 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['19']){ case '0': $cor19 = 'white'; break; case '1': $cor19 = 'rgb(255, 0, 255)'; break; case '3': $cor19 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['20']){ case '0': $cor20 = 'white'; break; case '1': $cor20 = 'rgb(255, 0, 255)'; break; case '3': $cor20 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['21']){ case '0': $cor21 = 'white'; break; case '1': $cor21 = 'rgb(255, 0, 255)'; break; case '3': $cor21 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['22']){ case '0': $cor22 = 'white'; break; case '1': $cor22 = 'rgb(255, 0, 255)'; break; case '3': $cor22 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['23']){ case '0': $cor23 = 'white'; break; case '1': $cor23 = 'rgb(255, 0, 255)'; break; case '3': $cor23 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['24']){ case '0': $cor24 = 'white'; break; case '1': $cor24 = 'rgb(255, 0, 255)'; break; case '3': $cor24 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['25']){ case '0': $cor25 = 'white'; break; case '1': $cor25 = 'rgb(255, 0, 255)'; break; case '3': $cor25 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['26']){ case '0': $cor26 = 'white'; break; case '1': $cor26 = 'rgb(255, 0, 255)'; break; case '3': $cor26 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['27']){ case '0': $cor27 = 'white'; break; case '1': $cor27 = 'rgb(255, 0, 255)'; break; case '3': $cor27 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['28']){ case '0': $cor28 = 'white'; break; case '1': $cor28 = 'rgb(255, 0, 255)'; break; case '3': $cor28 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['29']){ case '0': $cor29 = 'white'; break; case '1': $cor29 = 'rgb(255, 0, 255)'; break; case '3': $cor29 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['30']){ case '0': $cor30 = 'white'; break; case '1': $cor30 = 'rgb(255, 0, 255)'; break; case '3': $cor30 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['31']){ case '0': $cor31 = 'white'; break; case '1': $cor31 = 'rgb(255, 0, 255)'; break; case '3': $cor31 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['32']){ case '0': $cor32 = 'white'; break; case '1': $cor32 = 'rgb(255, 0, 255)'; break; case '3': $cor32 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['33']){ case '0': $cor33 = 'white'; break; case '1': $cor33 = 'rgb(255, 0, 255)'; break; case '3': $cor33 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['34']){ case '0': $cor34 = 'white'; break; case '1': $cor34 = 'rgb(255, 0, 255)'; break; case '3': $cor34 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['35']){ case '0': $cor35 = 'white'; break; case '1': $cor35 = 'rgb(255, 0, 255)'; break; case '3': $cor35 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['36']){ case '0': $cor36 = 'white'; break; case '1': $cor36 = 'rgb(255, 0, 255)'; break; case '3': $cor36 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['37']){ case '0': $cor37 = 'white'; break; case '1': $cor37 = 'rgb(255, 0, 255)'; break; case '3': $cor37 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['38']){ case '0': $cor38 = 'white'; break; case '1': $cor38 = 'rgb(255, 0, 255)'; break; case '3': $cor38 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['39']){ case '0': $cor39 = 'white'; break; case '1': $cor39 = 'rgb(255, 0, 255)'; break; case '3': $cor39 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['40']){ case '0': $cor40 = 'white'; break; case '1': $cor40 = 'rgb(255, 0, 255)'; break; case '3': $cor40 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['41']){ case '0': $cor41 = 'white'; break; case '1': $cor41 = 'rgb(255, 0, 255)'; break; case '3': $cor41 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['42']){ case '0': $cor42 = 'white'; break; case '1': $cor42 = 'rgb(255, 0, 255)'; break; case '3': $cor42 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['43']){ case '0': $cor43 = 'white'; break; case '1': $cor43 = 'rgb(255, 0, 255)'; break; case '3': $cor43 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['44']){ case '0': $cor44 = 'white'; break; case '1': $cor44 = 'rgb(255, 0, 255)'; break; case '3': $cor44 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['45']){ case '0': $cor45 = 'white'; break; case '1': $cor45 = 'rgb(255, 0, 255)'; break; case '3': $cor45 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['46']){ case '0': $cor46 = 'white'; break; case '1': $cor46 = 'rgb(255, 0, 255)'; break; case '3': $cor46 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['47']){ case '0': $cor47 = 'white'; break; case '1': $cor47 = 'rgb(255, 0, 255)'; break; case '3': $cor47 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['48']){ case '0': $cor48 = 'white'; break; case '1': $cor48 = 'rgb(255, 0, 255)'; break; case '3': $cor48 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['49']){ case '0': $cor49 = 'white'; break; case '1': $cor49 = 'rgb(255, 0, 255)'; break; case '3': $cor49 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['50']){ case '0': $cor50 = 'white'; break; case '1': $cor50 = 'rgb(255, 0, 255)'; break; case '3': $cor50 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['51']){ case '0': $cor51 = 'white'; break; case '1': $cor51 = 'rgb(255, 0, 255)'; break; case '3': $cor51 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['52']){ case '0': $cor52 = 'white'; break; case '1': $cor52 = 'rgb(255, 0, 255)'; break; case '3': $cor52 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['53']){ case '0': $cor53 = 'white'; break; case '1': $cor53 = 'rgb(255, 0, 255)'; break; case '3': $cor53 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['54']){ case '0': $cor54 = 'white'; break; case '1': $cor54 = 'rgb(255, 0, 255)'; break; case '3': $cor54 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['55']){ case '0': $cor55 = 'white'; break; case '1': $cor55 = 'rgb(255, 0, 255)'; break; case '3': $cor55 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['56']){ case '0': $cor56 = 'white'; break; case '1': $cor56 = 'rgb(255, 0, 255)'; break; case '3': $cor56 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['57']){ case '0': $cor57 = 'white'; break; case '1': $cor57 = 'rgb(255, 0, 255)'; break; case '3': $cor57 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['58']){ case '0': $cor58 = 'white'; break; case '1': $cor58 = 'rgb(255, 0, 255)'; break; case '3': $cor58 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['59']){ case '0': $cor59 = 'white'; break; case '1': $cor59 = 'rgb(255, 0, 255)'; break; case '3': $cor59 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['60']){ case '0': $cor60 = 'white'; break; case '1': $cor60 = 'rgb(255, 0, 255)'; break; case '3': $cor60 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['61']){ case '0': $cor61 = 'white'; break; case '1': $cor61 = 'rgb(255, 0, 255)'; break; case '3': $cor61 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['62']){ case '0': $cor62 = 'white'; break; case '1': $cor62 = 'rgb(255, 0, 255)'; break; case '3': $cor62 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['63']){ case '0': $cor63 = 'white'; break; case '1': $cor63 = 'rgb(255, 0, 255)'; break; case '3': $cor63 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['64']){ case '0': $cor64 = 'white'; break; case '1': $cor64 = 'rgb(255, 0, 255)'; break; case '3': $cor64 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['65']){ case '0': $cor65 = 'white'; break; case '1': $cor65 = 'rgb(255, 0, 255)'; break; case '3': $cor65 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['66']){ case '0': $cor66 = 'white'; break; case '1': $cor66 = 'rgb(255, 0, 255)'; break; case '3': $cor66 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['67']){ case '0': $cor67 = 'white'; break; case '1': $cor67 = 'rgb(255, 0, 255)'; break; case '3': $cor67 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['68']){ case '0': $cor68 = 'white'; break; case '1': $cor68 = 'rgb(255, 0, 255)'; break; case '3': $cor68 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['69']){ case '0': $cor69 = 'white'; break; case '1': $cor69 = 'rgb(255, 0, 255)'; break; case '3': $cor69 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['70']){ case '0': $cor70 = 'white'; break; case '1': $cor70 = 'rgb(255, 0, 255)'; break; case '3': $cor70 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['71']){ case '0': $cor71 = 'white'; break; case '1': $cor71 = 'rgb(255, 0, 255)'; break; case '3': $cor71 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['72']){ case '0': $cor72 = 'white'; break; case '1': $cor72 = 'rgb(255, 0, 255)'; break; case '3': $cor72 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['73']){ case '0': $cor73 = 'white'; break; case '1': $cor73 = 'rgb(255, 0, 255)'; break; case '3': $cor73 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['74']){ case '0': $cor74 = 'white'; break; case '1': $cor74 = 'rgb(255, 0, 255)'; break; case '3': $cor74 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['75']){ case '0': $cor75 = 'white'; break; case '1': $cor75 = 'rgb(255, 0, 255)'; break; case '3': $cor75 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['76']){ case '0': $cor76 = 'white'; break; case '1': $cor76 = 'rgb(255, 0, 255)'; break; case '3': $cor76 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['77']){ case '0': $cor77 = 'white'; break; case '1': $cor77 = 'rgb(255, 0, 255)'; break; case '3': $cor77 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['78']){ case '0': $cor78 = 'white'; break; case '1': $cor78 = 'rgb(255, 0, 255)'; break; case '3': $cor78 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['79']){ case '0': $cor79 = 'white'; break; case '1': $cor79 = 'rgb(255, 0, 255)'; break; case '3': $cor79 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['80']){ case '0': $cor80 = 'white'; break; case '1': $cor80 = 'rgb(255, 0, 255)'; break; case '3': $cor80 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['81']){ case '0': $cor81 = 'white'; break; case '1': $cor81 = 'rgb(255, 0, 255)'; break; case '3': $cor81 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['82']){ case '0': $cor82 = 'white'; break; case '1': $cor82 = 'rgb(255, 0, 255)'; break; case '3': $cor82 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['83']){ case '0': $cor83 = 'white'; break; case '1': $cor83 = 'rgb(255, 0, 255)'; break; case '3': $cor83 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['84']){ case '0': $cor84 = 'white'; break; case '1': $cor84 = 'rgb(255, 0, 255)'; break; case '3': $cor84 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['85']){ case '0': $cor85 = 'white'; break; case '1': $cor85 = 'rgb(255, 0, 255)'; break; case '3': $cor85 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['86']){ case '0': $cor86 = 'white'; break; case '1': $cor86 = 'rgb(255, 0, 255)'; break; case '3': $cor86 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['87']){ case '0': $cor87 = 'white'; break; case '1': $cor87 = 'rgb(255, 0, 255)'; break; case '3': $cor87 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['88']){ case '0': $cor88 = 'white'; break; case '1': $cor88 = 'rgb(255, 0, 255)'; break; case '3': $cor88 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['89']){ case '0': $cor89 = 'white'; break; case '1': $cor89 = 'rgb(255, 0, 255)'; break; case '3': $cor89 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['90']){ case '0': $cor90 = 'white'; break; case '1': $cor90 = 'rgb(255, 0, 255)'; break; case '3': $cor90 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['91']){ case '0': $cor91 = 'white'; break; case '1': $cor91 = 'rgb(255, 0, 255)'; break; case '3': $cor91 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['92']){ case '0': $cor92 = 'white'; break; case '1': $cor92 = 'rgb(255, 0, 255)'; break; case '3': $cor92 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['93']){ case '0': $cor93 = 'white'; break; case '1': $cor93 = 'rgb(255, 0, 255)'; break; case '3': $cor93 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['94']){ case '0': $cor94 = 'white'; break; case '1': $cor94 = 'rgb(255, 0, 255)'; break; case '3': $cor94 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['95']){ case '0': $cor95 = 'white'; break; case '1': $cor95 = 'rgb(255, 0, 255)'; break; case '3': $cor95 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['96']){ case '0': $cor96 = 'white'; break; case '1': $cor96 = 'rgb(255, 0, 255)'; break; case '3': $cor96 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['97']){ case '0': $cor97 = 'white'; break; case '1': $cor97 = 'rgb(255, 0, 255)'; break; case '3': $cor97 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['98']){ case '0': $cor98 = 'white'; break; case '1': $cor98 = 'rgb(255, 0, 255)'; break; case '3': $cor98 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['99']){ case '0': $cor99 = 'white'; break; case '1': $cor99 = 'rgb(255, 0, 255)'; break; case '3': $cor99 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['100']){ case '0': $cor100 = 'white'; break; case '1': $cor100 = 'rgb(255, 0, 255)'; break; case '3': $cor100 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['101']){ case '0': $cor101 = 'white'; break; case '1': $cor101 = 'rgb(255, 0, 255)'; break; case '3': $cor101 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['102']){ case '0': $cor102 = 'white'; break; case '1': $cor102 = 'rgb(255, 0, 255)'; break; case '3': $cor102 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['103']){ case '0': $cor103 = 'white'; break; case '1': $cor103 = 'rgb(255, 0, 255)'; break; case '3': $cor103 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['104']){ case '0': $cor104 = 'white'; break; case '1': $cor104 = 'rgb(255, 0, 255)'; break; case '3': $cor104 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['105']){ case '0': $cor105 = 'white'; break; case '1': $cor105 = 'rgb(255, 0, 255)'; break; case '3': $cor105 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['106']){ case '0': $cor106 = 'white'; break; case '1': $cor106 = 'rgb(255, 0, 255)'; break; case '3': $cor106 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['107']){ case '0': $cor107 = 'white'; break; case '1': $cor107 = 'rgb(255, 0, 255)'; break; case '3': $cor107 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['108']){ case '0': $cor108 = 'white'; break; case '1': $cor108 = 'rgb(255, 0, 255)'; break; case '3': $cor108 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['109']){ case '0': $cor109 = 'white'; break; case '1': $cor109 = 'rgb(255, 0, 255)'; break; case '3': $cor109 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['110']){ case '0': $cor110 = 'white'; break; case '1': $cor110 = 'rgb(255, 0, 255)'; break; case '3': $cor110 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['111']){ case '0': $cor111 = 'white'; break; case '1': $cor111 = 'rgb(255, 0, 255)'; break; case '3': $cor111 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['112']){ case '0': $cor112 = 'white'; break; case '1': $cor112 = 'rgb(255, 0, 255)'; break; case '3': $cor112 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['113']){ case '0': $cor113 = 'white'; break; case '1': $cor113 = 'rgb(255, 0, 255)'; break; case '3': $cor113 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['114']){ case '0': $cor114 = 'white'; break; case '1': $cor114 = 'rgb(255, 0, 255)'; break; case '3': $cor114 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['115']){ case '0': $cor115 = 'white'; break; case '1': $cor115 = 'rgb(255, 0, 255)'; break; case '3': $cor115 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['116']){ case '0': $cor116 = 'white'; break; case '1': $cor116 = 'rgb(255, 0, 255)'; break; case '3': $cor116 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['117']){ case '0': $cor117 = 'white'; break; case '1': $cor117 = 'rgb(255, 0, 255)'; break; case '3': $cor117 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['118']){ case '0': $cor118 = 'white'; break; case '1': $cor118 = 'rgb(255, 0, 255)'; break; case '3': $cor118 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['119']){ case '0': $cor119 = 'white'; break; case '1': $cor119 = 'rgb(255, 0, 255)'; break; case '3': $cor119 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['120']){ case '0': $cor120 = 'white'; break; case '1': $cor120 = 'rgb(255, 0, 255)'; break; case '3': $cor120 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['121']){ case '0': $cor121 = 'white'; break; case '1': $cor121 = 'rgb(255, 0, 255)'; break; case '3': $cor121 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['122']){ case '0': $cor122 = 'white'; break; case '1': $cor122 = 'rgb(255, 0, 255)'; break; case '3': $cor122 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['123']){ case '0': $cor123 = 'white'; break; case '1': $cor123 = 'rgb(255, 0, 255)'; break; case '3': $cor123 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['124']){ case '0': $cor124 = 'white'; break; case '1': $cor124 = 'rgb(255, 0, 255)'; break; case '3': $cor124 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['125']){ case '0': $cor125 = 'white'; break; case '1': $cor125 = 'rgb(255, 0, 255)'; break; case '3': $cor125 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['126']){ case '0': $cor126 = 'white'; break; case '1': $cor126 = 'rgb(255, 0, 255)'; break; case '3': $cor126 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['127']){ case '0': $cor127 = 'white'; break; case '1': $cor127 = 'rgb(255, 0, 255)'; break; case '3': $cor127 = 'rgb(207, 207, 212)'; break;}
									switch($linhaNome['128']){ case '0': $cor128 = 'white'; break; case '1': $cor128 = 'rgb(255, 0, 255)'; break; case '3': $cor128 = 'rgb(207, 207, 212)'; break;}
									
									$numeroDentes = 0;
									$b = 0;
									$sqlNome3 = "SELECT * FROM tb_placa WHERE nr_idPlaca = ".$linhaNome['nr_idPlaca'];
									$resultadoNome3 = mysql_query($sqlNome3) or die();
									while($linhaNome3 = mysql_fetch_array($resultadoNome3)){
										if($linhaNome3['1'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['1'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['2'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['2'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['3'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['3'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['4'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['4'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['5'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['5'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['6'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['6'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['7'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['7'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['8'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['8'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['9'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['9'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['10'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['10'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['11'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['11'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['12'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['12'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['13'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['13'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['14'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['14'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['15'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['15'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['16'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['16'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['17'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['17'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['18'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['18'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['19'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['19'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['20'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['20'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['21'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['21'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['22'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['22'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['23'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['23'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['24'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['24'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['25'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['25'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['26'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['26'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['27'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['27'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['28'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['28'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['29'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['29'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['30'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['30'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['31'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['31'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['32'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['32'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['33'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['33'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['34'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['34'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['35'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['35'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['36'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['36'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['37'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['37'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['38'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['38'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['39'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['39'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['40'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['40'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['41'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['41'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['42'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['42'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['43'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['43'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['44'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['44'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['45'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['45'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['46'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['46'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['47'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['47'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['48'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['48'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['49'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['49'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['50'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['50'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['51'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['51'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['52'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['52'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['53'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['53'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['54'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['54'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['55'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['55'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['56'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['56'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['57'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['57'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['58'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['58'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['59'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['59'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['60'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['60'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['61'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['61'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['62'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['62'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['63'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['63'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['64'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['64'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['65'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['65'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['66'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['66'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['67'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['67'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['68'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['68'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['69'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['69'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['70'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['70'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['71'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['71'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['72'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['72'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['73'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['73'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['74'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['74'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['75'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['75'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['76'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['76'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['77'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['77'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['78'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['78'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['79'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['79'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['80'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['80'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['81'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['81'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['82'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['82'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['83'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['83'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['84'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['84'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['85'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['85'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['86'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['86'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['87'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['87'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['88'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['88'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['89'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['89'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['90'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['90'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['91'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['91'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['92'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['92'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['93'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['93'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['94'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['94'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['95'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['95'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['96'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['96'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['97'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['97'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['98'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['98'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['99'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['99'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['100'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['100'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['101'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['101'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['102'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['102'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['103'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['103'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['104'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['104'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['105'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['105'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['106'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['106'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['107'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['107'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['108'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['108'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['109'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['109'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['110'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['110'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['111'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['111'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['112'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['112'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['113'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['113'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['114'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['114'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['115'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['115'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['116'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['116'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['117'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['117'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['118'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['118'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['119'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['119'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['120'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['120'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['121'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['121'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['122'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['122'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['123'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['123'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['124'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['124'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['125'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['125'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['126'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['126'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['127'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['127'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} } 
										if($linhaNome3['128'] == '1'){ $b = $b + 1; }else{ if($linhaNome3['128'] == '3'){$numeroDentes = $numeroDentes + 1; }else{} }

									}
									
									if($numeroDentes == 0){
										$dentesPresentes = 32;
									}else{
										$dentesPresentes = (32-(($numeroDentes+1)/4));
									}
									
									$indice = ($b * 100)/($dentesPresentes * 4);
									
									
									if($indice < 12){$badge = "Aceitável";}else{}
									if($indice == '0'){$badge = "Aceitável";}else{}
									if($indice == '12'){$badge = "Aceitável";}else{}
									
									if(13 < $indice){$badge = "Questionável";}else{}
									if($indice == '13'){$badge = "Questionável";}else{}
									if($indice == '23'){$badge = "Questionável";}else{}
									
									if($indice > '24'){$badge = "Deficiente";}else{}
									if($indice == '24'){$badge = "Deficiente";}else{}
									
									
									
									echo "<br>
									
									
									<div class='card'>
										<div class='card-header' id='headingOne'>
										  <h5 class='mb-0'>
											<button class='btn btn-link' style='color:red;' data-toggle='collapse' data-target='#collapseOne".$linhaNome['nr_idPlaca']."' aria-expanded='true' aria-controls='collapseOne'>
											  Data: <b>".$data."</b> &nbsp;|&nbsp; Índice de Placa O'Leary: <b>".round($indice, 2)."% </b> &nbsp;|&nbsp; Higiene Oral: <b>".$badge."</b> <a href='editarBiofilme.php?cpf=".$_GET['cpf']."&id=".$linhaNome['nr_idPlaca']."'  data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Editar!'><img src='icones/edit.png'></a>
											</button>
										  </h5>
										</div>

										<div id='collapseOne".$linhaNome['nr_idPlaca']."' class='collapse' aria-labelledby='headingOne' data-parent='#accordion'>
										  <div class='card-body'>
											
											<center>
											
											<table width='85%' border=0 style='background-color:rgb(207, 207, 212);'>
												<tr>
													<td><center><img src='biofilme/18.png' style='margin-top:-40%;'></td></center>
													<td><center><img src='biofilme/17.png' style='margin-top:-35%;'></td></center>
													<td><center><img src='biofilme/16.png' style='margin-top:-25%;'></td></center>
													<td><center><img src='biofilme/15.png' style='margin-top:-15%;'></td></center>
													<td><center><img src='biofilme/14.png' style='margin-top:-20%;'></td></center>
													<td><center><img src='biofilme/13.png'></td></center>
													<td><center><img src='biofilme/12.png' style='margin-top:-20%;'></td></center>
													<td><center><img src='biofilme/11.png' style='margin-top:-5%;'></td></center>
													<td><center><img src='biofilme/21.png' style='margin-top:-5%;'></td></center>
													<td><center><img src='biofilme/22.png' style='margin-top:-15%;'></td></center>
													<td><center><img src='biofilme/23.png'></td></center>
													<td><center><img src='biofilme/24.png' style='margin-top:-20%;'></td></center>
													<td><center><img src='biofilme/25.png' style='margin-top:-15%;'></td></center>
													<td><center><img src='biofilme/26.png' style='margin-top:-25%;'></td></center>
													<td><center><img src='biofilme/27.png' style='margin-top:-35%;'></td></center>
													<td><center><img src='biofilme/28.png' style='margin-top:-40%;'></td></center>
												</tr>
												<tr>
													<td><center><b>18</b></center></td>
													<td><center><b>17</b></center></td>
													<td><center><b>16</b></center></td>
													<td><center><b>15</b></center></td>
													<td><center><b>14</b></center></td>
													<td><center><b>13</b></center></td>
													<td><center><b>12</b></center></td>
													<td><center><b>11</b></center></td>
													<td><center><b>21</b></center></td>
													<td><center><b>22</b></center></td>
													<td><center><b>23</b></center></td>
													<td><center><b>24</b></center></td>
													<td><center><b>25</b></center></td>
													<td><center><b>26</b></center></td>
													<td><center><b>27</b></center></td>
													<td><center><b>28</b></center></td>
												</tr>
												<tr>
													<td>
														<center>
															<div class='trapecio-top' style='border-top-color:".$cor1.";'></div>
															<div class='trapecio-left' style='border-top-color:".$cor2.";'></div>
															<div class='trapecio-right' style='border-top-color:".$cor4.";'></div>
															<div class='trapecio-bottom' style='border-bottom-color:".$cor3.";'></div>
														</center>
													</td>
													<td>
														<center>
															<div class='trapecio-top' style='border-top-color:".$cor5.";'></div>
															<div class='trapecio-left' style='border-top-color:".$cor6.";'></div>
															<div class='trapecio-right' style='border-top-color:".$cor8.";'></div>
															<div class='trapecio-bottom' style='border-bottom-color:".$cor7.";'></div>
														</center>
													</td>
													<td>
														<center>
															<div class='trapecio-top' style='border-top-color:".$cor9.";'></div>
															<div class='trapecio-left' style='border-top-color:".$cor10.";'></div>
															<div class='trapecio-right' style='border-top-color:".$cor12.";'></div>
															<div class='trapecio-bottom' style='border-bottom-color:".$cor11.";'></div>
														</center>
													</td>
													<td>
														<center>
															<div class='trapecio-top' style='border-top-color:".$cor13.";'></div>
															<div class='trapecio-left' style='border-top-color:".$cor14.";'></div>
															<div class='trapecio-right' style='border-top-color:".$cor16.";'></div>
															<div class='trapecio-bottom' style='border-bottom-color:".$cor15.";'></div>
														</center>
													</td>
													<td>
														<center>
															<div class='trapecio-top' style='border-top-color:".$cor17.";'></div>
															<div class='trapecio-left' style='border-top-color:".$cor18.";'></div>
															<div class='trapecio-right' style='border-top-color:".$cor20.";'></div>
															<div class='trapecio-bottom' style='border-bottom-color:".$cor19.";'></div>
														</center>
													</td>
													<td>
														<center>
															<div class='trapecio-top' style='border-top-color:".$cor21.";'></div>
															<div class='trapecio-left' style='border-top-color:".$cor22.";'></div>
															<div class='trapecio-right' style='border-top-color:".$cor24.";'></div>
															<div class='trapecio-bottom' style='border-bottom-color:".$cor23.";'></div>
														</center>
													</td>
													<td>
														<center>
															<div class='trapecio-top' style='border-top-color:".$cor25.";'></div>
															<div class='trapecio-left' style='border-top-color:".$cor26.";'></div>
															<div class='trapecio-right' style='border-top-color:".$cor28.";'></div>
															<div class='trapecio-bottom' style='border-bottom-color:".$cor27.";'></div>
														</center>
													</td>
													<td>
														<center>
															<div class='trapecio-top' style='border-top-color:".$cor29.";'></div>
															<div class='trapecio-left' style='border-top-color:".$cor30.";'></div>
															<div class='trapecio-right' style='border-top-color:".$cor32.";'></div>
															<div class='trapecio-bottom' style='border-bottom-color:".$cor31.";'></div>
														</center>
													</td>
													<td>
														<center>
															<div class='trapecio-top' style='border-top-color:".$cor33.";'></div>
															<div class='trapecio-left' style='border-top-color:".$cor34.";'></div>
															<div class='trapecio-right' style='border-top-color:".$cor36.";'></div>
															<div class='trapecio-bottom' style='border-bottom-color:".$cor35.";'></div>
														</center>
													</td>
													<td>
														<center>
															<div class='trapecio-top' style='border-top-color:".$cor37.";'></div>
															<div class='trapecio-left' style='border-top-color:".$cor38.";'></div>
															<div class='trapecio-right' style='border-top-color:".$cor40.";'></div>
															<div class='trapecio-bottom' style='border-bottom-color:".$cor39.";'></div>
														</center>
													</td>
													<td>
														<center>
															<div class='trapecio-top' style='border-top-color:".$cor41.";'></div>
															<div class='trapecio-left' style='border-top-color:".$cor42.";'></div>
															<div class='trapecio-right' style='border-top-color:".$cor44.";'></div>
															<div class='trapecio-bottom' style='border-bottom-color:".$cor43.";'></div>
														</center>
													</td>
													<td>
														<center>
															<div class='trapecio-top' style='border-top-color:".$cor45.";'></div>
															<div class='trapecio-left' style='border-top-color:".$cor46.";'></div>
															<div class='trapecio-right' style='border-top-color:".$cor48.";'></div>
															<div class='trapecio-bottom' style='border-bottom-color:".$cor47.";'></div>
														</center>
													</td>
													<td>
														<center>
															<div class='trapecio-top' style='border-top-color:".$cor49.";'></div>
															<div class='trapecio-left' style='border-top-color:".$cor50.";'></div>
															<div class='trapecio-right' style='border-top-color:".$cor52.";'></div>
															<div class='trapecio-bottom' style='border-bottom-color:".$cor51.";'></div>
														</center>
													</td>
													<td>
														<center>
															<div class='trapecio-top' style='border-top-color:".$cor53.";'></div>
															<div class='trapecio-left' style='border-top-color:".$cor54.";'></div>
															<div class='trapecio-right' style='border-top-color:".$cor56.";'></div>
															<div class='trapecio-bottom' style='border-bottom-color:".$cor55.";'></div>
														</center>
													</td>
													<td>
														<center>
															<div class='trapecio-top' style='border-top-color:".$cor57.";'></div>
															<div class='trapecio-left' style='border-top-color:".$cor58.";'></div>
															<div class='trapecio-right' style='border-top-color:".$cor60.";'></div>
															<div class='trapecio-bottom' style='border-bottom-color:".$cor59.";'></div>
														</center>
													</td>
													<td>
														<center>
															<div class='trapecio-top' style='border-top-color:".$cor61.";'></div>
															<div class='trapecio-left' style='border-top-color:".$cor62.";'></div>
															<div class='trapecio-right' style='border-top-color:".$cor64.";'></div>
															<div class='trapecio-bottom' style='border-bottom-color:".$cor63.";'></div>
														</center>
													</td>
												</tr>
												<tr><td colspan=16><br></td></tr>
												<tr>
													<td>
														<center>
															<div class='trapecio-top' style='border-top-color:".$cor65.";'></div>
															<div class='trapecio-left' style='border-top-color:".$cor66.";'></div>
															<div class='trapecio-right' style='border-top-color:".$cor68.";'></div>
															<div class='trapecio-bottom' style='border-bottom-color:".$cor67.";'></div>
														</center>
													</td>
													<td>
														<center>
															<div class='trapecio-top' style='border-top-color:".$cor69.";'></div>
															<div class='trapecio-left' style='border-top-color:".$cor70.";'></div>
															<div class='trapecio-right' style='border-top-color:".$cor72.";'></div>
															<div class='trapecio-bottom' style='border-bottom-color:".$cor71.";'></div>
														</center>
													</td>
													<td>
														<center>
															<div class='trapecio-top' style='border-top-color:".$cor73.";'></div>
															<div class='trapecio-left' style='border-top-color:".$cor74.";'></div>
															<div class='trapecio-right' style='border-top-color:".$cor76.";'></div>
															<div class='trapecio-bottom' style='border-bottom-color:".$cor75.";'></div>
														</center>
													</td>
													<td>
														<center>
															<div class='trapecio-top' style='border-top-color:".$cor77.";'></div>
															<div class='trapecio-left' style='border-top-color:".$cor78.";'></div>
															<div class='trapecio-right' style='border-top-color:".$cor80.";'></div>
															<div class='trapecio-bottom' style='border-bottom-color:".$cor79.";'></div>
														</center>
													</td>
													<td>
														<center>
															<div class='trapecio-top' style='border-top-color:".$cor81.";'></div>
															<div class='trapecio-left' style='border-top-color:".$cor82.";'></div>
															<div class='trapecio-right' style='border-top-color:".$cor84.";'></div>
															<div class='trapecio-bottom' style='border-bottom-color:".$cor83.";'></div>
														</center>
													</td>
													<td>
														<center>
															<div class='trapecio-top' style='border-top-color:".$cor85.";'></div>
															<div class='trapecio-left' style='border-top-color:".$cor86.";'></div>
															<div class='trapecio-right' style='border-top-color:".$cor88.";'></div>
															<div class='trapecio-bottom' style='border-bottom-color:".$cor87.";'></div>
														</center>
													</td>
													<td>
														<center>
															<div class='trapecio-top' style='border-top-color:".$cor89.";'></div>
															<div class='trapecio-left' style='border-top-color:".$cor90.";'></div>
															<div class='trapecio-right' style='border-top-color:".$cor92.";'></div>
															<div class='trapecio-bottom' style='border-bottom-color:".$cor91.";'></div>
														</center>
													</td>
													<td>
														<center>
															<div class='trapecio-top' style='border-top-color:".$cor93.";'></div>
															<div class='trapecio-left' style='border-top-color:".$cor94.";'></div>
															<div class='trapecio-right' style='border-top-color:".$cor96.";'></div>
															<div class='trapecio-bottom' style='border-bottom-color:".$cor95.";'></div>
														</center>
													</td>
													<td>
														<center>
															<div class='trapecio-top' style='border-top-color:".$cor97.";'></div>
															<div class='trapecio-left' style='border-top-color:".$cor98.";'></div>
															<div class='trapecio-right' style='border-top-color:".$cor100.";'></div>
															<div class='trapecio-bottom' style='border-bottom-color:".$cor99.";'></div>
														</center>
													</td>
													<td>
														<center>
															<div class='trapecio-top' style='border-top-color:".$cor101.";'></div>
															<div class='trapecio-left' style='border-top-color:".$cor102.";'></div>
															<div class='trapecio-right' style='border-top-color:".$cor104.";'></div>
															<div class='trapecio-bottom' style='border-bottom-color:".$cor103.";'></div>
														</center>
													</td>
													<td>
														<center>
															<div class='trapecio-top' style='border-top-color:".$cor105.";'></div>
															<div class='trapecio-left' style='border-top-color:".$cor106.";'></div>
															<div class='trapecio-right' style='border-top-color:".$cor108.";'></div>
															<div class='trapecio-bottom' style='border-bottom-color:".$cor107.";'></div>
														</center>
													</td>
													<td>
														<center>
															<div class='trapecio-top' style='border-top-color:".$cor109.";'></div>
															<div class='trapecio-left' style='border-top-color:".$cor110.";'></div>
															<div class='trapecio-right' style='border-top-color:".$cor112.";'></div>
															<div class='trapecio-bottom' style='border-bottom-color:".$cor111.";'></div>
														</center>
													</td>
													<td>
														<center>
															<div class='trapecio-top' style='border-top-color:".$cor113.";'></div>
															<div class='trapecio-left' style='border-top-color:".$cor114.";'></div>
															<div class='trapecio-right' style='border-top-color:".$cor116.";'></div>
															<div class='trapecio-bottom' style='border-bottom-color:".$cor115.";'></div>
														</center>
													</td>
													<td>
														<center>
															<div class='trapecio-top' style='border-top-color:".$cor117.";'></div>
															<div class='trapecio-left' style='border-top-color:".$cor118.";'></div>
															<div class='trapecio-right' style='border-top-color:".$cor120.";'></div>
															<div class='trapecio-bottom' style='border-bottom-color:".$cor119.";'></div>
														</center>
													</td>
													<td>
														<center>
															<div class='trapecio-top' style='border-top-color:".$cor121.";'></div>
															<div class='trapecio-left' style='border-top-color:".$cor122.";'></div>
															<div class='trapecio-right' style='border-top-color:".$cor124.";'></div>
															<div class='trapecio-bottom' style='border-bottom-color:".$cor123.";'></div>
														</center>
													</td>
													<td>
														<center>
															<div class='trapecio-top' style='border-top-color:".$cor125.";'></div>
															<div class='trapecio-left' style='border-top-color:".$cor126.";'></div>
															<div class='trapecio-right' style='border-top-color:".$cor128.";'></div>
															<div class='trapecio-bottom' style='border-bottom-color:".$cor127.";'></div>
														</center>
													</td>
												</tr>
												<tr>
													<td><center><b>48</b></center></td>
													<td><center><b>47</b></center></td>
													<td><center><b>46</b></center></td>
													<td><center><b>45</b></center></td>
													<td><center><b>44</b></center></td>
													<td><center><b>43</b></center></td>
													<td><center><b>42</b></center></td>
													<td><center><b>41</b></center></td>
													<td><center><b>31</b></center></td>
													<td><center><b>32</b></center></td>
													<td><center><b>33</b></center></td>
													<td><center><b>34</b></center></td>
													<td><center><b>35</b></center></td>
													<td><center><b>36</b></center></td>
													<td><center><b>37</b></center></td>
													<td><center><b>38</b></center></td>
												</tr>
												<tr>
													<td><center><img src='biofilme/48.png' style='margin-bottom:-40%;'></td></center>
													<td><center><img src='biofilme/47.png' style='margin-bottom:-40%;'></td></center>
													<td><center><img src='biofilme/46.png' style='margin-bottom:-32%;'></td></center>
													<td><center><img src='biofilme/45.png' style='margin-bottom:-18%;'></td></center>
													<td><center><img src='biofilme/44.png' style='margin-bottom:-18%;'></td></center>
													<td><center><img src='biofilme/43.png'></td></center>
													<td><center><img src='biofilme/42.png' style='margin-bottom:-25%;'></td></center>
													<td><center><img src='biofilme/41.png' style='margin-bottom:-30%;'></td></center>
													<td><center><img src='biofilme/31.png' style='margin-bottom:-30%;'></td></center>
													<td><center><img src='biofilme/32.png' style='margin-bottom:-30%;'></td></center>
													<td><center><img src='biofilme/33.png'></td></center>
													<td><center><img src='biofilme/34.png' style='margin-bottom:-20%;'></td></center>
													<td><center><img src='biofilme/35.png' style='margin-bottom:-15%;'></td></center>
													<td><center><img src='biofilme/36.png' style='margin-bottom:-27%;'></td></center>
													<td><center><img src='biofilme/37.png' style='margin-bottom:-35%;'></td></center>
													<td><center><img src='biofilme/38.png' style='margin-bottom:-40%;'></td></center>
												</tr>
											</table>
											<br>
											<a href='excluirPlaca.php?id=".$linhaNome['nr_idPlaca']."&cpf=".$_GET['cpf']."' class='genric-btn primary'>Excluir</a>
											<!--<a href='editarPlaca.php?id=".$linhaNome['nr_idPlaca']."&cpf=".$_GET['cpf']."' class='genric-btn primary'>Editar</a>-->
											</center>
											
										  </div>
										</div>
									</div>
									
									";
							}
							
								
							
						?>
					</div>
				</center>
		<!-- End price Area -->
		<br><hr style='width:70%;'>
		<br>
		<!-- Start price Area --><br>
			<section class="price-area " id="price">
				<div class="container">
					<div class='row'>
						<h3>Periograma <a href='novoPeriograma.php?cpf=<?php echo $_GET['cpf']; ?>'  data-toggle='popover' data-trigger='hover' data-placement='top' data-content='Novo Periograma'>+</a> &nbsp; <img src='icones/customer-service.png' data-toggle="modal" data-target=".bd-example-modal-lg"></h3>

						<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg">
							<div class="modal-content">
							  <div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							  </div>
							  <div class="modal-body">
								<center><h5>Legenda para o Diagnóstico</h5></center><br>
								<p><b>Posição da Margem Gengival (PMG):</b> distância entre a junção amelo cementária e a margem gengival</p>
								<p>•	PMG = 0: Exatamente Na JCE </p>
								<p>•	PMG > 0: Retração Gengival  </p>
								<br>
								<p><b>Profundidade a Sondagem Vertical (PSV):</b> distância entre a margem gengival e a porção mais coronal do epitélio juncional (fundo de sulco/bolsa) </p>
								<p>•	PSV < OU = 3mm: Normal. Indica Saúde Periodontal </p>
								<p>•	PSV > 3mm: Periodontite Se NCI > 0 </p>
								<br>
								<p><b>Nível Clínico de Inserção (NIC):</b> é a distância entre a junção amelo cementária e a porção mais coronal do epitélio juncional (é a soma da PMG com a PSV); </p>
								<p>•	NIC = 0: saúde Periodontal </p>
								<p>•	NIC = 0 + Sangramento: Gengivite </p>
								<p>NIC >0: Periodontite, sendo: </p>
								<p>•	NIC = 1 OU 2: Periodontite Leve </p>
								<p>•	NIC = 3 OU 4: Periodontite Moderada </p>
								<p>•	NIC > 5: Periodontite Grave  </p>
								<br>
								<p><b>Classificação Quanto a Mobilidade Dentaria:</b> </p>
								<p>•	Grau I: 0,2 A 1mm (no sentido V-L ou M-D) </p>
								<p>•	Grau II: maior que 1mm (no sentido V-L ou M-D) </p>
								<p>•	Grau III: Mobilidade Vertical e Horizontal (elemento intrui e extrui) </p>
								<br>
								<p><b>Classificação de Hamp para Lesões de Furca:</b> </p>
								<p>• Classe 1 – a sonda penetra 1/3 da distância  horizontal da furca;   </p>
								<p>• Classe 2 – a sonda penetra 2/3 da distância  horizontal da furca;   </p>
								<p>• Classe 3 – a sonda penetra 3/3 da distância  horizontal da furca (de lado a lado); </p>
								
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
							  </div>
							</div>
						  </div>
						</div>				

						
					</div>				
				</div>	
			</section>	
				<br>
				
			<?php
				$sqlAnam = "SELECT * FROM tb_periograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' GROUP BY dt_data";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				
				if($numImg == 0){
					
			?>
				
				<center>
					<form method='POST' action='inserirPeriograma.php'>
					<input type='hidden' name='cpfOficial' value='<?php echo $_GET['cpf']; ?>'>
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
									  <td><center><select name='sangrVD18' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM18' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM18' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD17' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM17' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM17' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD16' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM16' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM16' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD15' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM15' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM15' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD14' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM14' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM14' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD13' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM13' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM13' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD12' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM12' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM12' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									 <td><center><select name='sangrVD11' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM11' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM11' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD21' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM21' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM21' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD22' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM22' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM22' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD23' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM23' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM23' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD24' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM24' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM24' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD25' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM25' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM25' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD26' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM26' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM26' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									 <td><center><select name='sangrVD27' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM27' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM27' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD28' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM28' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM28' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
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
									  <td><center><select name='sangrPD18' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM18' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM18' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD17' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM17' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM17' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD16' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM16' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM16' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD15' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM15' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM15' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD14' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM14' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM14' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD13' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM13' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM13' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD12' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM12' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM12' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									 <td><center><select name='sangrPD11' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM11' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM11' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD21' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM21' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM21' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD22' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM22' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM22' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD23' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM23' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM23' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD24' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM24' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM24' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD25' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM25' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM25' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD26' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM26' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM26' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									 <td><center><select name='sangrPD27' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM27' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM27' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD28' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM28' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM28' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
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
									  <td colspan=3><center><select name='furca18' style='height:30px;' class='single-input'><option value=''></option><option value='1/3'>1/3</option><option value='2/3'>2/3</option><option value='3/3'>3/3</option></select></center></td>
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
									  <td><center><select name='sangrVD48' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM48' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM48' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD47' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM47' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM47' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD46' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM46' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM46' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD45' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM45' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM45' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD44' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM44' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM44' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD43' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM43' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM43' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD42' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM42' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM42' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									 <td><center><select name='sangrVD41' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM41' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM41' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD31' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM31' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM31' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD32' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM32' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM32' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD33' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM33' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM33' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD34' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM34' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM34' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD35' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM35' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM35' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD36' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM36' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM36' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									 <td><center><select name='sangrVD37' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM37' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM37' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVD38' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVTM38' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrVM38' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
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
									  <td><center><select name='sangrPD48' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM48' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM48' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD47' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM47' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM47' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD46' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM46' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM46' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD45' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM45' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM45' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD44' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM44' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM44' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD43' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM43' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM43' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD42' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM42' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM42' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									 <td><center><select name='sangrPD41' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM41' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM41' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD31' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM31' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM31' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD32' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM32' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM32' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD33' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM33' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM33' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD34' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM34' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM34' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD35' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM35' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM35' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD36' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM36' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM36' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									 <td><center><select name='sangrPD37' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM37' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM37' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPD38' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPTM38' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
									  <td><center><select name='sangrPM38' style='width:90px; height:30px;' class='single-input'><option value=''></option><option style='color:red;' value='+'>+</option><option value='-'>-</option> </select></center></td>
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
					</form>	
					</center>	
			
			
			
			<?php
				}else{
					echo "<br><center><h4 style='color:red;'>Diagnóstico</h4></center><br>";
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						echo "
						
							<div class='container'>
							  <center><button style='width:100%; background-color: #cc0000;' type='button' class='btn btn-danger' data-toggle='collapse' data-target='#demo".$linhaAnam['nr_idPeriograma']."'>".$linhaAnam['dt_data']."</button></center>
							  <div id='demo".$linhaAnam['nr_idPeriograma']."' class='collapse'>
							  <br>
						";
						
						?>

				
				<center>
					<input type='hidden' name='cpf' value='<?php echo $_GET['cpf']; ?>'>
					<table border=0>
						<tr>
							<td><b>Disciplina(s) Associada(s):</b></td>
							<td colspan=4><?php echo $linhaAnam['nm_disciplina']."&nbsp; <a href='escolherDisciplinaPerio.php?cpf=".$_GET['cpf']."&data=".$linhaAnam['dt_data']."'><b>+</b></a></center>"; ?></td>
						</tr>
						<tr>
							<td><b>Dupla:</b></td>
							<td>
												<?php												
															$sqlNome = "SELECT * FROM tb_duplas WHERE nr_idDupla = ".$linhaAnam['nr_idDupla'];
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
																
																
																echo $nome1." e ".$nome2." (".$periodo."º Periodo)";
															}
												
												?>
							</td>
							<td> &nbsp; &nbsp; </td>
							<td><b>Professor:</b></td>
							<td>
								<?php												
															$sqlNome = "SELECT * FROM tb_funcionarios WHERE nr_cpfFuncionario = '".$linhaAnam['nr_cpfProfessor']."'";
															$resultadoNome = mysql_query($sqlNome) or die();
															while($linhaNome = mysql_fetch_array($resultadoNome)){
																echo $linhaNome['nm_nomeFuncionario'];
															}
												
								?>
							</td>
						</tr>
						
					</table>
				</center>
					<center><br>
						<div class="progress-table-wrap"  style='width:90%; background-color:rgb(249,249,255);'>
							<div class="progress-table">
								
								<table border=0>
									<tr>
										<td style='width:100px;'></td>
										<td style='width:220px;'><center><b>Posição da Margem Gengival (PMG)</b></center></td>
										<td style='width:220px;'><center><b>Profundidade a Sondagem Vertical (PSV)</b></center></td>
										<td style='width:220px;'><center><b>Nível Clínico de Inserção (NIC)</b></center></td>
										<td style='width:220px;'><center><b>Mobilidade Dentária</b></center></td>
										<td style='width:220px;'><center><b>Lesões de Furca (HAMP)</b></center></td>
									</tr>
								<form method='POST' action='salvarDiagnosticoPerio.php'>
									<input type='hidden' name='cpf' value='<?php echo $_GET['cpf']; ?>'>
									<input type='hidden' name='data' value='<?php echo $linhaAnam['dt_data'] ?>'>
									<input type='hidden' name='tipo' value='parte1'>
									<?php
										$a = 18;
										while($a > 10){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$a." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
												echo "
													<tr>
														<td><center><b>Dente ".$a."</b></center></td>
														<td style='padding:3px;'><textarea name='dPMG".$a."' class='single-input'>".$linhaDente['32']."</textarea></td>
														<td style='padding:3px;'><textarea name='dPSV".$a."' class='single-input'>".$linhaDente['28']."</textarea></td>
														<td style='padding:3px;'><textarea name='dNIC".$a."' class='single-input'>".$linhaDente['29']."</textarea></td>
														<td style='padding:3px;'><textarea name='dMD".$a."' class='single-input'>".$linhaDente['30']."</textarea></td>
														<td style='padding:3px;'><textarea name='dHAMP".$a."' class='single-input'>".$linhaDente['31']."</textarea></td>
													</tr>
												";
											}
											
											$a = $a - 1;
										}
										
										$b = 21;
										while($b < 29){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$b." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
												echo "
													<tr>
														<td><center><b>Dente ".$b."</b></center></td>
														<td style='padding:3px;'><textarea name='dPMG".$b."' class='single-input'>".$linhaDente['32']."</textarea></td>
														<td style='padding:3px;'><textarea name='dPSV".$b."' class='single-input'>".$linhaDente['28']."</textarea></td>
														<td style='padding:3px;'><textarea name='dNIC".$b."' class='single-input'>".$linhaDente['29']."</textarea></td>
														<td style='padding:3px;'><textarea name='dMD".$b."' class='single-input'>".$linhaDente['30']."</textarea></td>
														<td style='padding:3px;'><textarea name='dHAMP".$b."' class='single-input'>".$linhaDente['31']."</textarea></td>
													</tr>
												";
											}
											
											$b = $b + 1;
										}
									  ?>
									<tr>
										<td colspan=5><br></td>
									</tr>
									<tr>
										<td colspan=5></td>
										<td><input type='submit' class="genric-btn primary" value='Atualizar Diagnóstico'></td>
									</tr>
									</form>
								</table>
								<br>
								<br>
								
								<table border=0 style=''>
								  <thead>
									<tr>
									  <td><center></center></td>
									  <td><center></center></td>
									  <td colspan=3 style='border: 3px solid rgb(240,240,240);'><center><b>18 <a href='editarPerio.php?cpf=<?php echo $_GET['cpf'];?>&data=<?php echo $linhaAnam['dt_data'];?>&dente=18' data-toggle='popover' data-trigger='hover' data-placement='top' data-content='Editar Periograma'><img width='7%' height='7%' src='icones/edit.png'></a></b></center></td>
									 <td colspan=3 style='border: 3px solid rgb(240,240,240);'><center><b>17 <a href='editarPerio.php?cpf=<?php echo $_GET['cpf'];?>&data=<?php echo $linhaAnam['dt_data'];?>&dente=17' data-toggle='popover' data-trigger='hover' data-placement='top' data-content='Editar Periograma'><img width='7%' height='7%' src='icones/edit.png'></a></b></center></td>
									 <td colspan=3 style='border: 3px solid rgb(240,240,240);'><center><b>16 <a href='editarPerio.php?cpf=<?php echo $_GET['cpf'];?>&data=<?php echo $linhaAnam['dt_data'];?>&dente=16' data-toggle='popover' data-trigger='hover' data-placement='top' data-content='Editar Periograma'><img width='7%' height='7%' src='icones/edit.png'></a></b></center></td>
									 <td colspan=3 style='border: 3px solid rgb(240,240,240);'><center><b>15 <a href='editarPerio.php?cpf=<?php echo $_GET['cpf'];?>&data=<?php echo $linhaAnam['dt_data'];?>&dente=15' data-toggle='popover' data-trigger='hover' data-placement='top' data-content='Editar Periograma'><img width='7%' height='7%' src='icones/edit.png'></a></b></center></td>
									 <td colspan=3 style='border: 3px solid rgb(240,240,240);'><center><b>14 <a href='editarPerio.php?cpf=<?php echo $_GET['cpf'];?>&data=<?php echo $linhaAnam['dt_data'];?>&dente=14' data-toggle='popover' data-trigger='hover' data-placement='top' data-content='Editar Periograma'><img width='7%' height='7%' src='icones/edit.png'></a></b></center></td>
									 <td colspan=3 style='border: 3px solid rgb(240,240,240);'><center><b>13 <a href='editarPerio.php?cpf=<?php echo $_GET['cpf'];?>&data=<?php echo $linhaAnam['dt_data'];?>&dente=13' data-toggle='popover' data-trigger='hover' data-placement='top' data-content='Editar Periograma'><img width='7%' height='7%' src='icones/edit.png'></a></b></center></td>
									 <td colspan=3 style='border: 3px solid rgb(240,240,240);'><center><b>12 <a href='editarPerio.php?cpf=<?php echo $_GET['cpf'];?>&data=<?php echo $linhaAnam['dt_data'];?>&dente=12' data-toggle='popover' data-trigger='hover' data-placement='top' data-content='Editar Periograma'><img width='7%' height='7%' src='icones/edit.png'></a></b></center></td>
									 <td colspan=3 style='border: 3px solid rgb(240,240,240);'><center><b>11 <a href='editarPerio.php?cpf=<?php echo $_GET['cpf'];?>&data=<?php echo $linhaAnam['dt_data'];?>&dente=11' data-toggle='popover' data-trigger='hover' data-placement='top' data-content='Editar Periograma'><img width='7%' height='7%' src='icones/edit.png'></a></b></center></td>
									 <td colspan=3 style='border: 3px solid rgb(240,240,240);'><center><b>21 <a href='editarPerio.php?cpf=<?php echo $_GET['cpf'];?>&data=<?php echo $linhaAnam['dt_data'];?>&dente=21' data-toggle='popover' data-trigger='hover' data-placement='top' data-content='Editar Periograma'><img width='7%' height='7%' src='icones/edit.png'></a></b></center></td>
									 <td colspan=3 style='border: 3px solid rgb(240,240,240);'><center><b>22 <a href='editarPerio.php?cpf=<?php echo $_GET['cpf'];?>&data=<?php echo $linhaAnam['dt_data'];?>&dente=22' data-toggle='popover' data-trigger='hover' data-placement='top' data-content='Editar Periograma'><img width='7%' height='7%' src='icones/edit.png'></a></b></center></td>
									 <td colspan=3 style='border: 3px solid rgb(240,240,240);'><center><b>23 <a href='editarPerio.php?cpf=<?php echo $_GET['cpf'];?>&data=<?php echo $linhaAnam['dt_data'];?>&dente=23' data-toggle='popover' data-trigger='hover' data-placement='top' data-content='Editar Periograma'><img width='7%' height='7%' src='icones/edit.png'></a></b></center></td>
									 <td colspan=3 style='border: 3px solid rgb(240,240,240);'><center><b>24 <a href='editarPerio.php?cpf=<?php echo $_GET['cpf'];?>&data=<?php echo $linhaAnam['dt_data'];?>&dente=24' data-toggle='popover' data-trigger='hover' data-placement='top' data-content='Editar Periograma'><img width='7%' height='7%' src='icones/edit.png'></a></b></center></td>
									 <td colspan=3 style='border: 3px solid rgb(240,240,240);'><center><b>25 <a href='editarPerio.php?cpf=<?php echo $_GET['cpf'];?>&data=<?php echo $linhaAnam['dt_data'];?>&dente=25' data-toggle='popover' data-trigger='hover' data-placement='top' data-content='Editar Periograma'><img width='7%' height='7%' src='icones/edit.png'></a></b></center></td>
									 <td colspan=3 style='border: 3px solid rgb(240,240,240);'><center><b>26 <a href='editarPerio.php?cpf=<?php echo $_GET['cpf'];?>&data=<?php echo $linhaAnam['dt_data'];?>&dente=26' data-toggle='popover' data-trigger='hover' data-placement='top' data-content='Editar Periograma'><img width='7%' height='7%' src='icones/edit.png'></a></b></center></td>
									 <td colspan=3 style='border: 3px solid rgb(240,240,240);'><center><b>27 <a href='editarPerio.php?cpf=<?php echo $_GET['cpf'];?>&data=<?php echo $linhaAnam['dt_data'];?>&dente=27' data-toggle='popover' data-trigger='hover' data-placement='top' data-content='Editar Periograma'><img width='7%' height='7%' src='icones/edit.png'></a></b></center></td>
									 <td colspan=3 style='border: 3px solid rgb(240,240,240);'><center><b>28 <a href='editarPerio.php?cpf=<?php echo $_GET['cpf'];?>&data=<?php echo $linhaAnam['dt_data'];?>&dente=28' data-toggle='popover' data-trigger='hover' data-placement='top' data-content='Editar Periograma'><img width='7%' height='7%' src='icones/edit.png'></a></b></center></td>
									</tr>
								  </thead>
								  <tbody>
									<tr style='background-color:rgb(240,240,240);'>
									  <td><center><b style='margin-left:35px; margin-right:35px;'>Dente</b></center></td>
									  <td><center><b style='margin-left:30px; margin-right:30px;'>Face</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>D</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>TM</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>M</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>D</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>TM</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>M</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>D</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>TM</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>M</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>D</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>TM</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>M</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>D</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>TM</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>M</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>D</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>TM</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>M</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>D</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>TM</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>M</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>D</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>TM</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>M</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>D</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>TM</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>M</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>D</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>TM</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>M</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>D</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>TM</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>M</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>D</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>TM</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>M</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>D</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>TM</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>M</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>D</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>TM</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>M</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>D</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>TM</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>M</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>D</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>TM</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>M</b></center></td>
									</tr>
									<tr>
									  <td><center><b style='color:black;'>Sangr. Sond.</b></center></td>
									  <td><center><b style='color:black;'>V</b></center></td>
									  
									  <?php
										$a = 18;
										while($a > 10){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$a." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
												echo "<td><center>".$linhaDente['1']."</center></td>";
												echo "<td><center>".$linhaDente['2']."</center></td>";
												echo "<td><center>".$linhaDente['3']."</center></td>";
											}
											
											$a = $a - 1;
										}
										
										$b = 21;
										while($b < 29){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$b." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
												echo "<td><center>".$linhaDente['1']."</center></td>";
												echo "<td><center>".$linhaDente['2']."</center></td>";
												echo "<td><center>".$linhaDente['3']."</center></td>";
											}
											
											$b = $b + 1;
										}
									  ?>
									</tr>
									<tr style='background-color:rgb(240,240,240);'>
									  <td><center><b style='color:black;'>PMG</b></center></td>
									  <td><center><b style='color:black;'>V</b></center></td>
									   <?php
										$a = 18;
										while($a > 10){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$a." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
												echo "<td><center>".$linhaDente['4']."</center></td>";
												echo "<td><center>".$linhaDente['5']."</center></td>";
												echo "<td><center>".$linhaDente['6']."</center></td>";
											}
											
											$a = $a - 1;
										}
										
										$b = 21;
										while($b < 29){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$b." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
												echo "<td><center>".$linhaDente['4']."</center></td>";
												echo "<td><center>".$linhaDente['5']."</center></td>";
												echo "<td><center>".$linhaDente['6']."</center></td>";
											}
											
											$b = $b + 1;
										}
									  ?>
									</tr>
									<tr>
									  <td><center><b style='color:black;'>PSV</b></center></td>
									  <td><center><b style='color:black;'>V</b></center></td>
									  <?php
										$a = 18;
										while($a > 10){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$a." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
												echo "<td><center>".$linhaDente['7']."</center></td>";
												echo "<td><center>".$linhaDente['8']."</center></td>";
												echo "<td><center>".$linhaDente['9']."</center></td>";
											}
											
											$a = $a - 1;
										}
										
										$b = 21;
										while($b < 29){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$b." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
												echo "<td><center>".$linhaDente['7']."</center></td>";
												echo "<td><center>".$linhaDente['8']."</center></td>";
												echo "<td><center>".$linhaDente['9']."</center></td>";
											}
											
											$b = $b + 1;
										}
									  ?>
									</tr>
									<tr style='background-color:rgb(240,240,240);'>
									  <td><center><b style='color:black;'>NIC</b></center></td>
									  <td><center><b style='color:black;'>V</b></center></td>
									  <?php
										$a = 18;
										while($a > 10){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$a." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
												if(($linhaDente['7']=='') && ($linhaDente['8']=='') && ($linhaDente['9']=='')){
													echo "<td></td>";
													echo "<td></td>";
													echo "<td></td>";
												}else{
													echo "<td><center>".$linhaDente['10']."</center></td>";
													echo "<td><center>".$linhaDente['11']."</center></td>";
													echo "<td><center>".$linhaDente['12']."</center></td>";
												}
											}
											
											$a = $a - 1;
										}
										
										$b = 21;
										while($b < 29){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$b." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
												if(($linhaDente['7']=='') && ($linhaDente['8']=='') && ($linhaDente['9']=='')){
													echo "<td></td>";
													echo "<td></td>";
													echo "<td></td>";
												}else{
													echo "<td><center>".$linhaDente['10']."</center></td>";
													echo "<td><center>".$linhaDente['11']."</center></td>";
													echo "<td><center>".$linhaDente['12']."</center></td>";
												}
											}
											
											$b = $b + 1;
										}
									  ?>
									</tr>
									<tr>
									  <td><center><b style='color:black;'>Sangr. Sond.</b></center></td>
									  <td><center><b style='color:black;'>P</b></center></td>
									  <?php
										$a = 18;
										while($a > 10){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$a." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
													echo "<td><center>".$linhaDente['13']."</center></td>";
													echo "<td><center>".$linhaDente['14']."</center></td>";
													echo "<td><center>".$linhaDente['15']."</center></td>";
											}
											
											$a = $a - 1;
										}
										
										$b = 21;
										while($b < 29){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$b." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
													echo "<td><center>".$linhaDente['13']."</center></td>";
													echo "<td><center>".$linhaDente['14']."</center></td>";
													echo "<td><center>".$linhaDente['15']."</center></td>";
											}
											
											$b = $b + 1;
										}
									  ?>
									</tr>
									<tr style='background-color:rgb(240,240,240);'>
									  <td><center><b style='color:black;'>PMG</b></center></td>
									  <td><center><b style='color:black;'>P</b></center></td>
									  <?php
										$a = 18;
										while($a > 10){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$a." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
													echo "<td><center>".$linhaDente['16']."</center></td>";
													echo "<td><center>".$linhaDente['17']."</center></td>";
													echo "<td><center>".$linhaDente['18']."</center></td>";
											}
											
											$a = $a - 1;
										}
										
										$b = 21;
										while($b < 29){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$b." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
													echo "<td><center>".$linhaDente['16']."</center></td>";
													echo "<td><center>".$linhaDente['17']."</center></td>";
													echo "<td><center>".$linhaDente['18']."</center></td>";
											}
											
											$b = $b + 1;
										}
									  ?>
									</tr>
									<tr>
									  <td><center><b style='color:black;'>PSV</b></center></td>
									  <td><center><b style='color:black;'>P</b></center></td>
									   <?php
										$a = 18;
										while($a > 10){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$a." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
													echo "<td><center>".$linhaDente['19']."</center></td>";
													echo "<td><center>".$linhaDente['20']."</center></td>";
													echo "<td><center>".$linhaDente['21']."</center></td>";
											}
											
											$a = $a - 1;
										}
										
										$b = 21;
										while($b < 29){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$b." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
													echo "<td><center>".$linhaDente['19']."</center></td>";
													echo "<td><center>".$linhaDente['20']."</center></td>";
													echo "<td><center>".$linhaDente['21']."</center></td>";
											}
											
											$b = $b + 1;
										}
									  ?>
									</tr>
									<tr style='background-color:rgb(240,240,240);'>
									  <td><center><b style='color:black;'>NIC</b></center></td>
									  <td><center><b style='color:black;'>P</b></center></td>
									   <?php
										$a = 18;
										while($a > 10){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$a." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
												if(($linhaDente['19']=='') && ($linhaDente['20']=='') && ($linhaDente['21']=='')){
													echo "<td><center></center></td>";
													echo "<td><center></center></td>";
													echo "<td><center></center></td>";
												}else{
													echo "<td><center>".$linhaDente['22']."</center></td>";
													echo "<td><center>".$linhaDente['23']."</center></td>";
													echo "<td><center>".$linhaDente['24']."</center></td>";
												}
											}
											
											$a = $a - 1;
										}
										
										$b = 21;
										while($b < 29){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$b." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
												if(($linhaDente['19']=='') && ($linhaDente['20']=='') && ($linhaDente['21']=='')){
													echo "<td><center></center></td>";
													echo "<td><center></center></td>";
													echo "<td><center></center></td>";
												}else{
													echo "<td><center>".$linhaDente['22']."</center></td>";
													echo "<td><center>".$linhaDente['23']."</center></td>";
													echo "<td><center>".$linhaDente['24']."</center></td>";
												}
											}
											
											$b = $b + 1;
										}
									  ?>
									</tr>
									<tr>
									  <td colspan=2><center><b style='color:black;'>Mobilidade</b></center></td>
									  <?php
										$a = 18;
										while($a > 10){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$a." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
													echo "<td colspan=3><center>".$linhaDente['25']."</center></td>";
											}
											
											$a = $a - 1;
										}
										
										$b = 21;
										while($b < 29){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$b." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
													echo "<td colspan=3><center>".$linhaDente['25']."</center></td>";
											}
											
											$b = $b + 1;
										}
									  ?>
									</tr>
									<tr style='background-color:rgb(240,240,240);'>
									  <td colspan=2><center><b style='color:black;'>Furca</b></center></td>
									 
									 <?php
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = 18 AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
												echo "<td colspan=3><center>".$linhaDente['26']."</center></td>";
											}
											
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = 17 AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
												echo "<td colspan=3><center>".$linhaDente['26']."</center></td>";
											}
											
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = 16 AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
												echo "<td colspan=3><center>".$linhaDente['26']."</center></td>";
											}
									 ?>
									  
									  <td colspan=3><center></center></td>
									  
									  
									  <?php
										$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = 14 AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
										$resultadoDente = mysql_query($sqlDente) or die();
										while($linhaDente = mysql_fetch_array($resultadoDente)){
											echo "<td colspan=3><center>".$linhaDente['26']."</center></td>";
											echo "
											  <td><center>".$linhaDente['26']."</center></td>
											  <td><center></center></td>
											  <td><center>".$linhaDente['27']."</center></td>
											";
										}
									  ?>
									  
									  
									  <td colspan=3><center></center></td>
									  <td colspan=3><center></center></td>
									  <td colspan=3><center></center></td>
									  <td colspan=3><center></center></td>
									  <td colspan=3><center></center></td>
									  <td colspan=3><center></center></td>
									  <?php
										$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = 24 AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
										$resultadoDente = mysql_query($sqlDente) or die();
										while($linhaDente = mysql_fetch_array($resultadoDente)){
											echo "<td colspan=3><center>".$linhaDente['26']."</center></td>";
											echo "
											  <td><center>".$linhaDente['26']."</center></td>
											  <td><center></center></td>
											  <td><center>".$linhaDente['27']."</center></td>
											";
										}
									  ?>
									  <?php
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = 26 AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
												echo "<td colspan=3><center>".$linhaDente['26']."</center></td>";
											}
											
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = 27 AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
												echo "<td colspan=3><center>".$linhaDente['26']."</center></td>";
											}
											
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = 28 AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
												echo "<td colspan=3><center>".$linhaDente['26']."</center></td>";
											}
									 ?>
									</tr>
									<!-- Parte debaixo ######################################################### -->
								</table>
								<br><br>
								<table border=0>
									<tr>
										<td style='width:100px;'></td>
										<td style='width:220px;'><center><b>Posição da Margem Gengival (PMG)</b></center></td>
										<td style='width:220px;'><center><b>Profundidade a Sondagem Vertical (PSV)</b></center></td>
										<td style='width:220px;'><center><b>Nível Clínico de Inserção (NIC)</b></center></td>
										<td style='width:220px;'><center><b>Mobilidade Dentária</b></center></td>
										<td style='width:220px;'><center><b>Lesões de Furca (HAMP)</b></center></td>
									</tr>
								<form method='POST' action='salvarDiagnosticoPerio.php'>
									<input type='hidden' name='cpf' value='<?php echo $_GET['cpf']; ?>'>
									<input type='hidden' name='data' value='<?php echo $linhaAnam['dt_data'] ?>'>
									<input type='hidden' name='tipo' value='parte2'>
									<?php
										$a = 48;
										while($a > 40){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$a." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
												echo "
													<tr>
														<td><center><b>Dente ".$a."</b></center></td>
														<td style='padding:3px;'><textarea name='dPMG".$a."' class='single-input'>".$linhaDente['32']."</textarea></td>
														<td style='padding:3px;'><textarea name='dPSV".$a."' class='single-input'>".$linhaDente['28']."</textarea></td>
														<td style='padding:3px;'><textarea name='dNIC".$a."' class='single-input'>".$linhaDente['29']."</textarea></td>
														<td style='padding:3px;'><textarea name='dMD".$a."' class='single-input'>".$linhaDente['30']."</textarea></td>
														<td style='padding:3px;'><textarea name='dHAMP".$a."' class='single-input'>".$linhaDente['31']."</textarea></td>
													</tr>
												";
											}
											
											$a = $a - 1;
										}
										
										$b = 31;
										while($b < 39){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$b." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
												echo "
													<tr>
														<td><center><b>Dente ".$b."</b></center></td>
														<td style='padding:3px;'><textarea name='dPMG".$b."' class='single-input'>".$linhaDente['32']."</textarea></td>
														<td style='padding:3px;'><textarea name='dPSV".$b."' class='single-input'>".$linhaDente['28']."</textarea></td>
														<td style='padding:3px;'><textarea name='dNIC".$b."' class='single-input'>".$linhaDente['29']."</textarea></td>
														<td style='padding:3px;'><textarea name='dMD".$b."' class='single-input'>".$linhaDente['30']."</textarea></td>
														<td style='padding:3px;'><textarea name='dHAMP".$b."' class='single-input'>".$linhaDente['31']."</textarea></td>
													</tr>
												";
											}
											
											$b = $b + 1;
										}
									  ?>
									<tr>
										<td colspan=5><br></td>
									</tr>
									<tr>
										<td colspan=5></td>
										<td><input type='submit' class="genric-btn primary" value='Atualizar Diagnóstico'></td>
									</tr>
									</form>
								</table>
								<br>
								<br>
								
								<table>
									<thead>
									<tr>
									  <td><center></center></td>
									  <td rowspan=2><center></center></td>
									  <td colspan=3 style='border: 3px solid rgb(240,240,240);'><center><b>48 <a href='editarPerio.php?cpf=<?php echo $_GET['cpf'];?>&data=<?php echo $linhaAnam['dt_data'];?>&dente=48' data-toggle='popover' data-trigger='hover' data-placement='top' data-content='Editar Periograma'><img width='7%' height='7%' src='icones/edit.png'></a></b></center></td>
									 <td colspan=3 style='border: 3px solid rgb(240,240,240);'><center><b>47 <a href='editarPerio.php?cpf=<?php echo $_GET['cpf'];?>&data=<?php echo $linhaAnam['dt_data'];?>&dente=47' data-toggle='popover' data-trigger='hover' data-placement='top' data-content='Editar Periograma'><img width='7%' height='7%' src='icones/edit.png'></a></b></center></td>
									 <td colspan=3 style='border: 3px solid rgb(240,240,240);'><center><b>46 <a href='editarPerio.php?cpf=<?php echo $_GET['cpf'];?>&data=<?php echo $linhaAnam['dt_data'];?>&dente=46' data-toggle='popover' data-trigger='hover' data-placement='top' data-content='Editar Periograma'><img width='7%' height='7%' src='icones/edit.png'></a></b></center></td>
									 <td colspan=3 style='border: 3px solid rgb(240,240,240);'><center><b>45 <a href='editarPerio.php?cpf=<?php echo $_GET['cpf'];?>&data=<?php echo $linhaAnam['dt_data'];?>&dente=45' data-toggle='popover' data-trigger='hover' data-placement='top' data-content='Editar Periograma'><img width='7%' height='7%' src='icones/edit.png'></a></b></center></td>
									 <td colspan=3 style='border: 3px solid rgb(240,240,240);'><center><b>44 <a href='editarPerio.php?cpf=<?php echo $_GET['cpf'];?>&data=<?php echo $linhaAnam['dt_data'];?>&dente=44' data-toggle='popover' data-trigger='hover' data-placement='top' data-content='Editar Periograma'><img width='7%' height='7%' src='icones/edit.png'></a></b></center></td>
									 <td colspan=3 style='border: 3px solid rgb(240,240,240);'><center><b>43 <a href='editarPerio.php?cpf=<?php echo $_GET['cpf'];?>&data=<?php echo $linhaAnam['dt_data'];?>&dente=43' data-toggle='popover' data-trigger='hover' data-placement='top' data-content='Editar Periograma'><img width='7%' height='7%' src='icones/edit.png'></a></b></center></td>
									 <td colspan=3 style='border: 3px solid rgb(240,240,240);'><center><b>42 <a href='editarPerio.php?cpf=<?php echo $_GET['cpf'];?>&data=<?php echo $linhaAnam['dt_data'];?>&dente=42' data-toggle='popover' data-trigger='hover' data-placement='top' data-content='Editar Periograma'><img width='7%' height='7%' src='icones/edit.png'></a></b></center></td>
									 <td colspan=3 style='border: 3px solid rgb(240,240,240);'><center><b>41 <a href='editarPerio.php?cpf=<?php echo $_GET['cpf'];?>&data=<?php echo $linhaAnam['dt_data'];?>&dente=41' data-toggle='popover' data-trigger='hover' data-placement='top' data-content='Editar Periograma'><img width='7%' height='7%' src='icones/edit.png'></a></b></center></td>
									 <td colspan=3 style='border: 3px solid rgb(240,240,240);'><center><b>31 <a href='editarPerio.php?cpf=<?php echo $_GET['cpf'];?>&data=<?php echo $linhaAnam['dt_data'];?>&dente=31' data-toggle='popover' data-trigger='hover' data-placement='top' data-content='Editar Periograma'><img width='7%' height='7%' src='icones/edit.png'></a></b></center></td>
									 <td colspan=3 style='border: 3px solid rgb(240,240,240);'><center><b>32 <a href='editarPerio.php?cpf=<?php echo $_GET['cpf'];?>&data=<?php echo $linhaAnam['dt_data'];?>&dente=32' data-toggle='popover' data-trigger='hover' data-placement='top' data-content='Editar Periograma'><img width='7%' height='7%' src='icones/edit.png'></a></b></center></td>
									 <td colspan=3 style='border: 3px solid rgb(240,240,240);'><center><b>33 <a href='editarPerio.php?cpf=<?php echo $_GET['cpf'];?>&data=<?php echo $linhaAnam['dt_data'];?>&dente=33' data-toggle='popover' data-trigger='hover' data-placement='top' data-content='Editar Periograma'><img width='7%' height='7%' src='icones/edit.png'></a></b></center></td>
									 <td colspan=3 style='border: 3px solid rgb(240,240,240);'><center><b>34 <a href='editarPerio.php?cpf=<?php echo $_GET['cpf'];?>&data=<?php echo $linhaAnam['dt_data'];?>&dente=34' data-toggle='popover' data-trigger='hover' data-placement='top' data-content='Editar Periograma'><img width='7%' height='7%' src='icones/edit.png'></a></b></center></td>
									 <td colspan=3 style='border: 3px solid rgb(240,240,240);'><center><b>35 <a href='editarPerio.php?cpf=<?php echo $_GET['cpf'];?>&data=<?php echo $linhaAnam['dt_data'];?>&dente=35' data-toggle='popover' data-trigger='hover' data-placement='top' data-content='Editar Periograma'><img width='7%' height='7%' src='icones/edit.png'></a></b></center></td>
									 <td colspan=3 style='border: 3px solid rgb(240,240,240);'><center><b>36 <a href='editarPerio.php?cpf=<?php echo $_GET['cpf'];?>&data=<?php echo $linhaAnam['dt_data'];?>&dente=36' data-toggle='popover' data-trigger='hover' data-placement='top' data-content='Editar Periograma'><img width='7%' height='7%' src='icones/edit.png'></a></b></center></td>
									 <td colspan=3 style='border: 3px solid rgb(240,240,240);'><center><b>37 <a href='editarPerio.php?cpf=<?php echo $_GET['cpf'];?>&data=<?php echo $linhaAnam['dt_data'];?>&dente=37' data-toggle='popover' data-trigger='hover' data-placement='top' data-content='Editar Periograma'><img width='7%' height='7%' src='icones/edit.png'></a></b></center></td>
									 <td colspan=3 style='border: 3px solid rgb(240,240,240);'><center><b>38 <a href='editarPerio.php?cpf=<?php echo $_GET['cpf'];?>&data=<?php echo $linhaAnam['dt_data'];?>&dente=38' data-toggle='popover' data-trigger='hover' data-placement='top' data-content='Editar Periograma'><img width='7%' height='7%' src='icones/edit.png'></a></b></center></td>
									</tr>
								  </thead>
								  <tbody>
									<tr style='background-color:rgb(240,240,240);'>
									  <td><center><b style='margin-left:35px; margin-right:35px;'>Dente</b></center></td>
									  <td><center><b style='margin-left:30px; margin-right:30px;'>Face</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>D</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>TM</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>M</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>D</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>TM</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>M</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>D</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>TM</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>M</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>D</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>TM</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>M</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>D</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>TM</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>M</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>D</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>TM</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>M</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>D</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>TM</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>M</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>D</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>TM</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>M</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>D</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>TM</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>M</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>D</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>TM</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>M</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>D</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>TM</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>M</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>D</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>TM</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>M</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>D</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>TM</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>M</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>D</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>TM</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>M</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>D</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>TM</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>M</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>D</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>TM</b></center></td>
									  <td><center><b style='color:black; margin-left:20px; margin-right:20px;'>M</b></center></td>
									</tr>
									<tr>
									  <td><center><b style='color:black;'>Sangr. Sond.</b></center></td>
									  <td><center><b style='color:black;'>V</b></center></td>
									  
									  <?php
										$a = 48;
										while($a > 40){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$a." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
												echo "<td><center>".$linhaDente['1']."</center></td>";
												echo "<td><center>".$linhaDente['2']."</center></td>";
												echo "<td><center>".$linhaDente['3']."</center></td>";
											}
											
											$a = $a - 1;
										}
										
										$b = 31;
										while($b < 39){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$b." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
												echo "<td><center>".$linhaDente['1']."</center></td>";
												echo "<td><center>".$linhaDente['2']."</center></td>";
												echo "<td><center>".$linhaDente['3']."</center></td>";
											}
											
											$b = $b + 1;
										}
									  ?>
									</tr>
									<tr style='background-color:rgb(240,240,240);'>
									  <td><center><b style='color:black;'>PMG</b></center></td>
									  <td><center><b style='color:black;'>V</b></center></td>
									   <?php
										$a = 48;
										while($a > 40){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$a." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
												echo "<td><center>".$linhaDente['4']."</center></td>";
												echo "<td><center>".$linhaDente['5']."</center></td>";
												echo "<td><center>".$linhaDente['6']."</center></td>";
											}
											
											$a = $a - 1;
										}
										
										$b = 31;
										while($b < 39){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$b." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
												echo "<td><center>".$linhaDente['4']."</center></td>";
												echo "<td><center>".$linhaDente['5']."</center></td>";
												echo "<td><center>".$linhaDente['6']."</center></td>";
											}
											
											$b = $b + 1;
										}
									  ?>
									</tr>
									<tr>
									  <td><center><b style='color:black;'>PSV</b></center></td>
									  <td><center><b style='color:black;'>V</b></center></td>
									  <?php
										$a = 48;
										while($a > 40){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$a." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
												echo "<td><center>".$linhaDente['7']."</center></td>";
												echo "<td><center>".$linhaDente['8']."</center></td>";
												echo "<td><center>".$linhaDente['9']."</center></td>";
											}
											
											$a = $a - 1;
										}
										
										$b = 31;
										while($b < 39){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$b." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
												echo "<td><center>".$linhaDente['7']."</center></td>";
												echo "<td><center>".$linhaDente['8']."</center></td>";
												echo "<td><center>".$linhaDente['9']."</center></td>";
											}
											
											$b = $b + 1;
										}
									  ?>
									</tr>
									<tr style='background-color:rgb(240,240,240);'>
									  <td><center><b style='color:black;'>NIC</b></center></td>
									  <td><center><b style='color:black;'>V</b></center></td>
									  <?php
										$a = 48;
										while($a > 40){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$a." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
												if(($linhaDente['7']=='') && ($linhaDente['8']=='') && ($linhaDente['9']=='')){
													echo "<td></td>";
													echo "<td></td>";
													echo "<td></td>";
												}else{
													echo "<td><center>".$linhaDente['10']."</center></td>";
													echo "<td><center>".$linhaDente['11']."</center></td>";
													echo "<td><center>".$linhaDente['12']."</center></td>";
												}
											}
											
											$a = $a - 1;
										}
										
										$b = 31;
										while($b < 39){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$b." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
												if(($linhaDente['7']=='') && ($linhaDente['8']=='') && ($linhaDente['9']=='')){
													echo "<td></td>";
													echo "<td></td>";
													echo "<td></td>";
												}else{
													echo "<td><center>".$linhaDente['10']."</center></td>";
													echo "<td><center>".$linhaDente['11']."</center></td>";
													echo "<td><center>".$linhaDente['12']."</center></td>";
												}
											}
											
											$b = $b + 1;
										}
									  ?>
									</tr>
									<tr>
									  <td><center><b style='color:black;'>Sangr. Sond.</b></center></td>
									  <td><center><b style='color:black;'>P</b></center></td>
									  <?php
										$a = 48;
										while($a > 40){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$a." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
													echo "<td><center>".$linhaDente['13']."</center></td>";
													echo "<td><center>".$linhaDente['14']."</center></td>";
													echo "<td><center>".$linhaDente['15']."</center></td>";
											}
											
											$a = $a - 1;
										}
										
										$b = 31;
										while($b < 39){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$b." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
													echo "<td><center>".$linhaDente['13']."</center></td>";
													echo "<td><center>".$linhaDente['14']."</center></td>";
													echo "<td><center>".$linhaDente['15']."</center></td>";
											}
											
											$b = $b + 1;
										}
									  ?>
									</tr>
									<tr style='background-color:rgb(240,240,240);'>
									  <td><center><b style='color:black;'>PMG</b></center></td>
									  <td><center><b style='color:black;'>P</b></center></td>
									  <?php
										$a = 48;
										while($a > 40){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$a." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
													echo "<td><center>".$linhaDente['16']."</center></td>";
													echo "<td><center>".$linhaDente['17']."</center></td>";
													echo "<td><center>".$linhaDente['18']."</center></td>";
											}
											
											$a = $a - 1;
										}
										
										$b = 31;
										while($b < 39){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$b." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
													echo "<td><center>".$linhaDente['16']."</center></td>";
													echo "<td><center>".$linhaDente['17']."</center></td>";
													echo "<td><center>".$linhaDente['18']."</center></td>";
											}
											
											$b = $b + 1;
										}
									  ?>
									</tr>
									<tr>
									  <td><center><b style='color:black;'>PSV</b></center></td>
									  <td><center><b style='color:black;'>P</b></center></td>
									   <?php
										$a = 48;
										while($a > 40){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$a." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
													echo "<td><center>".$linhaDente['19']."</center></td>";
													echo "<td><center>".$linhaDente['20']."</center></td>";
													echo "<td><center>".$linhaDente['21']."</center></td>";
											}
											
											$a = $a - 1;
										}
										
										$b = 31;
										while($b < 39){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$b." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
													echo "<td><center>".$linhaDente['19']."</center></td>";
													echo "<td><center>".$linhaDente['20']."</center></td>";
													echo "<td><center>".$linhaDente['21']."</center></td>";
											}
											
											$b = $b + 1;
										}
									  ?>
									</tr>
									<tr style='background-color:rgb(240,240,240);'>
									  <td><center><b style='color:black;'>NIC</b></center></td>
									  <td><center><b style='color:black;'>P</b></center></td>
									   <?php
										$a = 48;
										while($a > 40){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$a." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
												if(($linhaDente['19']=='') && ($linhaDente['20']=='') && ($linhaDente['21']=='')){
													echo "<td><center></center></td>";
													echo "<td><center></center></td>";
													echo "<td><center></center></td>";
												}else{
													echo "<td><center>".$linhaDente['22']."</center></td>";
													echo "<td><center>".$linhaDente['23']."</center></td>";
													echo "<td><center>".$linhaDente['24']."</center></td>";
												}
											}
											
											$a = $a - 1;
										}
										
										$b = 31;
										while($b < 39){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$b." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
												if(($linhaDente['19']=='') && ($linhaDente['20']=='') && ($linhaDente['21']=='')){
													echo "<td><center></center></td>";
													echo "<td><center></center></td>";
													echo "<td><center></center></td>";
												}else{
													echo "<td><center>".$linhaDente['22']."</center></td>";
													echo "<td><center>".$linhaDente['23']."</center></td>";
													echo "<td><center>".$linhaDente['24']."</center></td>";
												}
											}
											
											$b = $b + 1;
										}
									  ?>
									</tr>
									<tr>
									  <td colspan=2><center><b style='color:black;'>Mobilidade</b></center></td>
									  <?php
										$a = 48;
										while($a > 40){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$a." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
													echo "<td colspan=3><center>".$linhaDente['25']."</center></td>";
											}
											
											$a = $a - 1;
										}
										
										$b = 31;
										while($b < 39){
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = ".$b." AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
													echo "<td colspan=3><center>".$linhaDente['25']."</center></td>";
											}
											
											$b = $b + 1;
										}
									  ?>
									</tr>
									<tr style='background-color:rgb(240,240,240);'>
									  <td colspan=2><center><b style='color:black;'>Furca</b></center></td>
									 
									 <?php
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = 48 AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
												echo "<td colspan=3><center>".$linhaDente['26']."</center></td>";
											}
											
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = 47 AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
												echo "<td colspan=3><center>".$linhaDente['26']."</center></td>";
											}
											
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = 46 AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
												echo "<td colspan=3><center>".$linhaDente['26']."</center></td>";
											}
									 ?>
									  
									  <td colspan=3><center></center></td>
									  
									  
									  <?php
										$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = 44 AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
										$resultadoDente = mysql_query($sqlDente) or die();
										while($linhaDente = mysql_fetch_array($resultadoDente)){
											echo "<td colspan=3><center>".$linhaDente['26']."</center></td>";
											echo "
											  <td><center>".$linhaDente['26']."</center></td>
											  <td><center></center></td>
											  <td><center>".$linhaDente['27']."</center></td>
											";
										}
									  ?>
									  
									  
									  <td colspan=3><center></center></td>
									  <td colspan=3><center></center></td>
									  <td colspan=3><center></center></td>
									  <td colspan=3><center></center></td>
									  <td colspan=3><center></center></td>
									  <td colspan=3><center></center></td>
									  <?php
										$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = 34 AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
										$resultadoDente = mysql_query($sqlDente) or die();
										while($linhaDente = mysql_fetch_array($resultadoDente)){
											echo "<td colspan=3><center>".$linhaDente['26']."</center></td>";
											echo "
											  <td><center>".$linhaDente['26']."</center></td>
											  <td><center></center></td>
											  <td><center>".$linhaDente['27']."</center></td>
											";
										}
									  ?>
									  <?php
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = 36 AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
												echo "<td colspan=3><center>".$linhaDente['26']."</center></td>";
											}
											
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = 37 AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
												echo "<td colspan=3><center>".$linhaDente['26']."</center></td>";
											}
											
											$sqlDente = "SELECT * FROM tb_periograma WHERE nr_dente = 38 AND dt_data = '".$linhaAnam['dt_data']."' LIMIT 1";
											$resultadoDente = mysql_query($sqlDente) or die();
											while($linhaDente = mysql_fetch_array($resultadoDente)){
												echo "<td colspan=3><center>".$linhaDente['26']."</center></td>";
											}
									 ?>
									</tr>
								</table>
								
							</div>
						</div>
					</center>	
						
						<?php
						
						echo "
							<br>
								<center>
									<a href='confirmarExcluirPerio.php?cpf=".$_GET['cpf']."&data=".$linhaAnam['dt_data']."' class='genric-btn primary'>Excluir</a>
									<button class='genric-btn primary' data-toggle='collapse' data-target='#demo2".$linhaAnam['nr_idPeriograma']."'>Repetir Periograma</button>
								</center>
								
									<div id='demo2".$linhaAnam['nr_idPeriograma']."' class='collapse'>
									<br>
											<form method='POST' action='repetirPerio.php'>
											<input type='hidden' name='cpf' value='".$_GET['cpf']."'>
											<input type='hidden' name='data' value='".$linhaAnam['dt_data']."'>
												<table width='90%' border=0>
													 <tr>
														<td align='right'>
															Repetir o Periograma do dente &nbsp;
														</td>
														<td>
															<center>
																<select name='dente' class='single-input'>
																	<option value='18'>Dente 18</option>
																	<option value='17'>Dente 17</option>
																	<option value='16'>Dente 16</option>
																	<option value='15'>Dente 15</option>
																	<option value='14'>Dente 14</option>
																	<option value='13'>Dente 13</option>
																	<option value='12'>Dente 12</option>
																	<option value='11'>Dente 11</option>
																	<option value='21'>Dente 21</option>
																	<option value='22'>Dente 22</option>
																	<option value='23'>Dente 23</option>
																	<option value='24'>Dente 24</option>
																	<option value='25'>Dente 25</option>
																	<option value='26'>Dente 26</option>
																	<option value='27'>Dente 27</option>
																	<option value='28'>Dente 28</option>
																	<option value='48'>Dente 48</option>
																	<option value='47'>Dente 47</option>
																	<option value='46'>Dente 46</option>
																	<option value='45'>Dente 45</option>
																	<option value='44'>Dente 44</option>
																	<option value='43'>Dente 43</option>
																	<option value='42'>Dente 42</option>
																	<option value='41'>Dente 41</option>
																	<option value='31'>Dente 31</option>
																	<option value='32'>Dente 32</option>
																	<option value='33'>Dente 33</option>
																	<option value='34'>Dente 34</option>
																	<option value='35'>Dente 35</option>
																	<option value='36'>Dente 36</option>
																	<option value='37'>Dente 37</option>
																	<option value='38'>Dente 38</option>
																</select>
															</center>
														</td>
														<td>
															&nbsp; no(s) dente(s):
														</td>
													 </tr>
													<tr><td> <br> </td></tr>
													</table>
													<table width='100%'>
													 <tr>
														<td>
														   <center><input type='checkbox' name='repetir18'> 18</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir17'> 17</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir16'> 16</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir15'> 15</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir14'> 14</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir13'> 13</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir12'> 12</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir11'> 11</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir21'> 21</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir22'> 22</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir23'> 23</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir24'> 24</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir25'> 25</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir26'> 26</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir27'> 27</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir28'> 28</center>
														</td>
													 </tr>
													 <tr>
														<td>
														   <center><input type='checkbox' name='repetir48'> 48</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir47'> 47</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir46'> 46</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir45'> 45</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir44'> 44</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir43'> 43</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir42'> 42</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir41'> 41</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir31'> 31</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir32'> 32</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir33'> 33</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir34'> 34</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir35'> 35</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir36'> 36</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir37'> 37</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir38'> 38</center>
														</td>
													 </tr>
													</table>
													<br>
													<center><input type='submit' value='Atualizar' class='genric-btn success'></center>
												</form>
									</div>
								
							  <hr>
							  </div>
							</div>
							<br>
						";
					}
			?>		
					
			<?php		
				}
			?>
			
			
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

