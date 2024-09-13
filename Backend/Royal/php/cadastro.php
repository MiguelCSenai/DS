<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Buffet | Cadastro de Produtos</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <form action="gravar.php" method="get">

        <h1 class="medio">Cadastro de Produto</h1>

        <label class="medio" for="pro_nome">Nome do Produto:</label>
        <input type="text" name="pro_nome" id="pro_nome">

        <label class="medio" for="pro_desc">Descrição:</label>
        <input type="text" name="pro_desc" id="pro_desc">

        <label class="medio" for="pro_preco">Preço(R$):</label>
        <input type="number" name="pro_preco" id="pro_preco" placeholder="000.00">

        <input class="btn medio" type="submit" value="Cadastrar">

    </form>

</body>
</html>