<?php 
include_once 'includes/header.php';
//Session
session_start();
//Conexao ao banco
include_once 'php_action/db_connect.php';
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
        $sql = "SELECT * FROM t_usuario WHERE username = '$username' AND password = '$password' LIMIT 1";
        $resultado = mysqli_query($connect,$sql);
        if(mysqli_num_rows($resultado) == 1):
          $dados = mysqli_fetch_array($resultado);
          mysqli_close();
          $_SESSION['logado']=true;
          $_SESSION['id_usuario'] = $dados['id'];
          header('Location: index.php');
        else:
          $erros[] = "<li> Senha ou nome do usuário incorreto </li> ";
        endif;

      else:
          $erros[] = "<li> Usuário Inexistente </li> ";
      endif;

  endif;

endif;
 ?>

<div class="container" >
      <?php 
        if(!empty($erros)):
          foreach ($erros as $erro):
              echo $erro;
        endforeach;
        endif;
       ?>
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-6 col-md-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login Here!</h1>
                  </div>
                  <form class="user" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user"  placeholder="usernaem">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user"  placeholder="Password">
                    </div>
                    <div class="form-group">
                    <button type="submit" name="btn-login" href="index.html" class="btn btn-primary btn-user btn-block">Login
                   </button>
                    <hr> 
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  
                 </form>


                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>


 <?php 
include_once 'includes/scripts.php';
include_once 'includes/footer.php';
  ?>