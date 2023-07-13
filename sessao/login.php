<?php
    if( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
        
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        require_once('banco_dados/buscar_usuarios.php');

        while( $row = $result->fetch(PDO::FETCH_ASSOC) ) {
        
            if( $usuario != $row['nome_usuario'] || $senha != $row['senha'] ) {
                $msg_erro = 'Usuário ou Senha Inválidos';
            
            }else {
                session_start();
                $_SESSION['nome_usuario'] = $row['nome_usuario'];
                $_SESSION['autenticado'] = true;

                header('Location: ../index.php');
            }
        }
    }
?>
<link rel="stylesheet" href="login.css">
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="" method="POST">
            <label for="usuario">Usuário:
                <input type="text" name="usuario" required>
            </label>
            <label for="senha">Senha:
                <input type="password" name="senha" required>
            </label>
            <input class="submit" type="submit" value="Entrar">    
        </form>

        <?php

            if( isset ($msg_erro)) { ?>
                <br><p> <h3> <?= $msg_erro?> </h3></p>
        <?php } ?>
    </div>
</body>