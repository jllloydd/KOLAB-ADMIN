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

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body card-margin">
                                    <div id="bookingManagementData" class="table-responsive table-card">
                                        <table class="table align-middle table-nowrap">
                                            <thead class="table-light">
                                                <tr>
                                                    <th class="sort" data-sort="id_num">ID No.</th>
                                                    <th class="sort" data-sort="member">Member</th>
                                                    <th class="sort" data-sort="email">Email</th>
                                                    <th class="sort" data-sort="membership">Membership</th>
                                                    <th class="sort" data-sort="date_registered">Date Registered</th>
                                                    <th class="sort" data-sort="status">Status</th>
                                                    <th class="sort" data-sort="payment_status">Payment Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="bookingList" class="list">
                                                <!-- Dynamic content will be loaded here -->
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="noresult" style="display: none">
                                        <div class="text-center">
                                            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                            </lord-icon>
                                            <h5 class="mt-2">Sorry! No Result Found</h5>
                                            <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any
                                                orders for you search.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="d-flex justify-content-between align-items-center">
                                <p id="bookingCount">Showing 0 from 0 data</p>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                        <!-- Pagination links will be dynamically inserted here -->
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </div>
</div>





</body>

</html>