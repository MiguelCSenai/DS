<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valorant | Arsenal</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <form class="cadastro" action="gravar.php" method="get">

        <h1 class="medio">Cadastro de Armas</h1>

        <label class="medio" for="gun_name">Nome da Arma:</label>
        <input type="text" name="gun_name" id="gun_name">

        <label class="medio" for="gun_magazine">Capacidade do pente:</label>
        <input type="text" name="gun_magazine" id="gun_magazine">

        <label class="medio" for="gun_reload">Tempo de Recarga:</label>
        <input type="number" step="any" name="gun_reload" id="gun_reload">

        <label class="medio" for="gun_cost">Preço:</label>
        <input type="number" name="gun_cost" id="gun_cost">

        <label class="medio" for="gun_run">Velocidade de movimento:</label>
        <input type="number" step="any" name="gun_run" id="gun_run">

        <label class="medio" for="gun_alt">Possui modo alternativo:</label>
        <input type="checkbox" name="gun_alt" id="gun_alt">

        <input class="btn medio" type="submit" value="Cadastrar">

    </form>

    <form action="pesquisa.php" class="search-container">

        <input class="search" type="text" name="gun_search" id="gun_search">
        <label for="gun_search"><button class="subsrc" type="submit"><img width="50" height="50" src="https://img.icons8.com/ios-filled/50/search--v1.png" alt="search--v1"/></button></label>

    </form>

</body>
</html>