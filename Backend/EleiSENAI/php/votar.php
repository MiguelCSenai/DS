<?php
include 'mysqlconecta.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $inputJSON = file_get_contents('php://input');
    $input = json_decode($inputJSON, true);

    if (isset($input['voto'])) {
        $voto = $input['voto'];
        $query = mysqli_query($conexao, "SELECT cand_nome, cand_partido, cand_numero, cand_img FROM candidatos WHERE cand_numero = '$voto'");

        if ($query && mysqli_num_rows($query) > 0) {
            $saida = mysqli_fetch_array($query);
            echo json_encode($saida);
        } else {
            echo json_encode(['error' => 'Voto Nulo']);
        }
    exit();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votar</title>
    <link rel="stylesheet" href="../css/urna.css">
</head>
<body>
<script>
    let voto = "";

    function addNumber(num) {//acontece quando clica em qualquer botão
        var digito = new Audio('../sfx/digito.mp3');
        digito.play();
        let display1 = document.getElementById("display1");
        let display2 = document.getElementById("display2");
        let selectdisplay = display1.value === "" ? display1 : display2;

        if (selectdisplay.value.length < 1) {//quando o input tiver menos de 1 caractere, fazer:
            selectdisplay.value = num;
            voto += selectdisplay.value;
        }

        if (display1.value.length > 0 && display2.value.length > 0) {//quando os dois inputs tiveverem caracteres fazer: 
            document.getElementById("voto").value = voto;

            fetch('', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ voto: voto })
            })
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    alert(data.error);
                } else {

                    console.log(data);

                    document.getElementById('candidatoImg').src = data.cand_img;
                    document.getElementById('candidatoNome').textContent = data.cand_nome;
                    document.getElementById('candidatoPartido').textContent = data.cand_partido;
                            
                }
            })
            .catch(error => console.error('Erro:', error));
        }
    }

    function clearDisplay() {
        document.getElementById("display1").value = "";
        document.getElementById("display2").value = "";
        document.getElementById("voto").value = "";
        document.getElementById('candidatoNome').textContent = "";
        document.getElementById('candidatoPartido').textContent = "";
        document.getElementById('candidatoImg').src = "../img/usuario.png";
        voto = "";
    }
</script>

<div class="container">
    <div class="form">
        <div class="displaycontainerpre" id="containerdisplaypre">
            <input maxlength="1" type="text" id="display1" class="display" readonly>
            <input maxlength="1" type="text" id="display2" class="display" readonly>
        </div>
        <div class="infocontainer">

            <img src="../img/usuario.png" id="candidatoImg">
            <div class="textinfo">

                <h1 id="candidatoNome"></h1>
                <h3 id="candidatoPartido"></h3>

            </div>

        </div>
    </div>

    <div class="btncontainer">
        <div class="titulo">
            <img src="https://seeklogo.com/images/B/brasao-da-republica-do-brasil-logo-F668D19105-seeklogo.com.png" alt="">
            <div class="texto">JUSTIÇA ELEITORAL</div>
        </div>
        <div class="fundo">
            <div class="numcontainer">
                <button class="btn" onclick="addNumber(0)">0 &#x28C0;</button>
                <button class="btn" onclick="addNumber(1)">1 &#x28C1;</button>
                <button class="btn" onclick="addNumber(2)">2 &#x28C2;</button>
                <button class="btn" onclick="addNumber(3)">3 &#x28C3;</button>
                <button class="btn" onclick="addNumber(4)">4 &#x28C4;</button>
                <button class="btn" onclick="addNumber(5)">5 &#x28C5;</button>
                <button class="btn" onclick="addNumber(6)">6 &#x28C6;</button>
                <button class="btn" onclick="addNumber(7)">7 &#x28C7;</button>
                <button class="btn" onclick="addNumber(8)">8 &#x28C8;</button>
                <button class="btn" onclick="addNumber(9)">9 &#x28C9;</button>
            </div>

            <div class="fnctcontainer">
                <button class="btnfnct branco">BRANCO</button>
                <button class="btnfnct corrige" onclick="clearDisplay()">CORRIGE</button>
                <form class="confirmacontainer">
                    <input type="hidden" name="voto" id="voto">
                    <button type="button" class="btnfnct confirma" onclick="addNumber(voto)">CONFIRMA</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>