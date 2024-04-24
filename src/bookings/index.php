<?php include '../connect/session_check.php'; ?>
<?php include '../layouts/head-main.php'; ?>

    <head>

        <title>Listjs | Velzon - Admin & Dashboard Template</title>
        <?php include '../layouts/title-meta.php'; ?>

        <?php include '../layouts/head-css.php'; ?>
        <link href="../assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

    </head>

    <?php include '../layouts/body.php'; ?>

        <!-- Begin page -->
        <div id="../layout-wrapper" class="admin_booking_section">

            <?php include '../layouts/menu.php'; ?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content main-bg">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">

                                    <div class="card-body">
                                        <div id="customerList">
                                            <div class="row g-4">

                                                <div class="col-sm">
                                                    <div class="d-flex justify-content-sm-start">
                                                        <div class="input-group search-box ms-2">
                                                            <input type="text" class="form-control search" placeholder="Search for reference number, guest, email, package, date, and status">
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
                                <!-- end col -->

                                <div class="card">
                                    <div class="card-body card-margin">
                                        <div class="table-responsive table-card">
                                            <table class="table align-middle table-nowrap" id="bookingManagementData">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th class="sort" data-sort="reference_num">Reference No.</th>
                                                        <th class="sort" data-sort="customer_name">Guest</th>
                                                        <th class="sort" data-sort="email">Email</th>
                                                        <th class="sort" data-sort="term">Term</th>
                                                        <th class="sort" data-sort="date">Booking Date</th>
                                                        <th class="sort" data-sort="booking_status">Booking Status</th>
                                                        <th class="sort" data-sort="payment_status">Payment Status</th>
                                                        <th data-sort="action">Action</th>
                                                        </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                    <tr>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td class="reference_num"> #0001</td>
                                                        <td class="customer_name">Julienne Galvez</td>
                                                        <td class="email">juliennegalvez@gmail.com</td>
                                                        <td class="term">Daily</td>
                                                        <td class="date">April 29, 2024</td>
                                                        <td class="booking_status"><span class="badge badge-check-in">Checked in</span></td>
                                                        <td class="booking_status"><span class="badge badge-onsite">On-site</span></td>
                                                        <td>
                                                            <div class="d-flex gap-2">
                                                                <div class="edit">
                                                                    <button class="btn btn-sm btn-success edit-item-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#showModal">View</button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td class="reference_num"> #0001</td>
                                                        <td class="customer_name">Julienne Galvez</td>
                                                        <td class="email">juliennegalvez@gmail.com</td>
                                                        <td class="term">Weekly</td>
                                                        <td class="date">April 29, 2024</td>
                                                        <td class="booking_status"><span class="badge badge-pending">Pending</span></td>
                                                        <td class="booking_status"><span class="badge badge-online">Paid Online</span></td>
                                                        <td>
                                                            <div class="d-flex gap-2">
                                                                <div class="edit">
                                                                    <button class="btn btn-sm btn-success edit-item-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#showModal">View</button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td class="reference_num"> #0001</td>
                                                        <td class="customer_name">Julienne Galvez</td>
                                                        <td class="email">juliennegalvez@gmail.com</td>
                                                        <td class="term">Weekly</td>
                                                        <td class="date">April 29, 2024</td>
                                                        <td class="booking_status"><span class="badge badge-cancelled">Cancelled</span></td>
                                                        <td class="booking_status"><span class="badge badge-online">Paid Online</span></td>
                                                        <td>
                                                            <div class="d-flex gap-2">
                                                                <div class="edit">
                                                                    <button class="btn btn-sm btn-success edit-item-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#showModal">View</button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td class="reference_num"> #0001</td>
                                                        <td class="customer_name">Julienne Galvez</td>
                                                        <td class="email">juliennegalvez@gmail.com</td>
                                                        <td class="term">Monthly</td>
                                                        <td class="date">April 29, 2024</td>
                                                        <td class="booking_status"><span class="badge badge-checked-out">Checked out</span></td>
                                                        <td class="booking_status"><span class="badge badge-onsite">On-site</span></td>
                                                        <td>
                                                            <div class="d-flex gap-2">
                                                                <div class="edit">
                                                                    <button class="btn btn-sm btn-success edit-item-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#showModal">View</button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td class="reference_num"> #0001</td>
                                                        <td class="customer_name">Julienne Galvez</td>
                                                        <td class="email">juliennegalvez@gmail.com</td>
                                                        <td class="term">Monthly</td>
                                                        <td class="date">April 29, 2024</td>
                                                        <td class="booking_status"><span class="badge badge-checked-out">Checked out</span></td>
                                                        <td class="booking_status"><span class="badge badge-onsite">On-site</span></td>
                                                        <td>
                                                            <div class="d-flex gap-2">
                                                                <div class="edit">
                                                                    <button class="btn btn-sm btn-success edit-item-btn"
                                                                    data-bs-toggle="modal" data-bs-target="#showModal">View</button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="noresult" style="display: none">
                                                <div class="text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                                        colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                                    </lord-icon>
                                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                                    <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any
                                                        orders for you search.</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">
                                    <p>Showing 5 from 46 data</p>
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>

                                

                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <?php include '../layouts/footer.php'; ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <?php include '../layouts/vendor-scripts.php'; ?>
        <!-- prismjs plugin -->
        <script src="../assets/libs/prismjs/prism.js"></script>
        <script src="../assets/libs/list.js/list.min.js"></script>
        <script src="../assets/libs/list.pagination.js/list.pagination.min.js"></script>

        <!-- listjs init -->
        <script src="../assets/js/pages/listjs.init.js"></script>

        <!-- Sweet Alerts js -->
        <script src="../assets/libs/sweetalert2/sweetalert2.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script src="../assets/js/bookings.js"></script>
    </body>

</html>