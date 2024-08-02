<?php

    
    $nome = "Miguel";
    $idade = 16;
    $altura = 1.70;
    $casado = false;
    $numero = 10;

    echo "

    <style>
    
        *{

            font-family: Arial;
            font-size: 2em;
            font-weight: bold;
            color: red;
            background: black;

        }
    
    </style>
    
    ";
    echo "Nome: " . $nome . "<br>";
    echo "Idade: " . $idade . " anos<br>";
    echo "Altura: " . $altura . " metros<br>";
    echo "Casado: " . ($casado ? "Sim" : "Não") . "<br><br>";
    if($numero > 0){

        echo "O numero $numero é positivo<br><br>";

    }else{

        echo "O numero é negativo<br><br>";

    }

    for($i = 1; $i <= 10; $i++){

        echo "Numero $i <br>";

    }
    echo "<br>";

    function saudacao($pessoa){

        return "Olá $pessoa!";

    }
    echo saudacao("Miguel")."<br>";
    echo saudacao("Alexandre")."<br>";
    echo saudacao("Carlos")."<br>";
    echo saudacao("Usuario")."<br>";

?>