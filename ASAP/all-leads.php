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
.table-responsive {
    width: 1260px;
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
                                                                    <option>In progress</option>
                                                                    <option>New</option>
                                                                    <option>Verified</option>
                                                                    <option>Rejected</option>
                                                                    <option>In Progress</option>

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
                                                <th>UTM Links</th>
												<th>Lead Id</th>
                                                <th>DSA Partner</th>
												<th>Customer</th>
												<th>Loan Type</th>
												<th>Request Amount</th>
												<th>Status</th>
												<th>Applied On</th>
												<!-- <th>Actions</th> -->
											</tr>
										</thead>
										<tbody>
					
                                        <tr>
                                              <!-- UTM Link -->
    <td>
        <a href="#" class="utmLink" title="https://vasap.in/?utm_source=rahul">
            vasap.in/?utm_source=rahul
        </a>
    </td>
    <td>
        <a href="#" class="customerID">LD202500001</a>
    </td>

    <!-- DSA Name -->
    <td>
        <span class="d-block text-high-em">Rahul Finance Services</span>
    </td>

  

    <td>
        <div class="media align-items-center">
            <div class="media-head me-2">
                <div class="avatar avatar-xs avatar-rounded">
                    <img src="dist/img/newimages/userdummy.png" alt="user" class="avatar-img">
                </div>
            </div>
            <div class="media-body">
                <span class="d-block text-high-em">Amit Sharma</span>
                <span class="MobileNo.">98765 43210</span>
            </div>
        </div>
    </td>

    <td><span class="leadCount">Personal Loan</span></td>
    <td>₹5,00,000</td>
    <td><span class="badge badge-soft-info my-1 me-2">New</span></td>
    <td>18/07/2025 12:30 PM</td>

    <!-- <td>
        <div class="d-flex align-items-center">
            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
               data-bs-toggle="tooltip" title="View DSA Details" href="dsa-details.php">
                <span class="icon"><iconify-icon icon="proicons:eye"></iconify-icon></span>
            </a>
        </div>
    </td> -->
</tr>


<tr>
     <td>
        <a href="#" class="utmLink" title="https://vasap.in/?utm_source=sharma">
            vasap.in/?utm_source=sharma
        </a>
    </td>
    <td>
        <a href="#" class="customerID">LD202500002</a>
    </td>

    <td>
        <span class="d-block text-high-em">Sharma Associates</span>
    </td>

   

    <td>
        <div class="media align-items-center">
            <div class="media-head me-2">
                <div class="avatar avatar-xs avatar-rounded">
                    <img src="dist/img/newimages/userdummy.png" alt="user" class="avatar-img">
                </div>
            </div>
            <div class="media-body">
                <span class="d-block text-high-em">Rohit Verma</span>
                <span class="MobileNo.">91234 56789</span>
            </div>
        </div>
    </td>

    <td><span class="leadCount">Home Loan</span></td>
    <td>₹25,00,000</td>
    <td><span class="badge badge-soft-success my-1 me-2">Verified</span></td>
    <td>19/07/2025 10:15 AM</td>

    <!-- <td>
        <div class="d-flex align-items-center">
            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
               data-bs-toggle="tooltip" title="View DSA Details" href="dsa-details.php">
                <span class="icon"><iconify-icon icon="proicons:eye"></iconify-icon></span>
            </a>
        </div>
    </td> -->
</tr>


<tr>
     <td>
        <a href="#" class="utmLink" title="https://vasap.in/?utm_source=capital">
            vasap.in/?utm_source=capital
        </a>
    </td>
    <td>
        <a href="#" class="customerID">LD202500003</a>
    </td>

    <td>
        <span class="d-block text-high-em">Capital Loan Hub</span>
    </td>

   

    <td>
        <div class="media align-items-center">
            <div class="media-head me-2">
                <div class="avatar avatar-xs avatar-rounded">
                    <img src="dist/img/newimages/userdummy.png" alt="user" class="avatar-img">
                </div>
            </div>
            <div class="media-body">
                <span class="d-block text-high-em">Neha Gupta</span>
                <span class="MobileNo.">90123 45678</span>
            </div>
        </div>
    </td>

    <td><span class="leadCount">Business Loan</span></td>
    <td>₹10,00,000</td>
    <td><span class="badge badge-soft-warning my-1 me-2">In Progress</span></td>
    <td>20/07/2025 03:45 PM</td>

    <!-- <td>
        <div class="d-flex align-items-center">
            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
               data-bs-toggle="tooltip" title="View DSA Details" href="dsa-details.php">
                <span class="icon"><iconify-icon icon="proicons:eye"></iconify-icon></span>
            </a>
        </div>
    </td> -->
</tr>


<tr>
    <td>
        <a href="#" class="utmLink" title="https://vasap.in/?utm_source=prime">
            vasap.in/?utm_source=prime
        </a>
    </td>
    <td>
        <a href="#" class="customerID">LD202500004</a>
    </td>

    <td>
        <span class="d-block text-high-em">Prime Finance Group</span>
    </td>

    

    <td>
        <div class="media align-items-center">
            <div class="media-head me-2">
                <div class="avatar avatar-xs avatar-rounded">
                    <img src="dist/img/newimages/userdummy.png" alt="user" class="avatar-img">
                </div>
            </div>
            <div class="media-body">
                <span class="d-block text-high-em">Kunal Singh</span>
                <span class="MobileNo.">88990 11223</span>
            </div>
        </div>
    </td>

    <td><span class="leadCount">Car Loan</span></td>
    <td>₹8,50,000</td>
    <td><span class="badge badge-soft-danger my-1 me-2">Rejected</span></td>
    <td>21/07/2025 11:20 AM</td>

    <!-- <td>
        <div class="d-flex align-items-center">
            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
               data-bs-toggle="tooltip" title="View DSA Details" href="dsa-details.php">
                <span class="icon"><iconify-icon icon="proicons:eye"></iconify-icon></span>
            </a>
        </div>
    </td> -->
</tr>


<tr>
     <td>
        <a href="#" class="utmLink" title="https://vasap.in/?utm_source=trust">
            vasap.in/?utm_source=trust
        </a>
    </td>
    <td>
        <a href="#" class="customerID">LD202500005</a>
    </td>

    <td>
        <span class="d-block text-high-em">Trust Loan Solutions</span>
    </td>

   

    <td>
        <div class="media align-items-center">
            <div class="media-head me-2">
                <div class="avatar avatar-xs avatar-rounded">
                    <img src="dist/img/newimages/userdummy.png" alt="user" class="avatar-img">
                </div>
            </div>
            <div class="media-body">
                <span class="d-block text-high-em">Pooja Mehta</span>
                <span class="MobileNo.">77889 90011</span>
            </div>
        </div>
    </td>

    <td><span class="leadCount">Education Loan</span></td>
    <td>₹6,00,000</td>
    <td><span class="badge badge-soft-success my-1 me-2">Verified</span></td>
    <td>22/07/2025 09:50 AM</td>

    <!-- <td>
        <div class="d-flex align-items-center">
            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
               data-bs-toggle="tooltip" title="View DSA Details" href="dsa-details.php">
                <span class="icon"><iconify-icon icon="proicons:eye"></iconify-icon></span>
            </a>
        </div>
    </td> -->
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

	