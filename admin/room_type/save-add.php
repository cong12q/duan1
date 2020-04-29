<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
$name = trim($_POST['name']);
$price = trim($_POST['price']);
$maximum_guest = trim($_POST['maximum_guest']);
$about = trim($_POST['about']);
$feature_image = $_FILES['feature_image'];
// validate bằng php
$nameerr = "";
$priceerr = "";
// check name
if(strlen($title) ==0){
    $titleerr = "Yêu cầu nhập tiêu đề";
}
if(strlen($content) ==0){
    $contenterr = "Yêu cầu nhập content";
}

// check email


// upload file ảnh
$filename = "";
if($feature_image['size'] > 0){
    $filename = uniqid() . '-' . $feature_image['name'];
    move_uploaded_file($feature_image['tmp_name'], "../../public/images/" . $filename);
    $filename = "public/images/" . $filename;
}
$insertroom_typesQuery = "insert into room_types 
                          ( name, price , maximum_guest, feature_image)
                    values 
                          ('$name','$price','$maximum_guest','$filename')";
                          
queryExecute($insertroom_typesQuery, false);
header("location: " . ADMIN_URL . "room_type");
die;