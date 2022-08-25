<?php
	session_start();
	include "../conexao.php";
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
		</head>
		<body>

		  <header id="header" id="home">
		    <div class="container">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
					<?php
					
						switch($_SESSION['tipo']){
							case "Professor":
							
					?>
								<li class="menu-active"><a href="funcionarios.php#home">Página Inicial</a></li>
								  
					
					<?php
					
							break;
							
							case "Recepcao":
							
					?>
					
								<li class="menu-active"><a href="funcionarios.php#home">Página Inicial</a></li>
							  <li class="menu-has-children"><a href="">Gerenciar Paciente</a>
								<ul>
								  <li><a href="marcarConsulta.php">Marcar / Remarcar Consulta</a></li>
								  <li><a href="remarcarConsulta.php">Alterar Data de uma Consulta</a></li>
								  <li><a href="cadastrarPaciente.php">Cadastrar Paciente</a></li>
								  <li><a href="gerenciarPaciente.php">Gerenciar Cadastros</a></li>
								</ul>
							  </li>	
							  <li class="menu-has-children"><a href="">Gerenciar Alunos</a>
								<ul>
								  <li><a href="cadastrarAluno.php">Cadastrar Aluno</a></li>
								  <li><a href="gerenciarDuplas.php">Gerenciar Duplas</a></li>
								</ul>
							  </li>
							  <li class="menu"><a href="gerenciarSala.php">Gerenciar Consultórios</a></li>
							  <li class="menu"><a href="gerenciarFuncionario.php">Gerenciar Colaboradores</a></li>
					
					<?php
					
							break;
							
							case "Esterilizacao":
							
					?>
					
							<li class="menu-active"><a href="funcionarios.php#home">Página Inicial</a></li>
							  <li class="menu-has-children"><a href="">Esterilização</a>
								<ul>
								  <li><a href="gerenciarPacotes.php">Gerenciar Pacotes</a></li>
								</ul>
							  </li>
					
					<?php
					
							break;
							
							case 'Administrador':
							
					?>
					
							<li class="menu-active"><a href="funcionarios.php#home">Página Inicial</a></li>
							  <li class="menu-has-children"><a href="">Gerenciar Paciente</a>
								<ul>
								  <li><a href="marcarConsulta.php">Marcar / Remarcar Consulta</a></li>
								  <li><a href="remarcarConsulta.php">Alterar Data de uma Consulta</a></li>
								  <li><a href="cadastrarPaciente.php">Cadastrar Paciente</a></li>
								  <li><a href="gerenciarPaciente.php">Gerenciar Cadastros</a></li>
								</ul>
							  </li>	
							  <li class="menu-has-children"><a href="">Gerenciar Alunos</a>
								<ul>
								  <li><a href="cadastrarAluno.php">Cadastrar Aluno</a></li>
								  <li><a href="gerenciarDuplas.php">Gerenciar Duplas</a></li>
								  <li><a href="gerenciarPeriodos.php">Gerenciar Períodos</a></li>
								</ul>
							  </li>
							  <li class="menu"><a href="gerenciarSala.php">Gerenciar Consultórios</a></li>
							  <li class="menu"><a href="gerenciarFuncionario.php">Gerenciar Colaboradores</a></li>
							  <li class="menu-has-children"><a href="">Gerenciar Estoque</a>
								<ul>
								  <li><a href="cadastrarProdutos.php">Cadastrar Produtos</a></li>
								  <li><a href="movimentarProdutos.php">Movimentar Produtos</a></li>
								</ul>
							  </li>
							  <li class="menu-has-children"><a href="">Esterilização</a>
								<ul>
								  <li><a href="gerenciarPacotes.php">Gerenciar Pacotes</a></li>
								</ul>
							  </li>

					
					<?php
							break;
						}
					
					?>
			          
					  
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
								<h2 class="text-white">Marcar Consulta</h2>
								<p class="text-white">Selecione um paciente da Lista de Espera!</p>
							</div>							
						</div>
					</div>
				</div>
			</section>		
			<!-- End banner Area -->
		
		<style>
			#fadeout {
			  opacity: 1;
			  transition: 1s opacity;
			}
			</style>
			
			<script>
			window.onload = function() {
			  window.setTimeout(fadeout, 5000); //8 seconds
			}

			function fadeout() {
			  document.getElementById('fadeout').style.opacity = '0';
			}
			</script>
			
			<?php
			
			if(isset($_SESSION['mensagem']) && ($_SESSION['mensagem'] == "Marcação Efetuada")){	
				echo "
					<div class='alert alert-success alert-dismissible fade show' style='z-index: 5; position: fixed; top: 9%; right: 0; left: 2%; width:50%' role='alert' id='fadeout'>
					  <strong>Sucesso!</strong> ".$_SESSION['mensagem']."!
					  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
					  </button>
					</div>
				";
				$_SESSION['mensagem'] = "";
			}
			?>
		
		
		<!-- Start Align Area -->
			<div class="whole-wrap">
				<div class="container">
					<div class="section-top-border">
						<div class="row">
							<h3 class="mb-30">Lista de Espera <img src='icones/searching-magnifying-glass.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Aperte a tecla F3 para iniciar a pesquisa!'></h3>
						</div>
						<table border=0 width='100%'>
							<tr>
								<td><center><b>#</b></center></td>
								<td><center><b>Nome</b></center></td>
								<td><center><b>CPF</b></center></td>
								<td><center><b>Telefone</b></center></td>
								<td><center><b>Idade</b></center></td>
								<td><center><b>Gênero</b></center></td>
								<td></td>
							</tr>
							
							<?php
								
								date_default_timezone_set('america/sao_paulo');
								
								$a = 0;
								
								$sqlEnd = "SELECT * FROM tb_paciente ORDER BY nr_idEndereco ASC";
								$resultadoEnd = mysql_query($sqlEnd) or die();
								while($linhaEnd = mysql_fetch_array($resultadoEnd)){
									$sqlEnd2 = "SELECT * FROM tb_consulta WHERE nr_cpfPaciente = '".$linhaEnd['nr_cpfPaciente']."'";
									$resultadoEnd2 = mysql_query($sqlEnd2) or die();
									$numImg = mysql_num_rows($resultadoEnd2);
									if($numImg == 0){
											list($dia, $mes, $ano) = explode('/', $linhaEnd['dt_nascimento']);
											// Descobre que dia é hoje e retorna a unix timestamp
											$hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
											// Descobre a unix timestamp da data de nascimento do fulano
											$nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
											// Depois apenas fazemos o cálculo já citado :)
											$idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
										
											if($a%2 == 0){
												$color = "white";
											}else{
												$color = "#CCCCCC";
											}
										
											echo "									
												<tr style='background-color:".$color.";'>
													<td><center>".($a+1)."</center></td>
													<td><center>".$linhaEnd['nm_nomePaciente']."</center></td>
													<td><center>".$linhaEnd['nr_cpfPaciente']."</center></td>
													<td><center>".$linhaEnd['nr_telefone']."</center></td>
													<td><center>".$idade." anos</center></td>
													<td><center>".$linhaEnd['nm_genero']."</center></td>
													<td><center><button class='genric-btn primary' data-toggle='modal' data-target='#ExemploModalCentralizado".$linhaEnd['nr_cpfPaciente']."'>Marcar Consulta</button></center></td>
												</tr>		
												
											<!-- Modal -->
												<div class='modal fade' id='ExemploModalCentralizado".$linhaEnd['nr_cpfPaciente']."' tabindex='-1' role='dialog' aria-labelledby='TituloModalCentralizado' aria-hidden='true'>
												  <div class='modal-dialog modal-dialog-centered' role='document'>
													<div class='modal-content'>
													  <div class='modal-header'>
														<h5 class='modal-title' id='TituloModalCentralizado'>Marcar Consulta: ".$linhaEnd['nm_nomePaciente']."</h5>
														<button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>
														  <span aria-hidden='true'>&times;</span>
														</button>
													  </div>
													  <div class='modal-body'>
														<form method='POST' action='inserirMarcacao.php'>
															<input type='hidden' name='paciente' value='".$linhaEnd['nr_cpfPaciente']."'>
															<b>Data da Consulta:</b><input type='date' class='single-input' name='data'><br>
															<b>Horário:</b><input type='text' class='single-input' name='horario' placeholder='Somente números ;)'><br>
															<b>Consultório:</b>
															<select class='single-input' name='sala'>
											";
											
															$sqlEnd2 = "SELECT * FROM tb_sala ORDER BY nr_idSala";
															$resultadoEnd2 = mysql_query($sqlEnd2) or die();
															while($linhaEnd2 = mysql_fetch_array($resultadoEnd2)){
																echo "<option value='".$linhaEnd2['nr_idSala']."'>".$linhaEnd2['nm_nomeSala']."</option>";
															}
											
											echo "
															</select><br>
															<b>Dupla:</b>
															<select class='single-input' name='dupla'>
											";
											
															$sqlNome = "SELECT * FROM tb_duplas WHERE nm_situacao = 'Ativo'";
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
											
											echo "
															<select><br>
															<b>Motivo da Consulta:</b><input type='text' class='single-input' name='motivo' placeholder='Breve Descrição'><br>
													  </div>
													  <div class='modal-footer'>
														<button type='button' class='btn btn-secondary' data-dismiss='modal'>Fechar</button>
														<input type='submit' type='button' class='btn btn-primary' value='Marcar'>
														</form>
													  </div>
													</div>
												  </div>
												</div>
											
											";
											
											
											$a = $a + 1;
									}
								}
							?>							
						</table>
					</div>
				</div>
			</div>
			<!-- End Align Area -->		
			
			<!-- Start Align Area -->
			<div class="whole-wrap">
				<div class="container">
					<div class="section-top-border">
						<div class="row">
							<h3 class="mb-30">Todos os Pacientes Cadastrados <img src='icones/searching-magnifying-glass.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Aperte a tecla F3 para iniciar a pesquisa!'></h3>
							
							
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
							
							<!-- Modal
							<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
								<div class="modal-content">
								  <div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Pesquisar Paciente</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
									  <span aria-hidden="true">&times;</span>
									</button>
								  </div>
								  <div class="modal-body">
									<form method='POST' action='marcarConsulta.php'>
										<table border=0 width='100%'>
											<tr>
												<td>
													<center>
														<select class="single-input" name='tipoPesquisa'>
															<option value='nr_cpfPaciente'>CPF</option>
															<option value='nm_nomePaciente'>Nome</option>
														</select>
													</center><br>
												</td>
											</tr>
											<tr>
												<td>
													<center>
														<input class="single-input" placeholder='Termo da Pesquisa' type='text' name='pesquisa'>
													</center>
												</td>
											</tr>
										</table>
								  </div>
								  <div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
									<input type="submit" class="btn btn-primary" value='Pesquisar'>
									</form>
								  </div>
								</div>
							  </div>
							</div>
							
						</div>
						 -->
						<?php
						/*
						if(isset($_POST['tipoPesquisa']) && isset($_POST['pesquisa'])){
						?>	
						<h4>Resultado da Pesquisa ("<?php echo $_POST['pesquisa']; ?>")</h4><br>
						<table border=0 width='100%'>
							<tr>
								<td><center><b>Nome</b></center></td>
								<td><center><b>CPF</b></center></td>
								<td><center><b>Telefone</b></center></td>
								<td><center><b>Idade</b></center></td>
								<td><center><b>Gênero</b></center></td>
								<td></td>
							</tr>
							
							<?php
								include "../conexao.php";
								date_default_timezone_set('america/sao_paulo');
								
								$a = 0;
								
								$sqlEnd = "SELECT * FROM tb_paciente WHERE ".$_POST['tipoPesquisa']." ='%".$_POST['pesquisa']."%'";
								$resultadoEnd = mysql_query($sqlEnd) or die();
								while($linhaEnd = mysql_fetch_array($resultadoEnd)){
											list($dia, $mes, $ano) = explode('/', $linhaEnd['dt_nascimento']);
											// Descobre que dia é hoje e retorna a unix timestamp
											$hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
											// Descobre a unix timestamp da data de nascimento do fulano
											$nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
											// Depois apenas fazemos o cálculo já citado :)
											$idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
										
											if($a%2 == 0){
												$color = "white";
											}else{
												$color = "#CCCCCC";
											}
										
											echo "									
												<tr style='background-color:".$color.";'>
													<td><center>".$linhaEnd['nm_nomePaciente']."</center></td>
													<td><center>".$linhaEnd['nr_cpfPaciente']."</center></td>
													<td><center>".$linhaEnd['nr_telefone']."</center></td>
													<td><center>".$idade." anos</center></td>
													<td><center>".$linhaEnd['nm_genero']."</center></td>
													<td><center><button class='genric-btn primary' data-toggle='modal' data-target='#ExemploModalCentralizado".$linhaEnd['nr_cpfPaciente']."'>Marcar Consulta</button></center></td>
												</tr>							

												<!-- Modal -->
												<div class='modal fade' id='ExemploModalCentralizado".$linhaEnd['nr_cpfPaciente']."' tabindex='-1' role='dialog' aria-labelledby='TituloModalCentralizado' aria-hidden='true'>
												  <div class='modal-dialog modal-dialog-centered' role='document'>
													<div class='modal-content'>
													  <div class='modal-header'>
														<h5 class='modal-title' id='TituloModalCentralizado'>Título do modal ".$linhaEnd['nr_cpfPaciente']."</h5>
														<button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>
														  <span aria-hidden='true'>&times;</span>
														</button>
													  </div>
													  <div class='modal-body'>
														...
													  </div>
													  <div class='modal-footer'>
														<button type='button' class='btn btn-secondary' data-dismiss='modal'>Fechar</button>
														<button type='button' class='btn btn-primary'>Salvar mudanças</button>
													  </div>
													</div>
												  </div>
												</div>
											
											";
											
											$a = $a + 1;
								}
							?>							
						</table>
						<br>
						
						<?php	
						}else{}
						*/
						?>
						
						<table border=0 width='100%'>
							<tr>
								<td><center><b>Nome</b></center></td>
								<td><center><b>CPF</b></center></td>
								<td><center><b>Telefone</b></center></td>
								<td><center><b>Idade</b></center></td>
								<td><center><b>Gênero</b></center></td>
								<td></td>
							</tr>
							
							<?php
								date_default_timezone_set('america/sao_paulo');
								
								$a = 0;
								
								$sqlEnd = "SELECT * FROM tb_paciente ORDER BY nm_nomePaciente";
								$resultadoEnd = mysql_query($sqlEnd) or die();
								while($linhaEnd = mysql_fetch_array($resultadoEnd)){
											list($dia, $mes, $ano) = explode('/', $linhaEnd['dt_nascimento']);
											// Descobre que dia é hoje e retorna a unix timestamp
											$hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
											// Descobre a unix timestamp da data de nascimento do fulano
											$nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
											// Depois apenas fazemos o cálculo já citado :)
											$idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
										
											if($a%2 == 0){
												$color = "white";
											}else{
												$color = "#CCCCCC";
											}
										
											echo "									
												<tr style='background-color:".$color.";'>
													<td><center>".$linhaEnd['nm_nomePaciente']."</center></td>
													<td><center>".$linhaEnd['nr_cpfPaciente']."</center></td>
													<td><center>".$linhaEnd['nr_telefone']."</center></td>
													<td><center>".$idade." anos</center></td>
													<td><center>".$linhaEnd['nm_genero']."</center></td>
													<td><center><button class='genric-btn primary' data-toggle='modal' data-target='#ExemploModalCentralizado2".$linhaEnd['nr_cpfPaciente']."'>Marcar Consulta</button></center></td>
												</tr>							

												<!-- Modal -->
												<div class='modal fade' id='ExemploModalCentralizado2".$linhaEnd['nr_cpfPaciente']."' tabindex='-1' role='dialog' aria-labelledby='TituloModalCentralizado' aria-hidden='true'>
												  <div class='modal-dialog modal-dialog-centered' role='document'>
													<div class='modal-content'>
													  <div class='modal-header'>
														<h5 class='modal-title' id='TituloModalCentralizado'>Marcar Consulta: ".$linhaEnd['nm_nomePaciente']."</h5>
														<button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>
														  <span aria-hidden='true'>&times;</span>
														</button>
													  </div>
													  <div class='modal-body'>
														<form method='POST' action='inserirMarcacao.php'>
															<input type='hidden' name='paciente' value='".$linhaEnd['nr_cpfPaciente']."'>
															<b>Data da Consulta:</b><input type='date' class='single-input' name='data'><br>
															<b>Horário:</b><input type='text' class='single-input' name='horario' placeholder='Somente números ;)'><br>
															<b>Consultório:</b>
															<select class='single-input' name='sala'>
											";
											
															$sqlEnd2 = "SELECT * FROM tb_sala ORDER BY nr_idSala";
															$resultadoEnd2 = mysql_query($sqlEnd2) or die();
															while($linhaEnd2 = mysql_fetch_array($resultadoEnd2)){
																echo "<option value='".$linhaEnd2['nr_idSala']."'>".$linhaEnd2['nm_nomeSala']."</option>";
															}
											
											echo "
															</select><br>
															<b>Dupla:</b>
															<select class='single-input' name='dupla'>
											";
											
															$sqlNome = "SELECT * FROM tb_duplas WHERE nm_situacao = 'Ativo'";
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
											
											echo "
															<select><br>
															<b>Motivo da Consulta:</b><input type='text' class='single-input' name='motivo' placeholder='Breve Descrição'><br>
													  </div>
													  <div class='modal-footer'>
														<button type='button' class='btn btn-secondary' data-dismiss='modal'>Fechar</button>
														<input type='submit' type='button' class='btn btn-primary' value='Marcar'>
														</form>
													  </div>
													</div>
												  </div>
												</div>
											
											";
											
											$a = $a + 1;
								}
							?>							
						</table>
					</div>
				</div>
			</div>
			<!-- End Align Area -->		
			

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
		</body>
	</html>
