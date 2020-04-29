<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$subject=trim($_POST['subject']);
$message=trim($_POST['message']);
// validate bằng php
$nameerr = "";
$emailerr = "";
// check name
if(strlen($name) < 2 || strlen($name) > 191){
    $nameerr = "Yêu cầu nhập tên tài khoản nằm trong khoảng 2-191 ký tự";
}

// check email
if(strlen($email) == 0){
    $emailerr = "Yêu cầu nhập email!";
}
if ($emailerr == "" && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailerr = "Không đúng định dạng email";
}



$insertUserQuery = "insert into contact 
                          (id, name, phone, email, subject, messages, status, reply_by, reply_for)
                    values 
                          ('','$name','','$email','$subject','$message','','','')";
queryExecute($insertUserQuery, false);
header("location: " . ADMIN_URL . "users");
die;