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

        background: yellow;

    }

    .btntd{

        width: 10%;

    }

    .preco{

        width: 8%;

    }

</style>

<body>

    <form action="consultaeleitores.php" class="search-container" method="post">

        <input class="search" type="text" name="search" id="search">
        <label for="search"><button class="subsrc" type="submit"><img width="50" height="50" src="https://img.icons8.com/ios-filled/50/search--v1.png" alt="search--v1"/></button></label>

    </form>

    <table>

    <tr class="tbheader negrito">

            <td class="tdcod">#</td>     <td class="tdcenter">Nome do Eleitor</td>      <td class="tdleft">CPF do Eleitor</td>        <td></td>       <td></td>

    </tr>

        <?php
        
            include "mysqlconecta.php";

            if (isset($_POST["search"])) {
                $busca = $_POST["search"];
                $query = mysqli_query($conexao, "SELECT elei_id, elei_nome, elei_cpf 
                FROM eleitores
                WHERE elei_nome
                LIKE '%$busca%'
                GROUP BY elei_nome");

                while ($saida = mysqli_fetch_array($query)) {
                    $cod = $saida[0];
                    $nome = $saida[1];
                    $cpf = $saida[2];
                    echo ("<tr class='medio'>");
                    echo ("<td class='tdcod negrito'>".$cod."</td>");
                    echo ("<td class='tdleft'>".$nome."</td>");
                    echo ("<td class='tdleft'>".$cpf."</td>");
                    echo ("<td class='btntd tdcenter'><a href='excluir.php?id=".$cod."'>Excluir</a></td>");
                    echo ("<td class='btntd tdcenter'><a href='alterar.php?id=".$cod."'>Alterar</a></td>");
                    echo "</tr>";
                }
            }

        ?>

    </table>

    <a href="cadastroeleitores.php"><button>Cadastrar Eleitor</button></a>

    
</body>
</html>