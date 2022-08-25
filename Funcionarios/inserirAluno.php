<?php

session_start();
include "../conexao.php";
date_default_timezone_set('America/Sao_Paulo');

$aleatorio = mt_rand(1000, 9999);
$numImg = 0;
$numImg2 = 0;

while(($numImg != 0) && ($numImg2 != 0)){
	$sqlNome = "SELECT * FROM tb_funcionarios WHERE nr_cpfFuncionario = '".$aleatorio."'";
	$resultadoNome = mysql_query($sqlNome) or die();
	$numImg = mysql_num_rows($resultadoNome);
	
	$sqlNome2 = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$aleatorio."'";
	$resultadoNome2 = mysql_query($sqlNome2) or die();
	$numImg2 = mysql_num_rows($resultadoNome2);
	
	$aleatorio = mt_rand(1000, 9999);
}

$cpf = $aleatorio;
$nome = $_POST['nome'];
$senha = '12345678';
$email = $_POST['email'];
$periodo = $_POST['periodo'];
$turma = $_POST['turma'];
$materiais = '0';
$imagem6 = $_FILES['imagem'];


if (!empty($imagem6["name"])) {
		
		$error = array();
 
    	// Verifica se o arquivo é uma imagem
    	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $imagem6["type"])){
     	   $error[1] = "Isso não é uma imagem.";
   	 	} 
 
		// Se não houver nenhum erro
		if (count($error) == 0) {
		
			// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem6["name"], $ext);
 
        	// Gera um nome único para a imagem
        	$nome_imagem = md5(uniqid(time())) . "." . $ext[1];
 
        	// Caminho de onde ficará a imagem
        	$caminho_imagem = "../Alunos/alunos/" . $nome_imagem;
 
			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($imagem6["tmp_name"], $caminho_imagem);
		
			// Insere os dados no banco
			$sql = "INSERT INTO tb_aluno(nr_cpfAluno, nm_senha, nm_nomeAluno, nm_emailAluno, nr_idMateriais, nr_periodo, nm_turma, nm_foto) VALUES ('".$cpf."', '".$senha."', '".$nome."', '".$email."', '".$materiais."', ".$periodo.", '".$turma."', '".$nome_imagem."')";
			$resultado = mysql_query($sql) or die();
		
		}
	
}



$_SESSION['mensagem'] = "Aluno Cadastrado";
$_SESSION['mensagem2'] = $cpf;
header("Location: cadastrarAluno.php");

?>