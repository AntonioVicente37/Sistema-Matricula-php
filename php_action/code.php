<?php 
//Sessao
session_start();
//Conexao
include_once 'db_connect.php';
//função para limpar os inputs
function clear($input){
	global $connect;
	//sql
	$var = mysqli_escape_string($connect, $input);
	//xss
	$var = htmlspecialchars($var);	
	return $var;
}
//Verificando se p notão foi precionado
if(isset($_POST['btn-cadastrar-fu'])):

	$nome = clear(trim($_POST['nome']));	
	$idade = clear(trim($_POST['idade']));
	$telefone =clear(trim($_POST['telefone']));
	$email = clear(trim($_POST['email']));
	$bi = clear(trim($_POST['bi']));
	$funcao = clear(trim($_POST['funcao']));
//Colocar para fazer a verificação dos campos vazios
	/*$sql = "SELECT COUNT(*)  as total FROM t_funcionario WHERE bi = '$bi'";
	$resultado = mysqli_query($connect,$sql);
	$row = mysqli_fetch_array($resultado);
	if($row['total'] == 1):
			echo "<script>
					alert('O usuário já se encontra cadastrado!');
			</script>";
			header('Location: ../cad_fun.php');
			exit;
		else:*/
			$sql = "INSERT INTO t_funcionario (nome, idade, telefone, email, bi, funcao) VALUES ('$nome', '$idade', '$telefone', '$email', '$bi', '$funcao')";
			if(empty($nome) or empty($idade) or empty($telefone) or empty($email) or empty($bi) or empty($funcao)):
				echo "<script>
						alert('todos os campos tem que estar preenchidos! verifique');
				</script>";
				header('Location: ../cad_fun.php');
			else:
				if(mysqli_query($connect, $sql)):
					//$_SESSION['mensagem'] = " Cadastro efectuado com sucesso";
					header('Location: ../funcionario.php');
					mysqli_close($connect);
				else:
					//$_SESSION['mensagem'] = "Erro ao efectuar o cadastro";
					header('Location: ../index.php');
			endif;	
		endif;
	endif;
//endif;


//Codigo para atualizar update
if(isset($_POST['btn-atualizar-fu'])):
	$nome = clear($_POST['nome']);
	$idade = clear($_POST['idade']);
	$telefone = clear($_POST['telefone']);
	$email = clear($_POST['email']);
	$bi = clear($_POST['bi']);
	$funcao = clear($_POST['funcao']);
	
    $id = clear($_POST['id']);	

	$sql = "UPDATE t_funcionario SET nome = '$nome',  idade= '$idade', telefone  = '$telefone', email = '$email', bi = '$bi',
	 funcao = '$funcao' WHERE id = '$id'";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastro atualizado com sucesso";
		header('Location: ../funcionario.php');
		mysqli_close($connect);
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar o registro";
		header('Location: ../index.php');
	endif;


endif;

//Deletando funcionario
if(isset($_GET['btn-deletar-fu'])):

	$id = clear($_GET['id']);

	$sql = "DELETE FROM t_funcionario WHERE id = '$id'";
	if(mysqli_query($connect, $sql)):
		echo "<script>
				alert('O usuário foi deletado com sucesso!');
		</script>";
		header('Location: ../funcionario.php');
		mysqli_close($connect);
	else:
		echo "<script>
				alert('Não foi possivel deletar o usuário!');
		</script>";
		header('Location: ../index.php');
	endif;
endif;

//Botão de pesquisa
if(isset($_POST['btn-pesquisar'])):
	$pesquisar = $_POST['pesquisar'];

	$sql = "SELECT * FROM t_funcionario WHERE nome LIKE '%$pesquisar%'";

endif;