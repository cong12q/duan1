<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
$name = trim($_POST['name']);
// validate bằng php
$nameerr = "";
// check name
if(strlen($name) ==0){
    $nameerr = "Yêu cầu nhập tên dịch vụ";
}

$insertamenitlesQuery = "insert into amenitles 
                          ( name)
                    values 
                          ('$name')";
                          
queryExecute($insertamenitlesQuery, false);
header("location: " . ADMIN_URL . "amenitles");
die;