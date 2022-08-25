<?php

session_start();
include "../conexao.php";

$paciente = $_POST['paciente'];

$sqlNome = "SELECT * FROM tb_anamnese WHERE nr_cpfPaciente ='".$paciente."'";
$resultadoNome = mysql_query($sqlNome) or die(mysql_error());
while($linhaNome = mysql_fetch_array($resultadoNome)){
	$id = $linhaNome['nr_idAnamnese'];
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
						
$sql = "UPDATE `tb_anamnese` SET `55`='".$r55."', `56`='".$r56."', `57`='".$r57."', `58`='".$r58."', `59`='".$r59."', `60`='".$r60."', `61`='".$r61."', `62`='".$r62."' WHERE nr_idAnamnese =".$id;

$resultado = mysql_query($sql) or die(mysql_error());

header("Location: anamnese5.php?cpf=".$paciente);

?>