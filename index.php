<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Login - bem-vindo</title>
    <!-- Importa os estilos CSS externos -->
     <?php include("include/header.php");?>  
</head>
<body class="body-login">
    <div class="container">
        <form class="form-login" action="login.php" method="POST">

                <div class="input-group">
                    <label for="email" class="form-login-label">e-mail</label>
                    <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
                </div>

                <div class="input-group">
                    <label for="senha" class="form-login-label">Senha</label>
                    <input type="password" id="senha" name="senha" placeholder="********" required>
                </div>

                <button type="submit" class="login-btn">Entrar</button>
                <div class="links">
                    <a  href="cadastrarCliente.php">Primeiro acesso</a>
                </div>
            </form>
    </div>
    <?php include('include/scripts.php');?>
</body>
</html>
 