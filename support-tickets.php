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
                            <div class="row tickets_cardsnumber">

            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="prioritycardwrap">
                            <div class="ticketpriority_card_leftcn">
                                <div class="mt-0 text-left">
                                    <span class="priorityTitle">Pending Tickets
                                    </span>
                                    <h3 class="mb-0 mt-1 text-mediumpriority  fs-25">
                                        42</h3>
                                </div>
                            </div>
                            <div class="ticketpriority_card_Rightcn">
                                <div class="icon1 bg-primary-transparent my-auto ">
                                    <iconify-icon icon="ion:ticket-outline">
                                    </iconify-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="prioritycardwrap">
                            <div class="ticketpriority_card_leftcn">
                                <div class="mt-0 text-left">
                                    <span class="priorityTitle">Resolved Tickets
                                    </span>
                                    <h3 class="mb-0 mt-1 text-warning  fs-25">11
                                    </h3>
                                </div>
                            </div>
                            <div class="ticketpriority_card_Rightcn">
                                <div class="icon1 bg-secondary-transparent my-auto ">
                                    <iconify-icon icon="ion:ticket-outline">
                                    </iconify-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="prioritycardwrap">
                            <div class="ticketpriority_card_leftcn">
                                <div class="mt-0 text-left">
                                    <span class="priorityTitle">In Progress Tickets
                                    </span>
                                    <h3 class="mb-0 mt-1 text-success fs-25">38
                                    </h3>
                                </div>
                            </div>
                            <div class="ticketpriority_card_Rightcn">
                                <div class="icon1 bg-success-transparent my-auto ">
                                    <iconify-icon icon="ion:ticket-outline">
                                    </iconify-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                     <table class="table common-datatable withoutActionTR nowrap w-100">
                        <thead>
                            <tr>
                                <th>Ticket ID</th>
                                <th>Customer ID</th>
                                <th>Subject</th>
                                <!-- <th>Priority</th> -->
                                <th>Type</th>
                                <th>Request Date</th>
                                <th>Status</th>
                                <th class="no-sort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Ticket 1 -->
                            <tr>
                                <td><a href="##" class="customerID">#TC-072</a></td>
                                <td>
                                    <a href="##">
                                        VASAP202500001
                                    </a>
                                </td>
                                <td>Help! I'm facing an issue with password reset.</td>
                                <!-- <td>
                                    <div class="prioritystatus highPriority">
                                        <span class="highpriority_badge custom_mr_2 dot-label"></span>
                                        <span class="priorityStatus_text">High</span>
                                    </div>
                                </td> -->
                                <td>Problem</td>
                                <td>26/03/2025, 06:25 AM</td>
                                <td><span class="badge badge-soft-warning"><span
                                            class="badge-label">Pending</span></span></td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" title="Ticket Details" href="ticket-details.php">
                                            <span class="icon"><span class="feather-icon">
                                                    <iconify-icon icon="hugeicons:view"></iconify-icon>
                                                </span></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <!-- Ticket 2 -->
                            <tr>
                                <td><a href="##" class="customerID">#TC-073</a></td>
                                <td>
                                    <a href="##">
                                        VASAP202500002
                                    </a>
                                </td>
                                <td>Unable to update my billing information.</td>
                                <!-- <td>
                                    <div class="prioritystatus mediumPriority">
                                        <span class="mediumpriority_badge custom_mr_2 dot-label"></span>
                                        <span class="priorityStatus_text">Medium</span>
                                    </div>
                                </td> -->
                                <td>Billing</td>
                                <td>26/03/2025, 08:15 AM</td>
                                <td>
                                    <span class="badge badge-soft-info"><span class="badge-label">In
                                            Progress</span></span>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" title="Ticket Details" href="ticket-details.php">
                                            <span class="icon"><span class="feather-icon">
                                                    <iconify-icon icon="hugeicons:view"></iconify-icon>
                                                </span></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <!-- Ticket 3 -->
                            <tr>
                                <td><a href="##" class="customerID">#TC-074</a></td>
                                <td>
                                    <a href="##">
                                        VASAP202500003
                                    </a>
                                </td>
                                <td>Feature request: Add dark mode to the dashboard.</td>
                                <!-- <td>
                                    <div class="prioritystatus lowPriority">
                                        <span class="lowpriority_badge custom_mr_2 dot-label"></span>
                                        <span class="priorityStatus_text">Low</span>
                                    </div>
                                </td> -->
                                <td>Feature Request</td>
                                <td>25/03/2025, 02:40 PM</td>
                                <td><span class="badge badge-soft-success"><span
                                            class="badge-label">Resolved</span></span></td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" title="Ticket Details" href="ticket-details.php">
                                            <span class="icon"><span class="feather-icon">
                                                    <iconify-icon icon="hugeicons:view"></iconify-icon>
                                                </span></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <!-- Ticket 4 -->
                            <tr>
                                <td><a href="##" class="customerID">#TC-075</a></td>
                                <td>
                                    <a href="##">
                                        VASAP202500004
                                    </a>
                                </td>
                                <td>Cannot receive email notifications from support.</td>
                                <!-- <td>
                                    <div class="prioritystatus highPriority">
                                        <span class="highpriority_badge custom_mr_2 dot-label"></span>
                                        <span class="priorityStatus_text">High</span>
                                    </div>
                                </td> -->
                                <td>Email Issue</td>
                                <td>25/03/2025, 11:10 AM</td>
                                <td><span class="badge badge-soft-danger"><span class="badge-label">Closed</span></span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" title="Ticket Details" href="ticket-details.php">
                                            <span class="icon"><span class="feather-icon">
                                                    <iconify-icon icon="hugeicons:view"></iconify-icon>
                                                </span></span>
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
    <?php include('footer.php') ?>

 