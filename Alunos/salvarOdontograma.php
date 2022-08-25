<?php

include "../conexao.php";

$idConsulta = $_POST['idConsulta'];

echo "<hr><br>Dente 18<br>";

if(isset($_POST['ausente18'])){
	echo $ausente18 = $_POST['ausente18']."<br>";
}else{
	echo $repetir18 = $_POST['repetir18']."<br>";
	echo $situacao18A = $_POST['situacao18A']."<br>";
	echo $situacao18B = $_POST['situacao18A']."<br>";
	echo $situacao18C = $_POST['situacao18A']."<br>";
	echo $situacao18D = $_POST['situacao18A']."<br>";
	echo $situacao18E = $_POST['situacao18A']."<br>";
	echo $tratamento18A = $_POST['tratamento18A']."<br>";
	echo $tratamento18B = $_POST['tratamento18A']."<br>";
	echo $tratamento18C = $_POST['tratamento18A']."<br>";
	echo $tratamento18D = $_POST['tratamento18A']."<br>";
	echo $tratamento18E = $_POST['tratamento18A']."<br>";
}
echo "<hr>";

//header("Location: finalizarConsulta.php?idConsulta=".$idConsulta);

?>