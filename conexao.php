<?php
$host = "localhost";
$user = "root"; // ajuste conforme seu servidor
$pass = "";
$db = "sistema_veiculos";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>
