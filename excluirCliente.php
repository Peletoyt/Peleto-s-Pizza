<?php
session_start();

include('config/config.php');

$cpf = $_GET['id'];

$sql = "DELETE FROM clientes WHERE cpf = :cpf";
$stmt = $PDO -> prepare($sql);
$stmt -> bindParam(':cpf', $cpf);
$result = $stmt -> execute();

if(!$result){
    header
    ("Location: tipoMensagem.php?mensagem=erro-sql&pagina=visualizarCliente$tipo=danger");
    exit;
}else{
    header
    ("Location: tipoMensagem.php?mensagem=ok-deletarCliente&pagina=visualizarCliente&tipo=success");
    exit;
}

?>