<?php

include "../conexao.php";

$date = $_POST['data'];
$data = date("d/m/Y", strtotime($date));

$hora = $_POST['hora'];
$dupla = $_POST['dupla'];
$sala = $_POST['sala'];
$observacoa = $_POST['observacoa'];
$cpf = $_POST['cpf'];

$sql2 = "INSERT INTO tb_consulta(nr_idConsulta, nr_idSala, nr_idDupla, dt_dataAtendimento, hr_horarioAtendimento, nr_idProcedimento, nr_cpfPaciente, nr_situacao, nm_observacao, nm_numeroConsulta) VALUES (NULL, ".$sala.", ".$dupla.",'".$data."', '".$hora."', 0, '".$cpf."', 'Nao Confirmado', '".$observacoa."', 1)";
$resultado2 = mysql_query($sql2) or die();
$_session['alerta'] = 'cadastrado';
header("Location: funcionarios.php");

?>