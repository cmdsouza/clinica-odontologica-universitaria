<?php
session_start();
include "../conexao.php";
$idConsulta = $_GET['idConsulta'];

$_SESSION['idCOnsulta'] = $idConsulta;

$sqlSala = "SELECT * FROM tb_consulta WHERE nr_idConsulta = ".$idConsulta;
$resultadoSala = mysql_query($sqlSala) or die();
while($linhaSala = mysql_fetch_array($resultadoSala)){
	$dataConsulta = $linhaSala['dt_dataAtendimento'];
	$horaConsulta = $linhaSala['hr_horarioAtendimento'];
	$tipoConsulta = $linhaSala['nm_numeroConsulta'];
	$numeroProcedimento = $linhaSala['nr_idProcedimento'];
	$cpfPaciente = $linhaSala['nr_cpfPaciente'];
}

$sqlSala = "SELECT * FROM tb_paciente WHERE nr_cpfPaciente = '".$cpfPaciente."'";
$resultadoSala = mysql_query($sqlSala) or die();
while($linhaSala = mysql_fetch_array($resultadoSala)){
	$generoPaciente = $linhaSala['nm_genero'];
	$nomePaciente = $linhaSala['nm_nomePaciente'];
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
		<title>Sistema Multiplus | M+</title>

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
					  <li class="menu"><a href="consultarPacientes.php">Consultar Pacientes</a></li>
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
								<h2 class="text-white">Iniciar a Consulta: <?php echo $nomePaciente; ?></h2>
								<h2 class="text-white"><?php echo $dataConsulta." - ".$horaConsulta; ?> horas</h2>
								<p class="text-white">
									<?php
										if($tipoConsulta == 1){
											echo "Anamnese & Odontograma";
										}else{
											$sqlP = "SELECT * FROM tb_procedimento WHERE nr_idProcedimento = ".$numeroProcedimento;
											$resultadoP = mysql_query($sqlP) or die();
											while($linhaP = mysql_fetch_array($resultadoP)){
												echo $linhaP['nm_procedimento'];
											}
										}
								
									?>
								</p>
							</div>							
						</div>
					</div>
				</div>
			</section>		
			<!-- End banner Area -->
		
		<!-- About Generic Start -->
		<div class="main-wrapper">	

				<div class="whole-wrap">
				<div class="container"><br><br>
					<div class="section">
						<h3 class="mb-30">Resumo da Consulta</h3>
						<h4>Imprimir Prontuário (+ Anamnese)</h4>
							<p><a target='_blank' href='pdfAnamnese.php'>Clique aqui para gerar o PDF com as respostas</a></p>
						<br>
						<h4>Odontograma</h4>
							<p>[Odontograma em forma de imagem]</p>
						
						<form method='POST' action='salvarConsulta.php'>
							<input type='hidden' value='<?php echo $idConsulta; ?>' name='idConsulta'>
							<br>
							<h5>Alguma observação extra?</h5>
							<br>
							<textarea name='observacao' class="single-input"></textarea>
							<br>
							<input type='submit' class="genric-btn primary" value='Finalizar Consulta'>
						</form>
					</div>
			</div><br>
			<!-- End Generic Start -->		

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Equipe de Desenvolvimento</h6>
								<p>
									Carlos (Eng. Elétrica), Conrado  (Odontologia), Mariana (Eng. Elétrica), Bruno  (Eng. da Computação) e Adan  (Coordenador das Engenharias).
								</p>
								<p class="footer-text">
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
									Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados | Template adaptado fornecido por <a href="https://colorlib.com" target="_blank">Colorlib</a>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								</p>	
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Logoff</h6>
								<a href='../logout.php'><p>Clique aqui para sair.</p></a>
							</div>
						</div>						
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Faculdade Multivix</h6>
								<div class="footer-social d-flex align-items-center">
									<a href="https://multivix.edu.br/"><i><img width='40%' height='35%' src='../img/Logo-Multivix.png'></i></a>
								</div>
							</div>
						</div>							
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
