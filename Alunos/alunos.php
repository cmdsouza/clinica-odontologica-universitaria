<?php
	session_start();
	date_default_timezone_set('america/sao_paulo');
	include "../conexao.php";
	$sqlNome = "SELECT * FROM tb_aluno WHERE nr_cpfAluno ='".$_SESSION['cpf']."'";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$periodo = $linhaNome['nr_periodo'];
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
		</head>
		<body>

		  <header id="header" id="home">
		    <div class="container">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li class="menu-active"><a href="alunos.php#home">Página Inicial</a></li>
					  <li class="menu"><a href="gerenciarConta.php">Gerenciar Conta</a></li>
					  <li class="menu"><a href="criarPacotes.php">Gerenciar Pacotes de Esterilização</a></li>
					  
					  
					  
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		

		
<style>
/* -----------------------------------------
   Timeline
----------------------------------------- */
.timeline {
  list-style: none;
  padding-left: 0;
  position: relative;
}
.timeline:after {
  content: "";
  height: auto;
  width: 1px;
  background: #e3e3e3;
  position: absolute;
  top: 5px;
  left: 30px;
  bottom: 25px;
}
.timeline.timeline-sm:after {
  left: 12px;
}
.timeline li {
  position: relative;
  padding-left: 70px;
  margin-bottom: 20px;
}
.timeline li:after {
  content: "";
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background: #e3e3e3;
  position: absolute;
  left: 24px;
  top: 5px;
}
.timeline li .timeline-date {
  display: inline-block;
  width: 100%;
  color: #a6a6a6;
  font-style: italic;
  font-size: 13px;
}
.timeline.timeline-icons li {
  padding-top: 7px;
}
.timeline.timeline-icons li:after {
  width: 32px;
  height: 32px;
  background: #fff;
  border: 1px solid #e3e3e3;
  left: 14px;
  top: 0;
  z-index: 11;
}
.timeline.timeline-icons li .timeline-icon {
  position: absolute;
  left: 23.5px;
  top: 7px;
  z-index: 12;
}
.timeline.timeline-icons li .timeline-icon [class*=glyphicon] {
  top: -1px !important;
}
.timeline.timeline-icons.timeline-sm li {
  padding-left: 40px;
  margin-bottom: 10px;
}
.timeline.timeline-icons.timeline-sm li:after {
  left: -5px;
}
.timeline.timeline-icons.timeline-sm li .timeline-icon {
  left: 4.5px;
}
.timeline.timeline-advanced li {
  padding-top: 0;
}
.timeline.timeline-advanced li:after {
  background: #fff;
  border: 1px solid #29b6d8;
}
.timeline.timeline-advanced li:before {
  content: "";
  width: 52px;
  height: 52px;
  border: 10px solid #fff;
  position: absolute;
  left: 4px;
  top: -10px;
  border-radius: 50%;
  z-index: 12;
}
.timeline.timeline-advanced li .timeline-icon {
  color: #29b6d8;
}
.timeline.timeline-advanced li .timeline-date {
  width: 75px;
  position: absolute;
  right: 5px;
  top: 3px;
  text-align: right;
}
.timeline.timeline-advanced li .timeline-title {
  font-size: 17px;
  margin-bottom: 0;
  padding-top: 5px;
  font-weight: bold;
}
.timeline.timeline-advanced li .timeline-subtitle {
  display: inline-block;
  width: 100%;
  color: #a6a6a6;
}
.timeline.timeline-advanced li .timeline-content {
  margin-top: 10px;
  margin-bottom: 10px;
  padding-right: 70px;
}
.timeline.timeline-advanced li .timeline-content p {
  margin-bottom: 3px;
}
.timeline.timeline-advanced li .timeline-content .divider-dashed {
  padding-top: 0px;
  margin-bottom: 7px;
  width: 200px;
}
.timeline.timeline-advanced li .timeline-user {
  display: inline-block;
  width: 100%;
  margin-bottom: 10px;
}
.timeline.timeline-advanced li .timeline-user:before,
.timeline.timeline-advanced li .timeline-user:after {
  content: " ";
  display: table;
}
.timeline.timeline-advanced li .timeline-user:after {
  clear: both;
}
.timeline.timeline-advanced li .timeline-user .timeline-avatar {
  border-radius: 50%;
  width: 32px;
  height: 32px;
  float: left;
  margin-right: 10px;
}
.timeline.timeline-advanced li .timeline-user .timeline-user-name {
  font-weight: bold;
  margin-bottom: 0;
}
.timeline.timeline-advanced li .timeline-user .timeline-user-subtitle {
  color: #a6a6a6;
  margin-top: -4px;
  margin-bottom: 0;
}
.timeline.timeline-advanced li .timeline-link {
  margin-left: 5px;
  display: inline-block;
}
.timeline-load-more-btn {
  margin-left: 70px;
}
.timeline-load-more-btn i {
  margin-right: 5px;
}


/* -----------------------------------------
   Dropdown
----------------------------------------- */
.dropdown-menu{
    padding:0 0 0 0;
}
a.dropdown-menu-header {
    background: #f7f9fe;
    font-weight: bold;
    border-bottom: 1px solid #e3e3e3;
}
.dropdown-menu > li a {
    padding: 10px 20px;
}

/* -----------------------------------------
   Badge
----------------------------------------- */

.badge2{
    padding: 3px 5px 2px;
    position: absolute;
    top: 8px;
    right: 5px;
    display: inline-block;
    min-width: 10px;
    font-size: 12px;
    font-weight: bold;
    color: #ffffff;
    line-height: 1;
    vertical-align: baseline;
    white-space: nowrap;
    text-align: center;
    border-radius: 10px;
}
.badge-danger2 {
    background-color: #db5565;
}
</style>

			
		  </header><!-- #header -->

		 
		  
		  
			<section class="generic-banner relative">	
				<div class="container">
					<div class="row height align-items-center justify-content-center">
						<div class="col-lg-10">
							<div class="generic-banner-content">
								<h2 class="text-white">Bem Vindo <?php echo $_SESSION['nome']; ?>!</h2>
								<p class="text-white"><?php echo $periodo; ?>º Período de Odontologia</p>
							</div>							
						</div>
					</div>
				</div>
			</section>		
			<!-- End banner Area -->

<style>
.top-text-block {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: 400;
  line-height: 1.42857143;
  color: #333;
  white-space: inherit !important;
  border-bottom: 1px solid #f4f4f4;
  position: relative;
}
.top-text-block:hover:before {
  content: '';
  width: 4px;
  background: #f05a1a;
  left: 0;
  top: 0;
  bottom: 0;
  position: absolute;
}
.top-text-block.unread {
  background: #ffc;
}
.top-text-block .top-text-light {
  color: #999;
  font-size: 0.8em;
}
.top-head-dropdown .dropdown-menu {
  width: 350px;
  height: 300px;
  overflow: auto;
}
.top-head-dropdown li:last-child .top-text-block {
  border-bottom: 0;
}
.topbar-align-center {
  text-align: center;
}
.loader-topbar {
  margin: 5px auto;
  border: 3px solid #ddd;
  border-radius: 50%;
  border-top: 3px solid #666;
  width: 22px;
  height: 22px;
  -webkit-animation: spin-topbar 1s linear infinite;
  animation: spin-topbar 1s linear infinite;
}
@-webkit-keyframes spin-topbar {
  0% {
    -webkit-transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
  }
}
@keyframes spin-topbar {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
</style>

<div class="panel panel-default">
  <div class="panel-body">
    <!-- Single button -->
    <div class="btn-group pull-right top-head-dropdown">
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Notificações <span class="caret"></span>
      </button>
      <ul class="dropdown-menu dropdown-menu-right">
	  
		<?php
			$sqlNome9 = "SELECT * FROM tb_notificacao WHERE nr_cpfAluno = '".$_SESSION['cpf']."' AND nm_estado = 'Nova'";
			$resultadoNome9 = mysql_query($sqlNome9) or die();
			while($linhaNome9 = mysql_fetch_array($resultadoNome9)){
				echo "
						<li>
						  <a href='mensagemLida.php?id=".$linhaNome9['nr_idNotificacao']."&cpf=".$_SESSION['cpf']."' class='top-text-block'>
							<div class='top-text-heading'>".$linhaNome9['nm_conteudo']."</div>
							<div class='top-text-light'>".$linhaNome9['dt_criacao']."</div>
						  </a> 
						</li>
				";
			}
		?>
        
		
		
      </ul>
    </div>
  </div>
</div>


<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>		
			
		<!-- Start price Area --><br>
			<section class="price-area " id="price">
				<div class="container">		
					
					
					<?php
						$sqlNome = "SELECT * FROM tb_duplas WHERE nr_cpf1 = '".$_SESSION['cpf']."' OR nr_cpf2 = '".$_SESSION['cpf']."'";
						$resultadoNome = mysql_query($sqlNome) or die();
						while($linhaNome = mysql_fetch_array($resultadoNome)){
							$idDupla = $linhaNome['nr_idDupla'];
						}
					
						$hoje = date('d/m/Y');
						
						$sqlProxConsulta = "SELECT * FROM tb_consulta WHERE nr_idDupla = ".$idDupla." AND dt_dataAtendimento = '".$hoje."' and nr_situacao != 'Atendido' ORDER BY hr_horarioAtendimento ASC LIMIT 1";
						$resultadoProxConsulta = mysql_query($sqlProxConsulta) or die();
						$numImg = mysql_num_rows($resultadoProxConsulta);
						
						if($numImg == 0){
							echo "<center><h4 class='mb-30'>Não há nenhum paciente agendado para hoje!</h4></center>";
						}else{							
							while($linhaProxConsulta = mysql_fetch_array($resultadoProxConsulta)){
								$consultaHoje = $linhaProxConsulta['nr_idConsulta'];
								$cpfPaciente = $linhaProxConsulta['nr_cpfPaciente'];
								$sqlNome = "SELECT * FROM tb_paciente WHERE nr_cpfPaciente = '".$cpfPaciente."'";
								$resultadoNome = mysql_query($sqlNome) or die();
								while($linhaNome = mysql_fetch_array($resultadoNome)){
									$nomePaciente = $linhaNome['nm_nomePaciente'];
									$generoPaciente = $linhaNome['nm_genero'];
								}
								
								$sala = $linhaProxConsulta['nr_idSala'];
								$sqlSala = "SELECT * FROM tb_sala WHERE nr_idSala = '".$sala."'";
								$resultadoSala = mysql_query($sqlSala) or die();
								while($linhaSala = mysql_fetch_array($resultadoSala)){
									$nomeSala = $linhaSala['nm_nomeSala'];
									$andarSala = $linhaSala['nr_andar'];
								}
								
								$consulta = $linhaProxConsulta['nm_numeroConsulta'];
								if($consulta != 1){
									$procedimento = $linhaProxConsulta['nr_idProcedimento'];
								}else{
									$procedimento = '1ª Consulta - Avaliação';
								}
								
								if($linhaProxConsulta['nr_situacao'] == 'Nao Confirmado'){
														$estado = 'danger';
														$situacao = 'Não Confirmado';
													}else{
														if($linhaProxConsulta['nr_situacao'] == 'Confirmado'){
															$estado = 'success';
															$situacao = 'Confirmado';
														}else{}
													}
								
								echo "
								<h3 class='mb-30'>Próxima Consulta de Hoje (".$linhaProxConsulta['hr_horarioAtendimento']." horas) <span class='badge badge-".$estado."'>".$situacao."</span></h3>
								<div class='row'>
									<div class='col-lg-4'>
										<div class='single-price no-padding'>
											<div class='price-top'>
												<h4>Paciente</h4>
											</div>
											<ul class='lists'>
												<img src='icones/boca.png'>
												<li><br><b>".$nomePaciente."</b></li>
											</ul>
										</div>
									</div>
									
									<div class='col-lg-4'>
										<div class='single-price no-padding'>
											<div class='price-top'>
												<h4>Consultório</h4>
											</div>
											<ul class='lists'>
												<img src='icones/cadeira.png'>
												<li><br><b>".$nomeSala." (".$andarSala."º andar)</b></li>
											</ul>
										</div>
									</div>
									
									<div class='col-lg-4'>
										<div class='single-price no-padding'>
											<div class='price-top'>
												<h4>Procedimento</h4>
											</div>
											<ul class='lists'>
												<img src='icones/folder.png'>
												<li><br><b>".$procedimento."</b></li>
											</ul>
										</div>
									</div>
								</div>
								
								";
							}
						}
							
					?>
					
				</div>	
			</section>
			<!-- End price Area -->
		
		<!-- About Generic Start -->
		<div class="main-wrapper">	

				<div class="whole-wrap">
				<div class="container"><br><br>
					<div class="section">
						<h3 class="mb-30">Próximas Consultas Agendadas</h3>
						
						<?php
										$sqlNome = "SELECT * FROM tb_duplas WHERE nr_cpf1 = '".$_SESSION['cpf']."' OR nr_cpf2 = '".$_SESSION['cpf']."'";
										$resultadoNome = mysql_query($sqlNome) or die();
										while($linhaNome = mysql_fetch_array($resultadoNome)){
											$idDupla = $linhaNome['nr_idDupla'];
										}
									
										$hoje = date('d/m/Y');
										
										if($numImg != 0){
											$sqlProxConsulta = "SELECT * FROM tb_consulta WHERE nr_idDupla = ".$idDupla." and nr_situacao != 'Atendido' and dt_dataAtendimento >= '".$hoje."' and nr_idConsulta != ".$consultaHoje." ORDER BY dt_dataAtendimento ASC LIMIT 1";
										}else{
											$sqlProxConsulta = "SELECT * FROM tb_consulta WHERE nr_idDupla = ".$idDupla." and nr_situacao != 'Atendido' and dt_dataAtendimento >= '".$hoje."' ORDER BY dt_dataAtendimento ASC LIMIT 1";
										}
										$resultadoProxConsulta = mysql_query($sqlProxConsulta) or die();
										while($linhaConsulta = mysql_fetch_array($resultadoProxConsulta)){
											$primeiraConulta = $linhaConsulta['nr_idConsulta'];
											$cpfPaciente = $linhaConsulta['nr_cpfPaciente'];
											$sqlNome = "SELECT * FROM tb_paciente WHERE nr_cpfPaciente = '".$cpfPaciente."'";
											$resultadoNome = mysql_query($sqlNome) or die();
											while($linhaNome = mysql_fetch_array($resultadoNome)){
												$nomePaciente = $linhaNome['nm_nomePaciente'];
												$generoPaciente = $linhaNome['nm_genero'];
											}
											
											$sala = $linhaConsulta['nr_idSala'];
											$sqlSala = "SELECT * FROM tb_sala WHERE nr_idSala = '".$sala."'";
											$resultadoSala = mysql_query($sqlSala) or die();
											while($linhaSala = mysql_fetch_array($resultadoSala)){
												$nomeSala = $linhaSala['nm_nomeSala'];
												$andarSala = $linhaSala['nr_andar'];
											}
											
											$consulta = $linhaConsulta['nm_numeroConsulta'];
											if($consulta != 1){
												$procedimento = $linhaConsulta['nr_idProcedimento'];
											}else{
												$procedimento = '1ª Consulta - Avaliação';
											}
											
											if($linhaConsulta['nr_situacao'] == 'Nao Confirmado'){
														$estado = 'danger';
														$situacao = 'Não Confirmado';
													}else{
														if($linhaConsulta['nr_situacao'] == 'Confirmado'){
															$estado = 'success';
															$situacao = 'Confirmado';
														}else{}
													}
											
											echo "
											<p><b>Próxima Consulta: dia ".$linhaConsulta['dt_dataAtendimento']." (horário: ".$linhaConsulta['hr_horarioAtendimento']." horas)</b> <span class='badge badge-".$estado."'>".$situacao."</span></p>
											<div class='row'>
												<div class='col-lg-4'>
													<div class='single-price no-padding'>
														<div class='price-top'>
															<h4>Paciente</h4>
														</div>
														<ul class='lists'>
															<img src='icones/boca.png'>
															<li><br><b>".$nomePaciente."</b></li>
														</ul>
													</div>
												</div>
												
												<div class='col-lg-4'>
													<div class='single-price no-padding'>
														<div class='price-top'>
															<h4>Consultório</h4>
														</div>
														<ul class='lists'>
															<img src='icones/cadeira.png'>
															<li><br><b>".$nomeSala." (".$andarSala."º andar)</b></li>
														</ul>
													</div>
												</div>
												
												<div class='col-lg-4'>
													<div class='single-price no-padding'>
														<div class='price-top'>
															<h4>Procedimento</h4>
														</div>
														<ul class='lists'>
															<img src='icones/folder.png'>
															<li><br><b>".$procedimento."</b></li>
														</ul>
													</div>
												</div>
											</div>
											
											";
											
											
										}
									?>
						
						<br>
						<div class="progress-table-wrap">
							<div class="progress-table">
								<table class="table">
								  <thead>
									<tr>
									  <th scope="col">Data</th>
									  <th scope="col">Horário</th>
									  <th scope="col">Paciente</th>
									  <th scope="col">Procedimento</th>
									  <th scope="col">Observação</th>
									  <th scope="col">Estado</th>
									</tr>
								  </thead>
								  <tbody>
								
									<?php
										$sqlNome = "SELECT * FROM tb_duplas WHERE nr_cpf1 = '".$_SESSION['cpf']."' OR nr_cpf2 = '".$_SESSION['cpf']."'";
										$resultadoNome = mysql_query($sqlNome) or die();
										while($linhaNome = mysql_fetch_array($resultadoNome)){
											$idDupla = $linhaNome['nr_idDupla'];
										}
									
										$hoje = date('d/m/Y');
										
										if($numImg != 0){
											$sqlProxConsulta = "SELECT * FROM tb_consulta WHERE nr_idDupla = ".$idDupla." and nr_situacao != 'Atendido' and dt_dataAtendimento >= '".$hoje."' and nr_idConsulta != ".$consultaHoje." ORDER BY dt_dataAtendimento ASC";
										}else{
											$sqlProxConsulta = "SELECT * FROM tb_consulta WHERE nr_idDupla = ".$idDupla." and nr_situacao != 'Atendido' and dt_dataAtendimento >= '".$hoje."' ORDER BY dt_dataAtendimento ASC";
										}
										$resultadoProxConsulta = mysql_query($sqlProxConsulta) or die();
										while($linhaConsulta = mysql_fetch_array($resultadoProxConsulta)){
											
											if($linhaConsulta['nr_idConsulta'] == $primeiraConulta){
												
											}else{
											
												$dataConsulta = $linhaConsulta['dt_dataAtendimento'];
												
												if($linhaConsulta['nr_situacao'] == 'Atendido'){}else{
													if((strtotime($dataConsulta) > strtotime($hoje)) || (strtotime($dataConsulta) == strtotime($hoje))){
														
														$sqlNome = "SELECT * FROM tb_paciente WHERE nr_cpfPaciente = '".$linhaConsulta['nr_cpfPaciente']."'";
														$resultadoNome = mysql_query($sqlNome) or die();
														while($linhaNome = mysql_fetch_array($resultadoNome)){
															$nomePaciente = $linhaNome['nm_nomePaciente'];
														}
														
														if(($linhaConsulta['nr_idProcedimento'] == 0) && ($linhaConsulta['nm_numeroConsulta'] == 1)){
															$nomeProcedimento = '1ª Consulta - Avaliação';
														}else{
															$nomeProcedimento = $linhaConsulta['nr_idProcedimento'];
														}
														
														if($linhaConsulta['nr_situacao'] == 'Nao Confirmado'){
															$estado = 'danger';
															$situacao = 'Não Confirmado';
														}else{
															if($linhaConsulta['nr_situacao'] == 'Confirmado'){
																$estado = 'success';
																$situacao = 'Confirmado';
															}else{}
														}
														
														echo "
														
															<tr>
															  <th>".$linhaConsulta['dt_dataAtendimento']."</th>
															  <td>".$linhaConsulta['hr_horarioAtendimento']." horas</td>
															  <td>".$nomePaciente."</td>
															  <td>".$nomeProcedimento."</td>
															  <td>".$linhaConsulta['nm_observacao']."</td>
															  <td><span class='badge badge-".$estado."'>".$situacao."</span></td>
															</tr>
														
														";
													}
												}
											}
										}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div><br>
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

