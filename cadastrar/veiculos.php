<?php
include('../conexao/conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $placa = $_POST['placa'];
    $anoFabricacao = $_POST['anoFabricacao'];
    $anoModelo = $_POST['anoModelo'];
    $chassi = $_POST['chassi'];
    $cor = $_POST['cor'];
    $dataCadastro = $_POST['dataCadastro'];

    $errors = [];

    if (empty($errors)) {
        

       $sql = "INSERT INTO veiculos (marca, modelo,placa, ano_fabri, ano_modelo, chassi, cor, data_cadastro) VALUES ('$marca', '$modelo', '$placa', '$anoFabricacao','$anoModelo','$chassi','$cor','$dataCadastro')";

         if ($conect->query($sql) === TRUE) {
          echo "<script>
          alert('Veiculo cadastrado com sucesso!');
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