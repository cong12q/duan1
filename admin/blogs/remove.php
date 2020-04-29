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

$getremoveBlogsQuery = "select * from blogs where id = $id";
$removeBlogs = queryExecute($getremoveBlogsQuery, false);
$removeBlogsQuery = "delete from Blogs where id = $id";
queryExecute($removeBlogsQuery, false);
header("location: " . ADMIN_URL . "blogs?msg=Xóa tài khoản thành công");
die;