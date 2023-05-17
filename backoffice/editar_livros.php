<?php
require_once("config/config.php");
require_once("config/base_dados.php");
require_once("funcoes.php");

existeSessao();

$form_1 = isset($_GET["editar"]);
$form_2 = isset($_GET["img_livro"]) && isset($_GET["titulo"]) && isset($_GET["descricao"]);
$form_3 = isset($_GET["criar"]);
$form_4 = isset($_GET["apagar"]);

if($form_1){    
    $livro_especifico = selectSqlUnico("SELECT * FROM livros WHERE id='$_GET[editar]'");
}
elseif($form_3){
    if(isset($_GET["criar_confirmado"])){
        $data = date("H:i:s - d/m/Y");
        iduSql("INSERT INTO livros (img_livro, titulo, descricao, data_atualizacao) VALUES ('$_GET[img_livro]','$_GET[titulo]', '$_GET[descricao]', '$data')");
        header("Location: livros.php");
        exit();
    }
}  
elseif($form_4){
    $livro_especifico = selectSqlUnico("SELECT * FROM livros WHERE id='$_GET[apagar]'");
    if(isset($_GET["apagar_confirmado"])){
        iduSql("DELETE FROM livros WHERE id='$_GET[apagar_confirmado]'");
        header("Location: livros.php");
        exit();
    }
}
else{
    header("Location: livros.php");
    exit();
} 
if($form_2){
    $data = date("H:i:s - d/m/Y");
    iduSql("UPDATE livros SET img_livro='$_GET[img_livro]', titulo='$_GET[titulo]', descricao='$_GET[descricao]', data_atualizacao='$data' WHERE id='$_GET[editar]'");
    header("Location: livros.php");
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
            <h1 class="titulo_geral">Editar Livro <?=$_GET["editar"];?></h1>

            <div class="caixa_geral">
                <form>
                    <h3>Link da Imagem da Capa do Livro:</h3>
                    <input type="text" name="img_livro" value="<?=$livro_especifico["img_livro"];?>">
                    <a href="<?=$url_base;?>filemanager/tinyfilemanager.php" target="_blank">
                        <button type="button">Buscar Imagens</button>
                    </a>
                    <br><br>
                    <h3>Titulo do Livro:</h3>
                    <input type="text" name="titulo" value="<?=$livro_especifico["titulo"];?>">
                    <br><br>
                    <h3>Descrição do Livro:</h3>
                    <textarea id="editor" name="descricao"><?=$livro_especifico["descricao"];?></textarea>
                    <br><br>
                    <input type="hidden" name="editar" value="<?=$livro_especifico["id"]; ?>">
                    <input type="submit" value="Editar" class="botao_editar">
                    <a href="carrossel.php">
                        <button class="botao_editar">Voltar Atrás</button>
                    </a>
                </form>
            </div>
        <?php elseif($form_3):?>
            <h1 class="titulo_geral">Criar Novo Livro</h1>

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
                <a href="livros.php">
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
                    <td><img src="<?=$livro_especifico["img_livro"];?>" class="imagens"></td>
                    <td><?=$livro_especifico["titulo"];?></td>
                    <td><?= substr($livro_especifico["descricao"],0, 100);?>...</td>
                    <td><?=$livro_especifico["data_atualizacao"];?></td>
                </tr>
            </table>

            <br><br>
            <div style="text-align:center;">
                <form>
                    <input type="hidden" name="apagar" value="true">
                    <button type="submit" name="apagar_confirmado" value="<?=$livro_especifico["id"];?>">Apagar</button>
                </form>
                <br>
                <a href="livros.php">
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