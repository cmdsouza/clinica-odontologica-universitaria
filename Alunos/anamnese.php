<?php
session_start();
date_default_timezone_set('america/sao_paulo');
include "../conexao.php";

header('Content-Type: text/html; charset=utf-8');
	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');

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
								
									if($anamnese == "Primeira"){
										echo "<h2 class='text-white'>Iniciar a Anamnese ".$d." ".$paciente."</h2>";
									}else{
										echo "<h2 class='text-white'>Consultar a Anamnese ".$d." ".$paciente."</h2>";
									}								
								?>
							</div>							
						</div>
					</div>
				</div>
			</section>		
			<!-- End banner Area -->
		<br>
		
			
	<?php
	
	if($anamnese == "Primeira"){
		
		if($idade < 12){
			echo "
			
			<!-- Start Align Area -->
			<div class='whole-wrap'>
				<div class='container'>
					<div class='section'>
						<div class='row'>
							<div class='col-lg-12 col-md-12'>
							
							
							<form method='POST' action='inserirAnamneseInfantil.php'>
								<p>Dupla Responsável</p>
								<div class='mt-10'>
									<select class='single-input' name='dupla'>
			";
			
						$sqlNome = "SELECT * FROM tb_duplas WHERE nm_situacao = 'Ativo'";
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
			
			echo "
					</select>
				
				<br>
				
				<p>Data Preenchimento</p>
						<div class='mt-10'>
							<input type='date' name='data' class='single-input'>
					</div>
			";
			?>
			
			<input type='hidden' name='paciente' value='<?php echo $_GET['cpf']; ?>'>
						
			<hr>
			<b>Qual queixa principal? (prevenção, dor, dúvida, cárie, traumatismo dentário)</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='1' class='single-input' placeholder='Queixa Principal'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Qual tipo de parto da criança?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='2' class='single-input' placeholder='Tipo de Parto'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Alguma complicação na gestação ou ao nascimento?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='3' class='single-input' placeholder='Complicação na gestação / nascimento'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
						
			<hr>
			<b>Já teve catapora, sarampo ou caxumba?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='4' class='single-input' placeholder='Catapora, sarampo ou caxumba?'>
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
							<input type='text' name='5' class='single-input' placeholder='Tratamento Médico Atualmente?'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Está fazendo uso de algum medicamento?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='6' class='single-input' placeholder='Medicamento?'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Já sofreu alguma cirurgia? Qual motivo? (dentária ou geral)</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='7' class='single-input' placeholder='Cirurgia?'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Apresenta alergia a algum medicamento ou alimento?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='8' class='single-input' placeholder='Alergia?'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Quem realiza a escovação dos dentes da criança? (criança, responsáveis, ambos)</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='9' class='single-input' placeholder='Escovação'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Quantas vezes é feita a escovação? E quando?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='10' class='single-input' placeholder='Vezes de Escovação'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Qual pasta de dente utiliza? (sabe informar se é com ou sem flúor?)</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='11' class='single-input' placeholder='Pasta de dente (com ou sem flúor?)'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>A criança toma mamadeira a noite? Essa mamadeira é de que?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='12' class='single-input' placeholder='Mamadeira'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>A criança se alimenta a noite? Regularmente é feita escovação após última refeição?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='13' class='single-input' placeholder='Alimentação'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>A criança frequenta creche ou escola? Qual período?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='14' class='single-input' placeholder='Estudos'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>A criança tem horários específicos de refeição ou tem acesso a alimentos a qualquer momento?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='15' class='single-input' placeholder='Horários das Refeições'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Quais atividades de interesse de lazer da criança? (esporte, time de futebol, desenho animado, artista, amigo de escola)</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='16' class='single-input' placeholder='Lazer'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>A criança chupa chupeta ou dedo? Se sim, quando?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='17' class='single-input' placeholder='Chupa chupeta ou o dedo?'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Apresentação de higiene geral da criança: unhas, cabelo e pele.</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='18' class='single-input' placeholder='Higiene Geral'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Ao exame clínico: criança apresenta alguma assimetria facial?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='19' class='single-input' placeholder='Assimetria Facial?'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Selamento labial</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='20' class='single-input' placeholder='Selamento labial'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Aspecto facial de síndrome de respiração bucal? Qual?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='21' class='single-input' placeholder='Sindrome de Respiração Bucal'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Alteração em: lábios, mucosa, assoalho, palato e/ou língua?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='22' class='single-input' placeholder='Alterações'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Se dentição decídua: Qual tipo de arco? Qual relação terminal de segundos molares decíduos?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='23' class='single-input' placeholder='Dentição Decídua'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Se dentição mista: Qual estágio?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='24' class='single-input' placeholder='Dentição Mista'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Alguma alteração na sequência ou cronologia de erupção?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='25' class='single-input' placeholder='Sequência de Erupção'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Alguma maloclusão identificada?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='26' class='single-input' placeholder='Maloclusão Identificada'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Quais exames radiográficos solicitados?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='27' class='single-input' placeholder='Exames Radiográficos'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
		
			<br><hr>
		<input type='submit' class="genric-btn primary" value='Salvar'>
			</form>
			
			<?php
			
			echo "</div></div></div></div></div>";	
			
				
		}else{
			
			echo "
			
			<!-- Start Align Area -->
			<div class='whole-wrap'>
				<div class='container'>
					<div class='section'>
						<div class='row'>
							<div class='col-lg-12 col-md-12'>
							
							
							<form method='POST' action='inserirAnamnesePrimeiraParte.php'>
								<b>Dupla Responsável</b>
								<div class='mt-10'>
									<select class='single-input' name='dupla'>
			";
			
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
			
			echo "
					</select>
				
				<br>
				
				<b>Data Preenchimento</b>
						<div class='mt-10'>
							<input type='date' name='data' class='single-input'>
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
		}		
	
}else{
	
	if($idade < 12){
	
		
		
		
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
		
		<!-- Start Align Area -->
			<div class='whole-wrap'>
				<div class='container'>
					<div class='section'>
						<div class='row'>
							<div class='col-lg-12 col-md-12' style='font-size:20px'>
								<?php 
								
									echo "<h5><b>Data de Preenchimento:</b> ".$dataPreenchimento."</h5>";
									echo "<h5><b>Alunos Responsáveis:</b> ".$nome1." e ".$nome2."</h5><hr>";
									echo "<h3>Perguntas: <a href='editarAnamneseInfantil.php?cpf=".$_GET['cpf']."'><image src='icones/edit.png'></a></h3><br>";
									$sqlNome5 = "SELECT * FROM tb_anamnese WHERE nr_cpfPaciente = '".$_GET['cpf']."'";
									$resultadoNome5 = mysql_query($sqlNome5) or die();
									while($linhaNome5 = mysql_fetch_array($resultadoNome5)){
										echo $r1 = "<b>Qual queixa principal? (prevenção, dor, dúvida, cárie, traumatismo dentário) </b>".$linhaNome5['1']."<br>";
										echo $r2 = "<b>Qual tipo de parto da criança? </b>".$linhaNome5['2']."<br>";
										echo $r3 = "<b>Alguma complicação na gestação ou ao nascimento? </b>".$linhaNome5['3']."<br>";
										echo $r4 = "<b>Já teve catapora, sarampo ou caxumba? </b>".$linhaNome5['4']."<br>";
										echo $r5 = "<b>Está em tratamento médico atualmente? </b>".$linhaNome5['5']."<br>";
										echo $r6 = "<b>Está fazendo uso de algum medicamento? </b>".$linhaNome5['6']."<br>";
										echo $r7 = "<b>Já sofreu alguma cirurgia? Qual motivo? (dentária ou geral) </b>".$linhaNome5['7']."<br>";
										echo $r8 = "<b>Apresenta alergia a algum medicamento ou alimento? </b>".$linhaNome5['8']."<br>";
										echo $r9 = "<b>Quem realiza a escovação dos dentes da criança? (criança, responsáveis, ambos) </b>".$linhaNome5['9']."<br>";
										echo $r10 = "<b>Quantas vezes é feita a escovação? E quando? </b>".$linhaNome5['10']."<br>";
										echo $r11 = "<b>Qual pasta de dente utiliza? (sabe informar se é com ou sem flúor?) </b>".$linhaNome5['11']."<br>";
										echo $r12 = "<b>A criança toma mamadeira a noite? Essa mamadeira é de que? </b>".$linhaNome5['12']."<br>";
										echo $r13 = "<b>A criança se alimenta a noite? Regularmente é feita escovação após última refeição? </b>".$linhaNome5['13']."<br>";
										echo $r14 = "<b>A criança frequenta creche ou escola? Qual período? </b>".$linhaNome5['14']."<br>";
										echo $r15 = "<b>A criança tem horários específicos de refeição ou tem acesso a alimentos a qualquer momento? </b>".$linhaNome5['15']."<br>";
										echo $r16 = "<b>Quais atividades de interesse de lazer da criança? (esporte, time de futebol, desenho animado, artista, amigo de escola) </b>".$linhaNome5['16']."<br>";
										echo $r17 = "<b>A criança chupa chupeta ou dedo? Se sim, quando? </b>".$linhaNome5['17']."<br>";
										echo $r18 = "<b>Apresentação de higiene geral da criança: unhas, cabelo e pele. </b>".$linhaNome5['18']."<br>";
										echo $r19 = "<b>Ao exame clínico: criança apresenta alguma assimetria facial? </b>".$linhaNome5['19']."<br>";
										echo $r20 = "<b>Selamento labial? </b>".$linhaNome5['20']."<br>";
										echo $r21 = "<b>Aspecto facial de síndrome de respiração bucal? Qual? </b>".$linhaNome5['21']."<br>";
										echo $r22 = "<b>Alteração em: lábios, mucosa, assoalho, palato e/ou língua? </b>".$linhaNome5['22']."<br>";
										echo $r23 = "<b>Se dentição decídua. Qual tipo de arco? Qual relação terminal de segundos molares decíduos? </b>".$linhaNome5['23']."<br>";
										echo $r24 = "<b>Se dentição mista. Qual estágio? </b>".$linhaNome5['24']."<br>";
										echo $r25 = "<b>Alguma alteração na sequência ou cronologia de erupção? </b>".$linhaNome5['25']."<br>";
										echo $r26 = "<b>Alguma maloclusão identificada? </b>".$linhaNome5['26']."<br>";
										echo $r27 = "<b>Quais exames radiográficos solicitados? </b>".$linhaNome5['27']."<br>";
									}
			echo "</div>
			
			</div></div></div></div>";
		
		
		
		
		
		
		
		
	
	}else{
		
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
		
		<!-- Start Align Area -->
			<div class='whole-wrap' style='font-size:18px;'>
				<div class='container'>
					<div class='section'>
						<div class='row'>
							<div class='col-lg-12 col-md-12'>
								<?php 
								
									echo "<h5><b>Data de Preenchimento:</b> ".$dataPreenchimento."</h4>";
									echo "<h5><b>Alunos Responsáveis:</b> ".$nome1." e ".$nome2."</h4><hr>";
									
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
								
								
								
							<!-- ************************************************************************** -->
							

							<?php
							
							if(($r27 == 'N/R') || (($r50 == 'N/R') || ($r50 == 'N/R------------- N/R'))){
								$imagem = 'cancel.png';
								$alt = 'Existem Perguntas Não Respondidas!';
								echo "<a href='anamnese2.php?cpf=".$_GET['cpf']."'><h3>Perguntas Gerais <img src='icones/".$imagem."'></h3></a><br>";
							}else{
								echo "<h3>Perguntas Gerais <img src='icones/checked.png' width='28px' height='28px'></h3><br>";
							}
							
							?>
							
							<style>
								body{
									color: black;
								}
							</style>
							
							<b>Queixa Principal:</b> 
								<?php
									$pieces = explode("-", $r1);
									echo $pieces[0]."<br>";
								?>
									</td>
							<b>Duração:</b>  <?php echo $pieces[1]."<br>"; ?>
							<b>Historia da Doença Atual:</b>  <?php echo $r2."<br>"; ?>
							<b>Está em tratamento médico atualmente?</b>
								<?php 
									$pieces = explode("-", $r3);
												
									if($pieces[0] == 'Sim'){
										echo "Sim";
										echo "<b>; Qual o médico/especialidade?</b>".$pieces[1]."
											  <b>; Qual o motivo?</b>".$pieces[2]."<br>";
									}else{
										if($r3 == 'N/R'){
											echo "Não Respondido<br>";
										}else{
											echo "Não<br>";
										}
									}
											?>
							<b>Faz uso de algum medicamento atualmente?</b>
								<?php 
									$pieces = explode("-", $r4);
												
									if($pieces[0] == 'Sim'){
										echo "Sim";
										echo "<b>; Qual(is)?</b>".$pieces[1]."<br>";
									}else{
										if($r4 == 'N/R'){
											echo "Não Respondido<br>";
										}else{
											echo "Não<br>";
										}
									}
								?>
							
							
							<b>É alérgico ou já teve alguma reação alérgica?</b>
									<?php 
										$pieces = explode("-", $r5);
													
										if($pieces[0] == 'Sim'){
											echo "Sim";
											if($pieces[1] == 'Medicamentos'){
												echo "; Medicamentos";
											}
											
											if($pieces[2] == 'Metais'){
												echo "; Metais";
											}
											
											if($pieces[3] == 'Alimentos'){
												echo "; Alimentos";
											}
											
											if($pieces[4] == 'Cosmeticos'){
												echo "; Cosmeticos";
											}
											
											echo "; Outros: ".$pieces[5];
										}else{
											if($r5 == 'N/R'){
												echo "Não Respondido";
											}else{
												echo "Não";
											}
										}
									?>
							
							<br>
							<b>Já teve urticária?</b>
								<?php 
									$pieces = explode("-", $r6);
												
									if($pieces[0] == 'Sim'){
										echo "Sim ";
										echo "<b>; Quando?</b>".$pieces[1]." <b>O que provocou?</b>".$pieces[2]."<br>";
									}else{
										if($r6 == 'N/R'){
											echo "Não Respondido<br>";
										}else{
											echo "Não<br>";
										}
									}
											?>
									
									</tr>
							</table>
							
							<b>Tomou antibiótico recentemente?</b>  
								<?php 
									$pieces = explode("-", $r7);
												
									if($pieces[0] == 'Sim'){
										echo "Sim ";
										echo "<b>; Qual? </b>".$pieces[1]."<br>";
									}else{
										if($r7 == 'N/R'){
											echo "Não Respondido<br>";
										}else{
											echo "Não<br>";
										}
									}
								?>
								
							<b>Tomou corticóide recentemente?</b>  
								<?php 
									$pieces = explode("-", $r8);
												
									if($pieces[0] == 'Sim'){
										echo "Sim";
										echo "<b>; Quando? </b>".$pieces[1]."<br>";
									}else{
										if($r8 == 'N/R'){
											echo "Não Respondido<br>";
										}else{
											echo "Não<br>";
										}
									}
								?>  
							
							<b>Esteve acamado por longo tempo nos últimos anos?</b>  
								<?php 
									$pieces = explode("-", $r9);
													
									if($pieces[0] == 'Sim'){
										echo "Sim";
										echo "<b>; Por quanto tempo? </b>".$pieces[1];
										echo "<b>; Qual o motivo? </b>".$pieces[2]."<br>";
									}else{
										if($r9 == 'N/R'){
											echo "Não Respondido<br>";
										}else{
											echo "Não<br>";
										}
									}
								?> 
							
							<b>Já foi hospitalizado?</b>
								<?php 
									$pieces = explode("-", $r10);
													
									if($pieces[0] == 'Sim'){
										echo "Sim";
										echo "<b>; Qual o motivo?</b>".$pieces[1]."<br>";
									}else{
										if($r10 == 'N/R'){
											echo "Não Respondido<br>";
										}else{
											echo "Não<br>";
										}
									}
								?> 
							
							<b>Já foi submetido a alguma cirurgia?</b>
								<?php 
									$pieces = explode("-", $r11);
													
									if($pieces[0] == 'Sim'){
										echo "Sim";
										echo "<b>; Qual? </b>".$pieces[1]."<br>";
									}else{
										if($r11 == 'N/R'){
											echo "Não Respondido<br>";
										}else{
											echo "Não<br>";
										}
									}
								?>
							
							<b>Já tomou algum tipo de anestesia?</b>
								<?php 
									$pieces = explode("-", $r12);
													
									if($pieces[0] == 'Sim'){
										echo "Sim";
										echo "<b>; Teve alguma reação?</b> ".$pieces[1];
										echo "<b>; De que tipo? </b>".$pieces[2];
										echo "<b>; Qual o motivo? </b>".$pieces[3]."<br>";
									}else{
										if($r12 == 'N/R'){
											echo "Não Respondido<br>";
										}else{
											echo "Não<br>";
										}
									}
								?>
							<b>Costuma sangrar muito quando se corta ou é submetido à cirurgia?</b>
											<?php 
												$pieces = explode("-", $r13);
													
												if($pieces[0] == 'Sim'){
													echo "Sim<br>";
												}else{
													if($r13 == 'N/R'){
														echo "Não Respondido<br>";
													}else{
														echo "Não<br>";
													}
												}
											?>
							
							<b>Quando se corta ou é submetido à cirurgia demora para cicatrizar?</b>
											<?php 
												$pieces = explode("-", $r14);
													
												if($pieces[0] == 'Sim'){
													echo "Sim<br>";
												}else{
													if($r14== 'N/R'){
														echo "Não Respondido<br>";
													}else{
														echo "Não<br>";
													}
												}
											?>
							
							<b>Alguma vez precisou de transfusão de sangue?</b>
											<?php 
												$pieces = explode("-", $r15);
													
												if($pieces[0] == 'Sim'){
													echo "Sim";
													echo "<b>; Há quanto tempo?</b> ".$pieces[1]."<br>";
												}else{
													if($r15 == 'N/R'){
														echo "Não Respondido<br>";
													}else{
														echo "Não<br>";
													}
												}
											?>
							
							<b>Usa alguma prótese no coração, osso ou articulação?</b>
											<?php 
												$pieces = explode("-", $r16);
													
												if($pieces[0] == 'Sim'){
													echo "Sim";
													echo "<b>; Há quanto tempo? </b>".$pieces[1];
													echo "<b>; Qual? </b>".$pieces[2]."<br>";
												}else{
													if($r16 == 'N/R'){
														echo "Não Respondido<br>";
													}else{
														echo "Não<br>";
													}
												}
											?>
											
							<b>Tem ou teve febre reumática?</b>
											<?php 
												$pieces = explode("-", $r17);
													
												if($pieces[0] == 'Sim'){
													echo "Sim<br>";
												}else{
													if($r17 == 'N/R'){
														echo "Não Respondido<br>";
													}else{
														echo "Não<br>";
													}
												}
											?>
							
							<b>Suas juntas doem ou incham com frequência?</b>
											<?php 
												$pieces = explode("-", $r18);
													
												if($pieces[0] == 'Sim'){
													echo "Sim<br>";
												}else{
													if($r18 == 'N/R'){
														echo "Não Respondido<br>";
													}else{
														echo "Não<br>";
													}
												}
											?>
								
								<b>Sente falta de ar e cansaço com frequência?</b>
											<?php 
												$pieces = explode("-", $r19);
													
												if($pieces[0] == 'Sim'){
													echo "Sim<br>";
												}else{
													if($r19 == 'N/R'){
														echo "Não Respondido<br>";
													}else{
														echo "Não<br>";
													}
												}
											?>
								
								<b>Sente falta de ar quando se deita?</b>
											<?php 
												$pieces = explode("-", $r20);
													
												if($pieces[0] == 'Sim'){
													echo "Sim<br>";
												}else{
													if($r20 == 'N/R'){
														echo "Não Respondido<br>";
													}else{
														echo "Não<br>";
													}
												}
											?>
							
								<b>Costuma ter os pés ou pernas inchados?</b>
											<?php 
												$pieces = explode("-", $r21);
													
												if($pieces[0] == 'Sim'){
													echo "Sim<br>";
												}else{
													if($r21 == 'N/R'){
														echo "Não Respondido<br>";
													}else{
														echo "Não<br>";
													}
												}
											?>
								
								<b>Sente palpitações ou dores no peito?</b>
											<?php 
												$pieces = explode("-", $r22);
													
												if($pieces[0] == 'Sim'){
													echo "Sim<br>";
												}else{
													if($r22 == 'N/R'){
														echo "Não Respondido<br>";
													}else{
														echo "Não<br>";
													}
												}
											?>
								
								<b>Tem tido tosse persistente?</b>
										
											<?php 
												$pieces = explode("-", $r23);
													
												if($pieces[0] == 'Sim'){
													echo "Sim<br>";
												}else{
													if($r26 == 'N/R'){
														echo "Não Respondido<br>";
													}else{
														echo "Não<br>";
													}
												}
											?>
									
								<b>Já escarrou sangue?</b>
											<?php 
												$pieces = explode("-", $r24);
													
												if($pieces[0] == 'Sim'){
													echo "Sim<br>";
												}else{
													if($r26 == 'N/R'){
														echo "Não Respondido<br>";
													}else{
														echo "Não<br>";
													}
												}
											?>
											
								<b>Já vomitou sangue?</b>
											<?php 
												$pieces = explode("-", $r25);
													
												if($pieces[0] == 'Sim'){
													echo "Sim<br>";
												}else{
													if($r26 == 'N/R'){
														echo "Não Respondido<br>";
													}else{
														echo "Não<br>";
													}
												}
											?>
								
								<b>Costuma urinar mais de seis vezes ao dia?</b>
											<?php 
												$pieces = explode("-", $r26);
													
												if($pieces[0] == 'Sim'){
													echo "Sim<br>";
													
													echo "<b>; Em grandes volumes?</b>".$pieces[1]."<br>";
												}else{
													if($r26 == 'N/R'){
														echo "Não Respondido<br>";
													}else{
														echo "Não<br>";
													}
												}
											?>
								
								<b>Sente-se com sede a maior parte do tempo?</b>
											<?php 
												$pieces = explode("-", $r27);
													
												if($pieces[0] == 'Sim'){
													echo "Sim<br>";
												}else{
													if($r27 == 'N/R'){
														echo "Não Respondido<br>";
													}else{
														echo "Não<br>";
													}
												}
											?>
								
								
								<b>Tem comido muito ultimamente?</b>
											<?php 
												if($r28 == 'N/R'){
													echo "Não Respondido<br>";
												}else{
													$pieces = explode("-", $r28);
													
													if($pieces[0] == 'Sim'){
														echo "Sim<br>";
													}else{
														echo "Não<br>";
													}
												}
											?>
								
								<b>Tem perdido peso sem causa aparente?</b>
											<?php 
												if($r29 == 'N/R'){
													echo "Não Respondido<br>";
												}else{
													$pieces = explode("-", $r29);
													
													if($pieces[0] == 'Sim'){
														echo "Sim";
														echo "<b>; Quantos quilos? </b>";
														
														if($r29 == 'N/R'){
															echo "Não Respondido";
														}else{
															$pieces = explode("-", $r29);
															
															if($pieces[1] == 'Sim'){
																echo "Sim<br>";
															}else{
																echo "Não<br>";
															}
														}
														
													}else{
														echo "Não<br>";
													}
												}
											?>
								
								<b>Sente dor ao urinar?</b>
											<?php 
												if($r30 == 'N/R'){
													echo "Não Respondido<br>";
												}else{
													$pieces = explode("-", $r30);
													
													if($pieces[0] == 'Sim'){
														echo "Sim<br>";
													}else{
														echo "Não<br>";
													}
												}
											?>
								
								<b>Faz hemodiálise?</b>
											<?php 
												if($r31 == 'N/R'){
													echo "Não Respondido<br>";
												}else{
													$pieces = explode("-", $r31);
													
													if($pieces[0] == 'Sim'){
														echo "Sim<br>";
													}else{
														echo "Não<br>";
													}
												}
											?>
								
								<b>Já fez algum transplante?</b>
											<?php 
												if($r32 == 'N/R'){
													echo "Não Respondido<br>";
												}else{
													$pieces = explode("-", $r32);
													
													if($pieces[0] == 'Sim'){
														echo "Sim";
														echo "<b>; Há quanto tempo? </b>";
											
														if($r32 == 'N/R'){
															echo "Não Respondido";
														}else{
															$pieces = explode("-", $r32);
															
															if($pieces[1] == 'Sim'){
																echo "Sim";
															}else{
																echo "Não";
															}
														}
										
														echo "<b>; Que órgão? </b>";
														if($r32 == 'N/R'){
															echo "Não Respondido <br>";
														}else{
															$pieces = explode("-", $r32);
															
															if($pieces[2] == 'Sim'){
																echo "Sim <br>";
															}else{
																echo "Não <br>";
															}
														}
														
														
													}else{
														echo "Não<br>";
													}
												}
											?>
											
									<b>Tem ou já teve câncer/tumor?</b>
											<?php 
												if($r33 == 'N/R'){
													echo "Não Respondido<br>";
												}else{
													$pieces = explode("-", $r33);
													
													if($pieces[0] == 'Sim'){
														echo "Sim";
														echo "<b>; Há quanto tempo? </b>";
															if($r33 == 'N/R'){
																echo "Não Respondido";
															}else{
																$pieces = explode("-", $r33);
																echo $pieces[1];
															}
														
														echo "<b>; Qual foi o tratamento? </b>";
															if($r33 == 'N/R'){
																echo "Não Respondido<br>";
															}else{
																$pieces = explode("-", $r33);
																echo $pieces[2]."<br>";
															}
														
													}else{
														echo "Não<br>";
													}
												}
											?>
											
							
							<b>Tem infecções com frequência?</b>
											<?php 
												if($r34 == 'N/R'){
													echo "Não Respondido<br>";
												}else{
													if($r34 == 'Sim'){
														echo "Sim<br>";
													}else{
														echo "Não<br>";
													}
												}
											?>
							
							<b>Está ou esteve em tratamento psiquiátrico ou com psicólogo?</b>
											<?php 
												if($r35 == 'N/R'){
													echo "Não Respondido<br>";
												}else{
													$pieces = explode("-", $r35);
													
													if($pieces[0] == 'Sim'){
														echo "Sim";
														
														echo "<b>; Para que tipo de problema? </b>";
															if($r35 == 'N/R'){
																echo "Não Respondido<br>";
															}else{
																echo $pieces[1]."<br>";
															}
													}else{
														echo "Não<br>";
													}
												}
											?>
								
								<b>Tem sentido dormência em alguma parte do seu corpo?</b>
										<?php 
												if($r36 == 'N/R'){
													echo "Não Respondido<br>";
												}else{
													$pieces = explode("-", $r36);
													
													if($pieces[0] == 'Sim'){
														echo "Sim";
														echo "<b>; Qual a região? </b>";
															if($r36 == 'N/R'){
																echo "Não Respondido<br>";
															}else{
																echo $pieces[1]."<br>";
															}
													}else{
														echo "Não<br>";
													}
												}
											?>
											
								<b>Tem frequentes desmaios ou tonturas?</b>
										<?php 
												if($r37 == 'N/R'){
													echo "Não Respondido<br>";
												}else{
													$pieces = explode("-", $r37);
													
													if($pieces[0] == 'Sim'){
														echo "Sim";
														
														echo "<b>; Qual a frequência? </b>";
															if($r37 == 'N/R'){
																echo "Não Respondido<br>";
															}else{
																echo $pieces[1]."<br>";
															}
														
													}else{
														echo "Não<br>";
													}
												}
											?>
								
								<b>Dorme bem?</b>
										<?php 
												if($r38 == 'N/R'){
													echo "Não Respondido<br>";
												}else{
													$pieces = explode("-", $r38);
													
													if($pieces[0] == 'Sim'){
														echo "Sim<br>";
													}else{
														echo "Não<br>";
													}
												}
											?>
											
								<b>Apresenta alguma doença infectocontagiosa sexualmente transmissível?</b>
									<?php 
												if($r39 == 'N/R'){
													echo "Não Respondido<br>";
												}else{
													$pieces = explode("-", $r39);
													
													if($pieces[0] == 'Sim'){
														echo "Sim";
														
														echo "<b>; Qual? </b>";
								
															if($r39 == 'N/R'){
																echo "Não Respondido<br>";
															}else{
																echo $pieces[1]."<br>";
															}
														
														
													}else{
														echo "Não<br>";
													}
												}
											?>
								
								<b>Apresenta alguma deficiência física?</b>
										<?php 
												if($r40 == 'N/R'){
													echo "Não Respondido<br>";
												}else{
													$pieces = explode("-", $r40);
													
													if($pieces[0] == 'Sim'){
														echo "Sim<br>";
													}else{
														echo "Não<br>";
													}
												}
											?>
											
								<b>É fumante?</b>
										<?php 
												if($r41 == 'N/R'){
													echo "Não Respondido<br>";
												}else{
													$pieces = explode("-", $r41);
													
													echo $pieces[0];
													echo "<b>; Quantos cigarros/dia? </b>";
														if($r41 == 'N/R'){
															echo "Não Respondido";
														}else{
															$pieces = explode("-", $r41);
															
															echo $pieces[1];
														}
														
													echo "<b>; Fuma/fumou durante quanto tempo? </b>";
														if($r41 == 'N/R'){
															echo "Não Respondido";
														}else{
															$pieces = explode("-", $r41);
															
															echo $pieces[2];
														}
													
													echo "<b>; Parou de fumar há quanto tempo? </b>";
														if($r41 == 'N/R'){
															echo "Não Respondido";
														}else{
															$pieces = explode("-", $r41);
															
															echo $pieces[3];
														}
													
													echo "<b>; Fuma/fumava que tipo de cigarro? </b>";
														if($r41 == 'N/R'){
															echo "Não Respondido<br>";
														}else{
															$pieces = explode("-", $r41);
															
															echo $pieces[4]."<br>";
														}
													
												}
											?>
											
								<b>Consome bebida alcoólica?</b>
											<?php 
												if($r42 == 'N/R'){
													echo "Não Respondido<br>";
												}else{
													$pieces = explode("-", $r42);
													
													echo $pieces[0];
													
													echo "<b>; Que dose consome/consumia diariamente? </b>";
														if($r42 == 'N/R'){
															echo "Não Respondido";
														}else{
															$pieces = explode("-", $r42);
															
															echo $pieces[1];
														}
													
													echo "<b>; Bebe/bebeu durante quanto tempo? </b>";
														if($r42 == 'N/R'){
															echo "Não Respondido";
														}else{
															$pieces = explode("-", $r42);
															
															echo $pieces[2];
														}
													
													echo "<b>; Parou de beber a quanto tempo? </b>";
														if($r42 == 'N/R'){
															echo "Não Respondido";
														}else{
															$pieces = explode("-", $r42);
															
															echo $pieces[3];
														}
													
													echo "<b>; Bebe/bebia que tipo de bebida? </b>";
														if($r42 == 'N/R'){
															echo "Não Respondido<br>";
														}else{
															$pieces = explode("-", $r42);
															
															echo $pieces[4]."<br>";
														}
												}
											?>
										
								<b>Consome drogas?</b>
											<?php 
												if($r43 == 'N/R'){
													echo "Não Respondido<br>";
												}else{
													$pieces = explode("-", $r43);
													
													echo $pieces[0];
													
													echo "<b>; Faz/fazia uso quantas vezes/dia? </b>";
														if($r43 == 'N/R'){
															echo "Não Respondido";
														}else{
															$pieces = explode("-", $r43);
															
															echo $pieces[1];
														}
													
													echo "<b>; Usa ou usou durante quanto tempo? </b>";
														if($r43 == 'N/R'){
															echo "Não Respondido";
														}else{
															$pieces = explode("-", $r43);
															
															echo $pieces[2];
														}
														
													echo "<b>; Parou de usar há quanto tempo? </b>";
														if($r43 == 'N/R'){
															echo "Não Respondido";
														}else{
															$pieces = explode("-", $r43);
															
															echo $pieces[3];
														}
													
													echo "<b>; Que tipo de droga usa/usava? </b>";
														if($r43 == 'N/R'){
															echo "Não Respondido";
														}else{
															$pieces = explode("-", $r43);
															
															echo $pieces[4]."<br>";
														}
													
												}
											?>
									
							<b>Apresenta problemas respiratórios?</b>
											<?php 
												if($r44 == 'N/R'){
													echo "Não Respondido<br>";
												}else{
													$pieces = explode("-", $r44);
													
													if($pieces[0] == 'Sim'){
														echo "Sim";
														
														echo "<b>; Qual? </b>";
															if($r44 == 'N/R'){
																echo "Não Respondido";
															}else{
																$pieces = explode("-", $r44);
																
																echo $pieces[1]."<br>";
															}
														
													}else{
														echo "Não<br>";
													}
												}
											?>
											
							<b>Apresenta problemas cardiovasculares?</b>
											<?php 
												if($r45 == 'N/R'){
													echo "Não Respondido<br>";
												}else{
													$pieces = explode("-", $r45);
													
													if($pieces[0] == 'Sim'){
														echo "Sim";
														
														if($pieces[1] == 'Insuficiencia Cardiaca'){
															echo "; Insuficiência Cardíaca";
														}
														
														if($pieces[2] == 'Angina'){
															echo "; Angina";
														}
														
														if($pieces[3] == 'Infarto Do Miocardio'){
															echo "; Infarto Do Miocardio";
														}
														
														if($pieces[4] == 'Cardiopatia Congenita'){
															echo "; Cardiopatia Congenita";
														}
														
														if($pieces[5] == 'Sopro Cardiaco'){
															echo "; Sopro Cardíaco";
														}
														
														if($pieces[6] == 'Marcapasso'){
															echo "; Marcapasso";
														}
														
														
														if($pieces[7] == 'Aneurisma'){
															echo "; Aneurisma";
														}
														
														if($pieces[8] == 'Hipertensao'){
															echo "; Hipertensão";
														}
														
														
														if($pieces[9] == 'Hipotensao'){
															echo "; Hipotensão";
														}
														
														if($pieces[10] == 'Endocardite'){
															echo "; Endocardite";
														}
														
														if($pieces[11] == 'Varizes'){
															echo "; Varizes";
														}
														
														if($pieces[12] == 'Arteriosclerose'){
															echo "; Arteriosclerose<br>";
														}
														
													}else{
														echo "Não<br>";
													}
												}
												
														
												
											?>
							
								
							<b>Apresenta problemas hematológicos?</b>
											<?php 
												if($r46 == 'N/R'){
													echo "Não Respondido<br>";
												}else{
													$pieces = explode("-", $r46);
													
													if($pieces[0] == 'Sim'){
														echo "Sim";
														
														if($pieces[1] == 'Anemia'){
															echo "; Anemia";
														}
														
														if($pieces[2] == 'Hemofilia'){
															echo "; Hemofilia";
														}
														
														if($pieces[3] == 'Hemorragia'){
															echo "; Hemorragia";
														}
														
														if($pieces[4] == 'Leucemia'){
															echo "; Leucemia";
														}
														
														echo "<b>; Outros:</b> ".$pieces[5]."<br>";
														
														
													}else{
														echo "Não<br>";
													}
												}
											?>
									
									
								<b>Apresenta problemas gastrintestinais?</b>
											<?php 
												if($r47 == 'N/R'){
													echo "Não Respondido<br>";
												}else{
													$pieces = explode("-", $r47);
													
													if($pieces[0] == 'Sim'){
														echo "Sim";
														
														if($pieces[1] == 'Gastrite'){
															echo "; Gastrite";
														}
														
														if($pieces[2] == 'Ulcera'){
															echo "; Úlcera";
														}
														
														if($pieces[3] == 'Azia'){
															echo "; Azia";
														}
														
														if($pieces[4] == 'Diarreia Persistente'){
															echo "; Diarréia Persistente";
														}
														
														if($pieces[5] == 'Prisao De Ventre'){
															echo "; Prisão De Ventre";
														}
														
														if($pieces[6] == 'Ansia De Vomito Frequente'){
															echo "; Ânsia De Vômito Frequente";
														}
														
														if($pieces[7] == 'Colite'){
															echo "; Colite";
														}
														
														echo "<b>; Outros:</b> ".$pieces[8]."<br>";
														
														
													}else{
														echo "Não<br>";
													}
												}
											?>
									
							
							<b>Apresenta problemas músculo - esqueletais?</b>
												<?php 
												if($r48 == 'N/R'){
													echo "Não Respondido<br>";
												}else{
													$pieces = explode("-", $r48);
													
													if($pieces[0] == 'Sim'){
														echo "Sim";
														
														if($pieces[1] == 'Artrite Reumatoide'){
															echo "; Artrite Reumatóide";
														}
														
														if($pieces[2] == 'Osteoartrite'){
															echo "; Osteoartrite";
														}
														
														if($pieces[3] == 'Artrose'){
															echo "; Artrose";
														}
														
														if($pieces[4] == 'Escoliose'){
															echo "; Escoliose";
														}
														
														if($pieces[5] == 'Hernia De Disco'){
															echo "; Hérnia De Disco";
														}
														
														if($pieces[6] == 'Reumatismo'){
															echo "; Reumatismo";
														}
														
														if($pieces[7] == 'Fraturas Frequentes'){
															echo "; Fraturas Frequentes";
														}
														
														if($pieces[8] == 'Osteoporose'){
															echo "; Osteoporose";
														}
														
														echo "<b>; Outros:</b> ".$pieces[9]."<br>";
														
													}else{
														echo "Não<br>";
													}
												}
											?>
									
							
							<b>Apresenta problemas endócrinos?</b>
												<?php 
													if($r49 == 'N/R'){
														echo "Não Respondido<br>";
													}else{
														$pieces = explode("-", $r49);
														
														if($pieces[0] == 'Sim'){
															echo "Sim";
															
															if($pieces[1] == 'Diabetes'){
																echo "; Diabetes";
															}
															
															if($pieces[2] == 'Hipoglicemia'){
																echo "; Hipoglicemia";
															}
															
															if($pieces[3] == 'Hipertireoidismo'){
																echo "; Hipertireoidismo";
															}
															
															if($pieces[4] == 'Hipotireoidismo'){
																echo "; Hipotireoidismo";
															}
															
															if($pieces[5] == 'Hiperparatireoidismo'){
																echo "; Hiperparatireoidismo";
															}
															
															echo "<b>; Outros:</b> ".$pieces[6]."<br>";
															
														}else{
															echo "Não<br>";
														}
													}
												?>
									
											
							<b>Apresenta problemas neurológico/sensoriais?</b>
												<?php 
													if($r50 == 'N/R'){
														echo "Não Respondido<br>";
													}else{
														$pieces = explode("-", $r50);
														
														if($pieces[0] == 'Sim'){
															echo "Sim";
															
															if($pieces[1] == 'Depressao'){
																echo "; Depressão";
															}
															
															if($pieces[2] == 'Dor Nos Olhos'){
																echo "; Dor Nos Olhos";
															}
															
															if($pieces[3] == 'Disturbios Visuais'){
																echo "; Disturbios Visuais";
															}
															
															if($pieces[4] == 'Glaucoma'){
																echo "; Glaucoma";
															}
															
															if($pieces[5] == 'Dores De Ouvido'){
																echo "; Dores De Ouvido";
															}
															
															if($pieces[6] == 'Zumbidos No Ouvido'){
																echo "; Zumbidos No Ouvido";
															}
															
															if($pieces[7] == 'Perda De Audicao'){
																echo "; Perda De Audição";
															}
															
															if($pieces[8] == 'Convulsao/Epilepsia'){
																echo "; Convulsão/Epilepsia";
															}
															
															if($pieces[9] == 'Nervosismo Em Excesso'){
																echo "; Nervosismo Em Excesso";
															}
															
															if($pieces[10] == 'Tique Nervoso'){
																echo "; Tique Nervoso";
															}
															
															if($pieces[11] == 'Disturbios Da Fala'){
																echo "; Disturbios Da Fala";
															}
															
															if($pieces[12] == 'Derrame'){
																echo "; Derrame";
															}
															
															echo "<b>; Outros:</b> ".$pieces[13]."<br>";
															
															
														}else{
															echo "Não<br>";
														}
													}
												?>
									
												
							</table>
							
							<?php
							
							if(($r51 == 'N/R') || ($r54 == 'N/R')){
								$imagem = 'cancel.png';
								$alt = 'Existem Perguntas Não Respondidas!';
								echo "<br><h3>Sinais Vitais <a href='anamnese3.php?cpf=".$_GET['cpf']."'><img src='icones/".$imagem."'></a></h3><br>";
							}else{
								$imagem = 'edit.png';
								$alt = 'Todas as Perguntas Deste Tópico Estão Respondidas!';
								echo "<br><h3>Sinais Vitais <img src='icones/checked.png' width='28px' height='28px'></h3><br>";
							}
							
							?>
							
							<b>Pulso:</b>
												<?php 
													if($r51 == 'N/R'){
														echo "Não Respondido";
													}else{
														if($r51 == 'Nao Aferido'){
															echo "Não Aferido";
														}else{
															echo $r51." bpm";
														}
													}
												?>
									</font></td>
							<b>| Normal: 60 a 110bpm</b> <br>
							
							<b>Pressão arterial: </b>
												<?php 
													if($r52 == 'N/R'){
														echo "Não Respondido";
													}else{
														if($r52 == 'Nao Aferido'){
															echo "Não Aferido";
														}else{
															echo $r52." mm/Hg";
														}
													}
												?>
							<b>| Normal: Até 140 / 90</b> <br>
							
							<b>Temperatura: </b>
												<?php 
													if($r53 == 'N/R'){
														echo "Não Respondido";
													}else{
														if($r53 == 'Nao Aferido'){
															echo "Não Aferido";
														}else{
															echo $r53." ºC";
														}
													}
												?>
							<b>| Normal: 36,8 ºC  ± 0,2  ºC</b> <br>
							
							<b>Frequencia respiratória: </b>
											<?php 
													if($r54 == 'N/R'){
														echo "Não Respondido";
													}else{
														if($r54 == 'Nao Aferido'){
															echo "Não Aferido";
														}else{
															echo $r54."/min";
														}
													}
												?>	
							<b>| Normal: 15 a 20 mpm</b> <br>
							
							
							<?php
								if(($r55 == 'N/R') || ($r62 == 'N/R')){
									$imagem = 'cancel.png';
									$alt = 'Existem Perguntas Não Respondidas!';
									echo "<br><a href='anamnese4.php?cpf=".$_GET['cpf']."'><h3>Exame Extrabucal <img src='icones/".$imagem."'></h3></a><br>";
								}else{
									$imagem = 'edit.png';
									$alt = 'Todas as Perguntas Deste Tópico Estão Respondidas!';
									echo "<br><h3>Exame Extrabucal <img src='icones/checked.png' width='28px' height='28px'></h3><br>";
								}
								
							?>
							
							<b>Exame da face: Normal?</b>
												<?php 
													if($r55 == 'N/R'){
														echo "Não Respondido<br>";
													}else{
														$pieces = explode("-", $r55);
														
														if($pieces[0] == 'Nao'){
															echo "Não";
															
															if($pieces[1] == 'Assimetria'){
																echo "; Assimetria";
															}
															
															if($pieces[2] == 'Alteracoes na pele'){
																echo "; Alterações na Pele";
															}
															
															if($pieces[3] == 'Alteracoes em anexos cutaneos'){
																echo "; Alterações em Anexos Cutâneos<br>";
															}
															
														}else{
															echo "Sim<br>";
														}
													}
												?>
									
							<b>Exame das cadeias ganglionares: Linfonodos normais?</b>
												<?php 
													if($r56 == 'N/R'){
														echo "Não Respondido<br>";
													}else{
														$pieces = explode("-", $r56);
														
														if($pieces[0] == 'Nao'){
															echo "Não";
																	
															if($pieces[1] == 'Bucinador'){
																echo "; Bucinador";
															}

															if($pieces[2] == 'Submentoniana'){
																echo "; Submentoniana";
															}
																
															if($pieces[3] == 'Submandibular'){
																echo "; Submandibular";
															}	
																
															if($pieces[4] == 'Cervicais'){
																echo "; Cervicais";
															}

															if($pieces[5] == 'Parotidea'){
																echo "; Parotidea";
															}
															
															if($pieces[6] == 'Mastoidea'){
																echo "; Mastoidea";
															}


															if($pieces[7] == 'Occipital'){
																echo "; Occipital";
															}
																
															echo "<b>; Lado comprometido:</b> ".$pieces[8];
															echo "<b>; Tipo de Comprometimento:</b> ".$pieces[9]."<br>";
															
														}else{
															echo "Sim<br>";
														}
													}
												?>
									
							<b>Exame de glândulas salivares : Normal?</b>
												<?php 
													if($r57 == 'N/R'){
														echo "Não Respondido<br>";
													}else{
														$pieces = explode("-", $r57);
														
														if($pieces[0] == 'Nao'){
															echo "Não";
															
															if($pieces[1] == 'Parotida'){
																echo "; Parotida";
															}
															
															if($pieces[2] == 'Submandibular'){
																echo "; Submandibular";
															}
															
															if($pieces[3] == 'Sublingual'){
																echo "; Sublingual";
															}
															
															echo "<b>; Lado comprometido:</b> ".$pieces[4];
															echo "<b>; Tipo de Comprometimento:</b> ".$pieces[5]."<br>";
																
														}else{
															echo "Não<br>";
														}
													}
												?>
									
							<b>Músculos da mastigação:  Normal?</b>
												<?php 
													if($r59 == 'N/R'){
														echo "Não Respondido<br>";
													}else{
														$pieces = explode("-", $r59);
														
														if($pieces[0] == 'Sim'){
															echo "Sim<br>";
														}else{
															echo "Não<br>";
														}
													}
												?>
							
							<b>ATM:  Normal? </b>
												<?php 
													if($r60 == 'N/R'){
														echo "Não Respondido<br>";
													}else{
														$pieces = explode("-", $r60);
														
														if($pieces[0] == 'Sim'){
															echo "Sim<br>";
														}else{
															echo "Não<br>";
														}
													}
												?>
							
							<b>Lábio Superior:  Normal?</b>
												<?php 
													if($r61 == 'N/R'){
														echo "Não Respondido<br>";
													}else{
														$pieces = explode("-", $r61);
														
														if($pieces[0] == 'Sim'){
															echo "Sim<br>";
														}else{
															echo "Não<br>";
														}
													}
												?>
							
							<b>Lábio Inferior:  Normal?</b>
												<?php 
													if($r62 == 'N/R'){
														echo "Não Respondido<br>";
													}else{
														$pieces = explode("-", $r62);
														
														if($pieces[0] == 'Sim'){
															echo "Sim<br>";
														}else{
															echo "Não<br>";
														}
													}
												?>
							
							
							<?php
								if(($r63 == 'N/R') || ($r70 == 'N/R')){
									$imagem = 'cancel.png';
									$alt = 'Existem Perguntas Não Respondidas!';
									echo "<br><a href='anamnese5.php?cpf=".$_GET['cpf']."'><h3>Exame Intrabucal <img src='icones/".$imagem."'></h3></a><br>";
								}else{
									$imagem = 'edit.png';
									$alt = 'Todas as Perguntas Deste Tópico Estão Respondidas!';
									echo "<br><h3>Exame Intrabucal <img src='icones/checked.png' width='28px' height='28px'></h3><br>";
								}
								
							?>
							
							<b>Mucosa Labial: Normal?</b>
												<?php 
													if($r63 == 'N/R'){
														echo "Não Respondido<br>";
													}else{
														$pieces = explode("-", $r63);
														
														if($pieces[0] == 'Sim'){
															echo "Sim<br>";
														}else{
															echo "Não<br>";
														}
													}
												?>
							
							<b>Mucosa Jugal: Normal?</b>
												<?php 
													if($r64 == 'N/R'){
														echo "Não Respondido<br>";
													}else{
														$pieces = explode("-", $r64);
														
														if($pieces[0] == 'Sim'){
															echo "Sim";
															echo "; <b>Lado Comprometido:</b> ".$pieces[1]."<br>";
															
														}else{
															echo "Não<br>";
														}
													}
												?>
							
							<b>Mucosa Gengival: Normal?</b>
													<?php 
													if($r65 == 'N/R'){
														echo "Não Respondido<br>";
													}else{
														$pieces = explode("-", $r65);
														
														if($pieces[0] == 'Sim'){
															echo "Sim<br>";
														}else{
															echo "Não<br>";
														}
													}
												?>
							
							<b>Palato Duro:  Normal?</b>
												<?php 
													if($r66 == 'N/R'){
														echo "Não Respondido<br>";
													}else{
														$pieces = explode("-", $r66);
														
														if($pieces[0] == 'Sim'){
															echo "Sim<br>";
														}else{
															echo "Não<br>";
														}
													}
												?>
							
							<b>Palato Mole:  Normal?</b>
												<?php 
													if($r67 == 'N/R'){
														echo "Não Respondido<br>";
													}else{
														$pieces = explode("-", $r67);
														
														if($pieces[0] == 'Sim'){
															echo "Sim<br>";
														}else{
															echo "Não<br>";
														}
													}
												?>
							
							<b>Ístmo da Fauce (Amígdala e Orofaringe):  Normal?</b>
												<?php 
													if($r68 == 'N/R'){
														echo "Não Respondido<br>";
													}else{
														$pieces = explode("-", $r68);
														
														if($pieces[0] == 'Sim'){
															echo "Sim<br>";
														}else{
															echo "Não<br>";
														}
													}
												?>
							
							<b>Soalho Bucal:  Normal?</b>
												<?php 
													if($r70 == 'N/R'){
														echo "Não Respondido<br>";
													}else{
														$pieces = explode("-", $r70);
														
														if($pieces[0] == 'Sim'){
															echo "Sim<br>";
														}else{
															echo "Não<br>";
														}
													}
												?>
							
							<b>Língua:  Normal?</b>
												<?php 
													if($r69 == 'N/R'){
														echo "Não Respondido";
													}else{
														$pieces = explode("-", $r69);
														
														if($pieces[0] == 'Nao'){
															echo "Não";
															
															
															if($pieces[1] == 'Dorso'){
																echo "; Dorso";
															}
															
															if($pieces[2] == 'Ventre'){
																echo "; Ventre";
															}
															
															if($pieces[3] == 'Borda Direita'){
																echo "; Borda Direita";
															}
															
															if($pieces[4] == 'Borda Esquerda'){
																echo "; Borda Esquerda";
															}															
															
														}else{
															echo "Sim";
														}
													}
												?>
									<br>
							<!-- ************************************************************************** -->
							
							<br><hr>
							<center>
								<a href='editarAnamnese.php?cpf=<?php echo $_GET['cpf']; ?>' class="genric-btn primary">Editar Anamnese</a>
								<a  data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" class="genric-btn primary">Excluir Anamnese</a>
							</center>
							
							<br>
							<div class="collapse" id="collapseExample">
							  <div class="card card-body">
							  <hr>
								<center><p>Tem certeza que deseja excluir esta Anamnese? <a href='excluirAnamnese.php?cpf=<?php echo $_GET['cpf']; ?>' class="genric-btn primary">Sim, tenho certeza.</a></p></center>
							  </div>
							</div>
							
							</div>
						</div>
					</div>
				</div>
			</div>
		
		
		
		
	<?php	
}}
	?>
		
			
			
			
			<br>
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container" style='color:white;'>
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