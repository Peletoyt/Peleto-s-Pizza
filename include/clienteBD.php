<?php
include('../config/config.php');

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];

if($cpf == ""){
    echo "CPF em branco!!";
    exit;
}

if($nome == ""){
    echo "Nome em branco";
    exit;
}

if($sexo == ""){
    echo "Sexo em branco";
    exit;
}

$sql_insert = "INSERT INTO clientes VALUES(:cpf, :nome, :sexo)";
$stmt = $PDO->prepare($sql_insert);
$stmt->bindParam(':cpf',$cpf);
$stmt->bindParam(':nome',$nome);
$stmt->bindParam(':sexo',$sexo);

$result = $stmt->execute();

if(!$result){
    echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="alert alert-danger" role="alert">
  não deu certo
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>';
    exit;
}else{
    echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="alert alert-success" role="alert">
    Deu certo!
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>';
}

?>