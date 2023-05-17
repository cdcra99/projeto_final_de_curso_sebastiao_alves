<?php
require_once("config/config.php");
require_once("config/base_dados.php");
require_once("funcoes.php");

existeSessao();

$livros = selectSql("SELECT * FROM livros");

$form_1 = isset($_GET["editar"]);
$form_2 = isset($_GET["categoria"]) && isset($_GET["editar_confirmado"]);

if($form_1){    
    $destaque_especifico = selectSqlUnico("SELECT * FROM destaques WHERE id='$_GET[editar]'");
    if($form_2){
        iduSql("UPDATE destaques SET id_livro='$_GET[editar_confirmado]' WHERE id='$_GET[editar]'");
        iduSql("UPDATE livros SET categoria='$_GET[categoria]' WHERE id='$destaque_especifico[id_livro]'");          
        
        header("Location: destaques.php");
        exit();
    }
}
else{
    header("Location: destaques.php");
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
        <h1 class="titulo_geral">Editar Destaque <?=$_GET["editar"];?></h1>

        <div class="caixa_geral">
            <form>
                <h3>Livro do Destaque</h3>
                <select name="editar_confirmado">
                    <?php foreach($livros as $l):?>
                        <option value="<?=$l["id"];?>"><?=$l["titulo"];?></option>
                    <?php endforeach;?>
                </select>
                <br><br>
                <h3>Observação do Destaque:</h3>
                <input type="text" name="categoria" value="<?=getlivroID($destaque_especifico["id_livro"])["categoria"];?>">
                <br><br>
                <input type="hidden" name="editar" value="<?=$destaque_especifico["id"];?>">
                <input type="submit" value="Editar" class="botao_editar">
                <a href="destaques.php">
                    <button class="botao_editar">Voltar Atrás</button>
                </a>
            </form>
        </div>
    
        <br>
        <a href="destaques.php">
            <button type="submit">Voltar Atrás</button>
        </a>
    
        <script>
            ClassicEditor
                .create( document.querySelector('#editor'))
                .catch( error => {
                console.error( error );
            } );
        </script>
    </body>

</html>