<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votar</title>
    <link rel="stylesheet" href="../css/urna.css">
</head>

<script>
    function addNumber(num) {

        let display1 = document.getElementById("display1");
        let display2 = document.getElementById("display2");
        let selectdisplay = display1.value === "" ? display1 : display2;

        if (selectdisplay.value.length < 1) {
            selectdisplay.value = num;
        }
    }

    function clearDisplay() {
        display1.value = "";
        display2.value = "";
    }

    function voto(){

        let voto = display1 + display2;

    }
</script>

<body>

<div class="container">

    <div class="form">
        <div class="displaycontainer">
            <input maxlength="1" type="text" id="display1" class="display" readonly>
            <input maxlength="1" type="text" id="display2" class="display" readonly>
        </div>
    </div>

    <div class="btncontainer">

        <div class="titulo">

            <img src="https://seeklogo.com/images/B/brasao-da-republica-do-brasil-logo-F668D19105-seeklogo.com.png" alt="">
            
            <div class="texto">JUSTIÇA ELEITORA</div>

        </div>

        <div class="numcontainer">
            <button class="btn" onclick="addNumber(0)">0 &#x28C0;</button>
            <button class="btn" onclick="addNumber(1)">1 &#x28C1;</button>
            <button class="btn" onclick="addNumber(2)">2 &#x28C2;</button>
            <button class="btn" onclick="addNumber(3)">3 &#x28C3;</button>
            <button class="btn" onclick="addNumber(4)">4 &#x28C4;</button>
            <button class="btn" onclick="addNumber(5)">5 &#x28C5;</button>
            <button class="btn" onclick="addNumber(6)">6 &#x28C6;</button>
            <button class="btn" onclick="addNumber(7)">7 &#x28C7;</button>
            <button class="btn" onclick="addNumber(9)">9 &#x28C9;</button>
            <button class="btn" onclick="addNumber(8)">8 &#x28C8;</button>
        </div>

        <div class="fnctcontainer">
        
            <button class="btnfnct branco">BRANCO</button>
            <button class="btnfnct corrige" onclick="clearDisplay()">CORRIGE</button>
            <form class="confirmacontainer" action="gravarvoto.php">

            <input type="hidden" name="voto">
                
            <button onclick="voto()" type="submit" class="btnfnct confirma">CONFIRMA</button>
        
            </form>

        </div>
    </div>

</div>
    
</body>
</html>
