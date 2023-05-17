<?php
$home = selectSqlUnico("SELECT * FROM home");

$destaques = selectSql("SELECT * FROM destaques ORDER BY id");

$livro_especifico = getlivroID($rotas[1]);

require_once("componentes/header.php");

require_once("views/home_view.php");

require_once("componentes/footer.php");
?>