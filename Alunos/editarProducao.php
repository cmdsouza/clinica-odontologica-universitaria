<?php
	session_start();
	date_default_timezone_set('america/sao_paulo');
	include "../conexao.php";
	/*$sqlNome = "SELECT * FROM tb_paciente WHERE nr_cpfPaciente ='".$_GET['cpf']."'";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$paciente = $linhaNome['nm_nomePaciente'];
		$sexo = $linhaNome['nm_genero'];
	}*/
	
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
								<h2 class="text-white">Consulta de Documentos</h2>
								<p class='text-white'>Alterar Informações da Produção Clínica!</p>
							</div>							
						</div>
					</div>
				</div>
			</section>		
			<!-- End banner Area -->
		
		<br>
		
			<section class="price-area " id="price">
				<div class="container">				
					<h4>Alterar a Produção Clínica:</h4><br>
					<center>
					
					<?php
					
					
					$a=0;
					$sqlProd = "SELECT * FROM tb_producaoclinica WHERE nr_idProducao=".$_GET['id'];
					$resultadoProd = mysql_query($sqlProd) or die();
					while($linhaProd = mysql_fetch_array($resultadoProd)){
						
						echo "<h5>".$linhaProd['nm_disciplina']."</h5><br>";
						
						if(($a%2) == 0){
							$cor2 = "rgb(240,240,240)";
						}else{
							$cor2 = "white";
						}
						
						$sqlProd2 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = ".$linhaProd['nr_cpfAluno'];
						$resultadoProd2 = mysql_query($sqlProd2) or die();
						while($linhaProd2 = mysql_fetch_array($resultadoProd2)){
							$aluno = $linhaProd2['nm_nomeAluno'];						
						}
						
						if($linhaProd['nm_validacao'] == 'N/R'){
							$acao = 'Ainda não validado!';
						}else{
							$sqlProd3 = "SELECT * FROM tb_funcionarios WHERE nr_cpfFuncionario = ".$linhaProd['nm_validacao'];
							$resultadoProd3 = mysql_query($sqlProd3) or die();
							while($linhaProd3 = mysql_fetch_array($resultadoProd3)){
								$acao = "<img src='icones/aprovado.png'> &nbsp;".$linhaProd3['nm_nomeFuncionario'];						
							}
						}
						;
						
						echo "
						
							  <form method='POST' action='alterarProducao.php'>
								<h5 class='modal-title' id='exampleModalLabel'>Alterar Informações: ".$aluno."</h5><br>
								
									<input type='hidden' value='".$linhaProd['nr_idProducao']."' name='id'>
								<table width='50%'>
									<tr>
										<td><b>Turma:</b></td><td><input type='text' name='turma' value='".$linhaProd['nm_turma']."' class='single-input'><td>
									</tr>
									<tr>
										<td><b>Data:</b></td><td><input type='text' name='data' value='".$linhaProd['dt_data']."' class='single-input'><td>
									</tr>
									<tr>
										<td><b>Observações:</b></td><td><textarea name='5' class='single-input'>".$linhaProd['5']."</textarea><td>
									</tr>
									<tr>
										<td><b>Procedimento Realizado:</b></td><td><textarea name='6' class='single-input'>".$linhaProd['6']."</textarea><td>
									</tr>
								</table>
									<hr>
									<input type='text' name='login' placeholder = 'ID do Professor' class='single-input' required><br>
									<input type='password' name='senha' placeholder = 'Senha do Professor' class='single-input' required>
									
								<br>	
								<input type='submit' class='genric-btn success' value='Salvar Mudanças'>
								<a class='genric-btn success' href='producaoClinica.php'>Voltar</a>
								
						";
					}
					
					?>
					
					
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