<?php
session_start();
require_once '../config/utils.php';
// lấy thông tin từ form gửi lên
$id = trim($_POST['id']);
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$cfpassword = trim($_POST['cfpassword']);
$phone_number = trim($_POST['phone_number']);
$avatar = $_FILES['avatar'];

$getUserByIdQuery = "select * from users where id = $id";
$user = queryExecute($getUserByIdQuery, false);
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
// check email đã tồn tại hay chưa
$checkEmailQuery = "select * from users where email = '$email' and id != $id";
$users = queryExecute($checkEmailQuery, true);
if($emailerr == "" && count($users) > 0){
    $emailerr = "Email đã tồn tại, vui lòng sử dụng email khác";
}

if($nameerr . $emailerr != "" ){
    header('location: ' . MEMBER_URL . "edit-form.php?id=$id&nameerr=$nameerr&emailerr=$emailerr");
    die;
}

// upload file
$filename = $user['avatar'];
if($avatar['size'] > 0){
    $filename = uniqid() . '-' . $avatar['name'];
    move_uploaded_file($avatar['tmp_name'], "../public/images/" . $filename);
    $filename = "public/images/" . $filename;
}

$updateUserQuery = "update users 
                    set
                          name = '$name', 
                          email = '$email', 
                          phone_number = '$phone_number', 
                          avatar = '$filename'
                    where id = $id";
queryExecute($updateUserQuery, false);
header("location: " . MEMBER_URL . "home.php");
die;