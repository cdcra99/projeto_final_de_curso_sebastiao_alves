 <!-- MAIN -->
 <main class="container-fluid">
    <!-- CAIXA MOBILE-->
    <div class="row">
        <div class="col-12 col-md-11 offset-md-1 p-0">
            <div class="d-md-flex d-md-row mt-5 pt-4" id="caixa">
                <div class="img_caixa d-flex justify-content-center">
                    <img class="fotos_home" src="<?=$home["img_home"];?>" alt="">
                </div>
                <div class="descricao_home mt-5 mx-auto ms-md-4">
                    <h1 class="titulo_home">Bem-vindo ao meu Website</h1>
                    <div class="paragrafo_home mt-3">
                        <p>
                            O autor de "Senhora do Amor e da Guerra"  nasceu em Lisboa, em 1954. Formou-se em engenharia química pela Universidade de Birmingham, Reino Unido e é professor no Instituto Superior Técnico.<br>
                            Até aos 45 anos, escreveu exclusivamente poesia, mas começou a sentir que se repetia e decidiu mais uma vez tentar escrever ficção, com um afinco que nunca pusera em anteriores tentativas. 
                            E descobriu que era capaz de escrever diálogos e congeminar enredos.
                            Publicou então sucessivamente um livro de contos, “O caracol estrábico” (2011), e os romances “O colecionador de amnésias” (2014), “O velho que pensava que fugia” (2017), o romance 
                            histórico “Senhora do amor e da guerra” (2020) e o romance "O homem certo é difícil de encontrar" (2021).
                        </p>
                    </div>
                    <div class="text-center text-md-end pb-5 mt-4 pe-md-5 pt-md-2">
                        <a href="autor">
                            <button class="btn-saber_mais">Saber Mais</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ULTIMOS LIVROS -->
    <div class="row">
        <div class="descricao_home col-12 mt-5 pt-5 mx-auto pt-md-0" id="descricao_home_desk">
            <h1 class="titulo_home">Últimos Livros</h1>
            <div class="paragrafo_home mt-3"><?=$home["texto"];?></div>
        </div>
    </div>
    <!-- CARDS -->
    <div class="row mt-5 pt-3 d-flex justify-content-center gap-5">
        <?php foreach($destaques as $d): ?>
            <div class="card rounded-0 border-0 col-12 col-md-6 col-lg-4" style="width: 20rem;">
                <div class="d-flex justify-content-center">
                    <img src="<?=getLivroID($d["id_livro"])["img_livro"];?>" class="card-img-top w-100 rounded-0" alt="Senhora_destaque">
                </div>
                <div class="card-body">
                    <h5 class="card-title ms-2 mt-3"><?=getLivroID($d["id_livro"])["titulo"];?></h5>
                    <h5 class="card-categoria ms-2 "><?=getLivroID($d["id_livro"])["categoria"];?></h5>
                    <p class="card-text ms-2"><?=getLivroID($d["id_livro"])["sinopse"];?></p>
                    <a href="<?=$url_base."livros/".$d["id_livro"];?>">
                        <button class="btn offset-7" type="submit">Saber Mais</button>
                    </a>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</main>