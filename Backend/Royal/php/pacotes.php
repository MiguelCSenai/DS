<?php
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Buffet</title>
</head>
<body>
    <header>
        <p class="value">O valor padrão de todos os pacotes é de R$100,00</p><br>
    </header>
    <h1>Pacotes</h1><br>
    <form method="POST" action="orcamento.php" class="form1">
        <h3>Cozinha</h3>
        Pacote 1: Coxinha, {Arroz, Fejão, Macarrão}, Escondidinho de carne seca, batata frita,Bolo (Chocolate com coco, ou, Chocolate com morango) Bejinho e Brigadeiro <input type="button" value="Adicionar" name="pct_coz_1" class="input_but"><br>
        Pacote 2: Quibe, {Arroz, Fejão, Macarrão}, Stroggonof frango, polenta frita, Bolo (Chocolate com coco, ou, Chocolate com morango) Sorvete (Napolitano) <input type="button" value="Adicionar" name="pct_coz_2" class="input_but"><br>
        Pacote 3: Risoto, {Arroz, Macarrão}, Fejoada, Madioca Frita, Bolo (Chocolate com coco, ou, Chocolate com morango) Cupcake <input type="button" value="Adicionar" name="pct_coz_3" class="input_but"><br>
        Pacote 4: Bolinha de queijo, {Arroz, Fejão, Macarrão}, Rizzoto de quatro queijos, Aneis de cebola, Bolo (Chocolate com coco, ou, Chocolate com morango) Alfajor
		<input type="button" value="Adicionar" name="pct_coz_4" class="input_but"><br>
        Pacote 5: Enroladinho de salsicha, {Arroz, Macarrão}, Tutu de feijão, Batata verde, Bolo (Chocolate com coco, ou, Chocolate com morango) Pettigateu
		<input type="button" value="Adicionar" name="pct_coz_5" class="input_but"><br>
        <br>
        <h3>Bar</h3>
        Pacote 1: Caipirinha, Saquerinha<input type="button" value="Adicionar" name="pct_bar_1" class="input_but"><br>
        Pacote 2: Espanhola, Marguerita<input type="button" value="Adicionar" name="pct_bar_2" class="input_but"><br>
        Pacote 3: Campari, Shots de Whiskey (Maçã verde e gelo)<input type="button" value="Adicionar" name="pct_bar_3" class="input_but"><br>
        Pacote 4: Shots de tequila, Liquor<input type="button" value="Adicionar" name="pct_bar_4" class="input_but"><br>
        Pacote 5: Absinto (Com contrato), Gin<input type="button" value="Adicionar" name="pct_bar_5" class="input_but"><br>
        <br>
        <h3>Garçom</h3>
        Pacote 1: 05 Garçons<input type="button" value="Adicionar" name="pct_gar_1" class="input_but"><br>
        Pacote 2: 10 Garçons<input type="button" value="Adicionar" name="pct_gar_2" class="input_but"><br>
        Pacote 3: 15 Garçons<input type="button" value="Adicionar" name="pct_gar_3" class="input_but"><br>
        Pacote 4: 20 Garçons<input type="button" value="Adicionar" name="pct_gar_4" class="input_but"><br>
        Pacote 5: 25 Garçons<input type="button" value="Adicionar" name="pct_gar_5" class="input_but"><br>
        <br>
        <input type="submit" value="Finalizar">
    </form>
</body>
</html>