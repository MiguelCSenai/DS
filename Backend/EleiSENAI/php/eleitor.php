<?php

include "mysqlconecta.php";

$cpf = $_GET['cpf'] ?? '';

$query = mysqli_query($conexao, "SELECT elei_id, elei_nome
                                 FROM eleitores
                                 WHERE elei_cpf = $cpf");

$saida = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/eleitor.css">
    <title>Bem vindo <?php echo $saida['elei_nome']?></title>
</head>
<body>

    <div class="container">
        <div class="overlay"></div>
        <div class="textcontainer">
            
            <h1>Bem vindo <?php echo $saida['elei_nome']?></h1>
            <form action="votar.php" method="post">
                
                <input type="hidden" name="elei_id" value="<?php echo $saida['elei_id']?>">
                <button type="submit">Votar</button>
            
            </form>
        
        </div>

    </div>
    
</body>
</html>