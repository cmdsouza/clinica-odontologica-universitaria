<?php

session_start();
include "../conexao.php";

$paciente = $_GET['cpf'];

/*
$sqlNome = "SELECT * FROM tb_anamnese WHERE nr_cpfPaciente ='".$paciente."'";
$resultadoNome = mysql_query($sqlNome) or die(mysql_error());
while($linhaNome = mysql_fetch_array($resultadoNome)){
	$p5 = $linhaNome['5'];
}

$pieces = explode("-", $p5);
echo $pieces[0]."<br>";
echo $pieces[1]."<br>";
echo $pieces[2]."<br>";
echo $pieces[3]."<br>";
echo $pieces[4]."<br>";
echo $pieces[5]."<br>";
*/

header('Content-Type: text/html; charset=utf-8');
	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');

?>

<?php

date_default_timezone_set('america/sao_paulo');

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
								
										echo "<h2 class='text-white'>Continuar a Anamnese ".$d." ".$paciente."</h2>";
										echo "<p style='color:white;'>A primeira parte já está salva!</p>";
														
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
							
							
							<form method='POST' action='inserirAnamneseSegundaParte.php'>
			";
			
			?>
			
			<input type='hidden' name='paciente' value='<?php echo $_GET['cpf']; ?>'>
			
			<style>
				body {
					font-size: 16px;
				}
			</style>
			
			<hr>
			<b>Sente-se com sede a maior parte do tempo? </b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='27'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Tem comido muito ultimamente? </b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='28'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Tem perdido peso sem causa aparente? </b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='29'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='number' placeholder='Quantos quilos?' class='single-input' name='29a'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Sente dor ao urinar? </b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='30'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Faz hemodiálise? </b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='31'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Já fez algum transplante? </b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='32'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' class='single-input' name='32a' placeholder='Qual órgão?'>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' class='single-input' name='32b' placeholder='Há Quanto Tempo?'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Tem ou já teve câncer/tumor? </b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='33'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' placeholder='Em que região?' class='single-input' name='33a'>
						</div>
					</td>
				  </tr>
				  <tr>
					<td>
						<div class='mt-10'>
							<input type='text' placeholder='Há quanto tempo?' class='single-input' name='33b'>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' placeholder='Qual foi o tratamento?' class='single-input' name='33c'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Tem infecções com frequência? </b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='34'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Está ou esteve em tratamento psiquiátrico ou com psicólogo? </b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='35'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' placeholder='Para que tipo de problema?' class='single-input' name='35a'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Tem sentido dormência em alguma parte do seu corpo? </b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='36'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' placeholder='Qual região?' class='single-input' name='36a'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Tem frequentes desmaios ou tonturas? </b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='37'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' placeholder='Qual região?' class='single-input' name='37a'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Dorme bem? </b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='38'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Apresenta alguma doença infectocontagiosa sexualmente transmissível? </b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='39'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' placeholder='Qual?' class='single-input' name='39a'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Apresenta alguma deficiência física? </b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='40'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>É fumante? </b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td colspan='4'>
						<select class='single-input' name='41d'>
							<option value='Nunca Fumou'>Nunca Fumou</option>
							<option value='Sim/diariamente'>Sim/diariamente</option>
							<option value='Sim/ocasionalmente'>Sim/ocasionalmente</option>
							<option value='Parou de fumar'>Parou de fumar</option>
						</select>
					</td>
				  </tr>
				  <tr>
					<td><div class='mt-10'><input class='single-input' type="text" placeholder="Quantos cigarros por dia?" name='41e'></div></td>
					<td><div class='mt-10'><input class='single-input' type="text" placeholder="Fuma/fumou por quanto tempo?" name='41f'></div></td>
					<td><div class='mt-10'><input class='single-input' type="text" placeholder="Parou de fumar há quanto tempo?" name='41g'></div></td>
					<td><div class='mt-10'><input class='single-input' type="text" placeholder="Fuma/fumava que tipo de cigarro?" name='41h'></div></td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Consome bebida alcoólica?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td colspan='4'>
						<select class='single-input' name='42d'>
							<option value='Nunca Bebeu'>Nunca Bebeu</option>
							<option value='Sim/diariamente'>Sim/diariamente</option>
							<option value='Sim/ocasionalmente'>Sim/ocasionalmente</option>
							<option value='Parou de Beber'>Parou de Beber</option>
						</select>
					</td>
				  </tr>
				  <tr>
					<td><div class='mt-10'><input class='single-input' type="text" placeholder="Que dose consome/consumia diariamente?" name='42e'></div></td>
					<td><div class='mt-10'><input class='single-input' type="text" placeholder="Bebe/bebeu durante quanto tempo?" name='42f'></div></td>
					<td><div class='mt-10'><input class='single-input' type="text" placeholder="Parou de beber há quanto tempo?" name='42g'></div></td>
					<td><div class='mt-10'><input class='single-input' type="text" placeholder="Bebe/bebia que tipo de bebida?" name='42h'></div></td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Consome drogas?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td colspan='4'>
						<select class='single-input' name='43d'>
							<option value='Nunca Usou'>Nunca Usou</option>
							<option value='Sim/diariamente'>Sim/diariamente</option>
							<option value='Sim/ocasionalmente'>Sim/ocasionalmente</option>
							<option value='Parou de Usar'>Parou de Usar</option>
						</select>
					</td>
				  </tr>
				  <tr>
					<td><div class='mt-10'><input class='single-input' type="text" placeholder="Faz/fazia uso quantas vezes/dia?" name='43e'></div></td>
					<td><div class='mt-10'><input class='single-input' type="text" placeholder="Usa ou usou durante quanto tempo?" name='43f'></div></td>
					<td><div class='mt-10'><input class='single-input' type="text" placeholder="Parou de usar há quanto tempo?" name='43g'></div></td>
					<td><div class='mt-10'><input class='single-input' type="text" placeholder="Que tipo de droga usa/usava?" name='43h'></div></td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Apresenta problemas respiratórios?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<td>
						<div class='mt-10'>
							<select class='single-input' name='44'>
								<option value='Nao'>Não</option>
								<option value='Sim'>Sim</option>
							</select>
						</div>
					</td>
					<td>
						<div class='mt-10'>
							<input type='text' placeholder='Qual?' class='single-input' name='44a'>
						</div>
					</td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Apresenta problemas cardiovasculares?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<div class='mt-10'>
						<select class='single-input' name='45'>
							<option value='Nao'>Não</option>
							<option value='Sim'>Sim</option>
						</select>
					</div><br>
					<td><center><input type="checkbox" value="Insuficiencia Cardiaca" name='45a'>Insuficiencia Cardiaca</center></td>
					<td><center><input type="checkbox" value="Angina" name='45b'>Angina</center></td>
					<td><center><input type="checkbox" value="Infarto Do Miocardio" name='45c'>Infarto Do Miocardio</center></td>
					<td><center><input type="checkbox" value="Cardiopatia Congenita" name='45d'>Cardiopatia Congenita</center></td>
					<td><center><input type="checkbox" value="Sopro Cardiaco" name='45e'>Sopro Cardiaco</center></td>
					<td><center><input type="checkbox" value="Marcapasso" name='45f' >Marcapasso</center></td>
				  </tr>
				  <tr>
					<td><br><center><input type="checkbox" value="Aneurisma" name='45g'>Aneurisma</center></td>
					<td><br><center><input type="checkbox" value="Hipertensao" name='45h'>Hipertensão</center></td>
					<td><br><center><input type="checkbox" value="Hipotensao" name='45i'>Hipotensão</center></td>
					<td><br><center><input type="checkbox" value="Endocardite" name='45j'>Endocardite</center></td>
					<td><br><center><input type="checkbox" value="Varizes" name='45k'>Varizes</center></td>
					<td><br><center><input type="checkbox" value="Arteriosclerose" name='45l'>Arteriosclerose</center></td>
				  </tr>
				  <tr>
					<td colspan='7'><input type='text' placeholder='Outros?' class='single-input' name='45m' ></td>
				  </tr>
				 </tbody>
			</table>			
			
			<hr>
			<b>Apresenta problemas hematológicos?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<div class='mt-10'>
						<select class='single-input' name='46'>
							<option value='Nao'>Não</option>
							<option value='Sim'>Sim</option>
						</select>
					</div><br>
					<td><center><input type="checkbox" value="Anemia" name='46a'>Anemia</center></td>
					<td><center><input type="checkbox" value="Hemofilia" name='46b'>Hemofilia</center></td>
					<td><center><input type="checkbox" value="Hemorragia" name='46c'>Hemorragia</center></td>
					<td><center><input type="checkbox" value="Leucemia" name='46d'>Leucemia</center></td>
				  </tr>
				  <tr>
					<td colspan='4'><input type='text' placeholder='Outros?' class='single-input' name='46e' ></td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Apresenta problemas gastrintestinais?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<div class='mt-10'>
						<select class='single-input' name='47'>
							<option value='Nao'>Não</option>
							<option value='Sim'>Sim</option>
						</select>
					</div><br>
					<td><center><input type="checkbox" value="Gastrite" name='47a'>Gastrite</center></td>
					<td><center><input type="checkbox" value="Ulcera" name='47b'>Úlcera</center></td>
					<td><center><input type="checkbox" value="Azia" name='47c'>Azia</center></td>
					<td><center><input type="checkbox" value="Diarreia Persistente" name='47d'>Diarréia Persistente</center></td>
				  </tr>
				  <tr>
					<td><center><input type="checkbox" value="Prisao De Ventre" name='47e'>Prisão De Ventre</center></td>
					<td colspan='2'><center><input type="checkbox" value="Ansia De Vomito Frequente" name='47f'>Ânsia De Vômito Frequente</center></td>
					<td><center><input type="checkbox" value="Colite" name='47g'>Colite</center></td>
				  </tr>
				  <tr>
					<td colspan='4'><input type='text' placeholder='Outros?' class='single-input' name='47h' ></td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Apresenta problemas músculo-esqueletais?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<div class='mt-10'>
						<select class='single-input' name='48'>
							<option value='Nao'>Não</option>
							<option value='Sim'>Sim</option>
						</select>
					</div><br>
					<td><center><input type="checkbox" value="Artrite Reumatoide" name='48a'>Artrite Reumatóide</center></td>
					<td><center><input type="checkbox" value="Osteoartrite" name='48b'>Osteoartrite</center></td>
					<td><center><input type="checkbox" value="Artrose" name='48c'>Artrose</center></td>
					<td><center><input type="checkbox" value="Escoliose" name='48d'>Escoliose</center></td>
				  </tr>
				  <tr>
					<td><center><input type="checkbox" value="Hernia De Disco" name='48e'>Hérnia De Disco</center></td>
					<td><center><input type="checkbox" value="Reumatismo" name='48f'>Reumatismo</center></td>
					<td><center><input type="checkbox" value="Fraturas Frequentes" name='48g'>Fraturas Frequentes</center></td>
					<td><center><input type="checkbox" value="Osteoporose" name='48h'>Osteoporose</center></td>
				  </tr>
				  <tr>
					<td colspan='4'><input type='text' placeholder='Outros?' class='single-input' name='48i' ></td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Apresenta problemas endócrinos?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<div class='mt-10'>
						<select class='single-input' name='49'>
							<option value='Nao'>Não</option>
							<option value='Sim'>Sim</option>
						</select>
					</div><br>
					<td><center><input type="checkbox" value="Diabetes" name='49a'>Diabetes</center></td>
					<td><center><input type="checkbox" value="Hipoglicemia" name='49b'>Hipoglicemia</center></td>
					<td><center><input type="checkbox" value="Hipertireoidismo" name='49c'>Hipertireoidismo</center></td>
					<td><center><input type="checkbox" value="Hipotireoidismo" name='49d'>Hipotireoidismo</center></td>
					<td><center><input type="checkbox" value="Hiperparatireoidismo" name='49e'>Hiperparatireoidismo</center></td>
				  </tr>
				  <tr>
					<td colspan='5'><input type='text' placeholder='Outros?' class='single-input' name='49f' ></td>
				  </tr>
				 </tbody>
			</table>
			
			<hr>
			<b>Apresenta problemas cardiovasculares?</b>
			<table border="0" width='100%'>
				<tbody>
				  <tr>
					<div class='mt-10'>
						<select class='single-input' name='50'>
							<option value='Nao'>Não</option>
							<option value='Sim'>Sim</option>
						</select>
					</div><br>
					<td><center><input type="checkbox" value="Depressao" name='50a'>Depressão</center></td>
					<td><center><input type="checkbox" value="Dor Nos Olhos" name='50b'>Dor Nos Olhos</center></td>
					<td><center><input type="checkbox" value="Disturbios Visuais" name='50c'>Distúrbios Visuais</center></td>
					<td><center><input type="checkbox" value="Glaucoma" name='50d'>Glaucoma</center></td>
					<td><center><input type="checkbox" value="Dores De Ouvido" name='50e'>Dores De Ouvido</center></td>
					<td><center><input type="checkbox" value="Zumbidos No Ouvido" name='50f' >Zumbidos No Ouvido</center></td>
				  </tr>
				  <tr>
					<td><br><center><input type="checkbox" value="Perda De Audicao" name='50g'>Perda De Audição</center></td>
					<td><br><center><input type="checkbox" value="Convulsao/Epilepsia" name='50h'>Convulsão/Epilepsia</center></td>
					<td><br><center><input type="checkbox" value="Nervosismo Em Excesso" name='50i'>Nervosismo Em Excesso</center></td>
					<td><br><center><input type="checkbox" value="Tique Nervoso" name='50j'>Tique Nervoso</center></td>
					<td><br><center><input type="checkbox" value="Disturbios Da Fala" name='50k'>Distúrbios Da Fala</center></td>
					<td><br><center><input type="checkbox" value="Derrame" name='50l'>Derrame</center></td>
				  </tr>
				  <tr>
					<td colspan='7'><input type='text' placeholder='Outros?' class='single-input' name='50m' ></td>
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

<?php
/*
			
			Tipo Anamnese
			
			-- Questonamento Geral --
			
			1   Queixa Principal e duração
			2   Historia da Doença Atual
			3   Está em tratamento médico atualmente? Sim Não 
			3a  Qual o motivo?
			3b   Qual o médico/especialidade?
			4   Faz uso de algum medicamento atualmente? Sim Não
			4a  Qual(is)?
			5   É alérgico ou já teve alguma reação alérgica? Sim Não
			5a  medicamentos 
			5b  metais (ouro/níquel/prata) 
			5c  alimentos 
			5d  cosméticos  
			5e  outros
			6   Já teve urticária? Sim Não 
			6a  Quando? 
			6b  O que provocou?
			7   Tomou antibiótico recentemente? Sim Não
			7a  Qual?
			8   Tomou corticóide recentemente? Sim Não 
			8a  Quando?
			9   Esteve acamado por longo tempo nos últimos anos? Sim Não
			9a  Por quanto tempo? 
			9b  Qual o motivo?
			10  Já foi hospitalizado? Sim Não 
			10a Qual o motivo?
			11  Já foi submetido a alguma cirurgia? Sim Não 
			11a Qual?
			12  Já tomou algum tipo de anestesia? Sim Não 
			12a De que tipo?
			12b Qual o motivo? 
			12c Teve alguma reação? Sim Não
			13  Costuma sangrar muito quando se corta ou é submetido à cirurgia? Sim Não
			14  Quando se corta ou é submetido à cirurgia demora para cicatrizar? Sim Não
			15  Alguma vez precisou de transfusão de sangue? Sim Não
			15a Há quanto tempo?
			16  Usa alguma prótese no coração, osso ou articulação? Sim Não
			16a Qual?
			16b Há quanto tempo?
			17 Tem ou teve febre reumática? Sim Não
			18 Suas juntas doem ou incham com frequência? Sim Não
			19 Sente falta de ar e cansaço com frequência? Sim Não
			20 Sente falta de ar quando se deita? Sim Não
			21 Costuma ter os pés ou pernas inchados? Sim Não
			22 Sente palpitações ou dores no peito? Sim Não
			23 Tem tido tosse persistente? Sim Não
			24 Já escarrou sangue? Sim Não
			25 Já vomitou sangue? Sim Não
			26 Costuma urinar mais de seis vezes ao dia? Sim Não
			26a Costuma urinar em grandes volumes?  Sim  Não
			27 Sente-se com sede a maior parte do tempo? Sim Não
			28 Tem comido muito ultimamente? Sim Não 
			29 Tem perdido peso sem causa aparente? Sim Não 
			29a Quantos quilos?
			30 Sente dor ao urinar? Sim Não
			31 Faz hemodiálise? Sim Não
			32 Já fez algum transplante? Sim Não
			32a Que órgão?
			32b Há quanto tempo?
			33  Tem ou já teve câncer/tumor? Sim Não
			33a Em que região?
			33b Há quanto tempo?
			33c Tratamento: radioterapia 
			33d quimioterapia 
			33e cirurgia 
			33d outro
			34 Tem infecções com frequência? Sim Não
			35 Está ou esteve em tratamento psiquiátrico ou com psicólogo? Sim Não
			35a Para que tipo de problema?
			36 Tem sentido dormência em alguma parte do seu corpo? Sim Não 
			36a Qual a região?
			37 Tem frequentes desmaios ou tonturas? Sim Não
			37a Qual a frequência?
			38 Dorme bem? Sim Não
			39 Apresenta alguma doença infectocontagiosa sexualmente transmissível? Sim Não
			40a Qual?
			41 Apresenta alguma deficiência física? Sim Não
			42 É fumante? Nunca fumou Sim/diariamente Sim/ocasionalmente Parou de fumar  Fuma/fumava 
			42a quantos cigarros/dia? 
			42b Fuma/fumou durante quanto tempo?
			42c Parou de fumar há quanto tempo? 
			42d Fuma/fumava que tipo de cigarro?
			43 Consome bebida alcoólica? Nunca bebeu Sim/diariamente Sim/ocasionalmente Parou de beber 
			43a Que dose consome/consumia diariamente?
			43b Bebe/bebeu durante quanto tempo? 
			43c Parou de beber a quanto tempo? 
			43d Bebe/bebia que tipo de bebida?
			44 Consome drogas? Nunca usou Sim/diariamente Sim/ocasionalmente Parou de usar 
			44a Faz/fazia uso quantas vezes/dia? 
			44b Usa ou usou durante quanto tempo? 
			44c Parou de usar há quanto tempo? 
			44d Que tipo de droga usa/usava?
			45 Apresenta problemas respiratórios? Sim Não 
			45a Qual?
			46 Apresenta problemas cardiovasculares? Sim Não
			46a insuficiência cardíaca angina arritmias infarto do miocárdio cardiopatia congênita sopro cardíaco marcapasso aneurisma hipertensão hipotensão endocardite varizes arteriosclerose outros
			47 Apresenta problemas hematológicos? Sim Não anemia hemofilia hemorragia leucemia outros
			48 Apresenta problemas gastrintestinais? Sim Não má digestão   gastrite úlcera azia diarréia persistente prisão de ventre ânsia de vômito frequente colite  outros
			49 Apresenta problemas músculo- esqueletais? Sim Não  artrite reumatóide osteoartrite artrose escoliose hérnia de disco reumatismo fraturas frequentes osteoporose outros
			50 Apresenta problemas endócrinos? Sim Não diabetes hipoglicemia hipertireoidismo hipotireoidismo hiperparatireoidismo outros
			51 Apresenta problemas neurológico/sensoriais? Sim Não depressão dor nos olhos distúrbios visuais glaucoma dores de ouvido zumbidos no ouvido perda de audição convulsão/epilepsia nervosismo em excesso tique nervoso distúrbios da fala derrame outros		

			-- Sinais Vitais --
			* Opção NÃO AFERIDO
			
			53  Pulso                         bpm					Normal: 60 a 110bpm	
			54  Pressão arterial  _ _/_ _    mm/Hg					Normal: Até 140 X 90	
			55  Temperatura                   o C					Normal: 36,8	o C  ± 0,2  o C
			56  Frequencia respiratória        /min					Normal:15 a 20 mpm	
			57  Obs:						

			-- Exame Extrabucal --
			
			58 Exame da face: Normal?  Sim Não
			59 Assimetria    Alterações na pele     Alterações em anexos cutâneos"					
			60 Exame das cadeias ganglionares: Linfonodos normais?  Sim Não
			61 Bucinador     Submentoniana    Submandibular    Cervicais    Parotídea    Mastóidea  Occipital
			62 Lado comprometido: Direito   Esquerdo         Tipo de Comprometimento:			
			63 Exame de glândulas salivares : Normal?  Sim Não Parótida   Submandibular         Sublingual Lado comprometido: Direito   Esquerdo          Tipo de Comprometimento:					
			64 Exame da saliva: Normal?  Sim Não  Muito Fluida    Viscosa   Com pus  Com sangue    Outra alteração: 
			65 Músculos da mastigação:  Normal?  Sim Não
			66 ATM:  Normal?  Sim Não			Quando?
			67 Lábio Superior:  Normal? Sim  Não
			68 Lábio Inferior:  Normal? Sim  Não					

			-- Exame Intrabucal -- 
			
			69 Mucosa Labial: Normal? Sim  Não
			70 Mucosa Jugal: Normal? Sim  Não        Lado comprometido: Direito   Esquerdo
			71 Mucosa Gengival: Normal? Sim  Não
			72 Palato Duro:  Normal? Sim  Não
			73 Palato Mole:  Normal? Sim  Não
			74 Ístmo da Fauce (Amígdala e Orofaringe):  Normal? Sim  Não
			75 Língua:  Normal? Sim  Não Local:  Dorso     Ventre    Borda Direita    Borda Esquerda
			76 Soalho Bucal:  Normal? Sim  Não					

			
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