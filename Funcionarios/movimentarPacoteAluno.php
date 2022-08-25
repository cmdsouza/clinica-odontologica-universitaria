<?php

include "../conexao.php";

$identificador = $_POST['identificador'];

$sql2 = "UPDATE tb_pacoteesterilizacao SET nm_estado='Aguardando Recebimento (Aluno)' WHERE nm_identificador='".$identificador."'";
$resultado2 = mysql_query($sql2) or die();

header("Location: gerenciarPacotes.php");

?>