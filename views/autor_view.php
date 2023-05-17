<!-- MAIN -->
<main class="container-fluid">
    <div class="row offset-md-1">
        <div class="col caixa_titulos" id="caixa_branca">
            <h1 class="mt-5 pt-2 offset-1">Autor</h1>
            <h3 class="offset-1">Sobre Mim</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="mt-5 pt-2 mt-md-0 pt-md-0">
                <div class="img_caixa d-flex justify-content-center mt-md-0">
                    <img id="img_autor" src="<?=$autor["img"];?>" alt="">
                </div>
                <div class="descricao_home mt-5 mx-auto mt-md-0">
                    <div class="paragrafo_home mt-3" id="texto_abreviado">
                        <p id="descricao_autor"><?=substr($autor["texto"],0, 3000);?>...</p>
                    </div>
                    <div class="paragrafo_home mt-3 d-none d-md-block" id="texto_completo">
                        <p id="descricao_autor"><?=$autor["texto"];?></p>
                    </div>
                    <div class="text-center d-md-none mt-4 pt-4">
                        <button class="btn-ver_mais" id="botao_vermais" onclick="abrirTextoAutor()">Ver Mais</button>
                    </div>
                    <div class="text-center mt-3 text-md-start mt-md-5">
                        <button class="btn-voltar_atras" onclick="history.back()">Voltar Atrás</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
