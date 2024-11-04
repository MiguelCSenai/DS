<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apuração de votos</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    </form>

    </tr>

    <div class="grafico">

        <?php
            
            include "mysqlconecta.php";
                if(isset($_POST["search"])){$busca = $_POST["search"];}
                $query = mysqli_query($conexao, "SELECT COUNT(v.voto_numero), c.cand_nome, c.cand_img
                                                    FROM votos v, candidatos c
                                                    WHERE v.voto_numero = c.cand_numero
                                                    GROUP BY c.cand_nome
                                                    ORDER BY COUNT(v.voto_numero) DESC;");

                while ($saida = mysqli_fetch_array($query)) {
                    $votos = $saida[0];
                    $nome = $saida[1];
                    $img = $saida[2];

                    echo "<div class='rowcand'>

                            <img src='$img' alt=''>

                            <h3 class='negrito'>$nome - $votos votos</h3>

                          </div>";


                    
                }

        ?>

    </div>

    <a href="menu.php"><button>Menu</button></a>

    
</body>
</html>