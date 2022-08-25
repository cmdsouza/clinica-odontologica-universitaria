<?php

session_start();
include "../conexao.php";
date_default_timezone_set('America/Sao_Paulo');

header('Content-Type: text/html; charset=utf-8');
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

$cpf = $_POST['cpf'];
$data = $_POST['data'];
$tipo = $_POST['tipo'];

if($tipo == 'parte1'){
	$sql = "UPDATE `tb_periograma` SET `28`='".$_POST['dPSV18']."', `29`='".$_POST['dNIC18']."', `30`='".$_POST['dMD18']."', `31`='".$_POST['dHAMP18']."', `32`='".$_POST['dPMG18']."' WHERE `nr_cpfPaciente`='".$cpf."' AND `dt_data`='".$data."' AND `nr_dente`= 18";
	$resultado = mysql_query($sql) or die(mysql_error());
	
	$sql = "UPDATE `tb_periograma` SET `28`='".$_POST['dPSV17']."', `29`='".$_POST['dNIC17']."', `30`='".$_POST['dMD17']."', `31`='".$_POST['dHAMP17']."', `32`='".$_POST['dPMG17']."' WHERE `nr_cpfPaciente`='".$cpf."' AND `dt_data`='".$data."' AND `nr_dente`= 17";
	$resultado = mysql_query($sql) or die(mysql_error());
	
	$sql = "UPDATE `tb_periograma` SET `28`='".$_POST['dPSV16']."', `29`='".$_POST['dNIC16']."', `30`='".$_POST['dMD16']."', `31`='".$_POST['dHAMP16']."', `32`='".$_POST['dPMG16']."' WHERE `nr_cpfPaciente`='".$cpf."' AND `dt_data`='".$data."' AND `nr_dente`= 16";
	$resultado = mysql_query($sql) or die(mysql_error());
	
	$sql = "UPDATE `tb_periograma` SET `28`='".$_POST['dPSV15']."', `29`='".$_POST['dNIC15']."', `30`='".$_POST['dMD15']."', `31`='".$_POST['dHAMP15']."', `32`='".$_POST['dPMG15']."' WHERE `nr_cpfPaciente`='".$cpf."' AND `dt_data`='".$data."' AND `nr_dente`= 15";
	$resultado = mysql_query($sql) or die(mysql_error());
	
	$sql = "UPDATE `tb_periograma` SET `28`='".$_POST['dPSV14']."', `29`='".$_POST['dNIC14']."', `30`='".$_POST['dMD14']."', `31`='".$_POST['dHAMP14']."', `32`='".$_POST['dPMG14']."'  WHERE `nr_cpfPaciente`='".$cpf."' AND `dt_data`='".$data."' AND `nr_dente`= 14";
	$resultado = mysql_query($sql) or die(mysql_error());
	
	$sql = "UPDATE `tb_periograma` SET `28`='".$_POST['dPSV13']."', `29`='".$_POST['dNIC13']."', `30`='".$_POST['dMD13']."', `31`='".$_POST['dHAMP13']."', `32`='".$_POST['dPMG13']."'  WHERE `nr_cpfPaciente`='".$cpf."' AND `dt_data`='".$data."' AND `nr_dente`= 13";
	$resultado = mysql_query($sql) or die(mysql_error());
	
	$sql = "UPDATE `tb_periograma` SET `28`='".$_POST['dPSV12']."', `29`='".$_POST['dNIC12']."', `30`='".$_POST['dMD12']."', `31`='".$_POST['dHAMP12']."', `32`='".$_POST['dPMG12']."'  WHERE `nr_cpfPaciente`='".$cpf."' AND `dt_data`='".$data."' AND `nr_dente`= 12";
	$resultado = mysql_query($sql) or die(mysql_error());
	
	$sql = "UPDATE `tb_periograma` SET `28`='".$_POST['dPSV11']."', `29`='".$_POST['dNIC11']."', `30`='".$_POST['dMD11']."', `31`='".$_POST['dHAMP11']."', `32`='".$_POST['dPMG11']."'  WHERE `nr_cpfPaciente`='".$cpf."' AND `dt_data`='".$data."' AND `nr_dente`= 11";
	$resultado = mysql_query($sql) or die(mysql_error());
	
	$sql = "UPDATE `tb_periograma` SET `28`='".$_POST['dPSV21']."', `29`='".$_POST['dNIC21']."', `30`='".$_POST['dMD21']."', `31`='".$_POST['dHAMP21']."', `32`='".$_POST['dPMG21']."'  WHERE `nr_cpfPaciente`='".$cpf."' AND `dt_data`='".$data."' AND `nr_dente`= 21";
	$resultado = mysql_query($sql) or die(mysql_error());
	
	$sql = "UPDATE `tb_periograma` SET `28`='".$_POST['dPSV22']."', `29`='".$_POST['dNIC22']."', `30`='".$_POST['dMD22']."', `31`='".$_POST['dHAMP22']."', `32`='".$_POST['dPMG22']."'  WHERE `nr_cpfPaciente`='".$cpf."' AND `dt_data`='".$data."' AND `nr_dente`= 22";
	$resultado = mysql_query($sql) or die(mysql_error());
	
	$sql = "UPDATE `tb_periograma` SET `28`='".$_POST['dPSV23']."', `29`='".$_POST['dNIC23']."', `30`='".$_POST['dMD23']."', `31`='".$_POST['dHAMP23']."', `32`='".$_POST['dPMG23']."'  WHERE `nr_cpfPaciente`='".$cpf."' AND `dt_data`='".$data."' AND `nr_dente`= 23";
	$resultado = mysql_query($sql) or die(mysql_error());
	
	$sql = "UPDATE `tb_periograma` SET `28`='".$_POST['dPSV24']."', `29`='".$_POST['dNIC24']."', `30`='".$_POST['dMD24']."', `31`='".$_POST['dHAMP24']."', `32`='".$_POST['dPMG24']."'  WHERE `nr_cpfPaciente`='".$cpf."' AND `dt_data`='".$data."' AND `nr_dente`= 24";
	$resultado = mysql_query($sql) or die(mysql_error());
	
	$sql = "UPDATE `tb_periograma` SET `28`='".$_POST['dPSV25']."', `29`='".$_POST['dNIC25']."', `30`='".$_POST['dMD25']."', `31`='".$_POST['dHAMP25']."', `32`='".$_POST['dPMG25']."'  WHERE `nr_cpfPaciente`='".$cpf."' AND `dt_data`='".$data."' AND `nr_dente`= 25";
	$resultado = mysql_query($sql) or die(mysql_error());
	
	$sql = "UPDATE `tb_periograma` SET `28`='".$_POST['dPSV26']."', `29`='".$_POST['dNIC26']."', `30`='".$_POST['dMD26']."', `31`='".$_POST['dHAMP26']."', `32`='".$_POST['dPMG26']."'  WHERE `nr_cpfPaciente`='".$cpf."' AND `dt_data`='".$data."' AND `nr_dente`= 26";
	$resultado = mysql_query($sql) or die(mysql_error());
	
	$sql = "UPDATE `tb_periograma` SET `28`='".$_POST['dPSV27']."', `29`='".$_POST['dNIC27']."', `30`='".$_POST['dMD27']."', `31`='".$_POST['dHAMP27']."', `32`='".$_POST['dPMG27']."'  WHERE `nr_cpfPaciente`='".$cpf."' AND `dt_data`='".$data."' AND `nr_dente`= 27";
	$resultado = mysql_query($sql) or die(mysql_error());
	
	$sql = "UPDATE `tb_periograma` SET `28`='".$_POST['dPSV28']."', `29`='".$_POST['dNIC28']."', `30`='".$_POST['dMD28']."', `31`='".$_POST['dHAMP28']."', `32`='".$_POST['dPMG28']."'  WHERE `nr_cpfPaciente`='".$cpf."' AND `dt_data`='".$data."' AND `nr_dente`= 28";
	$resultado = mysql_query($sql) or die(mysql_error());
}else{
	$sql = "UPDATE `tb_periograma` SET `28`='".$_POST['dPSV48']."', `29`='".$_POST['dNIC48']."', `30`='".$_POST['dMD48']."', `31`='".$_POST['dHAMP48']."', `32`='".$_POST['dPMG48']."'  WHERE `nr_cpfPaciente`='".$cpf."' AND `dt_data`='".$data."' AND `nr_dente`= 48";
	$resultado = mysql_query($sql) or die(mysql_error());
	
	$sql = "UPDATE `tb_periograma` SET `28`='".$_POST['dPSV47']."', `29`='".$_POST['dNIC47']."', `30`='".$_POST['dMD47']."', `31`='".$_POST['dHAMP47']."', `32`='".$_POST['dPMG47']."'  WHERE `nr_cpfPaciente`='".$cpf."' AND `dt_data`='".$data."' AND `nr_dente`= 47";
	$resultado = mysql_query($sql) or die(mysql_error());
	
	$sql = "UPDATE `tb_periograma` SET `28`='".$_POST['dPSV46']."', `29`='".$_POST['dNIC46']."', `30`='".$_POST['dMD46']."', `31`='".$_POST['dHAMP46']."', `32`='".$_POST['dPMG46']."'  WHERE `nr_cpfPaciente`='".$cpf."' AND `dt_data`='".$data."' AND `nr_dente`= 46";
	$resultado = mysql_query($sql) or die(mysql_error());
	
	$sql = "UPDATE `tb_periograma` SET `28`='".$_POST['dPSV45']."', `29`='".$_POST['dNIC45']."', `30`='".$_POST['dMD45']."', `31`='".$_POST['dHAMP45']."', `32`='".$_POST['dPMG45']."'  WHERE `nr_cpfPaciente`='".$cpf."' AND `dt_data`='".$data."' AND `nr_dente`= 45";
	$resultado = mysql_query($sql) or die(mysql_error());
	
	$sql = "UPDATE `tb_periograma` SET `28`='".$_POST['dPSV44']."', `29`='".$_POST['dNIC44']."', `30`='".$_POST['dMD44']."', `31`='".$_POST['dHAMP44']."', `32`='".$_POST['dPMG44']."'  WHERE `nr_cpfPaciente`='".$cpf."' AND `dt_data`='".$data."' AND `nr_dente`= 44";
	$resultado = mysql_query($sql) or die(mysql_error());
	
	$sql = "UPDATE `tb_periograma` SET `28`='".$_POST['dPSV43']."', `29`='".$_POST['dNIC43']."', `30`='".$_POST['dMD43']."', `31`='".$_POST['dHAMP43']."', `32`='".$_POST['dPMG43']."'  WHERE `nr_cpfPaciente`='".$cpf."' AND `dt_data`='".$data."' AND `nr_dente`= 43";
	$resultado = mysql_query($sql) or die(mysql_error());
	
	$sql = "UPDATE `tb_periograma` SET `28`='".$_POST['dPSV42']."', `29`='".$_POST['dNIC42']."', `30`='".$_POST['dMD42']."', `31`='".$_POST['dHAMP42']."', `32`='".$_POST['dPMG42']."'  WHERE `nr_cpfPaciente`='".$cpf."' AND `dt_data`='".$data."' AND `nr_dente`= 42";
	$resultado = mysql_query($sql) or die(mysql_error());
	
	$sql = "UPDATE `tb_periograma` SET `28`='".$_POST['dPSV41']."', `29`='".$_POST['dNIC41']."', `30`='".$_POST['dMD41']."', `31`='".$_POST['dHAMP41']."', `32`='".$_POST['dPMG41']."'  WHERE `nr_cpfPaciente`='".$cpf."' AND `dt_data`='".$data."' AND `nr_dente`= 41";
	$resultado = mysql_query($sql) or die(mysql_error());
	
	$sql = "UPDATE `tb_periograma` SET `28`='".$_POST['dPSV31']."', `29`='".$_POST['dNIC31']."', `30`='".$_POST['dMD31']."', `31`='".$_POST['dHAMP31']."', `32`='".$_POST['dPMG31']."'  WHERE `nr_cpfPaciente`='".$cpf."' AND `dt_data`='".$data."' AND `nr_dente`= 31";
	$resultado = mysql_query($sql) or die(mysql_error());
	
	$sql = "UPDATE `tb_periograma` SET `28`='".$_POST['dPSV32']."', `29`='".$_POST['dNIC32']."', `30`='".$_POST['dMD32']."', `31`='".$_POST['dHAMP32']."', `32`='".$_POST['dPMG32']."'  WHERE `nr_cpfPaciente`='".$cpf."' AND `dt_data`='".$data."' AND `nr_dente`= 32";
	$resultado = mysql_query($sql) or die(mysql_error());
	
	$sql = "UPDATE `tb_periograma` SET `28`='".$_POST['dPSV33']."', `29`='".$_POST['dNIC33']."', `30`='".$_POST['dMD33']."', `31`='".$_POST['dHAMP33']."', `32`='".$_POST['dPMG33']."'  WHERE `nr_cpfPaciente`='".$cpf."' AND `dt_data`='".$data."' AND `nr_dente`= 33";
	$resultado = mysql_query($sql) or die(mysql_error());
	
	$sql = "UPDATE `tb_periograma` SET `28`='".$_POST['dPSV34']."', `29`='".$_POST['dNIC34']."', `30`='".$_POST['dMD34']."', `31`='".$_POST['dHAMP34']."', `32`='".$_POST['dPMG34']."'  WHERE `nr_cpfPaciente`='".$cpf."' AND `dt_data`='".$data."' AND `nr_dente`= 34";
	$resultado = mysql_query($sql) or die(mysql_error());
	
	$sql = "UPDATE `tb_periograma` SET `28`='".$_POST['dPSV35']."', `29`='".$_POST['dNIC35']."', `30`='".$_POST['dMD35']."', `31`='".$_POST['dHAMP35']."', `32`='".$_POST['dPMG35']."'  WHERE `nr_cpfPaciente`='".$cpf."' AND `dt_data`='".$data."' AND `nr_dente`= 35";
	$resultado = mysql_query($sql) or die(mysql_error());
	
	$sql = "UPDATE `tb_periograma` SET `28`='".$_POST['dPSV36']."', `29`='".$_POST['dNIC36']."', `30`='".$_POST['dMD36']."', `31`='".$_POST['dHAMP36']."', `32`='".$_POST['dPMG36']."'  WHERE `nr_cpfPaciente`='".$cpf."' AND `dt_data`='".$data."' AND `nr_dente`= 36";
	$resultado = mysql_query($sql) or die(mysql_error());
	
	$sql = "UPDATE `tb_periograma` SET `28`='".$_POST['dPSV37']."', `29`='".$_POST['dNIC37']."', `30`='".$_POST['dMD37']."', `31`='".$_POST['dHAMP37']."', `32`='".$_POST['dPMG37']."'  WHERE `nr_cpfPaciente`='".$cpf."' AND `dt_data`='".$data."' AND `nr_dente`= 37";
	$resultado = mysql_query($sql) or die(mysql_error());
	
	$sql = "UPDATE `tb_periograma` SET `28`='".$_POST['dPSV38']."', `29`='".$_POST['dNIC38']."', `30`='".$_POST['dMD38']."', `31`='".$_POST['dHAMP38']."', `32`='".$_POST['dPMG38']."'  WHERE `nr_cpfPaciente`='".$cpf."' AND `dt_data`='".$data."' AND `nr_dente`= 38";
	$resultado = mysql_query($sql) or die(mysql_error());
	
}

header("Location: periodontia.php?cpf=".$cpf);

?>