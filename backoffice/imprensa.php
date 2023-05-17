<?php
require_once("config/config.php");
require_once("config/base_dados.php");
require_once("funcoes.php");

existeSessao();
$pagina_atual = "imprensa";

$imprensa = selectSql("SELECT * FROM imprensa");

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
                <th>Imagem</th>
                <th>Titulo</th>
                <th>Texto</th>
                <th>Data Publicação</th>
                <th>Ações</th>
            </tr>

            <?php foreach($imprensa as $i): ?>
                <tr>
                    <td><img src="<?=$i["imagem"];?>" class="imagens"></td>
                    <td><?=$i["titulo"];?></td>
                    <td><?= substr($i["texto"],0, 100);?>...</td>
                    <td><?=$i["data_publicacao"];?></td>
                    <td>
                        <form action="editar_imprensa.php" method="GET">
                            <button type="submit" name="editar" value="<?=$i["id"];?>">Editar</button>
                            <br><br>
                            <button type="submit" name="apagar" value="<?=$i["id"];?>">Apagar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        
        <br><br>
        <div style="text-align:center;">
            <a href="editar_imprensa.php?criar=true">
                <button class="inserir" style="margin: auto;">Criar Nova Postagem</button>
            </a>
        </div>
    </body>

</html>