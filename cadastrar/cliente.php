<?php
include('../conexao/conexao.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeCliente = $_POST['nomeCliente'];
    $cpfCnpj = $_POST['cpfCnpj'];
    $nomeFantasia = $_POST['nomeFantasia'];
    $dataCadastro = $_POST['dataCadastro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $bairro = $_POST['bairro'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];

    // Remover máscaras de CPF/CNPJ e telefone antes de salvar no banco de dados
    $cpfCnpj = preg_replace('/[^0-9]/', '', $cpfCnpj);
    $telefone = preg_replace('/[^0-9]/', '', $telefone);

 


    // Preparar a consulta SQL usando prepared statements
    $stmt = $conect->prepare("INSERT INTO clientes (nome_cliente, cpf_cnpj, nome_fantasia, data_cadastro, cidade, estado, bairro, endereco, telefone) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $nomeCliente, $cpfCnpj, $nomeFantasia, $dataCadastro, $cidade, $estado, $bairro, $endereco, $telefone);

    if ($stmt->execute()) {
        echo "<script>
                alert('Cliente cadastrado com sucesso!');
                window.location.href = '../paginas/painel.php';
              </script>";
    } else {
        echo "Erro: " . $stmt->error;
    }

    $stmt->close();
    $conect->close();
}
?>