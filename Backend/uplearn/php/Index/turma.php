<?php
include "../mysqlconecta.php";

session_start();

if (isset($_SESSION['prof'])) {
    $professor = $_SESSION['prof'];
    $query_turmas = "SELECT tur_nome
                    FROM turmas
                    WHERE JSON_CONTAINS(tur_prof, '\"$professor\"')";
    
    $result_turmas = mysqli_query($conexao, $query_turmas);
} else {
    header("Location: index.php");
    exit();
}

if(isset($_POST['turma'])){

    $_SESSION['turma'] = $_POST['turma'];
    header("Location: ../Professor/menu.php");

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

            <li><a><?php if (isset($_SESSION['prof'])) { echo $_SESSION['prof']; }else{ echo "Professor"; } ?></a></li>

        </ul>

    </nav>

    <div class="container">
        <h1 class="red SdarkRed">Login de Professor</h1>
        <?php if (isset($error)) { echo "<p style='color: red;'>$error</p>"; } ?>
        <form class="bold redBC mediumBS solid light-redBT" action="" method="POST">
            <div class="form-group">
                <label for="turma">Turma:</label>
                <select id="turma" name="turma" required>
                        <option disabled selected>Selecione uma turma</option>
                        <?php while ($turmas = mysqli_fetch_assoc($result_turmas)) { ?>
                            <option value="<?php echo $turmas['tur_nome']; ?>">
                                <?php echo $turmas['tur_nome']; ?>
                            </option>
                        <?php } ?>
                </select>
            </div>
            <button class="btn" type="submit">Entrar</button>
        </form>
    </div>
    
</body>
</html>