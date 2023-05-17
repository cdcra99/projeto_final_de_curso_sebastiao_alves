<?php
require_once("config/config.php");
require_once("config/base_dados.php");
require_once("funcoes.php");

existeSessao();
$pagina_atual = "configuracoes";
?>
<!DOCTYPE html>
<html lang="pt">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home | BackOffice</title>
        <link rel="icon" href="" type="image">
        <link rel="stylesheet" href="public/estilo.css">
    </head>
    
    <body>
       <h1 class="titulo_geral">BackOffice Configurações</h1>

       <hr><br>
       <div>
            <nav class="links">
                <?php require_once("navbar/navbar.php");?>
            </nav>
        </div>
        <br><hr>

        <br><br>
        
        <div class="caixa_geral">
            <h3>Alterar Senha</h3>

            <?php if(isset($_GET["login_incorreto"])): ?>
                <h4 style="color: greenyellow;">Senha Incorreta. Tente novamente.</h4>
            <?php endif;?>

            <?php if(isset($_GET["confirmacao_incorreta"])): ?>
                <h4 style="color: greenyellow;">As senhas não coincidem. Tente novamente.</h4>
            <?php endif;?>

            <form action="atualizar_senha.php" method="POST" class="atualizar_senha">
                <input type="hidden" name="login" value="<?=$login;?>">
                <input type="text" name="senha_atual" placeholder="Senha Atual" required="required">
                <br><br>
                <input type="text" name="nova_senha" placeholder="Nova Senha" required="required">
                <br><br>
                <input type="text" name="senha_confirmacao" placeholder="Digite Novamente a Nova Senha" required="required">
                <br><br>
                <button id="botao_home" type="submit">Alterar Senha</button>
            </form>
        </div>

        <br><br>
    </body>

</html>