<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetCare</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <form method="post" action="welcome.php">
            <h1>Informações do dono</h1>
            <input type="text" name="nome_dono" placeholder="Nome"> 
            <input type="tel" name="telefone" placeholder="Telefone">
            <input type="text" name="endereco" placeholder="Endereço">
            <h1>Informações do pet</h1>
            <input type="text" name="nome_pet" placeholder="Nome">
            <input type="text" name="especie" placeholder="Especie">
            <input type="submit" value="Cadastrar" class="enviar">
        </form>
    </div>
    
</body>
</html>