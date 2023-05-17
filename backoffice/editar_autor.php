<?php
require_once("config/config.php");
require_once("config/base_dados.php");
require_once("funcoes.php");

existeSessao();

$form_1 = isset($_GET["editar"]);
$form_2 = isset($_GET["img"]) && isset($_GET["texto"]);

if($form_1){ 
    $autor = selectSqlUnico("SELECT * FROM autor WHERE id='$_GET[editar]'");
}
else{
    header("Location: autor.php");
    exit();
} 
if($form_2){

    iduSql("UPDATE autor SET img='$_GET[img]', texto='$_GET[texto]' WHERE id='$_GET[editar]'");
    header("Location: autor.php");
    exit();
}
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
        <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>
    </head>
    
    <body>
        <?php if($form_1):?>
            <h1 class="titulo_geral">Editar Autor</h1>

            <div class="caixa_geral">
                <form>
                    <h3>Link da Imagem do autor na ppágina AUTOR:</h3>
                    <input type="text" name="img" value="<?=$autor["img"];?>">
                    <a href="<?=$url_base;?>filemanager/tinyfilemanager.php" target="_blank">
                        <button type="button">Buscar Imagens</button>
                    </a>
                    <br><br>
                    <h3>Texto do campo "Últimos livros":</h3>
                    <textarea id="editor" name="texto"><?=$autor["texto"];?></textarea>
                    <br><br>
            
                    <input type="hidden" name="editar" value="<?=$autor["id"]; ?>">
                    <input type="submit" value="Editar" class="botao_editar">
                </form>
                <br>
                <a href="autor.php">
                    <button class="botao_editar">Voltar Atrás</button>
                </a>
            </div>
        <?php endif;?>
    
        <script>
            ClassicEditor
                .create( document.querySelector('#editor'))
                .catch( error => {
                console.error( error );
            } );
        </script>
    </body>

</html>