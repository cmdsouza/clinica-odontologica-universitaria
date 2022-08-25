<?php

date_default_timezone_set('america/sao_paulo');
include "../conexao.php";


$divisao = explode('|', $_POST['produto']);
$produto = $divisao[0];
$origem = $divisao[1];

$local = $_POST['local'];
$quantidade = $_POST['quantidade'];
$data = date('d/m/Y');
$quantidadeCerta = 0;


if(($origem == 'Expedicao1') || ($origem == 'Expedicao2')){	
	$sqlComp = "SELECT * FROM tb_produto WHERE nm_local = '".$local."' AND nm_nomeProduto ='".$produto."'";
	$resultadoComp = mysql_query($sqlComp) or die(mysql_error());
	$numComp = mysql_num_rows($resultadoComp);

	if($numComp == 0){
		
		$sqlComp = "SELECT * FROM tb_produto WHERE nm_nomeProduto = '".$produto."' AND nm_local='".$origem."'";
		$resultadoComp = mysql_query($sqlComp) or die(mysql_error());
		while($linhaComp = mysql_fetch_array($resultadoComp)){
			$obs = $linhaComp['nm_observacao'];
			$quantidadeAntiga = $linhaComp['nr_quantidade'];
		}
		
		$quantidadeCerta = $quantidadeAntiga - $quantidade;
		
		if($quantidadeCerta != 0){
			$sql3 = "UPDATE tb_produto SET nr_quantidade = ".$quantidadeCerta." WHERE nm_nomeProduto = '".$produto."' AND nm_local='".$origem."'";
			$resultado3 = mysql_query($sql3) or die(mysql_error());
		}else{
			$sql3 = "DELETE FROM tb_produto WHERE nm_nomeProduto = '".$produto."' AND nm_local'".$origem."'";
			$resultado3 = mysql_query($sql3) or die(mysql_error());
		}
		
		$sql2 = "INSERT INTO tb_produto(nr_idProduto, nm_nomeProduto, nr_quantidade, nm_observacao, dt_chegada, nm_local) VALUES (NULL, '".$produto."', ".$quantidade.", '".$obs."', '".$data."', '".$local."')";
		$resultado2 = mysql_query($sql2) or die();
		
	}else{
		$sqlComp = "SELECT * FROM tb_produto WHERE nm_nomeProduto = '".$produto."' AND nm_local='".$origem."'";
		$resultadoComp = mysql_query($sqlComp) or die(mysql_error());
		while($linhaComp = mysql_fetch_array($resultadoComp)){
			$quantidadeAntiga = $linhaComp['nr_quantidade'];
		}
				
		$quantidadeCerta = $quantidadeAntiga - $quantidade;
				
		if($quantidadeCerta != 0){
			echo $sql3 = "UPDATE tb_produto SET nr_quantidade = ".$quantidadeCerta." WHERE nm_nomeProduto = '".$produto."' AND nm_local='".$origem."'";
			$resultado3 = mysql_query($sql3) or die(mysql_error());
		}else{
			$sql3 = "DELETE FROM tb_produto WHERE nm_nomeProduto = '".$produto."' AND nm_local='".$origem."'";
			$resultado3 = mysql_query($sql3) or die(mysql_error());
		}
		
		$oficial = ($quantidadeAntiga + $quantidade);
		$sql3 = "UPDATE tb_produto SET nr_quantidade = ".$oficial." WHERE nm_nomeProduto = '".$produto."' AND nm_local='".$local."'";
		$resultado3 = mysql_query($sql3) or die(mysql_error());
		header("Location: movimentarProdutos.php");
	}
}else{
	
	$sqlComp = "SELECT * FROM tb_produto WHERE nm_local = '".$local."' AND nm_nomeProduto ='".$produto."'";
	$resultadoComp = mysql_query($sqlComp) or die(mysql_error());
	$numComp = mysql_num_rows($resultadoComp);
	
	if($numComp == 0){
		
		$sqlComp = "SELECT * FROM tb_produto WHERE nm_nomeProduto = '".$produto."' AND nm_local='Deposito'";
		$resultadoComp = mysql_query($sqlComp) or die();
		while($linhaComp = mysql_fetch_array($resultadoComp)){
			$obs = $linhaComp['nm_observacao'];
			$quantidadeAntiga = $linhaComp['nr_quantidade'];
		}
		
		$quantidadeCerta = $quantidadeAntiga - $quantidade;
		
		if($quantidadeCerta != 0){
			$sql3 = "UPDATE tb_produto SET nr_quantidade = ".$quantidadeCerta." WHERE nm_nomeProduto = '".$produto."' AND nm_local='Deposito'";
			$resultado3 = mysql_query($sql3) or die();
		}else{
			$sql3 = "DELETE FROM tb_produto WHERE nm_nomeProduto = '".$produto."' AND nm_local='Deposito'";
			$resultado3 = mysql_query($sql3) or die();
		}
		
		$sql2 = "INSERT INTO tb_produto(nr_idProduto, nm_nomeProduto, nr_quantidade, nm_observacao, dt_chegada, nm_local) VALUES (NULL, '".$produto."', ".$quantidade.", '".$obs."', '".$data."', '".$local."')";
		$resultado2 = mysql_query($sql2) or die();
		
	}else{
		$sqlComp = "SELECT * FROM tb_produto WHERE nm_nomeProduto = '".$produto."' AND nm_local='".$local."'";
		$resultadoComp = mysql_query($sqlComp) or die();
		while($linhaComp = mysql_fetch_array($resultadoComp)){
			$quantidadeAntiga = $linhaComp['nr_quantidade'];
		}
				
		$quantidadeCerta = $quantidadeAntiga - $quantidade;
				
		if($quantidadeCerta != 0){
			$sql3 = "UPDATE tb_produto SET nr_quantidade = ".$quantidadeCerta." WHERE nm_nomeProduto = '".$produto."' AND nm_local='Deposito'";
			$resultado3 = mysql_query($sql3) or die();
		}else{
			$sql3 = "DELETE FROM tb_produto WHERE nr_idProduto = ".$produto."' AND nm_local='Deposito'";
			$resultado3 = mysql_query($sql3) or die();
		}
				
		$sql3 = "UPDATE tb_produto SET nr_quantidade = ".($quantidadeAntiga + $quantidade)." WHERE nm_nomeProduto = '".$produto."' AND nm_local='".$local."'";
		$resultado3 = mysql_query($sql3) or die();
		header("Location: movimentarProdutos.php");
	}
	
	
}	

	header("Location: movimentarProdutos.php");

?>