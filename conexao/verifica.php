<?php 
    session_start();
    if(!$_SESSION['usuario']){
        header('Location: ../paginas/Login.php');
        exit();
    }

?>