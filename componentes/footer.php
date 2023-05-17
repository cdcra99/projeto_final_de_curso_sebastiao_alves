<?php
$social = selectSqlUnico("SELECT * FROM redessociais");
$contactos = selectSqlUnico("SELECT * FROM contactos"); 
?>
<!-- FOOTER MOBILE -->
        <footer class="container-fluid d-md-none">
            <div class="row mt-5">
                <div class="col">
                    <hr class="linha_footer m-auto">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col d-flex flex-column align-items-center text-center">
                    <h5 class="rodape">Contactos</h5>
                    <h6 class="t_campo mt-2">Morada</h6>
                    <p class="t_campo_descricao"><?=$contactos["morada"];?></p>
                    <h6 class="t_campo mt-2">Telefone</h6>
                    <p class="t_campo_descricao"><?=$contactos["telefone"];?></p>
                    <h6 class="t_campo mt-2">Email</h6>
                    <p class="t_campo_descricao"><?=$contactos["email"];?></p>
                    <h5 class="rodape mt-5 pt-2">Siga-me Nas Redes Sociais</h5>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col d-flex justify-content-center gap-4">
                    <a href="<?=$social["link_insta"];?>" target="_blank">
                        <img src="<?=($rotas[0] == "livros") ? "../".$social["img_insta"] : $social["img_insta"];?>" alt="">
                    </a>
                    <a href="<?=$social["link_facebook"];?>" target="_blank">
                        <img src="<?=($rotas[0] == "livros") ? "../".$social["img_facebook"] : $social["img_facebook"];?>" alt="">
                    </a>
                    <a href="<?=$social["link_linkedin"];?>" target="_blank">
                        <img src="<?=($rotas[0] == "livros") ? "../".$social["img_linkedin"] : $social["img_linkedin"];?>" alt="">
                    </a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col d-flex justify-content-center gap-5">
                    <img src="<?=(($rotas[0] == "livros") ? "../" : "") . "public/imagensdesktop/livroreclamacoes.svg";?>" alt="livro_reclamacoes">
                    <a href="https://sebastiaoalves.com/ralc" target="_blanck">
                        <img src="<?=(($rotas[0] == "livros") ? "../" : "") . "public/imagensdesktop/ralc.svg";?>" alt="ralc">
                    </a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <p class="t_campo_descricao text-center">
                        Política de Cookies.<br>
                        Copyright &copy; 2021 Grupo MediaMaster.<br> Todos os direitos reservados.
                    </p>
                </div>
            </div>
        </footer>

        <!-- FOOTER DESKTOP -->
        <footer class="container-fluid d-none d-md-block">
            <!-- NAVBAR -->
            <div class="row mt-5 pt-4">
                <div class="col">
                    <hr class="linha_footer mx-4 mt-1 mb-0">
                    <div class="d-flex justify-content-center">
                        <nav class="navbar navbar-expand-md">
                            <div class="container-fluid ">
                                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link <?=($rotas[0] == "home") ? "active" : "";?>" aria-current="page" href="home">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?=($rotas[0] == "autor") ? "active" : "";?>" href="autor">Autor</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link <?=($rotas[0] == "livros") ? "active" : "";?>" href="#" onclick="aguarde()">
                                                Livros
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?=($rotas[0] == "imprensa") ? "active" : "";?>" href="imprensa">Imprensa</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?=($rotas[0] == "contactos") ? "active" : "";?>" href="contactos">Contactos</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <hr class="linha_footer mx-4 mt-1 mb-0">
                </div>
            </div>

            <!-- CONTACTOS -->
            <div class="row d-flex justify-content-center mx-5 mt-5">
                <div class="col-6 rodape">
                    <h3>Contactos</h3>
                </div>
                <div class="col-6 rodape text-center">
                    <h3>Siga-me nas Redes Sociais</h3>
                </div>
            </div>
            
            <div class="row mx-5">
                <div class="col-md-2 t_campo">
                    <h4>Morada</h4>
                    <p><?=$contactos["morada"];?></p>
                </div>
                <div class="col-md-2 t_campo">
                    <h4>Contactos</h4>
                    <p><?=$contactos["telefone"];?></p>
                </div>
                <div class="col-md-2 t_campo">
                    <h4>Email</h4>
                    <p><?=$contactos["email"];?></p>
                </div>
            
                <div class="col-6 d-flex justify-content-center gap-3 mt-2">
                    <a href="<?=$social["link_insta"];?>" target="_blank">
                        <img src="<?=($rotas[0] == "livros") ? "../".$social["img_insta"] : $social["img_insta"];?>" alt="insta">
                    </a>
                    <a href="<?=$social["link_facebook"];?>" target="_blank">
                        <img src="<?=($rotas[0] == "livros") ? "../".$social["img_facebook"] : $social["img_facebook"];?>" alt="iface">
                    </a>
                    <a href="<?=$social["link_linkedin"];?>" target="_blank">
                        <img src="<?=($rotas[0] == "livros") ? "../".$social["img_linkedin"] : $social["img_linkedin"];?>" alt="linkedin">
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-5 offset-1 mt-5 p-3">
                    <img src="<?=(($rotas[0] == "livros") ? "../" : "") . "public/imagensdesktop/livroreclamacoes.svg";?>" alt="reclamaçoes">
                    <a href="https://sebastiaoalves.com/ralc" target="_black;">
                        <img class="ms-5" src="<?=(($rotas[0] == "livros") ? "../" : "") . "public/imagensdesktop/ralc.svg";?>" alt="resoluçao_alternativa">
                    </a>
                </div>

                <div class="col-6 mt-5 p-3 text-center" id="cookies">
                    <p class="mt-2">
                        Política de Cookies.<br>
                        Copyright &copy; 2021 Grupo MediaMaster. Todos os direitos reservados.
                    </p>
                </div>
            </div>           
        </footer>
        
        <script src="<?=$url_base;?>public/main.js"></script>
        <script>scrollCaixa()</script>
        <script>var url_base= <?= json_encode($url_base, JSON_UNESCAPED_UNICODE); ?>;</script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>    
    </body>
</html>