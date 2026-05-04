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
                    <div id="tablefiltesa_container">
                                        <div class="row FilterRow">
                                            <div class="col-lg-8">
                                               <h6 class="mt-1 mb-0">Manage user roles and their permissions</h6>
                                            </div>
                                           <div class="col-lg-4">
                                                <div class="rightPrFilters">
                                                      <div class="contact-options-wrap">
                                                        <a href="roles-permission-add.php" class="btn d-flex align-items-center gap-2 btn-sm btn-primary" >
                                                            <iconify-icon icon="fluent-mdl2:add-to"></iconify-icon> Add New Role
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
                         <div class="row rolesContainer" id="rolesContainer">

    <!-- Super Admin -->
    <div class="col-lg-6 col-xl-4 mb-4">
        <div class="card role-card h-100">
            <div class="card-header">
                <div class="CardHeadInner">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-shield-alt me-2"></i>Super Admin
                    </h5>
                    <span class="usersCount">1 users</span>
                </div>
            </div>
            <div class="card-body">
                <p class="card-text text-muted mb-3">Full system access with all permissions</p>
                <h6 class="mb-2">Permissions:</h6>
                <div class="permissions-list mb-3" style="max-height: 120px; overflow-y: auto;">
                    <span class="permission_item">Daily Application Overview</span>
                    <span class="permission_item">Loan Breakdown Overview</span>
                    <span class="permission_item">Recent System Activity</span>
                    <span class="permission_item">New Customer</span>
                    <span class="permission_item">Verify</span>
                    <span class="permission_item">Reject</span>
                    <span class="permission_item">Edit</span>
                    <span class="permission_item">Mark Profile Approved</span>
                    <span class="permission_item">Video KYC Call</span>
                    <span class="permission_item">Profile Activity</span>
                    <span class="permission_item">Reject (KYC)</span>
                    <span class="permission_item">Send to Credit Team</span>
                    <span class="permission_item">Complete Credit Assessment</span>
                    <span class="permission_item">Schedule Disbursement</span>
                    <span class="permission_item">Reject Disbursement</span>
                    <span class="permission_item">Disbursed Now</span>
                    <span class="permission_item">Mask As Paid</span>
                    <span class="permission_item">Add Category</span>
                    <span class="permission_item">Edit Category</span>
                    <span class="permission_item">Add Product</span>
                    <span class="permission_item">Edit Product</span>
                    <span class="permission_item">Mark all as Closed</span>
                    <span class="permission_item">View Support Status</span>
                    <span class="permission_item">System Activity Overview</span>
                </div>
                <div class="d-flex justify-content-between">
                    <small class="text-muted">24 permissions</small>
                </div>
            </div>
            <div class="card-footer bg-light">
                <a href="role-permission-edit.php" class="EditSyllabusBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit and update user role & permission">
                    <iconify-icon icon="basil:edit-outline"></iconify-icon> Edit
                </a>
            </div>
        </div>
    </div>

    <!-- Collections Officer -->
    <div class="col-lg-6 col-xl-4 mb-4">
        <div class="card role-card h-100">
            <div class="card-header">
                <div class="CardHeadInner">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-shield-alt me-2"></i>Collections Officer
                    </h5>
                    <span class="usersCount">3 users</span>
                </div>
            </div>
            <div class="card-body">
                <p class="card-text text-muted mb-3">Manages overdue accounts and repayment collections</p>
                <h6 class="mb-2">Permissions:</h6>
                <div class="permissions-list mb-3" style="max-height: 120px; overflow-y: auto;">
                    <span class="permission_item">Loan Breakdown Overview</span>
                    <span class="permission_item">Recent System Activity</span>
                    <span class="permission_item">Profile Activity</span>
                    <span class="permission_item">Mask As Paid</span>
                    <span class="permission_item">View Support Status</span>
                </div>
                <div class="d-flex justify-content-between">
                    <small class="text-muted">5 permissions</small>
                </div>
            </div>
            <div class="card-footer bg-light">
                <a href="role-permission-edit.php" class="EditSyllabusBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit and update user role & permission">
                    <iconify-icon icon="basil:edit-outline"></iconify-icon> Edit
                </a>
            </div>
        </div>
    </div>

    <!-- Compliance Officer -->
    <div class="col-lg-6 col-xl-4 mb-4">
        <div class="card role-card h-100">
            <div class="card-header">
                <div class="CardHeadInner">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-shield-alt me-2"></i>Compliance Officer
                    </h5>
                    <span class="usersCount">2 users</span>
                </div>
            </div>
            <div class="card-body">
                <p class="card-text text-muted mb-3">Ensures adherence to regulations and internal policies</p>
                <h6 class="mb-2">Permissions:</h6>
                <div class="permissions-list mb-3" style="max-height: 120px; overflow-y: auto;">
                    <span class="permission_item">Daily Application Overview</span>
                    <span class="permission_item">Verify</span>
                    <span class="permission_item">Reject</span>
                    <span class="permission_item">Reject (KYC)</span>
                    <span class="permission_item">System Activity Overview</span>
                </div>
                <div class="d-flex justify-content-between">
                    <small class="text-muted">5 permissions</small>
                </div>
            </div>
            <div class="card-footer bg-light">
                <a href="role-permission-edit.php" class="EditSyllabusBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit and update user role & permission">
                    <iconify-icon icon="basil:edit-outline"></iconify-icon> Edit
                </a>
            </div>
        </div>
    </div>

    <!-- Loan Officer -->
    <div class="col-lg-6 col-xl-4 mb-4">
        <div class="card role-card h-100">
            <div class="card-header">
                <div class="CardHeadInner">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-shield-alt me-2"></i>Loan Officer
                    </h5>
                    <span class="usersCount">4 users</span>
                </div>
            </div>
            <div class="card-body">
                <p class="card-text text-muted mb-3">Manages loan applications and client relationships</p>
                <h6 class="mb-2">Permissions:</h6>
                <div class="permissions-list mb-3" style="max-height: 120px; overflow-y: auto;">
                    <span class="permission_item">Daily Application Overview</span>
                    <span class="permission_item">New Customer</span>
                    <span class="permission_item">Verify</span>
                    <span class="permission_item">Send to Credit Team</span>
                    <span class="permission_item">Complete Credit Assessment</span>
                </div>
                <div class="d-flex justify-content-between">
                    <small class="text-muted">5 permissions</small>
                </div>
            </div>
            <div class="card-footer bg-light">
                <a href="role-permission-edit.php" class="EditSyllabusBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit and update user role & permission">
                    <iconify-icon icon="basil:edit-outline"></iconify-icon> Edit
                </a>
            </div>
        </div>
    </div>

    <!-- Branch Manager -->
    <div class="col-lg-6 col-xl-4 mb-4">
        <div class="card role-card h-100">
            <div class="card-header">
                <div class="CardHeadInner">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-shield-alt me-2"></i>Branch Manager
                    </h5>
                    <span class="usersCount">2 users</span>
                </div>
            </div>
            <div class="card-body">
                <p class="card-text text-muted mb-3">Oversees branch operations and staff</p>
                <h6 class="mb-2">Permissions:</h6>
                <div class="permissions-list mb-3" style="max-height: 120px; overflow-y: auto;">
                    <span class="permission_item">Daily Application Overview</span>
                    <span class="permission_item">Loan Breakdown Overview</span>
                    <span class="permission_item">Profile Activity</span>
                    <span class="permission_item">Add Category</span>
                    <span class="permission_item">Edit Category</span>
                    <span class="permission_item">Add Product</span>
                    <span class="permission_item">Edit Product</span>
                </div>
                <div class="d-flex justify-content-between">
                    <small class="text-muted">7 permissions</small>
                </div>
            </div>
            <div class="card-footer bg-light">
                <a href="role-permission-edit.php" class="EditSyllabusBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit and update user role & permission">
                    <iconify-icon icon="basil:edit-outline"></iconify-icon> Edit
                </a>
            </div>
        </div>
    </div>

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

    
    <?php include('footer.php') ?>
