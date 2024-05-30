<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Cadastro de Veículo</title>
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

                <div class="form-container">

                <h2>Cadastro de Funcionário</h2>
                <form id="employeeForm" action="../cadastrar/funcionarios.php" method="POST">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" id="nome" name="nome" required>
                        </div>
                        <div class="form-group">
                            <label for="cpf">CPF:</label>
                            <input type="text" id="cpf" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="123.456.789-00" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="endereco">Endereço:</label>
                            <input type="text" id="endereco" name="endereco" required>
                        </div>
                        <div class="form-group">
                            <label for="bairro">Bairro:</label>
                            <input type="text" id="bairro" name="bairro" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="celular">Celular:</label>
                            <input type="text" id="celular" name="celular" pattern="\(\d{2}\)\s\d{4,5}-\d{4}" placeholder="(12) 34567-8901" required>
                        </div>
                        <div class="form-group">
                            <label for="valorMensal">Valor Mensal:</label>
                            <input type="number" id="valorMensal" name="valorMensal" step="0.01" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="dataAtivacao">Data de Ativação:</label>
                            <input type="date" id="dataAtivacao" name="dataAtivacao" required>
                        </div>
                        <div class="form-group">
                            <label for="dataDesativacao">Data de Desativação:</label>
                            <input type="date" id="dataDesativacao" name="dataDesativacao">
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