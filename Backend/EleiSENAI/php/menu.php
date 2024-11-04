<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="../css/menu.css">
</head>

<script>
    function mostrarFormulario() {
    const formContainer = document.querySelector('.form-container');
    const overlay = document.querySelector('.overlay');

    formContainer.style.display = 'block';
    overlay.classList.add('overlay-active');
    
}

function fecharFormulario() {

    const formContainer = document.querySelector('.form-container');
    const overlay = document.querySelector('.overlay');

    formContainer.style.display = 'none';
    overlay.classList.remove('overlay-active');

}

</script>

<body>

    <div class="container">
        <div class="overlay"></div>
        <div class="menucontainer">
            <a href="cadastroeleitores.php">

                <div class="iconemenu">

                    <img class="imgmenu" src="../img/usuario.png">
                    <h3 class="textmenu">Eleitor</h3>

                </div>

            </a>
            <a href="cadastrocandidatos.php">

                <div class="iconemenu">

                    <img class="imgmenu" src="../img/usuario.png">
                    <h3 class="textmenu">Candidato</h3>

                </div>

            </a>
            <button onclick="mostrarFormulario()">
                <div class="iconemenu">
                    <img class="imgmenu" src="https://seeklogo.com/images/B/brasao-da-republica-do-brasil-logo-F668D19105-seeklogo.com.png">
                    <h3 class="textmenu">Voto</h3>
                </div>
            </button>

            <a href="apuracao.php">

                <div class="iconemenu">

                    <img class="imgmenu" src="../img/apuracao.png">
                    <h3 class="textmenu">Apuração</h3>

                </div>

            </a>
        </div>
    </div>


    </div>

    <div class="form-container">
        <form action="eleitor.php" method="get">
            <label for="cpf">Digite seu CPF:</label>
            <input type="text" name="cpf" id="cpf">
            <button class="btn" type="submit">Enviar</button>
            <button class="btn" type="button" onclick="fecharFormulario()">Fechar</button>
        </form>
    </div>

    
</body>
</html>