<?php
	session_start();
	date_default_timezone_set('america/sao_paulo');
	include "../conexao.php";
	$sqlNome = "SELECT * FROM tb_aluno WHERE nr_cpfAluno ='".$_SESSION['cpf']."'";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$periodo = $linhaNome['nr_periodo'];
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
		</head>
		<body>

		  <header id="header" id="home">
		    <div class="container">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li class="menu-active"><a href="alunos.php#home">Página Inicial</a></li>
					  <li class="menu"><a href="gerenciarConta.php">Gerenciar Conta</a></li>
					  <li class="menu"><a href="criarPacotes.php">Gerenciar Pacotes de Esterilização</a></li>
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
								<h2 class="text-white">Pacotes de Esterilização</h2>
								<p class="text-white">Crie pacotes e movimente-os para a Esterilização</p>
							</div>							
						</div>
					</div>
				</div>
			</section>		
			<!-- End banner Area -->
		
	
	<!-- Start Align Area -->
			<div class="whole-wrap">
				<div class="container">
					
					<div class="section-top-border">
						<div class="row">
							<div class="col-lg-6 col-md-6">
								<h3 class="mb-30">Novo Pacote</h3>
								<form method='POST' action='inserirPacote.php'>
									<div class="mt-10">
										<input type="number" name="pacotes" placeholder="Quantidade de Pacotes" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Quantidade de Pacotes'" required class="single-input" min='1' max='10'>
									</div>
									<div class="mt-10">
										<textarea name='obs' placeholder="Observação" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Observação'" required class="single-input"></textarea>
									</div>
								<br><input class="genric-btn primary" type='submit' value='Criar Pacotes'>
								</form>
							</div>
						</div>
					</div>
			<!-- End Align Area -->		
	
		<!-- Start price Area -->
			<section class="price-area" id="price">
				<div class="container">			
					<h3 class="mb-30">Pacotes Criados</h3>
					
					<?php
						 
						$contador2 = 0;	
										
						$sqlNome = "SELECT * FROM tb_pacoteesterilizacao WHERE nr_cpfAluno = '".$_SESSION['cpf']."'";
						$resultadoNome = mysql_query($sqlNome) or die();
						$numImg = mysql_num_rows($resultadoNome);
						if($numImg == 0){
							echo "<b>Você ainda não criou enhum pacote!</b>";
						}
						
						while($linhaNome = mysql_fetch_array($resultadoNome)){
							$identificador = $linhaNome['nm_identificador'];
							
							echo "
								<div class='row'>		
								<blockquote class='generic-blockquote'>
									<h4>Pacote ".$identificador."</h4>
								
							";
								
							echo "
								<li>Quantidade: ".$linhaNome['nr_quantidadePacotes']."</li>
								<li>Obs.: ".$linhaNome['nm_observacoesPacote']."</li>
							";
							
							if($linhaNome['nm_estado'] == 'Aguardando Movimentacao'){
								echo "
									<br>
										<form method='POST' action='movimentarEsterilizacao.php'>
											<input type='hidden' name='id' value='".$linhaNome['nm_identificador']."'>
											<input type='submit' class='genric-btn success' value='Movimentar para Esterilização'>
										</form>
									
								";
							}
							
							if($linhaNome['nm_estado'] == 'Aguardando Recebimento'){
								echo "<span class='badge badge-danger'>Aguardando Recebimento na Esterilização</span>";
							}
							
							if($linhaNome['nm_estado'] == 'Em Processamento'){
								echo "<span class='badge badge-danger'>Em Processamento</span>";
							}
							
							if($linhaNome['nm_estado'] == 'Finalizado'){
								echo "<span class='badge badge-danger'>Pacote Esterelizado. Passe na Esterilização!</span>";
							}
							
							if($linhaNome['nm_estado'] == 'Aguardando Recebimento (Aluno)'){
								echo "
									<br>
										<form method='POST' action='receberPacote.php'>
											<input type='hidden' name='id' value='".$linhaNome['nm_identificador']."'>
											<span class='badge badge-danger'>Pacote Esterelizado. Você passou na Esterilização?</span><br><br>
											<input type='submit' class='genric-btn success' value='Receber Pacote'>
										</form>
									
								";
							}
							
							if($linhaNome['nm_estado'] == 'Fim'){
								echo "<span class='badge badge-success'>Pacote Esterelizado!</span>";
							}
							
							echo "</blockquote>
									</div>";
							
							$contador2 = $contador2 + 1;
						}
						
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