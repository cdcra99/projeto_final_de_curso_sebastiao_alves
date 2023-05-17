<?php
require_once("funcoes.php");
require_once("config/config.php");
require_once("config/base_dados.php");

existeSessao();
$cliente = $_SESSION["usuario"]["nome"];

$acessos = selectSqlUnico("SELECT * FROM acessos ORDER BY id DESC");

$pagina_atual = "inicio";

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
       <h1 class="titulo_geral">BackOffice</h1>

       <hr><br>
       <div>
            <nav class="links">
                <?php require_once("navbar/navbar.php");?>
            </nav>
        </div>
        <br><hr>

        <br><br>

        <div class="caixa_geral">
            <h3>Bem-vindo <?=$cliente;?></h3>

            <h4>O seu último acesso foi: (<?=$acessos["datas"];?>)</h4>
        </div>

    </body>

</html>