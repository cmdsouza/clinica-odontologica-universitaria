<?php
	session_start();
	date_default_timezone_set('america/sao_paulo');
	include "../conexao.php";
	
	if(isset($_GET['tipo'])){
		$sqlNome = "SELECT * FROM tb_paciente WHERE nM_nomePaciente ='".$_GET['consulta']."'";
		$resultadoNome = mysql_query($sqlNome) or die();
		while($linhaNome = mysql_fetch_array($resultadoNome)){
			$cpfpaciente = $linhaNome['nr_cpfPaciente'];
		}
		header("Location: consultarPaciente.php?cpf=".$cpfpaciente);	
	}
	
	if(!isset($_GET['cpf'])){
		$_GET['cpf'] = $_POST['consulta'];
	}
	
	$sqlNome = "SELECT * FROM tb_paciente WHERE nr_cpfPaciente ='".$_GET['cpf']."'";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$paciente = $linhaNome['nm_nomePaciente'];
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
			#zoom {
			  transition: transform .2s; /* Animation */
			  margin: 0 auto;
			}

			#zoom:hover {
			  transform: scale(1.2);
			}
			
			
			.folder {
			  -webkit-perspective: 500px;
			  perspective: 500px;
			  width: 340px;
			  height: 140px;
			  background: rgb(225,45,51);
			  position: relative;
			  top: 50%;
			  left: 50%;
			  -webkit-transform: translate(-50%, -50%);
			  transform: translate(-50%, -50%);
			  border-top-right-radius: 5px;
			  cursor: pointer;
			  -webkit-transition: all 400ms ease;
			  transition: all 400ms ease;
			}
			.folder::before {
			  width: 80px;
			  height: 20px;
			  content: '';
			  background: rgb(225,45,51);
			  position: absolute;
			  top: -20px;
			  border-top-left-radius: 5px;
			  border-top-right-radius: 5px;
			}
			.folder::after {
			  width: 340px;
			  height: 210px;
			  position: absolute;
			  content: '';
			  background: rgb(225,45,51);
			  top: 40px;
			  box-shadow: 0 0 20px 2px rgba(0, 0, 0, 0.3);
			  border-top-left-radius: 5px;
			  border-top-right-radius: 5px;
			  -webkit-transform: rotateX(-10deg);
			  transform: rotateX(-10deg);
			  -webkit-transition: all 400ms ease;
			  transition: all 400ms ease;
			}
			.folder-inside {
			  width: 320px;
			  height: 200px;
			  position: absolute;
			  background: #fff;
			  top: 20px;
			  left: 10px;
			  -webkit-transform: rotate(-1deg);
			  transform: rotate(-1deg);
			  border: 1px solid #ddd;
			  -webkit-transition: all 200ms ease;
			  transition: all 200ms ease;
			}
			.folder-inside::before {
			  content: '';
			  position: absolute;
			  top: -37px;
			  left: 65px;
			  width: 200px;
			  height: 290px;
			  color: #343434;
			  font-size: 60px;
			  line-height: 30px;
			  -webkit-transform: rotate(-90deg);
			  transform: rotate(-90deg);
			  opacity: 0.15;
			}
			.folder:hover {
			  -webkit-transform: translate(-50%, -52%);
			  transform: translate(-50%, -52%);
			}
			.folder:hover::after {
			  -webkit-transform: rotateX(-15deg);
			  transform: rotateX(-15deg);
			}
			.folder:hover .folder-inside {
			  -webkit-transform: rotate(-7deg) translateY(-55%);
			  transform: rotate(-7deg) translateY(-55%);
			}
			
			</style>
			 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
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
								<h2 class="text-white">Paciente <?php echo $paciente ?></h2>
								<p class="text-white">Acesso ao Prontuário</p>
							</div>							
						</div>
					</div>
				</div>
			</section>		
			<!-- End banner Area -->
		
		<br><br><br><br>
		<!-- Start price Area --><br>
			<section class="price-area " id="price">
				<div class="container">		
					
								<div class='row'>
								
									<div class='col-lg-4'>
										<a href="anamnese.php?cpf=<?php echo $_GET['cpf']; ?>">
											<div class="container">
												<div class="folder">
													<div class="folder-inside">
														<h1 style="text-align: center;"> Anamnese </h1>
														<center><img src='icones/anamnese.png' width='100%' height='100%'></center>
													</div>
												</div>
											</div>
										</a>
									</div>
									
									
									<div class='col-lg-4'>
										<a href="escolherDenticao.php?cpf=<?php echo $_GET['cpf']; ?>">
											<div class="container">
												<div class="folder">
													<div class="folder-inside">
														<h1 style="text-align: center;"> Odontograma </h1>
														<center><img src='icones/odontog.png' width='100%' height='100%'></center>
													</div>
												</div>
											</div>
										</a>
									</div>
									
									<div class='col-lg-4'>
										<a href="radiografias.php?cpf=<?php echo $_GET['cpf']; ?>">
											<div class="container">
												<div class="folder">
													<div class="folder-inside">
														<h1 style="text-align: center;">Exames de Imagem</h1>
														<center><img src='icones/periapicais.jpg' width='100%' height='100%'></center>
													</div>
												</div>
											</div>
										</a>
									</div>
									
								</div>
								<br><br><br><br><br><br><br><br>
								<div class='row'>
									<div class='col-lg-4'>
										<a href="endodontia.php?cpf=<?php echo $_GET['cpf']; ?>">
											<div class="container">
												<div class="folder">
													<div class="folder-inside">
														<h1 style="text-align: center;"> Endodontia </h1>
														<center><img src='icones/endo.png' width='100%' height='100%'></center>
													</div>
												</div>
											</div>
										</a>
									</div>
									
									<div class='col-lg-4'>
										<a href="periodontia.php?cpf=<?php echo $_GET['cpf']; ?>">
											<div class="container">
												<div class="folder">
													<div class="folder-inside">
														<h1 style="text-align: center;"> Periodontia </h1>
														<center><img src='icones/perio.png' width='99%' height='99%'></center>
													</div>
												</div>
											</div>
										</a>
									</div>
									
									
									<div class='col-lg-4'>
										<a href="documentos.php?cpf=<?php echo $_GET['cpf']; ?>">
											<div class="container">
												<div class="folder">
													<div class="folder-inside">
														<h1 style="text-align: center;"> Documentos </h1>
														<center><img src='icones/books.jpg' width='99%' height='99%'></center>
													</div>
												</div>
											</div>
										</a>
									</div>
									
									
								</div>
								
								
								<br><br><br><br><br><br><br><br>
								<div class='row'>
								<div class='col-lg-4'>
										<a href="mapa.php?cpf=<?php echo $_GET['cpf']; ?>">
											<div class="container">
												<div class="folder">
													<div class="folder-inside">
														<h1 style="text-align: center;"> Mapa Cirúrgico e Endodôntico </h1>
														<center><img src='icones/mapa.png' width='99%' height='10%'></center>
													</div>
												</div>
											</div>
										</a>
									</div>
								</div>
				</div>	
			</section>
			<!-- End price Area -->
			<br><br><br><br>
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
</div>
