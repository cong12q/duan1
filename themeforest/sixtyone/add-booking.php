<?php
session_start();
include_once "../../config/utils.php";
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$checkin = trim($_POST['arrive']);
$checkout = trim($_POST['depart']);
$checkin_date = date("Y-m-d", strtotime($checkin));
$checkout_date = date("Y-m-d", strtotime($checkout));
$room_select = trim($_POST['room_select']);
$the_message=trim($_POST['the_message']);
$reply_users=$_SESSION[AUTH]['id'];
// validate bằng php
$nameerr = "";
$emailerr = "";
// check name
if(strlen($name) ==0){
    $nameerr = "Không được để trống";
}
if(strlen($email) ==0){
    $emailerr = "không được để trống";
}

// check email


// upload file ảnh

$insertbookingQuery = "insert into booking 
                          ( customer_name, email , checkin_date, checkout_date, room_types, reply_users , message)
                    values 
                          ('$name','$email','$checkin_date','$checkout_date','$room_select','$reply_users','$the_message')";
                          
queryExecute($insertbookingQuery, false);
dd($insertbookingQuery);
header("location: " . INDEX_URL . "booking.php");
die;