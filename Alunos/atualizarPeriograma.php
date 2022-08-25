<?php

session_start();
include "../conexao.php";
date_default_timezone_set('America/Sao_Paulo');

header('Content-Type: text/html; charset=utf-8');
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

$dente = $_POST['dente'];
$cpf = $_POST['cpf'];
$data = $_POST['dataAntiga'];

$disciplina = $_POST['disciplina'];
$dupla = $_POST['dupla'];
$professor = $_POST['professor'];

$r1 = $_POST['sangrVD18'];
$r2 = $_POST['sangrVTM18'];
$r3 = $_POST['sangrVM18'];
$r4 = $_POST['pmgVD18'];
$r5 = $_POST['pmgVTM18'];
$r6 = $_POST['pmgVM18'];
$r7 = $_POST['psvVD18'];
$r8 = $_POST['psvVTM18'];
$r9 = $_POST['psvVM18'];
$r10 = $_POST['pmgVD18'] + $_POST['psvVD18'];
$r11 = $_POST['pmgVTM18'] + $_POST['psvVTM18'];
$r12 = $_POST['pmgVM18'] + $_POST['psvVTM18'];
$r13 = $_POST['sangrPD18'];
$r14 = $_POST['sangrPTM18'];
$r15 = $_POST['sangrPM18'];
$r16 = $_POST['pmgPD18'];
$r17 = $_POST['pmgPTM18'];
$r18 = $_POST['pmgPM18'];
$r19 = $_POST['psvPD18'];
$r20 = $_POST['psvPTM18'];
$r21 = $_POST['psvPM18'];
$r22 = $_POST['pmgPD18'] + $_POST['psvPD18'];
$r23 = $_POST['pmgPTM18'] + $_POST['psvPTM18'];
$r24 = $_POST['pmgPM18'] + $_POST['psvPTM18'];
$r25 = $_POST['mobilidade18'];
$r26 = $_POST['furca18D'];
$r27 = $_POST['furca18M'];

$sql = "UPDATE `tb_periograma` SET  nr_cpfProfessor= '".$professor."', nr_idDupla = '".$dupla."', nm_disciplina = '".$disciplina."', `1`='".$r1."', `2`='".$r2."', `3`='".$r3."', `4`='".$r4."', `5`='".$r5."', `6`='".$r6."', `7`='".$r7."', `8`='".$r8."', `9`='".$r9."', `10`='".$r10."', `11`='".$r11."', `12`='".$r12."', `13`='".$r13."', `14`='".$r14."', `15`='".$r15."', `16`='".$r16."', `17`='".$r17."', `18`='".$r18."', `19`='".$r19."', `20`='".$r20."', `21`='".$r21."', `22`='".$r22."', `23`='".$r23."', `24`='".$r24."', `25`='".$r25."', `26`='".$r26."'  WHERE `nr_cpfPaciente`='".$cpf."' AND `dt_data`='".$data."' AND `nr_dente`= ".$dente;
$resultado = mysql_query($sql) or die(mysql_error());

header("Location: periodontia.php?cpf=".$cpf);

?>