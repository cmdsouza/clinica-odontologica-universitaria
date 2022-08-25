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

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,300,550,550,700" rel="stylesheet"> 
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
	<center>
		<br>	
		<h1>Planos de Tratamento</h1><br>
		<h4><b>Plano de Tratamento A</b></h4><br>
		<?php
		
		$sqlAnam = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nm_tipoPlano = 'A'";
		$resultadoAnam = mysql_query($sqlAnam) or die();
		$numImg = mysql_num_rows($resultadoAnam);
		
		if($numImg == 0){
			echo "<center><b>Ainda não foi cadastrado nenhum tratamento!</b></center>";
		}else{
		?>
		
		<table width='95%' border=0>
			<tr>
				<td><center><h5>Dente / Região</h5></center></td>
				<td><center><h5>Diagnóstico</h5></center></td>
				<td><center><h5>Tratamento</h5></center></td>
				<td><center><h5>Observação</h5></center></td>
				<td><center><h5>Situação</h5></center></td>
				<td><center><h5>Ausente?</h5></center></td>
				<td width='30px'></td>
			</tr>
			
			<?php
				$cont = 0;
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nm_tipoPlano = 'A' AND nm_situacao != 'Realizado'";
				$resultadoNome = mysql_query($sqlNome) or die();
				while($linhaNome = mysql_fetch_array($resultadoNome)){
				
				if(($cont%2) == 0){
					$cor2 = "rgb(240,240,240)";
				}else{
					$cor2 = "white";
				}
				
				switch($linhaNome['nm_situacao']){
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
				
				if($linhaNome['nm_professor'] == 'N/R' && $linhaNome['nm_situacao'] == 'Realizado'){
					$link = "<span class='badge badge-danger>Validar</a></span>";
					
				}else{
					
					if($linhaNome['nm_professor'] == 'N/R'){
						$link = $linhaNome['nm_professor'];
					}else{
						$sqlProf = "SELECT * FROM tb_funcionarios WHERE nr_cpfFuncionario = '".$linhaNome['nm_professor']."'";
						$resultadoProf = mysql_query($sqlProf) or die();
						while($linhaProf = mysql_fetch_array($resultadoProf)){
							$link = $linhaProf['nm_nomeFuncionario']." <img src='icones/aprovado.png'>";
							
						}
					}
					
				}
				
				if($linhaNome['nm_professor'] == 'N/R' && ($linhaNome['nm_situacao'] == 'A Tratar')){
									
									$editar = "<a href='' data-toggle='modal' data-target='#modalExemplo2".$linhaNome['nr_idOdontogramaInfantil']."'><img src='icones/delete.png'></a>";
									echo "
										
										<div class='modal fade' id='modalExemplo2".$linhaNome['nr_idOdontogramaInfantil']."' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
										  <div class='modal-dialog' role='document'>
											<div class='modal-content'>
											  <div class='modal-header'>
												<h5 class='modal-title' id='exampleModalLabel'>Excluir Tratamento</h5>
												<button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>
												  <span aria-hidden='true'>&times;</span>
												</button>
											  </div>
											  <div class='modal-body'>
												<b><p>Dente: ".$linhaNome['nr_dente']."</p></b>
													<a class='genric-btn success' href='excluirTratamento.php?id=".$linhaNome['nr_idOdontogramaInfantil']."&cpf=".$_GET['cpf']."&tipo=infantil'>Tem certeza que deseja excluir este tratamento?</a>
											  </div>
											</div>
										  </div>
										</div>
									
									";
									
									
								}else{
									if($linhaNome['nm_situacao'] == 'Realizado'){
										$editar = '';
									}else{
										$editar = "<a href='excluirTratamento.php?id=".$linhaNome['nr_idOdontogramaInfantil']."&cpf=".$_GET['cpf']."'><img src='icones/delete.png'></a>";	
									}
								}
					
								$sqlDupla = "SELECT * FROM tb_duplas WHERE nr_idDupla =".$linhaNome['nr_idDupla'];
								$resultadoDupla = mysql_query($sqlDupla) or die();
								while($linhaDupla3 = mysql_fetch_array($resultadoDupla)){
																
									$sqlDupla1 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linhaDupla3['nr_cpf1']."'";
									$resultadoDupla1 = mysql_query($sqlDupla1) or die();
									while($linhaDupla1 = mysql_fetch_array($resultadoDupla1)){
										$Dupla1 = $linhaDupla1['nm_nomeAluno']; 
										$periodo = $linhaDupla1['nr_periodo']; 
									}
																
									$sqlDupla2 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linhaDupla3['nr_cpf2']."'";
									$resultadoDupla2 = mysql_query($sqlDupla2) or die();
									while($linhaDupla2 = mysql_fetch_array($resultadoDupla2)){
										$Dupla2 = $linhaDupla2['nm_nomeAluno']; 
									}
																
																
									$dupla = $Dupla1." e ".$Dupla2;
								}
				
				if($linhaNome['nm_situacao'] == 'A Tratar'){
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
				
				if($linhaNome['nm_ausente'] == 'Sim'){
					$ausente = "<select name='ausente' class='single-input'><option value='Sim'>Sim</option><option value='Não'>Não</option></select>";
				}else{
					$ausente = "<select name='ausente' class='single-input'><option value='Não'>Não</option><option value='Sim'>Sim</option></select>";
				}
				
			?>
			<tr style='background-color: <?php echo $cor2; ?>; color:<?php echo $cor; ?>;'>
				<form method='POST' action='salvarEdicoesInfantil.php'>
					<input type='hidden' name='id' value='<?php echo $linhaNome['nr_idOdontogramaInfantil']; ?>'>
					<input type='hidden' name='cpf' value='<?php echo $_GET['cpf']; ?>'>
					<td><center><?php echo $linhaNome['nr_dente']; ?></textarea></td>
					<td style='padding: 10px;'><center><textarea class='single-input' name='diagnostico'><?php echo $linhaNome['nm_diagnostico']; ?></textarea></center></td>
					<td style='padding: 10px;'><center><textarea class='single-input' name='tratamento'><?php echo $linhaNome['nm_tratamento']; ?></textarea></center></td>
					<td style='padding: 10px;'><center><textarea class='single-input' name='obs'><?php echo $linhaNome['nm_observacao']; ?></textarea></center></td>
					<td style='padding: 10px;'><center><?php echo $dropdown; ?></center></td>
					<td style='padding: 10px;'><center><?php echo $ausente; ?></center></td>
					<td style='padding: 10px;'><center><input type='submit' class='genric-btn success' value='Salvar'></center></td>
				</form>
			</tr>	
			<?php
				$cont = $cont + 1;
				}
			?>
			
		</table>
		
				
			<br><br>
		<?php
		}
		?>
		
		<br>
		<h4><b>Plano de Tratamento Alternativo</b></h4><br>
		<?php
		
		$sqlAnam = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nm_tipoPlano = 'Alternativo'";
		$resultadoAnam = mysql_query($sqlAnam) or die();
		$numImg = mysql_num_rows($resultadoAnam);
		
		if($numImg == 0){
			echo "<center><b>Ainda não foi cadastrado nenhum tratamento!</b></center>";
		}else{
		?>
		
		<table width='95%' border=0>
			<tr>
				<td><center><h5>Dente / Região</h5></center></td>
				<td><center><h5>Diagnóstico</h5></center></td>
				<td><center><h5>Tratamento</h5></center></td>
				<td><center><h5>Observação</h5></center></td>
				<td><center><h5>Situação</h5></center></td>
				<td><center><h5>Ausente?</h5></center></td>
				<td width='30px'></td>
			</tr>
			
			<?php
				$cont = 0;
				$sqlNome = "SELECT * FROM tb_odontogramainfantil WHERE nr_cpfPaciente ='".$_GET['cpf']."' AND nm_tipoPlano = 'Alternativo' AND nm_situacao != 'Realizado'";
				$resultadoNome = mysql_query($sqlNome) or die();
				while($linhaNome = mysql_fetch_array($resultadoNome)){
				
				if(($cont%2) == 0){
					$cor2 = "rgb(240,240,240)";
				}else{
					$cor2 = "white";
				}
				
				switch($linhaNome['nm_situacao']){
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
				
				if($linhaNome['nm_professor'] == 'N/R' && $linhaNome['nm_situacao'] == 'Realizado'){
					$link = "<span class='badge badge-danger>Validar</a></span>";
					
				}else{
					
					if($linhaNome['nm_professor'] == 'N/R'){
						$link = $linhaNome['nm_professor'];
					}else{
						$sqlProf = "SELECT * FROM tb_funcionarios WHERE nr_cpfFuncionario = '".$linhaNome['nm_professor']."'";
						$resultadoProf = mysql_query($sqlProf) or die();
						while($linhaProf = mysql_fetch_array($resultadoProf)){
							$link = $linhaProf['nm_nomeFuncionario']." <img src='icones/aprovado.png'>";
							
						}
					}
					
				}
				
				if($linhaNome['nm_professor'] == 'N/R' && ($linhaNome['nm_situacao'] == 'A Tratar')){
									
									$editar = "<a href='' data-toggle='modal' data-target='#modalExemplo2".$linhaNome['nr_idOdontogramaInfantil']."'><img src='icones/delete.png'></a>";
									echo "
										
										<div class='modal fade' id='modalExemplo2".$linhaNome['nr_idOdontogramaInfantil']."' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
										  <div class='modal-dialog' role='document'>
											<div class='modal-content'>
											  <div class='modal-header'>
												<h5 class='modal-title' id='exampleModalLabel'>Excluir Tratamento</h5>
												<button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>
												  <span aria-hidden='true'>&times;</span>
												</button>
											  </div>
											  <div class='modal-body'>
												<b><p>Dente: ".$linhaNome['nr_dente']."</p></b>
													<a class='genric-btn success' href='excluirTratamento.php?id=".$linhaNome['nr_idOdontogramaInfantil']."&cpf=".$_GET['cpf']."&tipo=infantil'>Tem certeza que deseja excluir este tratamento?</a>
											  </div>
											</div>
										  </div>
										</div>
									
									";
									
									
								}else{
									if($linhaNome['nm_situacao'] == 'Realizado'){
										$editar = '';
									}else{
										$editar = "<a href='excluirTratamento.php?id=".$linhaNome['nr_idOdontogramaInfantil']."&cpf=".$_GET['cpf']."'><img src='icones/delete.png'></a>";	
									}
								}
					
								$sqlDupla = "SELECT * FROM tb_duplas WHERE nr_idDupla =".$linhaNome['nr_idDupla'];
								$resultadoDupla = mysql_query($sqlDupla) or die();
								while($linhaDupla3 = mysql_fetch_array($resultadoDupla)){
																
									$sqlDupla1 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linhaDupla3['nr_cpf1']."'";
									$resultadoDupla1 = mysql_query($sqlDupla1) or die();
									while($linhaDupla1 = mysql_fetch_array($resultadoDupla1)){
										$Dupla1 = $linhaDupla1['nm_nomeAluno']; 
										$periodo = $linhaDupla1['nr_periodo']; 
									}
																
									$sqlDupla2 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linhaDupla3['nr_cpf2']."'";
									$resultadoDupla2 = mysql_query($sqlDupla2) or die();
									while($linhaDupla2 = mysql_fetch_array($resultadoDupla2)){
										$Dupla2 = $linhaDupla2['nm_nomeAluno']; 
									}
																
																
									$dupla = $Dupla1." e ".$Dupla2;
								}
				
				if($linhaNome['nm_situacao'] == 'A Tratar'){
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
				
				if($linhaNome['nm_ausente'] == 'Sim'){
					$ausente = "<select name='ausente' class='single-input'><option value='Sim'>Sim</option><option value='Não'>Não</option></select>";
				}else{
					$ausente = "<select name='ausente' class='single-input'><option value='Não'>Não</option><option value='Sim'>Sim</option></select>";
				}
				
			?>
			<tr style='background-color: <?php echo $cor2; ?>; color:<?php echo $cor; ?>;'>
				<form method='POST' action='salvarEdicoesInfantil.php'>
					<input type='hidden' name='id' value='<?php echo $linhaNome['nr_idOdontogramaInfantil']; ?>'>
					<input type='hidden' name='cpf' value='<?php echo $_GET['cpf']; ?>'>
					<td><center><?php echo $linhaNome['nr_dente']; ?></textarea></td>
					<td style='padding: 10px;'><center><textarea class='single-input' name='diagnostico'><?php echo $linhaNome['nm_diagnostico']; ?></textarea></center></td>
					<td style='padding: 10px;'><center><textarea class='single-input' name='tratamento'><?php echo $linhaNome['nm_tratamento']; ?></textarea></center></td>
					<td style='padding: 10px;'><center><textarea class='single-input' name='obs'><?php echo $linhaNome['nm_observacao']; ?></textarea></center></td>
					<td style='padding: 10px;'><center><?php echo $dropdown; ?></center></td>
					<td style='padding: 10px;'><center><?php echo $ausente; ?></center></td>
					<td style='padding: 10px;'><center><input type='submit' class='genric-btn success' value='Salvar'></center></td>
				</form>
			</tr>	
			<?php
				$cont = $cont + 1;
				}
			?>
			
		</table>
		
				
			<br><br>
		<?php
		}
		?>
			
		<a class='genric-btn success' href='odontogramainfantil.php?cpf=<?php echo $_GET['cpf']; ?>'>Voltar para o Odontograma</a>
		
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