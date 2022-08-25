<?php

session_start();
include "../conexao.php";
date_default_timezone_set('America/Sao_Paulo');

header('Content-Type: text/html; charset=utf-8');
	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');

$dupla = $_POST['dupla'];
$paciente = $_POST['paciente'];
$data = $_POST['data'];

$r1 = $_POST['1']."-".$_POST['1a'];
$r2 = $_POST['2'];
$r3 = $_POST['3']."-".$_POST['3a']."-".$_POST['3b'];
$r4 = $_POST['4']."-".$_POST['4a'];

if(!isset($_POST['5a'])){
	$p5a = "";
}else{
	$p5a = $_POST['5a'];
}

if(!isset($_POST['5b'])){
	$p5b = "";
}else{
	$p5b = $_POST['5b'];
}

if(!isset($_POST['5c'])){
	$p5c = "";
}else{
	$p5c = $_POST['5c'];
}

if(!isset($_POST['5d'])){
	$p5d = "";
}else{
	$p5d = $_POST['5d'];
}

$r5 = $_POST['5']."-".$p5a."-".$p5b."-".$p5c."-".$p5d."-".$_POST['5e'];

$r6 = $_POST['6']."-".$_POST['6a']."-".$_POST['6b'];
$r7 = $_POST['7']."-".$_POST['7a'];
$r8 = $_POST['8']."-".$_POST['8a'];
$r9 = $_POST['9']."-".$_POST['9a']."-".$_POST['9b'];
$r10 = $_POST['10']."-".$_POST['10a'];
$r11 = $_POST['11']."-".$_POST['11a'];
$r12 = $_POST['12']."-".$_POST['12a']."-".$_POST['12b']."-".$_POST['12c'];
$r13 = $_POST['13'];
$r14 = $_POST['14'];
$r15 = $_POST['15']."-".$_POST['15a'];
$r16 = $_POST['16']."-".$_POST['16a']."-".$_POST['16b'];
$r17 = $_POST['17'];
$r18 = $_POST['18'];
$r19 = $_POST['19'];
$r20 = $_POST['20'];
$r21 = $_POST['21'];
$r22 = $_POST['22'];
$r23 = $_POST['23'];
$r24 = $_POST['24'];
$r25 = $_POST['25'];
$r26 = $_POST['26']."-".$_POST['26a'];
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


if(!isset($_POST['51a'])){
	$r51 = $_POST['51b'];
}else{
	$r51 = $_POST['51a'];
}

if(!isset($_POST['52a'])){
	$r52 = $_POST['52b'];
}else{
	$r52 = $_POST['52a'];
}

if(!isset($_POST['53a'])){
	$r53 = $_POST['53b'];
}else{
	$r53 = $_POST['53a'];
}

if(!isset($_POST['54a'])){
	$r54 = $_POST['54b'];
}else{
	$r54 = $_POST['54a'];
}

if(!isset($_POST['55a'])){
	$r55a = "";
}else{
	$r55a = $_POST['55a'];
}

if(!isset($_POST['55b'])){
	$r55b = "";
}else{
	$r55b = $_POST['55b'];
}

if(!isset($_POST['55c'])){
	$r55c = "";
}else{
	$r55c = $_POST['55c'];
}

$r55 = $_POST['55']."-".$r55a."-".$r55b."-".$r55c;

if(!isset($_POST['56a'])){
	$r56a = "";
}else{
	$r56a = $_POST['56a'];
}

if(!isset($_POST['56b'])){
	$r56b = "";
}else{
	$r56b = $_POST['56b'];
}

if(!isset($_POST['56c'])){
	$r56c = "";
}else{
	$r56c = $_POST['56c'];
}

if(!isset($_POST['56d'])){
	$r56d = "";
}else{
	$r56d = $_POST['56d'];
}

if(!isset($_POST['56e'])){
	$r56e = "";
}else{
	$r56e = $_POST['56e'];
}

if(!isset($_POST['56f'])){
	$r56f = "";
}else{
	$r56f = $_POST['56f'];
}

if(!isset($_POST['56g'])){
	$r56g = "";
}else{
	$r56g = $_POST['56g'];
}

if(!isset($_POST['56h'])){
	$r56h = "";
}else{
	$r56h = $_POST['56h'];
}

if(!isset($_POST['56i'])){
	$r56i = "";
}else{
	$r56i = $_POST['56i'];
}

$r56 = $_POST['56']."-".$r56a."-".$r56b."-".$r56c."-".$r56d."-".$r56e."-".$r56f."-".$r56g."-".$r56h."-".$r56i;

if(!isset($_POST['57a'])){
	$r57a = "";
}else{
	$r57a = $_POST['57a'];
}

if(!isset($_POST['57b'])){
	$r57b = "";
}else{
	$r57b = $_POST['57b'];
}

if(!isset($_POST['57c'])){
	$r57c = "";
}else{
	$r57c = $_POST['57c'];
}

if(!isset($_POST['57d'])){
	$r57d = "";
}else{
	$r57d = $_POST['57d'];
}

if(!isset($_POST['57e'])){
	$r57e = "";
}else{
	$r57e = $_POST['57e'];
}

$r57 = $_POST['57']."-".$r57a."-".$r57b."-".$r57c."-".$r57d."-".$r57e;

/*					
if(!isset($_POST['58a'])){
	$r58a = "";
}else{
	$r58a = $_POST['58a'];
}

if(!isset($_POST['58b'])){
	$r58b = "";
}else{
	$r58b = $_POST['58b'];
}

if(!isset($_POST['58c'])){
	$r58c = "";
}else{
	$r58c = $_POST['58c'];
}

if(!isset($_POST['58d'])){
	$r58d = "";
}else{
	$r58d = $_POST['58d'];
}

if(!isset($_POST['58e'])){
	$r58e = "";
}else{
	$r58e = $_POST['58e'];
}

$r58 = $_POST['58']."-".$r58a."-".$r58b."-".$r58c."-".$r58d."-".$r58e;
*/
$r58 = "N/A";
				
$r59 = $_POST['59'];
					
$r60 = $_POST['60']."-".$_POST['60a'];
					
$r61 = $_POST['61'];
$r62 = $_POST['62'];
$r63 = $_POST['63'];
$r64 = $_POST['64']."-".$_POST['64a'];
$r65 = $_POST['65'];
$r66 = $_POST['66'];
$r67 = $_POST['67'];
$r68 = $_POST['68'];

if(!isset($_POST['69a'])){
	$r69a = "";
}else{
	$r69a = $_POST['69a'];
}

if(!isset($_POST['69b'])){
	$r69b = "";
}else{
	$r69b = $_POST['69b'];
}

if(!isset($_POST['69c'])){
	$r69c = "";
}else{
	$r69c = $_POST['69c'];
}

if(!isset($_POST['69d'])){
	$r69d = "";
}else{
	$r69d = $_POST['69d'];
}

if(!isset($_POST['69e'])){
	$r69e = "";
}else{
	$r69e = $_POST['69e'];
}

$r69 = $_POST['69']."-".$r69a."-".$r69b."-".$r69c."-".$r69d."-".$r69e;

$r70 = $_POST['70'];

$sql = "UPDATE `tb_anamnese` SET `nr_idDupla`='".$dupla."',`dt_preenchimento`='".$data."', `1`='".$r1."', `2`='".$r2."',`3`='".$r3."',`4`='".$r4."',`5`='".$r5."',`6`='".$r6."',`7`='".$r7."',`8`='".$r8."',`9`='".$r9."',`10`='".$r10."',`11`='".$r11."',`12`='".$r12."',`13`='".$r13."',`14`='".$r14."',`15`='".$r15."',`16`='".$r16."',`17`='".$r17."',`18`='".$r18."',`19`='".$r19."',`20`='".$r20."',`21`='".$r21."',`22`='".$r22."',`23`='".$r23."',`24`='".$r24."',`25`='".$r25."',`26`='".$r26."',`27`='".$r27."',`28`='".$r28."',`29`='".$r29."',`30`='".$r30."',`31`='".$r31."',`32`='".$r32."',`33`='".$r33."',`34`='".$r34."',`35`='".$r35."',`36`='".$r36."',`37`='".$r37."',`38`='".$r38."',`39`='".$r39."',`40`='".$r40."',`41`='".$r41."',`42`='".$r42."',`43`='".$r43."',`44`='".$r44."',`45`='".$r45."',`46`='".$r46."',`47`='".$r47."',`48`='".$r48."',`49`='".$r49."',`50`='".$r50."',`51`='".$r51."',`52`='".$r52."',`53`='".$r53."',`54`='".$r54."',`55`='".$r55."',`56`='".$r56."',`57`='".$r57."',`58`='".$r58."',`59`='".$r59."',`60`='".$r60."',`61`='".$r61."',`62`='".$r62."',`63`='".$r63."',`64`='".$r64."',`65`='".$r65."',`66`='".$r66."',`67`='".$r67."',`68`='".$r68."',`69`='".$r69."',`70`='".$r70."' WHERE `nr_cpfPaciente`='".$paciente."'";

$resultado = mysql_query($sql) or die(mysql_error());

header("Location: anamnese.php?cpf=".$paciente);

?>