<?php 
//Conexao
$servename = "localhost";
$username = "root";
$password = "";
$db_name = "sistema_matriculas";


$connect = mysqli_connect($servename, $username, $password, $db_name);
mysqli_set_charset($connect, "utf8");
if(mysqli_connect_error($connect)):
	echo "Erro na conexão com o banco de dados";
endif;