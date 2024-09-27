<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body style="height: 97vh;">

    <?php
        include "mysqlconecta.php";

        $id = $_GET["id"];

        $query = mysqli_query($conexao, "SELECT gun_name, gun_magazine, gun_reload, gun_cost, gun_run, gun_alt 
                FROM guns WHERE gun_id = '$id'") or die ("erro");
        $saida = mysqli_fetch_array($query);
        
        $name = $saida[0];
        $magazine = $saida[1];
        $reload = $saida[2];
        $cost = $saida[3];
        $run = $saida[4];
        $alt = $saida[5];
    ?>
    
    <form class='cadastro' action='enviaralteracao.php' method='get'>
        <h1 class='medio'>Alteração</h1>

        <input type='hidden' name='gun_id' value="<?php echo $id; ?>">
    
        <label class='medio' for='gun_name'>Nome da Arma:</label>
        <input type='text' name='gun_name' id='gun_name' value="<?php echo $name; ?>">
    
        <label class='medio' for='gun_magazine'>Capacidade do pente:</label>
        <input type='text' name='gun_magazine' id='gun_magazine' value="<?php echo $magazine; ?>">
    
        <label class='medio' for='gun_reload'>Tempo de Recarga:</label>
        <input type='number' step='any' name='gun_reload' id='gun_reload' value="<?php echo $reload; ?>">
    
        <label class='medio' for='gun_cost'>Preço:</label>
        <input type='number' name='gun_cost' id='gun_cost' value="<?php echo $cost; ?>">
    
        <label class='medio' for='gun_run'>Velocidade de movimento:</label>
        <input type='number' step='any' name='gun_run' id='gun_run' value="<?php echo $run; ?>">
    
        <label class='medio' for='gun_alt'>Possui modo alternativo:</label>
        <input type='checkbox' name='gun_alt' id='gun_alt' <?php echo ($alt ? 'checked' : ''); ?>>
    
        <input class='btn medio' type='submit' value='Atualizar'>
    </form>

    <a href="cadastro.php"><button class="negrito">Cadastrar</button></a>
    <a href="consulta.php"><button class="negrito">Consultar</button></a>
    
</body>
</html>
