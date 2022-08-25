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
			echo "
			
			<!-- Start Align Area -->
			<div class='whole-wrap'>
				<div class='container'>
					<div class='section'>
						<div class='row'>
							<div class='col-lg-12 col-md-12'>
							
							
							<form method='POST' action='atualizarAnamneseInfantil.php'>
				
				<br>
			";
			
									$sqlNome5 = "SELECT * FROM tb_anamnese WHERE nr_cpfPaciente = '".$_GET['cpf']."'";
									$resultadoNome5 = mysql_query($sqlNome5) or die();
									while($linhaNome5 = mysql_fetch_array($resultadoNome5)){
										$id = $linhaNome5['nr_idAnamnese'];
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
									}
			
			
			
			
			?>
			
			<input type='hidden' name='paciente' value='<?php echo $_GET['cpf']; ?>'>
			<input type='hidden' name='id' value='<?php echo $id; ?>'>
			
			<b>Qual queixa principal? (prevenção, dor, dúvida, cárie, traumatismo dentário)</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='1' class='single-input' value='<?php echo $r1; ?>' placeholder='Queixa Principal'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<br>
			<hr>
			<b>Qual tipo de parto da criança?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='2' class='single-input' value='<?php echo $r2; ?>' placeholder='Tipo de Parto'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<br>
			<hr>
			<b>Alguma complicação na gestação ou ao nascimento?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='3' class='single-input' value='<?php echo $r3; ?>' placeholder='Complicação na gestação / nascimento'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
						
			<br>
			<hr>
			<b>Já teve catapora, sarampo ou caxumba?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='4' class='single-input' value='<?php echo $r4; ?>' placeholder='Catapora, sarampo ou caxumba?'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<br>
			<hr>
			<b>Está em tratamento médico atualmente?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='5' class='single-input' value='<?php echo $r5; ?>' placeholder='Tratamento Médico Atualmente?'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<br>
			<hr>
			<b>Está fazendo uso de algum medicamento?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='6' class='single-input' value='<?php echo $r6; ?>'  placeholder='Medicamento?'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<br>
			<hr>
			<b>Já sofreu alguma cirurgia? Qual motivo? (dentária ou geral)</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='7' class='single-input' value='<?php echo $r7; ?>' placeholder='Cirurgia?'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<br>
			<hr>
			<b>Apresenta alergia a algum medicamento ou alimento?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='8' class='single-input' value='<?php echo $r8; ?>'  placeholder='Alergia?'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<br>
			<hr>
			<b>Quem realiza a escovação dos dentes da criança? (criança, responsáveis, ambos)</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='9' class='single-input' value='<?php echo $r9; ?>' placeholder='Escovação'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<br>
			<hr>
			<b>Quantas vezes é feita a escovação? E quando?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='10' class='single-input' value='<?php echo $r10; ?>' placeholder='Vezes de Escovação'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<br>
			<hr>
			<b>Qual pasta de dente utiliza? (sabe informar se é com ou sem flúor?)</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='11' class='single-input' value='<?php echo $r11; ?>' placeholder='Pasta de dente (com ou sem flúor?)'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<br>
			<hr>
			<b>A criança toma mamadeira a noite? Essa mamadeira é de que?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='12' class='single-input' value='<?php echo $r12; ?>' placeholder='Mamadeira'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<br>
			<hr>
			<b>A criança se alimenta a noite? Regularmente é feita escovação após última refeição?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='13' class='single-input' value='<?php echo $r13; ?>' placeholder='Alimentação'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<br>
			<hr>
			<b>A criança frequenta creche ou escola? Qual período?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='14' class='single-input' value='<?php echo $r14; ?>' placeholder='Estudos'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<br>
			<hr>
			<b>A criança tem horários específicos de refeição ou tem acesso a alimentos a qualquer momento?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='15' class='single-input' value='<?php echo $r15; ?>' placeholder='Horários das Refeições'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<br>
			<hr>
			<b>Quais atividades de interesse de lazer da criança? (esporte, time de futebol, desenho animado, artista, amigo de escola)</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='16' class='single-input' value='<?php echo $r16; ?>' placeholder='Lazer'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<br>
			<hr>
			<b>A criança chupa chupeta ou dedo? Se sim, quando?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='17' class='single-input' value='<?php echo $r17; ?>' placeholder='Chupa chupeta ou o dedo?'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<br>
			<hr>
			<b>Apresentação de higiene geral da criança: unhas, cabelo e pele.</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='18' class='single-input' value='<?php echo $r18; ?>' placeholder='Higiene Geral'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<br>
			<hr>
			<b>Ao exame clínico: criança apresenta alguma assimetria facial?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='19' class='single-input' value='<?php echo $r19; ?>' placeholder='Assimetria Facial?'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<br>
			<hr>
			<b>Selamento labial</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='20' class='single-input' value='<?php echo $r20; ?>' placeholder='Selamento labial'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<br>
			<hr>
			<b>Aspecto facial de síndrome de respiração bucal? Qual?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='21' class='single-input' value='<?php echo $r21; ?>' placeholder='Sindrome de Respiração Bucal'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<br>
			<hr>
			<b>Alteração em: lábios, mucosa, assoalho, palato e/ou língua?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='22' class='single-input' value='<?php echo $r22; ?>' placeholder='Alterações'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<br>
			<hr>
			<b>Se dentição decídua: Qual tipo de arco? Qual relação terminal de segundos molares decíduos?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='23' class='single-input' value='<?php echo $r23; ?>' placeholder='Dentição Decídua'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<br>
			<hr>
			<b>Se dentição mista: Qual estágio?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='24' class='single-input' value='<?php echo $r24; ?>' placeholder='Dentição Mista'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<br>
			<hr>
			<b>Alguma alteração na sequência ou cronologia de erupção?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='25' class='single-input' value='<?php echo $r25; ?>' placeholder='Sequência de Erupção'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<br>
			<hr>
			<b>Alguma maloclusão identificada?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='26' class='single-input' value='<?php echo $r26; ?>' placeholder='Maloclusão Identificada'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<br>
			<hr>
			<b>Quais exames radiográficos solicitados?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' name='27' class='single-input' value='<?php echo $r27; ?>' placeholder='Exames Radiográficos'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
		
			<br><hr>
		<input type='submit' class="genric-btn primary" value='Atualizar'>
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