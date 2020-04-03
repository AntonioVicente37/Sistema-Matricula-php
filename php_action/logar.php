<?php 
session_start();
//Conexao ao banco
include_once 'db_connect.php';
//Codigo do login
if(isset($_POST['btn-login'])):
  $erros = array();
  $username = mysqli_escape_string($connect,$_POST['username']);
  $password = mysqli_escape_string($connect,$_POST['password']);

  if(empty($username) or empty($password)):
      $erros[] = "<li> O campo login e senha precisam ser preenchido </li>";
  else:
      $sql = "SELECT username FROM t_usuario WHERE username = '$username'";
      $resultado = mysqli_query($connect,$sql);
      if(mysqli_num_rows($resultado) > 0):
         // $password = md5($password);
        $sql = "SELECT * FROM t_usuario WHERE username = '$username' AND password = '$password'";
        $resultado = mysqli_query($connect,$sql);
        if(mysqli_num_rows($resultado) == 1):
          $dados = mysqli_fetch_array($resultado);
          mysqli_close();
          $_SESSION['logado']=true;
          $_SESSION['id_usuario'] = $dados['id'];
          header('Location: ../index.php');
        else:
          $erros[] = "<li> Senha ou nome do usuário incorreto </li> ";
        endif;

      else:
          $erros[] = "<li> Usuário Inexistente </li> ";
      endif;

  endif;

endif;