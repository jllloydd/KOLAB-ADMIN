<?php include '../connect/session_check.php'; ?>
<?php include '../layouts/head-main.php'; ?>

    <head>

        <title>Listjs | Velzon - Admin & Dashboard Template</title>
        <?php include '../layouts/title-meta.php'; ?>

        <!-- fullcalendar css -->
        <link href="../assets/libs/fullcalendar/main.min.css" rel="stylesheet" type="text/css" />

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
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-xl-9">
                                        <div class="card card-h-100">
                                            <div class="card-body">
                                                <div id="calendar"></div>
                                            </div>
                                        </div>
                                    </div><!-- end col -->
                                    <div class="col-xl-3">
                                        <div class="card card-h-100">
                                            <div class="card-body">
                                                <button class="btn btn-primary w-100" id="btn-new-event"><i
                                                        class="mdi mdi-plus"></i> Create New Event</button>
        
                                                <div id="external-events">
                                                    <br>
                                                    <p class="text-muted">Drag and drop your event or click in the calendar</p>
                                                    <div class="external-event fc-event bg-soft-success text-success" data-class="bg-soft-success">
                                                        <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>New Event
                                                        Planning
                                                    </div>
                                                    <div class="external-event fc-event bg-soft-info text-info" data-class="bg-soft-info">
                                                        <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Meeting
                                                    </div>
                                                    <div class="external-event fc-event bg-soft-warning text-warning" data-class="bg-soft-warning">
                                                        <i
                                                            class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Generating
                                                        Reports
                                                    </div>
                                                    <div class="external-event fc-event bg-soft-danger text-danger" data-class="bg-soft-danger">
                                                        <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Create
                                                        New theme
                                                    </div>
                                                </div>
        
                                            </div>
                                        </div>
                                        
                                    </div> <!-- end col-->
        
                                    
                                </div><!--end row-->
        
                                <div style='clear:both'></div>
        
                                <!-- Add New Event MODAL -->
                                <div class="modal fade" id="event-modal" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content border-0">
                                            <div class="modal-header p-3 bg-soft-info">
                                                <h5 class="modal-title" id="modal-title">Event</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                            </div>
                                            <div class="modal-body p-4">
                                                <form class="needs-validation" name="event-form" id="form-event" novalidate>
                                                    <div class="text-end">
                                                        <a href="#" class="btn btn-sm btn-soft-primary" id="edit-event-btn" data-id="edit-event" onclick="editEvent(this)" role="button">Edit</a>
                                                    </div>
                                                    <div class="event-details">
                                                        <div class="d-flex mb-2">
                                                            <div class="flex-grow-1 d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-3">
                                                                    <i class="ri-calendar-event-line text-muted fs-16"></i>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <h6 class="d-block fw-semibold mb-0" id="event-start-date-tag"></h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="flex-shrink-0 me-3">
                                                                <i class="ri-time-line text-muted fs-16"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h6 class="d-block fw-semibold mb-0"><span id="event-timepicker1-tag"></span> - <span id="event-timepicker2-tag"></span></h6>
                                                            </div>
                                                        </div> 
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="flex-shrink-0 me-3">
                                                                <i class="ri-map-pin-line text-muted fs-16"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <h6 class="d-block fw-semibold mb-0"> <span id="event-location-tag"></span></h6>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex mb-3">
                                                            <div class="flex-shrink-0 me-3">
                                                                <i class="ri-discuss-line text-muted fs-16"></i>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <p class="d-block text-muted mb-0" id="event-description-tag"></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row event-form">
                                                        <div class="col-12">
                                                            <div class="mb-3">
                                                                <label class="form-label">Type</label>
                                                                <select class="form-select d-none" name="category" id="event-category"  required>
                                                                    <option value="bg-soft-danger">Danger</option>
                                                                    <option value="bg-soft-success">Success</option>
                                                                    <option value="bg-soft-primary">Primary</option>
                                                                    <option value="bg-soft-info">Info</option>
                                                                    <option value="bg-soft-dark">Dark</option>
                                                                    <option value="bg-soft-warning">Warning</option>
                                                                </select>
                                                                <div class="invalid-feedback">Please select a valid event category</div>
                                                            </div>
                                                        </div><!--end col-->
                                                        <div class="col-12">
                                                            <div class="mb-3">
                                                                <label class="form-label">Event Name</label>
                                                                <input class="form-control d-none" placeholder="Enter event name" type="text" name="title" id="event-title" required value="" />
                                                                <div class="invalid-feedback">Please provide a valid event name</div>
                                                            </div>
                                                        </div><!--end col-->
                                                        <div class="col-12">
                                                            <div class="mb-3">
                                                                <label>Event Date</label>
                                                                <div class="input-group d-none">
                                                                    <input type="text" id="event-start-date" class="form-control flatpickr flatpickr-input" placeholder="Select date" readonly required>
                                                                    <span class="input-group-text"><i class="ri-calendar-event-line"></i></span>
                                                                </div>
                                                            </div>
                                                        </div><!--end col-->
                                                        <div class="col-12" id="event-time">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Start Time</label>
                                                                        <div class="input-group d-none">
                                                                            <input id="timepicker1" type="text"
                                                                                class="form-control flatpickr flatpickr-input" placeholder="Select start time" readonly>
                                                                            <span class="input-group-text"><i class="ri-time-line"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">End Time</label>
                                                                        <div class="input-group d-none">
                                                                            <input id="timepicker2" type="text" class="form-control flatpickr flatpickr-input" placeholder="Select end time" readonly>
                                                                            <span class="input-group-text"><i class="ri-time-line"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!--end col-->
                                                        <div class="col-12">
                                                            <div class="mb-3">
                                                                <label for="event-location">Location</label>
                                                                <div>
                                                                    <input type="text" class="form-control d-none" name="event-location" id="event-location" placeholder="Event location">
                                                                </div>
                                                            </div>
                                                        </div><!--end col-->
                                                        <input type="hidden" id="eventid" name="eventid" value="" />
                                                        <div class="col-12">
                                                            <div class="mb-3">
                                                                <label class="form-label">Description</label>
                                                                <textarea class="form-control d-none" id="event-description" placeholder="Enter a description" rows="3" spellcheck="false"></textarea>
                                                            </div>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <button type="button" class="btn btn-soft-danger" id="btn-delete-event"><i class="ri-close-line align-bottom"></i> Delete</button>
                                                        <button type="submit" class="btn btn-success" id="btn-save-event">Add Event</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div> <!-- end modal-content-->
                                    </div> <!-- end modal dialog-->
                                </div> <!-- end modal-->
                                <!-- end modal-->
                            </div>
                        </div> <!-- end row-->
                        
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
            </div>
            <!-- end main content-->

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
                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
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

        <!-- calendar min js -->
        <script src="../assets/libs/fullcalendar/main.min.js"></script>

        <!-- Calendar init -->
        <script src="../assets/js/pages/calendar.init.js"></script>

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