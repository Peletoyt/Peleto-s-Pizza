<?php
session_start();

include('../config/config.php');

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];

if($nome == ""){
    header("Location: ../tipoMensagem.php?mensagem=Nome-branco&pagina=cadastrarCliente&tipo=danger");
    exit;
}
if($sexo == ""){
    header("Location: ../tipoMensagem.php?mensagem=Sexo-branco&pagina=cadastrarCliente&tipo=danger");
    exit;
}

$sql = "UPDATE clientes SET nome = :nome, sexo = :sexo WHERE cpf = :cpf";
$stmt = $PDO -> prepare($sql);
$stmt -> bindParam(':nome', $nome);
$stmt -> bindParam(':sexo', $sexo);
$stmt -> bindParam(':cpf', $cpf);
$result = $stmt -> execute();

if(!$result){
    header("Location: ../tipoMensagem.php?mensagem=erro-sql&pagina=cadastrarCliente&tipo=danger");
    exit;
}
else{
    header("Location: ../tipoMensagem.php?mensagem=ok-editarClientes&pagina=visualizarCliente&tipo=success");
    exit;
}
?>