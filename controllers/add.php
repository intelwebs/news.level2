<?php

if(!empty($_POST)){
    $data = [];
    if(!empty($_POST['title']) && !empty($_POST['content'])){
        $data['date'] = $_POST['date'];
        $data['title'] = $_POST['title'];
        $data['content'] = $_POST['content'];
    }
    news_insert($data);
    header('Location: /');
    die;
}