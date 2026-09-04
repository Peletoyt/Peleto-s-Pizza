<?php
date_default_timezone_set('America/Sao_Paulo');

$mensagem = $_GET['mensagem'];
$pagina = $_GET['pagina'];
$tipo = $_GET['tipo'];

if($mensagem == "Nome-branco"){
    $msg = "Erro - Nome em branco";
}
else if($mensagem == "Sexo-branco"){
    $msg = "Erro - Sexo em branco";
}
else if($mensagem == "ok-editarClientes"){
    $msg = "Resgistro alterado com sucesso";
}
else if($mensagem == "erro-sql"){
    $msg = "Ocorreu um erro na operação com o banco de dados";
}
else if($mensagem == "ok-deletarCliente"){
    $msg = "Registro deletado com sucesso";
}
else{
    $msg = "ERRO";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem</title>
    <?php include('include/header.php');?>

</head>
<body>
    <div class="container-fluid">
        <?php include('include/exibirMensagem.php');?>
        <?php include('include/footer.php');?>
    </div>
    <?php include('include/scripts.php');?>
</body>
</html>