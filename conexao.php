<?php
$username = "root";
$password = "";
$banco = "avaliacao_web";
$host = "localhost";

try{
    $conn = new PDO("mysql:host={$host};dbnme={$banco}",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $erro){
    echo "Erro: {$erro->getMessage()}";
}
?>