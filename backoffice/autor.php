<?php
require_once("config/config.php");
require_once("config/base_dados.php");
require_once("funcoes.php");

existeSessao();
$pagina_atual = "autor";

$autor = selectSqlUnico("SELECT * FROM autor");

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
            <h3>Imagem do autor da página (AUTOR)</h3>
            <img src="<?=$autor["img"];?>"></td>
            <hr><br>
            <h3>Texto do autorda página (AUTOR)</h3>
            <p><?=$autor["texto"];?></p>
            <br><hr><br>
            <form action="editar_autor.php" method="GET">
                <button id="botao_home" type="submit" name="editar" value="<?=$autor["id"];?>">Editar Autor</button>
            </form>
            <br>
        </div>

        <br><br>
    </body>

</html>