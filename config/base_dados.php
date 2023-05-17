<?php
$pdo = new PDO("mysql:dbname=".$base_dados["dbname"].";host=".$base_dados["host"], 
$base_dados["user"], $base_dados["password"]);

function selectSql($sql){
    global $pdo;
    $query = $pdo->query($sql);
    return $query->fetchAll((PDO::FETCH_ASSOC));
}
function selectSqlUnico($sql){
    global $pdo;
    $query = $pdo->query($sql);
    return $query->fetch(PDO::FETCH_ASSOC);
}
function iduSql($sql){
    global $pdo;
    $pdo->query($sql);
}
?>