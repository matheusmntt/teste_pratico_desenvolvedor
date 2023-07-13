<?php

    require_once('conexao.php');

    $data = date('Y-m-d');
    $pdo = "SELECT opcao_escolhida,
            COUNT(opcao_escolhida)
            FROM teste.escolhas 
            WHERE data_escolha = '$data' 
            GROUP BY opcao_escolhida 
            ORDER BY COUNT(opcao_escolhida) DESC LIMIT 1
           ";

    $result = $conn->prepare($pdo);
    
    $result->execute();

    while( $vencedor = $result->fetch(PDO::FETCH_ASSOC) ){
        return $row;
    }

