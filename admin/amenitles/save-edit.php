<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
$id = trim($_POST['id']);
$name = trim($_POST['name']);
// validate bằng php
$nameerr = "";
// check name
if(strlen($name) ==0){
    $nameerr = "Yêu cầu nhập tên";
}

$updateamenitlesQuery = "update amenitles
                         set
                        name ='$name',
                        where id='$id' ";
queryExecute($updateamenitlesQuery, false);
header("location: " . ADMIN_URL . "room_type");
die;