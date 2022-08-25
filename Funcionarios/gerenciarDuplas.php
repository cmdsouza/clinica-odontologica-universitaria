<?php
	session_start();
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
								<h2 class="text-white">Gerenciar Duplas</h2>
								<p class="text-white">Cadastre ou Altere as Duplas Formadas</p>
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
			
			if(isset($_SESSION['mensagem']) && ($_SESSION['mensagem'] == "Dupla Cadastrada")){	
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
			
			if(isset($_SESSION['mensagem']) && ($_SESSION['mensagem'] == "Você escolheu o mesmo aluno")){	
				echo "
					<div class='alert alert-danger alert-dismissible fade show' style='z-index: 5; position: fixed; top: 9%; right: 0; left: 2%; width:50%' role='alert' id='fadeout'>
					  <strong>Erro!</strong> ".$_SESSION['mensagem']."!
					  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
					  </button>
					</div>
				";
				$_SESSION['mensagem'] = "";
			}
			
			if(isset($_SESSION['mensagem']) && ($_SESSION['mensagem'] == "Os alunos são de períodos diferentes")){	
				echo "
					<div class='alert alert-danger alert-dismissible fade show' style='z-index: 5; position: fixed; top: 9%; right: 0; left: 2%; width:50%' role='alert' id='fadeout'>
					  <strong>Erro!</strong> ".$_SESSION['mensagem']."!
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
							<div class="col-lg-11 col-md-12 mt-sm-30">
								<div class=" mt-30"> 
									<form method='POST' action='inserirDupla.php'>
										<h3 class="mb-30">Cadastrar Nova Dupla</h3>
											<table border=0>
												<tr>
													<td>
														<div class="default-select" id="default-select">
															<select name='aluno1'>
																<?php
																	include "../conexao.php";
																	$sqlEnd = "SELECT * FROM tb_aluno ORDER BY nm_nomeAluno ASC";
																	$resultadoEnd = mysql_query($sqlEnd) or die();
																	while($linhaEnd = mysql_fetch_array($resultadoEnd)){
																		echo "<option value='".$linhaEnd['nr_cpfAluno']."'>".$linhaEnd['nm_nomeAluno']." (".$linhaEnd['nr_periodo']."º Período)</option>";
																	}
																?>
															</select>
														</div>
													</td>
													<td>e</td>
													<td>
														<div class="default-select" id="default-select">
															<select name='aluno2'>
																<?php
																	$sqlEnd = "SELECT * FROM tb_aluno ORDER BY nm_nomeAluno DESC";
																	$resultadoEnd = mysql_query($sqlEnd) or die();
																	while($linhaEnd = mysql_fetch_array($resultadoEnd)){
																		echo "<option value='".$linhaEnd['nr_cpfAluno']."'>".$linhaEnd['nm_nomeAluno']." (".$linhaEnd['nr_periodo']."º Período)</option>";
																	}
																?>
															</select>
														</div>
													</td>
													<td>
														<input class="genric-btn primary" type='submit' value='Cadastrar'>
														</form>
													</td>
												</tr>
											</table>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 mt-sm-30">
								<div class="single-element-widget mt-30">
									<h3 class="mb-30">Duplas Cadastradas</h3>
									<table border=0 width='400%'>
										
											<tr>
												<td><center><b>Dupla</b></center></td>
												<td colspan=2><center><b>Ações</b></center></td>
											</tr>
											<?php
											$contadorDupla = 0;
											$sqlDuplas = "SELECT * FROM tb_duplas WHERE nm_situacao = 'Ativo' ORDER BY nr_idDupla ASC";
											$resultadoDuplas = mysql_query($sqlDuplas) or die();
											while($linhaDuplas = mysql_fetch_array($resultadoDuplas)){
												
												$sqlNome = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linhaDuplas['nr_cpf1']."'";
												$resultadoNome = mysql_query($sqlNome) or die();
												while($linhaNome = mysql_fetch_array($resultadoNome)){
													$nome1 = $linhaNome['nm_nomeAluno'];
													$periodo1 = $linhaNome['nr_periodo'];
												}
												
												$sqlNome2 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linhaDuplas['nr_cpf2']."'";
												$resultadoNome2 = mysql_query($sqlNome2) or die();
												while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
													$nome2 = $linhaNome2['nm_nomeAluno'];
													$periodo2 = $linhaNome2['nr_periodo'];
												}
											
												
												echo "
												
													<tr>
														<td><center>".$nome1." e ".$nome2." (".$periodo1."º Período)</center></td>
														<td><center><a class='genric-btn primary' href='progresaoPeriodo.php?periodo1=".$periodo1."&cpf1=".$linhaDuplas['nr_cpf1']."&periodo2=".$periodo2."&cpf2=".$linhaDuplas['nr_cpf2']."'>Progressão de Período</a></center></td>
														<td><center><a class='genric-btn primary' href='regressaoPeriodo.php?periodo1=".$periodo1."&cpf1=".$linhaDuplas['nr_cpf1']."&periodo2=".$periodo2."&cpf2=".$linhaDuplas['nr_cpf2']."'>Regressão de Período</a></center></td>
													</tr>
												
												";
												
												
											$contadorDupla = $contadorDupla + 1;	
											}
											
											
											?>
											
													
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
													
										
										
									</table>
								</div>
							</div>
						</div>
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
