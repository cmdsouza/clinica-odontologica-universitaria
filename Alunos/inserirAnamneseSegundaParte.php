<?php

session_start();
include "../conexao.php";

$paciente = $_POST['paciente'];

$sqlNome = "SELECT * FROM tb_anamnese WHERE nr_cpfPaciente ='".$paciente."'";
$resultadoNome = mysql_query($sqlNome) or die(mysql_error());
while($linhaNome = mysql_fetch_array($resultadoNome)){
	$id = $linhaNome['nr_idAnamnese'];
}

$r27 = $_POST['27'];
$r28 = $_POST['28'];
$r29 = $_POST['29']."-".$_POST['29a'];
$r30 = $_POST['30'];
$r31 = $_POST['31'];
$r32 = $_POST['32']."-".$_POST['32a']."-".$_POST['32b'];
$r33 = $_POST['33']."-".$_POST['33a']."-".$_POST['33b']."-".$_POST['33c'];
$r34 = $_POST['34'];
$r35 = $_POST['35']."-".$_POST['35a'];
$r36 = $_POST['36']."-".$_POST['36a'];
$r37 = $_POST['37']."-".$_POST['37a'];
$r38 = $_POST['38'];
$r39 = $_POST['39']."-".$_POST['39a'];
$r40 = $_POST['40'];


if(!isset($_POST['41d'])){
	$r41d = "";
}else{
	$r41d = $_POST['41d'];
}

if(!isset($_POST['41e'])){
	$r41e = "";
}else{
	$r41e = $_POST['41e'];
}

if(!isset($_POST['41f'])){
	$r41f = "";
}else{
	$r41f = $_POST['41f'];
}

if(!isset($_POST['41g'])){
	$r41g = "";
}else{
	$r41g = $_POST['41g'];
}

if(!isset($_POST['41h'])){
	$r41h = "";
}else{
	$r41h = $_POST['41h'];
}

$r41 = $r41d."-".$r41e."-".$r41f."-".$r41g."-".$r41h;


if(!isset($_POST['42d'])){
	$r42d = "";
}else{
	$r42d = $_POST['42d'];
}

if(!isset($_POST['42e'])){
	$r42e = "";
}else{
	$r42e = $_POST['42e'];
}

if(!isset($_POST['42f'])){
	$r42f = "";
}else{
	$r42f = $_POST['42f'];
}

if(!isset($_POST['42g'])){
	$r42g = "";
}else{
	$r42g = $_POST['42g'];
}

if(!isset($_POST['42h'])){
	$r42h = "";
}else{
	$r42h = $_POST['42h'];
}

$r42 = $r42d."-".$r42e."-".$r42f."-".$r42g."-".$r42h;



if(!isset($_POST['43d'])){
	$r43d = "";
}else{
	$r43d = $_POST['43d'];
}

if(!isset($_POST['43e'])){
	$r43e = "";
}else{
	$r43e = $_POST['43e'];
}

if(!isset($_POST['43f'])){
	$r43f = "";
}else{
	$r43f = $_POST['43f'];
}

if(!isset($_POST['43g'])){
	$r43g = "";
}else{
	$r43g = $_POST['43g'];
}

if(!isset($_POST['43h'])){
	$r43h = "";
}else{
	$r43h = $_POST['43h'];
}

$r43 = $r43d."-".$r43e."-".$r43f."-".$r43g."-".$r43h;


$r44 = $_POST['44']."-".$_POST['44a'];



if(!isset($_POST['45a'])){
	$r45a = "";
}else{
	$r45a = $_POST['45a'];
}

if(!isset($_POST['45b'])){
	$r45b = "";
}else{
	$r45b = $_POST['45b'];
}

if(!isset($_POST['45c'])){
	$r45c = "";
}else{
	$r45c = $_POST['45c'];
}

if(!isset($_POST['45d'])){
	$r45d = "";
}else{
	$r45d = $_POST['45d'];
}

if(!isset($_POST['45e'])){
	$r45e = "";
}else{
	$r45e = $_POST['45e'];
}

if(!isset($_POST['45f'])){
	$r45f = "";
}else{
	$r45f = $_POST['45f'];
}

if(!isset($_POST['45g'])){
	$r45g = "";
}else{
	$r45g = $_POST['45g'];
}

if(!isset($_POST['45h'])){
	$r45h = "";
}else{
	$r45h = $_POST['45h'];
}

if(!isset($_POST['45i'])){
	$r45i = "";
}else{
	$r45i = $_POST['45i'];
}

if(!isset($_POST['45j'])){
	$r45j = "";
}else{
	$r45j = $_POST['45j'];
}

if(!isset($_POST['45k'])){
	$r45k = "";
}else{
	$r45k = $_POST['45k'];
}

if(!isset($_POST['45l'])){
	$r45l = "";
}else{
	$r45l = $_POST['45l'];
}

if(!isset($_POST['45m'])){
	$r45m = "";
}else{
	$r45m = $_POST['45m'];
}

$r45 = $_POST['45']."-".$r45a."-".$r45b."-".$r45c."-".$r45d."-".$r45e."-".$r45f."-".$r45g."-".$r45h."-".$r45i."-".$r45j."-".$r45k."-".$r45l."-".$r45m;


if(!isset($_POST['46a'])){
	$r46a = "";
}else{
	$r46a = $_POST['46a'];
}

if(!isset($_POST['46b'])){
	$r46b = "";
}else{
	$r46b = $_POST['46b'];
}

if(!isset($_POST['46c'])){
	$r46c = "";
}else{
	$r46c = $_POST['46c'];
}

if(!isset($_POST['46d'])){
	$r46d = "";
}else{
	$r46d = $_POST['46d'];
}

if(!isset($_POST['46e'])){
	$r46e = "";
}else{
	$r46e = $_POST['46e'];
}

$r46 = $_POST['46']."-".$r46a."-".$r46b."-".$r46c."-".$r46d."-".$r46e;


if(!isset($_POST['47a'])){
	$r47a = "";
}else{
	$r47a = $_POST['47a'];
}

if(!isset($_POST['47b'])){
	$r47b = "";
}else{
	$r47b = $_POST['47b'];
}

if(!isset($_POST['47c'])){
	$r47c = "";
}else{
	$r47c = $_POST['47c'];
}

if(!isset($_POST['47d'])){
	$r47d = "";
}else{
	$r47d = $_POST['47d'];
}

if(!isset($_POST['47e'])){
	$r47e = "";
}else{
	$r47e = $_POST['47e'];
}

if(!isset($_POST['47f'])){
	$r47f = "";
}else{
	$r47f = $_POST['47f'];
}

if(!isset($_POST['47g'])){
	$r47g = "";
}else{
	$r47g = $_POST['47g'];
}

if(!isset($_POST['47h'])){
	$r47h = "";
}else{
	$r47h = $_POST['47h'];
}

$r47 = $_POST['47']."-".$r47a."-".$r47b."-".$r47c."-".$r47d."-".$r47e."-".$r47f."-".$r47g."-".$r47h;


if(!isset($_POST['48a'])){
	$r48a = "";
}else{
	$r48a = $_POST['48a'];
}

if(!isset($_POST['48b'])){
	$r48b = "";
}else{
	$r48b = $_POST['48b'];
}

if(!isset($_POST['48c'])){
	$r48c = "";
}else{
	$r48c = $_POST['48c'];
}

if(!isset($_POST['48d'])){
	$r48d = "";
}else{
	$r48d = $_POST['48d'];
}

if(!isset($_POST['48e'])){
	$r48e = "";
}else{
	$r48e = $_POST['48e'];
}

if(!isset($_POST['48f'])){
	$r48f = "";
}else{
	$r48f = $_POST['48f'];
}

if(!isset($_POST['48g'])){
	$r48g = "";
}else{
	$r48g = $_POST['48g'];
}

if(!isset($_POST['48h'])){
	$r48h = "";
}else{
	$r48h = $_POST['48h'];
}

if(!isset($_POST['48i'])){
	$r48i = "";
}else{
	$r48i = $_POST['48i'];
}

$r48 = $_POST['48']."-".$r48a."-".$r48b."-".$r48c."-".$r48d."-".$r48e."-".$r48f."-".$r48g."-".$r48h."-".$r48i;


if(!isset($_POST['49a'])){
	$r49a = "";
}else{
	$r49a = $_POST['49a'];
}

if(!isset($_POST['49b'])){
	$r49b = "";
}else{
	$r49b = $_POST['49b'];
}

if(!isset($_POST['49c'])){
	$r49c = "";
}else{
	$r49c = $_POST['49c'];
}

if(!isset($_POST['49d'])){
	$r49d = "";
}else{
	$r49d = $_POST['49d'];
}

if(!isset($_POST['49e'])){
	$r49e = "";
}else{
	$r49e = $_POST['49e'];
}

if(!isset($_POST['49f'])){
	$r49f = "";
}else{
	$r49f = $_POST['49f'];
}

$r49 = $_POST['49']."-".$r49a."-".$r49b."-".$r49c."-".$r49d."-".$r49e."-".$r49f;


if(!isset($_POST['50a'])){
	$r50a = "";
}else{
	$r50a = $_POST['50a'];
}

if(!isset($_POST['50b'])){
	$r50b = "";
}else{
	$r50b = $_POST['50b'];
}

if(!isset($_POST['50c'])){
	$r50c = "";
}else{
	$r50c = $_POST['50c'];
}

if(!isset($_POST['50d'])){
	$r50d = "";
}else{
	$r50d = $_POST['50d'];
}

if(!isset($_POST['50e'])){
	$r50e = "";
}else{
	$r50e = $_POST['50e'];
}

if(!isset($_POST['50f'])){
	$r50f = "";
}else{
	$r50f = $_POST['50f'];
}

if(!isset($_POST['50g'])){
	$r50g = "";
}else{
	$r50g = $_POST['50g'];
}

if(!isset($_POST['50h'])){
	$r50h = "";
}else{
	$r50h = $_POST['50h'];
}

if(!isset($_POST['50i'])){
	$r50i = "";
}else{
	$r50i = $_POST['50i'];
}

if(!isset($_POST['50j'])){
	$r50j = "";
}else{
	$r50j = $_POST['50j'];
}

if(!isset($_POST['50k'])){
	$r50k = "";
}else{
	$r50k = $_POST['50k'];
}

if(!isset($_POST['50l'])){
	$r50l = "";
}else{
	$r50l = $_POST['50l'];
}

if(!isset($_POST['50m'])){
	$r50m = "";
}else{
	$r50m = $_POST['50m'];
}

$r50 = $_POST['50']."-".$r50a."-".$r50b."-".$r50c."-".$r50d."-".$r50e."-".$r50f."-".$r50g."-".$r50h."-".$r50i."-".$r50j."-".$r50k."-".$r50l."-".$r50m;


$sql = "UPDATE `tb_anamnese` SET `27`='".$r27."', `28`='".$r28."', `29`='".$r29."', `30`='".$r30."', `31`='".$r31."', `32`='".$r32."', `33`='".$r33."', `34`='".$r34."', `35`='".$r35."', `36`='".$r36."', `37`='".$r37."', `38`='".$r38."', `39`='".$r39."', `40`='".$r40."', `41`='".$r41."', `42`='".$r42."', `43`='".$r43."', `44`='".$r44."', `45`='".$r45."', `46`='".$r46."', `47`='".$r47."', `48`='".$r48."', `49`='".$r49."', `50`='".$r50."' WHERE nr_idAnamnese =".$id;

$resultado = mysql_query($sql) or die(mysql_error());

header("Location: anamnese3.php?cpf=".$paciente);

?>