<?php

    // Inclui a configuração e a conexão com o banco de dados.
    require_once "config.inc.php";
    
    // Obtém o ID do cliente a ser excluído via URL (parâmetro GET).
    $id = $_GET['id'];

    // Define a consulta SQL para exclusão do registro com o ID fornecido.
    
    $sql = "DELETE FROM clientes WHERE id = $id";

    // Executa a consulta no banco de dados.
    $resultado = mysqli_query($conexao, $sql);
    
    // Verifica se foi bem-sucedida.
    if($resultado){
        // Exibe mensagem de sucesso e link para a listagem.
       echo "<h2>Registro excluido com sucesso!</h2>";
       echo "<br><a href='?pg=clientes-admin'>Listar Clientes</a>";
    }else{
        // Exibe mensagem de erro e link para retornar.
        echo "<h2>Erro ao excluir registro!</h2>";
        echo "<br><a href='?pg=clientes-admin'>Voltar</a>";
    }
?>
