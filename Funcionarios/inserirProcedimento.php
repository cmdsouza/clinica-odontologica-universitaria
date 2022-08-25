<?php

include "../conexao.php";

$procedimento = $_POST['procedimento'];
$duracao = $_POST['duracao'];
$periodo = $_POST['periodo'];

$sql = "INSERT INTO tb_procedimento(nr_idProcedimento, nm_procedimento, nr_duracao, nr_periodo) VALUES (NULL, '".$procedimento."', '".$duracao."', ".$periodo.")";
$resultado = mysql_query($sql) or die();

header("Location: gerenciarPeriodos.php");

?>