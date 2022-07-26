<?php
    $dbHost = 'LocalHost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'BaseDados';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if($conexao->connect_erron){
        echo "Erro";    
    }
    else{
        echo "Conexão efetuada com sucesso"
    }
?>