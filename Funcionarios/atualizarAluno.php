<?php

include "../conexao.php";
date_default_timezone_set('America/Sao_Paulo');


$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$turma = $_POST['turma'];
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
			$sql = "UPDATE `tb_aluno` SET `nm_nomeAluno`='".$nome."', `nm_emailAluno`='".$email."', `nm_turma`='".$turma."', `nm_foto`='".$nome_imagem."' WHERE `nr_cpfAluno`='".$cpf."'";
			$resultado = mysql_query($sql) or die();
		
		}
	
}else{
	$sql = "UPDATE `tb_aluno` SET `nm_nomeAluno`='".$nome."', `nm_emailAluno`='".$email."', `nm_turma`='".$turma."' WHERE `nr_cpfAluno`='".$cpf."'";
	$resultado = mysql_query($sql) or die();
}




header("Location: cadastrarAluno.php");

?>