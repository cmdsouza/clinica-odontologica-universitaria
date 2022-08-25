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
								<p class='text-white'>Preencha as Informações Complementares do Atestado e Realize a Impressão!</p>
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
					<h4>Finalize o Preenchimento do Atestado:</h4><br>
					<center>
					<form method='POST' action='imprimirAtestado.php'>
						<input type='hidden' name='CPF' value='<?php echo $_GET['cpf']; ?>'>
						<table border=0 width='80%' style='color:black;'>
							<tr><td><br></td></tr>
							<tr>
								<td width='40%'><center>Fim Específico do Atestado: </center></td>
								<td width='40%'><input type='checkbox' name='faltaTrabalho'> &nbsp; Justificativa de falta ao trabalho</td>
							</tr>
							<tr>
								<td width='40%'></td>
								<td width='40%'><input type='checkbox' name='atividadesEscolares'> &nbsp; Dispensa de atividades escolares</td>
							</tr>
							<tr>
								<td width='40%'></td>
								<td width='40%'><input type='checkbox' name='atividadesEsportivas'> &nbsp; Dispensa de atividades desportivas</td>
							</tr>	
							<tr>
								<td width='40%'></td>
								<td width='40%'><input type='checkbox' name='atividadesJudiciais'> &nbsp; Dispensa de atividades judiciais</td>
							</tr>
							<tr>
								<td width='40%'></td>
								<td width='40%'><input type='checkbox' name='atividadesMilitares'> &nbsp; Dispensa de atividades militares</td>
							</tr>	
							<tr><td><br></td></tr>
							<tr>
								<td><center>A pedido:</center></td>
								<td><input type='radio' name='interessado' value='interessado'> &nbsp; do interessado &nbsp; <input type='radio' name='interessado' value='representante legal'> &nbsp; do seu representante legal</td>
							</tr>
							<tr>
								<td></td>
								<td><input type='text' name='nomeRepresentante' placeholder='Nome do Representante' class='single-input'></td>
							</tr>
							<tr><td><br></td></tr>
							<tr>
								<td>
									<p><center>Esteve sob meus cuidados profissionais no período das: </center></p>
								</td>
								<td>
									<table>
										<tr>
											<td><input type='text' name='hora1' class='single-input'></td>
											<td valign='middle'>às</td>
											<td><input type='text' name='hora2' class='single-input'></td>
											<td>horas</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>
									<p><center>Deve permanecer em repouso por: </center></p>
								</td>
								<td>
										<table>
											<tr>
												<td><input type='text' name='hora' class='single-input'></td> 
												<td>&nbsp; horas a partir desta data. </td>
											</tr>
										</table>
								</td>
							</tr>
							<tr>
								<td>
									<p><center>CID: </center></p>
								</td>
								<td>
									<select name='cid' class='single-input'>
										<option value='vazio'></option>
										<option value='K00.1 Dentes supranumerários'>K00.1 Dentes supranumerários</option>
										<option value='K01 Dentes inclusos e impactados'>K01 Dentes inclusos e impactados</option>
										<option value='K01.0 Dentes inclusos'>K01.0 Dentes inclusos</option>
										<option value='K01.1 Dentes impactados'>K01.1 Dentes impactados</option>
										<option value='K01.18 Dentes supranumerários impactados'>K01.18 Dentes supranumerários impactados</option>
										<option value='K02 Cárie Dentária'>K02 Cárie Dentária</option>
										<option value='K03.0 Atrito dentário excessivo'>K03.0 Atrito dentário excessivo</option>
										<option value='K04 Doenças da polpa e dos tecidos periapicais'>K04 Doenças da polpa e dos tecidos periapicais</option>
										<option value='K04.0 Pulpite'>K04.0 Pulpite</option>
										<option value='K04.1 Necrose da polpa'>K04.1 Necrose da polpa</option>
										<option value='K04.2 Degeneração da polpa'>K04.2 Degeneração da polpa</option>
										<option value='K04.6 Abscesso periapical com fístula'>K04.6 Abscesso periapical com fístula</option>
										<option value='K04.7 Abscesso periapical sem fístula'>K04.7 Abscesso periapical sem fístula</option>
										<option value='K04.8 Cisto radicular'>K04.8 Cisto radicular</option>
										<option value='K05 Gengivite e doenças periodontais'>K05 Gengivite e doenças periodontais</option>
										<option value='K07.6 Distúrbios da articulação temporomandibular'>K07.6 Distúrbios da articulação temporomandibular</option>
										<option value='K08.1 Perda de dentes devido a acidente, extração ou a periodontais localizadas'>K08.1 Perda de dentes devido a acidente, extração ou a periodontais localizadas</option>
										<option value='K08.3 Raiz dentária retida'>K08.3 Raiz dentária retida</option>
										<option value='K09 Cistos da região bucal, não classificados em outra parte'>K09 Cistos da região bucal, não classificados em outra parte</option>
										<option value='K10 Outras doenças dos maxilares'>K10 Outras doenças dos maxilares</option>
										<option value='K11 Doenças das glândulas salivares'>K11 Doenças das glândulas salivares</option>
										<option value='Kl2.0 Aftas bucais recidivantes'>Kl2.0 Aftas bucais recidivantes</option>
										<option value='K12.2 Celulite e abscesso da boca'>K12.2 Celulite e abscesso da boca</option>
										<option value='K13 Outras doenças do lábio e da mucosa oral'>K13 Outras doenças do lábio e da mucosa oral</option>
										<option value='K14 Doenças da língua'>K14 Doenças da língua</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									<p><center>Nome do Cirurgião-Dentista: </center></p>
								</td>
								<td><input type='text' name='dentista' placeholder='Nome do Dr.' class='single-input'></td>
							</tr>
						</table>
						<br>
						<input type='submit' value='Finalizar e Continuar' class='genric-btn primary'>
					</form>
					</center>
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