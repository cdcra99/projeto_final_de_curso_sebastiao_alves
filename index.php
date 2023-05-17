<?php
//Importações
require_once("requisitos.php");

//Rotas
$rotas = $_SERVER["REQUEST_URI"];
$rotas = str_replace("/sebastiao_alves/", "",$rotas);
$rotas = explode("/", $rotas); 

if(str_contains($rotas[count($rotas)-1], "?")){
    $parametros = str_replace("?", "", $rotas[count($rotas)-1]);
    $parametros = explode("&", $parametros);

    foreach($parametros as $p){
        $p = explode("=", $p);
        $_GET[$p[0]] = $p[1];
        $rotas[count($rotas) - 1] = explode("?", $rotas[count($rotas) - 1])[0]; 
    }
}

switch($rotas[0]){
    case "":
    case "home":
        require_once("models/home_model.php");
        break;
    case "autor":
        require_once("models/autor_model.php");
        break;
    case "livros":
        require_once("models/livros_model.php");
        break;
    case "imprensa":
        require_once("models/imprensa_model.php");
        break;
    case "contactos":
        require_once("models/contactos_model.php");
        break;
    case "backoffice":
        require_once("backoffice/index.php");
        exit();
    default:
        require_once("models/404_model.php");
        break;
    }
?>