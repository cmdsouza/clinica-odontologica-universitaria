<?php

session_start();
include "../conexao.php";

$id = $_POST['id'];

$sql = "UPDATE tb_pacoteesterilizacao SET nm_local='Com o Aluno', nm_estado='Fim', dt_devolucao='".date("d/m/Y h:i:s A")."' WHERE nm_identificador='".$id."'";
$resultado = mysql_query($sql) or die();

header("Location: criarPacotes.php");
?>