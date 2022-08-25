<?php

session_start();
include "../conexao.php";
date_default_timezone_set('America/Sao_Paulo');

$nome = $_POST['nome'];
$obs = $_POST['obs'];
$esterilizado = $_POST['esterilizado'];

$sql = "INSERT INTO tb_materiais(nr_idMateriais, nm_material, nm_descricao, nm_esterilizado, nr_cpfAluno) VALUES (NULL, '".$nome."', '".$obs."', '".$esterilizado."', '".$_SESSION['cpf']."')";
$resultado = mysql_query($sql) or die();

header("Location: meusMateriais.php");

?>