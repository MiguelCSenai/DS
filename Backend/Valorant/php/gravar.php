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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gravado</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <a href="cadastro.php"><button class="negrito">Cadastrar</button></a>
    <a href="consulta.php"><button class="negrito">Consultar</button></a>
    
</body>
</html>

