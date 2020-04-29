<?php
    $keyword = $_GET['keyword'];
    $connect = new PDO("mysql:host=127.0.0.1;dbname=angular_service;charset=utf8", "root", "123456");
    $sqlQuery = "select b.id, b.name, b.feature_image, b.star from books b where name like '%$keyword%'";
    // var_dump($sqlQuery);die;
    $stmt = $connect->prepare($sqlQuery);
    $stmt->execute();
    $data = $stmt->fetchAll();

    echo json_encode($data);

?>