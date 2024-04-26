<?php include '../connect/session_check.php'; ?>
<?php include '../layouts/head-main.php'; ?>

<?php include '../layouts/body.php'; ?>
<?php include '../layouts/head-css.php'; ?>
<?php include '../layouts/menu.php'; ?>

<div class="admins_section">
    <div class="main-content">
            <div class="page-content page-padding">
                <div class="container-fluid">

                    <!-- Bookings Modal -->
                    <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-dialog-centered modal-xl">
                            <div class="modal-content p-3">
                                <div class="modal-body ">
                                    <div class="row d-flex flex-row gap-3">

                                        <!-- First Column -->
                                        <div class="col card card-padding">
                                            <div class="card-body card-padding">
                                                <div class="membership-card p-5 d-flex flex-column justify-content-center align-items-center">
                                                    <p class="guest-name">Julienne Galvez</p>
                                                    <div class="d-flex flex-row justify-content-center align-items-center">
                                                        <img src="../assets/img/booking/diamond.svg" alt="" height="20" width="20" class="me-1">
                                                        <p class="membership-style">Maharlika</p>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-row justify-content-center align-items-end mt-4">
                                                    <div class="row w-100">
                                                        <div class="col-2 icon-col">
                                                            <img src="../assets/img/booking/phone.svg" alt="" height="22" width="22" class="me-1">
                                                        </div>
                                                        <div class="col-auto">
                                                            <p class="info-style">+63 9876543210</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row justify-content-center align-items-end mt-2">
                                                    <div class="row w-100">
                                                        <div class="col-2 icon-col">
                                                            <img src="../assets/img/booking/email.svg" alt="" height="22" width="22" class="me-3">
                                                        </div>
                                                        <div class="col-auto">
                                                            <p class="info-style">juliennegalvez@gmail.com</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Second Column -->
                                        <div class="col card">
                                            <div class="card-body">
                                            <p class="modal-heading mt-3">Booking Details</p>
                                                <div class="d-flex flex-row justify-content-between align-items-center">
                                                    <p class="modal-blue mt-3">#0001</p>
                                                    <p class="badge-pending mt-3">Pending</p>
                                                </div>

                                                <div class="row d-flex flex-row align-items-center justify-content-between">
                                                    <div class="col d-flex flex-row justify-content-start align-items-center">

                                                        <div class="row d-flex flex-column">
                                                            <div class="col">
                                                                <div class="row d-flex flex-row align-items-center">
                                                                    <div class="col-2 subheading-icon">
                                                                        <img src="../assets/img/booking/star.svg" alt="" height="22" width="22">
                                                                    </div>
                                                                    <div class="col-auto col-subheading">
                                                                        <p class="subheading">Term</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="modal-info heading-align">Hourly</div> 
                                                            </div>
                                                        </div>

                                                                        
                                                    </div>
                                                    <div class="col d-flex flex-row justify-content-end align-items-center">
                                                        <div class="row d-flex flex-column">
                                                            <div class="col remove-padding">
                                                                <div class="row d-flex flex-row align-items-center">
                                                                    <div class="col-2 subheading-icon">
                                                                        <img src="../assets/img/sidebar/person-admin.svg" alt="" height="25" width="25">
                                                                    </div>
                                                                    <div class="col-auto col-subheading">
                                                                        <p class="subheading">Pax</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="modal-info heading-align">1</div> 
                                                            </div>
                                                        </div>              
                                                    </div>

                                                </div>

                                                <div class="row d-flex flex-row align-items-center justify-content-between mt-3">
                                                    <div class="col d-flex flex-row justify-content-start align-items-center">

                                                        <div class="row d-flex flex-column">
                                                            <div class="col">
                                                                <div class="row d-flex flex-row align-items-center">
                                                                    <div class="col-2 subheading-icon">
                                                                        <img src="../assets/img/sidebar/admin-calendar.svg" alt="" height="22" width="22">
                                                                    </div>
                                                                    <div class="col-auto col-subheading">
                                                                        <p class="subheading remove-margin">Booking Date</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col d-flex flex-column align-items-start">
                                                                <p class="from-style heading-align mt-2">From</p>
                                                                <div class="modal-info heading-align">April 29, 2024</div> 
                                                            </div>
                                                        </div>                
                                                    </div>

                                                    <div class="col d-flex flex-row justify-content-end align-items-center">
                                                        <div class="row d-flex flex-column">
                                                            <div class="col remove-padding">
                                                                <div class="row d-flex flex-row align-items-center">
                                                                    <div class="col-2 subheading-icon">
                                                                        <img src="../assets/img/sidebar/admin-calendar.svg" alt="" height="22" width="22" class="visibility">
                                                                    </div>
                                                                    <div class="col-auto col-subheading">
                                                                        <p class="subheading visibility">Pax</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col d-flex flex-column align-items-start">
                                                                <p class="to-style heading-align mt-2">To</p>
                                                                <div class="modal-info heading-align">-</div> 
                                                            </div>
                                                        </div>              
                                                    </div>
                                                    
                                                </div>

                                                <div class="row d-flex flex-row align-items-center justify-content-between mt-3 mb-3">
                                                    <div class="col d-flex flex-row justify-content-start align-items-center">

                                                        <div class="row d-flex flex-column">
                                                            <div class="col">
                                                                <div class="row d-flex flex-row align-items-center">
                                                                    <div class="col-2 subheading-icon">
                                                                        <img src="../assets/img/booking/clock-icon.svg" alt="" height="22" width="22">
                                                                    </div>
                                                                    <div class="col-auto col-subheading">
                                                                        <p class="subheading remove-margin">Booking Time</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col d-flex flex-column align-items-start">
                                                                <p class="from-style heading-align mt-2">From</p>
                                                                <div class="modal-info heading-align">1:00 PM</div> 
                                                            </div>
                                                        </div>                
                                                    </div>

                                                    <div class="col d-flex flex-row justify-content-end align-items-center">
                                                        <div class="row d-flex flex-column">
                                                            <div class="col remove-padding">
                                                                <div class="row d-flex flex-row align-items-center">
                                                                    <div class="col-2 subheading-icon">
                                                                        <img src="../assets/img/sidebar/admin-calendar.svg" alt="" height="22" width="22" class="visibility">
                                                                    </div>
                                                                    <div class="col-auto col-subheading">
                                                                        <p class="subheading visibility">Pax</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col d-flex flex-column align-items-start">
                                                                <p class="to-style heading-align mt-2">To</p>
                                                                <div class="modal-info heading-align">5:00PM</div> 
                                                            </div>
                                                        </div>              
                                                    </div>
                                                    

                                                </div>

                                            </div>
                                        </div>

                                        <!-- third Column -->
                                        <div class="col card">
                                            <div class="card-body">
                                                <p class="modal-heading mt-3">Payment Details</p>
                                                <div class="d-flex flex-row justify-content-between align-items-center">
                                                    <p class="modal-blue mt-3">On-site</p>
                                                    <p class="badge-pending mt-3">Pending</p>
                                                </div>

                                                <div class="row d-flex flex-row align-items-center justify-content-between">
                                                    <div class="col-8 subheading-icon d-flex flex-row align-items-center">
                                                        <img src="../assets/img/booking/star.svg" alt="" height="22" width="22">
                                                        <p class="subheading">Term</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="modal-info text-align-end">Hourly ₱75</div> 
                                                    </div>
                                                </div>

                                                <div class="row d-flex flex-row align-items-center justify-content-between mt-3">
                                                    <div class="col-8 subheading-icon d-flex flex-row align-items-center">
                                                        <img src="../assets/img/sidebar/person-admin.svg" alt="" height="22" width="22">
                                                        <p class="subheading"># of Pax</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="modal-info text-align-end">1</div> 
                                                    </div>
                                                </div>

                                                <div class="row d-flex flex-row align-items-center justify-content-between mt-3">
                                                    <div class="col-8 subheading-icon d-flex flex-row align-items-center">
                                                        <img src="../assets/img/booking/clock-icon.svg" alt="" height="22" width="22">
                                                        <p class="subheading">Total Hours</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="modal-info text-align-end">4</div> 
                                                    </div>
                                                </div>

                                                <div class="row d-flex flex-row justify-content-between align-items-center mt-3">
                                                    <div class="col-8 subheading-icon d-flex flex-row align-items-center">
                                                        <img src="../assets/img/booking/voucher.svg" alt="" height="22" width="22">
                                                        <p class="subheading">Voucher</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="modal-info">1</div> 
                                                    </div>
                                                </div>

                                                
                                                <div class="d-flex flex-row justify-content-between align-items-center mt-4">
                                                    <p class="modal-blue">Total Amount</p>
                                                    <p class="modal-blue">₱300</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="modal-footer d-flex justify-content-center">
                                            <button type="button" class="btn btn-confirm" data-bs-dismiss="modal">Confirm Booking</button>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
            </div>
    </div>
</div>

</body>

</html>