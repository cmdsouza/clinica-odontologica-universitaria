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
								<h2 class="text-white">Meus Materiais</h2>
								<p class="text-white">Cadastre e Organize os seus Materiais Pessoais</p>
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
								<h3 class="mb-30">Novo Material</h3>
								<form action="inserirMateriais.php" method='POST'>
									<div class="mt-10">
										<input type="text" name="nome" placeholder="Nome do Material" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nome do Material'" required class="single-input">
									</div>
									<div class="mt-10">
										<textarea name="obs" required class="single-input">Observação e/ou Descrição</textarea>
									</div>
									<div class="mt-10">
										<select class="single-input" name='esterilizado'>
											<option value='Sim'>Está Esterelizado</option>
											<option value='Nao'>Não Está Esterelizado</option>
											<option value='Nao se Aplica'>Não Precisa Ser Esterilizado</option>
										</select>
									</div>
							</div>
						</div>
						<br><input class="genric-btn primary" type='submit' value='Cadastrar'>
						</form>
					</div>
				</div>
			</div>
			<!-- End Align Area -->		
	
		<!-- Start price Area -->
			<section class="price-area" id="price">
				<div class="container">			
					<h3 class="mb-30">Meus Materiais</h3>
					<div class="row">
						<div class='col-lg-4'>
							<div class='single-price no-padding'>
								<div class='price-top'>
									<h4>Esterilizados</h4>
								</div>
								<ul class='lists'>
									<li style='color: green;'>
										<?php
													include "../conexao.php";
													
													$sqlNome = "SELECT * FROM tb_materiais  WHERE nm_esterilizado = 'Sim' AND nr_cpfAluno = '".$_SESSION['cpf']."'";
													$resultadoNome = mysql_query($sqlNome) or die();
													while($linhaNome = mysql_fetch_array($resultadoNome)){
														echo $linhaNome['nm_material']."<br>";
													}
										?>
									</li>
								</ul>
							</div>
						</div>
						
						<div class='col-lg-4'>
							<div class='single-price no-padding'>
								<div class='price-top'>
									<h4>Não Esterilizados</h4>
								</div>
								<ul class='lists'>
									<li  style='color: red;'>
										<?php
												$sqlNome = "SELECT * FROM tb_materiais  WHERE nm_esterilizado = 'Nao' AND nr_cpfAluno = '".$_SESSION['cpf']."'";
													$resultadoNome = mysql_query($sqlNome) or die();
													while($linhaNome = mysql_fetch_array($resultadoNome)){
														echo $linhaNome['nm_material']."<br>";
													}
										?>
									</li>
								</ul>
							</div>
						</div>
						
						<div class='col-lg-4'>
							<div class='single-price no-padding'>
								<div class='price-top'>
									<h4>Não Precisa de Esterilização</h4>
								</div>
								<ul class='lists'>
									<li  style='color: black;'>
										<?php
													$sqlNome = "SELECT * FROM tb_materiais  WHERE nm_esterilizado = 'Nao se Aplica' AND nr_cpfAluno = '".$_SESSION['cpf']."'";
													$resultadoNome = mysql_query($sqlNome) or die();
													while($linhaNome = mysql_fetch_array($resultadoNome)){
														echo $linhaNome['nm_material']."<br>";
													}
										?>
									</li>
								</ul>
							</div>
						</div>
						
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