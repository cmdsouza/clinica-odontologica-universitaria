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
								<h2 class="text-white">Gerenciar Paciente</h2>
								<p class="text-white">Consulte e Alterar os Dados de um Paciente!</p>
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
			
			if(isset($_SESSION['mensagem']) && ($_SESSION['mensagem'] == "Paciente Excluído")){	
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
		
		<!-- Start Align Area -->
			<div class="whole-wrap">
				<div class="container">
					<div class="section-top-border">
						<div class="row">
							<h3 class="mb-30">Pacientes Cadastrados <img src='icones/searching-magnifying-glass.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Aperte a tecla F3 para iniciar a pesquisa!'></h3>
							
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
							
						</div>
						<table border=0 width='100%'>
							<tr>
								<td><center><b>#</b></center></td>
								<td><center><b>CPF</b></center></td>
								<td><center><b>Nome</b></center></td>
								<td><center><b>Telefone</b></center></td>
								<td><center><b>Data de Nascimento</b></center></td>
								<td><center><b>Gênero</b></center></td>
								<td></td>
								<!--<td></td>-->
							</tr>
							
							<?php
								
								date_default_timezone_set('america/sao_paulo');
								
								$a = 0;
								
								$sqlEnd2 = "SELECT * FROM tb_paciente";
								$resultadoEnd2 = mysql_query($sqlEnd2) or die();
								$numImg = mysql_num_rows($resultadoEnd2);
								if($numImg != 0){
										while($linhaEnd2 = mysql_fetch_array($resultadoEnd2)){
											if($a%2 == 0){
												$color = "white";
											}else{
												$color = "#CCCCCC";
											}
											
											$sqlNome4 = "SELECT * FROM tb_endereco WHERE nr_idEndereco = ".$linhaEnd2['nr_idEndereco'];
											$resultadoNome4 = mysql_query($sqlNome4) or die();
											while($linhaNome4 = mysql_fetch_array($resultadoNome4)){
												$cep = $linhaNome4['nr_cep'];
												$rua = $linhaNome4['nm_rua'];
												$bairro = $linhaNome4['nm_bairro'];
												$cidade = $linhaNome4['nm_cidade'];
												$complemento = $linhaNome4['nm_complemento'];
											}
											
											echo "									
												<tr style='background-color:".$color.";'>
													<td><center>".($a+1)."</center></td>
													<td><center>".$linhaEnd2['nr_cpfPaciente']."</center></td>
													<td><center>".$linhaEnd2['nm_nomePaciente']."</center></td>
													<td><center>".$linhaEnd2['nr_telefone']."</center></td>
													<td><center>".$linhaEnd2['dt_nascimento']."</center></td>
													<td><center>".$linhaEnd2['nm_genero']."</center></td>
													<td><center><button class='genric-btn primary' data-toggle='modal' data-target='#ExemploModalCentralizado".$linhaEnd2['nr_cpfPaciente']."'>Alterar Dados</button></center></td>
													<!--<td><center><a href='deletarPaciente.php?cpf=".$linhaEnd2['nr_cpfPaciente']."&id=".$linhaEnd2['nr_idEndereco']."'><img src='icones/delete.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Deletar!'></a></center></td>-->
												</tr>		
												
											<!-- Modal -->
												<div class='modal fade' id='ExemploModalCentralizado".$linhaEnd2['nr_cpfPaciente']."' tabindex='-1' role='dialog' aria-labelledby='TituloModalCentralizado' aria-hidden='true'>
												  <div class='modal-dialog modal-dialog-centered' role='document'>
													<div class='modal-content'>
													  <div class='modal-header'>
														<h5 class='modal-title' id='TituloModalCentralizado'>Alterar Dadoss:</h5>
														<button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>
														  <span aria-hidden='true'>&times;</span>
														</button>
													  </div>
													  <div class='modal-body'>
														<form method='POST' action='atualizarPaciente.php'>
															<input type='hidden' name='cpf' value='".$linhaEnd2['nr_cpfPaciente']."'>
															<b>Nome:</b><input type='text' class='single-input' name='nome' value='".$linhaEnd2['nm_nomePaciente']."'><br>
															<b>Telefone:</b><input type='text' class='single-input' name='telefone' value='".$linhaEnd2['nr_telefone']."'><br>
															<b>Data de Nascimento:</b><input type='text' class='single-input' name='nascimento' value='".$linhaEnd2['dt_nascimento']."'><br>
															<b>Estado Cívil:</b><input type='text' class='single-input' name='civil' value='".$linhaEnd2['nm_estadoCivil']."'><br>
															<b>RG:</b><input type='text' class='single-input' name='rg' value='".$linhaEnd2['nr_rg']."'><br>
															<b>Gênero:</b><input type='text' class='single-input' name='genero' value='".$linhaEnd2['nm_genero']."'><br>
															<hr>
															<input type='hidden' name='id' value='".$linhaEnd2['nr_idEndereco']."'>
															<b>CEP:</b><input type='text' class='single-input' name='cep' value='".$cep."'><br>
															<b>Rua:</b><input type='text' class='single-input' name='rua' value='".$rua."'><br>
															<b>Bairro:</b><input type='text' class='single-input' name='bairro' value='".$bairro."'><br>
															<b>Cidade:</b><input type='text' class='single-input' name='cidade' value='".$cidade."'><br>
															<b>Complemento:</b><input type='text' class='single-input' name='complemento' value='".$complemento."'><br>
													  </div>
													  <div class='modal-footer'>
														<button type='button' class='btn btn-secondary' data-dismiss='modal'>Fechar</button>
														<input type='submit' type='button' class='btn btn-primary' value='Salvar'>
														</form>
													  </div>
													</div>
												  </div>
												</div>
											
											";
											
											
											$a = $a + 1;
										}
									}else{
										echo "<p>Não há pacientes cadastrados!</p>";
									}
							?>							
						</table>
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
