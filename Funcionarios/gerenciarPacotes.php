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
								<h2 class="text-white">Gerenciar Pacotes</h2>
								<p class="text-white">Receber ou Movimentar os Pacotes da Esterilização</p>
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
			
			if(isset($_SESSION['mensagem']) && ($_SESSION['mensagem'] == "A quantidade recebida é diferente da quantidade movimentada pelo aluno")){	
				echo "
					<div class='alert alert-danger alert-dismissible fade show' style='z-index: 5; position: fixed; top: 9%; right: 0; left: 2%; width:50%' role='alert' id='fadeout'>
					  <strong>Erro!</strong> ".$_SESSION['mensagem'].".
					  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
					  </button>
					</div>
				";
				$_SESSION['mensagem'] = "";
			}
			?>
			
		<br>
		<!-- Start price Area -->
			<section class="price-area" id="price">
				<div class="container">			
					<h3 class="mb-30">Pacotes Aguardando Recebimento na Esterilização</h3>
					
					<?php
						$cont = 0;
						
						$sqlPacote = "SELECT * FROM tb_pacoteesterilizacao WHERE nm_estado ='Aguardando Recebimento' ORDER BY dt_movimentacao";
						$resultadoPacote = mysql_query($sqlPacote) or die();
						
						$numImg = mysql_num_rows($resultadoPacote);
						if($numImg == 0){
							echo "<b>Não há Pacotes Aguardando Recebimento da Esterilização!</b>";
						}
						
						while($linhaPacote = mysql_fetch_array($resultadoPacote)){
						
							echo "
								<form method='POST' action='receberPacote.php'>
									<input type='hidden' name='identificador' value='".$linhaPacote['nm_identificador']."'>
									<div class='row'>		
										<blockquote class='generic-blockquote'>
											<h4>".$linhaPacote['nm_identificador']."</h4>
									";
									
									echo "<li>Obs.: ".$linhaPacote['nm_observacoesPacote']."</li>
										";
									
									
									echo "<br>
											<input type='button' data-toggle='modal' data-target='#modalExemplo".$cont."' class='genric-btn primary' value='Receber o Pacote'>
										</blockquote>
									</div>
								</form>	
							
							";
							
							echo "
							
							<div class='modal fade' id='modalExemplo".$cont."' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
							  <div class='modal-dialog' role='document'>
								<div class='modal-content'>
								  <div class='modal-header'>
									<h5 class='modal-title' id='exampleModalLabel'>Quantos Pacotes Foram Entregues?</h5>
									<button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>
									  <span aria-hidden='true'>&times;</span>
									</button>
								  </div>
								  <div class='modal-body'>
									<div class='mt-10'>
									<form method='POST' action='receberPacote.php'>
										<input type='hidden' value='".$linhaPacote['nm_identificador']."' name='id'>
										<input type='number' name='pacotes' placeholder='Quantidade de Pacotes' onfocus='this.placeholder = ''' onblur='this.placeholder = 'Quantidade de Pacotes'' required class='single-input' min='1' max='10'>
									</div>
								  </div>
								  <div class='modal-footer'>
									<button type='button' class='btn btn-secondary' data-dismiss='modal'>Fechar</button>
									<button type='submit' class='genric-btn primary'>Receber</button>
									</form>
								  </div>
								</div>
							  </div>
							</div>
							
							";
							
							
							$cont = $cont + 1;
						}
							
							
							
							/*
							
							echo "
								<form method='POST' action='receberPacote.php'>
									<input type='hidden' name='identificador' value='".$linhaPacote['nm_identificador']."'>
									<div class='row'>		
										<blockquote class='generic-blockquote'>
											<h4>".$linhaPacote['nm_identificador']."</h4>
									";
									
									echo "<li>Obs.: ".$linhaPacote['nm_observacoesPacote']."</li>
										";
									}
									
									echo "<br>
											<input type='submit' class='genric-btn primary' value='Receber o Pacote'>
										</blockquote>
									</div>
								</form>	
							";
							
							*/
						
					?>	
				</div>	
			</section>
			<!-- End price Area -->
			<hr style='width:85%;'><br>

			<!-- Start price Area -->
			<section class="price-area" id="price">
				<div class="container">			
					<h3 class="mb-30">Pacotes em Processo de Esterilização</h3>
					
					<?php
						
						$sqlPacote = "SELECT * FROM tb_pacoteesterilizacao WHERE nm_local ='Na Esterilizacao' AND nm_estado = 'Em Processamento' ORDER BY dt_movimentacao";
						$resultadoPacote = mysql_query($sqlPacote) or die();
						
						$numImg = mysql_num_rows($resultadoPacote);
						if($numImg == 0){
							echo "<b>Não há Pacotes na Esterilização!</b>";
						}
						
						while($linhaPacote = mysql_fetch_array($resultadoPacote)){
							if($linhaPacote['nm_estado'] == 'Finalizado'){
								$local = 'movimentarPacoteAluno.php';
								$botao = 'Entregar para o Aluno';
								$cor = 'danger';
							}else{
								$local = 'finalizarPacote.php';
								$botao = 'Finalizar Esterilização';
								$cor = 'primary';
							}
							
							echo "
								<form method='POST' action='".$local."'>
									<input type='hidden' name='identificador' value='".$linhaPacote['nm_identificador']."'>
									<div class='row'>		
										<blockquote class='generic-blockquote'>
											<h4>".$linhaPacote['nm_identificador']."</h4>
									";
									
									echo "<li>Quantidade: ".$linhaPacote['nr_quantidadePacotes']."</li>
											<li>Obs.: ".$linhaPacote['nm_observacoesPacote']."</li>
										";
									
									echo "<br>
											<input type='submit' class='genric-btn ".$cor."' value='".$botao."'>
										</blockquote>
									</div>
								</form>	
							";
						}
							
						
					?>	
				</div>	
			</section>
			<!-- End price Area -->
			
		<hr style='width:85%;'><br>
		<!-- Start price Area -->
			<section class="price-area" id="price">
				<div class="container">			
					<h3 class="mb-30">Pacotes Esterilizados Aguardando Retirada pelo Aluno</h3>
					
					<?php
						
						$sqlPacote = "SELECT * FROM tb_pacoteesterilizacao WHERE nm_local ='Na Esterilizacao' and nm_estado='Aguardando Recebimento (Aluno)' OR nm_estado = 'Finalizado' ORDER BY dt_movimentacao";
						$resultadoPacote = mysql_query($sqlPacote) or die();
						
						$numImg = mysql_num_rows($resultadoPacote);
						if($numImg == 0){
							echo "<b>Não há Pacotes Aguardando Recebimento do Aluno!</b>";
						}
						
						while($linhaPacote = mysql_fetch_array($resultadoPacote)){
						
							if($linhaPacote['nm_estado'] == 'Finalizado'){
								$local = 'movimentarPacoteAluno.php';
								$botao = "<input type='submit' class='genric-btn danger' value='Entregar para o Aluno'>";
							}else{
								$local = '';
								$botao = "<span class='badge badge-danger'>Aguardando Recebimento do Aluno</span>";
							}
							
							echo "
								<form method='POST' action='".$local."'>
									<input type='hidden' name='identificador' value='".$linhaPacote['nm_identificador']."'>
									<div class='row'>		
										<blockquote class='generic-blockquote'>
											<h4>".$linhaPacote['nm_identificador']."</h4>
									";
									
									echo "<li>Quantidade: ".$linhaPacote['nr_quantidadePacotes']."</li>
											<li>Obs.: ".$linhaPacote['nm_observacoesPacote']."</li>
										";
									
									echo "<br>
											".$botao."
										</blockquote>
									</div>
								</form>	
							";
						}
							
						
					?>	
				</div>	
			</section>
			<!-- End price Area -->
			<hr style='width:85%;'><br>
			
			<!-- Start price Area -->
			<section class="price-area" id="price">
				<div class="container">			
					<h3 class="mb-30">Pacotes Finalizados <a href='relatorioPacotes.php'><img src='icones/export.png'></a></h3>
					
					<?php
						
						$sqlPacote = "SELECT * FROM tb_pacoteesterilizacao WHERE nm_local ='Com o Aluno' and nm_estado='Fim' ORDER BY dt_movimentacao";
						$resultadoPacote = mysql_query($sqlPacote) or die();
						
						$numImg = mysql_num_rows($resultadoPacote);
						if($numImg == 0){
							echo "<b>Não há Pacotes Finalizados!</b>";
						}
						
						while($linhaPacote = mysql_fetch_array($resultadoPacote)){
						
							
							echo "
									<input type='hidden' name='identificador' value='".$linhaPacote['nm_identificador']."'>
									<div class='row'>		
										<blockquote class='generic-blockquote'>
											<h4>".$linhaPacote['nm_identificador']."</h4>
									";
									
									echo "<li>Quantidade: ".$linhaPacote['nr_quantidadePacotes']."</li>
											<li>Obs.: ".$linhaPacote['nm_observacoesPacote']."</li>
										";
									
									echo "<br>
											<span class='badge badge-success'>Pacote Finalizado no dia ".$linhaPacote['dt_devolucao']."</span>
										</blockquote>
									</div>
							";
						}
							
						
					?>	
				</div>	
			</section>
			<!-- End price Area -->
			
			
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
