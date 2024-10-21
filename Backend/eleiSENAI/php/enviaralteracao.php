        <?php
            include "mysqlconecta.php";
        
            $id = $_GET['gun_id'] ?? '';
        
            $query = "SELECT gun_id, gun_name, gun_magazine, gun_reload, gun_cost, gun_run, gun_alt 
                      FROM guns WHERE gun_id = '$id'";
            $name = $_GET['gun_name'] ?? '';
            $magazine = $_GET['gun_magazine'] ?? '';
            $reload = $_GET['gun_reload'] ?? '';
            $cost = $_GET['gun_cost'] ?? '';
            $run = $_GET['gun_run'] ?? '';
            $alt = isset($_GET['gun_alt']) && $_GET['gun_alt'] === 'on' ? 'Sim' : 'Não';
            $id = $_GET['gun_id'] ?? '';
            
            $query = "UPDATE guns SET gun_name = '$name', gun_magazine = '$magazine', gun_reload = '$reload', gun_cost = '$cost', gun_run = '$run', gun_alt = '$alt' WHERE gun_id = '$id'";
            
            if (mysqli_query($conexao, $query)) {   
                echo "<h1 class='negrito'>Alterado!</h1>";
            } else {
                echo "Erro";
            }
            
        ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gravado</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

    .medio {
        font-family: "Roboto", sans-serif;
        font-weight: 400;
        font-style: normal;
    }

    .negrito {
        font-family: "Roboto", sans-serif;
        font-weight: 900;
        font-style: normal;
    }
    
    table {
        background: lightgray;
        width: 75%;
        border-collapse: collapse;
        border-radius: 30px;
        overflow: hidden;
        border: 3px solid black;
    }
    
    td {
        border: 1px solid black;
        height: 40px;
    }
    
    .tdcod {
        width: 4%;
        text-align: center;
    }
    
    .tdcenter {
        text-align: center;
    }
    
    .tdleft {
        padding-left: 10px;
    }
    
    .tdright {
        text-align: right;
        padding-right: 5px;
    }

    .tbheader {
        background: rgb(218, 32, 91);
        color: white;
    }
    
    .btntd {
        width: 10%;
    }
    
    .preco {
        width: 8%;
    }
</style>

<body>
    
    <table>
        <tr class="tbheader negrito">
            <td class="tdcod">#</td>
            <td class="tdcenter">Nome da Arma</td>
            <td class="tdcenter">Capacidade do Pente</td>
            <td class="tdcenter">Velocidade de recarga</td>
            <td class="tdcenter">Preço</td>
            <td class="tdcenter">Velocidade de Movimento</td>
            <td class="tdcenter">Possui modo alternativo?</td>
            <td></td>
            <td></td>
        </tr>

        <tr class="medio">
            <td class="tdcod negrito"><?php echo $id; ?></td>
            <td class="tdleft"><?php echo $name; ?></td>
            <td class="tdcenter"><?php echo $magazine; ?></td>
            <td class="tdright"><?php echo $reload; ?>s</td>
            <td class="preco tdright"><?php echo $cost; ?></td>
            <td class="tdright"><?php echo $run; ?>m/s</td>
            <td class="tdcenter"><?php echo $alt; ?></td>
            <td class="btntd tdcenter"><a href="excluir.php?id=<?php echo $id; ?>">Excluir</a></td>
            <td class="btntd tdcenter"><a href="alterar.php?id=<?php echo $id; ?>">Alterar</a></td>
        </tr>

    </table>

<a href="cadastro.php"><button class="negrito">Cadastrar</button></a>
<a href="consulta.php"><button class="negrito">Consultar</button></a>

</body>
</html>
