<?php

include "../conexao.php";
date_default_timezone_set('America/Sao_Paulo');

$imagem6 = $_FILES['imagem'];
$paciente = $_POST['paciente'];
$data = date("d/m/Y");

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
        	$caminho_imagem = "radiografias/" . $nome_imagem;
 
			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($imagem6["tmp_name"], $caminho_imagem);
		
			// Insere os dados no banco
			$sql4 = "INSERT INTO tb_radiografias(nr_idRadiografia, nm_identificacao, nr_cpfPaciente, dt_inclusao) VALUES (NULL, '".$nome_imagem."', '".$paciente."', '".$data."')";
			$resultado4 = mysql_query($sql4) or die();
		
		}
	
}


echo "
	<script>
		window.location = 'radiografias.php?cpf=".$paciente."';
	</script>
";

?>