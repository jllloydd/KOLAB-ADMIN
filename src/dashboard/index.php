<?php include '../connect/session_check.php'; ?>
<?php include '../layouts/head-main.php'; ?>

<div id="layout-wrapper">

    <?php include '../layouts/menu.php'; ?>
    <div class="main-content bg-light-subtle">
        <div class="page-content">
            <div class="container-fluid">
                <div class="main-container">
                    <div class="col row login-container">
                        <div class="col">
                            <div class="total-booking card">
                                <div class="total-container card-body ms-4 mt-3 mb-3" >
                                    <div>
                                        <p>Total Booking</p>
                                        <h2 class="fw-bold">872</h2>
                                    </div>
                                </div>
                                <div class=" align-content-center justify-content-center  me-3">
                                    <img src="../assets/img/dashboard/total-booking.svg" width="50px" >
                                </div>
                            </div>
                        </div><!-- end col -->

                        <div class="col">
                            <div class="current-booking card">
                                <div class="current-container card-body ms-4 mt-3 mb-3" >
                                    <div>
                                        <p>Current Booking</p>
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
                                        <p>Pending Booking</p>
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
                                        <p>Cancelled Booking</p>
                                        <h2 class="fw-bold">872</h2>
                                    </div>
                                </div>
                                <div class="align-content-center justify-content-center me-3">
                                    <img src="../assets/img/dashboard/cancelled-booking.svg" width="50px" >
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div> 

                    <div class="col row login-container">
                        <div class="col">
                            <div class="col revenue-container">
                                    <div class="text-container card bg-white mb-4">
                                        <div class="total-revenue ps-5 pt-5 pb-5">
                                            <div class="align-items-center">
                                                <div><h6 class="fw-light pb-3">Total Revenue</h6></div>
                                                <div><h3 class="fw-bolder"><span>&#8369;</span> 87,561 </h3></div>
                                            </div>
                                        </div>
                                        <div class="total card-body align-content-end justify-content-center pe-4">
                                            <div class="pb-2"><img src="../assets/img/dashboard/up-arrow.svg"></div>
                                            <div><h6 class="fw-light text-end"><span>&#8369;</span>87,561</h6></div>
                                            <div><h6 class="fw-light text-end">Last Month</h6></div>
                                        </div>
                                    </div>

                                    <div class="text-container bg-white card mb-4">
                                        <div class="total-revenue ps-5 pt-5 pb-5">
                                            <div class="align-items-center">
                                                <div><h6 class="fw-light pb-3">Revenue Today</h6></div>
                                                <div><h3 class="fw-bolder"><span>&#8369;</span> 1,340</h3></div>
                                            </div>
                                        </div>
                                        <div class="total card-body align-content-end justify-content-center pe-4">
                                            <div class="pb-2"><img src="../assets/img/dashboard/down-arrow.svg"></div>
                                            <div><h6 class="fw-light text-end">Yesterday</h6></div>
                                            <div><h6 class="fw-light text-end"><span>&#8369;</span>2,485</h6></div>
                                        </div>
                                    </div>
                                </div>
                        </div><!-- end col -->

                        <div class="col">
                            <div class="col">
                                    <div class="guestlist-container card">
                                            <div class="card-body ms-2 mt-3">
                                                <p class="heading">Guest List Today</p>

                                                <div class="row mb-3">
                                                    <div class="guest-list" >
                                                        <div class="col d-flex flex-column">
                                                            <p class="me-auto ref-num">#0001</p>
                                                            <p class="me-auto guest-style">Julienne Galvez</p>
                                                        </div>
                                                        <div class="align-content-center justify-content-center">
                                                            <p class="checkin ps-2 pe-2 pt-1 pb-1">Checked in</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="guest-list" >
                                                        <div class="col d-flex flex-column">
                                                            <p class="me-auto ref-num">#0002</p>
                                                            <p class="me-auto guest-style">Euli Perez</p>
                                                        </div>
                                                        <div class="align-content-center justify-content-center">
                                                            <p class="reserved ps-2 pe-2 pt-1 pb-1">Reserved</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="guest-list" >
                                                        <div class="col d-flex flex-column">
                                                            <p class="me-auto ref-num">#0003</p>
                                                            <p class="me-auto guest-style">Sofia Manongdo</p>
                                                        </div>
                                                        <div class="align-content-center justify-content-center">
                                                            <p class="checkout ps-2 pe-2 pt-1 pb-1">Checked out</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="guest-list" >
                                                        <div class="col d-flex flex-column">
                                                            <p class="me-auto ref-num">#0004</p>
                                                            <p class="me-auto guest-style">Jelisha Banaria</p>
                                                        </div>
                                                        <div class="align-content-center justify-content-center">
                                                            <p class="running-late ps-2 pe-2 pt-1 pb-1">Running late</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="row mb-3">
                                                    <div class="guest-list" >
                                                        <div class="col flex-column">
                                                            <p class="me-auto ref-num">#0005</p>
                                                            <p class="me-auto guest-style">Breiana Cirilo</p>
                                                        </div>
                                                        <div class="align-content-center justify-content-center">
                                                            <p class="cancelled ps-2 pe-2 pt-1 pb-1">Cancelled</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <div id="external-events">
                                        </div>
                                    </div>
                                    </div>
                                </div>
                        </div><!-- end col -->

                        <div class="col">
                            <div class="card last">
                                <div class="col">
                                    <div class="calendar-container card-body mt-3 mb-2 justify-content-center">
                                        <div class="me-3">
                                            <button onclick="prevMonth()" style="border: none; background-color: white;">&lt;</button>
                                        </div>
                                        <div>
                                            <p id="monthYear" class="heading"></p>
                                        </div>
                                        <div class="ms-3">
                                            <button onclick="nextMonth()" style="border: none; background-color: white;">&gt;</button>
                                        </div>
                                    </div>
                                    <div class="week">
                                        <div id="calendarWrapper">
                                            <table id="calendar" class="fw-light"></table>
                                        </div>
                                    </div>
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
                                                    if (i === 0) {
                                                        const cell = document.createElement('th');
                                                        row.appendChild(cell);
                                                        if (j < firstDay.getDay()) {
                                                            cell.innerHTML = "";
                                                        } else {
                                                            cell.innerHTML = date;
                                                            if (currentDate.getFullYear() === year && currentDate.getMonth() === month && currentDate.getDate() === date) {
                                                                cell.classList.add("today");
                                                            }
                                                            date++;
                                                        }
                                                    } else {
                                                        const cell = document.createElement('th'); // Changed to th for all rows
                                                        row.appendChild(cell);
                                                        if (date <= lastDay.getDate()) {
                                                            cell.innerHTML = date;
                                                            if (currentDate.getFullYear() === year && currentDate.getMonth() === month && currentDate.getDate() === date) {
                                                                cell.classList.add("today");
                                                            }
                                                            date++;
                                                        }
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
                            </div>
                        </div>
<!-- end col -->

                        <div class="col">
                            <div class="latest card col">
                                <div class="ms-4 pt-4 pb-4">
                                    <div class="latest-title">
                                        <div class="">
                                            <div><p class="heading">Latest Approved Booking</p></div>
                                        </div>
                                        <div class="more-container card-body p-0">
                                            <div class="p-0"><button class="more">More <span class="me-3">&gt;</span> </button></div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="approved-booking" >
                                            <div class="col flex-column">
                                                <p class="me-auto ref-num">#0010</p>
                                                <p class="me-auto guest-style">Julienne Galvez</p>
                                            </div>
                                            <div class="row align-content-center justify-content-center">
                                                <div class="col m-0 p-0 align-items-center">
                                                    <div class="latest-booking">
                                                        <div class="me-3 mb-0 pb-0"><img src="../assets/img/booking/term-icon.svg" width="15" height="15" class="icon-position"></div>
                                                        <div><p>Hourly</p></div>
                                                    </div>
                                                    <div class="latest-booking">
                                                        <div class="me-3 mb-0 pb-0"><img src="../assets/img/booking/pax-icon.svg" width="17" height="17" class="icon-position"></div>
                                                        <div><p>3 Pax</p></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="approved-booking" >
                                            <div class="col flex-column">
                                                <p class="me-auto ref-num">#0009</p>
                                                <p class="me-auto guest-style">Euli Perez</p>
                                            </div>
                                            <div class="row align-content-center justify-content-center">
                                                <div class="col m-0 p-0 align-items-center">
                                                    <div class="latest-booking">
                                                        <div class="me-3 mb-0 pb-0"><img src="../assets/img/booking/term-icon.svg" alt="" width="15" height="15" class="icon-position"></div>
                                                        <div><p>Daily</p></div>
                                                    </div>
                                                    <div class="latest-booking">
                                                        <div class="me-3 mb-0 pb-0"><img src="../assets/img/booking/pax-icon.svg" alt="" width="17" height="17" class="icon-position"></div>
                                                        <div><p>1 Pax</p></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="approved-booking" >
                                            <div class="col flex-column">
                                                <p class="me-auto ref-num">#0008</p>
                                                <p class="me-auto guest-style">Sofia Manongdo</p>
                                            </div>
                                            <div class="row align-content-center justify-content-center">
                                                <div class="col m-0 p-0 align-items-center">
                                                    <div class="latest-booking">
                                                        <div class="me-3 mb-0 pb-0"><img src="../assets/img/booking/term-icon.svg" alt="" width="15" height="15" class="icon-position"></div>
                                                        <div><p>Weekly</p></div>
                                                    </div>
                                                    <div class="latest-booking">
                                                        <div class="me-3 mb-0 pb-0"><img src="../assets/img/booking/pax-icon.svg" alt="" width="17" height="17" class="icon-position"></div>
                                                        <div><p>1 Pax</p></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="approved-booking" >
                                            <div class="col flex-column">
                                                <p class="me-auto ref-num">#0007</p>
                                                <p class="me-auto guest-style">Jelisha Banaria</p>
                                            </div>
                                            <div class="row align-content-center justify-content-center">
                                                <div class="col m-0 p-0 align-items-center">
                                                    <div class="latest-booking">
                                                        <div class="me-3 mb-0 pb-0"><img src="../assets/img/booking/term-icon.svg" alt="" width="15" height="15" class="icon-position"></div>
                                                        <div><p>Monthly</p></div>
                                                    </div>
                                                    <div class="latest-booking">
                                                        <div class="me-3 mb-0 pb-0"><img src="../assets/img/booking/pax-icon.svg" alt="" width="17" height="17" class="icon-position"></div>
                                                        <div><p>1 Pax</p></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="approved-booking" >
                                            <div class="col flex-column">
                                                <p class="me-auto ref-num">#0006</p>
                                                <p class="me-auto guest-style">Breiana Cirilo</p>
                                            </div>
                                            <div class="row align-content-center justify-content-center">
                                                <div class="col m-0 p-0 align-items-center" width="200px">
                                                    <div class="latest-booking">
                                                        <div class="me-3 mb-0 pb-0"><img src="../assets/img/booking/term-icon.svg" alt="" width="15" height="15" class="icon-position"></div>
                                                        <div><p>Event</p></div>
                                                    </div>
                                                    <div class="latest-booking">
                                                        <div class="me-3 mb-0 pb-0"><img src="../assets/img/booking/pax-icon.svg" alt="" width="17" height="17" class="icon-position"></div>
                                                        <div><p>30 Pax</p></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
    </div>

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