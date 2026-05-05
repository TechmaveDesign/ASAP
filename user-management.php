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
                                                        <div class="col-lg-3 col-sm-6 col-12">
                                                            <div class="input-blocks">
                                                            
                                                                <iconify-icon icon="uil:user" class="info-img"></iconify-icon>
                                                                <select class="select2">
                                                                    <option disabled selected>Select Role</option>
                                                                    <option>System Administrator</option>
                                                                    <option>Branch Manager</option>
                                                                    <option>Loan Officer / Loan Agent</option>
                                                                    <option>Loan Underwriter</option>
                                                                    <option>Recovery Agent</option>
                                                                    <option>Collections Officer</option>
                                                                    <option>Auditor</option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-sm-6 col-12">
                                                            <div class="input-blocks">
                                                              
                                                                <iconify-icon icon="oui:app-users-roles"  class="info-img"></iconify-icon>
                                                                <select class="select2">
                                                                    <option disabled selected>Select Status</option>
                                                                    <option>Active</option>
                                                                    <option>Inactive</option>
                                                                </select>

                                                            </div>
                                                        </div>

                                                    <div class="col-lg-4">
                                                        <div class="rightPrFilters">
                                                    <div class="input-icon  position-relative">
                                                        <span class="input-icon-addon">
                                                            <i class="ti ti-calendar text-gray-9"></i>
                                                        </span>
                                                        <input type="text" class="form-control date-range bookingrange"
                                                            placeholder="dd/mm/yyyy - dd/mm/yyyy">
                                                    </div>
                                                    
                                                </div>
                                                        </div>
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                           <div class="col-lg-4">
                                                <div class="rightPrFilters">
                                                      <div class="contact-options-wrap">
                                                        <a href="#" class="btn d-flex align-items-center gap-2 btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#userAdd">
                                                            <iconify-icon icon="fluent-mdl2:add-to"></iconify-icon> Add New User
                                                        </a>
                                                        <div class="v-separator d-lg-block d-none"></div>
                                                            <a id="refreshButton" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover no-caret d-sm-inline-block d-none" href="#" ><span class="icon"><span class="feather-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg></span></span></a>
                                                            <div class="v-separator d-lg-block d-none"></div>

                                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover hk-navbar-togglable d-sm-inline-block d-none" href="#" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Collapse">
                                                                <span class="icon">
                                                                    <span class="feather-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg></span>
                                                                    <span class="feather-icon d-none"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span>
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
                                                <th>User ID</th>
                                                <th>Name</th>
												<th>Email</th>
												<th>Role</th>
												<th>Status</th>
												<th>Last Login</th>
                                                <th>Created</th>
												<th>Actions</th>
											</tr>
										</thead>
										<tbody>
                                            <tr>
                                                <td><a href="#" class="customerID">#SU001</a></td>
                                                <td>Jitendar Kumar</td>
                                                <td class="text-truncate">jitendar.kumar@vasap.in</td>
                                                <td>System Administrator</td>
                                                <td><span class="badge badge-soft-success my-1 me-2">Active</span></td>
                                                <td>20/07/2025 10:15 AM</td>
                                                <td>11/02/2025 10:15 AM</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal" data-bs-target="#userEdit" href="#">
                                                            <span class="icon"><iconify-icon icon="proicons:eye"></iconify-icon></span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><a href="#" class="customerID">#SU002</a></td>
                                                <td>Priya Sharma</td>
                                                <td class="text-truncate">priya.sharma@loanplus.com</td>
                                                <td>Loan Officer</td>
                                                <td><span class="badge badge-soft-success my-1 me-2">Active</span></td>
                                                <td>18/07/2025 09:45 AM</td>
                                                <td>10/02/2025 02:30 PM</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal" data-bs-target="#userEdit" href="#">
                                                            <span class="icon"><iconify-icon icon="proicons:eye"></iconify-icon></span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><a href="#" class="customerID">#SU003</a></td>
                                                <td>Rohit Verma</td>
                                                <td class="text-truncate">rohit.verma@finserve.net</td>
                                                <td>Branch Manager</td>
                                                <td><span class="badge badge-soft-danger my-1 me-2">Inactive</span></td>
                                                <td>15/07/2025 11:20 AM</td>
                                                <td>08/02/2025 04:10 PM</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal" data-bs-target="#userEdit" href="#">
                                                            <span class="icon"><iconify-icon icon="proicons:eye"></iconify-icon></span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><a href="#" class="customerID">#SU004</a></td>
                                                <td>Neha Singh</td>
                                                <td class="text-truncate">neha.singh@creditlink.org</td>
                                                <td>Compliance Officer</td>
                                                <td><span class="badge badge-soft-success my-1 me-2">Active</span></td>
                                                <td>12/07/2025 03:05 PM</td>
                                                <td>05/02/2025 12:00 PM</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal" data-bs-target="#userEdit" href="#">
                                                            <span class="icon"><iconify-icon icon="proicons:eye"></iconify-icon></span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><a href="#" class="customerID">#SU005</a></td>
                                                <td>Arjun Mehta</td>
                                                <td class="text-truncate">arjun.mehta@banksecure.in</td>
                                                <td>Collections Officer</td>
                                                <td><span class="badge badge-soft-success my-1 me-2">Active</span></td>
                                                <td>10/07/2025 08:50 AM</td>
                                                <td>03/02/2025 09:15 AM</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal" data-bs-target="#userEdit" href="#">
                                                            <span class="icon"><iconify-icon icon="proicons:eye"></iconify-icon></span>
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

    <!-- /Page Body End-->

    <!---------------------------------
User Add Modal Code Start here
----------------------------------->
   <div class="ModalAddProduct">
    <div class="modal fade" id="userAdd" tabindex="-1" aria-labelledby="AddProductModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered   modal-dialog-scrollable">
            <div class="modal-content rounded-7 shadow">
                <div class="modal-header CustomModal">
                    <h5 class="ModalTitle">
                        <div class="IconBox">
                           <iconify-icon icon="bx:user"></iconify-icon>
                        </div>
                        <div class="TitleVox">
                            Add New User
                            <span>Enter details to create a new user.</span>
                        </div>
                    </h5>
                    <button type="button" class="btnClose btn btn-sm btn-bg-transparent" data-bs-dismiss="modal">
                        <iconify-icon icon="oui:cross"></iconify-icon>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label">Full Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Name">
                            </div>
                        </div>
                         <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label">Email Address <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group position-relative">
                                <label class="form-label">Password <span class="text-danger">*</span></label>
                                
                                <input type="password" id="password" class="form-control" placeholder="Enter Password">
                                
                                <!-- Toggle Icon -->
                                <iconify-icon id="togglePassword"
                                            icon="mdi:eye-off"
                                            style="position:absolute; right:15px; top:38px; cursor:pointer; font-size:20px;">
                                </iconify-icon>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Role <span class="text-danger">*</span></label>
                                <select class="form-control select2">
                                     <option disabled selected>Select Role</option>
                                    <option>System Administrator</option>
                                    <option>Branch Manager</option>
                                    <option>Loan Officer / Loan Agent</option>
                                    <option>Loan Underwriter</option>
                                    <option>Recovery Agent</option>
                                    <option>Collections Officer</option>
                                    <option>Auditor</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Status <span class="text-danger">*</span></label>
                                <select class="form-control select2">
                                    <option disabled selected>Select Status</option>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                            </div>
                        </div>

                      

                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-theme" data-bs-dismiss="modal">Add New User</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!---------------------------------
User Add Modal Code End here
----------------------------------->


 <!---------------------------------
User Edit Modal Code Start here
----------------------------------->
   <div class="ModalAddProduct">
    <div class="modal fade" id="userEdit" tabindex="-1" aria-labelledby="AddProductModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered   modal-dialog-scrollable">
            <div class="modal-content rounded-7 shadow">
                <div class="modal-header CustomModal">
                    <h5 class="ModalTitle">
                        <div class="IconBox">
                            <iconify-icon icon="bx:user"></iconify-icon>
                        </div>
                        <div class="TitleVox">
                           Edit New User
                            <span>Edit details of the user.</span>
                        </div>
                    </h5>
                    <button type="button" class="btnClose btn btn-sm btn-bg-transparent" data-bs-dismiss="modal">
                        <iconify-icon icon="oui:cross"></iconify-icon>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label">Full Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Name">
                            </div>
                        </div>
                         <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label">Email Address <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group position-relative">
                                <label class="form-label">Password <span class="text-danger">*</span></label>
                                
                                <input type="password" id="password" class="form-control" placeholder="Enter Password">
                                
                                <!-- Toggle Icon -->
                                <iconify-icon id="togglePassword"
                                            icon="mdi:eye-off"
                                            style="position:absolute; right:15px; top:38px; cursor:pointer; font-size:20px;">
                                </iconify-icon>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Role <span class="text-danger">*</span></label>
                                <select class="form-control select2">
                                     <option disabled selected>Select Role</option>
                                    <option>System Administrator</option>
                                    <option>Branch Manager</option>
                                    <option>Loan Officer / Loan Agent</option>
                                    <option>Loan Underwriter</option>
                                    <option>Recovery Agent</option>
                                    <option>Collections Officer</option>
                                    <option>Auditor</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Status <span class="text-danger">*</span></label>
                                <select class="form-control select2">
                                    <option disabled selected>Select Status</option>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                            </div>
                        </div>

                      

                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-theme" data-bs-dismiss="modal">Update & Save</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!---------------------------------
User Add Modal Code End here
----------------------------------->
    <?php include('footer.php') ?>
<script>
    const togglePassword = document.getElementById("togglePassword");
    const passwordInput = document.getElementById("password");

    togglePassword.addEventListener("click", () => {
        const isPassword = passwordInput.type === "password";
        passwordInput.type = isPassword ? "text" : "password";
        togglePassword.setAttribute("icon", isPassword ? "mdi:eye" : "mdi:eye-off");
    });
</script>