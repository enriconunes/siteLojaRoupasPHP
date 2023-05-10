<?php

  // Configuração da Base de Dados

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbName = "loja_nativos";

  $conexao = new mysqli($servername, $username, $password, $dbName);

  // if($conexao->connect_errno){
  //   echo "Erro na conexão com o banco de dados!";
  // }
  // else{
  //   echo "Conexão com a base de dados bem sucedida!";
  // }

?>