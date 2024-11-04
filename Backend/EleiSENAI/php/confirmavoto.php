<?php

include "mysqlconecta.php";

$id_eleitor = $_POST['eleitor'] ?? '';
$voto = $_POST['voto'] ?? '';

$query_nome = mysqli_query($conexao, "SELECT elei_nome
                                      FROM eleitores
                                      WHERE elei_id = $id_eleitor");

if ($voto !== "Voto Branco") {
    $query_cand = mysqli_query($conexao, "SELECT cand_nome 
                                          FROM candidatos
                                          WHERE cand_numero = '$voto'");
    $candidato = mysqli_fetch_array($query_cand);
}

$nome = mysqli_fetch_array($query_nome);

$query = "INSERT INTO votos (voto_numero, voto_elei_id) VALUES ('$voto', '$id_eleitor')";

if (mysqli_query($conexao, $query)) {


} else {
    echo "Error: " . mysqli_error($conexao);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/eleitor.css">
    <title>Obrigado <?php echo $nome[0]?></title>
</head>

<script>

    var confirma = new Audio('../sfx/confirma.mp3');
    confirma.play();

</script>

<body>

    <div class="container">
        <div class="overlay"></div>
        <div class="textcontainer">
            
            <h1>Obrigado <?php echo $nome[0]?></h1>
            <h2>Voto computado para candidato <?php if ($voto !== "Voto Branco") {
                                                        echo $candidato[0];}?>
            </h2>
            
        
        </div>

    </div>
    
</body>
</html>