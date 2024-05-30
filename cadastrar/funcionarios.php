<?php
include('../conexao/conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $celular = $_POST['celular'];
    $valorMensal = $_POST['valorMensal'];
    $dataAtivacao = $_POST['dataAtivacao'];
    $dataDesativacao = $_POST['dataDesativacao'];

    $errors = [];

    if (empty($errors)) {
        

       $sql = "INSERT INTO funcionarios (nome, cpf, endereco, bairro, celular, valor_mensal, data_ativacao, data_desativacao) VALUES ('$nome', '$cpf', '$endereco', '$bairro', '$celular', '$valorMensal', '$dataAtivacao', '$dataDesativacao')";

         if ($conect->query($sql) === TRUE) {
          echo "<script>
          alert('Funcionario cadastrado com sucesso!');
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