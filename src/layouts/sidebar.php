<!-- ========== App Menu ========== -->
<div class="sidebar_section">
    <div class="side_navigation_bar">
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box mb-4">
                <!-- Dark Logo-->
                <a href="index.php" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="../assets/img/logo/kolab.avif" alt="" height="100">
                    </span>
                    <span class="logo-lg">
                        <img src="../assets/img/logo/kolab.avif" alt="" height="10">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="index.php" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="../assets/img/logo/kolab.avif" alt="" height="120">
                    </span>
                    <span class="logo-lg">
                        <img src="../assets/img/logo/kolab.avif" alt="" height="120">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                    id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">
                    <ul class="navbar-nav d-flex" id="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link menu-link d-flex flex-column align-items-center" href="../dashboard/">
                                <div class="image-dashboard topbar-icon"></div>
                                <span class="dashboard-text"><?=$lang['t-dashboard']?></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link d-flex flex-column align-items-center" href="../bookings/">
                                <div class="image-booking topbar-icon"></div>
                                <span class="booking-text"><?=$lang['t-bookings']?></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link d-flex flex-column align-items-center" href="../admins/">
                                <div class="image-admin topbar-icon"></div>
                                <span class="admin-text"><?=$lang['t-admins']?></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link d-flex flex-column align-items-center" href="../users/">
                                <div class="image-user topbar-icon"></div>
                                <span class="user-text"><?=$lang['t-users']?></span>
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
            <div class="sidebar-background"></div>
        </div>
    </div>
</div>
<script src="../assets/js/sidebar.js"></script>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>


