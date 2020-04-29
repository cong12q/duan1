<?php
session_start();
require_once '../config/utils.php';
$id=$_SESSION[AUTH]['id'];
$getusersQuery = "select * from users where id='$id' ";
$users = queryExecute($getusersQuery, true);
$getbookingQuery = "select * from booking where reply_users='$id' ";
$booking = queryExecute($getbookingQuery, false);
$room1 = $booking['room_types'];
$getroom_typesQuery = "select * from room_types where id = '$room1'";
$room_types = queryExecute($getroom_typesQuery, false);
?>

<!DOCser html>
<html>
<head>
    <?php include_once '_share/style.php'; ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
   
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include_once '_share/sidebar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Thông tin cá nhân</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= MEMBER_URL . 'home.php' ?>">Dashboard</a></li>
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
                        <th>Phòng đã đặt</th>
                        <th>Trạng thái</th>
                        <th ></th>
                        </thead>
                        <tbody>
                       
                            <tr>
                                <td><?php echo $room_types['name'] ?></td>
                                <?php if ($booking['status'] == 0) { ?>
                                            <td class="text-danger">Chưa xác nhận phòng</td>
                                        <?php } else if ($booking['status'] == 1) { ?>
                                            <td class="text-success">Đã xác nhận phòng</td>
                                        <?php } ?>
                              <td> <a href="<?php echo MEMBER_URL . 'edit-form.php?id=' . $us['id'] ?>" class="btn btn-sm btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>`</td> 
                                
                                  
                                    
                                </td>
                            </tr>
                        
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include_once '../admin/_share/footer.php'; ?>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php include_once '../admin/_share/script.php'; ?>
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