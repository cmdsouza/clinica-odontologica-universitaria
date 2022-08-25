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

$sqlAnam = "SELECT * FROM tb_anamnese WHERE nr_cpfPaciente ='".$_GET['cpf']."'";
$resultadoAnam = mysql_query($sqlAnam) or die();
$numImg = mysql_num_rows($resultadoAnam);
if($numImg == 0){
	$anamnese = "Primeira";
}else{
	while($linhaAnam = mysql_fetch_array($resultadoAnam)){
		$id = $linhaAnam['nr_idAnamnese'];
	}
	$anamnese = "Feita";
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
					  
					  <li class="menu-has-children"><a href="">Paciente <?php echo $paciente ?></a>
			            <ul>
			              <li><a href="anamnese.php">Anamnese</a></li>
			              <li><a href="anamnese.php">Odontograma</a></li>
			              <li><a href="prontuario.php">Exames de Imagem</a></li>
			              <li><a href="endodontia.php">Endodontia</a></li>
			              <li><a href="periodontia.php">Periodontia</a></li>
			            </ul>
			          </li>
					  
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
								
									echo "<h2 class='text-white'>Editar a 1ª Parte da Anamnese ".$d." ".$paciente."</h2>";					
								?>
							</div>							
						</div>
					</div>
				</div>
			</section>		
			<!-- End banner Area -->	
			
			<br>
			<?php
			
			$sqlNome5 = "SELECT * FROM tb_anamnese WHERE nr_cpfPaciente = '".$_GET['cpf']."'";
			$resultadoNome5 = mysql_query($sqlNome5) or die();
			while($linhaNome5 = mysql_fetch_array($resultadoNome5)){
				$dupla = $linhaNome5['nr_idDupla'];
				$dtPreenchimento = $linhaNome5['dt_preenchimento'];
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
			
			
			echo "
			
			<!-- Start Align Area -->
			<div class='whole-wrap'>
				<div class='container'>
					<div class='section'>
						<div class='row'>
							<div class='col-lg-12 col-md-12'>
							
							
							<form method='POST' action='atualizarAnamnese1e2.php'>
								<b>Dupla Responsável</b>
								<div class='mt-10'>
									<select class='single-input' name='dupla'>
			";
			
						$sqlNome = "SELECT * FROM tb_duplas WHERE nr_idDupla =".$dupla;
						$resultadoNome = mysql_query($sqlNome) or die(mysql_error());
						while($linhaNome = mysql_fetch_array($resultadoNome)){
							
							$sqlNome1 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linhaNome['nr_cpf1']."'";
							$resultadoNome1 = mysql_query($sqlNome1) or die(mysql_error());
							while($linhaNome1 = mysql_fetch_array($resultadoNome1)){
								$nome1 = $linhaNome1['nm_nomeAluno']; 
								$periodo = $linhaNome1['nr_periodo']; 
							}
							
							$sqlNome2 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linhaNome['nr_cpf2']."'";
							$resultadoNome2 = mysql_query($sqlNome2) or die(mysql_error());
							while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
								$nome2 = $linhaNome2['nm_nomeAluno']; 
							}
							
							
							echo "<option value='".$linhaNome['nr_idDupla']."'>".$nome1." e ".$nome2." (".$periodo."º Periodo)</option>";
						}
			
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
								
								if($linhaNome['nr_idDupla'] == $dupla){}else{
									echo "<option value='".$linhaNome['nr_idDupla']."'>".$nome1." e ".$nome2." (".$periodo."º Periodo)</option>";
								}
						}
			
			echo "
					</select>
				
				<br>
				
				<b>Data Preenchimento</b>
						<div class='mt-10'>
							<input type='text' name='data' value='".$dtPreenchimento."' class='single-input'>
					</div>
			";
			?>
			
			<input type='hidden' name='paciente' value='<?php echo $_GET['cpf']; ?>'>
			
			<style>
				body {
					font-size: 16px;
				}
			</style>
			
			<hr>
			<b>Queixa Principal e Duração</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='1' class='single-input' placeholder='Queixa Principal'>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' name='1a' class='single-input' placeholder='Duração'>
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
							<input type='text' name='2' class='single-input' placeholder='História da Doença'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Está em tratamento médico atualmente?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='3'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
					<td>
						<div class='mt-10'>
								<input type='text' name='3a' class='single-input' placeholder='Qual o motivo?'>
						</div>
					</td>
				  </tr>
				  <tr>
					<td colspan='2'>
						<div class='mt-10'>
							<input type='text' name='3b' class='single-input' placeholder='Qual médico/especialidade?'>
						</div>
					</td>
				 </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Faz Uso de Medicamentos?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='4'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' name='4a' class='single-input' placeholder='Quais?'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>É alérgico ou já teve alguma reação alérgica?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='5'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
					<td><center><input type="checkbox" value="Medicamentos" name='5a'>Medicamentos</center></td>
					<td><center><input type="checkbox" value="Metais" name='5b'>Metais</center></td>
					<td><center><input type="checkbox" value="Alimentos" name='5c'>Alimentos</center></td>
					<td><center><input type="checkbox" value="Cosmeticos" name='5d'>Cosméticos</center></td>
				  </tr>
				  <tr>
					<td colspan='5'>
						<div class='mt-10'>
							<input type='text' name='5e' class='single-input' placeholder='Outros'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Já teve urticária?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='6'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' name='6a' class='single-input' placeholder='Quando?'>
						</div>
					</td>
				  </tr>
				  <tr>
					<td colspan='2'>
						<div class='mt-10'>
							<input type='text' name='6b' class='single-input' placeholder='O que provocou?'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Tomou Antibiótico Recentemente?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='7'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' name='7a' class='single-input' placeholder='Qual?'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Tomou Corticóide Recentemente?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='8'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' name='8a' class='single-input' placeholder='Qual?'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Esteve acamado por longo tempo nos últimos anos?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='9'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' name='9a' class='single-input' placeholder='Por Quanto Tempo?'>
						</div>
					</td>
				  </tr>
				  <tr>
					<td colspan='2'>
						<div class='mt-10'>
							<input type='text' name='9b' class='single-input' placeholder='Qual o motivo?'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Já Foi Hospitalizado?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='10'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' name='10a' class='single-input' placeholder='Qual o Motivo?'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Já Foi Submetido a Alguma Cirurgia?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='11'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' name='11a' class='single-input' placeholder='Qual?'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Já Tomou Algum Tipo de Anestesia?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='12'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='12c'>
								<option value=''>Teve alguma reação?</option>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='12a' class='single-input' placeholder='Qual tipo?'>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' name='12b' class='single-input' placeholder='Qual o motivo?'>
						</div>
					</td>
				  </tr>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Costuma sangrar muito quando se corta ou é submetido à cirurgia?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='13'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Quando se corta ou é submetido à cirurgia demora para cicatrizar?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='14'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Alguma vez precisou de transfusão de sangue?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='15'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' name='15a' class='single-input' placeholder='Há Quanto Tempo?'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Usa alguma prótese no coração, osso ou articulação?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='16'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
				  </tr>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='16a' class='single-input' placeholder='Qual?'>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' name='16b' class='single-input' placeholder='Há Quanto Tempo?'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Tem ou teve febre reumática?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='17'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Suas juntas doem ou incham com frequência?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='18'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Sente falta de ar e cansaço com frequência? </b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='19'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Sente falta de ar quando se deita? </b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='20'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Costuma ter os pés ou pernas inchados? </b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='21'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Sente palpitações ou dores no peito? </b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='22'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Tem tido tosse persistente? </b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='23'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Já escarrou sangue? </b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='24'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Já vomitou sangue? </b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='25'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Costuma urinar mais de seis vezes ao dia? </b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='26'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='26a'>
								<option value=''>Em grande quantidade?</option>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			<hr>
			
			<input type='submit' class="genric-btn primary" value='Salvar e Continuar'>
			</form>
			
			<?php
			
			echo "</div></div></div></div></div>";
			
			?>
			
			
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