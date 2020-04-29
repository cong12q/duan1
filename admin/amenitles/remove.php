<?php
/**
 * Created by PhpStorm.
 * User: ginv2
 * Date: 2/17/20
 * Time: 18:41
 * 1. lấy id xuống
 * 2. kiểm tra xem có quyền để xóa tài khoản với id đc nhận hay không
 * 4. thực hiện câu lệnh xóa với csdl
 * 5. điều hướng về danh sách
 *
 */
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
$id = isset($_GET['id']) ? $_GET['id'] : -1;

$getremoveroom_typesQuery = "select * from room_types where id = $id";
$removeroom_types = queryExecute($getremoveroom_typesQuery, false);
$removeroom_typesQuery = "delete from room_types where id = $id";
queryExecute($removeroom_typesQuery, false);
header("location: " . ADMIN_URL . "room_type?msg=Xóa thành công");
die;