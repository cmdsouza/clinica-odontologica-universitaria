<?php
	session_start();
	date_default_timezone_set('america/sao_paulo');
	include "../conexao.php";
	$sqlNome = "SELECT * FROM tb_paciente WHERE nr_cpfPaciente ='".$_GET['cpf']."'";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$paciente = $linhaNome['nm_nomePaciente'];
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
							
								<?php
									if($sexo == 'Masculino'){
										$d = "do";
									}else{
										$d = "da";
									}
								?>
								
								<h2 class="text-white">Consultar os Exames de Imagem <?php echo $d." ".$paciente ?></h2>
								<p class="text-white">Acesse os Exames de Imagem do Paciente ou Cadastre um Novo.</p>
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
		
		<br><br><br><br>
		<!-- Start price Area --><br>
			<section class="price-area " id="price">
				<div class="container">		
					<h3>Exames de Imagem Cadastrados</h3><br>
					
					
					<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
					<link rel="stylesheet" href="timeline/style.css">
					<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
					<script  src="timeline/script.js"></script>
					<!-- Fonts -->
					<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,400italic,700,900' rel='stylesheet' type='text/css'>
					<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
					<!-- // Fonts -->
					
					  <!-- Vertical Timeline -->
					  <section id="conference-timeline">
						<div class="conference-center-line"></div>
						<div class="conference-timeline-content">
						  <!-- Article -->
						  <br>
						  
						<?php
							$cont = 0;
							$sqlNome = "SELECT * FROM tb_radiografias WHERE nr_cpfPaciente = '".$_GET['cpf']."' ORDER BY dt_inclusao";
							$resultadoNome = mysql_query($sqlNome) or die();
							$numImg = mysql_num_rows($resultadoNome);
							if($numImg == 0){
								echo "<p>Nenhum Exame de Imagem Cadastrado para este Paciente.</p><br>";
							}else{
								while($linhaNome = mysql_fetch_array($resultadoNome)){
									if($cont%2 == 0){
										echo "
										
										  <div class='timeline-article'>
											<div class='content-left-container'>
											  <div class='content-left'>
												<p>
													<a href='radiografias/".$linhaNome['nm_identificacao']."' target='_black'>
														<img src='radiografias/".$linhaNome['nm_identificacao']."' width='100%' height='100%'>
													</a>
													<span class='article-number'>".($cont+1)."</span>
												</p>
											  </div>
											  <span class='timeline-author'>Data de Inclusão no Sistema: <b>".$linhaNome['dt_inclusao']."</b> <a  href='excluirImagem.php?cpf=".$_GET['cpf']."&id=".$linhaNome['nr_idRadiografia']."'  data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Excluir Imagem'><img src='icones/delete.png'></a></span>
											</div>
											<div class='meta-date'>
											  <span class='date'><img src='radiografias/".$linhaNome['nm_identificacao']."' style='margin-top:16px;' width='40px' height='30px'></span>
											  
											</div>
										  </div>
										
										";
										
										
										
									}else{
										echo "
										
										  <div class='timeline-article'>
											<div class='content-right-container'>
											  <div class='content-right'>
												<p>
													<a href='radiografias/".$linhaNome['nm_identificacao']."' target='_black'>
														<img src='radiografias/".$linhaNome['nm_identificacao']."' width='100%' height='100%'>
													</a>
													<span class='article-number'>".($cont+1)."</span>
												</p>
											  </div>
											  <span class='timeline-author'>Data de Inclusão no Sistema: <b>".$linhaNome['dt_inclusao']."</b>  <a  href='excluirImagem.php?cpf=".$_GET['cpf']."&id=".$linhaNome['nr_idRadiografia']."'  data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Excluir Imagem'><img src='icones/delete.png'></a></span>
											</div>
											<div class='meta-date'>
											  <span class='date'><img src='radiografias/".$linhaNome['nm_identificacao']."' style='margin-top:16px;' width='40px' height='30px'></span>
											</div>
										  </div>
										
										";
										
									}
									$cont = $cont + 1;
								}
							}
						?>
						  
						  
						</div>
					  </section>
					<!-- // Vertical Timeline -->
					
					
					<h3>Cadastrar Novo Exame de Imagem</h3><br>
					<form method='POST' action='inserirImagem.php'  enctype="multipart/form-data">
						<?php
								$sqlNome = "SELECT * FROM tb_paciente WHERE nr_cpfPaciente = '".$_GET['cpf']."'";
								$resultadoNome = mysql_query($sqlNome) or die();
								while($linhaNome = mysql_fetch_array($resultadoNome)){
									$nome = $linhaNome['nm_nomePaciente'];
								}
						?>
						<select class="single-input" name='paciente'>
							<option value='<?php echo $_GET['cpf']; ?>'><?php echo $nome; ?></option>
							<?php
								$sqlNome = "SELECT * FROM tb_paciente";
								$resultadoNome = mysql_query($sqlNome) or die();
								while($linhaNome = mysql_fetch_array($resultadoNome)){
									if($linhaNome['nr_cpfPaciente'] != $_GET['cpf']){
										echo "<option value='".$linhaNome['nr_cpfPaciente']."'>".$linhaNome['nm_nomePaciente']."</option>";
									}else{}
								}
							?>
						</select>
						<br>						
						<input type='file' class="single-input" name='imagem'><br>
						<input type='submit' value='Cadastrar' class="genric-btn primary">
					</form>
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