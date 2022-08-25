<?php
	session_start();
	date_default_timezone_set('America/Sao_Paulo');
	include "../conexao.php";
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
			<br><br>
			<!-- Start price Area -->
			<section class="price-area" id="price">
				<div class="container">			
					<?php
						$sqlPacote = "SELECT * FROM tb_pacoteesterilizacao WHERE nm_local ='Com o Aluno' and nm_estado='Fim' ORDER BY dt_movimentacao";
						$resultadoPacote = mysql_query($sqlPacote) or die();
						$numImg = mysql_num_rows($resultadoPacote);
					?>
				
					<center>
						<h3 class="mb-30">Pacotes Finalizados (<?php echo $numImg; ?> pacotes)</h3>
					</center>
					
					<table width='100%' border=0>
						<tr>
							<td><b><center>Identificador</center></b></td>
							<td><b><center>Quantidade de Pacotes</center></b></td>
							<td><b><center>Aluno</center></b></td>
							<td><b><center>Data de Devolução</center></b></td>
							<td><b><center>Observações</center></b></td>
						<tr>
						
					
					
					<?php
						$a = 0;
						$sqlPacote = "SELECT * FROM tb_pacoteesterilizacao WHERE nm_local ='Com o Aluno' and nm_estado='Fim' ORDER BY dt_movimentacao";
						$resultadoPacote = mysql_query($sqlPacote) or die();
						
						$numImg = mysql_num_rows($resultadoPacote);
						if($numImg == 0){
							echo "<b>Não há Pacotes Finalizados!</b>";
						}
						
						while($linhaPacote = mysql_fetch_array($resultadoPacote)){
							
								if(($a%2) == 0){
									$cor2 = "rgb(240,240,240)";
								}else{
									$cor2 = "white";
								}
							
							$sqlPacote3 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$linhaPacote['nr_cpfAluno']."'";
							$resultadoPacote3 = mysql_query($sqlPacote3) or die(mysql_error());
							while($linhaPacote3 = mysql_fetch_array($resultadoPacote3)){
								$aluno = $linhaPacote3['nm_nomeAluno'];
							}
							
							echo "
							
								<tr style='background-color: ".$cor2.";'>
									<td><center>".$linhaPacote['nm_identificador']."</center></td>
									<td><center>".$linhaPacote['nr_quantidadePacotes']."</center></td>
									<td><center>".$aluno."</center></td>
									<td><center>".$linhaPacote['dt_devolucao']."</center></td>
									<td><center>".$linhaPacote['nm_observacoesPacote']."</center></td>
								<tr>
							";
							$a = $a + 1;
						}
							
						
					?>	
					
					</table>
					
					<br>
					<p>Relatório Gerado no dia <?php echo date('d/m/Y, H:i:s'); ?></p>
					<br>
					
				</div>	
			</section>
			<!-- End price Area -->
			
