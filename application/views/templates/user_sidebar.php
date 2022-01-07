        <!-- Sidebar -->
        <ul class="navbar-nav sticky-top sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() ?>">
                <div class="sidebar-brand-icon">
                    <img style="width:50px; border-radius: 50%; height:auto;" src="<?= base_url('assets/admin/img/anjay.jpg')?>" alt="">
                </div>
                <div class="sidebar-brand-text mx-3">BeeTs</div>
            </a>

            <hr class="sidebar-divider">
                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link pb-0" href="<?= base_url('admin'); ?>">
                        <i class="fas fa-fw fa-home"></i>
                        <span>Welcome</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link pb-0" href="<?= base_url('admin/materi'); ?>">
                        <i class="fas fa-fw fa-book"></i>
                        <span>Materi</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pb-0" href="<?= base_url('admin/booking'); ?>">
                    <i class="fas fa-fw fa-clipboard"></i>
                        <span>Booking</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pb-0" href="<?= base_url('admin/agen'); ?>">
                        <i class="far fa-fw fa-address-card"></i>
                        <span>Agen</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pb-0" href="<?= base_url('admin/api'); ?>">
                        <i class="fas fa-user-check"></i>
                        <span>Akses Api</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pb-0" href="<?= base_url('admin/testimoni'); ?>">
                    <i class="far fa-comment-dots"></i>
                        <span>Testimoni</span></a>
                </li>
                
                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link pb-0" href="<?= base_url('auth/logout'); ?>">
                        <i class="fas fa-fw fa-sign-out-alt"></i>
                        <span>Logout</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block mt-3">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
        </ul>
                
        <!-- End of Sidebar -->
