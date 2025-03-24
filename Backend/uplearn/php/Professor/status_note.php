<?php

include "../mysqlconecta.php";
session_start();

$status = $_GET['status'];
$note = $_GET['note'];
$aluno = $_GET['aluno'];
$car = $_GET['car'];

if ($status) {
    $query_update = "UPDATE notebooks 
                    SET note_status = '0' 
                    WHERE note_num = '$note' AND note_car=$car";
    $query_sessao = "INSERT INTO sessoes(ses_aluno, ses_notebook, ses_note_car, ses_turma, ses_prof, ses_retirada, ses_status)
                    VALUES ('$aluno', $note, $car, '{$_SESSION['turma']}', '{$_SESSION['prof']}', NOW(), 'Em uso')";
    $query_aluno = "UPDATE alunos SET alu_note = '$note', alu_note_car = $car WHERE alu_nome = '$aluno' AND alu_turma = '{$_SESSION['turma']}'";

} else {
    $query_update = "UPDATE notebooks 
                    SET note_status = '1' 
                    WHERE note_num = '$note' AND note_car=$car";
    $query_sessao = "UPDATE sessoes 
                     SET ses_devolucao = NOW(), ses_status = 'OK'
                     WHERE ses_aluno = '$aluno' AND ses_notebook = $note AND ses_note_car = $car AND ses_status = 'Em uso'";
    $query_aluno = "UPDATE alunos 
                    SET alu_note = null, alu_note_car = null 
                    WHERE alu_nome = '$aluno' AND alu_turma = '{$_SESSION['turma']}'";
}

if (mysqli_query($conexao, $query_update)) {
    if (mysqli_query($conexao, $query_sessao)) {
        if (mysqli_query($conexao, $query_aluno)) {
            header('Location: loginAluno.php');
        } else {
            echo "Erro ao registrar a situação do aluno: " . mysqli_error($conexao);
        }
    } else {
        echo "Erro ao registrar a retirada: " . mysqli_error($conexao);
    }
} else {
    echo "Erro ao atualizar o status: " . mysqli_error($conexao);
}

?>