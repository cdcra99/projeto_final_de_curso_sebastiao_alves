<?php
$pagina_atual = (isset($_GET["pagina_atual"])) ? intval($_GET["pagina_atual"]) : 1;
if($pagina_atual <= 0){
    $pagina_atual = 1;
} 

$total_elementos = selectSqlUnico("SELECT count(*) AS total FROM imprensa")["total"];
$elementos_por_pagina = 2;
$total_paginas = ceil($total_elementos / $elementos_por_pagina);
$total_a_saltar = (($pagina_atual-1) * $elementos_por_pagina);

$paginacao_imprensa = selectSql("SELECT * FROM imprensa LIMIT $elementos_por_pagina OFFSET $total_a_saltar");

require_once("componentes/header.php");

require_once("views/imprensa_view.php");

require_once("componentes/footer.php");
?>