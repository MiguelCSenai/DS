<?php
include "../mysqlconecta.php";

session_start();

if (isset($_POST['nome']) && isset($_POST['senha'])) {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    
    if (!empty($nome) && !empty($senha)) {
        $query = "SELECT * FROM professores WHERE pro_nome = '$nome' AND pro_senha = '$senha'";
        $result = $conexao->query($query);
        
        if ($result->num_rows > 0) {
            $_SESSION['prof'] = $nome;
            header("Location: turma.php");
            exit();
        } else {
            $error = "Usuário ou senha incorretos.";
        }
    } else {
        $error = "Preencha todos os campos.";
    }
}
$conexao->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uplearn 1 | Iniciar</title>
    <link rel="stylesheet" href="../../css/menu/style.css">
    <link rel="stylesheet" href="../../css/general/settings.css">
    <link rel="stylesheet" href="../../css/general/fonts.css">
    <link rel="stylesheet" href="../../css/general/elements.css">
    <link rel="stylesheet" href="../../css/general/attributes.css">
    <link rel="stylesheet" href="../../css/pages/index.css">
    <link rel="shortcut icon" href="https://dseedgestao.sp.senai.br/assets/media/logos/senai_logo_small_red.png" type="image/png">
</head>
<body>

    <nav class="menu noSelect">

        <ul>

            <li><img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/8/8c/SENAI_S%C3%A3o_Paulo_logo.png" alt="logo  "></li>

            <li><a href="../Professor/menu.php"><?php if (isset($_SESSION['prof'])) { echo $_SESSION['prof']; }else{ echo "Professor"; } ?></a></li>

        </ul>

    </nav>

    <div class="container">
        <h1 class="red SdarkRed">Login de Professor</h1>
        <?php if (isset($error)) { echo "<p style='color: red;'>$error</p>"; } ?>
        <form class="bold redBC mediumBS solid light-redBT" action="" method="POST">
            <div class="form-group">
                <label for="nome">Usuário:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
            </div>
            <button class="btn" type="submit">Entrar</button>
        </form>
    </div>
    
</body>
</html>