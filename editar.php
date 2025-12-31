<?php
include("conexao.php");
$id = $_GET['id'];
$sql = "SELECT * FROM veiculos WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<form action="atualizar.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    Marca: <input type="text" name="marca" value="<?php echo $row['marca']; ?>"><br>
    Modelo: <input type="text" name="modelo" value="<?php echo $row['modelo']; ?>"><br>
    Ano: <input type="number" name="ano" value="<?php echo $row['ano']; ?>"><br>
    Placa: <input type="text" name="placa" value="<?php echo $row['placa']; ?>"><br>
    <button type="submit">Atualizar</button>
</form>
