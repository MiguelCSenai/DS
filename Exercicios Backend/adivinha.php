<?php
session_start();

if (!isset($_SESSION['nmr_aletorio'])) {
    $_SESSION['nmr_aletorio'] = rand(1, 100);
}

$nmr_aletorio = $_SESSION['nmr_aletorio'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivinha ae paizão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Adivinhe o número de 1 a 100!!!</h1>

    <form method="post">
        <input type="number" name="chute" id="chute" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['chute'])) {
            $chute =$_POST['chute'];

            if ($chute < $nmr_aletorio) {
                echo 'Palpite equivocado, tente um número maior.';
            } else if ($chute > $nmr_aletorio) {
                echo 'Palpite equivocado, tente um número menor.';
            } else {
                echo 'PARABÉNS, VOCÊ ACERTOU!';
            }
        }
    }

    echo '<br><br><a href="reset.php">Novo Jogo</a>'

    ?>



</body>
</html>
