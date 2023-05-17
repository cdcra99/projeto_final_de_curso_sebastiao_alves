<main class="container-fluid">
    <div class="row offset-md-1">
        <div class="col caixa_titulos" id="caixa_branca">
            <h1 class="mt-5 pt-2 offset-1">Livros</h1>
            <h3 class="offset-1"><?=$livro_especifico["titulo"];?></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="d-md-flex d-md-row mt-5 pt-2 mt-md-0 pt-md-0 offset-md-1">
                <div class="img_caixa d-flex justify-content-center">
                    <img id="img_livros" src="../<?=$livro_especifico["img_livro"];?>" alt="">
                </div>
                <div class="descricao_home mt-5 mx-auto mt-md-4 ps-md-5 ms-md-3 pe-md-4 me-lg-5">
                    <div class="paragrafo_home mt-3 me-lg-5 " id="descricao_livros">
                        <p><?=$livro_especifico["descricao"];?></p>
                    </div>
                    <div class="text-center mt-3 text-md-end d-none d-md-block mt-md-4 pt-md-3">
                        <a href="#">
                            <button class="btn-voltar_atras" onclick="history.back()">Voltar Atrás</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>