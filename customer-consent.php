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
                                                                    <option disabled selected>Select User</option>
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
                                                        <div class="col-lg-3 col-sm-6 col-12">
                                                            <div class="input-blocks">
                                                              
                                                                <iconify-icon icon="oui:app-users-roles"  class="info-img"></iconify-icon>
                                                                <select class="select2">
                                                                    <option disabled selected>Select Status</option>
                                                                    <option>Waiting For Approval</option>
                                                                    <option>Accepted</option>
                                                                    <option>Rejected</option>
                                                                    <!-- <option>In Progress</option> -->
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
                                                <th>Customer Id</th>
												<th>Name</th>
												<th>Email Address</th>
												<th>Phone</th>
												<th>Status</th>
												<th>Onboard Date Time</th>
												<th>Actions</th>
											</tr>
										</thead>
										<tbody>
											<tr>
                                                <td>
                                                    <a href="customer-consent-view.php" class="customerID">ASAP202500001</a>
                                                </td>
												<td>
													<div class="media align-items-center">
														<div class="media-head me-2">
															<div class="avatar avatar-xs avatar-rounded">
																<img src="dist/img/newimages/indian-users/user-in1.png" alt="user" class="avatar-img">
															</div>
														</div>
														<div class="media-body">
															<span class="d-block text-high-em">Amit Sharma</span>
														</div>
													</div>
												</td>
												<td class="text-truncate">amit.sharma@asap.in</td>
												<td>98765 43210</td>
												<td><span class="badge badge-soft-warning my-1 me-2">Waiting For Approval</span></td>

												<td>20/07/2025 10:15 AM</td>
												<td>
													<div class="d-flex align-items-center">
														<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
															data-bs-toggle="tooltip" title="View Customer Details"
															href="customer-consent-view.php">
															<span class="icon"><iconify-icon icon="proicons:eye"></iconify-icon></span>
														</a>
													</div>
												</td>
											</tr>

											<tr>
                                                <td>
                                                    <a href="customer-consent-view.php" class="customerID">ASAP202500002</a>
                                                </td>
												<td>
													<div class="media align-items-center">
														<div class="media-head me-2">
															<div class="avatar avatar-xs avatar-rounded">
																<img src="dist/img/newimages/indian-users/user-in2.png" alt="user" class="avatar-img">
															</div>
														</div>
														<div class="media-body">
															<span class="d-block text-high-em">Vijay Desai</span>
														</div>
													</div>
												</td>
												<td class="text-truncate">vijay.desai@clariesup.in</td>
												<td>98230 11456</td>
												<td><span class="badge badge-soft-success my-1 me-2">Accepted</span></td>

												<td>20/07/2025 11:25 AM</td>
												<td>
													<div class="d-flex align-items-center">
														<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
															data-bs-toggle="tooltip" title="View Customer Details"
															href="customer-consent-view.php">
															<span class="icon"><iconify-icon icon="proicons:eye"></iconify-icon></span>
														</a>
													</div>
												</td>
											</tr>

											<tr>
                                                <td>
                                                    <a href="customer-consent-view.php" class="customerID">ASAP202500003</a>
                                                </td>
												<td>
													<div class="media align-items-center">
														<div class="media-head me-2">
															<div class="avatar avatar-xs avatar-soft-info avatar-rounded">
																<!-- <span class="initial-wrap">R</span> -->
																 <img src="dist/img/newimages/indian-users/user-in3.png" alt="user" class="avatar-img">
															</div>
														</div>
														<div class="media-body">
															<span class="d-block text-high-em">Rahul Mehta</span>
														</div>
													</div>
												</td>
												<td class="text-truncate">rahul.mehta@leernoca.in</td>
												<td>99001 77665</td>
											<td><span class="badge badge-soft-danger my-1 me-2">Rejected</span></td>
												<td>19/07/2025 04:45 PM</td>
												<td>
													<div class="d-flex align-items-center">
														<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
															data-bs-toggle="tooltip" title="View Customer Details"
															href="customer-consent-view.php">
															<span class="icon"><iconify-icon icon="proicons:eye"></iconify-icon></span>
														</a>
													</div>
												</td>
											</tr>

											<tr>
                                                <td>
                                                    <a href="customer-consent-view.php" class="customerID">ASAP202500004</a>
                                                </td>
												<td>
													<div class="media align-items-center">
														<div class="media-head me-2">
															<div class="avatar avatar-xs avatar-rounded">
																<img src="dist/img/newimages/indian-users/user-in4.png" alt="user" class="avatar-img">
															</div>
														</div>
														<div class="media-body">
															<span class="d-block text-high-em">Kunal Iyer</span>
														</div>
													</div>
												</td>
												<td class="text-truncate">kunal.iyer@worthniza.in</td>
												<td>99123 55667</td>
										    	<td><span class="badge badge-soft-warning my-1 me-2">Waiting For Approval</span></td>

												<td>18/07/2025 03:10 PM</td>
												<td>
													<div class="d-flex align-items-center">
														<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
															data-bs-toggle="tooltip" title="View Customer Details"
															href="customer-consent-view.php">
															<span class="icon"><iconify-icon icon="proicons:eye"></iconify-icon></span>
														</a>
													</div>
												</td>
											</tr>

											<tr>
                                                <td>
                                                    <a href="customer-consent-view.php" class="customerID">ASAP202500005</a>
                                                </td>
												<td>
													<div class="media align-items-center">
														<div class="media-head me-2">
															<div class="avatar avatar-xs avatar-rounded">
																<img src="dist/img/newimages/indian-users/user-in5.png" alt="user" class="avatar-img">
															</div>
														</div>
														<div class="media-body">
															<span class="d-block text-high-em">Deepak Nair</span>
														</div>
													</div>
												</td>
												<td class="text-truncate">deepak.nair@asap.in</td>
												<td>99872 33441</td>
												<td><span class="badge badge-soft-warning my-1 me-2">Waiting For Approval</span></td>

												<td>18/07/2025 12:30 PM</td>
												<td>
													<div class="d-flex align-items-center">
														<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
															data-bs-toggle="tooltip" title="View Customer Details"
															href="customer-consent-view.php">
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
    <?php include('footer.php') ?>