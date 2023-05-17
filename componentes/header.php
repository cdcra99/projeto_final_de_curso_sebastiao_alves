<?php

$livros = getLivrosSubMenu();

$carrossel = selectSql("SELECT * FROM carrossel");

?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=ucfirst($rotas[0]);?></title>
        <link rel="icon" href="https://img.wook.pt/images/senhora-do-amor-e-da-guerra-sebastiao-alves/MXwyNDA1OTk2MnwyMDExNTkzNXwxNTkwNDAxODc0MDAw/500x" type="image">
        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="<?=($rotas[0] == "livros") ? "../public/estilo.css" : "public/estilo.css"?>">
    </head>
    
    <body>
        <!--HEADER MOBILE-->
        <header class="container-fluid d-md-none">
            <!-- TITULO E NAVBAR -->
            <div class="row w-100 mt-5 pt-3 position-absolute z-3">
                <div class="col-12 nav-pai">
                    <nav class="navbar navbar-expand-lg" id="nav_mobile">
                        <h1 class="text-center mb-0 p-0" id="titulo_principal">Sebastião Alves</h1>
                        <button class="navbar-toggler border-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" onclick="botaoNav()">
                            <img src="<?=(($rotas[0] == "livros") ? "../" : "") . "public/imagensdesktop/menu.svg";?>" alt="navbar" id="botao_menu_mobile">
                        </button>
                    </nav>
                    <hr class="linha_separadora mt-0 mb-0 mx-auto">
                </div>
                <div class="col-12 p-0">
                    <nav class="collapse navbar-collapse bg-white mx-auto pt-4 pb-3 ps-5" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="navbarNav">
                            <li class="nav-item">
                                <a class="nav-link <?=($rotas[0] == "home") ? "active" : "";?>" aria-current="page" href="<?=$url_base."home";?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?=($rotas[0] == "autor") ? "active" : "";?>" href="<?=$url_base."autor";?>">Autor</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Livros
                                </a>
                                <ul class="dropdown-menu ps-2 pt-3 pb-4 me-5">
                                    <?php foreach($livros as $l): ?>
                                        <li><a class="dropdown-item" href="<?=$url_base."livros/".$l["id"];?>"><?=$l["titulo"]?></a></li>
                                    <?php endforeach;?>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?=($rotas[0] == "imprensa") ? "active" : "";?>" href="<?=$url_base."imprensa";?>">Imprensa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?=($rotas[0] == "contactos") ? "active" : "";?>" href="<?=$url_base."contactos";?>">Contactos</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- CARROSSEL MOBILE -->
            <div class="row">
                <div class="col p-0">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                        <div class="carousel-indicators d-flex justify-content-start">
                            <?php foreach($carrossel as $chave => $c): ?>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?=$chave?>" <?=($chave == 0) ? 'class="active" aria-current="true" aria-label="Slide 1"' : 'aria-label="Slide '.($chave+1).'"'?>></button>
                            <?php endforeach;?>
                        </div>
                        <div class="carousel-inner">
                            <?php $active = 0; foreach($carrossel as $chave => $c):?>
                                <div class="carousel-item <?=($chave == 0) ? "active" : ""?>">
                                    <img src="<?=(!empty(($rotas[1]))) ? "../".$c["imagem_mobile"] : $c["imagem_mobile"];?>" class="d-block w-100" alt="">
                                    <div class="carousel-caption text-start mb-5 pb-5 d-sm-col-12 ">
                                        <h6 class="mb-4">Novidade</h6>
                                        <h5><?=$c["titulo"];?></h5>
                                        <p class="col-12"><?=$c["descricao"];?></p>
                                        <a href="<?=$url_base."livros/".$c["id"];?>">
                                            <button class="btn px-3 py-1" type="submit">Saber Mais</button>
                                        </a>
                                    </div>
                                </div>
                                <?php $active = 1; ?>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <!-- HEADER DESKTOP -->
        <header class="container-fluid d-none d-md-block">     
            <!-- TITULO E NAVBAR -->
            <div class="row position-absolute text-center z-3 w-100">
                <div class="col-12">
                    <h1 class="mt-5" id="titulo_principal">Sebastião Alves</h1>
                    <hr class=" mb-0 mx-4" id="linha_separadora">
                    <div class="d-flex justify-content-center">
                        <nav class="navbar navbar-expand-md">
                            <div class="container-fluid">
                                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link <?=($rotas[0] == "home") ? "active" : "";?>" aria-current="page" href="<?=$url_base."home";?>">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?=($rotas[0] == "autor") ? "active" : "";?>" href="<?=$url_base."autor";?>">Autor</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link <?=($rotas[0] == "livros") ? "active" : "";?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="botao_livros">
                                                Livros
                                            </a>
                                            <ul class="dropdown-menu pt-3 px-3 pb-4 rounded-0">
                                                <?php foreach($livros as $l): ?>
                                                    <li><a class="dropdown-item" href="<?=$url_base."livros/".$l["id"];?>"><?=$l["titulo"];?></a></li>
                                                <?php endforeach;?>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?=($rotas[0] == "imprensa") ? "active" : "";?>" href="<?=$url_base."imprensa";?>">Imprensa</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?=($rotas[0] == "contactos") ? "active" : "";?>" href="<?=$url_base."contactos";?>">Contactos</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- CARROSSEL DESKTOP -->
            <div class="row">
                <div class="carrosel col-12 p-0 mx-0">
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                        <div class="carousel-inner">
                            <?php $active = 0; foreach($carrossel as $chave => $c):?>
                                <div class="carousel-item <?=($active == 0) ? "active" : ""?>">
                                    <img src="<?=(!empty(($rotas[1]))) ? "../" . $c["imagem_desktop"] : $c["imagem_desktop"];?>" class="d-block w-100" alt="">
                                    <div class="carousel-caption text-start mb-5 pb-5 d-sm-col-12">
                                        <h6 class="mb-4"><?=$c["categoria"];?></h6>
                                        <h5><?=$c["titulo"];?></h5>
                                        <p class="col-12"><?=$c["descricao"];?></p>
                                        <a href="<?=$url_base."livros/".$c["id"];?>">
                                            <button class="btn px-3 py-1" type="submit">Saber Mais</button>
                                        </a>
                                    </div>
                                </div>
                                <?php $active = 1; ?>
                            <?php endforeach;?>
                        </div>
                        <div class="carousel-indicators col d-flex justify-content-start mb-5 pb-5">
                            <?php foreach($carrossel as $chave => $c): ?>
                                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="<?=$chave?>" <?=($chave == 0) ? 'class="active" aria-current="true" aria-label="Slide 1"' : 'aria-label="Slide '.($chave+1).'"'?>></button>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </header>