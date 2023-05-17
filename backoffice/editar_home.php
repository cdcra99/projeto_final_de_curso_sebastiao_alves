<?php
require_once("config/config.php");
require_once("config/base_dados.php");
require_once("funcoes.php");

existeSessao();

$form_1 = isset($_GET["editar"]);
$form_2 = isset($_GET["img_home"]) && isset($_GET["texto"]);


if($form_1){ 
    $home = selectSqlUnico("SELECT * FROM home WHERE id='$_GET[editar]'");
}
else{
    header("Location: home.php");
    exit();
} 
if($form_2){

    iduSql("UPDATE home SET img_home='$_GET[img_home]', texto='$_GET[texto]' WHERE id='$_GET[editar]'");
    header("Location: home.php");
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
            <h1 class="titulo_geral">Editar Home</h1>

            <div class="caixa_geral">
                <form>
                    <h3>Link da Imagem do autor da HOME:</h3>
                    <input type="text" name="img_home" value="<?=$home["img_home"];?>">
                    <a href="<?=$url_base;?>filemanager/tinyfilemanager.php" target="_blank">
                        <button type="button">Buscar Imagens</button>
                    </a>
                    <br><br>
                    <h3>Texto do campo "Últimos livros":</h3>
                    <textarea id="editor" name="texto"><?=$home["texto"];?></textarea>
                    <br><br>
            
                    <input type="hidden" name="editar" value="<?=$home["id"]; ?>">
                    <input type="submit" value="Editar" class="botao_editar">
                </form>
                <br>
                <a href="home.php">
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