<?php
$servidor = "127.0.0.1";
$usuario = "root";
$senha = "";
$bancodados = "uplearn";

$conexao = mysqli_connect($servidor, $usuario, $senha, $bancodados) or die("Problemas ao conectar ao banco!");

?>