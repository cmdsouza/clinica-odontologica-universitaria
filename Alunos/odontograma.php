<?php
session_start();
date_default_timezone_set('america/sao_paulo');
include "../conexao.php";

$sqlNome = "SELECT * FROM tb_paciente WHERE nr_cpfPaciente ='".$_GET['cpf']."'";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$paciente = $linhaNome['nm_nomePaciente'];
		$nascimento = $linhaNome['dt_nascimento'];
		$sexo = $linhaNome['nm_genero'];
		$encerrado = $linhaNome['nm_encerrado'];
		$motivo = $linhaNome['nm_motivoEncerramento'];
}

$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."'";
$resultadoAnam = mysql_query($sqlAnam) or die();
$numImg = mysql_num_rows($resultadoAnam);
if($numImg != 0){
	while($linhaAnam = mysql_fetch_array($resultadoAnam)){
		$tipo = $linhaAnam['nm_tipoDenticao'];
	}
}else{
	header("Location: odontogramaInfantil.php?cpf=".$_GET['cpf']);
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

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,300,500,600,700" rel="stylesheet"> 
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
			
		<style>
			#table {
			  border: 1px solid rgb(59,172,230);
			}
		</style>
		
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
								
									
										echo "<h2 class='text-white'>Odontograma e Plano de Tratamento ".$d." <br>".$paciente."</h2>";
												
								?>
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
			?>
		
		<!-- About Generic Start -->
		<div class="main-wrapper">	

				<div class="whole-wrap">
				<div class="container"><br><br>
					<div class="section">
					
					<?php
					
						if(isset($_GET['semestre'])){
							$semestre = $_GET['semestre'];
						}else{
							$semestre = '2019/2';
						}
					
						
						$sqlDente = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_periodo = '".$semestre."'";
						$resultadoDente = mysql_query($sqlDente) or die();
						$numDente = mysql_num_rows($resultadoDente);
						if($numDente == 0){
							header("Location: escolherDenticao2.php?semestre=".$semestre."&cpf=".$_GET['cpf']);
						}
					?>
					
					
						<h1 class="mb-30">Odontograma <small>(Período: <?php echo $semestre; ?>)</small><a href="" data-toggle="modal" data-target="#example"> &nbsp; <img src='icones/refresh.png'></a></h1>
						<div>
						
						<div class="modal fade" id="example" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
							<div class="modal-content">
							  <div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Escolha um Semestre</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								  <span aria-hidden="true">&times;</span>
								</button>
							  </div>
							  <div class="modal-body">
								<form method='GET' action='odontograma.php'>
										<input type='hidden' name='cpf' value='<?php echo $_GET['cpf']; ?>'>
										<select class='single-input' name='semestre'>
											<option value='2019/2'>2019/2</option>
											<option value='2020/1'>2020/1</option>
											<option value='2020/2'>2020/2</option>
											<option value='2021/1'>2021/1</option>
											<option value='2021/2'>2021/2</option>
											<option value='2022/1'>2022/1</option>
											<option value='2022/2'>2022/2</option>
											<option value='2023/1'>2023/1</option>
											<option value='2023/2'>2023/2</option>
										</select>
							  <div class="modal-footer">
								<button type="submit" class="genric-btn success">Consultar</button>
							  </div></form>
							</div>
						  </div>
						</div>
						</div>
						
							<div>
								  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js'></script>
								  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js'></script>
								  
								  <style>
									.trapecio-bottom {
									width: 60px;
									height: 0px;
									border-right: 15px solid transparent;
									border-left: 15px solid transparent;
									border-bottom: 12.5px solid white;
								}

								.trapecio-top {
									width: 60px;
									height: 0px;
									border-right: 15px solid transparent;
									border-left: 15px solid transparent;
									border-top: 12.5px solid white;
								}

								.trapecio-right {
									width: 38px;
									height: 0px;
									border-right: 11px solid transparent;
									border-left: 11px solid transparent;
									border-top: 12px solid white;
									transform: rotate(90deg);
									margin-right:-8px;
									margin-left:-9px;
								}

								.trapecio-left {
									position: relative;
									width: 38px;
									height: 0px;
									border-right: 11px solid transparent;
									border-left: 11px solid transparent;
									border-top: 12px solid white;
									transform: rotate(270deg);
									margin-left:-8px;
									margin-right:-10px;
								}

								.quadrado {
									 width:8px; 
									 height: 18px; 
									 background: white;
								}
								
								.quadrado2 {
									 width:6px; 
									 height: 18px; 
									 background: white;
									 margin-left:0.5px;
									 margin-right:0.5px;
								}
								
								.trapecio-right2 {
									width: 41px;
									height: 0px;
									border-right: 11px solid transparent;
									border-left: 11px solid transparent;
									border-top: 10px solid white;
									transform: rotate(90deg);
									margin-right:-5px;
									margin-left:-11px;
								}

								.trapecio-left2 {
									position: relative;
									width: 41px;
									height: 0px;
									border-right: 11px solid transparent;
									border-left: 11px solid transparent;
									border-top: 10px solid white;
									transform: rotate(270deg);
									margin-left:-5px;
									margin-right:-12px;
								}
								
								.trapecio-bottom3 {
									width: 55px;
									height: 0px;
									border-right: 13px solid transparent;
									border-left: 13px solid transparent;
									border-bottom: 12.5px solid white;
								}

								.trapecio-top3 {
									width: 55px;
									height: 0px;
									border-right: 13px solid transparent;
									border-left: 13px solid transparent;
									border-top: 12.5px solid white;
								}

								.trapecio-right3 {
									width: 41px;
									height: 0px;
									border-right: 15px solid transparent;
									border-left: 15px solid transparent;
									border-top: 8px solid white;
									transform: rotate(90deg);
									margin-right:-8px;
									margin-left:-16px;
								}

								.trapecio-left3 {
									position: relative;
									width: 41px;
									height: 0px;
									border-right: 15px solid transparent;
									border-left: 15px solid transparent;
									border-top: 8px solid white;
									transform: rotate(270deg);
									margin-left:-9px;
									margin-right:-16px;
								}

								.trapecio-bottom3 {
									width: 47px;
									height: 0px;
									border-right: 9px solid transparent;
									border-left: 9px solid transparent;
									border-bottom: 15px solid white;
								}

								.trapecio-top3 {
									width: 47px;
									height: 0px;
									border-right: 9px solid transparent;
									border-left: 9px solid transparent;
									border-top: 15px solid white;
								}
								
								.quadrado3 {
									 width:8px; 
									 height: 12px; 
									 background: white;
								}
									</style>
									
							</div>
						</div>
					</div>
			</div>
			<!-- End Generic Start -->		
			
			<!-- Inicio dente 18 -->
			<style>
				#retangulo1{
					width: 20px;
					/* quadrados são retangulos com width = height  */
					height: 20px;
					border: 3px solid black;
				}
			</style>
			
	<?php
	
	switch($tipo){
		
		case "Permanente":
			
	?>
			<!-- ####################### INICIO DO ODONTOGRAMA ####################### -->
			
			
			<?php
			// 18
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='18' AND nm_face='Distal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor18Distal = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor18Distal = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor18Distal = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor18Distal = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='18' AND nm_face='Vestibular' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor18Vestibular = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor18Vestibular = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor18Vestibular = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor18Vestibular = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='18' AND nm_face='Mesial' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor18Mesial = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor18Mesial = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor18Mesial = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor18Mesial = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='18' AND nm_face='Lingual/Palatina' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor18Lingual = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor18Lingual = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor18Lingual = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor18Lingual = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='18' AND nm_face='Oclusal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor18Oclusal = $cor18TercoMesial = $cor18TercoDistal = $cor18TercoMedio =  "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor18Oclusal = $cor18TercoMesial = $cor18TercoDistal = $cor18TercoMedio =  "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor18Oclusal = $cor18TercoMesial = $cor18TercoDistal = $cor18TercoMedio =  "rgb(32,163,101)";
							break;
						}
					}
				}else{
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='18' AND nm_face='Terco Mesial' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor18TercoMesial = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor18TercoMesial = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor18TercoMesial = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor18TercoMesial = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='18' AND nm_face='Terco Medio' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor18TercoMedio = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor18TercoMedio = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor18TercoMedio = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor18TercoMedio = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='18' AND nm_face='Terco Distal' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor18TercoDistal = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor18TercoDistal = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor18TercoDistal = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor18TercoDistal = 'white';
					}
					
					
				}
			?>
			
			<?php
			// 17
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='17' AND nm_face='Distal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor17Distal = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor17Distal = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor17Distal = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor17Distal = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='17' AND nm_face='Vestibular' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor17Vestibular = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor17Vestibular = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor17Vestibular = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor17Vestibular = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='17' AND nm_face='Mesial' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor17Mesial = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor17Mesial = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor17Mesial = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor17Mesial = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='17' AND nm_face='Lingual/Palatina' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor17Lingual = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor17Lingual = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor17Lingual = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor17Lingual = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='17' AND nm_face='Oclusal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor17Oclusal = $cor17TercoMesial = $cor17TercoDistal = $cor17TercoMedio =  "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor17Oclusal = $cor17TercoMesial = $cor17TercoDistal = $cor17TercoMedio =  "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor17Oclusal = $cor17TercoMesial = $cor17TercoDistal = $cor17TercoMedio =  "rgb(32,163,101)";
							break;
						}
					}
				}else{
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='17' AND nm_face='Terco Mesial' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor17TercoMesial = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor17TercoMesial = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor17TercoMesial = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor17TercoMesial = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='17' AND nm_face='Terco Medio' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor17TercoMedio = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor17TercoMedio = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor17TercoMedio = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor17TercoMedio = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='17' AND nm_face='Terco Distal' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor17TercoDistal = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor17TercoDistal = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor17TercoDistal = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor17TercoDistal = 'white';
					}
					
					
				}
			?>
			
			<?php
			// 16
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='16' AND nm_face='Distal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor16Distal = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor16Distal = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor16Distal = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor16Distal = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='16' AND nm_face='Vestibular' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor16Vestibular = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor16Vestibular = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor16Vestibular = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor16Vestibular = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='16' AND nm_face='Mesial' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor16Mesial = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor16Mesial = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor16Mesial = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor16Mesial = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='16' AND nm_face='Lingual/Palatina' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor16Lingual = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor16Lingual = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor16Lingual = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor16Lingual = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='16' AND nm_face='Oclusal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor16Oclusal = $cor16TercoMesial = $cor16TercoDistal = $cor16TercoMedio =  "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor16Oclusal = $cor16TercoMesial = $cor16TercoDistal = $cor16TercoMedio =  "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor16Oclusal = $cor16TercoMesial = $cor16TercoDistal = $cor16TercoMedio =  "rgb(32,163,101)";
							break;
						}
					}
				}else{
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='16' AND nm_face='Terco Mesial' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor16TercoMesial = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor16TercoMesial = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor16TercoMesial = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor16TercoMesial = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='16' AND nm_face='Terco Medio' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor16TercoMedio = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor16TercoMedio = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor16TercoMedio = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor16TercoMedio = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='16' AND nm_face='Terco Distal' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor16TercoDistal = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor16TercoDistal = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor16TercoDistal = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor16TercoDistal = 'white';
					}
					
					
				}
			?>
			
			<?php
			// 15
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='15' AND nm_face='Distal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor15Distal = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor15Distal = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor15Distal = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor15Distal = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='15' AND nm_face='Vestibular' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor15Vestibular = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor15Vestibular = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor15Vestibular = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor15Vestibular = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='15' AND nm_face='Mesial' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor15Mesial = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor15Mesial = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor15Mesial = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor15Mesial = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='15' AND nm_face='Lingual/Palatina' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor15Lingual = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor15Lingual = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor15Lingual = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor15Lingual = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='15' AND nm_face='Oclusal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor15Oclusal = $cor15TercoMesial = $cor15TercoDistal = $cor15TercoMedio =  "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor15Oclusal = $cor15TercoMesial = $cor15TercoDistal = $cor15TercoMedio =  "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor15Oclusal = $cor15TercoMesial = $cor15TercoDistal = $cor15TercoMedio =  "rgb(32,163,101)";
							break;
						}
					}
				}else{
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='15' AND nm_face='Terco Mesial' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor15TercoMesial = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor15TercoMesial = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor15TercoMesial = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor15TercoMesial = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='15' AND nm_face='Terco Medio' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor15TercoMedio = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor15TercoMedio = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor15TercoMedio = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor15TercoMedio = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='15' AND nm_face='Terco Distal' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor15TercoDistal = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor15TercoDistal = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor15TercoDistal = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor15TercoDistal = 'white';
					}
					
					
				}
			?>
			
			<?php
			// 14
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='14' AND nm_face='Distal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor14Distal = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor14Distal = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor14Distal = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor14Distal = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='14' AND nm_face='Vestibular' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor14Vestibular = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor14Vestibular = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor14Vestibular = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor14Vestibular = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='14' AND nm_face='Mesial' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor14Mesial = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor14Mesial = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor14Mesial = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor14Mesial = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='14' AND nm_face='Lingual/Palatina' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor14Lingual = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor14Lingual = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor14Lingual = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor14Lingual = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='14' AND nm_face='Oclusal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor14Oclusal = $cor14TercoMesial = $cor14TercoDistal = $cor14TercoMedio =  "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor14Oclusal = $cor14TercoMesial = $cor14TercoDistal = $cor14TercoMedio =  "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor14Oclusal = $cor14TercoMesial = $cor14TercoDistal = $cor14TercoMedio =  "rgb(32,163,101)";
							break;
						}
					}
				}else{
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='14' AND nm_face='Terco Mesial' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor14TercoMesial = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor14TercoMesial = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor14TercoMesial = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor14TercoMesial = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='14' AND nm_face='Terco Medio' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor14TercoMedio = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor14TercoMedio = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor14TercoMedio = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor14TercoMedio = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='14' AND nm_face='Terco Distal' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor14TercoDistal = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor14TercoDistal = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor14TercoDistal = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor14TercoDistal = 'white';
					}
					
					
				}
			?>
			
			<?php
			// 13
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='13' AND nm_face='Distal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor13Distal = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor13Distal = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor13Distal = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor13Distal = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='13' AND nm_face='Vestibular' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor13Vestibular = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor13Vestibular = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor13Vestibular = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor13Vestibular = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='13' AND nm_face='Mesial' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor13Mesial = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor13Mesial = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor13Mesial = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor13Mesial = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='13' AND nm_face='Lingual/Palatina' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor13Lingual = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor13Lingual = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor13Lingual = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor13Lingual = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='13' AND nm_face='Oclusal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor13Oclusal = $cor13TercoMesial = $cor13TercoDistal = $cor13TercoMedio =  "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor13Oclusal = $cor13TercoMesial = $cor13TercoDistal = $cor13TercoMedio =  "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor13Oclusal = $cor13TercoMesial = $cor13TercoDistal = $cor13TercoMedio =  "rgb(32,163,101)";
							break;
						}
					}
				}else{
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='13' AND nm_face='Terco Mesial' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor13TercoMesial = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor13TercoMesial = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor13TercoMesial = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor13TercoMesial = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='13' AND nm_face='Terco Medio' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor13TercoMedio = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor13TercoMedio = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor13TercoMedio = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor13TercoMedio = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='13' AND nm_face='Terco Distal' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor13TercoDistal = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor13TercoDistal = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor13TercoDistal = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor13TercoDistal = 'white';
					}
					
					
				}
			?>
			
			<?php
			// 12
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='12' AND nm_face='Distal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor12Distal = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor12Distal = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor12Distal = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor12Distal = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='12' AND nm_face='Vestibular' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor12Vestibular = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor12Vestibular = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor12Vestibular = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor12Vestibular = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='12' AND nm_face='Mesial' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor12Mesial = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor12Mesial = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor12Mesial = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor12Mesial = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='12' AND nm_face='Lingual/Palatina' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor12Lingual = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor12Lingual = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor12Lingual = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor12Lingual = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='12' AND nm_face='Oclusal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor12Oclusal = $cor12TercoMesial = $cor12TercoDistal = $cor12TercoMedio =  "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor12Oclusal = $cor12TercoMesial = $cor12TercoDistal = $cor12TercoMedio =  "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor12Oclusal = $cor12TercoMesial = $cor12TercoDistal = $cor12TercoMedio =  "rgb(32,163,101)";
							break;
						}
					}
				}else{
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='12' AND nm_face='Terco Mesial' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor12TercoMesial = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor12TercoMesial = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor12TercoMesial = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor12TercoMesial = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='12' AND nm_face='Terco Medio' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor12TercoMedio = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor12TercoMedio = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor12TercoMedio = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor12TercoMedio = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='12' AND nm_face='Terco Distal' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor12TercoDistal = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor12TercoDistal = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor12TercoDistal = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor12TercoDistal = 'white';
					}
					
					
				}
			?>
			
			<?php
			// 11
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='11' AND nm_face='Distal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor11Distal = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor11Distal = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor11Distal = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor11Distal = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='11' AND nm_face='Vestibular' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor11Vestibular = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor11Vestibular = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor11Vestibular = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor11Vestibular = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='11' AND nm_face='Mesial' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor11Mesial = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor11Mesial = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor11Mesial = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor11Mesial = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='11' AND nm_face='Lingual/Palatina' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor11Lingual = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor11Lingual = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor11Lingual = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor11Lingual = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='11' AND nm_face='Oclusal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor11Oclusal = $cor11TercoMesial = $cor11TercoDistal = $cor11TercoMedio =  "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor11Oclusal = $cor11TercoMesial = $cor11TercoDistal = $cor11TercoMedio =  "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor11Oclusal = $cor11TercoMesial = $cor11TercoDistal = $cor11TercoMedio =  "rgb(32,163,101)";
							break;
						}
					}
				}else{
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='11' AND nm_face='Terco Mesial' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor11TercoMesial = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor11TercoMesial = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor11TercoMesial = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor11TercoMesial = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='11' AND nm_face='Terco Medio' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor11TercoMedio = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor11TercoMedio = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor11TercoMedio = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor11TercoMedio = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='11' AND nm_face='Terco Distal' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor11TercoDistal = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor11TercoDistal = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor11TercoDistal = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor11TercoDistal = 'white';
					}
					
					
				}
			?>
			
			<?php
			// 21
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='21' AND nm_face='Distal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor21Distal = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor21Distal = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor21Distal = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor21Distal = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='21' AND nm_face='Vestibular' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor21Vestibular = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor21Vestibular = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor21Vestibular = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor21Vestibular = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='21' AND nm_face='Mesial' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor21Mesial = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor21Mesial = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor21Mesial = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor21Mesial = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='21' AND nm_face='Lingual/Palatina' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor21Lingual = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor21Lingual = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor21Lingual = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor21Lingual = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='21' AND nm_face='Oclusal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor21Oclusal = $cor21TercoMesial = $cor21TercoDistal = $cor21TercoMedio =  "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor21Oclusal = $cor21TercoMesial = $cor21TercoDistal = $cor21TercoMedio =  "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor21Oclusal = $cor21TercoMesial = $cor21TercoDistal = $cor21TercoMedio =  "rgb(32,163,101)";
							break;
						}
					}
				}else{
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='21' AND nm_face='Terco Mesial' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor21TercoMesial = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor21TercoMesial = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor21TercoMesial = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor21TercoMesial = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='21' AND nm_face='Terco Medio' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor21TercoMedio = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor21TercoMedio = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor21TercoMedio = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor21TercoMedio = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='21' AND nm_face='Terco Distal' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor21TercoDistal = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor21TercoDistal = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor21TercoDistal = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor21TercoDistal = 'white';
					}
					
					
				}
			?>
			
			<?php
			// 22
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='22' AND nm_face='Distal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor22Distal = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor22Distal = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor22Distal = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor22Distal = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='22' AND nm_face='Vestibular' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor22Vestibular = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor22Vestibular = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor22Vestibular = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor22Vestibular = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='22' AND nm_face='Mesial' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor22Mesial = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor22Mesial = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor22Mesial = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor22Mesial = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='22' AND nm_face='Lingual/Palatina' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor22Lingual = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor22Lingual = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor22Lingual = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor22Lingual = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='22' AND nm_face='Oclusal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor22Oclusal = $cor22TercoMesial = $cor22TercoDistal = $cor22TercoMedio =  "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor22Oclusal = $cor22TercoMesial = $cor22TercoDistal = $cor22TercoMedio =  "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor22Oclusal = $cor22TercoMesial = $cor22TercoDistal = $cor22TercoMedio =  "rgb(32,163,101)";
							break;
						}
					}
				}else{
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='22' AND nm_face='Terco Mesial' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor22TercoMesial = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor22TercoMesial = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor22TercoMesial = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor22TercoMesial = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='22' AND nm_face='Terco Medio' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor22TercoMedio = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor22TercoMedio = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor22TercoMedio = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor22TercoMedio = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='22' AND nm_face='Terco Distal' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor22TercoDistal = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor22TercoDistal = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor22TercoDistal = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor22TercoDistal = 'white';
					}
					
					
				}
			?>
			
			<?php
			// 23
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='23' AND nm_face='Distal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor23Distal = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor23Distal = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor23Distal = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor23Distal = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='23' AND nm_face='Vestibular' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor23Vestibular = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor23Vestibular = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor23Vestibular = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor23Vestibular = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='23' AND nm_face='Mesial' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor23Mesial = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor23Mesial = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor23Mesial = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor23Mesial = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='23' AND nm_face='Lingual/Palatina' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor23Lingual = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor23Lingual = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor23Lingual = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor23Lingual = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='23' AND nm_face='Oclusal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor23Oclusal = $cor23TercoMesial = $cor23TercoDistal = $cor23TercoMedio =  "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor23Oclusal = $cor23TercoMesial = $cor23TercoDistal = $cor23TercoMedio =  "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor23Oclusal = $cor23TercoMesial = $cor23TercoDistal = $cor23TercoMedio =  "rgb(32,163,101)";
							break;
						}
					}
				}else{
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='23' AND nm_face='Terco Mesial' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor23TercoMesial = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor23TercoMesial = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor23TercoMesial = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor23TercoMesial = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='23' AND nm_face='Terco Medio' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor23TercoMedio = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor23TercoMedio = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor23TercoMedio = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor23TercoMedio = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='23' AND nm_face='Terco Distal' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor23TercoDistal = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor23TercoDistal = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor23TercoDistal = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor23TercoDistal = 'white';
					}
					
					
				}
			?>
			
			<?php
			// 24
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='24' AND nm_face='Distal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor24Distal = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor24Distal = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor24Distal = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor24Distal = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='24' AND nm_face='Vestibular' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor24Vestibular = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor24Vestibular = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor24Vestibular = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor24Vestibular = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='24' AND nm_face='Mesial' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor24Mesial = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor24Mesial = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor24Mesial = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor24Mesial = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='24' AND nm_face='Lingual/Palatina' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor24Lingual = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor24Lingual = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor24Lingual = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor24Lingual = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='24' AND nm_face='Oclusal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor24Oclusal = $cor24TercoMesial = $cor24TercoDistal = $cor24TercoMedio =  "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor24Oclusal = $cor24TercoMesial = $cor24TercoDistal = $cor24TercoMedio =  "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor24Oclusal = $cor24TercoMesial = $cor24TercoDistal = $cor24TercoMedio =  "rgb(32,163,101)";
							break;
						}
					}
				}else{
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='24' AND nm_face='Terco Mesial' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor24TercoMesial = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor24TercoMesial = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor24TercoMesial = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor24TercoMesial = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='24' AND nm_face='Terco Medio' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor24TercoMedio = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor24TercoMedio = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor24TercoMedio = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor24TercoMedio = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='24' AND nm_face='Terco Distal' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor24TercoDistal = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor24TercoDistal = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor24TercoDistal = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor24TercoDistal = 'white';
					}
					
					
				}
			?>
			
			<?php
			// 25
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='25' AND nm_face='Distal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor25Distal = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor25Distal = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor25Distal = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor25Distal = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='25' AND nm_face='Vestibular' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor25Vestibular = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor25Vestibular = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor25Vestibular = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor25Vestibular = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='25' AND nm_face='Mesial' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor25Mesial = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor25Mesial = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor25Mesial = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor25Mesial = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='25' AND nm_face='Lingual/Palatina' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor25Lingual = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor25Lingual = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor25Lingual = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor25Lingual = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='25' AND nm_face='Oclusal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor25Oclusal = $cor25TercoMesial = $cor25TercoDistal = $cor25TercoMedio =  "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor25Oclusal = $cor25TercoMesial = $cor25TercoDistal = $cor25TercoMedio =  "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor25Oclusal = $cor25TercoMesial = $cor25TercoDistal = $cor25TercoMedio =  "rgb(32,163,101)";
							break;
						}
					}
				}else{
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='25' AND nm_face='Terco Mesial' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor25TercoMesial = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor25TercoMesial = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor25TercoMesial = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor25TercoMesial = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='25' AND nm_face='Terco Medio' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor25TercoMedio = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor25TercoMedio = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor25TercoMedio = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor25TercoMedio = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='25' AND nm_face='Terco Distal' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor25TercoDistal = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor25TercoDistal = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor25TercoDistal = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor25TercoDistal = 'white';
					}
					
					
				}
			?>
			
			<?php
			// 26
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='26' AND nm_face='Distal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor26Distal = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor26Distal = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor26Distal = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor26Distal = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='26' AND nm_face='Vestibular' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor26Vestibular = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor26Vestibular = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor26Vestibular = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor26Vestibular = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='26' AND nm_face='Mesial' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor26Mesial = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor26Mesial = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor26Mesial = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor26Mesial = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='26' AND nm_face='Lingual/Palatina' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor26Lingual = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor26Lingual = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor26Lingual = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor26Lingual = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='26' AND nm_face='Oclusal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor26Oclusal = $cor26TercoMesial = $cor26TercoDistal = $cor26TercoMedio =  "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor26Oclusal = $cor26TercoMesial = $cor26TercoDistal = $cor26TercoMedio =  "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor26Oclusal = $cor26TercoMesial = $cor26TercoDistal = $cor26TercoMedio =  "rgb(32,163,101)";
							break;
						}
					}
				}else{
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='26' AND nm_face='Terco Mesial' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor26TercoMesial = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor26TercoMesial = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor26TercoMesial = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor26TercoMesial = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='26' AND nm_face='Terco Medio' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor26TercoMedio = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor26TercoMedio = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor26TercoMedio = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor26TercoMedio = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='26' AND nm_face='Terco Distal' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor26TercoDistal = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor26TercoDistal = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor26TercoDistal = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor26TercoDistal = 'white';
					}
					
					
				}
			?>
			
			<?php
			// 27
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='27' AND nm_face='Distal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor27Distal = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor27Distal = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor27Distal = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor27Distal = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='27' AND nm_face='Vestibular' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor27Vestibular = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor27Vestibular = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor27Vestibular = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor27Vestibular = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='27' AND nm_face='Mesial' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor27Mesial = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor27Mesial = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor27Mesial = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor27Mesial = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='27' AND nm_face='Lingual/Palatina' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor27Lingual = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor27Lingual = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor27Lingual = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor27Lingual = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='27' AND nm_face='Oclusal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor27Oclusal = $cor27TercoMesial = $cor27TercoDistal = $cor27TercoMedio =  "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor27Oclusal = $cor27TercoMesial = $cor27TercoDistal = $cor27TercoMedio =  "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor27Oclusal = $cor27TercoMesial = $cor27TercoDistal = $cor27TercoMedio =  "rgb(32,163,101)";
							break;
						}
					}
				}else{
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='27' AND nm_face='Terco Mesial' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor27TercoMesial = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor27TercoMesial = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor27TercoMesial = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor27TercoMesial = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='27' AND nm_face='Terco Medio' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor27TercoMedio = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor27TercoMedio = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor27TercoMedio = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor27TercoMedio = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='27' AND nm_face='Terco Distal' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor27TercoDistal = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor27TercoDistal = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor27TercoDistal = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor27TercoDistal = 'white';
					}
					
					
				}
			?>
			
			<?php
			// 28
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='28' AND nm_face='Distal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor28Distal = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor28Distal = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor28Distal = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor28Distal = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='28' AND nm_face='Vestibular' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor28Vestibular = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor28Vestibular = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor28Vestibular = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor28Vestibular = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='28' AND nm_face='Mesial' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor28Mesial = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor28Mesial = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor28Mesial = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor28Mesial = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='28' AND nm_face='Lingual/Palatina' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor28Lingual = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor28Lingual = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor28Lingual = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor28Lingual = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='28' AND nm_face='Oclusal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor28Oclusal = $cor28TercoMesial = $cor28TercoDistal = $cor28TercoMedio =  "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor28Oclusal = $cor28TercoMesial = $cor28TercoDistal = $cor28TercoMedio =  "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor28Oclusal = $cor28TercoMesial = $cor28TercoDistal = $cor28TercoMedio =  "rgb(32,163,101)";
							break;
						}
					}
				}else{
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='28' AND nm_face='Terco Mesial' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor28TercoMesial = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor28TercoMesial = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor28TercoMesial = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor28TercoMesial = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='28' AND nm_face='Terco Medio' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor28TercoMedio = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor28TercoMedio = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor28TercoMedio = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor28TercoMedio = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='28' AND nm_face='Terco Distal' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor28TercoDistal = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor28TercoDistal = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor28TercoDistal = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor28TercoDistal = 'white';
					}
					
					
				}
			?>
			
			
			<!-- ######################################################################################### PARTE DEBAIXO -->
			
					<?php
			// 38
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='38' AND nm_face='Distal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor38Distal = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor38Distal = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor38Distal = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor38Distal = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='38' AND nm_face='Vestibular' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor38Vestibular = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor38Vestibular = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor38Vestibular = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor38Vestibular = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='38' AND nm_face='Mesial' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor38Mesial = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor38Mesial = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor38Mesial = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor38Mesial = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='38' AND nm_face='Lingual/Palatina' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor38Lingual = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor38Lingual = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor38Lingual = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor38Lingual = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='38' AND nm_face='Oclusal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor38Oclusal = $cor38TercoMesial = $cor38TercoDistal = $cor38TercoMedio =  "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor38Oclusal = $cor38TercoMesial = $cor38TercoDistal = $cor38TercoMedio =  "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor38Oclusal = $cor38TercoMesial = $cor38TercoDistal = $cor38TercoMedio =  "rgb(32,163,101)";
							break;
						}
					}
				}else{
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='38' AND nm_face='Terco Mesial' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor38TercoMesial = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor38TercoMesial = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor38TercoMesial = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor38TercoMesial = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='38' AND nm_face='Terco Medio' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor38TercoMedio = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor38TercoMedio = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor38TercoMedio = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor38TercoMedio = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='38' AND nm_face='Terco Distal' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor38TercoDistal = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor38TercoDistal = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor38TercoDistal = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor38TercoDistal = 'white';
					}
					
					
				}
			?>
			
			<?php
			// 37
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='37' AND nm_face='Distal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor37Distal = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor37Distal = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor37Distal = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor37Distal = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='37' AND nm_face='Vestibular' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor37Vestibular = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor37Vestibular = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor37Vestibular = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor37Vestibular = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='37' AND nm_face='Mesial' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor37Mesial = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor37Mesial = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor37Mesial = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor37Mesial = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='37' AND nm_face='Lingual/Palatina' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor37Lingual = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor37Lingual = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor37Lingual = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor37Lingual = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='37' AND nm_face='Oclusal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor37Oclusal = $cor37TercoMesial = $cor37TercoDistal = $cor37TercoMedio =  "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor37Oclusal = $cor37TercoMesial = $cor37TercoDistal = $cor37TercoMedio =  "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor37Oclusal = $cor37TercoMesial = $cor37TercoDistal = $cor37TercoMedio =  "rgb(32,163,101)";
							break;
						}
					}
				}else{
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='37' AND nm_face='Terco Mesial' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor37TercoMesial = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor37TercoMesial = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor37TercoMesial = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor37TercoMesial = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='37' AND nm_face='Terco Medio' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor37TercoMedio = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor37TercoMedio = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor37TercoMedio = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor37TercoMedio = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='37' AND nm_face='Terco Distal' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor37TercoDistal = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor37TercoDistal = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor37TercoDistal = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor37TercoDistal = 'white';
					}
					
					
				}
			?>
			
			<?php
			// 36
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='36' AND nm_face='Distal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor36Distal = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor36Distal = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor36Distal = "rgb(32,363,101)";
							break;
						}
					}
				}else{
					$cor36Distal = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='36' AND nm_face='Vestibular' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor36Vestibular = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor36Vestibular = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor36Vestibular = "rgb(32,363,101)";
							break;
						}
					}
				}else{
					$cor36Vestibular = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='36' AND nm_face='Mesial' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor36Mesial = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor36Mesial = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor36Mesial = "rgb(32,363,101)";
							break;
						}
					}
				}else{
					$cor36Mesial = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='36' AND nm_face='Lingual/Palatina' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor36Lingual = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor36Lingual = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor36Lingual = "rgb(32,363,101)";
							break;
						}
					}
				}else{
					$cor36Lingual = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='36' AND nm_face='Oclusal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor36Oclusal = $cor36TercoMesial = $cor36TercoDistal = $cor36TercoMedio =  "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor36Oclusal = $cor36TercoMesial = $cor36TercoDistal = $cor36TercoMedio =  "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor36Oclusal = $cor36TercoMesial = $cor36TercoDistal = $cor36TercoMedio =  "rgb(32,363,101)";
							break;
						}
					}
				}else{
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='36' AND nm_face='Terco Mesial' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor36TercoMesial = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor36TercoMesial = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor36TercoMesial = "rgb(32,363,101)";
								break;
							}
						}
					}else{
						$cor36TercoMesial = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='36' AND nm_face='Terco Medio' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor36TercoMedio = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor36TercoMedio = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor36TercoMedio = "rgb(32,363,101)";
								break;
							}
						}
					}else{
						$cor36TercoMedio = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='36' AND nm_face='Terco Distal' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor36TercoDistal = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor36TercoDistal = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor36TercoDistal = "rgb(32,363,101)";
								break;
							}
						}
					}else{
						$cor36TercoDistal = 'white';
					}
					
					
				}
			?>
			
			<?php
			// 35
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='35' AND nm_face='Distal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor35Distal = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor35Distal = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor35Distal = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor35Distal = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='35' AND nm_face='Vestibular' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor35Vestibular = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor35Vestibular = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor35Vestibular = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor35Vestibular = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='35' AND nm_face='Mesial' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor35Mesial = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor35Mesial = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor35Mesial = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor35Mesial = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='35' AND nm_face='Lingual/Palatina' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor35Lingual = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor35Lingual = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor35Lingual = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor35Lingual = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='35' AND nm_face='Oclusal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor35Oclusal = $cor35TercoMesial = $cor35TercoDistal = $cor35TercoMedio =  "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor35Oclusal = $cor35TercoMesial = $cor35TercoDistal = $cor35TercoMedio =  "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor35Oclusal = $cor35TercoMesial = $cor35TercoDistal = $cor35TercoMedio =  "rgb(32,163,101)";
							break;
						}
					}
				}else{
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='35' AND nm_face='Terco Mesial' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor35TercoMesial = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor35TercoMesial = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor35TercoMesial = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor35TercoMesial = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='35' AND nm_face='Terco Medio' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor35TercoMedio = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor35TercoMedio = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor35TercoMedio = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor35TercoMedio = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='35' AND nm_face='Terco Distal' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor35TercoDistal = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor35TercoDistal = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor35TercoDistal = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor35TercoDistal = 'white';
					}
					
					
				}
			?>
			
			<?php
			// 34
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='34' AND nm_face='Distal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor34Distal = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor34Distal = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor34Distal = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor34Distal = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='34' AND nm_face='Vestibular' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor34Vestibular = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor34Vestibular = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor34Vestibular = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor34Vestibular = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='34' AND nm_face='Mesial' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor34Mesial = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor34Mesial = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor34Mesial = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor34Mesial = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='34' AND nm_face='Lingual/Palatina' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor34Lingual = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor34Lingual = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor34Lingual = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor34Lingual = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='34' AND nm_face='Oclusal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor34Oclusal = $cor34TercoMesial = $cor34TercoDistal = $cor34TercoMedio =  "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor34Oclusal = $cor34TercoMesial = $cor34TercoDistal = $cor34TercoMedio =  "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor34Oclusal = $cor34TercoMesial = $cor34TercoDistal = $cor34TercoMedio =  "rgb(32,163,101)";
							break;
						}
					}
				}else{
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='34' AND nm_face='Terco Mesial' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor34TercoMesial = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor34TercoMesial = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor34TercoMesial = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor34TercoMesial = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='34' AND nm_face='Terco Medio' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor34TercoMedio = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor34TercoMedio = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor34TercoMedio = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor34TercoMedio = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='34' AND nm_face='Terco Distal' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor34TercoDistal = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor34TercoDistal = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor34TercoDistal = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor34TercoDistal = 'white';
					}
					
					
				}
			?>
			
			<?php
			// 33
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='33' AND nm_face='Distal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor33Distal = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor33Distal = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor33Distal = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor33Distal = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='33' AND nm_face='Vestibular' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor33Vestibular = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor33Vestibular = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor33Vestibular = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor33Vestibular = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='33' AND nm_face='Mesial' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor33Mesial = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor33Mesial = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor33Mesial = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor33Mesial = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='33' AND nm_face='Lingual/Palatina' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor33Lingual = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor33Lingual = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor33Lingual = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor33Lingual = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='33' AND nm_face='Oclusal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor33Oclusal = $cor33TercoMesial = $cor33TercoDistal = $cor33TercoMedio =  "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor33Oclusal = $cor33TercoMesial = $cor33TercoDistal = $cor33TercoMedio =  "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor33Oclusal = $cor33TercoMesial = $cor33TercoDistal = $cor33TercoMedio =  "rgb(32,163,101)";
							break;
						}
					}
				}else{
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='33' AND nm_face='Terco Mesial' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor33TercoMesial = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor33TercoMesial = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor33TercoMesial = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor33TercoMesial = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='33' AND nm_face='Terco Medio' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor33TercoMedio = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor33TercoMedio = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor33TercoMedio = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor33TercoMedio = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='33' AND nm_face='Terco Distal' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor33TercoDistal = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor33TercoDistal = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor33TercoDistal = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor33TercoDistal = 'white';
					}
					
					
				}
			?>
			
			<?php
			// 32
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='32' AND nm_face='Distal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor32Distal = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor32Distal = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor32Distal = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor32Distal = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='32' AND nm_face='Vestibular' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor32Vestibular = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor32Vestibular = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor32Vestibular = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor32Vestibular = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='32' AND nm_face='Mesial' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor32Mesial = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor32Mesial = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor32Mesial = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor32Mesial = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='32' AND nm_face='Lingual/Palatina' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor32Lingual = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor32Lingual = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor32Lingual = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor32Lingual = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='32' AND nm_face='Oclusal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor32Oclusal = $cor32TercoMesial = $cor32TercoDistal = $cor32TercoMedio =  "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor32Oclusal = $cor32TercoMesial = $cor32TercoDistal = $cor32TercoMedio =  "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor32Oclusal = $cor32TercoMesial = $cor32TercoDistal = $cor32TercoMedio =  "rgb(32,163,101)";
							break;
						}
					}
				}else{
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='32' AND nm_face='Terco Mesial' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor32TercoMesial = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor32TercoMesial = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor32TercoMesial = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor32TercoMesial = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='32' AND nm_face='Terco Medio' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor32TercoMedio = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor32TercoMedio = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor32TercoMedio = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor32TercoMedio = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='32' AND nm_face='Terco Distal' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor32TercoDistal = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor32TercoDistal = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor32TercoDistal = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor32TercoDistal = 'white';
					}
					
					
				}
			?>
			
			<?php
			// 31
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='31' AND nm_face='Distal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor31Distal = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor31Distal = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor31Distal = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor31Distal = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='31' AND nm_face='Vestibular' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor31Vestibular = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor31Vestibular = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor31Vestibular = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor31Vestibular = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='31' AND nm_face='Mesial' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor31Mesial = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor31Mesial = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor31Mesial = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor31Mesial = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='31' AND nm_face='Lingual/Palatina' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor31Lingual = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor31Lingual = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor31Lingual = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor31Lingual = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='31' AND nm_face='Oclusal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor31Oclusal = $cor31TercoMesial = $cor31TercoDistal = $cor31TercoMedio =  "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor31Oclusal = $cor31TercoMesial = $cor31TercoDistal = $cor31TercoMedio =  "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor31Oclusal = $cor31TercoMesial = $cor31TercoDistal = $cor31TercoMedio =  "rgb(32,163,101)";
							break;
						}
					}
				}else{
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='31' AND nm_face='Terco Mesial' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor31TercoMesial = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor31TercoMesial = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor31TercoMesial = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor31TercoMesial = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='31' AND nm_face='Terco Medio' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor31TercoMedio = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor31TercoMedio = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor31TercoMedio = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor31TercoMedio = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='31' AND nm_face='Terco Distal' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor31TercoDistal = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor31TercoDistal = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor31TercoDistal = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor31TercoDistal = 'white';
					}
					
					
				}
			?>
			
			<?php
			// 41
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='41' AND nm_face='Distal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor41Distal = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor41Distal = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor41Distal = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor41Distal = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='41' AND nm_face='Vestibular' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor41Vestibular = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor41Vestibular = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor41Vestibular = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor41Vestibular = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='41' AND nm_face='Mesial' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor41Mesial = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor41Mesial = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor41Mesial = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor41Mesial = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='41' AND nm_face='Lingual/Palatina' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor41Lingual = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor41Lingual = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor41Lingual = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor41Lingual = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='41' AND nm_face='Oclusal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor41Oclusal = $cor41TercoMesial = $cor41TercoDistal = $cor41TercoMedio =  "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor41Oclusal = $cor41TercoMesial = $cor41TercoDistal = $cor41TercoMedio =  "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor41Oclusal = $cor41TercoMesial = $cor41TercoDistal = $cor41TercoMedio =  "rgb(32,163,101)";
							break;
						}
					}
				}else{
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='41' AND nm_face='Terco Mesial' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor41TercoMesial = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor41TercoMesial = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor41TercoMesial = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor41TercoMesial = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='41' AND nm_face='Terco Medio' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor41TercoMedio = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor41TercoMedio = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor41TercoMedio = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor41TercoMedio = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='41' AND nm_face='Terco Distal' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor41TercoDistal = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor41TercoDistal = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor41TercoDistal = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor41TercoDistal = 'white';
					}
					
					
				}
			?>
			
			<?php
			// 42
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='42' AND nm_face='Distal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor42Distal = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor42Distal = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor42Distal = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor42Distal = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='42' AND nm_face='Vestibular' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor42Vestibular = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor42Vestibular = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor42Vestibular = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor42Vestibular = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='42' AND nm_face='Mesial' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor42Mesial = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor42Mesial = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor42Mesial = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor42Mesial = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='42' AND nm_face='Lingual/Palatina' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor42Lingual = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor42Lingual = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor42Lingual = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor42Lingual = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='42' AND nm_face='Oclusal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor42Oclusal = $cor42TercoMesial = $cor42TercoDistal = $cor42TercoMedio =  "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor42Oclusal = $cor42TercoMesial = $cor42TercoDistal = $cor42TercoMedio =  "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor42Oclusal = $cor42TercoMesial = $cor42TercoDistal = $cor42TercoMedio =  "rgb(32,163,101)";
							break;
						}
					}
				}else{
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='42' AND nm_face='Terco Mesial' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor42TercoMesial = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor42TercoMesial = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor42TercoMesial = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor42TercoMesial = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='42' AND nm_face='Terco Medio' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor42TercoMedio = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor42TercoMedio = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor42TercoMedio = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor42TercoMedio = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='42' AND nm_face='Terco Distal' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor42TercoDistal = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor42TercoDistal = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor42TercoDistal = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor42TercoDistal = 'white';
					}
					
					
				}
			?>
			
			<?php
			// 43
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='43' AND nm_face='Distal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor43Distal = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor43Distal = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor43Distal = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor43Distal = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='43' AND nm_face='Vestibular' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor43Vestibular = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor43Vestibular = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor43Vestibular = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor43Vestibular = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='43' AND nm_face='Mesial' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor43Mesial = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor43Mesial = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor43Mesial = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor43Mesial = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='43' AND nm_face='Lingual/Palatina' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor43Lingual = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor43Lingual = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor43Lingual = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor43Lingual = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='43' AND nm_face='Oclusal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor43Oclusal = $cor43TercoMesial = $cor43TercoDistal = $cor43TercoMedio =  "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor43Oclusal = $cor43TercoMesial = $cor43TercoDistal = $cor43TercoMedio =  "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor43Oclusal = $cor43TercoMesial = $cor43TercoDistal = $cor43TercoMedio =  "rgb(32,163,101)";
							break;
						}
					}
				}else{
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='43' AND nm_face='Terco Mesial' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor43TercoMesial = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor43TercoMesial = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor43TercoMesial = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor43TercoMesial = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='43' AND nm_face='Terco Medio' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor43TercoMedio = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor43TercoMedio = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor43TercoMedio = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor43TercoMedio = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='43' AND nm_face='Terco Distal' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor43TercoDistal = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor43TercoDistal = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor43TercoDistal = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor43TercoDistal = 'white';
					}
					
					
				}
			?>
			
			<?php
			// 44
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='44' AND nm_face='Distal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor44Distal = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor44Distal = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor44Distal = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor44Distal = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='44' AND nm_face='Vestibular' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor44Vestibular = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor44Vestibular = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor44Vestibular = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor44Vestibular = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='44' AND nm_face='Mesial' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor44Mesial = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor44Mesial = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor44Mesial = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor44Mesial = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='44' AND nm_face='Lingual/Palatina' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor44Lingual = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor44Lingual = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor44Lingual = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor44Lingual = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='44' AND nm_face='Oclusal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor44Oclusal = $cor44TercoMesial = $cor44TercoDistal = $cor44TercoMedio =  "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor44Oclusal = $cor44TercoMesial = $cor44TercoDistal = $cor44TercoMedio =  "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor44Oclusal = $cor44TercoMesial = $cor44TercoDistal = $cor44TercoMedio =  "rgb(32,163,101)";
							break;
						}
					}
				}else{
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='44' AND nm_face='Terco Mesial' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor44TercoMesial = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor44TercoMesial = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor44TercoMesial = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor44TercoMesial = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='44' AND nm_face='Terco Medio' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor44TercoMedio = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor44TercoMedio = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor44TercoMedio = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor44TercoMedio = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='44' AND nm_face='Terco Distal' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor44TercoDistal = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor44TercoDistal = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor44TercoDistal = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor44TercoDistal = 'white';
					}
					
					
				}
			?>
			
			<?php
			// 45
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='45' AND nm_face='Distal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor45Distal = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor45Distal = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor45Distal = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor45Distal = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='45' AND nm_face='Vestibular' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor45Vestibular = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor45Vestibular = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor45Vestibular = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor45Vestibular = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='45' AND nm_face='Mesial' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor45Mesial = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor45Mesial = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor45Mesial = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor45Mesial = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='45' AND nm_face='Lingual/Palatina' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor45Lingual = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor45Lingual = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor45Lingual = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor45Lingual = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='45' AND nm_face='Oclusal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor45Oclusal = $cor45TercoMesial = $cor45TercoDistal = $cor45TercoMedio =  "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor45Oclusal = $cor45TercoMesial = $cor45TercoDistal = $cor45TercoMedio =  "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor45Oclusal = $cor45TercoMesial = $cor45TercoDistal = $cor45TercoMedio =  "rgb(32,163,101)";
							break;
						}
					}
				}else{
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='45' AND nm_face='Terco Mesial' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor45TercoMesial = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor45TercoMesial = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor45TercoMesial = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor45TercoMesial = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='45' AND nm_face='Terco Medio' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor45TercoMedio = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor45TercoMedio = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor45TercoMedio = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor45TercoMedio = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='45' AND nm_face='Terco Distal' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor45TercoDistal = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor45TercoDistal = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor45TercoDistal = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor45TercoDistal = 'white';
					}
					
					
				}
			?>
			
			<?php
			// 46
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='46' AND nm_face='Distal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor46Distal = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor46Distal = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor46Distal = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor46Distal = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='46' AND nm_face='Vestibular' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor46Vestibular = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor46Vestibular = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor46Vestibular = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor46Vestibular = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='46' AND nm_face='Mesial' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor46Mesial = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor46Mesial = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor46Mesial = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor46Mesial = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='46' AND nm_face='Lingual/Palatina' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor46Lingual = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor46Lingual = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor46Lingual = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor46Lingual = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='46' AND nm_face='Oclusal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor46Oclusal = $cor46TercoMesial = $cor46TercoDistal = $cor46TercoMedio =  "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor46Oclusal = $cor46TercoMesial = $cor46TercoDistal = $cor46TercoMedio =  "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor46Oclusal = $cor46TercoMesial = $cor46TercoDistal = $cor46TercoMedio =  "rgb(32,163,101)";
							break;
						}
					}
				}else{
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='46' AND nm_face='Terco Mesial' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor46TercoMesial = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor46TercoMesial = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor46TercoMesial = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor46TercoMesial = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='46' AND nm_face='Terco Medio' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor46TercoMedio = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor46TercoMedio = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor46TercoMedio = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor46TercoMedio = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='46' AND nm_face='Terco Distal' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor46TercoDistal = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor46TercoDistal = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor46TercoDistal = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor46TercoDistal = 'white';
					}
					
					
				}
			?>
			
			<?php
			// 47
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='47' AND nm_face='Distal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor47Distal = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor47Distal = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor47Distal = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor47Distal = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='47' AND nm_face='Vestibular' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor47Vestibular = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor47Vestibular = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor47Vestibular = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor47Vestibular = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='47' AND nm_face='Mesial' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor47Mesial = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor47Mesial = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor47Mesial = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor47Mesial = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='47' AND nm_face='Lingual/Palatina' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor47Lingual = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor47Lingual = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor47Lingual = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor47Lingual = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='47' AND nm_face='Oclusal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor47Oclusal = $cor47TercoMesial = $cor47TercoDistal = $cor47TercoMedio =  "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor47Oclusal = $cor47TercoMesial = $cor47TercoDistal = $cor47TercoMedio =  "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor47Oclusal = $cor47TercoMesial = $cor47TercoDistal = $cor47TercoMedio =  "rgb(32,163,101)";
							break;
						}
					}
				}else{
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='47' AND nm_face='Terco Mesial' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor47TercoMesial = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor47TercoMesial = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor47TercoMesial = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor47TercoMesial = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='47' AND nm_face='Terco Medio' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor47TercoMedio = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor47TercoMedio = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor47TercoMedio = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor47TercoMedio = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='47' AND nm_face='Terco Distal' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor47TercoDistal = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor47TercoDistal = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor47TercoDistal = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor47TercoDistal = 'white';
					}
					
					
				}
			?>
			
			<?php
			// 48
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='48' AND nm_face='Distal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor48Distal = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor48Distal = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor48Distal = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor48Distal = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='48' AND nm_face='Vestibular' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor48Vestibular = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor48Vestibular = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor48Vestibular = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor48Vestibular = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='48' AND nm_face='Mesial' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor48Mesial = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor48Mesial = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor48Mesial = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor48Mesial = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='48' AND nm_face='Lingual/Palatina' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor48Lingual = "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor48Lingual = "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor48Lingual = "rgb(32,163,101)";
							break;
						}
					}
				}else{
					$cor48Lingual = 'white';
				}
				
				$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='48' AND nm_face='Oclusal' AND nr_periodo = '".$semestre."'";
				$resultadoAnam = mysql_query($sqlAnam) or die();
				$numImg = mysql_num_rows($resultadoAnam);
				if($numImg != 0){
					while($linhaAnam = mysql_fetch_array($resultadoAnam)){
						switch($linhaAnam['nm_situacao']){
							case "A Tratar":
								$cor48Oclusal = $cor48TercoMesial = $cor48TercoDistal = $cor48TercoMedio =  "rgb(196,61,27)";
							break;
								
							case "Existente":
								$cor48Oclusal = $cor48TercoMesial = $cor48TercoDistal = $cor48TercoMedio =  "rgb(43,89,189)";
							break;
									
							case "Realizado":
								$cor48Oclusal = $cor48TercoMesial = $cor48TercoDistal = $cor48TercoMedio =  "rgb(32,163,101)";
							break;
						}
					}
				}else{
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='48' AND nm_face='Terco Mesial' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor48TercoMesial = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor48TercoMesial = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor48TercoMesial = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor48TercoMesial = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='48' AND nm_face='Terco Medio' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor48TercoMedio = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor48TercoMedio = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor48TercoMedio = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor48TercoMedio = 'white';
					}
					
					$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente='48' AND nm_face='Terco Distal' AND nr_periodo = '".$semestre."'";
					$resultadoAnam = mysql_query($sqlAnam) or die();
					$numImg = mysql_num_rows($resultadoAnam);
					if($numImg != 0){
						while($linhaAnam = mysql_fetch_array($resultadoAnam)){
							switch($linhaAnam['nm_situacao']){
								case "A Tratar":
									$cor48TercoDistal = "rgb(196,61,27)";
								break;
									
								case "Existente":
									$cor48TercoDistal = "rgb(43,89,189)";
								break;
										
								case "Realizado":
									$cor48TercoDistal = "rgb(32,163,101)";
								break;
							}
						}
					}else{
						$cor48TercoDistal = 'white';
					}
					
					
				}
			?>	
			
			<!-- ######################################################################################### PARTE DEBAIXO -->
			
			
		<div style='background-color:#F0F0F0;'><br>
			
			<?php
				$contador1 = 11;
				while($contador1 < 19){
					echo "
					
					<div id='contenido".$contador1."' style='background-color:white; display:none'  width='100%'>
					   <center>
						  <br> 
						  <h4><b>Dente ".$contador1."</b></h4><hr>
						  <table border=0 width='88%'>
							 <tr>
								<td rowspan=2>
								   <center>
									<form method='POST' action='inserirDente.php'> <input type='hidden' name='semestre' value='".$semestre."'>
									  <input type='hidden' value='".$contador1."' name='dente'>
									  <input type='hidden' name='paciente' value='".$_GET['cpf']."'>
									  <table border=0 width='100%' height='100%'>
										 <tr>
											
											<td colspan=4 align='right'>
											   <b>Diagnóstico: </b>
											</td>
											<td colspan=4>
											   <select class='single-input' name='diagnostico'>
												  ";
									
											$sqlAnam = "SELECT * FROM tb_diagnostico ORDER BY nm_diagnostico";
											$resultadoAnam = mysql_query($sqlAnam) or die();
											while($linhaAnam = mysql_fetch_array($resultadoAnam)){
												echo "<option value='".$linhaAnam['nr_idDiagnostico']."'>".trim($linhaAnam['nm_diagnostico'])."</option>";
											}
									
										echo "
											</select>
											</td>
											<td colspan=4 align='right'>
											  <b>Tratamento: </b>
											</td>
											<td colspan=4>
											   <select class='single-input' name='tratamento'>
									";
									
											$sqlAnam = "SELECT * FROM tb_procedimento ORDER BY nm_procedimento";
											$resultadoAnam = mysql_query($sqlAnam) or die();
											while($linhaAnam = mysql_fetch_array($resultadoAnam)){
												echo "<option value='".$linhaAnam['nr_idProcedimento']."'>".trim($linhaAnam['nm_procedimento'])."</option>";
											}
									
										echo "
											   </select>
											</td>
											
										 </tr>
										 <tr>
											<td colspan=4 align='right'>
											   <b>Face: </b>
											</td>";
											
											echo "
													<td colspan=4>
													   <select class='single-input' name='face'>
														  <option value='Todas'>Todas as Faces</option>
														  <option value='Vestibular'>Vestibular</option>
														  <option value='Distal'>Distal</option>
														  <option value='Lingual/Palatina'>Lingual/Palatina</option>
														  <option value='Mesial'>Mesial</option>
														  <option value='Terco Mesial'>Terço Mesial</option>
														  <option value='Terco Medio'>Terço Médio</option>
														  <option value='Terco Distal'>Terço Distal</option>
											";
											
											if(($contador1 == 11) || ($contador1 == 12) || ($contador1 == 13)){
												echo "
															  <option value='Oclusal'>Incisal</option>
															  <option value='MOD'>MOD</option>
															  <option value='MOV'>MOV</option>
															  <option value='MOL/P'>MOL/P</option>
															  <option value='MV'>MV</option>
															  <option value='ML/P'>ML/P</option>
															  <option value='MD'>MD</option>
															  <option value='OD'>OD</option>
															  <option value='OV'>OV</option>
															  <option value='OL/P'>OL/P</option>
															  <option value='DL/P'>DL/P</option>
															  <option value='DV'>DV</option>
														   </select>
														</td>
												";
											}else{
											
												echo "
															  <option value='Oclusal'>Oclusal</option>
															  <option value='MOD'>MOD</option>
															  <option value='MOV'>MOV</option>
															  <option value='MOL/P'>MOL/P</option>
															  <option value='MV'>MV</option>
															  <option value='ML/P'>ML/P</option>
															  <option value='MD'>MD</option>
															  <option value='OD'>OD</option>
															  <option value='OV'>OV</option>
															  <option value='OL/P'>OL/P</option>
															  <option value='DL/P'>DL/P</option>
															  <option value='DV'>DV</option>
														   </select>
														</td>
												";
											}
											
										echo "
											<td colspan=4  align='right'>
											   <b>Situação: </b>
											</td>
											<td colspan=4>
											   <select class='single-input' name='situacao'>
												  <option style='color:rgb(196,61,27);' value='A Tratar'>A Tratar</option>
												  <option style='color:rgb(43,89,189);' value='Existente'>Existente</option>
												  <option style='color:rgb(32,163,101);' value='Realizado'>Realizado</option>
											   </select>
											</td>
										 </tr>
										 <tr>
											<td align='right' colspan=4><b>Ausente: </b></td>
											<td colspan=4><select class='single-input' name='ausente'><option value='Nao'>Não</option><option value='Sim'>Sim</option></select></td>
											<td align='right' colspan=4><b>Plano: </b></td>
											<td colspan=4><select class='single-input' name='plano'><option value='A'>Plano de Tratamento A</option><option value='Alternativo'>Plano de Tratamento Alternativo</option></select></td>
										 </tr>
										 <tr>
											<td colspan=16><BR></td>
										 </tr>
										 <tr>
											<td colspan=16>
											   <center><b>Repetir Tratamento:</b> <small>(marque abaixo)</small></center>
											</td>
										 </tr>
										 <tr>
											<td colspan=16>
													<center>
													<table width='100%'>
													 <tr>
														<td>
														   <center><input type='checkbox' name='repetir18'> 18</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir17'> 17</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir16'> 16</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir15'> 15</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir14'> 14</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir13'> 13</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir12'> 12</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir11'> 11</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir21'> 21</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir22'> 22</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir23'> 23</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir24'> 24</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir25'> 25</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir26'> 26</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir27'> 27</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir28'> 28</center>
														</td>
													 </tr>
													 <tr>
														<td>
														   <center><input type='checkbox' name='repetir48'> 48</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir47'> 47</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir46'> 46</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir45'> 45</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir44'> 44</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir43'> 43</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir42'> 42</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir41'> 41</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir31'> 31</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir32'> 32</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir33'> 33</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir34'> 34</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir35'> 35</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir36'> 36</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir37'> 37</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir38'> 38</center>
														</td>
													 </tr>
													</table>
												</center>
											</td>
										 </tr>
									  </table>
									  <br>
										<input type='submit' value='Salvar' class='genric-btn primary'>
									</form>
								   </center><br>
								</td>
							 </tr>
						  </table>
					   </center>
					</div>
					
					";
					$contador1 = $contador1 + 1;
				}
				
				$contador2 = 21;
				while($contador2 < 29){
					
					echo "
					
					<div id='contenido".$contador2."' style='background-color:white; display:none'  width='100%'>
					   <center>
						  <br> 
						  <h4><b>Dente ".$contador2."</b></h4><hr>
						  <table border=0 width='88%'>
							 <tr>
								<td rowspan=2>
								   <center>
									<form method='POST' action='inserirDente.php'> <input type='hidden' name='semestre' value='".$semestre."'>
									  <input type='hidden' value='".$contador2."' name='dente'>
									  <input type='hidden' name='paciente' value='".$_GET['cpf']."'>
									  <table border=0 width='100%' height='100%'>
										 <tr>
											
											<td colspan=4 align='right'>
											   <b>Diagnóstico: </b>
											</td>
											<td colspan=4>
											   <select class='single-input' name='diagnostico'>
												  ";
									
											$sqlAnam = "SELECT * FROM tb_diagnostico ORDER BY nm_diagnostico";
											$resultadoAnam = mysql_query($sqlAnam) or die();
											while($linhaAnam = mysql_fetch_array($resultadoAnam)){
												echo "<option value='".$linhaAnam['nr_idDiagnostico']."'>".trim($linhaAnam['nm_diagnostico'])."</option>";
											}
									
										echo "
											</select>
											</td>
											<td colspan=4 align='right'>
											  <b>Tratamento: </b>
											</td>
											<td colspan=4>
											   <select class='single-input' name='tratamento'>
									";
									
											$sqlAnam = "SELECT * FROM tb_procedimento ORDER BY nm_procedimento";
											$resultadoAnam = mysql_query($sqlAnam) or die();
											while($linhaAnam = mysql_fetch_array($resultadoAnam)){
												echo "<option value='".$linhaAnam['nr_idProcedimento']."'>".trim($linhaAnam['nm_procedimento'])."</option>";
											}
									
										echo "
											   </select>
											</td>
											
										 </tr>
										 <tr>
											<td colspan=4 align='right'>
											   <b>Face: </b>
											</td>";
											
											echo "
													<td colspan=4>
													   <select class='single-input' name='face'>
													      <option value='Todas'>Todas as Faces</option>
														  <option value='Vestibular'>Vestibular</option>
														  <option value='Distal'>Distal</option>
														  <option value='Lingual/Palatina'>Lingual/Palatina</option>
														  <option value='Mesial'>Mesial</option>
														  <option value='Terco Mesial'>Terço Mesial</option>
														  <option value='Terco Medio'>Terço Médio</option>
														  <option value='Terco Distal'>Terço Distal</option>
											";
											
											if(($contador2 == 21) || ($contador2 == 22) || ($contador2 == 23)){
												echo "
															  <option value='Oclusal'>Incisal</option>
															  <option value='MOD'>MOD</option>
															  <option value='MOV'>MOV</option>
															  <option value='MOL/P'>MOL/P</option>
															  <option value='MV'>MV</option>
															  <option value='ML/P'>ML/P</option>
															  <option value='MD'>MD</option>
															  <option value='OD'>OD</option>
															  <option value='OV'>OV</option>
															  <option value='OL/P'>OL/P</option>
															  <option value='DL/P'>DL/P</option>
															  <option value='DV'>DV</option>
														   </select>
														</td>
												";
											}else{
											
												echo "
															  <option value='Oclusal'>Oclusal</option>
															  <option value='MOD'>MOD</option>
															  <option value='MOV'>MOV</option>
															  <option value='MOL/P'>MOL/P</option>
															  <option value='MV'>MV</option>
															  <option value='ML/P'>ML/P</option>
															  <option value='MD'>MD</option>
															  <option value='OD'>OD</option>
															  <option value='OV'>OV</option>
															  <option value='OL/P'>OL/P</option>
															  <option value='DL/P'>DL/P</option>
															  <option value='DV'>DV</option>
														   </select>
														</td>
												";
											}
											
										echo "
											<td colspan=4  align='right'>
											   <b>Situação: </b>
											</td>
											<td colspan=4>
											   <select class='single-input' name='situacao'>
												  <option style='color:rgb(196,61,27);' value='A Tratar'>A Tratar</option>
												  <option style='color:rgb(43,89,189);' value='Existente'>Existente</option>
												  <option style='color:rgb(32,163,101);' value='Realizado'>Realizado</option>
											   </select>
											</td>
										 </tr>
										 <tr>
											<td align='right' colspan=4><b>Ausente: </b></td>
											<td colspan=4><select class='single-input' name='ausente'><option value='Nao'>Não</option><option value='Sim'>Sim</option></select></td>
											<td align='right' colspan=4><b>Plano: </b></td>
											<td colspan=4><select class='single-input' name='plano'><option value='A'>Plano de Tratamento A</option><option value='Alternativo'>Plano de Tratamento Alternativo</option></select></td>
										 </tr>
										 <tr>
											<td colspan=16><BR></td>
										 </tr>
										 <tr>
											<td colspan=16>
											   <center><b>Repetir Tratamento:</b> <small>(marque abaixo)</small></center>
											</td>
										 </tr>
										 <tr>
											<td colspan=16>
													<center>
													<table width='100%'>
													 <tr>
														<td>
														   <center><input type='checkbox' name='repetir18'> 18</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir17'> 17</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir16'> 16</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir15'> 15</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir14'> 14</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir13'> 13</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir12'> 12</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir11'> 11</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir21'> 21</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir22'> 22</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir23'> 23</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir24'> 24</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir25'> 25</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir26'> 26</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir27'> 27</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir28'> 28</center>
														</td>
													 </tr>
													 <tr>
														<td>
														   <center><input type='checkbox' name='repetir48'> 48</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir47'> 47</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir46'> 46</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir45'> 45</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir44'> 44</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir43'> 43</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir42'> 42</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir41'> 41</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir31'> 31</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir32'> 32</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir33'> 33</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir34'> 34</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir35'> 35</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir36'> 36</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir37'> 37</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir38'> 38</center>
														</td>
													 </tr>
													</table>
												</center>
											</td>
										 </tr>
									  </table>
									  <br>
										<input type='submit' value='Salvar' class='genric-btn primary'>
									</form>
								   </center><br>
								</td>
							 </tr>
						  </table>
					   </center>
					</div>
					
					";
					
					$contador2 = $contador2 + 1;
				}
			?>
			
			<div id='contenidoSuperior' style='background-color:white; display:none'  width='100%'>
					   <center>
						  <br> 
						  <table border=0 width='88%'>
							 <tr>
								<td width='3%'><center><img src='dentes/arcada_superior.png'><b>Arcada Superior</b></center></td>
								<td rowspan=2>
								   <center>
									<form method='POST' action='inserirDente.php'> <input type='hidden' name='semestre' value='<?php echo $semestre; ?>'>
									  <input type='hidden' value='arcada_superior' name='dente'>
									  <input type='hidden' name='face' value='N/A'>
									  <input type='hidden' name='paciente' value='<?php echo $_GET['cpf']; ?>'>
									  <table border=0 width='100%' height='100%'>
										 <tr>
											<td colspan=4>
											   <center><b>Diagnóstico</b></center>
											</td>
											<td colspan=4>
											   <select class='single-input' name='diagnostico'>
												  <?php
												  $sqlAnam = "SELECT * FROM tb_diagnostico ORDER BY nm_diagnostico";
													$resultadoAnam = mysql_query($sqlAnam) or die();
													while($linhaAnam = mysql_fetch_array($resultadoAnam)){
														echo "<option value='".$linhaAnam['nr_idDiagnostico']."'>".trim($linhaAnam['nm_diagnostico'])."</option>";
													}
												  ?>
											   </select>
											</td>
											<td colspan=4>
											   <center><b>Tratamento</b></center>
											</td>
											<td colspan=4>
											   <select class='single-input' name='tratamento'>
												  <?php
												  $sqlAnam = "SELECT * FROM tb_procedimento ORDER BY nm_procedimento";
													$resultadoAnam = mysql_query($sqlAnam) or die();
													while($linhaAnam = mysql_fetch_array($resultadoAnam)){
														echo "<option value='".$linhaAnam['nr_idProcedimento']."'>".trim($linhaAnam['nm_procedimento'])."</option>";
													}
												  ?>
											   </select>
											</td>
											
										</tr>
										<tr>
											<td colspan=4>
											   <center><b>Situação</b></center>
											</td>
											<td colspan=4>
											   <select class='single-input' name='situacao'>
												  <option style='color:rgb(196,61,27);' value='A Tratar'>A Tratar</option>
												  <option style='color:rgb(43,89,189);' value='Existente'>Existente</option>
												  <option style='color:rgb(32,163,101);' value='Realizado'>Realizado</option>
											   </select>
											</td>
											<td align='right' colspan=4><b>Plano: </b></td>
											<td colspan=4><select class='single-input' name='plano'><option value='A'>Plano de Tratamento A</option><option value='Alternativo'>Plano de Tratamento Alternativo</option></select></td>
										 </tr> 
									  </table>
									  <br>
										<input type='submit' value='Salvar' class='genric-btn primary'>
									</form>
								   </center><br>
								</td>
							 </tr>
						  </table>
					   </center>
					</div>
					
				<div id='contenidoBoca' style='background-color:white; display:none'  width='100%'>
					   <center>
						  <br> 
						  <table border=0 width='88%'>
							 <tr>
								<td width='3%'><center><img src='dentes/boca.png'><b>Arcada Superior e Inferior</b></center></td>
								<td rowspan=2>
								   <center>
									<form method='POST' action='inserirDente.php'> <input type='hidden' name='semestre' value='<?php echo $semestre; ?>'>
									  <input type='hidden' value='arcada_completa' name='dente'>
									  <input type='hidden' name='face' value='N/A'>
									  <input type='hidden' name='paciente' value='<?php echo $_GET['cpf']; ?>'>
									  <table border=0 width='100%' height='100%'>
										 <tr>
											<td colspan=4>
											   <center><b>Diagnóstico</b></center>
											</td>
											<td colspan=4>
											   <select class='single-input' name='diagnostico'>
												  <?php
												  $sqlAnam = "SELECT * FROM tb_diagnostico ORDER BY nm_diagnostico";
													$resultadoAnam = mysql_query($sqlAnam) or die();
													while($linhaAnam = mysql_fetch_array($resultadoAnam)){
														echo "<option value='".$linhaAnam['nr_idDiagnostico']."'>".trim($linhaAnam['nm_diagnostico'])."</option>";
													}
												  ?>
											   </select>
											</td>
											<td colspan=4>
											   <center><b>Tratamento</b></center>
											</td>
											<td colspan=4>
											   <select class='single-input' name='tratamento'>
												  <?php
												  $sqlAnam = "SELECT * FROM tb_procedimento ORDER BY nm_procedimento";
													$resultadoAnam = mysql_query($sqlAnam) or die();
													while($linhaAnam = mysql_fetch_array($resultadoAnam)){
														echo "<option value='".$linhaAnam['nr_idProcedimento']."'>".trim($linhaAnam['nm_procedimento'])."</option>";
													}
												  ?>
											   </select>
											</td>
											
										</tr>
										<tr>
											<td colspan=4>
											   <center><b>Situação</b></center>
											</td>
											<td colspan=4>
											   <select class='single-input' name='situacao'>
												  <option style='color:rgb(196,61,27);' value='A Tratar'>A Tratar</option>
												  <option style='color:rgb(43,89,189);' value='Existente'>Existente</option>
												  <option style='color:rgb(32,163,101);' value='Realizado'>Realizado</option>
											   </select>
											</td>
											<td align='right' colspan=4><b>Plano: </b></td>
											<td colspan=4><select class='single-input' name='plano'><option value='A'>Plano de Tratamento A</option><option value='Alternativo'>Plano de Tratamento Alternativo</option></select></td>
										 </tr> 
									  </table>
									  <br>
										<input type='submit' value='Salvar' class='genric-btn primary'>
									</form>
								   </center><br>
								</td>
							 </tr>
						  </table>
					   </center>
					</div>
			
			<!-- DENTIÇÃO PERMANENTE -->
			
			<?php
				$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '18' AND nm_ausente='Sim' AND nr_periodo = '".$semestre."'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg18 = mysql_num_rows($resultadoNome);
				if($numImg18 != 0){
					$ausente18_1 = "0";
					$ausente18_2 = "0";
				}else{
					$ausente18_1 = "1";
					$ausente18_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '17' AND nm_ausente='Sim' AND nr_periodo = '".$semestre."'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg17 = mysql_num_rows($resultadoNome);
				if($numImg17 != 0){
					$ausente17_1 = "0";
					$ausente17_2 = "0";
				}else{
					$ausente17_1 = "1";
					$ausente17_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '16' AND nm_ausente='Sim' AND nr_periodo = '".$semestre."'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg16 = mysql_num_rows($resultadoNome);
				if($numImg16 != 0){
					$ausente16_1 = "0";
					$ausente16_2 = "0";
				}else{
					$ausente16_1 = "1";
					$ausente16_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '15' AND nm_ausente='Sim' AND nr_periodo = '".$semestre."'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg15 = mysql_num_rows($resultadoNome);
				if($numImg15 != 0){
					$ausente15_1 = "0";
					$ausente15_2 = "0";
				}else{
					$ausente15_1 = "1";
					$ausente15_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '14' AND nm_ausente='Sim' AND nr_periodo = '".$semestre."'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg14 = mysql_num_rows($resultadoNome);
				if($numImg14 != 0){
					$ausente14_1 = "0";
					$ausente14_2 = "0";
				}else{
					$ausente14_1 = "1";
					$ausente14_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '13' AND nm_ausente='Sim' AND nr_periodo = '".$semestre."'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg13 = mysql_num_rows($resultadoNome);
				if($numImg13 != 0){
					$ausente13_1 = "0";
					$ausente13_2 = "0";
				}else{
					$ausente13_1 = "1";
					$ausente13_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '12' AND nm_ausente='Sim' AND nr_periodo = '".$semestre."'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg12 = mysql_num_rows($resultadoNome);
				if($numImg12 != 0){
					$ausente12_1 = "0";
					$ausente12_2 = "0";
				}else{
					$ausente12_1 = "1";
					$ausente12_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '11' AND nm_ausente='Sim' AND nr_periodo = '".$semestre."'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg11 = mysql_num_rows($resultadoNome);
				if($numImg11 != 0){
					$ausente11_1 = "0";
					$ausente11_2 = "0";
				}else{
					$ausente11_1 = "1";
					$ausente11_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '21' AND nm_ausente='Sim' AND nr_periodo = '".$semestre."'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg21 = mysql_num_rows($resultadoNome);
				if($numImg21 != 0){
					$ausente21_1 = "0";
					$ausente21_2 = "0";
				}else{
					$ausente21_1 = "1";
					$ausente21_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '22' AND nm_ausente='Sim' AND nr_periodo = '".$semestre."'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg22 = mysql_num_rows($resultadoNome);
				if($numImg22 != 0){
					$ausente22_1 = "0";
					$ausente22_2 = "0";
				}else{
					$ausente22_1 = "1";
					$ausente22_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '23' AND nm_ausente='Sim' AND nr_periodo = '".$semestre."'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg23 = mysql_num_rows($resultadoNome);
				if($numImg23 != 0){
					$ausente23_1 = "0";
					$ausente23_2 = "0";
				}else{
					$ausente23_1 = "1";
					$ausente23_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '24' AND nm_ausente='Sim' AND nr_periodo = '".$semestre."'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg24 = mysql_num_rows($resultadoNome);
				if($numImg24 != 0){
					$ausente24_1 = "0";
					$ausente24_2 = "0";
				}else{
					$ausente24_1 = "1";
					$ausente24_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '25' AND nm_ausente='Sim' AND nr_periodo = '".$semestre."'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg25 = mysql_num_rows($resultadoNome);
				if($numImg25 != 0){
					$ausente25_1 = "0";
					$ausente25_2 = "0";
				}else{
					$ausente25_1 = "1";
					$ausente25_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '26' AND nm_ausente='Sim' AND nr_periodo = '".$semestre."'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg26 = mysql_num_rows($resultadoNome);
				if($numImg26 != 0){
					$ausente26_1 = "0";
					$ausente26_2 = "0";
				}else{
					$ausente26_1 = "1";
					$ausente26_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '27' AND nm_ausente='Sim' AND nr_periodo = '".$semestre."'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg27 = mysql_num_rows($resultadoNome);
				if($numImg27 != 0){
					$ausente27_1 = "0";
					$ausente27_2 = "0";
				}else{
					$ausente27_1 = "1";
					$ausente27_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '28' AND nm_ausente='Sim' AND nr_periodo = '".$semestre."'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg28 = mysql_num_rows($resultadoNome);
				if($numImg28 != 0){
					$ausente28_1 = "0";
					$ausente28_2 = "0";
				}else{
					$ausente28_1 = "1";
					$ausente28_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '48' AND nm_ausente='Sim' AND nr_periodo = '".$semestre."'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg48 = mysql_num_rows($resultadoNome);
				if($numImg48 != 0){
					$ausente48_1 = "0";
					$ausente48_2 = "0";
				}else{
					$ausente48_1 = "1";
					$ausente48_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '47' AND nm_ausente='Sim' AND nr_periodo = '".$semestre."'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg47 = mysql_num_rows($resultadoNome);
				if($numImg47 != 0){
					$ausente47_1 = "0";
					$ausente47_2 = "0";
				}else{
					$ausente47_1 = "1";
					$ausente47_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '46' AND nm_ausente='Sim' AND nr_periodo = '".$semestre."'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg46 = mysql_num_rows($resultadoNome);
				if($numImg46 != 0){
					$ausente46_1 = "0";
					$ausente46_2 = "0";
				}else{
					$ausente46_1 = "1";
					$ausente46_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '45' AND nm_ausente='Sim' AND nr_periodo = '".$semestre."'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg45 = mysql_num_rows($resultadoNome);
				if($numImg45 != 0){
					$ausente45_1 = "0";
					$ausente45_2 = "0";
				}else{
					$ausente45_1 = "1";
					$ausente45_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '44' AND nm_ausente='Sim' AND nr_periodo = '".$semestre."'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg44 = mysql_num_rows($resultadoNome);
				if($numImg44 != 0){
					$ausente44_1 = "0";
					$ausente44_2 = "0";
				}else{
					$ausente44_1 = "1";
					$ausente44_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '43' AND nm_ausente='Sim' AND nr_periodo = '".$semestre."'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg43 = mysql_num_rows($resultadoNome);
				if($numImg43 != 0){
					$ausente43_1 = "0";
					$ausente43_2 = "0";
				}else{
					$ausente43_1 = "1";
					$ausente43_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '42' AND nm_ausente='Sim' AND nr_periodo = '".$semestre."'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg42 = mysql_num_rows($resultadoNome);
				if($numImg42 != 0){
					$ausente42_1 = "0";
					$ausente42_2 = "0";
				}else{
					$ausente42_1 = "1";
					$ausente42_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '41' AND nm_ausente='Sim' AND nr_periodo = '".$semestre."'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg41 = mysql_num_rows($resultadoNome);
				if($numImg41 != 0){
					$ausente41_1 = "0";
					$ausente41_2 = "0";
				}else{
					$ausente41_1 = "1";
					$ausente41_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '31' AND nm_ausente='Sim' AND nr_periodo = '".$semestre."'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg31 = mysql_num_rows($resultadoNome);
				if($numImg31 != 0){
					$ausente31_1 = "0";
					$ausente31_2 = "0";
				}else{
					$ausente31_1 = "1";
					$ausente31_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '32' AND nm_ausente='Sim' AND nr_periodo = '".$semestre."'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg32 = mysql_num_rows($resultadoNome);
				if($numImg32 != 0){
					$ausente32_1 = "0";
					$ausente32_2 = "0";
				}else{
					$ausente32_1 = "1";
					$ausente32_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '33' AND nm_ausente='Sim' AND nr_periodo = '".$semestre."'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg33 = mysql_num_rows($resultadoNome);
				if($numImg33 != 0){
					$ausente33_1 = "0";
					$ausente33_2 = "0";
				}else{
					$ausente33_1 = "1";
					$ausente33_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '34' AND nm_ausente='Sim' AND nr_periodo = '".$semestre."'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg34 = mysql_num_rows($resultadoNome);
				if($numImg34 != 0){
					$ausente34_1 = "0";
					$ausente34_2 = "0";
				}else{
					$ausente34_1 = "1";
					$ausente34_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '35' AND nm_ausente='Sim' AND nr_periodo = '".$semestre."'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg35 = mysql_num_rows($resultadoNome);
				if($numImg35 != 0){
					$ausente35_1 = "0";
					$ausente35_2 = "0";
				}else{
					$ausente35_1 = "1";
					$ausente35_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '36' AND nm_ausente='Sim' AND nr_periodo = '".$semestre."'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg36 = mysql_num_rows($resultadoNome);
				if($numImg36 != 0){
					$ausente36_1 = "0";
					$ausente36_2 = "0";
				}else{
					$ausente36_1 = "1";
					$ausente36_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '37' AND nm_ausente='Sim' AND nr_periodo = '".$semestre."'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg37 = mysql_num_rows($resultadoNome);
				if($numImg37 != 0){
					$ausente37_1 = "0";
					$ausente37_2 = "0";
				}else{
					$ausente37_1 = "1";
					$ausente37_2 = "100";
				}
				
				$sqlNome = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente = '38' AND nm_ausente='Sim' AND nr_periodo = '".$semestre."'";
				$resultadoNome = mysql_query($sqlNome) or die();
				$numImg38 = mysql_num_rows($resultadoNome);
				if($numImg38 != 0){
					$ausente38_1 = "0";
					$ausente38_2 = "0";
				}else{
					$ausente38_1 = "1";
					$ausente38_2 = "100";
				}
				
			?>
			
			
			<center>			
				<table width='94%' height='100%' border=0 style='background-color:#F0F0F0;'>
					<tr>
						<td><center><a onClick="showHideDiv('contenido18')"><img style='margin-top:50px; opacity: <?php echo $ausente18_1; ?>; filter: alpha(opacity=<?php echo $ausente18_2; ?>);' src='dentes/18.png' width='55%' height='100%'></a></td></center>
						<td><center><a onClick="showHideDiv('contenido17')"><img style='margin-top:30px; opacity: <?php echo $ausente17_1; ?>; filter: alpha(opacity=<?php echo $ausente17_2; ?>);' src='dentes/17.png' width='60%' height='100%'></a></td></center>
						<td><center><a onClick="showHideDiv('contenido16')"><img style='margin-top:35px; opacity: <?php echo $ausente16_1; ?>; filter: alpha(opacity=<?php echo $ausente16_2; ?>);'  src='dentes/16.png' width='65%' height='100%'></a></td></center>
						<td><center><a onClick="showHideDiv('contenido15')"><img style='margin-top:30px; opacity: <?php echo $ausente15_1; ?>; filter: alpha(opacity=<?php echo $ausente15_2; ?>);'   src='dentes/15.png' width='55%' height='55%'></a></td></center>
						<td><center><a onClick="showHideDiv('contenido14')"><img style='margin-top:30px; opacity: <?php echo $ausente14_1; ?>; filter: alpha(opacity=<?php echo $ausente14_2; ?>);'  src='dentes/14.png' width='55%' height='55%'></a></td></center>
						<td><center><a onClick="showHideDiv('contenido13')"><img src='dentes/13.png' style='margin-top:25px;'  style='opacity: <?php echo $ausente13_1; ?>; filter: alpha(opacity=<?php echo $ausente13_2; ?>);'  width='60%' height='70%'></a></td></center>
						<td><center><a onClick="showHideDiv('contenido12')"><img style='margin-top:20px; opacity: <?php echo $ausente12_1; ?>; filter: alpha(opacity=<?php echo $ausente12_2; ?>);'  src='dentes/12.png' width='60%' height='60%'></a></td></center>
						<td><center><a onClick="showHideDiv('contenido11')"><img style='margin-top:25px; opacity: <?php echo $ausente11_1; ?>; filter: alpha(opacity=<?php echo $ausente11_2; ?>);'   src='dentes/11.png' width='65%' height='65%'></a></td></center>
						<td><center><a onClick="showHideDiv('contenido21')"><img style='margin-top:25px; opacity: <?php echo $ausente21_1; ?>; filter: alpha(opacity=<?php echo $ausente21_2; ?>);'   src='dentes/21.png' width='65%' height='65%'></a></td></center>
						<td><center><a onClick="showHideDiv('contenido22')"><img style='margin-top:20px; opacity: <?php echo $ausente22_1; ?>; filter: alpha(opacity=<?php echo $ausente22_2; ?>);'    src='dentes/22.png' width='60%' height='60%'></a></td></center>
						<td><center><a onClick="showHideDiv('contenido23')"><img style='opacity: <?php echo $ausente23_1; ?>; filter: alpha(opacity=<?php echo $ausente23_2; ?>); margin-top:24px;' src='dentes/23.png' width='60%' height='70%'></a></td></center>
						<td><center><a onClick="showHideDiv('contenido24')"><img style='margin-top:30px; opacity: <?php echo $ausente24_1; ?>; filter: alpha(opacity=<?php echo $ausente24_2; ?>);' src='dentes/24.png' width='55%' height='55%'></a></td></center>
						<td><center><a onClick="showHideDiv('contenido25')"><img style='margin-top:30px; opacity: <?php echo $ausente25_1; ?>; filter: alpha(opacity=<?php echo $ausente25_2; ?>);' src='dentes/25.png' width='55%' height='55%'></a></td></center>
						<td><center><a onClick="showHideDiv('contenido26')"><img style='margin-top:40px; opacity: <?php echo $ausente26_1; ?>; filter: alpha(opacity=<?php echo $ausente26_2; ?>);' src='dentes/26.png' width='65%' height='100%'></a></td></center>
						<td><center><a onClick="showHideDiv('contenido27')"><img style='margin-top:30px; opacity: <?php echo $ausente27_1; ?>; filter: alpha(opacity=<?php echo $ausente27_2; ?>);' src='dentes/27.png' width='60%' height='100%'></a></td></center>
						<td><center><a onClick="showHideDiv('contenido28')"><img style='margin-top:50px; opacity: <?php echo $ausente28_1; ?>; filter: alpha(opacity=<?php echo $ausente28_2; ?>);' src='dentes/28.png' width='50%' height='100%'></a></td></center>
						<td rowspan=2><a onClick="showHideDiv('contenidoSuperior')"><center><img src='dentes/arcada_superior.png'></a></td></center>
					</tr>
					<tr>
						<td><center><b>18</b></td></center>
						<td><center><b>17</b></td></center>
						<td><center><b>16</b></td></center>
						<td><center><b>15</b></td></center>
						<td><center><b>14</b></td></center>
						<td><center><b>13</b></td></center>
						<td><center><b>12</b></td></center>
						<td><center><b>11</b></td></center>
						<td><center><b>21</b></td></center>
						<td><center><b>22</b></td></center>
						<td><center><b>23</b></td></center>
						<td><center><b>24</b></td></center>
						<td><center><b>25</b></td></center>
						<td><center><b>26</b></td></center>
						<td><center><b>27</b></td></center>
						<td><center><b>28</b></td></center>
					</tr>
					<tr>
						<td>
							<center>
								<table border=0>
									<tr><td colspan=6><center><div class='trapecio-top' style='border-top-color:<?php echo $cor18Vestibular; ?>;' id='dente18A'></div></center></td></tr>
									<tr>
										<td><center><div class='trapecio-left' style='border-top-color:<?php echo $cor18Distal; ?>;' id='dente18B'></div></center></td>
										<td><center><div class='quadrado' style='background-color:<?php echo $cor18TercoDistal; ?>;' id='dente18E'></div></center></td>
										<td><center><div class='quadrado' style='background-color:<?php echo $cor18TercoMedio; ?>;' id='dente18F'></div></center></td>
										<td><center><div class='quadrado' style='background-color:<?php echo $cor18TercoMesial; ?>;' id='dente18G'></div></center></td>
										<td><center><div class='trapecio-right' style='border-top-color:<?php echo $cor18Mesial; ?>;' id='dente18C'></div></center></td>
									</tr>
									<tr>
										<td colspan=6><center><div class='trapecio-bottom' style='border-bottom-color:<?php echo $cor18Lingual; ?>;' id='dente18D' onclick="myFunction18E()"></div></center></td>
									</tr>
								</table>
							</center>
						</td>
						<td>
							<center>
								<table border=0>
									<tr><td colspan=6><center><div class='trapecio-top' style='border-top-color:<?php echo $cor17Vestibular; ?>;' id='dente17A'></div></center></td></tr>
									<tr>
										<td><center><div class='trapecio-left' style='border-top-color:<?php echo $cor17Distal; ?>;' id='dente17B'></div></center></td>
										<td><center><div class='quadrado' style='background-color:<?php echo $cor17TercoDistal; ?>;' id='dente17E'></div></center></td>
										<td><center><div class='quadrado' style='background-color:<?php echo $cor17TercoMedio; ?>;' id='dente17F'></div></center></td>
										<td><center><div class='quadrado' style='background-color:<?php echo $cor17TercoMesial; ?>;' id='dente17G'></div></center></td>
										<td><center><div class='trapecio-right' style='border-top-color:<?php echo $cor17Mesial; ?>;' id='dente17C'></div></center></td>
									</tr>
									<tr>
										<td colspan=6><center><div class='trapecio-bottom' style='border-bottom-color:<?php echo $cor17Lingual; ?>;' id='dente17D' onclick="myFunction17E()"></div></center></td>
									</tr>
								</table>
							</center>
						</td>
						<td>
							<center>
								<table border=0>
									<tr><td colspan=6><center><div class='trapecio-top' style='border-top-color:<?php echo $cor16Vestibular; ?>;' id='dente16A'></div></center></td></tr>
									<tr>
										<td><center><div class='trapecio-left' style='border-top-color:<?php echo $cor16Distal; ?>;' id='dente16B'></div></center></td>
										<td><center><div class='quadrado' style='background-color:<?php echo $cor16TercoDistal; ?>;' id='dente16E'></div></center></td>
										<td><center><div class='quadrado' style='background-color:<?php echo $cor16TercoMedio; ?>;' id='dente16F'></div></center></td>
										<td><center><div class='quadrado' style='background-color:<?php echo $cor16TercoMesial; ?>;' id='dente16G'></div></center></td>
										<td><center><div class='trapecio-right' style='border-top-color:<?php echo $cor16Mesial; ?>;' id='dente16C'></div></center></td>
									</tr>
									<tr>
										<td colspan=6><center><div class='trapecio-bottom' style='border-bottom-color:<?php echo $cor16Lingual; ?>;' id='dente16D' onclick="myFunction16E()"></div></center></td>
									</tr>
								</table>
							</center>
						</td>
						<td>
							<center>
								<table border=0>
									<tr><td colspan=6><center><div class='trapecio-top' style='border-top-color:<?php echo $cor15Vestibular; ?>;' id='dente15A'></div></center></td></tr>
									<tr>
										<td><center><div class='trapecio-left2' style='border-top-color:<?php echo $cor15Distal; ?>;' id='dente15B'></div></center></td>
										<td><center><div class='quadrado2' style='background-color:<?php echo $cor15TercoDistal; ?>;' id='dente15E'></div></center></td>
										<td><center><div class='quadrado2' style='background-color:<?php echo $cor15TercoMedio; ?>;' id='dente15F'></div></center></td>
										<td><center><div class='quadrado2' style='background-color:<?php echo $cor15TercoMesial; ?>;' id='dente15G'></div></center></td>
										<td><center><div class='trapecio-right2' style='border-top-color:<?php echo $cor15Mesial; ?>;' id='dente15C'></div></center></td>
									</tr>
									<tr>
										<td colspan=6><center><div class='trapecio-bottom' style='border-bottom-color:<?php echo $cor15Lingual; ?>;' id='dente15D' onclick="myFunction15E()"></div></center></td>
									</tr>
								</table>
							</center>
						</td>
						<td>
							<center>
								<table border=0>
									<tr><td colspan=6><center><div class='trapecio-top' style='border-top-color:<?php echo $cor14Vestibular; ?>;' id='dente14A'></div></center></td></tr>
									<tr>
										<td><center><div class='trapecio-left2' style='border-top-color:<?php echo $cor14Distal; ?>;' id='dente14B'></div></center></td>
										<td><center><div class='quadrado2' style='background-color:<?php echo $cor14TercoDistal; ?>;' id='dente14E'></div></center></td>
										<td><center><div class='quadrado2' style='background-color:<?php echo $cor14TercoMedio; ?>;' id='dente14F'></div></center></td>
										<td><center><div class='quadrado2' style='background-color:<?php echo $cor14TercoMesial; ?>;' id='dente14G'></div></center></td>
										<td><center><div class='trapecio-right2' style='border-top-color:<?php echo $cor14Mesial; ?>;' id='dente14C'></div></center></td>
									</tr>
									<tr>
										<td colspan=6><center><div class='trapecio-bottom' style='border-bottom-color:<?php echo $cor14Lingual; ?>;' id='dente14D' onclick="myFunction14E()"></div></center></td>
									</tr>
								</table>
							</center>
						</td>
						<td>
							<center>
								<table border=0>
									<tr><td colspan=6><center><div class='trapecio-top3' style='border-top-color:<?php echo $cor13Vestibular; ?>;' id='dente13A'></div></center></td></tr>
									<tr>
										<td><center><div class='trapecio-left3' style='border-top-color:<?php echo $cor13Distal; ?>;' id='dente13B'></div></center></td>
										<td><center><div class='quadrado3' style='background-color:<?php echo $cor13TercoDistal; ?>;' id='dente13E'></div></center></td>
										<td><center><div class='quadrado3' style='background-color:<?php echo $cor13TercoMedio; ?>;' id='dente13F'></div></center></td>
										<td><center><div class='quadrado3' style='background-color:<?php echo $cor13TercoMesial; ?>;' id='dente13G'></div></center></td>
										<td><center><div class='trapecio-right3' style='border-top-color:<?php echo $cor13Mesial; ?>;' id='dente13C'></div></center></td>
									</tr>
									<tr>
										<td colspan=6><center><div class='trapecio-bottom3' style='border-bottom-color:<?php echo $cor13Lingual; ?>;' id='dente13D' onclick="myFunction13E()"></div></center></td>
									</tr>
								</table>
							</center>
						</td>
						<td>
							<center>
								<center>
								<table border=0>
									<tr><td colspan=6><center><div class='trapecio-top3' style='border-top-color:<?php echo $cor12Vestibular; ?>;' id='dente12A'></div></center></td></tr>
									<tr>
										<td><center><div class='trapecio-left3' style='border-top-color:<?php echo $cor12Distal; ?>;' id='dente12B'></div></center></td>
										<td><center><div class='quadrado3' style='background-color:<?php echo $cor12TercoDistal; ?>;' id='dente12E'></div></center></td>
										<td><center><div class='quadrado3' style='background-color:<?php echo $cor12TercoMedio; ?>;' id='dente12F'></div></center></td>
										<td><center><div class='quadrado3' style='background-color:<?php echo $cor12TercoMesial; ?>;' id='dente12G'></div></center></td>
										<td><center><div class='trapecio-right3' style='border-top-color:<?php echo $cor12Mesial; ?>;' id='dente12C'></div></center></td>
									</tr>
									<tr>
										<td colspan=6><center><div class='trapecio-bottom3' style='border-bottom-color:<?php echo $cor12Lingual; ?>;' id='dente12D' onclick="myFunction12E()"></div></center></td>
									</tr>
								</table>
							</center>
							</center>
						</td>
						<td>
							<center>
								<center>
								<table border=0>
									<tr><td colspan=6><center><div class='trapecio-top3' style='border-top-color:<?php echo $cor11Vestibular; ?>;' id='dente11A'></div></center></td></tr>
									<tr>
										<td><center><div class='trapecio-left3' style='border-top-color:<?php echo $cor11Distal; ?>;' id='dente11B'></div></center></td>
										<td><center><div class='quadrado3' style='background-color:<?php echo $cor11TercoDistal; ?>;' id='dente11E'></div></center></td>
										<td><center><div class='quadrado3' style='background-color:<?php echo $cor11TercoMedio; ?>;' id='dente11F'></div></center></td>
										<td><center><div class='quadrado3' style='background-color:<?php echo $cor11TercoMesial; ?>;' id='dente11G'></div></center></td>
										<td><center><div class='trapecio-right3' style='border-top-color:<?php echo $cor11Mesial; ?>;' id='dente11C'></div></center></td>
									</tr>
									<tr>
										<td colspan=6><center><div class='trapecio-bottom3' style='border-bottom-color:<?php echo $cor11Lingual; ?>;' id='dente11D' onclick="myFunction11E()"></div></center></td>
									</tr>
								</table>
							</center>
							</center>
						</td>
						<td>
							<center>
								<table border=0>
									<tr><td colspan=6><center><div class='trapecio-top3' style='border-top-color:<?php echo $cor21Vestibular; ?>;' id='dente21A'></div></center></td></tr>
									<tr>
										<td><center><div class='trapecio-left3' style='border-top-color:<?php echo $cor21Mesial; ?>;' id='dente21B'></div></center></td>
										<td><center><div class='quadrado3' style='background-color:<?php echo $cor21TercoMesial; ?>;' id='dente21E'></div></center></td>
										<td><center><div class='quadrado3' style='background-color:<?php echo $cor21TercoMedio; ?>;' id='dente21F'></div></center></td>
										<td><center><div class='quadrado3' style='background-color:<?php echo $cor21TercoDistal; ?>;' id='dente21G'></div></center></td>
										<td><center><div class='trapecio-right3' style='border-top-color:<?php echo $cor21Distal; ?>;' id='dente21C'></div></center></td>
									</tr>
									<tr>
										<td colspan=6><center><div class='trapecio-bottom3' style='border-bottom-color:<?php echo $cor21Lingual; ?>;' id='dente21D' onclick="myFunction21E()"></div></center></td>
									</tr>
								</table>
							</center>
						</td>
						<td>
							<center>
								<table border=0>
									<tr><td colspan=6><center><div class='trapecio-top3' style='border-top-color:<?php echo $cor22Vestibular; ?>;' id='dente22A'></div></center></td></tr>
									<tr>
										<td><center><div class='trapecio-left3' style='border-top-color:<?php echo $cor22Mesial; ?>;' id='dente22B'></div></center></td>
										<td><center><div class='quadrado3' style='background-color:<?php echo $cor22TercoMesial; ?>;' id='dente22E'></div></center></td>
										<td><center><div class='quadrado3' style='background-color:<?php echo $cor22TercoMedio; ?>;' id='dente22F'></div></center></td>
										<td><center><div class='quadrado3' style='background-color:<?php echo $cor22TercoDistal; ?>;' id='dente22G'></div></center></td>
										<td><center><div class='trapecio-right3' style='border-top-color:<?php echo $cor22Distal; ?>;' id='dente22C'></div></center></td>
									</tr>
									<tr>
										<td colspan=6><center><div class='trapecio-bottom3' style='border-bottom-color:<?php echo $cor22Lingual; ?>;' id='dente22D' onclick="myFunction22E()"></div></center></td>
									</tr>
								</table>
							</center>
						</td>
						<td>
							<center>
								<table border=0>
									<tr><td colspan=6><center><div class='trapecio-top3' style='border-top-color:<?php echo $cor23Vestibular; ?>;' id='dente23A'></div></center></td></tr>
									<tr>
										<td><center><div class='trapecio-left3' style='border-top-color:<?php echo $cor23Mesial; ?>;' id='dente23B'></div></center></td>
										<td><center><div class='quadrado3' style='background-color:<?php echo $cor23TercoMesial; ?>;' id='dente23E'></div></center></td>
										<td><center><div class='quadrado3' style='background-color:<?php echo $cor23TercoMedio; ?>;' id='dente23F'></div></center></td>
										<td><center><div class='quadrado3' style='background-color:<?php echo $cor23TercoDistal; ?>;' id='dente23G'></div></center></td>
										<td><center><div class='trapecio-right3' style='border-top-color:<?php echo $cor23Distal; ?>;' id='dente23C'></div></center></td>
									</tr>
									<tr>
										<td colspan=6><center><div class='trapecio-bottom3' style='border-bottom-color:<?php echo $cor23Lingual; ?>;' id='dente23D' onclick="myFunction23E()"></div></center></td>
									</tr>
								</table>
							</center>
						</td>
						<td>
							<center>
								<table border=0>
									<tr><td colspan=6><center><div class='trapecio-top' style='border-top-color:<?php echo $cor24Vestibular; ?>;' id='dente24A'></div></center></td></tr>
									<tr>
										<td><center><div class='trapecio-left2' style='border-top-color:<?php echo $cor24Mesial; ?>;' id='dente24B'></div></center></td>
										<td><center><div class='quadrado2' style='background-color:<?php echo $cor24TercoMesial; ?>;' id='dente24E'></div></center></td>
										<td><center><div class='quadrado2' style='background-color:<?php echo $cor24TercoMedio; ?>;' id='dente24F'></div></center></td>
										<td><center><div class='quadrado2' style='background-color:<?php echo $cor24TercoDistal; ?>;' id='dente24G'></div></center></td>
										<td><center><div class='trapecio-right2' style='border-top-color:<?php echo $cor24Distal; ?>;' id='dente24C'></div></center></td>
									</tr>
									<tr>
										<td colspan=6><center><div class='trapecio-bottom' style='border-bottom-color:<?php echo $cor24Lingual; ?>;' id='dente24D' onclick="myFunction24E()"></div></center></td>
									</tr>
								</table>
							</center>
						</td>
						<td>
							<center>
								<table border=0>
									<tr><td colspan=6><center><div class='trapecio-top' style='border-top-color:<?php echo $cor25Vestibular; ?>;' id='dente25A'></div></center></td></tr>
									<tr>
										<td><center><div class='trapecio-left2' style='border-top-color:<?php echo $cor25Mesial; ?>;' id='dente25B'></div></center></td>
										<td><center><div class='quadrado2' style='background-color:<?php echo $cor25TercoMesial; ?>;' id='dente25E'></div></center></td>
										<td><center><div class='quadrado2' style='background-color:<?php echo $cor25TercoMedio; ?>;' id='dente25F'></div></center></td>
										<td><center><div class='quadrado2' style='background-color:<?php echo $cor25TercoDistal; ?>;' id='dente25G'></div></center></td>
										<td><center><div class='trapecio-right2' style='border-top-color:<?php echo $cor25Distal; ?>;' id='dente25C'></div></center></td>
									</tr>
									<tr>
										<td colspan=6><center><div class='trapecio-bottom' style='border-bottom-color:<?php echo $cor25Lingual; ?>;' id='dente25D' onclick="myFunction25E()"></div></center></td>
									</tr>
								</table>
							</center>
						</td>
						<td>
							<center>
								<table border=0>
									<tr><td colspan=6><center><div class='trapecio-top' style='border-top-color:<?php echo $cor26Vestibular; ?>;' id='dente26A'></div></center></td></tr>
									<tr>
										<td><center><div class='trapecio-left' style='border-top-color:<?php echo $cor26Mesial; ?>;' id='dente26B'></div></center></td>
										<td><center><div class='quadrado' style='background-color:<?php echo $cor26TercoMesial; ?>;' id='dente26E'></div></center></td>
										<td><center><div class='quadrado' style='background-color:<?php echo $cor26TercoMedio; ?>;' id='dente26F'></div></center></td>
										<td><center><div class='quadrado' style='background-color:<?php echo $cor26TercoDistal; ?>;' id='dente26G'></div></center></td>
										<td><center><div class='trapecio-right' style='border-top-color:<?php echo $cor26Distal; ?>;' id='dente26C'></div></center></td>
									</tr>
									<tr>
										<td colspan=6><center><div class='trapecio-bottom' style='border-bottom-color:<?php echo $cor26Lingual; ?>;' id='dente26D' onclick="myFunction26E()"></div></center></td>
									</tr>
								</table>
							</center>
						</td>
						<td>
							<center>
								<table border=0>
									<tr><td colspan=6><center><div class='trapecio-top' style='border-top-color:<?php echo $cor27Vestibular; ?>;' id='dente27A'></div></center></td></tr>
									<tr>
										<td><center><div class='trapecio-left' style='border-top-color:<?php echo $cor27Mesial; ?>;' id='dente27B'></div></center></td>
										<td><center><div class='quadrado' style='background-color:<?php echo $cor27TercoMesial; ?>;' id='dente27E'></div></center></td>
										<td><center><div class='quadrado' style='background-color:<?php echo $cor27TercoMedio; ?>;' id='dente27F'></div></center></td>
										<td><center><div class='quadrado' style='background-color:<?php echo $cor27TercoDistal; ?>;' id='dente27G'></div></center></td>
										<td><center><div class='trapecio-right' style='border-top-color:<?php echo $cor27Distal; ?>;' id='dente27C'></div></center></td>
									</tr>
									<tr>
										<td colspan=6><center><div class='trapecio-bottom' style='border-bottom-color:<?php echo $cor27Lingual; ?>;' id='dente27D' onclick="myFunction27E()"></div></center></td>
									</tr>
								</table>
							</center>
						</td>
						<td>
							<center>
								<table border=0>
									<tr><td colspan=6><center><div class='trapecio-top' style='border-top-color:<?php echo $cor28Vestibular; ?>;' id='dente28A'></div></center></td></tr>
									<tr>
										<td><center><div class='trapecio-left' style='border-top-color:<?php echo $cor28Mesial; ?>;' id='dente28B'></div></center></td>
										<td><center><div class='quadrado' style='background-color:<?php echo $cor28TercoMesial; ?>;' id='dente28E'></div></center></td>
										<td><center><div class='quadrado' style='background-color:<?php echo $cor28TercoMedio; ?>;' id='dente28F'></div></center></td>
										<td><center><div class='quadrado' style='background-color:<?php echo $cor28TercoDistal; ?>;' id='dente28G'></div></center></td>
										<td><center><div class='trapecio-right' style='border-top-color:<?php echo $cor28Distal; ?>;' id='dente28C'></div></center></td>
									</tr>
									<tr>
										<td colspan=6><center><div class='trapecio-bottom' style='border-bottom-color:<?php echo $cor28Lingual; ?>;' id='dente28D' onclick="myFunction28E()"></div></center></td>
									</tr>
								</table>
							</center>
						</td>
						<td rowspan=3><center><a onClick="showHideDiv('contenidoBoca')"><img src='dentes/boca.png' width='70%' height='70%'></a></td></center>
					</tr>
					<tr>
						<td colspan=16><br></td>
					</tr>		
					
					<tr>
						<td>
							<center>
								<table border=0>
									<tr><td colspan=6><center><div class='trapecio-top' style='border-top-color:<?php echo $cor48Lingual; ?>;' id='dente48A'></div></center></td></tr>
									<tr>
										<td><center><div class='trapecio-left' style='border-top-color:<?php echo $cor48Distal; ?>;' id='dente48B'></div></center></td>
										<td><center><div class='quadrado' style='background-color:<?php echo $cor48TercoDistal; ?>;' id='dente48E'></div></center></td>
										<td><center><div class='quadrado' style='background-color:<?php echo $cor48TercoMedio; ?>;' id='dente48F'></div></center></td>
										<td><center><div class='quadrado' style='background-color:<?php echo $cor48TercoMesial; ?>;' id='dente48G'></div></center></td>
										<td><center><div class='trapecio-right' style='border-top-color:<?php echo $cor48Mesial; ?>;' id='dente48C'></div></center></td>
									</tr>
									<tr>
										<td colspan=6><center><div class='trapecio-bottom' style='border-bottom-color:<?php echo $cor48Vestibular; ?>;' id='dente48D' onclick="myFunction48E()"></div></center></td>
									</tr>
								</table>
							</center>
						</td>
						<td>
							<center>
								<table border=0>
									<tr><td colspan=6><center><div class='trapecio-top' style='border-top-color:<?php echo $cor47Lingual; ?>;' id='dente47A'></div></center></td></tr>
									<tr>
										<td><center><div class='trapecio-left' style='border-top-color:<?php echo $cor47Distal; ?>;' id='dente47B'></div></center></td>
										<td><center><div class='quadrado' style='background-color:<?php echo $cor47TercoDistal; ?>;' id='dente47E'></div></center></td>
										<td><center><div class='quadrado' style='background-color:<?php echo $cor47TercoMedio; ?>;' id='dente47F'></div></center></td>
										<td><center><div class='quadrado' style='background-color:<?php echo $cor47TercoMesial; ?>;' id='dente47G'></div></center></td>
										<td><center><div class='trapecio-right' style='border-top-color:<?php echo $cor47Mesial; ?>;' id='dente47C'></div></center></td>
									</tr>
									<tr>
										<td colspan=6><center><div class='trapecio-bottom' style='border-bottom-color:<?php echo $cor47Vestibular; ?>;' id='dente47D' onclick="myFunction47E()"></div></center></td>
									</tr>
								</table>
							</center>
						</td>
						<td>
							<center>
								<table border=0>
									<tr><td colspan=6><center><div class='trapecio-top' style='border-top-color:<?php echo $cor46Lingual; ?>;' id='dente46A'></div></center></td></tr>
									<tr>
										<td><center><div class='trapecio-left' style='border-top-color:<?php echo $cor46Distal; ?>;' id='dente46B'></div></center></td>
										<td><center><div class='quadrado' style='background-color:<?php echo $cor46TercoDistal; ?>;' id='dente46E'></div></center></td>
										<td><center><div class='quadrado' style='background-color:<?php echo $cor46TercoMedio; ?>;' id='dente46F'></div></center></td>
										<td><center><div class='quadrado' style='background-color:<?php echo $cor46TercoMesial; ?>;' id='dente46G'></div></center></td>
										<td><center><div class='trapecio-right' style='border-top-color:<?php echo $cor46Mesial; ?>;' id='dente46C'></div></center></td>
									</tr>
									<tr>
										<td colspan=6><center><div class='trapecio-bottom' style='border-bottom-color:<?php echo $cor46Vestibular; ?>;' id='dente46D' onclick="myFunction46E()"></div></center></td>
									</tr>
								</table>
							</center>
						</td>
						<td>
							<center>
								<table border=0>
									<tr><td colspan=6><center><div class='trapecio-top' style='border-top-color:<?php echo $cor45Lingual; ?>;' id='dente45A'></div></center></td></tr>
									<tr>
										<td><center><div class='trapecio-left2' style='border-top-color:<?php echo $cor45Distal; ?>;' id='dente45B'></div></center></td>
										<td><center><div class='quadrado2' style='background-color:<?php echo $cor45TercoDistal; ?>;' id='dente45E'></div></center></td>
										<td><center><div class='quadrado2' style='background-color:<?php echo $cor45TercoMedio; ?>;' id='dente45F'></div></center></td>
										<td><center><div class='quadrado2' style='background-color:<?php echo $cor45TercoMesial; ?>;' id='dente45G'></div></center></td>
										<td><center><div class='trapecio-right2' style='border-top-color:<?php echo $cor45Mesial; ?>;' id='dente45C'></div></center></td>
									</tr>
									<tr>
										<td colspan=6><center><div class='trapecio-bottom' style='border-bottom-color:<?php echo $cor45Vestibular; ?>;' id='dente45D' onclick="myFunction45E()"></div></center></td>
									</tr>
								</table>
							</center>
						</td>
						<td>
							<center>
								<table border=0>
									<tr><td colspan=6><center><div class='trapecio-top' style='border-top-color:<?php echo $cor44Lingual; ?>;' id='dente44A'></div></center></td></tr>
									<tr>
										<td><center><div class='trapecio-left2' style='border-top-color:<?php echo $cor44Distal; ?>;' id='dente44B'></div></center></td>
										<td><center><div class='quadrado2' style='background-color:<?php echo $cor44TercoDistal; ?>;' id='dente44E'></div></center></td>
										<td><center><div class='quadrado2' style='background-color:<?php echo $cor44TercoMedio; ?>;' id='dente44F'></div></center></td>
										<td><center><div class='quadrado2' style='background-color:<?php echo $cor44TercoMesial; ?>;' id='dente44G'></div></center></td>
										<td><center><div class='trapecio-right2' style='border-top-color:<?php echo $cor44Mesial; ?>;' id='dente44C'></div></center></td>
									</tr>
									<tr>
										<td colspan=6><center><div class='trapecio-bottom' style='border-bottom-color:<?php echo $cor44Vestibular; ?>;' id='dente44D' onclick="myFunction44E()"></div></center></td>
									</tr>
								</table>
							</center>
						</td>
						<td>
							<center>
								<table border=0>
									<tr><td colspan=6><center><div class='trapecio-top3' style='border-top-color:<?php echo $cor43Lingual; ?>;' id='dente43A'></div></center></td></tr>
									<tr>
										<td><center><div class='trapecio-left3' style='border-top-color:<?php echo $cor43Distal; ?>;' id='dente43B'></div></center></td>
										<td><center><div class='quadrado3' style='background-color:<?php echo $cor43TercoDistal; ?>;' id='dente43E'></div></center></td>
										<td><center><div class='quadrado3' style='background-color:<?php echo $cor43TercoMedio; ?>;' id='dente43F'></div></center></td>
										<td><center><div class='quadrado3' style='background-color:<?php echo $cor43TercoMesial; ?>;' id='dente43G'></div></center></td>
										<td><center><div class='trapecio-right3' style='border-top-color:<?php echo $cor43Mesial; ?>;' id='dente43C'></div></center></td>
									</tr>
									<tr>
										<td colspan=6><center><div class='trapecio-bottom3' style='border-bottom-color:<?php echo $cor43Vestibular; ?>;' id='dente43D' onclick="myFunction43E()"></div></center></td>
									</tr>
								</table>
							</center>
						</td>
						<td>
							<center>
								<table border=0>
									<tr><td colspan=6><center><div class='trapecio-top3' style='border-top-color:<?php echo $cor42Lingual; ?>;' id='dente42A'></div></center></td></tr>
									<tr>
										<td><center><div class='trapecio-left3' style='border-top-color:<?php echo $cor42Distal; ?>;' id='dente42B'></div></center></td>
										<td><center><div class='quadrado3' style='background-color:<?php echo $cor42TercoDistal; ?>;' id='dente42E'></div></center></td>
										<td><center><div class='quadrado3' style='background-color:<?php echo $cor42TercoMedio; ?>;' id='dente42F'></div></center></td>
										<td><center><div class='quadrado3' style='background-color:<?php echo $cor42TercoMesial; ?>;' id='dente42G'></div></center></td>
										<td><center><div class='trapecio-right3' style='border-top-color:<?php echo $cor42Mesial; ?>;' id='dente42C'></div></center></td>
									</tr>
									<tr>
										<td colspan=6><center><div class='trapecio-bottom3' style='border-bottom-color:<?php echo $cor42Vestibular; ?>;' id='dente42D' onclick="myFunction42E()"></div></center></td>
									</tr>
								</table>
							</center>
						</td>
						<td>
							<center>
								<table border=0>
									<tr><td colspan=6><center><div class='trapecio-top3' style='border-top-color:<?php echo $cor41Lingual; ?>;' id='dente41A'></div></center></td></tr>
									<tr>
										<td><center><div class='trapecio-left3' style='border-top-color:<?php echo $cor41Distal; ?>;' id='dente41B'></div></center></td>
										<td><center><div class='quadrado3' style='background-color:<?php echo $cor41TercoDistal; ?>;' id='dente41E'></div></center></td>
										<td><center><div class='quadrado3' style='background-color:<?php echo $cor41TercoMedio; ?>;' id='dente41F'></div></center></td>
										<td><center><div class='quadrado3' style='background-color:<?php echo $cor41TercoMesial; ?>;' id='dente41G'></div></center></td>
										<td><center><div class='trapecio-right3' style='border-top-color:<?php echo $cor41Mesial; ?>;' id='dente41C'></div></center></td>
									</tr>
									<tr>
										<td colspan=6><center><div class='trapecio-bottom3' style='border-bottom-color:<?php echo $cor41Vestibular; ?>;' id='dente41D' onclick="myFunction41E()"></div></center></td>
									</tr>
								</table>
							</center>
						</td>
						<td>
							<center>
								<table border=0>
									<tr><td colspan=6><center><div class='trapecio-top3' style='border-top-color:<?php echo $cor31Lingual; ?>;' id='dente31A'></div></center></td></tr>
									<tr>
										<td><center><div class='trapecio-left3' style='border-top-color:<?php echo $cor31Mesial; ?>;' id='dente31B'></div></center></td>
										<td><center><div class='quadrado3' style='background-color:<?php echo $cor31TercoMesial; ?>;' id='dente31E'></div></center></td>
										<td><center><div class='quadrado3' style='background-color:<?php echo $cor31TercoMedio; ?>;' id='dente31F'></div></center></td>
										<td><center><div class='quadrado3' style='background-color:<?php echo $cor31TercoDistal; ?>;' id='dente31G'></div></center></td>
										<td><center><div class='trapecio-right3' style='border-top-color:<?php echo $cor31Distal; ?>;' id='dente31C'></div></center></td>
									</tr>
									<tr>
										<td colspan=6><center><div class='trapecio-bottom3' style='border-bottom-color:<?php echo $cor31Vestibular; ?>;' id='dente31D' onclick="myFunction31E()"></div></center></td>
									</tr>
								</table>
							</center>
						</td>
						<td>
							<center>
								<table border=0>
									<tr><td colspan=6><center><div class='trapecio-top3' style='border-top-color:<?php echo $cor32Lingual; ?>;' id='dente32A'></div></center></td></tr>
									<tr>
										<td><center><div class='trapecio-left3' style='border-top-color:<?php echo $cor32Mesial; ?>;' id='dente32B'></div></center></td>
										<td><center><div class='quadrado3' style='background-color:<?php echo $cor32TercoMesial; ?>;' id='dente32E'></div></center></td>
										<td><center><div class='quadrado3' style='background-color:<?php echo $cor32TercoMedio; ?>;' id='dente32F'></div></center></td>
										<td><center><div class='quadrado3' style='background-color:<?php echo $cor32TercoDistal; ?>;' id='dente32G'></div></center></td>
										<td><center><div class='trapecio-right3' style='border-top-color:<?php echo $cor32Distal; ?>;' id='dente32C'></div></center></td>
									</tr>
									<tr>
										<td colspan=6><center><div class='trapecio-bottom3' style='border-bottom-color:<?php echo $cor32Vestibular; ?>;' id='dente32D' onclick="myFunction32E()"></div></center></td>
									</tr>
								</table>
							</center>
						</td>
						<td>
							<center>
								<table border=0>
									<tr><td colspan=6><center><div class='trapecio-top3' style='border-top-color:<?php echo $cor33Lingual; ?>;' id='dente33A'></div></center></td></tr>
									<tr>
										<td><center><div class='trapecio-left3' style='border-top-color:<?php echo $cor33Mesial; ?>;' id='dente33B'></div></center></td>
										<td><center><div class='quadrado3' style='background-color:<?php echo $cor33TercoMesial; ?>;' id='dente33E'></div></center></td>
										<td><center><div class='quadrado3' style='background-color:<?php echo $cor33TercoMedio; ?>;' id='dente33F'></div></center></td>
										<td><center><div class='quadrado3' style='background-color:<?php echo $cor33TercoDistal; ?>;' id='dente33G'></div></center></td>
										<td><center><div class='trapecio-right3' style='border-top-color:<?php echo $cor33Distal; ?>;' id='dente33C'></div></center></td>
									</tr>
									<tr>
										<td colspan=6><center><div class='trapecio-bottom3' style='border-bottom-color:<?php echo $cor33Vestibular; ?>;' id='dente33D' onclick="myFunction33E()"></div></center></td>
									</tr>
								</table>
							</center>
						</td>
						<td>
							<center>
								<table border=0>
									<tr><td colspan=6><center><div class='trapecio-top' style='border-top-color:<?php echo $cor34Lingual; ?>;' id='dente34A'></div></center></td></tr>
									<tr>
										<td><center><div class='trapecio-left2' style='border-top-color:<?php echo $cor34Mesial; ?>;' id='dente34B'></div></center></td>
										<td><center><div class='quadrado2' style='background-color:<?php echo $cor34TercoMesial; ?>;' id='dente34E'></div></center></td>
										<td><center><div class='quadrado2' style='background-color:<?php echo $cor34TercoMedio; ?>;' id='dente34F'></div></center></td>
										<td><center><div class='quadrado2' style='background-color:<?php echo $cor34TercoDistal; ?>;' id='dente34G'></div></center></td>
										<td><center><div class='trapecio-right2' style='border-top-color:<?php echo $cor34Distal; ?>;' id='dente34C'></div></center></td>
									</tr>
									<tr>
										<td colspan=6><center><div class='trapecio-bottom' style='border-bottom-color:<?php echo $cor34Vestibular; ?>;' id='dente34D' onclick="myFunction34E()"></div></center></td>
									</tr>
								</table>
							</center>
						</td>
						<td>
							<center>
								<table border=0>
									<tr><td colspan=6><center><div class='trapecio-top' style='border-top-color:<?php echo $cor35Lingual; ?>;' id='dente35A'></div></center></td></tr>
									<tr>
										<td><center><div class='trapecio-left2' style='border-top-color:<?php echo $cor35Mesial; ?>;' id='dente35B'></div></center></td>
										<td><center><div class='quadrado2' style='background-color:<?php echo $cor35TercoMesial; ?>;' id='dente35E'></div></center></td>
										<td><center><div class='quadrado2' style='background-color:<?php echo $cor35TercoMedio; ?>;' id='dente35F'></div></center></td>
										<td><center><div class='quadrado2' style='background-color:<?php echo $cor35TercoDistal; ?>;' id='dente35G'></div></center></td>
										<td><center><div class='trapecio-right2' style='border-top-color:<?php echo $cor35Distal; ?>;' id='dente35C'></div></center></td>
									</tr>
									<tr>
										<td colspan=6><center><div class='trapecio-bottom' style='border-bottom-color:<?php echo $cor35Vestibular; ?>;' id='dente35D' onclick="myFunction35E()"></div></center></td>
									</tr>
								</table>
							</center>
						</td>
						<td>
							<center>
								<table border=0>
									<tr><td colspan=6><center><div class='trapecio-top' style='border-top-color:<?php echo $cor36Lingual; ?>;' id='dente36A'></div></center></td></tr>
									<tr>
										<td><center><div class='trapecio-left' style='border-top-color:<?php echo $cor36Mesial; ?>;' id='dente36B'></div></center></td>
										<td><center><div class='quadrado' style='background-color:<?php echo $cor36TercoMesial; ?>;' id='dente36E'></div></center></td>
										<td><center><div class='quadrado' style='background-color:<?php echo $cor36TercoMedio; ?>;' id='dente36F'></div></center></td>
										<td><center><div class='quadrado' style='background-color:<?php echo $cor36TercoDistal; ?>;' id='dente36G'></div></center></td>
										<td><center><div class='trapecio-right' style='border-top-color:<?php echo $cor36Distal; ?>;' id='dente36C'></div></center></td>
									</tr>
									<tr>
										<td colspan=6><center><div class='trapecio-bottom' style='border-bottom-color:<?php echo $cor36Vestibular; ?>;' id='dente36D' onclick="myFunction36E()"></div></center></td>
									</tr>
								</table>
							</center>
						</td>
						<td>
							<center>
								<table border=0>
									<tr><td colspan=6><center><div class='trapecio-top' style='border-top-color:<?php echo $cor37Lingual; ?>;' id='dente37A'></div></center></td></tr>
									<tr>
										<td><center><div class='trapecio-left' style='border-top-color:<?php echo $cor37Mesial; ?>;' id='dente37B'></div></center></td>
										<td><center><div class='quadrado' style='background-color:<?php echo $cor37TercoMesial; ?>;' id='dente37E'></div></center></td>
										<td><center><div class='quadrado' style='background-color:<?php echo $cor37TercoMedio; ?>;' id='dente37F'></div></center></td>
										<td><center><div class='quadrado' style='background-color:<?php echo $cor37TercoDistal; ?>;' id='dente37G'></div></center></td>
										<td><center><div class='trapecio-right' style='border-top-color:<?php echo $cor37Distal; ?>;' id='dente37C'></div></center></td>
									</tr>
									<tr>
										<td colspan=6><center><div class='trapecio-bottom' style='border-bottom-color:<?php echo $cor37Vestibular; ?>;' id='dente37D' onclick="myFunction37E()"></div></center></td>
									</tr>
								</table>
							</center>
						</td>
						<td>
							<center>
								<table border=0>
									<tr><td colspan=6><center><div class='trapecio-top' style='border-top-color:<?php echo $cor38Lingual; ?>;' id='dente38A'></div></center></td></tr>
									<tr>
										<td><center><div class='trapecio-left' style='border-top-color:<?php echo $cor38Mesial; ?>;' id='dente38B'></div></center></td>
										<td><center><div class='quadrado' style='background-color:<?php echo $cor38TercoMesial; ?>;' id='dente38E'></div></center></td>
										<td><center><div class='quadrado' style='background-color:<?php echo $cor38TercoMedio; ?>;' id='dente38F'></div></center></td>
										<td><center><div class='quadrado' style='background-color:<?php echo $cor38TercoDistal; ?>;' id='dente38G'></div></center></td>
										<td><center><div class='trapecio-right' style='border-top-color:<?php echo $cor38Distal; ?>;' id='dente38C'></div></center></td>
									</tr>
									<tr>
										<td colspan=6><center><div class='trapecio-bottom' style='border-bottom-color:<?php echo $cor38Vestibular; ?>;' id='dente38D' onclick="myFunction38E()"></div></center></td>
									</tr>
								</table>
							</center>
						</td>
					</tr>
					<tr>
						<td><center><b>48</b></td></center>
						<td><center><b>47</b></td></center>
						<td><center><b>46</b></td></center>
						<td><center><b>45</b></td></center>
						<td><center><b>44</b></td></center>
						<td><center><b>43</b></td></center>
						<td><center><b>42</b></td></center>
						<td><center><b>41</b></td></center>
						<td><center><b>31</b></td></center>
						<td><center><b>32</b></td></center>
						<td><center><b>33</b></td></center>
						<td><center><b>34</b></td></center>
						<td><center><b>35</b></td></center>
						<td><center><b>36</b></td></center>
						<td><center><b>37</b></td></center>
						<td><center><b>38</b></td></center>
						<td rowspan=2><center><a onClick="showHideDiv('contenidoInferior')"><img src='dentes/arcada_inferior.png' width='90%' height='90%'></a></td></center>
					</tr>
					<tr>
						<td><center><a onClick="showHideDiv('contenido48')"><img src='dentes/48.png' style='margin-top:-20px; opacity: <?php echo $ausente48_1; ?>; filter: alpha(opacity=<?php echo $ausente48_2; ?>);' width='60%' height='80%'></a></td></center>
						<td><center><a onClick="showHideDiv('contenido47')"><img src='dentes/47.png' style='margin-top:-10px; opacity: <?php echo $ausente47_1; ?>; filter: alpha(opacity=<?php echo $ausente47_2; ?>);' width='60%' height='80%'></a></td></center>
						<td><center><a onClick="showHideDiv('contenido46')"><img src='dentes/46.png' style='margin-top:-5px; opacity: <?php echo $ausente46_1; ?>; filter: alpha(opacity=<?php echo $ausente46_2; ?>);' width='60%' height='80%'></a></td></center>
						<td><center><a onClick="showHideDiv('contenido45')"><img src='dentes/45.png' style='margin-top:-10px; opacity: <?php echo $ausente45_1; ?>; filter: alpha(opacity=<?php echo $ausente45_2; ?>);' width='65%' height='65%'></a></td></center>
						<td><center><a onClick="showHideDiv('contenido44')"><img src='dentes/44.png' style='margin-top:-10px; opacity: <?php echo $ausente44_1; ?>; filter: alpha(opacity=<?php echo $ausente44_2; ?>);' width='65%' height='65%'></a></td></center>
						<td><center><a onClick="showHideDiv('contenido43')"><img src='dentes/43.png' width='60%' height='60%' style='opacity: <?php echo $ausente43_1; ?>; filter: alpha(opacity=<?php echo $ausente43_2; ?>);'></a></td></center>
						<td><center><a onClick="showHideDiv('contenido42')"><img src='dentes/42.png' style='margin-top:0px; opacity: <?php echo $ausente42_1; ?>; filter: alpha(opacity=<?php echo $ausente42_2; ?>);' width='58%' height='58%'></a></td></center>
						<td><center><a onClick="showHideDiv('contenido41')"><img src='dentes/41.png' style='margin-top:-15px; opacity: <?php echo $ausente41_1; ?>; filter: alpha(opacity=<?php echo $ausente41_2; ?>);' width='52%' height='52%'></a></td></center>
						<td><center><a onClick="showHideDiv('contenido31')"><img src='dentes/31.png' style='margin-top:-15px; opacity: <?php echo $ausente31_1; ?>; filter: alpha(opacity=<?php echo $ausente31_2; ?>);' width='52%' height='51%'></a></td></center>
						<td><center><a onClick="showHideDiv('contenido32')"><img src='dentes/32.png' style='margin-top:0px; opacity: <?php echo $ausente32_1; ?>; filter: alpha(opacity=<?php echo $ausente32_2; ?>);' width='58%' height='58%'></a></td></center>
						<td><center><a onClick="showHideDiv('contenido33')"><img src='dentes/33.png' width='60%' height='60%' style='opacity: <?php echo $ausente33_1; ?>; filter: alpha(opacity=<?php echo $ausente33_2; ?>);'></a></td></center>
						<td><center><a onClick="showHideDiv('contenido34')"><img src='dentes/34.png' style='margin-top:-10px; opacity: <?php echo $ausente34_1; ?>; filter: alpha(opacity=<?php echo $ausente34_2; ?>);' width='65%' height='65%'></a></td></center>
						<td><center><a onClick="showHideDiv('contenido35')"><img src='dentes/35.png' style='margin-top:-10px; opacity: <?php echo $ausente35_1; ?>; filter: alpha(opacity=<?php echo $ausente35_2; ?>);' width='65%' height='65%'></a></td></center>
						<td><center><a onClick="showHideDiv('contenido36')"><img src='dentes/36.png' style='margin-top:-5px; opacity: <?php echo $ausente36_1; ?>; filter: alpha(opacity=<?php echo $ausente36_2; ?>);' width='60%' height='80%'></a></td></center>
						<td><center><a onClick="showHideDiv('contenido37')"><img src='dentes/37.png' style='margin-top:-10px; opacity: <?php echo $ausente37_1; ?>; filter: alpha(opacity=<?php echo $ausente37_2; ?>);' width='60%' height='80%'></a></td></center>
						<td><center><a onClick="showHideDiv('contenido38')"><img src='dentes/38.png' style='margin-top:-20px; opacity: <?php echo $ausente38_1; ?>; filter: alpha(opacity=<?php echo $ausente38_2; ?>);' width='60%' height='80%'></a></td></center>
					</tr>
				</table>
				
				
				<div id='contenidoInferior' style='background-color:white; display:none'  width='100%'>
					   <center>
						  <br> 
						  <table border=0 width='88%'>
							 <tr>
								<td width='3%'><center><img src='dentes/arcada_inferior.png'><b>Arcada Inferior</b></center></td>
								<td rowspan=2>
								   <center>
									<form method='POST' action='inserirDente.php'> <input type='hidden' name='semestre' value='<?php echo $semestre; ?>'>
									  <input type='hidden' value='arcada_inferior' name='dente'>
									  <input type='hidden' name='face' value='N/A'>
									  <input type='hidden' name='paciente' value='<?php echo $_GET['cpf']; ?>'>
									  <table border=0 width='100%' height='100%'>
										 <tr>
											<td colspan=4>
											   <center><b>Diagnóstico</b></center>
											</td>
											<td colspan=4>
											   <select class='single-input' name='diagnostico'>
												  <?php
												  $sqlAnam = "SELECT * FROM tb_diagnostico ORDER BY nm_diagnostico";
													$resultadoAnam = mysql_query($sqlAnam) or die();
													while($linhaAnam = mysql_fetch_array($resultadoAnam)){
														echo "<option value='".$linhaAnam['nr_idDiagnostico']."'>".trim($linhaAnam['nm_diagnostico'])."</option>";
													}
												  ?>
											   </select>
											</td>
											<td colspan=4>
											   <center><b>Tratamento</b></center>
											</td>
											<td colspan=4>
											   <select class='single-input' name='tratamento'>
												  <?php
												  $sqlAnam = "SELECT * FROM tb_procedimento ORDER BY nm_procedimento";
													$resultadoAnam = mysql_query($sqlAnam) or die();
													while($linhaAnam = mysql_fetch_array($resultadoAnam)){
														echo "<option value='".$linhaAnam['nr_idProcedimento']."'>".trim($linhaAnam['nm_procedimento'])."</option>";
													}
												  ?>
											   </select>
											</td>
											
										</tr>
										<tr>
											<td colspan=4>
											   <center><b>Situação</b></center>
											</td>
											<td colspan=4>
											   <select class='single-input' name='situacao'>
												  <option style='color:rgb(196,61,27);' value='A Tratar'>A Tratar</option>
												  <option style='color:rgb(43,89,189);' value='Existente'>Existente</option>
												  <option style='color:rgb(32,163,101);' value='Realizado'>Realizado</option>
											   </select>
											</td>
											<td align='right' colspan=4><b>Plano: </b></td>
											<td colspan=4><select class='single-input' name='plano'><option value='A'>Plano de Tratamento A</option><option value='Alternativo'>Plano de Tratamento Alternativo</option></select></td>
										 </tr> 
									  </table>
									  <br>
										<input type='submit' value='Salvar' class='genric-btn primary'>
									</form>
								   </center><br>
								</td>
							 </tr>
						  </table>
					   </center>
					</div>
					
				
				<?php
				
				$contador3 = 40;
				while($contador3 < 49){
								echo "
					
					<div id='contenido".$contador3."' style='background-color:white; display:none'  width='100%'>
					   <center>
						  <br> 
						  <h4><b>Dente ".$contador3."</b></h4><hr>
						  <table border=0 width='88%'>
							 <tr>
								<td rowspan=2>
								   <center>
									<form method='POST' action='inserirDente.php'> <input type='hidden' name='semestre' value='".$semestre."'>
									  <input type='hidden' value='".$contador3."' name='dente'>
									  <input type='hidden' name='paciente' value='".$_GET['cpf']."'>
									  <table border=0 width='100%' height='100%'>
										 <tr>
											
											<td colspan=4 align='right'>
											   <b>Diagnóstico: </b>
											</td>
											<td colspan=4>
											   <select class='single-input' name='diagnostico'>
												  ";
									
											$sqlAnam = "SELECT * FROM tb_diagnostico ORDER BY nm_diagnostico";
											$resultadoAnam = mysql_query($sqlAnam) or die();
											while($linhaAnam = mysql_fetch_array($resultadoAnam)){
												echo "<option value='".$linhaAnam['nr_idDiagnostico']."'>".trim($linhaAnam['nm_diagnostico'])."</option>";
											}
									
										echo "
											</select>
											</td>
											<td colspan=4 align='right'>
											  <b>Tratamento: </b>
											</td>
											<td colspan=4>
											   <select class='single-input' name='tratamento'>
									";
									
											$sqlAnam = "SELECT * FROM tb_procedimento ORDER BY nm_procedimento";
											$resultadoAnam = mysql_query($sqlAnam) or die();
											while($linhaAnam = mysql_fetch_array($resultadoAnam)){
												echo "<option value='".$linhaAnam['nr_idProcedimento']."'>".trim($linhaAnam['nm_procedimento'])."</option>";
											}
									
										echo "
											   </select>
											</td>
											
										 </tr>
										 <tr>
											<td colspan=4 align='right'>
											   <b>Face: </b>
											</td>";
											
											echo "
													<td colspan=4>
													   <select class='single-input' name='face'>
													      <option value='Todas'>Todas as Faces</option>
														  <option value='Vestibular'>Vestibular</option>
														  <option value='Distal'>Distal</option>
														  <option value='Lingual/Palatina'>Lingual/Palatina</option>
														  <option value='Mesial'>Mesial</option>
														  <option value='Terco Mesial'>Terço Mesial</option>
														  <option value='Terco Medio'>Terço Médio</option>
														  <option value='Terco Distal'>Terço Distal</option>
											";
											
											if(($contador3 == 41) || ($contador3 == 42) || ($contador3 == 43)){
												echo "
															  <option value='Oclusal'>Incisal</option>
															  <option value='MOD'>MOD</option>
															  <option value='MOV'>MOV</option>
															  <option value='MOL/P'>MOL/P</option>
															  <option value='MV'>MV</option>
															  <option value='ML/P'>ML/P</option>
															  <option value='MD'>MD</option>
															  <option value='OD'>OD</option>
															  <option value='OV'>OV</option>
															  <option value='OL/P'>OL/P</option>
															  <option value='DL/P'>DL/P</option>
															  <option value='DV'>DV</option>
														   </select>
														</td>
												";
											}else{
											
												echo "
															  <option value='Oclusal'>Oclusal</option>
															  <option value='MOD'>MOD</option>
															  <option value='MOV'>MOV</option>
															  <option value='MOL/P'>MOL/P</option>
															  <option value='MV'>MV</option>
															  <option value='ML/P'>ML/P</option>
															  <option value='MD'>MD</option>
															  <option value='OD'>OD</option>
															  <option value='OV'>OV</option>
															  <option value='OL/P'>OL/P</option>
															  <option value='DL/P'>DL/P</option>
															  <option value='DV'>DV</option>
														   </select>
														</td>
												";
											}
											
										echo "
											<td colspan=4  align='right'>
											   <b>Situação: </b>
											</td>
											<td colspan=4>
											   <select class='single-input' name='situacao'>
												  <option style='color:rgb(196,61,27);' value='A Tratar'>A Tratar</option>
												  <option style='color:rgb(43,89,189);' value='Existente'>Existente</option>
												  <option style='color:rgb(32,163,101);' value='Realizado'>Realizado</option>
											   </select>
											</td>
										 </tr>
										 <tr>
											<td align='right' colspan=4><b>Ausente: </b></td>
											<td colspan=4><select class='single-input' name='ausente'><option value='Nao'>Não</option><option value='Sim'>Sim</option></select></td>
											<td align='right' colspan=4><b>Plano: </b></td>
											<td colspan=4><select class='single-input' name='plano'><option value='A'>Plano de Tratamento A</option><option value='Alternativo'>Plano de Tratamento Alternativo</option></select></td>
										 </tr>
										 <tr>
											<td colspan=16><BR></td>
										 </tr>
										 <tr>
											<td colspan=16>
											   <center><b>Repetir Tratamento:</b> <small>(marque abaixo)</small></center>
											</td>
										 </tr>
										 <tr>
											<td colspan=16>
													<center>
													<table width='100%'>
													 <tr>
														<td>
														   <center><input type='checkbox' name='repetir18'> 18</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir17'> 17</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir16'> 16</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir15'> 15</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir14'> 14</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir13'> 13</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir12'> 12</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir11'> 11</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir21'> 21</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir22'> 22</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir23'> 23</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir24'> 24</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir25'> 25</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir26'> 26</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir27'> 27</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir28'> 28</center>
														</td>
													 </tr>
													 <tr>
														<td>
														   <center><input type='checkbox' name='repetir48'> 48</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir47'> 47</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir46'> 46</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir45'> 45</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir44'> 44</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir43'> 43</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir42'> 42</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir41'> 41</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir31'> 31</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir32'> 32</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir33'> 33</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir34'> 34</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir35'> 35</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir36'> 36</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir37'> 37</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir38'> 38</center>
														</td>
													 </tr>
													</table>
												</center>
											</td>
										 </tr>
									  </table>
									  <br>
										<input type='submit' value='Salvar' class='genric-btn primary'>
									</form>
								   </center><br>
								</td>
							 </tr>
						  </table>
					   </center>
					</div>
					
					";
					$contador3 = $contador3 + 1;
				}
				
				$contador4 = 30;
				while($contador4 < 39){
								echo "
					
					<div id='contenido".$contador4."' style='background-color:white; display:none'  width='100%'>
					   <center>
						  <br> 
						  <h4><b>Dente ".$contador4."</b></h4><hr>
						  <table border=0 width='88%'>
							 <tr>
								<td rowspan=2>
								   <center>
									<form method='POST' action='inserirDente.php'> <input type='hidden' name='semestre' value='".$semestre."'>
									  <input type='hidden' value='".$contador4."' name='dente'>
									  <input type='hidden' name='paciente' value='".$_GET['cpf']."'>
									  <table border=0 width='100%' height='100%'>
										 <tr>
											
											<td colspan=4 align='right'>
											   <b>Diagnóstico: </b>
											</td>
											<td colspan=4>
											   <select class='single-input' name='diagnostico'>
												  ";
									
											$sqlAnam = "SELECT * FROM tb_diagnostico ORDER BY nm_diagnostico";
											$resultadoAnam = mysql_query($sqlAnam) or die();
											while($linhaAnam = mysql_fetch_array($resultadoAnam)){
												echo "<option value='".$linhaAnam['nr_idDiagnostico']."'>".trim($linhaAnam['nm_diagnostico'])."</option>";
											}
									
										echo "
											</select>
											</td>
											<td colspan=4 align='right'>
											  <b>Tratamento: </b>
											</td>
											<td colspan=4>
											   <select class='single-input' name='tratamento'>
									";
									
											$sqlAnam = "SELECT * FROM tb_procedimento ORDER BY nm_procedimento";
											$resultadoAnam = mysql_query($sqlAnam) or die();
											while($linhaAnam = mysql_fetch_array($resultadoAnam)){
												echo "<option value='".$linhaAnam['nr_idProcedimento']."'>".trim($linhaAnam['nm_procedimento'])."</option>";
											}
									
										echo "
											   </select>
											</td>
											
										 </tr>
										 <tr>
											<td colspan=4 align='right'>
											   <b>Face: </b>
											</td>";
											
											echo "
													<td colspan=4>
													   <select class='single-input' name='face'>
													      <option value='Todas'>Todas as Faces</option>
														  <option value='Vestibular'>Vestibular</option>
														  <option value='Distal'>Distal</option>
														  <option value='Lingual/Palatina'>Lingual/Palatina</option>
														  <option value='Mesial'>Mesial</option>
														  <option value='Terco Mesial'>Terço Mesial</option>
														  <option value='Terco Medio'>Terço Médio</option>
														  <option value='Terco Distal'>Terço Distal</option>
											";
											
											if(($contador4 == 31) || ($contador4 == 32) || ($contador4 == 33)){
												echo "
															  <option value='Oclusal'>Incisal</option>
															  <option value='MOD'>MOD</option>
															  <option value='MOV'>MOV</option>
															  <option value='MOL/P'>MOL/P</option>
															  <option value='MV'>MV</option>
															  <option value='ML/P'>ML/P</option>
															  <option value='MD'>MD</option>
															  <option value='OD'>OD</option>
															  <option value='OV'>OV</option>
															  <option value='OL/P'>OL/P</option>
															  <option value='DL/P'>DL/P</option>
															  <option value='DV'>DV</option>
														   </select>
														</td>
												";
											}else{
											
												echo "
															  <option value='Oclusal'>Oclusal</option>
															  <option value='MOD'>MOD</option>
															  <option value='MOV'>MOV</option>
															  <option value='MOL/P'>MOL/P</option>
															  <option value='MV'>MV</option>
															  <option value='ML/P'>ML/P</option>
															  <option value='MD'>MD</option>
															  <option value='OD'>OD</option>
															  <option value='OV'>OV</option>
															  <option value='OL/P'>OL/P</option>
															  <option value='DL/P'>DL/P</option>
															  <option value='DV'>DV</option>
														   </select>
														</td>
												";
											}
											
										echo "
											<td colspan=4  align='right'>
											   <b>Situação: </b>
											</td>
											<td colspan=4>
											   <select class='single-input' name='situacao'>
												  <option style='color:rgb(196,61,27);' value='A Tratar'>A Tratar</option>
												  <option style='color:rgb(43,89,189);' value='Existente'>Existente</option>
												  <option style='color:rgb(32,163,101);' value='Realizado'>Realizado</option>
											   </select>
											</td>
										 </tr>
										 <tr>
											<td align='right' colspan=4><b>Ausente: </b></td>
											<td colspan=4><select class='single-input' name='ausente'><option value='Nao'>Não</option><option value='Sim'>Sim</option></select></td>
											<td align='right' colspan=4><b>Plano: </b></td>
											<td colspan=4><select class='single-input' name='plano'><option value='A'>Plano de Tratamento A</option><option value='Alternativo'>Plano de Tratamento Alternativo</option></select></td>
										 </tr>
										 <tr>
											<td colspan=16><BR></td>
										 </tr>
										 <tr>
											<td colspan=16>
											   <center><b>Repetir Tratamento:</b> <small>(marque abaixo)</small></center>
											</td>
										 </tr>
										 <tr>
											<td colspan=16>
													<center>
													<table width='100%'>
													 <tr>
														<td>
														   <center><input type='checkbox' name='repetir18'> 18</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir17'> 17</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir16'> 16</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir15'> 15</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir14'> 14</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir13'> 13</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir12'> 12</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir11'> 11</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir21'> 21</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir22'> 22</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir23'> 23</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir24'> 24</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir25'> 25</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir26'> 26</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir27'> 27</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir28'> 28</center>
														</td>
													 </tr>
													 <tr>
														<td>
														   <center><input type='checkbox' name='repetir48'> 48</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir47'> 47</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir46'> 46</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir45'> 45</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir44'> 44</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir43'> 43</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir42'> 42</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir41'> 41</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir31'> 31</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir32'> 32</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir33'> 33</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir34'> 34</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir35'> 35</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir36'> 36</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir37'> 37</center>
														</td>
														<td>
														   <center><input type='checkbox' name='repetir38'> 38</center>
														</td>
													 </tr>
													</table>
												</center>
											</td>
										 </tr>
									  </table>
									  <br>
										<input type='submit' value='Salvar' class='genric-btn primary'>
									</form>
								   </center><br>
								</td>
							 </tr>
						  </table>
					   </center>
					</div>
					
					";
					$contador4 = $contador4 + 1;
				}
				
				?>
				
			</center><br>
			<!-- ####################### FIM DO ODONTOGRAMA ####################### -->
		</div>		

		<h1 class="mb-30"><br><center>Plano de Tratamento A <a href='editarPermanente.php?cpf=<?php echo $_GET['cpf']; ?>&semestre=<?php echo $semestre; ?>'><img src='icones/edit.png'></a></center></h1>
						<form method='POST' action='acoesConjunto.php' novalidate>
						<input type='hidden' name='semestre' value='<?php echo $semestre; ?>'>
						<?php
						
						$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente=0 AND nm_face='0' AND nr_idTratamento=0 AND nr_diagnostico=0 AND nr_periodo = '".$semestre."' AND nm_plano='A'";
						$resultadoAnam = mysql_query($sqlAnam) or die();
						$numImg = mysql_num_rows($resultadoAnam);
						
						$sqlDisc = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_periodo = '".$semestre."' AND nm_disciplina != '' LIMIT 1";
						$resultadoDisc = mysql_query($sqlDisc) or die();
						while($linhaDisc = mysql_fetch_array($resultadoDisc)){
							echo "<center>Disciplina(s) Associada(s): ".$linhaDisc['nm_disciplina']." &nbsp; <a href='escolherDisciplina.php?cpf=".$_GET['cpf']."&semestre=".$semestre."'><b>+</b></a></center><br>";
						}
						
						if($numImg == 1){
							echo "<center><b>Ainda não foi cadastrado nenhum tratamento!</b></center>";
						}else{
						?>
					<center>
						<table width='95%' border=0>
							<tr>
								<td width='30px'></td>
								<td><center><h5>Dente / Região</h5></center></td>
								<td><center><h5>Face</h5></center></td>
								<td><center><h5>Diagnóstico</h5></center></td>
								<td><center><h5>Tratamento</h5></center></td>
								<td><center><h5>Data de Inclusão</h5></center></td>
								<td><center><h5>Data de Realização</h5></center></td>
								<td><center><h5>Situação</h5></center></td>
								<td><center><h5>Dupla</h5></center></td>
								<td><center><h5>Prof. Responsável</h5></center></td>
								<td width='30px'></td>
							</tr>
							
							<?php
							$l = 0;
							$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_periodo = '".$semestre."' AND nm_plano='A' ORDER BY nr_dente";
							$resultadoAnam = mysql_query($sqlAnam) or die();
							while($linhaAnam = mysql_fetch_array($resultadoAnam)){
								
								$sqlAnam2 = "SELECT * FROM tb_procedimento WHERE nr_idProcedimento =".$linhaAnam['nr_idTratamento'];
								$resultadoAnam2 = mysql_query($sqlAnam2) or die();
								while($linhaAnam2 = mysql_fetch_array($resultadoAnam2)){
									$proced = $linhaAnam2['nm_procedimento'];
								}
								
								switch($linhaAnam['nm_situacao']){
									case "A Tratar":
										$cor = "red";
									break;
									
									case "Existente":
										$cor = "rgb(43,89,189)";
									break;
									
									case "Realizado":
										$cor = "rgb(32,163,101)";
									break;
								}
								
								if($linhaAnam['nm_professor'] == 'N/R' && $linhaAnam['nm_situacao'] == 'Realizado'){
									$link = "<a style='color:".$cor.";' href='loginAprovarTratamento.php?cpf=".$_GET['cpf']."&semestre=".$semestre."&tratamento=".$linhaAnam['nr_idOdontograma']."'>Validar</a>";
									
								}else{
									
									if($linhaAnam['nm_professor'] == 'N/R'){
										$link = $linhaAnam['nm_professor'];
									}else{
										$sqlProf = "SELECT * FROM tb_funcionarios WHERE nr_cpfFuncionario = '".$linhaAnam['nm_professor']."'";
										$resultadoProf = mysql_query($sqlProf) or die();
										while($linhaProf = mysql_fetch_array($resultadoProf)){
											$link = $linhaProf['nm_nomeFuncionario']." <img src='icones/aprovado.png'><a href='confirmarDesfazer.php?cpf=".$_GET['cpf']."&semestre=".$semestre."&id=".$linhaAnam['nr_idOdontograma']."' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Desfazer Aprovação'><img src='icones/delete.png'></a>";
										}
									}
									
								}
								
								
								switch($linhaAnam['nr_dente']){
									case "arcada_inferior":
										$dente = "Arcada Inferior";
									break;
									
									case "arcada_superior":
										$dente = "Arcada Superior";
									break;
									
									case "arcada_completa":
										$dente = "Arcada Superior e Inferior";
									break;
									
									default:
										$dente = $linhaAnam['nr_dente'];
								}
								
								if(($linhaAnam['nm_face'] == 'Oclusal') && (($dente == '11') || ($dente == '12')|| ($dente == '13')|| ($dente == '21')|| ($dente == '22')|| ($dente == '23')|| ($dente == '31')|| ($dente == '32')|| ($dente == '33')|| ($dente == '41')|| ($dente == '42')|| ($dente == '43'))){
									$face = "Incisal";
								}else{
									$face = $linhaAnam['nm_face'];
								}
								
								if($linhaAnam['nm_professor'] == 'N/R' && ($linhaAnam['nm_situacao'] == 'A Tratar')){
									
									$editar = "<a href='' data-toggle='modal' data-target='#modalExemplo2".$linhaAnam['nr_idOdontograma']."'><img src='icones/delete.png'></a>";
									echo "
										
										<div class='modal fade' id='modalExemplo2".$linhaAnam['nr_idOdontograma']."' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
										  <div class='modal-dialog' role='document'>
											<div class='modal-content'>
											  <div class='modal-header'>
												<h5 class='modal-title' id='exampleModalLabel'>Editar Tratamento</h5>
												<button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>
												  <span aria-hidden='true'>&times;</span>
												</button>
											  </div>
											  <div class='modal-body'>
												<b><p>Dente: ".$dente." / Face ou Região: ".$face."</p></b>
													<hr>
													<a class='genric-btn success' href='excluirTratamento.php?id=".$linhaAnam['nr_idOdontograma']."&cpf=".$_GET['cpf']."&semestre=".$semestre."'>Tem certeza que deseja excluir este tratamento?</a>
													<hr>
											  </div>
											</div>
										  </div>
										</div>
									
									";
									
									
								}else{
									if($linhaAnam['nm_situacao'] == 'Realizado'){
										$editar = '';
									}else{
										$editar = "<a href='excluirTratamento.php?id=".$linhaAnam['nr_idOdontograma']."&cpf=".$_GET['cpf']."&semestre=".$semestre."'><img src='icones/delete.png'></a>";	
									}
								}
								
								if(($l%2) == 0){
									$cor2 = "rgb(240,240,240)";
								}else{
									$cor2 = "white";
								}
								
								$sqlNome = "SELECT * FROM tb_duplas WHERE nr_idDupla =".$linhaAnam['nr_idDupla'];
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
																
																
									$dupla = $nome1." e ".$nome2;
								}
								
								if($linhaAnam['dt_realizacao'] == "N/R"){
									$dataR = 'N/A';
								}else{
									$dataR = $linhaAnam['dt_realizacao'];
								}
								
								if($linhaAnam['nr_diagnostico'] == 0){
									$diagnostico = 'Dente Ausente';
									$proced = '-';
								}else{
									$sqlNome2 = "SELECT * FROM tb_diagnostico WHERE nr_idDiagnostico = ".$linhaAnam['nr_diagnostico'];
										$resultadoNome2 = mysql_query($sqlNome2) or die();
										while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
											$diagnostico = $linhaNome2['nm_diagnostico']; 
										}
								}
								
								
								
							
								echo "
								
								<tr style='background-color: ".$cor2."; color:".$cor."'>
									<td><center><input type='checkbox' name='".$linhaAnam['nr_idOdontograma']."'></center></td>
									<td><center>".$dente."</center></td>
									<td><center>".$face."</center></td>
									<td><center>".$diagnostico."</center></td>
									<td><center>".$proced."</center></td>
									<td><center>".$linhaAnam['dt_inclusao']."</center></td>
									<td><center>".$dataR."</td>
									<td><center>".$linhaAnam['nm_situacao']."</center></td>
									<td><center>".$dupla."</td>
									<td><center>".$link."</td>
									<td><center>".$editar."</td>
								</tr>
								
								";
								$l = $l + 1;
							}
							
							?>
						</table>
						<br><br>
							<input type='hidden' name='cpf' value='<?php echo $_GET['cpf']; ?>'>
							
							<table border=0 width='60%'>
								<tr>
									<td><center> <input type='radio' name='lote' value='realizado'> &nbsp;&nbsp; <b>Realizado Em Conjunto</b></center></td>
									<td><center> <input type='radio' name='lote' value='aprovar'> &nbsp;&nbsp; <b>Validar Em Conjunto</b></center></td>
								</tr>
								<tr>
									<td valign='top'><input type='date' name='data'  class='single-input'></td>
									<td>
										<input type='text' name='login' placeholder = 'ID do Professor' class='single-input'><br>
										<input type='password' name='senha' placeholder = 'Senha do Professor' class='single-input'>
									</td>
								</tr>
							</table>
							<br>
							<input type='submit' value='Operação em Conjunto'  class='genric-btn success'> &nbsp; <a  data-toggle='modal' data-target='#modalExclusao'><img src='icones/delete.png'   data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Excluir Odontograma'></a>
						</form>
						<?php
						}
						?>
					</center>
		<br>
		
		
		
		<h1 class="mb-30"><br><center>Plano de Tratamento Alternativo <a href='editarPermanente.php?cpf=<?php echo $_GET['cpf']; ?>&semestre=<?php echo $semestre; ?>'><img src='icones/edit.png'></a></center></h1>
						<form method='POST' action='acoesConjunto.php' novalidate>
						<input type='hidden' name='semestre' value='<?php echo $semestre; ?>'>
						<?php
						
						$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente=0 AND nm_face='0' AND nr_idTratamento=0 AND nr_diagnostico=0 AND nr_periodo = '".$semestre."' AND nm_plano='Alternativo'";
						$resultadoAnam = mysql_query($sqlAnam) or die();
						$numImg = mysql_num_rows($resultadoAnam);
						
						$sqlDisc = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_periodo = '".$semestre."' AND nm_disciplina != '' LIMIT 1";
						$resultadoDisc = mysql_query($sqlDisc) or die();
						while($linhaDisc = mysql_fetch_array($resultadoDisc)){
							echo "<center>Disciplina(s) Associada(s): ".$linhaDisc['nm_disciplina']." &nbsp; <a href='escolherDisciplina.php?cpf=".$_GET['cpf']."&semestre=".$semestre."'><b>+</b></a></center><br>";
						}
						
						if($numImg == 1){
							echo "<center><b>Ainda não foi cadastrado nenhum tratamento!</b></center>";
						}else{
						?>
					<center>
						<table width='95%' border=0>
							<tr>
								<td width='30px'></td>
								<td><center><h5>Dente / Região</h5></center></td>
								<td><center><h5>Face</h5></center></td>
								<td><center><h5>Diagnóstico</h5></center></td>
								<td><center><h5>Tratamento</h5></center></td>
								<td><center><h5>Data de Inclusão</h5></center></td>
								<td><center><h5>Data de Realização</h5></center></td>
								<td><center><h5>Situação</h5></center></td>
								<td><center><h5>Dupla</h5></center></td>
								<td><center><h5>Prof. Responsável</h5></center></td>
								<td width='30px'></td>
							</tr>
							
							<?php
							$l = 0;
							$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_periodo = '".$semestre."' AND nm_plano='Alternativo' ORDER BY nr_dente";
							$resultadoAnam = mysql_query($sqlAnam) or die();
							while($linhaAnam = mysql_fetch_array($resultadoAnam)){
								
								$sqlAnam2 = "SELECT * FROM tb_procedimento WHERE nr_idProcedimento =".$linhaAnam['nr_idTratamento'];
								$resultadoAnam2 = mysql_query($sqlAnam2) or die();
								while($linhaAnam2 = mysql_fetch_array($resultadoAnam2)){
									$proced = $linhaAnam2['nm_procedimento'];
								}
								
								switch($linhaAnam['nm_situacao']){
									case "A Tratar":
										$cor = "red";
									break;
									
									case "Existente":
										$cor = "rgb(43,89,189)";
									break;
									
									case "Realizado":
										$cor = "rgb(32,163,101)";
									break;
								}
								
								if($linhaAnam['nm_professor'] == 'N/R' && $linhaAnam['nm_situacao'] == 'Realizado'){
									$link = "<a style='color:".$cor.";' href='loginAprovarTratamento.php?cpf=".$_GET['cpf']."&semestre=".$semestre."&tratamento=".$linhaAnam['nr_idOdontograma']."'>Validar</a>";
								}else{
									
									if($linhaAnam['nm_professor'] == 'N/R'){
										$link = $linhaAnam['nm_professor'];
									}else{
										$sqlProf = "SELECT * FROM tb_funcionarios WHERE nr_cpfFuncionario = '".$linhaAnam['nm_professor']."'";
										$resultadoProf = mysql_query($sqlProf) or die();
										while($linhaProf = mysql_fetch_array($resultadoProf)){
											$link = $linhaProf['nm_nomeFuncionario']." <img src='icones/aprovado.png'> &nbsp; <a href='confirmarDesfazer.php?cpf=".$_GET['cpf']."&semestre=".$semestre."&id=".$linhaAnam['nr_idOdontograma']."' data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Desfazer Aprovação'><img src='icones/delete.png'></a>";
											
										}
									}
									
								}
								
								switch($linhaAnam['nr_dente']){
									case "arcada_inferior":
										$dente = "Arcada Inferior";
									break;
									
									case "arcada_superior":
										$dente = "Arcada Superior";
									break;
									
									case "arcada_completa":
										$dente = "Arcada Superior e Inferior";
									break;
									
									default:
										$dente = $linhaAnam['nr_dente'];
								}
								
								if(($linhaAnam['nm_face'] == 'Oclusal') && (($dente == '11') || ($dente == '12')|| ($dente == '13')|| ($dente == '21')|| ($dente == '22')|| ($dente == '23')|| ($dente == '31')|| ($dente == '32')|| ($dente == '33')|| ($dente == '41')|| ($dente == '42')|| ($dente == '43'))){
									$face = "Incisal";
								}else{
									$face = $linhaAnam['nm_face'];
								}
								
								if($linhaAnam['nm_professor'] == 'N/R' && ($linhaAnam['nm_situacao'] == 'A Tratar')){
									
									$editar = "<a href='' data-toggle='modal' data-target='#modalExemplo2".$linhaAnam['nr_idOdontograma']."'><img src='icones/delete.png'></a>";
									echo "
										
										<div class='modal fade' id='modalExemplo2".$linhaAnam['nr_idOdontograma']."' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
										  <div class='modal-dialog' role='document'>
											<div class='modal-content'>
											  <div class='modal-header'>
												<h5 class='modal-title' id='exampleModalLabel'>Editar Tratamento</h5>
												<button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>
												  <span aria-hidden='true'>&times;</span>
												</button>
											  </div>
											  <div class='modal-body'>
												<b><p>Dente: ".$dente." / Face ou Região: ".$face."</p></b>
													<hr>
													<a class='genric-btn success' href='excluirTratamento.php?id=".$linhaAnam['nr_idOdontograma']."&cpf=".$_GET['cpf']."&semestre=".$semestre."'>Tem certeza que deseja excluir este tratamento?</a>
													<hr>
											  </div>
											</div>
										  </div>
										</div>
									
									";
									
									
								}else{
									if($linhaAnam['nm_situacao'] == 'Realizado'){
										$editar = '';
									}else{
										$editar = "<a href='excluirTratamento.php?id=".$linhaAnam['nr_idOdontograma']."&cpf=".$_GET['cpf']."&semestre=".$semestre."'><img src='icones/delete.png'></a>";	
									}
								}
								
								if(($l%2) == 0){
									$cor2 = "rgb(240,240,240)";
								}else{
									$cor2 = "white";
								}
								
								$sqlNome = "SELECT * FROM tb_duplas WHERE nr_idDupla =".$linhaAnam['nr_idDupla'];
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
																
																
									$dupla = $nome1." e ".$nome2;
								}
								
								if($linhaAnam['dt_realizacao'] == "N/R"){
									$dataR = 'N/A';
								}else{
									$dataR = $linhaAnam['dt_realizacao'];
								}
								
								if($linhaAnam['nr_diagnostico'] == 0){
									$diagnostico = 'Dente Ausente';
									$proced = '-';
								}else{
									$sqlNome2 = "SELECT * FROM tb_diagnostico WHERE nr_idDiagnostico = ".$linhaAnam['nr_diagnostico'];
										$resultadoNome2 = mysql_query($sqlNome2) or die();
										while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
											$diagnostico = $linhaNome2['nm_diagnostico']; 
										}
								}
								
								
								
							
								echo "
								
								<tr style='background-color: ".$cor2."; color:".$cor."'>
									<td><center><input type='checkbox' name='".$linhaAnam['nr_idOdontograma']."'></center></td>
									<td><center>".$dente."</center></td>
									<td><center>".$face."</center></td>
									<td><center>".$diagnostico."</center></td>
									<td><center>".$proced."</center></td>
									<td><center>".$linhaAnam['dt_inclusao']."</center></td>
									<td><center>".$dataR."</td>
									<td><center>".$linhaAnam['nm_situacao']."</center></td>
									<td><center>".$dupla."</td>
									<td><center>".$link."</td>
									<td><center>".$editar."</td>
								</tr>
								
								";
								$l = $l + 1;
							}
							
							?>
						</table>
						<br><br>
							<input type='hidden' name='cpf' value='<?php echo $_GET['cpf']; ?>'>
							
							<table border=0 width='60%'>
								<tr>
									<td><center> <input type='radio' name='lote' value='realizado'> &nbsp;&nbsp; <b>Realizado Em Conjunto</b></center></td>
									<td><center> <input type='radio' name='lote' value='aprovar'> &nbsp;&nbsp; <b>Validar Em Conjunto</b></center></td>
								</tr>
								<tr>
									<td valign='top'><input type='date' name='data'  class='single-input'></td>
									<td>
										<input type='text' name='login' placeholder = 'ID do Professor' class='single-input'><br>
										<input type='password' name='senha' placeholder = 'Senha do Professor' class='single-input'>
									</td>
								</tr>
							</table>
							<br>
							<input type='submit' value='Operação em Conjunto'  class='genric-btn success'> &nbsp; <a  data-toggle='modal' data-target='#modalExclusao'><img src='icones/delete.png'   data-toggle='popover' data-trigger='hover' data-placement='right' data-content='Excluir Odontograma'></a>
						</form>
						<?php
						}
						?>
					</center>
		<br>
		
	<?php
		break;
	}
	?>
	<br>
	<hr>
	<center>
	<form method='POST' action='encerrarTratamento.php'>
		<?php
			echo "<input type='hidden' name='cpf' value='".$_GET['cpf']."'>";
			echo "<input type='hidden' name='semestre' value='".$semestre."'>";
		
			if($encerrado == 'Sim'){
				echo "<h5>Reabrir Tratamento:</h5><br>";
				echo "<b>Motivo do Encerramento:</b> ".$motivo."<br>";
				echo "<input type='hidden' value='reabrir' name='estado'>";
				$botao = "Reabrir";
			}else{
				echo "<h5>Encerrar Tratamento:</h5><br>";
				echo "<input type='hidden' value='fechar' name='estado'>";
				echo "<textarea name='motivo' placeholder='Motivo do Encerramento' class='single-input' style='width:80%;'></textarea>";
				$botao = "Encerrar";
			}
			
			echo "<br><input type='submit' value='".$botao."' class='genric-btn success'>";
		?>
	</form>
	</center>
	<br>
	
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
			
			<script>
			function showHideDiv(ele) {
				var srcElement = document.getElementById(ele);
				if (srcElement != null) {
					if (srcElement.style.display == "block") {
						srcElement.style.display = 'none';
					}
					else {
						srcElement.style.display = 'block';
					}
					return false;
				}
			}
			</script>
		
		</body>
	</html>

<div class='modal fade' id='modalExclusao' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
	<div class='modal-dialog' role='document'>
		<div class='modal-content'>
		  <div class='modal-header'>
			<h5 class='modal-title' id='exampleModalLabel'>Excluir Odontograma</h5>
			<button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>
			  <span aria-hidden='true'>&times;</span>
			</button>
		  </div>
		  <div class='modal-body'>
			<b><p>Tem certeza que deseja excluir este Odontograma?</p></b>
			<form method='POST' action='excluirOdontograma.php'>
				<input type='hidden' name='cpf' value='<?php echo $_GET['cpf']; ?>'>
				<input type='hidden' name='semestre' value='<?php echo $semestre; ?>'>
				<input type='text' name='login' placeholder = 'ID do Professor' class='single-input'><br>
				<input type='password' name='senha' placeholder = 'Senha do Professor' class='single-input'><br>
				<input type='submit' class='genric-btn success' value='Excluir'>
			</form>
			<hr>
		  </div>
		</div>
	</div>
</div>
	
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