<?php
    include "mysqlconecta.php";

    $nome = $_GET['cand_nome'] ?? '';
    $partido = $_GET['cand_partido'] ?? '';
    $numero = $_GET['cand_numero'] ?? '';
    $img = $_GET['cand_img'] ?? '';

    $query = "INSERT INTO candidatos (cand_nome, cand_partido, cand_numero, cand_img) VALUES ('$nome', '$partido', '$numero', '$img')";

    if (mysqli_query($conexao, $query)) {
        
    echo htmlspecialchars($nome) . '<br>';
    echo htmlspecialchars($partido) . '<br>';
    echo htmlspecialchars($numero) . '<br>';
    echo htmlspecialchars($img) . '<br>';


    } else {
        echo "Error: " . mysqli_error($conexao);
    }

    mysqli_close($conexao);
?>