<?php

    include "mysqlconecta.php";

    $nome = $_GET['pro_nome'];
    $desc = $_GET['pro_desc'];
    $preco = $_GET['pro_preco'];

    echo $nome;
    echo $desc;
    echo $preco;

    $query = mysqli_query($conexao, "insert into produto (pro_nome, pro_descricao, pro_preco) values ('$nome', '$desc', '$preco');");

    echo "Gravado!!";
    mysqli_close($conexao);

?>