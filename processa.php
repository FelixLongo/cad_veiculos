<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $ano = $_POST['ano'];
    $placa = $_POST['placa'];

    $sql = "INSERT INTO veiculos (marca, modelo, ano, placa) VALUES ('$marca', '$modelo', '$ano', '$placa')";

    if ($conn->query($sql) === TRUE) {
        echo "Veículo cadastrado com sucesso! <br>";
        echo "<a href='listar.php'>Ver lista</a>";
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>
