<?php
session_start();

if (!isset($_SESSION['prof'])) {
    header("Location: ../menu.php");
    exit();
}

$prof = $_SESSION['prof'];

include "../../mysqlconecta.php";

if (!$conexao) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['nome']) && !empty($_POST['senha'])) {
        
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        
        $query = "INSERT INTO professores (pro_nome, pro_senha) 
                  VALUES ('$nome', '$senha')";
        
        if (mysqli_query($conexao, $query)) {
            header("Location: professores.php");
            exit();
        } else {
            echo "<p>Erro ao adicionar professor: " . mysqli_error($conexao) . "</p>";
        }
    } else {
        echo "<p>Preencha todos os campos.</p>";
    }
}

$conexao->close();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uplearn | <?php if (isset($_SESSION['prof'])) { echo $_SESSION['prof']." | ".$_SESSION['turma']; }else{ header("Location: ../menu.php"); } ?></title>
    <link rel="stylesheet" href="../../../css/menu/style.css">
    <link rel="stylesheet" href="../../../css/general/settings.css">
    <link rel="stylesheet" href="../../../css/general/fonts.css">
    <link rel="stylesheet" href="../../../css/general/elements.css">
    <link rel="stylesheet" href="../../../css/general/attributes.css">
    <link rel="stylesheet" href="../../../css/pages/cadastros.css">
    <link rel="stylesheet" href="../../../css/pages/menu.css">
    <link rel="shortcut icon" href="https://dseedgestao.sp.senai.br/assets/media/logos/senai_logo_small_red.png" type="image/png">
    
</head>
<body>

    <nav class="menu noSelect">

        <ul>

            <li><img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/8/8c/SENAI_S%C3%A3o_Paulo_logo.png" alt="logo  "></li>

            <li><a href="../menu.php"><?php if (isset($_SESSION['prof'])) { echo $_SESSION['prof']; }else{ echo "Professor"; } ?></a></li>

        </ul>

    </nav>

    <div class="container">

        <h1 class="tex bold red SdarkRed">Cadastrar Professor</h1>
        <form class="prof bold redBC mediumBS solid light-redBT" action="" method="POST">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
            </div>
            <button class="btn" type="submit">Cadastrar Professor</button>
        </form>

    </div>
    
</body>
</html>


</body>
</html>