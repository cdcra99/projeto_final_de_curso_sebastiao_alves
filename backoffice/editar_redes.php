<?php
require_once("config/config.php");
require_once("config/base_dados.php");
require_once("funcoes.php");

existeSessao();

$form_1 = isset($_GET["editar"]);
$form_2 = isset($_GET["insta"]) && isset($_GET["facebook"]) && isset($_GET["linkedin"]);


if($form_1){ 
    $redes = selectSqlUnico("SELECT * FROM redessociais WHERE id='$_GET[editar]'");
}
else{
    header("Location: redes.php");
    exit();
} 
if($form_2){

    iduSql("UPDATE redessociais SET link_insta='$_GET[insta]', link_facebook='$_GET[facebook]', link_linkedin='$_GET[linkedin]' WHERE id='$_GET[editar]'");
    header("Location: redes.php");
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
            <h1 class="titulo_geral">Editar Redes Sociais</h1>

            <div class="caixa_geral">
                <form>
                    <h3>Facebook:</h3>
                    <input type="text" name="facebook" value="<?=$redes["link_facebook"];?>">
                    <br><br>
                    <h3>Instagram:</h3>
                    <input type="text" name="insta" value="<?=$redes["link_insta"];?>">
                    <br><br>
                    <h3>Linkedin:</h3>
                    <input type="text" name="linkedin" value="<?=$redes["link_linkedin"];?>">
                    <br><br>
            
                    <input type="hidden" name="editar" value="<?=$redes["id"]; ?>">
                    <input type="submit" value="Editar" class="botao_editar">
                </form>
                <br>
                <a href="redes.php">
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