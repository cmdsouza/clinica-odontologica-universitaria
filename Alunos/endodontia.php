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
								
									echo "<h2 class='text-white'>Endodontia ".$d." ".$paciente."</h2>";								
								?>
							</div>							
						</div>
					</div>
				</div>
			</section>		
			<!-- End banner Area -->
		
		
		<!-- Start price Area --><br>
			<section class="price-area " id="price">
				<div class="container">
					<div class='row'>
						<h3>Endodontia</h3>
					</div>				
				</div>	
			</section>
			<!-- End price Area -->
		<br>
		
			<center>
				<img src="endo/endo.png" usemap="#image-map">

				<map name="image-map">
					<area onClick="showHideDiv('contenido17')" coords="75,227,50,213,37,216,19,212,9,186,16,162,24,137,27,89,32,54,46,36,61,48,69,66,78,90,84,114,85,155,95,196,89,221" shape="poly">
					<area onClick="showHideDiv('contenido16')" coords="130,224,105,212,102,162,113,139,112,98,108,65,114,27,122,9,139,33,155,106,162,97,161,61,155,32,158,24,167,25,189,65,190,98,184,153,196,188,191,221,167,225,150,216" shape="poly">
					<area onClick="showHideDiv('contenido15')" coords="232,227,207,218,200,180,211,151,216,131,214,101,223,70,229,28,236,23,247,36,252,75,253,114,263,173,260,212" shape="poly">
					<area onClick="showHideDiv('contenido14')" coords="300,225,274,201,286,150,291,102,291,57,286,38,289,18,299,22,310,39,327,155,336,193,328,214" shape="poly">
					<area onClick="showHideDiv('contenido13')" coords="373,230,351,211,345,195,350,153,358,87,363,34,369,4,377,5,386,31,390,70,389,110,398,147,400,168,403,200,397,217" shape="poly">
					<area onClick="showHideDiv('contenido12')" coords="468,219,449,224,422,212,416,191,422,165,427,115,437,39,447,54,471,191" shape="poly">
					<area onClick="showHideDiv('contenido11')" coords="491,224,481,211,490,153,488,126,500,52,512,17,518,25,520,44,536,149,545,198,542,221,514,227" shape="poly">
					<area onClick="showHideDiv('contenido21')" coords="604,227,556,222,559,169,564,137,572,84,577,56,580,43,585,18,597,44,604,93,609,137,613,169,618,211" shape="poly">
					<area onClick="showHideDiv('contenido22')" coords="630,222,628,192,637,162,644,118,652,51,659,39,666,64,670,108,677,158,677,172,683,202,675,220,651,226" shape="poly">
					<area onClick="showHideDiv('contenido23')" coords="716,228,695,212,696,165,700,151,706,113,709,93,708,61,715,23,725,2,733,29,739,70,745,112,748,154,752,191,747,212,734,224" shape="poly">
					<area onClick="showHideDiv('contenido24')" coords="798,226,769,214,762,191,767,170,772,153,775,124,777,91,783,60,793,36,805,18,812,29,805,67,807,109,815,148,821,179,824,203" shape="poly">
					<area onClick="showHideDiv('contenido25')" coords="867,225,838,208,840,160,846,111,849,70,856,29,865,22,873,44,879,80,886,103,884,139,896,176,897,204,888,217" shape="poly">
					<area onClick="showHideDiv('contenido26')" coords="913,221,913,185,922,155,917,110,916,67,927,39,940,24,949,26,944,67,947,110,954,89,958,62,966,37,973,19,982,8,995,32,996,68,993,111,996,148,1004,166,1002,203,985,221,973,224,955,217,933,229" shape="poly">
					<area onClick="showHideDiv('contenido27')" coords="1031,226,1015,196,1024,158,1027,116,1035,77,1043,56,1058,39,1070,43,1082,72,1083,116,1089,156,1099,179,1094,198,1084,217,1058,212" shape="poly">
					<area onClick="showHideDiv('contenido47')" coords="33,476,26,458,22,426,18,389,13,347,13,321,25,312,39,314,50,321,58,308,78,308,94,323,91,352,85,388,84,418,75,442,61,458,52,475,43,460,50,442,59,430,65,411,61,390,49,402,48,432,40,471" shape="poly">
					<area onClick="showHideDiv('contenido46')" coords="110,466,117,405,118,377,114,347,111,314,126,310,146,316,158,308,184,310,185,332,178,364,175,395,173,431,163,449,150,462,142,459,154,437,161,412,161,390,149,382,137,389,133,414,124,442,118,462" shape="poly">
					<area onClick="showHideDiv('contenido45')" coords="227,489,218,449,214,409,210,375,211,358,205,326,211,312,231,305,252,314,257,337,243,433,242,464,238,485" shape="poly">
					<area onClick="showHideDiv('contenido44')" coords="308,502,297,498,297,471,298,444,300,422,296,396,291,366,283,342,285,322,309,311,337,321,337,341,329,373,329,405" shape="poly">
					<area onClick="showHideDiv('contenido43')" coords="381,498,378,484,374,454,372,418,365,357,364,326,388,309,403,315,410,326,404,373,396,417,396,458,394,480" shape="poly">
					<area onClick="showHideDiv('contenido42')" coords="460,468,450,463,447,432,443,374,436,337,437,316,456,309,476,313,480,337,469,371" shape="poly">
					<area onClick="showHideDiv('contenido41')" coords="523,447,516,397,512,340,510,317,525,308,537,311,531,392,530,425" shape="poly">
					<area onClick="showHideDiv('contenido31')" coords="582,447,568,315,581,309,597,318,592,394" shape="poly">
					<area onClick="showHideDiv('contenido32')" coords="646,471,639,434,634,371,626,335,625,311,647,309,664,315,668,338,659,368,656,435" shape="poly">
					<area onClick="showHideDiv('contenido33')" coords="714,499,702,472,702,436,703,415,694,377,688,337,694,317,710,309,724,317,736,330,725,430,721,483" shape="poly">
					<area onClick="showHideDiv('contenido34')" coords="802,499,791,499,785,469,777,434,775,404,768,362,760,330,769,316,788,307,813,316,817,335,804,373,801,425" shape="poly">
					<area onClick="showHideDiv('contenido35')" coords="872,487,863,483,855,446,857,423,848,363,845,327,846,313,864,312,891,317,892,341,888,379,884,440,878,471" shape="poly">
					<area onClick="showHideDiv('contenido36')" coords="968,461,957,464,937,440,931,411,933,375,927,355,923,331,923,313,948,307,960,313,970,312,992,310,1001,323,993,366,991,404,1001,462,996,468,980,435,974,403,969,385,949,382,944,410,953,438" shape="poly">
					<area onClick="showHideDiv('contenido37')" coords="1069,478,1054,468,1033,443,1026,409,1025,377,1020,345,1019,324,1026,312,1050,309,1062,319,1075,316,1091,318,1100,332,1097,365,1089,416,1084,457,1072,479,1067,454,1065,431,1066,408,1053,393,1048,418" shape="poly">
				</map>
			</center>
			
			
			
			
			
			
		<section class="price-area " id="price">
		<div class="container">
		<div class='row'>

		<?php
		
		$a = 11;
		while($a<18){
			
		?>
			
			
			<div id='contenido<?php echo $a; ?>' width='100%' style='background-color:white; display:none'>
				
				<!--Accordion wrapper-->
				<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

				  <!-- Accordion card -->
				  <div class="card">

					<!-- Card header -->
					<div class="card-header" role="tab" id="headingOne<?php echo $a; ?>">
					  <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne<?php echo $a; ?>" aria-expanded="true"
						aria-controls="collapseOne<?php echo $a; ?>">
						<h5 class="mb-0">
						  Dente <?php echo $a; ?>
						</h5>
					  </a>
					</div>

					<!-- Card body -->
					<div id="collapseOne<?php echo $a; ?>" class="collapse show" role="tabpanel" aria-labelledby="headingOne<?php echo $a; ?>"
					  data-parent="#accordionEx">
					  <div class="card-body">
						
						<?php
						
						$sqlAnam = "SELECT * FROM `tb_endodontia` WHERE `nr_cpfPaciente` = '".$_GET['cpf']."' AND `2` = '".$a."_1'";
						$resultadoAnam = mysql_query($sqlAnam) or die();
						$numImg = mysql_num_rows($resultadoAnam);
						if($numImg == 0){
							
						?>	
							
							<!-- ###################################################################################### CADASTRO ENDO 1 -->
							<form method='POST' action='inserirEndo.php'>
							
								<b>Dupla Responsável:</b>
								<select class='single-input' name='dupla'>
								<?php
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
								?>
								</select><br>
							
								<b>Queixa Principal: </b><input type='text' name='1' class='single-input' placeholder='Queixa Principal'>
								<input type='hidden' name='2' value='<?php echo $a; ?>_1' class='single-input'>
								<input type='hidden' name='cpf' value='<?php echo $_GET['cpf']; ?>' class='single-input'>
								
								<hr>
								<br>
								<h5>Semiologia Subjetiva – Características Clínicas da Dor</h5><br>
								<table border=0>
									<tr>
										<td><b>Sede: </b></td>
										<td width='40px'><input type='checkbox' name='3' class='single-input'></td>
										<td>Localizada</td>
										<td width='40px'><input type='checkbox' name='4' class='single-input'></td>
										<td>Difusa</td>
									</tr>
									
									
									<tr>	
										<td><b>Aparecimento: </b></td>
										<td width='40px'><input type='checkbox' name='5' class='single-input'></td>
										<td>Provocada</td>
										<td width='40px'><input type='checkbox' name='6' class='single-input'></td>
										<td style='margin-rigth:10px;'>Espontânea</td>
									</tr>
									
									
									<tr>
										<td><b>Duração: </b></td>
										<td width='40px'><input type='checkbox' name='7' class='single-input'></td>
										<td>Curta</td>
										<td width='40px'><input type='checkbox' name='8' class='single-input'></td>
										<td>Longa</td>
									</tr>
									
									
									<tr>
										<td><b>Frequência: </b></td>
										<td width='40px'><input type='checkbox' name='9' class='single-input'></td>
										<td>Intermitente</td>
										<td width='40px'><input type='checkbox' name='10' class='single-input'></td>
										<td>Contínua</td>
									</tr>
									
									<tr>
										<td><b>Intensidade: </b></td>
										<td width='40px'><input type='checkbox' name='11' class='single-input'></td>
										<td>Leve</td>
										<td width='40px'><input type='checkbox' name='12' class='single-input'></td>
										<td>Moderada</td>
										<td width='40px'><input type='checkbox' name='13' class='single-input'></td>
										<td>Severa</td>
									</tr>
								</table>
								
								<hr>
								<h5>Semiologia Objetiva</h5><br>
								<table border=0>
									<tr>
										<td><b>Mucosa Gengival: </b></td>
										<td width='40px'><input type='checkbox' name='14' class='single-input'></td>
										<td>Normal</td>
										<td width='40px'><input type='checkbox' name='15' class='single-input'></td>
										<td>Doença Periodontal</td>
										<td width='40px'><input type='checkbox' name='16' class='single-input'></td>
										<td>Presença de Fístula</td>
										<td width='40px'><input type='checkbox' name='17' class='single-input'></td>
										<td>Presença de Tumefação</td>
									</tr>
								</table>	
								<table>	
									<tr>
										<td width='190px;'><b>Sensibilidade a Palpação: </b></td>
										<td width='40px'><input type='checkbox' name='18' class='single-input'></td>
										<td>Presença de Dor</td>
										<td width='40px'><input type='checkbox' name='19' class='single-input'></td>
										<td>Ausência de Dor</td>
									</tr>
								</table>	
								<table>		
									<tr>
										<td><b>Mobilidade: </b></td>
										<td width='40px'><input type='checkbox' name='20' class='single-input'></td>
										<td>Normal</td>
										<td width='40px'><input type='checkbox' name='21' class='single-input'></td>
										<td>Acentuada</td>
									</tr>
									
									<tr>
										<td><b>Inspeção: </b></td>
										<td width='40px'><input type='checkbox' name='22' class='single-input'></td>
										<td>Coroa íntegra</td>
										<td width='40px'><input type='checkbox' name='23' class='single-input'></td>
										<td>Presença de restaurações</td>
										<td width='40px'><input type='checkbox' name='24' class='single-input'></td>
										<td>Presença de cárie</td>
										<td width='40px'><input type='checkbox' name='25' class='single-input'></td>
										<td>Presença de fratura</td>
									</tr>
									
									<tr>
										<td></td>
										<td width='40px'><input type='checkbox' name='26' class='single-input'></td>
										<td>Polpa exposta com vitalidade</td>
										<td width='40px'><input type='checkbox' name='27' class='single-input'></td>
										<td>Polpa exposta sem vitalidade</td>
										<td width='40px'><input type='checkbox' name='28' class='single-input'></td>
										<td>Alteração da cor da coroa dental</td>
										<td width='40px'><input type='checkbox' name='29' class='single-input'></td>
										<td>Alteração morfológica coronária</td>
									</tr>
								</table>  
								  
								<hr>
								<h5>Exame dos Dentes</h5><br>
								<table border=0>
									<tr>
										<td><b>Testes Térmicos: </b></td>
										<td width='40px'><input type='checkbox' name='30' class='single-input'></td>
										<td>Dor ao Frio</td>
										<td width='40px'><input type='checkbox' name='31' class='single-input'></td>
										<td>Dor ao Calor</td>
										<td width='40px'><input type='checkbox' name='32' class='single-input'></td>
										<td>Ausência de Dor</td>
									</tr>
									
									<tr>
										<td><b>Sensibilidade à Percussão: </b></td>
										<td width='40px'><input type='checkbox' name='33' class='single-input'></td>
										<td>Vertical</td>
										<td width='40px'><input type='checkbox' name='34' class='single-input'></td>
										<td>Horizontal</td>
									</tr>
									
									<tr>
										<td><b>Sensibilidade de Cavidade: </b></td>
										<td width='40px'><input type='checkbox' name='129' class='single-input'></td>
										<td>Presença de Dor</td>
										<td width='40px'><input type='checkbox' name='130' class='single-input'></td>
										<td>Ausência de Dor</td>
									</tr>
								</table>
								
								<hr>
								<h5>Exame Radiográfico</h5><br>
								<table border=0>								
									<tr>
										<td width='40px'><input type='checkbox' name='35' class='single-input'></td>
										<td>Periodonto Normal</td>
										<td width='40px'><input type='checkbox' name='36' class='single-input'></td>
										<td>Espessamento Periodontal</td>
										<td width='40px'><input type='checkbox' name='37' class='single-input'></td>
										<td>Lesão Perirradicular</td>
										<td width='40px'><input type='checkbox' name='38' class='single-input'></td>
										<td>Rizogênese Incompleta</td>
										<td width='40px'><input type='checkbox' name='39' class='single-input'></td>
										<td>Trepanação</td>
									</tr>
									
									<tr>
										<td width='40px'><input type='checkbox' name='40' class='single-input'></td>
										<td>Retentor Intra-Radicular</td>
										<td width='40px'><input type='checkbox' name='41' class='single-input'></td>
										<td>Instrumento Fraturado</td>
										<td width='40px'><input type='checkbox' name='42' class='single-input'></td>
										<td>T.E Insatisfatório</td>
										<td width='40px'><input type='checkbox' name='43' class='single-input'></td>
										<td>Reabsorção: Interna</td>
										<td width='40px'><input type='checkbox' name='44' class='single-input'></td>
										<td>Reabsorção: Externa</td>
									</tr>
									
									<tr>
										<td width='40px'><input type='checkbox' name='45' class='single-input'></td>
										<td>Fratura Dentária: Coronária</td>
										<td width='40px'><input type='checkbox' name='46' class='single-input'></td>
										<td>Fratura Dentária: Radicular</td>
									</tr>
								</table>  
								  
								<hr>
								<h5>Diagnóstico Clínico Provável</h5><br>
								<table border=0>
									<tr>
										<td width='40px'><input type='checkbox' name='47' class='single-input'></td>
										<td>Polpa Normal</td>
										<td width='40px'><input type='checkbox' name='48' class='single-input'></td>
										<td>Abscesso Dentoalveolar Agudo</td>
										<td width='40px'><input type='checkbox' name='49' class='single-input'></td>
										<td>Polpa Inflamada Reversivelmente</td>
										<td width='40px'><input type='checkbox' name='50' class='single-input'></td>
										<td>Polpa inflamada irreversivelmente</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='51' class='single-input'></td>
										<td>Abscesso Dentoaveolar Crônico</td>
										<td width='40px'><input type='checkbox' name='52' class='single-input'></td>
										<td>Granuloma Apical/Cisto Periodontal Apical</td>
										<td width='40px'><input type='checkbox' name='53' class='single-input'></td>
										<td>Necrose Pulpar </td>
										<td width='40px'><input type='checkbox' name='54' class='single-input'></td>
										<td>Displasia Cementária Periapical</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='55' class='single-input'></td>
										<td>Pericementite Apical Aguda </td>
										<td width='40px'><input type='checkbox' name='56' class='single-input'></td>
										<td>Pericementite Apical Crônica</td>
										<td colspan=4><input type='text' name='57' placeholder='Outras Patologias' class='single-input'></td>
									</tr>
								</table> 
								  
								<hr>
								<h5>Indicação de Tratamento</h5><br>
								<table border=0>
									<tr>
										<td width='40px'><input type='checkbox' name='58' class='single-input'></td>
										<td>Proteção Pulpar Indireta</td>
										<td width='40px'><input type='checkbox' name='59' class='single-input'></td>
										<td>Proteção Pulpar Direta </td>
										<td width='40px'><input type='checkbox' name='60' class='single-input'></td>
										<td>Tratamento de Canal </td>
										<td width='40px'><input type='checkbox' name='61' class='single-input'></td>
										<td>Retratamento de canal</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='62' class='single-input'></td>
										<td>Apicigênese</td>
										<td width='40px'><input type='checkbox' name='63' class='single-input'></td>
										<td>Apicetomia, Retropreparo e Retrobturação</td>
										<td width='40px'><input type='checkbox' name='64' class='single-input'></td>
										<td>Transplante Dentário</td>
										<td width='40px'><input type='checkbox' name='65' class='single-input'></td>
										<td>Reimplante Dentário</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='66' class='single-input'></td>
										<td>Tratamento Não-Cirúrgico de Perfuração</td>
										<td width='40px'><input type='checkbox' name='67' class='single-input'></td>
										<td>Tratamento Cirúrgico de Perfuração</td>
										<td width='40px'><input type='checkbox' name='68' class='single-input'></td>
										<td>Curetagem Apical</td>
										<td width='40px'><input type='checkbox' name='69' class='single-input'></td>
										<td>Apicificação</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='70' class='single-input'></td>
										<td>Proservação / acompanhamento</td>
									</tr>
								</table> 
								
								<hr>
								<h5>Terapêutica Sistêmica</h5>
								<br>
								<table border=0 width='100%'>
									<tr>
										<td colspan=5 style='border: 1px solid rgb(193,193,255);'><center><h5>Odontometria</h5></center></td>
										<td colspan=7 style='border: 1px solid rgb(193,193,255);'><center><h5>Preparo Cirúrgico-Mecânico</h5></center></td>
									</tr>
									<tr>
										<td><center><b>Canal</b></center></td>
										<td><center><b>CDR</b></center></td>
										<td><center><b>CP</b></center></td>
										<td><center><b>CT</b></center></td>
										<td><center><b>Ref.</b></center></td>
										<td colspan=2><center><b>Prep. Cervical</b></center></td>
										<td><center><b>IAI</b></center></td>
										<td><center><b>IM</b></center></td>
										<td><center><b>IP</b></center></td>
										<td colspan=2><center><b>Ápice / Coroa Step Back</b></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' type='text' name='71'></center></td>
										<td><center><input  class='single-input' type='text' name='72'></center></td>
										<td><center><input  class='single-input' type='text' name='73'></center></td>
										<td><center><input  class='single-input' type='text' name='74'></center></td>
										<td><center><input  class='single-input' type='text' name='75'></center></td>
										<td><center><input  class='single-input' type='text' name='76'></center></td>
										<td><center><input  class='single-input' type='text' name='77'></center></td>
										<td><center><input  class='single-input' type='text' name='78'></center></td>
										<td><center><input  class='single-input' type='text' name='79'></center></td>
										<td><center><input  class='single-input' type='text' name='80'></center></td>
										<td><center><input  class='single-input' type='text' name='81'></center></td>
										<td><center><input  class='single-input' type='text' name='82'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' type='text' name='83'></center></td>
										<td><center><input  class='single-input' type='text' name='84'></center></td>
										<td><center><input  class='single-input' type='text' name='85'></center></td>
										<td><center><input  class='single-input' type='text' name='86'></center></td>
										<td><center><input  class='single-input' type='text' name='87'></center></td>
										<td><center><input  class='single-input' type='text' name='88'></center></td>
										<td><center><input  class='single-input' type='text' name='89'></center></td>
										<td><center><input  class='single-input' type='text' name='90'></center></td>
										<td><center><input  class='single-input' type='text' name='91'></center></td>
										<td><center><input  class='single-input' type='text' name='92'></center></td>
										<td><center><input  class='single-input' type='text' name='93'></center></td>
										<td><center><input  class='single-input' type='text' name='94'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' type='text' name='95'></center></td>
										<td><center><input  class='single-input' type='text' name='96'></center></td>
										<td><center><input  class='single-input' type='text' name='97'></center></td>
										<td><center><input  class='single-input' type='text' name='98'></center></td>
										<td><center><input  class='single-input' type='text' name='99'></center></td>
										<td><center><input  class='single-input' type='text' name='100'></center></td>
										<td><center><input  class='single-input' type='text' name='101'></center></td>
										<td><center><input  class='single-input' type='text' name='102'></center></td>
										<td><center><input  class='single-input' type='text' name='103'></center></td>
										<td><center><input  class='single-input' type='text' name='104'></center></td>
										<td><center><input  class='single-input' type='text' name='105'></center></td>
										<td><center><input  class='single-input' type='text' name='106'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' type='text' name='107'></center></td>
										<td><center><input  class='single-input' type='text' name='108'></center></td>
										<td><center><input  class='single-input' type='text' name='109'></center></td>
										<td><center><input  class='single-input' type='text' name='110'></center></td>
										<td><center><input  class='single-input' type='text' name='111'></center></td>
										<td><center><input  class='single-input' type='text' name='112'></center></td>
										<td><center><input  class='single-input' type='text' name='113'></center></td>
										<td><center><input  class='single-input' type='text' name='114'></center></td>
										<td><center><input  class='single-input' type='text' name='115'></center></td>
										<td><center><input  class='single-input' type='text' name='116'></center></td>
										<td><center><input  class='single-input' type='text' name='117'></center></td>
										<td><center><input  class='single-input' type='text' name='118'></center></td>
									</tr>
								</table>
								<br>
								<table border=0>
									<tr>
										<td><b>Solução Química Irrigadora/Concentração:</b></td>
										<td width='100%'><input type='TEXT' name='119' class='single-input'></td>
									</tr>
								</table>
								<table border=0>
									<tr>
										<td><b>Medicação intracanal:</b></td>
										<td width='100%'><input type='TEXT' name='120' class='single-input'></td>
									</tr>
									<tr>
										<td><b>Cimento Obturador:</b></td>
										<td width='100%'><input type='TEXT' name='121' class='single-input'></td>
									</tr>
								</table>
								<br>
								<table>
									<tr>
										<td><b>Técnica de Obturação:</b></td>
										<td width='40px'><input type='checkbox' name='122' class='single-input'></td>
										<td>Schilder</td>
										<td width='40px'><input type='checkbox' name='123' class='single-input'></td>
										<td>Híbrida Tagger </td>
										<td width='40px'><input type='checkbox' name='124' class='single-input'></td>
										<td>Condensação Lateral</td>
									</tr>
									<tr>
										<td><b>Técnica de Instrumentação:</b></td>
										<td width='40px'><input type='checkbox' name='125' class='single-input'></td>
										<td>Escalonamento Apice-Coroa</td>
										<td width='40px'><input type='checkbox' name='126' class='single-input'></td>
										<td>Outro</td>
									</tr>
									<tr>
										<td><b>Odontometria:</b></td>
										<td width='40px'><input type='checkbox' name='127' class='single-input'></td>
										<td>Técnica Radiográfica</td>
										<td width='40px'><input type='checkbox' name='128' class='single-input'></td>
										<td>Técnica Radiográfica Auxiliada por Localizador Apical</td>
									</tr>
								</table>

								<hr>
								<h5>Repetir Endodontia:</h5><br>
								<table width='100%'>
									 <tr>
										<td>
										   <center><input type='checkbox' name='repetir17'> 17</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir16'> 16</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir15'> 15</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir14'> 14</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir13'> 13</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir12'> 12</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir11'> 11</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir21'> 21</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir22'> 22</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir23'> 23</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir24'> 24</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir25'> 25</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir26'> 26</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir27'> 27</center>
										</td>
									 </tr>
									 <tr>
										<td>
										   <center><input type='checkbox' name='repetir47'> 47</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir46'> 46</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir45'> 45</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir44'> 44</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir43'> 43</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir42'> 42</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir41'> 41</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir31'> 31</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir32'> 32</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir33'> 33</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir34'> 34</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir35'> 35</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir36'> 36</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir37'> 37</center>
										</td>
									 </tr>
									</table>
								<hr>
								<center><input type='submit' value='Salvar' class='genric-btn primary'></center>
								<input type='hidden' name='retratamento' value='1'>
							</form>

							
						<?php	
							
						}else{
							while($linhaAnam = mysql_fetch_array($resultadoAnam)){
								$id = $linhaAnam['nr_idEndodontia'];
								$dupla = $linhaAnam['nr_idDupla'];
								$data = $linhaAnam['dt_preenchimento'];
								$r1 = $linhaAnam['1'];
								$r2 = $linhaAnam['2']; 
								$r3 = $linhaAnam['3']; 
								$r4 = $linhaAnam['4']; 
								$r5 = $linhaAnam['5']; 
								$r6 = $linhaAnam['6']; 
								$r7 = $linhaAnam['7']; 
								$r8 = $linhaAnam['8']; 
								$r9 = $linhaAnam['9']; 
								$r10 = $linhaAnam['10']; 
								$r11 = $linhaAnam['11']; 
								$r12 = $linhaAnam['12']; 
								$r13 = $linhaAnam['13']; 
								$r14 = $linhaAnam['14']; 
								$r15 = $linhaAnam['15']; 
								$r16 = $linhaAnam['16']; 
								$r17 = $linhaAnam['17']; 
								$r18 = $linhaAnam['18']; 
								$r19 = $linhaAnam['19']; 
								$r20 = $linhaAnam['20']; 
								$r21 = $linhaAnam['21']; 
								$r22 = $linhaAnam['22']; 
								$r23 = $linhaAnam['23']; 
								$r24 = $linhaAnam['24']; 
								$r25 = $linhaAnam['25']; 
								$r26 = $linhaAnam['26']; 
								$r27 = $linhaAnam['27']; 
								$r28 = $linhaAnam['28']; 
								$r29 = $linhaAnam['29']; 
								$r30 = $linhaAnam['30']; 
								$r31 = $linhaAnam['31']; 
								$r32 = $linhaAnam['32']; 
								$r33 = $linhaAnam['33']; 
								$r34 = $linhaAnam['34']; 
								$r35 = $linhaAnam['35']; 
								$r36 = $linhaAnam['36']; 
								$r37 = $linhaAnam['37']; 
								$r38 = $linhaAnam['38']; 
								$r39 = $linhaAnam['39']; 
								$r40 = $linhaAnam['40']; 
								$r41 = $linhaAnam['41']; 
								$r42 = $linhaAnam['42']; 
								$r43 = $linhaAnam['43']; 
								$r44 = $linhaAnam['44']; 
								$r45 = $linhaAnam['45']; 
								$r46 = $linhaAnam['46']; 
								$r47 = $linhaAnam['47']; 
								$r48 = $linhaAnam['48']; 
								$r49 = $linhaAnam['49']; 
								$r50 = $linhaAnam['50']; 
								$r51 = $linhaAnam['51']; 
								$r52 = $linhaAnam['52']; 
								$r53 = $linhaAnam['53']; 
								$r54 = $linhaAnam['54']; 
								$r55 = $linhaAnam['55']; 
								$r56 = $linhaAnam['56']; 
								$r57 = $linhaAnam['57']; 
								$r58 = $linhaAnam['58']; 
								$r59 = $linhaAnam['59']; 
								$r60 = $linhaAnam['60']; 
								$r61 = $linhaAnam['61']; 
								$r62 = $linhaAnam['62']; 
								$r63 = $linhaAnam['63']; 
								$r64 = $linhaAnam['64']; 
								$r65 = $linhaAnam['65']; 
								$r66 = $linhaAnam['66']; 
								$r67 = $linhaAnam['67']; 
								$r68 = $linhaAnam['68']; 
								$r69 = $linhaAnam['69']; 
								$r70 = $linhaAnam['70']; 
								$r71 = $linhaAnam['71']; 
								$r72 = $linhaAnam['72']; 
								$r73 = $linhaAnam['73']; 
								$r74 = $linhaAnam['74']; 
								$r75 = $linhaAnam['75']; 
								$r76 = $linhaAnam['76']; 
								$r77 = $linhaAnam['77']; 
								$r78 = $linhaAnam['78']; 
								$r79 = $linhaAnam['79']; 
								$r80 = $linhaAnam['80']; 
								$r81 = $linhaAnam['81']; 
								$r82 = $linhaAnam['82']; 
								$r83 = $linhaAnam['83']; 
								$r84 = $linhaAnam['84']; 
								$r85 = $linhaAnam['85']; 
								$r86 = $linhaAnam['86']; 
								$r87 = $linhaAnam['87']; 
								$r88 = $linhaAnam['88']; 
								$r89 = $linhaAnam['89']; 
								$r90 = $linhaAnam['90']; 
								$r91 = $linhaAnam['91']; 
								$r92 = $linhaAnam['92']; 
								$r93 = $linhaAnam['93']; 
								$r94 = $linhaAnam['94']; 
								$r95 = $linhaAnam['95']; 
								$r96 = $linhaAnam['96']; 
								$r97 = $linhaAnam['97']; 
								$r98 = $linhaAnam['98']; 
								$r99 = $linhaAnam['99']; 
								$r100 = $linhaAnam['100']; 
								$r101 = $linhaAnam['101']; 
								$r102 = $linhaAnam['102']; 
								$r103 = $linhaAnam['103']; 
								$r104 = $linhaAnam['104']; 
								$r105 = $linhaAnam['105']; 
								$r106 = $linhaAnam['106']; 
								$r107 = $linhaAnam['107']; 
								$r108 = $linhaAnam['108']; 
								$r109 = $linhaAnam['109']; 
								$r110 = $linhaAnam['110']; 
								$r111 = $linhaAnam['111']; 
								$r112 = $linhaAnam['112']; 
								$r113 = $linhaAnam['113']; 
								$r114 = $linhaAnam['114']; 
								$r115 = $linhaAnam['115']; 
								$r116 = $linhaAnam['116']; 
								$r117 = $linhaAnam['117']; 
								$r118 = $linhaAnam['118']; 
								$r119 = $linhaAnam['119']; 
								$r120 = $linhaAnam['120']; 
								$r121 = $linhaAnam['121']; 
								$r122 = $linhaAnam['122']; 
								$r123 = $linhaAnam['123']; 
								$r124 = $linhaAnam['124']; 
								$r125 = $linhaAnam['125']; 
								$r126 = $linhaAnam['126']; 
								$r127 = $linhaAnam['127']; 
								$r128 = $linhaAnam['128']; 
								$r129 = $linhaAnam['129']; 
								$r130 = $linhaAnam['130']; 
							}
							
						?>	
							<form method='POST' action='atualizarEndo.php'>
								<input type='hidden' name='id' value='<?php echo $id; ?>'
								<!-- ############################################################## impressão endo 1 -->
								<b>Dupla Responsável: </b>
								<select class='single-input' name='dupla'>
								<?php
									
									echo $sql = "SELECT * FROM tb_duplas WHERE nr_idDupla = ".$dupla." LIMIT 1";
									$resultado = mysql_query($sql) or die();
									while($linha = mysql_fetch_array($resultado)){
										
										$sqlNome1 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linha['nr_cpf1']."'";
										$resultadoNome1 = mysql_query($sqlNome1) or die();
										while($linhaNome1 = mysql_fetch_array($resultadoNome1)){
											$Nome1 = $linhaNome1['nm_nomeAluno']; 
											$periodo = $linhaNome1['nr_periodo']; 
										}
										
										$sqlNome2 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linha['nr_cpf2']."'";
										$resultadoNome2 = mysql_query($sqlNome2) or die();
										while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
											$Nome2 = $linhaNome2['nm_nomeAluno']; 
										}
										
										
										echo "<option value='".$linha['nr_idDupla']."'>".$Nome1." e ".$Nome2." (".$periodo."º Periodo)</option>";
									}
									
									
									$sqlNome = "SELECT * FROM tb_duplas WHERE nm_situacao = 'Ativo'";
									$resultadoNome = mysql_query($sqlNome) or die();
									while($linhaNome = mysql_fetch_array($resultadoNome)){
										if($linhaNome['nr_idDupla'] != $dupla){
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
									}
								?>
								</select><br>
								
								
								
								<b>Data do Preenchimento: </b><input type='text' name='data' class='single-input' value='<?php echo $data; ?>'><br>
								<b>Queixa Principal: </b><input type='text' name='1' class='single-input' value='<?php echo $r1; ?>'>
								<input type='hidden' name='2' value='<?php echo $a; ?>_1' class='single-input'>
								<input type='hidden' name='cpf' value='<?php echo $_GET['cpf']; ?>' class='single-input'>
								
								<hr>
								<br>
								<h5>Semiologia Subjetiva – Características Clínicas da Dor</h5><br>
								<table border=0>
									<tr>
										<td><b>Sede: </b></td>
										<td width='40px'><input type='checkbox' name='3' class='single-input'  value='<?php echo $r3; ?>' <?php echo $r3; ?>></td>
										<td>Localizada</td>
										<td width='40px'><input type='checkbox' name='4' class='single-input'  value='<?php echo $r4; ?>' <?php echo $r4; ?>></td>
										<td>Difusa</td>
									</tr>
									
									
									<tr>	
										<td><b>Aparecimento: </b></td>
										<td width='40px'><input type='checkbox' name='5' class='single-input' value='<?php echo $r5; ?>' <?php echo $r5; ?>></td>
										<td>Provocada</td>
										<td width='40px'><input type='checkbox' name='6' class='single-input' value='<?php echo $r6; ?>' <?php echo $r6; ?>></td>
										<td style='margin-rigth:10px;'>Espontânea</td>
									</tr>
									
									
									<tr>
										<td><b>Duração: </b></td>
										<td width='40px'><input type='checkbox' name='7' class='single-input' value='<?php echo $r7; ?>' <?php echo $r7; ?>></td>
										<td>Curta</td>
										<td width='40px'><input type='checkbox' name='8' class='single-input' value='<?php echo $r8; ?>' <?php echo $r8; ?>></td>
										<td>Longa</td>
									</tr>
									
									
									<tr>
										<td><b>Frequência: </b></td>
										<td width='40px'><input type='checkbox' name='9' class='single-input' value='<?php echo $r9; ?>' <?php echo $r9; ?>></td>
										<td>Intermitente</td>
										<td width='40px'><input type='checkbox' name='10' class='single-input' value='<?php echo $r10; ?>' <?php echo $r10; ?>></td>
										<td>Contínua</td>
									</tr>
									
									<tr>
										<td><b>Intensidade: </b></td>
										<td width='40px'><input type='checkbox' name='11' class='single-input' value='<?php echo $r11; ?>' <?php echo $r11; ?>></td>
										<td>Leve</td>
										<td width='40px'><input type='checkbox' name='12' class='single-input' value='<?php echo $r12; ?>' <?php echo $r12; ?>></td>
										<td>Moderada</td>
										<td width='40px'><input type='checkbox' name='13' class='single-input' value='<?php echo $r13; ?>' <?php echo $r13; ?>></td>
										<td>Severa</td>
									</tr>
								</table>
								
								<hr>
								<h5>Semiologia Objetiva</h5><br>
								<table border=0>
									<tr>
										<td><b>Mucosa Gengival: </b></td>
										<td width='40px'><input type='checkbox' name='14' class='single-input' value='<?php echo $r14; ?>' <?php echo $r14; ?>></td>
										<td>Normal</td>
										<td width='40px'><input type='checkbox' name='15' class='single-input' value='<?php echo $r15; ?>' <?php echo $r15; ?>></td>
										<td>Doença Periodontal</td>
										<td width='40px'><input type='checkbox' name='16' class='single-input' value='<?php echo $r16; ?>' <?php echo $r16; ?>></td>
										<td>Presença de Fístula</td>
										<td width='40px'><input type='checkbox' name='17' class='single-input' value='<?php echo $r17; ?>' <?php echo $r17; ?>></td>
										<td>Presença de Tumefação</td>
									</tr>
								</table>	
								<table>	
									<tr>
										<td width='190px;'><b>Sensibilidade a Palpação: </b></td>
										<td width='40px'><input type='checkbox' name='18' class='single-input' value='<?php echo $r18; ?>' <?php echo $r18; ?>></td>
										<td>Presença de Dor</td>
										<td width='40px'><input type='checkbox' name='19' class='single-input' value='<?php echo $r19; ?>' <?php echo $r19; ?>></td>
										<td>Ausência de Dor</td>
									</tr>
								</table>	
								<table>		
									<tr>
										<td><b>Mobilidade: </b></td>
										<td width='40px'><input type='checkbox' name='20' class='single-input' value='<?php echo $r20; ?>' <?php echo $r20; ?>></td>
										<td>Normal</td>
										<td width='40px'><input type='checkbox' name='21' class='single-input' value='<?php echo $r21; ?>' <?php echo $r21; ?>></td>
										<td>Acentuada</td>
									</tr>
									
									<tr>
										<td><b>Inspeção: </b></td>
										<td width='40px'><input type='checkbox' name='22' class='single-input' value='<?php echo $r22; ?>' <?php echo $r22; ?>></td>
										<td>Coroa íntegra</td>
										<td width='40px'><input type='checkbox' name='23' class='single-input' value='<?php echo $r23; ?>' <?php echo $r23; ?>></td>
										<td>Presença de restaurações</td>
										<td width='40px'><input type='checkbox' name='24' class='single-input' value='<?php echo $r24; ?>' <?php echo $r24; ?>></td>
										<td>Presença de cárie</td>
										<td width='40px'><input type='checkbox' name='25' class='single-input' value='<?php echo $r25; ?>' <?php echo $r25; ?>></td>
										<td>Presença de fratura</td>
									</tr>
									
									<tr>
										<td></td>
										<td width='40px'><input type='checkbox' name='26' class='single-input' value='<?php echo $r26; ?>' <?php echo $r26; ?>></td>
										<td>Polpa exposta com vitalidade</td>
										<td width='40px'><input type='checkbox' name='27' class='single-input' value='<?php echo $r27; ?>' <?php echo $r27; ?>></td>
										<td>Polpa exposta sem vitalidade</td>
										<td width='40px'><input type='checkbox' name='28' class='single-input' value='<?php echo $r28; ?>' <?php echo $r28; ?>></td>
										<td>Alteração da cor da coroa dental</td>
										<td width='40px'><input type='checkbox' name='29' class='single-input' value='<?php echo $r29; ?>' <?php echo $r29; ?>></td>
										<td>Alteração morfológica coronária</td>
									</tr>
								</table>  
								  
								<hr>
								<h5>Exame dos Dentes</h5><br>
								<table border=0>
									<tr>
										<td><b>Testes Térmicos: </b></td>
										<td width='40px'><input type='checkbox' name='30' class='single-input' value='<?php echo $r30; ?>' <?php echo $r30; ?>></td>
										<td>Dor ao Frio</td>
										<td width='40px'><input type='checkbox' name='31' class='single-input' value='<?php echo $r31; ?>' <?php echo $r31; ?>></td>
										<td>Dor ao Calor</td>
										<td width='40px'><input type='checkbox' name='32' class='single-input' value='<?php echo $r32; ?>' <?php echo $r32; ?>></td>
										<td>Ausência de Dor</td>
									</tr>
									
									<tr>
										<td><b>Sensibilidade à Percussão: </b></td>
										<td width='40px'><input type='checkbox' name='33' class='single-input' value='<?php echo $r33; ?>' <?php echo $r33; ?>></td>
										<td>Vertical</td>
										<td width='40px'><input type='checkbox' name='34' class='single-input' value='<?php echo $r34; ?>' <?php echo $r34; ?>></td>
										<td>Horizontal</td>
									</tr>
									
									<tr>
										<td><b>Sensibilidade de Cavidade: </b></td>
										<td width='40px'><input type='checkbox' name='129' class='single-input' value='<?php echo $r129; ?>' <?php echo $r129; ?>></td>
										<td>Presença de Dor</td>
										<td width='40px'><input type='checkbox' name='130' class='single-input' value='<?php echo $r130; ?>' <?php echo $r130; ?>></td>
										<td>Ausência de Dor</td>
									</tr>
								</table>
									
								<hr>
								<h5>Exame Radiográfico</h5><br>
								<table border=0>	
									<tr>
										<td width='40px'><input type='checkbox' name='35' class='single-input' value='<?php echo $r35; ?>' <?php echo $r35; ?>></td>
										<td>Periodonto Normal</td>
										<td width='40px'><input type='checkbox' name='36' class='single-input' value='<?php echo $r36; ?>' <?php echo $r36; ?>></td>
										<td>Espessamento Periodontal</td>
										<td width='40px'><input type='checkbox' name='37' class='single-input' value='<?php echo $r37; ?>' <?php echo $r37; ?>></td>
										<td>Lesão Perirradicular</td>
										<td width='40px'><input type='checkbox' name='38' class='single-input' value='<?php echo $r38; ?>' <?php echo $r38; ?>></td>
										<td>Rizogênese Incompleta</td>
										<td width='40px'><input type='checkbox' name='39' class='single-input' value='<?php echo $r39; ?>' <?php echo $r39; ?>></td>
										<td>Trepanação</td>
									</tr>
									
									<tr>
										<td width='40px'><input type='checkbox' name='40' class='single-input' value='<?php echo $r40; ?>' <?php echo $r40; ?>></td>
										<td>Retentor Intra-Radicular</td>
										<td width='40px'><input type='checkbox' name='41' class='single-input' value='<?php echo $r41; ?>' <?php echo $r41; ?>></td>
										<td>Instrumento Fraturado</td>
										<td width='40px'><input type='checkbox' name='42' class='single-input' value='<?php echo $r42; ?>' <?php echo $r42; ?>></td>
										<td>T.E Insatisfatório</td>
										<td width='40px'><input type='checkbox' name='43' class='single-input' value='<?php echo $r43; ?>' <?php echo $r43; ?>></td>
										<td>Reabsorção: Interna</td>
										<td width='40px'><input type='checkbox' name='44' class='single-input' value='<?php echo $r44; ?>' <?php echo $r44; ?>></td>
										<td>Reabsorção: Externa</td>
									</tr>
									
									<tr>
										<td width='40px'><input type='checkbox' name='45' class='single-input' value='<?php echo $r45; ?>' <?php echo $r45; ?>></td>
										<td>Fratura Dentária: Coronária</td>
										<td width='40px'><input type='checkbox' name='46' class='single-input' value='<?php echo $r46; ?>' <?php echo $r46; ?>></td>
										<td>Fratura Dentária: Radicular</td>
									</tr>
								</table>  
								  
								<hr>
								<h5>Diagnóstico Clínico Provável</h5><br>
								<table border=0>
									<tr>
										<td width='40px'><input type='checkbox' name='47' class='single-input' value='<?php echo $r47; ?>' <?php echo $r47; ?>></td>
										<td>Polpa Normal</td>
										<td width='40px'><input type='checkbox' name='48' class='single-input' value='<?php echo $r48; ?>' <?php echo $r48; ?>></td>
										<td>Abscesso Dentoalveolar Agudo</td>
										<td width='40px'><input type='checkbox' name='49' class='single-input' value='<?php echo $r49; ?>' <?php echo $r49; ?>></td>
										<td>Polpa Inflamada Reversivelmente</td>
										<td width='40px'><input type='checkbox' name='50' class='single-input' value='<?php echo $r50; ?>' <?php echo $r50; ?>></td>
										<td>Polpa inflamada irreversivelmente</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='51' class='single-input' value='<?php echo $r51; ?>' <?php echo $r51; ?>></td>
										<td>Abscesso Dentoaveolar Crônico</td>
										<td width='40px'><input type='checkbox' name='52' class='single-input' value='<?php echo $r52; ?>' <?php echo $r52; ?>></td>
										<td>Granuloma Apical/Cisto Periodontal Apical</td>
										<td width='40px'><input type='checkbox' name='53' class='single-input' value='<?php echo $r53; ?>' <?php echo $r53; ?>></td>
										<td>Necrose Pulpar </td>
										<td width='40px'><input type='checkbox' name='54' class='single-input' value='<?php echo $r54; ?>' <?php echo $r54; ?>></td>
										<td>Displasia Cementária Periapical</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='55' class='single-input' value='<?php echo $r55; ?>' <?php echo $r55; ?>></td>
										<td>Pericementite Apical Aguda </td>
										<td width='40px'><input type='checkbox' name='56' class='single-input' value='<?php echo $r56; ?>' <?php echo $r56; ?>></td>
										<td>Pericementite Apical Crônica</td>
										<td colspan=4><input type='text' name='57' placeholder='Outras Patologias' class='single-input' value='<?php echo $r57; ?>'></td>
									</tr>
								</table> 
								  
								<hr>
								<h5>Indicação de Tratamento</h5><br>
								<table border=0>
									<tr>
										<td width='40px'><input type='checkbox' name='58' class='single-input' value='<?php echo $r58; ?>' <?php echo $r58; ?>></td>
										<td>Proteção Pulpar Indireta</td>
										<td width='40px'><input type='checkbox' name='59' class='single-input' value='<?php echo $r59; ?>' <?php echo $r59; ?>></td>
										<td>Proteção Pulpar Direta </td>
										<td width='40px'><input type='checkbox' name='60' class='single-input' value='<?php echo $r60; ?>' <?php echo $r60; ?>></td>
										<td>Tratamento de Canal </td>
										<td width='40px'><input type='checkbox' name='61' class='single-input' value='<?php echo $r61; ?>' <?php echo $r61; ?>></td>
										<td>Retratamento de canal</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='62' class='single-input' value='<?php echo $r62; ?>' <?php echo $r62; ?>></td>
										<td>Apicigênese</td>
										<td width='40px'><input type='checkbox' name='63' class='single-input' value='<?php echo $r63; ?>' <?php echo $r63; ?>></td>
										<td>Apicetomia, Retropreparo e Retrobturação</td>
										<td width='40px'><input type='checkbox' name='64' class='single-input' value='<?php echo $r64; ?>' <?php echo $r64; ?>></td>
										<td>Transplante Dentário</td>
										<td width='40px'><input type='checkbox' name='65' class='single-input' value='<?php echo $r65; ?>' <?php echo $r65; ?>></td>
										<td>Reimplante Dentário</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='66' class='single-input' value='<?php echo $r66; ?>' <?php echo $r66; ?>></td>
										<td>Tratamento Não-Cirúrgico de Perfuração</td>
										<td width='40px'><input type='checkbox' name='67' class='single-input' value='<?php echo $r67; ?>' <?php echo $r67; ?>></td>
										<td>Tratamento Cirúrgico de Perfuração</td>
										<td width='40px'><input type='checkbox' name='68' class='single-input' value='<?php echo $r68; ?>' <?php echo $r68; ?>></td>
										<td>Curetagem Apical</td>
										<td width='40px'><input type='checkbox' name='69' class='single-input' value='<?php echo $r69; ?>' <?php echo $r69; ?>></td>
										<td>Apicificação</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='70' class='single-input' value='<?php echo $r70; ?>' <?php echo $r70; ?>></td>
										<td>Proservação / acompanhamento</td>
									</tr>
								</table> 
								
								<hr>
								<h5>Terapêutica Sistêmica</h5>
								<br>
								<table border=0 width='100%'>
									<tr>
										<td colspan=5 style='border: 1px solid rgb(193,193,255); color:black;'><center>Odontometria</center></td>
										<td colspan=7 style='border: 1px solid rgb(193,193,255);'><center>Preparo Cirúrgico-Mecânico</center></td>
									</tr>
									<tr>
										<td><center><b>Canal</b></center></td>
										<td><center><b>CDR</b></center></td>
										<td><center><b>CP</b></center></td>
										<td><center><b>CT</b></center></td>
										<td><center><b>Ref.</b></center></td>
										<td colspan=2><center><b>Prep. Cervical</b></center></td>
										<td><center><b>IAI</b></center></td>
										<td><center><b>IM</b></center></td>
										<td><center><b>IP</b></center></td>
										<td colspan=2><center><b>Ápice / Coroa Step Back</b></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' value='<?php echo $r71; ?>' type='text' name='71'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r72; ?>' type='text' name='72'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r73; ?>' type='text' name='73'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r74; ?>' type='text' name='74'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r75; ?>' type='text' name='75'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r76; ?>' type='text' name='76'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r77; ?>' type='text' name='77'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r78; ?>' type='text' name='78'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r79; ?>' type='text' name='79'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r80; ?>' type='text' name='80'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r81; ?>' type='text' name='81'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r82; ?>' type='text' name='82'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' value='<?php echo $r83; ?>' type='text' name='83'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r84; ?>' type='text' name='84'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r85; ?>' type='text' name='85'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r86; ?>' type='text' name='86'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r87; ?>' type='text' name='87'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r88; ?>' type='text' name='88'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r89; ?>' type='text' name='89'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r90; ?>' type='text' name='90'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r91; ?>' type='text' name='91'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r92; ?>' type='text' name='92'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r93; ?>' type='text' name='93'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r94; ?>' type='text' name='94'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' value='<?php echo $r95; ?>' type='text' name='95'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r96; ?>' type='text' name='96'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r97; ?>' type='text' name='97'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r98; ?>' type='text' name='98'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r99; ?>' type='text' name='99'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r100; ?>' type='text' name='100'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r101; ?>' type='text' name='101'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r102; ?>' type='text' name='102'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r103; ?>' type='text' name='103'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r104; ?>' type='text' name='104'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r105; ?>' type='text' name='105'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r106; ?>' type='text' name='106'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' value='<?php echo $r107; ?>' type='text' name='107'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r108; ?>' type='text' name='108'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r109; ?>' type='text' name='109'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r110; ?>' type='text' name='110'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r111; ?>' type='text' name='111'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r112; ?>' type='text' name='112'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r113; ?>' type='text' name='113'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r114; ?>' type='text' name='114'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r115; ?>' type='text' name='115'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r116; ?>' type='text' name='116'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r117; ?>' type='text' name='117'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r118; ?>' type='text' name='118'></center></td>
									</tr>
								</table>
								<br>
								<table border=0>
									<tr>
										<td><b>Solução Química Irrigadora/Concentração:</b></td>
										<td width='100%'><input type='TEXT' name='119' class='single-input' value='<?php echo $r119; ?>'></td>
									</tr>
								</table>
								<table border=0>
									<tr>
										<td><b>Medicação intracanal:</b></td>
										<td width='100%'><input type='TEXT' name='120' class='single-input' value='<?php echo $r120; ?>'></td>
									</tr>
									<tr>
										<td><b>Cimento Obturador:</b></td>
										<td width='100%'><input type='TEXT' name='121' class='single-input' value='<?php echo $r121; ?>'></td>
									</tr>
								</table>
								<br>
								<table>
									<tr>
										<td><b>Técnica de Obturação:</b></td>
										<td width='40px'><input type='checkbox' name='122' class='single-input' value='<?php echo $r122; ?>' <?php echo $r122; ?>></td>
										<td>Schilder</td>
										<td width='40px'><input type='checkbox' name='123' class='single-input' value='<?php echo $r123; ?>' <?php echo $r123; ?>></td>
										<td>Híbrida Tagger </td>
										<td width='40px'><input type='checkbox' name='124' class='single-input' value='<?php echo $r124; ?>' <?php echo $r124; ?>></td>
										<td>Condensação Lateral</td>
									</tr>
									<tr>
										<td><b>Técnica de Instrumentação:</b></td>
										<td width='40px'><input type='checkbox' name='125' class='single-input' value='<?php echo $r125; ?>' <?php echo $r125; ?>></td>
										<td>Escalonamento Apice-Coroa</td>
										<td width='40px'><input type='checkbox' name='126' class='single-input' value='<?php echo $r126; ?>' <?php echo $r126; ?>></td>
										<td>Outro</td>
									</tr>
									<tr>
										<td><b>Odontometria:</b></td>
										<td width='40px'><input type='checkbox' name='127' class='single-input' value='<?php echo $r127; ?>' <?php echo $r127; ?>></td>
										<td>Técnica Radiográfica</td>
										<td width='40px'><input type='checkbox' name='128' class='single-input' value='<?php echo $r128; ?>' <?php echo $r128; ?>></td>
										<td>Técnica Radiográfica Auxiliada por Localizador Apical</td>
									</tr>
								</table>
								<br>
								<center>
									<input type='submit' value='Atualizar' class='genric-btn primary'>
									<a href='excluirEndo.php?id=<?php echo $id; ?>' class='genric-btn secondary'>Excluir</a>
								</center>
							</form>
							
						<?php	
							
							
						}
						
						
						?>
						
						
						
						
						
						
						
					  </div>
					</div>

				  </div>
				  <!-- Accordion card -->

				  <!-- Accordion card -->
				  <div class="card">

					<!-- Card header -->
					<div class="card-header" role="tab" id="headingTwo<?php echo $a; ?>">
					  <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo<?php echo $a; ?>"
						aria-expanded="false" aria-controls="collapseTwo<?php echo $a; ?>">
						<h5 class="mb-0">
						  Dente <?php echo $a; ?> - Retratamento
						</h5>
					  </a>
					</div>

					<!-- Card body -->
					<div id="collapseTwo<?php echo $a; ?>" class="collapse" role="tabpanel" aria-labelledby="headingTwo<?php echo $a; ?>"
					  data-parent="#accordionEx">
					  <div class="card-body">
						
						<?php
						
						$sqlAnam = "SELECT * FROM `tb_endodontia` WHERE `nr_cpfPaciente` = '".$_GET['cpf']."' AND `2` = '".$a."_2'";
						$resultadoAnam = mysql_query($sqlAnam) or die();
						$numImg = mysql_num_rows($resultadoAnam);
						if($numImg == 0){
							
						?>	
							
							<!-- ###################################################################################### CADASTRO ENDO 2 -->
							<form method='POST' action='inserirEndo.php'>
								<input type='hidden' name='retratamento' value='2'>
								<b>Dupla Responsável:</b>
								<select class='single-input' name='dupla'>
								<?php
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
								?>
								</select><br>
							
								<b>Queixa Principal: </b><input type='text' name='1' class='single-input' placeholder='Queixa Principal'>
								<input type='hidden' name='2' value='<?php echo $a; ?>_2' class='single-input'>
								<input type='hidden' name='cpf' value='<?php echo $_GET['cpf']; ?>' class='single-input'>
								
								<hr>
								<br>
								<h5>Semiologia Subjetiva – Características Clínicas da Dor</h5><br>
								<table border=0>
									<tr>
										<td><b>Sede: </b></td>
										<td width='40px'><input type='checkbox' name='3' class='single-input'></td>
										<td>Localizada</td>
										<td width='40px'><input type='checkbox' name='4' class='single-input'></td>
										<td>Difusa</td>
									</tr>
									
									
									<tr>	
										<td><b>Aparecimento: </b></td>
										<td width='40px'><input type='checkbox' name='5' class='single-input'></td>
										<td>Provocada</td>
										<td width='40px'><input type='checkbox' name='6' class='single-input'></td>
										<td style='margin-rigth:10px;'>Espontânea</td>
									</tr>
									
									
									<tr>
										<td><b>Duração: </b></td>
										<td width='40px'><input type='checkbox' name='7' class='single-input'></td>
										<td>Curta</td>
										<td width='40px'><input type='checkbox' name='8' class='single-input'></td>
										<td>Longa</td>
									</tr>
									
									
									<tr>
										<td><b>Frequência: </b></td>
										<td width='40px'><input type='checkbox' name='9' class='single-input'></td>
										<td>Intermitente</td>
										<td width='40px'><input type='checkbox' name='10' class='single-input'></td>
										<td>Contínua</td>
									</tr>
									
									<tr>
										<td><b>Intensidade: </b></td>
										<td width='40px'><input type='checkbox' name='11' class='single-input'></td>
										<td>Leve</td>
										<td width='40px'><input type='checkbox' name='12' class='single-input'></td>
										<td>Moderada</td>
										<td width='40px'><input type='checkbox' name='13' class='single-input'></td>
										<td>Severa</td>
									</tr>
								</table>
								
								<hr>
								<h5>Semiologia Objetiva</h5><br>
								<table border=0>
									<tr>
										<td><b>Mucosa Gengival: </b></td>
										<td width='40px'><input type='checkbox' name='14' class='single-input'></td>
										<td>Normal</td>
										<td width='40px'><input type='checkbox' name='15' class='single-input'></td>
										<td>Doença Periodontal</td>
										<td width='40px'><input type='checkbox' name='16' class='single-input'></td>
										<td>Presença de Fístula</td>
										<td width='40px'><input type='checkbox' name='17' class='single-input'></td>
										<td>Presença de Tumefação</td>
									</tr>
								</table>	
								<table>	
									<tr>
										<td width='190px;'><b>Sensibilidade a Palpação: </b></td>
										<td width='40px'><input type='checkbox' name='18' class='single-input'></td>
										<td>Presença de Dor</td>
										<td width='40px'><input type='checkbox' name='19' class='single-input'></td>
										<td>Ausência de Dor</td>
									</tr>
								</table>	
								<table>		
									<tr>
										<td><b>Mobilidade: </b></td>
										<td width='40px'><input type='checkbox' name='20' class='single-input'></td>
										<td>Normal</td>
										<td width='40px'><input type='checkbox' name='21' class='single-input'></td>
										<td>Acentuada</td>
									</tr>
									
									<tr>
										<td><b>Inspeção: </b></td>
										<td width='40px'><input type='checkbox' name='22' class='single-input'></td>
										<td>Coroa íntegra</td>
										<td width='40px'><input type='checkbox' name='23' class='single-input'></td>
										<td>Presença de restaurações</td>
										<td width='40px'><input type='checkbox' name='24' class='single-input'></td>
										<td>Presença de cárie</td>
										<td width='40px'><input type='checkbox' name='25' class='single-input'></td>
										<td>Presença de fratura</td>
									</tr>
									
									<tr>
										<td></td>
										<td width='40px'><input type='checkbox' name='26' class='single-input'></td>
										<td>Polpa exposta com vitalidade</td>
										<td width='40px'><input type='checkbox' name='27' class='single-input'></td>
										<td>Polpa exposta sem vitalidade</td>
										<td width='40px'><input type='checkbox' name='28' class='single-input'></td>
										<td>Alteração da cor da coroa dental</td>
										<td width='40px'><input type='checkbox' name='29' class='single-input'></td>
										<td>Alteração morfológica coronária</td>
									</tr>
								</table>  
								  
								<hr>
								<h5>Exame dos Dentes</h5><br>
								<table border=0>
									<tr>
										<td><b>Testes Térmicos: </b></td>
										<td width='40px'><input type='checkbox' name='30' class='single-input'></td>
										<td>Dor ao Frio</td>
										<td width='40px'><input type='checkbox' name='31' class='single-input'></td>
										<td>Dor ao Calor</td>
										<td width='40px'><input type='checkbox' name='32' class='single-input'></td>
										<td>Ausência de Dor</td>
									</tr>
									
									<tr>
										<td><b>Sensibilidade à Percussão: </b></td>
										<td width='40px'><input type='checkbox' name='33' class='single-input'></td>
										<td>Vertical</td>
										<td width='40px'><input type='checkbox' name='34' class='single-input'></td>
										<td>Horizontal</td>
									</tr>
									
									<tr>
										<td><b>Sensibilidade de Cavidade: </b></td>
										<td width='40px'><input type='checkbox' name='129' class='single-input'></td>
										<td>Presença de Dor</td>
										<td width='40px'><input type='checkbox' name='130' class='single-input'></td>
										<td>Ausência de Dor</td>
									</tr>
								</table>  
								<hr>	
								<h5>Exame Radiográfico</h5><br>
								<table border=0>								
									<tr>
										<td width='40px'><input type='checkbox' name='35' class='single-input'></td>
										<td>Periodonto Normal</td>
										<td width='40px'><input type='checkbox' name='36' class='single-input'></td>
										<td>Espessamento Periodontal</td>
										<td width='40px'><input type='checkbox' name='37' class='single-input'></td>
										<td>Lesão Perirradicular</td>
										<td width='40px'><input type='checkbox' name='38' class='single-input'></td>
										<td>Rizogênese Incompleta</td>
										<td width='40px'><input type='checkbox' name='39' class='single-input'></td>
										<td>Trepanação</td>
									</tr>
									
									<tr>
										<td width='40px'><input type='checkbox' name='40' class='single-input'></td>
										<td>Retentor Intra-Radicular</td>
										<td width='40px'><input type='checkbox' name='41' class='single-input'></td>
										<td>Instrumento Fraturado</td>
										<td width='40px'><input type='checkbox' name='42' class='single-input'></td>
										<td>T.E Insatisfatório</td>
										<td width='40px'><input type='checkbox' name='43' class='single-input'></td>
										<td>Reabsorção: Interna</td>
										<td width='40px'><input type='checkbox' name='44' class='single-input'></td>
										<td>Reabsorção: Externa</td>
									</tr>
									
									<tr>
										<td width='40px'><input type='checkbox' name='45' class='single-input'></td>
										<td>Fratura Dentária: Coronária</td>
										<td width='40px'><input type='checkbox' name='46' class='single-input'></td>
										<td>Fratura Dentária: Radicular</td>
									</tr>
								</table>  
								
								  
								<hr>
								<h5>Diagnóstico Clínico Provável</h5><br>
								<table border=0>
									<tr>
										<td width='40px'><input type='checkbox' name='47' class='single-input'></td>
										<td>Polpa Normal</td>
										<td width='40px'><input type='checkbox' name='48' class='single-input'></td>
										<td>Abscesso Dentoalveolar Agudo</td>
										<td width='40px'><input type='checkbox' name='49' class='single-input'></td>
										<td>Polpa Inflamada Reversivelmente</td>
										<td width='40px'><input type='checkbox' name='50' class='single-input'></td>
										<td>Polpa inflamada irreversivelmente</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='51' class='single-input'></td>
										<td>Abscesso Dentoaveolar Crônico</td>
										<td width='40px'><input type='checkbox' name='52' class='single-input'></td>
										<td>Granuloma Apical/Cisto Periodontal Apical</td>
										<td width='40px'><input type='checkbox' name='53' class='single-input'></td>
										<td>Necrose Pulpar </td>
										<td width='40px'><input type='checkbox' name='54' class='single-input'></td>
										<td>Displasia Cementária Periapical</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='55' class='single-input'></td>
										<td>Pericementite Apical Aguda </td>
										<td width='40px'><input type='checkbox' name='56' class='single-input'></td>
										<td>Pericementite Apical Crônica</td>
										<td colspan=4><input type='text' name='57' placeholder='Outras Patologias' class='single-input'></td>
									</tr>
								</table> 
								  
								<hr>
								<h5>Indicação de Tratamento</h5><br>
								<table border=0>
									<tr>
										<td width='40px'><input type='checkbox' name='58' class='single-input'></td>
										<td>Proteção Pulpar Indireta</td>
										<td width='40px'><input type='checkbox' name='59' class='single-input'></td>
										<td>Proteção Pulpar Direta </td>
										<td width='40px'><input type='checkbox' name='60' class='single-input'></td>
										<td>Tratamento de Canal </td>
										<td width='40px'><input type='checkbox' name='61' class='single-input'></td>
										<td>Retratamento de canal</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='62' class='single-input'></td>
										<td>Apicigênese</td>
										<td width='40px'><input type='checkbox' name='63' class='single-input'></td>
										<td>Apicetomia, Retropreparo e Retrobturação</td>
										<td width='40px'><input type='checkbox' name='64' class='single-input'></td>
										<td>Transplante Dentário</td>
										<td width='40px'><input type='checkbox' name='65' class='single-input'></td>
										<td>Reimplante Dentário</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='66' class='single-input'></td>
										<td>Tratamento Não-Cirúrgico de Perfuração</td>
										<td width='40px'><input type='checkbox' name='67' class='single-input'></td>
										<td>Tratamento Cirúrgico de Perfuração</td>
										<td width='40px'><input type='checkbox' name='68' class='single-input'></td>
										<td>Curetagem Apical</td>
										<td width='40px'><input type='checkbox' name='69' class='single-input'></td>
										<td>Apicificação</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='70' class='single-input'></td>
										<td>Proservação / acompanhamento</td>
									</tr>
								</table> 
								
								<hr>
								<h5>Terapêutica Sistêmica</h5>
								<br>
								<table border=0 width='100%'>
									<tr>
										<td colspan=5 style='border: 1px solid rgb(193,193,255);'><center>Odontometria</center></td>
										<td colspan=7 style='border: 1px solid rgb(193,193,255);'><center>Preparo Cirúrgico-Mecânico</center></td>
									</tr>

									<tr>
										<td><center><b>Canal</b></center></td>
										<td><center><b>CDR</b></center></td>
										<td><center><b>CP</b></center></td>
										<td><center><b>CT</b></center></td>
										<td><center><b>Ref.</b></center></td>
										<td colspan=2><center><b>Prep. Cervical</b></center></td>
										<td><center><b>IAI</b></center></td>
										<td><center><b>IM</b></center></td>
										<td><center><b>IP</b></center></td>
										<td colspan=2><center><b>Ápice / Coroa Step Back</b></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' type='text' name='71'></center></td>
										<td><center><input  class='single-input' type='text' name='72'></center></td>
										<td><center><input  class='single-input' type='text' name='73'></center></td>
										<td><center><input  class='single-input' type='text' name='74'></center></td>
										<td><center><input  class='single-input' type='text' name='75'></center></td>
										<td><center><input  class='single-input' type='text' name='76'></center></td>
										<td><center><input  class='single-input' type='text' name='77'></center></td>
										<td><center><input  class='single-input' type='text' name='78'></center></td>
										<td><center><input  class='single-input' type='text' name='79'></center></td>
										<td><center><input  class='single-input' type='text' name='80'></center></td>
										<td><center><input  class='single-input' type='text' name='81'></center></td>
										<td><center><input  class='single-input' type='text' name='82'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' type='text' name='83'></center></td>
										<td><center><input  class='single-input' type='text' name='84'></center></td>
										<td><center><input  class='single-input' type='text' name='85'></center></td>
										<td><center><input  class='single-input' type='text' name='86'></center></td>
										<td><center><input  class='single-input' type='text' name='87'></center></td>
										<td><center><input  class='single-input' type='text' name='88'></center></td>
										<td><center><input  class='single-input' type='text' name='89'></center></td>
										<td><center><input  class='single-input' type='text' name='90'></center></td>
										<td><center><input  class='single-input' type='text' name='91'></center></td>
										<td><center><input  class='single-input' type='text' name='92'></center></td>
										<td><center><input  class='single-input' type='text' name='93'></center></td>
										<td><center><input  class='single-input' type='text' name='94'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' type='text' name='95'></center></td>
										<td><center><input  class='single-input' type='text' name='96'></center></td>
										<td><center><input  class='single-input' type='text' name='97'></center></td>
										<td><center><input  class='single-input' type='text' name='98'></center></td>
										<td><center><input  class='single-input' type='text' name='99'></center></td>
										<td><center><input  class='single-input' type='text' name='100'></center></td>
										<td><center><input  class='single-input' type='text' name='101'></center></td>
										<td><center><input  class='single-input' type='text' name='102'></center></td>
										<td><center><input  class='single-input' type='text' name='103'></center></td>
										<td><center><input  class='single-input' type='text' name='104'></center></td>
										<td><center><input  class='single-input' type='text' name='105'></center></td>
										<td><center><input  class='single-input' type='text' name='106'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' type='text' name='107'></center></td>
										<td><center><input  class='single-input' type='text' name='108'></center></td>
										<td><center><input  class='single-input' type='text' name='109'></center></td>
										<td><center><input  class='single-input' type='text' name='110'></center></td>
										<td><center><input  class='single-input' type='text' name='111'></center></td>
										<td><center><input  class='single-input' type='text' name='112'></center></td>
										<td><center><input  class='single-input' type='text' name='113'></center></td>
										<td><center><input  class='single-input' type='text' name='114'></center></td>
										<td><center><input  class='single-input' type='text' name='115'></center></td>
										<td><center><input  class='single-input' type='text' name='116'></center></td>
										<td><center><input  class='single-input' type='text' name='117'></center></td>
										<td><center><input  class='single-input' type='text' name='118'></center></td>
									</tr>
								</table>
								<br>
								<table border=0>
									<tr>
										<td><b>Solução Química Irrigadora/Concentração:</b></td>
										<td width='100%'><input type='TEXT' name='119' class='single-input'></td>
									</tr>
								</table>
								<table border=0>
									<tr>
										<td><b>Medicação intracanal:</b></td>
										<td width='100%'><input type='TEXT' name='120' class='single-input'></td>
									</tr>
									<tr>
										<td><b>Cimento Obturador:</b></td>
										<td width='100%'><input type='TEXT' name='121' class='single-input'></td>
									</tr>
								</table>
								<br>
								<table>
									<tr>
										<td><b>Técnica de Obturação:</b></td>
										<td width='40px'><input type='checkbox' name='122' class='single-input'></td>
										<td>Schilder</td>
										<td width='40px'><input type='checkbox' name='123' class='single-input'></td>
										<td>Híbrida Tagger </td>
										<td width='40px'><input type='checkbox' name='124' class='single-input'></td>
										<td>Condensação Lateral</td>
									</tr>
									<tr>
										<td><b>Técnica de Instrumentação:</b></td>
										<td width='40px'><input type='checkbox' name='125' class='single-input'></td>
										<td>Escalonamento Apice-Coroa</td>
										<td width='40px'><input type='checkbox' name='126' class='single-input'></td>
										<td>Outro</td>
									</tr>
									<tr>
										<td><b>Odontometria:</b></td>
										<td width='40px'><input type='checkbox' name='127' class='single-input'></td>
										<td>Técnica Radiográfica</td>
										<td width='40px'><input type='checkbox' name='128' class='single-input'></td>
										<td>Técnica Radiográfica Auxiliada por Localizador Apical</td>
									</tr>
								</table>

								<hr>
								<h5>Repetir Endodontia:</h5><br>
								<table width='100%'>
									 <tr>
										<td>
										   <center><input type='checkbox' name='repetir17'> 17</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir16'> 16</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir15'> 15</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir14'> 14</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir13'> 13</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir12'> 12</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir11'> 11</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir21'> 21</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir22'> 22</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir23'> 23</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir24'> 24</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir25'> 25</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir26'> 26</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir27'> 27</center>
										</td>
									 </tr>
									 <tr>
										<td>
										   <center><input type='checkbox' name='repetir47'> 47</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir46'> 46</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir45'> 45</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir44'> 44</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir43'> 43</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir42'> 42</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir41'> 41</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir31'> 31</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir32'> 32</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir33'> 33</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir34'> 34</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir35'> 35</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir36'> 36</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir37'> 37</center>
										</td>
									 </tr>
									</table>
								<hr>
								<center><input type='submit' value='Salvar' class='genric-btn primary'></center>
							</form>

							
						<?php	
							
						}else{
							while($linhaAnam = mysql_fetch_array($resultadoAnam)){
								$id = $linhaAnam['nr_idEndodontia'];
								$dupla = $linhaAnam['nr_idDupla'];
								$data = $linhaAnam['dt_preenchimento'];
								$r1 = $linhaAnam['1'];
								$r2 = $linhaAnam['2']; 
								$r3 = $linhaAnam['3']; 
								$r4 = $linhaAnam['4']; 
								$r5 = $linhaAnam['5']; 
								$r6 = $linhaAnam['6']; 
								$r7 = $linhaAnam['7']; 
								$r8 = $linhaAnam['8']; 
								$r9 = $linhaAnam['9']; 
								$r10 = $linhaAnam['10']; 
								$r11 = $linhaAnam['11']; 
								$r12 = $linhaAnam['12']; 
								$r13 = $linhaAnam['13']; 
								$r14 = $linhaAnam['14']; 
								$r15 = $linhaAnam['15']; 
								$r16 = $linhaAnam['16']; 
								$r17 = $linhaAnam['17']; 
								$r18 = $linhaAnam['18']; 
								$r19 = $linhaAnam['19']; 
								$r20 = $linhaAnam['20']; 
								$r21 = $linhaAnam['21']; 
								$r22 = $linhaAnam['22']; 
								$r23 = $linhaAnam['23']; 
								$r24 = $linhaAnam['24']; 
								$r25 = $linhaAnam['25']; 
								$r26 = $linhaAnam['26']; 
								$r27 = $linhaAnam['27']; 
								$r28 = $linhaAnam['28']; 
								$r29 = $linhaAnam['29']; 
								$r30 = $linhaAnam['30']; 
								$r31 = $linhaAnam['31']; 
								$r32 = $linhaAnam['32']; 
								$r33 = $linhaAnam['33']; 
								$r34 = $linhaAnam['34']; 
								$r35 = $linhaAnam['35']; 
								$r36 = $linhaAnam['36']; 
								$r37 = $linhaAnam['37']; 
								$r38 = $linhaAnam['38']; 
								$r39 = $linhaAnam['39']; 
								$r40 = $linhaAnam['40']; 
								$r41 = $linhaAnam['41']; 
								$r42 = $linhaAnam['42']; 
								$r43 = $linhaAnam['43']; 
								$r44 = $linhaAnam['44']; 
								$r45 = $linhaAnam['45']; 
								$r46 = $linhaAnam['46']; 
								$r47 = $linhaAnam['47']; 
								$r48 = $linhaAnam['48']; 
								$r49 = $linhaAnam['49']; 
								$r50 = $linhaAnam['50']; 
								$r51 = $linhaAnam['51']; 
								$r52 = $linhaAnam['52']; 
								$r53 = $linhaAnam['53']; 
								$r54 = $linhaAnam['54']; 
								$r55 = $linhaAnam['55']; 
								$r56 = $linhaAnam['56']; 
								$r57 = $linhaAnam['57']; 
								$r58 = $linhaAnam['58']; 
								$r59 = $linhaAnam['59']; 
								$r60 = $linhaAnam['60']; 
								$r61 = $linhaAnam['61']; 
								$r62 = $linhaAnam['62']; 
								$r63 = $linhaAnam['63']; 
								$r64 = $linhaAnam['64']; 
								$r65 = $linhaAnam['65']; 
								$r66 = $linhaAnam['66']; 
								$r67 = $linhaAnam['67']; 
								$r68 = $linhaAnam['68']; 
								$r69 = $linhaAnam['69']; 
								$r70 = $linhaAnam['70']; 
								$r71 = $linhaAnam['71']; 
								$r72 = $linhaAnam['72']; 
								$r73 = $linhaAnam['73']; 
								$r74 = $linhaAnam['74']; 
								$r75 = $linhaAnam['75']; 
								$r76 = $linhaAnam['76']; 
								$r77 = $linhaAnam['77']; 
								$r78 = $linhaAnam['78']; 
								$r79 = $linhaAnam['79']; 
								$r80 = $linhaAnam['80']; 
								$r81 = $linhaAnam['81']; 
								$r82 = $linhaAnam['82']; 
								$r83 = $linhaAnam['83']; 
								$r84 = $linhaAnam['84']; 
								$r85 = $linhaAnam['85']; 
								$r86 = $linhaAnam['86']; 
								$r87 = $linhaAnam['87']; 
								$r88 = $linhaAnam['88']; 
								$r89 = $linhaAnam['89']; 
								$r90 = $linhaAnam['90']; 
								$r91 = $linhaAnam['91']; 
								$r92 = $linhaAnam['92']; 
								$r93 = $linhaAnam['93']; 
								$r94 = $linhaAnam['94']; 
								$r95 = $linhaAnam['95']; 
								$r96 = $linhaAnam['96']; 
								$r97 = $linhaAnam['97']; 
								$r98 = $linhaAnam['98']; 
								$r99 = $linhaAnam['99']; 
								$r100 = $linhaAnam['100']; 
								$r101 = $linhaAnam['101']; 
								$r102 = $linhaAnam['102']; 
								$r103 = $linhaAnam['103']; 
								$r104 = $linhaAnam['104']; 
								$r105 = $linhaAnam['105']; 
								$r106 = $linhaAnam['106']; 
								$r107 = $linhaAnam['107']; 
								$r108 = $linhaAnam['108']; 
								$r109 = $linhaAnam['109']; 
								$r110 = $linhaAnam['110']; 
								$r111 = $linhaAnam['111']; 
								$r112 = $linhaAnam['112']; 
								$r113 = $linhaAnam['113']; 
								$r114 = $linhaAnam['114']; 
								$r115 = $linhaAnam['115']; 
								$r116 = $linhaAnam['116']; 
								$r117 = $linhaAnam['117']; 
								$r118 = $linhaAnam['118']; 
								$r119 = $linhaAnam['119']; 
								$r120 = $linhaAnam['120']; 
								$r121 = $linhaAnam['121']; 
								$r122 = $linhaAnam['122']; 
								$r123 = $linhaAnam['123']; 
								$r124 = $linhaAnam['124']; 
								$r125 = $linhaAnam['125']; 
								$r126 = $linhaAnam['126']; 
								$r127 = $linhaAnam['127']; 
								$r128 = $linhaAnam['128']; 
								$r129 = $linhaAnam['129']; 
								$r130 = $linhaAnam['130']; 
													
							}
							
						?>	
						
								<!-- ############################################################## impressão endo 2 -->
							<form method='POST' action='atualizarEndo.php'>
								<input type='hidden' name='id' value='<?php echo $id; ?>'>
								<b>Dupla Responsável: </b>
								<select class='single-input' name='dupla'>
								<?php
									
									echo $sql = "SELECT * FROM tb_duplas WHERE nr_idDupla = ".$dupla." LIMIT 1";
									$resultado = mysql_query($sql) or die();
									while($linha = mysql_fetch_array($resultado)){
										
										$sqlNome1 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linha['nr_cpf1']."'";
										$resultadoNome1 = mysql_query($sqlNome1) or die();
										while($linhaNome1 = mysql_fetch_array($resultadoNome1)){
											$Nome1 = $linhaNome1['nm_nomeAluno']; 
											$periodo = $linhaNome1['nr_periodo']; 
										}
										
										$sqlNome2 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linha['nr_cpf2']."'";
										$resultadoNome2 = mysql_query($sqlNome2) or die();
										while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
											$Nome2 = $linhaNome2['nm_nomeAluno']; 
										}
										
										
										echo "<option value='".$linha['nr_idDupla']."'>".$Nome1." e ".$Nome2." (".$periodo."º Periodo)</option>";
									}
									
									
									$sqlNome = "SELECT * FROM tb_duplas WHERE nm_situacao = 'Ativo'";
									$resultadoNome = mysql_query($sqlNome) or die();
									while($linhaNome = mysql_fetch_array($resultadoNome)){
										if($linhaNome['nr_idDupla'] != $dupla){
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
									}
								?>
								</select><br>
								
								
								
								<b>Data do Preenchimento: </b><input type='text' name='data' class='single-input' value='<?php echo $data; ?>'><br>
								<b>Queixa Principal: </b><input type='text' name='1' class='single-input' value='<?php echo $r1; ?>'>
								<input type='hidden' name='2' value='<?php echo $r2; ?>' class='single-input'>
								<input type='hidden' name='cpf' value='<?php echo $_GET['cpf']; ?>' class='single-input'>
								
								<hr>
								<br>
								<h5>Semiologia Subjetiva – Características Clínicas da Dor</h5><br>
								<table border=0>
									<tr>
										<td><b>Sede: </b></td>
										<td width='40px'><input type='checkbox' name='3' class='single-input'  value='<?php echo $r3; ?>' <?php echo $r3; ?>></td>
										<td>Localizada</td>
										<td width='40px'><input type='checkbox' name='4' class='single-input'  value='<?php echo $r4; ?>' <?php echo $r4; ?>></td>
										<td>Difusa</td>
									</tr>
									
									
									<tr>	
										<td><b>Aparecimento: </b></td>
										<td width='40px'><input type='checkbox' name='5' class='single-input' value='<?php echo $r5; ?>' <?php echo $r5; ?>></td>
										<td>Provocada</td>
										<td width='40px'><input type='checkbox' name='6' class='single-input' value='<?php echo $r6; ?>' <?php echo $r6; ?>></td>
										<td style='margin-rigth:10px;'>Espontânea</td>
									</tr>
									
									
									<tr>
										<td><b>Duração: </b></td>
										<td width='40px'><input type='checkbox' name='7' class='single-input' value='<?php echo $r7; ?>' <?php echo $r7; ?>></td>
										<td>Curta</td>
										<td width='40px'><input type='checkbox' name='8' class='single-input' value='<?php echo $r8; ?>' <?php echo $r8; ?>></td>
										<td>Longa</td>
									</tr>
									
									
									<tr>
										<td><b>Frequência: </b></td>
										<td width='40px'><input type='checkbox' name='9' class='single-input' value='<?php echo $r9; ?>' <?php echo $r9; ?>></td>
										<td>Intermitente</td>
										<td width='40px'><input type='checkbox' name='10' class='single-input' value='<?php echo $r10; ?>' <?php echo $r10; ?>></td>
										<td>Contínua</td>
									</tr>
									
									<tr>
										<td><b>Intensidade: </b></td>
										<td width='40px'><input type='checkbox' name='11' class='single-input' value='<?php echo $r11; ?>' <?php echo $r11; ?>></td>
										<td>Leve</td>
										<td width='40px'><input type='checkbox' name='12' class='single-input' value='<?php echo $r12; ?>' <?php echo $r12; ?>></td>
										<td>Moderada</td>
										<td width='40px'><input type='checkbox' name='13' class='single-input' value='<?php echo $r13; ?>' <?php echo $r13; ?>></td>
										<td>Severa</td>
									</tr>
								</table>
								
								<hr>
								<h5>Semiologia Objetiva</h5><br>
								<table border=0>
									<tr>
										<td><b>Mucosa Gengival: </b></td>
										<td width='40px'><input type='checkbox' name='14' class='single-input' value='<?php echo $r14; ?>' <?php echo $r14; ?>></td>
										<td>Normal</td>
										<td width='40px'><input type='checkbox' name='15' class='single-input' value='<?php echo $r15; ?>' <?php echo $r15; ?>></td>
										<td>Doença Periodontal</td>
										<td width='40px'><input type='checkbox' name='16' class='single-input' value='<?php echo $r16; ?>' <?php echo $r16; ?>></td>
										<td>Presença de Fístula</td>
										<td width='40px'><input type='checkbox' name='17' class='single-input' value='<?php echo $r17; ?>' <?php echo $r17; ?>></td>
										<td>Presença de Tumefação</td>
									</tr>
								</table>	
								<table>	
									<tr>
										<td width='190px;'><b>Sensibilidade a Palpação: </b></td>
										<td width='40px'><input type='checkbox' name='18' class='single-input' value='<?php echo $r18; ?>' <?php echo $r18; ?>></td>
										<td>Presença de Dor</td>
										<td width='40px'><input type='checkbox' name='19' class='single-input' value='<?php echo $r19; ?>' <?php echo $r19; ?>></td>
										<td>Ausência de Dor</td>
									</tr>
								</table>	
								<table>		
									<tr>
										<td><b>Mobilidade: </b></td>
										<td width='40px'><input type='checkbox' name='20' class='single-input' value='<?php echo $r20; ?>' <?php echo $r20; ?>></td>
										<td>Normal</td>
										<td width='40px'><input type='checkbox' name='21' class='single-input' value='<?php echo $r21; ?>' <?php echo $r21; ?>></td>
										<td>Acentuada</td>
									</tr>
									
									<tr>
										<td><b>Inspeção: </b></td>
										<td width='40px'><input type='checkbox' name='22' class='single-input' value='<?php echo $r22; ?>' <?php echo $r22; ?>></td>
										<td>Coroa íntegra</td>
										<td width='40px'><input type='checkbox' name='23' class='single-input' value='<?php echo $r23; ?>' <?php echo $r23; ?>></td>
										<td>Presença de restaurações</td>
										<td width='40px'><input type='checkbox' name='24' class='single-input' value='<?php echo $r24; ?>' <?php echo $r24; ?>></td>
										<td>Presença de cárie</td>
										<td width='40px'><input type='checkbox' name='25' class='single-input' value='<?php echo $r25; ?>' <?php echo $r25; ?>></td>
										<td>Presença de fratura</td>
									</tr>
									
									<tr>
										<td></td>
										<td width='40px'><input type='checkbox' name='26' class='single-input' value='<?php echo $r26; ?>' <?php echo $r26; ?>></td>
										<td>Polpa exposta com vitalidade</td>
										<td width='40px'><input type='checkbox' name='27' class='single-input' value='<?php echo $r27; ?>' <?php echo $r27; ?>></td>
										<td>Polpa exposta sem vitalidade</td>
										<td width='40px'><input type='checkbox' name='28' class='single-input' value='<?php echo $r28; ?>' <?php echo $r28; ?>></td>
										<td>Alteração da cor da coroa dental</td>
										<td width='40px'><input type='checkbox' name='29' class='single-input' value='<?php echo $r29; ?>' <?php echo $r29; ?>></td>
										<td>Alteração morfológica coronária</td>
									</tr>
								</table>  
								  
								<hr>
								<h5>Exame dos Dentes</h5><br>
								<table border=0>
									<tr>
										<td><b>Testes Térmicos: </b></td>
										<td width='40px'><input type='checkbox' name='30' class='single-input' value='<?php echo $r30; ?>' <?php echo $r30; ?>></td>
										<td>Dor ao Frio</td>
										<td width='40px'><input type='checkbox' name='31' class='single-input' value='<?php echo $r31; ?>' <?php echo $r31; ?>></td>
										<td>Dor ao Calor</td>
										<td width='40px'><input type='checkbox' name='32' class='single-input' value='<?php echo $r32; ?>' <?php echo $r32; ?>></td>
										<td>Ausência de Dor</td>
									</tr>
									
									<tr>
										<td><b>Sensibilidade à Percussão: </b></td>
										<td width='40px'><input type='checkbox' name='33' class='single-input' value='<?php echo $r33; ?>' <?php echo $r33; ?>></td>
										<td>Vertical</td>
										<td width='40px'><input type='checkbox' name='34' class='single-input' value='<?php echo $r34; ?>' <?php echo $r34; ?>></td>
										<td>Horizontal</td>
									</tr>
									
									<tr>
										<td><b>Sensibilidade de Cavidade: </b></td>
										<td width='40px'><input type='checkbox' name='129' class='single-input' value='<?php echo $r129; ?>' <?php echo $r129; ?>></td>
										<td>Presença de Dor</td>
										<td width='40px'><input type='checkbox' name='130' class='single-input' value='<?php echo $r130; ?>' <?php echo $r130; ?>></td>
										<td>Ausência de Dor</td>
									</tr>
								</table>
								
								<hr>
								<h5>Exame Radiográfico</h5><br>
								<table border=0>	
									<tr>
										<td width='40px'><input type='checkbox' name='35' class='single-input' value='<?php echo $r35; ?>' <?php echo $r35; ?>></td>
										<td>Periodonto Normal</td>
										<td width='40px'><input type='checkbox' name='36' class='single-input' value='<?php echo $r36; ?>' <?php echo $r36; ?>></td>
										<td>Espessamento Periodontal</td>
										<td width='40px'><input type='checkbox' name='37' class='single-input' value='<?php echo $r37; ?>' <?php echo $r37; ?>></td>
										<td>Lesão Perirradicular</td>
										<td width='40px'><input type='checkbox' name='38' class='single-input' value='<?php echo $r38; ?>' <?php echo $r38; ?>></td>
										<td>Rizogênese Incompleta</td>
										<td width='40px'><input type='checkbox' name='39' class='single-input' value='<?php echo $r39; ?>' <?php echo $r39; ?>></td>
										<td>Trepanação</td>
									</tr>
									
									<tr>
										<td width='40px'><input type='checkbox' name='40' class='single-input' value='<?php echo $r40; ?>' <?php echo $r40; ?>></td>
										<td>Retentor Intra-Radicular</td>
										<td width='40px'><input type='checkbox' name='41' class='single-input' value='<?php echo $r41; ?>' <?php echo $r41; ?>></td>
										<td>Instrumento Fraturado</td>
										<td width='40px'><input type='checkbox' name='42' class='single-input' value='<?php echo $r42; ?>' <?php echo $r42; ?>></td>
										<td>T.E Insatisfatório</td>
										<td width='40px'><input type='checkbox' name='43' class='single-input' value='<?php echo $r43; ?>' <?php echo $r43; ?>></td>
										<td>Reabsorção: Interna</td>
										<td width='40px'><input type='checkbox' name='44' class='single-input' value='<?php echo $r44; ?>' <?php echo $r44; ?>></td>
										<td>Reabsorção: Externa</td>
									</tr>
									
									<tr>
										<td width='40px'><input type='checkbox' name='45' class='single-input' value='<?php echo $r45; ?>' <?php echo $r45; ?>></td>
										<td>Fratura Dentária: Coronária</td>
										<td width='40px'><input type='checkbox' name='46' class='single-input' value='<?php echo $r46; ?>' <?php echo $r46; ?>></td>
										<td>Fratura Dentária: Radicular</td>
									</tr>
								</table>  
								  
								<hr>
								<h5>Diagnóstico Clínico Provável:</h5><br>
								<table border=0>
									<tr>
										<td width='40px'><input type='checkbox' name='47' class='single-input' value='<?php echo $r47; ?>' <?php echo $r47; ?>></td>
										<td>Polpa Normal</td>
										<td width='40px'><input type='checkbox' name='48' class='single-input' value='<?php echo $r48; ?>' <?php echo $r48; ?>></td>
										<td>Abscesso Dentoalveolar Agudo</td>
										<td width='40px'><input type='checkbox' name='49' class='single-input' value='<?php echo $r49; ?>' <?php echo $r49; ?>></td>
										<td>Polpa Inflamada Reversivelmente</td>
										<td width='40px'><input type='checkbox' name='50' class='single-input' value='<?php echo $r50; ?>' <?php echo $r50; ?>></td>
										<td>Polpa inflamada irreversivelmente</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='51' class='single-input' value='<?php echo $r51; ?>' <?php echo $r51; ?>></td>
										<td>Abscesso Dentoaveolar Crônico</td>
										<td width='40px'><input type='checkbox' name='52' class='single-input' value='<?php echo $r52; ?>' <?php echo $r52; ?>></td>
										<td>Granuloma Apical/Cisto Periodontal Apical</td>
										<td width='40px'><input type='checkbox' name='53' class='single-input' value='<?php echo $r53; ?>' <?php echo $r53; ?>></td>
										<td>Necrose Pulpar </td>
										<td width='40px'><input type='checkbox' name='54' class='single-input' value='<?php echo $r54; ?>' <?php echo $r54; ?>></td>
										<td>Displasia Cementária Periapical</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='55' class='single-input' value='<?php echo $r55; ?>' <?php echo $r55; ?>></td>
										<td>Pericementite Apical Aguda </td>
										<td width='40px'><input type='checkbox' name='56' class='single-input' value='<?php echo $r56; ?>' <?php echo $r56; ?>></td>
										<td>Pericementite Apical Crônica</td>
										<td colspan=4><input type='text' name='57' placeholder='Outras Patologias' class='single-input' value='<?php echo $r57; ?>'></td>
									</tr>
								</table> 
								  
								<hr>
								<h5>Indicação de Tratamento:</h5><br>
								<table border=0>
									<tr>
										<td width='40px'><input type='checkbox' name='58' class='single-input' value='<?php echo $r58; ?>' <?php echo $r58; ?>></td>
										<td>Proteção Pulpar Indireta</td>
										<td width='40px'><input type='checkbox' name='59' class='single-input' value='<?php echo $r59; ?>' <?php echo $r59; ?>></td>
										<td>Proteção Pulpar Direta </td>
										<td width='40px'><input type='checkbox' name='60' class='single-input' value='<?php echo $r60; ?>' <?php echo $r60; ?>></td>
										<td>Tratamento de Canal </td>
										<td width='40px'><input type='checkbox' name='61' class='single-input' value='<?php echo $r61; ?>' <?php echo $r61; ?>></td>
										<td>Retratamento de canal</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='62' class='single-input' value='<?php echo $r62; ?>' <?php echo $r62; ?>></td>
										<td>Apicigênese</td>
										<td width='40px'><input type='checkbox' name='63' class='single-input' value='<?php echo $r63; ?>' <?php echo $r63; ?>></td>
										<td>Apicetomia, Retropreparo e Retrobturação</td>
										<td width='40px'><input type='checkbox' name='64' class='single-input' value='<?php echo $r64; ?>' <?php echo $r64; ?>></td>
										<td>Transplante Dentário</td>
										<td width='40px'><input type='checkbox' name='65' class='single-input' value='<?php echo $r65; ?>' <?php echo $r65; ?>></td>
										<td>Reimplante Dentário</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='66' class='single-input' value='<?php echo $r66; ?>' <?php echo $r66; ?>></td>
										<td>Tratamento Não-Cirúrgico de Perfuração</td>
										<td width='40px'><input type='checkbox' name='67' class='single-input' value='<?php echo $r67; ?>' <?php echo $r67; ?>></td>
										<td>Tratamento Cirúrgico de Perfuração</td>
										<td width='40px'><input type='checkbox' name='68' class='single-input' value='<?php echo $r68; ?>' <?php echo $r68; ?>></td>
										<td>Curetagem Apical</td>
										<td width='40px'><input type='checkbox' name='69' class='single-input' value='<?php echo $r69; ?>' <?php echo $r69; ?>></td>
										<td>Apicificação</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='70' class='single-input' value='<?php echo $r70; ?>' <?php echo $r70; ?>></td>
										<td>Proservação / acompanhamento</td>
									</tr>
								</table> 
								
								<hr>
								<h5>Terapêutica Sistêmica</h5>
								<br>
								<table border=0 width='100%'>
									<tr>
										<td colspan=5 style='border: 1px solid rgb(193,193,255);'><center>Odontometria</center></td>
										<td colspan=7 style='border: 1px solid rgb(193,193,255);'><center>Preparo Cirúrgico-Mecânico</center></td>
									</tr>
									<tr>
										<td><center><b>Canal</b></center></td>
										<td><center><b>CDR</b></center></td>
										<td><center><b>CP</b></center></td>
										<td><center><b>CT</b></center></td>
										<td><center><b>Ref.</b></center></td>
										<td colspan=2><center><b>Prep. Cervical</b></center></td>
										<td><center><b>IAI</b></center></td>
										<td><center><b>IM</b></center></td>
										<td><center><b>IP</b></center></td>
										<td colspan=2><center><b>Ápice / Coroa Step Back</b></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' value='<?php echo $r71; ?>' type='text' name='71'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r72; ?>' type='text' name='72'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r73; ?>' type='text' name='73'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r74; ?>' type='text' name='74'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r75; ?>' type='text' name='75'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r76; ?>' type='text' name='76'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r77; ?>' type='text' name='77'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r78; ?>' type='text' name='78'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r79; ?>' type='text' name='79'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r80; ?>' type='text' name='80'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r81; ?>' type='text' name='81'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r82; ?>' type='text' name='82'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' value='<?php echo $r83; ?>' type='text' name='83'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r84; ?>' type='text' name='84'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r85; ?>' type='text' name='85'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r86; ?>' type='text' name='86'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r87; ?>' type='text' name='87'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r88; ?>' type='text' name='88'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r89; ?>' type='text' name='89'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r90; ?>' type='text' name='90'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r91; ?>' type='text' name='91'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r92; ?>' type='text' name='92'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r93; ?>' type='text' name='93'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r94; ?>' type='text' name='94'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' value='<?php echo $r95; ?>' type='text' name='95'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r96; ?>' type='text' name='96'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r97; ?>' type='text' name='97'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r98; ?>' type='text' name='98'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r99; ?>' type='text' name='99'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r100; ?>' type='text' name='100'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r101; ?>' type='text' name='101'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r102; ?>' type='text' name='102'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r103; ?>' type='text' name='103'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r104; ?>' type='text' name='104'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r105; ?>' type='text' name='105'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r106; ?>' type='text' name='106'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' value='<?php echo $r107; ?>' type='text' name='107'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r108; ?>' type='text' name='108'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r109; ?>' type='text' name='109'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r110; ?>' type='text' name='110'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r111; ?>' type='text' name='111'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r112; ?>' type='text' name='112'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r113; ?>' type='text' name='113'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r114; ?>' type='text' name='114'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r115; ?>' type='text' name='115'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r116; ?>' type='text' name='116'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r117; ?>' type='text' name='117'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r118; ?>' type='text' name='118'></center></td>
									</tr>
								</table>
								<br>
								<table border=0>
									<tr>
										<td><b>Solução Química Irrigadora/Concentração:</b></td>
										<td width='100%'><input type='TEXT' name='119' class='single-input' value='<?php echo $r119; ?>'></td>
									</tr>
								</table>
								<table border=0>
									<tr>
										<td><b>Medicação intracanal:</b></td>
										<td width='100%'><input type='TEXT' name='120' class='single-input' value='<?php echo $r120; ?>'></td>
									</tr>
									<tr>
										<td><b>Cimento Obturador:</b></td>
										<td width='100%'><input type='TEXT' name='121' class='single-input' value='<?php echo $r121; ?>'></td>
									</tr>
								</table>
								<br>
								<table>
									<tr>
										<td><b>Técnica de Obturação:</b></td>
										<td width='40px'><input type='checkbox' name='122' class='single-input' value='<?php echo $r122; ?>' <?php echo $r122; ?>></td>
										<td>Schilder</td>
										<td width='40px'><input type='checkbox' name='123' class='single-input' value='<?php echo $r123; ?>' <?php echo $r123; ?>></td>
										<td>Híbrida Tagger </td>
										<td width='40px'><input type='checkbox' name='124' class='single-input' value='<?php echo $r124; ?>' <?php echo $r124; ?>></td>
										<td>Condensação Lateral</td>
									</tr>
									<tr>
										<td><b>Técnica de Instrumentação:</b></td>
										<td width='40px'><input type='checkbox' name='125' class='single-input' value='<?php echo $r125; ?>' <?php echo $r125; ?>></td>
										<td>Escalonamento Apice-Coroa</td>
										<td width='40px'><input type='checkbox' name='126' class='single-input' value='<?php echo $r126; ?>' <?php echo $r126; ?>></td>
										<td>Outro</td>
									</tr>
									<tr>
										<td><b>Odontometria:</b></td>
										<td width='40px'><input type='checkbox' name='127' class='single-input' value='<?php echo $r127; ?>' <?php echo $r127; ?>></td>
										<td>Técnica Radiográfica</td>
										<td width='40px'><input type='checkbox' name='128' class='single-input' value='<?php echo $r128; ?>' <?php echo $r128; ?>></td>
										<td>Técnica Radiográfica Auxiliada por Localizador Apical</td>
									</tr>
								</table>
								<hr>
								<center>
									<input type='submit' value='Atualizar' class='genric-btn primary'>
									<a href='excluirEndo.php?id=<?php echo $id; ?>' class='genric-btn secondary'>Excluir</a>
								</center>
							</form>
							
						<?php	
							
							
						}
						
						
						?>
						
						
						
						
					  </div>
					</div>

				  </div>
				  <!-- Accordion card -->
				</div>
				<!-- Accordion wrapper -->
				
			</div>
			
			
		<?php	
			$a = $a + 1;
		}
		
		
		$b = 21;
		while($b<28){
			?>
			
			
					<div id='contenido<?php echo $b; ?>' width='100%' style='background-color:white; display:none'>
				
				<!--Accordion wrapper-->
				<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

				  <!-- Accordion card -->
				  <div class="card">

					<!-- Card header -->
					<div class="card-header" role="tab" id="headingOne<?php echo $b; ?>">
					  <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne<?php echo $b; ?>" aria-expanded="true"
						aria-controls="collapseOne<?php echo $b; ?>">
						<h5 class="mb-0">
						  Dente <?php echo $b; ?>
						</h5>
					  </a>
					</div>

					<!-- Card body -->
					<div id="collapseOne<?php echo $b; ?>" class="collapse show" role="tabpanel" aria-labelledby="headingOne<?php echo $b; ?>"
					  data-parent="#accordionEx">
					  <div class="card-body">
						
						<?php
						
						$sqlAnam = "SELECT * FROM `tb_endodontia` WHERE `nr_cpfPaciente` = '".$_GET['cpf']."' AND `2` = '".$b."_1'";
						$resultadoAnam = mysql_query($sqlAnam) or die();
						$numImg = mysql_num_rows($resultadoAnam);
						if($numImg == 0){
							
						?>	
							
							<!-- ###################################################################################### CADASTRO ENDO 1 -->
							<form method='POST' action='inserirEndo.php'>
							
								<b>Dupla Responsável:</b>
								<select class='single-input' name='dupla'>
								<?php
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
								?>
								</select><br>
							
								<b>Queixa Principal: </b><input type='text' name='1' class='single-input' placeholder='Queixa Principal'>
								<input type='hidden' name='2' value='<?php echo $b; ?>_1' class='single-input'>
								<input type='hidden' name='cpf' value='<?php echo $_GET['cpf']; ?>' class='single-input'>
								
								<hr>
								<br>
								<h5>Semiologia Subjetiva – Características Clínicas da Dor</h5><br>
								<table border=0>
									<tr>
										<td><b>Sede: </b></td>
										<td width='40px'><input type='checkbox' name='3' class='single-input'></td>
										<td>Localizada</td>
										<td width='40px'><input type='checkbox' name='4' class='single-input'></td>
										<td>Difusa</td>
									</tr>
									
									
									<tr>	
										<td><b>Aparecimento: </b></td>
										<td width='40px'><input type='checkbox' name='5' class='single-input'></td>
										<td>Provocada</td>
										<td width='40px'><input type='checkbox' name='6' class='single-input'></td>
										<td style='margin-rigth:10px;'>Espontânea</td>
									</tr>
									
									
									<tr>
										<td><b>Duração: </b></td>
										<td width='40px'><input type='checkbox' name='7' class='single-input'></td>
										<td>Curta</td>
										<td width='40px'><input type='checkbox' name='8' class='single-input'></td>
										<td>Longa</td>
									</tr>
									
									
									<tr>
										<td><b>Frequência: </b></td>
										<td width='40px'><input type='checkbox' name='9' class='single-input'></td>
										<td>Intermitente</td>
										<td width='40px'><input type='checkbox' name='10' class='single-input'></td>
										<td>Contínua</td>
									</tr>
									
									<tr>
										<td><b>Intensidade: </b></td>
										<td width='40px'><input type='checkbox' name='11' class='single-input'></td>
										<td>Leve</td>
										<td width='40px'><input type='checkbox' name='12' class='single-input'></td>
										<td>Moderada</td>
										<td width='40px'><input type='checkbox' name='13' class='single-input'></td>
										<td>Severa</td>
									</tr>
								</table>
								
								<hr>
								<h5>Semiologia Objetiva</h5><br>
								<table border=0>
									<tr>
										<td><b>Mucosa Gengival: </b></td>
										<td width='40px'><input type='checkbox' name='14' class='single-input'></td>
										<td>Normal</td>
										<td width='40px'><input type='checkbox' name='15' class='single-input'></td>
										<td>Doença Periodontal</td>
										<td width='40px'><input type='checkbox' name='16' class='single-input'></td>
										<td>Presença de Fístula</td>
										<td width='40px'><input type='checkbox' name='17' class='single-input'></td>
										<td>Presença de Tumefação</td>
									</tr>
								</table>	
								<table>	
									<tr>
										<td width='190px;'><b>Sensibilidade a Palpação: </b></td>
										<td width='40px'><input type='checkbox' name='18' class='single-input'></td>
										<td>Presença de Dor</td>
										<td width='40px'><input type='checkbox' name='19' class='single-input'></td>
										<td>Ausência de Dor</td>
									</tr>
								</table>	
								<table>		
									<tr>
										<td><b>Mobilidade: </b></td>
										<td width='40px'><input type='checkbox' name='20' class='single-input'></td>
										<td>Normal</td>
										<td width='40px'><input type='checkbox' name='21' class='single-input'></td>
										<td>Acentuada</td>
									</tr>
									
									<tr>
										<td><b>Inspeção: </b></td>
										<td width='40px'><input type='checkbox' name='22' class='single-input'></td>
										<td>Coroa íntegra</td>
										<td width='40px'><input type='checkbox' name='23' class='single-input'></td>
										<td>Presença de restaurações</td>
										<td width='40px'><input type='checkbox' name='24' class='single-input'></td>
										<td>Presença de cárie</td>
										<td width='40px'><input type='checkbox' name='25' class='single-input'></td>
										<td>Presença de fratura</td>
									</tr>
									
									<tr>
										<td></td>
										<td width='40px'><input type='checkbox' name='26' class='single-input'></td>
										<td>Polpa exposta com vitalidade</td>
										<td width='40px'><input type='checkbox' name='27' class='single-input'></td>
										<td>Polpa exposta sem vitalidade</td>
										<td width='40px'><input type='checkbox' name='28' class='single-input'></td>
										<td>Alteração da cor da coroa dental</td>
										<td width='40px'><input type='checkbox' name='29' class='single-input'></td>
										<td>Alteração morfológica coronária</td>
									</tr>
								</table>  
								  
								<hr>
								<h5>Exame dos Dentes</h5><br>
								<table border=0>
									<tr>
										<td><b>Testes Térmicos: </b></td>
										<td width='40px'><input type='checkbox' name='30' class='single-input'></td>
										<td>Dor ao Frio</td>
										<td width='40px'><input type='checkbox' name='31' class='single-input'></td>
										<td>Dor ao Calor</td>
										<td width='40px'><input type='checkbox' name='32' class='single-input'></td>
										<td>Ausência de Dor</td>
									</tr>
									
									<tr>
										<td><b>Sensibilidade à Percussão: </b></td>
										<td width='40px'><input type='checkbox' name='33' class='single-input'></td>
										<td>Vertical</td>
										<td width='40px'><input type='checkbox' name='34' class='single-input'></td>
										<td>Horizontal</td>
									</tr>
									
									<tr>
										<td><b>Sensibilidade de Cavidade: </b></td>
										<td width='40px'><input type='checkbox' name='129' class='single-input'></td>
										<td>Presença de Dor</td>
										<td width='40px'><input type='checkbox' name='130' class='single-input'></td>
										<td>Ausência de Dor</td>
									</tr>
								</table>
								
								<hr>
								<h5>Exame Radiográfico</h5><br>
								<table border=0>								
									<tr>
										<td width='40px'><input type='checkbox' name='35' class='single-input'></td>
										<td>Periodonto Normal</td>
										<td width='40px'><input type='checkbox' name='36' class='single-input'></td>
										<td>Espessamento Periodontal</td>
										<td width='40px'><input type='checkbox' name='37' class='single-input'></td>
										<td>Lesão Perirradicular</td>
										<td width='40px'><input type='checkbox' name='38' class='single-input'></td>
										<td>Rizogênese Incompleta</td>
										<td width='40px'><input type='checkbox' name='39' class='single-input'></td>
										<td>Trepanação</td>
									</tr>
									
									<tr>
										<td width='40px'><input type='checkbox' name='40' class='single-input'></td>
										<td>Retentor Intra-Radicular</td>
										<td width='40px'><input type='checkbox' name='41' class='single-input'></td>
										<td>Instrumento Fraturado</td>
										<td width='40px'><input type='checkbox' name='42' class='single-input'></td>
										<td>T.E Insatisfatório</td>
										<td width='40px'><input type='checkbox' name='43' class='single-input'></td>
										<td>Reabsorção: Interna</td>
										<td width='40px'><input type='checkbox' name='44' class='single-input'></td>
										<td>Reabsorção: Externa</td>
									</tr>
									
									<tr>
										<td width='40px'><input type='checkbox' name='45' class='single-input'></td>
										<td>Fratura Dentária: Coronária</td>
										<td width='40px'><input type='checkbox' name='46' class='single-input'></td>
										<td>Fratura Dentária: Radicular</td>
									</tr>
								</table>  
								  
								<hr>
								<h5>Diagnóstico Clínico Provável</h5><br>
								<table border=0>
									<tr>
										<td width='40px'><input type='checkbox' name='47' class='single-input'></td>
										<td>Polpa Normal</td>
										<td width='40px'><input type='checkbox' name='48' class='single-input'></td>
										<td>Abscesso Dentoalveolar Agudo</td>
										<td width='40px'><input type='checkbox' name='49' class='single-input'></td>
										<td>Polpa Inflamada Reversivelmente</td>
										<td width='40px'><input type='checkbox' name='50' class='single-input'></td>
										<td>Polpa inflamada irreversivelmente</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='51' class='single-input'></td>
										<td>Abscesso Dentoaveolar Crônico</td>
										<td width='40px'><input type='checkbox' name='52' class='single-input'></td>
										<td>Granuloma Apical/Cisto Periodontal Apical</td>
										<td width='40px'><input type='checkbox' name='53' class='single-input'></td>
										<td>Necrose Pulpar </td>
										<td width='40px'><input type='checkbox' name='54' class='single-input'></td>
										<td>Displasia Cementária Periapical</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='55' class='single-input'></td>
										<td>Pericementite Apical Aguda </td>
										<td width='40px'><input type='checkbox' name='56' class='single-input'></td>
										<td>Pericementite Apical Crônica</td>
										<td colspan=4><input type='text' name='57' placeholder='Outras Patologias' class='single-input'></td>
									</tr>
								</table> 
								  
								<hr>
								<h5>Indicação de Tratamento</h5><br>
								<table border=0>
									<tr>
										<td width='40px'><input type='checkbox' name='58' class='single-input'></td>
										<td>Proteção Pulpar Indireta</td>
										<td width='40px'><input type='checkbox' name='59' class='single-input'></td>
										<td>Proteção Pulpar Direta </td>
										<td width='40px'><input type='checkbox' name='60' class='single-input'></td>
										<td>Tratamento de Canal </td>
										<td width='40px'><input type='checkbox' name='61' class='single-input'></td>
										<td>Retratamento de canal</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='62' class='single-input'></td>
										<td>Apicigênese</td>
										<td width='40px'><input type='checkbox' name='63' class='single-input'></td>
										<td>Apicetomia, Retropreparo e Retrobturação</td>
										<td width='40px'><input type='checkbox' name='64' class='single-input'></td>
										<td>Transplante Dentário</td>
										<td width='40px'><input type='checkbox' name='65' class='single-input'></td>
										<td>Reimplante Dentário</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='66' class='single-input'></td>
										<td>Tratamento Não-Cirúrgico de Perfuração</td>
										<td width='40px'><input type='checkbox' name='67' class='single-input'></td>
										<td>Tratamento Cirúrgico de Perfuração</td>
										<td width='40px'><input type='checkbox' name='68' class='single-input'></td>
										<td>Curetagem Apical</td>
										<td width='40px'><input type='checkbox' name='69' class='single-input'></td>
										<td>Apicificação</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='70' class='single-input'></td>
										<td>Proservação / acompanhamento</td>
									</tr>
								</table> 
								
								<hr>
								<h5>Terapêutica Sistêmica</h5>
								<br>
								<table border=0 width='100%'>
									<tr>
										<td colspan=5 style='border: 1px solid rgb(193,193,255);'><center>Odontometria</center></td>
										<td colspan=7 style='border: 1px solid rgb(193,193,255);'><center>Preparo Cirúrgico-Mecânico</center></td>
									</tr>
									<tr>
										<td><center><b>Canal</b></center></td>
										<td><center><b>CDR</b></center></td>
										<td><center><b>CP</b></center></td>
										<td><center><b>CT</b></center></td>
										<td><center><b>Ref.</b></center></td>
										<td colspan=2><center><b>Prep. Cervical</b></center></td>
										<td><center><b>IAI</b></center></td>
										<td><center><b>IM</b></center></td>
										<td><center><b>IP</b></center></td>
										<td colspan=2><center><b>Ápice / Coroa Step Back</b></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' type='text' name='71'></center></td>
										<td><center><input  class='single-input' type='text' name='72'></center></td>
										<td><center><input  class='single-input' type='text' name='73'></center></td>
										<td><center><input  class='single-input' type='text' name='74'></center></td>
										<td><center><input  class='single-input' type='text' name='75'></center></td>
										<td><center><input  class='single-input' type='text' name='76'></center></td>
										<td><center><input  class='single-input' type='text' name='77'></center></td>
										<td><center><input  class='single-input' type='text' name='78'></center></td>
										<td><center><input  class='single-input' type='text' name='79'></center></td>
										<td><center><input  class='single-input' type='text' name='80'></center></td>
										<td><center><input  class='single-input' type='text' name='81'></center></td>
										<td><center><input  class='single-input' type='text' name='82'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' type='text' name='83'></center></td>
										<td><center><input  class='single-input' type='text' name='84'></center></td>
										<td><center><input  class='single-input' type='text' name='85'></center></td>
										<td><center><input  class='single-input' type='text' name='86'></center></td>
										<td><center><input  class='single-input' type='text' name='87'></center></td>
										<td><center><input  class='single-input' type='text' name='88'></center></td>
										<td><center><input  class='single-input' type='text' name='89'></center></td>
										<td><center><input  class='single-input' type='text' name='90'></center></td>
										<td><center><input  class='single-input' type='text' name='91'></center></td>
										<td><center><input  class='single-input' type='text' name='92'></center></td>
										<td><center><input  class='single-input' type='text' name='93'></center></td>
										<td><center><input  class='single-input' type='text' name='94'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' type='text' name='95'></center></td>
										<td><center><input  class='single-input' type='text' name='96'></center></td>
										<td><center><input  class='single-input' type='text' name='97'></center></td>
										<td><center><input  class='single-input' type='text' name='98'></center></td>
										<td><center><input  class='single-input' type='text' name='99'></center></td>
										<td><center><input  class='single-input' type='text' name='100'></center></td>
										<td><center><input  class='single-input' type='text' name='101'></center></td>
										<td><center><input  class='single-input' type='text' name='102'></center></td>
										<td><center><input  class='single-input' type='text' name='103'></center></td>
										<td><center><input  class='single-input' type='text' name='104'></center></td>
										<td><center><input  class='single-input' type='text' name='105'></center></td>
										<td><center><input  class='single-input' type='text' name='106'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' type='text' name='107'></center></td>
										<td><center><input  class='single-input' type='text' name='108'></center></td>
										<td><center><input  class='single-input' type='text' name='109'></center></td>
										<td><center><input  class='single-input' type='text' name='110'></center></td>
										<td><center><input  class='single-input' type='text' name='111'></center></td>
										<td><center><input  class='single-input' type='text' name='112'></center></td>
										<td><center><input  class='single-input' type='text' name='113'></center></td>
										<td><center><input  class='single-input' type='text' name='114'></center></td>
										<td><center><input  class='single-input' type='text' name='115'></center></td>
										<td><center><input  class='single-input' type='text' name='116'></center></td>
										<td><center><input  class='single-input' type='text' name='117'></center></td>
										<td><center><input  class='single-input' type='text' name='118'></center></td>
									</tr>
								</table>
								<br>
								<table border=0>
									<tr>
										<td><b>Solução Química Irrigadora/Concentração:</b></td>
										<td width='100%'><input type='TEXT' name='119' class='single-input'></td>
									</tr>
								</table>
								<table border=0>
									<tr>
										<td><b>Medicação intracanal:</b></td>
										<td width='100%'><input type='TEXT' name='120' class='single-input'></td>
									</tr>
									<tr>
										<td><b>Cimento Obturador:</b></td>
										<td width='100%'><input type='TEXT' name='121' class='single-input'></td>
									</tr>
								</table>
								<br>
								<table>
									<tr>
										<td><b>Técnica de Obturação:</b></td>
										<td width='40px'><input type='checkbox' name='122' class='single-input'></td>
										<td>Schilder</td>
										<td width='40px'><input type='checkbox' name='123' class='single-input'></td>
										<td>Híbrida Tagger </td>
										<td width='40px'><input type='checkbox' name='124' class='single-input'></td>
										<td>Condensação Lateral</td>
									</tr>
									<tr>
										<td><b>Técnica de Instrumentação:</b></td>
										<td width='40px'><input type='checkbox' name='125' class='single-input'></td>
										<td>Escalonamento Apice-Coroa</td>
										<td width='40px'><input type='checkbox' name='126' class='single-input'></td>
										<td>Outro</td>
									</tr>
									<tr>
										<td><b>Odontometria:</b></td>
										<td width='40px'><input type='checkbox' name='127' class='single-input'></td>
										<td>Técnica Radiográfica</td>
										<td width='40px'><input type='checkbox' name='128' class='single-input'></td>
										<td>Técnica Radiográfica Auxiliada por Localizador Apical</td>
									</tr>
								</table>

								<hr>
								<h5>Repetir Endodontia:</h5><br>
								<table width='100%'>
									 <tr>
										<td>
										   <center><input type='checkbox' name='repetir17'> 17</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir16'> 16</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir15'> 15</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir14'> 14</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir13'> 13</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir12'> 12</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir11'> 11</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir21'> 21</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir22'> 22</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir23'> 23</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir24'> 24</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir25'> 25</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir26'> 26</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir27'> 27</center>
										</td>
									 </tr>
									 <tr>
										<td>
										   <center><input type='checkbox' name='repetir47'> 47</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir46'> 46</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir45'> 45</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir44'> 44</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir43'> 43</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir42'> 42</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir41'> 41</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir31'> 31</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir32'> 32</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir33'> 33</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir34'> 34</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir35'> 35</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir36'> 36</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir37'> 37</center>
										</td>
									 </tr>
									</table>
								<hr>
								<center><input type='submit' value='Salvar' class='genric-btn primary'></center>
								<input type='hidden' name='retratamento' value='1'>
							</form>

							
						<?php	
							
						}else{
							while($linhaAnam = mysql_fetch_array($resultadoAnam)){
								$id = $linhaAnam['nr_idEndodontia'];
								$dupla = $linhaAnam['nr_idDupla'];
								$data = $linhaAnam['dt_preenchimento'];
								$r1 = $linhaAnam['1'];
								$r2 = $linhaAnam['2']; 
								$r3 = $linhaAnam['3']; 
								$r4 = $linhaAnam['4']; 
								$r5 = $linhaAnam['5']; 
								$r6 = $linhaAnam['6']; 
								$r7 = $linhaAnam['7']; 
								$r8 = $linhaAnam['8']; 
								$r9 = $linhaAnam['9']; 
								$r10 = $linhaAnam['10']; 
								$r11 = $linhaAnam['11']; 
								$r12 = $linhaAnam['12']; 
								$r13 = $linhaAnam['13']; 
								$r14 = $linhaAnam['14']; 
								$r15 = $linhaAnam['15']; 
								$r16 = $linhaAnam['16']; 
								$r17 = $linhaAnam['17']; 
								$r18 = $linhaAnam['18']; 
								$r19 = $linhaAnam['19']; 
								$r20 = $linhaAnam['20']; 
								$r21 = $linhaAnam['21']; 
								$r22 = $linhaAnam['22']; 
								$r23 = $linhaAnam['23']; 
								$r24 = $linhaAnam['24']; 
								$r25 = $linhaAnam['25']; 
								$r26 = $linhaAnam['26']; 
								$r27 = $linhaAnam['27']; 
								$r28 = $linhaAnam['28']; 
								$r29 = $linhaAnam['29']; 
								$r30 = $linhaAnam['30']; 
								$r31 = $linhaAnam['31']; 
								$r32 = $linhaAnam['32']; 
								$r33 = $linhaAnam['33']; 
								$r34 = $linhaAnam['34']; 
								$r35 = $linhaAnam['35']; 
								$r36 = $linhaAnam['36']; 
								$r37 = $linhaAnam['37']; 
								$r38 = $linhaAnam['38']; 
								$r39 = $linhaAnam['39']; 
								$r40 = $linhaAnam['40']; 
								$r41 = $linhaAnam['41']; 
								$r42 = $linhaAnam['42']; 
								$r43 = $linhaAnam['43']; 
								$r44 = $linhaAnam['44']; 
								$r45 = $linhaAnam['45']; 
								$r46 = $linhaAnam['46']; 
								$r47 = $linhaAnam['47']; 
								$r48 = $linhaAnam['48']; 
								$r49 = $linhaAnam['49']; 
								$r50 = $linhaAnam['50']; 
								$r51 = $linhaAnam['51']; 
								$r52 = $linhaAnam['52']; 
								$r53 = $linhaAnam['53']; 
								$r54 = $linhaAnam['54']; 
								$r55 = $linhaAnam['55']; 
								$r56 = $linhaAnam['56']; 
								$r57 = $linhaAnam['57']; 
								$r58 = $linhaAnam['58']; 
								$r59 = $linhaAnam['59']; 
								$r60 = $linhaAnam['60']; 
								$r61 = $linhaAnam['61']; 
								$r62 = $linhaAnam['62']; 
								$r63 = $linhaAnam['63']; 
								$r64 = $linhaAnam['64']; 
								$r65 = $linhaAnam['65']; 
								$r66 = $linhaAnam['66']; 
								$r67 = $linhaAnam['67']; 
								$r68 = $linhaAnam['68']; 
								$r69 = $linhaAnam['69']; 
								$r70 = $linhaAnam['70']; 
								$r71 = $linhaAnam['71']; 
								$r72 = $linhaAnam['72']; 
								$r73 = $linhaAnam['73']; 
								$r74 = $linhaAnam['74']; 
								$r75 = $linhaAnam['75']; 
								$r76 = $linhaAnam['76']; 
								$r77 = $linhaAnam['77']; 
								$r78 = $linhaAnam['78']; 
								$r79 = $linhaAnam['79']; 
								$r80 = $linhaAnam['80']; 
								$r81 = $linhaAnam['81']; 
								$r82 = $linhaAnam['82']; 
								$r83 = $linhaAnam['83']; 
								$r84 = $linhaAnam['84']; 
								$r85 = $linhaAnam['85']; 
								$r86 = $linhaAnam['86']; 
								$r87 = $linhaAnam['87']; 
								$r88 = $linhaAnam['88']; 
								$r89 = $linhaAnam['89']; 
								$r90 = $linhaAnam['90']; 
								$r91 = $linhaAnam['91']; 
								$r92 = $linhaAnam['92']; 
								$r93 = $linhaAnam['93']; 
								$r94 = $linhaAnam['94']; 
								$r95 = $linhaAnam['95']; 
								$r96 = $linhaAnam['96']; 
								$r97 = $linhaAnam['97']; 
								$r98 = $linhaAnam['98']; 
								$r99 = $linhaAnam['99']; 
								$r100 = $linhaAnam['100']; 
								$r101 = $linhaAnam['101']; 
								$r102 = $linhaAnam['102']; 
								$r103 = $linhaAnam['103']; 
								$r104 = $linhaAnam['104']; 
								$r105 = $linhaAnam['105']; 
								$r106 = $linhaAnam['106']; 
								$r107 = $linhaAnam['107']; 
								$r108 = $linhaAnam['108']; 
								$r109 = $linhaAnam['109']; 
								$r110 = $linhaAnam['110']; 
								$r111 = $linhaAnam['111']; 
								$r112 = $linhaAnam['112']; 
								$r113 = $linhaAnam['113']; 
								$r114 = $linhaAnam['114']; 
								$r115 = $linhaAnam['115']; 
								$r116 = $linhaAnam['116']; 
								$r117 = $linhaAnam['117']; 
								$r118 = $linhaAnam['118']; 
								$r119 = $linhaAnam['119']; 
								$r120 = $linhaAnam['120']; 
								$r121 = $linhaAnam['121']; 
								$r122 = $linhaAnam['122']; 
								$r123 = $linhaAnam['123']; 
								$r124 = $linhaAnam['124']; 
								$r125 = $linhaAnam['125']; 
								$r126 = $linhaAnam['126']; 
								$r127 = $linhaAnam['127']; 
								$r128 = $linhaAnam['128']; 
								$r129 = $linhaAnam['129']; 
								$r130 = $linhaAnam['130']; 
							}
							
						?>	
							<form method='POST' action='atualizarEndo.php'>
								<input type='hidden' name='id' value='<?php echo $id; ?>'
								<!-- ############################################################## impressão endo 1 -->
								<b>Dupla Responsável: </b>
								<select class='single-input' name='dupla'>
								<?php
									
									echo $sql = "SELECT * FROM tb_duplas WHERE nr_idDupla = ".$dupla." LIMIT 1";
									$resultado = mysql_query($sql) or die();
									while($linha = mysql_fetch_array($resultado)){
										
										$sqlNome1 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linha['nr_cpf1']."'";
										$resultadoNome1 = mysql_query($sqlNome1) or die();
										while($linhaNome1 = mysql_fetch_array($resultadoNome1)){
											$Nome1 = $linhaNome1['nm_nomeAluno']; 
											$periodo = $linhaNome1['nr_periodo']; 
										}
										
										$sqlNome2 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linha['nr_cpf2']."'";
										$resultadoNome2 = mysql_query($sqlNome2) or die();
										while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
											$Nome2 = $linhaNome2['nm_nomeAluno']; 
										}
										
										
										echo "<option value='".$linha['nr_idDupla']."'>".$Nome1." e ".$Nome2." (".$periodo."º Periodo)</option>";
									}
									
									
									$sqlNome = "SELECT * FROM tb_duplas WHERE nm_situacao = 'Ativo'";
									$resultadoNome = mysql_query($sqlNome) or die();
									while($linhaNome = mysql_fetch_array($resultadoNome)){
										if($linhaNome['nr_idDupla'] != $dupla){
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
									}
								?>
								</select><br>
								
								
								
								<b>Data do Preenchimento: </b><input type='text' name='data' class='single-input' value='<?php echo $data; ?>'><br>
								<b>Queixa Principal: </b><input type='text' name='1' class='single-input' value='<?php echo $r1; ?>'>
								<input type='hidden' name='2' value='<?php echo $b; ?>_1' class='single-input'>
								<input type='hidden' name='cpf' value='<?php echo $_GET['cpf']; ?>' class='single-input'>
								
								<hr>
								<br>
								<h5>Semiologia Subjetiva – Características Clínicas da Dor</h5><br>
								<table border=0>
									<tr>
										<td><b>Sede: </b></td>
										<td width='40px'><input type='checkbox' name='3' class='single-input'  value='<?php echo $r3; ?>' <?php echo $r3; ?>></td>
										<td>Localizada</td>
										<td width='40px'><input type='checkbox' name='4' class='single-input'  value='<?php echo $r4; ?>' <?php echo $r4; ?>></td>
										<td>Difusa</td>
									</tr>
									
									
									<tr>	
										<td><b>Aparecimento: </b></td>
										<td width='40px'><input type='checkbox' name='5' class='single-input' value='<?php echo $r5; ?>' <?php echo $r5; ?>></td>
										<td>Provocada</td>
										<td width='40px'><input type='checkbox' name='6' class='single-input' value='<?php echo $r6; ?>' <?php echo $r6; ?>></td>
										<td style='margin-rigth:10px;'>Espontânea</td>
									</tr>
									
									
									<tr>
										<td><b>Duração: </b></td>
										<td width='40px'><input type='checkbox' name='7' class='single-input' value='<?php echo $r7; ?>' <?php echo $r7; ?>></td>
										<td>Curta</td>
										<td width='40px'><input type='checkbox' name='8' class='single-input' value='<?php echo $r8; ?>' <?php echo $r8; ?>></td>
										<td>Longa</td>
									</tr>
									
									
									<tr>
										<td><b>Frequência: </b></td>
										<td width='40px'><input type='checkbox' name='9' class='single-input' value='<?php echo $r9; ?>' <?php echo $r9; ?>></td>
										<td>Intermitente</td>
										<td width='40px'><input type='checkbox' name='10' class='single-input' value='<?php echo $r10; ?>' <?php echo $r10; ?>></td>
										<td>Contínua</td>
									</tr>
									
									<tr>
										<td><b>Intensidade: </b></td>
										<td width='40px'><input type='checkbox' name='11' class='single-input' value='<?php echo $r11; ?>' <?php echo $r11; ?>></td>
										<td>Leve</td>
										<td width='40px'><input type='checkbox' name='12' class='single-input' value='<?php echo $r12; ?>' <?php echo $r12; ?>></td>
										<td>Moderada</td>
										<td width='40px'><input type='checkbox' name='13' class='single-input' value='<?php echo $r13; ?>' <?php echo $r13; ?>></td>
										<td>Severa</td>
									</tr>
								</table>
								
								<hr>
								<h5>Semiologia Objetiva</h5><br>
								<table border=0>
									<tr>
										<td><b>Mucosa Gengival: </b></td>
										<td width='40px'><input type='checkbox' name='14' class='single-input' value='<?php echo $r14; ?>' <?php echo $r14; ?>></td>
										<td>Normal</td>
										<td width='40px'><input type='checkbox' name='15' class='single-input' value='<?php echo $r15; ?>' <?php echo $r15; ?>></td>
										<td>Doença Periodontal</td>
										<td width='40px'><input type='checkbox' name='16' class='single-input' value='<?php echo $r16; ?>' <?php echo $r16; ?>></td>
										<td>Presença de Fístula</td>
										<td width='40px'><input type='checkbox' name='17' class='single-input' value='<?php echo $r17; ?>' <?php echo $r17; ?>></td>
										<td>Presença de Tumefação</td>
									</tr>
								</table>	
								<table>	
									<tr>
										<td width='190px;'><b>Sensibilidade a Palpação: </b></td>
										<td width='40px'><input type='checkbox' name='18' class='single-input' value='<?php echo $r18; ?>' <?php echo $r18; ?>></td>
										<td>Presença de Dor</td>
										<td width='40px'><input type='checkbox' name='19' class='single-input' value='<?php echo $r19; ?>' <?php echo $r19; ?>></td>
										<td>Ausência de Dor</td>
									</tr>
								</table>	
								<table>		
									<tr>
										<td><b>Mobilidade: </b></td>
										<td width='40px'><input type='checkbox' name='20' class='single-input' value='<?php echo $r20; ?>' <?php echo $r20; ?>></td>
										<td>Normal</td>
										<td width='40px'><input type='checkbox' name='21' class='single-input' value='<?php echo $r21; ?>' <?php echo $r21; ?>></td>
										<td>Acentuada</td>
									</tr>
									
									<tr>
										<td><b>Inspeção: </b></td>
										<td width='40px'><input type='checkbox' name='22' class='single-input' value='<?php echo $r22; ?>' <?php echo $r22; ?>></td>
										<td>Coroa íntegra</td>
										<td width='40px'><input type='checkbox' name='23' class='single-input' value='<?php echo $r23; ?>' <?php echo $r23; ?>></td>
										<td>Presença de restaurações</td>
										<td width='40px'><input type='checkbox' name='24' class='single-input' value='<?php echo $r24; ?>' <?php echo $r24; ?>></td>
										<td>Presença de cárie</td>
										<td width='40px'><input type='checkbox' name='25' class='single-input' value='<?php echo $r25; ?>' <?php echo $r25; ?>></td>
										<td>Presença de fratura</td>
									</tr>
									
									<tr>
										<td></td>
										<td width='40px'><input type='checkbox' name='26' class='single-input' value='<?php echo $r26; ?>' <?php echo $r26; ?>></td>
										<td>Polpa exposta com vitalidade</td>
										<td width='40px'><input type='checkbox' name='27' class='single-input' value='<?php echo $r27; ?>' <?php echo $r27; ?>></td>
										<td>Polpa exposta sem vitalidade</td>
										<td width='40px'><input type='checkbox' name='28' class='single-input' value='<?php echo $r28; ?>' <?php echo $r28; ?>></td>
										<td>Alteração da cor da coroa dental</td>
										<td width='40px'><input type='checkbox' name='29' class='single-input' value='<?php echo $r29; ?>' <?php echo $r29; ?>></td>
										<td>Alteração morfológica coronária</td>
									</tr>
								</table>  
								  
								<hr>
								<h5>Exame dos Dentes</h5><br>
								<table border=0>
									<tr>
										<td><b>Testes Térmicos: </b></td>
										<td width='40px'><input type='checkbox' name='30' class='single-input' value='<?php echo $r30; ?>' <?php echo $r30; ?>></td>
										<td>Dor ao Frio</td>
										<td width='40px'><input type='checkbox' name='31' class='single-input' value='<?php echo $r31; ?>' <?php echo $r31; ?>></td>
										<td>Dor ao Calor</td>
										<td width='40px'><input type='checkbox' name='32' class='single-input' value='<?php echo $r32; ?>' <?php echo $r32; ?>></td>
										<td>Ausência de Dor</td>
									</tr>
									
									<tr>
										<td><b>Sensibilidade à Percussão: </b></td>
										<td width='40px'><input type='checkbox' name='33' class='single-input' value='<?php echo $r33; ?>' <?php echo $r33; ?>></td>
										<td>Vertical</td>
										<td width='40px'><input type='checkbox' name='34' class='single-input' value='<?php echo $r34; ?>' <?php echo $r34; ?>></td>
										<td>Horizontal</td>
									</tr>
									
									<tr>
										<td><b>Sensibilidade de Cavidade: </b></td>
										<td width='40px'><input type='checkbox' name='129' class='single-input' value='<?php echo $r129; ?>' <?php echo $r129; ?>></td>
										<td>Presença de Dor</td>
										<td width='40px'><input type='checkbox' name='130' class='single-input' value='<?php echo $r130; ?>' <?php echo $r130; ?>></td>
										<td>Ausência de Dor</td>
									</tr>
								</table>
									
								<hr>
								<h5>Exame Radiográfico</h5><br>
								<table border=0>	
									<tr>
										<td width='40px'><input type='checkbox' name='35' class='single-input' value='<?php echo $r35; ?>' <?php echo $r35; ?>></td>
										<td>Periodonto Normal</td>
										<td width='40px'><input type='checkbox' name='36' class='single-input' value='<?php echo $r36; ?>' <?php echo $r36; ?>></td>
										<td>Espessamento Periodontal</td>
										<td width='40px'><input type='checkbox' name='37' class='single-input' value='<?php echo $r37; ?>' <?php echo $r37; ?>></td>
										<td>Lesão Perirradicular</td>
										<td width='40px'><input type='checkbox' name='38' class='single-input' value='<?php echo $r38; ?>' <?php echo $r38; ?>></td>
										<td>Rizogênese Incompleta</td>
										<td width='40px'><input type='checkbox' name='39' class='single-input' value='<?php echo $r39; ?>' <?php echo $r39; ?>></td>
										<td>Trepanação</td>
									</tr>
									
									<tr>
										<td width='40px'><input type='checkbox' name='40' class='single-input' value='<?php echo $r40; ?>' <?php echo $r40; ?>></td>
										<td>Retentor Intra-Radicular</td>
										<td width='40px'><input type='checkbox' name='41' class='single-input' value='<?php echo $r41; ?>' <?php echo $r41; ?>></td>
										<td>Instrumento Fraturado</td>
										<td width='40px'><input type='checkbox' name='42' class='single-input' value='<?php echo $r42; ?>' <?php echo $r42; ?>></td>
										<td>T.E Insatisfatório</td>
										<td width='40px'><input type='checkbox' name='43' class='single-input' value='<?php echo $r43; ?>' <?php echo $r43; ?>></td>
										<td>Reabsorção: Interna</td>
										<td width='40px'><input type='checkbox' name='44' class='single-input' value='<?php echo $r44; ?>' <?php echo $r44; ?>></td>
										<td>Reabsorção: Externa</td>
									</tr>
									
									<tr>
										<td width='40px'><input type='checkbox' name='45' class='single-input' value='<?php echo $r45; ?>' <?php echo $r45; ?>></td>
										<td>Fratura Dentária: Coronária</td>
										<td width='40px'><input type='checkbox' name='46' class='single-input' value='<?php echo $r46; ?>' <?php echo $r46; ?>></td>
										<td>Fratura Dentária: Radicular</td>
									</tr>
								</table>  
								  
								<hr>
								<h5>Diagnóstico Clínico Provável</h5><br>
								<table border=0>
									<tr>
										<td width='40px'><input type='checkbox' name='47' class='single-input' value='<?php echo $r47; ?>' <?php echo $r47; ?>></td>
										<td>Polpa Normal</td>
										<td width='40px'><input type='checkbox' name='48' class='single-input' value='<?php echo $r48; ?>' <?php echo $r48; ?>></td>
										<td>Abscesso Dentoalveolar Agudo</td>
										<td width='40px'><input type='checkbox' name='49' class='single-input' value='<?php echo $r49; ?>' <?php echo $r49; ?>></td>
										<td>Polpa Inflamada Reversivelmente</td>
										<td width='40px'><input type='checkbox' name='50' class='single-input' value='<?php echo $r50; ?>' <?php echo $r50; ?>></td>
										<td>Polpa inflamada irreversivelmente</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='51' class='single-input' value='<?php echo $r51; ?>' <?php echo $r51; ?>></td>
										<td>Abscesso Dentoaveolar Crônico</td>
										<td width='40px'><input type='checkbox' name='52' class='single-input' value='<?php echo $r52; ?>' <?php echo $r52; ?>></td>
										<td>Granuloma Apical/Cisto Periodontal Apical</td>
										<td width='40px'><input type='checkbox' name='53' class='single-input' value='<?php echo $r53; ?>' <?php echo $r53; ?>></td>
										<td>Necrose Pulpar </td>
										<td width='40px'><input type='checkbox' name='54' class='single-input' value='<?php echo $r54; ?>' <?php echo $r54; ?>></td>
										<td>Displasia Cementária Periapical</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='55' class='single-input' value='<?php echo $r55; ?>' <?php echo $r55; ?>></td>
										<td>Pericementite Apical Aguda </td>
										<td width='40px'><input type='checkbox' name='56' class='single-input' value='<?php echo $r56; ?>' <?php echo $r56; ?>></td>
										<td>Pericementite Apical Crônica</td>
										<td colspan=4><input type='text' name='57' placeholder='Outras Patologias' class='single-input' value='<?php echo $r57; ?>'></td>
									</tr>
								</table> 
								  
								<hr>
								<h5>Indicação de Tratamento</h5><br>
								<table border=0>
									<tr>
										<td width='40px'><input type='checkbox' name='58' class='single-input' value='<?php echo $r58; ?>' <?php echo $r58; ?>></td>
										<td>Proteção Pulpar Indireta</td>
										<td width='40px'><input type='checkbox' name='59' class='single-input' value='<?php echo $r59; ?>' <?php echo $r59; ?>></td>
										<td>Proteção Pulpar Direta </td>
										<td width='40px'><input type='checkbox' name='60' class='single-input' value='<?php echo $r60; ?>' <?php echo $r60; ?>></td>
										<td>Tratamento de Canal </td>
										<td width='40px'><input type='checkbox' name='61' class='single-input' value='<?php echo $r61; ?>' <?php echo $r61; ?>></td>
										<td>Retratamento de canal</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='62' class='single-input' value='<?php echo $r62; ?>' <?php echo $r62; ?>></td>
										<td>Apicigênese</td>
										<td width='40px'><input type='checkbox' name='63' class='single-input' value='<?php echo $r63; ?>' <?php echo $r63; ?>></td>
										<td>Apicetomia, Retropreparo e Retrobturação</td>
										<td width='40px'><input type='checkbox' name='64' class='single-input' value='<?php echo $r64; ?>' <?php echo $r64; ?>></td>
										<td>Transplante Dentário</td>
										<td width='40px'><input type='checkbox' name='65' class='single-input' value='<?php echo $r65; ?>' <?php echo $r65; ?>></td>
										<td>Reimplante Dentário</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='66' class='single-input' value='<?php echo $r66; ?>' <?php echo $r66; ?>></td>
										<td>Tratamento Não-Cirúrgico de Perfuração</td>
										<td width='40px'><input type='checkbox' name='67' class='single-input' value='<?php echo $r67; ?>' <?php echo $r67; ?>></td>
										<td>Tratamento Cirúrgico de Perfuração</td>
										<td width='40px'><input type='checkbox' name='68' class='single-input' value='<?php echo $r68; ?>' <?php echo $r68; ?>></td>
										<td>Curetagem Apical</td>
										<td width='40px'><input type='checkbox' name='69' class='single-input' value='<?php echo $r69; ?>' <?php echo $r69; ?>></td>
										<td>Apicificação</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='70' class='single-input' value='<?php echo $r70; ?>' <?php echo $r70; ?>></td>
										<td>Proservação / acompanhamento</td>
									</tr>
								</table> 
								
								<hr>
								<h5>Terapêutica Sistêmica</h5>
								<br>
								<table border=0 width='100%'>
									<tr>
										<td colspan=5 style='border: 1px solid rgb(193,193,255);'><center>Odontometria</center></td>
										<td colspan=7 style='border: 1px solid rgb(193,193,255);'><center>Preparo Cirúrgico-Mecânico</center></td>
									</tr>
									<tr>
										<td><center><b>Canal</b></center></td>
										<td><center><b>CDR</b></center></td>
										<td><center><b>CP</b></center></td>
										<td><center><b>CT</b></center></td>
										<td><center><b>Ref.</b></center></td>
										<td colspan=2><center><b>Prep. Cervical</b></center></td>
										<td><center><b>IAI</b></center></td>
										<td><center><b>IM</b></center></td>
										<td><center><b>IP</b></center></td>
										<td colspan=2><center><b>Ápice / Coroa Step Back</b></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' value='<?php echo $r71; ?>' type='text' name='71'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r72; ?>' type='text' name='72'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r73; ?>' type='text' name='73'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r74; ?>' type='text' name='74'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r75; ?>' type='text' name='75'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r76; ?>' type='text' name='76'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r77; ?>' type='text' name='77'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r78; ?>' type='text' name='78'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r79; ?>' type='text' name='79'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r80; ?>' type='text' name='80'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r81; ?>' type='text' name='81'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r82; ?>' type='text' name='82'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' value='<?php echo $r83; ?>' type='text' name='83'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r84; ?>' type='text' name='84'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r85; ?>' type='text' name='85'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r86; ?>' type='text' name='86'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r87; ?>' type='text' name='87'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r88; ?>' type='text' name='88'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r89; ?>' type='text' name='89'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r90; ?>' type='text' name='90'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r91; ?>' type='text' name='91'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r92; ?>' type='text' name='92'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r93; ?>' type='text' name='93'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r94; ?>' type='text' name='94'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' value='<?php echo $r95; ?>' type='text' name='95'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r96; ?>' type='text' name='96'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r97; ?>' type='text' name='97'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r98; ?>' type='text' name='98'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r99; ?>' type='text' name='99'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r100; ?>' type='text' name='100'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r101; ?>' type='text' name='101'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r102; ?>' type='text' name='102'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r103; ?>' type='text' name='103'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r104; ?>' type='text' name='104'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r105; ?>' type='text' name='105'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r106; ?>' type='text' name='106'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' value='<?php echo $r107; ?>' type='text' name='107'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r108; ?>' type='text' name='108'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r109; ?>' type='text' name='109'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r110; ?>' type='text' name='110'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r111; ?>' type='text' name='111'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r112; ?>' type='text' name='112'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r113; ?>' type='text' name='113'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r114; ?>' type='text' name='114'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r115; ?>' type='text' name='115'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r116; ?>' type='text' name='116'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r117; ?>' type='text' name='117'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r118; ?>' type='text' name='118'></center></td>
									</tr>
								</table>
								<br>
								<table border=0>
									<tr>
										<td><b>Solução Química Irrigadora/Concentração:</b></td>
										<td width='100%'><input type='TEXT' name='119' class='single-input' value='<?php echo $r119; ?>'></td>
									</tr>
								</table>
								<table border=0>
									<tr>
										<td><b>Medicação intracanal:</b></td>
										<td width='100%'><input type='TEXT' name='120' class='single-input' value='<?php echo $r120; ?>'></td>
									</tr>
									<tr>
										<td><b>Cimento Obturador:</b></td>
										<td width='100%'><input type='TEXT' name='121' class='single-input' value='<?php echo $r121; ?>'></td>
									</tr>
								</table>
								<br>
								<table>
									<tr>
										<td><b>Técnica de Obturação:</b></td>
										<td width='40px'><input type='checkbox' name='122' class='single-input' value='<?php echo $r122; ?>' <?php echo $r122; ?>></td>
										<td>Schilder</td>
										<td width='40px'><input type='checkbox' name='123' class='single-input' value='<?php echo $r123; ?>' <?php echo $r123; ?>></td>
										<td>Híbrida Tagger </td>
										<td width='40px'><input type='checkbox' name='124' class='single-input' value='<?php echo $r124; ?>' <?php echo $r124; ?>></td>
										<td>Condensação Lateral</td>
									</tr>
									<tr>
										<td><b>Técnica de Instrumentação:</b></td>
										<td width='40px'><input type='checkbox' name='125' class='single-input' value='<?php echo $r125; ?>' <?php echo $r125; ?>></td>
										<td>Escalonamento Apice-Coroa</td>
										<td width='40px'><input type='checkbox' name='126' class='single-input' value='<?php echo $r126; ?>' <?php echo $r126; ?>></td>
										<td>Outro</td>
									</tr>
									<tr>
										<td><b>Odontometria:</b></td>
										<td width='40px'><input type='checkbox' name='127' class='single-input' value='<?php echo $r127; ?>' <?php echo $r127; ?>></td>
										<td>Técnica Radiográfica</td>
										<td width='40px'><input type='checkbox' name='128' class='single-input' value='<?php echo $r128; ?>' <?php echo $r128; ?>></td>
										<td>Técnica Radiográfica Auxiliada por Localizador Apical</td>
									</tr>
								</table>
								<br>
								<center>
									<input type='submit' value='Atualizar' class='genric-btn primary'>
									<a href='excluirEndo.php?id=<?php echo $id; ?>' class='genric-btn secondary'>Excluir</a>
								</center>
							</form>
							
						<?php	
							
							
						}
						
						
						?>
						
						
						
						
						
						
						
					  </div>
					</div>

				  </div>
				  <!-- Accordion card -->

				  <!-- Accordion card -->
				  <div class="card">

					<!-- Card header -->
					<div class="card-header" role="tab" id="headingTwo<?php echo $b; ?>">
					  <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo<?php echo $b; ?>"
						aria-expanded="false" aria-controls="collapseTwo<?php echo $b; ?>">
						<h5 class="mb-0">
						  Dente <?php echo $b; ?> - Retratamento
						</h5>
					  </a>
					</div>

					<!-- Card body -->
					<div id="collapseTwo<?php echo $b; ?>" class="collapse" role="tabpanel" aria-labelledby="headingTwo<?php echo $b; ?>"
					  data-parent="#accordionEx">
					  <div class="card-body">
						
						<?php
						
						$sqlAnam = "SELECT * FROM `tb_endodontia` WHERE `nr_cpfPaciente` = '".$_GET['cpf']."' AND `2` = '".$b."_2'";
						$resultadoAnam = mysql_query($sqlAnam) or die();
						$numImg = mysql_num_rows($resultadoAnam);
						if($numImg == 0){
							
						?>	
							
							<!-- ###################################################################################### CADASTRO ENDO 2 -->
							<form method='POST' action='inserirEndo.php'>
								<input type='hidden' name='retratamento' value='2'>
								<b>Dupla Responsável:</b>
								<select class='single-input' name='dupla'>
								<?php
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
								?>
								</select><br>
							
								<b>Queixa Principal: </b><input type='text' name='1' class='single-input' placeholder='Queixa Principal'>
								<input type='hidden' name='2' value='<?php echo $b; ?>_2' class='single-input'>
								<input type='hidden' name='cpf' value='<?php echo $_GET['cpf']; ?>' class='single-input'>
								
								<hr>
								<br>
								<h5>Semiologia Subjetiva – Características Clínicas da Dor</h5><br>
								<table border=0>
									<tr>
										<td><b>Sede: </b></td>
										<td width='40px'><input type='checkbox' name='3' class='single-input'></td>
										<td>Localizada</td>
										<td width='40px'><input type='checkbox' name='4' class='single-input'></td>
										<td>Difusa</td>
									</tr>
									
									
									<tr>	
										<td><b>Aparecimento: </b></td>
										<td width='40px'><input type='checkbox' name='5' class='single-input'></td>
										<td>Provocada</td>
										<td width='40px'><input type='checkbox' name='6' class='single-input'></td>
										<td style='margin-rigth:10px;'>Espontânea</td>
									</tr>
									
									
									<tr>
										<td><b>Duração: </b></td>
										<td width='40px'><input type='checkbox' name='7' class='single-input'></td>
										<td>Curta</td>
										<td width='40px'><input type='checkbox' name='8' class='single-input'></td>
										<td>Longa</td>
									</tr>
									
									
									<tr>
										<td><b>Frequência: </b></td>
										<td width='40px'><input type='checkbox' name='9' class='single-input'></td>
										<td>Intermitente</td>
										<td width='40px'><input type='checkbox' name='10' class='single-input'></td>
										<td>Contínua</td>
									</tr>
									
									<tr>
										<td><b>Intensidade: </b></td>
										<td width='40px'><input type='checkbox' name='11' class='single-input'></td>
										<td>Leve</td>
										<td width='40px'><input type='checkbox' name='12' class='single-input'></td>
										<td>Moderada</td>
										<td width='40px'><input type='checkbox' name='13' class='single-input'></td>
										<td>Severa</td>
									</tr>
								</table>
								
								<hr>
								<h5>Semiologia Objetiva</h5><br>
								<table border=0>
									<tr>
										<td><b>Mucosa Gengival: </b></td>
										<td width='40px'><input type='checkbox' name='14' class='single-input'></td>
										<td>Normal</td>
										<td width='40px'><input type='checkbox' name='15' class='single-input'></td>
										<td>Doença Periodontal</td>
										<td width='40px'><input type='checkbox' name='16' class='single-input'></td>
										<td>Presença de Fístula</td>
										<td width='40px'><input type='checkbox' name='17' class='single-input'></td>
										<td>Presença de Tumefação</td>
									</tr>
								</table>	
								<table>	
									<tr>
										<td width='190px;'><b>Sensibilidade a Palpação: </b></td>
										<td width='40px'><input type='checkbox' name='18' class='single-input'></td>
										<td>Presença de Dor</td>
										<td width='40px'><input type='checkbox' name='19' class='single-input'></td>
										<td>Ausência de Dor</td>
									</tr>
								</table>	
								<table>		
									<tr>
										<td><b>Mobilidade: </b></td>
										<td width='40px'><input type='checkbox' name='20' class='single-input'></td>
										<td>Normal</td>
										<td width='40px'><input type='checkbox' name='21' class='single-input'></td>
										<td>Acentuada</td>
									</tr>
									
									<tr>
										<td><b>Inspeção: </b></td>
										<td width='40px'><input type='checkbox' name='22' class='single-input'></td>
										<td>Coroa íntegra</td>
										<td width='40px'><input type='checkbox' name='23' class='single-input'></td>
										<td>Presença de restaurações</td>
										<td width='40px'><input type='checkbox' name='24' class='single-input'></td>
										<td>Presença de cárie</td>
										<td width='40px'><input type='checkbox' name='25' class='single-input'></td>
										<td>Presença de fratura</td>
									</tr>
									
									<tr>
										<td></td>
										<td width='40px'><input type='checkbox' name='26' class='single-input'></td>
										<td>Polpa exposta com vitalidade</td>
										<td width='40px'><input type='checkbox' name='27' class='single-input'></td>
										<td>Polpa exposta sem vitalidade</td>
										<td width='40px'><input type='checkbox' name='28' class='single-input'></td>
										<td>Alteração da cor da coroa dental</td>
										<td width='40px'><input type='checkbox' name='29' class='single-input'></td>
										<td>Alteração morfológica coronária</td>
									</tr>
								</table>  
								  
								<hr>
								<h5>Exame dos Dentes</h5><br>
								<table border=0>
									<tr>
										<td><b>Testes Térmicos: </b></td>
										<td width='40px'><input type='checkbox' name='30' class='single-input'></td>
										<td>Dor ao Frio</td>
										<td width='40px'><input type='checkbox' name='31' class='single-input'></td>
										<td>Dor ao Calor</td>
										<td width='40px'><input type='checkbox' name='32' class='single-input'></td>
										<td>Ausência de Dor</td>
									</tr>
									
									<tr>
										<td><b>Sensibilidade à Percussão: </b></td>
										<td width='40px'><input type='checkbox' name='33' class='single-input'></td>
										<td>Vertical</td>
										<td width='40px'><input type='checkbox' name='34' class='single-input'></td>
										<td>Horizontal</td>
									</tr>
									
									<tr>
										<td><b>Sensibilidade de Cavidade: </b></td>
										<td width='40px'><input type='checkbox' name='129' class='single-input'></td>
										<td>Presença de Dor</td>
										<td width='40px'><input type='checkbox' name='130' class='single-input'></td>
										<td>Ausência de Dor</td>
									</tr>
								</table>  
								<hr>	
								<h5>Exame Radiográfico</h5><br>
								<table border=0>								
									<tr>
										<td width='40px'><input type='checkbox' name='35' class='single-input'></td>
										<td>Periodonto Normal</td>
										<td width='40px'><input type='checkbox' name='36' class='single-input'></td>
										<td>Espessamento Periodontal</td>
										<td width='40px'><input type='checkbox' name='37' class='single-input'></td>
										<td>Lesão Perirradicular</td>
										<td width='40px'><input type='checkbox' name='38' class='single-input'></td>
										<td>Rizogênese Incompleta</td>
										<td width='40px'><input type='checkbox' name='39' class='single-input'></td>
										<td>Trepanação</td>
									</tr>
									
									<tr>
										<td width='40px'><input type='checkbox' name='40' class='single-input'></td>
										<td>Retentor Intra-Radicular</td>
										<td width='40px'><input type='checkbox' name='41' class='single-input'></td>
										<td>Instrumento Fraturado</td>
										<td width='40px'><input type='checkbox' name='42' class='single-input'></td>
										<td>T.E Insatisfatório</td>
										<td width='40px'><input type='checkbox' name='43' class='single-input'></td>
										<td>Reabsorção: Interna</td>
										<td width='40px'><input type='checkbox' name='44' class='single-input'></td>
										<td>Reabsorção: Externa</td>
									</tr>
									
									<tr>
										<td width='40px'><input type='checkbox' name='45' class='single-input'></td>
										<td>Fratura Dentária: Coronária</td>
										<td width='40px'><input type='checkbox' name='46' class='single-input'></td>
										<td>Fratura Dentária: Radicular</td>
									</tr>
								</table>  
								
								  
								<hr>
								<h5>Diagnóstico Clínico Provável</h5><br>
								<table border=0>
									<tr>
										<td width='40px'><input type='checkbox' name='47' class='single-input'></td>
										<td>Polpa Normal</td>
										<td width='40px'><input type='checkbox' name='48' class='single-input'></td>
										<td>Abscesso Dentoalveolar Agudo</td>
										<td width='40px'><input type='checkbox' name='49' class='single-input'></td>
										<td>Polpa Inflamada Reversivelmente</td>
										<td width='40px'><input type='checkbox' name='50' class='single-input'></td>
										<td>Polpa inflamada irreversivelmente</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='51' class='single-input'></td>
										<td>Abscesso Dentoaveolar Crônico</td>
										<td width='40px'><input type='checkbox' name='52' class='single-input'></td>
										<td>Granuloma Apical/Cisto Periodontal Apical</td>
										<td width='40px'><input type='checkbox' name='53' class='single-input'></td>
										<td>Necrose Pulpar </td>
										<td width='40px'><input type='checkbox' name='54' class='single-input'></td>
										<td>Displasia Cementária Periapical</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='55' class='single-input'></td>
										<td>Pericementite Apical Aguda </td>
										<td width='40px'><input type='checkbox' name='56' class='single-input'></td>
										<td>Pericementite Apical Crônica</td>
										<td colspan=4><input type='text' name='57' placeholder='Outras Patologias' class='single-input'></td>
									</tr>
								</table> 
								  
								<hr>
								<h5>Indicação de Tratamento</h5><br>
								<table border=0>
									<tr>
										<td width='40px'><input type='checkbox' name='58' class='single-input'></td>
										<td>Proteção Pulpar Indireta</td>
										<td width='40px'><input type='checkbox' name='59' class='single-input'></td>
										<td>Proteção Pulpar Direta </td>
										<td width='40px'><input type='checkbox' name='60' class='single-input'></td>
										<td>Tratamento de Canal </td>
										<td width='40px'><input type='checkbox' name='61' class='single-input'></td>
										<td>Retratamento de canal</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='62' class='single-input'></td>
										<td>Apicigênese</td>
										<td width='40px'><input type='checkbox' name='63' class='single-input'></td>
										<td>Apicetomia, Retropreparo e Retrobturação</td>
										<td width='40px'><input type='checkbox' name='64' class='single-input'></td>
										<td>Transplante Dentário</td>
										<td width='40px'><input type='checkbox' name='65' class='single-input'></td>
										<td>Reimplante Dentário</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='66' class='single-input'></td>
										<td>Tratamento Não-Cirúrgico de Perfuração</td>
										<td width='40px'><input type='checkbox' name='67' class='single-input'></td>
										<td>Tratamento Cirúrgico de Perfuração</td>
										<td width='40px'><input type='checkbox' name='68' class='single-input'></td>
										<td>Curetagem Apical</td>
										<td width='40px'><input type='checkbox' name='69' class='single-input'></td>
										<td>Apicificação</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='70' class='single-input'></td>
										<td>Proservação / acompanhamento</td>
									</tr>
								</table> 
								
								<hr>
								<h5>Terapêutica Sistêmica</h5>
								<br>
								<table border=0 width='100%'>
									<tr>
										<td colspan=5 style='border: 1px solid rgb(193,193,255);'><center>Odontometria</center></td>
										<td colspan=7 style='border: 1px solid rgb(193,193,255);'><center>Preparo Cirúrgico-Mecânico</center></td>
									</tr>

									<tr>
										<td><center><b>Canal</b></center></td>
										<td><center><b>CDR</b></center></td>
										<td><center><b>CP</b></center></td>
										<td><center><b>CT</b></center></td>
										<td><center><b>Ref.</b></center></td>
										<td colspan=2><center><b>Prep. Cervical</b></center></td>
										<td><center><b>IAI</b></center></td>
										<td><center><b>IM</b></center></td>
										<td><center><b>IP</b></center></td>
										<td colspan=2><center><b>Ápice / Coroa Step Back</b></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' type='text' name='71'></center></td>
										<td><center><input  class='single-input' type='text' name='72'></center></td>
										<td><center><input  class='single-input' type='text' name='73'></center></td>
										<td><center><input  class='single-input' type='text' name='74'></center></td>
										<td><center><input  class='single-input' type='text' name='75'></center></td>
										<td><center><input  class='single-input' type='text' name='76'></center></td>
										<td><center><input  class='single-input' type='text' name='77'></center></td>
										<td><center><input  class='single-input' type='text' name='78'></center></td>
										<td><center><input  class='single-input' type='text' name='79'></center></td>
										<td><center><input  class='single-input' type='text' name='80'></center></td>
										<td><center><input  class='single-input' type='text' name='81'></center></td>
										<td><center><input  class='single-input' type='text' name='82'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' type='text' name='83'></center></td>
										<td><center><input  class='single-input' type='text' name='84'></center></td>
										<td><center><input  class='single-input' type='text' name='85'></center></td>
										<td><center><input  class='single-input' type='text' name='86'></center></td>
										<td><center><input  class='single-input' type='text' name='87'></center></td>
										<td><center><input  class='single-input' type='text' name='88'></center></td>
										<td><center><input  class='single-input' type='text' name='89'></center></td>
										<td><center><input  class='single-input' type='text' name='90'></center></td>
										<td><center><input  class='single-input' type='text' name='91'></center></td>
										<td><center><input  class='single-input' type='text' name='92'></center></td>
										<td><center><input  class='single-input' type='text' name='93'></center></td>
										<td><center><input  class='single-input' type='text' name='94'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' type='text' name='95'></center></td>
										<td><center><input  class='single-input' type='text' name='96'></center></td>
										<td><center><input  class='single-input' type='text' name='97'></center></td>
										<td><center><input  class='single-input' type='text' name='98'></center></td>
										<td><center><input  class='single-input' type='text' name='99'></center></td>
										<td><center><input  class='single-input' type='text' name='100'></center></td>
										<td><center><input  class='single-input' type='text' name='101'></center></td>
										<td><center><input  class='single-input' type='text' name='102'></center></td>
										<td><center><input  class='single-input' type='text' name='103'></center></td>
										<td><center><input  class='single-input' type='text' name='104'></center></td>
										<td><center><input  class='single-input' type='text' name='105'></center></td>
										<td><center><input  class='single-input' type='text' name='106'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' type='text' name='107'></center></td>
										<td><center><input  class='single-input' type='text' name='108'></center></td>
										<td><center><input  class='single-input' type='text' name='109'></center></td>
										<td><center><input  class='single-input' type='text' name='110'></center></td>
										<td><center><input  class='single-input' type='text' name='111'></center></td>
										<td><center><input  class='single-input' type='text' name='112'></center></td>
										<td><center><input  class='single-input' type='text' name='113'></center></td>
										<td><center><input  class='single-input' type='text' name='114'></center></td>
										<td><center><input  class='single-input' type='text' name='115'></center></td>
										<td><center><input  class='single-input' type='text' name='116'></center></td>
										<td><center><input  class='single-input' type='text' name='117'></center></td>
										<td><center><input  class='single-input' type='text' name='118'></center></td>
									</tr>
								</table>
								<br>
								<table border=0>
									<tr>
										<td><b>Solução Química Irrigadora/Concentração:</b></td>
										<td width='100%'><input type='TEXT' name='119' class='single-input'></td>
									</tr>
								</table>
								<table border=0>
									<tr>
										<td><b>Medicação intracanal:</b></td>
										<td width='100%'><input type='TEXT' name='120' class='single-input'></td>
									</tr>
									<tr>
										<td><b>Cimento Obturador:</b></td>
										<td width='100%'><input type='TEXT' name='121' class='single-input'></td>
									</tr>
								</table>
								<br>
								<table>
									<tr>
										<td><b>Técnica de Obturação:</b></td>
										<td width='40px'><input type='checkbox' name='122' class='single-input'></td>
										<td>Schilder</td>
										<td width='40px'><input type='checkbox' name='123' class='single-input'></td>
										<td>Híbrida Tagger </td>
										<td width='40px'><input type='checkbox' name='124' class='single-input'></td>
										<td>Condensação Lateral</td>
									</tr>
									<tr>
										<td><b>Técnica de Instrumentação:</b></td>
										<td width='40px'><input type='checkbox' name='125' class='single-input'></td>
										<td>Escalonamento Apice-Coroa</td>
										<td width='40px'><input type='checkbox' name='126' class='single-input'></td>
										<td>Outro</td>
									</tr>
									<tr>
										<td><b>Odontometria:</b></td>
										<td width='40px'><input type='checkbox' name='127' class='single-input'></td>
										<td>Técnica Radiográfica</td>
										<td width='40px'><input type='checkbox' name='128' class='single-input'></td>
										<td>Técnica Radiográfica Auxiliada por Localizador Apical</td>
									</tr>
								</table>

								<hr>
								<h5>Repetir Endodontia:</h5><br>
								<table width='100%'>
									 <tr>
										<td>
										   <center><input type='checkbox' name='repetir17'> 17</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir16'> 16</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir15'> 15</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir14'> 14</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir13'> 13</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir12'> 12</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir11'> 11</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir21'> 21</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir22'> 22</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir23'> 23</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir24'> 24</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir25'> 25</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir26'> 26</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir27'> 27</center>
										</td>
									 </tr>
									 <tr>
										<td>
										   <center><input type='checkbox' name='repetir47'> 47</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir46'> 46</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir45'> 45</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir44'> 44</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir43'> 43</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir42'> 42</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir41'> 41</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir31'> 31</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir32'> 32</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir33'> 33</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir34'> 34</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir35'> 35</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir36'> 36</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir37'> 37</center>
										</td>
									 </tr>
									</table>
								<hr>
								<center><input type='submit' value='Salvar' class='genric-btn primary'></center>
							</form>

							
						<?php	
							
						}else{
							while($linhaAnam = mysql_fetch_array($resultadoAnam)){
								$id = $linhaAnam['nr_idEndodontia'];
								$dupla = $linhaAnam['nr_idDupla'];
								$data = $linhaAnam['dt_preenchimento'];
								$r1 = $linhaAnam['1'];
								$r2 = $linhaAnam['2']; 
								$r3 = $linhaAnam['3']; 
								$r4 = $linhaAnam['4']; 
								$r5 = $linhaAnam['5']; 
								$r6 = $linhaAnam['6']; 
								$r7 = $linhaAnam['7']; 
								$r8 = $linhaAnam['8']; 
								$r9 = $linhaAnam['9']; 
								$r10 = $linhaAnam['10']; 
								$r11 = $linhaAnam['11']; 
								$r12 = $linhaAnam['12']; 
								$r13 = $linhaAnam['13']; 
								$r14 = $linhaAnam['14']; 
								$r15 = $linhaAnam['15']; 
								$r16 = $linhaAnam['16']; 
								$r17 = $linhaAnam['17']; 
								$r18 = $linhaAnam['18']; 
								$r19 = $linhaAnam['19']; 
								$r20 = $linhaAnam['20']; 
								$r21 = $linhaAnam['21']; 
								$r22 = $linhaAnam['22']; 
								$r23 = $linhaAnam['23']; 
								$r24 = $linhaAnam['24']; 
								$r25 = $linhaAnam['25']; 
								$r26 = $linhaAnam['26']; 
								$r27 = $linhaAnam['27']; 
								$r28 = $linhaAnam['28']; 
								$r29 = $linhaAnam['29']; 
								$r30 = $linhaAnam['30']; 
								$r31 = $linhaAnam['31']; 
								$r32 = $linhaAnam['32']; 
								$r33 = $linhaAnam['33']; 
								$r34 = $linhaAnam['34']; 
								$r35 = $linhaAnam['35']; 
								$r36 = $linhaAnam['36']; 
								$r37 = $linhaAnam['37']; 
								$r38 = $linhaAnam['38']; 
								$r39 = $linhaAnam['39']; 
								$r40 = $linhaAnam['40']; 
								$r41 = $linhaAnam['41']; 
								$r42 = $linhaAnam['42']; 
								$r43 = $linhaAnam['43']; 
								$r44 = $linhaAnam['44']; 
								$r45 = $linhaAnam['45']; 
								$r46 = $linhaAnam['46']; 
								$r47 = $linhaAnam['47']; 
								$r48 = $linhaAnam['48']; 
								$r49 = $linhaAnam['49']; 
								$r50 = $linhaAnam['50']; 
								$r51 = $linhaAnam['51']; 
								$r52 = $linhaAnam['52']; 
								$r53 = $linhaAnam['53']; 
								$r54 = $linhaAnam['54']; 
								$r55 = $linhaAnam['55']; 
								$r56 = $linhaAnam['56']; 
								$r57 = $linhaAnam['57']; 
								$r58 = $linhaAnam['58']; 
								$r59 = $linhaAnam['59']; 
								$r60 = $linhaAnam['60']; 
								$r61 = $linhaAnam['61']; 
								$r62 = $linhaAnam['62']; 
								$r63 = $linhaAnam['63']; 
								$r64 = $linhaAnam['64']; 
								$r65 = $linhaAnam['65']; 
								$r66 = $linhaAnam['66']; 
								$r67 = $linhaAnam['67']; 
								$r68 = $linhaAnam['68']; 
								$r69 = $linhaAnam['69']; 
								$r70 = $linhaAnam['70']; 
								$r71 = $linhaAnam['71']; 
								$r72 = $linhaAnam['72']; 
								$r73 = $linhaAnam['73']; 
								$r74 = $linhaAnam['74']; 
								$r75 = $linhaAnam['75']; 
								$r76 = $linhaAnam['76']; 
								$r77 = $linhaAnam['77']; 
								$r78 = $linhaAnam['78']; 
								$r79 = $linhaAnam['79']; 
								$r80 = $linhaAnam['80']; 
								$r81 = $linhaAnam['81']; 
								$r82 = $linhaAnam['82']; 
								$r83 = $linhaAnam['83']; 
								$r84 = $linhaAnam['84']; 
								$r85 = $linhaAnam['85']; 
								$r86 = $linhaAnam['86']; 
								$r87 = $linhaAnam['87']; 
								$r88 = $linhaAnam['88']; 
								$r89 = $linhaAnam['89']; 
								$r90 = $linhaAnam['90']; 
								$r91 = $linhaAnam['91']; 
								$r92 = $linhaAnam['92']; 
								$r93 = $linhaAnam['93']; 
								$r94 = $linhaAnam['94']; 
								$r95 = $linhaAnam['95']; 
								$r96 = $linhaAnam['96']; 
								$r97 = $linhaAnam['97']; 
								$r98 = $linhaAnam['98']; 
								$r99 = $linhaAnam['99']; 
								$r100 = $linhaAnam['100']; 
								$r101 = $linhaAnam['101']; 
								$r102 = $linhaAnam['102']; 
								$r103 = $linhaAnam['103']; 
								$r104 = $linhaAnam['104']; 
								$r105 = $linhaAnam['105']; 
								$r106 = $linhaAnam['106']; 
								$r107 = $linhaAnam['107']; 
								$r108 = $linhaAnam['108']; 
								$r109 = $linhaAnam['109']; 
								$r110 = $linhaAnam['110']; 
								$r111 = $linhaAnam['111']; 
								$r112 = $linhaAnam['112']; 
								$r113 = $linhaAnam['113']; 
								$r114 = $linhaAnam['114']; 
								$r115 = $linhaAnam['115']; 
								$r116 = $linhaAnam['116']; 
								$r117 = $linhaAnam['117']; 
								$r118 = $linhaAnam['118']; 
								$r119 = $linhaAnam['119']; 
								$r120 = $linhaAnam['120']; 
								$r121 = $linhaAnam['121']; 
								$r122 = $linhaAnam['122']; 
								$r123 = $linhaAnam['123']; 
								$r124 = $linhaAnam['124']; 
								$r125 = $linhaAnam['125']; 
								$r126 = $linhaAnam['126']; 
								$r127 = $linhaAnam['127']; 
								$r128 = $linhaAnam['128']; 
								$r129 = $linhaAnam['129']; 
								$r130 = $linhaAnam['130']; 
													
							}
							
						?>	
						
								<!-- ############################################################## impressão endo 2 -->
							<form method='POST' action='atualizarEndo.php'>
								<input type='hidden' name='id' value='<?php echo $id; ?>'>
								<b>Dupla Responsável: </b>
								<select class='single-input' name='dupla'>
								<?php
									
									echo $sql = "SELECT * FROM tb_duplas WHERE nr_idDupla = ".$dupla." LIMIT 1";
									$resultado = mysql_query($sql) or die();
									while($linha = mysql_fetch_array($resultado)){
										
										$sqlNome1 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linha['nr_cpf1']."'";
										$resultadoNome1 = mysql_query($sqlNome1) or die();
										while($linhaNome1 = mysql_fetch_array($resultadoNome1)){
											$Nome1 = $linhaNome1['nm_nomeAluno']; 
											$periodo = $linhaNome1['nr_periodo']; 
										}
										
										$sqlNome2 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linha['nr_cpf2']."'";
										$resultadoNome2 = mysql_query($sqlNome2) or die();
										while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
											$Nome2 = $linhaNome2['nm_nomeAluno']; 
										}
										
										
										echo "<option value='".$linha['nr_idDupla']."'>".$Nome1." e ".$Nome2." (".$periodo."º Periodo)</option>";
									}
									
									
									$sqlNome = "SELECT * FROM tb_duplas WHERE nm_situacao = 'Ativo'";
									$resultadoNome = mysql_query($sqlNome) or die();
									while($linhaNome = mysql_fetch_array($resultadoNome)){
										if($linhaNome['nr_idDupla'] != $dupla){
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
									}
								?>
								</select><br>
								
								
								
								<b>Data do Preenchimento: </b><input type='text' name='data' class='single-input' value='<?php echo $data; ?>'><br>
								<b>Queixa Principal: </b><input type='text' name='1' class='single-input' value='<?php echo $r1; ?>'>
								<input type='hidden' name='2' value='<?php echo $r2; ?>' class='single-input'>
								<input type='hidden' name='cpf' value='<?php echo $_GET['cpf']; ?>' class='single-input'>
								
								<hr>
								<br>
								<h5>Semiologia Subjetiva – Características Clínicas da Dor</h5><br>
								<table border=0>
									<tr>
										<td><b>Sede: </b></td>
										<td width='40px'><input type='checkbox' name='3' class='single-input'  value='<?php echo $r3; ?>' <?php echo $r3; ?>></td>
										<td>Localizada</td>
										<td width='40px'><input type='checkbox' name='4' class='single-input'  value='<?php echo $r4; ?>' <?php echo $r4; ?>></td>
										<td>Difusa</td>
									</tr>
									
									
									<tr>	
										<td><b>Aparecimento: </b></td>
										<td width='40px'><input type='checkbox' name='5' class='single-input' value='<?php echo $r5; ?>' <?php echo $r5; ?>></td>
										<td>Provocada</td>
										<td width='40px'><input type='checkbox' name='6' class='single-input' value='<?php echo $r6; ?>' <?php echo $r6; ?>></td>
										<td style='margin-rigth:10px;'>Espontânea</td>
									</tr>
									
									
									<tr>
										<td><b>Duração: </b></td>
										<td width='40px'><input type='checkbox' name='7' class='single-input' value='<?php echo $r7; ?>' <?php echo $r7; ?>></td>
										<td>Curta</td>
										<td width='40px'><input type='checkbox' name='8' class='single-input' value='<?php echo $r8; ?>' <?php echo $r8; ?>></td>
										<td>Longa</td>
									</tr>
									
									
									<tr>
										<td><b>Frequência: </b></td>
										<td width='40px'><input type='checkbox' name='9' class='single-input' value='<?php echo $r9; ?>' <?php echo $r9; ?>></td>
										<td>Intermitente</td>
										<td width='40px'><input type='checkbox' name='10' class='single-input' value='<?php echo $r10; ?>' <?php echo $r10; ?>></td>
										<td>Contínua</td>
									</tr>
									
									<tr>
										<td><b>Intensidade: </b></td>
										<td width='40px'><input type='checkbox' name='11' class='single-input' value='<?php echo $r11; ?>' <?php echo $r11; ?>></td>
										<td>Leve</td>
										<td width='40px'><input type='checkbox' name='12' class='single-input' value='<?php echo $r12; ?>' <?php echo $r12; ?>></td>
										<td>Moderada</td>
										<td width='40px'><input type='checkbox' name='13' class='single-input' value='<?php echo $r13; ?>' <?php echo $r13; ?>></td>
										<td>Severa</td>
									</tr>
								</table>
								
								<hr>
								<h5>Semiologia Objetiva</h5><br>
								<table border=0>
									<tr>
										<td><b>Mucosa Gengival: </b></td>
										<td width='40px'><input type='checkbox' name='14' class='single-input' value='<?php echo $r14; ?>' <?php echo $r14; ?>></td>
										<td>Normal</td>
										<td width='40px'><input type='checkbox' name='15' class='single-input' value='<?php echo $r15; ?>' <?php echo $r15; ?>></td>
										<td>Doença Periodontal</td>
										<td width='40px'><input type='checkbox' name='16' class='single-input' value='<?php echo $r16; ?>' <?php echo $r16; ?>></td>
										<td>Presença de Fístula</td>
										<td width='40px'><input type='checkbox' name='17' class='single-input' value='<?php echo $r17; ?>' <?php echo $r17; ?>></td>
										<td>Presença de Tumefação</td>
									</tr>
								</table>	
								<table>	
									<tr>
										<td width='190px;'><b>Sensibilidade a Palpação: </b></td>
										<td width='40px'><input type='checkbox' name='18' class='single-input' value='<?php echo $r18; ?>' <?php echo $r18; ?>></td>
										<td>Presença de Dor</td>
										<td width='40px'><input type='checkbox' name='19' class='single-input' value='<?php echo $r19; ?>' <?php echo $r19; ?>></td>
										<td>Ausência de Dor</td>
									</tr>
								</table>	
								<table>		
									<tr>
										<td><b>Mobilidade: </b></td>
										<td width='40px'><input type='checkbox' name='20' class='single-input' value='<?php echo $r20; ?>' <?php echo $r20; ?>></td>
										<td>Normal</td>
										<td width='40px'><input type='checkbox' name='21' class='single-input' value='<?php echo $r21; ?>' <?php echo $r21; ?>></td>
										<td>Acentuada</td>
									</tr>
									
									<tr>
										<td><b>Inspeção: </b></td>
										<td width='40px'><input type='checkbox' name='22' class='single-input' value='<?php echo $r22; ?>' <?php echo $r22; ?>></td>
										<td>Coroa íntegra</td>
										<td width='40px'><input type='checkbox' name='23' class='single-input' value='<?php echo $r23; ?>' <?php echo $r23; ?>></td>
										<td>Presença de restaurações</td>
										<td width='40px'><input type='checkbox' name='24' class='single-input' value='<?php echo $r24; ?>' <?php echo $r24; ?>></td>
										<td>Presença de cárie</td>
										<td width='40px'><input type='checkbox' name='25' class='single-input' value='<?php echo $r25; ?>' <?php echo $r25; ?>></td>
										<td>Presença de fratura</td>
									</tr>
									
									<tr>
										<td></td>
										<td width='40px'><input type='checkbox' name='26' class='single-input' value='<?php echo $r26; ?>' <?php echo $r26; ?>></td>
										<td>Polpa exposta com vitalidade</td>
										<td width='40px'><input type='checkbox' name='27' class='single-input' value='<?php echo $r27; ?>' <?php echo $r27; ?>></td>
										<td>Polpa exposta sem vitalidade</td>
										<td width='40px'><input type='checkbox' name='28' class='single-input' value='<?php echo $r28; ?>' <?php echo $r28; ?>></td>
										<td>Alteração da cor da coroa dental</td>
										<td width='40px'><input type='checkbox' name='29' class='single-input' value='<?php echo $r29; ?>' <?php echo $r29; ?>></td>
										<td>Alteração morfológica coronária</td>
									</tr>
								</table>  
								  
								<hr>
								<h5>Exame dos Dentes</h5><br>
								<table border=0>
									<tr>
										<td><b>Testes Térmicos: </b></td>
										<td width='40px'><input type='checkbox' name='30' class='single-input' value='<?php echo $r30; ?>' <?php echo $r30; ?>></td>
										<td>Dor ao Frio</td>
										<td width='40px'><input type='checkbox' name='31' class='single-input' value='<?php echo $r31; ?>' <?php echo $r31; ?>></td>
										<td>Dor ao Calor</td>
										<td width='40px'><input type='checkbox' name='32' class='single-input' value='<?php echo $r32; ?>' <?php echo $r32; ?>></td>
										<td>Ausência de Dor</td>
									</tr>
									
									<tr>
										<td><b>Sensibilidade à Percussão: </b></td>
										<td width='40px'><input type='checkbox' name='33' class='single-input' value='<?php echo $r33; ?>' <?php echo $r33; ?>></td>
										<td>Vertical</td>
										<td width='40px'><input type='checkbox' name='34' class='single-input' value='<?php echo $r34; ?>' <?php echo $r34; ?>></td>
										<td>Horizontal</td>
									</tr>
									
									<tr>
										<td><b>Sensibilidade de Cavidade: </b></td>
										<td width='40px'><input type='checkbox' name='129' class='single-input' value='<?php echo $r129; ?>' <?php echo $r129; ?>></td>
										<td>Presença de Dor</td>
										<td width='40px'><input type='checkbox' name='130' class='single-input' value='<?php echo $r130; ?>' <?php echo $r130; ?>></td>
										<td>Ausência de Dor</td>
									</tr>
								</table>
								
								<hr>
								<h5>Exame Radiográfico</h5><br>
								<table border=0>	
									<tr>
										<td width='40px'><input type='checkbox' name='35' class='single-input' value='<?php echo $r35; ?>' <?php echo $r35; ?>></td>
										<td>Periodonto Normal</td>
										<td width='40px'><input type='checkbox' name='36' class='single-input' value='<?php echo $r36; ?>' <?php echo $r36; ?>></td>
										<td>Espessamento Periodontal</td>
										<td width='40px'><input type='checkbox' name='37' class='single-input' value='<?php echo $r37; ?>' <?php echo $r37; ?>></td>
										<td>Lesão Perirradicular</td>
										<td width='40px'><input type='checkbox' name='38' class='single-input' value='<?php echo $r38; ?>' <?php echo $r38; ?>></td>
										<td>Rizogênese Incompleta</td>
										<td width='40px'><input type='checkbox' name='39' class='single-input' value='<?php echo $r39; ?>' <?php echo $r39; ?>></td>
										<td>Trepanação</td>
									</tr>
									
									<tr>
										<td width='40px'><input type='checkbox' name='40' class='single-input' value='<?php echo $r40; ?>' <?php echo $r40; ?>></td>
										<td>Retentor Intra-Radicular</td>
										<td width='40px'><input type='checkbox' name='41' class='single-input' value='<?php echo $r41; ?>' <?php echo $r41; ?>></td>
										<td>Instrumento Fraturado</td>
										<td width='40px'><input type='checkbox' name='42' class='single-input' value='<?php echo $r42; ?>' <?php echo $r42; ?>></td>
										<td>T.E Insatisfatório</td>
										<td width='40px'><input type='checkbox' name='43' class='single-input' value='<?php echo $r43; ?>' <?php echo $r43; ?>></td>
										<td>Reabsorção: Interna</td>
										<td width='40px'><input type='checkbox' name='44' class='single-input' value='<?php echo $r44; ?>' <?php echo $r44; ?>></td>
										<td>Reabsorção: Externa</td>
									</tr>
									
									<tr>
										<td width='40px'><input type='checkbox' name='45' class='single-input' value='<?php echo $r45; ?>' <?php echo $r45; ?>></td>
										<td>Fratura Dentária: Coronária</td>
										<td width='40px'><input type='checkbox' name='46' class='single-input' value='<?php echo $r46; ?>' <?php echo $r46; ?>></td>
										<td>Fratura Dentária: Radicular</td>
									</tr>
								</table>  
								  
								<hr>
								<h5>Diagnóstico Clínico Provável:</h5><br>
								<table border=0>
									<tr>
										<td width='40px'><input type='checkbox' name='47' class='single-input' value='<?php echo $r47; ?>' <?php echo $r47; ?>></td>
										<td>Polpa Normal</td>
										<td width='40px'><input type='checkbox' name='48' class='single-input' value='<?php echo $r48; ?>' <?php echo $r48; ?>></td>
										<td>Abscesso Dentoalveolar Agudo</td>
										<td width='40px'><input type='checkbox' name='49' class='single-input' value='<?php echo $r49; ?>' <?php echo $r49; ?>></td>
										<td>Polpa Inflamada Reversivelmente</td>
										<td width='40px'><input type='checkbox' name='50' class='single-input' value='<?php echo $r50; ?>' <?php echo $r50; ?>></td>
										<td>Polpa inflamada irreversivelmente</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='51' class='single-input' value='<?php echo $r51; ?>' <?php echo $r51; ?>></td>
										<td>Abscesso Dentoaveolar Crônico</td>
										<td width='40px'><input type='checkbox' name='52' class='single-input' value='<?php echo $r52; ?>' <?php echo $r52; ?>></td>
										<td>Granuloma Apical/Cisto Periodontal Apical</td>
										<td width='40px'><input type='checkbox' name='53' class='single-input' value='<?php echo $r53; ?>' <?php echo $r53; ?>></td>
										<td>Necrose Pulpar </td>
										<td width='40px'><input type='checkbox' name='54' class='single-input' value='<?php echo $r54; ?>' <?php echo $r54; ?>></td>
										<td>Displasia Cementária Periapical</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='55' class='single-input' value='<?php echo $r55; ?>' <?php echo $r55; ?>></td>
										<td>Pericementite Apical Aguda </td>
										<td width='40px'><input type='checkbox' name='56' class='single-input' value='<?php echo $r56; ?>' <?php echo $r56; ?>></td>
										<td>Pericementite Apical Crônica</td>
										<td colspan=4><input type='text' name='57' placeholder='Outras Patologias' class='single-input' value='<?php echo $r57; ?>'></td>
									</tr>
								</table> 
								  
								<hr>
								<h5>Indicação de Tratamento:</h5><br>
								<table border=0>
									<tr>
										<td width='40px'><input type='checkbox' name='58' class='single-input' value='<?php echo $r58; ?>' <?php echo $r58; ?>></td>
										<td>Proteção Pulpar Indireta</td>
										<td width='40px'><input type='checkbox' name='59' class='single-input' value='<?php echo $r59; ?>' <?php echo $r59; ?>></td>
										<td>Proteção Pulpar Direta </td>
										<td width='40px'><input type='checkbox' name='60' class='single-input' value='<?php echo $r60; ?>' <?php echo $r60; ?>></td>
										<td>Tratamento de Canal </td>
										<td width='40px'><input type='checkbox' name='61' class='single-input' value='<?php echo $r61; ?>' <?php echo $r61; ?>></td>
										<td>Retratamento de canal</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='62' class='single-input' value='<?php echo $r62; ?>' <?php echo $r62; ?>></td>
										<td>Apicigênese</td>
										<td width='40px'><input type='checkbox' name='63' class='single-input' value='<?php echo $r63; ?>' <?php echo $r63; ?>></td>
										<td>Apicetomia, Retropreparo e Retrobturação</td>
										<td width='40px'><input type='checkbox' name='64' class='single-input' value='<?php echo $r64; ?>' <?php echo $r64; ?>></td>
										<td>Transplante Dentário</td>
										<td width='40px'><input type='checkbox' name='65' class='single-input' value='<?php echo $r65; ?>' <?php echo $r65; ?>></td>
										<td>Reimplante Dentário</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='66' class='single-input' value='<?php echo $r66; ?>' <?php echo $r66; ?>></td>
										<td>Tratamento Não-Cirúrgico de Perfuração</td>
										<td width='40px'><input type='checkbox' name='67' class='single-input' value='<?php echo $r67; ?>' <?php echo $r67; ?>></td>
										<td>Tratamento Cirúrgico de Perfuração</td>
										<td width='40px'><input type='checkbox' name='68' class='single-input' value='<?php echo $r68; ?>' <?php echo $r68; ?>></td>
										<td>Curetagem Apical</td>
										<td width='40px'><input type='checkbox' name='69' class='single-input' value='<?php echo $r69; ?>' <?php echo $r69; ?>></td>
										<td>Apicificação</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='70' class='single-input' value='<?php echo $r70; ?>' <?php echo $r70; ?>></td>
										<td>Proservação / acompanhamento</td>
									</tr>
								</table> 
								
								<hr>
								<h5>Terapêutica Sistêmica</h5>
								<br>
								<table border=0 width='100%'>
									<tr>
										<td colspan=5 style='border: 1px solid rgb(193,193,255);'><center>Odontometria</center></td>
										<td colspan=7 style='border: 1px solid rgb(193,193,255);'><center>Preparo Cirúrgico-Mecânico</center></td>
									</tr>
									<tr>
										<td><center><b>Canal</b></center></td>
										<td><center><b>CDR</b></center></td>
										<td><center><b>CP</b></center></td>
										<td><center><b>CT</b></center></td>
										<td><center><b>Ref.</b></center></td>
										<td colspan=2><center><b>Prep. Cervical</b></center></td>
										<td><center><b>IAI</b></center></td>
										<td><center><b>IM</b></center></td>
										<td><center><b>IP</b></center></td>
										<td colspan=2><center><b>Ápice / Coroa Step Back</b></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' value='<?php echo $r71; ?>' type='text' name='71'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r72; ?>' type='text' name='72'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r73; ?>' type='text' name='73'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r74; ?>' type='text' name='74'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r75; ?>' type='text' name='75'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r76; ?>' type='text' name='76'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r77; ?>' type='text' name='77'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r78; ?>' type='text' name='78'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r79; ?>' type='text' name='79'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r80; ?>' type='text' name='80'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r81; ?>' type='text' name='81'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r82; ?>' type='text' name='82'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' value='<?php echo $r83; ?>' type='text' name='83'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r84; ?>' type='text' name='84'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r85; ?>' type='text' name='85'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r86; ?>' type='text' name='86'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r87; ?>' type='text' name='87'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r88; ?>' type='text' name='88'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r89; ?>' type='text' name='89'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r90; ?>' type='text' name='90'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r91; ?>' type='text' name='91'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r92; ?>' type='text' name='92'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r93; ?>' type='text' name='93'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r94; ?>' type='text' name='94'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' value='<?php echo $r95; ?>' type='text' name='95'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r96; ?>' type='text' name='96'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r97; ?>' type='text' name='97'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r98; ?>' type='text' name='98'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r99; ?>' type='text' name='99'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r100; ?>' type='text' name='100'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r101; ?>' type='text' name='101'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r102; ?>' type='text' name='102'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r103; ?>' type='text' name='103'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r104; ?>' type='text' name='104'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r105; ?>' type='text' name='105'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r106; ?>' type='text' name='106'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' value='<?php echo $r107; ?>' type='text' name='107'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r108; ?>' type='text' name='108'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r109; ?>' type='text' name='109'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r110; ?>' type='text' name='110'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r111; ?>' type='text' name='111'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r112; ?>' type='text' name='112'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r113; ?>' type='text' name='113'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r114; ?>' type='text' name='114'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r115; ?>' type='text' name='115'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r116; ?>' type='text' name='116'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r117; ?>' type='text' name='117'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r118; ?>' type='text' name='118'></center></td>
									</tr>
								</table>
								<br>
								<table border=0>
									<tr>
										<td><b>Solução Química Irrigadora/Concentração:</b></td>
										<td width='100%'><input type='TEXT' name='119' class='single-input' value='<?php echo $r119; ?>'></td>
									</tr>
								</table>
								<table border=0>
									<tr>
										<td><b>Medicação intracanal:</b></td>
										<td width='100%'><input type='TEXT' name='120' class='single-input' value='<?php echo $r120; ?>'></td>
									</tr>
									<tr>
										<td><b>Cimento Obturador:</b></td>
										<td width='100%'><input type='TEXT' name='121' class='single-input' value='<?php echo $r121; ?>'></td>
									</tr>
								</table>
								<br>
								<table>
									<tr>
										<td><b>Técnica de Obturação:</b></td>
										<td width='40px'><input type='checkbox' name='122' class='single-input' value='<?php echo $r122; ?>' <?php echo $r122; ?>></td>
										<td>Schilder</td>
										<td width='40px'><input type='checkbox' name='123' class='single-input' value='<?php echo $r123; ?>' <?php echo $r123; ?>></td>
										<td>Híbrida Tagger </td>
										<td width='40px'><input type='checkbox' name='124' class='single-input' value='<?php echo $r124; ?>' <?php echo $r124; ?>></td>
										<td>Condensação Lateral</td>
									</tr>
									<tr>
										<td><b>Técnica de Instrumentação:</b></td>
										<td width='40px'><input type='checkbox' name='125' class='single-input' value='<?php echo $r125; ?>' <?php echo $r125; ?>></td>
										<td>Escalonamento Apice-Coroa</td>
										<td width='40px'><input type='checkbox' name='126' class='single-input' value='<?php echo $r126; ?>' <?php echo $r126; ?>></td>
										<td>Outro</td>
									</tr>
									<tr>
										<td><b>Odontometria:</b></td>
										<td width='40px'><input type='checkbox' name='127' class='single-input' value='<?php echo $r127; ?>' <?php echo $r127; ?>></td>
										<td>Técnica Radiográfica</td>
										<td width='40px'><input type='checkbox' name='128' class='single-input' value='<?php echo $r128; ?>' <?php echo $r128; ?>></td>
										<td>Técnica Radiográfica Auxiliada por Localizador Apical</td>
									</tr>
								</table>
								<hr>
								<center>
									<input type='submit' value='Atualizar' class='genric-btn primary'>
									<a href='excluirEndo.php?id=<?php echo $id; ?>' class='genric-btn secondary'>Excluir</a>
								</center>
							</form>
							
						<?php	
							
							
						}
						
						
						?>
						
						
						
						
					  </div>
					</div>

				  </div>
				  <!-- Accordion card -->
				</div>
				<!-- Accordion wrapper -->
				
			</div>
			
			
		<?php
			$b = $b + 1;
		}
		
		$c = 31;
		while($c<38){
			?>
			
			
					<div id='contenido<?php echo $c; ?>' width='100%' style='background-color:white; display:none'>
				
				<!--Accordion wrapper-->
				<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

				  <!-- Accordion card -->
				  <div class="card">

					<!-- Card header -->
					<div class="card-header" role="tab" id="headingOne<?php echo $c; ?>">
					  <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne<?php echo $c; ?>" aria-expanded="true"
						aria-controls="collapseOne<?php echo $c; ?>">
						<h5 class="mb-0">
						  Dente <?php echo $c; ?>
						</h5>
					  </a>
					</div>

					<!-- Card body -->
					<div id="collapseOne<?php echo $c; ?>" class="collapse show" role="tabpanel" aria-labelledby="headingOne<?php echo $c; ?>"
					  data-parent="#accordionEx">
					  <div class="card-body">
						
						<?php
						
						$sqlAnam = "SELECT * FROM `tb_endodontia` WHERE `nr_cpfPaciente` = '".$_GET['cpf']."' AND `2` = '".$c."_1'";
						$resultadoAnam = mysql_query($sqlAnam) or die();
						$numImg = mysql_num_rows($resultadoAnam);
						if($numImg == 0){
							
						?>	
							
							<!-- ###################################################################################### CADASTRO ENDO 1 -->
							<form method='POST' action='inserirEndo.php'>
							
								<b>Dupla Responsável:</b>
								<select class='single-input' name='dupla'>
								<?php
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
								?>
								</select><br>
							
								<b>Queixa Principal: </b><input type='text' name='1' class='single-input' placeholder='Queixa Principal'>
								<input type='hidden' name='2' value='<?php echo $c; ?>_1' class='single-input'>
								<input type='hidden' name='cpf' value='<?php echo $_GET['cpf']; ?>' class='single-input'>
								
								<hr>
								<br>
								<h5>Semiologia Subjetiva – Características Clínicas da Dor</h5><br>
								<table border=0>
									<tr>
										<td><b>Sede: </b></td>
										<td width='40px'><input type='checkbox' name='3' class='single-input'></td>
										<td>Localizada</td>
										<td width='40px'><input type='checkbox' name='4' class='single-input'></td>
										<td>Difusa</td>
									</tr>
									
									
									<tr>	
										<td><b>Aparecimento: </b></td>
										<td width='40px'><input type='checkbox' name='5' class='single-input'></td>
										<td>Provocada</td>
										<td width='40px'><input type='checkbox' name='6' class='single-input'></td>
										<td style='margin-rigth:10px;'>Espontânea</td>
									</tr>
									
									
									<tr>
										<td><b>Duração: </b></td>
										<td width='40px'><input type='checkbox' name='7' class='single-input'></td>
										<td>Curta</td>
										<td width='40px'><input type='checkbox' name='8' class='single-input'></td>
										<td>Longa</td>
									</tr>
									
									
									<tr>
										<td><b>Frequência: </b></td>
										<td width='40px'><input type='checkbox' name='9' class='single-input'></td>
										<td>Intermitente</td>
										<td width='40px'><input type='checkbox' name='10' class='single-input'></td>
										<td>Contínua</td>
									</tr>
									
									<tr>
										<td><b>Intensidade: </b></td>
										<td width='40px'><input type='checkbox' name='11' class='single-input'></td>
										<td>Leve</td>
										<td width='40px'><input type='checkbox' name='12' class='single-input'></td>
										<td>Moderada</td>
										<td width='40px'><input type='checkbox' name='13' class='single-input'></td>
										<td>Severa</td>
									</tr>
								</table>
								
								<hr>
								<h5>Semiologia Objetiva</h5><br>
								<table border=0>
									<tr>
										<td><b>Mucosa Gengival: </b></td>
										<td width='40px'><input type='checkbox' name='14' class='single-input'></td>
										<td>Normal</td>
										<td width='40px'><input type='checkbox' name='15' class='single-input'></td>
										<td>Doença Periodontal</td>
										<td width='40px'><input type='checkbox' name='16' class='single-input'></td>
										<td>Presença de Fístula</td>
										<td width='40px'><input type='checkbox' name='17' class='single-input'></td>
										<td>Presença de Tumefação</td>
									</tr>
								</table>	
								<table>	
									<tr>
										<td width='190px;'><b>Sensibilidade a Palpação: </b></td>
										<td width='40px'><input type='checkbox' name='18' class='single-input'></td>
										<td>Presença de Dor</td>
										<td width='40px'><input type='checkbox' name='19' class='single-input'></td>
										<td>Ausência de Dor</td>
									</tr>
								</table>	
								<table>		
									<tr>
										<td><b>Mobilidade: </b></td>
										<td width='40px'><input type='checkbox' name='20' class='single-input'></td>
										<td>Normal</td>
										<td width='40px'><input type='checkbox' name='21' class='single-input'></td>
										<td>Acentuada</td>
									</tr>
									
									<tr>
										<td><b>Inspeção: </b></td>
										<td width='40px'><input type='checkbox' name='22' class='single-input'></td>
										<td>Coroa íntegra</td>
										<td width='40px'><input type='checkbox' name='23' class='single-input'></td>
										<td>Presença de restaurações</td>
										<td width='40px'><input type='checkbox' name='24' class='single-input'></td>
										<td>Presença de cárie</td>
										<td width='40px'><input type='checkbox' name='25' class='single-input'></td>
										<td>Presença de fratura</td>
									</tr>
									
									<tr>
										<td></td>
										<td width='40px'><input type='checkbox' name='26' class='single-input'></td>
										<td>Polpa exposta com vitalidade</td>
										<td width='40px'><input type='checkbox' name='27' class='single-input'></td>
										<td>Polpa exposta sem vitalidade</td>
										<td width='40px'><input type='checkbox' name='28' class='single-input'></td>
										<td>Alteração da cor da coroa dental</td>
										<td width='40px'><input type='checkbox' name='29' class='single-input'></td>
										<td>Alteração morfológica coronária</td>
									</tr>
								</table>  
								  
								<hr>
								<h5>Exame dos Dentes</h5><br>
								<table border=0>
									<tr>
										<td><b>Testes Térmicos: </b></td>
										<td width='40px'><input type='checkbox' name='30' class='single-input'></td>
										<td>Dor ao Frio</td>
										<td width='40px'><input type='checkbox' name='31' class='single-input'></td>
										<td>Dor ao Calor</td>
										<td width='40px'><input type='checkbox' name='32' class='single-input'></td>
										<td>Ausência de Dor</td>
									</tr>
									
									<tr>
										<td><b>Sensibilidade à Percussão: </b></td>
										<td width='40px'><input type='checkbox' name='33' class='single-input'></td>
										<td>Vertical</td>
										<td width='40px'><input type='checkbox' name='34' class='single-input'></td>
										<td>Horizontal</td>
									</tr>
									
									<tr>
										<td><b>Sensibilidade de Cavidade: </b></td>
										<td width='40px'><input type='checkbox' name='129' class='single-input'></td>
										<td>Presença de Dor</td>
										<td width='40px'><input type='checkbox' name='130' class='single-input'></td>
										<td>Ausência de Dor</td>
									</tr>
								</table>
								
								<hr>
								<h5>Exame Radiográfico</h5><br>
								<table border=0>								
									<tr>
										<td width='40px'><input type='checkbox' name='35' class='single-input'></td>
										<td>Periodonto Normal</td>
										<td width='40px'><input type='checkbox' name='36' class='single-input'></td>
										<td>Espessamento Periodontal</td>
										<td width='40px'><input type='checkbox' name='37' class='single-input'></td>
										<td>Lesão Perirradicular</td>
										<td width='40px'><input type='checkbox' name='38' class='single-input'></td>
										<td>Rizogênese Incompleta</td>
										<td width='40px'><input type='checkbox' name='39' class='single-input'></td>
										<td>Trepanação</td>
									</tr>
									
									<tr>
										<td width='40px'><input type='checkbox' name='40' class='single-input'></td>
										<td>Retentor Intra-Radicular</td>
										<td width='40px'><input type='checkbox' name='41' class='single-input'></td>
										<td>Instrumento Fraturado</td>
										<td width='40px'><input type='checkbox' name='42' class='single-input'></td>
										<td>T.E Insatisfatório</td>
										<td width='40px'><input type='checkbox' name='43' class='single-input'></td>
										<td>Reabsorção: Interna</td>
										<td width='40px'><input type='checkbox' name='44' class='single-input'></td>
										<td>Reabsorção: Externa</td>
									</tr>
									
									<tr>
										<td width='40px'><input type='checkbox' name='45' class='single-input'></td>
										<td>Fratura Dentária: Coronária</td>
										<td width='40px'><input type='checkbox' name='46' class='single-input'></td>
										<td>Fratura Dentária: Radicular</td>
									</tr>
								</table>  
								  
								<hr>
								<h5>Diagnóstico Clínico Provável</h5><br>
								<table border=0>
									<tr>
										<td width='40px'><input type='checkbox' name='47' class='single-input'></td>
										<td>Polpa Normal</td>
										<td width='40px'><input type='checkbox' name='48' class='single-input'></td>
										<td>Abscesso Dentoalveolar Agudo</td>
										<td width='40px'><input type='checkbox' name='49' class='single-input'></td>
										<td>Polpa Inflamada Reversivelmente</td>
										<td width='40px'><input type='checkbox' name='50' class='single-input'></td>
										<td>Polpa inflamada irreversivelmente</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='51' class='single-input'></td>
										<td>Abscesso Dentoaveolar Crônico</td>
										<td width='40px'><input type='checkbox' name='52' class='single-input'></td>
										<td>Granuloma Apical/Cisto Periodontal Apical</td>
										<td width='40px'><input type='checkbox' name='53' class='single-input'></td>
										<td>Necrose Pulpar </td>
										<td width='40px'><input type='checkbox' name='54' class='single-input'></td>
										<td>Displasia Cementária Periapical</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='55' class='single-input'></td>
										<td>Pericementite Apical Aguda </td>
										<td width='40px'><input type='checkbox' name='56' class='single-input'></td>
										<td>Pericementite Apical Crônica</td>
										<td colspan=4><input type='text' name='57' placeholder='Outras Patologias' class='single-input'></td>
									</tr>
								</table> 
								  
								<hr>
								<h5>Indicação de Tratamento</h5><br>
								<table border=0>
									<tr>
										<td width='40px'><input type='checkbox' name='58' class='single-input'></td>
										<td>Proteção Pulpar Indireta</td>
										<td width='40px'><input type='checkbox' name='59' class='single-input'></td>
										<td>Proteção Pulpar Direta </td>
										<td width='40px'><input type='checkbox' name='60' class='single-input'></td>
										<td>Tratamento de Canal </td>
										<td width='40px'><input type='checkbox' name='61' class='single-input'></td>
										<td>Retratamento de canal</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='62' class='single-input'></td>
										<td>Apicigênese</td>
										<td width='40px'><input type='checkbox' name='63' class='single-input'></td>
										<td>Apicetomia, Retropreparo e Retrobturação</td>
										<td width='40px'><input type='checkbox' name='64' class='single-input'></td>
										<td>Transplante Dentário</td>
										<td width='40px'><input type='checkbox' name='65' class='single-input'></td>
										<td>Reimplante Dentário</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='66' class='single-input'></td>
										<td>Tratamento Não-Cirúrgico de Perfuração</td>
										<td width='40px'><input type='checkbox' name='67' class='single-input'></td>
										<td>Tratamento Cirúrgico de Perfuração</td>
										<td width='40px'><input type='checkbox' name='68' class='single-input'></td>
										<td>Curetagem Apical</td>
										<td width='40px'><input type='checkbox' name='69' class='single-input'></td>
										<td>Apicificação</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='70' class='single-input'></td>
										<td>Proservação / acompanhamento</td>
									</tr>
								</table> 
								
								<hr>
								<h5>Terapêutica Sistêmica</h5>
								<br>
								<table border=0 width='100%'>
									<tr>
										<td colspan=5 style='border: 1px solid rgb(193,193,255);'><center>Odontometria</center></td>
										<td colspan=7 style='border: 1px solid rgb(193,193,255);'><center>Preparo Cirúrgico-Mecânico</center></td>
									</tr>
									<tr>
										<td><center><b>Canal</b></center></td>
										<td><center><b>CDR</b></center></td>
										<td><center><b>CP</b></center></td>
										<td><center><b>CT</b></center></td>
										<td><center><b>Ref.</b></center></td>
										<td colspan=2><center><b>Prep. Cervical</b></center></td>
										<td><center><b>IAI</b></center></td>
										<td><center><b>IM</b></center></td>
										<td><center><b>IP</b></center></td>
										<td colspan=2><center><b>Ápice / Coroa Step Back</b></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' type='text' name='71'></center></td>
										<td><center><input  class='single-input' type='text' name='72'></center></td>
										<td><center><input  class='single-input' type='text' name='73'></center></td>
										<td><center><input  class='single-input' type='text' name='74'></center></td>
										<td><center><input  class='single-input' type='text' name='75'></center></td>
										<td><center><input  class='single-input' type='text' name='76'></center></td>
										<td><center><input  class='single-input' type='text' name='77'></center></td>
										<td><center><input  class='single-input' type='text' name='78'></center></td>
										<td><center><input  class='single-input' type='text' name='79'></center></td>
										<td><center><input  class='single-input' type='text' name='80'></center></td>
										<td><center><input  class='single-input' type='text' name='81'></center></td>
										<td><center><input  class='single-input' type='text' name='82'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' type='text' name='83'></center></td>
										<td><center><input  class='single-input' type='text' name='84'></center></td>
										<td><center><input  class='single-input' type='text' name='85'></center></td>
										<td><center><input  class='single-input' type='text' name='86'></center></td>
										<td><center><input  class='single-input' type='text' name='87'></center></td>
										<td><center><input  class='single-input' type='text' name='88'></center></td>
										<td><center><input  class='single-input' type='text' name='89'></center></td>
										<td><center><input  class='single-input' type='text' name='90'></center></td>
										<td><center><input  class='single-input' type='text' name='91'></center></td>
										<td><center><input  class='single-input' type='text' name='92'></center></td>
										<td><center><input  class='single-input' type='text' name='93'></center></td>
										<td><center><input  class='single-input' type='text' name='94'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' type='text' name='95'></center></td>
										<td><center><input  class='single-input' type='text' name='96'></center></td>
										<td><center><input  class='single-input' type='text' name='97'></center></td>
										<td><center><input  class='single-input' type='text' name='98'></center></td>
										<td><center><input  class='single-input' type='text' name='99'></center></td>
										<td><center><input  class='single-input' type='text' name='100'></center></td>
										<td><center><input  class='single-input' type='text' name='101'></center></td>
										<td><center><input  class='single-input' type='text' name='102'></center></td>
										<td><center><input  class='single-input' type='text' name='103'></center></td>
										<td><center><input  class='single-input' type='text' name='104'></center></td>
										<td><center><input  class='single-input' type='text' name='105'></center></td>
										<td><center><input  class='single-input' type='text' name='106'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' type='text' name='107'></center></td>
										<td><center><input  class='single-input' type='text' name='108'></center></td>
										<td><center><input  class='single-input' type='text' name='109'></center></td>
										<td><center><input  class='single-input' type='text' name='110'></center></td>
										<td><center><input  class='single-input' type='text' name='111'></center></td>
										<td><center><input  class='single-input' type='text' name='112'></center></td>
										<td><center><input  class='single-input' type='text' name='113'></center></td>
										<td><center><input  class='single-input' type='text' name='114'></center></td>
										<td><center><input  class='single-input' type='text' name='115'></center></td>
										<td><center><input  class='single-input' type='text' name='116'></center></td>
										<td><center><input  class='single-input' type='text' name='117'></center></td>
										<td><center><input  class='single-input' type='text' name='118'></center></td>
									</tr>
								</table>
								<br>
								<table border=0>
									<tr>
										<td><b>Solução Química Irrigadora/Concentração:</b></td>
										<td width='100%'><input type='TEXT' name='119' class='single-input'></td>
									</tr>
								</table>
								<table border=0>
									<tr>
										<td><b>Medicação intracanal:</b></td>
										<td width='100%'><input type='TEXT' name='120' class='single-input'></td>
									</tr>
									<tr>
										<td><b>Cimento Obturador:</b></td>
										<td width='100%'><input type='TEXT' name='121' class='single-input'></td>
									</tr>
								</table>
								<br>
								<table>
									<tr>
										<td><b>Técnica de Obturação:</b></td>
										<td width='40px'><input type='checkbox' name='122' class='single-input'></td>
										<td>Schilder</td>
										<td width='40px'><input type='checkbox' name='123' class='single-input'></td>
										<td>Híbrida Tagger </td>
										<td width='40px'><input type='checkbox' name='124' class='single-input'></td>
										<td>Condensação Lateral</td>
									</tr>
									<tr>
										<td><b>Técnica de Instrumentação:</b></td>
										<td width='40px'><input type='checkbox' name='125' class='single-input'></td>
										<td>Escalonamento Apice-Coroa</td>
										<td width='40px'><input type='checkbox' name='126' class='single-input'></td>
										<td>Outro</td>
									</tr>
									<tr>
										<td><b>Odontometria:</b></td>
										<td width='40px'><input type='checkbox' name='127' class='single-input'></td>
										<td>Técnica Radiográfica</td>
										<td width='40px'><input type='checkbox' name='128' class='single-input'></td>
										<td>Técnica Radiográfica Auxiliada por Localizador Apical</td>
									</tr>
								</table>

								<hr>
								<h5>Repetir Endodontia:</h5><br>
								<table width='100%'>
									 <tr>
										<td>
										   <center><input type='checkbox' name='repetir17'> 17</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir16'> 16</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir15'> 15</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir14'> 14</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir13'> 13</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir12'> 12</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir11'> 11</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir21'> 21</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir22'> 22</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir23'> 23</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir24'> 24</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir25'> 25</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir26'> 26</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir27'> 27</center>
										</td>
									 </tr>
									 <tr>
										<td>
										   <center><input type='checkbox' name='repetir47'> 47</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir46'> 46</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir45'> 45</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir44'> 44</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir43'> 43</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir42'> 42</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir41'> 41</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir31'> 31</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir32'> 32</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir33'> 33</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir34'> 34</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir35'> 35</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir36'> 36</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir37'> 37</center>
										</td>
									 </tr>
									</table>
								<hr>
								<center><input type='submit' value='Salvar' class='genric-btn primary'></center>
								<input type='hidden' name='retratamento' value='1'>
							</form>

							
						<?php	
							
						}else{
							while($linhaAnam = mysql_fetch_array($resultadoAnam)){
								$id = $linhaAnam['nr_idEndodontia'];
								$dupla = $linhaAnam['nr_idDupla'];
								$data = $linhaAnam['dt_preenchimento'];
								$r1 = $linhaAnam['1'];
								$r2 = $linhaAnam['2']; 
								$r3 = $linhaAnam['3']; 
								$r4 = $linhaAnam['4']; 
								$r5 = $linhaAnam['5']; 
								$r6 = $linhaAnam['6']; 
								$r7 = $linhaAnam['7']; 
								$r8 = $linhaAnam['8']; 
								$r9 = $linhaAnam['9']; 
								$r10 = $linhaAnam['10']; 
								$r11 = $linhaAnam['11']; 
								$r12 = $linhaAnam['12']; 
								$r13 = $linhaAnam['13']; 
								$r14 = $linhaAnam['14']; 
								$r15 = $linhaAnam['15']; 
								$r16 = $linhaAnam['16']; 
								$r17 = $linhaAnam['17']; 
								$r18 = $linhaAnam['18']; 
								$r19 = $linhaAnam['19']; 
								$r20 = $linhaAnam['20']; 
								$r21 = $linhaAnam['21']; 
								$r22 = $linhaAnam['22']; 
								$r23 = $linhaAnam['23']; 
								$r24 = $linhaAnam['24']; 
								$r25 = $linhaAnam['25']; 
								$r26 = $linhaAnam['26']; 
								$r27 = $linhaAnam['27']; 
								$r28 = $linhaAnam['28']; 
								$r29 = $linhaAnam['29']; 
								$r30 = $linhaAnam['30']; 
								$r31 = $linhaAnam['31']; 
								$r32 = $linhaAnam['32']; 
								$r33 = $linhaAnam['33']; 
								$r34 = $linhaAnam['34']; 
								$r35 = $linhaAnam['35']; 
								$r36 = $linhaAnam['36']; 
								$r37 = $linhaAnam['37']; 
								$r38 = $linhaAnam['38']; 
								$r39 = $linhaAnam['39']; 
								$r40 = $linhaAnam['40']; 
								$r41 = $linhaAnam['41']; 
								$r42 = $linhaAnam['42']; 
								$r43 = $linhaAnam['43']; 
								$r44 = $linhaAnam['44']; 
								$r45 = $linhaAnam['45']; 
								$r46 = $linhaAnam['46']; 
								$r47 = $linhaAnam['47']; 
								$r48 = $linhaAnam['48']; 
								$r49 = $linhaAnam['49']; 
								$r50 = $linhaAnam['50']; 
								$r51 = $linhaAnam['51']; 
								$r52 = $linhaAnam['52']; 
								$r53 = $linhaAnam['53']; 
								$r54 = $linhaAnam['54']; 
								$r55 = $linhaAnam['55']; 
								$r56 = $linhaAnam['56']; 
								$r57 = $linhaAnam['57']; 
								$r58 = $linhaAnam['58']; 
								$r59 = $linhaAnam['59']; 
								$r60 = $linhaAnam['60']; 
								$r61 = $linhaAnam['61']; 
								$r62 = $linhaAnam['62']; 
								$r63 = $linhaAnam['63']; 
								$r64 = $linhaAnam['64']; 
								$r65 = $linhaAnam['65']; 
								$r66 = $linhaAnam['66']; 
								$r67 = $linhaAnam['67']; 
								$r68 = $linhaAnam['68']; 
								$r69 = $linhaAnam['69']; 
								$r70 = $linhaAnam['70']; 
								$r71 = $linhaAnam['71']; 
								$r72 = $linhaAnam['72']; 
								$r73 = $linhaAnam['73']; 
								$r74 = $linhaAnam['74']; 
								$r75 = $linhaAnam['75']; 
								$r76 = $linhaAnam['76']; 
								$r77 = $linhaAnam['77']; 
								$r78 = $linhaAnam['78']; 
								$r79 = $linhaAnam['79']; 
								$r80 = $linhaAnam['80']; 
								$r81 = $linhaAnam['81']; 
								$r82 = $linhaAnam['82']; 
								$r83 = $linhaAnam['83']; 
								$r84 = $linhaAnam['84']; 
								$r85 = $linhaAnam['85']; 
								$r86 = $linhaAnam['86']; 
								$r87 = $linhaAnam['87']; 
								$r88 = $linhaAnam['88']; 
								$r89 = $linhaAnam['89']; 
								$r90 = $linhaAnam['90']; 
								$r91 = $linhaAnam['91']; 
								$r92 = $linhaAnam['92']; 
								$r93 = $linhaAnam['93']; 
								$r94 = $linhaAnam['94']; 
								$r95 = $linhaAnam['95']; 
								$r96 = $linhaAnam['96']; 
								$r97 = $linhaAnam['97']; 
								$r98 = $linhaAnam['98']; 
								$r99 = $linhaAnam['99']; 
								$r100 = $linhaAnam['100']; 
								$r101 = $linhaAnam['101']; 
								$r102 = $linhaAnam['102']; 
								$r103 = $linhaAnam['103']; 
								$r104 = $linhaAnam['104']; 
								$r105 = $linhaAnam['105']; 
								$r106 = $linhaAnam['106']; 
								$r107 = $linhaAnam['107']; 
								$r108 = $linhaAnam['108']; 
								$r109 = $linhaAnam['109']; 
								$r110 = $linhaAnam['110']; 
								$r111 = $linhaAnam['111']; 
								$r112 = $linhaAnam['112']; 
								$r113 = $linhaAnam['113']; 
								$r114 = $linhaAnam['114']; 
								$r115 = $linhaAnam['115']; 
								$r116 = $linhaAnam['116']; 
								$r117 = $linhaAnam['117']; 
								$r118 = $linhaAnam['118']; 
								$r119 = $linhaAnam['119']; 
								$r120 = $linhaAnam['120']; 
								$r121 = $linhaAnam['121']; 
								$r122 = $linhaAnam['122']; 
								$r123 = $linhaAnam['123']; 
								$r124 = $linhaAnam['124']; 
								$r125 = $linhaAnam['125']; 
								$r126 = $linhaAnam['126']; 
								$r127 = $linhaAnam['127']; 
								$r128 = $linhaAnam['128']; 
								$r129 = $linhaAnam['129']; 
								$r130 = $linhaAnam['130']; 
							}
							
						?>	
							<form method='POST' action='atualizarEndo.php'>
								<input type='hidden' name='id' value='<?php echo $id; ?>'
								<!-- ############################################################## impressão endo 1 -->
								<b>Dupla Responsável: </b>
								<select class='single-input' name='dupla'>
								<?php
									
									echo $sql = "SELECT * FROM tb_duplas WHERE nr_idDupla = ".$dupla." LIMIT 1";
									$resultado = mysql_query($sql) or die();
									while($linha = mysql_fetch_array($resultado)){
										
										$sqlNome1 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linha['nr_cpf1']."'";
										$resultadoNome1 = mysql_query($sqlNome1) or die();
										while($linhaNome1 = mysql_fetch_array($resultadoNome1)){
											$Nome1 = $linhaNome1['nm_nomeAluno']; 
											$periodo = $linhaNome1['nr_periodo']; 
										}
										
										$sqlNome2 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linha['nr_cpf2']."'";
										$resultadoNome2 = mysql_query($sqlNome2) or die();
										while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
											$Nome2 = $linhaNome2['nm_nomeAluno']; 
										}
										
										
										echo "<option value='".$linha['nr_idDupla']."'>".$Nome1." e ".$Nome2." (".$periodo."º Periodo)</option>";
									}
									
									
									$sqlNome = "SELECT * FROM tb_duplas WHERE nm_situacao = 'Ativo'";
									$resultadoNome = mysql_query($sqlNome) or die();
									while($linhaNome = mysql_fetch_array($resultadoNome)){
										if($linhaNome['nr_idDupla'] != $dupla){
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
									}
								?>
								</select><br>
								
								
								
								<b>Data do Preenchimento: </b><input type='text' name='data' class='single-input' value='<?php echo $data; ?>'><br>
								<b>Queixa Principal: </b><input type='text' name='1' class='single-input' value='<?php echo $r1; ?>'>
								<input type='hidden' name='2' value='<?php echo $c; ?>_1' class='single-input'>
								<input type='hidden' name='cpf' value='<?php echo $_GET['cpf']; ?>' class='single-input'>
								
								<hr>
								<br>
								<h5>Semiologia Subjetiva – Características Clínicas da Dor</h5><br>
								<table border=0>
									<tr>
										<td><b>Sede: </b></td>
										<td width='40px'><input type='checkbox' name='3' class='single-input'  value='<?php echo $r3; ?>' <?php echo $r3; ?>></td>
										<td>Localizada</td>
										<td width='40px'><input type='checkbox' name='4' class='single-input'  value='<?php echo $r4; ?>' <?php echo $r4; ?>></td>
										<td>Difusa</td>
									</tr>
									
									
									<tr>	
										<td><b>Aparecimento: </b></td>
										<td width='40px'><input type='checkbox' name='5' class='single-input' value='<?php echo $r5; ?>' <?php echo $r5; ?>></td>
										<td>Provocada</td>
										<td width='40px'><input type='checkbox' name='6' class='single-input' value='<?php echo $r6; ?>' <?php echo $r6; ?>></td>
										<td style='margin-rigth:10px;'>Espontânea</td>
									</tr>
									
									
									<tr>
										<td><b>Duração: </b></td>
										<td width='40px'><input type='checkbox' name='7' class='single-input' value='<?php echo $r7; ?>' <?php echo $r7; ?>></td>
										<td>Curta</td>
										<td width='40px'><input type='checkbox' name='8' class='single-input' value='<?php echo $r8; ?>' <?php echo $r8; ?>></td>
										<td>Longa</td>
									</tr>
									
									
									<tr>
										<td><b>Frequência: </b></td>
										<td width='40px'><input type='checkbox' name='9' class='single-input' value='<?php echo $r9; ?>' <?php echo $r9; ?>></td>
										<td>Intermitente</td>
										<td width='40px'><input type='checkbox' name='10' class='single-input' value='<?php echo $r10; ?>' <?php echo $r10; ?>></td>
										<td>Contínua</td>
									</tr>
									
									<tr>
										<td><b>Intensidade: </b></td>
										<td width='40px'><input type='checkbox' name='11' class='single-input' value='<?php echo $r11; ?>' <?php echo $r11; ?>></td>
										<td>Leve</td>
										<td width='40px'><input type='checkbox' name='12' class='single-input' value='<?php echo $r12; ?>' <?php echo $r12; ?>></td>
										<td>Moderada</td>
										<td width='40px'><input type='checkbox' name='13' class='single-input' value='<?php echo $r13; ?>' <?php echo $r13; ?>></td>
										<td>Severa</td>
									</tr>
								</table>
								
								<hr>
								<h5>Semiologia Objetiva</h5><br>
								<table border=0>
									<tr>
										<td><b>Mucosa Gengival: </b></td>
										<td width='40px'><input type='checkbox' name='14' class='single-input' value='<?php echo $r14; ?>' <?php echo $r14; ?>></td>
										<td>Normal</td>
										<td width='40px'><input type='checkbox' name='15' class='single-input' value='<?php echo $r15; ?>' <?php echo $r15; ?>></td>
										<td>Doença Periodontal</td>
										<td width='40px'><input type='checkbox' name='16' class='single-input' value='<?php echo $r16; ?>' <?php echo $r16; ?>></td>
										<td>Presença de Fístula</td>
										<td width='40px'><input type='checkbox' name='17' class='single-input' value='<?php echo $r17; ?>' <?php echo $r17; ?>></td>
										<td>Presença de Tumefação</td>
									</tr>
								</table>	
								<table>	
									<tr>
										<td width='190px;'><b>Sensibilidade a Palpação: </b></td>
										<td width='40px'><input type='checkbox' name='18' class='single-input' value='<?php echo $r18; ?>' <?php echo $r18; ?>></td>
										<td>Presença de Dor</td>
										<td width='40px'><input type='checkbox' name='19' class='single-input' value='<?php echo $r19; ?>' <?php echo $r19; ?>></td>
										<td>Ausência de Dor</td>
									</tr>
								</table>	
								<table>		
									<tr>
										<td><b>Mobilidade: </b></td>
										<td width='40px'><input type='checkbox' name='20' class='single-input' value='<?php echo $r20; ?>' <?php echo $r20; ?>></td>
										<td>Normal</td>
										<td width='40px'><input type='checkbox' name='21' class='single-input' value='<?php echo $r21; ?>' <?php echo $r21; ?>></td>
										<td>Acentuada</td>
									</tr>
									
									<tr>
										<td><b>Inspeção: </b></td>
										<td width='40px'><input type='checkbox' name='22' class='single-input' value='<?php echo $r22; ?>' <?php echo $r22; ?>></td>
										<td>Coroa íntegra</td>
										<td width='40px'><input type='checkbox' name='23' class='single-input' value='<?php echo $r23; ?>' <?php echo $r23; ?>></td>
										<td>Presença de restaurações</td>
										<td width='40px'><input type='checkbox' name='24' class='single-input' value='<?php echo $r24; ?>' <?php echo $r24; ?>></td>
										<td>Presença de cárie</td>
										<td width='40px'><input type='checkbox' name='25' class='single-input' value='<?php echo $r25; ?>' <?php echo $r25; ?>></td>
										<td>Presença de fratura</td>
									</tr>
									
									<tr>
										<td></td>
										<td width='40px'><input type='checkbox' name='26' class='single-input' value='<?php echo $r26; ?>' <?php echo $r26; ?>></td>
										<td>Polpa exposta com vitalidade</td>
										<td width='40px'><input type='checkbox' name='27' class='single-input' value='<?php echo $r27; ?>' <?php echo $r27; ?>></td>
										<td>Polpa exposta sem vitalidade</td>
										<td width='40px'><input type='checkbox' name='28' class='single-input' value='<?php echo $r28; ?>' <?php echo $r28; ?>></td>
										<td>Alteração da cor da coroa dental</td>
										<td width='40px'><input type='checkbox' name='29' class='single-input' value='<?php echo $r29; ?>' <?php echo $r29; ?>></td>
										<td>Alteração morfológica coronária</td>
									</tr>
								</table>  
								  
								<hr>
								<h5>Exame dos Dentes</h5><br>
								<table border=0>
									<tr>
										<td><b>Testes Térmicos: </b></td>
										<td width='40px'><input type='checkbox' name='30' class='single-input' value='<?php echo $r30; ?>' <?php echo $r30; ?>></td>
										<td>Dor ao Frio</td>
										<td width='40px'><input type='checkbox' name='31' class='single-input' value='<?php echo $r31; ?>' <?php echo $r31; ?>></td>
										<td>Dor ao Calor</td>
										<td width='40px'><input type='checkbox' name='32' class='single-input' value='<?php echo $r32; ?>' <?php echo $r32; ?>></td>
										<td>Ausência de Dor</td>
									</tr>
									
									<tr>
										<td><b>Sensibilidade à Percussão: </b></td>
										<td width='40px'><input type='checkbox' name='33' class='single-input' value='<?php echo $r33; ?>' <?php echo $r33; ?>></td>
										<td>Vertical</td>
										<td width='40px'><input type='checkbox' name='34' class='single-input' value='<?php echo $r34; ?>' <?php echo $r34; ?>></td>
										<td>Horizontal</td>
									</tr>
									
									<tr>
										<td><b>Sensibilidade de Cavidade: </b></td>
										<td width='40px'><input type='checkbox' name='129' class='single-input' value='<?php echo $r129; ?>' <?php echo $r129; ?>></td>
										<td>Presença de Dor</td>
										<td width='40px'><input type='checkbox' name='130' class='single-input' value='<?php echo $r130; ?>' <?php echo $r130; ?>></td>
										<td>Ausência de Dor</td>
									</tr>
								</table>
									
								<hr>
								<h5>Exame Radiográfico</h5><br>
								<table border=0>	
									<tr>
										<td width='40px'><input type='checkbox' name='35' class='single-input' value='<?php echo $r35; ?>' <?php echo $r35; ?>></td>
										<td>Periodonto Normal</td>
										<td width='40px'><input type='checkbox' name='36' class='single-input' value='<?php echo $r36; ?>' <?php echo $r36; ?>></td>
										<td>Espessamento Periodontal</td>
										<td width='40px'><input type='checkbox' name='37' class='single-input' value='<?php echo $r37; ?>' <?php echo $r37; ?>></td>
										<td>Lesão Perirradicular</td>
										<td width='40px'><input type='checkbox' name='38' class='single-input' value='<?php echo $r38; ?>' <?php echo $r38; ?>></td>
										<td>Rizogênese Incompleta</td>
										<td width='40px'><input type='checkbox' name='39' class='single-input' value='<?php echo $r39; ?>' <?php echo $r39; ?>></td>
										<td>Trepanação</td>
									</tr>
									
									<tr>
										<td width='40px'><input type='checkbox' name='40' class='single-input' value='<?php echo $r40; ?>' <?php echo $r40; ?>></td>
										<td>Retentor Intra-Radicular</td>
										<td width='40px'><input type='checkbox' name='41' class='single-input' value='<?php echo $r41; ?>' <?php echo $r41; ?>></td>
										<td>Instrumento Fraturado</td>
										<td width='40px'><input type='checkbox' name='42' class='single-input' value='<?php echo $r42; ?>' <?php echo $r42; ?>></td>
										<td>T.E Insatisfatório</td>
										<td width='40px'><input type='checkbox' name='43' class='single-input' value='<?php echo $r43; ?>' <?php echo $r43; ?>></td>
										<td>Reabsorção: Interna</td>
										<td width='40px'><input type='checkbox' name='44' class='single-input' value='<?php echo $r44; ?>' <?php echo $r44; ?>></td>
										<td>Reabsorção: Externa</td>
									</tr>
									
									<tr>
										<td width='40px'><input type='checkbox' name='45' class='single-input' value='<?php echo $r45; ?>' <?php echo $r45; ?>></td>
										<td>Fratura Dentária: Coronária</td>
										<td width='40px'><input type='checkbox' name='46' class='single-input' value='<?php echo $r46; ?>' <?php echo $r46; ?>></td>
										<td>Fratura Dentária: Radicular</td>
									</tr>
								</table>  
								  
								<hr>
								<h5>Diagnóstico Clínico Provável</h5><br>
								<table border=0>
									<tr>
										<td width='40px'><input type='checkbox' name='47' class='single-input' value='<?php echo $r47; ?>' <?php echo $r47; ?>></td>
										<td>Polpa Normal</td>
										<td width='40px'><input type='checkbox' name='48' class='single-input' value='<?php echo $r48; ?>' <?php echo $r48; ?>></td>
										<td>Abscesso Dentoalveolar Agudo</td>
										<td width='40px'><input type='checkbox' name='49' class='single-input' value='<?php echo $r49; ?>' <?php echo $r49; ?>></td>
										<td>Polpa Inflamada Reversivelmente</td>
										<td width='40px'><input type='checkbox' name='50' class='single-input' value='<?php echo $r50; ?>' <?php echo $r50; ?>></td>
										<td>Polpa inflamada irreversivelmente</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='51' class='single-input' value='<?php echo $r51; ?>' <?php echo $r51; ?>></td>
										<td>Abscesso Dentoaveolar Crônico</td>
										<td width='40px'><input type='checkbox' name='52' class='single-input' value='<?php echo $r52; ?>' <?php echo $r52; ?>></td>
										<td>Granuloma Apical/Cisto Periodontal Apical</td>
										<td width='40px'><input type='checkbox' name='53' class='single-input' value='<?php echo $r53; ?>' <?php echo $r53; ?>></td>
										<td>Necrose Pulpar </td>
										<td width='40px'><input type='checkbox' name='54' class='single-input' value='<?php echo $r54; ?>' <?php echo $r54; ?>></td>
										<td>Displasia Cementária Periapical</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='55' class='single-input' value='<?php echo $r55; ?>' <?php echo $r55; ?>></td>
										<td>Pericementite Apical Aguda </td>
										<td width='40px'><input type='checkbox' name='56' class='single-input' value='<?php echo $r56; ?>' <?php echo $r56; ?>></td>
										<td>Pericementite Apical Crônica</td>
										<td colspan=4><input type='text' name='57' placeholder='Outras Patologias' class='single-input' value='<?php echo $r57; ?>'></td>
									</tr>
								</table> 
								  
								<hr>
								<h5>Indicação de Tratamento</h5><br>
								<table border=0>
									<tr>
										<td width='40px'><input type='checkbox' name='58' class='single-input' value='<?php echo $r58; ?>' <?php echo $r58; ?>></td>
										<td>Proteção Pulpar Indireta</td>
										<td width='40px'><input type='checkbox' name='59' class='single-input' value='<?php echo $r59; ?>' <?php echo $r59; ?>></td>
										<td>Proteção Pulpar Direta </td>
										<td width='40px'><input type='checkbox' name='60' class='single-input' value='<?php echo $r60; ?>' <?php echo $r60; ?>></td>
										<td>Tratamento de Canal </td>
										<td width='40px'><input type='checkbox' name='61' class='single-input' value='<?php echo $r61; ?>' <?php echo $r61; ?>></td>
										<td>Retratamento de canal</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='62' class='single-input' value='<?php echo $r62; ?>' <?php echo $r62; ?>></td>
										<td>Apicigênese</td>
										<td width='40px'><input type='checkbox' name='63' class='single-input' value='<?php echo $r63; ?>' <?php echo $r63; ?>></td>
										<td>Apicetomia, Retropreparo e Retrobturação</td>
										<td width='40px'><input type='checkbox' name='64' class='single-input' value='<?php echo $r64; ?>' <?php echo $r64; ?>></td>
										<td>Transplante Dentário</td>
										<td width='40px'><input type='checkbox' name='65' class='single-input' value='<?php echo $r65; ?>' <?php echo $r65; ?>></td>
										<td>Reimplante Dentário</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='66' class='single-input' value='<?php echo $r66; ?>' <?php echo $r66; ?>></td>
										<td>Tratamento Não-Cirúrgico de Perfuração</td>
										<td width='40px'><input type='checkbox' name='67' class='single-input' value='<?php echo $r67; ?>' <?php echo $r67; ?>></td>
										<td>Tratamento Cirúrgico de Perfuração</td>
										<td width='40px'><input type='checkbox' name='68' class='single-input' value='<?php echo $r68; ?>' <?php echo $r68; ?>></td>
										<td>Curetagem Apical</td>
										<td width='40px'><input type='checkbox' name='69' class='single-input' value='<?php echo $r69; ?>' <?php echo $r69; ?>></td>
										<td>Apicificação</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='70' class='single-input' value='<?php echo $r70; ?>' <?php echo $r70; ?>></td>
										<td>Proservação / acompanhamento</td>
									</tr>
								</table> 
								
								<hr>
								<h5>Terapêutica Sistêmica</h5>
								<br>
								<table border=0 width='100%'>
									<tr>
										<td colspan=5 style='border: 1px solid rgb(193,193,255);'><center>Odontometria</center></td>
										<td colspan=7 style='border: 1px solid rgb(193,193,255);'><center>Preparo Cirúrgico-Mecânico</center></td>
									</tr>
									<tr>
										<td><center><b>Canal</b></center></td>
										<td><center><b>CDR</b></center></td>
										<td><center><b>CP</b></center></td>
										<td><center><b>CT</b></center></td>
										<td><center><b>Ref.</b></center></td>
										<td colspan=2><center><b>Prep. Cervical</b></center></td>
										<td><center><b>IAI</b></center></td>
										<td><center><b>IM</b></center></td>
										<td><center><b>IP</b></center></td>
										<td colspan=2><center><b>Ápice / Coroa Step Back</b></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' value='<?php echo $r71; ?>' type='text' name='71'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r72; ?>' type='text' name='72'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r73; ?>' type='text' name='73'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r74; ?>' type='text' name='74'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r75; ?>' type='text' name='75'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r76; ?>' type='text' name='76'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r77; ?>' type='text' name='77'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r78; ?>' type='text' name='78'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r79; ?>' type='text' name='79'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r80; ?>' type='text' name='80'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r81; ?>' type='text' name='81'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r82; ?>' type='text' name='82'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' value='<?php echo $r83; ?>' type='text' name='83'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r84; ?>' type='text' name='84'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r85; ?>' type='text' name='85'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r86; ?>' type='text' name='86'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r87; ?>' type='text' name='87'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r88; ?>' type='text' name='88'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r89; ?>' type='text' name='89'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r90; ?>' type='text' name='90'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r91; ?>' type='text' name='91'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r92; ?>' type='text' name='92'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r93; ?>' type='text' name='93'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r94; ?>' type='text' name='94'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' value='<?php echo $r95; ?>' type='text' name='95'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r96; ?>' type='text' name='96'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r97; ?>' type='text' name='97'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r98; ?>' type='text' name='98'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r99; ?>' type='text' name='99'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r100; ?>' type='text' name='100'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r101; ?>' type='text' name='101'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r102; ?>' type='text' name='102'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r103; ?>' type='text' name='103'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r104; ?>' type='text' name='104'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r105; ?>' type='text' name='105'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r106; ?>' type='text' name='106'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' value='<?php echo $r107; ?>' type='text' name='107'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r108; ?>' type='text' name='108'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r109; ?>' type='text' name='109'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r110; ?>' type='text' name='110'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r111; ?>' type='text' name='111'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r112; ?>' type='text' name='112'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r113; ?>' type='text' name='113'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r114; ?>' type='text' name='114'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r115; ?>' type='text' name='115'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r116; ?>' type='text' name='116'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r117; ?>' type='text' name='117'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r118; ?>' type='text' name='118'></center></td>
									</tr>
								</table>
								<br>
								<table border=0>
									<tr>
										<td><b>Solução Química Irrigadora/Concentração:</b></td>
										<td width='100%'><input type='TEXT' name='119' class='single-input' value='<?php echo $r119; ?>'></td>
									</tr>
								</table>
								<table border=0>
									<tr>
										<td><b>Medicação intracanal:</b></td>
										<td width='100%'><input type='TEXT' name='120' class='single-input' value='<?php echo $r120; ?>'></td>
									</tr>
									<tr>
										<td><b>Cimento Obturador:</b></td>
										<td width='100%'><input type='TEXT' name='121' class='single-input' value='<?php echo $r121; ?>'></td>
									</tr>
								</table>
								<br>
								<table>
									<tr>
										<td><b>Técnica de Obturação:</b></td>
										<td width='40px'><input type='checkbox' name='122' class='single-input' value='<?php echo $r122; ?>' <?php echo $r122; ?>></td>
										<td>Schilder</td>
										<td width='40px'><input type='checkbox' name='123' class='single-input' value='<?php echo $r123; ?>' <?php echo $r123; ?>></td>
										<td>Híbrida Tagger </td>
										<td width='40px'><input type='checkbox' name='124' class='single-input' value='<?php echo $r124; ?>' <?php echo $r124; ?>></td>
										<td>Condensação Lateral</td>
									</tr>
									<tr>
										<td><b>Técnica de Instrumentação:</b></td>
										<td width='40px'><input type='checkbox' name='125' class='single-input' value='<?php echo $r125; ?>' <?php echo $r125; ?>></td>
										<td>Escalonamento Apice-Coroa</td>
										<td width='40px'><input type='checkbox' name='126' class='single-input' value='<?php echo $r126; ?>' <?php echo $r126; ?>></td>
										<td>Outro</td>
									</tr>
									<tr>
										<td><b>Odontometria:</b></td>
										<td width='40px'><input type='checkbox' name='127' class='single-input' value='<?php echo $r127; ?>' <?php echo $r127; ?>></td>
										<td>Técnica Radiográfica</td>
										<td width='40px'><input type='checkbox' name='128' class='single-input' value='<?php echo $r128; ?>' <?php echo $r128; ?>></td>
										<td>Técnica Radiográfica Auxiliada por Localizador Apical</td>
									</tr>
								</table>
								<br>
								<center>
									<input type='submit' value='Atualizar' class='genric-btn primary'>
									<a href='excluirEndo.php?id=<?php echo $id; ?>' class='genric-btn secondary'>Excluir</a>
								</center>
							</form>
							
						<?php	
							
							
						}
						
						
						?>
						
						
						
						
						
						
						
					  </div>
					</div>

				  </div>
				  <!-- Accordion card -->

				  <!-- Accordion card -->
				  <div class="card">

					<!-- Card header -->
					<div class="card-header" role="tab" id="headingTwo<?php echo $c; ?>">
					  <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo<?php echo $c; ?>"
						aria-expanded="false" aria-controls="collapseTwo<?php echo $c; ?>">
						<h5 class="mb-0">
						  Dente <?php echo $c; ?> - Retratamento
						</h5>
					  </a>
					</div>

					<!-- Card body -->
					<div id="collapseTwo<?php echo $c; ?>" class="collapse" role="tabpanel" aria-labelledby="headingTwo<?php echo $c; ?>"
					  data-parent="#accordionEx">
					  <div class="card-body">
						
						<?php
						
						$sqlAnam = "SELECT * FROM `tb_endodontia` WHERE `nr_cpfPaciente` = '".$_GET['cpf']."' AND `2` = '".$c."_2'";
						$resultadoAnam = mysql_query($sqlAnam) or die();
						$numImg = mysql_num_rows($resultadoAnam);
						if($numImg == 0){
							
						?>	
							
							<!-- ###################################################################################### CADASTRO ENDO 2 -->
							<form method='POST' action='inserirEndo.php'>
								<input type='hidden' name='retratamento' value='2'>
								<b>Dupla Responsável:</b>
								<select class='single-input' name='dupla'>
								<?php
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
								?>
								</select><br>
							
								<b>Queixa Principal: </b><input type='text' name='1' class='single-input' placeholder='Queixa Principal'>
								<input type='hidden' name='2' value='<?php echo $c; ?>_2' class='single-input'>
								<input type='hidden' name='cpf' value='<?php echo $_GET['cpf']; ?>' class='single-input'>
								
								<hr>
								<br>
								<h5>Semiologia Subjetiva – Características Clínicas da Dor</h5><br>
								<table border=0>
									<tr>
										<td><b>Sede: </b></td>
										<td width='40px'><input type='checkbox' name='3' class='single-input'></td>
										<td>Localizada</td>
										<td width='40px'><input type='checkbox' name='4' class='single-input'></td>
										<td>Difusa</td>
									</tr>
									
									
									<tr>	
										<td><b>Aparecimento: </b></td>
										<td width='40px'><input type='checkbox' name='5' class='single-input'></td>
										<td>Provocada</td>
										<td width='40px'><input type='checkbox' name='6' class='single-input'></td>
										<td style='margin-rigth:10px;'>Espontânea</td>
									</tr>
									
									
									<tr>
										<td><b>Duração: </b></td>
										<td width='40px'><input type='checkbox' name='7' class='single-input'></td>
										<td>Curta</td>
										<td width='40px'><input type='checkbox' name='8' class='single-input'></td>
										<td>Longa</td>
									</tr>
									
									
									<tr>
										<td><b>Frequência: </b></td>
										<td width='40px'><input type='checkbox' name='9' class='single-input'></td>
										<td>Intermitente</td>
										<td width='40px'><input type='checkbox' name='10' class='single-input'></td>
										<td>Contínua</td>
									</tr>
									
									<tr>
										<td><b>Intensidade: </b></td>
										<td width='40px'><input type='checkbox' name='11' class='single-input'></td>
										<td>Leve</td>
										<td width='40px'><input type='checkbox' name='12' class='single-input'></td>
										<td>Moderada</td>
										<td width='40px'><input type='checkbox' name='13' class='single-input'></td>
										<td>Severa</td>
									</tr>
								</table>
								
								<hr>
								<h5>Semiologia Objetiva</h5><br>
								<table border=0>
									<tr>
										<td><b>Mucosa Gengival: </b></td>
										<td width='40px'><input type='checkbox' name='14' class='single-input'></td>
										<td>Normal</td>
										<td width='40px'><input type='checkbox' name='15' class='single-input'></td>
										<td>Doença Periodontal</td>
										<td width='40px'><input type='checkbox' name='16' class='single-input'></td>
										<td>Presença de Fístula</td>
										<td width='40px'><input type='checkbox' name='17' class='single-input'></td>
										<td>Presença de Tumefação</td>
									</tr>
								</table>	
								<table>	
									<tr>
										<td width='190px;'><b>Sensibilidade a Palpação: </b></td>
										<td width='40px'><input type='checkbox' name='18' class='single-input'></td>
										<td>Presença de Dor</td>
										<td width='40px'><input type='checkbox' name='19' class='single-input'></td>
										<td>Ausência de Dor</td>
									</tr>
								</table>	
								<table>		
									<tr>
										<td><b>Mobilidade: </b></td>
										<td width='40px'><input type='checkbox' name='20' class='single-input'></td>
										<td>Normal</td>
										<td width='40px'><input type='checkbox' name='21' class='single-input'></td>
										<td>Acentuada</td>
									</tr>
									
									<tr>
										<td><b>Inspeção: </b></td>
										<td width='40px'><input type='checkbox' name='22' class='single-input'></td>
										<td>Coroa íntegra</td>
										<td width='40px'><input type='checkbox' name='23' class='single-input'></td>
										<td>Presença de restaurações</td>
										<td width='40px'><input type='checkbox' name='24' class='single-input'></td>
										<td>Presença de cárie</td>
										<td width='40px'><input type='checkbox' name='25' class='single-input'></td>
										<td>Presença de fratura</td>
									</tr>
									
									<tr>
										<td></td>
										<td width='40px'><input type='checkbox' name='26' class='single-input'></td>
										<td>Polpa exposta com vitalidade</td>
										<td width='40px'><input type='checkbox' name='27' class='single-input'></td>
										<td>Polpa exposta sem vitalidade</td>
										<td width='40px'><input type='checkbox' name='28' class='single-input'></td>
										<td>Alteração da cor da coroa dental</td>
										<td width='40px'><input type='checkbox' name='29' class='single-input'></td>
										<td>Alteração morfológica coronária</td>
									</tr>
								</table>  
								  
								<hr>
								<h5>Exame dos Dentes</h5><br>
								<table border=0>
									<tr>
										<td><b>Testes Térmicos: </b></td>
										<td width='40px'><input type='checkbox' name='30' class='single-input'></td>
										<td>Dor ao Frio</td>
										<td width='40px'><input type='checkbox' name='31' class='single-input'></td>
										<td>Dor ao Calor</td>
										<td width='40px'><input type='checkbox' name='32' class='single-input'></td>
										<td>Ausência de Dor</td>
									</tr>
									
									<tr>
										<td><b>Sensibilidade à Percussão: </b></td>
										<td width='40px'><input type='checkbox' name='33' class='single-input'></td>
										<td>Vertical</td>
										<td width='40px'><input type='checkbox' name='34' class='single-input'></td>
										<td>Horizontal</td>
									</tr>
									
									<tr>
										<td><b>Sensibilidade de Cavidade: </b></td>
										<td width='40px'><input type='checkbox' name='129' class='single-input'></td>
										<td>Presença de Dor</td>
										<td width='40px'><input type='checkbox' name='130' class='single-input'></td>
										<td>Ausência de Dor</td>
									</tr>
								</table>  
								<hr>	
								<h5>Exame Radiográfico</h5><br>
								<table border=0>								
									<tr>
										<td width='40px'><input type='checkbox' name='35' class='single-input'></td>
										<td>Periodonto Normal</td>
										<td width='40px'><input type='checkbox' name='36' class='single-input'></td>
										<td>Espessamento Periodontal</td>
										<td width='40px'><input type='checkbox' name='37' class='single-input'></td>
										<td>Lesão Perirradicular</td>
										<td width='40px'><input type='checkbox' name='38' class='single-input'></td>
										<td>Rizogênese Incompleta</td>
										<td width='40px'><input type='checkbox' name='39' class='single-input'></td>
										<td>Trepanação</td>
									</tr>
									
									<tr>
										<td width='40px'><input type='checkbox' name='40' class='single-input'></td>
										<td>Retentor Intra-Radicular</td>
										<td width='40px'><input type='checkbox' name='41' class='single-input'></td>
										<td>Instrumento Fraturado</td>
										<td width='40px'><input type='checkbox' name='42' class='single-input'></td>
										<td>T.E Insatisfatório</td>
										<td width='40px'><input type='checkbox' name='43' class='single-input'></td>
										<td>Reabsorção: Interna</td>
										<td width='40px'><input type='checkbox' name='44' class='single-input'></td>
										<td>Reabsorção: Externa</td>
									</tr>
									
									<tr>
										<td width='40px'><input type='checkbox' name='45' class='single-input'></td>
										<td>Fratura Dentária: Coronária</td>
										<td width='40px'><input type='checkbox' name='46' class='single-input'></td>
										<td>Fratura Dentária: Radicular</td>
									</tr>
								</table>  
								
								  
								<hr>
								<h5>Diagnóstico Clínico Provável</h5><br>
								<table border=0>
									<tr>
										<td width='40px'><input type='checkbox' name='47' class='single-input'></td>
										<td>Polpa Normal</td>
										<td width='40px'><input type='checkbox' name='48' class='single-input'></td>
										<td>Abscesso Dentoalveolar Agudo</td>
										<td width='40px'><input type='checkbox' name='49' class='single-input'></td>
										<td>Polpa Inflamada Reversivelmente</td>
										<td width='40px'><input type='checkbox' name='50' class='single-input'></td>
										<td>Polpa inflamada irreversivelmente</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='51' class='single-input'></td>
										<td>Abscesso Dentoaveolar Crônico</td>
										<td width='40px'><input type='checkbox' name='52' class='single-input'></td>
										<td>Granuloma Apical/Cisto Periodontal Apical</td>
										<td width='40px'><input type='checkbox' name='53' class='single-input'></td>
										<td>Necrose Pulpar </td>
										<td width='40px'><input type='checkbox' name='54' class='single-input'></td>
										<td>Displasia Cementária Periapical</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='55' class='single-input'></td>
										<td>Pericementite Apical Aguda </td>
										<td width='40px'><input type='checkbox' name='56' class='single-input'></td>
										<td>Pericementite Apical Crônica</td>
										<td colspan=4><input type='text' name='57' placeholder='Outras Patologias' class='single-input'></td>
									</tr>
								</table> 
								  
								<hr>
								<h5>Indicação de Tratamento</h5><br>
								<table border=0>
									<tr>
										<td width='40px'><input type='checkbox' name='58' class='single-input'></td>
										<td>Proteção Pulpar Indireta</td>
										<td width='40px'><input type='checkbox' name='59' class='single-input'></td>
										<td>Proteção Pulpar Direta </td>
										<td width='40px'><input type='checkbox' name='60' class='single-input'></td>
										<td>Tratamento de Canal </td>
										<td width='40px'><input type='checkbox' name='61' class='single-input'></td>
										<td>Retratamento de canal</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='62' class='single-input'></td>
										<td>Apicigênese</td>
										<td width='40px'><input type='checkbox' name='63' class='single-input'></td>
										<td>Apicetomia, Retropreparo e Retrobturação</td>
										<td width='40px'><input type='checkbox' name='64' class='single-input'></td>
										<td>Transplante Dentário</td>
										<td width='40px'><input type='checkbox' name='65' class='single-input'></td>
										<td>Reimplante Dentário</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='66' class='single-input'></td>
										<td>Tratamento Não-Cirúrgico de Perfuração</td>
										<td width='40px'><input type='checkbox' name='67' class='single-input'></td>
										<td>Tratamento Cirúrgico de Perfuração</td>
										<td width='40px'><input type='checkbox' name='68' class='single-input'></td>
										<td>Curetagem Apical</td>
										<td width='40px'><input type='checkbox' name='69' class='single-input'></td>
										<td>Apicificação</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='70' class='single-input'></td>
										<td>Proservação / acompanhamento</td>
									</tr>
								</table> 
								
								<hr>
								<h5>Terapêutica Sistêmica</h5>
								<br>
								<table border=0 width='100%'>
									<tr>
										<td colspan=5 style='border: 1px solid rgb(193,193,255);'><center>Odontometria</center></td>
										<td colspan=7 style='border: 1px solid rgb(193,193,255);'><center>Preparo Cirúrgico-Mecânico</center></td>
									</tr>

									<tr>
										<td><center><b>Canal</b></center></td>
										<td><center><b>CDR</b></center></td>
										<td><center><b>CP</b></center></td>
										<td><center><b>CT</b></center></td>
										<td><center><b>Ref.</b></center></td>
										<td colspan=2><center><b>Prep. Cervical</b></center></td>
										<td><center><b>IAI</b></center></td>
										<td><center><b>IM</b></center></td>
										<td><center><b>IP</b></center></td>
										<td colspan=2><center><b>Ápice / Coroa Step Back</b></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' type='text' name='71'></center></td>
										<td><center><input  class='single-input' type='text' name='72'></center></td>
										<td><center><input  class='single-input' type='text' name='73'></center></td>
										<td><center><input  class='single-input' type='text' name='74'></center></td>
										<td><center><input  class='single-input' type='text' name='75'></center></td>
										<td><center><input  class='single-input' type='text' name='76'></center></td>
										<td><center><input  class='single-input' type='text' name='77'></center></td>
										<td><center><input  class='single-input' type='text' name='78'></center></td>
										<td><center><input  class='single-input' type='text' name='79'></center></td>
										<td><center><input  class='single-input' type='text' name='80'></center></td>
										<td><center><input  class='single-input' type='text' name='81'></center></td>
										<td><center><input  class='single-input' type='text' name='82'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' type='text' name='83'></center></td>
										<td><center><input  class='single-input' type='text' name='84'></center></td>
										<td><center><input  class='single-input' type='text' name='85'></center></td>
										<td><center><input  class='single-input' type='text' name='86'></center></td>
										<td><center><input  class='single-input' type='text' name='87'></center></td>
										<td><center><input  class='single-input' type='text' name='88'></center></td>
										<td><center><input  class='single-input' type='text' name='89'></center></td>
										<td><center><input  class='single-input' type='text' name='90'></center></td>
										<td><center><input  class='single-input' type='text' name='91'></center></td>
										<td><center><input  class='single-input' type='text' name='92'></center></td>
										<td><center><input  class='single-input' type='text' name='93'></center></td>
										<td><center><input  class='single-input' type='text' name='94'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' type='text' name='95'></center></td>
										<td><center><input  class='single-input' type='text' name='96'></center></td>
										<td><center><input  class='single-input' type='text' name='97'></center></td>
										<td><center><input  class='single-input' type='text' name='98'></center></td>
										<td><center><input  class='single-input' type='text' name='99'></center></td>
										<td><center><input  class='single-input' type='text' name='100'></center></td>
										<td><center><input  class='single-input' type='text' name='101'></center></td>
										<td><center><input  class='single-input' type='text' name='102'></center></td>
										<td><center><input  class='single-input' type='text' name='103'></center></td>
										<td><center><input  class='single-input' type='text' name='104'></center></td>
										<td><center><input  class='single-input' type='text' name='105'></center></td>
										<td><center><input  class='single-input' type='text' name='106'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' type='text' name='107'></center></td>
										<td><center><input  class='single-input' type='text' name='108'></center></td>
										<td><center><input  class='single-input' type='text' name='109'></center></td>
										<td><center><input  class='single-input' type='text' name='110'></center></td>
										<td><center><input  class='single-input' type='text' name='111'></center></td>
										<td><center><input  class='single-input' type='text' name='112'></center></td>
										<td><center><input  class='single-input' type='text' name='113'></center></td>
										<td><center><input  class='single-input' type='text' name='114'></center></td>
										<td><center><input  class='single-input' type='text' name='115'></center></td>
										<td><center><input  class='single-input' type='text' name='116'></center></td>
										<td><center><input  class='single-input' type='text' name='117'></center></td>
										<td><center><input  class='single-input' type='text' name='118'></center></td>
									</tr>
								</table>
								<br>
								<table border=0>
									<tr>
										<td><b>Solução Química Irrigadora/Concentração:</b></td>
										<td width='100%'><input type='TEXT' name='119' class='single-input'></td>
									</tr>
								</table>
								<table border=0>
									<tr>
										<td><b>Medicação intracanal:</b></td>
										<td width='100%'><input type='TEXT' name='120' class='single-input'></td>
									</tr>
									<tr>
										<td><b>Cimento Obturador:</b></td>
										<td width='100%'><input type='TEXT' name='121' class='single-input'></td>
									</tr>
								</table>
								<br>
								<table>
									<tr>
										<td><b>Técnica de Obturação:</b></td>
										<td width='40px'><input type='checkbox' name='122' class='single-input'></td>
										<td>Schilder</td>
										<td width='40px'><input type='checkbox' name='123' class='single-input'></td>
										<td>Híbrida Tagger </td>
										<td width='40px'><input type='checkbox' name='124' class='single-input'></td>
										<td>Condensação Lateral</td>
									</tr>
									<tr>
										<td><b>Técnica de Instrumentação:</b></td>
										<td width='40px'><input type='checkbox' name='125' class='single-input'></td>
										<td>Escalonamento Apice-Coroa</td>
										<td width='40px'><input type='checkbox' name='126' class='single-input'></td>
										<td>Outro</td>
									</tr>
									<tr>
										<td><b>Odontometria:</b></td>
										<td width='40px'><input type='checkbox' name='127' class='single-input'></td>
										<td>Técnica Radiográfica</td>
										<td width='40px'><input type='checkbox' name='128' class='single-input'></td>
										<td>Técnica Radiográfica Auxiliada por Localizador Apical</td>
									</tr>
								</table>

								<hr>
								<h5>Repetir Endodontia:</h5><br>
								<table width='100%'>
									 <tr>
										<td>
										   <center><input type='checkbox' name='repetir17'> 17</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir16'> 16</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir15'> 15</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir14'> 14</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir13'> 13</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir12'> 12</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir11'> 11</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir21'> 21</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir22'> 22</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir23'> 23</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir24'> 24</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir25'> 25</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir26'> 26</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir27'> 27</center>
										</td>
									 </tr>
									 <tr>
										<td>
										   <center><input type='checkbox' name='repetir47'> 47</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir46'> 46</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir45'> 45</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir44'> 44</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir43'> 43</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir42'> 42</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir41'> 41</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir31'> 31</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir32'> 32</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir33'> 33</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir34'> 34</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir35'> 35</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir36'> 36</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir37'> 37</center>
										</td>
									 </tr>
									</table>
								<hr>
								<center><input type='submit' value='Salvar' class='genric-btn primary'></center>
							</form>

							
						<?php	
							
						}else{
							while($linhaAnam = mysql_fetch_array($resultadoAnam)){
								$id = $linhaAnam['nr_idEndodontia'];
								$dupla = $linhaAnam['nr_idDupla'];
								$data = $linhaAnam['dt_preenchimento'];
								$r1 = $linhaAnam['1'];
								$r2 = $linhaAnam['2']; 
								$r3 = $linhaAnam['3']; 
								$r4 = $linhaAnam['4']; 
								$r5 = $linhaAnam['5']; 
								$r6 = $linhaAnam['6']; 
								$r7 = $linhaAnam['7']; 
								$r8 = $linhaAnam['8']; 
								$r9 = $linhaAnam['9']; 
								$r10 = $linhaAnam['10']; 
								$r11 = $linhaAnam['11']; 
								$r12 = $linhaAnam['12']; 
								$r13 = $linhaAnam['13']; 
								$r14 = $linhaAnam['14']; 
								$r15 = $linhaAnam['15']; 
								$r16 = $linhaAnam['16']; 
								$r17 = $linhaAnam['17']; 
								$r18 = $linhaAnam['18']; 
								$r19 = $linhaAnam['19']; 
								$r20 = $linhaAnam['20']; 
								$r21 = $linhaAnam['21']; 
								$r22 = $linhaAnam['22']; 
								$r23 = $linhaAnam['23']; 
								$r24 = $linhaAnam['24']; 
								$r25 = $linhaAnam['25']; 
								$r26 = $linhaAnam['26']; 
								$r27 = $linhaAnam['27']; 
								$r28 = $linhaAnam['28']; 
								$r29 = $linhaAnam['29']; 
								$r30 = $linhaAnam['30']; 
								$r31 = $linhaAnam['31']; 
								$r32 = $linhaAnam['32']; 
								$r33 = $linhaAnam['33']; 
								$r34 = $linhaAnam['34']; 
								$r35 = $linhaAnam['35']; 
								$r36 = $linhaAnam['36']; 
								$r37 = $linhaAnam['37']; 
								$r38 = $linhaAnam['38']; 
								$r39 = $linhaAnam['39']; 
								$r40 = $linhaAnam['40']; 
								$r41 = $linhaAnam['41']; 
								$r42 = $linhaAnam['42']; 
								$r43 = $linhaAnam['43']; 
								$r44 = $linhaAnam['44']; 
								$r45 = $linhaAnam['45']; 
								$r46 = $linhaAnam['46']; 
								$r47 = $linhaAnam['47']; 
								$r48 = $linhaAnam['48']; 
								$r49 = $linhaAnam['49']; 
								$r50 = $linhaAnam['50']; 
								$r51 = $linhaAnam['51']; 
								$r52 = $linhaAnam['52']; 
								$r53 = $linhaAnam['53']; 
								$r54 = $linhaAnam['54']; 
								$r55 = $linhaAnam['55']; 
								$r56 = $linhaAnam['56']; 
								$r57 = $linhaAnam['57']; 
								$r58 = $linhaAnam['58']; 
								$r59 = $linhaAnam['59']; 
								$r60 = $linhaAnam['60']; 
								$r61 = $linhaAnam['61']; 
								$r62 = $linhaAnam['62']; 
								$r63 = $linhaAnam['63']; 
								$r64 = $linhaAnam['64']; 
								$r65 = $linhaAnam['65']; 
								$r66 = $linhaAnam['66']; 
								$r67 = $linhaAnam['67']; 
								$r68 = $linhaAnam['68']; 
								$r69 = $linhaAnam['69']; 
								$r70 = $linhaAnam['70']; 
								$r71 = $linhaAnam['71']; 
								$r72 = $linhaAnam['72']; 
								$r73 = $linhaAnam['73']; 
								$r74 = $linhaAnam['74']; 
								$r75 = $linhaAnam['75']; 
								$r76 = $linhaAnam['76']; 
								$r77 = $linhaAnam['77']; 
								$r78 = $linhaAnam['78']; 
								$r79 = $linhaAnam['79']; 
								$r80 = $linhaAnam['80']; 
								$r81 = $linhaAnam['81']; 
								$r82 = $linhaAnam['82']; 
								$r83 = $linhaAnam['83']; 
								$r84 = $linhaAnam['84']; 
								$r85 = $linhaAnam['85']; 
								$r86 = $linhaAnam['86']; 
								$r87 = $linhaAnam['87']; 
								$r88 = $linhaAnam['88']; 
								$r89 = $linhaAnam['89']; 
								$r90 = $linhaAnam['90']; 
								$r91 = $linhaAnam['91']; 
								$r92 = $linhaAnam['92']; 
								$r93 = $linhaAnam['93']; 
								$r94 = $linhaAnam['94']; 
								$r95 = $linhaAnam['95']; 
								$r96 = $linhaAnam['96']; 
								$r97 = $linhaAnam['97']; 
								$r98 = $linhaAnam['98']; 
								$r99 = $linhaAnam['99']; 
								$r100 = $linhaAnam['100']; 
								$r101 = $linhaAnam['101']; 
								$r102 = $linhaAnam['102']; 
								$r103 = $linhaAnam['103']; 
								$r104 = $linhaAnam['104']; 
								$r105 = $linhaAnam['105']; 
								$r106 = $linhaAnam['106']; 
								$r107 = $linhaAnam['107']; 
								$r108 = $linhaAnam['108']; 
								$r109 = $linhaAnam['109']; 
								$r110 = $linhaAnam['110']; 
								$r111 = $linhaAnam['111']; 
								$r112 = $linhaAnam['112']; 
								$r113 = $linhaAnam['113']; 
								$r114 = $linhaAnam['114']; 
								$r115 = $linhaAnam['115']; 
								$r116 = $linhaAnam['116']; 
								$r117 = $linhaAnam['117']; 
								$r118 = $linhaAnam['118']; 
								$r119 = $linhaAnam['119']; 
								$r120 = $linhaAnam['120']; 
								$r121 = $linhaAnam['121']; 
								$r122 = $linhaAnam['122']; 
								$r123 = $linhaAnam['123']; 
								$r124 = $linhaAnam['124']; 
								$r125 = $linhaAnam['125']; 
								$r126 = $linhaAnam['126']; 
								$r127 = $linhaAnam['127']; 
								$r128 = $linhaAnam['128']; 
								$r129 = $linhaAnam['129']; 
								$r130 = $linhaAnam['130']; 
													
							}
							
						?>	
						
								<!-- ############################################################## impressão endo 2 -->
							<form method='POST' action='atualizarEndo.php'>
								<input type='hidden' name='id' value='<?php echo $id; ?>'>
								<b>Dupla Responsável: </b>
								<select class='single-input' name='dupla'>
								<?php
									
									echo $sql = "SELECT * FROM tb_duplas WHERE nr_idDupla = ".$dupla." LIMIT 1";
									$resultado = mysql_query($sql) or die();
									while($linha = mysql_fetch_array($resultado)){
										
										$sqlNome1 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linha['nr_cpf1']."'";
										$resultadoNome1 = mysql_query($sqlNome1) or die();
										while($linhaNome1 = mysql_fetch_array($resultadoNome1)){
											$Nome1 = $linhaNome1['nm_nomeAluno']; 
											$periodo = $linhaNome1['nr_periodo']; 
										}
										
										$sqlNome2 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linha['nr_cpf2']."'";
										$resultadoNome2 = mysql_query($sqlNome2) or die();
										while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
											$Nome2 = $linhaNome2['nm_nomeAluno']; 
										}
										
										
										echo "<option value='".$linha['nr_idDupla']."'>".$Nome1." e ".$Nome2." (".$periodo."º Periodo)</option>";
									}
									
									
									$sqlNome = "SELECT * FROM tb_duplas WHERE nm_situacao = 'Ativo'";
									$resultadoNome = mysql_query($sqlNome) or die();
									while($linhaNome = mysql_fetch_array($resultadoNome)){
										if($linhaNome['nr_idDupla'] != $dupla){
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
									}
								?>
								</select><br>
								
								
								
								<b>Data do Preenchimento: </b><input type='text' name='data' class='single-input' value='<?php echo $data; ?>'><br>
								<b>Queixa Principal: </b><input type='text' name='1' class='single-input' value='<?php echo $r1; ?>'>
								<input type='hidden' name='2' value='<?php echo $r2; ?>' class='single-input'>
								<input type='hidden' name='cpf' value='<?php echo $_GET['cpf']; ?>' class='single-input'>
								
								<hr>
								<br>
								<h5>Semiologia Subjetiva – Características Clínicas da Dor</h5><br>
								<table border=0>
									<tr>
										<td><b>Sede: </b></td>
										<td width='40px'><input type='checkbox' name='3' class='single-input'  value='<?php echo $r3; ?>' <?php echo $r3; ?>></td>
										<td>Localizada</td>
										<td width='40px'><input type='checkbox' name='4' class='single-input'  value='<?php echo $r4; ?>' <?php echo $r4; ?>></td>
										<td>Difusa</td>
									</tr>
									
									
									<tr>	
										<td><b>Aparecimento: </b></td>
										<td width='40px'><input type='checkbox' name='5' class='single-input' value='<?php echo $r5; ?>' <?php echo $r5; ?>></td>
										<td>Provocada</td>
										<td width='40px'><input type='checkbox' name='6' class='single-input' value='<?php echo $r6; ?>' <?php echo $r6; ?>></td>
										<td style='margin-rigth:10px;'>Espontânea</td>
									</tr>
									
									
									<tr>
										<td><b>Duração: </b></td>
										<td width='40px'><input type='checkbox' name='7' class='single-input' value='<?php echo $r7; ?>' <?php echo $r7; ?>></td>
										<td>Curta</td>
										<td width='40px'><input type='checkbox' name='8' class='single-input' value='<?php echo $r8; ?>' <?php echo $r8; ?>></td>
										<td>Longa</td>
									</tr>
									
									
									<tr>
										<td><b>Frequência: </b></td>
										<td width='40px'><input type='checkbox' name='9' class='single-input' value='<?php echo $r9; ?>' <?php echo $r9; ?>></td>
										<td>Intermitente</td>
										<td width='40px'><input type='checkbox' name='10' class='single-input' value='<?php echo $r10; ?>' <?php echo $r10; ?>></td>
										<td>Contínua</td>
									</tr>
									
									<tr>
										<td><b>Intensidade: </b></td>
										<td width='40px'><input type='checkbox' name='11' class='single-input' value='<?php echo $r11; ?>' <?php echo $r11; ?>></td>
										<td>Leve</td>
										<td width='40px'><input type='checkbox' name='12' class='single-input' value='<?php echo $r12; ?>' <?php echo $r12; ?>></td>
										<td>Moderada</td>
										<td width='40px'><input type='checkbox' name='13' class='single-input' value='<?php echo $r13; ?>' <?php echo $r13; ?>></td>
										<td>Severa</td>
									</tr>
								</table>
								
								<hr>
								<h5>Semiologia Objetiva</h5><br>
								<table border=0>
									<tr>
										<td><b>Mucosa Gengival: </b></td>
										<td width='40px'><input type='checkbox' name='14' class='single-input' value='<?php echo $r14; ?>' <?php echo $r14; ?>></td>
										<td>Normal</td>
										<td width='40px'><input type='checkbox' name='15' class='single-input' value='<?php echo $r15; ?>' <?php echo $r15; ?>></td>
										<td>Doença Periodontal</td>
										<td width='40px'><input type='checkbox' name='16' class='single-input' value='<?php echo $r16; ?>' <?php echo $r16; ?>></td>
										<td>Presença de Fístula</td>
										<td width='40px'><input type='checkbox' name='17' class='single-input' value='<?php echo $r17; ?>' <?php echo $r17; ?>></td>
										<td>Presença de Tumefação</td>
									</tr>
								</table>	
								<table>	
									<tr>
										<td width='190px;'><b>Sensibilidade a Palpação: </b></td>
										<td width='40px'><input type='checkbox' name='18' class='single-input' value='<?php echo $r18; ?>' <?php echo $r18; ?>></td>
										<td>Presença de Dor</td>
										<td width='40px'><input type='checkbox' name='19' class='single-input' value='<?php echo $r19; ?>' <?php echo $r19; ?>></td>
										<td>Ausência de Dor</td>
									</tr>
								</table>	
								<table>		
									<tr>
										<td><b>Mobilidade: </b></td>
										<td width='40px'><input type='checkbox' name='20' class='single-input' value='<?php echo $r20; ?>' <?php echo $r20; ?>></td>
										<td>Normal</td>
										<td width='40px'><input type='checkbox' name='21' class='single-input' value='<?php echo $r21; ?>' <?php echo $r21; ?>></td>
										<td>Acentuada</td>
									</tr>
									
									<tr>
										<td><b>Inspeção: </b></td>
										<td width='40px'><input type='checkbox' name='22' class='single-input' value='<?php echo $r22; ?>' <?php echo $r22; ?>></td>
										<td>Coroa íntegra</td>
										<td width='40px'><input type='checkbox' name='23' class='single-input' value='<?php echo $r23; ?>' <?php echo $r23; ?>></td>
										<td>Presença de restaurações</td>
										<td width='40px'><input type='checkbox' name='24' class='single-input' value='<?php echo $r24; ?>' <?php echo $r24; ?>></td>
										<td>Presença de cárie</td>
										<td width='40px'><input type='checkbox' name='25' class='single-input' value='<?php echo $r25; ?>' <?php echo $r25; ?>></td>
										<td>Presença de fratura</td>
									</tr>
									
									<tr>
										<td></td>
										<td width='40px'><input type='checkbox' name='26' class='single-input' value='<?php echo $r26; ?>' <?php echo $r26; ?>></td>
										<td>Polpa exposta com vitalidade</td>
										<td width='40px'><input type='checkbox' name='27' class='single-input' value='<?php echo $r27; ?>' <?php echo $r27; ?>></td>
										<td>Polpa exposta sem vitalidade</td>
										<td width='40px'><input type='checkbox' name='28' class='single-input' value='<?php echo $r28; ?>' <?php echo $r28; ?>></td>
										<td>Alteração da cor da coroa dental</td>
										<td width='40px'><input type='checkbox' name='29' class='single-input' value='<?php echo $r29; ?>' <?php echo $r29; ?>></td>
										<td>Alteração morfológica coronária</td>
									</tr>
								</table>  
								  
								<hr>
								<h5>Exame dos Dentes</h5><br>
								<table border=0>
									<tr>
										<td><b>Testes Térmicos: </b></td>
										<td width='40px'><input type='checkbox' name='30' class='single-input' value='<?php echo $r30; ?>' <?php echo $r30; ?>></td>
										<td>Dor ao Frio</td>
										<td width='40px'><input type='checkbox' name='31' class='single-input' value='<?php echo $r31; ?>' <?php echo $r31; ?>></td>
										<td>Dor ao Calor</td>
										<td width='40px'><input type='checkbox' name='32' class='single-input' value='<?php echo $r32; ?>' <?php echo $r32; ?>></td>
										<td>Ausência de Dor</td>
									</tr>
									
									<tr>
										<td><b>Sensibilidade à Percussão: </b></td>
										<td width='40px'><input type='checkbox' name='33' class='single-input' value='<?php echo $r33; ?>' <?php echo $r33; ?>></td>
										<td>Vertical</td>
										<td width='40px'><input type='checkbox' name='34' class='single-input' value='<?php echo $r34; ?>' <?php echo $r34; ?>></td>
										<td>Horizontal</td>
									</tr>
									
									<tr>
										<td><b>Sensibilidade de Cavidade: </b></td>
										<td width='40px'><input type='checkbox' name='129' class='single-input' value='<?php echo $r129; ?>' <?php echo $r129; ?>></td>
										<td>Presença de Dor</td>
										<td width='40px'><input type='checkbox' name='130' class='single-input' value='<?php echo $r130; ?>' <?php echo $r130; ?>></td>
										<td>Ausência de Dor</td>
									</tr>
								</table>
								
								<hr>
								<h5>Exame Radiográfico</h5><br>
								<table border=0>	
									<tr>
										<td width='40px'><input type='checkbox' name='35' class='single-input' value='<?php echo $r35; ?>' <?php echo $r35; ?>></td>
										<td>Periodonto Normal</td>
										<td width='40px'><input type='checkbox' name='36' class='single-input' value='<?php echo $r36; ?>' <?php echo $r36; ?>></td>
										<td>Espessamento Periodontal</td>
										<td width='40px'><input type='checkbox' name='37' class='single-input' value='<?php echo $r37; ?>' <?php echo $r37; ?>></td>
										<td>Lesão Perirradicular</td>
										<td width='40px'><input type='checkbox' name='38' class='single-input' value='<?php echo $r38; ?>' <?php echo $r38; ?>></td>
										<td>Rizogênese Incompleta</td>
										<td width='40px'><input type='checkbox' name='39' class='single-input' value='<?php echo $r39; ?>' <?php echo $r39; ?>></td>
										<td>Trepanação</td>
									</tr>
									
									<tr>
										<td width='40px'><input type='checkbox' name='40' class='single-input' value='<?php echo $r40; ?>' <?php echo $r40; ?>></td>
										<td>Retentor Intra-Radicular</td>
										<td width='40px'><input type='checkbox' name='41' class='single-input' value='<?php echo $r41; ?>' <?php echo $r41; ?>></td>
										<td>Instrumento Fraturado</td>
										<td width='40px'><input type='checkbox' name='42' class='single-input' value='<?php echo $r42; ?>' <?php echo $r42; ?>></td>
										<td>T.E Insatisfatório</td>
										<td width='40px'><input type='checkbox' name='43' class='single-input' value='<?php echo $r43; ?>' <?php echo $r43; ?>></td>
										<td>Reabsorção: Interna</td>
										<td width='40px'><input type='checkbox' name='44' class='single-input' value='<?php echo $r44; ?>' <?php echo $r44; ?>></td>
										<td>Reabsorção: Externa</td>
									</tr>
									
									<tr>
										<td width='40px'><input type='checkbox' name='45' class='single-input' value='<?php echo $r45; ?>' <?php echo $r45; ?>></td>
										<td>Fratura Dentária: Coronária</td>
										<td width='40px'><input type='checkbox' name='46' class='single-input' value='<?php echo $r46; ?>' <?php echo $r46; ?>></td>
										<td>Fratura Dentária: Radicular</td>
									</tr>
								</table>  
								  
								<hr>
								<h5>Diagnóstico Clínico Provável:</h5><br>
								<table border=0>
									<tr>
										<td width='40px'><input type='checkbox' name='47' class='single-input' value='<?php echo $r47; ?>' <?php echo $r47; ?>></td>
										<td>Polpa Normal</td>
										<td width='40px'><input type='checkbox' name='48' class='single-input' value='<?php echo $r48; ?>' <?php echo $r48; ?>></td>
										<td>Abscesso Dentoalveolar Agudo</td>
										<td width='40px'><input type='checkbox' name='49' class='single-input' value='<?php echo $r49; ?>' <?php echo $r49; ?>></td>
										<td>Polpa Inflamada Reversivelmente</td>
										<td width='40px'><input type='checkbox' name='50' class='single-input' value='<?php echo $r50; ?>' <?php echo $r50; ?>></td>
										<td>Polpa inflamada irreversivelmente</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='51' class='single-input' value='<?php echo $r51; ?>' <?php echo $r51; ?>></td>
										<td>Abscesso Dentoaveolar Crônico</td>
										<td width='40px'><input type='checkbox' name='52' class='single-input' value='<?php echo $r52; ?>' <?php echo $r52; ?>></td>
										<td>Granuloma Apical/Cisto Periodontal Apical</td>
										<td width='40px'><input type='checkbox' name='53' class='single-input' value='<?php echo $r53; ?>' <?php echo $r53; ?>></td>
										<td>Necrose Pulpar </td>
										<td width='40px'><input type='checkbox' name='54' class='single-input' value='<?php echo $r54; ?>' <?php echo $r54; ?>></td>
										<td>Displasia Cementária Periapical</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='55' class='single-input' value='<?php echo $r55; ?>' <?php echo $r55; ?>></td>
										<td>Pericementite Apical Aguda </td>
										<td width='40px'><input type='checkbox' name='56' class='single-input' value='<?php echo $r56; ?>' <?php echo $r56; ?>></td>
										<td>Pericementite Apical Crônica</td>
										<td colspan=4><input type='text' name='57' placeholder='Outras Patologias' class='single-input' value='<?php echo $r57; ?>'></td>
									</tr>
								</table> 
								  
								<hr>
								<h5>Indicação de Tratamento:</h5><br>
								<table border=0>
									<tr>
										<td width='40px'><input type='checkbox' name='58' class='single-input' value='<?php echo $r58; ?>' <?php echo $r58; ?>></td>
										<td>Proteção Pulpar Indireta</td>
										<td width='40px'><input type='checkbox' name='59' class='single-input' value='<?php echo $r59; ?>' <?php echo $r59; ?>></td>
										<td>Proteção Pulpar Direta </td>
										<td width='40px'><input type='checkbox' name='60' class='single-input' value='<?php echo $r60; ?>' <?php echo $r60; ?>></td>
										<td>Tratamento de Canal </td>
										<td width='40px'><input type='checkbox' name='61' class='single-input' value='<?php echo $r61; ?>' <?php echo $r61; ?>></td>
										<td>Retratamento de canal</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='62' class='single-input' value='<?php echo $r62; ?>' <?php echo $r62; ?>></td>
										<td>Apicigênese</td>
										<td width='40px'><input type='checkbox' name='63' class='single-input' value='<?php echo $r63; ?>' <?php echo $r63; ?>></td>
										<td>Apicetomia, Retropreparo e Retrobturação</td>
										<td width='40px'><input type='checkbox' name='64' class='single-input' value='<?php echo $r64; ?>' <?php echo $r64; ?>></td>
										<td>Transplante Dentário</td>
										<td width='40px'><input type='checkbox' name='65' class='single-input' value='<?php echo $r65; ?>' <?php echo $r65; ?>></td>
										<td>Reimplante Dentário</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='66' class='single-input' value='<?php echo $r66; ?>' <?php echo $r66; ?>></td>
										<td>Tratamento Não-Cirúrgico de Perfuração</td>
										<td width='40px'><input type='checkbox' name='67' class='single-input' value='<?php echo $r67; ?>' <?php echo $r67; ?>></td>
										<td>Tratamento Cirúrgico de Perfuração</td>
										<td width='40px'><input type='checkbox' name='68' class='single-input' value='<?php echo $r68; ?>' <?php echo $r68; ?>></td>
										<td>Curetagem Apical</td>
										<td width='40px'><input type='checkbox' name='69' class='single-input' value='<?php echo $r69; ?>' <?php echo $r69; ?>></td>
										<td>Apicificação</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='70' class='single-input' value='<?php echo $r70; ?>' <?php echo $r70; ?>></td>
										<td>Proservação / acompanhamento</td>
									</tr>
								</table> 
								
								<hr>
								<h5>Terapêutica Sistêmica</h5>
								<br>
								<table border=0 width='100%'>
									<tr>
										<td colspan=5 style='border: 1px solid rgb(193,193,255);'><center>Odontometria</center></td>
										<td colspan=7 style='border: 1px solid rgb(193,193,255);'><center>Preparo Cirúrgico-Mecânico</center></td>
									</tr>
									<tr>
										<td><center><b>Canal</b></center></td>
										<td><center><b>CDR</b></center></td>
										<td><center><b>CP</b></center></td>
										<td><center><b>CT</b></center></td>
										<td><center><b>Ref.</b></center></td>
										<td colspan=2><center><b>Prep. Cervical</b></center></td>
										<td><center><b>IAI</b></center></td>
										<td><center><b>IM</b></center></td>
										<td><center><b>IP</b></center></td>
										<td colspan=2><center><b>Ápice / Coroa Step Back</b></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' value='<?php echo $r71; ?>' type='text' name='71'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r72; ?>' type='text' name='72'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r73; ?>' type='text' name='73'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r74; ?>' type='text' name='74'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r75; ?>' type='text' name='75'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r76; ?>' type='text' name='76'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r77; ?>' type='text' name='77'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r78; ?>' type='text' name='78'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r79; ?>' type='text' name='79'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r80; ?>' type='text' name='80'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r81; ?>' type='text' name='81'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r82; ?>' type='text' name='82'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' value='<?php echo $r83; ?>' type='text' name='83'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r84; ?>' type='text' name='84'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r85; ?>' type='text' name='85'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r86; ?>' type='text' name='86'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r87; ?>' type='text' name='87'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r88; ?>' type='text' name='88'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r89; ?>' type='text' name='89'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r90; ?>' type='text' name='90'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r91; ?>' type='text' name='91'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r92; ?>' type='text' name='92'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r93; ?>' type='text' name='93'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r94; ?>' type='text' name='94'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' value='<?php echo $r95; ?>' type='text' name='95'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r96; ?>' type='text' name='96'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r97; ?>' type='text' name='97'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r98; ?>' type='text' name='98'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r99; ?>' type='text' name='99'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r100; ?>' type='text' name='100'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r101; ?>' type='text' name='101'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r102; ?>' type='text' name='102'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r103; ?>' type='text' name='103'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r104; ?>' type='text' name='104'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r105; ?>' type='text' name='105'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r106; ?>' type='text' name='106'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' value='<?php echo $r107; ?>' type='text' name='107'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r108; ?>' type='text' name='108'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r109; ?>' type='text' name='109'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r110; ?>' type='text' name='110'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r111; ?>' type='text' name='111'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r112; ?>' type='text' name='112'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r113; ?>' type='text' name='113'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r114; ?>' type='text' name='114'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r115; ?>' type='text' name='115'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r116; ?>' type='text' name='116'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r117; ?>' type='text' name='117'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r118; ?>' type='text' name='118'></center></td>
									</tr>
								</table>
								<br>
								<table border=0>
									<tr>
										<td><b>Solução Química Irrigadora/Concentração:</b></td>
										<td width='100%'><input type='TEXT' name='119' class='single-input' value='<?php echo $r119; ?>'></td>
									</tr>
								</table>
								<table border=0>
									<tr>
										<td><b>Medicação intracanal:</b></td>
										<td width='100%'><input type='TEXT' name='120' class='single-input' value='<?php echo $r120; ?>'></td>
									</tr>
									<tr>
										<td><b>Cimento Obturador:</b></td>
										<td width='100%'><input type='TEXT' name='121' class='single-input' value='<?php echo $r121; ?>'></td>
									</tr>
								</table>
								<br>
								<table>
									<tr>
										<td><b>Técnica de Obturação:</b></td>
										<td width='40px'><input type='checkbox' name='122' class='single-input' value='<?php echo $r122; ?>' <?php echo $r122; ?>></td>
										<td>Schilder</td>
										<td width='40px'><input type='checkbox' name='123' class='single-input' value='<?php echo $r123; ?>' <?php echo $r123; ?>></td>
										<td>Híbrida Tagger </td>
										<td width='40px'><input type='checkbox' name='124' class='single-input' value='<?php echo $r124; ?>' <?php echo $r124; ?>></td>
										<td>Condensação Lateral</td>
									</tr>
									<tr>
										<td><b>Técnica de Instrumentação:</b></td>
										<td width='40px'><input type='checkbox' name='125' class='single-input' value='<?php echo $r125; ?>' <?php echo $r125; ?>></td>
										<td>Escalonamento Apice-Coroa</td>
										<td width='40px'><input type='checkbox' name='126' class='single-input' value='<?php echo $r126; ?>' <?php echo $r126; ?>></td>
										<td>Outro</td>
									</tr>
									<tr>
										<td><b>Odontometria:</b></td>
										<td width='40px'><input type='checkbox' name='127' class='single-input' value='<?php echo $r127; ?>' <?php echo $r127; ?>></td>
										<td>Técnica Radiográfica</td>
										<td width='40px'><input type='checkbox' name='128' class='single-input' value='<?php echo $r128; ?>' <?php echo $r128; ?>></td>
										<td>Técnica Radiográfica Auxiliada por Localizador Apical</td>
									</tr>
								</table>
								<hr>
								<center>
									<input type='submit' value='Atualizar' class='genric-btn primary'>
									<a href='excluirEndo.php?id=<?php echo $id; ?>' class='genric-btn secondary'>Excluir</a>
								</center>
							</form>
							
						<?php	
							
							
						}
						
						
						?>
						
						
						
						
					  </div>
					</div>

				  </div>
				  <!-- Accordion card -->
				</div>
				<!-- Accordion wrapper -->
				
			</div>
			
			
		<?php
			$c = $c + 1;
		}
		
		$d = 41;
		while($d<48){
			?>
			
			
					<div id='contenido<?php echo $d; ?>' width='100%' style='background-color:white; display:none'>
				
				<!--Accordion wrapper-->
				<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

				  <!-- Accordion card -->
				  <div class="card">

					<!-- Card header -->
					<div class="card-header" role="tab" id="headingOne<?php echo $d; ?>">
					  <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne<?php echo $d; ?>" aria-expanded="true"
						aria-controls="collapseOne<?php echo $d; ?>">
						<h5 class="mb-0">
						  Dente <?php echo $d; ?>
						</h5>
					  </a>
					</div>

					<!-- Card body -->
					<div id="collapseOne<?php echo $d; ?>" class="collapse show" role="tabpanel" aria-labelledby="headingOne<?php echo $d; ?>"
					  data-parent="#accordionEx">
					  <div class="card-body">
						
						<?php
						
						$sqlAnam = "SELECT * FROM `tb_endodontia` WHERE `nr_cpfPaciente` = '".$_GET['cpf']."' AND `2` = '".$d."_1'";
						$resultadoAnam = mysql_query($sqlAnam) or die();
						$numImg = mysql_num_rows($resultadoAnam);
						if($numImg == 0){
							
						?>	
							
							<!-- ###################################################################################### CADASTRO ENDO 1 -->
							<form method='POST' action='inserirEndo.php'>
							
								<b>Dupla Responsável:</b>
								<select class='single-input' name='dupla'>
								<?php
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
								?>
								</select><br>
							
								<b>Queixa Principal: </b><input type='text' name='1' class='single-input' placeholder='Queixa Principal'>
								<input type='hidden' name='2' value='<?php echo $d; ?>_1' class='single-input'>
								<input type='hidden' name='cpf' value='<?php echo $_GET['cpf']; ?>' class='single-input'>
								
								<hr>
								<br>
								<h5>Semiologia Subjetiva – Características Clínicas da Dor</h5><br>
								<table border=0>
									<tr>
										<td><b>Sede: </b></td>
										<td width='40px'><input type='checkbox' name='3' class='single-input'></td>
										<td>Localizada</td>
										<td width='40px'><input type='checkbox' name='4' class='single-input'></td>
										<td>Difusa</td>
									</tr>
									
									
									<tr>	
										<td><b>Aparecimento: </b></td>
										<td width='40px'><input type='checkbox' name='5' class='single-input'></td>
										<td>Provocada</td>
										<td width='40px'><input type='checkbox' name='6' class='single-input'></td>
										<td style='margin-rigth:10px;'>Espontânea</td>
									</tr>
									
									
									<tr>
										<td><b>Duração: </b></td>
										<td width='40px'><input type='checkbox' name='7' class='single-input'></td>
										<td>Curta</td>
										<td width='40px'><input type='checkbox' name='8' class='single-input'></td>
										<td>Longa</td>
									</tr>
									
									
									<tr>
										<td><b>Frequência: </b></td>
										<td width='40px'><input type='checkbox' name='9' class='single-input'></td>
										<td>Intermitente</td>
										<td width='40px'><input type='checkbox' name='10' class='single-input'></td>
										<td>Contínua</td>
									</tr>
									
									<tr>
										<td><b>Intensidade: </b></td>
										<td width='40px'><input type='checkbox' name='11' class='single-input'></td>
										<td>Leve</td>
										<td width='40px'><input type='checkbox' name='12' class='single-input'></td>
										<td>Moderada</td>
										<td width='40px'><input type='checkbox' name='13' class='single-input'></td>
										<td>Severa</td>
									</tr>
								</table>
								
								<hr>
								<h5>Semiologia Objetiva</h5><br>
								<table border=0>
									<tr>
										<td><b>Mucosa Gengival: </b></td>
										<td width='40px'><input type='checkbox' name='14' class='single-input'></td>
										<td>Normal</td>
										<td width='40px'><input type='checkbox' name='15' class='single-input'></td>
										<td>Doença Periodontal</td>
										<td width='40px'><input type='checkbox' name='16' class='single-input'></td>
										<td>Presença de Fístula</td>
										<td width='40px'><input type='checkbox' name='17' class='single-input'></td>
										<td>Presença de Tumefação</td>
									</tr>
								</table>	
								<table>	
									<tr>
										<td width='190px;'><b>Sensibilidade a Palpação: </b></td>
										<td width='40px'><input type='checkbox' name='18' class='single-input'></td>
										<td>Presença de Dor</td>
										<td width='40px'><input type='checkbox' name='19' class='single-input'></td>
										<td>Ausência de Dor</td>
									</tr>
								</table>	
								<table>		
									<tr>
										<td><b>Mobilidade: </b></td>
										<td width='40px'><input type='checkbox' name='20' class='single-input'></td>
										<td>Normal</td>
										<td width='40px'><input type='checkbox' name='21' class='single-input'></td>
										<td>Acentuada</td>
									</tr>
									
									<tr>
										<td><b>Inspeção: </b></td>
										<td width='40px'><input type='checkbox' name='22' class='single-input'></td>
										<td>Coroa íntegra</td>
										<td width='40px'><input type='checkbox' name='23' class='single-input'></td>
										<td>Presença de restaurações</td>
										<td width='40px'><input type='checkbox' name='24' class='single-input'></td>
										<td>Presença de cárie</td>
										<td width='40px'><input type='checkbox' name='25' class='single-input'></td>
										<td>Presença de fratura</td>
									</tr>
									
									<tr>
										<td></td>
										<td width='40px'><input type='checkbox' name='26' class='single-input'></td>
										<td>Polpa exposta com vitalidade</td>
										<td width='40px'><input type='checkbox' name='27' class='single-input'></td>
										<td>Polpa exposta sem vitalidade</td>
										<td width='40px'><input type='checkbox' name='28' class='single-input'></td>
										<td>Alteração da cor da coroa dental</td>
										<td width='40px'><input type='checkbox' name='29' class='single-input'></td>
										<td>Alteração morfológica coronária</td>
									</tr>
								</table>  
								  
								<hr>
								<h5>Exame dos Dentes</h5><br>
								<table border=0>
									<tr>
										<td><b>Testes Térmicos: </b></td>
										<td width='40px'><input type='checkbox' name='30' class='single-input'></td>
										<td>Dor ao Frio</td>
										<td width='40px'><input type='checkbox' name='31' class='single-input'></td>
										<td>Dor ao Calor</td>
										<td width='40px'><input type='checkbox' name='32' class='single-input'></td>
										<td>Ausência de Dor</td>
									</tr>
									
									<tr>
										<td><b>Sensibilidade à Percussão: </b></td>
										<td width='40px'><input type='checkbox' name='33' class='single-input'></td>
										<td>Vertical</td>
										<td width='40px'><input type='checkbox' name='34' class='single-input'></td>
										<td>Horizontal</td>
									</tr>
									
									<tr>
										<td><b>Sensibilidade de Cavidade: </b></td>
										<td width='40px'><input type='checkbox' name='129' class='single-input'></td>
										<td>Presença de Dor</td>
										<td width='40px'><input type='checkbox' name='130' class='single-input'></td>
										<td>Ausência de Dor</td>
									</tr>
								</table>
								
								<hr>
								<h5>Exame Radiográfico</h5><br>
								<table border=0>								
									<tr>
										<td width='40px'><input type='checkbox' name='35' class='single-input'></td>
										<td>Periodonto Normal</td>
										<td width='40px'><input type='checkbox' name='36' class='single-input'></td>
										<td>Espessamento Periodontal</td>
										<td width='40px'><input type='checkbox' name='37' class='single-input'></td>
										<td>Lesão Perirradicular</td>
										<td width='40px'><input type='checkbox' name='38' class='single-input'></td>
										<td>Rizogênese Incompleta</td>
										<td width='40px'><input type='checkbox' name='39' class='single-input'></td>
										<td>Trepanação</td>
									</tr>
									
									<tr>
										<td width='40px'><input type='checkbox' name='40' class='single-input'></td>
										<td>Retentor Intra-Radicular</td>
										<td width='40px'><input type='checkbox' name='41' class='single-input'></td>
										<td>Instrumento Fraturado</td>
										<td width='40px'><input type='checkbox' name='42' class='single-input'></td>
										<td>T.E Insatisfatório</td>
										<td width='40px'><input type='checkbox' name='43' class='single-input'></td>
										<td>Reabsorção: Interna</td>
										<td width='40px'><input type='checkbox' name='44' class='single-input'></td>
										<td>Reabsorção: Externa</td>
									</tr>
									
									<tr>
										<td width='40px'><input type='checkbox' name='45' class='single-input'></td>
										<td>Fratura Dentária: Coronária</td>
										<td width='40px'><input type='checkbox' name='46' class='single-input'></td>
										<td>Fratura Dentária: Radicular</td>
									</tr>
								</table>  
								  
								<hr>
								<h5>Diagnóstico Clínico Provável</h5><br>
								<table border=0>
									<tr>
										<td width='40px'><input type='checkbox' name='47' class='single-input'></td>
										<td>Polpa Normal</td>
										<td width='40px'><input type='checkbox' name='48' class='single-input'></td>
										<td>Abscesso Dentoalveolar Agudo</td>
										<td width='40px'><input type='checkbox' name='49' class='single-input'></td>
										<td>Polpa Inflamada Reversivelmente</td>
										<td width='40px'><input type='checkbox' name='50' class='single-input'></td>
										<td>Polpa inflamada irreversivelmente</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='51' class='single-input'></td>
										<td>Abscesso Dentoaveolar Crônico</td>
										<td width='40px'><input type='checkbox' name='52' class='single-input'></td>
										<td>Granuloma Apical/Cisto Periodontal Apical</td>
										<td width='40px'><input type='checkbox' name='53' class='single-input'></td>
										<td>Necrose Pulpar </td>
										<td width='40px'><input type='checkbox' name='54' class='single-input'></td>
										<td>Displasia Cementária Periapical</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='55' class='single-input'></td>
										<td>Pericementite Apical Aguda </td>
										<td width='40px'><input type='checkbox' name='56' class='single-input'></td>
										<td>Pericementite Apical Crônica</td>
										<td colspan=4><input type='text' name='57' placeholder='Outras Patologias' class='single-input'></td>
									</tr>
								</table> 
								  
								<hr>
								<h5>Indicação de Tratamento</h5><br>
								<table border=0>
									<tr>
										<td width='40px'><input type='checkbox' name='58' class='single-input'></td>
										<td>Proteção Pulpar Indireta</td>
										<td width='40px'><input type='checkbox' name='59' class='single-input'></td>
										<td>Proteção Pulpar Direta </td>
										<td width='40px'><input type='checkbox' name='60' class='single-input'></td>
										<td>Tratamento de Canal </td>
										<td width='40px'><input type='checkbox' name='61' class='single-input'></td>
										<td>Retratamento de canal</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='62' class='single-input'></td>
										<td>Apicigênese</td>
										<td width='40px'><input type='checkbox' name='63' class='single-input'></td>
										<td>Apicetomia, Retropreparo e Retrobturação</td>
										<td width='40px'><input type='checkbox' name='64' class='single-input'></td>
										<td>Transplante Dentário</td>
										<td width='40px'><input type='checkbox' name='65' class='single-input'></td>
										<td>Reimplante Dentário</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='66' class='single-input'></td>
										<td>Tratamento Não-Cirúrgico de Perfuração</td>
										<td width='40px'><input type='checkbox' name='67' class='single-input'></td>
										<td>Tratamento Cirúrgico de Perfuração</td>
										<td width='40px'><input type='checkbox' name='68' class='single-input'></td>
										<td>Curetagem Apical</td>
										<td width='40px'><input type='checkbox' name='69' class='single-input'></td>
										<td>Apicificação</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='70' class='single-input'></td>
										<td>Proservação / acompanhamento</td>
									</tr>
								</table> 
								
								<hr>
								<h5>Terapêutica Sistêmica</h5>
								<br>
								<table border=0 width='100%'>
									<tr>
										<td colspan=5 style='border: 1px solid rgb(193,193,255);'><center>Odontometria</center></td>
										<td colspan=7 style='border: 1px solid rgb(193,193,255);'><center>Preparo Cirúrgico-Mecânico</center></td>
									</tr>
									<tr>
										<td><center><b>Canal</b></center></td>
										<td><center><b>CDR</b></center></td>
										<td><center><b>CP</b></center></td>
										<td><center><b>CT</b></center></td>
										<td><center><b>Ref.</b></center></td>
										<td colspan=2><center><b>Prep. Cervical</b></center></td>
										<td><center><b>IAI</b></center></td>
										<td><center><b>IM</b></center></td>
										<td><center><b>IP</b></center></td>
										<td colspan=2><center><b>Ápice / Coroa Step Back</b></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' type='text' name='71'></center></td>
										<td><center><input  class='single-input' type='text' name='72'></center></td>
										<td><center><input  class='single-input' type='text' name='73'></center></td>
										<td><center><input  class='single-input' type='text' name='74'></center></td>
										<td><center><input  class='single-input' type='text' name='75'></center></td>
										<td><center><input  class='single-input' type='text' name='76'></center></td>
										<td><center><input  class='single-input' type='text' name='77'></center></td>
										<td><center><input  class='single-input' type='text' name='78'></center></td>
										<td><center><input  class='single-input' type='text' name='79'></center></td>
										<td><center><input  class='single-input' type='text' name='80'></center></td>
										<td><center><input  class='single-input' type='text' name='81'></center></td>
										<td><center><input  class='single-input' type='text' name='82'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' type='text' name='83'></center></td>
										<td><center><input  class='single-input' type='text' name='84'></center></td>
										<td><center><input  class='single-input' type='text' name='85'></center></td>
										<td><center><input  class='single-input' type='text' name='86'></center></td>
										<td><center><input  class='single-input' type='text' name='87'></center></td>
										<td><center><input  class='single-input' type='text' name='88'></center></td>
										<td><center><input  class='single-input' type='text' name='89'></center></td>
										<td><center><input  class='single-input' type='text' name='90'></center></td>
										<td><center><input  class='single-input' type='text' name='91'></center></td>
										<td><center><input  class='single-input' type='text' name='92'></center></td>
										<td><center><input  class='single-input' type='text' name='93'></center></td>
										<td><center><input  class='single-input' type='text' name='94'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' type='text' name='95'></center></td>
										<td><center><input  class='single-input' type='text' name='96'></center></td>
										<td><center><input  class='single-input' type='text' name='97'></center></td>
										<td><center><input  class='single-input' type='text' name='98'></center></td>
										<td><center><input  class='single-input' type='text' name='99'></center></td>
										<td><center><input  class='single-input' type='text' name='100'></center></td>
										<td><center><input  class='single-input' type='text' name='101'></center></td>
										<td><center><input  class='single-input' type='text' name='102'></center></td>
										<td><center><input  class='single-input' type='text' name='103'></center></td>
										<td><center><input  class='single-input' type='text' name='104'></center></td>
										<td><center><input  class='single-input' type='text' name='105'></center></td>
										<td><center><input  class='single-input' type='text' name='106'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' type='text' name='107'></center></td>
										<td><center><input  class='single-input' type='text' name='108'></center></td>
										<td><center><input  class='single-input' type='text' name='109'></center></td>
										<td><center><input  class='single-input' type='text' name='110'></center></td>
										<td><center><input  class='single-input' type='text' name='111'></center></td>
										<td><center><input  class='single-input' type='text' name='112'></center></td>
										<td><center><input  class='single-input' type='text' name='113'></center></td>
										<td><center><input  class='single-input' type='text' name='114'></center></td>
										<td><center><input  class='single-input' type='text' name='115'></center></td>
										<td><center><input  class='single-input' type='text' name='116'></center></td>
										<td><center><input  class='single-input' type='text' name='117'></center></td>
										<td><center><input  class='single-input' type='text' name='118'></center></td>
									</tr>
								</table>
								<br>
								<table border=0>
									<tr>
										<td><b>Solução Química Irrigadora/Concentração:</b></td>
										<td width='100%'><input type='TEXT' name='119' class='single-input'></td>
									</tr>
								</table>
								<table border=0>
									<tr>
										<td><b>Medicação intracanal:</b></td>
										<td width='100%'><input type='TEXT' name='120' class='single-input'></td>
									</tr>
									<tr>
										<td><b>Cimento Obturador:</b></td>
										<td width='100%'><input type='TEXT' name='121' class='single-input'></td>
									</tr>
								</table>
								<br>
								<table>
									<tr>
										<td><b>Técnica de Obturação:</b></td>
										<td width='40px'><input type='checkbox' name='122' class='single-input'></td>
										<td>Schilder</td>
										<td width='40px'><input type='checkbox' name='123' class='single-input'></td>
										<td>Híbrida Tagger </td>
										<td width='40px'><input type='checkbox' name='124' class='single-input'></td>
										<td>Condensação Lateral</td>
									</tr>
									<tr>
										<td><b>Técnica de Instrumentação:</b></td>
										<td width='40px'><input type='checkbox' name='125' class='single-input'></td>
										<td>Escalonamento Apice-Coroa</td>
										<td width='40px'><input type='checkbox' name='126' class='single-input'></td>
										<td>Outro</td>
									</tr>
									<tr>
										<td><b>Odontometria:</b></td>
										<td width='40px'><input type='checkbox' name='127' class='single-input'></td>
										<td>Técnica Radiográfica</td>
										<td width='40px'><input type='checkbox' name='128' class='single-input'></td>
										<td>Técnica Radiográfica Auxiliada por Localizador Apical</td>
									</tr>
								</table>

								<hr>
								<h5>Repetir Endodontia:</h5><br>
								<table width='100%'>
									 <tr>
										<td>
										   <center><input type='checkbox' name='repetir17'> 17</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir16'> 16</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir15'> 15</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir14'> 14</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir13'> 13</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir12'> 12</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir11'> 11</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir21'> 21</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir22'> 22</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir23'> 23</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir24'> 24</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir25'> 25</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir26'> 26</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir27'> 27</center>
										</td>
									 </tr>
									 <tr>
										<td>
										   <center><input type='checkbox' name='repetir47'> 47</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir46'> 46</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir45'> 45</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir44'> 44</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir43'> 43</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir42'> 42</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir41'> 41</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir31'> 31</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir32'> 32</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir33'> 33</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir34'> 34</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir35'> 35</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir36'> 36</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir37'> 37</center>
										</td>
									 </tr>
									</table>
								<hr>
								<center><input type='submit' value='Salvar' class='genric-btn primary'></center>
								<input type='hidden' name='retratamento' value='1'>
							</form>

							
						<?php	
							
						}else{
							while($linhaAnam = mysql_fetch_array($resultadoAnam)){
								$id = $linhaAnam['nr_idEndodontia'];
								$dupla = $linhaAnam['nr_idDupla'];
								$data = $linhaAnam['dt_preenchimento'];
								$r1 = $linhaAnam['1'];
								$r2 = $linhaAnam['2']; 
								$r3 = $linhaAnam['3']; 
								$r4 = $linhaAnam['4']; 
								$r5 = $linhaAnam['5']; 
								$r6 = $linhaAnam['6']; 
								$r7 = $linhaAnam['7']; 
								$r8 = $linhaAnam['8']; 
								$r9 = $linhaAnam['9']; 
								$r10 = $linhaAnam['10']; 
								$r11 = $linhaAnam['11']; 
								$r12 = $linhaAnam['12']; 
								$r13 = $linhaAnam['13']; 
								$r14 = $linhaAnam['14']; 
								$r15 = $linhaAnam['15']; 
								$r16 = $linhaAnam['16']; 
								$r17 = $linhaAnam['17']; 
								$r18 = $linhaAnam['18']; 
								$r19 = $linhaAnam['19']; 
								$r20 = $linhaAnam['20']; 
								$r21 = $linhaAnam['21']; 
								$r22 = $linhaAnam['22']; 
								$r23 = $linhaAnam['23']; 
								$r24 = $linhaAnam['24']; 
								$r25 = $linhaAnam['25']; 
								$r26 = $linhaAnam['26']; 
								$r27 = $linhaAnam['27']; 
								$r28 = $linhaAnam['28']; 
								$r29 = $linhaAnam['29']; 
								$r30 = $linhaAnam['30']; 
								$r31 = $linhaAnam['31']; 
								$r32 = $linhaAnam['32']; 
								$r33 = $linhaAnam['33']; 
								$r34 = $linhaAnam['34']; 
								$r35 = $linhaAnam['35']; 
								$r36 = $linhaAnam['36']; 
								$r37 = $linhaAnam['37']; 
								$r38 = $linhaAnam['38']; 
								$r39 = $linhaAnam['39']; 
								$r40 = $linhaAnam['40']; 
								$r41 = $linhaAnam['41']; 
								$r42 = $linhaAnam['42']; 
								$r43 = $linhaAnam['43']; 
								$r44 = $linhaAnam['44']; 
								$r45 = $linhaAnam['45']; 
								$r46 = $linhaAnam['46']; 
								$r47 = $linhaAnam['47']; 
								$r48 = $linhaAnam['48']; 
								$r49 = $linhaAnam['49']; 
								$r50 = $linhaAnam['50']; 
								$r51 = $linhaAnam['51']; 
								$r52 = $linhaAnam['52']; 
								$r53 = $linhaAnam['53']; 
								$r54 = $linhaAnam['54']; 
								$r55 = $linhaAnam['55']; 
								$r56 = $linhaAnam['56']; 
								$r57 = $linhaAnam['57']; 
								$r58 = $linhaAnam['58']; 
								$r59 = $linhaAnam['59']; 
								$r60 = $linhaAnam['60']; 
								$r61 = $linhaAnam['61']; 
								$r62 = $linhaAnam['62']; 
								$r63 = $linhaAnam['63']; 
								$r64 = $linhaAnam['64']; 
								$r65 = $linhaAnam['65']; 
								$r66 = $linhaAnam['66']; 
								$r67 = $linhaAnam['67']; 
								$r68 = $linhaAnam['68']; 
								$r69 = $linhaAnam['69']; 
								$r70 = $linhaAnam['70']; 
								$r71 = $linhaAnam['71']; 
								$r72 = $linhaAnam['72']; 
								$r73 = $linhaAnam['73']; 
								$r74 = $linhaAnam['74']; 
								$r75 = $linhaAnam['75']; 
								$r76 = $linhaAnam['76']; 
								$r77 = $linhaAnam['77']; 
								$r78 = $linhaAnam['78']; 
								$r79 = $linhaAnam['79']; 
								$r80 = $linhaAnam['80']; 
								$r81 = $linhaAnam['81']; 
								$r82 = $linhaAnam['82']; 
								$r83 = $linhaAnam['83']; 
								$r84 = $linhaAnam['84']; 
								$r85 = $linhaAnam['85']; 
								$r86 = $linhaAnam['86']; 
								$r87 = $linhaAnam['87']; 
								$r88 = $linhaAnam['88']; 
								$r89 = $linhaAnam['89']; 
								$r90 = $linhaAnam['90']; 
								$r91 = $linhaAnam['91']; 
								$r92 = $linhaAnam['92']; 
								$r93 = $linhaAnam['93']; 
								$r94 = $linhaAnam['94']; 
								$r95 = $linhaAnam['95']; 
								$r96 = $linhaAnam['96']; 
								$r97 = $linhaAnam['97']; 
								$r98 = $linhaAnam['98']; 
								$r99 = $linhaAnam['99']; 
								$r100 = $linhaAnam['100']; 
								$r101 = $linhaAnam['101']; 
								$r102 = $linhaAnam['102']; 
								$r103 = $linhaAnam['103']; 
								$r104 = $linhaAnam['104']; 
								$r105 = $linhaAnam['105']; 
								$r106 = $linhaAnam['106']; 
								$r107 = $linhaAnam['107']; 
								$r108 = $linhaAnam['108']; 
								$r109 = $linhaAnam['109']; 
								$r110 = $linhaAnam['110']; 
								$r111 = $linhaAnam['111']; 
								$r112 = $linhaAnam['112']; 
								$r113 = $linhaAnam['113']; 
								$r114 = $linhaAnam['114']; 
								$r115 = $linhaAnam['115']; 
								$r116 = $linhaAnam['116']; 
								$r117 = $linhaAnam['117']; 
								$r118 = $linhaAnam['118']; 
								$r119 = $linhaAnam['119']; 
								$r120 = $linhaAnam['120']; 
								$r121 = $linhaAnam['121']; 
								$r122 = $linhaAnam['122']; 
								$r123 = $linhaAnam['123']; 
								$r124 = $linhaAnam['124']; 
								$r125 = $linhaAnam['125']; 
								$r126 = $linhaAnam['126']; 
								$r127 = $linhaAnam['127']; 
								$r128 = $linhaAnam['128']; 
								$r129 = $linhaAnam['129']; 
								$r130 = $linhaAnam['130']; 
							}
							
						?>	
							<form method='POST' action='atualizarEndo.php'>
								<input type='hidden' name='id' value='<?php echo $id; ?>'
								<!-- ############################################################## impressão endo 1 -->
								<b>Dupla Responsável: </b>
								<select class='single-input' name='dupla'>
								<?php
									
									echo $sql = "SELECT * FROM tb_duplas WHERE nr_idDupla = ".$dupla." LIMIT 1";
									$resultado = mysql_query($sql) or die();
									while($linha = mysql_fetch_array($resultado)){
										
										$sqlNome1 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linha['nr_cpf1']."'";
										$resultadoNome1 = mysql_query($sqlNome1) or die();
										while($linhaNome1 = mysql_fetch_array($resultadoNome1)){
											$Nome1 = $linhaNome1['nm_nomeAluno']; 
											$periodo = $linhaNome1['nr_periodo']; 
										}
										
										$sqlNome2 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linha['nr_cpf2']."'";
										$resultadoNome2 = mysql_query($sqlNome2) or die();
										while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
											$Nome2 = $linhaNome2['nm_nomeAluno']; 
										}
										
										
										echo "<option value='".$linha['nr_idDupla']."'>".$Nome1." e ".$Nome2." (".$periodo."º Periodo)</option>";
									}
									
									
									$sqlNome = "SELECT * FROM tb_duplas WHERE nm_situacao = 'Ativo'";
									$resultadoNome = mysql_query($sqlNome) or die();
									while($linhaNome = mysql_fetch_array($resultadoNome)){
										if($linhaNome['nr_idDupla'] != $dupla){
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
									}
								?>
								</select><br>
								
								
								
								<b>Data do Preenchimento: </b><input type='text' name='data' class='single-input' value='<?php echo $data; ?>'><br>
								<b>Queixa Principal: </b><input type='text' name='1' class='single-input' value='<?php echo $r1; ?>'>
								<input type='hidden' name='2' value='<?php echo $d; ?>_1' class='single-input'>
								<input type='hidden' name='cpf' value='<?php echo $_GET['cpf']; ?>' class='single-input'>
								
								<hr>
								<br>
								<h5>Semiologia Subjetiva – Características Clínicas da Dor</h5><br>
								<table border=0>
									<tr>
										<td><b>Sede: </b></td>
										<td width='40px'><input type='checkbox' name='3' class='single-input'  value='<?php echo $r3; ?>' <?php echo $r3; ?>></td>
										<td>Localizada</td>
										<td width='40px'><input type='checkbox' name='4' class='single-input'  value='<?php echo $r4; ?>' <?php echo $r4; ?>></td>
										<td>Difusa</td>
									</tr>
									
									
									<tr>	
										<td><b>Aparecimento: </b></td>
										<td width='40px'><input type='checkbox' name='5' class='single-input' value='<?php echo $r5; ?>' <?php echo $r5; ?>></td>
										<td>Provocada</td>
										<td width='40px'><input type='checkbox' name='6' class='single-input' value='<?php echo $r6; ?>' <?php echo $r6; ?>></td>
										<td style='margin-rigth:10px;'>Espontânea</td>
									</tr>
									
									
									<tr>
										<td><b>Duração: </b></td>
										<td width='40px'><input type='checkbox' name='7' class='single-input' value='<?php echo $r7; ?>' <?php echo $r7; ?>></td>
										<td>Curta</td>
										<td width='40px'><input type='checkbox' name='8' class='single-input' value='<?php echo $r8; ?>' <?php echo $r8; ?>></td>
										<td>Longa</td>
									</tr>
									
									
									<tr>
										<td><b>Frequência: </b></td>
										<td width='40px'><input type='checkbox' name='9' class='single-input' value='<?php echo $r9; ?>' <?php echo $r9; ?>></td>
										<td>Intermitente</td>
										<td width='40px'><input type='checkbox' name='10' class='single-input' value='<?php echo $r10; ?>' <?php echo $r10; ?>></td>
										<td>Contínua</td>
									</tr>
									
									<tr>
										<td><b>Intensidade: </b></td>
										<td width='40px'><input type='checkbox' name='11' class='single-input' value='<?php echo $r11; ?>' <?php echo $r11; ?>></td>
										<td>Leve</td>
										<td width='40px'><input type='checkbox' name='12' class='single-input' value='<?php echo $r12; ?>' <?php echo $r12; ?>></td>
										<td>Moderada</td>
										<td width='40px'><input type='checkbox' name='13' class='single-input' value='<?php echo $r13; ?>' <?php echo $r13; ?>></td>
										<td>Severa</td>
									</tr>
								</table>
								
								<hr>
								<h5>Semiologia Objetiva</h5><br>
								<table border=0>
									<tr>
										<td><b>Mucosa Gengival: </b></td>
										<td width='40px'><input type='checkbox' name='14' class='single-input' value='<?php echo $r14; ?>' <?php echo $r14; ?>></td>
										<td>Normal</td>
										<td width='40px'><input type='checkbox' name='15' class='single-input' value='<?php echo $r15; ?>' <?php echo $r15; ?>></td>
										<td>Doença Periodontal</td>
										<td width='40px'><input type='checkbox' name='16' class='single-input' value='<?php echo $r16; ?>' <?php echo $r16; ?>></td>
										<td>Presença de Fístula</td>
										<td width='40px'><input type='checkbox' name='17' class='single-input' value='<?php echo $r17; ?>' <?php echo $r17; ?>></td>
										<td>Presença de Tumefação</td>
									</tr>
								</table>	
								<table>	
									<tr>
										<td width='190px;'><b>Sensibilidade a Palpação: </b></td>
										<td width='40px'><input type='checkbox' name='18' class='single-input' value='<?php echo $r18; ?>' <?php echo $r18; ?>></td>
										<td>Presença de Dor</td>
										<td width='40px'><input type='checkbox' name='19' class='single-input' value='<?php echo $r19; ?>' <?php echo $r19; ?>></td>
										<td>Ausência de Dor</td>
									</tr>
								</table>	
								<table>		
									<tr>
										<td><b>Mobilidade: </b></td>
										<td width='40px'><input type='checkbox' name='20' class='single-input' value='<?php echo $r20; ?>' <?php echo $r20; ?>></td>
										<td>Normal</td>
										<td width='40px'><input type='checkbox' name='21' class='single-input' value='<?php echo $r21; ?>' <?php echo $r21; ?>></td>
										<td>Acentuada</td>
									</tr>
									
									<tr>
										<td><b>Inspeção: </b></td>
										<td width='40px'><input type='checkbox' name='22' class='single-input' value='<?php echo $r22; ?>' <?php echo $r22; ?>></td>
										<td>Coroa íntegra</td>
										<td width='40px'><input type='checkbox' name='23' class='single-input' value='<?php echo $r23; ?>' <?php echo $r23; ?>></td>
										<td>Presença de restaurações</td>
										<td width='40px'><input type='checkbox' name='24' class='single-input' value='<?php echo $r24; ?>' <?php echo $r24; ?>></td>
										<td>Presença de cárie</td>
										<td width='40px'><input type='checkbox' name='25' class='single-input' value='<?php echo $r25; ?>' <?php echo $r25; ?>></td>
										<td>Presença de fratura</td>
									</tr>
									
									<tr>
										<td></td>
										<td width='40px'><input type='checkbox' name='26' class='single-input' value='<?php echo $r26; ?>' <?php echo $r26; ?>></td>
										<td>Polpa exposta com vitalidade</td>
										<td width='40px'><input type='checkbox' name='27' class='single-input' value='<?php echo $r27; ?>' <?php echo $r27; ?>></td>
										<td>Polpa exposta sem vitalidade</td>
										<td width='40px'><input type='checkbox' name='28' class='single-input' value='<?php echo $r28; ?>' <?php echo $r28; ?>></td>
										<td>Alteração da cor da coroa dental</td>
										<td width='40px'><input type='checkbox' name='29' class='single-input' value='<?php echo $r29; ?>' <?php echo $r29; ?>></td>
										<td>Alteração morfológica coronária</td>
									</tr>
								</table>  
								  
								<hr>
								<h5>Exame dos Dentes</h5><br>
								<table border=0>
									<tr>
										<td><b>Testes Térmicos: </b></td>
										<td width='40px'><input type='checkbox' name='30' class='single-input' value='<?php echo $r30; ?>' <?php echo $r30; ?>></td>
										<td>Dor ao Frio</td>
										<td width='40px'><input type='checkbox' name='31' class='single-input' value='<?php echo $r31; ?>' <?php echo $r31; ?>></td>
										<td>Dor ao Calor</td>
										<td width='40px'><input type='checkbox' name='32' class='single-input' value='<?php echo $r32; ?>' <?php echo $r32; ?>></td>
										<td>Ausência de Dor</td>
									</tr>
									
									<tr>
										<td><b>Sensibilidade à Percussão: </b></td>
										<td width='40px'><input type='checkbox' name='33' class='single-input' value='<?php echo $r33; ?>' <?php echo $r33; ?>></td>
										<td>Vertical</td>
										<td width='40px'><input type='checkbox' name='34' class='single-input' value='<?php echo $r34; ?>' <?php echo $r34; ?>></td>
										<td>Horizontal</td>
									</tr>
									
									<tr>
										<td><b>Sensibilidade de Cavidade: </b></td>
										<td width='40px'><input type='checkbox' name='129' class='single-input' value='<?php echo $r129; ?>' <?php echo $r129; ?>></td>
										<td>Presença de Dor</td>
										<td width='40px'><input type='checkbox' name='130' class='single-input' value='<?php echo $r130; ?>' <?php echo $r130; ?>></td>
										<td>Ausência de Dor</td>
									</tr>
								</table>
									
								<hr>
								<h5>Exame Radiográfico</h5><br>
								<table border=0>	
									<tr>
										<td width='40px'><input type='checkbox' name='35' class='single-input' value='<?php echo $r35; ?>' <?php echo $r35; ?>></td>
										<td>Periodonto Normal</td>
										<td width='40px'><input type='checkbox' name='36' class='single-input' value='<?php echo $r36; ?>' <?php echo $r36; ?>></td>
										<td>Espessamento Periodontal</td>
										<td width='40px'><input type='checkbox' name='37' class='single-input' value='<?php echo $r37; ?>' <?php echo $r37; ?>></td>
										<td>Lesão Perirradicular</td>
										<td width='40px'><input type='checkbox' name='38' class='single-input' value='<?php echo $r38; ?>' <?php echo $r38; ?>></td>
										<td>Rizogênese Incompleta</td>
										<td width='40px'><input type='checkbox' name='39' class='single-input' value='<?php echo $r39; ?>' <?php echo $r39; ?>></td>
										<td>Trepanação</td>
									</tr>
									
									<tr>
										<td width='40px'><input type='checkbox' name='40' class='single-input' value='<?php echo $r40; ?>' <?php echo $r40; ?>></td>
										<td>Retentor Intra-Radicular</td>
										<td width='40px'><input type='checkbox' name='41' class='single-input' value='<?php echo $r41; ?>' <?php echo $r41; ?>></td>
										<td>Instrumento Fraturado</td>
										<td width='40px'><input type='checkbox' name='42' class='single-input' value='<?php echo $r42; ?>' <?php echo $r42; ?>></td>
										<td>T.E Insatisfatório</td>
										<td width='40px'><input type='checkbox' name='43' class='single-input' value='<?php echo $r43; ?>' <?php echo $r43; ?>></td>
										<td>Reabsorção: Interna</td>
										<td width='40px'><input type='checkbox' name='44' class='single-input' value='<?php echo $r44; ?>' <?php echo $r44; ?>></td>
										<td>Reabsorção: Externa</td>
									</tr>
									
									<tr>
										<td width='40px'><input type='checkbox' name='45' class='single-input' value='<?php echo $r45; ?>' <?php echo $r45; ?>></td>
										<td>Fratura Dentária: Coronária</td>
										<td width='40px'><input type='checkbox' name='46' class='single-input' value='<?php echo $r46; ?>' <?php echo $r46; ?>></td>
										<td>Fratura Dentária: Radicular</td>
									</tr>
								</table>  
								  
								<hr>
								<h5>Diagnóstico Clínico Provável</h5><br>
								<table border=0>
									<tr>
										<td width='40px'><input type='checkbox' name='47' class='single-input' value='<?php echo $r47; ?>' <?php echo $r47; ?>></td>
										<td>Polpa Normal</td>
										<td width='40px'><input type='checkbox' name='48' class='single-input' value='<?php echo $r48; ?>' <?php echo $r48; ?>></td>
										<td>Abscesso Dentoalveolar Agudo</td>
										<td width='40px'><input type='checkbox' name='49' class='single-input' value='<?php echo $r49; ?>' <?php echo $r49; ?>></td>
										<td>Polpa Inflamada Reversivelmente</td>
										<td width='40px'><input type='checkbox' name='50' class='single-input' value='<?php echo $r50; ?>' <?php echo $r50; ?>></td>
										<td>Polpa inflamada irreversivelmente</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='51' class='single-input' value='<?php echo $r51; ?>' <?php echo $r51; ?>></td>
										<td>Abscesso Dentoaveolar Crônico</td>
										<td width='40px'><input type='checkbox' name='52' class='single-input' value='<?php echo $r52; ?>' <?php echo $r52; ?>></td>
										<td>Granuloma Apical/Cisto Periodontal Apical</td>
										<td width='40px'><input type='checkbox' name='53' class='single-input' value='<?php echo $r53; ?>' <?php echo $r53; ?>></td>
										<td>Necrose Pulpar </td>
										<td width='40px'><input type='checkbox' name='54' class='single-input' value='<?php echo $r54; ?>' <?php echo $r54; ?>></td>
										<td>Displasia Cementária Periapical</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='55' class='single-input' value='<?php echo $r55; ?>' <?php echo $r55; ?>></td>
										<td>Pericementite Apical Aguda </td>
										<td width='40px'><input type='checkbox' name='56' class='single-input' value='<?php echo $r56; ?>' <?php echo $r56; ?>></td>
										<td>Pericementite Apical Crônica</td>
										<td colspan=4><input type='text' name='57' placeholder='Outras Patologias' class='single-input' value='<?php echo $r57; ?>'></td>
									</tr>
								</table> 
								  
								<hr>
								<h5>Indicação de Tratamento</h5><br>
								<table border=0>
									<tr>
										<td width='40px'><input type='checkbox' name='58' class='single-input' value='<?php echo $r58; ?>' <?php echo $r58; ?>></td>
										<td>Proteção Pulpar Indireta</td>
										<td width='40px'><input type='checkbox' name='59' class='single-input' value='<?php echo $r59; ?>' <?php echo $r59; ?>></td>
										<td>Proteção Pulpar Direta </td>
										<td width='40px'><input type='checkbox' name='60' class='single-input' value='<?php echo $r60; ?>' <?php echo $r60; ?>></td>
										<td>Tratamento de Canal </td>
										<td width='40px'><input type='checkbox' name='61' class='single-input' value='<?php echo $r61; ?>' <?php echo $r61; ?>></td>
										<td>Retratamento de canal</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='62' class='single-input' value='<?php echo $r62; ?>' <?php echo $r62; ?>></td>
										<td>Apicigênese</td>
										<td width='40px'><input type='checkbox' name='63' class='single-input' value='<?php echo $r63; ?>' <?php echo $r63; ?>></td>
										<td>Apicetomia, Retropreparo e Retrobturação</td>
										<td width='40px'><input type='checkbox' name='64' class='single-input' value='<?php echo $r64; ?>' <?php echo $r64; ?>></td>
										<td>Transplante Dentário</td>
										<td width='40px'><input type='checkbox' name='65' class='single-input' value='<?php echo $r65; ?>' <?php echo $r65; ?>></td>
										<td>Reimplante Dentário</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='66' class='single-input' value='<?php echo $r66; ?>' <?php echo $r66; ?>></td>
										<td>Tratamento Não-Cirúrgico de Perfuração</td>
										<td width='40px'><input type='checkbox' name='67' class='single-input' value='<?php echo $r67; ?>' <?php echo $r67; ?>></td>
										<td>Tratamento Cirúrgico de Perfuração</td>
										<td width='40px'><input type='checkbox' name='68' class='single-input' value='<?php echo $r68; ?>' <?php echo $r68; ?>></td>
										<td>Curetagem Apical</td>
										<td width='40px'><input type='checkbox' name='69' class='single-input' value='<?php echo $r69; ?>' <?php echo $r69; ?>></td>
										<td>Apicificação</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='70' class='single-input' value='<?php echo $r70; ?>' <?php echo $r70; ?>></td>
										<td>Proservação / acompanhamento</td>
									</tr>
								</table> 
								
								<hr>
								<h5>Terapêutica Sistêmica</h5>
								<br>
								<table border=0 width='100%'>
									<tr>
										<td colspan=5 style='border: 1px solid rgb(193,193,255);'><center>Odontometria</center></td>
										<td colspan=7 style='border: 1px solid rgb(193,193,255);'><center>Preparo Cirúrgico-Mecânico</center></td>
									</tr>
									<tr>
										<td><center><b>Canal</b></center></td>
										<td><center><b>CDR</b></center></td>
										<td><center><b>CP</b></center></td>
										<td><center><b>CT</b></center></td>
										<td><center><b>Ref.</b></center></td>
										<td colspan=2><center><b>Prep. Cervical</b></center></td>
										<td><center><b>IAI</b></center></td>
										<td><center><b>IM</b></center></td>
										<td><center><b>IP</b></center></td>
										<td colspan=2><center><b>Ápice / Coroa Step Back</b></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' value='<?php echo $r71; ?>' type='text' name='71'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r72; ?>' type='text' name='72'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r73; ?>' type='text' name='73'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r74; ?>' type='text' name='74'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r75; ?>' type='text' name='75'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r76; ?>' type='text' name='76'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r77; ?>' type='text' name='77'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r78; ?>' type='text' name='78'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r79; ?>' type='text' name='79'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r80; ?>' type='text' name='80'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r81; ?>' type='text' name='81'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r82; ?>' type='text' name='82'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' value='<?php echo $r83; ?>' type='text' name='83'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r84; ?>' type='text' name='84'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r85; ?>' type='text' name='85'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r86; ?>' type='text' name='86'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r87; ?>' type='text' name='87'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r88; ?>' type='text' name='88'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r89; ?>' type='text' name='89'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r90; ?>' type='text' name='90'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r91; ?>' type='text' name='91'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r92; ?>' type='text' name='92'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r93; ?>' type='text' name='93'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r94; ?>' type='text' name='94'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' value='<?php echo $r95; ?>' type='text' name='95'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r96; ?>' type='text' name='96'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r97; ?>' type='text' name='97'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r98; ?>' type='text' name='98'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r99; ?>' type='text' name='99'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r100; ?>' type='text' name='100'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r101; ?>' type='text' name='101'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r102; ?>' type='text' name='102'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r103; ?>' type='text' name='103'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r104; ?>' type='text' name='104'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r105; ?>' type='text' name='105'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r106; ?>' type='text' name='106'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' value='<?php echo $r107; ?>' type='text' name='107'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r108; ?>' type='text' name='108'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r109; ?>' type='text' name='109'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r110; ?>' type='text' name='110'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r111; ?>' type='text' name='111'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r112; ?>' type='text' name='112'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r113; ?>' type='text' name='113'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r114; ?>' type='text' name='114'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r115; ?>' type='text' name='115'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r116; ?>' type='text' name='116'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r117; ?>' type='text' name='117'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r118; ?>' type='text' name='118'></center></td>
									</tr>
								</table>
								<br>
								<table border=0>
									<tr>
										<td><b>Solução Química Irrigadora/Concentração:</b></td>
										<td width='100%'><input type='TEXT' name='119' class='single-input' value='<?php echo $r119; ?>'></td>
									</tr>
								</table>
								<table border=0>
									<tr>
										<td><b>Medicação intracanal:</b></td>
										<td width='100%'><input type='TEXT' name='120' class='single-input' value='<?php echo $r120; ?>'></td>
									</tr>
									<tr>
										<td><b>Cimento Obturador:</b></td>
										<td width='100%'><input type='TEXT' name='121' class='single-input' value='<?php echo $r121; ?>'></td>
									</tr>
								</table>
								<br>
								<table>
									<tr>
										<td><b>Técnica de Obturação:</b></td>
										<td width='40px'><input type='checkbox' name='122' class='single-input' value='<?php echo $r122; ?>' <?php echo $r122; ?>></td>
										<td>Schilder</td>
										<td width='40px'><input type='checkbox' name='123' class='single-input' value='<?php echo $r123; ?>' <?php echo $r123; ?>></td>
										<td>Híbrida Tagger </td>
										<td width='40px'><input type='checkbox' name='124' class='single-input' value='<?php echo $r124; ?>' <?php echo $r124; ?>></td>
										<td>Condensação Lateral</td>
									</tr>
									<tr>
										<td><b>Técnica de Instrumentação:</b></td>
										<td width='40px'><input type='checkbox' name='125' class='single-input' value='<?php echo $r125; ?>' <?php echo $r125; ?>></td>
										<td>Escalonamento Apice-Coroa</td>
										<td width='40px'><input type='checkbox' name='126' class='single-input' value='<?php echo $r126; ?>' <?php echo $r126; ?>></td>
										<td>Outro</td>
									</tr>
									<tr>
										<td><b>Odontometria:</b></td>
										<td width='40px'><input type='checkbox' name='127' class='single-input' value='<?php echo $r127; ?>' <?php echo $r127; ?>></td>
										<td>Técnica Radiográfica</td>
										<td width='40px'><input type='checkbox' name='128' class='single-input' value='<?php echo $r128; ?>' <?php echo $r128; ?>></td>
										<td>Técnica Radiográfica Auxiliada por Localizador Apical</td>
									</tr>
								</table>
								<br>
								<center>
									<input type='submit' value='Atualizar' class='genric-btn primary'>
									<a href='excluirEndo.php?id=<?php echo $id; ?>' class='genric-btn secondary'>Excluir</a>
								</center>
							</form>
							
						<?php	
							
							
						}
						
						
						?>
						
						
						
						
						
						
						
					  </div>
					</div>

				  </div>
				  <!-- Accordion card -->

				  <!-- Accordion card -->
				  <div class="card">

					<!-- Card header -->
					<div class="card-header" role="tab" id="headingTwo<?php echo $d; ?>">
					  <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo<?php echo $d; ?>"
						aria-expanded="false" aria-controls="collapseTwo<?php echo $d; ?>">
						<h5 class="mb-0">
						  Dente <?php echo $d; ?> - Retratamento
						</h5>
					  </a>
					</div>

					<!-- Card body -->
					<div id="collapseTwo<?php echo $d; ?>" class="collapse" role="tabpanel" aria-labelledby="headingTwo<?php echo $d; ?>"
					  data-parent="#accordionEx">
					  <div class="card-body">
						
						<?php
						
						$sqlAnam = "SELECT * FROM `tb_endodontia` WHERE `nr_cpfPaciente` = '".$_GET['cpf']."' AND `2` = '".$d."_2'";
						$resultadoAnam = mysql_query($sqlAnam) or die();
						$numImg = mysql_num_rows($resultadoAnam);
						if($numImg == 0){
							
						?>	
							
							<!-- ###################################################################################### CADASTRO ENDO 2 -->
							<form method='POST' action='inserirEndo.php'>
								<input type='hidden' name='retratamento' value='2'>
								<b>Dupla Responsável:</b>
								<select class='single-input' name='dupla'>
								<?php
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
								?>
								</select><br>
							
								<b>Queixa Principal: </b><input type='text' name='1' class='single-input' placeholder='Queixa Principal'>
								<input type='hidden' name='2' value='<?php echo $d; ?>_2' class='single-input'>
								<input type='hidden' name='cpf' value='<?php echo $_GET['cpf']; ?>' class='single-input'>
								
								<hr>
								<br>
								<h5>Semiologia Subjetiva – Características Clínicas da Dor</h5><br>
								<table border=0>
									<tr>
										<td><b>Sede: </b></td>
										<td width='40px'><input type='checkbox' name='3' class='single-input'></td>
										<td>Localizada</td>
										<td width='40px'><input type='checkbox' name='4' class='single-input'></td>
										<td>Difusa</td>
									</tr>
									
									
									<tr>	
										<td><b>Aparecimento: </b></td>
										<td width='40px'><input type='checkbox' name='5' class='single-input'></td>
										<td>Provocada</td>
										<td width='40px'><input type='checkbox' name='6' class='single-input'></td>
										<td style='margin-rigth:10px;'>Espontânea</td>
									</tr>
									
									
									<tr>
										<td><b>Duração: </b></td>
										<td width='40px'><input type='checkbox' name='7' class='single-input'></td>
										<td>Curta</td>
										<td width='40px'><input type='checkbox' name='8' class='single-input'></td>
										<td>Longa</td>
									</tr>
									
									
									<tr>
										<td><b>Frequência: </b></td>
										<td width='40px'><input type='checkbox' name='9' class='single-input'></td>
										<td>Intermitente</td>
										<td width='40px'><input type='checkbox' name='10' class='single-input'></td>
										<td>Contínua</td>
									</tr>
									
									<tr>
										<td><b>Intensidade: </b></td>
										<td width='40px'><input type='checkbox' name='11' class='single-input'></td>
										<td>Leve</td>
										<td width='40px'><input type='checkbox' name='12' class='single-input'></td>
										<td>Moderada</td>
										<td width='40px'><input type='checkbox' name='13' class='single-input'></td>
										<td>Severa</td>
									</tr>
								</table>
								
								<hr>
								<h5>Semiologia Objetiva</h5><br>
								<table border=0>
									<tr>
										<td><b>Mucosa Gengival: </b></td>
										<td width='40px'><input type='checkbox' name='14' class='single-input'></td>
										<td>Normal</td>
										<td width='40px'><input type='checkbox' name='15' class='single-input'></td>
										<td>Doença Periodontal</td>
										<td width='40px'><input type='checkbox' name='16' class='single-input'></td>
										<td>Presença de Fístula</td>
										<td width='40px'><input type='checkbox' name='17' class='single-input'></td>
										<td>Presença de Tumefação</td>
									</tr>
								</table>	
								<table>	
									<tr>
										<td width='190px;'><b>Sensibilidade a Palpação: </b></td>
										<td width='40px'><input type='checkbox' name='18' class='single-input'></td>
										<td>Presença de Dor</td>
										<td width='40px'><input type='checkbox' name='19' class='single-input'></td>
										<td>Ausência de Dor</td>
									</tr>
								</table>	
								<table>		
									<tr>
										<td><b>Mobilidade: </b></td>
										<td width='40px'><input type='checkbox' name='20' class='single-input'></td>
										<td>Normal</td>
										<td width='40px'><input type='checkbox' name='21' class='single-input'></td>
										<td>Acentuada</td>
									</tr>
									
									<tr>
										<td><b>Inspeção: </b></td>
										<td width='40px'><input type='checkbox' name='22' class='single-input'></td>
										<td>Coroa íntegra</td>
										<td width='40px'><input type='checkbox' name='23' class='single-input'></td>
										<td>Presença de restaurações</td>
										<td width='40px'><input type='checkbox' name='24' class='single-input'></td>
										<td>Presença de cárie</td>
										<td width='40px'><input type='checkbox' name='25' class='single-input'></td>
										<td>Presença de fratura</td>
									</tr>
									
									<tr>
										<td></td>
										<td width='40px'><input type='checkbox' name='26' class='single-input'></td>
										<td>Polpa exposta com vitalidade</td>
										<td width='40px'><input type='checkbox' name='27' class='single-input'></td>
										<td>Polpa exposta sem vitalidade</td>
										<td width='40px'><input type='checkbox' name='28' class='single-input'></td>
										<td>Alteração da cor da coroa dental</td>
										<td width='40px'><input type='checkbox' name='29' class='single-input'></td>
										<td>Alteração morfológica coronária</td>
									</tr>
								</table>  
								  
								<hr>
								<h5>Exame dos Dentes</h5><br>
								<table border=0>
									<tr>
										<td><b>Testes Térmicos: </b></td>
										<td width='40px'><input type='checkbox' name='30' class='single-input'></td>
										<td>Dor ao Frio</td>
										<td width='40px'><input type='checkbox' name='31' class='single-input'></td>
										<td>Dor ao Calor</td>
										<td width='40px'><input type='checkbox' name='32' class='single-input'></td>
										<td>Ausência de Dor</td>
									</tr>
									
									<tr>
										<td><b>Sensibilidade à Percussão: </b></td>
										<td width='40px'><input type='checkbox' name='33' class='single-input'></td>
										<td>Vertical</td>
										<td width='40px'><input type='checkbox' name='34' class='single-input'></td>
										<td>Horizontal</td>
									</tr>
									
									<tr>
										<td><b>Sensibilidade de Cavidade: </b></td>
										<td width='40px'><input type='checkbox' name='129' class='single-input'></td>
										<td>Presença de Dor</td>
										<td width='40px'><input type='checkbox' name='130' class='single-input'></td>
										<td>Ausência de Dor</td>
									</tr>
								</table>  
								<hr>	
								<h5>Exame Radiográfico</h5><br>
								<table border=0>								
									<tr>
										<td width='40px'><input type='checkbox' name='35' class='single-input'></td>
										<td>Periodonto Normal</td>
										<td width='40px'><input type='checkbox' name='36' class='single-input'></td>
										<td>Espessamento Periodontal</td>
										<td width='40px'><input type='checkbox' name='37' class='single-input'></td>
										<td>Lesão Perirradicular</td>
										<td width='40px'><input type='checkbox' name='38' class='single-input'></td>
										<td>Rizogênese Incompleta</td>
										<td width='40px'><input type='checkbox' name='39' class='single-input'></td>
										<td>Trepanação</td>
									</tr>
									
									<tr>
										<td width='40px'><input type='checkbox' name='40' class='single-input'></td>
										<td>Retentor Intra-Radicular</td>
										<td width='40px'><input type='checkbox' name='41' class='single-input'></td>
										<td>Instrumento Fraturado</td>
										<td width='40px'><input type='checkbox' name='42' class='single-input'></td>
										<td>T.E Insatisfatório</td>
										<td width='40px'><input type='checkbox' name='43' class='single-input'></td>
										<td>Reabsorção: Interna</td>
										<td width='40px'><input type='checkbox' name='44' class='single-input'></td>
										<td>Reabsorção: Externa</td>
									</tr>
									
									<tr>
										<td width='40px'><input type='checkbox' name='45' class='single-input'></td>
										<td>Fratura Dentária: Coronária</td>
										<td width='40px'><input type='checkbox' name='46' class='single-input'></td>
										<td>Fratura Dentária: Radicular</td>
									</tr>
								</table>  
								
								  
								<hr>
								<h5>Diagnóstico Clínico Provável</h5><br>
								<table border=0>
									<tr>
										<td width='40px'><input type='checkbox' name='47' class='single-input'></td>
										<td>Polpa Normal</td>
										<td width='40px'><input type='checkbox' name='48' class='single-input'></td>
										<td>Abscesso Dentoalveolar Agudo</td>
										<td width='40px'><input type='checkbox' name='49' class='single-input'></td>
										<td>Polpa Inflamada Reversivelmente</td>
										<td width='40px'><input type='checkbox' name='50' class='single-input'></td>
										<td>Polpa inflamada irreversivelmente</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='51' class='single-input'></td>
										<td>Abscesso Dentoaveolar Crônico</td>
										<td width='40px'><input type='checkbox' name='52' class='single-input'></td>
										<td>Granuloma Apical/Cisto Periodontal Apical</td>
										<td width='40px'><input type='checkbox' name='53' class='single-input'></td>
										<td>Necrose Pulpar </td>
										<td width='40px'><input type='checkbox' name='54' class='single-input'></td>
										<td>Displasia Cementária Periapical</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='55' class='single-input'></td>
										<td>Pericementite Apical Aguda </td>
										<td width='40px'><input type='checkbox' name='56' class='single-input'></td>
										<td>Pericementite Apical Crônica</td>
										<td colspan=4><input type='text' name='57' placeholder='Outras Patologias' class='single-input'></td>
									</tr>
								</table> 
								  
								<hr>
								<h5>Indicação de Tratamento</h5><br>
								<table border=0>
									<tr>
										<td width='40px'><input type='checkbox' name='58' class='single-input'></td>
										<td>Proteção Pulpar Indireta</td>
										<td width='40px'><input type='checkbox' name='59' class='single-input'></td>
										<td>Proteção Pulpar Direta </td>
										<td width='40px'><input type='checkbox' name='60' class='single-input'></td>
										<td>Tratamento de Canal </td>
										<td width='40px'><input type='checkbox' name='61' class='single-input'></td>
										<td>Retratamento de canal</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='62' class='single-input'></td>
										<td>Apicigênese</td>
										<td width='40px'><input type='checkbox' name='63' class='single-input'></td>
										<td>Apicetomia, Retropreparo e Retrobturação</td>
										<td width='40px'><input type='checkbox' name='64' class='single-input'></td>
										<td>Transplante Dentário</td>
										<td width='40px'><input type='checkbox' name='65' class='single-input'></td>
										<td>Reimplante Dentário</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='66' class='single-input'></td>
										<td>Tratamento Não-Cirúrgico de Perfuração</td>
										<td width='40px'><input type='checkbox' name='67' class='single-input'></td>
										<td>Tratamento Cirúrgico de Perfuração</td>
										<td width='40px'><input type='checkbox' name='68' class='single-input'></td>
										<td>Curetagem Apical</td>
										<td width='40px'><input type='checkbox' name='69' class='single-input'></td>
										<td>Apicificação</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='70' class='single-input'></td>
										<td>Proservação / acompanhamento</td>
									</tr>
								</table> 
								
								<hr>
								<h5>Terapêutica Sistêmica</h5>
								<br>
								<table border=0 width='100%'>
									<tr>
										<td colspan=5 style='border: 1px solid rgb(193,193,255);'><center>Odontometria</center></td>
										<td colspan=7 style='border: 1px solid rgb(193,193,255);'><center>Preparo Cirúrgico-Mecânico</center></td>
									</tr>

									<tr>
										<td><center><b>Canal</b></center></td>
										<td><center><b>CDR</b></center></td>
										<td><center><b>CP</b></center></td>
										<td><center><b>CT</b></center></td>
										<td><center><b>Ref.</b></center></td>
										<td colspan=2><center><b>Prep. Cervical</b></center></td>
										<td><center><b>IAI</b></center></td>
										<td><center><b>IM</b></center></td>
										<td><center><b>IP</b></center></td>
										<td colspan=2><center><b>Ápice / Coroa Step Back</b></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' type='text' name='71'></center></td>
										<td><center><input  class='single-input' type='text' name='72'></center></td>
										<td><center><input  class='single-input' type='text' name='73'></center></td>
										<td><center><input  class='single-input' type='text' name='74'></center></td>
										<td><center><input  class='single-input' type='text' name='75'></center></td>
										<td><center><input  class='single-input' type='text' name='76'></center></td>
										<td><center><input  class='single-input' type='text' name='77'></center></td>
										<td><center><input  class='single-input' type='text' name='78'></center></td>
										<td><center><input  class='single-input' type='text' name='79'></center></td>
										<td><center><input  class='single-input' type='text' name='80'></center></td>
										<td><center><input  class='single-input' type='text' name='81'></center></td>
										<td><center><input  class='single-input' type='text' name='82'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' type='text' name='83'></center></td>
										<td><center><input  class='single-input' type='text' name='84'></center></td>
										<td><center><input  class='single-input' type='text' name='85'></center></td>
										<td><center><input  class='single-input' type='text' name='86'></center></td>
										<td><center><input  class='single-input' type='text' name='87'></center></td>
										<td><center><input  class='single-input' type='text' name='88'></center></td>
										<td><center><input  class='single-input' type='text' name='89'></center></td>
										<td><center><input  class='single-input' type='text' name='90'></center></td>
										<td><center><input  class='single-input' type='text' name='91'></center></td>
										<td><center><input  class='single-input' type='text' name='92'></center></td>
										<td><center><input  class='single-input' type='text' name='93'></center></td>
										<td><center><input  class='single-input' type='text' name='94'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' type='text' name='95'></center></td>
										<td><center><input  class='single-input' type='text' name='96'></center></td>
										<td><center><input  class='single-input' type='text' name='97'></center></td>
										<td><center><input  class='single-input' type='text' name='98'></center></td>
										<td><center><input  class='single-input' type='text' name='99'></center></td>
										<td><center><input  class='single-input' type='text' name='100'></center></td>
										<td><center><input  class='single-input' type='text' name='101'></center></td>
										<td><center><input  class='single-input' type='text' name='102'></center></td>
										<td><center><input  class='single-input' type='text' name='103'></center></td>
										<td><center><input  class='single-input' type='text' name='104'></center></td>
										<td><center><input  class='single-input' type='text' name='105'></center></td>
										<td><center><input  class='single-input' type='text' name='106'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' type='text' name='107'></center></td>
										<td><center><input  class='single-input' type='text' name='108'></center></td>
										<td><center><input  class='single-input' type='text' name='109'></center></td>
										<td><center><input  class='single-input' type='text' name='110'></center></td>
										<td><center><input  class='single-input' type='text' name='111'></center></td>
										<td><center><input  class='single-input' type='text' name='112'></center></td>
										<td><center><input  class='single-input' type='text' name='113'></center></td>
										<td><center><input  class='single-input' type='text' name='114'></center></td>
										<td><center><input  class='single-input' type='text' name='115'></center></td>
										<td><center><input  class='single-input' type='text' name='116'></center></td>
										<td><center><input  class='single-input' type='text' name='117'></center></td>
										<td><center><input  class='single-input' type='text' name='118'></center></td>
									</tr>
								</table>
								<br>
								<table border=0>
									<tr>
										<td><b>Solução Química Irrigadora/Concentração:</b></td>
										<td width='100%'><input type='TEXT' name='119' class='single-input'></td>
									</tr>
								</table>
								<table border=0>
									<tr>
										<td><b>Medicação intracanal:</b></td>
										<td width='100%'><input type='TEXT' name='120' class='single-input'></td>
									</tr>
									<tr>
										<td><b>Cimento Obturador:</b></td>
										<td width='100%'><input type='TEXT' name='121' class='single-input'></td>
									</tr>
								</table>
								<br>
								<table>
									<tr>
										<td><b>Técnica de Obturação:</b></td>
										<td width='40px'><input type='checkbox' name='122' class='single-input'></td>
										<td>Schilder</td>
										<td width='40px'><input type='checkbox' name='123' class='single-input'></td>
										<td>Híbrida Tagger </td>
										<td width='40px'><input type='checkbox' name='124' class='single-input'></td>
										<td>Condensação Lateral</td>
									</tr>
									<tr>
										<td><b>Técnica de Instrumentação:</b></td>
										<td width='40px'><input type='checkbox' name='125' class='single-input'></td>
										<td>Escalonamento Apice-Coroa</td>
										<td width='40px'><input type='checkbox' name='126' class='single-input'></td>
										<td>Outro</td>
									</tr>
									<tr>
										<td><b>Odontometria:</b></td>
										<td width='40px'><input type='checkbox' name='127' class='single-input'></td>
										<td>Técnica Radiográfica</td>
										<td width='40px'><input type='checkbox' name='128' class='single-input'></td>
										<td>Técnica Radiográfica Auxiliada por Localizador Apical</td>
									</tr>
								</table>

								<hr>
								<h5>Repetir Endodontia:</h5><br>
								<table width='100%'>
									 <tr>
										<td>
										   <center><input type='checkbox' name='repetir17'> 17</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir16'> 16</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir15'> 15</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir14'> 14</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir13'> 13</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir12'> 12</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir11'> 11</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir21'> 21</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir22'> 22</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir23'> 23</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir24'> 24</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir25'> 25</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir26'> 26</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir27'> 27</center>
										</td>
									 </tr>
									 <tr>
										<td>
										   <center><input type='checkbox' name='repetir47'> 47</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir46'> 46</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir45'> 45</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir44'> 44</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir43'> 43</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir42'> 42</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir41'> 41</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir31'> 31</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir32'> 32</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir33'> 33</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir34'> 34</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir35'> 35</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir36'> 36</center>
										</td>
										<td>
										   <center><input type='checkbox' name='repetir37'> 37</center>
										</td>
									 </tr>
									</table>
								<hr>
								<center><input type='submit' value='Salvar' class='genric-btn primary'></center>
							</form>

							
						<?php	
							
						}else{
							while($linhaAnam = mysql_fetch_array($resultadoAnam)){
								$id = $linhaAnam['nr_idEndodontia'];
								$dupla = $linhaAnam['nr_idDupla'];
								$data = $linhaAnam['dt_preenchimento'];
								$r1 = $linhaAnam['1'];
								$r2 = $linhaAnam['2']; 
								$r3 = $linhaAnam['3']; 
								$r4 = $linhaAnam['4']; 
								$r5 = $linhaAnam['5']; 
								$r6 = $linhaAnam['6']; 
								$r7 = $linhaAnam['7']; 
								$r8 = $linhaAnam['8']; 
								$r9 = $linhaAnam['9']; 
								$r10 = $linhaAnam['10']; 
								$r11 = $linhaAnam['11']; 
								$r12 = $linhaAnam['12']; 
								$r13 = $linhaAnam['13']; 
								$r14 = $linhaAnam['14']; 
								$r15 = $linhaAnam['15']; 
								$r16 = $linhaAnam['16']; 
								$r17 = $linhaAnam['17']; 
								$r18 = $linhaAnam['18']; 
								$r19 = $linhaAnam['19']; 
								$r20 = $linhaAnam['20']; 
								$r21 = $linhaAnam['21']; 
								$r22 = $linhaAnam['22']; 
								$r23 = $linhaAnam['23']; 
								$r24 = $linhaAnam['24']; 
								$r25 = $linhaAnam['25']; 
								$r26 = $linhaAnam['26']; 
								$r27 = $linhaAnam['27']; 
								$r28 = $linhaAnam['28']; 
								$r29 = $linhaAnam['29']; 
								$r30 = $linhaAnam['30']; 
								$r31 = $linhaAnam['31']; 
								$r32 = $linhaAnam['32']; 
								$r33 = $linhaAnam['33']; 
								$r34 = $linhaAnam['34']; 
								$r35 = $linhaAnam['35']; 
								$r36 = $linhaAnam['36']; 
								$r37 = $linhaAnam['37']; 
								$r38 = $linhaAnam['38']; 
								$r39 = $linhaAnam['39']; 
								$r40 = $linhaAnam['40']; 
								$r41 = $linhaAnam['41']; 
								$r42 = $linhaAnam['42']; 
								$r43 = $linhaAnam['43']; 
								$r44 = $linhaAnam['44']; 
								$r45 = $linhaAnam['45']; 
								$r46 = $linhaAnam['46']; 
								$r47 = $linhaAnam['47']; 
								$r48 = $linhaAnam['48']; 
								$r49 = $linhaAnam['49']; 
								$r50 = $linhaAnam['50']; 
								$r51 = $linhaAnam['51']; 
								$r52 = $linhaAnam['52']; 
								$r53 = $linhaAnam['53']; 
								$r54 = $linhaAnam['54']; 
								$r55 = $linhaAnam['55']; 
								$r56 = $linhaAnam['56']; 
								$r57 = $linhaAnam['57']; 
								$r58 = $linhaAnam['58']; 
								$r59 = $linhaAnam['59']; 
								$r60 = $linhaAnam['60']; 
								$r61 = $linhaAnam['61']; 
								$r62 = $linhaAnam['62']; 
								$r63 = $linhaAnam['63']; 
								$r64 = $linhaAnam['64']; 
								$r65 = $linhaAnam['65']; 
								$r66 = $linhaAnam['66']; 
								$r67 = $linhaAnam['67']; 
								$r68 = $linhaAnam['68']; 
								$r69 = $linhaAnam['69']; 
								$r70 = $linhaAnam['70']; 
								$r71 = $linhaAnam['71']; 
								$r72 = $linhaAnam['72']; 
								$r73 = $linhaAnam['73']; 
								$r74 = $linhaAnam['74']; 
								$r75 = $linhaAnam['75']; 
								$r76 = $linhaAnam['76']; 
								$r77 = $linhaAnam['77']; 
								$r78 = $linhaAnam['78']; 
								$r79 = $linhaAnam['79']; 
								$r80 = $linhaAnam['80']; 
								$r81 = $linhaAnam['81']; 
								$r82 = $linhaAnam['82']; 
								$r83 = $linhaAnam['83']; 
								$r84 = $linhaAnam['84']; 
								$r85 = $linhaAnam['85']; 
								$r86 = $linhaAnam['86']; 
								$r87 = $linhaAnam['87']; 
								$r88 = $linhaAnam['88']; 
								$r89 = $linhaAnam['89']; 
								$r90 = $linhaAnam['90']; 
								$r91 = $linhaAnam['91']; 
								$r92 = $linhaAnam['92']; 
								$r93 = $linhaAnam['93']; 
								$r94 = $linhaAnam['94']; 
								$r95 = $linhaAnam['95']; 
								$r96 = $linhaAnam['96']; 
								$r97 = $linhaAnam['97']; 
								$r98 = $linhaAnam['98']; 
								$r99 = $linhaAnam['99']; 
								$r100 = $linhaAnam['100']; 
								$r101 = $linhaAnam['101']; 
								$r102 = $linhaAnam['102']; 
								$r103 = $linhaAnam['103']; 
								$r104 = $linhaAnam['104']; 
								$r105 = $linhaAnam['105']; 
								$r106 = $linhaAnam['106']; 
								$r107 = $linhaAnam['107']; 
								$r108 = $linhaAnam['108']; 
								$r109 = $linhaAnam['109']; 
								$r110 = $linhaAnam['110']; 
								$r111 = $linhaAnam['111']; 
								$r112 = $linhaAnam['112']; 
								$r113 = $linhaAnam['113']; 
								$r114 = $linhaAnam['114']; 
								$r115 = $linhaAnam['115']; 
								$r116 = $linhaAnam['116']; 
								$r117 = $linhaAnam['117']; 
								$r118 = $linhaAnam['118']; 
								$r119 = $linhaAnam['119']; 
								$r120 = $linhaAnam['120']; 
								$r121 = $linhaAnam['121']; 
								$r122 = $linhaAnam['122']; 
								$r123 = $linhaAnam['123']; 
								$r124 = $linhaAnam['124']; 
								$r125 = $linhaAnam['125']; 
								$r126 = $linhaAnam['126']; 
								$r127 = $linhaAnam['127']; 
								$r128 = $linhaAnam['128']; 
								$r129 = $linhaAnam['129']; 
								$r130 = $linhaAnam['130']; 
													
							}
							
						?>	
						
								<!-- ############################################################## impressão endo 2 -->
							<form method='POST' action='atualizarEndo.php'>
								<input type='hidden' name='id' value='<?php echo $id; ?>'>
								<b>Dupla Responsável: </b>
								<select class='single-input' name='dupla'>
								<?php
									
									echo $sql = "SELECT * FROM tb_duplas WHERE nr_idDupla = ".$dupla." LIMIT 1";
									$resultado = mysql_query($sql) or die();
									while($linha = mysql_fetch_array($resultado)){
										
										$sqlNome1 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linha['nr_cpf1']."'";
										$resultadoNome1 = mysql_query($sqlNome1) or die();
										while($linhaNome1 = mysql_fetch_array($resultadoNome1)){
											$Nome1 = $linhaNome1['nm_nomeAluno']; 
											$periodo = $linhaNome1['nr_periodo']; 
										}
										
										$sqlNome2 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linha['nr_cpf2']."'";
										$resultadoNome2 = mysql_query($sqlNome2) or die();
										while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
											$Nome2 = $linhaNome2['nm_nomeAluno']; 
										}
										
										
										echo "<option value='".$linha['nr_idDupla']."'>".$Nome1." e ".$Nome2." (".$periodo."º Periodo)</option>";
									}
									
									
									$sqlNome = "SELECT * FROM tb_duplas WHERE nm_situacao = 'Ativo'";
									$resultadoNome = mysql_query($sqlNome) or die();
									while($linhaNome = mysql_fetch_array($resultadoNome)){
										if($linhaNome['nr_idDupla'] != $dupla){
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
									}
								?>
								</select><br>
								
								
								
								<b>Data do Preenchimento: </b><input type='text' name='data' class='single-input' value='<?php echo $data; ?>'><br>
								<b>Queixa Principal: </b><input type='text' name='1' class='single-input' value='<?php echo $r1; ?>'>
								<input type='hidden' name='2' value='<?php echo $r2; ?>' class='single-input'>
								<input type='hidden' name='cpf' value='<?php echo $_GET['cpf']; ?>' class='single-input'>
								
								<hr>
								<br>
								<h5>Semiologia Subjetiva – Características Clínicas da Dor</h5><br>
								<table border=0>
									<tr>
										<td><b>Sede: </b></td>
										<td width='40px'><input type='checkbox' name='3' class='single-input'  value='<?php echo $r3; ?>' <?php echo $r3; ?>></td>
										<td>Localizada</td>
										<td width='40px'><input type='checkbox' name='4' class='single-input'  value='<?php echo $r4; ?>' <?php echo $r4; ?>></td>
										<td>Difusa</td>
									</tr>
									
									
									<tr>	
										<td><b>Aparecimento: </b></td>
										<td width='40px'><input type='checkbox' name='5' class='single-input' value='<?php echo $r5; ?>' <?php echo $r5; ?>></td>
										<td>Provocada</td>
										<td width='40px'><input type='checkbox' name='6' class='single-input' value='<?php echo $r6; ?>' <?php echo $r6; ?>></td>
										<td style='margin-rigth:10px;'>Espontânea</td>
									</tr>
									
									
									<tr>
										<td><b>Duração: </b></td>
										<td width='40px'><input type='checkbox' name='7' class='single-input' value='<?php echo $r7; ?>' <?php echo $r7; ?>></td>
										<td>Curta</td>
										<td width='40px'><input type='checkbox' name='8' class='single-input' value='<?php echo $r8; ?>' <?php echo $r8; ?>></td>
										<td>Longa</td>
									</tr>
									
									
									<tr>
										<td><b>Frequência: </b></td>
										<td width='40px'><input type='checkbox' name='9' class='single-input' value='<?php echo $r9; ?>' <?php echo $r9; ?>></td>
										<td>Intermitente</td>
										<td width='40px'><input type='checkbox' name='10' class='single-input' value='<?php echo $r10; ?>' <?php echo $r10; ?>></td>
										<td>Contínua</td>
									</tr>
									
									<tr>
										<td><b>Intensidade: </b></td>
										<td width='40px'><input type='checkbox' name='11' class='single-input' value='<?php echo $r11; ?>' <?php echo $r11; ?>></td>
										<td>Leve</td>
										<td width='40px'><input type='checkbox' name='12' class='single-input' value='<?php echo $r12; ?>' <?php echo $r12; ?>></td>
										<td>Moderada</td>
										<td width='40px'><input type='checkbox' name='13' class='single-input' value='<?php echo $r13; ?>' <?php echo $r13; ?>></td>
										<td>Severa</td>
									</tr>
								</table>
								
								<hr>
								<h5>Semiologia Objetiva</h5><br>
								<table border=0>
									<tr>
										<td><b>Mucosa Gengival: </b></td>
										<td width='40px'><input type='checkbox' name='14' class='single-input' value='<?php echo $r14; ?>' <?php echo $r14; ?>></td>
										<td>Normal</td>
										<td width='40px'><input type='checkbox' name='15' class='single-input' value='<?php echo $r15; ?>' <?php echo $r15; ?>></td>
										<td>Doença Periodontal</td>
										<td width='40px'><input type='checkbox' name='16' class='single-input' value='<?php echo $r16; ?>' <?php echo $r16; ?>></td>
										<td>Presença de Fístula</td>
										<td width='40px'><input type='checkbox' name='17' class='single-input' value='<?php echo $r17; ?>' <?php echo $r17; ?>></td>
										<td>Presença de Tumefação</td>
									</tr>
								</table>	
								<table>	
									<tr>
										<td width='190px;'><b>Sensibilidade a Palpação: </b></td>
										<td width='40px'><input type='checkbox' name='18' class='single-input' value='<?php echo $r18; ?>' <?php echo $r18; ?>></td>
										<td>Presença de Dor</td>
										<td width='40px'><input type='checkbox' name='19' class='single-input' value='<?php echo $r19; ?>' <?php echo $r19; ?>></td>
										<td>Ausência de Dor</td>
									</tr>
								</table>	
								<table>		
									<tr>
										<td><b>Mobilidade: </b></td>
										<td width='40px'><input type='checkbox' name='20' class='single-input' value='<?php echo $r20; ?>' <?php echo $r20; ?>></td>
										<td>Normal</td>
										<td width='40px'><input type='checkbox' name='21' class='single-input' value='<?php echo $r21; ?>' <?php echo $r21; ?>></td>
										<td>Acentuada</td>
									</tr>
									
									<tr>
										<td><b>Inspeção: </b></td>
										<td width='40px'><input type='checkbox' name='22' class='single-input' value='<?php echo $r22; ?>' <?php echo $r22; ?>></td>
										<td>Coroa íntegra</td>
										<td width='40px'><input type='checkbox' name='23' class='single-input' value='<?php echo $r23; ?>' <?php echo $r23; ?>></td>
										<td>Presença de restaurações</td>
										<td width='40px'><input type='checkbox' name='24' class='single-input' value='<?php echo $r24; ?>' <?php echo $r24; ?>></td>
										<td>Presença de cárie</td>
										<td width='40px'><input type='checkbox' name='25' class='single-input' value='<?php echo $r25; ?>' <?php echo $r25; ?>></td>
										<td>Presença de fratura</td>
									</tr>
									
									<tr>
										<td></td>
										<td width='40px'><input type='checkbox' name='26' class='single-input' value='<?php echo $r26; ?>' <?php echo $r26; ?>></td>
										<td>Polpa exposta com vitalidade</td>
										<td width='40px'><input type='checkbox' name='27' class='single-input' value='<?php echo $r27; ?>' <?php echo $r27; ?>></td>
										<td>Polpa exposta sem vitalidade</td>
										<td width='40px'><input type='checkbox' name='28' class='single-input' value='<?php echo $r28; ?>' <?php echo $r28; ?>></td>
										<td>Alteração da cor da coroa dental</td>
										<td width='40px'><input type='checkbox' name='29' class='single-input' value='<?php echo $r29; ?>' <?php echo $r29; ?>></td>
										<td>Alteração morfológica coronária</td>
									</tr>
								</table>  
								  
								<hr>
								<h5>Exame dos Dentes</h5><br>
								<table border=0>
									<tr>
										<td><b>Testes Térmicos: </b></td>
										<td width='40px'><input type='checkbox' name='30' class='single-input' value='<?php echo $r30; ?>' <?php echo $r30; ?>></td>
										<td>Dor ao Frio</td>
										<td width='40px'><input type='checkbox' name='31' class='single-input' value='<?php echo $r31; ?>' <?php echo $r31; ?>></td>
										<td>Dor ao Calor</td>
										<td width='40px'><input type='checkbox' name='32' class='single-input' value='<?php echo $r32; ?>' <?php echo $r32; ?>></td>
										<td>Ausência de Dor</td>
									</tr>
									
									<tr>
										<td><b>Sensibilidade à Percussão: </b></td>
										<td width='40px'><input type='checkbox' name='33' class='single-input' value='<?php echo $r33; ?>' <?php echo $r33; ?>></td>
										<td>Vertical</td>
										<td width='40px'><input type='checkbox' name='34' class='single-input' value='<?php echo $r34; ?>' <?php echo $r34; ?>></td>
										<td>Horizontal</td>
									</tr>
									
									<tr>
										<td><b>Sensibilidade de Cavidade: </b></td>
										<td width='40px'><input type='checkbox' name='129' class='single-input' value='<?php echo $r129; ?>' <?php echo $r129; ?>></td>
										<td>Presença de Dor</td>
										<td width='40px'><input type='checkbox' name='130' class='single-input' value='<?php echo $r130; ?>' <?php echo $r130; ?>></td>
										<td>Ausência de Dor</td>
									</tr>
								</table>
								
								<hr>
								<h5>Exame Radiográfico</h5><br>
								<table border=0>	
									<tr>
										<td width='40px'><input type='checkbox' name='35' class='single-input' value='<?php echo $r35; ?>' <?php echo $r35; ?>></td>
										<td>Periodonto Normal</td>
										<td width='40px'><input type='checkbox' name='36' class='single-input' value='<?php echo $r36; ?>' <?php echo $r36; ?>></td>
										<td>Espessamento Periodontal</td>
										<td width='40px'><input type='checkbox' name='37' class='single-input' value='<?php echo $r37; ?>' <?php echo $r37; ?>></td>
										<td>Lesão Perirradicular</td>
										<td width='40px'><input type='checkbox' name='38' class='single-input' value='<?php echo $r38; ?>' <?php echo $r38; ?>></td>
										<td>Rizogênese Incompleta</td>
										<td width='40px'><input type='checkbox' name='39' class='single-input' value='<?php echo $r39; ?>' <?php echo $r39; ?>></td>
										<td>Trepanação</td>
									</tr>
									
									<tr>
										<td width='40px'><input type='checkbox' name='40' class='single-input' value='<?php echo $r40; ?>' <?php echo $r40; ?>></td>
										<td>Retentor Intra-Radicular</td>
										<td width='40px'><input type='checkbox' name='41' class='single-input' value='<?php echo $r41; ?>' <?php echo $r41; ?>></td>
										<td>Instrumento Fraturado</td>
										<td width='40px'><input type='checkbox' name='42' class='single-input' value='<?php echo $r42; ?>' <?php echo $r42; ?>></td>
										<td>T.E Insatisfatório</td>
										<td width='40px'><input type='checkbox' name='43' class='single-input' value='<?php echo $r43; ?>' <?php echo $r43; ?>></td>
										<td>Reabsorção: Interna</td>
										<td width='40px'><input type='checkbox' name='44' class='single-input' value='<?php echo $r44; ?>' <?php echo $r44; ?>></td>
										<td>Reabsorção: Externa</td>
									</tr>
									
									<tr>
										<td width='40px'><input type='checkbox' name='45' class='single-input' value='<?php echo $r45; ?>' <?php echo $r45; ?>></td>
										<td>Fratura Dentária: Coronária</td>
										<td width='40px'><input type='checkbox' name='46' class='single-input' value='<?php echo $r46; ?>' <?php echo $r46; ?>></td>
										<td>Fratura Dentária: Radicular</td>
									</tr>
								</table>  
								  
								<hr>
								<h5>Diagnóstico Clínico Provável:</h5><br>
								<table border=0>
									<tr>
										<td width='40px'><input type='checkbox' name='47' class='single-input' value='<?php echo $r47; ?>' <?php echo $r47; ?>></td>
										<td>Polpa Normal</td>
										<td width='40px'><input type='checkbox' name='48' class='single-input' value='<?php echo $r48; ?>' <?php echo $r48; ?>></td>
										<td>Abscesso Dentoalveolar Agudo</td>
										<td width='40px'><input type='checkbox' name='49' class='single-input' value='<?php echo $r49; ?>' <?php echo $r49; ?>></td>
										<td>Polpa Inflamada Reversivelmente</td>
										<td width='40px'><input type='checkbox' name='50' class='single-input' value='<?php echo $r50; ?>' <?php echo $r50; ?>></td>
										<td>Polpa inflamada irreversivelmente</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='51' class='single-input' value='<?php echo $r51; ?>' <?php echo $r51; ?>></td>
										<td>Abscesso Dentoaveolar Crônico</td>
										<td width='40px'><input type='checkbox' name='52' class='single-input' value='<?php echo $r52; ?>' <?php echo $r52; ?>></td>
										<td>Granuloma Apical/Cisto Periodontal Apical</td>
										<td width='40px'><input type='checkbox' name='53' class='single-input' value='<?php echo $r53; ?>' <?php echo $r53; ?>></td>
										<td>Necrose Pulpar </td>
										<td width='40px'><input type='checkbox' name='54' class='single-input' value='<?php echo $r54; ?>' <?php echo $r54; ?>></td>
										<td>Displasia Cementária Periapical</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='55' class='single-input' value='<?php echo $r55; ?>' <?php echo $r55; ?>></td>
										<td>Pericementite Apical Aguda </td>
										<td width='40px'><input type='checkbox' name='56' class='single-input' value='<?php echo $r56; ?>' <?php echo $r56; ?>></td>
										<td>Pericementite Apical Crônica</td>
										<td colspan=4><input type='text' name='57' placeholder='Outras Patologias' class='single-input' value='<?php echo $r57; ?>'></td>
									</tr>
								</table> 
								  
								<hr>
								<h5>Indicação de Tratamento:</h5><br>
								<table border=0>
									<tr>
										<td width='40px'><input type='checkbox' name='58' class='single-input' value='<?php echo $r58; ?>' <?php echo $r58; ?>></td>
										<td>Proteção Pulpar Indireta</td>
										<td width='40px'><input type='checkbox' name='59' class='single-input' value='<?php echo $r59; ?>' <?php echo $r59; ?>></td>
										<td>Proteção Pulpar Direta </td>
										<td width='40px'><input type='checkbox' name='60' class='single-input' value='<?php echo $r60; ?>' <?php echo $r60; ?>></td>
										<td>Tratamento de Canal </td>
										<td width='40px'><input type='checkbox' name='61' class='single-input' value='<?php echo $r61; ?>' <?php echo $r61; ?>></td>
										<td>Retratamento de canal</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='62' class='single-input' value='<?php echo $r62; ?>' <?php echo $r62; ?>></td>
										<td>Apicigênese</td>
										<td width='40px'><input type='checkbox' name='63' class='single-input' value='<?php echo $r63; ?>' <?php echo $r63; ?>></td>
										<td>Apicetomia, Retropreparo e Retrobturação</td>
										<td width='40px'><input type='checkbox' name='64' class='single-input' value='<?php echo $r64; ?>' <?php echo $r64; ?>></td>
										<td>Transplante Dentário</td>
										<td width='40px'><input type='checkbox' name='65' class='single-input' value='<?php echo $r65; ?>' <?php echo $r65; ?>></td>
										<td>Reimplante Dentário</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='66' class='single-input' value='<?php echo $r66; ?>' <?php echo $r66; ?>></td>
										<td>Tratamento Não-Cirúrgico de Perfuração</td>
										<td width='40px'><input type='checkbox' name='67' class='single-input' value='<?php echo $r67; ?>' <?php echo $r67; ?>></td>
										<td>Tratamento Cirúrgico de Perfuração</td>
										<td width='40px'><input type='checkbox' name='68' class='single-input' value='<?php echo $r68; ?>' <?php echo $r68; ?>></td>
										<td>Curetagem Apical</td>
										<td width='40px'><input type='checkbox' name='69' class='single-input' value='<?php echo $r69; ?>' <?php echo $r69; ?>></td>
										<td>Apicificação</td>
									</tr>
									<tr>
										<td width='40px'><input type='checkbox' name='70' class='single-input' value='<?php echo $r70; ?>' <?php echo $r70; ?>></td>
										<td>Proservação / acompanhamento</td>
									</tr>
								</table> 
								
								<hr>
								<h5>Terapêutica Sistêmica</h5>
								<br>
								<table border=0 width='100%'>
									<tr>
										<td colspan=5 style='border: 1px solid rgb(193,193,255);'><center>Odontometria</center></td>
										<td colspan=7 style='border: 1px solid rgb(193,193,255);'><center>Preparo Cirúrgico-Mecânico</center></td>
									</tr>
									<tr>
										<td><center><b>Canal</b></center></td>
										<td><center><b>CDR</b></center></td>
										<td><center><b>CP</b></center></td>
										<td><center><b>CT</b></center></td>
										<td><center><b>Ref.</b></center></td>
										<td colspan=2><center><b>Prep. Cervical</b></center></td>
										<td><center><b>IAI</b></center></td>
										<td><center><b>IM</b></center></td>
										<td><center><b>IP</b></center></td>
										<td colspan=2><center><b>Ápice / Coroa Step Back</b></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' value='<?php echo $r71; ?>' type='text' name='71'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r72; ?>' type='text' name='72'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r73; ?>' type='text' name='73'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r74; ?>' type='text' name='74'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r75; ?>' type='text' name='75'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r76; ?>' type='text' name='76'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r77; ?>' type='text' name='77'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r78; ?>' type='text' name='78'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r79; ?>' type='text' name='79'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r80; ?>' type='text' name='80'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r81; ?>' type='text' name='81'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r82; ?>' type='text' name='82'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' value='<?php echo $r83; ?>' type='text' name='83'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r84; ?>' type='text' name='84'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r85; ?>' type='text' name='85'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r86; ?>' type='text' name='86'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r87; ?>' type='text' name='87'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r88; ?>' type='text' name='88'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r89; ?>' type='text' name='89'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r90; ?>' type='text' name='90'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r91; ?>' type='text' name='91'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r92; ?>' type='text' name='92'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r93; ?>' type='text' name='93'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r94; ?>' type='text' name='94'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' value='<?php echo $r95; ?>' type='text' name='95'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r96; ?>' type='text' name='96'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r97; ?>' type='text' name='97'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r98; ?>' type='text' name='98'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r99; ?>' type='text' name='99'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r100; ?>' type='text' name='100'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r101; ?>' type='text' name='101'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r102; ?>' type='text' name='102'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r103; ?>' type='text' name='103'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r104; ?>' type='text' name='104'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r105; ?>' type='text' name='105'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r106; ?>' type='text' name='106'></center></td>
									</tr>
									<tr>
										<td><center><input  class='single-input' value='<?php echo $r107; ?>' type='text' name='107'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r108; ?>' type='text' name='108'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r109; ?>' type='text' name='109'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r110; ?>' type='text' name='110'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r111; ?>' type='text' name='111'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r112; ?>' type='text' name='112'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r113; ?>' type='text' name='113'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r114; ?>' type='text' name='114'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r115; ?>' type='text' name='115'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r116; ?>' type='text' name='116'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r117; ?>' type='text' name='117'></center></td>
										<td><center><input  class='single-input' value='<?php echo $r118; ?>' type='text' name='118'></center></td>
									</tr>
								</table>
								<br>
								<table border=0>
									<tr>
										<td><b>Solução Química Irrigadora/Concentração:</b></td>
										<td width='100%'><input type='TEXT' name='119' class='single-input' value='<?php echo $r119; ?>'></td>
									</tr>
								</table>
								<table border=0>
									<tr>
										<td><b>Medicação intracanal:</b></td>
										<td width='100%'><input type='TEXT' name='120' class='single-input' value='<?php echo $r120; ?>'></td>
									</tr>
									<tr>
										<td><b>Cimento Obturador:</b></td>
										<td width='100%'><input type='TEXT' name='121' class='single-input' value='<?php echo $r121; ?>'></td>
									</tr>
								</table>
								<br>
								<table>
									<tr>
										<td><b>Técnica de Obturação:</b></td>
										<td width='40px'><input type='checkbox' name='122' class='single-input' value='<?php echo $r122; ?>' <?php echo $r122; ?>></td>
										<td>Schilder</td>
										<td width='40px'><input type='checkbox' name='123' class='single-input' value='<?php echo $r123; ?>' <?php echo $r123; ?>></td>
										<td>Híbrida Tagger </td>
										<td width='40px'><input type='checkbox' name='124' class='single-input' value='<?php echo $r124; ?>' <?php echo $r124; ?>></td>
										<td>Condensação Lateral</td>
									</tr>
									<tr>
										<td><b>Técnica de Instrumentação:</b></td>
										<td width='40px'><input type='checkbox' name='125' class='single-input' value='<?php echo $r125; ?>' <?php echo $r125; ?>></td>
										<td>Escalonamento Apice-Coroa</td>
										<td width='40px'><input type='checkbox' name='126' class='single-input' value='<?php echo $r126; ?>' <?php echo $r126; ?>></td>
										<td>Outro</td>
									</tr>
									<tr>
										<td><b>Odontometria:</b></td>
										<td width='40px'><input type='checkbox' name='127' class='single-input' value='<?php echo $r127; ?>' <?php echo $r127; ?>></td>
										<td>Técnica Radiográfica</td>
										<td width='40px'><input type='checkbox' name='128' class='single-input' value='<?php echo $r128; ?>' <?php echo $r128; ?>></td>
										<td>Técnica Radiográfica Auxiliada por Localizador Apical</td>
									</tr>
								</table>
								<hr>
								<center>
									<input type='submit' value='Atualizar' class='genric-btn primary'>
									<a href='excluirEndo.php?id=<?php echo $id; ?>' class='genric-btn secondary'>Excluir</a>
								</center>
							</form>
							
						<?php	
							
							
						}
						
						
						?>
						
						
						
						
					  </div>
					</div>

				  </div>
				  <!-- Accordion card -->
				</div>
				<!-- Accordion wrapper -->
				
			</div>
			
			
		<?php
			$d = $d + 1;
		}
		
		?>

			
		</div>				
		</div>	
		</section>	
		
		<br><hr>
		<h2><center>Histórico<center></h2>
		<br>
		<center>
			<table border=0>
				<tr>
					<td width='30%'><center><b>Dente</b></center></td>
					<td width='30%'><center><b>Dupla Responsável</b></center></td>
					<td width='30%'><center><b>Data do Procedimento</b></center></td>
				</tr>
				<?php
					$l = 0;
					$sqlNome = "SELECT * FROM tb_endodontia WHERE nr_cpfPaciente ='".$_GET['cpf']."'";
					$resultadoNome = mysql_query($sqlNome) or die();
					while($linhaNome = mysql_fetch_array($resultadoNome)){
					
						$sqlNome5 = "SELECT * FROM tb_duplas WHERE nr_idDupla = ".$linhaNome['nr_idDupla'];
						$resultadoNome5 = mysql_query($sqlNome5) or die();
						while($linhaNome5 = mysql_fetch_array($resultadoNome5)){
								$sqlNome1 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linhaNome5['nr_cpf1']."'";
								$resultadoNome1 = mysql_query($sqlNome1) or die();
								while($linhaNome1 = mysql_fetch_array($resultadoNome1)){
									$nome1 = $linhaNome1['nm_nomeAluno']; 
								}
											
								$sqlNome2 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linhaNome5['nr_cpf2']."'";
								$resultadoNome2 = mysql_query($sqlNome2) or die();
								while($linhaNome2 = mysql_fetch_array($resultadoNome2)){
									$nome2 = $linhaNome2['nm_nomeAluno']; 
								}		
											
								$dupla = $nome1." e ".$nome2;
						}
					
					$string = $linhaNome['2'];
					if(stristr($string, '_1') === FALSE) {
						$texto = "Tratamento Endodôntico no <b>elemento ".substr($linhaNome['2'], 0, -2)."</b>";
					}else{
						$texto = "Retratamento Endodôntico no <b>elemento ".substr($linhaNome['2'], 0, -2)."</b>";
					}
					
					if(($l%2) == 0){
						$cor2 = "rgb(240,240,240)";
					}else{
						$cor2 = "white";
					}
						
					
						echo "
							<tr style='background-color:".$cor2."'>
								<td width='30%'><center>".$texto."</center></td>
								<td width='30%'><center>".$dupla."</center></td>
								<td width='30%'><center>".$linhaNome['dt_preenchimento']."</center></td>
							</tr>
						";
						$l = $l + 1;
					}
					
					
				?>
			</table>
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
