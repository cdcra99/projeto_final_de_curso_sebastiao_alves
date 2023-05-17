<?php
function getlivroID($id){
    return selectSqlUnico("SELECT * FROM livros WHERE id='$id'");
}
function getLivrosSubMenu(){
    return selectSql("SELECT id, titulo FROM livros");
}
?>