<?php
    include "mysqlconecta.php";

    $nome = $_GET['elei_nome'] ?? '';
    $cpf = $_GET['elei_cpf'] ?? '';

    $query = "INSERT INTO eleitores (elei_nome, elei_cpf) VALUES ('$nome', '$cpf')";

    if (mysqli_query($conexao, $query)) {
        echo '<meta http-equiv="refresh" content="0; URL={cadastrocandidatos.php}">';
    } else {
        echo "Error: " . mysqli_error($conexao);
    }

    mysqli_close($conexao);
?>