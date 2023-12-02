<?php
//Arquivo de conexão com o banco de dados dblocadora
const SERVIDOR = "localhost";
const USUARIO  = "root";
const SENHA    = "123456";
const BANCO    = "dbmanhwa";

$conexao = mysqli_connect(SERVIDOR,USUARIO,SENHA,BANCO);
?>