<?php 
//Conexao
include_once 'php_action/db_connect.php';
//Sessao
session_start();
//
include_once 'includes/header.php';
include_once 'includes/navbar.php';
//include_once 'home.php';
 $pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;

      $sql = "SELECT * FROM t_funcionario";
      //  
      $resultado_curso = mysqli_query($connect, $sql);
      //
       $total_cursos = mysqli_num_rows($resultado_curso);
      //
        $quant_pg = 5;
      //
       $num_pagina = ceil($total_cursos/$quant_pg);
     //
      $inicio = ($quant_pg * $pagina) - $quant_pg;
    //
     // $resul_curs = "SELECT * FROM t_funcionario LIMIT $inicio, $quant_pag";

 
         
 ?>
  <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
             <!-- <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>-->
                <div class="input-group-append">
                <button class="btn" type="text">
                  <h1> Sistema de Matricula </h1>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Alda Lara</span>
                <img class="img-profile rounded-circle" src="img/Alda-Lara2.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>
        </nav>
        

	    <!-- Dives responsaveis pelo formulario de cadastro-->
   <!--   
				<div class="modal fade" id="addadmiprofile"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				        </div>
				     	<form action="" method="POST">
				     	 	<div class="modal-body">
				    	<div class="form-group">
				    		<label>Username</label>
				    		<input type="password" name="username" class="form-control" placeholder="Enter username">
				    	</div>

						<div class="form-group">
				    		<label>Email</label>
				    		<input type="password" name="Email" class="form-control" placeholder="Enter Email">
				    	</div>

				    	<div class="form-group">
				    		<label>Corfim password</label>
				    		<input type="password" name="confirmpassword" class="form-control" placeholder="Enter Email">
				    	</div>

				    </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				        <button type="submit" class="btn btn-primary" name="registerbtn">Salvar mudanças</button>
				      </div>

				     </form>
				    </div>
				  </div>
				</div>
          -->
<!--Meus formularios 
frm de pesquisa
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
              <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

 -->

          
			
          <!-- Topbar Search -->
         <?php 
          /*$pesquisar = filter_input(INPUT_POST, 'btn_peqsquisar', FILTER_SANITIZE_STRING);
          if($pesquisar):
              $pesquisar = filter_input(INPUT_POST, '', FILTER_SANITIZE_STRING);
          endif;*/

           ?>
					
				<!--DataTable example-->
				<div class="container col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main"> 
           <div class="row">
    					<div class="col-md-9">
    						<h1 class="page-header">Lista de Funcionario</h1>
             </div>
             <div class="col-md-3">              
                  <a class="btn btn-primary btn-block" href="cad_fun.php" >Novo funcionarios</a>           
             </div> 
          </div>        
        

              <!--frm de pesquisa -->
              <div class="col-md-12" style="padding-bottom: 10px">

                  <form action="php_action/code.php" method="GET">
                    <div class="row">
                      <div class="col-md-10">
                        <input type="text" class="form-control" name="pesquisar" placeholder="Search for..." required>  
                      </div>   
                      <div class="col-md-2">
                          <button class="btn btn-primary btn-block" name="btn-pesquisar" type="submit">Pesquisar
                            <i class="fas fa-search fa-sm"></i>
                          </button>                  
                      </div>
                    </div>
                </form>      
                
              </div>

  					<div class="col-md-12">		

  							<table class="table table-striped">
  								<thead>
  									<tr>
  										<th>Nome</th>
                      <th>Idade</th>
  										<th>Telefone</th>
  										<th>E-mail</th>
                      <th>B.I</th>
                      <th>Função</th>
  									</tr>
  							</thead>
  							<tbody>
                  <?php 
                  $sql = "SELECT * FROM t_funcionario LIMIT $inicio, $quant_pg";

                  $resultado_cursos = mysqli_query($connect, $sql);  

                 // $tota_cursos = mysqli_num_rows($resultado_cursos);
                
                  if(mysqli_num_rows($resultado_cursos) > 0):

                    while($dados = mysqli_fetch_array($resultado_cursos)):
                   ?>
  								<tr>
  									<td><?php echo $dados['nome']; ?></td>									
  									<td><?php echo $dados['idade']; ?></td>
  									<td><?php echo $dados['telefone']; ?></td>
  									<td><?php echo $dados['email']; ?></td>
                    <td><?php echo $dados['bi']; ?></td>
                    <td><?php echo $dados['funcao']; ?></td>
  									<td>
                      <a href="edit_func.php?id=<?php echo $dados['id'];?>"><button type="submit "class="btn btn-primary"> Atualizar </button> </a>
  										 </a>
  									</td>
  									<td>
                      <a href="javascript: if(confirm('Tem certeza que deseja excluir o registro <?php echo $dados['nome'];  ?>?')) location.href='php_action/delete.php?id=<?php echo $dados['id']; ?>';" name="btn-deletar-fu"><button type="submit" class="btn btn-danger " data-toggle="modal" data-target="">
                      Remover
                    </button></a>  
                    </td>

  								</tr>
                  <?php
                endwhile;
                else: ?>
                  <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                  </tr>
                  <?php
                endif;
                  ?>
  							</tbody>                
  						</table>                                
					</div>
              <?php 
        //Verificar pagina posterir e anterior
        $pagina_anterior = $pagina - 1;
        $pagina_posterior = $pagina + 1;

         ?>

        <nav aria-label="..." class="text-center">
                  <ul class="pagination">
                    <li>
                     <?php 
                        if($pagina_anterior != 0): ?>
                           <a href="funcionario.php?pagina=<?php echo $pagina_anterior;?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                           </a>
                      <?php else: ?> 
                        <span aria-hidden="true">&laquo;</span>
                      <?php endif; ?>
                    </li>
                    <?php 
                    //apresentar a paginação
                        for ($i=1; $i < $num_pagina + 1; $i++) : ?>
                            <li class="page-item"><a class="page-link" href="funcionario.php?pagina=<?php echo $i;?>"><?php echo $i; ?></a></li>
                        <?php endfor; ?>                 
                   
                    <li>
                      <?php if($pagina_posterior <= $num_pagina): ?>
                      <a href="funcionario.php.php?pagina=<?php echo $pagina_posterior;?>" aria-label="Next">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                      <?php else: ?>
                        <span aria-hidden="true">&laquo;</span>
                      <?php endif; ?>
                    </li>
                  </ul>
              </nav>
			</div>
       
		</div>

 			<!-- fim da div -->


          <!-- Content Row -->

</div>
        <!-- /.container-fluid -->

      <!-- End of Main Content -->





 <?php 


include_once 'includes/scripts.php';
//include_once 'includes/footer.php';

  ?>