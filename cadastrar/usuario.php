<?php
include('../conexao/conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $login = $_POST['usuario'];
    $email = $_POST['email'];
    $confirmEmail = $_POST['confirmEmail'];
    $senha = $_POST['senha'];
    $confirmSenha = $_POST['confirmSenha'];

    $errors = [];

    if ($email !== $confirmEmail) {
        $errors[] = "Os e-mails não coincidem.";
    }

    if ($senha !== $confirmSenha) {
        $errors[] = "As senhas não coincidem.";
    }

    if (empty($errors)) {
        
        $senhaHashed = password_hash($senha, PASSWORD_BCRYPT);

       $sql = "INSERT INTO usuarios_ofi (nome, usuario, email, senha) VALUES ('$nome', '$login', '$email', '$senhaHashed')";

         if ($conect->query($sql) === TRUE) {
          echo "<script>
          alert('Usuário cadastrado com sucesso!');
          window.location.href = '../paginas/painel.php';
                </script>";
        } else {
          echo "Erro: " . $sql . "<br>" . $conect->error;
         }
         $conect->close();
    } else {
        foreach ($errors as $error) {
            echo "<p class='error-message'>$error</p>";
        }
    }
}
?>