<?php
    require_once('conexao.php');

    $pdo = "SELECT data_escolha, usuario FROM teste.escolhas";

    $result = $conn->prepare($pdo);
    
    $result->execute();