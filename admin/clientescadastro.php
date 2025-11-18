<?php
    require_once "config.inc.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nomeCliente = $_POST["nome"];
        $loja = $_POST["loja"];
        $endereco = $_POST["endereco"];
        $cnpj = $_POST["cnpj"];
        $numeroEmp = $_POST["numero"];
        $emailEmp = $_POST["email"];

        $sql = "INSERT INTO clientes (cliente, loja, cnpj, endereco, numero, email )
            VALUES ('$nomeCliente', '$loja', '$cnpj', '$endereco', '$numeroEmp', '$emailEmp')";

        $executa = mysqli_query($conexao, $sql);
        if($executa) {
            echo "<h2>Cadastro realizado com sucesso.</h2>";
            echo "<a href='?pg=clienteslista'>Voltar</a>";
        }else{
            echo "<h2>Erro ao cadastrar.</h2>";
            echo "<a href='?pg=clienteslista'>Voltar</a>";
        }
    }else{
        echo "<h2>Acesso negado.</h2>";
        echo "<a href='?pg=clienteslista'>Voltar</a>";
    }
?>