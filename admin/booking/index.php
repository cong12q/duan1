<?php
session_start();
require_once '../../config/utils.php';
checkAdminLoggedIn();
$getbookingQuery = "select * from booking";
$booking = queryExecute($getbookingQuery, true);

?>

<!DOCser html>
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
                        <h1 class="m-0 text-dark">Danh sách phản hồi</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= ADMIN_URL . 'dashboard' ?>">Dashboard</a></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-md-10 col-offset-1">
                        <!-- Filter  -->
                    </div>
                    <!-- Danh sách users  -->
                    <table class="table table-stripped">
                        <thead>
                        <th>Họ tên</th>
                        <th>email</th>
                        <th>checkin_date</th>
                        <th>checkout_date</th>
                        <th>Lời nhắn của khách hàng</th>
                        <th>Phòng khách đặt</th>
                        <th >Trạng thái</th>
                        <th>
                           
                        </th>
                        </thead>
                        <tbody>
                        <?php foreach ($booking as $boo) : ?>
                            <tr>
                                <td><?php echo $boo['customer_name'] ?></td>
                                <td><?php echo $boo['email'] ?></td>
                                <td><?php echo $boo['checkin_date']?></td>
                                <td><?php echo $boo['checkout_date']?></td>
                                <td><?php echo $boo['message']?></td>
                                <?php if ($boo['status'] == 0) { ?>
                                            <td class="text-danger">Chưa xác nhận phòng</td>
                                        <?php } else if ($boo['status'] == 1) { ?>
                                            <td class="text-success">Đã xác nhận phòng</td>
                                        <?php } ?>
                                <td>
                                <a href="<?php echo ADMIN_URL . 'booking/form-send.php?id=' . $boo['id'] ?>"
                                class="btn btn-sm btn-success">
                                       <i class="fab fa-facebook-messenger"></i>
                                    </a>
                                    <a href="<?php echo ADMIN_URL . 'booking/status.php?id=' . $boo['id'] ?>"
                                       class="btn btn-sm btn-info">
                                       <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="<?php echo ADMIN_URL . 'booking/remove.php?id=' . $boo['id'] ?>"
                                    class="btn-remove btn btn-sm btn-danger">
                                       <i class="fa fa-trash"></i>
                                    </a>
                                    
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
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
    $(document).ready(function(){
        $('.btn-remove').on('click', function () {
            var redirectUrl = $(this).attr('href');
            Swal.fire({
                title: 'Thông báo!',
                text: "Bạn có chắc chắn muốn xóa tài khoản này?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Đồng ý'
            }).then((result) => { // arrow function es6 (es2015)
                if (result.value) {
                    window.location.href = redirectUrl;
                }
            });
            return false;
        });
        <?php if(isset($_GET['msg'])):?>
        Swal.fire({
            position: 'bottom-center',
            icon: 'warning',
            title: "<?= $_GET['msg'];?>",
            showConfirmButton: false,
            timer: 1500
        });
        <?php endif;?>
    });
   
          
        
</script>


</body>
</html>