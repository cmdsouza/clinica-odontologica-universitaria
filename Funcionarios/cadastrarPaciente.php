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
								<h2 class="text-white">Cadastrar um Novo Paciente</h2>
								<p class="text-white">Dados Pessoais + Endereço</p>
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
			
			if(isset($_SESSION['mensagem']) && ($_SESSION['mensagem'] == "Paciente Cadastrado")){	
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
		
		<!-- Start Align Area -->
			<div class="whole-wrap">
				<div class="container">
					
					<div class="section-top-border">
						<div class="row">
							<div class="col-lg-6 col-md-6">
								<h3 class="mb-30">Informações Pessoais</h3>
								<form action="inserirPaciente.php" method='POST'>
									<input type='hidden' name='onde' value='funcionario'>
									<div class="mt-10">
										<input type="text" name="nome" placeholder="Nome Completo" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nome Completo'" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="text" name="cpf" placeholder="CPF com pontuação" onfocus="this.placeholder = ''" onblur="this.placeholder = 'CPF com pontuação'" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="text" name="rg" placeholder="RG com pontuação" onfocus="this.placeholder = ''" onblur="this.placeholder = 'RG com pontuação'" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="text" name="telefone" placeholder="Telefone com DDD" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Telefone com DDD'" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="email" name="email" placeholder="E-mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-mail'" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="date" name="nascimento" placeholder="Data de Nascimento" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Data de Nascimento'" required class="single-input" data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Data de Nascimento!'>
									</div>
									<div class="mt-10">
										<input type="text" name="estadoCivil" placeholder="Estado Civil" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Estado Civil'" required class="single-input">
									</div>
									<div class="mt-10">
										<select class="single-input" name='sexo'>
											<option value=''>Gênero</option>
											<option value='Masculino'>Masculino</option>
											<option value='Feminino'>Feminino</option>
										</select>
									</div>
							</div>
							<div class="col-lg-6 col-md-6 mt-sm-30">
								<h3 class="mb-30">Endereço</h3>
								<div class="single-element-widget">
										<div class="mt-10">
											<input type="text" name="CEP" placeholder="CEP" onfocus="this.placeholder = ''" onblur="this.placeholder = 'CEP'" required class="single-input">
										</div>
										<div class="mt-10">
											<input type="text" name="rua" placeholder="Rua" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Rua'" class="single-input" required>
										</div>
										<div class="mt-10">
											<input type="text" name="bairro" placeholder="Bairro" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Bairro'" required class="single-input">
										</div>
										<div class="mt-10">
											<input type="text" name="cidade" placeholder="Cidade" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cidade'" required class="single-input">
										</div>
										<div class="mt-10">
											<input type="text" name="complemento" placeholder="Complemento" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Complemento'" required class="single-input">
										</div>
								</div>
							</div>
						</div>
						<br><input class="genric-btn primary" type='submit' value='Cadastrar'>
						</form>
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
