<?php include '../connect/session_check.php'; ?>
<?php include '../layouts/head-main.php'; ?>

<div id="layout-wrapper">

    <?php include '../layouts/menu.php'; ?>
    <div class="main-content ">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="h-100">
                            <div class="row">

                                <div class="col">
                                    <div class="total-booking card card-animate ">
                                        <div class="total-container card-body ms-4 mt-3 mb-3">
                                            <div class="me-5">
                                                <div><h5>Total Booking</h5></div>
                                                <div><h1 class="fw-bold">872</h1></div>
                                            </div>
                                            <div class="ms-5">
                                                <img src="../assets/img/dashboard/total-booking.svg" width="70px" >
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end col -->

                                <div class="col">
                                    <div class="current-booking card card-animate ">
                                        <div class="current-container card-body ms-4 mt-3 mb-3">
                                            <div class="me-5">
                                                <div><h5>Current Booking</h5></div>
                                                <div><h1 class="fw-bold">872</h1></div>
                                            </div>
                                            <div class="ms-5">
                                                <img src="../assets/img/dashboard/current-booking.svg" width="70px" >
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end col -->

                                <div class="col">
                                    <div class="pending-booking card card-animate ">
                                        <div class="pending-container card-body ms-4 mt-3 mb-3">
                                            <div class="me-5">
                                                <div><h5>Pending Booking</h5></div>
                                                <div><h1 class="fw-bold">872</h1></div>
                                            </div>
                                            <div class="ms-5">
                                                <img src="../assets/img/dashboard/pending-booking.svg" width="70px" >
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end col -->

                                <div class="col">
                                    <div class="cancelled-booking card card-animate ">
                                        <div class="cancelled-container card-body ms-4 mt-3 mb-3">
                                            <div class="me-5">
                                                <div><h5>Cancelled Booking</h5></div>
                                                <div><h1 class="fw-bold">872</h1></div>
                                            </div>
                                            <div class="ms-5 end-0">
                                                <img src="../assets/img/dashboard/cancelled-booking.svg" width="70px" >
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end col -->

                            </div> 



                            <div class="row">
                                <!-- Total Revenue-->
                                <div class="col">
                                    <div class="col">
                                        <div class="row d-flex gap-3">
                                            <div class="">
                                                <div class="card">
                                                    <div class="card-header border-0 align-items-center d-flex p-5">
                                                        <div class="row">
                                                            <div><h4 class="card-title mb-0">Total Revenue</h4></div>
                                                            <div class="flex-grow-1"><h1><span>&#8369;</span> 87,561</h1></div>
                                                        </div>
                                                        <div class="ml-auto d-flex align-items-center justify-content-end">
                                                            <h5 style="margin-right: 10px;"><span>&#8369;</span>87,561</h5>
                                                            <h5 style="margin-right: 10px;">Last Month</h5>
                                                            <img src="../assets/img/dashboard/up-arrow.svg" style="margin-left: 10px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div class="card">
                                                <div class="card-header border-0 align-items-center d-flex">
                                                        <h1 class="card-title mb-0 flex-grow-1">Revenue</h1>
                                                    </div>
                                                    <div class="card-header border-0 align-items-center d-flex">
                                                        <h4 class="card-title mb-0 flex-grow-1"><span>&#8369;</span> 87,561</h4>
                                                        <div>
                                                            <h5><span>&#8369;</span>87,561</h5>
                                                            <h5>Last Month</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Guest List-->
                                <div class="col">
                                    <div class="card card-height-100">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">Top Sellers</h4>
                                        </div><!-- end card header -->

                                        <div class="card-body">
                                            <div class="table-responsive table-card">
                                                <table class="table table-centered table-hover align-middle table-nowrap mb-0">
                                                    <tbody>

                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 me-2">
                                                                        <img src="assets/images/companies/img-1.png" alt="" class="avatar-sm p-2" />
                                                                    </div>
                                                                    <div>
                                                                        <h4 class="text-muted">Oliver Tyler</h4>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-muted">Bags and Wallets</span>
                                                            </td>
                                                        </tr><!-- end -->

                                                         <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 me-2">
                                                                        <img src="assets/images/companies/img-1.png" alt="" class="avatar-sm p-2" />
                                                                    </div>
                                                                    <div>
                                                                        <h4 class="text-muted">Oliver Tyler</h4>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-muted">Bags and Wallets</span>
                                                            </td>
                                                        </tr><!-- end -->

                                                         <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 me-2">
                                                                        <img src="assets/images/companies/img-1.png" alt="" class="avatar-sm p-2" />
                                                                    </div>
                                                                    <div>
                                                                        <h4 class="text-muted">Oliver Tyler</h4>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-muted">Bags and Wallets</span>
                                                            </td>
                                                        </tr><!-- end -->

                                                         <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 me-2">
                                                                        <img src="assets/images/companies/img-1.png" alt="" class="avatar-sm p-2" />
                                                                    </div>
                                                                    <div>
                                                                        <h4 class="text-muted">Oliver Tyler</h4>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-muted">Bags and Wallets</span>
                                                            </td>
                                                        </tr><!-- end -->

                                                         <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 me-2">
                                                                        <img src="assets/images/companies/img-1.png" alt="" class="avatar-sm p-2" />
                                                                    </div>
                                                                    <div>
                                                                        <h4 class="text-muted">Oliver Tyler</h4>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-muted">Bags and Wallets</span>
                                                            </td>
                                                        </tr><!-- end -->
                                                        
                                                    </tbody>
                                                </table><!-- end table -->
                                            </div>
                                        </div> <!-- .card-body-->
                                    </div> <!-- .card-->
                                </div> <!-- .col-->

                                <!--Calendar-->
                                <div class="col ">
                                    <div class="card p-3">
                                    <div class="row mt-3 justify-content-center">
                                        <div class="col"><button onclick="prevMonth()" style="border: none; background-color: white;">&lt;</button></div>
                                        <div class="col"><h2 id="monthYear"></h2></div>
                                        <div class="col"><button onclick="nextMonth()" style="border: none; background-color: white;">&gt;</button></div>
                                    </div>
                                    <table id="calendar">
                                        <tr>
                                            <th>Sun</th>
                                            <th>Mon</th>
                                            <th>Tue</th>
                                            <th>Wed</th>
                                            <th>Thu</th>
                                            <th>Fri</th>
                                            <th>Sat</th>
                                        </tr>
                                    </table>
                                    <script>
                                        let currentDate = new Date();

                                        function displayCalendar(month, year) {
                                            const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                                            
                                            const firstDay = new Date(year, month, 1);
                                            const lastDay = new Date(year, month + 1, 0);

                                            document.getElementById("monthYear").innerText = months[month] + " " + year;

                                            const table = document.getElementById("calendar");
                                            table.innerHTML = "<tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr>";

                                            let date = 1;
                                            for (let i = 0; i < 6; i++) {
                                                let row = table.insertRow();
                                                for (let j = 0; j < 7; j++) {
                                                    if (i === 0 && j < firstDay.getDay()) {
                                                        const cell = row.insertCell();
                                                        cell.innerHTML = "";
                                                    } else if (date > lastDay.getDate()) {
                                                        break;
                                                    } else {
                                                        const cell = row.insertCell();
                                                        cell.innerHTML = date;
                                                        if (currentDate.getFullYear() === year && currentDate.getMonth() === month && currentDate.getDate() === date) {
                                                            cell.classList.add("today"); 
                                                        }
                                                        date++;
                                                    }
                                                }
                                            }
                                        }

                                        // Function to display the previous month
                                        function prevMonth() {
                                            currentDate.setMonth(currentDate.getMonth() - 1);
                                            displayCalendar(currentDate.getMonth(), currentDate.getFullYear());
                                        }

                                        // Function to display the next month
                                        function nextMonth() {
                                            currentDate.setMonth(currentDate.getMonth() + 1);
                                            displayCalendar(currentDate.getMonth(), currentDate.getFullYear());
                                        }

                                        // Display initial calendar
                                        displayCalendar(currentDate.getMonth(), currentDate.getFullYear());
                                    </script>
                                    </div>
                                </div> <!-- .col-->

                                <!--Latest Approved-->
                                <div class="col">
                                    <div class="card card-height-100">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">Top Sellers</h4>
                                        </div><!-- end card header -->

                                        <div class="card-body">
                                            <div class="table-responsive table-card">
                                                <table class="table table-centered table-hover align-middle table-nowrap mb-0">
                                                    <tbody>

                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 me-2">
                                                                        <img src="assets/images/companies/img-1.png" alt="" class="avatar-sm p-2" />
                                                                    </div>
                                                                    <div>
                                                                        <h4 class="text-muted">Oliver Tyler</h4>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-muted">Bags and Wallets</span>
                                                            </td>
                                                        </tr><!-- end -->

                                                         <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 me-2">
                                                                        <img src="assets/images/companies/img-1.png" alt="" class="avatar-sm p-2" />
                                                                    </div>
                                                                    <div>
                                                                        <h4 class="text-muted">Oliver Tyler</h4>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-muted">Bags and Wallets</span>
                                                            </td>
                                                        </tr><!-- end -->

                                                         <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 me-2">
                                                                        <img src="assets/images/companies/img-1.png" alt="" class="avatar-sm p-2" />
                                                                    </div>
                                                                    <div>
                                                                        <h4 class="text-muted">Oliver Tyler</h4>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-muted">Bags and Wallets</span>
                                                            </td>
                                                        </tr><!-- end -->

                                                         <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 me-2">
                                                                        <img src="assets/images/companies/img-1.png" alt="" class="avatar-sm p-2" />
                                                                    </div>
                                                                    <div>
                                                                        <h4 class="text-muted">Oliver Tyler</h4>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-muted">Bags and Wallets</span>
                                                            </td>
                                                        </tr><!-- end -->

                                                         <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 me-2">
                                                                        <img src="assets/images/companies/img-1.png" alt="" class="avatar-sm p-2" />
                                                                    </div>
                                                                    <div>
                                                                        <h4 class="text-muted">Oliver Tyler</h4>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-muted">Bags and Wallets</span>
                                                            </td>
                                                        </tr><!-- end -->
                                                        
                                                    </tbody>
                                                </table><!-- end table -->
                                            </div>


                                        </div> <!-- .card-body-->
                                    </div> <!-- .card-->
                                </div> <!-- .col-->

                                
                            </div> <!-- end row-->
                        </div>
                    </div> <!-- end col -->
                </div>
            </div>
            <!-- End Page-content -->

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <?php include '../layouts/ '; ?>

    <?php include '../layouts/vendor-scripts.php'; ?>

    <!-- apexcharts -->
    <script src="../assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="../assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="../assets/libs/jsvectormap/maps/world-merc.js"></script>

    <!--Swiper slider js-->
    <script src="../assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Dashboard init -->
    <script src="../assets/js/pages/dashboard-ecommerce.init.js"></script>

    <!-- App js -->
    <script src="../assets/js/app.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script type="text/javascript" src="assets/libs/flatpickr/flatpickr.min.js"></script>
    <!-- calendar min js -->
    <script src="assets/libs/fullcalendar/index.global.min.js"></script>

    <!-- Calendar init -->
    <script src="assets/js/pages/calendar-month-grid.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
    </body>

    </html>