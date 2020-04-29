<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
$id = trim($_POST['id']);
$name = trim($_POST['name']);
$price = trim($_POST['price']);
$maximum_guest = trim($_POST['maximum_guest']);
$feature_image = $_FILES['feature_image'];
// validate bằng php
$nameerr = "";
$contenterr = "";
// check name
if(strlen($name) ==0){
    $nameerr = "Yêu cầu nhập tên";
}
if(strlen($price) ==0){
    $priceerr = "Yêu cầu nhập giá";
}

// check email


// upload file ảnh
$filename = "";
if($feature_image['size'] > 0){
    $filename = uniqid() . '-' . $feature_image['name'];
    move_uploaded_file($feature_image['tmp_name'], "../../public/images/" . $filename);
    $filename = "public/images/" . $filename;
}
$updateroom_typesQuery = "update room_types
                         set
                        name ='$name',
                        price='$price',
                        maximum_guest='$maximum_guest',
                        feature_image='$filename'
                        where id='$id' ";
queryExecute($updateroom_typesQuery, false);
header("location: " . ADMIN_URL . "room_type");
die;