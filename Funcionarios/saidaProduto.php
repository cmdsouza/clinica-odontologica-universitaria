<?php

include "../conexao.php";
date_default_timezone_set('America/Sao_Paulo');


$id = $_POST['id'];
$quantidade = $_POST['quantidade'];

$sqlNome = "SELECT * FROM tb_produto WHERE nr_idProduto =".$id;
$resultadoNome = mysql_query($sqlNome) or die();
while($linhaNome = mysql_fetch_array($resultadoNome)){
	$quantAntigo = $linhaNome['nr_quantidade'];
}

$quantNova = $quantAntigo - $quantidade;

if($quantNova <= 0){
	$sql = "DELETE FROM `tb_produto` WHERE `nr_idProduto` = ".$id;
	$resultado = mysql_query($sql) or die();
}else{
	$sql = "UPDATE `tb_produto` SET `nr_quantidade`=".$quantNova." WHERE `nr_idProduto`=".$id;
	$resultado = mysql_query($sql) or die();
}

header("Location: movimentarProdutos.php");

?>