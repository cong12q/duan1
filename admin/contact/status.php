<?php
session_start();
require_once '../../config/utils.php';
checkAdminLoggedIn();
$id = isset($_GET['id']) ? $_GET['id'] : -1;
$getcontactsEditQuery = "select * from contacts where id = '$id'";
$contactsEdit = queryExecute($getcontactsEditQuery, false);
$id2 = $contactsEdit['reply_by'];
$getUsersQuery = "select * from users where id = '$id2'";
$users = queryExecute($getUsersQuery, false);
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

                    <form id="edit-contacts-type-form" action="" method="post"
                          enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $usersEdit['id'] ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tên người khách hàng<span class="text-danger"></span></label>
                                    <input type="text" class="form-control" name="name" disabled
                                           value="<?php echo $contactsEdit['name'] ?>">

                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                
                                    <input type="text" class="form-control" name="email" disabled
                                           value="<?php echo $contactsEdit['email'] ?>">
                                </div>
                                  <div class="form-group">
                                    <label for="">Tiêu đề</label>
                                
                                    <input type="text" class="form-control" name="subject" disabled
                                           value="<?php echo $contactsEdit['subject'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for=""> Nhân viên trả lời</label>
                                
                                    <input type="text" class="form-control" name="subject" disabled
                                           value="<?php echo $users['name'] ?>">
                                </div>
                                
                                
                                  <div class="form-group">
                                    <label for="">phản hồi của khách hàng</label>
                                <br>
                                   <textarea disabled name="messages" id="" cols="60" rows="10" ><?php echo $contactsEdit['messages'] ?></textarea>
                                    </div>
                                    <div class="form-group">
                                    <label for="">Trả lời phản hồi của khách hàng (nhân viên)</label>
                                <br>
                                   <textarea disabled name="messages" id="" cols="60" rows="10" ><?php echo $contactsEdit['reply_for'] ?></textarea>
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