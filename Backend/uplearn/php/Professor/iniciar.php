<?php

    session_start();

    $_SESSION['aula'] = true;

    header("Location: menu.php");   //

?>