<center>
	<img src='dompdf/logo1.png'>
</center><br>

<?php
session_start();
date_default_timezone_set('america/sao_paulo');
include "../conexao.php";
$cpfPaciente = $_GET['cpf'];

header('Content-Type: text/html; charset=utf-8');
	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');
?>

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
			
			<style>
				body{
					color: black;
				}
			</style>
		</head>

	<h2><center>ANAMNESE</center></h2>

		<?php
		
		$sqlNome1 = "SELECT * FROM tb_anamnese WHERE nr_cpfPaciente = '".$_GET['cpf']."'";
		$resultadoNome1 = mysql_query($sqlNome1) or die();
		while($linhaNome1 = mysql_fetch_array($resultadoNome1)){
			$idDupla = $linhaNome1['nr_idDupla'];
			$dataPreenchimento = $linhaNome1['dt_preenchimento'];
			$tipo = $linhaNome1['nm_tipo'];
		}
		
$numImg = mysql_num_rows($resultadoNome1);
if($numImg == 0){
	echo "<br><center>A Anamnese ainda n??o foi respondida! </center>";
}else{
		
	if($tipo == 'Adulto'){	
		
		
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
		<br><br>
		<!-- Start Align Area -->
			<div class='whole-wrap' style='font-size:18px;'>
				<div class='container'>
					<div class='section'>
						<div class='row'>
							<div class='col-lg-12 col-md-12'>
								<?php 
								
									echo "<h5><b>Data de Preenchimento:</b> ".$dataPreenchimento."</h4>";
									echo "<h5><b>Alunos Respons??veis:</b> ".$nome1." e ".$nome2."</h4><hr>";
									
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
							

							
							<h3>Perguntas Gerais</h3><br>
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
							<b>Dura????o:</b>  <?php echo $pieces[1]."<br>"; ?>
							<b>Historia da Doen??a Atual:</b>  <?php echo $r2."<br>"; ?>
							<b>Est?? em tratamento m??dico atualmente?</b>
								<?php 
									$pieces = explode("-", $r3);
												
									if($pieces[0] == 'Sim'){
										echo "Sim";
										echo "<b>; Qual o m??dico/especialidade?</b>".$pieces[1]."
											  <b>; Qual o motivo?</b>".$pieces[2]."<br>";
									}else{
										if($r3 == 'N/R'){
											echo "N??o Respondido<br>";
										}else{
											echo "N??o<br>";
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
											echo "N??o Respondido<br>";
										}else{
											echo "N??o<br>";
										}
									}
								?>
							
							
							<b>?? al??rgico ou j?? teve alguma rea????o al??rgica?</b>
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
												echo "N??o Respondido";
											}else{
												echo "N??o";
											}
										}
									?>
							
							<br>
							<b>J?? teve urtic??ria?</b>
								<?php 
									$pieces = explode("-", $r6);
												
									if($pieces[0] == 'Sim'){
										echo "Sim ";
										echo "<b>; Quando?</b>".$pieces[1]." <b>O que provocou?</b>".$pieces[2]."<br>";
									}else{
										if($r6 == 'N/R'){
											echo "N??o Respondido<br>";
										}else{
											echo "N??o<br>";
										}
									}
											?>
									
									</tr>
							</table>
							
							<b>Tomou antibi??tico recentemente?</b>  
								<?php 
									$pieces = explode("-", $r7);
												
									if($pieces[0] == 'Sim'){
										echo "Sim ";
										echo "<b>; Qual? </b>".$pieces[1]."<br>";
									}else{
										if($r7 == 'N/R'){
											echo "N??o Respondido<br>";
										}else{
											echo "N??o<br>";
										}
									}
								?>
								
							<b>Tomou cortic??ide recentemente?</b>  
								<?php 
									$pieces = explode("-", $r8);
												
									if($pieces[0] == 'Sim'){
										echo "Sim";
										echo "<b>; Quando? </b>".$pieces[1]."<br>";
									}else{
										if($r8 == 'N/R'){
											echo "N??o Respondido<br>";
										}else{
											echo "N??o<br>";
										}
									}
								?>  
							
							<b>Esteve acamado por longo tempo nos ??ltimos anos?</b>  
								<?php 
									$pieces = explode("-", $r9);
													
									if($pieces[0] == 'Sim'){
										echo "Sim";
										echo "<b>; Por quanto tempo? </b>".$pieces[1];
										echo "<b>; Qual o motivo? </b>".$pieces[2]."<br>";
									}else{
										if($r9 == 'N/R'){
											echo "N??o Respondido<br>";
										}else{
											echo "N??o<br>";
										}
									}
								?> 
							
							<b>J?? foi hospitalizado?</b>
								<?php 
									$pieces = explode("-", $r10);
													
									if($pieces[0] == 'Sim'){
										echo "Sim";
										echo "<b>; Qual o motivo?</b>".$pieces[1]."<br>";
									}else{
										if($r10 == 'N/R'){
											echo "N??o Respondido<br>";
										}else{
											echo "N??o<br>";
										}
									}
								?> 
							
							<b>J?? foi submetido a alguma cirurgia?</b>
								<?php 
									$pieces = explode("-", $r11);
													
									if($pieces[0] == 'Sim'){
										echo "Sim";
										echo "<b>; Qual? </b>".$pieces[1]."<br>";
									}else{
										if($r11 == 'N/R'){
											echo "N??o Respondido<br>";
										}else{
											echo "N??o<br>";
										}
									}
								?>
							
							<b>J?? tomou algum tipo de anestesia?</b>
								<?php 
									$pieces = explode("-", $r12);
													
									if($pieces[0] == 'Sim'){
										echo "Sim";
										echo "<b>; Teve alguma rea????o?</b> ".$pieces[1];
										echo "<b>; De que tipo? </b>".$pieces[2];
										echo "<b>; Qual o motivo? </b>".$pieces[3]."<br>";
									}else{
										if($r12 == 'N/R'){
											echo "N??o Respondido<br>";
										}else{
											echo "N??o<br>";
										}
									}
								?>
							<b>Costuma sangrar muito quando se corta ou ?? submetido ?? cirurgia?</b>
											<?php 
												$pieces = explode("-", $r13);
													
												if($pieces[0] == 'Sim'){
													echo "Sim<br>";
												}else{
													if($r13 == 'N/R'){
														echo "N??o Respondido<br>";
													}else{
														echo "N??o<br>";
													}
												}
											?>
							
							<b>Quando se corta ou ?? submetido ?? cirurgia demora para cicatrizar?</b>
											<?php 
												$pieces = explode("-", $r14);
													
												if($pieces[0] == 'Sim'){
													echo "Sim<br>";
												}else{
													if($r14== 'N/R'){
														echo "N??o Respondido<br>";
													}else{
														echo "N??o<br>";
													}
												}
											?>
							
							<b>Alguma vez precisou de transfus??o de sangue?</b>
											<?php 
												$pieces = explode("-", $r15);
													
												if($pieces[0] == 'Sim'){
													echo "Sim";
													echo "<b>; H?? quanto tempo?</b> ".$pieces[1]."<br>";
												}else{
													if($r15 == 'N/R'){
														echo "N??o Respondido<br>";
													}else{
														echo "N??o<br>";
													}
												}
											?>
							
							<b>Usa alguma pr??tese no cora????o, osso ou articula????o?</b>
											<?php 
												$pieces = explode("-", $r16);
													
												if($pieces[0] == 'Sim'){
													echo "Sim";
													echo "<b>; H?? quanto tempo? </b>".$pieces[1];
													echo "<b>; Qual? </b>".$pieces[2]."<br>";
												}else{
													if($r16 == 'N/R'){
														echo "N??o Respondido<br>";
													}else{
														echo "N??o<br>";
													}
												}
											?>
											
							<b>Tem ou teve febre reum??tica?</b>
											<?php 
												$pieces = explode("-", $r17);
													
												if($pieces[0] == 'Sim'){
													echo "Sim<br>";
												}else{
													if($r17 == 'N/R'){
														echo "N??o Respondido<br>";
													}else{
														echo "N??o<br>";
													}
												}
											?>
							
							<b>Suas juntas doem ou incham com frequ??ncia?</b>
											<?php 
												$pieces = explode("-", $r18);
													
												if($pieces[0] == 'Sim'){
													echo "Sim<br>";
												}else{
													if($r18 == 'N/R'){
														echo "N??o Respondido<br>";
													}else{
														echo "N??o<br>";
													}
												}
											?>
								
								<b>Sente falta de ar e cansa??o com frequ??ncia?</b>
											<?php 
												$pieces = explode("-", $r19);
													
												if($pieces[0] == 'Sim'){
													echo "Sim<br>";
												}else{
													if($r19 == 'N/R'){
														echo "N??o Respondido<br>";
													}else{
														echo "N??o<br>";
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
														echo "N??o Respondido<br>";
													}else{
														echo "N??o<br>";
													}
												}
											?>
							
								<b>Costuma ter os p??s ou pernas inchados?</b>
											<?php 
												$pieces = explode("-", $r21);
													
												if($pieces[0] == 'Sim'){
													echo "Sim<br>";
												}else{
													if($r21 == 'N/R'){
														echo "N??o Respondido<br>";
													}else{
														echo "N??o<br>";
													}
												}
											?>
								
								<b>Sente palpita????es ou dores no peito?</b>
											<?php 
												$pieces = explode("-", $r22);
													
												if($pieces[0] == 'Sim'){
													echo "Sim<br>";
												}else{
													if($r22 == 'N/R'){
														echo "N??o Respondido<br>";
													}else{
														echo "N??o<br>";
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
														echo "N??o Respondido<br>";
													}else{
														echo "N??o<br>";
													}
												}
											?>
									
								<b>J?? escarrou sangue?</b>
											<?php 
												$pieces = explode("-", $r24);
													
												if($pieces[0] == 'Sim'){
													echo "Sim<br>";
												}else{
													if($r26 == 'N/R'){
														echo "N??o Respondido<br>";
													}else{
														echo "N??o<br>";
													}
												}
											?>
											
								<b>J?? vomitou sangue?</b>
											<?php 
												$pieces = explode("-", $r25);
													
												if($pieces[0] == 'Sim'){
													echo "Sim<br>";
												}else{
													if($r26 == 'N/R'){
														echo "N??o Respondido<br>";
													}else{
														echo "N??o<br>";
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
														echo "N??o Respondido<br>";
													}else{
														echo "N??o<br>";
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
														echo "N??o Respondido<br>";
													}else{
														echo "N??o<br>";
													}
												}
											?>
								
								
								<b>Tem comido muito ultimamente?</b>
											<?php 
												if($r28 == 'N/R'){
													echo "N??o Respondido<br>";
												}else{
													$pieces = explode("-", $r28);
													
													if($pieces[0] == 'Sim'){
														echo "Sim<br>";
													}else{
														echo "N??o<br>";
													}
												}
											?>
								
								<b>Tem perdido peso sem causa aparente?</b>
											<?php 
												if($r29 == 'N/R'){
													echo "N??o Respondido<br>";
												}else{
													$pieces = explode("-", $r29);
													
													if($pieces[0] == 'Sim'){
														echo "Sim";
														echo "<b>; Quantos quilos? </b>";
														
														if($r29 == 'N/R'){
															echo "N??o Respondido";
														}else{
															$pieces = explode("-", $r29);
															
															if($pieces[1] == 'Sim'){
																echo "Sim<br>";
															}else{
																echo "N??o<br>";
															}
														}
														
													}else{
														echo "N??o<br>";
													}
												}
											?>
								
								<b>Sente dor ao urinar?</b>
											<?php 
												if($r30 == 'N/R'){
													echo "N??o Respondido<br>";
												}else{
													$pieces = explode("-", $r30);
													
													if($pieces[0] == 'Sim'){
														echo "Sim<br>";
													}else{
														echo "N??o<br>";
													}
												}
											?>
								
								<b>Faz hemodi??lise?</b>
											<?php 
												if($r31 == 'N/R'){
													echo "N??o Respondido<br>";
												}else{
													$pieces = explode("-", $r31);
													
													if($pieces[0] == 'Sim'){
														echo "Sim<br>";
													}else{
														echo "N??o<br>";
													}
												}
											?>
								
								<b>J?? fez algum transplante?</b>
											<?php 
												if($r32 == 'N/R'){
													echo "N??o Respondido<br>";
												}else{
													$pieces = explode("-", $r32);
													
													if($pieces[0] == 'Sim'){
														echo "Sim";
														echo "<b>; H?? quanto tempo? </b>";
											
														if($r32 == 'N/R'){
															echo "N??o Respondido";
														}else{
															$pieces = explode("-", $r32);
															
															if($pieces[1] == 'Sim'){
																echo "Sim";
															}else{
																echo "N??o";
															}
														}
										
														echo "<b>; Que ??rg??o? </b>";
														if($r32 == 'N/R'){
															echo "N??o Respondido <br>";
														}else{
															$pieces = explode("-", $r32);
															
															if($pieces[2] == 'Sim'){
																echo "Sim <br>";
															}else{
																echo "N??o <br>";
															}
														}
														
														
													}else{
														echo "N??o<br>";
													}
												}
											?>
											
									<b>Tem ou j?? teve c??ncer/tumor?</b>
											<?php 
												if($r33 == 'N/R'){
													echo "N??o Respondido<br>";
												}else{
													$pieces = explode("-", $r33);
													
													if($pieces[0] == 'Sim'){
														echo "<b>; H?? quanto tempo? </b>";
															if($r33 == 'N/R'){
																echo "N??o Respondido";
															}else{
																$pieces = explode("-", $r33);
																
																if($pieces[1] == 'Sim'){
																	echo "Sim";
																}else{
																	echo "N??o";
																}
															}
														
														echo "<b>; H?? quanto tempo? </b>";
															if($r33 == 'N/R'){
																echo "N??o Respondido";
															}else{
																$pieces = explode("-", $r33);
																	
																if($pieces[1] == 'Sim'){
																	echo "Sim";
																}else{
																	echo "N??o";
																}
															}
														
														echo " <b>; Qual foi o tratamento? </b>";
															if($r33 == 'N/R'){
																echo "N??o Respondido<br>";
															}else{
																$pieces = explode("-", $r33);
																echo $pieces[3]."<br>";
															}
														
													}else{
														echo "N??o<br>";
													}
												}
											?>
											
							
							<b>Tem infec????es com frequ??ncia?</b>
											<?php 
												if($r34 == 'N/R'){
													echo "N??o Respondido<br>";
												}else{
													if($r34 == 'Sim'){
														echo "Sim<br>";
													}else{
														echo "N??o<br>";
													}
												}
											?>
							
							<b>Est?? ou esteve em tratamento psiqui??trico ou com psic??logo?</b>
											<?php 
												if($r35 == 'N/R'){
													echo "N??o Respondido<br>";
												}else{
													$pieces = explode("-", $r35);
													
													if($pieces[0] == 'Sim'){
														echo "Sim";
														
														echo "<b>; Para que tipo de problema? </b>";
															if($r35 == 'N/R'){
																echo "N??o Respondido<br>";
															}else{
																echo $pieces[1]."<br>";
															}
													}else{
														echo "N??o<br>";
													}
												}
											?>
								
								<b>Tem sentido dorm??ncia em alguma parte do seu corpo?</b>
										<?php 
												if($r36 == 'N/R'){
													echo "N??o Respondido<br>";
												}else{
													$pieces = explode("-", $r36);
													
													if($pieces[0] == 'Sim'){
														echo "Sim";
														echo "<b>; Qual a regi??o? </b>";
															if($r36 == 'N/R'){
																echo "N??o Respondido<br>";
															}else{
																echo $pieces[1]."<br>";
															}
													}else{
														echo "N??o<br>";
													}
												}
											?>
											
								<b>Tem frequentes desmaios ou tonturas?</b>
										<?php 
												if($r37 == 'N/R'){
													echo "N??o Respondido<br>";
												}else{
													$pieces = explode("-", $r37);
													
													if($pieces[0] == 'Sim'){
														echo "Sim";
														
														echo "<b>; Qual a frequ??ncia? </b>";
															if($r37 == 'N/R'){
																echo "N??o Respondido<br>";
															}else{
																echo $pieces[1]."<br>";
															}
														
													}else{
														echo "N??o<br>";
													}
												}
											?>
								
								<b>Dorme bem?</b>
										<?php 
												if($r38 == 'N/R'){
													echo "N??o Respondido<br>";
												}else{
													$pieces = explode("-", $r38);
													
													if($pieces[0] == 'Sim'){
														echo "Sim<br>";
													}else{
														echo "N??o<br>";
													}
												}
											?>
											
								<b>Apresenta alguma doen??a infectocontagiosa sexualmente transmiss??vel?</b>
									<?php 
												if($r39 == 'N/R'){
													echo "N??o Respondido<br>";
												}else{
													$pieces = explode("-", $r39);
													
													if($pieces[0] == 'Sim'){
														echo "Sim";
														
														echo "<b>; Qual? </b>";
								
															if($r39 == 'N/R'){
																echo "N??o Respondido<br>";
															}else{
																echo $pieces[1]."<br>";
															}
														
														
													}else{
														echo "N??o<br>";
													}
												}
											?>
								
								<b>Apresenta alguma defici??ncia f??sica?</b>
										<?php 
												if($r40 == 'N/R'){
													echo "N??o Respondido<br>";
												}else{
													$pieces = explode("-", $r40);
													
													if($pieces[0] == 'Sim'){
														echo "Sim<br>";
													}else{
														echo "N??o<br>";
													}
												}
											?>
											
								<b>?? fumante?</b>
										<?php 
												if($r41 == 'N/R'){
													echo "N??o Respondido<br>";
												}else{
													$pieces = explode("-", $r41);
													
													echo $pieces[0];
													echo "<b>; Quantos cigarros/dia? </b>";
														if($r41 == 'N/R'){
															echo "N??o Respondido";
														}else{
															$pieces = explode("-", $r41);
															
															echo $pieces[1];
														}
														
													echo "<b>; Fuma/fumou durante quanto tempo? </b>";
														if($r41 == 'N/R'){
															echo "N??o Respondido";
														}else{
															$pieces = explode("-", $r41);
															
															echo $pieces[2];
														}
													
													echo "<b>; Parou de fumar h?? quanto tempo? </b>";
														if($r41 == 'N/R'){
															echo "N??o Respondido";
														}else{
															$pieces = explode("-", $r41);
															
															echo $pieces[3];
														}
													
													echo "<b>; Fuma/fumava que tipo de cigarro? </b>";
														if($r41 == 'N/R'){
															echo "N??o Respondido<br>";
														}else{
															$pieces = explode("-", $r41);
															
															echo $pieces[4]."<br>";
														}
													
												}
											?>
											
								<b>Consome bebida alco??lica?</b>
											<?php 
												if($r42 == 'N/R'){
													echo "N??o Respondido<br>";
												}else{
													$pieces = explode("-", $r42);
													
													echo $pieces[0];
													
													echo "<b>; Que dose consome/consumia diariamente? </b>";
														if($r42 == 'N/R'){
															echo "N??o Respondido";
														}else{
															$pieces = explode("-", $r42);
															
															echo $pieces[1];
														}
													
													echo "<b>; Bebe/bebeu durante quanto tempo? </b>";
														if($r42 == 'N/R'){
															echo "N??o Respondido";
														}else{
															$pieces = explode("-", $r42);
															
															echo $pieces[2];
														}
													
													echo "<b>; Parou de beber a quanto tempo? </b>";
														if($r42 == 'N/R'){
															echo "N??o Respondido";
														}else{
															$pieces = explode("-", $r42);
															
															echo $pieces[3];
														}
													
													echo "<b>; Bebe/bebia que tipo de bebida? </b>";
														if($r42 == 'N/R'){
															echo "N??o Respondido<br>";
														}else{
															$pieces = explode("-", $r42);
															
															echo $pieces[4]."<br>";
														}
												}
											?>
										
								<b>Consome drogas?</b>
											<?php 
												if($r43 == 'N/R'){
													echo "N??o Respondido<br>";
												}else{
													$pieces = explode("-", $r43);
													
													echo $pieces[0];
													
													echo "<b>; Faz/fazia uso quantas vezes/dia? </b>";
														if($r43 == 'N/R'){
															echo "N??o Respondido";
														}else{
															$pieces = explode("-", $r43);
															
															echo $pieces[1];
														}
													
													echo "<b>; Usa ou usou durante quanto tempo? </b>";
														if($r43 == 'N/R'){
															echo "N??o Respondido";
														}else{
															$pieces = explode("-", $r43);
															
															echo $pieces[2];
														}
														
													echo "<b>; Parou de usar h?? quanto tempo? </b>";
														if($r43 == 'N/R'){
															echo "N??o Respondido";
														}else{
															$pieces = explode("-", $r43);
															
															echo $pieces[3];
														}
													
													echo "<b>; Que tipo de droga usa/usava? </b>";
														if($r43 == 'N/R'){
															echo "N??o Respondido";
														}else{
															$pieces = explode("-", $r43);
															
															echo $pieces[4]."<br>";
														}
													
												}
											?>
									
							<b>Apresenta problemas respirat??rios?</b>
											<?php 
												if($r44 == 'N/R'){
													echo "N??o Respondido<br>";
												}else{
													$pieces = explode("-", $r44);
													
													if($pieces[0] == 'Sim'){
														echo "Sim";
														
														echo "<b>; Qual? </b>";
															if($r44 == 'N/R'){
																echo "N??o Respondido";
															}else{
																$pieces = explode("-", $r44);
																
																echo $pieces[1]."<br>";
															}
														
													}else{
														echo "N??o<br>";
													}
												}
											?>
											
							<b>Apresenta problemas cardiovasculares?</b>
											<?php 
												if($r45 == 'N/R'){
													echo "N??o Respondido<br>";
												}else{
													$pieces = explode("-", $r45);
													
													if($pieces[0] == 'Sim'){
														echo "Sim";
														
														if($pieces[1] == 'Insuficiencia Cardiaca'){
															echo "; Insufici??ncia Card??aca";
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
															echo "; Sopro Card??aco";
														}
														
														if($pieces[6] == 'Marcapasso'){
															echo "; Marcapasso";
														}
														
														
														if($pieces[7] == 'Aneurisma'){
															echo "; Aneurisma";
														}
														
														if($pieces[8] == 'Hipertensao'){
															echo "; Hipertens??o";
														}
														
														
														if($pieces[9] == 'Hipotensao'){
															echo "; Hipotens??o";
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
														echo "N??o<br>";
													}
												}
												
														
												
											?>
							
								
							<b>Apresenta problemas hematol??gicos?</b>
											<?php 
												if($r46 == 'N/R'){
													echo "N??o Respondido<br>";
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
														echo "N??o<br>";
													}
												}
											?>
									
									
								<b>Apresenta problemas gastrintestinais?</b>
											<?php 
												if($r47 == 'N/R'){
													echo "N??o Respondido<br>";
												}else{
													$pieces = explode("-", $r47);
													
													if($pieces[0] == 'Sim'){
														echo "Sim";
														
														if($pieces[1] == 'Gastrite'){
															echo "; Gastrite";
														}
														
														if($pieces[2] == 'Ulcera'){
															echo "; ??lcera";
														}
														
														if($pieces[3] == 'Azia'){
															echo "; Azia";
														}
														
														if($pieces[4] == 'Diarreia Persistente'){
															echo "; Diarr??ia Persistente";
														}
														
														if($pieces[5] == 'Prisao De Ventre'){
															echo "; Pris??o De Ventre";
														}
														
														if($pieces[6] == 'Ansia De Vomito Frequente'){
															echo "; ??nsia De V??mito Frequente";
														}
														
														if($pieces[7] == 'Colite'){
															echo "; Colite";
														}
														
														echo "<b>; Outros:</b> ".$pieces[8]."<br>";
														
														
													}else{
														echo "N??o<br>";
													}
												}
											?>
									
							
							<b>Apresenta problemas m??sculo - esqueletais?</b>
												<?php 
												if($r48 == 'N/R'){
													echo "N??o Respondido<br>";
												}else{
													$pieces = explode("-", $r48);
													
													if($pieces[0] == 'Sim'){
														echo "Sim";
														
														if($pieces[1] == 'Artrite Reumatoide'){
															echo "; Artrite Reumat??ide";
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
															echo "; H??rnia De Disco";
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
														echo "N??o<br>";
													}
												}
											?>
									
							
							<b>Apresenta problemas end??crinos?</b>
												<?php 
													if($r49 == 'N/R'){
														echo "N??o Respondido<br>";
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
															echo "N??o<br>";
														}
													}
												?>
									
											
							<b>Apresenta problemas neurol??gico/sensoriais?</b>
												<?php 
													if($r50 == 'N/R'){
														echo "N??o Respondido<br>";
													}else{
														$pieces = explode("-", $r50);
														
														if($pieces[0] == 'Sim'){
															echo "Sim";
															
															if($pieces[1] == 'Depressao'){
																echo "; Depress??o";
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
																echo "; Perda De Audi????o";
															}
															
															if($pieces[8] == 'Convulsao/Epilepsia'){
																echo "; Convuls??o/Epilepsia";
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
															echo "N??o<br>";
														}
													}
												?>
									
												
							</table>
							
							<br><h3>Sinais Vitais</h3><br>
							
							<b>Pulso:</b>
												<?php 
													if($r51 == 'N/R'){
														echo "N??o Respondido";
													}else{
														if($r51 == 'Nao Aferido'){
															echo "N??o Aferido";
														}else{
															echo $r51." bpm";
														}
													}
												?>
									</font></td>
							<b>| Normal: 60 a 110bpm</b> <br>
							
							<b>Press??o arterial: </b>
												<?php 
													if($r52 == 'N/R'){
														echo "N??o Respondido";
													}else{
														if($r52 == 'Nao Aferido'){
															echo "N??o Aferido";
														}else{
															echo $r52." mm/Hg";
														}
													}
												?>
							<b>| Normal: At?? 140 / 90</b> <br>
							
							<b>Temperatura: </b>
												<?php 
													if($r53 == 'N/R'){
														echo "N??o Respondido";
													}else{
														if($r53 == 'Nao Aferido'){
															echo "N??o Aferido";
														}else{
															echo $r53." ??C";
														}
													}
												?>
							<b>| Normal: 36,8 ??C  ?? 0,2  ??C</b> <br>
							
							<b>Frequencia respirat??ria: </b>
											<?php 
													if($r54 == 'N/R'){
														echo "N??o Respondido";
													}else{
														if($r54 == 'Nao Aferido'){
															echo "N??o Aferido";
														}else{
															echo $r54."/min";
														}
													}
												?>	
							<b>| Normal: 15 a 20 mpm</b> <br>
							
							<br><h3>Exame Extrabucal</h3><br>
							
							<b>Exame da face: Normal?</b>
												<?php 
													if($r55 == 'N/R'){
														echo "N??o Respondido<br>";
													}else{
														$pieces = explode("-", $r55);
														
														if($pieces[0] == 'Nao'){
															echo "N??o";
															
															if($pieces[1] == 'Assimetria'){
																echo "; Assimetria";
															}
															
															if($pieces[2] == 'Alteracoes na pele'){
																echo "; Altera????es na Pele";
															}
															
															if($pieces[3] == 'Alteracoes em anexos cutaneos'){
																echo "; Altera????es em Anexos Cut??neos<br>";
															}
															
														}else{
															echo "Sim<br>";
														}
													}
												?>
									
							<b>Exame das cadeias ganglionares: Linfonodos normais?</b>
												<?php 
													if($r56 == 'N/R'){
														echo "N??o Respondido<br>";
													}else{
														$pieces = explode("-", $r56);
														
														if($pieces[0] == 'Nao'){
															echo "N??o";
																	
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
									
							<b>Exame de gl??ndulas salivares : Normal?</b>
												<?php 
													if($r57 == 'N/R'){
														echo "N??o Respondido<br>";
													}else{
														$pieces = explode("-", $r57);
														
														if($pieces[0] == 'Nao'){
															echo "N??o";
															
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
															echo "N??o<br>";
														}
													}
												?>
									
							<b>M??sculos da mastiga????o:  Normal?</b>
												<?php 
													if($r59 == 'N/R'){
														echo "N??o Respondido<br>";
													}else{
														$pieces = explode("-", $r59);
														
														if($pieces[0] == 'Sim'){
															echo "Sim<br>";
														}else{
															echo "N??o<br>";
														}
													}
												?>
							
							<b>ATM:  Normal? </b>
												<?php 
													if($r60 == 'N/R'){
														echo "N??o Respondido<br>";
													}else{
														$pieces = explode("-", $r60);
														
														if($pieces[0] == 'Sim'){
															echo "Sim<br>";
														}else{
															echo "N??o<br>";
														}
													}
												?>
							
							<b>L??bio Superior:  Normal?</b>
												<?php 
													if($r61 == 'N/R'){
														echo "N??o Respondido<br>";
													}else{
														$pieces = explode("-", $r61);
														
														if($pieces[0] == 'Sim'){
															echo "Sim<br>";
														}else{
															echo "N??o<br>";
														}
													}
												?>
							
							<b>L??bio Inferior:  Normal?</b>
												<?php 
													if($r62 == 'N/R'){
														echo "N??o Respondido<br>";
													}else{
														$pieces = explode("-", $r62);
														
														if($pieces[0] == 'Sim'){
															echo "Sim<br>";
														}else{
															echo "N??o<br>";
														}
													}
												?>
							
							
							<br><h3>Exame Intrabucal</h3><br>
							
							<b>Mucosa Labial: Normal?</b>
												<?php 
													if($r63 == 'N/R'){
														echo "N??o Respondido<br>";
													}else{
														$pieces = explode("-", $r63);
														
														if($pieces[0] == 'Sim'){
															echo "Sim<br>";
														}else{
															echo "N??o<br>";
														}
													}
												?>
							
							<b>Mucosa Jugal: Normal?</b>
												<?php 
													if($r64 == 'N/R'){
														echo "N??o Respondido<br>";
													}else{
														$pieces = explode("-", $r64);
														
														if($pieces[0] == 'Sim'){
															echo "Sim";
															echo "; <b>Lado Comprometido:</b> ".$pieces[1]."<br>";
															
														}else{
															echo "N??o<br>";
														}
													}
												?>
							
							<b>Mucosa Gengival: Normal?</b>
													<?php 
													if($r65 == 'N/R'){
														echo "N??o Respondido<br>";
													}else{
														$pieces = explode("-", $r65);
														
														if($pieces[0] == 'Sim'){
															echo "Sim<br>";
														}else{
															echo "N??o<br>";
														}
													}
												?>
							
							<b>Palato Duro:  Normal?</b>
												<?php 
													if($r66 == 'N/R'){
														echo "N??o Respondido<br>";
													}else{
														$pieces = explode("-", $r66);
														
														if($pieces[0] == 'Sim'){
															echo "Sim<br>";
														}else{
															echo "N??o<br>";
														}
													}
												?>
							
							<b>Palato Mole:  Normal?</b>
												<?php 
													if($r67 == 'N/R'){
														echo "N??o Respondido<br>";
													}else{
														$pieces = explode("-", $r67);
														
														if($pieces[0] == 'Sim'){
															echo "Sim<br>";
														}else{
															echo "N??o<br>";
														}
													}
												?>
							
							<b>??stmo da Fauce (Am??gdala e Orofaringe):  Normal?</b>
												<?php 
													if($r68 == 'N/R'){
														echo "N??o Respondido<br>";
													}else{
														$pieces = explode("-", $r68);
														
														if($pieces[0] == 'Sim'){
															echo "Sim<br>";
														}else{
															echo "N??o<br>";
														}
													}
												?>
							
							<b>Soalho Bucal:  Normal?</b>
												<?php 
													if($r70 == 'N/R'){
														echo "N??o Respondido<br>";
													}else{
														$pieces = explode("-", $r70);
														
														if($pieces[0] == 'Sim'){
															echo "Sim<br>";
														}else{
															echo "N??o<br>";
														}
													}
												?>
							
							<b>L??ngua:  Normal?</b>
												<?php 
													if($r69 == 'N/R'){
														echo "N??o Respondido";
													}else{
														$pieces = explode("-", $r69);
														
														if($pieces[0] == 'Nao'){
															echo "N??o";
															
															
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

							<br><br>
							<p align='right'>
							
							Declaro que os dados, inclusive cadastrais, por mim mencionados s??o verdadeiros.<br>
							Comprometo-me a informar qualquer altera????o no meu quadro de sa??de atual.<br>
							Vit??ria, <?php echo date('d/m/Y'); ?><br>
							<br><br>
							_________________________________<br>
							Assinatura do Paciente ou Respons??vel
							
							</p>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			
	<?php
	
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
			<div class='whole-wrap'>
				<div class='container'>
					<div class='section'>
						<div class='row'>
							<div class='col-lg-12 col-md-12' style='font-size:20px'>
								<?php 
								
									echo "<h5><b>Data de Preenchimento:</b> ".$dataPreenchimento."</h5>";
									echo "<h5><b>Alunos Respons??veis:</b> ".$nome1." e ".$nome2."</h5><hr>";
									echo "<h3>Perguntas:</h3><br>";
									$sqlNome5 = "SELECT * FROM tb_anamnese WHERE nr_cpfPaciente = '".$_GET['cpf']."'";
									$resultadoNome5 = mysql_query($sqlNome5) or die();
									while($linhaNome5 = mysql_fetch_array($resultadoNome5)){
										echo $r1 = "<b>Qual queixa principal? (preven????o, dor, d??vida, c??rie, traumatismo dent??rio) </b>".$linhaNome5['1']."<br>";
										echo $r2 = "<b>Qual tipo de parto da crian??a? </b>".$linhaNome5['2']."<br>";
										echo $r3 = "<b>Alguma complica????o na gesta????o ou ao nascimento? </b>".$linhaNome5['3']."<br>";
										echo $r4 = "<b>J?? teve catapora, sarampo ou caxumba? </b>".$linhaNome5['4']."<br>";
										echo $r5 = "<b>Est?? em tratamento m??dico atualmente? </b>".$linhaNome5['5']."<br>";
										echo $r6 = "<b>Est?? fazendo uso de algum medicamento? </b>".$linhaNome5['6']."<br>";
										echo $r7 = "<b>J?? sofreu alguma cirurgia? Qual motivo? (dent??ria ou geral) </b>".$linhaNome5['7']."<br>";
										echo $r8 = "<b>Apresenta alergia a algum medicamento ou alimento? </b>".$linhaNome5['8']."<br>";
										echo $r9 = "<b>Quem realiza a escova????o dos dentes da crian??a? (crian??a, respons??veis, ambos) </b>".$linhaNome5['9']."<br>";
										echo $r10 = "<b>Quantas vezes ?? feita a escova????o? E quando? </b>".$linhaNome5['10']."<br>";
										echo $r11 = "<b>Qual pasta de dente utiliza? (sabe informar se ?? com ou sem fl??or?) </b>".$linhaNome5['11']."<br>";
										echo $r12 = "<b>A crian??a toma mamadeira a noite? Essa mamadeira ?? de que? </b>".$linhaNome5['12']."<br>";
										echo $r13 = "<b>A crian??a se alimenta a noite? Regularmente ?? feita escova????o ap??s ??ltima refei????o? </b>".$linhaNome5['13']."<br>";
										echo $r14 = "<b>A crian??a frequenta creche ou escola? Qual per??odo? </b>".$linhaNome5['14']."<br>";
										echo $r15 = "<b>A crian??a tem hor??rios espec??ficos de refei????o ou tem acesso a alimentos a qualquer momento? </b>".$linhaNome5['15']."<br>";
										echo $r16 = "<b>Quais atividades de interesse de lazer da crian??a? (esporte, time de futebol, desenho animado, artista, amigo de escola) </b>".$linhaNome5['16']."<br>";
										echo $r17 = "<b>A crian??a chupa chupeta ou dedo? Se sim, quando? </b>".$linhaNome5['17']."<br>";
										echo $r18 = "<b>Apresenta????o de higiene geral da crian??a: unhas, cabelo e pele. </b>".$linhaNome5['18']."<br>";
										echo $r19 = "<b>Ao exame cl??nico: crian??a apresenta alguma assimetria facial? </b>".$linhaNome5['19']."<br>";
										echo $r20 = "<b>Selamento labial? </b>".$linhaNome5['20']."<br>";
										echo $r21 = "<b>Aspecto facial de s??ndrome de respira????o bucal? Qual? </b>".$linhaNome5['21']."<br>";
										echo $r22 = "<b>Altera????o em: l??bios, mucosa, assoalho, palato e/ou l??ngua? </b>".$linhaNome5['22']."<br>";
										echo $r23 = "<b>Se denti????o dec??dua. Qual tipo de arco? Qual rela????o terminal de segundos molares dec??duos? </b>".$linhaNome5['23']."<br>";
										echo $r24 = "<b>Se denti????o mista. Qual est??gio? </b>".$linhaNome5['24']."<br>";
										echo $r25 = "<b>Alguma altera????o na sequ??ncia ou cronologia de erup????o? </b>".$linhaNome5['25']."<br>";
										echo $r26 = "<b>Alguma maloclus??o identificada? </b>".$linhaNome5['26']."<br>";
										echo $r27 = "<b>Quais exames radiogr??ficos solicitados? </b>".$linhaNome5['27']."<br>";
									}
			echo "</div></div>";
			
			?>
			
			
			<br><br>
							<p style='font-size:18px;' align='right'>
							
							Declaro que os dados, inclusive cadastrais, por mim mencionados s??o verdadeiros.<br>
							Comprometo-me a informar qualquer altera????o no meu quadro de sa??de atual.<br>
							Vit??ria, <?php echo date('d/m/Y'); ?><br>
							<br><br>
							_________________________________<br>
							Assinatura do Paciente ou Respons??vel
							
							</p>
			
			
			</div></div></div>";
	<?php	
	}
}	
	?>
			
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

<br><br>			
<center>
	<img src='dompdf/logo2.png'>
</center>