<header id="page-topbar">
    
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex align-items-center">
                <nav class="navbar navbar-style navbar-light collapse-bg hide-collapse">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" onclick="toggleCollapse()">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </nav>
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <a href="index.php" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-dark.png" alt="" height="17">
                        </span>
                    </a>

                    <a href="index.php" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-light.png" alt="" height="17">
                        </span>
                    </a>
                </div>

                <div class="d-flex align-items-center">
                    <h5 class="ms-3 fw-bold topbar-heading"></h5>
                </div>

                
            </div>

            <div class="d-flex align-items-center">

                <div class="dropdown topbar-head-dropdown ms-1 header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                        id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class='bx bx-bell fs-22'></i>
                        <span
                            class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill notif-color">0<span
                                class="visually-hidden">unread messages</span></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                        aria-labelledby="page-header-notifications-dropdown">

                        <div class="dropdown-head rounded-top">
                            <div class="p-3">
                                <div class=" align-items-center">
                                    <div class="col">
                                        <h6 class="m-0 fs-16 fw-semibold text-white"> Notifications </h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-content" id="notificationItemsTabContent">
                            <div class="tab-pane fade show active py-2 ps-2" id="all-noti-tab" role="tabpanel">
                                <div data-simplebar style="max-height: 300px;" class="pe-2">
                                    <div class="text-reset notification-item d-block dropdown-item position-relative">
                                        <div class="d-flex justify-content-between">
                                            <div class="flex-grow-1">
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span>Booking</span>
                                                </p>
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-2 lh-base">Pending Hourly Booking</h6>
                                                </a>
                                            </div>
                                            <span class="text-muted fs-11">1min</span>
                                        </div>
                                    </div>

                                    <div class="text-reset notification-item d-block dropdown-item position-relative">
                                        <div class="d-flex justify-content-between">
                                            <div class="flex-grow-1">
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span>Inquiry</span>
                                                </p>
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-2 lh-base">Event Inquiry</h6>
                                                </a>
                                            </div>
                                            <span class="text-muted fs-11">5min</span>
                                        </div>
                                    </div>

                                    <div class="text-reset notification-item d-block dropdown-item position-relative">
                                        <div class="d-flex justify-content-between">
                                            <div class="flex-grow-1">
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span>Inquiry</span>
                                                </p>
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-2 lh-base">Event Inquiry</h6>
                                                </a>
                                            </div>
                                            <span class="text-muted fs-11">1hr</span>
                                        </div>
                                    </div>

                                    <div class="text-reset notification-item d-block dropdown-item position-relative">
                                        <div class="d-flex justify-content-between">
                                            <div class="flex-grow-1">
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span>Inquiry</span>
                                                </p>
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-2 lh-base">Event Inquiry</h6>
                                                </a>
                                            </div>
                                            <span class="text-muted fs-11">1d</span>
                                        </div>
                                    </div>



                                    <div class="my-3 text-center">
                                        <button type="button" class="btn btn-soft-success waves-effect waves-light">View
                                            All Notifications <i class="ri-arrow-right-line align-middle"></i></button>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade py-2 ps-2" id="messages-tab" role="tabpanel"
                                aria-labelledby="messages-tab">
                                <div data-simplebar style="max-height: 300px;" class="pe-2">
                                    <div class="text-reset notification-item d-block dropdown-item">
                                        <div class="d-flex">
                                            <img src="assets/images/users/avatar-3.jpg"
                                                class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-1">
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">James Lemire</h6>
                                                </a>
                                                <div class="fs-13 text-muted">
                                                    <p class="mb-1">We talked about a project on linkedin.</p>
                                                </div>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> 30 min ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="messages-notification-check01">
                                                    <label class="form-check-label"
                                                        for="messages-notification-check01"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-reset notification-item d-block dropdown-item">
                                        <div class="d-flex">
                                            <img src="assets/images/users/avatar-2.jpg"
                                                class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-1">
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">Angela Bernier</h6>
                                                </a>
                                                <div class="fs-13 text-muted">
                                                    <p class="mb-1">Answered to your comment on the cash flow forecast's
                                                        graph 🔔.</p>
                                                </div>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="messages-notification-check02">
                                                    <label class="form-check-label"
                                                        for="messages-notification-check02"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-reset notification-item d-block dropdown-item">
                                        <div class="d-flex">
                                            <img src="assets/images/users/avatar-6.jpg"
                                                class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-1">
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">Kenneth Brown</h6>
                                                </a>
                                                <div class="fs-13 text-muted">
                                                    <p class="mb-1">Mentionned you in his comment on 📃 invoice #12501.
                                                    </p>
                                                </div>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> 10 hrs ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="messages-notification-check03">
                                                    <label class="form-check-label"
                                                        for="messages-notification-check03"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-reset notification-item d-block dropdown-item">
                                        <div class="d-flex">
                                            <img src="assets/images/users/avatar-8.jpg"
                                                class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-1">
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">Maureen Gibson</h6>
                                                </a>
                                                <div class="fs-13 text-muted">
                                                    <p class="mb-1">We talked about a project on linkedin.</p>
                                                </div>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> 3 days ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="messages-notification-check04">
                                                    <label class="form-check-label"
                                                        for="messages-notification-check04"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="my-3 text-center">
                                        <button type="button" class="btn btn-soft-success waves-effect waves-light">View
                                            All Messages <i class="ri-arrow-right-line align-middle"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade p-4" id="alerts-tab" role="tabpanel" aria-labelledby="alerts-tab">
                                <div class="w-25 w-sm-50 pt-3 mx-auto">
                                    <img src="assets/images/svg/bell.svg" class="img-fluid" alt="user-pic">
                                </div>
                                <div class="text-center pb-5 mt-2">
                                    <h6 class="fs-18 fw-semibold lh-base">Hey! You have no any notifications </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown ms-sm-3 header-item topbar-user">
                    <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <img class="rounded-circle header-profile-user" src="../assets/img/topbar/Avatar.svg"
                                alt="Header Avatar">
                            <span class="text-start ms-xl-2">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Betty</span>
                                <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Master Admin</span>
                            </span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <h6 class="dropdown-header">Hi Betty!</h6>
                        <a class="dropdown-item" href="pages-profile.php"><i
                                class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span
                                class="align-middle">Profile</span></a>
                        <a class="dropdown-item" href="logout.php"><i
                                class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                class="align-middle" data-key=t-logout><?=$lang['t-logout']?></span></a>
                    </div>
                    
                    <div>
                        <button class="btn btn-offcanvas btn-outline-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <img src="../assets/img/topbar/eyeglass.svg" width="30px">
                        </button>

                        <!-- right offcanvas -->
                        <div class="offcanvas offcanvas-end righty-barty " tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header ms-3 mt-3 mb-2">
                                <h5 class="offcanvas-title fw-medium" id="offcanvasRightLabel">Activity Log</h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>

                            </div>     
                            <div class="offcanvas-header ms-3">
                                <div class="rightbar-container">
                                    <div>
                                        <div><img src="../assets/img/topbar/image.svg" width="40px"> <span class="right-name">Terek Trinidad</span></div>
                                    </div>
                                    <div>
                                        <ul>
                                            <li class="list-item">
                                                <div class="booking-confirmation">
                                                    <div class=" card-body">
                                                        <div>Confirmed booking</div>
                                                    </div>
                                                    <div> <p>05/30/24  <span class="ms-3"> 10:32AM</span> </p></div>
                                                </div>
                                            </li>
                                            <li class="list-item">
                                                <div class="booking-confirmation">
                                                    <div class=" card-body">
                                                        <div>Confirmed booking</div>
                                                    </div>
                                                    <div> <p>05/29/24 <span class="ms-3">8:14AM</span> </p></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <div><img src="../assets/img/topbar/image.svg" width="40px"> <span class="right-name">Denver Guitiw</span></div>
                                    </div>
                                    <div>
                                        <ul>
                                            <li class="list-item">
                                                <div class="booking-confirmation">
                                                    <div class=" card-body">
                                                        <div>New Booking</div>
                                                    </div>
                                                    <div> <p>05/27/24  <span class="ms-3"> 6:12AM </span> </p></div>
                                                </div>
                                            </li>
                                            <li class="list-item">
                                                <div class="booking-confirmation">
                                                    <div class=" card-body">
                                                        <div>Confirmed booking</div>
                                                    </div>
                                                    <div> <p>05/27/24 <span class="ms-3">4:18PM</span> </p></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <div><img src="../assets/img/topbar/image.svg" width="40px"> <span class="right-name">Julie Yan</span></div>
                                    </div>
                                    <div>
                                        <ul>
                                            <li class="list-item">
                                                <div class="booking-confirmation">
                                                    <div class=" card-body">
                                                        <div>Confirmed booking</div>
                                                    </div>
                                                    <div> <p>05/27/24 <span class="ms-3"> 1:43PM</span> </p></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>                                  
                        </div>
                    </div>



                </div>
            </div>
        </div>
       
    </div>
    <div class="collapse p-2" id="navbar-collapse">
        <div class="topbar-collapse-bg">
            <div class="container-fluid">
                <ul class="navbar-nav d-flex flex-row justify-content-center gap-5 change-gap" id="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link menu-link d-flex flex-column align-items-center" href="../dashboard/">
                            <div class="topbar-image-dashboard topbar-icon"></div>
                            <span class="topbar-dashboard-text"><?=$lang['t-dashboard']?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link d-flex flex-column align-items-center" href="../bookings/">
                            <div class="topbar-image-booking topbar-icon"></div>
                            <span class="topbar-booking-text"><?=$lang['t-bookings']?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link d-flex flex-column align-items-center" href="../admins/">
                            <div class="topbar-image-admin topbar-icon"></div>
                            <span class="topbar-admin-text"><?=$lang['t-admins']?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link d-flex flex-column align-items-center" href="../users/">
                            <div class="topbar-image-user topbar-icon"></div>
                            <span class="topbar-user-text"><?=$lang['t-users']?></span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    
</header>
<script src="../assets/js/topbar.js"></script>


<?php include '../layouts/vendor-scripts.php'; ?>

<script src="../assets/libs/prismjs/prism.js"></script>

<!-- App js -->
<script src="../assets/js/app.js"></script>

