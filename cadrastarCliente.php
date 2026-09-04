<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("include/header.php");?>
    <title>Cadastrar Usuário</title>
</head>
<body>
    <div class="container-fluid">
        <?php include("include/navbar.php");?>
        <div class="panel panel-primary">
            <div class="panel-heading">Cadastro de Usuario</div>
            <div class="panel-body">
                <form action="include/clienteBD.php" method="POST">
                     <div class="form-group">
                        <label>CPF</label>
                        <input type="text" name="cpf" id="cpf" class="form-control" placeholder="Entre com o cpf">
                    </div>

                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control" placeholder="Entre com o nome">
                    </div>
                    <div class="form-group">
                        <label>Sexo</label>
                        <select name="sexo" id="sexo" class="form-control">
                            <option value="M">Macho</option>
                            <option value="F">Femea</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Envia</button>
                </form>
            </div>
        </div>
        <?php include("include/footer.php");?>
    </div>
    <?php include("include/scripts.php");?>
</body>
</html>