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


    $query_turma = "SELECT tur_nome FROM turmas";
    $result_turma = mysqli_query($conexao, $query_turma);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!empty($_POST['nome']) && !empty($_POST['turma'])) {
            
            $nome = $_POST['nome'];
            $turma = $_POST['turma'];
            
            $query = "INSERT INTO alunos (alu_nome, alu_turma) 
                    VALUES ('$nome', '$turma')";
            
            if (mysqli_query($conexao, $query)) {
                header("Location: alunos.php");
                exit();
            } else {
                echo "<p>Erro ao adicionar aluno: " . mysqli_error($conexao) . "</p>";
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

            <h1 class="tex bold red SdarkRed">Cadastrar Aluno</h1>
            <form class="alunos bold redBC mediumBS solid light-redBT" action="" method="POST">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="responsavel">Turma:</label>
                    <select id="turma" name="turma" required>
                        <option value="">Selecione uma turma</option>
                        <?php while ($turma = mysqli_fetch_assoc($result_turma)) { ?>
                            <option value="<?php echo $turma['tur_nome']; ?>">
                                <?php echo $turma['tur_nome']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <button class="btn" type="submit">Cadastrar Turma</button>
            </form>

        </div>
        
    </body>
    </html>


    </body>
    </html>