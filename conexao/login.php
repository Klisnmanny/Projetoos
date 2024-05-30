<?php 
    session_start();
    include('conexao.php');

    if(empty($_POST['usuario']) || empty($_POST['senha'])) {
        header(('Location: Login.php'));
        exit();
    }

    $usuario = mysqli_real_escape_string($conect, $_POST['usuario']);
    $senha = mysqli_real_escape_string($conect, $_POST['senha']);

    //$senhaHashed = password_hash($senha, PASSWORD_BCRYPT);

    $query = "SELECT * FROM usuarios_ofi where usuario = '{$usuario}' and senha = '{$senha}'";

    $resultado= mysqli_query($conect,$query);

    $pos_neg = mysqli_num_rows($resultado);
    
    if($pos_neg == 1){
        $_SESSION['usuario'] = $usuario;
        header('Location: ../paginas/painel.php');
        exit();
    }else{
        $_SESSION['erro_login'] = true;
        header('location: ../paginas/Login.php');
        exit();
    }

    //echo $pos_neg; exit;
?>