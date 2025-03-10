<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uplearn 1 | Iniciar</title>
    <link rel="stylesheet" href="../../css/menu/style.css">
    <link rel="stylesheet" href="../../css/general/settings.css">
</head>
<body>

    <nav class="menu subtitle bold noSelect">

        <ul>
            
            <li><a href="#">Sobre nós</a></li>
            <li><a href="Admin/menu.php"><?php session_start(); if (isset($_SESSION['admin'])) { echo $_SESSION['admin']; }else{ echo "Administrador"; } ?></a></li>

        </ul>

    </nav>
    
</body>
</html>