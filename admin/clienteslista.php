<?php

    require_once "config.inc.php";

    echo "<h1>Lista de clientes cadastrados</h1>";

    $sql = "SELECT * FROM clientes";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){
        while($dados = mysqli_fetch_array($resultado)){
            echo "ID: ".$dados['id']."<br>";
            echo "Nome: ".$dados['cliente']."<br>";
            echo "loja: ".$dados['loja']."<br>";
            echo "CNPJ: ".$dados['cnpj']."<br>";
            echo "Endereço: ".$dados['endereco']."<br>";
            echo "Numero da empresa: ".$dados['numero']."<br>";
            echo "Email da empresa: ".$dados['email']."<br>";
            echo " <a href='?pg=clientesformAlterar&id=$dados[id]'>Editar</a>";
            echo "| <a href='?pg=clientesExcluir&id=$dados[id]'>Excluir</a>";
            echo "<hr>";
        }
    }else{
        echo "<h3>Nenhum cliente cadastrado!</h3>";
    }
