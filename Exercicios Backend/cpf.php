<?php
// Função para validar CPF
function validarCPF($cpf) {

    // Verifica se o CPF tem 11 dígitos
    if (strlen($cpf) != 11) {
        return false;
    }else {
        return true;
    }

}

function exibirResultado($cpf) {
    if (validarCPF($cpf)) {
        echo "O CPF $cpf é válido.";
    } else {
        echo "O CPF $cpf é inválido.";
    }
}

// Exemplo de uso
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['cpf'])) {
    $cpf = $_POST['cpf'];
    exibirResultado($cpf);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Validação de CPF</title>
</head>
<body>
    <h1>Validação de CPF</h1>
    <form method="post" action="">
        <label for="cpf">Digite o CPF:</label>
        <input type="number" id="cpf" name="cpf" maxlength="11" placeholder="CPF(Apenas Numeros)" required>
        <input type="submit" value="Validar">
    </form>
</body>
</html>
