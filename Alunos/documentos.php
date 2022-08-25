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
								
								<h2 class="text-white">Consultar os Documentos <?php echo $d." ".$paciente ?></h2>
							</div>							
						</div>
					</div>
				</div>
			</section>		
			<!-- End banner Area -->
		
		<br>
		<!-- Start price Area --><br>
			<section class="price-area " id="price">
				<div class="container">		
					<h3>Selecione um tipo de Documento abaixo:</h3><br>
				</div>
			</section>
							
					<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css'>
					<style>
					* {
					  -moz-box-sizing: border-box;
					  -webkit-box-sizing: border-box;
					  box-sizing: border-box;
					}

					.teste {
					  background: faf5f6;
					  color: #333;
					}

					aside.context {
					  text-align: center;
					  color: #333;
					  line-height: 1.7;
					}
					aside.context a {
					  text-decoration: none;
					  color: #333;
					  padding: 3px 0;
					  border-bottom: 1px dashed;
					}
					aside.context .explanation {
					  max-width: 700px;
					  margin: 4em auto 0;
					}

					.main-content {
					  display: flex;
					  flex-wrap: wrap;
					  margin: 3em auto 0;
					  max-width: 98%;
					  justify-content: space-around;
					  align-items: center;
					}

					.palette__wrapper {
					  flex: 1;
					  padding: 20px;
					  display: flex;
					  justify-content: center;
					  flex-wrap: wrap;
					}

					.palette {
					  width: 300px;
					  height: 200px;
					  position: relative;
					  display: inline-block;
					  perspective: 800px;
					}
					.palette__cover {
					  border-radius: 6px;
					  width: inherit;
					  height: inherit;
					  position: absolute;
					  top: 0;
					  z-index: 2;
					  transition: 0.3s ease;
					  transform-origin: top left;
					  font: 900 28px/0.9 "Poppins", sans-serif;
					  text-transform: uppercase;
					  color: #fff;
					  overflow: hidden;
					}
					.palette__cover__border {
					  width: 90%;
					  height: 85%;
					  border: 7px solid #fff;
					  margin: 5%;
					}
					.palette__cover span {
					  display: inline-block;
					  position: absolute;
					  bottom: 30px;
					  left: 10px;
					  padding: 10px;
					  max-width: 50%;
					}
					.palette__cover__top {
					  position: absolute;
					  left: 0;
					  width: calc(100% + 64px);
					  margin-left: -32px;
					  z-index: 4;
					  border-radius: 3px 3px 4px 4px;
					  opacity: 0;
					}
					.palette__base {
					  background-image:url('icones/textura2.jpg');
					  width: inherit;
					  height: inherit;
					  position: absolute;
					  top: 0;
					  border-radius: 8px;
					  padding: 15px;
					  grid-gap: 8px;
					}
					.palette:hover .palette__cover {
					  transform: rotateX(78deg);
					}
					.palette:hover .palette__cover__top {
					  animation: startTransition 0.17s forwards 0.1s;
					}

					@keyframes startTransition {
					  0% {
						opacity: 0;
						top: 200px;
						transform: scale(0.5);
						height: 0;
					  }
					  40% {
						opacity: 1;
					  }
					  100% {
						top: 22px;
						opacity: 1;
						transform: scale(1);
						height: 15px;
						box-shadow: 0 5px 10px -2px rgba(0, 0, 0, 0.2);
					  }
					}
					.palette__shade {
					  border-radius: 4px;
					  box-shadow: inset 0 0 2px rgba(0, 0, 0, 0.9);
					}

					.palette--one .palette__base {
					  display: grid;
					  grid-template-columns: repeat(3, 1fr);
					  grid-template-rows: repeat(2, 1fr);
					}
					.palette--one .palette__shade:nth-child(1) {
					  grid-row: 1 / span 2;
					  grid-column: 2 / span 1;
					  margin: 20px 0;
					  background-image: url("textura.jpg");
					}
					.palette--one .palette__shade:nth-child(2) {
					  background-image: url("icones/textura.jpg");
					}
					.palette--one .palette__shade:nth-child(3) {
					  background-image: url("icones/textura.jpg");
					}
					.palette--one .palette__shade:nth-child(4) {
					  background-image: url("icones/textura.jpg");
					}
					.palette--one .palette__shade:nth-child(5) {
					  background-image: url("icones/textura.jpg");
					}
					.palette--one .palette__cover {
					  background-image: url("icones/textura.jpg");
					}
					.palette--one .palette__cover__top {
					  background-image: url("icones/textura.jpg");
					}
					.palette--one .palette__cover span {
					  max-width: 50%;
					  background-image: url("icones/textura.jpg");
					}

					.palette--two .palette__base {
					  display: grid;
					  grid-gap: 12px;
					  justify-self: center;
					  grid-template-columns: repeat(2, 1fr);
					  grid-template-rows: repeat(2, 1fr);
					}
					.palette--two .palette__cover {
					  background: #ee4266;
					}
					.palette--two .palette__cover__top {
					  background: #e23a5d;
					}
					.palette--two .palette__cover span {
					  max-width: 62%;
					  background: #ee4266;
					}
					.palette--two .palette__shade:nth-child(1) {
					  background: #ee898d;
					}
					.palette--two .palette__shade:nth-child(2) {
					  background: #ec6b73;
					}
					.palette--two .palette__shade:nth-child(3) {
					  background: #d25980;
					}
					.palette--two .palette__shade:nth-child(4) {
					  background: #c24d88;
					}

					.palette--three .palette__cover {
					  background: #0075c4;
					}
					.palette--three .palette__cover__top {
					  background: #016cb4;
					}
					.palette--three .palette__cover span {
					  max-width: 48%;
					  background: #0075c4;
					}
					.palette--three .palette__base {
					  display: grid;
					  grid-gap: 8px;
					  grid-template-columns: repeat(4, 1fr);
					  grid-template-rows: repeat(4, 1fr);
					}
					.palette--three .palette__shade:nth-child(1) {
					  grid-row: 1 / span 2;
					  grid-column: 1 / span 2;
					  background: #93dfe3;
					}
					.palette--three .palette__shade:nth-child(2) {
					  grid-row: 3 / span 2;
					  background: #01c0f3;
					}
					.palette--three .palette__shade:nth-child(3) {
					  grid-row: 1 / span 2;
					  grid-column: 3 / span 2;
					  background: #21d0e5;
					}
					.palette--three .palette__shade:nth-child(4) {
					  grid-row: 3 / span 2;
					  grid-column-start: 4;
					  background: #00aae7;
					}
					.palette--three .palette__shade:nth-child(6) {
					  background: #69b3cd;
					}
					.palette--three .palette__shade:nth-child(5) {
					  background: #4ad1eb;
					}
					.palette--three .palette__shade:nth-child(8) {
					  background: #0983d5;
					}
					.palette--three .palette__shade:nth-child(7) {
					  background: #149ecb;
					}

					.palette--four .palette__base {
					  display: grid;
					  grid-template-columns: 50% auto;
					  grid-template-rows: auto 20% 20%;
					}
					.palette--four .palette__shade:nth-child(1) {
					  grid-row: 1/ span 2;
					  background: #bfbfbf;
					}
					.palette--four .palette__shade:nth-child(2) {
					  grid-row: 3 / span 1;
					  background: #a1a1a1;
					}
					.palette--four .palette__shade:nth-child(3) {
					  background: #717171;
					}
					.palette--four .palette__shade:nth-child(4) {
					  background: #585858;
					}
					.palette--four .palette__shade:nth-child(5) {
					  background: #4b4b4b;
					}
					.palette--four .palette__cover {
					  background: #2a2e45;
					}
					.palette--four .palette__cover__top {
					  background: #171926;
					}
					.palette--four .palette__cover span {
					  max-width: 59%;
					  background: #2a2e45;
					}
					</style>

					<div class='teste' style='widht:100%'>
					<div class="main-content">
					  <div class="palette__wrapper" style='width:1000px;'>
						<div class="palette palette--one">
						  <div class="palette__cover">
							<div class="palette__cover__border"><span>Anamnese<br></span></div>
						  </div>
						  <div class="palette__cover__top"></div>
						  <div class="palette__base">
							<div class="palette__shade" style="width:150px; height:1px;">
								
								<center>
									<?php 
										echo "<a href='imprimirAnamnese.php?cpf=".$_GET['cpf']."' style='margin-top:60px;' class='genric-btn success' target='_blank'>Imprimir</a>";
									?>
								</center>
							</div>
						  </div>
						</div>
					  </div>
					  
					   <div class="palette__wrapper">
						<div class="palette palette--one">
						  <div class="palette__cover">
							<div class="palette__cover__border"><span style='font-size:25px;'>Odontograma e Plano de Tratamento</span></div>
						  </div>
						  <div class="palette__cover__top"></div>
						  <div class="palette__base">
							<div class="palette__shade" style='width:200px; height:1px; background-color: rgb(34,34,34);'>
								
								<center>
									<?php 
										echo "<a href='anoImprimirOdontograma.php?cpf=".$_GET['cpf']."' style='margin-top:60px;' class='genric-btn success' target='_blank'>Imprimir</a>";
									?>
								</center>
							</div>
						  </div>
						</div>
					  </div>
					  
					   <div class="palette__wrapper">
						<div class="palette palette--one">
						  <div class="palette__cover">
							<div class="palette__cover__border"><span style='font-size:90%;'>Declaração de Comparecimento</span></div>
						  </div>
						  <div class="palette__cover__top"></div>
						  <div class="palette__base">
							<div class="palette__shade" style='width:200px; height:1px; background-color: rgb(34,34,34);'>
								<br>
								<center>
									<?php 
										echo "<a href='declaracaoComparecimento.php?cpf=".$_GET['cpf']."' style='margin-top:40px;' class='genric-btn success' target='_blank'>Preencher</a>";
									?>
								</center>
							</div>
						  </div>
						</div>
					  </div>
					  
					  <div class="palette__wrapper">
						<div class="palette palette--one">
						  <div class="palette__cover">
							<div class="palette__cover__border"><span>Atestado Médico</span></div>
						  </div>
						  <div class="palette__cover__top"></div>
						  <div class="palette__base">
							<div class="palette__shade" style='width:150px; height:1px; background-color: rgb(34,34,34);'><br><center>
								<?php 
										echo "<a href='atestado.php?cpf=".$_GET['cpf']."' class='genric-btn success' style='margin-top:40px;' target='_blank'>Preencher</a>";
									?>
							</center></div>
						  </div>
						</div>
					  </div>
					  
					  <div class="palette__wrapper">
						<div class="palette palette--one">
						  <div class="palette__cover">
							<div class="palette__cover__border"><span>Receituário</span></div>
						  </div>
						  <div class="palette__cover__top"></div>
						  <div class="palette__base">
							<div class="palette__shade" style='width:150px; height:1px; background-color: rgb(34,34,34);'><br><center>
								<?php 
										echo "<a href='receituario.php?cpf=".$_GET['cpf']."' class='genric-btn success' style='margin-top:40px;' target='_blank'>Perscrever</a>";
									?>
							</center></div>
						  </div>
						</div>
					  </div>
					  
					  
					  <div class="palette__wrapper">
						<div class="palette palette--one">
						  <div class="palette__cover">
							<div class="palette__cover__border"><span>Receita de Controle Especial</span></div>
						  </div>
						  <div class="palette__cover__top"></div>
						  <div class="palette__base">
							<div class="palette__shade" style='width:220px; height:1px; background-color: rgb(34,34,34);'><br><center>
								<?php 
										echo "<a href='receitaEspecial.php?cpf=".$_GET['cpf']."' class='genric-btn success' style='margin-top:40px;'  target='_blank'>Perscrever</a>";
									?>
							</center></div>
						  </div>
						</div>
					  </div>
					  
					  <div class="palette__wrapper">
						<div class="palette palette--one">
						  <div class="palette__cover">
							<div class="palette__cover__border"><span>Orientações Pós Operatórias</span></div>
						  </div>
						  <div class="palette__cover__top"></div>
						  <div class="palette__base">
							<div class="palette__shade" style='width:200px; height:1px; background-color: rgb(34,34,34);'><br><center>
								<?php 
										echo "<a href='orientacoes.php?cpf=".$_GET['cpf']."' class='genric-btn success' style='margin-top:40px;' target='_blank'>Preencher</a>";
									?>
							</center></div>
						  </div>
						</div>
					  </div>
					  
					  <div class="palette__wrapper">
						<div class="palette palette--one">
						  <div class="palette__cover">
							<div class="palette__cover__border"><span style='font-size:90%;'>Encaminhamento</span></div>
						  </div>
						  <div class="palette__cover__top"></div>
						  <div class="palette__base">
							<div class="palette__shade" style='width:150px; height:1px; background-color: rgb(34,34,34);'><br><center>
								<?php 
										echo "<a href='encaminhamento.php?cpf=".$_GET['cpf']."' class='genric-btn success' style='margin-top:40px;' target='_blank'>Perscrever</a>";
									?>
							</center></div>
						  </div>
						</div>
					  </div>
					  
					  <div class="palette__wrapper">
						<div class="palette palette--one">
						  <div class="palette__cover">
							<div class="palette__cover__border"><span>Solicitação de Exames</span></div>
						  </div>
						  <div class="palette__cover__top"></div>
						  <div class="palette__base">
							<div class="palette__shade" style='width:200px; height:1px; background-color: rgb(34,34,34);'><br><center>
								<?php 
										echo "<a href='solicitacao.php?cpf=".$_GET['cpf']."' class='genric-btn success' style='margin-top:40px;'  target='_blank'>Perscrever</a>";
									?>
							</center></div>
						  </div>
						</div>
					  </div>
					  
					  <div class="palette__wrapper">
						<div class="palette palette--one">
						  <div class="palette__cover">
							<div class="palette__cover__border"><span style='font-size:25px;'>Declaração de Conclusão de Tratamento</span></div>
						  </div>
						  <div class="palette__cover__top"></div>
						  <div class="palette__base">
							<div class="palette__shade" style='width:170px; height:1px; background-color: rgb(34,34,34);'><br><center>
								<?php 
										echo "<a href='conclusaoTratamento.php?cpf=".$_GET['cpf']."' class='genric-btn success' style='margin-top:40px;' target='_blank'>Descrever</a>";
								?>
							</center></div>
						  </div>
						</div>
					  </div>
					  
					  <div class="palette__wrapper">
						<div class="palette palette--one">
						  <div class="palette__cover">
							<div class="palette__cover__border"><span>Produção Clínica</span></div>
						  </div>
						  <div class="palette__cover__top"></div>
						  <div class="palette__base">
							<div class="palette__shade" style='width:170px; height:1px; background-color: rgb(34,34,34);'><br><center>
								<?php 
										echo "<a href='producaoClinica.php?cpf=".$_GET['cpf']."' class='genric-btn success' style='margin-top:40px;' target='_blank'>Descrever</a>";
								?>
							</center></div>
						  </div>
						</div>
					  </div>
					  
					</div>
					<!-- partial -->
					<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>

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