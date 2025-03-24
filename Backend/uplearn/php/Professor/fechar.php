<?php

    session_start();

    unset($_SESSION['aula']);
    
    header("Location: menu.php");

?>