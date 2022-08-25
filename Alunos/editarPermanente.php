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
			          <li class="menu-active"><a href="alunos.php#home">Página Inicial</a></li>
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
		

		<h1 class="mb-30"><br><center>Plano de Tratamento</center></h1>
						<input type='hidden' name='semestre' value='<?php echo $_GET['semestre']; ?>'>
						<?php
						
						$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_dente=0 AND nm_face='0' AND nr_idTratamento=0 AND nr_diagnostico=0 AND nr_periodo = '".$semestre."'";
						$resultadoAnam = mysql_query($sqlAnam) or die();
						$numImg = mysql_num_rows($resultadoAnam);
						
						if($numImg == 1){
							echo "<center><b>Ainda não foi cadastrado nenhum tratamento!</b></center>";
						}else{
						?>
					<center>
						<table width='95%' border=0>
							<tr>
								<td width='5%'><center><h5>Dente / Região</h5></center></td>
								<td width='5%'><center><h5>Face</h5></center></td>
								<td width='15%'><center><h5>Diagnóstico</h5></center></td>
								<td width='15%'><center><h5>Tratamento</h5></center></td>
								<td width='6%'><center><h5>Situação</h5></center></td>
								<td width='5%'><center><h5>Ausente?</h5></center></td>
								<td width='5%'></td>
							</tr>
							
							<?php
							$l = 0;
							$sqlAnam = "SELECT * FROM tb_odontograma WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nr_periodo = '".$semestre."' AND nm_professor='N/R' ORDER BY nr_dente";
							$resultadoAnam = mysql_query($sqlAnam) or die();
							while($linhaAnam = mysql_fetch_array($resultadoAnam)){
								
								
								
								if($linhaAnam['nm_professor'] == 'N/R' && $linhaAnam['nm_situacao'] == 'Realizado'){
									$link = "<span class='badge badge-danger><a href='' data-toggle='modal' data-target='#modalExemplo".$linhaAnam['nr_idOdontograma']."'>Validar</a></span>";
									echo "
										
										<div class='modal fade' id='modalExemplo".$linhaAnam['nr_idOdontograma']."' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
										  <div class='modal-dialog' role='document'>
											<div class='modal-content'>
											  <div class='modal-header'>
												<h5 class='modal-title' id='exampleModalLabel'>Login e Senha do Professor</h5>
												<button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>
												  <span aria-hidden='true'>&times;</span>
												</button>
											  </div>
											  <form method='POST' action='aprovarTratamento.php'>
											  <div class='modal-body'>
												<input type='hidden' name='paciente' value='".$_GET['cpf']."'>
												<input type='hidden' name='semestre' value='".$_GET['semestre']."'>
												<input type='hidden' name='tratamento' value='".$linhaAnam['nr_idOdontograma']."'>
												<input type='text' name='login' placeholder = 'CPF' required class='single-input'><br>
												<input type='password' name='senha' placeholder = 'Senha' required class='single-input'>
											  </div>
											  <div class='modal-footer'>
												<input type='submit' value='Salvar' class='genric-btn primary'>
											  </form>
											  </div>
											</div>
										  </div>
										</div>
									
									";
								}else{
									
									if($linhaAnam['nm_professor'] == 'N/R'){
										$link = $linhaAnam['nm_professor'];
									}else{
										$sqlProf = "SELECT * FROM tb_funcionarios WHERE nr_cpfFuncionario = '".$linhaAnam['nm_professor']."'";
										$resultadoProf = mysql_query($sqlProf) or die();
										while($linhaProf = mysql_fetch_array($resultadoProf)){
											$link = $linhaProf['nm_nomeFuncionario']." <img src='icones/aprovado.png'>";
											
										}
									}
									
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
													<a class='genric-btn success' href='excluirTratamento.php?id=".$linhaAnam['nr_idOdontograma']."&cpf=".$_GET['cpf']."&semestre=".$_GET['semestre']."'>Tem certeza que deseja excluir este tratamento?</a>
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
										$editar = "<a href='excluirTratamento.php?id=".$linhaAnam['nr_idOdontograma']."&cpf=".$_GET['cpf']."'><img src='icones/delete.png'></a>";	
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
								
								echo "
								
								<tr style='background-color: ".$cor2."; color:".$cor."'>
								<form method='POST' action='salvarEdicoesPermanente.php'>
									<input type='hidden' name='cpf' value='".$_GET['cpf']."'>
									<input type='hidden' name='dente' value='".$linhaAnam['nr_dente']."'>
									<input type='hidden' name='id' value='".$linhaAnam['nr_idOdontograma']."'>
									<td><center>".$dente."</center></td>
									<td><center>".$face."</center></td>
								";
								
								echo "<td><center><select name='diagnostico' class='single-input'>";
								
								if($linhaAnam['nr_diagnostico'] != 0){
									$sqlNome2 = "SELECT * FROM tb_diagnostico WHERE nr_idDiagnostico = ".$linhaAnam['nr_diagnostico'];
									$resultadoNome2 = mysql_query($sqlNome2) or die();
									while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
										
										$sqlDiag2 = "SELECT * FROM tb_diagnostico WHERE nr_idDiagnostico = ".$linhaAnam['nr_diagnostico'];
										$resultadoDiag2 = mysql_query($sqlDiag2) or die();
										while($linhaDiag2 = mysql_fetch_array($resultadoDiag2)){
											echo "<option value='".$linhaDiag2['nr_idDiagnostico']."'>".$linhaDiag2['nm_diagnostico']."</option>"; 
										}
										
										
										
										$sqlDiag = "SELECT * FROM tb_diagnostico";
										$resultadoDiag = mysql_query($sqlDiag) or die();
										while($linhaDiag = mysql_fetch_array($resultadoDiag)){
											if($linhaDiag['nr_idDiagnostico'] == $linhaDiag2['nr_idDiagnostico']){
												
											}else{
												echo "<option value='".$linhaDiag['nr_idDiagnostico']."'>".$linhaDiag['nm_diagnostico']."</option>"; 
											}
										}
										
									}
								}else{
										echo "<option value='0'> </option>";
										$sqlDiag = "SELECT * FROM tb_diagnostico";
										$resultadoDiag = mysql_query($sqlDiag) or die();
										while($linhaDiag = mysql_fetch_array($resultadoDiag)){
											if($linhaDiag['nr_idDiagnostico'] == $linhaDiag2['nr_idDiagnostico']){
												
											}else{
												echo "<option value='".$linhaDiag['nr_idDiagnostico']."'>".$linhaDiag['nm_diagnostico']."</option>"; 
											}
										}
								}
								
								echo "</select></center></td>";
								
								
								
								echo "<td><center><select name='tratamento' class='single-input'>";
								$sqlNome2 = "SELECT * FROM tb_procedimento WHERE nr_idProcedimento =".$linhaAnam['nr_idTratamento'];
								$resultadoNome2 = mysql_query($sqlNome2) or die();
								while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
									
									$sqlDiag2 = "SELECT * FROM tb_procedimento WHERE nr_idProcedimento = ".$linhaAnam['nr_idTratamento'];
									$resultadoDiag2 = mysql_query($sqlDiag2) or die();
									while($linhaDiag2 = mysql_fetch_array($resultadoDiag2)){
										echo "<option value='".$linhaDiag2['nr_idProcedimento']."'>".$linhaDiag2['nm_procedimento']."</option>"; 
									}
									
									
									
									$sqlDiag = "SELECT * FROM tb_procedimento";
									$resultadoDiag = mysql_query($sqlDiag) or die();
									while($linhaDiag = mysql_fetch_array($resultadoDiag)){
										if($linhaDiag['nr_idProcedimento'] == $linhaDiag2['nr_idProcedimento']){
											
										}else{
											echo "<option value='".$linhaDiag['nr_idProcedimento']."'>".$linhaDiag['nm_procedimento']."</option>"; 
										}
									}
									
								}
								echo "</select></center></td>";
								
								if($linhaAnam['nm_situacao'] == 'A Tratar'){
									$dropdown = "<select name='situacao' class='single-input'>
													<option style='color:rgb(196,61,27);' value='A Tratar'>A Tratar</option>
													<option style='color:rgb(43,89,189);' value='Existente'>Existente</option>
												</select>
									
									";
								}else{
									$dropdown = "<select name='situacao' class='single-input'>
													<option style='color:rgb(43,89,189);' value='Existente'>Existente</option>
													<option style='color:rgb(196,61,27);' value='A Tratar'>A Tratar</option>
												</select>
									
									";
								}
								
								if($linhaAnam['nm_ausente'] == 'Sim'){
									$dropdown2 = "<select name='ausente' class='single-input'>
													<option value='Sim'>Sim</option>
													<option value='Nao'>Não</option>
												</select>
									
									";
								}else{
									$dropdown2 = "<select name='ausente' class='single-input'>
													<option value='Nao'>Não</option>
													<option value='Sim'>Sim</option>
												</select>
									
									";
								}
								
								echo "
									<td><center>".$dropdown."</center></td>
									<td><center>".$dropdown2."</center></td>
									<td style='padding:5px;'><center><input type='submit' value='Salvar' class='genric-btn primary'></td>
									</form>
								</tr>
								
								";
								$l = $l + 1;
							}
							
							?>
						</table>
						<br>
						
						<a href='odontograma.php?cpf=<?php echo $_GET['cpf']; ?>&semestre=<?php echo $_GET['semestre']; ?>' class='genric-btn success'>Voltar para o Odontograma</a>
						<?php
						}
						?>
					</center>
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