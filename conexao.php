<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "usbw";
	$db_nome = "db_clinica";
	
	$link = mysql_connect($servidor, $usuario, $senha);
	mysql_select_db($db_nome);
	header('Content-Type: text/html; charset=utf-8');
	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');
	mysql_set_charset('utf-8', $link);
?>