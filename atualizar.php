<?php
include("conexao.php");

$id = $_POST['id'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$ano = $_POST['ano'];
$placa = $_POST['placa'];

$sql = "UPDATE veiculos SET marca='$marca', modelo='$modelo', ano='$ano', placa='$placa' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Veículo atualizado com sucesso! <br>";
    echo "<a href='listar.php'>Voltar à lista</a>";
} else {
    echo "Erro: " . $conn->error;
}
?>
