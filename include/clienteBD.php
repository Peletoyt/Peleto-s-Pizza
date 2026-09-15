<?php
include('../config/config.php');

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$sexo = $_POST['sexo'];
$senha = $_POST['senha'];

if ($cpf == "") {
    echo "CPF em branco!!";
    exit;
}
if ($nome == "") {
    echo "Nome em branco";
    exit;
}
if ($email == "") {
    echo "E-mail em branco";
    exit;
}
if ($telefone == "") {
    echo "Telefone em branco";
    exit;
}
if ($sexo == "") {
    echo "Sexo em branco";
    exit;
}
if ($senha == "") {
    echo "Senha em branco";
    exit;
}

$sql_verifica = "SELECT * FROM user WHERE email = :email";

$stmt = $PDO->prepare($sql_verifica);
$stmt->bindParam(':email', $email);
$stmt->execute();

if ($stmt->fetch(PDO::FETCH_ASSOC)) {
    header("Location: ../cadastrarCliente.php?erro=email");
    exit;
}

$sql_verifica = "SELECT * FROM user WHERE cpf = :cpf";

$stmt = $PDO->prepare($sql_verifica);
$stmt->bindParam(':cpf', $cpf);
$stmt->execute();

if ($stmt->fetch(PDO::FETCH_ASSOC)) {
    header("Location: ../cadastrarCliente.php?erro=cpf");
    exit;
}

$sql_verifica = "SELECT * FROM user WHERE telefone = :telefone";

$stmt = $PDO->prepare($sql_verifica);
$stmt->bindParam(':telefone', $telefone);
$stmt->execute();

if ($stmt->fetch(PDO::FETCH_ASSOC)) {
    header("Location: ../cadastrarCliente.php?erro=telefone");
    exit;
}

$sql_insert = "INSERT INTO user 
    (cpf, nome, senha, email, telefone, sexo)
    VALUES 
    (:cpf, :nome, :senha, :email, :telefone, :sexo)";

$stmt = $PDO->prepare($sql_insert);

$stmt->bindParam(':cpf', $cpf);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':senha', $senha);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':telefone', $telefone);
$stmt->bindParam(':sexo', $sexo);

$result = $stmt->execute();

if (!$result) {
    header("Location: ../cadastrarCliente.php?erro=cadastro");
    exit;
} else {
        header("Location: ../cadastrarCliente.php?successo=1");
    exit;
}
?>