<?php
require_once("config/config.php");
require_once("config/base_dados.php");
require_once("funcoes.php");

$form = isset($_POST["login"]) && isset($_POST["senha"]);

if($form){
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    if(logarCifra($login, $senha)){
        header("Location: inicio.php");
        exit();
    }
    else{
        header("Location: index.php?login=erro");
        exit();
    }
}
else{
    header("Location: index.php");
    exit();
}
?>