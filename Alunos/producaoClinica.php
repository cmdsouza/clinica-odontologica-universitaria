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
								<p class='text-white'>Preencha as Informações da Produção Clínica, Consulte-o e/ou Realize a Impressão!</p>
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
					<h4>Preencha uma nova Produção Clínica:</h4><br>
					<center>
					<form method='POST' action='salvarproducao.php'>	
						<table width='100%' border=0 style='font-color:black;'>
							<tr>
								<td align='right'><b>Disciplina: &nbsp; </b></td>
								<td>
									<select  class='single-input' name='disciplina'>
										<option value='Estágio - Clínica Integrada III'>Estágio - Clínica Integrada III</option>
										<option value='Clínica Integrada II'>Clínica Integrada II</option>
										<option value='Clínica Integrada I'>Clínica Integrada I</option>
										<option value='Clínica Infantil I'>Clínica Infantil I</option>
										<option value='Clínica Infantil II'>Clínica Infantil II</option>
										<option value='Clínica PNE'>Clínica PNE</option>
									</select>
								</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td align='right'><b>Aluno: &nbsp; </b></td>
								<td>
									<select class='single-input' name='aluno'>
										<?php
											$sqlNome = "SELECT * FROM tb_aluno ORDER BY nm_nomeAluno";
											$resultadoNome = mysql_query($sqlNome) or die();
											while($linhaNome = mysql_fetch_array($resultadoNome)){
												echo "<option value='".$linhaNome['nr_cpfAluno']."'>".$linhaNome['nm_nomeAluno']." (".$linhaNome['nr_periodo']."º período)</option>";
											}
										?>
									</select>
								</td>
							</tr>
							<tr>
								<td align='right'><b>Turma: &nbsp; </b></td>
								<td><input type='text' name='turma' class='single-input'></td>
								<td>&nbsp; &nbsp; &nbsp; <input type='radio' name='periodo' value='Integral'>  &nbsp; Integral</td>
								<td>&nbsp; &nbsp;<input type='radio' name='periodo' value='Noturno'> &nbsp; Noturno</td>
							</tr>
						</table>
						<br>
						
						
						<br>
					</center>
				</div>
			</section>
			
					<center>
						<table width='90%' border=0 style='font-color:black;'>
							<tr>
								<td><b><center>Data</center></b></td>
								<!--<td><b><center>Assiduidade / Pontualidade</center></b></td>
								<td><b><center>EPI /<br> Biossegurança</center></b></td>
								<td><b><center>Instrumentais /<br> Materiais</center></b></td>
								<td><b><center>Trabalho <br> Executado</center></b></td>
								<td><b><center>Total</center></b></td>-->
								<td><b><center>Procedimento Realizado</center></b></td>
								<td><b><center>Observações</center></b></td>
							</tr>
							
							<tr>
								<td><center><input type='text' name='data' class='single-input'></center></td>
								<!--<td><center><input type='text' name='1' class='single-input'></center></td>
								<td><center><input type='text' name='2' class='single-input'></center></td>
								<td><center><input type='text' name='3' class='single-input'></center></td>
								<td><center><input type='text' name='4' class='single-input'></center></td>-->
								<td><center><input type='text' name='6' class='single-input'></center></td>
								<td><center><input type='text' name='5' class='single-input'  placeholder='Campo Exclusivo do Professor' disabled></center></td>
							</tr>
							
							<tr><td colspan=8><center><br></center></td></tr>
							<tr><td colspan=8><center><input type='submit' value='Salvar' class='genric-btn success'></center></td></tr>
						</table>
						</form>
					</center>
				<br><br>
					
			<section class="price-area " id="price">
				<div class="container">				
					<h4>Consulte a Produção Clínica:</h4><br>
					<center>
					
					<form method='GET' action='imprimirProducaoClinica.php'>
					<table>
						<tr>
							<td>
								<select class='single-input' name='aluno'>
									<?php
										$sqlNome = "SELECT * FROM tb_aluno ORDER BY nm_nomeAluno";
										$resultadoNome = mysql_query($sqlNome) or die();
										while($linhaNome = mysql_fetch_array($resultadoNome)){
											echo "<option value='".$linhaNome['nr_cpfAluno']."'>".$linhaNome['nm_nomeAluno']." (".$linhaNome['nr_periodo']."º período)</option>";
										}
									?>
								</select>
							</td>
							<input type='hidden' name='disciplina' value='ESTAGIO - CLINICA INTEGRADA III'>
							<td>
									<select  class='single-input' name='disciplina'>
										<option value='Estágio - Clínica Integrada III'>Estágio - Clínica Integrada III</option>
										<option value='Clínica Integrada II'>Clínica Integrada II</option>
										<option value='Clínica Integrada I'>Clínica Integrada I</option>
										<option value='Clínica Infantil I'>Clínica Infantil I</option>
										<option value='Clínica Infantil II'>Clínica Infantil II</option>
										<option value='Clínica PNE'>Clínica PNE</option>
									</select>
								</td>
							<td><input type='submit' value='Imprimir Produção Clínica' class='genric-btn success'></td>
						</tr>
					</table>
					</form>
					
					<hr>
					<?php
						$sqlProdOficial = "SELECT * FROM tb_producaoclinica GROUP BY nm_disciplina";
						$resultadoProdOficial = mysql_query($sqlProdOficial) or die();
						while($linhaProdOficial = mysql_fetch_array($resultadoProdOficial)){
							$sqlProd2 = "SELECT * FROM tb_producaoclinica WHERE nm_disciplina = '".$linhaProdOficial['nm_disciplina']."'";
							$resultadoProd2 = mysql_query($sqlProd2) or die();
							while($linhaProd2 = mysql_fetch_array($resultadoProd2)){
					?>

							<div id="accordion">
							  <div class="card">
								<div class="card-header" id="headingOne">
								  <h5 class="mb-0">
									<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne<?php echo $linhaProd2['nr_idProducao']; ?>" aria-expanded="false" aria-controls="collapseOne" style='color:red;'>
									  <?php echo $linhaProdOficial['nm_disciplina']; ?>
									</button>
								  </h5>
								</div>

								<div id="collapseOne<?php echo $linhaProd2['nr_idProducao']; ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
								  <div class="card-body">
								  <?php
								//ESTAGIO - CLINICA INTEGRADA III
								
								echo "
									<form method='POST' action='producaoConjunto.php'>
									<table>
										<tr>
											<td width='2%'><center></center></td>
											<td width='10%'><center><b>Aluno /<br> Turma </b></center></td>
											<td width='10%'><center><b>Data</b></center></td>
											<td width='10%'><center><b>Procedimento <br> Realizado</b></center></td>
											<td width='10%'><center><b>Observações</b></center></td>
											<td width='10%'><center></center></td>
											<td width='2%'><center></center></td>
										</tr>
								
								";
								$a=0;
								$sqlProd = "SELECT * FROM tb_producaoclinica WHERE nm_disciplina = '".$linhaProdOficial['nm_disciplina']."' ORDER BY nr_idProducao";
								$resultadoProd = mysql_query($sqlProd) or die();
								while($linhaProd = mysql_fetch_array($resultadoProd)){
									
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
									
									
									echo "
											<tr style='background-color:".$cor2."'>
												<td><center><input type='checkbox' name='".$linhaProd['nr_idProducao']."'></center></td>
												<td><center>".$aluno." (Turma: ".$linhaProd['nm_turma'].")</center></td>
												<td><center>".$linhaProd['dt_data']."</center></td>
												<td><center>".$linhaProd['6']."</center></td>
												<td><center>".$linhaProd['5']."</center></td>
												<td><center>".$acao."</center></td>
												<td><center><a href='editarProducao.php?id=".$linhaProd['nr_idProducao']."'> <img src='icones/edit.png'></center> </a></td>
											</tr>
									
									";
									
									$a = $a + 1;
								}
								
								echo "</table>";
								
								echo "
								
								<br><br>
										<table border=0 width='60%'>
											<tr>
												<td><center> <input type='radio' name='lote' value='excluir'> &nbsp;&nbsp; <b>Excluir Em Conjunto</b></center></td>
												<td><center> <input type='radio' name='lote' value='aprovar'> &nbsp;&nbsp; <b>Validar Em Conjunto</b></center></td>
											</tr>
											<tr>
												<td colspan=2>
													<input type='text' name='login' placeholder = 'ID do Professor' class='single-input'><br>
													<input type='password' name='senha' placeholder = 'Senha do Professor' class='single-input'>
												</td>
											</tr>
										</table>
										<br>
										<input type='submit' value='Operação em Conjunto'  class='genric-btn success'>
								
								";
								
								echo "</form>";
								?>
								  
								  
								  </div>
								</div>
							 </div>
							</div><br>

					<?php
								
							}
							
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