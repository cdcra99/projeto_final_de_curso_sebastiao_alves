<main class="container-fluid">
    <div class="row offset-md-1">
        <div class="col caixa_titulos" id="caixa_branca">
            <h1 class="mt-5 pt-2 offset-1">Imprensa</h1>
            <h3 class="offset-1">Últimas Notícias</h3>
        </div>
    </div>
    <?php foreach($paginacao_imprensa as $chave => $i):?>
        <div class="row">
            <div class="col-12 p-0 mt-5 pt-2">
                <div id="caixa_imprensa" class="<?=($chave % 2 == 0) ? "imprensa_box_shadow" : "";?>">
                    <div class="d-md-flex justify-content-center">
                        <div class="titulo_caixa_imprensa mx-4">
                            <h1 class="titulo_imprensa"><?=$i["titulo"];?></h1>
                            <hr class="mt-0" id="linha_separadora_imprensa">
                            <h3 class="data_publicacao"><?=$i["data_publicacao"];?></h3>
                        </div>
                    </div>
                    <div class="img_caixa d-flex justify-content-center mt-5 pb-5 mt-md-0">
                        <img class="img_imprensa" src="<?=$i["imagem"];?>" alt="">
                    </div>
                    <div class="descricao_home mx-auto">
                    <div class="paragrafo_home" id="paragrafo_imprensa">
                    <p><?=$i["texto"];?></p>
                </div>
            </div>
        </div>
    <?php endforeach;?>
        <!-- PAGINAÇÃO -->
        <div class="row mt-5 pb-4">
            <div class="col d-flex justify-content-center">
                <div class="paginacao">
                    <form>
                        <button id="seta_esquerda" name="pagina_atual" value="<?=($pagina_atual > 1) ? ($pagina_atual - 1) : 1;?>">
                            <img src="public/imagensdesktop/setaesquerda1.svg" alt="seta_esquerda">
                        </button>
                        <?php for($i=1; $i<=$total_paginas; $i++):?>
                            <button class="num_imprensa" style="<?=($i== $pagina_atual) ? "color: rgb(180, 125, 51);" : "";?>" name="pagina_atual" value="<?=$i;?>"><?=$i;?></button>
                        <?php endfor;?>
                        <button id="seta_direita" name="pagina_atual" value="<?=($pagina_atual < $total_paginas) ? ($pagina_atual + 1) : $total_paginas;?>">
                            <img src="public/imagensdesktop/setadireita1.svg" alt="seta_esquerda">
                        </button>
                    </form>
                </div>  
            </div>
        </div>
    </div>
</main>