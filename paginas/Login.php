<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../paginas/css/styles.css">
    <title>Sistema OS</title>
</head>
<body>
<div class="login-container">
        <h2>Login</h2>
        <form action="../conexao/login.php" method="post">
            <?php
                if(isset($_SESSION['erro_login'])):
                    ?>
                    <div class="erro_entrar"> 
                        <p>Usuario ou senha inválidos</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['erro_login']);
            ?>
            <label for="username">Usuário</label>
            <input type="text" id="usuario" name="usuario" required>

            <label for="password">Senha</label>
            <input type="password" id="senha" name="senha" required>

            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>