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
								<h2 class="text-white">Marcação da 1ª Consulta</h2>
								<?php
									include "../conexao.php";
									
									$sqlEnd = "SELECT * FROM tb_paciente WHERE nr_cpfPaciente ='".$_GET['cpf']."'";
									$resultadoEnd = mysql_query($sqlEnd) or die();
									while($linhaEnd = mysql_fetch_array($resultadoEnd)){
										$nome = $linhaEnd['nm_nomePaciente'];
									}
								?>
								<p class="text-white">Preencha os dados referentes a 1ª Consulta do <?php echo $nome." (CPF: ".$_GET['cpf'].")"; ?></p>
							</div>							
						</div>
					</div>
				</div>
			</section>		
			<!-- End banner Area -->
		
		<!-- About Generic Start -->
		<div class="main-wrapper">	

				<div class="whole-wrap">
				<div class="container">
					<div class="section-top-border">
						<h3 class="mb-30">Dados da Consulta</h3>
						<form method='POST' action='inserirPrimeiraConsulta.php'>
						<div class="row">
							<div class="col-md-4">
								<div class="single-defination">
									<h4 class="mb-20">Data & Hora</h4>
									<p>
										<div class='mt-10'>
											<input type='date' name='data' placeholder='Data' onfocus='this.placeholder = ''' onblur='this.placeholder = 'Data'' required class='single-input'>
										</div>
										<div class='mt-10'>
											<input type='text' name='hora' placeholder='Horário da Consulta' onfocus='this.placeholder = ''' onblur='this.placeholder = 'Horário da Consulta'' required class='single-input'>
										</div>
									</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="single-defination">
									<h4 class="mb-20">Dupla & Sala</h4>
									<p>
										<div class='mt-10'>
											<select name='dupla' class='single-input'>
											<?php
												$sqlDupla = "SELECT * FROM tb_duplas ORDER BY nr_idDupla";
												$resultadoDupla = mysql_query($sqlDupla) or die();
												while($linhaDupla = mysql_fetch_array($resultadoDupla)){
													
													$sqlDuplaNome = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linhaDupla['nr_cpf1']."'";
													$resultadoDuplaNome = mysql_query($sqlDuplaNome) or die();
													while($linhaDuplaNome = mysql_fetch_array($resultadoDuplaNome)){
														$aluno1 = $linhaDuplaNome['nm_nomeAluno'];
													}
													
													$sqlDuplaNome2 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linhaDupla['nr_cpf2']."'";
													$resultadoDuplaNome2 = mysql_query($sqlDuplaNome2) or die();
													while($linhaDuplaNome2 = mysql_fetch_array($resultadoDuplaNome2)){
														$aluno2 = $linhaDuplaNome2['nm_nomeAluno'];
													}
													
													echo "<option value='".$linhaDupla['nr_idDupla']."'>".$aluno1." e ".$aluno2."</option>";
												}
											?>
											</select>
										</div>
										<div class='mt-10'>
											<select name='sala' class='single-input'>
												<?php
													$sqlSala = "SELECT * FROM tb_sala";
													$resultadoSala = mysql_query($sqlSala) or die();
													while($linhaSala = mysql_fetch_array($resultadoSala)){
														echo "<option value='".$linhaSala['nr_idSala']."'>".$linhaSala['nm_nomeSala']." (".$linhaSala['nr_andar']."º andar)</option>";
													}
												?>
											</select>
										</div>
									</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="single-defination">
									<h4 class="mb-20">Observação</h4>
									<p> 
										<div class='mt-10'>
											<textarea name='observacoa' placeholder='Observações' onfocus='this.placeholder = ''' onblur='this.placeholder = 'Observações'' class='single-input'></textarea>
										</div>
									</p>
								</div>
							</div><input type='hidden' name='cpf' value='<?php echo $_GET['cpf']; ?>'>
						</div><br><center><input class="genric-btn primary" type='submit' value='Marcar Consulta'></center>
						</form>
					</div>
					<!--<div class="section">
						<h3 class="mb-30">Table</h3>
						<div class="progress-table-wrap">
							<div class="progress-table">
								<div class="table-head">
									<div class="serial">#</div>
									<div class="country">Countries</div>
									<div class="visit">Visits</div>
									<div class="percentage">Percentages</div>
								</div>
								<div class="table-row">
									<div class="serial">01</div>
									<div class="country"> <img src="img/elements/f1.jpg" alt="flag">Canada</div>
									<div class="visit">645032</div>
									<div class="percentage">
										<div class="progress">
											<div class="progress-bar color-1" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
								<div class="table-row">
									<div class="serial">02</div>
									<div class="country"> <img src="img/elements/f2.jpg" alt="flag">Canada</div>
									<div class="visit">645032</div>
									<div class="percentage">
										<div class="progress">
											<div class="progress-bar color-2" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
								<div class="table-row">
									<div class="serial">03</div>
									<div class="country"> <img src="img/elements/f3.jpg" alt="flag">Canada</div>
									<div class="visit">645032</div>
									<div class="percentage">
										<div class="progress">
											<div class="progress-bar color-3" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
								<div class="table-row">
									<div class="serial">04</div>
									<div class="country"> <img src="img/elements/f4.jpg" alt="flag">Canada</div>
									<div class="visit">645032</div>
									<div class="percentage">
										<div class="progress">
											<div class="progress-bar color-4" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
								<div class="table-row">
									<div class="serial">05</div>
									<div class="country"> <img src="img/elements/f5.jpg" alt="flag">Canada</div>
									<div class="visit">645032</div>
									<div class="percentage">
										<div class="progress">
											<div class="progress-bar color-5" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
								<div class="table-row">
									<div class="serial">06</div>
									<div class="country"> <img src="img/elements/f6.jpg" alt="flag">Canada</div>
									<div class="visit">645032</div>
									<div class="percentage">
										<div class="progress">
											<div class="progress-bar color-6" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
								<div class="table-row">
									<div class="serial">07</div>
									<div class="country"> <img src="img/elements/f7.jpg" alt="flag">Canada</div>
									<div class="visit">645032</div>
									<div class="percentage">
										<div class="progress">
											<div class="progress-bar color-7" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
								<div class="table-row">
									<div class="serial">08</div>
									<div class="country"> <img src="img/elements/f8.jpg" alt="flag">Canada</div>
									<div class="visit">645032</div>
									<div class="percentage">
										<div class="progress">
											<div class="progress-bar color-8" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>-->
				</div>
			</div>
			<!-- End Generic Start -->		

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
