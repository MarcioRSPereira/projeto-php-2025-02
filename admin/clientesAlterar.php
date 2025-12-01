<?php

require_once "config.inc.php";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cliente = $_POST["cliente"];
    $loja = $_POST["loja"];
    $cnpj = $_POST["cnpj"];
    $endereco = $_POST["endereco"];
    $numero = $_POST["numero"];
    $email = $_POST["email"];
    $id = $_POST["id"];

    $sql = "UPDATE clientes SET 
            cliente = '$cliente',
            loja = '$loja',
            cnpj = '$cnpj',
            endereco = '$endereco',
            numero = '$numero',
            email='$email'
            WHERE id = '$id'";

    $executa = mysqli_query($conexao, $sql);
    if($executa) {
        echo "<h2>Alteração realizada com sucesso.</h2>";
        echo "<a href='?pg=clientesLista'>Voltar</a>";
    }else{
        echo "<h2>Erro ao alterar cadastro.</h2>";
        echo "<a href='?pg=clientesLista'>Voltar</a>";
    }
}else{
    echo "<h2>Acesso negado.</h2>";
    echo "<a href='?pg=clientesLista'>Voltar</a>";
}