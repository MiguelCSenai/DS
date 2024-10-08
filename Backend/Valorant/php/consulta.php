s<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

    .medio {
    font-family: "Roboto", sans-serif;
    font-weight: 400;
    font-style: normal;
    }

    .negrito{

        font-family: "Roboto", sans-serif;
        font-weight: 900;
        font-style: normal;

    }

    table{

        background: lightgray;
        width: 75%;
        border-collapse: collapse;
        border-radius: 30px;
        overflow: hidden;
        border: 3px solid black;

    }

    td{

        border: 1px solid black;
        height: 40px;

    }

    .tdcod{

        width: 4%;
        text-align: center;

    }
    .tdcenter{

        text-align: center;

    }

    .tdleft{

        padding-left: 10px;

    }
    .tdright{

        text-align: right;
        padding-right: 5px;

    }

    .tbheader{

        background: rgb(218, 32, 91);
        color: white;

    }

    .btntd{

        width: 10%;

    }

    .preco{

        width: 8%;

    }

</style>

<body>

    <form action="consulta.php" class="search-container" method="post">

        <input class="search" type="text" name="gun_search" id="gun_search">
        <label for="gun_search"><button class="subsrc" type="submit"><img width="50" height="50" src="https://img.icons8.com/ios-filled/50/search--v1.png" alt="search--v1"/></button></label>

    </form>

    <table>

    <tr class="tbheader negrito">

            <td class="tdcod">#</td>     <td class="tdcenter">Nome da Arma</td>     <td class="tdcenter">Capacidade do Pente</td>     <td class="tdcenter">Velocidade de recarga</td>     <td class="tdcenter">Preço</td>     <td class="tdcenter">Velocidade de Movimento</td>       <td class="tdcenter">Possui modo alternativo?</td>        <td></td>       <td></td>

    </tr>

        <?php
        
            include "mysqlconecta.php";

            if (isset($_POST["gun_search"])) {
                $busca = $_POST["gun_search"];
                $query = mysqli_query($conexao, "SELECT gun_id, gun_name, gun_magazine, gun_reload, gun_cost, gun_run, gun_alt 
                FROM guns WHERE gun_cost LIKE '%$busca%' GROUP BY gun_name");

                while ($saida = mysqli_fetch_array($query)) {
                    $cod = $saida['gun_id'];
                    $name = $saida['gun_name'];
                    $magazine = $saida['gun_magazine'];
                    $reload = $saida['gun_reload'];
                    $cost = $saida['gun_cost'];
                    $run = $saida['gun_run'];
                    $alt = $saida['gun_alt'];
                    echo ("<tr class='medio'>");
                    echo ("<td class='tdcod negrito'>".$cod."</td>");
                    echo ("<td class='tdleft'>".$name."</td>");
                    echo ("<td class='tdcenter'>".$magazine."</td>");
                    echo ("<td class='tdright'>".$reload."s</td>");
                    echo ("<td class='preco tdright'>".$cost."</td>");
                    echo ("<td class='tdright'>".$run."m/s</td>");
                    echo ("<td class='tdcenter'>".$alt."</td>");
                    echo ("<td class='btntd tdcenter'><a href='excluir.php?id=".$cod."'>Excluir</a></td>");
                    echo ("<td class='btntd tdcenter'><a href='alterar.php?id=".$cod."'>Alterar</a></td>");
                    echo "</tr>";
                }
            }

        ?>

    </table>

    <a href="cadastro.php"><button>Cadastrar</button></a>

    
</body>
</html>