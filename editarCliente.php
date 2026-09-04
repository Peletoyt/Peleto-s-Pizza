<?php
session_start();

include('config/config.php');
date_default_timezone_set('America/Sao_Paulo');

$cpf = $_GET['id'];

$sql = "SELECT * FROM clientes WHERE cpf = :cpf";
$consulta = $PDO -> prepare($sql);
$consulta -> bindParam(':cpf', $cpf);
$result = $consulta -> execute();
$rows = $consulta -> fetch(PDO::FETCH_ASSOC);

$nome = $rows['nome'];
$sexo = $rows['sexo'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('include/header.php'); ?>
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <?php include('include/navbar.php'); ?>
        <div class="row formulario-login">
            <div class="col-md-offset-2 col-md-8">
                <div class="panel panel-primary">
                    <div class="panel-heading">Editar Cliente</div>
                    <div class="panel-body">
                        <form method="POST" action="include/alterarCliente.php">
                            <div class="form-group">
                                <label>Nome Cliente</label>
                                <input type="nome" class="form-control" id="nome" name="nome" placeholder="nome" value="<?= $nome?>">
                            </div>
                            <div class="form-group">
                                <label>Sexo Cliente</label>
                                <input type="sexo" class="form-control" id="sexo" name="sexo" placeholder="sexo" value="<?= $sexo?>">
                            </div>
                            
                            <input type="hidden" name="cpf" id="cpf" value="<?=$cpf?>">
                            <button type="submit" class="btn btn-success">Alterar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include('include/footer.php');?>
    </div>
    <?php include('include/scripts.php');?>
</body>
</html>