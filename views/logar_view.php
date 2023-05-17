<?php
//Criptografar senha e introduzir usuario na base de dados
// $senha_c = "123";
// $senha_j = "456";
// $senhaCriptografada_c = criptografarSenha($senha_c);
// iduSql("INSERT INTO usuarios (nome, login, senha) VALUES ('Cristiano', 'cristiano', '$senhaCriptografada_c')");

verificarSessao();
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Backoffice</title>
        <link rel="icon" href="" type="image">
        <link rel="stylesheet" href="public/estilo.css">
    </head>
    
    <body>  
        <div class="pai_caixa">
            <div class="caixa">
                <h1>Backoffice</h1>

                <h3>User Login</h3>
                
                <form action="login.php" method="POST">
                    <?php if(isset($_GET["login"]) == "erro"): ?>
                        <p id="erro">Login Inválido, tente novamente.</p>
                    <?php endif; ?>

                    <div class="inputs_login">
                        <img src="public/logo-icon-person-on-white-background-free-vector.webp">
                        <input type="text" name="login" placeholder="User" required="required">
                    </div>
                    <br>
                    <div class="inputs_login">
                        <img src="public/4891812.png">
                        <input type="password" name="senha" placeholder="Password" required="required">
                    </div>

                    <br>
                    <input class="inputs_login" type="submit" value="Entrar">
                </form>
            </div>
        </div>
    </body>
</html>