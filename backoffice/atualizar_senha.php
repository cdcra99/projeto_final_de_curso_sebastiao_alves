<?php
require_once("config/config.php");
require_once("config/base_dados.php");
require_once("funcoes.php");

existeSessao();

$login = $_SESSION["usuario"]["login"];
$id = $_SESSION["usuario"]["id"];
$senha_atual = $_POST["senha_atual"];
$nova_senha = $_POST["nova_senha"];
$senha_confirmacao = $_POST["senha_confirmacao"];

$form = isset($senha_atual) && isset($nova_senha) && isset($senha_confirmacao);


$usuario = selectSqlUnico("SELECT * FROM usuario WHERE id='$id'");


if($form){
    if(password_verify($senha_atual, $usuario["senha"])){
        if($nova_senha == $senha_confirmacao){
            $nova_senha_hash = password_hash($nova_senha, PASSWORD_DEFAULT);
            iduSql("UPDATE usuario SET senha='$nova_senha_hash' WHERE id='$id'");
            header("Location: configuracoes.php");
            exit();
        }
        else{
            header("Location: configuracoes.php?confirmacao_incorreta=incorreta");
            exit();
        }
    }
    else{
        header("Location: configuracoes.php?login_incorreto=incorreto");
        exit();
    }
}
else{
    header("Location: configuracoes.php");
    exit();
}
?>