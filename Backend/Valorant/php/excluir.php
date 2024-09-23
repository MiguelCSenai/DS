<?php

    include "mysqlconecta.php";

    $id = $_GET["id"];

    $query = mysqli_query($conexao, "DELETE FROM guns WHERE gun_id = '$id'") or die ("erro");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluido</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body style="height: 97vh;">

    <h1>Deletado.</h1>

    <a href="cadastro.php"><button class="negrito">Cadastrar</button></a>
    <a href="consulta.php"><button class="negrito">Consultar</button></a>
    
</body>
</html>