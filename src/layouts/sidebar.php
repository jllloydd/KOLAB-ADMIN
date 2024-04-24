<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
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

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link menu-link d-flex flex-column" href="../dashboard/">
                        <i class="ri-dashboard-2-line"></i> <span><?=$lang['t-dashboard']?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="../bookings/">
                        <i class="ri-dashboard-2-line"></i> <span><?=$lang['t-bookings']?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="../bookings/">
                        <i class="ri-dashboard-2-line"></i> <span><?=$lang['t-admins']?></span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>