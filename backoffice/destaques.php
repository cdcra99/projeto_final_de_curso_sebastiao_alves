<?php
require_once("config/config.php");
require_once("config/base_dados.php");
require_once("funcoes.php");

existeSessao();
$pagina_atual = "destaques";

$destaques = selectSql("SELECT * FROM destaques ORDER BY id");
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
                <th>Imagem Destaque</th>
                <th>Titulo</th>
                <th>Observação</th>
                <th>Ações</th>
            </tr>

            <?php foreach($destaques as $d): ?>
                <tr>
                    <td><img src="<?=getlivroID($d["id_livro"])["img_livro"];?>" class="imagens_destaques"></td>
                    <td><?=getlivroID($d["id_livro"])["titulo"];?></td>
                    <td><?=getlivroID($d["id_livro"])["categoria"];?></td>
                    <td>
                        <form action="editar_destaques.php" method="GET">
                            <button type="submit" name="editar" value="<?=$d["id"];?>">Editar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>

</html>