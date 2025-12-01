<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
        <h1 class="text-center">Cadastro de Cliente</h1>
        <div class="d-flex align-items-center justify-content-center vh-100">
            <form action="?pg=clientescadastro" method="post">
                
                <!--cadastro do cliente/dono da empresa-->
                <label class="form-check-label text-center">Nome do Proprietário:</label>
                <input class="form-control" type="text" name="nome"><br>

                <!--cadastro da empresa-->
                <label class="form-check-label text-center">Nome da Loja/Empresa:</label>
                <input class="form-control" type="text" name="loja"><br>

                <label class="form-check-label text-center">CNPJ:</label>
                <input class="form-control" type="text" name="cnpj"><br>

                <label class="form-check-label text-center">Endereço da Loja/Empresa:</label>
                <input class="form-control" type="text" name="endereco"><br>

                <label class="form-check-label text-center">Número de Contato (Empresa):</label>
                <input class="form-control" type="text" name="numero"><br>

                <label class="form-check-label text-center">E-mail de Contato (Empresa):</label>
                <input class="form-control" type="email" name="email"><br>
                
                <input type="submit" value="Cadastrar Cliente & Empresa">
            </form>
        </div>
</body>
</html>