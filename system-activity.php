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
                                                        <!-- <div class="col-lg-5 col-sm-6 col-12">
                                                            <div class="input-blocks">
                                                                <div class="input-icon  position-relative">
                                                                    <span class="input-icon-addon">
                                                                       <iconify-icon icon="proicons:search" class="info-img"></iconify-icon>
                                                                    </span>
                                                                    <input type="text" class="form-control" placeholder="Search By Customer & Loan ID">
                                                                </div>

                                                            </div>
                                                        </div> -->
                                                        
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
                                                                    <option disabled selected>Select Status</option>
                                                                    <option>Active</option>
                                                                    <option>Inactive</option>
                                                                </select>

                                                            </div>
                                                        </div> -->

                                                    
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="rightPrFilters">
                                                      <div class="contact-options-wrap">
                                                        <!-- <a href="#" class="btn d-flex align-items-center gap-2 btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#ProductAdd">
                                                            <iconify-icon icon="fluent-mdl2:add-to"></iconify-icon> Create Loan Product
                                                        </a> -->
                                                        <!-- <div class="v-separator d-lg-block d-none"></div> -->
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
            <th>System User ID</th>
            <th>Date & Time</th>
            <th>Action Performed</th>
            <th>Performed By</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>VSYS202500001</td>
            <td>30/07/2025 10:22 AM</td>
            <td>
                Loan Application Received
               
                <a href="#" class="customerID">LN-20250730-001</a>
            </td>
            <td>System</td>
            <td>-</td>
        </tr>
        <tr>
            <td>VSYS202500001</td>
            <td>30/07/2025 11:05 AM</td>
            <td>
                Personal Details Verified
               
                <a href="#" class="customerID">LN-20250730-001</a>
            </td>
            <td>Ritika Mehra</td>
            <td>Loan Officer</td>
        </tr>
        <tr>
            <td>VSYS202500001</td>
            <td>30/07/2025 11:15 AM</td>
            <td>
                Business Details Rejected
               
                <a href="#" class="customerID">LN-20250730-001</a>
            </td>
            <td>Neha Sharma</td>
            <td>Verification Manager</td>
        </tr>
        <tr>
            <td>VSYS202500001</td>
            <td>30/07/2025 12:00 PM</td>
            <td>
                Credit Assessment Form Submitted
                
                <a href="#" class="customerID">LN-20250730-001</a>
            </td>
            <td>Aditya Singh</td>
            <td>Credit Officer</td>
        </tr>
        <tr>
            <td>VSYS202500001</td>
            <td>30/07/2025 12:45 PM</td>
            <td>
                Customer Approved Consent
              
                <a href="#" class="customerID">LN-20250730-001</a>
            </td>
            <td>System</td>
            <td>-</td>
        </tr>
        <tr>
            <td>VSYS202500001</td>
            <td>30/07/2025 01:30 PM</td>
            <td>
                Disbursement Scheduled
              
                <a href="#" class="customerID">LN-20250730-001</a>
            </td>
            <td>Siddharth Rao</td>
            <td>Operations</td>
        </tr>
        <tr>
            <td>VSYS202500001</td>
            <td>05/08/2025 10:05 AM</td>
            <td>
                EMI Marked as Paid
               
                <a href="#" class="customerID">LN-20250730-001</a>
            </td>
            <td>Ritika Mehra</td>
            <td>Loan Officer</td>
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
    <?php include('footer.php') ?>

 