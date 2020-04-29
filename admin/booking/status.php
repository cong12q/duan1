<?php
session_start();
require_once '../../config/utils.php';
checkAdminLoggedIn();
$id = isset($_GET['id']) ? $_GET['id'] : -1;
$getbookingEditQuery = "select * from booking where id = '$id'";
$bookingEdit = queryExecute($getbookingEditQuery, false);
$id1=$bookingEdit['reply_by'];
$room1=$bookingEdit['room_types'];
$getroom_typesQuery = "select * from room_types where id = '$room1'";
$room_types = queryExecute($getroom_typesQuery, false);
$getUsersQuery = "select * from users where id = '$id1'";
$Users = queryExecute($getUsersQuery, false);
?>
<!DOCTYPE html>
<html>
<head>
    <?php include_once '../_share/style.php'; ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <?php include_once '../_share/header.php'; ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include_once '../_share/sidebar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">xác nhận đặt phòng</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->

                    <form id="edit-booking-type-form" action="" method="post"
                          enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $usersEdit['id'] ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tên người khách hàng<span class="text-danger"></span></label>
                                    <input type="text" class="form-control" name="name" disabled
                                           value="<?php echo $bookingEdit['customer_name'] ?>">

                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                
                                    <input type="text" class="form-control" name="email" disabled
                                           value="<?php echo $bookingEdit['email'] ?>">
                                </div>
                                  
                                <div class="form-group">
                                    <label for=""> Nhân viên xác nhận phòng</label>
                                
                                    <input type="text" class="form-control" name="subject" disabled
                                           value="<?php echo $Users['name'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for=""> Phòng khách hàng đặt</label>
                                
                                    <input type="text" class="form-control" name="subject" disabled
                                           value="<?php echo $room_types['name'] ?>">
                                </div>
                                
                                  
                                    <div class="form-group">
                                    <label for="">Trả lời phản hồi của khách hàng (nhân viên)</label>
                                <br>
                                   <textarea disabled name="reply_message" id="" cols="60" rows="10" ><?php echo $bookingEdit['reply_message'] ?></textarea>
                                    </div>
                               
                            </div>
                    </form>

                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include_once '../_share/footer.php'; ?>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php include_once '../_share/script.php'; ?>
<script>
    $('#edit-booking-type-form').validate({
        rules: {
            name: {
                required: true,
                maxlength: 191
            },
        },
        messages: {
            name: {
                required: "Hãy nhập loại dịch vụ",
                maxlength: "Số lượng ký tự tối đa bằng 191 ký tự"
            },
        }
    });
</script>
</body>
</html>