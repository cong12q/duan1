<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?= ADMIN_ASSET_URL ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Hotel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= BASE_URL . $_SESSION[AUTH]['avatar'] ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $_SESSION[AUTH]['name']?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?= ADMIN_URL . 'dashboard'?>" class="nav-link ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Quản lý tài khoản
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= ADMIN_URL . 'users'?>" class="nav-link">
                                <i class="fa fa-list-ol nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= ADMIN_URL . 'users/add-form.php'?>" class="nav-link">
                                <i class="fa fa-user-plus nav-icon"></i>
                                <p>Thêm tài khoản</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="fas fa-poll"></i>
                        <p>
                            contact
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= ADMIN_URL . 'contact'?>" class="nav-link">
                                <i class="fa fa-list-ol nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        
                    </ul>
                            <li class="nav-item">
                            <a href="<?= ADMIN_URL . 'web-setting'?>" class="nav-link">
                            <i class="fas fa-cogs"></i>
                                <p>Web-setting</p>
                            </a>
                        </li>
                        
                    </a>
                    <li class="nav-item">
                            <a href="<?= ADMIN_URL . 'booking'?>" class="nav-link">
                            <i class="fas fa-shopping-cart"></i>
                                <p>Booking</p>
                            </a>
                        </li>
                        
                    </a>
                    <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="fab fa-blogger-b"></i>
                        <p>
                            Blogs
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= ADMIN_URL . 'blogs'?>" class="nav-link">
                                <i class="fa fa-list-ol nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= ADMIN_URL . 'blogs/add-form.php'?>" class="nav-link">
                            <i class="fas fa-plus"></i>
                                <p>Thêm Blogs mới</p>
                            </a>
                        </li>
                    </ul>
                </li>
                

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="fas fa-pen-square"></i>
                        <p>
                            Sliders
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= ADMIN_URL . 'slider'?>" class="nav-link">
                                <i class="fa fa-list-ol nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= ADMIN_URL . 'slider/add-form.php'?>" class="nav-link">
                            <i class="fas fa-plus"></i>
                                <p>Thêm Sliders mới</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="fas fa-person-booth"></i>                        <p>
                            room_type
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= ADMIN_URL . 'room_type'?>" class="nav-link">
                                <i class="fa fa-list-ol nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= ADMIN_URL . 'room_type/add-form.php'?>" class="nav-link">
                            <i class="fas fa-plus"></i>
                                <p>Thêm Room mới</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="fab fa-servicestack"></i>                        <p>
                    amenitles
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= ADMIN_URL . 'amenitles'?>" class="nav-link">
                                <i class="fa fa-list-ol nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= ADMIN_URL . 'amenitles/add-form.php'?>" class="nav-link">
                            <i class="fas fa-plus"></i>
                                <p>Thêm amenitles mới</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="<?= BASE_URL . 'logout.php'?>" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>