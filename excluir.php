<?php
include("conexao.php");
$id = $_GET['id'];

$sql = "DELETE FROM veiculos WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Veículo excluído com sucesso! <br>";
    echo "<a href='listar.php'>Voltar à lista</a>";
} else {
    echo "Erro: " . $conn->error;
}
?>
