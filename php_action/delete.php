<?php 
//Conexao
include_once 'db_connect.php';
//Deletando funcionario
//if(isset($_GET['btn-deletar-fu'])):

	$id = intval($_GET['id']);

	$sql = "DELETE FROM t_funcionario WHERE id = '$id'";
	if(mysqli_query($connect, $sql)):
		echo "<script>
				alert('O usuário foi deletado com sucesso.');
				location.href='../funcionario.php';
		</script>";
		//header('Location: ../funcionario.php');//
	else:
		echo "<script>
				alert('Não foi possivel deletar o usuário!');
				location.href='../index.php';
		</script>";
		//header('Location: ../index.php');
	endif;
//endif;
 ?>