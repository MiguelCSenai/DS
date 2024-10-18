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

    function voto(){}
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

        <div class="numcontainer">
            <button class="btn" onclick="addNumber(0)">0</button>
            <button class="btn" onclick="addNumber(1)">1</button>
            <button class="btn" onclick="addNumber(2)">2</button>
            <button class="btn" onclick="addNumber(3)">3</button>
            <button class="btn" onclick="addNumber(4)">4</button>
            <button class="btn" onclick="addNumber(5)">5</button>
            <button class="btn" onclick="addNumber(6)">6</button>
            <button class="btn" onclick="addNumber(7)">7</button>
            <button class="btn" onclick="addNumber(8)">8</button>
            <button class="btn" onclick="addNumber(9)">9</button>
        </div>

        <div class="fnctcontainer">
        
            <button class="branco">BRANCO</button>
            <button class="corrige" onclick="clearDisplay()">CORRIGE</button>
            <form action="gravarvoto.php">

            <input type="hidden" name="">
                
            <button type="submit" class="confirma">CONFIRMA</button>
        
            </form>

        </div>
    </div>

</div>
    
</body>
</html>
