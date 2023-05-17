<?php
require_once("config/config.php");
require_once("config/base_dados.php");
require_once("funcoes.php");

existeSessao();
$pagina_atual = "livros";

$livros = selectSql("SELECT * FROM livros");

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
                <th>Imagem Livro</th>
                <th>Titulo</th>
                <th>Texto</th>
                <th>Data de Atualização</th>
                <th>Ações</th>
            </tr>

            <?php foreach($livros as $l): ?>
                <tr>
                    <td><img src="<?=$l["img_livro"];?>" class="imagens"></td>
                    <td><?=$l["titulo"];?></td>
                    <td><?= substr($l["descricao"],0, 100);?>...</td>
                    <td><?=$l["data_atualizacao"];?></td>
                    <td>
                        <form action="editar_livros.php" method="GET">
                            <button type="submit" name="editar" value="<?=$l["id"];?>">Editar</button>
                            <br><br>
                            <button type="submit" name="apagar" value="<?=$l["id"];?>">Apagar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        
        <br><br>
        <div style="text-align:center;">
            <a href="editar_livros.php?criar=true">
                <button class="inserir" style="margin: auto;">Criar Novo Livro</button>
            </a>
        </div>
    </body>

</html>