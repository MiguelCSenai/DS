<?php
    include "mysqlconecta.php";

    $name = $_GET['gun_name'] ?? '';
    $magazine = $_GET['gun_magazine'] ?? '';
    $reload = $_GET['gun_reload'] ?? '';
    $cost = $_GET['gun_cost'] ?? '';
    $run = $_GET['gun_run'] ?? '';
    $alt = isset($_GET['gun_alt']) && $_GET['gun_alt'] === 'on' ? 'Sim' : 'Não';

    echo htmlspecialchars($name) . '<br>';
    echo htmlspecialchars($magazine) . '<br>';
    echo htmlspecialchars($reload) . '<br>';
    echo htmlspecialchars($cost) . '<br>';
    echo htmlspecialchars($run) . '<br>';
    echo htmlspecialchars($alt) . '<br>';

    $query = "INSERT INTO guns (gun_name, gun_magazine, gun_reload, gun_cost, gun_run, gun_alt) VALUES ('$name', '$magazine', '$reload', '$cost', '$run', '$alt')";

    if (mysqli_query($conexao, $query)) {
        echo "Gravado!!";
    } else {
        echo "Error: " . mysqli_error($conexao);
    }

    mysqli_close($conexao);
?>

<style>
    .btn {
        height: 40px;
        width: 80px;
        background: blue;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 30px;
        margin-left: 15px;
        border-radius: 12px;
    }

    a {
        text-decoration: none;
        color: white;
    }
</style>

<a href="./cadastro.php"><div class="btn">Voltar</div></a>
