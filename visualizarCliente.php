<?php
//Iniciar sessao
session_start();

// Importar o arquivo de conexão com o bd
include('config/config.php');

date_default_timezone_set('America/Sao_Paulo');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('include/header.php'); ?>
    <title>Visualizar</title>
</head>
<body>
    <div class="container-fluid">
        <?php include('include/navbar.php'); ?>
        <div class="row formulario-cliente">
            <div class="col-md-offset-2 col-md-8">
                <h2>Visualizar Clientes Cadastrados</h2>
                <br>
                <table class="table table-condensed table -hover table-responsive">
                    <thead>
                        <tr>
                            <th>CPF</th>
                            <th>Nome</th>
                            <th>Sexo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM clientes";
                            $consulta = $PDO->prepare($sql);
                            $result = $consulta->execute();

                            while($rows = $consulta->fetch(PDO::FETCH_ASSOC)){
                                $cpf = $rows['cpf'];
                                $nome = $rows['nome'];
                                $sexo = $rows['sexo'];
                            
                        ?>
                        <tr>
                            <td><?=$cpf?></td>
                            <td><?=$nome?></td>
                            <td><?=$sexo?></td>
                            <td>
                                <a class="btn btn-info" data-toggle="tooltip"
                                data-placement="top" title="Editar"
                                href="editarCliente.php?id=<?=$cpf?>">
                                <span class="glyphicon glyphicon-edit" aria-hidden="true">
                                </span></a>

                                <a class="btn btn-danger" data-toggle="tooltip"
                                data-placement="top" title="Deletar" href="excluirCliente.php?id=<?=$cpf?>">
                                <span class="glyphicon glyphicon-remove-sign" arial-hidden="true"></span>
                            </a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php include('include/footer.php'); ?>
    </div>
    <?php include('include/scripts.php');?>    
</body>
</html>