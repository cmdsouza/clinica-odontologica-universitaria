<?php

session_start();
include "../conexao.php";

$produto = $_POST['produto'];
$quantidade = $_POST['quantidade'];

$sqlEnd = "SELECT * FROM tb_produto WHERE nr_idProduto = ".$produto;
$resultadoEnd = mysql_query($sqlEnd) or die();
while($linhaEnd = mysql_fetch_array($resultadoEnd)){
	$antigo = $linhaEnd['nr_quantidade'];
}

$novo = $antigo + $quantidade; 

$sql2 = "UPDATE tb_produto SET nr_quantidade = ".$novo." WHERE nr_idProduto = ".$produto;
$resultado2 = mysql_query($sql2) or die();

$_SESSION['mensagem'] = "Quantidade atualizada";
header("Location: cadastrarProdutos.php");

?>