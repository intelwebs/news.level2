<?php

require_once __DIR__.'/../functions/sql.php';

function news_getAll(){

    $sql = 'SELECT * FROM news ORDER BY date DESC';
    return sql_query($sql);
}

function news_getOne(){
    $id = $_GET['id'];
    $sql = "SELECT date, title, content FROM news WHERE id = '$id'";
    return sql_query($sql);
}

function news_insert($data){
    $sql = "INSERT INTO news
            (date, title, content)
            VALUES
            ('".$data['date']."','".$data['title']."', '".$data['content']."')
            ";
    sql_exec($sql);
}