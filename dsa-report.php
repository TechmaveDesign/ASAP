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
                                            <div class="col-lg-12">
                                                <div class="leftprFilters">
                                                    <div class="row p-0">
                                                    <div class="col-lg-3 col-sm-6 col-12">
                                                            <div class="input-blocks">
                                                                <iconify-icon icon="iconamoon:category-light" class="info-img"></iconify-icon>
                                                                <select class="select2">
                                                                    <option disabled selected>Select Status</option>
                                                                    <option>Approved</option>
                                                                    <option>Account Frozen</option>
                                                                    <option>Pending</option>
                                                                    <!-- <option>Training</option> -->
                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-sm-6 col-12">
                                                            <div class="input-blocks">
                                                            
                                                                <iconify-icon icon="uil:user" class="info-img"></iconify-icon>
                                                                <select class="select2">
                                                                    <option disabled selected>Select DSA Partner</option>
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

                                                    <div class="col-lg-3">
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

                                           

                                            

                                        </div>
                                        <!-- /Filter -->
                                    </div>

                                     
									<table class="table common-datatable nowrap w-100">
    <thead>
        <tr>
            <th>DSA Partner</th>
            <th>Total Leads</th>
            <th>Converted Leads</th>
            <th>In Progress</th>
            <th>Rejected</th>
            <th>Total Disbursed Amount</th>
            <th>Conversion Ratio</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>

        <tr>
            <td>Rahul Finance Services</td>
            <td>320</td>
            <td>180</td>
            <td>90</td>
            <td>50</td>
            <td>₹4.2 Cr</td>
            <td><span class="badge badge-soft-success">56.25%</span></td>
            <td>
                <div class="d-flex align-items-center">
                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                       data-bs-toggle="tooltip" title="View Report"
                       href="dsa-details.php">
                        <span class="icon">
                            <iconify-icon icon="proicons:eye"></iconify-icon>
                        </span>
                    </a>
                </div>
            </td>
        </tr>

        <tr>
            <td>Sharma Associates</td>
            <td>250</td>
            <td>135</td>
            <td>70</td>
            <td>45</td>
            <td>₹3.1 Cr</td>
            <td><span class="badge badge-soft-success">54%</span></td>
            <td>
                <div class="d-flex align-items-center">
                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                       data-bs-toggle="tooltip" title="View Report"
                       href="dsa-details.php">
                        <span class="icon">
                            <iconify-icon icon="proicons:eye"></iconify-icon>
                        </span>
                    </a>
                </div>
            </td>
        </tr>

        <tr>
            <td>Capital Loan Hub</td>
            <td>180</td>
            <td>80</td>
            <td>65</td>
            <td>35</td>
            <td>₹1.8 Cr</td>
            <td><span class="badge badge-soft-warning">44.4%</span></td>
            <td>
                <div class="d-flex align-items-center">
                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                       data-bs-toggle="tooltip" title="View Report"
                       href="dsa-details.php">
                        <span class="icon">
                            <iconify-icon icon="proicons:eye"></iconify-icon>
                        </span>
                    </a>
                </div>
            </td>
        </tr>

        <tr>
            <td>Prime Finance Group</td>
            <td>210</td>
            <td>95</td>
            <td>80</td>
            <td>35</td>
            <td>₹2.4 Cr</td>
            <td><span class="badge badge-soft-warning">45.2%</span></td>
            <td>
                <div class="d-flex align-items-center">
                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                       data-bs-toggle="tooltip" title="View Report"
                       href="dsa-details.php">
                        <span class="icon">
                            <iconify-icon icon="proicons:eye"></iconify-icon>
                        </span>
                    </a>
                </div>
            </td>
        </tr>

        <tr>
            <td>Trust Loan Solutions</td>
            <td>150</td>
            <td>55</td>
            <td>60</td>
            <td>35</td>
            <td>₹1.2 Cr</td>
            <td><span class="badge badge-soft-danger">36.6%</span></td>
            <td>
                <div class="d-flex align-items-center">
                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                       data-bs-toggle="tooltip" title="View Report"
                       href="dsa-details.php">
                        <span class="icon">
                            <iconify-icon icon="proicons:eye"></iconify-icon>
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

    <!-- /Page Body End-->
    <?php include('footer.php') ?>

	