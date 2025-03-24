<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uplearn | <?php session_start(); if (isset($_SESSION['prof'])) { echo $_SESSION['prof']." | ".$_SESSION['turma']; }else{ echo "Professor"; } ?></title>
    <link rel="stylesheet" href="../../css/menu/style.css">
    <link rel="stylesheet" href="../../css/general/settings.css">
    <link rel="stylesheet" href="../../css/general/fonts.css">
    <link rel="stylesheet" href="../../css/general/elements.css">
    <link rel="stylesheet" href="../../css/general/attributes.css">
    <link rel="stylesheet" href="../../css/pages/index.css">
    <link rel="stylesheet" href="../../css/pages/menu.css">
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
        <h1 class="bigT subtitle red SdarkRed">Bem vindo <?php echo $_SESSION['prof'] ?>!</h1>
        <div class="container-menu">

            <a href="Cadastros/professores.php" class="items redBC solid mediumBS black bold text smallT"><img src="../../resources/user.jpg">Cadastro de Professores</a>
            <a href="Cadastros/turmas.php" class="items redBC solid mediumBS black bold text smallT"><img src="../../resources/turma.jpg">Cadastro de Turmas</a>
            <a href="Cadastros/alunos.php" class="items redBC solid mediumBS black bold text smallT"><img src="../../resources/user.jpg">Cadastro de alunos</a>
            <a href="Cadastros/notebooks.php" class="items redBC solid mediumBS black bold text smallT"><img src="../../resources/note.jpg">Cadastro de notebooks</a>
            <a href="menu.php" class="items redBC solid mediumBS black bold text smallT"><img src="../../resources/sair.png">Voltar</a>


        </div>
        
    </div>
    
</body>
</html>