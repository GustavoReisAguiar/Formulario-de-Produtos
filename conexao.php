<?php
$servername = "localhost"; //padrao - server local
$database = "curso_estoque";  //alterar conforme o nome do banco 
$username = "root"; // padrao - root
$password = ""; //senha de conexão do banco de dados

//create connection
$conexao = mysqli_connect($servername,$username,$password,$database);
?>