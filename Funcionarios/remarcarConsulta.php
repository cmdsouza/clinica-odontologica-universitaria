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
								<h2 class="text-white">Remarcar Consulta</h2>
								<p class="text-white">Selecione uma das consultas listadas abaixo!</p>
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
			if(isset($_SESSION['mensagem']) && ($_SESSION['mensagem'] == "Remarcação Efetuada")){	
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
							<h3 class="mb-30">Consultas de Hoje <img src='icones/searching-magnifying-glass.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Aperte a tecla F3 para iniciar a pesquisa!'></h3>
						</div>
						<table border=0 width='100%'>
							<tr>
								<td><center><b>#</b></center></td>
								<td><center><b>Nome</b></center></td>
								<td><center><b>Consultório</b></center></td>
								<td><center><b>Dupla</b></center></td>
								<td><center><b>Horário</b></center></td>
								<td><center><b>Procedimento</b></center></td>
								<td><center><b>Observação</b></center></td>
								<td></td>
								<td></td>
							</tr>
							
							<?php
								
								date_default_timezone_set('america/sao_paulo');
								
								$a = 0;
								
								$sqlEnd2 = "SELECT * FROM tb_consulta WHERE dt_dataAtendimento = '".date("d/m/Y")."' ORDER BY nr_idConsulta";
								$resultadoEnd2 = mysql_query($sqlEnd2) or die();
								$numImg = mysql_num_rows($resultadoEnd2);
								if($numImg != 0){
										while($linhaEnd2 = mysql_fetch_array($resultadoEnd2)){
											if($a%2 == 0){
												$color = "white";
											}else{
												$color = "#CCCCCC";
											}
										
											
											$sqlNome1 = "SELECT * FROM tb_paciente WHERE nr_cpfPaciente = '".$linhaEnd2['nr_cpfPaciente']."'";
											$resultadoNome1 = mysql_query($sqlNome1) or die();
											while($linhaNome1 = mysql_fetch_array($resultadoNome1)){
												$paciente = $linhaNome1['nm_nomePaciente']; 
											}
											
											$sqlNome1 = "SELECT * FROM tb_sala WHERE nr_idSala = ".$linhaEnd2['nr_idSala'];
											$resultadoNome1 = mysql_query($sqlNome1) or die();
											while($linhaNome1 = mysql_fetch_array($resultadoNome1)){
												$sala = $linhaNome1['nm_nomeSala']; 
											}
											
											$sqlNome2 = "SELECT * FROM tb_duplas WHERE nr_idDupla = ".$linhaEnd2['nr_idDupla'];
											$resultadoNome2 = mysql_query($sqlNome2) or die();
											while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
												$cpf1 = $linhaNome2['nr_cpf1'];
												$cpf2 = $linhaNome2['nr_cpf2'];
											}
											
											$sqlNome3 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$cpf1."'";
											$resultadoNome3 = mysql_query($sqlNome3) or die();
											while($linhaNome3 = mysql_fetch_array($resultadoNome3)){
												$nome1 = $linhaNome3['nm_nomeAluno'];
											}
											
											$sqlNome4 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$cpf2."'";
											$resultadoNome4 = mysql_query($sqlNome4) or die();
											while($linhaNome4 = mysql_fetch_array($resultadoNome4)){
												$nome2 = $linhaNome4['nm_nomeAluno'];
											}
											
											echo "									
												<tr style='background-color:".$color.";'>
													<td><center>".($a+1)."</center></td>
													<td><center>".$paciente."</center></td>
													<td><center>".$sala."</center></td>
													<td><center>".$nome1." e ".$nome2."</center></td>
													<td><center>".$linhaEnd2['hr_horarioAtendimento']." horas</center></td>
													<td><center>".$linhaEnd2['nr_idProcedimento']."</center></td>
													<td><center>".$linhaEnd2['nm_observacao']."</center></td>
													<td><center><button class='genric-btn primary' data-toggle='modal' data-target='#ExemploModalCentralizado".$linhaEnd2['nr_idConsulta']."'>Remarcar Consulta</button></center></td>
													<td><center><a href='desmarcar.php?id=".$linhaEnd2['nr_idConsulta']."'><img src='icones/delete.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Desmarcar'></a></center></td>
												</tr>		
												
											<!-- Modal -->
												<div class='modal fade' id='ExemploModalCentralizado".$linhaEnd2['nr_idConsulta']."' tabindex='-1' role='dialog' aria-labelledby='TituloModalCentralizado' aria-hidden='true'>
												  <div class='modal-dialog modal-dialog-centered' role='document'>
													<div class='modal-content'>
													  <div class='modal-header'>
														<h5 class='modal-title' id='TituloModalCentralizado'>Remarcar Consulta:</h5>
														<button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>
														  <span aria-hidden='true'>&times;</span>
														</button>
													  </div>
													  <div class='modal-body'>
														<form method='POST' action='inserirRemarcacao.php'>
															<input type='hidden' name='id' value='".$linhaEnd2['nr_idConsulta']."'>
															<b>Data da Consulta:</b><input type='text' class='single-input' name='data' value='".date("d/m/Y")."'><br>
															<b>Horário:</b><input type='text' class='single-input' name='horario' value='".$linhaEnd2['hr_horarioAtendimento']."'><br>
													  </div>
													  <div class='modal-footer'>
														<button type='button' class='btn btn-secondary' data-dismiss='modal'>Fechar</button>
														<input type='submit' type='button' class='btn btn-primary' value='Remarcar'>
														</form>
													  </div>
													</div>
												  </div>
												</div>
											
											";
											
											
											$a = $a + 1;
										}
									}else{
										echo "<p>Não há consultas marcadas para hoje!</p>";
									}
							?>							
						</table>
					</div>
				</div>
			</div>
			<!-- End Align Area -->		
			
			<!-- Start Align Area -->
			<div class="whole-wrap">
				<div class="container">
					<div class="section-top-border">
						<div class="row">
							<h3 class="mb-30">Todos as Consultas <img src='icones/searching-magnifying-glass.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Aperte a tecla F3 para iniciar a pesquisa!'></h3>
							
							
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
						<?php
						?>
						
						<table border=0 width='100%'>
							<tr>
								<td><center><b>#</b></center></td>
								<td><center><b>Nome</b></center></td>
								<td><center><b>Consultório</b></center></td>
								<td><center><b>Dupla</b></center></td>
								<td><center><b>Data</b></center></td>
								<td><center><b>Horário</b></center></td>
								<td><center><b>Procedimento</b></center></td>
								<td><center><b>Observação</b></center></td>
								<td></td>
								<td></td>
							</tr>
							
							<?php
								
								$a = 0;
								
								$sqlEnd2 = "SELECT * FROM tb_consulta ORDER BY nr_idConsulta";
								$resultadoEnd2 = mysql_query($sqlEnd2) or die();
								$numImg = mysql_num_rows($resultadoEnd2);
								if($numImg != 0){
										while($linhaEnd2 = mysql_fetch_array($resultadoEnd2)){
											if($a%2 == 0){
												$color = "white";
											}else{
												$color = "#CCCCCC";
											}
										
											
											$sqlNome1 = "SELECT * FROM tb_paciente WHERE nr_cpfPaciente = '".$linhaEnd2['nr_cpfPaciente']."'";
											$resultadoNome1 = mysql_query($sqlNome1) or die();
											while($linhaNome1 = mysql_fetch_array($resultadoNome1)){
												$paciente = $linhaNome1['nm_nomePaciente']; 
											}
											
											$sqlNome1 = "SELECT * FROM tb_sala WHERE nr_idSala = ".$linhaEnd2['nr_idSala'];
											$resultadoNome1 = mysql_query($sqlNome1) or die();
											while($linhaNome1 = mysql_fetch_array($resultadoNome1)){
												$sala = $linhaNome1['nm_nomeSala']; 
											}
											
											$sqlNome2 = "SELECT * FROM tb_duplas WHERE nr_idDupla = ".$linhaEnd2['nr_idDupla'];
											$resultadoNome2 = mysql_query($sqlNome2) or die();
											while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
												$cpf1 = $linhaNome2['nr_cpf1'];
												$cpf2 = $linhaNome2['nr_cpf2'];
											}
											
											$sqlNome3 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$cpf1."'";
											$resultadoNome3 = mysql_query($sqlNome3) or die();
											while($linhaNome3 = mysql_fetch_array($resultadoNome3)){
												$nome1 = $linhaNome3['nm_nomeAluno'];
											}
											
											$sqlNome4 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$cpf2."'";
											$resultadoNome4 = mysql_query($sqlNome4) or die();
											while($linhaNome4 = mysql_fetch_array($resultadoNome4)){
												$nome2 = $linhaNome4['nm_nomeAluno'];
											}
											
											echo "									
												<tr style='background-color:".$color.";'>
													<td><center>".($a+1)."</center></td>
													<td><center>".$paciente."</center></td>
													<td><center>".$sala."</center></td>
													<td><center>".$nome1." e ".$nome2."</center></td>
													<td><center>".$linhaEnd2['dt_dataAtendimento']."</center></td>
													<td><center>".$linhaEnd2['hr_horarioAtendimento']." horas</center></td>
													<td><center>".$linhaEnd2['nr_idProcedimento']."</center></td>
													<td><center>".$linhaEnd2['nm_observacao']."</center></td>
													<td><center><button class='genric-btn primary' data-toggle='modal' data-target='#ExemploModalCentralizado".$linhaEnd2['nr_idConsulta']."'>Remarcar Consulta</button></center></td>
													<td><center><a href='desmarcar.php?id=".$linhaEnd2['nr_idConsulta']."'><img src='icones/delete.png' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Desmarcar'></a></center></td>
												</tr>		
												
											<!-- Modal -->
												<div class='modal fade' id='ExemploModalCentralizado".$linhaEnd2['nr_idConsulta']."' tabindex='-1' role='dialog' aria-labelledby='TituloModalCentralizado' aria-hidden='true'>
												  <div class='modal-dialog modal-dialog-centered' role='document'>
													<div class='modal-content'>
													  <div class='modal-header'>
														<h5 class='modal-title' id='TituloModalCentralizado'>Remarcar Consulta:</h5>
														<button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>
														  <span aria-hidden='true'>&times;</span>
														</button>
													  </div>
													  <div class='modal-body'>
														<form method='POST' action='inserirRemarcacao.php'>
															<input type='hidden' name='id' value='".$linhaEnd2['nr_idConsulta']."'>
															<b>Data da Consulta:</b><input type='text' class='single-input' name='data' value='".date("d/m/Y")."'><br>
															<b>Horário:</b><input type='text' class='single-input' name='horario' value='".$linhaEnd2['hr_horarioAtendimento']."'><br>
													  </div>
													  <div class='modal-footer'>
														<button type='button' class='btn btn-secondary' data-dismiss='modal'>Fechar</button>
														<input type='submit' type='button' class='btn btn-primary' value='Remarcar'>
														</form>
													  </div>
													</div>
												  </div>
												</div>
											
											";
											
											
											$a = $a + 1;
										}
									}else{
										echo "<p>Não há consultas marcadas!</p>";
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
