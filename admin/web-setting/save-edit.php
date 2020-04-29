<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
$Phone_number = trim($_POST['Phone_number']);
$address = trim($_POST['address']);
$map_url = trim($_POST['Map_url']);
$email = trim($_POST['email']);
$introduce_content = trim($_POST['introduce_content']);
$intro_room = trim($_POST['intro_room']);
$facebook_url = trim($_POST['facebook_url']);
$google_url = trim($_POST['google_url']);
$twitter_url = trim($_POST['twitter_url']);
$background_img = $_FILES['background_img'];
$logo = $_FILES['logo'];

// validate bằng php
$getwebsByIdQuery = "select * from web_settings ";
$webs = queryExecute($getwebsByIdQuery, false);


// upload file ảnh
$filename = $webs['background_img'];
if($background_img['size'] > 0){
    $filename = uniqid() . '-' . $background_img['name'];
    move_uploaded_file($background_img['tmp_name'], "../../public/images/" . $filename);
    $filename = "public/images/" . $filename;
}
$logoname = $webs['logo'];
if($logo['size'] > 0){
    $logoname = uniqid() . '-' . $logo['name'];
    move_uploaded_file($logo['tmp_name'], "../../public/images/" . $logoname);
    $logoname = "public/images/" . $logoname;
}
$updatewebQuery = "update web_settings set
         phone_number='$Phone_number', 
         logo='$logoname',
         address='$address', 
         map_url='$map_url',
          background_img='$filename', 
          email='$email', 
          introduce_content='$introduce_content', 
          intro_room='$intro_room', 
          facebook_url='$facebook_url',
           google_url='$google_url', 
           twitter_url ='$twitter_url' 
             where id=3       ";
                          
queryExecute($updatewebQuery, false);
header("location: " . ADMIN_URL . "web-setting");
die;