<?php
    require_once('conexao.php');

    $pdo = "SELECT nome_usuario, senha FROM teste.usuarios";

    $result = $conn->prepare($pdo);

    $result->execute();