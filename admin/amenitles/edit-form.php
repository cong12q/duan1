<?php
session_start();
require_once '../../config/utils.php';
checkAdminLoggedIn();
$id = isset($_GET['id']) ? $_GET['id'] : -1;
$getamenitlesByIdQuery = "select * from amenitles where id = $id ";
$amenitles = queryExecute($getamenitlesByIdQuery, false);
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
                        <h1 class="m-0 text-dark">Tạo tài khoản</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <form id="add-user-form" action="<?= ADMIN_URL . 'amenitles/save-edit.php'?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                        <input type="hidden" name="id" value="<?= $amenitles['id'] ?>">
                            <div class="form-group">
                                <label for="">Tên dịch vụ<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" value="<?= $amenitles['name'] ?>">
                              
                            </div>                 
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Tạo</button>&nbsp;
                            <a href="<?= ADMIN_URL . 'amenitles'?>" class="btn btn-danger">Hủy</a>
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
    function encodeImageFileAsURL(element) {
        var file = element.files[0];
        if(file === undefined){
            $('#preview-img').attr('src', "<?= DEFAULT_IMAGE ?>");
            return false;
        }
        var reader = new FileReader();
        reader.onloadend = function() {
            $('#preview-img').attr('src', reader.result)
        }
        reader.readAsDataURL(file);
    }
    $('#add-amenitles-form').validate({
        rules:{
            name: {
                required: true,
                maxlength: 191
            }
        
        },
        messages: {
            name: {
                required: "Hãy nhập tên dịch vụ",
                maxlength: "Số lượng ký tự tối đa bằng 191 ký tự"
            }
        }
    });
</script>
</body>
</html>