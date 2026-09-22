<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
include('config/config.php');
date_default_timezone_set('America/Sao_Paulo');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $stmt = $PDO->prepare("SELECT * FROM user WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if($usuario && $senha === $usuario['senha']){
        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['usuario_nome'] = $usuario['nome'];
        header('Location: home.php');
        exit();
    } else {
        $erro_login = "E-mail ou senha inválidos.";
    }
}

?>