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
}

$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."'";
$resultadoAnam = mysql_query($sqlAnam) or die();
$numImg = mysql_num_rows($resultadoAnam);
if($numImg == 0){
	$sqlAnam2 = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."'";
	$resultadoAnam2 = mysql_query($sqlAnam2) or die();
	$numImg2 = mysql_num_rows($resultadoAnam2);
	if($numImg2 == 0){
	
	$anamnese = "Primeira";

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
			
		<style>
			#table {
			  border: 1px solid rgb(59,172,240);
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
								
										echo "<h2 class='text-white'>Iniciar o Cadastro do Odontograma ".$d." ".$paciente."</h2>";
								?>
							</div>							
						</div>
					</div>
				</div>
			</section>		
			<!-- End banner Area -->
		
		<!-- About Generic Start -->
		<div class="main-wrapper">	

				<div class="whole-wrap">
				<div class="container"><br><br>
					<div class="section">
						<h1 class="mb-30">Odontograma</h1>
						<div>
							<div>
								<h4>Tipo de Dentição</h4><br>
									<table>
										<tbody>
											<tr>
											<form method='POST' action='inserirDenticao.php'>
												<input type='hidden' name='paciente' value='<?php echo $_GET['cpf']; ?>'>
												<td><p><input type="radio" name="denticao" value="Permanente" required> &nbsp; Permanente</p></td>
												<td>&nbsp;</td><td>&nbsp;</td>
												<td><p><input type="radio" name="denticao" value="Descidua" required> &nbsp; Descidua ou Mista</p></td>
											</tr>	
										</tbody>
									</table>
									<br><h4>Dupla Responsável</h4><br>
												<select class='single-input' name='dupla'>
												<?php												
															$sqlNome = "SELECT * FROM tb_duplas";
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
																
																
																echo "<option value='".$linhaNome['nr_idDupla']."'>".$nome1." e ".$nome2." (".$periodo."º Periodo)</option>";
															}
												
												?>
												</select><br>
											
											<h4>Professor Responsável</h4><br>
												<select class='single-input' name='professor'>
												<?php												
															$sqlNome = "SELECT * FROM tb_funcionarios WHERE nm_tipo = 'Professor'";
															$resultadoNome = mysql_query($sqlNome) or die();
															while($linhaNome = mysql_fetch_array($resultadoNome)){
																echo "<option value='".$linhaNome['nr_cpfFuncionario']."'>".$linhaNome['nm_nomeFuncionario']."</option>";
															}
												
												?>
												</select><br>			

											<h4>Semestre</h4><br>
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
												</select><br>	

											<h4>Disciplina</h4><br>
												<select class='single-input' name='disciplina'>
													<option value='Estágio Supervisionado III'>Estágio Supervisionado III</option>
													<option value='Clínica Integrada I'>Clínica Integrada I</option>
													<option value='Clínica Integrada II'>Clínica Integrada II</option>
													<option value='Clínica Integrada III'>Clínica Integrada III</option>
													<option value='Clínica Integrada IV'>Clínica Integrada IV</option>
													<option value='Clínica Integrada V'>Clínica Integrada V</option>
													<option value='Clínica Infantil I'>Clínica Infantil I</option>
													<option value='Clínica Infantil II'>Clínica Infantil II</option>
													<option value='Clínica Integrada PNE'>Clínica Integrada PNE</option>
												</select><br>	
											
											<h4>Nome do Responsável / Acompanhante</h4> <small>*Válido somente para Odontograma Infantil</small><br>
												<input type='text' class='single-input' name='responsavel'><br>
											
												<input type='submit' class="genric-btn primary" value='Continuar Odontograma'><br>
											</form>	
											
									
									<br>
									
							</div>
						</div>
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
<?php
	}else{
		header("Location: odontogramainfantil.php?cpf=".$_GET['cpf']);
	}
}else{
	header("Location: odontograma.php?cpf=".$_GET['cpf']);
}

?>

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