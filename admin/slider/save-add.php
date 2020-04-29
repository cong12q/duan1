<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
$slide_text = trim($_POST['slide_text']);
$slide_content = trim($_POST['slide_content']);
$readmore_url = trim($_POST['readmore_url']);
$image = $_FILES['image'];
// validate bằng php
$slide_texterr = "";
$contenterr = "";
// check name
if(strlen($title) ==0){
    $titleerr = "Không được để trống";
}
if(strlen($content) ==0){
    $contenterr = "không được để trống";
}

// check email


// upload file ảnh
$filename = "";
if($image['size'] > 0){
    $filename = uniqid() . '-' . $image['name'];
    move_uploaded_file($image['tmp_name'], "../../public/images/" . $filename);
    $filename = "public/images/" . $filename;
}
$insertsildersQuery = "insert into sliders 
                          ( img_url, slide_text , slide_content, readmore_url)
                    values 
                          ('$filename','$slide_text','$slide_content','$readmore_url')";
                          
queryExecute($insertsildersQuery, false);
header("location: " . ADMIN_URL . "slider");
die;