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
			          <li class="menu-active"><a href="alunos2.php">P??gina Inicial</a></li>
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
								<h2 class="text-white">Atualize as Cir??rgias e <br>os Procedimentos de Endodontia</h2>
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
			
			if(isset($_SESSION['mensagem']) && ($_SESSION['mensagem'] == "J?? foram marcadas 4 procedimentos no per??odo escolhido")){	
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
			?>
		
		<br>
		<!-- Start price Area --><br>
			<section class="price-area " id="price">
				<div class="container">		
					<h3>Atualize as Informa????es:</h3><br>
					
					<?php
						$sqlNome = "SELECT * FROM tb_mapa WHERE nr_idMapa ='".$_GET['id']."'";
						$resultadoNome = mysql_query($sqlNome) or die();
						while($linhaNome = mysql_fetch_array($resultadoNome)){
							$data = $linhaNome['dt_data'];
							$obs = $linhaNome['nm_observacao'];
							$horario = $linhaNome['hr_horario'];
							$procedimento = $linhaNome['nm_procedimento'];
						}
					?>
					
					<form method='POST' action='atualizarMapa.php'>
					<input type='hidden' name='cpf' value='<?php echo $_GET['cpf']; ?>'>
					<input type='hidden' name='id' value='<?php echo $_GET['id']; ?>'>
						<table border=0>
							<tr>
								<td align='right' width='1%' style='padding:5px;'><b>Paciente:</b></td>
								<td width='40%' colspan=3 style='padding:5px;'>
									<input type='text' value='<?php echo $paciente; ?>'	disabled class='single-input'>
									</center>
								</td>
							</tr>
							<tr>
								<td align='right' style='padding:5px;'><b>Dupla:</b></td>
								<td>
									<center>
										<select class='single-input' name='dupla' required>
												<?php
													$sqlNome = "SELECT * FROM tb_duplas WHERE nm_situacao = 'Ativo'";
													$resultadoNome = mysql_query($sqlNome) or die();
													while($linhaNome = mysql_fetch_array($resultadoNome)){
														
														$sqlNome1 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linhaNome['nr_cpf1']."'";
														$resultadoNome1 = mysql_query($sqlNome1) or die();
														while($linhaNome1 = mysql_fetch_array($resultadoNome1)){
															$nome1 = $linhaNome1['nm_nomeAluno']; 
															$periodo = $linhaNome1['nr_periodo']; 
														}
														
														$sqlNome2 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linhaNome['nr_cpf2']."'";
														$resultadoNome2 = mysql_query($sqlNome2) or die();
														while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
															$nome2 = $linhaNome2['nm_nomeAluno']; 
														}
														
														
														echo "<option value='".$linhaNome['nr_idDupla']."'>".$nome1." e ".$nome2." (".$periodo."?? Periodo)</option>";
													}
												?>
											</select>
									</center>
								</td>
								<td align='right' width='1%'><b>Dia:</b></td>
								<td><center><input type='text' name='dia' value='<?php echo $data; ?>' class='single-input' disabled></center></td>
							</tr>
							<tr>
								<td align='right'><b>Procedimento:</b></td>
								<td>
									<center>
										<?php
										
										if($procedimento == 'Procedimento Cir??rgico'){
											echo "
											
												<select class='single-input' name='procedimento' required>
													<option value='Procedimento Cir??rgico'>Procedimento Cir??rgico</option>
													<option value='Procedimento Endod??ntico'>Procedimento Endod??ntico</option>
												</select>

											
											";
										}else{
											echo "
											
												<select class='single-input' name='procedimento' required>
													<option value='Procedimento Endod??ntico'>Procedimento Endod??ntico</option>
													<option value='Procedimento Cir??rgico'>Procedimento Cir??rgico</option>
												</select>

											
											";
										}
										
										?>
									</center>
								</td>
								<td align='right' style='padding:5px;'><b>Hor??rio:</b></td>
								<td>
									<center>
										<input type='text' name='horario' class='single-input' value='<?php echo $horario; ?>' disabled>
									</center>
								</td>
							</tr>
							<tr>
								<td align='right' style='padding:5px;'><b>Observa????o:</b></td>
								<td><textarea class='single-input' name='obs' required><?php echo $obs; ?></textarea></td>
							</tr>
							<tr><td><br></td></tr>
							<tr>
								<td colspan=4><center><input type='submit' value='Salvar'  class="genric-btn primary"> &nbsp; <a href='mapa.php?cpf=<?php echo $_GET['cpf']; ?>' class="genric-btn primary">Voltar</a></center></td>
							</tr>
						</table>
					</form>
					<br>
					
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
									Carlos Matheus (Eng. El??trica), Conrado Neto (Odontologia) e Adan L??cio (Me. Energia).
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