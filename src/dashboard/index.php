<?php include '../connect/session_check.php'; ?>
<?php include '../layouts/head-main.php'; ?>

<div id="layout-wrapper">

    <?php include '../layouts/menu.php'; ?>
    <div class="main-content ">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                            <div class="row">
                                <div class="col">
                                    <div class="total-booking card">
                                        <div class="total-container card-body ms-4 mt-3 mb-3" >
                                            <div>
                                                <h6>Total Booking</h6>
                                                <h2 class="fw-bold">872</h2>
                                            </div>
                                        </div>
                                        <div class=" align-content-center justify-content-center pe-3">
                                            <img src="../assets/img/dashboard/total-booking.svg" width="50px" >
                                        </div>
                                    </div>
                                </div><!-- end col -->

                                <div class="col">
                                    <div class="current-booking card">
                                        <div class="current-container card-body ms-4 mt-3 mb-3" >
                                            <div>
                                                <h6>Current Booking</h6>
                                                <h2 class="fw-bold">872</h2>
                                            </div>
                                        </div>
                                        <div class="align-content-center justify-content-center me-3">
                                            <img src="../assets/img/dashboard/current-booking.svg" width="50px" >
                                        </div>
                                    </div>
                                </div><!-- end col -->

                                <div class="col">
                                    <div class="pending-booking card">
                                        <div class="pending-container card-body ms-4 mt-3 mb-3" >
                                            <div>
                                                <h6>Pending Booking</h6>
                                                <h2 class="fw-bold">872</h2>
                                            </div>
                                        </div>
                                        <div class="align-content-center justify-content-center me-3">
                                            <img src="../assets/img/dashboard/pending-booking.svg" width="50px" >
                                        </div>
                                    </div>
                                </div><!-- end col -->

                                <div class="col">
                                    <div class="cancelled-booking card">
                                        <div class="cancelled-container card-body ms-4 mt-3 mb-3" >
                                            <div>
                                                <h6>Cancelled Booking</h6>
                                                <h2 class="fw-bold">872</h2>
                                            </div>
                                        </div>
                                        <div class="align-content-center justify-content-center me-3">
                                            <img src="../assets/img/dashboard/cancelled-booking.svg" width="50px" >
                                        </div>
                                    </div>
                                </div><!-- end col -->

                            </div> 


                            <div class="row">
                                <div class="col">
                                    <div class="total-revenue card ps-5 pt-4 pb-4">
                                        <div class="align-items-center pe-3">
                                            <div><h5 class="fw-light pb-3">Total Revenue</h5></div>
                                            <div><h2 class="fw-bolder"><span>&#8369;</span> 87,561 </h2></div>
                                        </div>
                                        <div class="total" width="200px">
                                            <div class="pb-2"><img src="../assets/img/dashboard/up-arrow.svg"></div>
                                            <div><h6 class="fw-light text-end"><span>&#8369;</span>87,561</h6></div>
                                            <div><h6 class="fw-light text-end">Last Month</h6></div>
                                        </div>
                                    </div>

                                    <div class="total-revenue card ps-5 pt-4 pb-4">
                                        <div class="align-items-center pe-3">
                                            <div><h5 class="fw-light pb-3">Revenue Today</h5></div>
                                            <div><h2 class="fw-bolder"><span>&#8369;</span> 1,340</h2></div>
                                        </div>
                                        <div class="total" width="200px">
                                            <div class="pb-2"><img src="../assets/img/dashboard/down-arrow.svg"></div>
                                            <div><h6 class="fw-light text-end"><span>&#8369;</span>2,485</h6></div>
                                            <div><h6 class="fw-light text-end">Yesterday</h6></div>
                                        </div>
                                    </div>
                                </div><!-- end col -->

                                        <div class="col">
                                            <div class=" card">
                                                
                                            <div class="card-body">
                                            <p class="heading">Guest List Today</p>
                                                <div class="row approved-item d-flex align-items-center justify-content-between mb-3">
                                                    <div class="col d-flex flex-column">
                                                        <p class="me-auto ref-num">#0010</p>
                                                        <p class="me-auto guest-style">Julienne Galvez</p>
                                                    </div>
                                                    <div class="col second-col d-flex flex-column align-items-center">
                                                        <p class="checkin ps-2 pe-2 pt-1 pb-1">Checked in</p>
                                                    </div>
                                                </div>

                                                <div class="row approved-item d-flex align-items-center justify-content-between mb-3">
                                                    <div class="col d-flex flex-column">
                                                        <p class="me-auto ref-num">#0010</p>
                                                        <p class="me-auto guest-style">Julienne Galvez</p>
                                                    </div>
                                                    <div class="col second-col d-flex flex-column align-items-center">
                                                        <p class="checkin ps-2 pe-2 pt-1 pb-1">Checked in</p>
                                                    </div>
                                                </div>

                                                <div class="row approved-item d-flex align-items-center justify-content-between mb-3">
                                                    <div class="col d-flex flex-column">
                                                        <p class="me-auto ref-num">#0010</p>
                                                        <p class="me-auto guest-style">Julienne Galvez</p>
                                                    </div>
                                                    <div class="col second-col d-flex flex-column align-items-center">
                                                        <p class="checkin ps-2 pe-2 pt-1 pb-1">Checked in</p>
                                                    </div>
                                                </div>

                                                <div class="row approved-item d-flex align-items-center justify-content-between mb-3">
                                                    <div class="col d-flex flex-column">
                                                        <p class="me-auto ref-num">#0010</p>
                                                        <p class="me-auto guest-style">Julienne Galvez</p>
                                                    </div>
                                                    <div class="col second-col d-flex flex-column align-items-center">
                                                        <p class="checkin ps-2 pe-2 pt-1 pb-1">Checked in</p>
                                                    </div>
                                                </div>

                                                <div class="row approved-item d-flex align-items-center justify-content-between mb-3">
                                                    <div class="col d-flex flex-column">
                                                        <p class="me-auto ref-num">#0010</p>
                                                        <p class="me-auto guest-style">Julienne Galvez</p>
                                                    </div>
                                                    <div class="col second-col d-flex flex-column align-items-center">
                                                        <p class="checkin ps-2 pe-2 pt-1 pb-1">Checked in</p>
                                                    </div>
                                                </div>

                                                <div class="row approved-item d-flex align-items-center justify-content-between mb-3">
                                                    <div class="col d-flex flex-column">
                                                        <p class="me-auto ref-num">#0010</p>
                                                        <p class="me-auto guest-style">Julienne Galvez</p>
                                                    </div>
                                                    <div class="col second-col d-flex flex-column align-items-center">
                                                        <p class="checkin ps-2 pe-2 pt-1 pb-1">Checked in</p>
                                                    </div>
                                                </div>
                                                
                                            <div id="external-events">
                                            </div>
                                        </div>

                                    </div>
                                </div><!-- end col -->

                                <div class="col">
                                    <div class="pending-booking card">
                                        <div class="pending-container card-body ms-4 mt-3 mb-3" >
                                            <div>
                                                <h6>Pending Booking</h6>
                                                <h2 class="fw-bold">872</h2>
                                            </div>
                                        </div>
                                        <div class="align-content-center justify-content-center me-3">
                                            <img src="../assets/img/dashboard/pending-booking.svg" width="50px" >
                                        </div>
                                    </div>
                                </div><!-- end col -->

                                <div class="col">
                                    <div class="cancelled-booking card">
                                        <div class="cancelled-container card-body ms-4 mt-3 mb-3" >
                                            <div>
                                                <h6>Cancelled Booking</h6>
                                                <h2 class="fw-bold">872</h2>
                                            </div>
                                        </div>
                                        <div class="align-content-center justify-content-center me-3">
                                            <img src="../assets/img/dashboard/cancelled-booking.svg" width="50px" >
                                        </div>
                                    </div>
                                </div><!-- end col -->

                            </div> 


                            <div class="row">

                                <!--Guest List-->
        

                                <!--Calendar-->
                                <!-- <div class="col ">
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

                                        function prevMonth() {
                                            currentDate.setMonth(currentDate.getMonth() - 1);
                                            displayCalendar(currentDate.getMonth(), currentDate.getFullYear());
                                        }

                                        function nextMonth() {
                                            currentDate.setMonth(currentDate.getMonth() + 1);
                                            displayCalendar(currentDate.getMonth(), currentDate.getFullYear());
                                        }

                                        displayCalendar(currentDate.getMonth(), currentDate.getFullYear());
                                    </script>
                                    </div>
                                </div> -->

                                <!--Latest Approved-->
                                <!-- <div class="col">
                                    <div class="card card-height-100">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">Top Sellers</h4>
                                        </div>

                                        <div class="card-body">
                                            <div class="table-responsive table-card">
                                                <table class="table table-centered table-hover align-middle table-nowrap mb-0">
                                                    <tbody>

                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 me-3">
                                                                        <img src="assets/images/companies/img-1.png" alt="" class="avatar-sm p-3" />
                                                                    </div>
                                                                    <div>
                                                                        <h4 class="text-muted">Oliver Tyler</h4>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-muted">Bags and Wallets</span>
                                                            </td>
                                                        </tr>

                                                         <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 me-3">
                                                                        <img src="assets/images/companies/img-1.png" alt="" class="avatar-sm p-3" />
                                                                    </div>
                                                                    <div>
                                                                        <h4 class="text-muted">Oliver Tyler</h4>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-muted">Bags and Wallets</span>
                                                            </td>
                                                        </tr>

                                                         <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 me-3">
                                                                        <img src="assets/images/companies/img-1.png" alt="" class="avatar-sm p-3" />
                                                                    </div>
                                                                    <div>
                                                                        <h4 class="text-muted">Oliver Tyler</h4>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-muted">Bags and Wallets</span>
                                                            </td>
                                                        </tr>

                                                         <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 me-3">
                                                                        <img src="assets/images/companies/img-1.png" alt="" class="avatar-sm p-3" />
                                                                    </div>
                                                                    <div>
                                                                        <h4 class="text-muted">Oliver Tyler</h4>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-muted">Bags and Wallets</span>
                                                            </td>
                                                        </tr>

                                                         <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 me-3">
                                                                        <img src="assets/images/companies/img-1.png" alt="" class="avatar-sm p-3" />
                                                                    </div>
                                                                    <div>
                                                                        <h4 class="text-muted">Oliver Tyler</h4>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="text-muted">Bags and Wallets</span>
                                                            </td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>


                                        </div> 
                                    </div> 
                                </div>  -->

                                
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
    </body>

    </html>