<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário PHP</title>
</head>
<style>
    body{

        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        height: 97vh;

    }

    form{

        aspect-ratio: 3/4;
        width: 300px;
        background: #7fa8eb;
        border-radius: 20px;
        border: solid 5px gray;
        padding: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;

    }
    input{

        height: 40px;
        width: 90%;
        margin: 20px;
        border-radius: 8px;
        font-family: Arial, Helvetica, sans-serif;
        padding-inline: 15px;
        font-size: 18px;

    }

    .enviar{

        height: 50px;
        margin-top: 50px;
        border-radius: 30px;
        background: #4989f2;
        color: white;
        font-weight: bold;
        font-size: 1.1em;

    }

</style>
<body>

    <form method="post" action="processa.php">

        <input type="text" name="nome" placeholder="Nome">
        <input type="number" name="idade" placeholder="Idade">
        <input type="submit" value="Enviar" class="enviar">

    </form>
    
</body>
</html>