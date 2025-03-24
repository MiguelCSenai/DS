    <?php
    session_start();

    if (!$_SESSION['aula']) {
        header("Location: menu.php");
        exit();
    }

    include '../mysqlconecta.php';

    $query_carrinhos = "SELECT DISTINCT note_car FROM notebooks ORDER BY note_car";
    $result_carrinhos = mysqli_query($conexao, $query_carrinhos);

    $carrinhos = [];
    while ($row = mysqli_fetch_assoc($result_carrinhos)) {
        $carrinhos[$row['note_car']] = [];
    }

    $query_notebooks = "SELECT note_id, note_num, note_car, note_status FROM notebooks ORDER BY note_num";
    $result_notebooks = mysqli_query($conexao, $query_notebooks);

    while ($row = mysqli_fetch_assoc($result_notebooks)) {
        $carrinhos[$row['note_car']][] = $row;
    }

    if (isset($_POST['aluno'])) {
        
        $aluno = $_POST['aluno'];

    }

    $query_aluno = "SELECT alu_nome, alu_note, alu_note_car FROM alunos WHERE alu_nome = '$aluno' AND alu_turma = '{$_SESSION['turma']}'";
    $result_aluno = mysqli_query($conexao, $query_aluno);

    $dados_aluno = mysqli_fetch_assoc($result_aluno);



    $conexao->close();
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Uplearn | <?php if (isset($_SESSION['prof'])) { echo $_SESSION['prof']." | ".$_SESSION['turma']; }else{ header("Location: menu.php"); } ?></title>
        <link rel="stylesheet" href="../../css/menu/style.css">
        <link rel="stylesheet" href="../../css/general/settings.css">
        <link rel="stylesheet" href="../../css/general/fonts.css">
        <link rel="stylesheet" href="../../css/general/elements.css">
        <link rel="stylesheet" href="../../css/general/attributes.css">
        <link rel="stylesheet" href="../../css/pages/index.css">
        <link rel="stylesheet" href="../../css/pages/aula.css">
        <link rel="shortcut icon" href="https://dseedgestao.sp.senai.br/assets/media/logos/senai_logo_small_red.png" type="image/png">
    </head>
    <body>

        <nav class="menu noSelect">
            <ul>
                <li><img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/8/8c/SENAI_S%C3%A3o_Paulo_logo.png" alt="logo"></li>
                <li><a href="menu.php"><?php if (isset($_SESSION['prof'])) { echo $_SESSION['prof']; }else{ echo "Professor"; } ?></a></li>
            </ul>
        </nav>

        <div class="container">
            <?php foreach ($carrinhos as $carrinho_id => $notebooks) { ?>
                <div class="carrinho blackBC solid mediumBS">
                    <h1>Carrinho <?php echo $carrinho_id; ?></h2>
                    <?php if (!empty($notebooks)) { ?>
                        <ul>
                            <?php foreach ($notebooks as $notebook) { 
                                
                                $status_check = ($dados_aluno['alu_note'] == null && $dados_aluno['alu_note_car'] == null);
                                $status_alu_check = ($dados_aluno['alu_note'] != null && 
                                                     $dados_aluno['alu_note_car'] != null && 
                                                     $dados_aluno['alu_note'] == $notebook['note_num'] && 
                                                     $dados_aluno['alu_note_car'] == $notebook['note_car']);?>
                                
                                <li>Notebook <?php echo $notebook['note_num']; ?>
                            
                                    <?php if($notebook['note_status'] == 1){ ?>
                                        <a class="btn bold"<?php if($status_check){
                                             ?> href="status_note.php?status=1&note=<?php echo $notebook['note_num']?>&car=<?php echo $notebook['note_car']?>&aluno=<?php echo $aluno ?><?php 
                                        } ?>">Usar</a><?php 
                                    }else{ ?>
                                        <a class="btn uso bold" <?php if($status_alu_check){
                                            ?> href="status_note.php?status=0&note=<?php echo $notebook['note_num']?>&car=<?php echo $notebook['note_car']?>&aluno=<?php echo $aluno ?><?php 
                                        } ?>"><?php if($status_alu_check){ ?>Devolver<?php }else{ ?> Em uso <?php } ?> </a><?php 
                                    } ?>

                                </li>
                            <?php } ?>
                        </ul>
                    <?php } else { ?>
                        <p>Nenhum notebook neste carrinho.</p>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
        
    </body>
    </html>