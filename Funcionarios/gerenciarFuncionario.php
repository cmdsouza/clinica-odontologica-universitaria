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
								<h2 class="text-white">Gerenciar Colaborador</h2>
								<p class="text-white">Cadastre ou Altere os Dados dos Funcionários da Clínica</p>
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
			
			if(isset($_SESSION['mensagem']) && ($_SESSION['mensagem'] == "Colaborador Cadastrado")){	
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
							<div class="col-lg-11 col-md-12 mt-sm-30">
								<div class=" mt-30"> 
									<form method='POST' action='inserirFuncionario.php'>
										<h3 class="mb-30">Cadastrar Novo Colaborador</h3>
										<div class='mt-10'>
											<input type='text' name='nome' placeholder='Nome do Colaborador' onfocus='this.placeholder = ''' onblur='this.placeholder = 'Nome do Colaborador'' required class='single-input'>
										</div>
										<div class='mt-10'>
											<input type='password' name='senha' placeholder='Senha (12345678)' onfocus='this.placeholder = ''' onblur='this.placeholder = 'Senha (12345678)'' required class='single-input' disabled>
										</div>
										<div class='mt-10'>
											<input type='email' name='email' placeholder='E-mail' onfocus='this.placeholder = ''' onblur='this.placeholder = 'E-mail'' required class='single-input'>
										</div>
										<div class='mt-10'>
											<select name='tipo' class='single-input'>
												<option value='Recepcao'>Recepção</option>
												<option value='Professor'>Professor</option>
												<option value='Esterilizacao'>Esterilização</option>
												<option value='Administrador'>Administrador</option>
											</select>
										</div>
										<br><input class="genric-btn primary" type='submit' value='Cadastrar'>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Align Area -->
			
			<!-- Start price Area -->
			<section class="price-area " id="price">
				<div class="container">					
					<div class="row">
						<?php
							
							
							echo "
								<div class='col-lg-4'>
									<div class='single-price no-padding'>
										<div class='price-top'>
											<h4>Recepção</h4>
										</div>
										<ul class='lists'>
							";
									
							$sqlNome = "SELECT * FROM tb_funcionarios WHERE nm_tipo = 'Recepcao' ORDER BY nm_nomeFuncionario";
							$resultadoNome = mysql_query($sqlNome) or die();
							while($linhaNome = mysql_fetch_array($resultadoNome)){
								echo "<li><b>".$linhaNome['nm_nomeFuncionario']."</b> (ID: ".$linhaNome['nr_cpfFuncionario'].") &nbsp <a data-toggle='modal' data-target='#ExemploModalCentralizado".$linhaNome['nr_cpfFuncionario']."'><img src='icones/edit.png'></a></li>";
								
								echo "
								
											<!-- Modal -->
												<div class='modal fade' id='ExemploModalCentralizado".$linhaNome['nr_cpfFuncionario']."' tabindex='-1' role='dialog' aria-labelledby='TituloModalCentralizado' aria-hidden='true'>
												  <div class='modal-dialog modal-dialog-centered' role='document'>
													<div class='modal-content'>
													  <div class='modal-header'>
														<h5 class='modal-title' id='TituloModalCentralizado'>Alterar Dados:</h5>
														<button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>
														  <span aria-hidden='true'>&times;</span>
														</button>
													  </div>
													  <div class='modal-body'>
														<form method='POST' action='atualizarFuncionario.php'>
															<input type='hidden' name='cpf' value='".$linhaNome['nr_cpfFuncionario']."'>
															<b>Nome: </b><input type='text' name='nome' value='".$linhaNome['nm_nomeFuncionario']."' class='single-input'><br>
															<b>E-mail: </b><input type='text' name='email' value='".$linhaNome['nm_emailFuncionario']."' class='single-input'><br>
															
													  </div>
													  <div class='modal-footer'>
														<a class='btn btn-secondary' href='resetarSenha.php?cpf=".$linhaNome['nr_cpfFuncionario']."&tipo=funcionario'>Resetar Senha (p/ 12345678)</a>
														<!--<a class='btn btn-secondary' href='deletarFuncionario.php?cpf=".$linhaNome['nr_cpfFuncionario']."'>Excluir</a>-->
														<input type='submit' type='button' class='btn btn-primary' value='Atualizar'>
														</form>
													  </div>
													</div>
												  </div>
												</div>
								
								";
							}
									
							echo "
								
									</ul>
								</div>
							</div>
							";
							
							
							echo "
								<div class='col-lg-4'>
									<div class='single-price no-padding'>
										<div class='price-top'>
											<h4>Professores</h4>
										</div>
										<ul class='lists'>
							";
									
							$sqlNome1 = "SELECT * FROM tb_funcionarios WHERE nm_tipo = 'Professor' ORDER BY nm_nomeFuncionario";
							$resultadoNome1 = mysql_query($sqlNome1) or die();
							while($linhaNome1 = mysql_fetch_array($resultadoNome1)){
								echo "<li><b>".$linhaNome1['nm_nomeFuncionario']."</b> (ID: ".$linhaNome1['nr_cpfFuncionario'].") &nbsp <a data-toggle='modal' data-target='#ExemploModalCentralizado".$linhaNome1['nr_cpfFuncionario']."'><img src='icones/edit.png'></a></li>";
								
								echo "
								
											<!-- Modal -->
												<div class='modal fade' id='ExemploModalCentralizado".$linhaNome1['nr_cpfFuncionario']."' tabindex='-1' role='dialog' aria-labelledby='TituloModalCentralizado' aria-hidden='true'>
												  <div class='modal-dialog modal-dialog-centered' role='document'>
													<div class='modal-content'>
													  <div class='modal-header'>
														<h5 class='modal-title' id='TituloModalCentralizado'>Alterar Dados:</h5>
														<button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>
														  <span aria-hidden='true'>&times;</span>
														</button>
													  </div>
													  <div class='modal-body'>
														<form method='POST' action='atualizarFuncionario.php'>
															<input type='hidden' name='cpf' value='".$linhaNome1['nr_cpfFuncionario']."'>
															<b>Nome: </b><input type='text' name='nome' value='".$linhaNome1['nm_nomeFuncionario']."' class='single-input'><br>
															<b>E-mail: </b><input type='text' name='email' value='".$linhaNome1['nm_emailFuncionario']."' class='single-input'><br>
															
													  </div>
													  <div class='modal-footer'>
														<a class='btn btn-secondary' href='resetarSenha.php?cpf=".$linhaNome1['nr_cpfFuncionario']."&tipo=funcionario'>Resetar Senha (p/ 12345678)</a>
														<a class='btn btn-secondary' href='deletarFuncionario.php?cpf=".$linhaNome1['nr_cpfFuncionario']."&tipo=funcionario'>Excluir</a>
														<input type='submit' type='button' class='btn btn-primary' value='Atualizar'>
														</form>
													  </div>
													</div>
												  </div>
												</div>
								
								";
								
							}
									
							echo "
								
									</ul>
								</div>
							</div>
							";
							
							echo "
								<div class='col-lg-4'>
									<div class='single-price no-padding'>
										<div class='price-top'>
											<h4>Esterilização</h4>
										</div>
										<ul class='lists'>
							";
									
							$sqlNome2 = "SELECT * FROM tb_funcionarios WHERE nm_tipo = 'Esterilizacao' ORDER BY nm_nomeFuncionario";
							$resultadoNome2 = mysql_query($sqlNome2) or die();
							while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
								echo "<li><b>".$linhaNome2['nm_nomeFuncionario']."</b> (ID: ".$linhaNome2['nr_cpfFuncionario'].") &nbsp <a data-toggle='modal' data-target='#ExemploModalCentralizado".$linhaNome2['nr_cpfFuncionario']."'><img src='icones/edit.png'></a></li>";
								
								echo "
								
											<!-- Modal -->
												<div class='modal fade' id='ExemploModalCentralizado".$linhaNome2['nr_cpfFuncionario']."' tabindex='-1' role='dialog' aria-labelledby='TituloModalCentralizado' aria-hidden='true'>
												  <div class='modal-dialog modal-dialog-centered' role='document'>
													<div class='modal-content'>
													  <div class='modal-header'>
														<h5 class='modal-title' id='TituloModalCentralizado'>Alterar Dados:</h5>
														<button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>
														  <span aria-hidden='true'>&times;</span>
														</button>
													  </div>
													  <div class='modal-body'>
														<form method='POST' action='atualizarFuncionario.php'>
															<input type='hidden' name='cpf' value='".$linhaNome2['nr_cpfFuncionario']."'>
															<b>Nome: </b><input type='text' name='nome' value='".$linhaNome2['nm_nomeFuncionario']."' class='single-input'><br>
															<b>E-mail: </b><input type='text' name='email' value='".$linhaNome2['nm_emailFuncionario']."' class='single-input'><br>
															
													  </div>
													  <div class='modal-footer'>
														<a class='btn btn-secondary' href='resetarSenha.php?cpf=".$linhaNome2['nr_cpfFuncionario']."&tipo=funcionario'>Resetar Senha (p/ 12345678)</a>
														<a class='btn btn-secondary' href='deletarFuncionario.php?cpf=".$linhaNome2['nr_cpfFuncionario']."&tipo=funcionario'>Excluir</a>
														<input type='submit' type='button' class='btn btn-primary' value='Atualizar'>
														</form>
													  </div>
													</div>
												  </div>
												</div>
								
								";
							}
							
							
									
							echo "
								
									</ul>
								</div>
							</div>
							";
							
							echo "
								<div class='col-lg-4'><br>
									<div class='single-price no-padding'>
										<div class='price-top'>
											<h4>Administrador</h4>
										</div>
										<ul class='lists'>
							";
									
							$sqlNome2 = "SELECT * FROM tb_funcionarios WHERE nm_tipo = 'Administrador' ORDER BY nm_nomeFuncionario";
							$resultadoNome2 = mysql_query($sqlNome2) or die();
							while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
								echo "<li><b>".$linhaNome2['nm_nomeFuncionario']."</b> (ID: ".$linhaNome2['nr_cpfFuncionario'].") &nbsp <a data-toggle='modal' data-target='#ExemploModalCentralizado".$linhaNome2['nr_cpfFuncionario']."'><img src='icones/edit.png'></a></li>";
								
								echo "
								
											<!-- Modal -->
												<div class='modal fade' id='ExemploModalCentralizado".$linhaNome2['nr_cpfFuncionario']."' tabindex='-1' role='dialog' aria-labelledby='TituloModalCentralizado' aria-hidden='true'>
												  <div class='modal-dialog modal-dialog-centered' role='document'>
													<div class='modal-content'>
													  <div class='modal-header'>
														<h5 class='modal-title' id='TituloModalCentralizado'>Alterar Dados:</h5>
														<button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>
														  <span aria-hidden='true'>&times;</span>
														</button>
													  </div>
													  <div class='modal-body'>
														<form method='POST' action='atualizarFuncionario.php'>
															<input type='hidden' name='cpf' value='".$linhaNome2['nr_cpfFuncionario']."'>
															<b>Nome: </b><input type='text' name='nome' value='".$linhaNome2['nm_nomeFuncionario']."' class='single-input'><br>
															<b>E-mail: </b><input type='text' name='email' value='".$linhaNome2['nm_emailFuncionario']."' class='single-input'><br>
															
													  </div>
													  <div class='modal-footer'>
														<a class='btn btn-secondary' href='resetarSenha.php?cpf=".$linhaNome2['nr_cpfFuncionario']."&tipo=funcionario'>Resetar Senha (p/ 12345678)</a>
														<a class='btn btn-secondary' href='deletarFuncionario.php?cpf=".$linhaNome2['nr_cpfFuncionario']."&tipo=funcionario'>Excluir</a>
														<input type='submit' type='button' class='btn btn-primary' value='Atualizar'>
														</form>
													  </div>
													</div>
												  </div>
												</div>
								
								";
							}
							
							
									
							echo "
								
									</ul>
								</div>
							</div>
							";
						
						?>
						
					</div>
				</div>	
			</section>
			<!-- End price Area -->
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
		</body>
	</html>
