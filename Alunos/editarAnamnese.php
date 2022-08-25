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

list($dia, $mes, $ano) = explode('/', $nascimento);
$hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
$nascimento2 = mktime( 0, 0, 0, $mes, $dia, $ano);
$idade = floor((((($hoje - $nascimento2) / 60) / 60) / 24) / 365.25);

header('Content-Type: text/html; charset=utf-8');
	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');

?>

<style>
/* Style the form */

/* Style the input fields */
input {
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none; 
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

/* Mark the active step: */
.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}

b{
	font-size:18px;
	line-height: 1.5;
}
</style>
	
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
								
									echo "<h2 class='text-white'>Editar a Anamnese ".$d." ".$paciente."</h2>";								
								?>
							</div>							
						</div>
					</div>
				</div>
			</section>		
			<!-- End banner Area -->
		<br>
		
		
			<?php
			
			
		
		$sqlNome1 = "SELECT * FROM tb_anamnese WHERE nr_cpfPaciente = '".$_GET['cpf']."'";
		$resultadoNome1 = mysql_query($sqlNome1) or die();
		while($linhaNome1 = mysql_fetch_array($resultadoNome1)){
			$idDupla = $linhaNome1['nr_idDupla'];
			$dataPreenchimento = $linhaNome1['dt_preenchimento'];
		}
		
		$sqlNome2 = "SELECT * FROM tb_duplas WHERE nr_idDupla = ".$idDupla;
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
		
		?>
		
		<?php
									
									$sqlNome5 = "SELECT * FROM tb_anamnese WHERE nr_cpfPaciente = '".$_GET['cpf']."'";
									$resultadoNome5 = mysql_query($sqlNome5) or die();
									while($linhaNome5 = mysql_fetch_array($resultadoNome5)){
										$r1 = $linhaNome5['1'];
										$r2 = $linhaNome5['2'];
										$r3 = $linhaNome5['3'];
										$r4 = $linhaNome5['4'];
										$r5 = $linhaNome5['5'];
										$r6 = $linhaNome5['6'];
										$r7 = $linhaNome5['7'];
										$r8 = $linhaNome5['8'];
										$r9 = $linhaNome5['9'];
										$r10 = $linhaNome5['10'];
										$r11 = $linhaNome5['11'];
										$r12 = $linhaNome5['12'];
										$r13 = $linhaNome5['13'];
										$r14 = $linhaNome5['14'];
										$r15 = $linhaNome5['15'];
										$r16 = $linhaNome5['16'];
										$r17 = $linhaNome5['17'];
										$r18 = $linhaNome5['18'];
										$r19 = $linhaNome5['19'];
										$r20 = $linhaNome5['20'];
										$r21 = $linhaNome5['21'];
										$r22 = $linhaNome5['22'];
										$r23 = $linhaNome5['23'];
										$r24 = $linhaNome5['24'];
										$r25 = $linhaNome5['25'];
										$r26 = $linhaNome5['26'];
										$r27 = $linhaNome5['27'];
										$r28 = $linhaNome5['28'];
										$r29 = $linhaNome5['29'];
										$r30 = $linhaNome5['30'];
										$r31 = $linhaNome5['31'];
										$r32 = $linhaNome5['32'];
										$r33 = $linhaNome5['33'];
										$r34 = $linhaNome5['34'];
										$r35 = $linhaNome5['35'];
										$r36 = $linhaNome5['36'];
										$r37 = $linhaNome5['37'];
										$r38 = $linhaNome5['38'];
										$r39 = $linhaNome5['39'];
										$r40 = $linhaNome5['40'];
										$r41 = $linhaNome5['41'];
										$r42 = $linhaNome5['42'];
										$r43 = $linhaNome5['43'];
										$r44 = $linhaNome5['44'];
										$r45 = $linhaNome5['45'];
										$r46 = $linhaNome5['46'];
										$r47 = $linhaNome5['47'];
										$r48 = $linhaNome5['48'];
										$r49 = $linhaNome5['49'];
										$r50 = $linhaNome5['50'];
										$r51 = $linhaNome5['51'];
										$r52 = $linhaNome5['52'];
										$r53 = $linhaNome5['53'];
										$r54 = $linhaNome5['54'];
										$r55 = $linhaNome5['55'];
										$r56 = $linhaNome5['56'];
										$r57 = $linhaNome5['57'];
										$r58 = $linhaNome5['58'];
										$r59 = $linhaNome5['59'];
										$r60 = $linhaNome5['60'];
										$r61 = $linhaNome5['61'];
										$r62 = $linhaNome5['62'];
										$r63 = $linhaNome5['63'];
										$r64 = $linhaNome5['64'];
										$r65 = $linhaNome5['65'];
										$r66 = $linhaNome5['66'];
										$r67 = $linhaNome5['67'];
										$r68 = $linhaNome5['68'];
										$r69 = $linhaNome5['69'];
										$r70 = $linhaNome5['70'];
									}
									
								?>
								
								
						
							
		<br><br>
			
			<div class='whole-wrap' style='font-size:18px;'>
				<div class='container'>
					<div class='section'>
						<div class='row'>
							<div class='col-lg-12 col-md-12'>
							<form method='POST' action='atualizarAnamnese.php'>
			
	<?php
	
			echo "
								<b>Dupla Responsável</b>
								<div class='mt-10'>
									<select class='single-input' name='dupla'>
			";
			
						$sqlNome = "SELECT * FROM tb_duplas WHERE nr_idDupla =".$idDupla;
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
			
						$sqlNome2 = "SELECT * FROM tb_duplas";
						$resultadoNome2 = mysql_query($sqlNome2) or die();
						while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
							if($linhaNome2['nr_idDupla'] != $idDupla){
							
							$sqlNome1 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linhaNome2['nr_cpf1']."'";
							$resultadoNome1 = mysql_query($sqlNome1) or die();
							while($linhaNome1 = mysql_fetch_array($resultadoNome1)){
								$nome1 = $linhaNome1['nm_nomeAluno']; 
								$periodo = $linhaNome1['nr_periodo']; 
							}
									
							$sqlNome2 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linhaNome2['nr_cpf2']."'";
							$resultadoNome2 = mysql_query($sqlNome2) or die();
							while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
								$nome2 = $linhaNome2['nm_nomeAluno']; 
							}
									
									
							echo "<option value='".$linhaNome2['nr_idDupla']."'>".$nome1." e ".$nome2." (".$periodo."º Periodo)</option>";
							}
						}
			
			echo "
					</select>
				
				<br>
				
				<b>Data Preenchimento</b>
						<div class='mt-10'>
							<input type='text' name='data' value='".$dataPreenchimento."' class='single-input'>
					</div>
			";
			?>
			
			<input type='hidden' name='paciente' value='<?php echo $_GET['cpf']; ?>'>
			
			<style>
				body {
					font-size: 16px;
				}
			</style>
			
			<br>
			<h3>Perguntas Gerais</h3>
			
			<?php
				$pieces = explode("-", $r1);
			?>
			<hr>
			<b>Queixa Principal e Duração</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='1' class='single-input' value='<?php echo $pieces[0]; ?>'>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' name='1a' class='single-input' value='<?php echo $pieces[1]; ?>'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>História da Doença Atual</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='2' class='single-input' value='<?php echo $r2; ?>'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			
			<?php 
				$pieces = explode("-", $r3);
												
				if($pieces[0] == 'Sim'){
					$r3Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
					$r3Parte2 = $pieces[1];
					$r3Parte3 = $pieces[2];
				}else{
					$r3Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
					$r3Parte2 = '';
					$r3Parte3 = '';
				}
			?>
			
			<hr>
			<b>Está em tratamento médico atualmente? Qual o motivo? Qual médico/especialidade?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='3'>
								<?php echo $r3Parte1; ?>
							</select>
						</div>
					</td>
					<td>
						<div class='mt-10'>
								<input type='text' name='3a' class='single-input' value='<?php echo $r3Parte2; ?>'>
						</div>
					</td>
				  </tr>
				  <tr>
					<td colspan='2'>
						<div class='mt-10'>
							<input type='text' name='3b' class='single-input' value='<?php echo $r3Parte3; ?>'>
						</div>
					</td>
				 </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r4);
												
				if($pieces[0] == 'Sim'){
					$r4Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
					$r4Parte2 = $pieces[1];
				}else{
					$r4Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
					$r4Parte2 = '';
				}
			?>
			<hr>
			<b>Faz Uso de Medicamentos? Quais?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='4'>
								<?php echo $r4Parte1; ?>
							</select>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' name='4a' class='single-input' value='<?php echo $r4Parte2; ?>'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r5);
							
				if($pieces[0] == 'Sim'){
					$r5Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r5Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
				
					if($pieces[1] == 'Medicamentos'){
						$r5Parte2 = 'checked';
					}else{ $r5Parte2 = '';} 
					
					if($pieces[2] == 'Metais'){
						$r5Parte3 = 'checked';
					}else{ $r5Parte3 = '';} 
					
					if($pieces[3] == 'Alimentos'){
						$r5Parte4 = 'checked';
					}else{ $r5Parte4 = '';} 
					
					if($pieces[4] == 'Cosmeticos'){
						$r5Parte5 = 'checked';
					}else{ $r5Parte5 = '';} 
					
					$r5Parte6 = $pieces[5];
			?>
			<hr>
			<b>É alérgico ou já teve alguma reação alérgica?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='5'>
								<?php echo $r5Parte1; ?>
							</select>
						</div>
					</td>
					<td><center><br><input type="checkbox" value="Medicamentos" name='5a' <?php echo $r5Parte2; ?>>Medicamentos</center></td>
					<td><center><br><input type="checkbox" value="Metais" name='5b' <?php echo $r5Parte3; ?>>Metais</center></td>
					<td><center><br><input type="checkbox" value="Alimentos" name='5c' <?php echo $r5Parte4; ?>>Alimentos</center></td>
					<td><center><br><input type="checkbox" value="Cosmeticos" name='5d' <?php echo $r5Parte5; ?>>Cosméticos</center></td>
				  </tr>
				  <tr>
					<td colspan='5'>
						<div class='mt-10'>
							<input type='text' name='5e' class='single-input' value='<?php echo $r5Parte6; ?>'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r6);
												
				if($pieces[0] == 'Sim'){
					$r6Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
					$r6Parte2 = $pieces[1];
					$r6Parte3 = $pieces[2];
				}else{
					$r6Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
					$r6Parte2 = '';
					$r6Parte3 = '';
				}
			?>
			<hr>
			<b>Já teve urticária? Quando? O que provocou?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='6'>
								<?php echo $r6Parte1; ?>
							</select>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' name='6a' class='single-input' value='<?php echo $r6Parte2; ?>'>
						</div>
					</td>
				  </tr>
				  <tr>
					<td colspan='2'>
						<div class='mt-10'>
							<input type='text' name='6b' class='single-input' value='<?php echo $r6Parte3; ?>'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r7);
												
				if($pieces[0] == 'Sim'){
					$r7Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
					$r7Parte2 = $pieces[1];
				}else{
					$r7Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
					$r7Parte2 = '';
				}
			?>
			<hr>
			<b>Tomou Antibiótico Recentemente? Qual?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='7'>
								<?php echo $r7Parte1; ?>
							</select>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' name='7a' class='single-input' value='<?php echo $r7Parte2; ?>'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r8);
												
				if($pieces[0] == 'Sim'){
					$r8Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
					$r8Parte2 = $pieces[1];
				}else{
					$r8Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
					$r8Parte2 = '';
				}
			?>
			<hr>
			<b>Tomou Corticóide Recentemente? Qual?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='8'>
								<?php echo $r8Parte1; ?>
							</select>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' name='8a' class='single-input' value='<?php echo $r8Parte2; ?>'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			
			<?php 
				$pieces = explode("-", $r9);
												
				if($pieces[0] == 'Sim'){
					$r9Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
					$r9Parte2 = $pieces[1];
					$r9Parte3 = $pieces[2];
				}else{
					$r9Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
					$r9Parte2 = '';
					$r9Parte3 = '';
				}
			?>
			<hr>
			<b>Esteve acamado por longo tempo nos últimos anos? Por Quanto Tempo? Qual o motivo?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='9'>
								<?php echo $r9Parte1; ?>
							</select>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' name='9a' class='single-input' value='<?php echo $r9Parte2; ?>'>
						</div>
					</td>
				  </tr>
				  <tr>
					<td colspan='2'>
						<div class='mt-10'>
							<input type='text' name='9b' class='single-input' value='<?php echo $r9Parte3; ?>'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r10);
												
				if($pieces[0] == 'Sim'){
					$r10Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
					$r10Parte2 = $pieces[1];
				}else{
					$r10Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
					$r10Parte2 = '';
				}
			?>
			<hr>
			<b>Já Foi Hospitalizado? Qual o Motivo?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='10'>
								<?php echo $r10Parte1; ?>
							</select>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' name='10a' class='single-input' value='<?php echo $r10Parte2; ?>'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r11);
												
				if($pieces[0] == 'Sim'){
					$r11Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
					$r11Parte2 = $pieces[1];
				}else{
					$r11Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
					$r11Parte2 = '';
				}
			?>
			<hr>
			<b>Já Foi Submetido a Alguma Cirurgia? Qual?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='11'>
								<?php echo $r11Parte1; ?>
							</select>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' name='11a' class='single-input' value='<?php echo $r11Parte2; ?>'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r12);
												
				if($pieces[0] == 'Sim'){
					$r12Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
					
					if($pieces[1] == 'Sim'){
						$r12Parte2 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
					}else{
						$r12Parte2 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
					}
					
					$r12Parte3 = $pieces[2];
					$r12Parte4 = $pieces[3];
				}else{
					$r12Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
					if($pieces[1] == 'Sim'){
						$r12Parte2 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
					}else{
						$r12Parte2 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
					}
					$r12Parte3 = '';
					$r12Parte4 = '';
				}
			?>
			<hr>
			<b>Já Tomou Algum Tipo de Anestesia? Teve alguma reação? Qual tipo? Qual o motivo?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='12'>
								<?php echo $r12Parte1; ?>
							</select>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='12c'>
								<?php echo $r12Parte2; ?>
							</select>
						</div>
					</td>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='12a' class='single-input' value='<?php echo $r12Parte3; ?>'>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' name='12b' class='single-input' value='<?php echo $r12Parte4; ?>'>
						</div>
					</td>
				  </tr>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r13);
												
				if($pieces[0] == 'Sim'){
					$r13Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r13Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
			?>
			<hr>
			<b>Costuma sangrar muito quando se corta ou é submetido à cirurgia?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='13'>
								<?php echo $r13Parte1; ?>
							</select>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r14);
												
				if($pieces[0] == 'Sim'){
					$r14Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r14Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
			?>
			<hr>
			<b>Quando se corta ou é submetido à cirurgia demora para cicatrizar?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='14'>
								<?php echo $r14Parte1; ?>
							</select>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r15);
												
				if($pieces[0] == 'Sim'){
					$r15Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
					$r15Parte2 = $pieces[1];
				}else{
					$r15Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
					$r15Parte2 = '';
				}
			?>
			<hr>
			<b>Alguma vez precisou de transfusão de sangue? Há Quanto Tempo?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='15'>
								<?php echo $r15Parte1; ?>
							</select>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' name='15a' class='single-input' value='<?php echo $r15Parte2; ?>'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r16);
												
				if($pieces[0] == 'Sim'){
					$r16Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
					$r16Parte2 = $pieces[1];
					$r16Parte3 = $pieces[2];
				}else{
					$r16Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
					$r16Parte2 = '';
					$r16Parte3 = '';
				}
			?>
			<hr>
			<b>Usa alguma prótese no coração, osso ou articulação? Qual? Há Quanto Tempo?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='16'>
								<?php echo $r16Parte1; ?>
							</select>
						</div>
					</td>
				  </tr>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='16a' class='single-input' value='<?php echo $r16Parte2; ?>'>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' name='16b' class='single-input' value='<?php echo $r16Parte3; ?>'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r17);
												
				if($pieces[0] == 'Sim'){
					$r17Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r17Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
			?>
			<hr>
			<b>Tem ou teve febre reumática?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='17'>
								<?php echo $r17Parte1; ?>
							</select>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r18);
												
				if($pieces[0] == 'Sim'){
					$r18Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r18Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
			?>
			<hr>
			<b>Suas juntas doem ou incham com frequência?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='18'>
								<?php echo $r18Parte1; ?>
							</select>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r19);
												
				if($pieces[0] == 'Sim'){
					$r19Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r19Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
			?>
			<hr>
			<b>Sente falta de ar e cansaço com frequência? </b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='19'>
								<?php echo $r19Parte1; ?>
							</select>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r20);
												
				if($pieces[0] == 'Sim'){
					$r20Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r20Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
			?>
			<hr>
			<b>Sente falta de ar quando se deita? </b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='20'>
								<?php echo $r20Parte1; ?>
							</select>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r21);
												
				if($pieces[0] == 'Sim'){
					$r21Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r21Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
			?>
			<hr>
			<b>Costuma ter os pés ou pernas inchados? </b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='21'>
								<?php echo $r21Parte1; ?>
							</select>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r22);
												
				if($pieces[0] == 'Sim'){
					$r22Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r22Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
			?>
			<hr>
			<b>Sente palpitações ou dores no peito? </b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='22'>
								<?php echo $r22Parte1; ?>
							</select>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r23);
												
				if($pieces[0] == 'Sim'){
					$r23Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r23Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
			?>
			<hr>
			<b>Tem tido tosse persistente? </b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='23'>
								<?php echo $r23Parte1; ?>
							</select>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r24);
												
				if($pieces[0] == 'Sim'){
					$r24Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r24Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
			?>
			<hr>
			<b>Já escarrou sangue? </b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='24'>
								<?php echo $r24Parte1; ?>
							</select>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r25);
												
				if($pieces[0] == 'Sim'){
					$r25Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r25Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
			?>
			<hr>
			<b>Já vomitou sangue? </b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='25'>
								<?php echo $r25Parte1; ?>
							</select>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r26);
												
				if($pieces[0] == 'Sim'){
					$r26Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r26Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
				
				if($pieces[1] == 'Sim'){
					$r26Parte2 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r26Parte2 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
			?>
			<hr>
			<b>Costuma urinar mais de seis vezes ao dia? Em grande quantidade?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='26'>
								<?php echo $r26Parte1; ?>
							</select>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='26a'>
								<?php echo $r26Parte2; ?>
							</select>
						</div>
					</td>
				  </tr>
			</table>	  
			
			<?php 
			
			
				if($r27 == 'Sim'){		
					$r27Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r27Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
			?>
			<hr>
			<b>Sente-se com sede a maior parte do tempo? </b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='27'>
								<?php echo $r27Parte1; ?>
							</select>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
			if($r28 == 'N/R'){
				$r28Parte1 = "<option value='N/R'>Não Respondido</option><option value='Sim'>Sim</option><option value='Nao'>Não</option>";
			}else{									
				if($r28 == 'Sim'){
					$r28Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r28Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
			}
			?>
			<hr>
			<b>Tem comido muito ultimamente? </b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='28'>
								<?php echo $r28Parte1; ?>
							</select>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r29);
				
			if($pieces[0] == 'N/R'){
				$r29Parte1 = "<option value='N/R'>Não Respondido</option><option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				$r29Parte2 = '';
			}else{	
				if($pieces[0] == 'Sim'){
					$r29Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
					$r29Parte2 = $pieces[1];
				}else{
					$r29Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
					$r29Parte2 = '';
				}
			}
			?>
			<hr>
			<b>Tem perdido peso sem causa aparente? Quantos quilos?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='29'>
								<?php echo $r29Parte1; ?>
							</select>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='number' value='<?php echo $r29Parte2; ?>' class='single-input' name='29a'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
			if($r30 == 'N/R'){
				$r30Parte1 = "<option value='N/R'>Não Respondido</option><option value='Sim'>Sim</option><option value='Nao'>Não</option>";
			}else{										
				if($r30 == 'Sim'){
					$r30Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r30Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
			}
			?>
			<hr>
			<b>Sente dor ao urinar? </b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='30'>
								<?php echo $r30Parte1; ?>
							</select>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
			if($r31 == 'N/R'){
				$r31Parte1 = "<option value='N/R'>Não Respondido</option><option value='Sim'>Sim</option><option value='Nao'>Não</option>";
			}else{										
				if($r31 == 'Sim'){
					$r31Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r31Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
			}
			?>
			<hr>
			<b>Faz hemodiálise? </b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='31'>
								<?php echo $r31Parte1; ?>
							</select>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r32);
			
			if($pieces[0] == 'N/R'){
				$r32Parte1 = "<option value='N/R'>Não Respondido</option><option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				$r32Parte2 = 'N/R';
				$r32Parte3 = 'N/R';
			}else{	
				if($pieces[0] == 'Sim'){
					$r32Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
					$r32Parte2 = $pieces[1];
					$r32Parte3 = $pieces[2];
				}else{
					$r32Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
					$r32Parte2 = '';
					$r32Parte3 = '';
				}
			}
			?>
			<hr>
			<b>Já fez algum transplante? Qual órgão? Há Quanto Tempo?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='32'>
								<?php echo $r32Parte1; ?>
							</select>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' class='single-input' name='32a' value='<?php echo $r32Parte2; ?>'>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' class='single-input' name='32b' value='<?php echo $r32Parte3; ?>'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r33);
				
			if($pieces[0] == 'N/R'){
				$r33Parte1 = "<option value='N/R'>Não Respondido</option><option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				$r33Parte2 = 'N/R';
				$r33Parte3 = 'N/R';
				$r33Parte4 = 'N/R';
			}else{	
				if($pieces[0] == 'Sim'){
					$r33Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
					$r33Parte2 = $pieces[1];
					$r33Parte3 = $pieces[2];
					$r33Parte4 = $pieces[3];
				}else{
					$r33Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
					$r33Parte2 = '';
					$r33Parte3 = '';
					$r33Parte4 = '';
				}
			}
			?>
			<hr>
			<b>Tem ou já teve câncer/tumor? Em que região? Há quanto tempo? Qual foi o tratamento?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='33'>
								<?php echo $r33Parte1; ?>
							</select>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' value='<?php echo $r33Parte2; ?>' class='single-input' name='33a'>
						</div>
					</td>
				  </tr>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' value='<?php echo $r33Parte3; ?>' class='single-input' name='33b'>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' value='<?php echo $r33Parte4; ?>' class='single-input' name='33c'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r34);
			
			if($pieces[0] == 'N/R'){
				$r34Parte1 = "<option value='N/R'>Não Respondido</option><option value='Sim'>Sim</option><option value='Nao'>Não</option>";
			}else{				
					if($pieces[0] == 'Sim'){
						$r34Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
					}else{
						$r34Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
					}
			}
			?>
			<hr>
			<b>Tem infecções com frequência? </b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='34'>
								<?php echo $r34Parte1; ?>
							</select>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r35);
				
			if($pieces[0] == 'N/R'){
				$r35Parte1 = "<option value='N/R'>Não Respondido</option><option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				$r35Parte2 = 'N/R';
			}else{	
				if($pieces[0] == 'Sim'){
					$r35Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
					$r35Parte2 = $pieces[1];
				}else{
					$r35Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
					$r35Parte2 = '';
				}
			}
			?>
			<hr>
			<b>Está ou esteve em tratamento psiquiátrico ou com psicólogo? Para que tipo de problema?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='35'>
								<?php echo $r35Parte1; ?>
							</select>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' value='<?php echo $r35Parte2; ?>' class='single-input' name='35a'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r36);
			
			if($pieces[0] == 'N/R'){
				$r36Parte1 = "<option value='N/R'>Não Respondido</option><option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				$r36Parte2 = 'N/R';
			}else{	
				if($pieces[0] == 'Sim'){
					$r36Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
					$r36Parte2 = $pieces[1];
				}else{
					$r36Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
					$r36Parte2 = '';
				}
			}
			?>
			<hr>
			<b>Tem sentido dormência em alguma parte do seu corpo? Qual região?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='36'>
								<?php echo $r36Parte1; ?>
							</select>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' value='<?php echo $r36Parte2; ?>' class='single-input' name='36a'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r37);
			
			if($pieces[0] == 'N/R'){
				$r37Parte1 = "<option value='N/R'>Não Respondido</option><option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				$r37Parte2 = 'N/R';
			}else{	
				if($pieces[0] == 'Sim'){
					$r37Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
					$r37Parte2 = $pieces[1];
				}else{
					$r37Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
					$r37Parte2 = '';
				}
			}
			?>
			<hr>
			<b>Tem frequentes desmaios ou tonturas? Qual região?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='37'>
								<?php echo $r37Parte1; ?>
							</select>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' value='<?php echo $r37Parte2; ?>' class='single-input' name='37a'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r38);
			
			if($pieces[0] == 'N/R'){
				$r38Parte1 = "<option value='N/R'>Não Respondido</option><option value='Sim'>Sim</option><option value='Nao'>Não</option>";
			}else{				
				if($pieces[0] == 'Sim'){
					$r38Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r38Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
			}
			?>
			<hr>
			<b>Dorme bem? </b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='38'>
								<?php echo $r38Parte1; ?>
							</select>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r39);
			
			if($pieces[0] == 'N/R'){
				$r39Parte1 = "<option value='N/R'>Não Respondido</option><option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				$r39Parte2 = 'N/R';
			}else{	
				if($pieces[0] == 'Sim'){
					$r39Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
					$r39Parte2 = $pieces[1];
				}else{
					$r39Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
					$r39Parte2 = '';
				}
			}
			?>
			<hr>
			<b>Apresenta alguma doença infectocontagiosa sexualmente transmissível? Qual?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='39'>
								<?php echo $r39Parte1; ?>
							</select>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' value='<?php echo $r39Parte2; ?>' class='single-input' name='39a'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r40);
				
			if($pieces[0] == 'N/R'){
				$r40Parte1 = "<option value='N/R'>Não Respondido</option><option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				$r40Parte2 = 'N/R';
			}else{										
				if($pieces[0] == 'Sim'){
					$r40Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
					$r40Parte2 = $pieces[1];
				}else{
					$r40Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
					$r40Parte2 = '';
				}
			}
			?>
			<hr>
			<b>Apresenta alguma deficiência física? </b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='40'>
								<?php echo $r40Parte1; ?>
							</select>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r41);
				
			if($pieces[0] == 'N/R'){
				$r41Parte1 = "<option value='N/R'>Não Respondido</option><option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				$r41Parte2 = 'N/R';
				$r41Parte3 = 'N/R';
				$r41Parte4 = 'N/R';
				$r41Parte5 = 'N/R';
			}else{		
				switch($pieces[0]){
					case "Nunca Fumou":
						$r41Parte1 = "<option value='Nunca Fumou'>Nunca Fumou</option><option value='Sim/diariamente'>Sim/diariamente</option><option value='Sim/ocasionalmente'>Sim/ocasionalmente</option><option value='Parou de fumar'>Parou de fumar</option>";
					break;
					
					case "Sim/diariamente":
						$r41Parte1 = "<option value='Sim/diariamente'>Sim/diariamente</option><option value='Nunca Fumou'>Nunca Fumou</option><option value='Sim/ocasionalmente'>Sim/ocasionalmente</option><option value='Parou de fumar'>Parou de fumar</option>";
					break;
						$r41Parte1 = "<option value='Sim/ocasionalmente'>Sim/ocasionalmente</option><option value='Sim/diariamente'>Sim/diariamente</option><option value='Nunca Fumou'>Nunca Fumou</option><option value='Parou de fumar'>Parou de fumar</option>";
					case "Sim/ocasionalmente":
					break;
					
					case "Parou de fumar":
						$r41Parte1 = "<option value='Parou de fumar'>Parou de fumar</option><option value='Nunca Fumou'>Nunca Fumou</option><option value='Sim/diariamente'>Sim/diariamente</option><option value='Sim/ocasionalmente'>Sim/ocasionalmente</option>";
					break;				
					
					
				}
				
				$r41Parte2 = $pieces[1];
				$r41Parte3 = $pieces[2];
				$r41Parte4 = $pieces[3];
				$r41Parte5 = $pieces[4];
			}
			?>
			<hr>
			<b>É fumante? Quantos cigarros por dia? Fuma/fumou por quanto tempo? Parou de fumar há quanto tempo? Fuma/fumava que tipo de cigarro?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td colspan='4'>
						<select class='single-input' name='41d'>
							<?php echo $r41Parte1; ?>
						</select>
					</td>
				  </tr>
				  <tr>
					<td><div class='mt-10'><input class='single-input' type="text" value="<?php echo $r41Parte2; ?>" name='41e'></div></td>
					<td><div class='mt-10'><input class='single-input' type="text" value="<?php echo $r41Parte3; ?>" name='41f'></div></td>
					<td><div class='mt-10'><input class='single-input' type="text" value="<?php echo $r41Parte4; ?>" name='41g'></div></td>
					<td><div class='mt-10'><input class='single-input' type="text" value="<?php echo $r41Parte5; ?>" name='41h'></div></td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r42);
			
			if($pieces[0] == 'N/R'){
				$r42Parte1 = "<option value='N/R'>Não Respondido</option><option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				$r42Parte2 = 'N/R';
				$r42Parte3 = 'N/R';
				$r42Parte4 = 'N/R';
				$r42Parte5 = 'N/R';
			}else{	
				switch($pieces[0]){
					case "Nunca Bebeu":
						$r42Parte1 = "<option value='Nunca Bebeu'>Nunca Bebeu</option><option value='Sim/diariamente'>Sim/diariamente</option><option value='Sim/ocasionalmente'>Sim/ocasionalmente</option><option value='Parou de Beber'>Parou de Beber</option>";
					break;
					
					case "Sim/diariamente":
						$r42Parte1 = "<option value='Sim/diariamente'>Sim/diariamente</option><option value='Nunca Bebeu'>Nunca Bebeu</option><option value='Sim/ocasionalmente'>Sim/ocasionalmente</option><option value='Parou de Beber'>Parou de Beber</option>";
					break;
						$r42Parte1 = "<option value='Sim/ocasionalmente'>Sim/ocasionalmente</option><option value='Sim/diariamente'>Sim/diariamente</option><option value='Nunca Bebeu'>Nunca Bebeu</option><option value='Parou de Beber'>Parou de Beber</option>";
					case "Sim/ocasionalmente":
					break;
					
					case "Parou de Beber":
						$r42Parte1 = "<option value='Parou de Beber'>Parou de Beber</option><option value='Nunca Bebeu'>Nunca Bebeu</option><option value='Sim/diariamente'>Sim/diariamente</option><option value='Sim/ocasionalmente'>Sim/ocasionalmente</option>";
					break;				
					
					
				}
				
				$r42Parte2 = $pieces[1];
				$r42Parte3 = $pieces[2];
				$r42Parte4 = $pieces[3];
				$r42Parte5 = $pieces[4];
			}
			?>
			<hr>
			<b>Consome bebida alcoólica? Que dose consome/consumia diariamente? Bebe/bebeu durante quanto tempo? Parou de beber há quanto tempo? Bebe/bebia que tipo de bebida?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td colspan='4'>
						<select class='single-input' name='42d'>
							<?php echo $r42Parte1; ?>
						</select>
					</td>
				  </tr>
				  <tr>
					<td><div class='mt-10'><input class='single-input' type="text" value="<?php echo $r42Parte2; ?>" name='42e'></div></td>
					<td><div class='mt-10'><input class='single-input' type="text" value="<?php echo $r42Parte3; ?>" name='42f'></div></td>
					<td><div class='mt-10'><input class='single-input' type="text" value="<?php echo $r42Parte4; ?>" name='42g'></div></td>
					<td><div class='mt-10'><input class='single-input' type="text" value="<?php echo $r42Parte5; ?>" name='42h'></div></td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r43);
			
			if($pieces[0] == 'N/R'){
				$r43Parte1 = "<option value='N/R'>Não Respondido</option><option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				$r43Parte2 = 'N/R';
				$r43Parte3 = 'N/R';
				$r43Parte4 = 'N/R';
				$r43Parte5 = 'N/R';
			}else{	
				switch($pieces[0]){
					case "Nunca Usou":
						$r43Parte1 = "<option value='Nunca Usou'>Nunca Usou</option><option value='Sim/diariamente'>Sim/diariamente</option><option value='Sim/ocasionalmente'>Sim/ocasionalmente</option><option value='Parou de Usar'>Parou de Usar</option>";
					break;
					
					case "Sim/diariamente":
						$r43Parte1 = "<option value='Sim/diariamente'>Sim/diariamente</option><option value='Nunca Usou'>Nunca Usou</option><option value='Sim/ocasionalmente'>Sim/ocasionalmente</option><option value='Parou de Usar'>Parou de Usar</option>";
					break;
						$r43Parte1 = "<option value='Sim/ocasionalmente'>Sim/ocasionalmente</option><option value='Sim/diariamente'>Sim/diariamente</option><option value='Nunca Usou'>Nunca Usou</option><option value='Parou de Usar'>Parou de Usar</option>";
					case "Sim/ocasionalmente":
					break;
					
					case "Parou de Usar":
						$r43Parte1 = "<option value='Parou de Usar'>Parou de Usar</option><option value='Nunca Usou'>Nunca Usou</option><option value='Sim/diariamente'>Sim/diariamente</option><option value='Sim/ocasionalmente'>Sim/ocasionalmente</option>";
					break;				
					
					
				}
				
				$r43Parte2 = $pieces[1];
				$r43Parte3 = $pieces[2];
				$r43Parte4 = $pieces[3];
				$r43Parte5 = $pieces[4];
			}
			?>
			<hr>
			<b>Consome drogas? Faz/fazia uso quantas vezes/dia? Usa ou usou durante quanto tempo? Parou de usar há quanto tempo? Que tipo de droga usa/usava?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td colspan='4'>
						<select class='single-input' name='43d'>
							<?php echo $r43Parte1; ?>
						</select>
					</td>
				  </tr>
				  <tr>
					<td><div class='mt-10'><input class='single-input' type="text" value="<?php echo $r43Parte2; ?>" name='43e'></div></td>
					<td><div class='mt-10'><input class='single-input' type="text" value="<?php echo $r43Parte3; ?>" name='43f'></div></td>
					<td><div class='mt-10'><input class='single-input' type="text" value="<?php echo $r43Parte4; ?>" name='43g'></div></td>
					<td><div class='mt-10'><input class='single-input' type="text" value="<?php echo $r43Parte5; ?>" name='43h'></div></td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r44);
			
			if($pieces[0] == 'N/R'){
				$r44Parte1 = "<option value='N/R'>Não Respondido</option><option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				$r44Parte2 = 'N/R';
			}else{	
				if($pieces[0] == 'Sim'){
					$r44Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
					$r44Parte2 = $pieces[1];
				}else{
					$r44Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
					$r44Parte2 = '';
				}
			}
			?>
			<hr>
			<b>Apresenta problemas respiratórios? Qual?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='44'>
								<?php echo $r44Parte1; ?>
							</select>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' value='<?php echo $r44Parte2; ?>' class='single-input' name='44a'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r45);
			
			if($pieces[0] == 'N/R'){
				$r45Parte1 = "<option value='N/R'>Não Respondido</option><option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				$r45Parte2 = '';
				$r45Parte3 = '';
				$r45Parte4 = '';
				$r45Parte5 = '';
				$r45Parte6 = '';
				$r45Parte7 = '';
				$r45Parte8 = '';
				$r45Parte9 = '';
				$r45Parte10 = '';
				$r45Parte11 = '';
				$r45Parte12 = '';
				$r45Parte13 = '';
				$r45Parte14 = 'N/R';
			}else{	
				if($pieces[0] == 'Sim'){
					$r45Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r45Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
			
				
					if($pieces[1] == 'Insuficiencia Cardiaca'){
						$r45Parte2 = 'checked';
					}else{ $r45Parte2 = '';}
					
					if($pieces[2] == 'Angina'){
						$r45Parte3 = 'checked';
					}else{ $r45Parte3 = '';}
					
					if($pieces[3] == 'Infarto Do Miocardio'){
						$r45Parte4 = 'checked';
					}else{ $r45Parte4 = '';}
					
					if($pieces[4] == 'Cardiopatia Congenita'){
						$r45Parte5 = 'checked';
					}else{ $r45Parte5 = '';}
					
					if($pieces[5] == 'Sopro Cardiaco'){
						$r45Parte6 = 'checked';
					}else{ $r45Parte6 = '';}
					
					if($pieces[6] == 'Marcapasso'){
						$r45Parte7 = 'checked';
					}else{ $r45Parte7 = '';}
					
					if($pieces[7] == 'Aneurisma'){
						$r45Parte8 = 'checked';
					}else{ $r45Parte8 = '';}
					
					if($pieces[8] == 'Hipertensao'){
						$r45Parte9 = 'checked';
					}else{ $r45Parte9 = '';}
					
					if($pieces[9] == 'Hipotensao'){
						$r45Parte10 = 'checked';
					}else{ $r45Parte10 = '';}
					
					if($pieces[10] == 'Endocardite'){
						$r45Parte11 = 'checked';
					}else{ $r45Parte11 = '';}
					
					if($pieces[11] == 'Varizes'){
						$r45Parte12 = 'checked';
					}else{ $r45Parte12 = '';}
					
					if($pieces[12] == 'Arteriosclerose'){
						$r45Parte13 = 'checked';
					}else{ $r45Parte13 = '';}
					
					$r45Parte14 = $pieces[13];
				}
			?>
			<hr>
			<b>Apresenta problemas cardiovasculares?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<div class='mt-10'>
						<select class='single-input' name='45'>
							<?php echo $r45Parte1; ?>
						</select>
					</div><br>
					<td><center><input type="checkbox" value="Insuficiencia Cardiaca" name='45a' <?php echo $r45Parte2; ?>>Insuficiencia Cardiaca</center></td>
					<td><center><input type="checkbox" value="Angina" name='45b' <?php echo $r45Parte3; ?>>Angina</center></td>
					<td><center><input type="checkbox" value="Infarto Do Miocardio" name='45c' <?php echo $r45Parte4; ?>>Infarto Do Miocardio</center></td>
					<td><center><input type="checkbox" value="Cardiopatia Congenita" name='45d' <?php echo $r45Parte5; ?>>Cardiopatia Congenita</center></td>
					<td><center><input type="checkbox" value="Sopro Cardiaco" name='45e' <?php echo $r45Parte6; ?>>Sopro Cardiaco</center></td>
					<td><center><input type="checkbox" value="Marcapasso" name='45f' <?php echo $r45Parte7; ?>>Marcapasso</center></td>
				  </tr>
				  <tr>
					<td><br><center><input type="checkbox" value="Aneurisma" name='45g' <?php echo $r45Parte8; ?>>Aneurisma</center></td>
					<td><br><center><input type="checkbox" value="Hipertensao" name='45h' <?php echo $r45Parte9; ?>>Hipertensao</center></td>
					<td><br><center><input type="checkbox" value="Hipotensao" name='45i' <?php echo $r45Parte10; ?>>Hipotensao</center></td>
					<td><br><center><input type="checkbox" value="Endocardite" name='45j' <?php echo $r45Parte11; ?>>Endocardite</center></td>
					<td><br><center><input type="checkbox" value="Varizes" name='45k' <?php echo $r45Parte12; ?>>Varizes</center></td>
					<td><br><center><input type="checkbox" value="Arteriosclerose" name='45l' <?php echo $r45Parte13; ?>>Arteriosclerose</center></td>
				  </tr>
				  <tr>
					<td colspan='7'><input type='text' value='<?php echo $r45Parte14; ?>' class='single-input' name='45m' ></td>
				  </tr>
				 </tbody>
			</table>			
			
			<?php 
				$pieces = explode("-", $r46);
			
			if($pieces[0] == 'N/R'){
				$r46Parte1 = "<option value='N/R'>Não Respondido</option><option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				$r46Parte2 = '';
				$r46Parte3 = '';
				$r46Parte4 = '';
				$r46Parte5 = '';
				$r46Parte6 = 'N/R';
			}else{	
				if($pieces[0] == 'Sim'){
					$r46Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r46Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
				
					if($pieces[1] == 'Anemia'){
						$r46Parte2 = 'checked';
					}else{ $r46Parte2 = '';}
					
					if($pieces[2] == 'Hemofilia'){
						$r46Parte3 = 'checked';
					}else{ $r46Parte3 = '';}
					
					if($pieces[3] == 'Hemorragia'){
						$r46Parte4 = 'checked';
					}else{ $r46Parte4 = '';}
					
					if($pieces[4] == 'Leucemia'){
						$r46Parte5 = 'checked';
					}else{ $r46Parte5 = '';}
					
					$r46Parte6 = $pieces[5];
			}
			?>
			<hr>
			<b>Apresenta problemas hematológicos?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<div class='mt-10'>
						<select class='single-input' name='46'>
							<?php echo $r46Parte1; ?>
						</select>
					</div><br>
					<td><center><input type="checkbox" value="Anemia" name='46a' <?php echo $r46Parte2; ?>>Anemia</center></td>
					<td><center><input type="checkbox" value="Hemofilia" name='46b' <?php echo $r46Parte3; ?>>Hemofilia</center></td>
					<td><center><input type="checkbox" value="Hemorragia" name='46c' <?php echo $r46Parte4; ?>>Hemorragia</center></td>
					<td><center><input type="checkbox" value="Leucemia" name='46d' <?php echo $r46Parte5; ?>>Leucemia</center></td>
				  </tr>
				  <tr>
					<td colspan='4'><input type='text' value='<?php echo $r46Parte6; ?>' class='single-input' name='46e' ></td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r47);
			
			if($pieces[0] == 'N/R'){
				$r47Parte1 = "<option value='N/R'>Não Respondido</option><option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				$r47Parte2 = '';
				$r47Parte3 = '';
				$r47Parte4 = '';
				$r47Parte5 = '';
				$r47Parte6 = '';
				$r47Parte7 = '';
				$r47Parte8 = '';
				$r47Parte9 = 'N/R';
			}else{	
				if($pieces[0] == 'Sim'){
					$r47Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r47Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
				
					if($pieces[1] == 'Gastrite'){
						$r47Parte2 = 'checked';
					}else{ $r47Parte2 = '';}
					
					if($pieces[2] == 'Ulcera'){
						$r47Parte3 = 'checked';
					}else{ $r47Parte3 = '';}
					
					if($pieces[3] == 'Azia'){
						$r47Parte4 = 'checked';
					}else{ $r47Parte4 = '';}
					
					if($pieces[4] == 'Diarreia Persistente'){
						$r47Parte5 = 'checked';
					}else{ $r47Parte5 = '';}
					
					if($pieces[5] == 'Prisao De Ventre'){
						$r47Parte6 = 'checked';
					}else{ $r47Parte6 = '';}
					
					if($pieces[6] == 'Ansia De Vomito Frequente'){
						$r47Parte7 = 'checked';
					}else{ $r47Parte7 = '';}
					
					if($pieces[7] == 'Colite'){
						$r47Parte8 = 'checked';
					}else{ $r47Parte8 = '';}
					
					$r47Parte9 = $pieces[8];
				}
			?>
			<hr>
			<b>Apresenta problemas gastrintestinais?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<div class='mt-10'>
						<select class='single-input' name='47'>
							<?php echo $r47Parte1; ?>
						</select>
					</div><br>
					<td><center><input type="checkbox" value="Gastrite" name='47a' <?php echo $r47Parte2; ?>>Gastrite</center></td>
					<td><center><input type="checkbox" value="Ulcera" name='47b' <?php echo $r47Parte3; ?>>Úlcera</center></td>
					<td><center><input type="checkbox" value="Azia" name='47c' <?php echo $r47Parte4; ?>>Azia</center></td>
					<td><center><input type="checkbox" value="Diarreia Persistente" name='47d' <?php echo $r47Parte5; ?>>Diarréia Persistente</center></td>
				  </tr>
				  <tr>
					<td><center><input type="checkbox" value="Prisao De Ventre" name='47e' <?php echo $r47Parte6; ?>>Prisão De Ventre</center></td>
					<td colspan='2'><center><input type="checkbox" value="Ansia De Vomito Frequente" name='47f' <?php echo $r47Parte7; ?>>Ânsia De Vômito Frequente</center></td>
					<td><center><input type="checkbox" value="Colite" name='47g' <?php echo $r47Parte8; ?>>Colite</center></td>
				  </tr>
				  <tr>
					<td colspan='4'><input type='text' value='<?php echo $r47Parte9; ?>' class='single-input' name='47h' ></td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r48);
			
			if($pieces[0] == 'N/R'){
				$r48Parte1 = "<option value='N/R'>Não Respondido</option><option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				$r48Parte2 = '';
				$r48Parte3 = '';
				$r48Parte4 = '';
				$r48Parte5 = '';
				$r48Parte6 = '';
				$r48Parte7 = '';
				$r48Parte8 = '';
				$r48Parte9 = '';
				$r48Parte10 = 'N/R';
			}else{	
				if($pieces[0] == 'Sim'){
					$r48Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r48Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
				
					if($pieces[1] == 'Artrite Reumatoide'){
						$r48Parte2 = 'checked';
					}else{ $r48Parte2 = '';}
					
					if($pieces[2] == 'Osteoartrite'){
						$r48Parte3 = 'checked';
					}else{ $r48Parte3 = '';}
					
					if($pieces[3] == 'Artrose'){
						$r48Parte4 = 'checked';
					}else{ $r48Parte4 = '';}
					
					if($pieces[4] == 'Escoliose'){
						$r48Parte5 = 'checked';
					}else{ $r48Parte5 = '';}
					
					if($pieces[5] == 'Hernia De Disco'){
						$r48Parte6 = 'checked';
					}else{ $r48Parte6 = '';}
					
					if($pieces[6] == 'Reumatismo'){
						$r48Parte7 = 'checked';
					}else{ $r48Parte7 = '';}
					
					if($pieces[7] == 'Fraturas Frequentes'){
						$r48Parte8 = 'checked';
					}else{ $r48Parte8 = '';}
					
					if($pieces[8] == 'Osteoporose'){
						$r48Parte9 = 'checked';
					}else{ $r48Parte9 = '';}
					
					$r48Parte10 = $pieces[9];
				}
			?>
			<hr>
			<b>Apresenta problemas músculo-esqueletais?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<div class='mt-10'>
						<select class='single-input' name='48'>
							<?php echo $r48Parte1; ?>
						</select>
					</div><br>
					<td><center><input type="checkbox" value="Artrite Reumatoide" name='48a' <?php echo $r48Parte2; ?>>Artrite Reumatóide</center></td>
					<td><center><input type="checkbox" value="Osteoartrite" name='48b' <?php echo $r48Parte3; ?>>Osteoartrite</center></td>
					<td><center><input type="checkbox" value="Artrose" name='48c' <?php echo $r48Parte4; ?>>Artrose</center></td>
					<td><center><input type="checkbox" value="Escoliose" name='48d' <?php echo $r48Parte5; ?>>Escoliose</center></td>
				  </tr>
				  <tr>
					<td><center><input type="checkbox" value="Hernia De Disco" name='48e' <?php echo $r48Parte6; ?>>Hérnia De Disco</center></td>
					<td><center><input type="checkbox" value="Reumatismo" name='48f' <?php echo $r48Parte7; ?>>Reumatismo</center></td>
					<td><center><input type="checkbox" value="Fraturas Frequentes" name='48g' <?php echo $r48Parte8; ?>>Fraturas Frequentes</center></td>
					<td><center><input type="checkbox" value="Osteoporose" name='48h' <?php echo $r48Parte9; ?>>Osteoporose</center></td>
				  </tr>
				  <tr>
					<td colspan='4'><input type='text' value='<?php echo $r48Parte10; ?>' class='single-input' name='48i' ></td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r49);
			if($pieces[0] == 'N/R'){
				$r49Parte1 = "<option value='N/R'>Não Respondido</option><option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				$r49Parte2 = '';
				$r49Parte3 = '';
				$r49Parte4 = '';
				$r49Parte5 = '';
				$r49Parte6 = '';
				$r49Parte7 = 'N/R';
			}else{										
				if($pieces[0] == 'Sim'){
					$r49Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r49Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
				
					if($pieces[1] == 'Diabetes'){
						$r49Parte2 = 'checked';
					}else{ $r49Parte2 = '';}
					
					if($pieces[2] == 'Hipoglicemia'){
						$r49Parte3 = 'checked';
					}else{ $r49Parte3 = '';}
					
					if($pieces[3] == 'Hipertireoidismo'){
						$r49Parte4 = 'checked';
					}else{ $r49Parte4 = '';}
					
					if($pieces[4] == 'Hipotireoidismo'){
						$r49Parte5 = 'checked';
					}else{ $r49Parte5 = '';}
					
					if($pieces[5] == 'Hiperparatireoidismo'){
						$r49Parte6 = 'checked';
					}else{ $r49Parte6 = '';}
					
					$r49Parte7 = $pieces[6];
			}
			?>
			<hr>
			<b>Apresenta problemas endócrinos?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<div class='mt-10'>
						<select class='single-input' name='49'>
							<?php echo $r49Parte1; ?>
						</select>
					</div><br>
					<td><center><input type="checkbox" value="Diabetes" name='49a' <?php echo $r49Parte2; ?>>Diabetes</center></td>
					<td><center><input type="checkbox" value="Hipoglicemia" name='49b' <?php echo $r49Parte3; ?>>Hipoglicemia</center></td>
					<td><center><input type="checkbox" value="Hipertireoidismo" name='49c' <?php echo $r49Parte4; ?>>Hipertireoidismo</center></td>
					<td><center><input type="checkbox" value="Hipotireoidismo" name='49d' <?php echo $r49Parte5; ?>>Hipotireoidismo</center></td>
					<td><center><input type="checkbox" value="Hiperparatireoidismo" name='49e' <?php echo $r49Parte6; ?>>Hiperparatireoidismo</center></td>
				  </tr>
				  <tr>
					<td colspan='5'><input type='text' value='<?php echo $r49Parte7; ?>' class='single-input' name='49f' ></td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r50);
			
			if($pieces[0] == 'N/R'){
				$r50Parte1 = "<option value='N/R'>Não Respondido</option><option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				$r50Parte2 = '';
				$r50Parte3 = '';
				$r50Parte4 = '';
				$r50Parte5 = '';
				$r50Parte6 = '';
				$r50Parte7 = '';
				$r50Parte8 = '';
				$r50Parte9 = '';
				$r50Parte10 = '';
				$r50Parte11 = '';
				$r50Parte12 = '';
				$r50Parte13 = '';
				$r50Parte14 = 'N/R';
			}else{	
				if($pieces[0] == 'Sim'){
					$r50Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r50Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
				
					if($pieces[1] == 'Depressao'){
						$r50Parte2 = 'checked';
					}else{ $r50Parte2 = '';}
					
					if($pieces[2] == 'Dor Nos Olhos'){
						$r50Parte3 = 'checked';
					}else{ $r50Parte3 = '';}
					
					if($pieces[3] == 'Disturbios Visuais'){
						$r50Parte4 = 'checked';
					}else{ $r50Parte4 = '';}
					
					if($pieces[4] == 'Glaucoma'){
						$r50Parte5 = 'checked';
					}else{ $r50Parte5 = '';}
					
					if($pieces[5] == 'Dores De Ouvido'){
						$r50Parte6 = 'checked';
					}else{ $r50Parte6 = '';}
					
					if($pieces[6] == 'Zumbidos No Ouvido'){
						$r50Parte7 = 'checked';
					}else{ $r50Parte7 = '';}
					
					if($pieces[7] == 'Perda De Audicao'){
						$r50Parte8 = 'checked';
					}else{ $r50Parte8 = '';}
					
					if($pieces[8] == 'Convulsao/Epilepsia'){
						$r50Parte9 = 'checked';
					}else{ $r50Parte9 = '';}
					
					if($pieces[9] == 'Nervosismo Em Excesso'){
						$r50Parte10 = 'checked';
					}else{ $r50Parte10 = '';}
					
					if($pieces[10] == 'Tique Nervoso'){
						$r50Parte11 = 'checked';
					}else{ $r50Parte11 = '';}
					
					if($pieces[11] == 'Disturbios Da Fala'){
						$r50Parte12 = 'checked';
					}else{ $r50Parte12 = '';}
					
					if($pieces[12] == 'Derrame'){
						$r50Parte13 = 'checked';
					}else{ $r50Parte13 = '';}
					
					$r50Parte14 = $pieces[13];
				}
			?>
			<hr>
			<b>Apresenta problemas neurológico/sensoriais?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<div class='mt-10'>
						<select class='single-input' name='50'>
							<?php echo $r50Parte1; ?>
						</select>
					</div><br>
					<td><center><input type="checkbox" value="Depressao" name='50a' <?php echo $r50Parte2; ?>>Depressão</center></td>
					<td><center><input type="checkbox" value="Dor Nos Olhos" name='50b' <?php echo $r50Parte3; ?>>Dor Nos Olhos</center></td>
					<td><center><input type="checkbox" value="Disturbios Visuais" name='50c' <?php echo $r50Parte4; ?>>Distúrbios Visuais</center></td>
					<td><center><input type="checkbox" value="Glaucoma" name='50d' <?php echo $r50Parte5; ?>>Glaucoma</center></td>
					<td><center><input type="checkbox" value="Dores De Ouvido" name='50e' <?php echo $r50Parte6; ?>>Dores De Ouvido</center></td>
					<td><center><input type="checkbox" value="Zumbidos No Ouvido" name='50f' <?php echo $r50Parte7; ?>>Zumbidos No Ouvido</center></td>
				  </tr>
				  <tr>
					<td><br><center><input type="checkbox" value="Perda De Audicao" name='50g' <?php echo $r50Parte8; ?>>Perda De Audição</center></td>
					<td><br><center><input type="checkbox" value="Convulsao/Epilepsia" name='50h' <?php echo $r50Parte9; ?>>Convulsão/Epilepsia</center></td>
					<td><br><center><input type="checkbox" value="Nervosismo Em Excesso" name='50i' <?php echo $r50Parte10; ?>>Nervosismo Em Excesso</center></td>
					<td><br><center><input type="checkbox" value="Tique Nervoso" name='50j' <?php echo $r50Parte11; ?>>Tique Nervoso</center></td>
					<td><br><center><input type="checkbox" value="Disturbios Da Fala" name='50k' <?php echo $r50Parte12; ?>>Distúrbios Da Fala</center></td>
					<td><br><center><input type="checkbox" value="Derrame" name='50l' <?php echo $r50Parte13; ?>>Derrame</center></td>
				  </tr>
				  <tr>
					<td colspan='7'><input type='text' value=' <?php echo $r50Parte14; ?>' class='single-input' name='50m' ></td>
				  </tr>	  
				  
				<tr><td><h3><br>Sinais Vitais</h3></td></tr>
				</tbody>
			</table>
			
			<?php 
				if($r51 == 'Nao Aferido'){
					$r51Parte1 = "checked";
					$r51Parte2 = '';
				}else{
					$r51Parte1 = '';
					$r51Parte2 = $r51;
				}
			?>
			<hr>
			<b>Pulso</b><br>
			<table border="0">
				<tbody>
				  <tr>
					<td width='130px'><center><input type="checkbox" value="Nao Aferido" name='51a' <?php echo $r51Parte1; ?>>Não Aferido</center></td>
					<td width='300px' style='padding-left:20px;'><center><input type="text" class='single-input' value='<?php echo $r51Parte2; ?>' name='51b'>bpm</center></td>
					<td width='300px'><center>Normal: 60 a 110bpm</center></td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 				
				if($r52 == 'Nao Aferido'){
					$r52Parte1 = "checked";
					$r52Parte2 = '';
				}else{
					$r52Parte1 = '';
					$r52Parte2 = $r52;
				}
			?>
			<hr>
			<b>Pressão Arterial</b><br>
			<table border="0">
				<tbody>
				  <tr>
					<td width='130px'><center><input type="checkbox" value="Nao Aferido" name='52a' <?php echo $r52Parte1; ?>>Não Aferido</center></td>
					<td width='300px' style='padding-left:20px;'><center><input type="text" class='single-input' value='<?php echo $r52Parte2; ?>' name='52b'>mm/Hg</center></td>
					<td width='300px'><center>Normal: Até 140 X 90</center></td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 				
				if($r53 == 'Nao Aferido'){
					$r53Parte1 = "checked";
					$r53Parte2 = '';
				}else{
					$r53Parte1 = '';
					$r53Parte2 = $r53;
				}
			?>
			<hr>
			<b>Temperatura</b><br>
			<table border="0">
				<tbody>
				  <tr>
					<td width='130px'><center><input type="checkbox" value="Nao Aferido" name='53a' <?php echo $r53Parte1; ?>>Não Aferido</center></td>
					<td width='300px' style='padding-left:20px;'><center><input type="text" class='single-input' value='<?php echo $r53Parte2; ?>' name='53b'>ºC</center></td>
					<td width='300px'><center>Normal: 36,8 ºC ± 0,2 ºC</center></td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 				
				if($r54 == 'Nao Aferido'){
					$r54Parte1 = "checked";
					$r54Parte2 = '';
				}else{
					$r54Parte1 = '';
					$r54Parte2 = $r54;
				}
			?>
			<hr>
			<b>Frequência Respiratória</b><br>
			<table border="0">
				<tbody>
				  <tr>
					<td width='130px'><center><input type="checkbox" value="Nao Aferido" name='54a' <?php echo $r54Parte1; ?>>Não Aferido</center></td>
					<td width='300px' style='padding-left:20px;'><center><input type="text" class='single-input' value='<?php echo $r54Parte2; ?>' name='54b'>/min</center></td>
					<td width='300px'><center>Normal:15 a 20 mpm</center></td>
				  </tr>
				 </tbody>
			</table>
				
				<tr><td><h3><br>Exame Extrabucal</h3></td></tr> 
			
			<?php 
				$pieces = explode("-", $r55);
			if($pieces[0] == 'N/R'){
				$r55Parte1 = "<option value='N/R'>Não Respondido</option><option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				$r55Parte2 = '';
				$r55Parte3 = '';
				$r55Parte4 = '';
			}else{										
				if($pieces[0] == 'Sim'){
					$r55Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r55Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
				
					if($pieces[1] == 'Assimetria'){
						$r55Parte2 = 'checked';
					}else{ $r55Parte2 = '';}
					
					if($pieces[2] == 'Alteracoes na pele'){
						$r55Parte3 = 'checked';
					}else{ $r55Parte3 = '';}
					
					if($pieces[3] == 'Alteracoes em anexos cutaneos'){
						$r55Parte4 = 'checked';
					}else{ $r55Parte4 = '';}
				}
			?>
			<hr>
			<b>Exame da face: Normal?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<div class='mt-10'>
						<select class='single-input' name='55'>
							<?php echo $r55Parte1; ?>
						</select>
					</div>
				  </tr>
				  <tr><td><br></td></tr>
				  <tr>
					<td><center>
						<table border=0>
							<tr>
								<td width='100px'><center><input type="checkbox" value="Assimetria" name='55a' <?php echo $r55Parte2; ?>>Assimetria</center></td>
								<td width='165px'><center><input type="checkbox" value="Alteracoes na pele" name='55b' <?php echo $r55Parte3; ?>>Alterações na pele</center></td>
								<td width='270px'><center><input type="checkbox" value="Alteracoes em anexos cutaneos" name='55c' <?php echo $r55Parte4; ?>>Alterações em anexos cutâneos</center></td>
							</tr>
						</table></center>
					</td>
				  </tr>
				 </tbody>
			</table>			
			
			<?php 
				$pieces = explode("-", $r56);
			
			if($pieces[0] == 'N/R'){
				$r56Parte1 = "<option value='N/R'>Não Respondido</option><option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				$r56Parte2 = '';
				$r56Parte3 = '';
				$r56Parte4 = '';
				$r56Parte5 = '';
				$r56Parte6 = '';
				$r56Parte7 = '';
				$r56Parte8 = '';
				$r56Parte9 = "<option value='N/R'>Não Respondido</option><option value='Esquerdo'>Esquerdo</option><option value='Direito'>Direito</option>";
				$r56Parte10 = 'N/R';
			}else{				
				if($pieces[0] == 'Sim'){
					$r56Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r56Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
				
					if($pieces[1] == 'Bucinador'){
						$r56Parte2 = 'checked';
					}else{ $r56Parte2 = '';}
					
					if($pieces[2] == 'Submentoniana'){
						$r56Parte3 = 'checked';
					}else{ $r56Parte3 = '';}
					
					if($pieces[3] == 'Submandibular'){
						$r56Parte4 = 'checked';
					}else{ $r56Parte4 = '';}
					
					if($pieces[4] == 'Cervicais'){
						$r56Parte5 = 'checked';
					}else{ $r56Parte5 = '';}
					
					if($pieces[5] == 'Parotidea'){
						$r56Parte6 = 'checked';
					}else{ $r56Parte6 = '';}
					
					if($pieces[6] == 'Mastoidea'){
						$r56Parte7 = 'checked';
					}else{ $r56Parte7 = '';}
					
					if($pieces[7] == 'Occipital'){
						$r56Parte8 = 'checked';
					}else{ $r56Parte8 = '';}
					
					if($pieces[8] == 'Esquerdo'){
						$r56Parte9 = "<option value='Esquerdo'>Esquerdo</option><option value='Direito'>Direito</option>";
					}else{
						$r56Parte9 = "<option value='Direito'>Direito</option><option value='Esquerdo'>Esquerdo</option>";
					}
					
					
					$r56Parte10 = $pieces[9];
				}	
			?>
			<hr>
			<b>Exame das cadeias ganglionares: Linfonodos normais? Lado Comprometido; Tipo de Comprometimento</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<div class='mt-10'>
						<select class='single-input' name='56'>
							<?php echo $r56Parte1; ?>
						</select>
					</div>
				  </tr>
				  <tr>
					<td colspan=2>
						<center>
							<table border=0 style='margin-bottom:-25px;'>
								<tr>
									<td width='100px;'><br><center><input type="checkbox" value="Bucinador" name='56a' <?php echo $r56Parte2; ?>>Bucinador</center><br></td>
									<td width='145px;'><br><center><input type="checkbox" value="Submentoniana" name='56b' <?php echo $r56Parte3; ?>>Submentoniana</center><br></td>
									<td width='140px;'><br><center><input type="checkbox" value="Submandibular" name='56c' <?php echo $r56Parte4; ?>>Submandibular</center><br></td>
									<td width='90px;'><br><center><input type="checkbox" value="Cervicais" name='56d' <?php echo $r56Parte5; ?>>Cervicais</center><br></td>
									<td width='90px;'><br><center><input type="checkbox" value="Parotidea" name='56e' <?php echo $r56Parte6; ?>>Parotídea</center><br></td>
									<td width='100px;'><br><center><input type="checkbox" value="Mastoidea" name='56f' <?php echo $r56Parte7; ?>>Mastóidea</center><br></td>
									<td width='90px;'><br><center><input type="checkbox" value="Occipital" name='56g' <?php echo $r56Parte8; ?>>Occipital</center><br></td>
								</tr>
							</table>
						</center>
					</td>
				  </tr>
				  <tr>
					<td>
					<select class='single-input' name='56h' style='margin-top:20px;'>
							<?php echo $r56Parte9; ?>
					</select>
					</td>
					<td><br><input type="text" class='single-input' value='<?php echo $r56Parte10; ?>' name='56i'></td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r57);
			
			if($pieces[0] == 'N/R'){
				$r57Parte1 = "<option value='N/R'>Não Respondido</option><option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				$r57Parte2 = '';
				$r57Parte3 = '';
				$r57Parte4 = '';
				$r57Parte5 = "<option value='N/R'>Não Respondido</option><option value='Esquerdo'>Esquerdo</option><option value='Direito'>Direito</option>";
				$r57Parte6 = 'N/R';
			}else{		
				if($pieces[0] == 'Sim'){
					$r57Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r57Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
				
					if($pieces[1] == 'Parotida'){
						$r57Parte2 = 'checked';
					}else{ $r57Parte2 = '';}
					
					if($pieces[2] == 'Submandibular'){
						$r57Parte3 = 'checked';
					}else{ $r57Parte3 = '';}
					
					if($pieces[3] == 'Sublingual'){
						$r57Parte4 = 'checked';
					}else{ $r57Parte4 = '';}
					
					if($pieces[4] == 'Esquerdo'){
						$r57Parte5 = "<option value='Esquerdo'>Esquerdo</option><option value='Direito'>Direito</option>";
					}else{
						$r57Parte5 = "<option value='Direito'>Direito</option><option value='Esquerdo'>Esquerdo</option>";
					}
					
					$r57Parte6 = $pieces[5];
				}	
			?>
			<hr>
			<b>Exame de glândulas salivares : Normal? Lado Comprometido; Tipo de Comprometimento</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<div class='mt-10'>
						<select class='single-input' name='57'>
							<?php echo $r57Parte1; ?>
						</select>
					</div>
				  </tr>
				  <tr>
					<td colspan=2>
						<table width='100%'>
							<tr>
								<td><br><center><input type="checkbox" value="Parotida" name='57a' <?php echo $r57Parte2; ?>>Parótida</center><br></td>
								<td><br><center><input type="checkbox" value="Submandibular" name='57b' <?php echo $r57Parte3; ?>>Submandibular</center><br></td>
								<td><br><center><input type="checkbox" value="Sublingual" name='57c' <?php echo $r57Parte4; ?>>Sublingual</center><br></td>
							</tr>
						</table>
					</td>
				  </tr>
				  <tr>
					<td>
					<select class='single-input' name='57d'>
							<?php echo $r57Parte5; ?>
					</select>
					</td>
					<td colspan='2'><input type="text" class='single-input' value='<?php echo $r57Parte6; ?>' name='57e'></td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
			if($r59 == 'N/R'){
				$r59Parte1 = "<option value='N/R'>Não Respondido</option><option value='Sim'>Sim</option><option value='Nao'>Não</option>";
			}else{											
				if($r59 == 'Sim'){
					$r59Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r59Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
			}	
				//$r57Parte2 = $pieces[1];
					
			?>
			<hr>
			<b>Músculos da mastigação:  Normal?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<div class='mt-10'>
						<select class='single-input' name='59'>
							<?php echo $r59Parte1; ?>
						</select>
					</div>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r60);
			
			if($r60 == 'N/R'){
				$r60Parte1 = "<option value='N/R'>Não Respondido</option><option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				$r60Parte2 = "N/R";
			}else{	
				if($r60 == 'Sim'){
					$r60Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r60Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
				
				$r60Parte2 = $pieces[1];
				}	
			?>
			<hr>
			<b>ATM:  Normal? Quando?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<div class='mt-10'>
						<select class='single-input' name='60'>
							<?php echo $r60Parte1; ?>
						</select>
					</div>
				  </tr>
				  <tr>
					<td colspan='4'><input type="text" class='single-input' value='<?php echo $r60Parte2; ?>' name='60a'></td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r61);
			if($r61 == 'N/R'){
				$r61Parte1 = "<option value='N/R'>Não Respondido</option><option value='Sim'>Sim</option><option value='Nao'>Não</option>";
			}else{										
				if($r61 == 'Sim'){
					$r61Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r61Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
			}
				//$r61Parte2 = $pieces[1];
					
			?>
			<hr>
			<b>Lábio Superior:  Normal?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<div class='mt-10'>
						<select class='single-input' name='61'>
							<?php echo $r61Parte1; ?>
						</select>
					</div>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r62);
			if($r62 == 'N/R'){
				$r62Parte1 = "<option value='N/R'>Não Respondido</option><option value='Sim'>Sim</option><option value='Nao'>Não</option>";
			}else{											
				if($r62 == 'Sim'){
					$r62Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r62Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
				}
				//$r62Parte2 = $pieces[1];
					
			?>
			<hr>
			<b>Lábio Inferior:  Normal?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<div class='mt-10'>
						<select class='single-input' name='62'>
							<?php echo $r62Parte1; ?>
						</select>
					</div>
				  </tr>
				 </tbody>
			</table>

				
			<tr><td><h3><br>Exame Intrabucal</h3></td></tr>  
			
			<?php 
				$pieces = explode("-", $r63);
			if($r63 == 'N/R'){
				$r63Parte1 = "<option value='N/R'>Não Respondido</option><option value='Sim'>Sim</option><option value='Nao'>Não</option>";
			}else{											
				if($r63 == 'Sim'){
					$r63Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r63Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
				}
				//$r63Parte2 = $pieces[1];
					
			?>			
			<hr>
			<b>Mucosa Labial: Normal?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<div class='mt-10'>
						<select class='single-input' name='63'>
							<?php echo $r63Parte1; ?>
						</select>
					</div>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r64);
			if($pieces[0] == 'N/R'){
				$r64Parte1 = "<option value='N/R'>Não Respondido</option><option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				$r64Parte2 = "<option value='N/R'>Não Respondido</option><option value='Esquerdo'>Esquerdo</option><option value='Direito'>Direito</option>";
			}else{											
				if($pieces[0] == 'Sim'){
					$r64Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r64Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
			
				if($pieces[1] == 'Esquerdo'){
						$r64Parte2 = "<option value='Esquerdo'>Esquerdo</option><option value='Direito'>Direito</option>";
					}else{
						$r64Parte2 = "<option value='Direito'>Direito</option><option value='Esquerdo'>Esquerdo</option>";
					}
			}
			?>	
			<hr>
			<b>Mucosa Labial: Normal? Lado Comprometido</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<div class='mt-10'>
						<select class='single-input' name='64'>
							<?php echo $r64Parte1; ?>
						</select>
					</div>
					</tr>
					<tr><br>
						<select class='single-input' name='64a'>
							<?php echo $r64Parte2; ?>
						</select>
					</tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r65);
			
			if($pieces[0] == 'N/R'){
				$r65Parte1 = "<option value='N/R'>Não Respondido</option><option value='Sim'>Sim</option><option value='Nao'>Não</option>";
			}else{	
				if($pieces[0] == 'Sim'){
					$r65Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r65Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
			}		
			?>	
			<hr>
			<b>Mucosa Gengival: Normal?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<div class='mt-10'>
						<select class='single-input' name='65'>
							<?php echo $r65Parte1; ?>
						</select>
					</div>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r66);
				
			if($pieces[0] == 'N/R'){
				$r66Parte1 = "<option value='N/R'>Não Respondido</option><option value='Sim'>Sim</option><option value='Nao'>Não</option>";
			}else{									
				if($pieces[0] == 'Sim'){
					$r66Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r66Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
			}	
			?>	
			<hr>
			<b>Palato Duro: Normal?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<div class='mt-10'>
						<select class='single-input' name='66'>
							<?php echo $r66Parte1; ?>
						</select>
					</div>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r67);
				
			if($pieces[0] == 'N/R'){
				$r67Parte1 = "<option value='N/R'>Não Respondido</option><option value='Sim'>Sim</option><option value='Nao'>Não</option>";
			}else{									
				if($pieces[0] == 'Sim'){
					$r67Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r67Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
			}	
			?>	
			<hr>
			<b>Palato Mole: Normal?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<div class='mt-10'>
						<select class='single-input' name='67'>
							<?php echo $r67Parte1; ?>
						</select>
					</div>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r68);
			if($pieces[0] == 'N/R'){
				$r68Parte1 = "<option value='N/R'>Não Respondido</option><option value='Sim'>Sim</option><option value='Nao'>Não</option>";
			}else{									
				if($pieces[0] == 'Sim'){
					$r68Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r68Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
			}		
			?>	
			<hr>
			<b>Ístmo da Fauce (Amígdala e Orofaringe): Normal?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<div class='mt-10'>
						<select class='single-input' name='68'>
							<?php echo $r68Parte1; ?>
						</select>
					</div>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r69);
			if($pieces[0] == 'N/R'){
				$r69Parte1 = "<option value='N/R'>Não Respondido</option><option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				$r69Parte2 = "";
				$r69Parte3 = "";
				$r69Parte4 = "";
				$r69Parte5 = "";
			}else{									
				if($pieces[0] == 'Sim'){
					$r69Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r69Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
				
					if($pieces[1] == 'Dorso'){
						$r69Parte2 = 'checked';
					}else{ $r69Parte2 = '';}
					
					if($pieces[2] == 'Ventre'){
						$r69Parte3 = 'checked';
					}else{ $r69Parte3 = '';}
					
					if($pieces[3] == 'Borda Direita'){
						$r69Parte4 = 'checked';
					}else{ $r69Parte4 = '';}
					
					if($pieces[4] == 'Borda Esquerda'){
						$r69Parte5 = 'checked';
					}else{ $r69Parte5 = '';}
					}
			?>	
			<hr>
			<b>Língua: Normal?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<div class='mt-10'>
						<select class='single-input' name='69'>
							<?php echo $r69Parte1; ?>
						</select>
					</div>
				  </tr>
				  <tr>
					<td>
					<center>
						<table>
							<tr>
								<td width='100px'><br><center><input type="checkbox" value="Dorso" name='69a' <?php echo $r69Parte2; ?>>Dorso</center></td>
								<td width='100px'><br><center><input type="checkbox" value="Ventre" name='69b' <?php echo $r69Parte3; ?>>Ventre</center></td>
								<td width='100px'><br><center><input type="checkbox" value="Borda Direita" name='69c' <?php echo $r69Parte4; ?>>Borda Direita</center></td>
								<td width='100px'><br><center><input type="checkbox" value="Borda Esquerda" name='69d' <?php echo $r69Parte5; ?>>Borda Esquerda</center></td>
							</tr>
						</table>
					</center>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<?php 
				$pieces = explode("-", $r70);
			
			if($pieces[0] == 'N/R'){
				$r70Parte1 = "<option value='N/R'>Não Respondido</option><option value='Sim'>Sim</option><option value='Nao'>Não</option>";
			}else{
				if($pieces[0] == 'Sim'){
					$r70Parte1 = "<option value='Sim'>Sim</option><option value='Nao'>Não</option>";
				}else{
					$r70Parte1 = "<option value='Nao'>Não</option><option value='Sim'>Sim</option>";
				}
			}		
			?>	
			<hr>
			<b>Soalho Bucal: Normal?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<div class='mt-10'>
						<select class='single-input' name='70'>
							<?php echo $r70Parte1; ?>
						</select>
					</div>
				  </tr>
				 </tbody>
			</table>	  
				  
				  
				 </tbody>
			</table>
			<hr>
			
			<input type='submit' class="genric-btn primary" value='Salvar'>
			
			</form>
			<hr>
			<center><a class="genric-btn primary" href='anamnese.php?cpf=<?php echo $_GET['cpf']; ?>'>Voltar</a></center>
		

								
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
		
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
									<center><a href="https://multivix.edu.br/"><i><img width='50%' height='10%' src='../img/Logo-Multivix.png'></i></a></center>
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

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "<input type='submit' class='genric-btn primary' value='Salvar Anamnese'>";
  } else {
    document.getElementById("nextBtn").innerHTML = "Próxima";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}
</script>

<?php
/*
			
			Tipo Anamnese
			
			-- Questonamento Geral --
			
1	-	Queixa Principal e Duração	-	1 e 1a
2	-	História da Doença Atual	-	2
3	-	Está em tratamento médico atualmente? Qual o motivo? Qual médico/especialidade?	-	3, 3a e 3b
4	-	Faz Uso de Medicamentos? Quais?	-	4 e 4a
5	-	É alérgico ou já teve alguma reação alérgica? Medicamentos; Metais; Alimentos; Cosméticos; Outros	-	5, 5a, 5b,5c, 5d, 5e
6	-	Já teve urticária? Quando? O que provocou?	-	6, 6a, 6b
7	-	Tomou Antibiótico Recentemente? Qual?	-	7 e 7a
8	-	Tomou Corticóide Recentemente?	-	
9	-	Esteve acamado por longo tempo nos últimos anos? Por Quanto Tempo? Qual o motivo?	-	9, 9a e 9b
10	-	Já Foi Hospitalizado? Qual o Motivo?	-	10 e 10a
11	-	Já Foi Submetido a Alguma Cirurgia? Qual?	-	11 e 11a
12	-	Já Tomou Algum Tipo de Anestesia? Teve alguma reação? Qual tipo? Qual o motivo?	-	12, 12a, 12b, 12c
13	-	Costuma sangrar muito quando se corta ou é submetido à cirurgia?	-	13
14	-	Quando se corta ou é submetido à cirurgia demora para cicatrizar?	-	14
15	-	Alguma vez precisou de transfusão de sangue?	-	15, 15a
16	-	Usa alguma prótese no coração, osso ou articulação?	-	16, 16a, 16b
17	-	Tem ou teve febre reumática?	-	17
18	-	Suas juntas doem ou incham com frequência?	-	18
19	-	Sente falta de ar e cansaço com frequência?	-	19
20	-	Sente falta de ar quando se deita?	-	20
21	-	Costuma ter os pés ou pernas inchados?	-	21
22	-	Sente palpitações ou dores no peito?	-	22
23	-	Tem tido tosse persistente?	-	23
24	-	Já escarrou sangue?	-	24
25	-	Já vomitou sangue?	-	25
26	-	Costuma urinar mais de seis vezes ao dia? Em grande quantidade?	-	26 e 26a
27	-	Sente-se com sede a maior parte do tempo? 	-	27
28	-	Tem comido muito ultimamente?	-	28
29	-	Tem perdido peso sem causa aparente? Quantos quilos?	-	29 e 29a
30	-	Sente dor ao urinar?	-	30
31	-	Faz hemodiálise?	-	31
32	-	Já fez algum transplante? Qual orgão? Há quanto tempo?	-	32, 32a e 32b
33	-	Tem ou já teve câncer/tumor? Em que região? Há quanto tempo? Qual foi o tratamento?	-	33, 33a, 33b e 33c
34	-	Tem infecções com frequência?	-	34
35	-	Está ou esteve em tratamento psiquiátrico ou com psicólogo? Para que tipo de problema?	-	35 e 35a
36	-	Tem sentido dormência em alguma parte do seu corpo?	-	36 e 36a
37	-	Tem frequentes desmaios ou tonturas? Qual região?	-	37 e 37a
38	-	Dorme bem?	-	38
39	-	Apresenta alguma doença infectocontagiosa sexualmente transmissível?	-	39 e 39a
40	-	 Apresenta alguma deficiência física?	-	40
41	-	É fumante? Quantos cigarros por dia? Fuma/fumou por quanto tempo? Parou de fumar há quanto tempo? Fuma/fumava que tipo de cigarro?	-	41, 41a, 41b,  41c e 41d
42	-	Bebe? Qual dose por dia? Bebe por quanto tempo? Parou de beber há quanto tempo? Bebe o que?	-	42, 42a, 42b,  42c e 42d
43	-	Drogas	-	43, 43a, 43b,  43c e 43d
44	-	Problema respiratorio? Qual?	-	44
45	-	Apresenta problemas cardiovasculares? Insuficiencia Cardiaca; Angina; Infarto Do Miocardio; Cardiopatia Congenita; Sopro Cardiaco; Marcapasso; Aneurisma; Hipertensao; Hipotensao; Endocardite; Varizes; Arteriosclerose; Outros?	-	45
46	-	Apresenta problemas hematológicos? Anemia; Hemofilia; Hemorragia; Leucemia; Outros?	-	46
47	-	Apresenta problemas gastrintestinais? Gastrite; Úlcera; Azia; Diarréia Persistente; Prisão De Ventre; Ânsia De Vômito Frequente; Colite; Outros?	-	47
48	-	Apresenta problemas músculo-esqueletais? Artrite Reumatóide; Osteoartrite; Artrose; Escoliose; Hérnia De Disco; Reumatismo; Fraturas Frequentes; Osteoporose; Outros?	-	48
49	-	Apresenta problemas endócrinos? Diabetes; Hipoglicemia; Hipertireoidismo; Hipotireoidismo; Hiperparatireoidismo; Outros?	-	49
50	-	Apresenta problemas cardiovasculares? Depressão; Dor Nos Olhos; Distúrbios Visuais; Glaucoma; Dores De Ouvido; Zumbidos No Ouvido; Perda De Audição; Convulsão/Epilepsia; Nervosismo Em Excesso; Tique Nervoso; Distúrbios Da Fala; Derrame; Outros?	-	50
51		Pulso	-	51
52		Pressão	-	52
53		Temperatura	-	53
54		Frequencia Respiratória	-	54
55		Exame da face: Normal? Assimetria; Alterações na pele; Alterações em anexos cutâneos	-	55, abc
56		Exame das cadeias ganglionares: Linfonodos normais? Bucinador; Submentoniana; Submandibular; Cervicais; Parotidea; Mastoidea; Occipital; Lado Comprometido; Tipo de Comprometimento	-	56 abcdefghi
57		57 Exame de glândulas salivares : Normal? Parotida; Submandibular; Sublingual; Lado Comprometido; Tipo de Comprometimento	-	57 abcde
58		58 Exame da saliva: Normal? Muito Fluida; Viscosa; Com pus; Com sangue; Outra Alteração	-	58 abcde
59		59 Músculos da mastigação:  Normal?	-	59
60		60 ATM:  Normal? Quando?	-	60
61		61 Lábio Superior:  Normal?	-	61
62		62 Lábio Inferior:  Normal?	-	62
63		Mucosa Labial: Normal?	-	63
64		Mucosa Labial: Normal? Lado Comprometido	-	64 a
65		Mucosa Gengival: Normal?	-	65
66		Palato Duro: Normal?	-	66
67		Palato Mole: Normal?	-	67
68		Ístmo da Fauce (Amígdala e Orofaringe): Normal?	-	68
69		Língua: Normal? Dorso; Ventre; Borda Direita; Borda Esquerda	-	69 abcd
70		Soalho Bucal: Normal?	-	70

			
			*/
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