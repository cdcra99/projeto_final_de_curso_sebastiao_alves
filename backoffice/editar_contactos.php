<?php
require_once("config/config.php");
require_once("config/base_dados.php");
require_once("funcoes.php");

existeSessao();

$form_1 = isset($_GET["editar"]);
$form_2 = isset($_GET["telefone"]) && isset($_GET["morada"]) && isset($_GET["email"]) && isset($_GET["horario"]);


if($form_1){ 
    $contactos = selectSqlUnico("SELECT * FROM contactos WHERE id='$_GET[editar]'");
}
else{
    header("Location: contactos.php");
    exit();
} 
if($form_2){

    iduSql("UPDATE contactos SET morada='$_GET[morada]', telefone='$_GET[telefone]', email='$_GET[email]', horario='$_GET[horario]' WHERE id='$_GET[editar]'");
    header("Location: contactos.php");
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
            <h1 class="titulo_geral">Editar Contactos</h1>

            <div class="caixa_geral">
                <form>
                    <h3>Telefone:</h3>
                    <input type="text" name="telefone" value="<?=$contactos["telefone"];?>">
                    <br><br>
                    <h3>Morada:</h3>
                    <input type="text" name="morada" value="<?=$contactos["morada"];?>">
                    <br><br>
                    <h3>Email:</h3>
                    <input type="text" name="email" value="<?=$contactos["email"];?>">
                    <br><br>
                    <h3>Horário:</h3>
                    <input type="text" name="horario" value="<?=$contactos["horario"];?>">
                    <br><br>
            
                    <input type="hidden" name="editar" value="<?=$contactos["id"]; ?>">
                    <input type="submit" value="Editar" class="botao_editar">
                </form>
                <br>
                <a href="contactos.php">
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