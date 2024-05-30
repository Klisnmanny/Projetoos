<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Painel de Ordem de Serviço</title>
</head>
<body>
        <div class="container">
            <?php 
             include ('../menus/menus.php');
             include('../conexao/verifica.php');
            ?>
            <div class="main-content-use">
                <h1>Bem-vindo ao Painel <?php echo $_SESSION['usuario'] ?></h1>
                <p>Este é o conteúdo principal do painel de ordem de serviço.</p>

                <div class="form-container ">
                        <h2>Cadastro de Cliente</h2>
                <form id="customerForm" action="../cadastrar/cliente.php" method="POST">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="nomeCliente">Nome do Cliente:</label>
                            <input type="text" id="nomeCliente" name="nomeCliente" required>
                        </div>
                        <div class="form-group">
                            <label for="cpfCnpj">CPF/CNPJ:</label>
                            <input type="text" id="cpfCnpj" name="cpfCnpj" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}|\d{2}\.\d{3}\.\d{3}\/\d{4}-\d{2}" placeholder="CPF: 123.456.789-00 ou CNPJ: 12.345.678/0001-00">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="nomeFantasia">Nome Fantasia:</label>
                            <input type="text" id="nomeFantasia" name="nomeFantasia" required>
                        </div>
                        <div class="form-group">
                            <label for="dataCadastro">Data do Cadastro:</label>
                            <input type="date" id="dataCadastro" name="dataCadastro" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="cidade">Cidade:</label>
                            <input type="text" id="cidade" name="cidade" required>
                        </div>
                        <div class="form-group">
                            <label for="estado">Estado:</label>
                            <input type="text" id="estado" name="estado" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="bairro">Bairro:</label>
                            <input type="text" id="bairro" name="bairro" required>
                        </div>
                        <div class="form-group">
                            <label for="endereco">Endereço:</label>
                            <input type="text" id="endereco" name="endereco" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="telefone">Telefone:</label>
                            <input type="text" id="telefone" name="telefone" pattern="\(\d{2}\)\s\d{4,5}-\d{4}" placeholder="Telefone: (12) 34567-8901" required>
                        </div>
                    </div>
                    <button type="submit">Cadastrar</button>
                    <div id="error-message" class="error-message" style="display: none;"></div>
                </form>

                
                </div>
            </div>
        </div>
    
</body>

</html>