<?php
//Iniciar sessao
session_start();
// Importar o arquivo de conexão com o bd
include('config/config.php');
date_default_timezone_set('America/Sao_Paulo');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Consulta SQL para verificar o usuário
    $stmt = $PDO->prepare("SELECT * FROM user WHERE email = 'freddy@gmail.com'");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if($usuario && $senha === $usuario['senha']){
        // Login bem-sucedido
        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['usuario_nome'] = $usuario['nome'];
        header('Location: home.php'); // Redireciona para a página do home
        exit();
    } else {
        // Login falhou
        $erro_login = "E-mail ou senha inválidos.";
    }
}
?>