<?php
    require_once "config.inc.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $clientname = $_POST["clientname"];
        $clientsurname = $_POST["clientsurname"];
        $birthdate = $_POST["birthdate"];
        $country = $_POST["country"];
        $emailpers = $_POST["emailpers"];
        $clientstate = $_POST["clientstate"];

        $companyname = $_POST["companyname"];
        $estdate = $_POST["estdate"];
        $estcountry = $_POST["estcountry"];
        $eststate = $_POST["eststate"];
        $emailcomp = $_POST["emailcomp"];

        $sql = "INSERT INTO clienteslista (clientname, clientsurname, birthdate, country, emailpers, clientstate, companyname, estdate, estcountry, eststate, emailcomp)
            VALUES ('$clientname', '$clientsurname', '$birthdate', '$country', '$emailpers', '$clientstate', '$companyname', '$estdate', '$estcountry', '$eststate', '$emailcomp')";

        $executa = mysqli_query($conexao, $sql);
        if($executa) {
            echo "<h2>Cadastro realizado com sucesso.</h2>";
            echo "<a href='?pg=home'>Voltar</a>";
        }else{
            echo "<h2>Erro ao cadastrar.</h2>";
            echo "<a href='?pg=home'>Voltar</a>";
        }
    }else{
        echo "<h2>Acesso negado.</h2>";
        echo "<a href='?pg=home'>Voltar</a>";
    }
?>