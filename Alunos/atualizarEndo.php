<?php

session_start();
date_default_timezone_set('america/sao_paulo');
include "../conexao.php";

header('Content-Type: text/html; charset=utf-8');
	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');

$r1 = $_POST['1'];
$r2 = $_POST['2'];

if(isset($_POST['3'])){
	 $r3 = 'checked';
}else{
	 $r3 = '';
}
if(isset($_POST['4'])){
	 $r4 = 'checked';
}else{
	 $r4 = '';
}
if(isset($_POST['5'])){
	 $r5 = 'checked';
}else{
	 $r5 = '';
}
if(isset($_POST['6'])){
	 $r6 = 'checked';
}else{
	 $r6 = '';
}
if(isset($_POST['7'])){
	 $r7 = 'checked';
}else{
	 $r7 = '';
}
if(isset($_POST['8'])){
	 $r8 = 'checked';
}else{
	 $r8 = '';
}
if(isset($_POST['9'])){
	 $r9 = 'checked';
}else{
	 $r9 = '';
}
if(isset($_POST['10'])){
	 $r10 = 'checked';
}else{
	 $r10 = '';
}
if(isset($_POST['11'])){
	 $r11 = 'checked';
}else{
	 $r11 = '';
}
if(isset($_POST['12'])){
	 $r12 = 'checked';
}else{
	 $r12 = '';
}
if(isset($_POST['13'])){
	 $r13 = 'checked';
}else{
	 $r13 = '';
}
if(isset($_POST['14'])){
	 $r14 = 'checked';
}else{
	 $r14 = '';
}
if(isset($_POST['15'])){
	 $r15 = 'checked';
}else{
	 $r15 = '';
}
if(isset($_POST['16'])){
	 $r16 = 'checked';
}else{
	 $r16 = '';
}
if(isset($_POST['17'])){
	 $r17 = 'checked';
}else{
	 $r17 = '';
}
if(isset($_POST['18'])){
	 $r18 = 'checked';
}else{
	 $r18 = '';
}
if(isset($_POST['19'])){
	 $r19 = 'checked';
}else{
	 $r19 = '';
}
if(isset($_POST['20'])){
	 $r20 = 'checked';
}else{
	 $r20 = '';
}
if(isset($_POST['21'])){
	 $r21 = 'checked';
}else{
	 $r21 = '';
}
if(isset($_POST['22'])){
	 $r22 = 'checked';
}else{
	 $r22 = '';
}
if(isset($_POST['23'])){
	 $r23 = 'checked';
}else{
	 $r23 = '';
}
if(isset($_POST['24'])){
	 $r24 = 'checked';
}else{
	 $r24 = '';
}
if(isset($_POST['25'])){
	 $r25 = 'checked';
}else{
	 $r25 = '';
}
if(isset($_POST['26'])){
	 $r26 = 'checked';
}else{
	 $r26 = '';
}
if(isset($_POST['27'])){
	 $r27 = 'checked';
}else{
	 $r27 = '';
}
if(isset($_POST['28'])){
	 $r28 = 'checked';
}else{
	 $r28 = '';
}
if(isset($_POST['29'])){
	 $r29 = 'checked';
}else{
	 $r29 = '';
}
if(isset($_POST['30'])){
	 $r30 = 'checked';
}else{
	 $r30 = '';
}
if(isset($_POST['31'])){
	 $r31 = 'checked';
}else{
	 $r31 = '';
}
if(isset($_POST['32'])){
	 $r32 = 'checked';
}else{
	 $r32 = '';
}
if(isset($_POST['33'])){
	 $r33 = 'checked';
}else{
	 $r33= '';
}
if(isset($_POST['34'])){
	 $r34 = 'checked';
}else{
	 $r34 = '';
}
if(isset($_POST['35'])){
	 $r35 = 'checked';
}else{
	 $r35 = '';
}
if(isset($_POST['36'])){
	 $r36 = 'checked';
}else{
	 $r36 = '';
}
if(isset($_POST['37'])){
	 $r37 = 'checked';
}else{
	 $r37 = '';
}
if(isset($_POST['38'])){
	 $r38 = 'checked';
}else{
	 $r38 = '';
}
if(isset($_POST['39'])){
	 $r39 = 'checked';
}else{
	 $r39 = '';
}
if(isset($_POST['40'])){
	 $r40 = 'checked';
}else{
	 $r40 = '';
}
if(isset($_POST['41'])){
	 $r41 = 'checked';
}else{
	 $r41 = '';
}
if(isset($_POST['42'])){
	 $r42 = 'checked';
}else{
	 $r42 = '';
}
if(isset($_POST['43'])){
	 $r43 = 'checked';
}else{
	 $r43 = '';
}
if(isset($_POST['44'])){
	 $r44 = 'checked';
}else{
	 $r44 = '';
}
if(isset($_POST['45'])){
	 $r45 = 'checked';
}else{
	 $r45 = '';
}
if(isset($_POST['46'])){
	 $r46 = 'checked';
}else{
	 $r46 = '';
}
if(isset($_POST['47'])){
	 $r47 = 'checked';
}else{
	 $r47 = '';
}
if(isset($_POST['48'])){
	 $r48 = 'checked';
}else{
	 $r48 = '';
}
if(isset($_POST['49'])){
	 $r49 = 'checked';
}else{
	 $r49 = '';
}
if(isset($_POST['50'])){
	 $r50 = 'checked';
}else{
	 $r50 = '';
}
if(isset($_POST['51'])){
	 $r51 = 'checked';
}else{
	 $r51 = '';
}
if(isset($_POST['52'])){
	 $r52 = 'checked';
}else{
	 $r52 = '';
}
if(isset($_POST['53'])){
	 $r53 = 'checked';
}else{
	 $r53 = '';
}
if(isset($_POST['54'])){
	 $r54 = 'checked';
}else{
	 $r54 = '';
}
if(isset($_POST['55'])){
	 $r55 = 'checked';
}else{
	 $r55 = '';
}
if(isset($_POST['56'])){
	 $r56 = 'checked';
}else{
	 $r56 = '';
}
if(isset($_POST['57'])){
	 $r57 = $_POST['57'];
}else{
	 $r57 = '';
}
if(isset($_POST['58'])){
	 $r58 = 'checked';
}else{
	 $r58 = '';
}
if(isset($_POST['59'])){
	 $r59 = 'checked';
}else{
	 $r59 = '';
}
if(isset($_POST['60'])){
	 $r60 = 'checked';
}else{
	 $r60 = '';
}
if(isset($_POST['61'])){
	 $r61 = 'checked';
}else{
	 $r61 = '';
}
if(isset($_POST['62'])){
	 $r62 = 'checked';
}else{
	 $r62 = '';
}
if(isset($_POST['63'])){
	 $r63 = 'checked';
}else{
	 $r63 = '';
}
if(isset($_POST['64'])){
	 $r64 = 'checked';
}else{
	 $r64 = '';
}
if(isset($_POST['65'])){
	 $r65 = 'checked';
}else{
	 $r65 = '';
}
if(isset($_POST['66'])){
	 $r66 = 'checked';
}else{
	 $r66 = '';
}
if(isset($_POST['67'])){
	 $r67 = 'checked';
}else{
	 $r67 = '';
}
if(isset($_POST['68'])){
	 $r68 = 'checked';
}else{
	 $r68 = '';
}
if(isset($_POST['69'])){
	 $r69 = 'checked';
}else{
	 $r69 = '';
}
if(isset($_POST['70'])){
	 $r70 = 'checked';
}else{
	 $r70 = '';
}

if(isset($_POST['71'])){
	 $r71 = $_POST['71'];
}else{
	 $r71 = '';
}

if(isset($_POST['72'])){
	 $r72 = $_POST['72'];
}else{
	 $r72 = '';
}

if(isset($_POST['73'])){
	 $r73 = $_POST['73'];
}else{
	 $r73 = '';
}

if(isset($_POST['74'])){
	 $r74 = $_POST['74'];
}else{
	 $r74 = '';
}

if(isset($_POST['75'])){
	 $r75 = $_POST['75'];
}else{
	 $r75 = '';
}

if(isset($_POST['76'])){
	 $r76 = $_POST['76'];
}else{
	 $r76 = '';
}

if(isset($_POST['77'])){
	 $r77 = $_POST['77'];
}else{
	 $r77 = '';
}

if(isset($_POST['78'])){
	 $r78 = $_POST['78'];
}else{
	 $r78 = '';
}

if(isset($_POST['79'])){
	 $r79 = $_POST['79'];
}else{
	 $r79 = '';
}

if(isset($_POST['80'])){
	 $r80 = $_POST['80'];
}else{
	 $r80 = '';
}

if(isset($_POST['81'])){
	 $r81 = $_POST['81'];
}else{
	 $r81 = '';
}

if(isset($_POST['82'])){
	 $r82 = $_POST['82'];
}else{
	 $r82 = '';
}

if(isset($_POST['83'])){
	 $r83 = $_POST['83'];
}else{
	 $r83 = '';
}

if(isset($_POST['84'])){
	 $r84 = $_POST['84'];
}else{
	 $r84 = '';
}

if(isset($_POST['85'])){
	 $r85 = $_POST['85'];
}else{
	 $r85 = '';
}

if(isset($_POST['86'])){
	 $r86 = $_POST['86'];
}else{
	 $r86 = '';
}

if(isset($_POST['87'])){
	 $r87 = $_POST['87'];
}else{
	 $r87 = '';
}

if(isset($_POST['88'])){
	 $r88 = $_POST['88'];
}else{
	 $r88 = '';
}

if(isset($_POST['89'])){
	 $r89 = $_POST['89'];
}else{
	 $r89 = '';
}

if(isset($_POST['90'])){
	 $r90 = $_POST['90'];
}else{
	 $r90 = '';
}

if(isset($_POST['91'])){
	 $r91 = $_POST['91'];
}else{
	 $r91 = '';
}

if(isset($_POST['92'])){
	 $r92 = $_POST['92'];
}else{
	 $r92 = '';
}

if(isset($_POST['93'])){
	 $r93 = $_POST['93'];
}else{
	 $r93 = '';
}

if(isset($_POST['94'])){
	 $r94 = $_POST['94'];
}else{
	 $r94 = '';
}

if(isset($_POST['95'])){
	 $r95 = $_POST['95'];
}else{
	 $r95 = '';
}

if(isset($_POST['96'])){
	 $r96 = $_POST['96'];
}else{
	 $r96 = '';
}

if(isset($_POST['97'])){
	 $r97 = $_POST['97'];
}else{
	 $r97 = '';
}

if(isset($_POST['98'])){
	 $r98 = $_POST['98'];
}else{
	 $r98 = '';
}

if(isset($_POST['99'])){
	 $r99 = $_POST['99'];
}else{
	 $r99 = '';
}

if(isset($_POST['100'])){
	 $r100 = $_POST['100'];
}else{
	 $r100 = '';
}

if(isset($_POST['101'])){
	 $r101 = $_POST['101'];
}else{
	 $r101 = '';
}

if(isset($_POST['102'])){
	 $r102 = $_POST['102'];
}else{
	 $r102 = '';
}

if(isset($_POST['103'])){
	 $r103 = $_POST['103'];
}else{
	 $r103 = '';
}

if(isset($_POST['104'])){
	 $r104 = $_POST['104'];
}else{
	 $r104 = '';
}

if(isset($_POST['105'])){
	 $r105 = $_POST['105'];
}else{
	 $r105 = '';
}

if(isset($_POST['106'])){
	 $r106 = $_POST['106'];
}else{
	 $r106 = '';
}

if(isset($_POST['107'])){
	 $r107 = $_POST['107'];
}else{
	 $r107 = '';
}

if(isset($_POST['108'])){
	 $r108 = $_POST['108'];
}else{
	 $r108 = '';
}

if(isset($_POST['109'])){
	 $r109 = $_POST['109'];
}else{
	 $r109 = '';
}

if(isset($_POST['110'])){
	 $r110 = $_POST['110'];
}else{
	 $r110 = '';
}

if(isset($_POST['111'])){
	 $r111 = $_POST['111'];
}else{
	 $r111 = '';
}

if(isset($_POST['112'])){
	 $r112 = $_POST['112'];
}else{
	 $r112 = '';
}

if(isset($_POST['113'])){
	 $r113 = $_POST['113'];
}else{
	 $r113 = '';
}

if(isset($_POST['114'])){
	 $r114 = $_POST['114'];
}else{
	 $r114 = '';
}

if(isset($_POST['115'])){
	 $r115 = $_POST['115'];
}else{
	 $r115 = '';
}

if(isset($_POST['116'])){
	 $r116 = $_POST['116'];
}else{
	 $r116 = '';
}

if(isset($_POST['117'])){
	 $r117 = $_POST['117'];
}else{
	 $r117 = '';
}

if(isset($_POST['118'])){
	 $r118 = $_POST['118'];
}else{
	 $r118 = '';
}

if(isset($_POST['119'])){
	 $r119 = $_POST['119'];
}else{
	 $r119 = '';
}

if(isset($_POST['120'])){
	 $r120 = $_POST['120'];
}else{
	 $r120 = '';
}

if(isset($_POST['121'])){
	 $r121 = $_POST['121'];
}else{
	 $r121 = '';
}

if(isset($_POST['122'])){
	 $r122 = 'checked';
}else{
	 $r122 = '';
}

if(isset($_POST['123'])){
	 $r123 = 'checked';
}else{
	 $r123 = '';
}

if(isset($_POST['124'])){
	 $r124 = 'checked';
}else{
	 $r124 = '';
}

if(isset($_POST['125'])){
	 $r125 = 'checked';
}else{
	 $r125 = '';
}

if(isset($_POST['126'])){
	 $r126 = 'checked';
}else{
	 $r126 = '';
}

if(isset($_POST['127'])){
	 $r127 = 'checked';
}else{
	 $r127 = '';
}

if(isset($_POST['128'])){
	 $r128 = 'checked';
}else{
	 $r128 = '';
}

if(isset($_POST['129'])){
	 $r129 = 'checked';
}else{
	 $r129 = '';
}

if(isset($_POST['130'])){
	 $r130 = 'checked';
}else{
	 $r130 = '';
}


$sql = "UPDATE `tb_endodontia` SET `nr_idDupla`='".$_POST['dupla']."',`dt_preenchimento`='".date('d/m/Y')."',`1`='".$r1."',`2`='".$r2."',`3`='".$r3."',`4`='".$r4."',`5`='".$r5."',`6`='".$r6."',`7`='".$r7."',`8`='".$r8."',`9`='".$r9."',`10`='".$r10."',`11`='".$r11."',`12`='".$r12."',`13`='".$r13."',`14`='".$r14."',`15`='".$r15."',`16`='".$r16."',`17`='".$r17."',`18`='".$r18."',`19`='".$r19."',`20`='".$r20."',`21`='".$r21."',`22`='".$r22."',`23`='".$r23."',`24`='".$r24."',`25`='".$r25."',`26`='".$r26."',`27`='".$r27."',`28`='".$r28."',`29`='".$r29."',`30`='".$r30."',`31`='".$r31."',`32`='".$r32."',`33`='".$r33."',`34`='".$r34."',`35`='".$r35."',`36`='".$r36."',`37`='".$r37."',`38`='".$r38."',`39`='".$r39."',`40`='".$r40."',`41`='".$r41."',`42`='".$r42."',`43`='".$r43."',`44`='".$r44."',`45`='".$r45."',`46`='".$r46."',`47`='".$r47."',`48`='".$r48."',`49`='".$r49."',`50`='".$r50."',`51`='".$r51."',`52`='".$r52."',`53`='".$r53."',`54`='".$r54."',`55`='".$r55."',`56`='".$r56."',`57`='".$r57."',`58`='".$r58."',`59`='".$r59."',`60`='".$r60."',`61`='".$r61."',`62`='".$r62."',`63`='".$r63."',`64`='".$r64."',`65`='".$r65."',`66`='".$r66."',`67`='".$r67."',`68`='".$r68."',`69`='".$r69."',`70`='".$r70."',`71`='".$r71."',`72`='".$r72."',`73`='".$r73."',`74`='".$r74."',`75`='".$r75."',`76`='".$r76."',`77`='".$r77."',`78`='".$r78."',`79`='".$r79."',`80`='".$r80."',`81`='".$r81."',`82`='".$r82."',`83`='".$r83."',`84`='".$r84."',`85`='".$r85."',`86`='".$r86."',`87`='".$r87."',`88`='".$r88."',`89`='".$r89."',`90`='".$r90."',`91`='".$r91."',`92`='".$r92."',`93`='".$r93."',`94`='".$r94."',`95`='".$r95."',`96`='".$r96."',`97`='".$r97."',`98`='".$r98."',`99`='".$r99."',`100`='".$r100."',`101`='".$r101."',`102`='".$r102."',`103`='".$r103."',`104`='".$r104."',`105`='".$r105."',`106`='".$r106."',`107`='".$r107."',`108`='".$r108."',`109`='".$r109."',`110`='".$r110."',`111`='".$r111."',`112`='".$r112."',`113`='".$r113."',`114`='".$r114."',`115`='".$r115."',`116`='".$r116."',`117`='".$r117."',`118`='".$r118."',`119`='".$r119."',`120`='".$r120."',`121`='".$r121."',`122`='".$r122."',`123`='".$r123."',`124`='".$r124."',`125`='".$r125."',`126`='".$r126."',`127`='".$r127."',`128`='".$r128."',`129`='".$r129."',`130`='".$r130."' WHERE `nr_idEndodontia`=". $_POST['id'];
$resultado = mysql_query($sql) or die(mysql_error());

header("Location: endodontia.php?cpf=".$_POST['cpf']);

?>