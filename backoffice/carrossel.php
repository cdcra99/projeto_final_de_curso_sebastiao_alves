<?php
require_once("config/config.php");
require_once("config/base_dados.php");
require_once("funcoes.php");

existeSessao();
$pagina_atual = "carrossel";

$carrossel = selectSql("SELECT * FROM carrossel");

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

        <table class="caixa_geral">
            <tr>
                <th>Imagem Desktop</th>
                <th>Imagem Mobile</th>
                <th>Titulo</th>
                <th>Texto</th>
                <th>Data de Atualização</th>
                <th>Ações</th>
            </tr>

            <?php foreach($carrossel as $p): ?>
                <tr>
                    <td><img src="<?=$p["imagem_desktop"];?>" class="imagens"></td>
                    <td><img src="<?=$p["imagem_mobile"];?>" class="imagens"></td>
                    <td><?=$p["titulo"];?></td>
                    <td><?= substr($p["descricao"],0, 100);?>...</td>
                    <td><?=$p["data_atualizacao"];?></td>
                    <td>
                        <form action="editar_carrossel.php" method="GET">
                            <button type="submit" name="editar" value="<?=$p["id"];?>">Editar</button>
                            <br><br>
                            <button type="submit" name="apagar" value="<?=$p["id"];?>">Apagar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        
        <br><br>
        <div style="text-align:center;">
            <a href="editar_carrossel.php?inserir=true">
                <button class="inserir" style="margin: auto;">Inserir Banner</button>
            </a>
        </div>
    </body>

</html>