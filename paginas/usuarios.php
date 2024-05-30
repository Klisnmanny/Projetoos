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

                <div class="system-info">
                    <h2>Cadastro de usuarios</h2>

                    <form id="registrationForm" action="../cadastrar/usuario.php" method="POST" onsubmit="return validateForm()">
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome" name="nome" required>

                        <label for="login">Login:</label>
                        <input type="text" id="login" name="usuario" required>

                        <label for="email">E-mail:</label>
                        <input type="email" id="email" name="email" required>

                        <label for="confirmEmail">Confirme o E-mail:</label>
                        <input type="email" id="confirmEmail" name="confirmEmail" required>

                        <label for="senha">Senha:</label>
                        <input type="password" id="senha" name="senha" required>

                        <label for="confirmSenha">Confirme a Senha:</label>
                        <input type="password" id="confirmSenha" name="confirmSenha" required>

                        <button type="submit">Cadastrar</button>

                        <div id="error-message" class="error-message" style="display: none;"></div>
                    </form>

                
                </div>
            </div>
        </div>
    
</body>

</html>