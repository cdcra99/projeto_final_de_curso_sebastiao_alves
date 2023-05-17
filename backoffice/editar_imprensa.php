<?php
require_once("config/config.php");
require_once("config/base_dados.php");
require_once("funcoes.php");

existeSessao();

$form_1 = isset($_GET["editar"]);
$form_2 = isset($_GET["imagem"]) && isset($_GET["titulo"]) && isset($_GET["texto"]) && isset($_GET["data_publicacao"]);
$form_3 = isset($_GET["criar"]);
$form_4 = isset($_GET["apagar"]);

if($form_1){    
    $imprensa_especifico = selectSqlUnico("SELECT * FROM imprensa WHERE id='$_GET[editar]'");
}
elseif($form_3){
    if(isset($_GET["criar_confirmado"])){
        $data = date("H:i:s - d/m/Y");
        iduSql("INSERT INTO imprensa (titulo, data_publicacao, imagem, texto) VALUES ('$_GET[titulo]','$_GET[data_publicacao]', '$_GET[imagem]', '$_GET[texto]')");
        header("Location: imprensa.php");
        exit();
    }
}  
elseif($form_4){
    $imprensa_especifico = selectSqlUnico("SELECT * FROM imprensa WHERE id='$_GET[apagar]'");
    if(isset($_GET["apagar_confirmado"])){
        iduSql("DELETE FROM imprensa WHERE id='$_GET[apagar_confirmado]'");
        header("Location: imprensa.php");
        exit();
    }
}
else{
    header("Location: imprensa.php");
    exit();
} 
if($form_2){
    $data = date("H:i:s - d/m/Y");
    iduSql("UPDATE imprensa SET titulo='$_GET[titulo]', data_publicacao='$_GET[data_publicacao]', imagem='$_GET[imagem]', texto='$_GET[texto]' WHERE id='$_GET[editar]'");
    header("Location: imprensa.php");
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
            <h1 class="titulo_geral">Editar Imprensa <?=$_GET["editar"];?></h1>

            <div class="caixa_geral">
                <form>
                    <h3>Link da Imagem da Capa da Imprensa:</h3>
                    <input type="text" name="imagem" value="<?=$imprensa_especifico["imagem"];?>">
                    <a href="<?=$url_base;?>filemanager/tinyfilemanager.php" target="_blank">
                        <button type="button">Buscar Imagens</button>
                    </a>
                    <br><br>
                    <h3>Titulo da Imprensa:</h3>
                    <input type="text" name="titulo" value="<?=$imprensa_especifico["titulo"];?>">
                    <br><br>
                    <h3>Texto da Imprensa:</h3>
                    <textarea id="editor" name="texto"><?=$imprensa_especifico["texto"];?></textarea>
                    <br><br>
                    <h3>Data publicação da Imprensa:</h3>
                    <input type="text" name="data_publicacao" value="<?=$imprensa_especifico["data_publicacao"];?>">
                    <br><br>
                    <input type="hidden" name="editar" value="<?=$imprensa_especifico["id"]; ?>">
                    <input type="submit" value="Editar" class="botao_editar">
                    <a href="imprensa.php">
                        <button class="botao_editar">Voltar Atrás</button>
                    </a>
                </form>
            </div>
        <?php elseif($form_3):?>
            <h1 class="titulo_geral">Criar Nova Imprensa</h1>

            <div class="caixa_geral">
                <form>
                    <h3>Link da Imagem da Capa do Livro:</h3>
                    <input type="text" name="img_livro" placeholder="Inserir Imagem da Capa do Livro">
                    <br><br>
                    <h3>Titulo do Livro:</h3>
                    <input type="text" name="titulo" placeholder="Inserir o Titulo">
                    <br><br>
                    <h3>Descrição do Livro:</h3>
                    <textarea id="editor" name="descricao" placeholder="Inserir Descrição do Livro"></textarea>
                    <br><br>
                    <input type="hidden" name="criar_confirmado" value="true">
                    <input type="hidden" name="criar" value="true">
                    <input type="submit" value="Inserir" class="botao_editar">
                </form>
                <br>
                <a href="imprensa.php">
                    <button class="botao_editar">Voltar Atrás</button>
                </a>
            </div>
        <?php elseif($form_4):?>
            <table class="caixa_geral">
                <tr>
                    <th>Imagem Livro</th>
                    <th>Titulo</th>
                    <th>Texto</th>
                    <th>Data de Atualização</th>
                </tr>
                <tr>
                    <td><img src="<?=$imprensa_especifico["imagem"];?>" class="imagens"></td>
                    <td><?=$imprensa_especifico["titulo"];?></td>
                    <td><?= substr($imprensa_especifico["texto"],0, 100);?>...</td>
                    <td><?=$imprensa_especifico["data_publicacao"];?></td>
                </tr>
            </table>

            <br><br>
            <div style="text-align:center;">
                <form>
                    <input type="hidden" name="apagar" value="true">
                    <button type="submit" name="apagar_confirmado" value="<?=$imprensa_especifico["id"];?>">Apagar</button>
                </form>
                <br>
                <a href="imprensa.php">
                    <button type="submit">Voltar Atrás</button>
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