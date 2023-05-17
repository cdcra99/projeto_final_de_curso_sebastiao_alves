<?php
require_once("config/config.php");
require_once("config/base_dados.php");
require_once("funcoes.php");

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

existeSessao();

$form_1 = isset($_GET["editar"]);
$form_2 = isset($_GET["imagem_desktop"]) && isset($_GET["imagem_mobile"]) && isset($_GET["titulo"]) && isset($_GET["descricao"]) && isset($_GET["link"]);
$form_3 = isset($_GET["inserir"]);
$form_4 = isset($_GET["apagar"]);

if($form_1){    
    $carrossel_especifico = selectSqlUnico("SELECT * FROM carrossel WHERE id='$_GET[editar]'");
}
elseif($form_3){
    if(isset($_GET["inserir_confirmado"])){
        $data = date("H:i:s - d/m/Y");
        iduSql("INSERT INTO carrossel (imagem_desktop, imagem_mobile, titulo, descricao, data_atualizacao, link) VALUES ('$_GET[imagem_desktop]','$_GET[imagem_mobile]', '$_GET[titulo]', '$_GET[descricao]', '$data','$_GET[link]')");
        header("Location: carrossel.php");
        exit();
    }
}  
elseif($form_4){
    $carrossel_especifico = selectSqlUnico("SELECT * FROM carrossel WHERE id='$_GET[apagar]'");
    if(isset($_GET["apagar_confirmado"])){
        iduSql("DELETE FROM carrossel WHERE id='$_GET[apagar_confirmado]'");
        header("Location: carrossel.php");
        exit();
    }
}
else{
    header("Location: carrossel.php");
    exit();
} 
if($form_2){
    $data = date("H:i:s - d/m/Y");
    iduSql("UPDATE carrossel SET imagem_desktop='$_GET[imagem_desktop]', imagem_mobile='$_GET[imagem_mobile]', titulo='$_GET[titulo]', descricao='$_GET[descricao]', data_atualizacao='$data', link='$_GET[link]' WHERE id='$_GET[editar]'");
    header("Location: carrossel.php");
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
            <h1 class="titulo_geral">Editar Carrossel <?=$_GET["editar"];?></h1>

            <div class="caixa_geral">
                <form>
                    <h3>Link da Imagem do Banner:</h3>
                    <input type="text" name="imagem_desktop" value="<?=$carrossel_especifico["imagem_desktop"];?>">
                    <a href="<?=$url_base;?>filemanager/tinyfilemanager.php" target="_blank">
                        <button type="button">Buscar Imagens</button>
                    </a>
                    <br><br>
                    <input type="text" name="imagem_mobile" value="<?=$carrossel_especifico["imagem_mobile"];?>">
                    <a href="<?=$url_base;?>filemanager/tinyfilemanager.php" target="_blank">
                        <button type="button">Buscar Imagens</button>
                    </a>
                    <br><br>
                    <h3>Titulo do Banner:</h3>
                    <input type="text" name="titulo" value="<?=$carrossel_especifico["titulo"];?>">
                    <br><br>
                    <h3>Descrição do Banner:</h3>
                    <textarea id="editor" name="descricao"><?=$carrossel_especifico["descricao"];?></textarea>
                    <br><br>
                    <h3></h3>
                    <h3>Link do Banner (Saber Mais):</h3>
                    <input type="text" name="link" value="<?=$carrossel_especifico["link"];?>">
                    <br><br>
                    <input type="hidden" name="editar" value="<?=$carrossel_especifico["id"]; ?>">
                    <input type="submit" value="Editar" class="botao_editar">
                    <a href="carrossel.php">
                        <button class="botao_editar">Voltar Atrás</button>
                    </a>
                </form>
            </div>
        <?php elseif($form_3):?>
            <h1 class="titulo_geral">Inserir Carrossel</h1>

            <div class="caixa_geral">
                <form>
                    <h3>Link da Imagem do Banner:</h3>
                    <input type="text" name="imagem_desktop" placeholder="Inserir Imagem Desktop">
                    <br><br>
                    <input type="text" name="imagem_mobile" placeholder="Inserir Imagem Mobile">
                    <br><br>
                    <h3>Titulo do Banner:</h3>
                    <input type="text" name="titulo" placeholder="Inserir o Titulo">
                    <br><br>
                    <h3>Descrição do Banner:</h3>
                    <textarea id="editor" name="descricao" placeholder="Inserir Descrição"></textarea>
                    <br><br>
                    <h3></h3>
                    <h3>Link do Banner (Saber Mais):</h3>
                    <input type="text" name="link" placeholder="Inserir Link">
                    <br><br>
                    <input type="hidden" name="inserir_confirmado" value="true">
                    <input type="hidden" name="inserir" value="true">
                    <input type="submit" value="Inserir" class="botao_editar">
                </form>
                <br>
                <a href="carrossel.php">
                    <button class="botao_editar">Voltar Atrás</button>
                </a>
            </div>
        <?php elseif($form_4):?>
            <table class="caixa_geral">
                <tr>
                    <th>Imagem Desktop</th>
                    <th>Imagem Mobile</th>
                    <th>Titulo</th>
                    <th>Texto</th>
                    <th>Data de Atualização</th>
                </tr>
                <tr>
                    <td><img src="<?=$carrossel_especifico["imagem_desktop"];?>" class="imagens"></td>
                    <td><img src="<?=$carrossel_especifico["imagem_mobile"];?>" class="imagens"></td>
                    <td><?=$carrossel_especifico["titulo"];?></td>
                    <td><?= substr($carrossel_especifico["descricao"],0, 100);?>...</td>
                    <td><?=$carrossel_especifico["data_atualizacao"];?></td>
                </tr>
            </table>

            <br><br>
            <div style="text-align:center;">
                <form>
                    <input type="hidden" name="apagar" value="true">
                    <button type="submit" name="apagar_confirmado" value="<?=$carrossel_especifico["id"];?>">Apagar</button>
                </form>
                <br>
                <a href="carrossel.php">
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