<?php
session_start();
require_once '../../config/utils.php';
checkAdminLoggedIn();
$id = isset($_GET['id']) ? $_GET['id'] : -1;
$getcontactsQuery = "select * from contacts where id = '$id'";
$contacts = queryExecute($getcontactsQuery, false);
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
                        <h1 class="m-0 text-dark">Trả lời phản hồi khách hàng</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->

                    
    <form action="send-email.php" method="post">
    <div>
            <label for="">ID</label>
            <input type="text" name="id" id="id" class="form-control" value="<?php echo $contacts['id']   ?>" >
        </div>
        <div>
            <label for="">
                Email nhận
            </label>
            <input type="text" class="form-control" value="<?php echo $contacts['email']   ?>" name="recceiver">
        </div>
        <div>
            <label for="">Tiêu đề</label>
            <input type="text" name="subject" class="form-control" value="Phản hồi (<?php echo $contacts['subject'] ?>)">
        </div>
        <div>
            <label for="">Nội dung</label>
            <textarea name="content" id="" cols="100" rows="30" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Gửi email</button>&nbsp;
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
    $('#edit-contacts-type-form').validate({
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