<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
$title = trim($_POST['title']);
$content = trim($_POST['content']);
$image_url = trim($_POST['image_url']);
$image = $_FILES['image'];
// validate bằng php
$titleerr = "";
$contenterr = "";
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
if($image['size'] > 0){
    $filename = uniqid() . '-' . $image['name'];
    move_uploaded_file($image['tmp_name'], "../../public/images/" . $filename);
    $filename = "public/images/" . $filename;
}
$insertblogsQuery = "insert into blogs 
                          ( title, content , image_url, image)
                    values 
                          ('$title','$content','$image_url','$filename')";
                          
queryExecute($insertblogsQuery, false);
header("location: " . ADMIN_URL . "blogs");
die;