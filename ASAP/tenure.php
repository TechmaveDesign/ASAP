<?php include('header.php') ?>

<style>
    @media (min-width: 1400px) {

        .container,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl,
        .container-xxl {
            padding: 0px !important;
        }
    }

    .select2-container--open .select2-dropdown--below {
        z-index: 10000;
    }
</style>

</style>

<div class="container-xxl">

    <!-- Page Body Start-->
    <div class="hk-pg-body py-0">
        <div class="contactapp-wrap">

            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">

                    <!-- <header class="contact-header">
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a class="contactapp-title link-dark" href="#" role="button">
                                    <h1>New Customers</h1>
                                </a>

                            </div>

                        </div>
                        <div class="contact-options-wrap">
                           

                            <a id="refreshButton"
                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret d-sm-inline-block d-none"
                                href="#" data-bs-toggle="tooltip" data-placement="top" title=""
                                data-bs-original-title="Refresh"><span class="icon"><span class="feather-icon"><i
                                            data-feather="refresh-cw"></i></span></span></a>
                            <div class="v-separator d-lg-block d-none"></div>

                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover hk-navbar-togglable d-sm-inline-block d-none"
                                href="#" data-bs-toggle="tooltip" data-placement="top" title=""
                                data-bs-original-title="Collapse">
                                <span class="icon">
                                    <span class="feather-icon"><i data-feather="chevron-up"></i></span>
                                    <span class="feather-icon d-none"><i data-feather="chevron-down"></i></span>
                                </span>
                            </a>
                        </div>
              
                    </header> -->

                    <div class="contact-body">
                        <div class="contact-list-view">
                            <div class="custom-datatable-filter">
                                <div id="tablefiltesa_container">
                                        <div class="row FilterRow">
                                            <div class="col-lg-8">
                                                <div class="leftprFilters">
                                                    <div class="row p-0">
                                                    <!-- <div class="col-lg-3 col-sm-6 col-12">
                                                            <div class="input-blocks">
                                                                <iconify-icon icon="iconamoon:category-light" class="info-img"></iconify-icon>
                                                                <select class="select2">
                                                                    <option disabled selected>Select Department</option>
                                                                    <option>Inspection</option>
                                                                    <option>NDT</option>
                                                                    <option>Operator Assessment</option>
                                                                    <option>Training</option>
                                                                </select>

                                                            </div>
                                                        </div> -->
                                                        <div class="col-lg-4 col-sm-6 col-12">
                                                            <div class="input-blocks">
                                                            
                                                                <iconify-icon icon="uil:user" class="info-img"></iconify-icon>
                                                                <select class="select2">
                                                                    <option disabled selected>Select Customer</option>
                                                                    <option>Stephan Peralt</option>
                                                                    <option>Emma Johnson</option>
                                                                    <option>Amit Patel</option>
                                                                    <option>Sophia Lee</option>
                                                                    <option>Michael Carter</option>
                                                                    <option>James Smith</option>
                                                                    <option>Emily Davis</option>
                                                                    <option>Anna Taylor</option>
                                                                    <option>John Walker</option>
                                                                    <option>Jessica Brown</option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-sm-6 col-12">
                                                            <div class="input-blocks">
                                                              
                                                                <div class="input-icon  position-relative">
                                                                    <span class="input-icon-addon">
                                                                        <i class="ti ti-calendar text-gray-9"></i>
                                                                    </span>
                                                                    <input type="text" class="form-control daterange"
                                                                        placeholder="dd/mm/yyyy - dd/mm/yyyy">
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- <div class="col-lg-3 col-sm-6 col-12">
                                                            <div class="input-blocks">
                                                              
                                                                <iconify-icon icon="oui:app-users-roles"  class="info-img"></iconify-icon>
                                                                <select class="select2">
                                                                    <option disabled selected>Select Role</option>
                                                                    <option>Administrator</option>
                                                                    <option>Coordinator</option>
                                                                    <option>Manager</option>
                                                                    <option>Supervisor</option>
                                                                    <option>Team Lead</option>
                                                            
                                                                </select>

                                                            </div>
                                                        </div> -->

                                                    
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="rightPrFilters">
                                                      <div class="contact-options-wrap">
                                                        <a href="#" class="btn d-flex align-items-center gap-2 btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#createCategory">
                                                            <iconify-icon icon="fluent-mdl2:add-to"></iconify-icon> Create Category
                                                        </a>
                                                        <div class="v-separator d-lg-block d-none"></div>
                                                            <a id="refreshButton"
                                                                class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret d-sm-inline-block d-none"
                                                                href="#" data-bs-toggle="tooltip" data-placement="top" title=""
                                                                data-bs-original-title="Refresh"><span class="icon"><span class="feather-icon"><i
                                                                            data-feather="refresh-cw"></i></span></span></a>
                                                            <div class="v-separator d-lg-block d-none"></div>

                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover hk-navbar-togglable d-sm-inline-block d-none"
                                                                href="#" data-bs-toggle="tooltip" data-placement="top" title=""
                                                                data-bs-original-title="Collapse">
                                                                <span class="icon">
                                                                    <span class="feather-icon"><i data-feather="chevron-up"></i></span>
                                                                    <span class="feather-icon d-none"><i data-feather="chevron-down"></i></span>
                                                                </span>
                                                            </a>
                                                    </div>
                                                </div>
                                            </div>
                                            

                                        </div>
                                        <!-- /Filter -->
                                    </div>
									<table class="table common-datatable nowrap w-100">
										<thead>
											<tr>
                                                <th>Sr. No.</th>
												<th>Category Name</th>
												<th>Created Date</th>
												<th>Created by</th>
                                                <th>Role</th>
                                                <th>Status</th>
												<th>Actions</th>
											</tr>
										</thead>
										<tbody>
											 <tr>
                                                <td>1</td>
                                                <td>Business Loan</td>
                                                <td>20/07/2025</td>
                                                <td>Abhinav Jain</td>
                                                <td>Manager</td>
                                                <td><span class="badge badge-soft-success my-1 me-2">Active</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                        data-bs-toggle="modal" 
                                                        data-bs-target="#updateCategory"
                                                        title="Edit Category"
                                                        href="#">
                                                            <span class="icon">
                                                                <iconify-icon icon="basil:edit-outline"></iconify-icon>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>Solar Loan</td>
                                                <td>21/07/2025</td>
                                                <td>Ritika Mehra</td>
                                                <td>Loan Officer</td>
                                                <td><span class="badge badge-soft-success my-1 me-2">Active</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                        data-bs-toggle="modal" 
                                                        data-bs-target="#updateCategory"
                                                        title="Edit Category"
                                                        href="#">
                                                            <span class="icon">
                                                                <iconify-icon icon="basil:edit-outline"></iconify-icon>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>3</td>
                                                <td>Agriculture Loan</td>
                                                <td>22/07/2025</td>
                                                <td>Siddharth Rao</td>
                                                <td>Field Officer</td>
                                                <td><span class="badge badge-soft-danger my-1 me-2">Inactive</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                        data-bs-toggle="modal" 
                                                        data-bs-target="#updateCategory"
                                                        title="Edit Category"
                                                        href="#">
                                                            <span class="icon">
                                                                <iconify-icon icon="basil:edit-outline"></iconify-icon>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>4</td>
                                                <td>MSME Loan</td>
                                                <td>23/07/2025</td>
                                                <td>Neha Sharma</td>
                                                <td>Admin</td>
                                                <td><span class="badge badge-soft-success my-1 me-2">Active</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                        data-bs-toggle="modal" 
                                                        data-bs-target="#updateCategory"
                                                        title="Edit Category"
                                                        href="#">
                                                            <span class="icon">
                                                                <iconify-icon icon="basil:edit-outline"></iconify-icon>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>5</td>
                                                <td>Equipment Finance</td>
                                                <td>24/07/2025</td>
                                                <td>Aditya Singh</td>
                                                <td>Manager</td>
                                                <td><span class="badge badge-soft-success my-1 me-2">Active</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                        data-bs-toggle="modal" 
                                                        data-bs-target="#updateCategory"
                                                        title="Edit Category"
                                                        href="#">
                                                            <span class="icon">
                                                                <iconify-icon icon="basil:edit-outline"></iconify-icon>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
   



											
										</tbody>
									</table>
								</div>

                    </div>
                    <!-- /contact-body End-->
                </div>
                <!-- /contactapp-detail-wrap End -->
            </div>
            <!-- /contactapp-content End -->
        </div>
        <!-- /contactapp-wrap End -->
    </div>



    <!---------------------------------
Category Add Modal Code Start here
----------------------------------->
   
   <div class="ModalAddGurantor">
        <div class="modal fade" id="createCategory" tabindex="-1" aria-labelledby="KYCverifyModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content rounded-7 shadow">
                    <div class="modal-header CustomModal justify-content-end">
                         <!-- <h5 class="ModalTitle">
                            <div class="IconBox">
                                <iconify-icon icon="stash:user-id"></iconify-icon>
                            
                            </div>
                            <div class="TitleVox">
                            Create Category
                            </div>
                        

                        </h5> -->
                        <button type="button" class="btnClose btn btn-sm btn-bg-transparent" data-bs-dismiss="modal">
                            <iconify-icon icon="oui:cross"></iconify-icon>
                        </button>
                    </div>
                    <div class="modal-body pt-0">
                                <div class="row">
                                    <div class="col-lg-12">
                                       <div class="CateGoryWrap">
                                            <img src="dist/img/newimages/category-transparent.png" alt="">
                                            <h6>Create Category</h6>
                                           <p>Create and manage multiple loan categories to keep your offerings organized and easy to browse.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <!-- <label class="form-label">Category Name </label> -->
                                            <input type="text" class="form-control" placeholder="Enter Category Name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                            <button class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                            <button class="btn btn-theme" data-bs-dismiss="modal">Submit</button>
                            </div>
                        
                        </div>
                    </div>
                </div>
<!---------------------------------
Category Add Modal Code Start here
----------------------------------->
   

<!---------------------------------
Category Edit Modal Code Start here
----------------------------------->
   
   <div class="ModalAddGurantor">
        <div class="modal fade" id="updateCategory" tabindex="-1" aria-labelledby="KYCverifyModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content rounded-7 shadow">
                    <div class="modal-header CustomModal justify-content-end">
                         <!-- <h5 class="ModalTitle">
                            <div class="IconBox">
                                <iconify-icon icon="stash:user-id"></iconify-icon>
                            
                            </div>
                            <div class="TitleVox">
                            Create Category
                            </div>
                        

                        </h5> -->
                        <button type="button" class="btnClose btn btn-sm btn-bg-transparent" data-bs-dismiss="modal">
                            <iconify-icon icon="oui:cross"></iconify-icon>
                        </button>
                    </div>
                    <div class="modal-body pt-0">
                                <div class="row">
                                    <div class="col-lg-12">
                                       <div class="CateGoryWrap">
                                            <img src="dist/img/newimages/category-transparent.png" alt="">
                                            <h6>Update Category</h6>
                                           <p>Create and manage multiple loan categories to keep your offerings organized and easy to browse.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">Category Name </label>
                                            <input type="text" class="form-control" placeholder="Enter Category Name" value="Business Loan">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-label">Status</label>
                                                <select class="select2">
                                                    <option value="" disabled>Choose Status</option>
                                                    <option value="Active" selected>Active</option>
                                                    <option value="Inactive">Inactive</option>
                                                    <!-- <option value="prefer_not_say">Prefer not to say</option> -->
                                                </select>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                            <button class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                            <button class="btn btn-theme" data-bs-dismiss="modal">Update</button>
                            </div>
                        
                        </div>
                    </div>
                </div>
<!---------------------------------
Category Edit Modal Code Start here
----------------------------------->
    <!-- /Page Body End-->
    <?php include('footer.php') ?>

 