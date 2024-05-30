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

                <h2>Cadastro de Veículo</h2>
                <form id="vehicleForm" action="../cadastrar/veiculos.php" method="POST">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="marca">Marca:</label>
                            <input type="text" id="marca" name="marca" required>
                        </div>
                        <div class="form-group">
                            <label for="modelo">Modelo:</label>
                            <input type="text" id="modelo" name="modelo" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="placa">Placa:</label>
                            <input type="text" id="placa" name="placa" placeholder="ABC-1234" required>
                        </div>
                        <div class="form-group">
                            <label for="anoFabricacao">Ano de Fabricação:</label>
                            <input type="number" id="anoFabricacao" name="anoFabricacao" min="1900" max="2024" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="anoModelo">Ano do Modelo:</label>
                            <input type="number" id="anoModelo" name="anoModelo" min="1900" max="2024" required>
                        </div>
                        <div class="form-group">
                            <label for="chassi">Chassi:</label>
                            <input type="text" id="chassi" name="chassi" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="cor">Cor:</label>
                            <input type="text" id="cor" name="cor" required>
                        </div>

                        <div class="form-group">
                            <label for="dataCadastro">Data do Cadastro:</label>
                            <input type="date" id="dataCadastro" name="dataCadastro" required>
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
