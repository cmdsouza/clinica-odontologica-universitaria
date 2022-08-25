<?php
	session_start();
?>

<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/elements/logo.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
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
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		
		

		
		</head>
		<body>

			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="#home">Página Inicial</a></li>			          
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-10">
							<h1 class="typewrite" style='color:white;' data-period="2000" data-type='[ "Clínica Odontológica Multivix", "Sistema Multplus | M+" ]'>
									<span class="wrap"></span>
							
							</h1>
							<!--<img src='logo.png' style='position: fixed; top: 7%; left: 30%; right: 0px; z-index:10;'/>-->
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
			
			if(isset($_SESSION['mensagem']) && ($_SESSION['mensagem'] == "ID e/ou senha incorretos")){	
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
			
			if(isset($_SESSION['mensagem']) && ($_SESSION['mensagem'] == "Cadastrado. Entraremos em contato com você")){	
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
			
			<!-- Start feature Area -->
			<section class="feature-area pb-100" id="service">
				<div class="container">
					<div class="row mockup-container">
						<img class="mx-auto d-block img-fluid" src="img/laptop.png" alt="">
					</div>
					<div class="row d-flex justify-content-center">
						<div class="menu-content pt-90 pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">NAC - Núcleo de Atendimento à Comunidade <br>Dr. Rômulo Augusto Penina</h1>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-4">
							<div class="single-feature">
								<span class="lnr lnr-calendar-full"></span>
								<h4>
									Dias de Funcionamento
								</h4>
								<p>
									Segunda a sexta-feira
								</p>
								<p>
									Sábado
								</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feature">
								<span class="lnr lnr-clock"></span>
								<h4>
									Horário de Funcionamento
								</h4>
								<p>
									De 8 da manhã às 22 horas
								</p>
								<p>
									De 8 da manhã às 12 horas
								</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feature">
								<span class="lnr lnr-heart"></span>
								<h4>
									Equipe<br>
								</h4>
								<p>
									Melhor equipe do Estado.<br><br><br>
								</p>
							</div>
						</div>												
					</div>
				</div>	
			</section>
			<!-- End feature Area -->

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

			<!-- Start callto-action Area -->
			<section class="callto-action-area relative section-gap" style='background-color:rgb(209, 38, 38);'>
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content col-lg-9">
							<div class="title text-center">
								<h1 class="mb-10 text-white">Agende a sua consulta!</h1>
								<p class="text-white">Entre em contato conosco a partir do número:</p>
								<a class="primary-btn">(027) 3335-5682</a>
							</div>
						<hr>	
							<div class="title text-center">
								<h1 class="mb-10 text-white">Ou faça o seu pré-cadastro:</h1>
								<p class="text-white">Entraremos em contato com você!</p>
							</div>	
						<div class="row">
							<div class="col-lg-6 col-md-6">
								<form action="Funcionarios/inserirPaciente.php" method='POST'>
									<input type='hidden' name='onde' value='index'>
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
										<input type="date" name="nascimento" placeholder="Data de Nascimento" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Data de Nascimento'" required class="single-input"  data-toggle='popover' data-trigger='hover' data-placement='left' data-content='Data de Nascimento!'>
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
						<br><center><input class="genric-btn primary" type='submit' value='Cadastrar'></center>
						</form>
							
							
					</div>	
				</div>	
			</section>
			<!-- End calto-action Area -->

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
								<h6>Área Restrita</h6>
								<p>Utilize suas credenciais para acessar o sistema</p>
								
								<form action="login.php" method="POST" class="form-inline">
									<input class="form-control" name="cpf" placeholder="Insira o seu ID" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Insira o seu ID'" required="" type="text">
									<input class="form-control" name="password" placeholder="Insira sua senha" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Insira sua senha'" required="" type="password">
			                        <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
			                        <div style="position: absolute; left: -5000px;">
										<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
									</div>

									<div class="info"></div>
								</form>
								
							</div>
						</div>						
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6><center>Faculdade Multivix</center></h6>
								<div class="footer-social d-flex align-items-center">
									<center><a href="https://multivix.edu.br/"><i><img width='90%' height='90%' src='img/Logo-Multivix.png'></i></a></center>
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

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>		
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
			
			<script>
		var TxtType = function(el, toRotate, period) {
				this.toRotate = toRotate;
				this.el = el;
				this.loopNum = 0;
				this.period = parseInt(period, 10) || 2000;
				this.txt = '';
				this.tick();
				this.isDeleting = false;
			};

			TxtType.prototype.tick = function() {
				var i = this.loopNum % this.toRotate.length;
				var fullTxt = this.toRotate[i];

				if (this.isDeleting) {
				this.txt = fullTxt.substring(0, this.txt.length - 1);
				} else {
				this.txt = fullTxt.substring(0, this.txt.length + 1);
				}

				this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

				var that = this;
				var delta = 200 - Math.random() * 100;

				if (this.isDeleting) { delta /= 2; }

				if (!this.isDeleting && this.txt === fullTxt) {
				delta = this.period;
				this.isDeleting = true;
				} else if (this.isDeleting && this.txt === '') {
				this.isDeleting = false;
				this.loopNum++;
				delta = 500;
				}

				setTimeout(function() {
				that.tick();
				}, delta);
			};

			window.onload = function() {
				var elements = document.getElementsByClassName('typewrite');
				for (var i=0; i<elements.length; i++) {
					var toRotate = elements[i].getAttribute('data-type');
					var period = elements[i].getAttribute('data-period');
					if (toRotate) {
					  new TxtType(elements[i], JSON.parse(toRotate), period);
					}
				}
				// INJECT CSS
				var css = document.createElement("style");
				css.type = "text/css";
				css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
				document.body.appendChild(css);
			};
		</script>
			
		</body>
	</html>
