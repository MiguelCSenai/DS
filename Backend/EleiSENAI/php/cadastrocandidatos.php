<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | Candidato</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <form class="cadastro" action="gravarcandidato.php" method="get">

        <h1 class="medio">Cadastro de Candidato</h1>

        <label class="medio" for="cand_nome">Nome do Candidato:</label>
        <input type="text" name="cand_nome" id="cand_nome">

        <label class="medio" for="cand_partido">Partido do Candidato:</label>
        <input type="text" name="cand_partido" id="cand_partido">

        <label class="medio" for="cand_numero">Número do Candidato:</label>
        <input type="number" step="any" name="cand_numero" id="cand_numero">

        <label class="medio" for="cand_img">Link da imagem do Candidato:</label>
        <input type="text" name="cand_img" id="cand_img">

        <input class="btn medio" type="submit" value="Cadastrar">

    </form>

    <a href="cadastroeleitores.php"><button>Cadastro de Eleitores</button></a>

</body>
</html>