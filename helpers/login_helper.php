<?php
date_default_timezone_set("Europe/Lisbon");

// Função para criptografar a senha
function criptografarSenha($senha) {
    $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);
    return $senhaCriptografada;
}
// Função para fazer a autenticação de um usuário num sistema com senha criptografada.
function logarCifra($login, $senha){
    $usuario = selectSqlUnico("SELECT * FROM usuario WHERE login='$login'");
    if(!empty($usuario)){
        if(password_verify($senha, $usuario["senha"])){
            session_start();
            $_SESSION["usuario"] = $usuario;
            unset($_SESSION["usuario"]->senha);

            $id = $usuario["id"];
            $data_atual = date("H:i:s - d/m/Y");
            iduSql("INSERT INTO acessos (datas,id_usuario) VALUES ('$data_atual','$id')");
            //Data de acesso
            return true;
        }
        else{
            return false;
        }
    }
    else{
        return false;
    }
}
// Função para verificar se uma sessão de usuário foi iniciada e se 
//o usuário está autenticado antes de permitir que ele acesse 
//uma determinada página ou recurso do site.
function existeSessao(){
    session_start();
    if(empty($_SESSION["usuario"])){
        header("Location: index.php");
        exit();
    }
}
//Verificar se uma sessão de usuário foi iniciada e se o usuário 
//está autenticado antes de permitir que ele acesse a página de login 
function verificarSessao(){
    session_start();
    if(!empty($_SESSION["usuario"])){
        header("Location: _backoffice/models/logar_model.php");
        exit();
    }
}
?>