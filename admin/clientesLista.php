<?php
    // Inclui a configuração e a conexão com o banco de dados.
    require_once "config.inc.php";

    // Exibe um link para o formulário de cadastro de novos clientes.
    echo "<a href='?pg=form'>Cadastrar novo cliente</a>";

    // Exibe o título da lista.
    echo "<h1>Lista de clientes cadastrados</h1>";

    // Define a consulta SQL para selecionar todos os clientes da tabela.
    $sql = "SELECT * FROM clientes";
    
    // Executa a consulta no banco de dados.
    $resultado = mysqli_query($conexao, $sql);

    // Verifica se algum cliente foi encontrado.
    if(mysqli_num_rows($resultado) > 0){
        
        // Loop que itera por cada registro de cliente retornado.
        while($dados = mysqli_fetch_array($resultado)){
            
            // Exibe os dados do cliente em linhas separadas.
            echo "ID: ".$dados['id']."<br>";
            echo "Nome: ".$dados['cliente']."<br>";
            echo "Cidade: ".$dados['loja']."<br>";
            echo "CNPJ: ".$dados['cnpj']."<br>";
            echo "Endereço: ".$dados['endereco']."<br>";
            echo "Numero da empresa: ".$dados['numero']."<br>";
            echo "Email da empresa: ".$dados['email']."<br>";
            
            
            echo " <a href='?pg=clienteFormAlterar&id=$dados[id]'>Editar</a>";
            
            
            echo "| <a href='?pg=clientes-excluir&id=$dados[id]'>Excluir</a>";
            echo "<hr>";
        }
    }else{
        // Mensagem exibida se não houver clientes no banco de dados.
        echo "<h3>Nenhum cliente cadastrado!</h3>";
    }
?>

