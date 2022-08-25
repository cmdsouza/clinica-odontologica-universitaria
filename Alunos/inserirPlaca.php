<?php

session_start();
date_default_timezone_set('america/sao_paulo');
include "../conexao.php";



if(isset($_POST['ausente18'])){
	$dente18A = 3;
	$dente18B = 3;
	$dente18D = 3;
	$dente18E = 3; // dente18E = dente18C
}else{
	$dente18A = $_POST['dente18A'];
	$dente18B = $_POST['dente18B'];
	$dente18D = $_POST['dente18D'];
	$dente18E = $_POST['dente18E']; // dente18E = dente18C
}
if(isset($_POST['ausente17'])){
	$dente17A = 3;
	$dente17B = 3;
	$dente17D = 3;
	$dente17E = 3; // dente17E = dente17C
}else{
	$dente17A = $_POST['dente17A'];
	$dente17B = $_POST['dente17B'];
	$dente17D = $_POST['dente17D'];
	$dente17E = $_POST['dente17E']; // dente17E = dente17C
}
if(isset($_POST['ausente16'])){
	$dente16A = 3;
	$dente16B = 3;
	$dente16D = 3;
	$dente16E = 3; // dente16E = dente16C
}else{
	$dente16A = $_POST['dente16A'];
	$dente16B = $_POST['dente16B'];
	$dente16D = $_POST['dente16D'];
	$dente16E = $_POST['dente16E']; // dente16E = dente16C
}
if(isset($_POST['ausente15'])){
	$dente15A = 3;
	$dente15B = 3;
	$dente15D = 3;
	$dente15E = 3; // dente15E = dente15C
}else{
	$dente15A = $_POST['dente15A'];
	$dente15B = $_POST['dente15B'];
	$dente15D = $_POST['dente15D'];
	$dente15E = $_POST['dente15E']; // dente15E = dente15C
}
if(isset($_POST['ausente14'])){
	$dente14A = 3;
	$dente14B = 3;
	$dente14D = 3;
	$dente14E = 3; // dente14E = dente14C
}else{
	$dente14A = $_POST['dente14A'];
	$dente14B = $_POST['dente14B'];
	$dente14D = $_POST['dente14D'];
	$dente14E = $_POST['dente14E']; // dente14E = dente14C
}
if(isset($_POST['ausente13'])){
	$dente13A = 3;
	$dente13B = 3;
	$dente13D = 3;
	$dente13E = 3; // dente13E = dente13C
}else{
	$dente13A = $_POST['dente13A'];
	$dente13B = $_POST['dente13B'];
	$dente13D = $_POST['dente13D'];
	$dente13E = $_POST['dente13E']; // dente13E = dente13C
}
if(isset($_POST['ausente12'])){
	$dente12A = 3;
	$dente12B = 3;
	$dente12D = 3;
	$dente12E = 3; // dente12E = dente12C
}else{
	$dente12A = $_POST['dente12A'];
	$dente12B = $_POST['dente12B'];
	$dente12D = $_POST['dente12D'];
	$dente12E = $_POST['dente12E']; // dente12E = dente12C
}
if(isset($_POST['ausente11'])){
	$dente11A = 3;
	$dente11B = 3;
	$dente11D = 3;
	$dente11E = 3; // dente11E = dente11C
}else{
	$dente11A = $_POST['dente11A'];
	$dente11B = $_POST['dente11B'];
	$dente11D = $_POST['dente11D'];
	$dente11E = $_POST['dente11E']; // dente11E = dente11C
}
if(isset($_POST['ausente21'])){
	$dente21A = 3;
	$dente21B = 3;
	$dente21D = 3;
	$dente21E = 3; // dente21E = dente21C
}else{
	$dente21A = $_POST['dente21A'];
	$dente21B = $_POST['dente21B'];
	$dente21D = $_POST['dente21D'];
	$dente21E = $_POST['dente21E']; // dente21E = dente21C
}
if(isset($_POST['ausente22'])){
	$dente22A = 3;
	$dente22B = 3;
	$dente22D = 3;
	$dente22E = 3; // dente22E = dente22C
}else{
	$dente22A = $_POST['dente22A'];
	$dente22B = $_POST['dente22B'];
	$dente22D = $_POST['dente22D'];
	$dente22E = $_POST['dente22E']; // dente22E = dente22C
}
if(isset($_POST['ausente23'])){
	$dente23A = 3;
	$dente23B = 3;
	$dente23D = 3;
	$dente23E = 3; // dente23E = dente23C
}else{
	$dente23A = $_POST['dente23A'];
	$dente23B = $_POST['dente23B'];
	$dente23D = $_POST['dente23D'];
	$dente23E = $_POST['dente23E']; // dente23E = dente23C
}
if(isset($_POST['ausente24'])){
	$dente24A = 3;
	$dente24B = 3;
	$dente24D = 3;
	$dente24E = 3; // dente24E = dente24C
}else{
	$dente24A = $_POST['dente24A'];
	$dente24B = $_POST['dente24B'];
	$dente24D = $_POST['dente24D'];
	$dente24E = $_POST['dente24E']; // dente24E = dente24C
}
if(isset($_POST['ausente25'])){
	$dente25A = 3;
	$dente25B = 3;
	$dente25D = 3;
	$dente25E = 3; // dente25E = dente25C
}else{
	$dente25A = $_POST['dente25A'];
	$dente25B = $_POST['dente25B'];
	$dente25D = $_POST['dente25D'];
	$dente25E = $_POST['dente25E']; // dente25E = dente25C
}
if(isset($_POST['ausente26'])){
	$dente26A = 3;
	$dente26B = 3;
	$dente26D = 3;
	$dente26E = 3; // dente26E = dente26C
}else{
	$dente26A = $_POST['dente26A'];
	$dente26B = $_POST['dente26B'];
	$dente26D = $_POST['dente26D'];
	$dente26E = $_POST['dente26E']; // dente26E = dente26C
}
if(isset($_POST['ausente27'])){
	$dente27A = 3;
	$dente27B = 3;
	$dente27D = 3;
	$dente27E = 3; // dente27E = dente27C
}else{
	$dente27A = $_POST['dente27A'];
	$dente27B = $_POST['dente27B'];
	$dente27D = $_POST['dente27D'];
	$dente27E = $_POST['dente27E']; // dente27E = dente27C
}
if(isset($_POST['ausente28'])){
	$dente28A = 3;
	$dente28B = 3;
	$dente28D = 3;
	$dente28E = 3; // dente28E = dente28C
}else{
	$dente28A = $_POST['dente28A'];
	$dente28B = $_POST['dente28B'];
	$dente28D = $_POST['dente28D'];
	$dente28E = $_POST['dente28E']; // dente28E = dente28C
}
if(isset($_POST['ausente48'])){
	$dente48A = 3;
	$dente48B = 3;
	$dente48D = 3;
	$dente48E = 3; // dente48E = dente48C
}else{
	$dente48A = $_POST['dente48A'];
	$dente48B = $_POST['dente48B'];
	$dente48D = $_POST['dente48D'];
	$dente48E = $_POST['dente48E']; // dente48E = dente48C
}
if(isset($_POST['ausente47'])){
	$dente47A = 3;
	$dente47B = 3;
	$dente47D = 3;
	$dente47E = 3; // dente47E = dente47C
}else{
	$dente47A = $_POST['dente47A'];
	$dente47B = $_POST['dente47B'];
	$dente47D = $_POST['dente47D'];
	$dente47E = $_POST['dente47E']; // dente47E = dente47C
}
if(isset($_POST['ausente46'])){
	$dente46A = 3;
	$dente46B = 3;
	$dente46D = 3;
	$dente46E = 3; // dente46E = dente46C
}else{
	$dente46A = $_POST['dente46A'];
	$dente46B = $_POST['dente46B'];
	$dente46D = $_POST['dente46D'];
	$dente46E = $_POST['dente46E']; // dente46E = dente46C
}
if(isset($_POST['ausente45'])){
	$dente45A = 3;
	$dente45B = 3;
	$dente45D = 3;
	$dente45E = 3; // dente45E = dente45C
}else{
	$dente45A = $_POST['dente45A'];
	$dente45B = $_POST['dente45B'];
	$dente45D = $_POST['dente45D'];
	$dente45E = $_POST['dente45E']; // dente45E = dente45C
}
if(isset($_POST['ausente44'])){
	$dente44A = 3;
	$dente44B = 3;
	$dente44D = 3;
	$dente44E = 3; // dente44E = dente44C
}else{
	$dente44A = $_POST['dente44A'];
	$dente44B = $_POST['dente44B'];
	$dente44D = $_POST['dente44D'];
	$dente44E = $_POST['dente44E']; // dente44E = dente44C
}
if(isset($_POST['ausente43'])){
	$dente43A = 3;
	$dente43B = 3;
	$dente43D = 3;
	$dente43E = 3; // dente43E = dente43C
}else{
	$dente43A = $_POST['dente43A'];
	$dente43B = $_POST['dente43B'];
	$dente43D = $_POST['dente43D'];
	$dente43E = $_POST['dente43E']; // dente43E = dente43C
}
if(isset($_POST['ausente42'])){
	$dente42A = 3;
	$dente42B = 3;
	$dente42D = 3;
	$dente42E = 3; // dente42E = dente42C
}else{
	$dente42A = $_POST['dente42A'];
	$dente42B = $_POST['dente42B'];
	$dente42D = $_POST['dente42D'];
	$dente42E = $_POST['dente42E']; // dente42E = dente42C
}
if(isset($_POST['ausente41'])){
	$dente41A = 3;
	$dente41B = 3;
	$dente41D = 3;
	$dente41E = 3; // dente41E = dente41C
}else{
	$dente41A = $_POST['dente41A'];
	$dente41B = $_POST['dente41B'];
	$dente41D = $_POST['dente41D'];
	$dente41E = $_POST['dente41E']; // dente41E = dente41C
}
if(isset($_POST['ausente31'])){
	$dente31A = 3;
	$dente31B = 3;
	$dente31D = 3;
	$dente31E = 3; // dente31E = dente31C
}else{
	$dente31A = $_POST['dente31A'];
	$dente31B = $_POST['dente31B'];
	$dente31D = $_POST['dente31D'];
	$dente31E = $_POST['dente31E']; // dente31E = dente31C
}
if(isset($_POST['ausente32'])){
	$dente32A = 3;
	$dente32B = 3;
	$dente32D = 3;
	$dente32E = 3; // dente32E = dente32C
}else{
	$dente32A = $_POST['dente32A'];
	$dente32B = $_POST['dente32B'];
	$dente32D = $_POST['dente32D'];
	$dente32E = $_POST['dente32E']; // dente32E = dente32C
}
if(isset($_POST['ausente33'])){
	$dente33A = 3;
	$dente33B = 3;
	$dente33D = 3;
	$dente33E = 3; // dente33E = dente33C
}else{
	$dente33A = $_POST['dente33A'];
	$dente33B = $_POST['dente33B'];
	$dente33D = $_POST['dente33D'];
	$dente33E = $_POST['dente33E']; // dente33E = dente33C
}
if(isset($_POST['ausente34'])){
	$dente34A = 3;
	$dente34B = 3;
	$dente34D = 3;
	$dente34E = 3; // dente34E = dente34C
}else{
	$dente34A = $_POST['dente34A'];
	$dente34B = $_POST['dente34B'];
	$dente34D = $_POST['dente34D'];
	$dente34E = $_POST['dente34E']; // dente34E = dente34C
}
if(isset($_POST['ausente35'])){
	$dente35A = 3;
	$dente35B = 3;
	$dente35D = 3;
	$dente35E = 3; // dente35E = dente35C
}else{
	$dente35A = $_POST['dente35A'];
	$dente35B = $_POST['dente35B'];
	$dente35D = $_POST['dente35D'];
	$dente35E = $_POST['dente35E']; // dente35E = dente35C
}
if(isset($_POST['ausente36'])){
	$dente36A = 3;
	$dente36B = 3;
	$dente36D = 3;
	$dente36E = 3; // dente36E = dente36C
}else{
	$dente36A = $_POST['dente36A'];
	$dente36B = $_POST['dente36B'];
	$dente36D = $_POST['dente36D'];
	$dente36E = $_POST['dente36E']; // dente36E = dente36C
}
if(isset($_POST['ausente37'])){
	$dente37A = 3;
	$dente37B = 3;
	$dente37D = 3;
	$dente37E = 3; // dente37E = dente37C
}else{
	$dente37A = $_POST['dente37A'];
	$dente37B = $_POST['dente37B'];
	$dente37D = $_POST['dente37D'];
	$dente37E = $_POST['dente37E']; // dente37E = dente37C
}
if(isset($_POST['ausente38'])){
	$dente38A = 3;
	$dente38B = 3;
	$dente38D = 3;
	$dente38E = 3; // dente38E = dente38C
}else{
	$dente38A = $_POST['dente38A'];
	$dente38B = $_POST['dente38B'];
	$dente38D = $_POST['dente38D'];
	$dente38E = $_POST['dente38E']; // dente38E = dente38C
}

$dia = $_POST['dia'];
$disciplina = $_POST['disciplina'];
$dupla = $_POST['dupla'];
$professor = $_POST['professor'];
$cpf = $_POST['cpf'];

$sql = "INSERT INTO `tb_placa`(`nr_idPlaca`, `nr_cpfPaciente`, `nm_disciplina`, `nr_cpfProfessor`, `dt_data`, `nr_idDupla`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`, `24`, `25`, `26`, `27`, `28`, `29`, `30`, `31`, `32`, `33`, `34`, `35`, `36`, `37`, `38`, `39`, `40`, `41`, `42`, `43`, `44`, `45`, `46`, `47`, `48`, `49`, `50`, `51`, `52`, `53`, `54`, `55`, `56`, `57`, `58`, `59`, `60`, `61`, `62`, `63`, `64`, `65`, `66`, `67`, `68`, `69`, `70`, `71`, `72`, `73`, `74`, `75`, `76`, `77`, `78`, `79`, `80`, `81`, `82`, `83`, `84`, `85`, `86`, `87`, `88`, `89`, `90`, `91`, `92`, `93`, `94`, `95`, `96`, `97`, `98`, `99`, `100`, `101`, `102`, `103`, `104`, `105`, `106`, `107`, `108`, `109`, `110`, `111`, `112`, `113`, `114`, `115`, `116`, `117`, `118`, `119`, `120`, `121`, `122`, `123`, `124`, `125`, `126`, `127`, `128`) VALUES (NULL , '".$cpf."', '".$disciplina."', '".$professor."', '".date("d/m/Y", strtotime($dia))."', '".$dupla."', '".$dente18A."', '".$dente18B."', '".$dente18E."', '".$dente18D."', '".$dente17A."', '".$dente17B."', '".$dente17E."', '".$dente17D."', '".$dente16A."', '".$dente16B."', '".$dente16E."', '".$dente16D."', '".$dente15A."', '".$dente15B."', '".$dente15E."', '".$dente15D."', '".$dente14A."', '".$dente14B."', '".$dente14E."', '".$dente14D."', '".$dente13A."', '".$dente13B."', '".$dente13E."', '".$dente13D."', '".$dente12A."', '".$dente12B."', '".$dente12E."', '".$dente12D."', '".$dente11A."', '".$dente11B."', '".$dente11E."', '".$dente11D."', '".$dente21A."', '".$dente21B."', '".$dente21E."', '".$dente21D."', '".$dente22A."', '".$dente22B."', '".$dente22E."', '".$dente22D."', '".$dente23A."', '".$dente23B."', '".$dente23E."', '".$dente23D."', '".$dente24A."', '".$dente24B."', '".$dente24E."', '".$dente24D."', '".$dente25A."', '".$dente25B."', '".$dente25E."', '".$dente25D."', '".$dente26A."', '".$dente26B."', '".$dente26E."', '".$dente26D."', '".$dente27A."', '".$dente27B."', '".$dente27E."', '".$dente27D."', '".$dente28A."', '".$dente28B."', '".$dente28E."', '".$dente28D."', '".$dente48A."', '".$dente48B."', '".$dente48E."', '".$dente48D."', '".$dente47A."', '".$dente47B."', '".$dente47E."', '".$dente47D."', '".$dente46A."', '".$dente46B."', '".$dente46E."', '".$dente46D."', '".$dente45A."', '".$dente45B."', '".$dente45E."', '".$dente45D."', '".$dente44A."', '".$dente44B."', '".$dente44E."', '".$dente44D."', '".$dente43A."', '".$dente43B."', '".$dente43E."', '".$dente43D."', '".$dente42A."', '".$dente42B."', '".$dente42E."', '".$dente42D."', '".$dente41A."', '".$dente41B."', '".$dente41E."', '".$dente41D."', '".$dente31A."', '".$dente31B."', '".$dente31E."', '".$dente31D."', '".$dente32A."', '".$dente32B."', '".$dente32E."', '".$dente32D."', '".$dente33A."', '".$dente33B."', '".$dente33E."', '".$dente33D."', '".$dente34A."', '".$dente34B."', '".$dente34E."', '".$dente34D."', '".$dente35A."', '".$dente35B."', '".$dente35E."', '".$dente35D."', '".$dente36A."', '".$dente36B."', '".$dente36E."', '".$dente36D."', '".$dente37A."', '".$dente37B."', '".$dente37E."', '".$dente37D."', '".$dente38A."', '".$dente38B."', '".$dente38E."', '".$dente38D."')";
$resultado = mysql_query($sql) or die(mysql_error());

header("Location: periodontia.php?cpf=".$cpf);

?>