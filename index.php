<?php
    session_start();
    if ( !isset($_SESSION['autenticado']) or !$_SESSION['autenticado']) {
        header('Location: sessao/login.php');
    }
    
    require_once('banco_dados/buscar_data.php');

    $votou = false;

    while( $row = $result->fetch(PDO::FETCH_ASSOC) ) {
        
        $usuario = $_SESSION['nome_usuario'];
        $data = date('Y-m-d');
        if ( $usuario == $row['usuario'] && $row['data_escolha'] == $data ) {
            $votou = true;
        }
    }
    require_once('banco_dados/buscar_restaurante_vencedor.php');

?>
<link rel="stylesheet" href="style.css">
<body>
    <div class="header">
        <h1>Olá <?= ucfirst($_SESSION['nome_usuario']) ?></h1>
        <a class="btn-sugestao" href="banco_dados/cadastro_restaurante.php" hidden>Sugerir Restaurante</a>
        <a class="btn-logout" href="sessao/logout.php">Sair</a>
    </div>
    <h2 <?= $votou ? '' : 'hidden' ?> >Você já votou hoje</h2>
    <form action="banco_dados/salvar_escolha.php" method="GET" <?= $votou ? 'hidden' : '' ?> >
        <label for="restaurantes">Lista de Restaurantes:
            <select name="restaurantes">
                <option value="">--------------</option>
                <option value="restaurante 1">Restaurante 1</option>
                <option value="restaurante 2">Restaurante 2</option>
                <option value="restaurante 3">Restaurante 3</option>
                <option value="restaurante 4">Restaurante 4</option>
                <option value="restaurante 5">Restaurante 5</option>
            </select>
        </label>
        <input type="submit" value="Escolher">
    </form>
    
    <?php
        if( $votou ) {
            require_once('banco_dados/mais_votado.php');
        }
    ?>
</body>