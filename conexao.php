<?php
session_start();

$username = "root";
$password = "";
$banco    = "avaliacao_web";
$host     = "localhost";

try{
$conn =  new PDO("mysql:host={$host};dbname={$banco}",$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $erro){
    echo "Erro:{$erro->getMessage()}";
}
?>