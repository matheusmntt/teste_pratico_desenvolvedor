<?php
    session_start();
    if( $_SERVER['REQUEST_METHOD'] === 'GET' ) {

        if ( !empty($_GET['restaurantes']) ) {
            
        $opcao_escolhida = $_GET['restaurantes'];
        $data_atual = date("Y-m-d");
        $usuario = $_SESSION['nome_usuario'];

        require_once('conexao.php');

        $pdo = "INSERT INTO 
                    teste.escolhas 
                            (opcao_escolhida, data_escolha, usuario) 
                    VALUES 
                            ('$opcao_escolhida', '$data_atual', '$usuario')";

        $result = $conn->prepare($pdo); 
        $result->execute();

        header('Location: ../index.php');
    
    } else {
        echo '<h2>Escolha uma opção válida</h2><br><a href="index.php"> Voltar </a>';
    }

}
