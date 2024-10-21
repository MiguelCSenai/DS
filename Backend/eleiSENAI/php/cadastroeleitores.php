<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | Eleitor</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <form class="cadastro" action="gravar.php" method="get">

        <h1 class="medio">Cadastro de Eleitor</h1>

        <label class="medio" for="elei_nome">Nome do Eleitor:</label>
        <input type="text" name="elei_nome" id="elei_nome">

        <label class="medio" for="elei_cpf">CPF do Eleitor</label>
        <input type="text" name="elei_cpf" id="elei_cpf">

        <input class="btn medio" type="submit" value="Cadastrar">

    </form>

    <a href="cadastrocandidatos.php"><button>Cadastro de Candidatos</button></a>

</body>
</html>