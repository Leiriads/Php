<?php

$dbHost ='Localhost:3306'; // ip, endereço etc
$dbUsername = 'root'; // Usuário
$dbPassword='Fatec@dm1n'; // Senha do Usuário
$dbName='teste'; // Nome do Banco

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName); 

if($conexao->connect_errno){ //se tiver algum erro
    echo'Erro de Conexão';
}else{
    echo 'Conexão Estabelecida';
}

?>