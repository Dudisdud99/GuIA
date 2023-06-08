<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbName = 'guia_textos';

    $conexao = new mysqli($dbHost,$dbUsername,'',$dbName);
    
    if($conexao->connect_errno){
        //echo "Erro na conexão";
    }
    else{
        //echo "conectado com sucesso";
    }

?>