<?php
    require_once('conexao.php');

    $data = date('Y-m-d');

    $pdo = "SELECT opcao_escolhida,
            COUNT(*) AS qtd_votos FROM teste.escolhas
            WHERE data_escolha = '$data'
            GROUP BY opcao_escolhida HAVING COUNT(*)>=1"; 

    $result = $conn-> prepare($pdo);

    $result->execute();
?>
    <h3>Resultado Votação</h3>
    <table border="1" cellspacing="1" cellpadding="15" width="50%">
		<tr>
			<th>Restaurante</th>
			<th>Votos</th>
		</tr>  
<?php    
    while ( $row = $result->fetch(PDO::FETCH_ASSOC) ){
?>
        <tr>
			<td><?php echo $row['opcao_escolhida'] ?></td>
			<td><?php echo $row['qtd_votos'] ?></td>
        </tr>
<?php }
