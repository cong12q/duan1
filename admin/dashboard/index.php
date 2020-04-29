<?php
session_start();
require_once '../../config/utils.php';
checkAdminLoggedIn();

# Lấy ra tất cả bản ghi trong bảng users
$getAllMemberSql = "select * from users";
$users = queryExecute($getAllMemberSql, true);

# Lấy ra tất cả các bản ghi trong bảng services
$getAllcontactssql = "select * from contacts";
$contacts = queryExecute($getAllcontactssql, true);

# Lấy ra tất cả các bản ghi trong bảng orders
$getAllblogsql = "select * from blogs";
$blogs = queryExecute($getAllblogsql, true);
$getAllroom_typesql = "select * from room_types";
$room_types = queryExecute($getAllroom_typesql, true);
$getwebsByIdQuery = "select * from web_settings ";
$webs = queryExecute($getwebsByIdQuery, false);
$getAllslidersql = "select * from sliders";
$sliders = queryExecute($getAllslidersql, true);
$getAllbookingsql = "select * from booking";
$booking = queryExecute($getAllbookingsql, true);
$getAllamenitlessql = "select * from amenitles";
$amenitles = queryExecute($getAllamenitlessql, true);?>
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
                        <h1 class="m-0 text-dark">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
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
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3><?= count($users) ?></h3>
    
                                <p>Người dùng</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <a href="<?= ADMIN_URL . 'users'?>" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3><?= count($contacts)?></h3>

                                <p>Contact</p>
                            </div>
                            <div class="icon">
                            <i class="fas fa-user-friends"></i>
                            </div>
                            <a href="<?= ADMIN_URL . 'contact'?>" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-blue">
                            <div class="inner">
                                <h3><?= count($sliders)?></h3>

                                <p>Sliders</p>
                            </div>
                            <div class="icon">
                            <i class="fas fa-pen-square"></i>
                            </div>
                            <a href="<?= ADMIN_URL . 'web-setting'?>" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-gray">
                            <div class="inner">
                                <h3><?= count($booking)?></h3>

                                <p>Booking</p>
                            </div>
                            <div class="icon">
                            <i class="fas fa-shopping-cart"></i>
                            </div>
                            <a href="<?= ADMIN_URL . 'booking'?>" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-pink">
                            <div class="inner">
                                <h3><?= count($blogs)?></h3>

                                <p>Blog</p>
                            </div>
                            <div class="icon">
                            <i class="fab fa-blogger-b"></i>
                            </div>
                            <a href="<?= ADMIN_URL . 'blogs'?>" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-white">
                            <div class="inner">
                                <h3><?= count($room_types)?></h3>

                                <p>room_types</p>
                            </div>
                            <div class="icon">
                            <i class="fas fa-person-booth"></i>                        <p>
                            </div>
                            <a href="<?= ADMIN_URL . 'room_type'?>" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-black">
                            <div class="inner">
                                <h3><?= count($amenitles)?></h3>

                                <p>amenitles</p>
                            </div>
                            <div class="icon">
                            <i class="fas fa-address-book"></i>
                            </div>
                            <a href="<?= ADMIN_URL . 'amenitles'?>" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
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

</body>
</html>

