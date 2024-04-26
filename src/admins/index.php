<?php include '../connect/session_check.php'; ?>
<?php include '../layouts/head-main.php'; ?>

<?php include '../layouts/body.php'; ?>

<?php include '../layouts/head-css.php'; ?>
<?php include '../layouts/menu.php'; ?>

   

<div class="admins_section">
    <div class="main-content">
            <div class="page-content page-padding">
                <div class="container-fluid">

                <div class="card">
                    <div class="card-body">
                        <div id="customerList">
                            <div class="row g-4">

                                <div class="col-sm">
                                    <div class="d-flex justify-content-sm-start">
                                        <div class="input-group search-box ms-2">
                                            <input type="text" class="form-control search" id="searchInput" placeholder="Search for reference number, guest, email, package, date, and status">
                                            <span class="input-group-text btn-icons position-relative" id="basic-addon2">
                                                <i class="ri-search-line filter-icon"></i>
                                                <i class="ri-filter-3-line search-icon"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div>
                                        <button type="button" class="w-100 btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i>New Booking</button>
                                    </div>
                                </div>
                        
                            </div>     
                        </div>
                    </div><!-- end card -->
                </div>

                <div class="row">
                    <div class="col-xl-3 col-md-6 ">
                        <div class="card card-design card-animate">
                            <div class="card-body ">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                            Total Bookings</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4">872</span>
                                        </h4>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0 m-">
                                        <img src="../assets/img/dashboard/total-booking.svg" width="40px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                            Total Bookings</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4">872</span>
                                        </h4>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0 m-">
                                        <img src="../assets/img/dashboard/current-booking.svg" width="40px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                            Pending Bookings</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4">872</span>
                                        </h4>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0 m-">
                                        <img src="../assets/img/dashboard/pending-booking.svg" width="40px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                            Cancelled Bookings</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4">872</span>
                                        </h4>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0 m-">
                                        <img src="../assets/img/dashboard/cancelled-booking.svg" width="40px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div> 

                </div>
            </div>
    </div>
</div>





</body>

</html>