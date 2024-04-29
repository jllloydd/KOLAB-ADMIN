<?php include '../connect/session_check.php'; ?>
<?php include '../layouts/head-main.php'; ?>

<?php include '../layouts/body.php'; ?>

<?php include '../layouts/head-css.php'; ?>
<?php include '../layouts/menu.php'; ?>

   

<div class="admins_section">
    <div class="main-content">
        <div class="page-content page-padding">
            <div class="container-fluid">

                <!-- Modal -->
                <div class="modal fade" id="exampleModalgrid" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalgridLabel">Grid Modals</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="javascript:void(0);">
                                    <div class="row g-3">
                                        <div class="col-xxl-6">
                                            <div>
                                                <label for="firstName" class="form-label">First Name</label>
                                                <input type="text" class="form-control" id="firstName" placeholder="Enter firstname">
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-xxl-6">
                                            <div>
                                                <label for="lastName" class="form-label">Last Name</label>
                                                <input type="text" class="form-control" id="lastName" placeholder="Enter lastname">
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-12">
                                            <label for="genderInput" class="form-label">Gender</label>
                                            <div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                                    <label class="form-check-label" for="inlineRadio3">Others</label>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-xxl-6">
                                            <div>
                                                <label for="emailInput" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="emailInput" placeholder="Enter your email">
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-xxl-6">
                                            <div>
                                                <label for="passwordInput" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="passwordInput" value="451326546">
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-12">
                                            <div class="hstack gap-2 justify-content-end">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

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
                                        <button type="button" class="w-100 btn btn-success add-btn" data-bs-toggle="modal" data-bs-target="#exampleModalGrid"><i class="ri-add-line align-bottom me-1"></i>New Booking</button>
                                    </div>
                                </div>
                        
                            </div>     
                        </div>
                    </div><!-- end card -->
                </div>

                <div class="row">
                    <div class="col-xl-3 col-md-6 ">
                        <div class="card card-design card-animate">
                            <div class="card-body d-flex align-items-center">
                                <div class="row d-flex align-items-center justify-content-start">
                                    <div class="col-2 avatar-sm flex-shrink-0 ms-2">
                                        <img src="../assets/img/admin/temp-avatar.avif" width="55px" height="55px">
                                    </div>
                                    <div class="col-auto d-flex flex-column align-items-center justify-content-start ms-4">
                                        <div class="fs-20 fw-bold ff-secondary margin-remove">Betty Shares</div>
                                        <div class="d-flex flex-row align-items-center justify-content-start mt-1 gap-1">
                                            <img src="../assets/img/admin/master-admin.svg" width="20px">
                                            <p class="margin-remove role-style">Master Admin</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6 ">
                        <div class="card card-design card-animate">
                            <div class="card-body d-flex align-items-center position-relative">
                                <div class="row d-flex align-items-center justify-content-start">
                                    <div class="col-2 avatar-sm flex-shrink-0 ms-2">
                                        <img src="../assets/img/admin/temp-avatar.avif" width="55px" height="55px">
                                    </div>
                                    <div class="col-auto d-flex flex-column align-items-start justify-content-start ms-4">
                                        <div class="fs-20 fw-bold ff-secondary margin-remove">Mari Prado</div>
                                        <div class="d-flex flex-row align-items-center justify-content-start mt-1 gap-1">
                                            <p class="margin-remove role-style">Admin</p>
                                            <img src="../assets/img/admin/admin.svg" width="20px">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="form-check form-switch position-absolute toggle-position me-2 pb-2">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                    <label class="role-style margin-remove ps-2" for="flexSwitchCheckDefault">Deactivate</label>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6 ">
                        <div class="card card-design card-animate">
                            <div class="card-body d-flex align-items-center position-relative">
                                <div class="row d-flex align-items-center justify-content-start">
                                    <div class="col-2 avatar-sm flex-shrink-0 ms-2">
                                        <img src="../assets/img/admin/temp-avatar.avif" width="55px" height="55px">
                                    </div>
                                    <div class="col-auto d-flex flex-column align-items-start justify-content-start ms-4">
                                        <div class="fs-20 fw-bold ff-secondary margin-remove">Denver Guitiw</div>
                                        <div class="d-flex flex-row align-items-center justify-content-start mt-1 gap-1">
                                            <p class="margin-remove role-style">Admin</p>
                                            <img src="../assets/img/admin/admin.svg" width="20px">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="form-check form-switch position-absolute toggle-position me-2 pb-2">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                    <label class="role-style margin-remove ps-2" for="flexSwitchCheckDefault">Deactivate</label>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6 ">
                        <div class="card card-design card-animate">
                            <div class="card-body d-flex align-items-center position-relative">
                                <div class="row d-flex align-items-center justify-content-start">
                                    <div class="col-2 avatar-sm flex-shrink-0 ms-2">
                                        <img src="../assets/img/admin/temp-avatar.avif" width="55px" height="55px">
                                    </div>
                                    <div class="col-auto d-flex flex-column align-items-start justify-content-start ms-4">
                                        <div class="fs-20 fw-bold ff-secondary margin-remove">Klein Palaganas</div>
                                        <div class="d-flex flex-row align-items-center justify-content-start mt-1 gap-1">
                                            <p class="margin-remove role-style">Admin</p>
                                            <img src="../assets/img/admin/admin.svg" width="20px">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="form-check form-switch position-absolute toggle-position me-2 pb-2">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                    <label class="role-style margin-remove ps-2" for="flexSwitchCheckDefault">Deactivate</label>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div> 

                <div class="row">
                    <div class="col-xl-3 col-md-6 ">
                            <div class="card card-design card-animate">
                                <div class="card-body d-flex align-items-center position-relative">
                                    <div class="row d-flex align-items-center justify-content-start">
                                        <div class="col-2 avatar-sm flex-shrink-0 ms-2">
                                            <img src="../assets/img/admin/temp-avatar.avif" width="55px" height="55px">
                                        </div>
                                        <div class="col-auto d-flex flex-column align-items-start justify-content-start ms-4">
                                            <div class="fs-20 fw-bold ff-secondary margin-remove">Terek Trinidad</div>
                                            <div class="d-flex flex-row align-items-center justify-content-start mt-1 gap-1">
                                                <p class="margin-remove role-style">Admin</p>
                                                <img src="../assets/img/admin/admin.svg" width="20px">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="form-check form-switch position-absolute toggle-position me-2 pb-2">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                        <label class="role-style margin-remove ps-2" for="flexSwitchCheckDefault">Deactivate</label>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6 ">
                            <div class="card card-design card-animate">
                                <div class="card-body d-flex align-items-center position-relative">
                                    <div class="row d-flex align-items-center justify-content-start">
                                        <div class="col-2 avatar-sm flex-shrink-0 ms-2">
                                            <img src="../assets/img/admin/temp-avatar.avif" width="55px" height="55px">
                                        </div>
                                        <div class="col-auto d-flex flex-column align-items-start justify-content-start ms-4">
                                            <div class="fs-20 fw-bold ff-secondary margin-remove">Kyle Gatudan</div>
                                            <div class="d-flex flex-row align-items-center justify-content-start mt-1 gap-1">
                                                <p class="margin-remove role-style">Admin</p>
                                                <img src="../assets/img/admin/admin.svg" width="20px">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="form-check form-switch position-absolute toggle-position me-2 pb-2">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                        <label class="role-style margin-remove ps-2" for="flexSwitchCheckDefault">Deactivate</label>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6 ">
                            <div class="card card-design card-animate">
                                <div class="card-body d-flex align-items-center position-relative">
                                    <div class="row d-flex align-items-center justify-content-start">
                                        <div class="col-2 avatar-sm flex-shrink-0 ms-2">
                                            <img src="../assets/img/admin/temp-avatar.avif" width="55px" height="55px">
                                        </div>
                                        <div class="col-auto d-flex flex-column align-items-start justify-content-start ms-4">
                                            <div class="fs-20 fw-bold ff-secondary margin-remove">Joannah Vinoya</div>
                                            <div class="d-flex flex-row align-items-center justify-content-start mt-1 gap-1">
                                                <p class="margin-remove role-style">Admin</p>
                                                <img src="../assets/img/admin/admin.svg" width="20px">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="form-check form-switch position-absolute toggle-position me-2 pb-2">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                        <label class="role-style margin-remove ps-2" for="flexSwitchCheckDefault">Deactivate</label>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6 ">
                            <div class="card card-design card-animate">
                                <div class="card-body d-flex align-items-center position-relative">
                                    <div class="row d-flex align-items-center justify-content-start">
                                        <div class="col-2 avatar-sm flex-shrink-0 ms-2">
                                            <img src="../assets/img/admin/temp-avatar.avif" width="55px" height="55px">
                                        </div>
                                        <div class="col-auto d-flex flex-column align-items-start justify-content-start ms-4">
                                            <div class="fs-20 fw-bold ff-secondary margin-remove">Walter Peralta</div>
                                            <div class="d-flex flex-row align-items-center justify-content-start mt-1 gap-1">
                                                <p class="margin-remove role-style">Admin</p>
                                                <img src="../assets/img/admin/admin.svg" width="20px">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="form-check form-switch position-absolute toggle-position me-2 pb-2">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                        <label class="role-style margin-remove ps-2" for="flexSwitchCheckDefault">Deactivate</label>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                </div>

                <div class="row">
                    <div class="col-xl-3 col-md-6 ">
                        <div class="card card-design card-animate">
                            <div class="card-body d-flex align-items-center position-relative">
                                <div class="row d-flex align-items-center justify-content-start">
                                    <div class="col-2 avatar-sm flex-shrink-0 ms-2">
                                        <img src="../assets/img/admin/temp-avatar.avif" width="55px" height="55px">
                                    </div>
                                    <div class="col-auto d-flex flex-column align-items-start justify-content-start ms-4">
                                        <div class="fs-20 fw-bold ff-secondary margin-remove">Jomar Corpuz</div>
                                        <div class="d-flex flex-row align-items-center justify-content-start mt-1 gap-1">
                                            <p class="margin-remove role-style">Admin</p>
                                            <img src="../assets/img/admin/admin.svg" width="20px">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="form-check form-switch position-absolute toggle-position me-2 pb-2">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                    <label class="role-style margin-remove ps-2" for="flexSwitchCheckDefault">Deactivate</label>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6 ">
                        <div class="card card-design-red card-animate">
                            <div class="card-body d-flex align-items-center position-relative">
                                <div class="row d-flex align-items-center justify-content-start">
                                    <div class="col-2 avatar-sm flex-shrink-0 ms-2">
                                        <img src="../assets/img/admin/temp-avatar.avif" width="55px" height="55px">
                                    </div>
                                    <div class="col-auto d-flex flex-column align-items-start justify-content-start ms-4">
                                        <div class="fs-20 fw-bold ff-secondary margin-remove">Jerom Canono</div>
                                        <div class="d-flex flex-row align-items-center justify-content-start mt-1 gap-1">
                                            <p class="margin-remove role-style">Admin</p>
                                            <img src="../assets/img/admin/admin-inactive.svg" width="20px">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="form-check form-switch position-absolute toggle-position me-2 pb-2">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                    <label class="role-style margin-remove ps-2" for="flexSwitchCheckChecked">Deactivate</label>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6 ">
                        <div class="card card-design-red card-animate">
                            <div class="card-body d-flex align-items-center position-relative">
                                <div class="row d-flex align-items-center justify-content-start">
                                    <div class="col-2 avatar-sm flex-shrink-0 ms-2">
                                        <img src="../assets/img/admin/temp-avatar.avif" width="55px" height="55px">
                                    </div>
                                    <div class="col-auto d-flex flex-column align-items-start justify-content-start ms-4">
                                        <div class="fs-20 fw-bold ff-secondary margin-remove">George Batas</div>
                                        <div class="d-flex flex-row align-items-center justify-content-start mt-1 gap-1">
                                            <p class="margin-remove role-style">Admin</p>
                                            <img src="../assets/img/admin/admin-inactive.svg" width="20px">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="form-check form-switch position-absolute toggle-position me-2 pb-2">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                    <label class="role-style margin-remove ps-2" for="flexSwitchCheckChecked">Deactivate</label>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6 ">
                        <div class="card card-design-red card-animate">
                            <div class="card-body d-flex align-items-center position-relative">
                                <div class="row d-flex align-items-center justify-content-start">
                                    <div class="col-2 avatar-sm flex-shrink-0 ms-2">
                                        <img src="../assets/img/admin/temp-avatar.avif" width="55px" height="55px">
                                    </div>
                                    <div class="col-auto d-flex flex-column align-items-start justify-content-start ms-4">
                                        <div class="fs-20 fw-bold ff-secondary margin-remove">Julie Yan</div>
                                        <div class="d-flex flex-row align-items-center justify-content-start mt-1 gap-1">
                                            <p class="margin-remove role-style">Admin</p>
                                            <img src="../assets/img/admin/admin-inactive.svg" width="20px">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="form-check form-switch position-absolute toggle-position me-2 pb-2">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                    <label class="role-style margin-remove ps-2" for="flexSwitchCheckChecked">Deactivate</label>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div>
                
            </div>
        </div>

    </div>
</div>

<!-- prismjs plugin -->
<script src="assets/libs/prismjs/prism.js"></script>

<!-- Modal Js -->
<script src="assets/js/pages/modal.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>





</body>

</html>