<?php

$dbHost ='Localhost'; // ip, endereço etc
$dbUsername = 'root'; // Usuário
$dbPassword='password'; // Senha do Usuário
$dbName='banco_pecas'; // Nome do Banco

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName); 

if($conexao->connect_errno){ //se tiver algum erro
    echo'Erro de Conexão';
}else{
    echo 'Conexão Estabelecida';
}


?>