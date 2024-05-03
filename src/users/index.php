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
            

            <div>
            <button type="button" class="btn btn-info " data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">Extra large Modal</button>
                <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myExtraLargeModalLabel">Extra large
                                    modal</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h6 class="fs-15">Give your text a good structure</h6>
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <i class="ri-checkbox-circle-fill text-success"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <p class="text-muted mb-0">Raw denim you probably haven't heard of them jean shorts Austin.
                                            Nesciunt tofu stumptown aliqua, retro synth master cleanse.</p>
                                    </div>
                                </div>
                                <div class="d-flex mt-2">
                                    <div class="flex-shrink-0">
                                        <i class="ri-checkbox-circle-fill text-success"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-2 ">
                                        <p class="text-muted mb-0">Too much or too little spacing, as in the example below, can make things unpleasant for the reader. The goal is to make your text as comfortable to read as possible. </p>
                                    </div>
                                </div>
                                <div class="d-flex mt-2">
                                    <div class="flex-shrink-0">
                                        <i class="ri-checkbox-circle-fill text-success"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-2 ">
                                        <p class="text-muted mb-0">In some designs, you might adjust your tracking to create a certain artistic effect. It can also help you fix fonts that are poorly spaced to begin with.</p>
                                    </div>
                                </div>
                                <div class="d-flex mt-2">
                                    <div class="flex-shrink-0">
                                        <i class="ri-checkbox-circle-fill text-success"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-2 ">
                                        <p class="text-muted mb-0">For that very reason, I went on a quest and spoke to many different professional graphic designers and asked them what graphic design tips they live.</p>
                                    </div>
                                </div>
                                <div class="d-flex mt-2">
                                    <div class="flex-shrink-0">
                                        <i class="ri-checkbox-circle-fill text-success"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-2 ">
                                        <p class="text-muted mb-0">You've probably heard that opposites attract. The same is true for fonts. Don't be afraid to combine font styles that are different but complementary, like sans serif with serif, short with tall, or decorative with simple. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR.</p>
                                    </div>
                                </div>
                                <div class="d-flex mt-2">
                                    <div class="flex-shrink-0">
                                        <i class="ri-checkbox-circle-fill text-success"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-2 ">
                                        <p class="text-muted mb-0">For that very reason, I went on a quest and spoke to many different professional graphic designers and asked them what graphic design tips they live.</p>
                                    </div>
                                </div>
                                <h6 class="fs-16 my-3">Graphic Design</h6>
                                <div class="d-flex mt-2">
                                    <div class="flex-shrink-0">
                                        <i class="ri-checkbox-circle-fill text-success"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-2 ">
                                        <p class="text-muted mb-0">Opposites attract, and that’s a fact. It’s in our nature to be interested in the unusual, and that’s why using contrasting colors in Graphic Design is a must. It’s eye-catching, it makes a statement, it’s impressive graphic design. Increase or decrease the letter spacing depending.</p>
                                    </div>
                                </div>
                                <div class="d-flex mt-2">
                                    <div class="flex-shrink-0">
                                        <i class="ri-checkbox-circle-fill text-success"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-2 ">
                                        <p class="text-muted mb-0">Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater.</p>
                                    </div>
                                </div>
                                <div class="d-flex mt-2">
                                    <div class="flex-shrink-0">
                                        <i class="ri-checkbox-circle-fill text-success"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-2 ">
                                        <p class="text-muted mb-0">Just like in the image where we talked about using multiple fonts, you can see that the background in this graphic design is blurred. Whenever you put text on top of an image, it’s important that your viewers can understand.</p>
                                    </div>
                                </div>
                                <div class="d-flex mt-2">
                                    <div class="flex-shrink-0">
                                        <i class="ri-checkbox-circle-fill text-success"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-2 ">
                                        <p class="text-muted mb-0">Keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a>
                                <button type="button" class="btn btn-primary ">Save changes</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </div>
    </div>
</div>







</body>

</html>