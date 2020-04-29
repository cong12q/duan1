<?php
session_start();
require_once '../../config/utils.php';
checkAdminLoggedIn();

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
                <form id="add-user-form" action="<?= ADMIN_URL . 'slider/save-add.php'?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">slide_text<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="slide_text">
                                <?php if(isset($_GET['titlerr'])):?>
                                    <label class="error"><?= $_GET['slide_texterr']?></label>
                                <?php endif; ?>
                              
                            </div>
                            <div class="form-group">
                                <label for="">slide_content<span class="text-danger">*</span></label>
                                <textarea name="slide_content" id="" cols="82" rows="10"></textarea>
                                <?php if(isset($_GET['contenterr'])):?>
                                    <label class="error"><?= $_GET['contenterr']?></label>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="">readmore_url<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="readmore_url">
                            </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6 offset-md-3">
                                    <img src="<?= DEFAULT_IMAGE ?>" id="preview-img" class="img-fluid">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">img_url<span class="text-danger">*</span></label>
                                <input type="file" class="form-control" name="image" onchange="encodeImageFileAsURL(this)">
                            </div>
                           
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Tạo</button>&nbsp;
                            <a href="<?= ADMIN_URL . 'blogs'?>" class="btn btn-danger">Hủy</a>
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
    $('#add-user-form').validate({
        rules:{
            slide_text: {
                required: true,
            },
           
            slide_content:{
                required: true
                        },
            image_url: {
                required: true
            },
           
            image: {
                required: true,
                extension: "png|jpg|jpeg|gif"
            }
        },
        messages: {
            slide_text: {
                required: "Hãy nhập tiêu đề",
            },
            slide_content: {
                required: "Hãy nhập content",
               
            },
           
            image_url:{
                required: "Vui lòng nhập đường dẫn"
            },
            image: {
                required: "Hãy nhập ảnh ",
                extension: "Hãy nhập đúng định dạng ảnh (jpg | jpeg | png | gif)"
            }
        }
    });
</script>
</body>
</html>