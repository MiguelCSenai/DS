<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valorant | Arsenal</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <form action="gravar.php" method="get">

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

</body>
</html>