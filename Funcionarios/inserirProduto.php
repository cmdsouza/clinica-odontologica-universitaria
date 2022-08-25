<?php

session_start();
include "../conexao.php";

$nome = $_POST['nome'];
$quantidade = $_POST['quantidade'];
$chegada = $_POST['chegada'];
$obs = $_POST['obs'];

$data = date("d/m/Y", strtotime($chegada));

$sql2 = "INSERT INTO tb_produto(nr_idProduto, nm_nomeProduto, nr_quantidade, nm_observacao, dt_chegada, nm_local) VALUES (NULL, '".$nome."', ".$quantidade.", '".$obs."', '".$data."', 'Deposito')";
$resultado2 = mysql_query($sql2) or die();


$_SESSION['mensagem'] = "Produto Cadastrado";
header("Location: cadastrarProdutos.php");

?>