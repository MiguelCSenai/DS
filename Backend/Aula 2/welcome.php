<?php

    $nome_dono = $_POST['nome_dono'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $nome_pet = $_POST['nome_pet'];
    $especie = $_POST['especie'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetCare | Bem vindo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="welcome">
        <?php
        
            echo "<h1>Seja bem Vindo $nome_dono</h1><br>
            <b>$nome_pet sempre estará saudável com a gente!!</b>"

        ?>
    </div>
    
</body>
</html>