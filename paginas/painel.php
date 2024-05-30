<?php 
   // session_start();
    
    
?>
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
            <div class="main-content">
                <h1>Bem-vindo ao Painel <?php echo $_SESSION['usuario'] ?></h1>
                <p>Este é o conteúdo principal do painel de ordem de serviço.</p>

                <div class="system-info">
                    <h2>Nome do Sistema</h2>
                <p>Desenvolvido por: Seu Nome</p>
            </div>
            </div>
        </div>
    
</body>
</html>