<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
$id = trim($_POST['id']);
$slide_text = trim($_POST['slide_text']);
$slide_content = trim($_POST['slide_content']);
$readmore_url = trim($_POST['readmore_url']);
$image = $_FILES['image'];
// validate bằng php
$slide_texterr = "";
$contenterr = "";
// check name


// check email


// upload file ảnh
$filename = "";
if($image['size'] > 0){
    $filename = uniqid() . '-' . $image['name'];
    move_uploaded_file($image['tmp_name'], "../../public/images/" . $filename);
    $filename = "public/images/" . $filename;
}

$updatesildersQuery = "update  sliders set
                           img_url = '$filename',
                           slide_text = '$slide_text' ,
                            slide_content = '$slide_content', 
                            readmore_url = '$readmore_url'
                        where id = '$id'";
                          
queryExecute($updatesildersQuery, false);
header("location: " . ADMIN_URL . "slider");
die;