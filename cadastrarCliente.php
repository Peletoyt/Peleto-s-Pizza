<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("include/header.php");?>
    <title>Cadastrar Usuário</title>
</head>
<body class="body-cadastro">
    <div class="container-fluid">
        <?php include("include/navbar.php");?>
                <form action="include/clienteBD.php" method="POST" class="form-cadastro">
                    <image src="include/image/Fazbear_Entertainment.png" alt="Logo" class="logo-cadastro">

                     <div class="form-group">
                        <label>CPF</label>
                        <input type="text" name="cpf" id="cpf" class="form-control" placeholder="Entre com o cpf">
                    </div>

                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control" placeholder="Entre com o nome">
                    </div>

                     <div class="form-group">
                        <label>Senha</label>
                        <input type="password" name="senha" id="senha" class="form-control" placeholder="Entre com a senha">
                    </div>

                     <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Entre com o e-mail">
                    </div>

                     <div class="form-group">
                        <label>Telefone</label>
                        <input type="text" name="telefone" id="telefone" class="form-control" placeholder="Entre com o telefone">
                    </div>

                    <div class="form-group">
                        <label>Sexo</label>
                        <select name="sexo" id="sexo" class="form-control">
                            <option value="homem">Homem</option>
                            <option value="mulher">Mulher</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Envia</button>
                </form>
        <?php include("include/footer.php");?>
    </div>
    <?php include("include/scripts.php");?>
</body>
</html>