<?php include("header.php") ?>

<!-- Main Content -->
<div class="hk-pg-wrapper">
	<div class="container-xxl">

		<!-- Page Body -->
		<div class="hk-pg-body dashboardcontent_body">
			<div class="dashoverview">
				<div class="row norow_marginpadding">
					<div class="col-xxl-6 col-lg-6 col-md-6">
						<!-- <div class="row">
							<div class="main-card-container">
								
								<div class="main-stat-card highlight-green">
									<img src="dist/img/newimages/greenshape.png" class="bgshape" alt="">
									<div class="main-icon-wrap">
										<iconify-icon icon="mynaui:rupee"></iconify-icon>
									</div>
									<div class="main-metric-value">₹1,25,000</div>
									<div class="main-metric-label">Total Disbursed Amount</div>
								</div>

								<div class="main-stat-card">
									<div class="main-icon-wrap">
										<img src="dist/img/newimages/icons/loan applications.png" class="imagesm"
											alt="">
									</div>
									<div class="main-metric-value">820</div>
									<div class="main-metric-label">Total Loan Applications</div>
								</div>

								<div class="main-stat-card">
									<div class="main-icon-wrap">
										<img src="dist/img/newimages/icons/repayments.png" alt="">
									</div>
									<div class="main-metric-value">45</div>
									<div class="main-metric-label">overdue accounts</div>
								</div>

							</div>
						</div> -->
						<div class="card card-border mb-0">
							<div class="card-header card-header-action">
								<h6>Daily Applications Overview</h6>
								<div class="card-action-wrap">
									<div class="btn-group d-lg-flex d-none" role="group"
										aria-label="Basic outlined example" id="dailyAppFilters">
										<!-- <button type="button" class="btn btn-outline-light active"
											data-daily-range="week">Weekly</button> -->
										<button type="button" class="btn btn-outline-light"
											data-daily-range="month">Monthly</button>
										<!-- <button type="button" class="btn btn-outline-light"
											data-daily-range="year">Yearly</button> -->
									</div>
								</div>

							</div>
							<div class="card-body p-0">
								<div id="cashflow-chart"></div>
								<div class="separator-full chartseperator"></div>
								<div class="flex-grow-1 ms-lg-3 graphinrstats">
									<div class="row">
										<div class="col-lg-4 col-sm-6 mb-xxl-0 mb-3 leftloanstats_card">
											<span class=" leftloanstats_title">New Applications</span>
											<div class="d-flex align-items-center">
												<span class="d-block leftloanstate_number text-dark mb-0">1.2k</span>
												<span class="badge badge-sm badge-soft-success ms-1">
													<i class="bi bi-arrow-up"></i> 5.1%
												</span>
											</div>
										</div>
										<div class="col-lg-4 col-sm-6 mb-xxl-0 mb-3 leftloanstats_card">
											<span class=" leftloanstats_title">Approved</span>
											<div class="d-flex align-items-center">
												<span class="d-block leftloanstate_number text-dark mb-0">890</span>
												<span class="badge badge-sm badge-soft-success ms-1">
													<i class="bi bi-arrow-up"></i> 4.6%
												</span>
											</div>
										</div>
										<div class="col-lg-4 col-sm-6 mb-xxl-0 mb-3 leftloanstats_card">
											<span class=" leftloanstats_title">Rejected</span>
											<div class="d-flex align-items-center">
												<span class="d-block leftloanstate_number text-dark mb-0">85</span>
												<span class="badge badge-sm badge-soft-danger ms-1">
													<i class="bi bi-arrow-down"></i> 1.1%
												</span>
											</div>
										</div>
										<div class="col-xxl-4 col-sm-6 leftloanstats_card">
											<span class=" leftloanstats_title">KYC Approved Customers</span>
											<div class="d-flex align-items-center">
												<span class="d-block leftloanstate_number text-dark mb-0">225</span>
												<span class="badge badge-sm badge-soft-success ms-1">
													<i class="bi bi-arrow-up"></i> 4.6%
												</span>
											</div>
										</div>
										<div class="col-xxl-4 col-sm-6 leftloanstats_card">
											<span class=" leftloanstats_title">KYC Rejected Customers</span>
											<div class="d-flex align-items-center">
												<span class="d-block leftloanstate_number text-dark mb-0">12</span>
												<span class="badge badge-sm badge-soft-success ms-1">
													<i class="bi bi-arrow-up"></i> 4.6%
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row norow_marginpadding norowwidth">
							<div class="col-lg-12">
								<div class="main-loan-widget-card card card_topmargin">
									<div class="main-widget-header">

										<div class="mainwidget_title">
											<div class="main-widget-title">Recent System Activity</div>
										</div>
									</div>

									<div class="widgetcard_data bodyheight-228">
										<div class="activity-group">
											<div class="activity-label">Today</div>

											<div class="activity-item">
												<img src="https://i.pravatar.cc/30?img=11" alt="avatar">
												<div class="activity-text">
													<div class="activitiusresData">
														<h2>Rohit Sharma</h2>
														<p>submitted PAN card for verification</p>
													</div>
													<span class="activity-time">16:05</span>
												</div>
											</div>

											<div class="activity-item">
												<img src="https://i.pravatar.cc/30?img=12" alt="avatar">
												<div class="activity-text">
													<div class="activitiusresData">
														<h2>Anjali Verma</h2>
														<p>completed e-KYC via Aadhaar OTP</p>
													</div>
													<span class="activity-time">09:05</span>
												</div>
											</div>

											<div class="activity-item">
												<img src="https://i.pravatar.cc/30?img=13" alt="avatar">
												<div class="activity-text">
													<div class="activitiusresData">
														<h2>Vikram Desai</h2>
														<p>uploaded bank statement for income proof</p>
													</div>
													<span class="activity-time">02:06</span>
												</div>
											</div>
										</div>

										<div class="activity-group">
											<div class="activity-label">Yesterday</div>

											<div class="activity-item">
												<img src="https://i.pravatar.cc/30?img=14" alt="avatar">
												<div class="activity-text">
													<div class="activitiusresData">
														<h2>Pooja Mehra</h2>
														<p>linked bank account for disbursement</p>
													</div>
													<span class="activity-time">21:08</span>
												</div>
											</div>

											<div class="activity-item">
												<img src="https://i.pravatar.cc/30?img=15" alt="avatar">
												<div class="activity-text">
													<div class="activitiusresData">
														<h2>Arjun Patel</h2>
														<p>updated residential address</p>
													</div>
													<span class="activity-time">01:05</span>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
							
						</div>

					</div>
					<div class="col-xxl-6 col-lg-6 col-md-6">

						<div class="card overview-card">
							<div class="overview-title">Hello, Admin</div>
							<div class="overview-subtitle">Here is your loan performance breakdown </div>

							<div class="btn-group d-lg-flex d-none" role="group" aria-label="Basic outlined example"
								id="loanStatsFilters">
								<button type="button" class="btn btn-outline-light active"
									data-loan-range="week">Weekly</button>
								<button type="button" class="btn btn-outline-light"
									data-loan-range="month">Monthly</button>
								<button type="button" class="btn btn-outline-light"
									data-loan-range="year">Yearly</button>
							</div>

							<div style="position: relative;">
								<div id="creditChart"></div>
								<div class="chart-center-text">Loan Stats</div>
								<div class="legend-custom" id="legendToggle">
									<div class="legend-item" data-type="active"><span class="legend-color"
											style="background:#ffe037;"></span>Active Loans</div>
									<div class="legend-item" data-type="pending"><span class="legend-color"
											style="background:#fcbd5e"></span>Pending Applications</div>
									<div class="legend-item" data-type="approved"><span class="legend-color"
											style="background:#7ed957;"></span>Approved</div>
									<div class="legend-item" data-type="overdue"><span class="legend-color"
											style="background:#ff7373;"></span>Overdue</div>
								</div>
							</div>

							<!-- <div class="stats-grid">
  <div class="stats-card">
    <h4>KYC Verified</h4>
    <div class="uparrowbutton">
      <iconify-icon icon="mynaui:arrow-long-up-right-solid"></iconify-icon>
    </div>
    <div class="dashpercentageCount">
      <div class="stats-value">97%</div>
      <div class="badge green">Healthy</div>
    </div>
    <p>Verified borrower identities on the platform.</p>
  </div>

  <div class="stats-card">
    <h4>Pending KYC Approvals</h4>
    <div class="uparrowbutton">
      <iconify-icon icon="mynaui:arrow-long-up-right-solid"></iconify-icon>
    </div>
    <div class="dashpercentageCount">
      <div class="stats-value">15</div>
      <div class="badge yellow">Pending</div>
    </div>
    <p>KYC requests awaiting admin verification.</p>
  </div>

  <div class="stats-card">
    <h4>Credit Approvals Pending</h4>
    <div class="uparrowbutton">
      <iconify-icon icon="mynaui:arrow-long-up-right-solid"></iconify-icon>
    </div>
    <div class="dashpercentageCount">
      <div class="stats-value">8</div>
      <div class="badge yellow">Review</div>
    </div>
    <p>Loan files waiting for credit team decision.</p>
  </div>

  <div class="stats-card">
    <h4>Customer Concerns</h4>
    <div class="uparrowbutton">
      <iconify-icon icon="mynaui:arrow-long-up-right-solid"></iconify-icon>
    </div>
    <div class="dashpercentageCount">
      <div class="stats-value">3</div>
      <div class="badge red">Attention</div>
    </div>
    <p>Open issues or complaints from borrowers.</p>
  </div>

  <div class="stats-card">
    <h4>Ready for Disbursement</h4>
    <div class="uparrowbutton">
      <iconify-icon icon="mynaui:arrow-long-up-right-solid"></iconify-icon>
    </div>
    <div class="dashpercentageCount">
      <div class="stats-value">10</div>
      <div class="badge green">Ready</div>
    </div>
    <p>Loans cleared and queued for release.</p>
  </div>

  <div class="stats-card">
    <h4>Total Disbursed Amount</h4>
    <div class="uparrowbutton">
      <iconify-icon icon="mynaui:arrow-long-up-right-solid"></iconify-icon>
    </div>
    <div class="dashpercentageCount">
      <div class="stats-value">₹1.25 Cr</div>
      <div class="badge green">Growing</div>
    </div>
    <p>Overall loan amount disbursed till date.</p>
  </div>
</div> -->

	<div class="stats-grid">
  <div class="stats-card">
    <h4>Today Disbursement</h4>
    <div class="uparrowbutton">
      <iconify-icon icon="mynaui:arrow-long-up-right-solid"></iconify-icon>
    </div>
    <div class="dashpercentageCount">
      <div class="stats-value">97%</div>
      <div class="badge green">Healthy</div>
    </div>
    <p>Loans disbursed to borrowers today.</p>
  </div>

  <div class="stats-card">
    <h4>Schedule Disbursement</h4>
    <div class="uparrowbutton">
      <iconify-icon icon="mynaui:arrow-long-up-right-solid"></iconify-icon>
    </div>
    <div class="dashpercentageCount">
      <div class="stats-value">15</div>
      <div class="badge yellow">Pending</div>
    </div>
    <p>Loan disbursements scheduled for upcoming dates.</p>
  </div>

  <div class="stats-card">
    <h4>Disbursed Loan</h4>
    <div class="uparrowbutton">
      <iconify-icon icon="mynaui:arrow-long-up-right-solid"></iconify-icon>
    </div>
    <div class="dashpercentageCount">
      <div class="stats-value">₹1.25 Cr</div>
      <div class="badge green">Growing</div>
    </div>
    <p>Total loan amount successfully disbursed.</p>
  </div>

  <div class="stats-card">
    <h4>Today Pending Collection</h4>
    <div class="uparrowbutton">
      <iconify-icon icon="mynaui:arrow-long-up-right-solid"></iconify-icon>
    </div>
    <div class="dashpercentageCount">
      <div class="stats-value">3</div>
      <div class="badge red">Attention</div>
    </div>
    <p>Collections due from borrowers for today.</p>
  </div>

  <div class="stats-card">
    <h4>Customer EMI Collection</h4>
    <div class="uparrowbutton">
      <iconify-icon icon="mynaui:arrow-long-up-right-solid"></iconify-icon>
    </div>
    <div class="dashpercentageCount">
      <div class="stats-value">10</div>
      <div class="badge green">Ready</div>
    </div>
    <p>Scheduled EMI collections from active borrowers.</p>
  </div>

  <div class="stats-card">
    <h4>Over Due EMI</h4>
    <div class="uparrowbutton">
      <iconify-icon icon="mynaui:arrow-long-up-right-solid"></iconify-icon>
    </div>
    <div class="dashpercentageCount">
      <div class="stats-value">54</div>
      <div class="badge red">Attention</div>
    </div>
    <p>EMI payments that are past their due dates.</p>
  </div>
</div>


						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 mb-md-4 mb-3">
						<div class="card card-border mb-0 h-100">
							<div class="card-header card-header-action">
								<h6>New Customers
									<span class="badge badge-sm badge-light ms-1">240</span>
								</h6>

							</div>
							<div class="card-body tablecardbody">
								<div class="contact-list-view">
									<table class="table common-datatable nowrap w-100">
										<thead>
											<tr>

												<th>Name</th>
												<th>Email Address</th>
												<th>Phone</th>
												<th>Onboard Date Time</th>
												<th>Status</th>
												<th>Actions</th>
											</tr>
										</thead>
										<tbody>
											<tr>

												<td>
													<div class="media align-items-center">
														<div class="media-head me-2">
															<div class="avatar avatar-xs avatar-rounded">
																<img src="dist/img/avatar1.jpg" alt="user"
																	class="avatar-img">
															</div>
														</div>
														<div class="media-body">
															<span class="d-block text-high-em">Morgan Freeman</span>
														</div>
													</div>
												</td>
												<td class="text-truncate">morgan@ASAP.com</td>
												<td>+145 52 5689</td>
												<td><span class="badge badge-soft-success  my-1  me-2">New
														Customer</span></td>

												<td>2025-07-09 06:30 PM</td>
												<td>
													<div class="d-flex align-items-center">
														<div class="d-flex">
															<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
																data-bs-toggle="tooltip" data-placement="top" title=""
																data-bs-original-title="View Customer Details"
																href="#"><span class="icon"><span class="feather-icon">
																		<iconify-icon icon="proicons:eye">
																		</iconify-icon>
																	</span></span></a>
														</div>

													</div>
												</td>
											</tr>
											<tr>

												<td>
													<div class="media align-items-center">
														<div class="media-head me-2">
															<div class="avatar avatar-xs avatar-rounded">
																<img src="dist/img/avatar9.jpg" alt="user"
																	class="avatar-img">
															</div>
														</div>
														<div class="media-body">
															<span class="d-block text-high-em">Huma Therman</span>
														</div>
													</div>
												</td>
												<td class="text-truncate">huma@clariesup.au</td>
												<td>+234 48 2365</td>
												<td><span class="badge badge-soft-success  my-1  me-2">New
														Customer</span></td>

												<td>2025-07-09 06:30 PM</td>
												<td>
													<div class="d-flex align-items-center">
														<div class="d-flex">
															<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
																data-bs-toggle="tooltip" data-placement="top" title=""
																data-bs-original-title="View Customer Details"
																href="#"><span class="icon"><span class="feather-icon">
																		<iconify-icon icon="proicons:eye">
																		</iconify-icon>
																	</span></span></a>
														</div>

													</div>
												</td>
											</tr>
											<tr>

												<td>
													<div class="media align-items-center">
														<div class="media-head me-2">
															<div
																class="avatar avatar-xs avatar-soft-info avatar-rounded">
																<span class="initial-wrap">C</span>
															</div>
														</div>
														<div class="media-body">
															<span class="d-block text-high-em">Charlie Chaplin</span>
														</div>
													</div>
												</td>
												<td class="text-truncate">charlie@leernoca.monster</td>
												<td>+741 56 7896</td>
												<td><span class="badge badge-soft-success  my-1  me-2">New
														Customer</span></td>

												<td>2025-07-09 06:30 PM</td>
												<td>
													<div class="d-flex align-items-center">
														<div class="d-flex">
															<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
																data-bs-toggle="tooltip" data-placement="top" title=""
																data-bs-original-title="View Customer Details"
																href="#"><span class="icon"><span class="feather-icon">
																		<iconify-icon icon="proicons:eye">
																		</iconify-icon>
																	</span></span></a>
														</div>

													</div>
												</td>
											</tr>
											<tr>

												<td>
													<div class="media align-items-center">
														<div class="media-head me-2">
															<div class="avatar avatar-xs avatar-rounded">
																<img src="dist/img/avatar10.jpg" alt="user"
																	class="avatar-img">
															</div>
														</div>
														<div class="media-body">
															<span class="d-block text-high-em">Winston Churchil</span>
														</div>
													</div>
												</td>
												<td class="text-truncate">winston@worthniza.ga</td>
												<td>+145 52 5463</td>
												<td><span class="badge badge-soft-success  my-1  me-2">New
														Customer</span></td>

												<td>2025-07-10 10:02 AM</td>
												<td>
													<div class="d-flex align-items-center">
														<div class="d-flex">
															<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
																data-bs-toggle="tooltip" data-placement="top" title=""
																data-bs-original-title="View Customer Details"
																href="#"><span class="icon"><span class="feather-icon">
																		<iconify-icon icon="proicons:eye">
																		</iconify-icon>
																	</span></span></a>
														</div>

													</div>
												</td>
											</tr>
											<tr>

												<td>
													<div class="media align-items-center">
														<div class="media-head me-2">
															<div class="avatar avatar-xs avatar-rounded">
																<img src="dist/img/avatar3.jpg" alt="user"
																	class="avatar-img">
															</div>
														</div>
														<div class="media-body">
															<span class="d-block text-high-em">Jaquiline Joker</span>
														</div>
													</div>
												</td>
												<td class="text-truncate">jaquljoker@ASAP.com</td>
												<td>+145 53 4715</td>
												<td><span class="badge badge-soft-success  my-1  me-2">New
														Customer</span></td>

												<td>2025-07-10 11:45 AM</td>
												<td>
													<div class="d-flex align-items-center">
														<div class="d-flex">
															<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
																data-bs-toggle="tooltip" data-placement="top" title=""
																data-bs-original-title="View Customer Details"
																href="#"><span class="icon"><span class="feather-icon">
																		<iconify-icon icon="proicons:eye">
																		</iconify-icon>
																	</span></span></a>
														</div>

													</div>
												</td>
											</tr>

										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Page Body -->
	</div>

	<!-- Page Footer -->
	<div class="hk-footer">
		<footer class="container-xxl footer">
			<div class="row">
				<div class="col-xl-12">
					<p class="footer-text"><span class="copy-text">ASAP © 2025 All rights reserved.</span></p>
				</div>
				
			</div>
		</footer>
	</div>
	<!-- / Page Footer -->

</div>
<!-- /Main Content -->

<?php include("footer.php") ?>