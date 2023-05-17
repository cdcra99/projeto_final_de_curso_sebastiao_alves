<?php
$contactos = selectSqlUnico("SELECT * FROM contactos"); 

require_once("componentes/header.php");

require_once("views/contactos_view.php");

require_once("componentes/footer.php");
?>