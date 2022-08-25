<?php

header('Content-Type: text/html; charset=utf-8');
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

$aluno = $_GET['aluno'];
$disciplina2 = $_GET['disciplina'];


	session_start();
	date_default_timezone_set('america/sao_paulo');
	include "../conexao.php";
	
	$sqlNome = "SELECT * FROM tb_aluno WHERE nr_cpfAluno ='".$aluno."'";
	$resultadoNome = mysql_query($sqlNome) or die();
	while($linhaNome = mysql_fetch_array($resultadoNome)){
		$nomeAluno = $linhaNome['nm_nomeAluno'];
		$foto = $linhaNome['nm_foto'];
	}

$sqlProd = "SELECT * FROM tb_producaoclinica WHERE nm_disciplina = '".$disciplina2."' AND nr_cpfAluno = '".$aluno."' ORDER BY nr_idProducao";
$resultadoProd = mysql_query($sqlProd) or die();
$numImg = mysql_num_rows($resultadoProd);
if($numImg == 0 ){
	echo "<br><p>Não há nenhuma avaliação cadastrada para o aluno ".$nomeAluno." na disciplina ".$disciplina2."<br><br>";		
	echo "<a href='producaoClinica.php'>Clique aqui</a> para retornar para a página de Produção Clínica"; 
}else{
	
	

	
	$sqlNome7 = "SELECT * FROM tb_producaoclinica WHERE nr_cpfAluno ='".$aluno."'";
	$resultadoNome7 = mysql_query($sqlNome7) or die();
	while($linhaNome7 = mysql_fetch_array($resultadoNome7)){
		$turma = $linhaNome7['nm_turma'];
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
		<link rel="shortcut icon" href="../img/elements/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Saas</title>

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
			
			
			 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		</head>
		
		<body>

		  					
		<?php
					echo "
						<header>
							<img src='dompdf/logoProd.png' width='15%' height='100%' style='position: fixed; top: 1%; left: 150px; right: 0px; height: 50px; '/>
						</header>
					";
					
					echo "<br><br><br><br><center><h5>DISCIPLINA: ".$disciplina2."</h5></center><br><br>";
					echo "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <b>Aluno:</b> ".$nomeAluno."<br>";
					echo "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <b>Turma:</b> ".$turma."<br>";
					echo "<img style='position: fixed; top: 5%; left: 85%; right: 0px;' width='150px' height='180px' src='alunos/".$foto."'><br><br>";
					
					echo "<center>
						<table width='90%'>
							<tr>
								<td><center><b>Data</b></center></td>
								<td><center><b>Procedimento <br> Realizado</b></center></td>
								<td><center><b>Observação</b></center></td>
								<td><center><b>Validação do <br> Professor</b></center></td>
							</tr>
					
					";
						$a=0;
						$sqlProd = "SELECT * FROM tb_producaoclinica WHERE nm_disciplina = '".$disciplina2."' AND nr_cpfAluno = '".$aluno."' ORDER BY nr_idProducao";
						$resultadoProd = mysql_query($sqlProd) or die();
						while($linhaProd = mysql_fetch_array($resultadoProd)){
							
							if(($a%2) == 0){
								$cor2 = "rgb(240,240,240)";
							}else{
								$cor2 = "white";
							}
							
							$sqlProd2 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = ".$linhaProd['nr_cpfAluno'];
							$resultadoProd2 = mysql_query($sqlProd2) or die();
							while($linhaProd2 = mysql_fetch_array($resultadoProd2)){
								$aluno = $linhaProd2['nm_nomeAluno'];						
							}
							
							if($linhaProd['nm_validacao'] == 'N/R'){
								$acao = 'Ainda não validado!';
							}else{
								$sqlProd3 = "SELECT * FROM tb_funcionarios WHERE nr_cpfFuncionario = ".$linhaProd['nm_validacao'];
								$resultadoProd3 = mysql_query($sqlProd3) or die();
								while($linhaProd3 = mysql_fetch_array($resultadoProd3)){
									$acao = "<img src='icones/aprovado.png'> &nbsp;".$linhaProd3['nm_nomeFuncionario'];						
								}
							}
							
							
							echo "
									<tr style='background-color:".$cor2."'>
										<td><center>".$linhaProd['dt_data']."</center></td>
										<td><center>".$linhaProd['6']."</center></td>
										<td><center>".$linhaProd['5']."</center></td>
										<td><center>".$acao."</center></td>
									</tr>
							
							";
							
							$a = $a + 1;
							
						}
					
					echo "</table></center>";
					
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
		</body>
	</html>

<?php
}
?>