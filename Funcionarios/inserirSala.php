<?php

include "../conexao.php";

$nome = $_POST['nome'];
$andar = $_POST['andar'];

$sql = "INSERT INTO tb_sala(nr_idSala, nm_nomeSala, nr_andar) VALUES (NULL, '".$nome."', '".$andar."')";
$resultado = mysql_query($sql) or die();

header("Location: gerenciarSala.php");

?>