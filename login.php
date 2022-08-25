<?php

include "conexao.php";
session_start();

$cpf = $_POST['cpf'];
$password = $_POST['password'];

$sql = "SELECT * FROM tb_aluno WHERE nr_cpfAluno = '".$cpf."' and nm_senha = '$password'";
$resultado = mysql_query($sql) or die();
$numEstudante = mysql_num_rows($resultado);
		
if($numEstudante > 0){
	while($linha = mysql_fetch_array($resultado)){
		$_SESSION['nome'] = $linha['nm_nomeAluno'];
		$_SESSION['cpf'] = $cpf;
		$_SESSION['email'] = $linha['nm_emailAluno'];
		
		if($password != '12345678'){
			echo "
					<script>
						window.location = 'Alunos/alunos.php';
					</script>
				";
		}else{
			echo "
					<script>
						window.location = 'trocarSenha.php?cpf=".$cpf."&tipo=aluno';
					</script>
				";
		}
	}
}else{
	if($numEstudante == 0){
		$sql2 = "SELECT * FROM tb_funcionarios WHERE nr_cpfFuncionario = '".$cpf."' and nm_senha = '$password'";
		$resultado2 = mysql_query($sql2) or die();
		$numFunc = mysql_num_rows($resultado2);
		
		if($numFunc > 0){
			while($linha2 = mysql_fetch_array($resultado2)){
				if($linha2['nm_tipo'] == 'Administrador'){
					$_SESSION['nome'] = $linha2['nm_nomeFuncionario'];
					$_SESSION['cpf'] = $cpf;
					$_SESSION['email'] = $linha2['nm_emailFuncionario'];
					$_SESSION['tipo'] = $linha2['nm_tipo'];
					$_SESSION['mensagem'] = "ID e/ou senha corretos";
						
					if($password != '12345678'){
						echo "
								<script>
									window.location = 'Funcionarios/funcionarios.php';
								</script>
							";
					}else{
						echo "
								<script>
									window.location = 'trocarSenha.php?cpf=".$cpf."&tipo=funcionario';
								</script>
							";
					}
					
					
				}else{
					$_SESSION['nome'] = $linha2['nm_nomeFuncionario'];
					$_SESSION['cpf'] = $cpf;
					$_SESSION['email'] = $linha2['nm_emailFuncionario'];
					$_SESSION['tipo'] = $linha2['nm_tipo'];
					$_SESSION['mensagem'] = "ID e/ou senha corretos";
						
					if($password != '12345678'){
						echo "
								<script>
									window.location = 'Funcionarios/funcionarios.php';
								</script>
							";
					}else{
						echo "
								<script>
									window.location = 'trocarSenha.php?cpf=".$cpf."&tipo=funcionario';
								</script>
							";
					}
				}
			}
		}else{
			if(($numEstudante == 0) && ($numFunc == 0)){
				$sql3 = "SELECT * FROM tb_paciente WHERE nr_cpfPaciente = '".$cpf."' and nm_senha = '$password'";
				$resultado3 = mysql_query($sql3) or die();
				$numPac = mysql_num_rows($resultado3);
				
				if($numPac > 0){
					while($linha3 = mysql_fetch_array($resultado3)){
						$_SESSION['nome'] = $linha3['nm_nomePaciente'];
						$_SESSION['cpf'] = $cpf;
						$_SESSION['email'] = $linha3['nm_emailPaciente'];
							
						echo "
							<script>
								window.location = 'Comunidade/padrao.php';
							</script>
						";
					}
				}else{
					if(($cpf == 'aluno') && ($password == 'multivix')){
						$_SESSION['cpf'] = $cpf;
						echo "
							<script>
								window.location = 'Alunos/alunos2.php';
							</script>
						";
					
					}else{
						$_SESSION['mensagem'] = "ID e/ou senha incorretos";
						echo "
								<script>
									window.location = 'index.php';
								</script>
							";
					}	
				}
			}
		}
	}
}
?>