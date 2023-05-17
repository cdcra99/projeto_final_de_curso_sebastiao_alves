<main class="container-fluid">
    <div class="row offset-md-1">
        <div class="col caixa_titulos" id="caixa_branca">
            <h1 class="mt-5 pt-2 offset-1">Contactos</h1>
            <h3 class="offset-1">PODE CONTACTAR-ME ATRAVÉS DO E-MAIL OU TELEFONE</h3>
        </div>
    </div>
    <div class="row mt-5 mt-md-0">
        <div class="col d-flex flex-column align-items-center text-center">
            <div class="d-md-flex gap-md-5 align-items-center">
                <div class="linha_contactos">
                    <h6 class="t_campo mt-2 mt-md-4">Telefone</h6>
                    <p class="t_campo_descricao v"><?=$contactos["telefone"];?></p>
                </div>
                <div class="linha_contactos">
                    <h6 class="t_campo mt-2 mt-5">Morada</h6>
                    <p class="t_campo_descricao"><?=$contactos["morada"];?></p>
                </div>
                <div class="linha_contactos">
                    <h6 class="t_campo mt-2 mt-5 mt-md-4">Email</h6>
                    <p class="t_campo_descricao"><?=$contactos["email"];?></p>
                </div>
            </div>
            <div class="col-3 mx-auto mt-3">
                <hr id="linha_separadora_contactos">
            </div>
            <div>
                <h6 class="t_campo mt-2 mt-4">Horário</h6>
                <p class="t_campo_descricao"><?=$contactos["horario"];?></p>
            </div>
        </div>
    </div>
</main>