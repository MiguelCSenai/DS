<?php
include "../mysqlconecta.php";

session_start();

if (isset($_SESSION['prof'])) {
    $turma = $_SESSION['turma'];
    $query_alunos = "SELECT alu_nome
                    FROM alunos
                    WHERE alu_turma = '$turma'
                    ORDER BY alu_nome";
    
    $result_alunos = mysqli_query($conexao, $query_alunos);
} else {
    header("Location: index.php");
    exit();
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
    <link rel="stylesheet" href="../../css/pages/turma.css">
    <link rel="shortcut icon" href="https://dseedgestao.sp.senai.br/assets/media/logos/senai_logo_small_red.png" type="image/png">
</head>
<body>

    <nav class="menu noSelect">

        <ul>

            <li><img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/8/8c/SENAI_S%C3%A3o_Paulo_logo.png" alt="logo  "></li>

            <li><a href="menu.php"><?php if (isset($_SESSION['prof'])) { echo $_SESSION['prof']; }else{ echo "Professor"; } ?></a></li>

        </ul>

    </nav>

    <div class="container">
        <h1 class="red SdarkRed">Login de aluno</h1>
        <?php if (isset($error)) { echo "<p style='color: red;'>$error</p>"; } ?>
        <form class="bold redBC mediumBS solid light-redBT" action="aula.php" method="POST">
            <div class="form-group">
                <label for="aluno">Aluno:</label>
                <select id="aluno" name="aluno" required>
                        <option disabled selected>Nome do aluno</option>
                        <?php while ($alunos = mysqli_fetch_assoc($result_alunos)) { ?>
                            <option value="<?php echo $alunos['alu_nome']; ?>">
                                <?php echo $alunos['alu_nome']; ?>
                            </option>
                        <?php } ?>
                </select>
            </div>
            <button class="btn" type="submit">Entrar</button>
        </form>
    </div>
    
</body>
</html>