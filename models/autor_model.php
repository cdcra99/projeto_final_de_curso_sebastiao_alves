<?php
$autor = selectSqlUnico("SELECT * FROM autor");

require_once("componentes/header.php");

require_once("views/autor_view.php");

require_once("componentes/footer.php");
?>