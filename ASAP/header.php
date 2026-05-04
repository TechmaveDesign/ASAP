<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VASAP Finance - Super admin Dashboard</title>
    <meta name="description" content="VASAP Finance - Super admin Dashboard" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="dist/img/newimages/bgaimage.png">
    <link rel="icon" href="dist/img/newimages/bgaimage.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Daterangepicker CSS -->
    <link href="vendors/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />

    <!-- select2 CSS -->
    <link href="vendors/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />

    <!-- Data Table CSS -->
    <link href="vendors/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="vendors/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />

     <!-- Datetimepicker CSS -->
    <!-- <link rel="stylesheet" href="dist/customplugins/date-time-range/bootstrap-datetimepicker.min.css"> -->

    <!-- Daterangepikcer CSS -->
    <!-- <link rel="stylesheet" href="dist/customplugins/date-time-range/daterangepicker.css"> -->
    <!-- CSS -->
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="dist/css/custom.css">
</head>

<body>
      <div id="page-loader">
    <div class="loader-spinner"></div>
  </div>
    <!-- Wrapper -->
    <div class="hk-wrapper" data-layout="vertical" data-layout-style="default" data-menu="light" data-footer="simple">
        <!-- Top Navbar -->
        <nav class="hk-navbar navbar navbar-expand-xl navbar-light fixed-top">
            <div class="container-fluid">
                <!-- Start Nav -->
                <div class="nav-start-wrap">
                    <button
                        class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover navbar-toggle d-xl-none"><span
                            class="icon"><span class="feather-icon"><i
                                    data-feather="align-left"></i></span></span></button>

                    <!-- Page Header -->
                    <div class="pageheader_breadcrums js-header" style="display: none;">
                        <h1 class="pg-title">Default Title</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Default Page</li>
                            </ol>
                        </nav>
                    </div>

                    <!-- Search -->
				<form class="dropdown navbar-search">
					<div class="dropdown-toggle no-caret" data-bs-toggle="dropdown" data-dropdown-animation data-bs-auto-close="outside">
						<a href="#" class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover  d-xl-none"><span class="icon"><span class="feather-icon"><i data-feather="search"></i></span></span></a>
						<div class="input-group d-xl-flex d-none">
							<span class="input-affix-wrapper input-search affix-border">
								<input type="text" class="form-control  bg-transparent"  data-navbar-search-close="false" placeholder="Search..." aria-label="Search">
								<span class="input-suffix"><span>/</span>
									<span class="btn-input-clear"><i class="bi bi-x-circle-fill"></i></span>
									<span class="spinner-border spinner-border-sm input-loader text-primary" role="status">
										<span class="sr-only">Loading...</span>
									</span>
								</span>
							</span>
						</div>
					</div>
					<div  class="dropdown-menu p-0">
						<!-- Mobile Search -->
						<div class="dropdown-item d-xl-none bg-transparent">
							<div class="input-group mobile-search">
								<span class="input-affix-wrapper input-search">
									<input type="text" class="form-control" placeholder="Search..." aria-label="Search">
									<span class="input-suffix">
										<span class="btn-input-clear"><i class="bi bi-x-circle-fill"></i></span>
										<span class="spinner-border spinner-border-sm input-loader text-primary" role="status">
											<span class="sr-only">Loading...</span>
										</span>
									</span>
								</span>
							</div>
						</div>
						<!--/ Mobile Search -->
						<div data-simplebar class="dropdown-body p-2">
							<h6 class="dropdown-header">Recent Search
							</h6>
							<div class="dropdown-item bg-transparent">
								<a href="#" class="badge badge-pill badge-soft-secondary">Grunt</a>
								<a href="#" class="badge badge-pill badge-soft-secondary">Node JS</a>
								<a href="#" class="badge badge-pill badge-soft-secondary">SCSS</a>
							</div>
							<div class="dropdown-divider"></div>
							<h6 class="dropdown-header">Help
							</h6>
							<a href="javascript:void(0);" class="dropdown-item">
								<div class="media align-items-center">
									<div class="media-head me-2">
										<div class="avatar avatar-icon avatar-xs avatar-soft-light avatar-rounded">
											<span class="initial-wrap">
												<span class="svg-icon">
													<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
														<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
														<path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
													 </svg>
												</span>
											</span>
										</div>
									</div>
									<div class="media-body">
										How to setup theme?
									</div>
								</div>
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<div class="media align-items-center">
									<div class="media-head me-2">
										<div class="avatar avatar-icon avatar-xs avatar-soft-light avatar-rounded">
											<span class="initial-wrap">
												<span class="svg-icon">
													<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
														<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
														<path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
													 </svg>
												</span>
											</span>
										</div>
									</div>
									<div class="media-body">
										View detail documentation
									</div>
								</div>
							</a>
							<div class="dropdown-divider"></div>
							<h6 class="dropdown-header">Users
							</h6>
							<a href="javascript:void(0);" class="dropdown-item">
								<div class="media align-items-center">
									<div class="media-head me-2">
										<div class="avatar avatar-xs avatar-rounded">
											<img src="dist/img/avatar3.jpg" alt="user" class="avatar-img">
										</div>
									</div>
									<div class="media-body">
										Sarah Jone
									</div>
								</div>
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<div class="media align-items-center">
									<div class="media-head me-2">
										<div class="avatar avatar-xs avatar-soft-primary avatar-rounded">
											<span class="initial-wrap">J</span>
										</div>
									</div>
									<div class="media-body">
										Joe Jackson
									</div>
								</div>
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<div class="media align-items-center">
									<div class="media-head me-2">
										<div class="avatar avatar-xs avatar-rounded">
											<img src="dist/img/avatar4.jpg" alt="user" class="avatar-img">
										</div>
									</div>
									<div class="media-body">
										Maria Richard
									</div>
								</div>
							</a>
						</div>
						<div class="dropdown-footer d-xl-flex d-none"><a href="#"><u>Search all</u></a></div>
					</div>
				</form>
				<!-- /Search -->
                    <!-- /Page Header -->
                </div>
                <!-- /Start Nav -->

                <!-- End Nav -->
                <div class="nav-end-wrap">
                    <ul class="navbar-nav flex-row">

                        <li class="nav-item">
                            <div class="dropdown dropdown-notifications">
                                <a href="#"
                                    class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover dropdown-toggle no-caret"
                                    data-bs-toggle="dropdown" data-dropdown-animation role="button" aria-haspopup="true"
                                    aria-expanded="false"><span class="icon"><span class="position-relative"><span
                                                class="feather-icon"><i data-feather="bell"></i></span><span
                                                class="badge badge-success badge-indicator position-top-end-overflow-1"></span></span></span></a>
                                <div class="dropdown-menu dropdown-menu-end p-0">
                                    <h6 class="dropdown-header px-4 fs-6">Notifications<a href="#"
                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"><span
                                                class="icon"><span class="feather-icon"><i
                                                        data-feather="settings"></i></span></span></a>
                                    </h6>
                                    <div data-simplebar class="dropdown-body  p-2">
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <div class="media">
                                                <div class="media-head">
                                                    <div class="avatar avatar-rounded avatar-sm">
                                                        <img src="dist/img/avatar2.jpg" alt="user" class="avatar-img">
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div>
                                                        <div class="notifications-text">Morgan Freeman accepted your
                                                            invitation to join the team</div>
                                                        <div class="notifications-info">
                                                            <span class="badge badge-soft-success">Collaboration</span>
                                                            <div class="notifications-time">Today, 10:14 PM</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <div class="media">
                                                <div class="media-head">
                                                    <div
                                                        class="avatar  avatar-icon avatar-sm avatar-success avatar-rounded">
                                                        <span class="initial-wrap">
                                                            <span class="feather-icon"><i
                                                                    data-feather="inbox"></i></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div>
                                                        <div class="notifications-text">New message received from Alan
                                                            Rickman</div>
                                                        <div class="notifications-info">
                                                            <div class="notifications-time">Today, 7:51 AM</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <div class="media">
                                                <div class="media-head">
                                                    <div
                                                        class="avatar  avatar-icon avatar-sm avatar-pink avatar-rounded">
                                                        <span class="initial-wrap">
                                                            <span class="feather-icon"><i
                                                                    data-feather="clock"></i></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div>
                                                        <div class="notifications-text">You have a follow up with VASAP
                                                            Head on Friday, Dec 19 at 9:30 am</div>
                                                        <div class="notifications-info">
                                                            <div class="notifications-time">Yesterday, 9:25 PM</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <div class="media">
                                                <div class="media-head">
                                                    <div class="avatar avatar-sm avatar-rounded">
                                                        <img src="dist/img/avatar3.jpg" alt="user" class="avatar-img">
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div>
                                                        <div class="notifications-text">Application of Sarah Williams is
                                                            waiting for your approval</div>
                                                        <div class="notifications-info">
                                                            <div class="notifications-time">Today 10:14 PM</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <div class="media">
                                                <div class="media-head">
                                                    <div class="avatar avatar-sm avatar-rounded">
                                                        <img src="dist/img/avatar10.jpg" alt="user" class="avatar-img">
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div>
                                                        <div class="notifications-text">Winston Churchil shared a
                                                            document with you</div>
                                                        <div class="notifications-info">
                                                            <span class="badge badge-soft-violet">File Manager</span>
                                                            <div class="notifications-time">2 Oct, 2021</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <div class="media">
                                                <div class="media-head">
                                                    <div
                                                        class="avatar  avatar-icon avatar-sm avatar-danger avatar-rounded">
                                                        <span class="initial-wrap">
                                                            <span class="feather-icon"><i
                                                                    data-feather="calendar"></i></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div>
                                                        <div class="notifications-text">Last 2 days left for the project
                                                            to be completed</div>
                                                        <div class="notifications-info">
                                                            <span class="badge badge-soft-orange">Updates</span>
                                                            <div class="notifications-time">14 Sep, 2021</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dropdown-footer"><a href="#"><u>View all notifications</u></a></div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown ps-2">
                                <a class=" dropdown-toggle no-caret" href="#" role="button" data-bs-display="static"
                                    data-bs-toggle="dropdown" data-dropdown-animation data-bs-auto-close="outside"
                                    aria-expanded="false">
                                    <div class="avatar avatar-rounded avatar-xs">
                                        <img src="dist/img/newimages/indian-users/user-in4.png" alt="user" class="avatar-img">
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end profiledropdown">
                                    <div class="p-2">
                                        <div class="media">
                                            <div class="media-head me-2">
                                                <div class="avatar avatar-primary avatar-sm avatar-rounded">
                                                    <span class="initial-wrap">RM</span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="dropdown">
                                                    <a href="#" class="d-block  link-dark fw-medium">Rahul Mehta</a>

                                                </div>
                                                <div class="fs-7">Super Admin</div>
                                                <!-- <a href="#" class="d-block fs-8 link-secondary"><u>Sign
                                                        Out</u></a> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>

                                    <h6 class="dropdown-header">Manage Account</h6>
                                    <a class="dropdown-item" href="##">
                                        <iconify-icon icon="solar:user-linear"></iconify-icon> Profile
                                    </a>
                                     <a class="dropdown-item" href="#">
                                        <iconify-icon icon="solar:logout-outline"></iconify-icon> Sign Out</span>
                                    </a>
                                    <!-- <a class="dropdown-item" href="#">
                                        <iconify-icon icon="solar:settings-linear"></iconify-icon>Settings</span>
                                    </a> -->

                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /End Nav -->
            </div>
        </nav>
        <!-- /Top Navbar -->

        <!-- Vertical Nav -->
        <div class="hk-menu">
            <!-- Brand -->
            <div class="menu-header">
                <span>

                    <a class="navbar-brand" href="index.php">
                        <img class="brand-img img-fluid Brandicon" src="dist/img/newimages/bgaimage.png" alt="brand">
                        <img class="brand-img img-fluid brandimage-full" src="dist/img/newimages/logotransparent.png"
                            alt="brand">
                    </a>
                    <button class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover navbar-toggle">
                        <span class="icon">
                            <span class="svg-icon fs-5">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-arrow-bar-to-left" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <line x1="10" y1="12" x2="20" y2="12"></line>
                                    <line x1="10" y1="12" x2="14" y2="16"></line>
                                    <line x1="10" y1="12" x2="14" y2="8"></line>
                                    <line x1="4" y1="4" x2="4" y2="20"></line>
                                </svg>
                            </span>
                        </span>
                    </button>
                </span>
            </div>
            <!-- /Brand -->

            <!-- Main Menu -->
            <div data-simplebar class="nicescroll-bar dashsidebarWrapper" >
                <div class="menu-content-wrap">
                    <div class="menu-group">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">
                                    <span class="nav-icon-wrap">
                                        <span class="svg-icon">
                                            <!-- <img src="dist/img/newimages/icons/dashboard.png" alt=""> -->
                                             <iconify-icon icon="mynaui:home"></iconify-icon>
                                        </span>
                                    </span>
                                    <span class="nav-link-text">Dashboard</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="menu-group">
                        <div class="nav-header">
                            <span>User Management</span>
                        </div>
                        <ul class="navbar-nav flex-column">
                          <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse"
                                    data-bs-target="#dash_scrumboardd">
                                    <span class="nav-icon-wrap position-relative">

                                        <span class="svg-icon">
                                             <!-- <img src="dist/img/newimages/icons/riskrules.png" alt=""> -->
                                            <iconify-icon icon="octicon:shield-lock-24"></iconify-icon>
                                        </span>
                                    </span>
                                    <span class="nav-link-text">User Permission </span>
                                </a>
                                <ul id="dash_scrumboardd" class="nav flex-column collapse  nav-children">
                                    <li class="nav-item">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="user-management.php"><span class="nav-link-text">User Manage</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="roles-permission.php"><span class="nav-link-text">Roles & Permission</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse"
                                    data-bs-target="#DSA_reports">
                                    <span class="nav-icon-wrap">
                                        <span class="svg-icon">
                                            <iconify-icon icon="lucide:users"></iconify-icon>
                                            <!-- <img src="dist/img/newimages/icons/reports.png" alt=""> -->
                                        </span>
                                    </span>
                                    <span class="nav-link-text">DSA Management</span>
                                </a>
                                <ul id="DSA_reports" class="nav flex-column collapse nav-children">
                                    <li class="nav-item">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="dsa-list.php"><span class="nav-link-text">All DSA</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="all-leads.php"><span class="nav-link-text">All Leads</span></a>
                                            </li>
                                            
                                            <li class="nav-item">
                                                <a class="nav-link" href="dsa-report.php"><span class="nav-link-text">Reports</span></a>
                                            </li>
                                            <!-- <li class="nav-item">
                                                <a class="nav-link" href="##"><span class="nav-link-text">Over Due
                                                        Report</span></a>
                                            </li> -->
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse"
                                    data-bs-target="#dash_scrumboard">
                                    <span class="nav-icon-wrap position-relative">

                                        <span class="svg-icon">
                                            <!-- <img src="dist/img/newimages/icons/profile.png" alt=""> -->
                                            <iconify-icon icon="solar:user-linear"></iconify-icon>
                                        </span>
                                    </span>
                                    <span class="nav-link-text">Customers Management </span>
                                </a>
                                <ul id="dash_scrumboard" class="nav flex-column collapse  nav-children">
                                    <li class="nav-item">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="customer-new.php"><span class="nav-link-text">New
                                                        Customers</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="customer-all.php"><span class="nav-link-text">All
                                                        Customers</span></a>
                                            </li>
                                             <li class="nav-item">
                                                <a class="nav-link" href="re-apply-loan-all.php"><span class="nav-link-text">Re-Apply Loan Customer</span></a>
                                            </li>
                                            <!-- <li class="nav-item">
                                                <a class="nav-link" href="##"><span class="nav-link-text">Auto Rejected
                                                        Customers</span></a>
                                            </li> -->

                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse"
                                    data-bs-target="#dash_KYC">
                                    <span class="nav-icon-wrap position-relative">

                                        <span class="svg-icon">
                                            <!-- <img src="dist/img/newimages/icons/kyc.png" alt=""> -->
                                            <iconify-icon icon="material-symbols-light:document-search-outline"></iconify-icon>
                                        </span>
                                    </span>
                                    <span class="nav-link-text">KYC & Business Management </span>
                                </a>
                                <ul id="dash_KYC" class="nav flex-column collapse  nav-children">
                                    <li class="nav-item">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="customer-approved.php"><span class="nav-link-text">Approved
                                                        Customers</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="customer-rejected.php"><span class="nav-link-text">Rejected
                                                        Customers</span></a>
                                            </li>

                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="credit-assessment.php">
                                    <span class="nav-icon-wrap">
                                        <span class="svg-icon">
                                            <!-- <img src="dist/img/newimages/icons/Credit-Assessment-Status.png" alt=""> -->
                                             <iconify-icon icon="fluent:document-queue-20-regular"></iconify-icon>
                                        </span>
                                    </span>
                                    <span class="nav-link-text">Credit Assessment Status</span>
                                </a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="index2.php">
                                    <span class="nav-icon-wrap">
                                        <span class="svg-icon">
                                            <img src="dist/img/newimages/icons/final-credit-assessment.png" alt="">
                                        </span>
                                    </span>
                                    <span class="nav-link-text">Final Credit Assessment Status</span>
                                </a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="customer-consent.php">
                                    <span class="nav-icon-wrap">
                                        <span class="svg-icon">
                                            <!-- <img src="dist/img/newimages/icons/customer-consent.png" alt=""> -->
                                             <iconify-icon icon="carbon:document-set"></iconify-icon>
                                        </span>
                                    </span>
                                    <span class="nav-link-text">Customer Consent</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="disbursement-approval.php">
                                    <span class="nav-icon-wrap">
                                        <span class="svg-icon">
                                            <iconify-icon icon="mynaui:rupee-square"></iconify-icon>
                                            <!-- <img src="dist/img/newimages/icons/borrowicon.png" alt=""> -->
                                        </span>
                                    </span>
                                    <span class="nav-link-text">Disbursement Approval</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse"
                                    data-bs-target="#dash_loanmanagement">
                                    <span class="nav-icon-wrap position-relative">

                                        <span class="svg-icon">
                                            <iconify-icon icon="hugeicons:file-management"></iconify-icon>
                                            <!-- <img src="dist/img/newimages/icons/loan-applications.png" alt=""> -->
                                        </span>
                                    </span>
                                    <span class="nav-link-text">Manage Disbursement </span>
                                </a>
                                <ul id="dash_loanmanagement" class="nav flex-column collapse  nav-children">
                                    <li class="nav-item">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="disbursement-scheduled.php"><span class="nav-link-text">Scheduled
                                                        Disbursement</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="disbursement-today.php"><span class="nav-link-text">Today
                                                        Disbursement</span></a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" href="disbursed-due.php"><span class="nav-link-text">Due Disbursement</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="disbursed-loans.php"><span class="nav-link-text"> Disbursed Loan</span></a>
                                            </li>
                                            <!-- <li class="nav-item">
                                                <a class="nav-link" href="##"><span class="nav-link-text"> Audit Trails</span></a>
                                            </li> -->

                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse"
                                    data-bs-target="#dash_Collection">
                                    <span class="nav-icon-wrap position-relative">

                                        <span class="svg-icon">
                                            <iconify-icon icon="fluent:form-multiple-collection-24-regular"></iconify-icon>
                                            <!-- <img src="dist/img/newimages/icons/repayments.png" alt=""> -->
                                        </span>
                                    </span>
                                    <span class="nav-link-text">Manage Collections </span>
                                </a>
                                <ul id="dash_Collection" class="nav flex-column collapse  nav-children">
                                    <li class="nav-item">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="emi-all-customer.php"><span class="nav-link-text">Customer's
                                                        EMI</span></a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" href="emi-pending.php"><span class="nav-link-text">Today's
                                                        Pending EMI</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="emi-received.php"><span class="nav-link-text">Today's
                                                        Received EMI</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="emi-overdue.php"><span class="nav-link-text"> Over Due
                                                        EMI</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="closed-loan.php"><span class="nav-link-text">Closed Loan
                                                        (NOC)</span></a>
                                            </li>

                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse"
                                    data-bs-target="#dash_products">
                                    <span class="nav-icon-wrap position-relative">

                                        <span class="svg-icon">
                                            <!-- <img src="dist/img/newimages/icons/loanproducts.png" alt=""> -->
                                             <iconify-icon icon="fluent-mdl2:product"></iconify-icon>
                                        </span>
                                    </span>
                                    <span class="nav-link-text">Loan Products</span>
                                </a>
                                <ul id="dash_products" class="nav flex-column collapse  nav-children">
                                    <li class="nav-item">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="product-category.php"><span class="nav-link-text">Manage
                                                        Categories</span></a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" href="products.php"><span class="nav-link-text">Manage
                                                        Products</span></a>
                                            </li>
                                            <!-- <li class="nav-item">
                                                <a class="nav-link" href="##"><span class="nav-link-text">Manage
                                                        Tenures</span></a>
                                            </li> -->

                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            

                            <li class="nav-item">
                                <a class="nav-link" href="system-activity.php">
                                    <span class="nav-icon-wrap">
                                        <span class="svg-icon">
                                            <!-- <img src="dist/img/newimages/icons/auditlogs.png" alt=""> -->
                                             <iconify-icon icon="carbon:user-activity"></iconify-icon>
                                        </span>
                                    </span>
                                    <span class="nav-link-text">System Activity Logs</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="support-tickets.php">
                                    <span class="nav-icon-wrap">
                                        <span class="svg-icon">
                                            <!-- <img src="dist/img/newimages/icons/support-help.png" alt=""> -->
                                             <iconify-icon icon="hugeicons:customer-support"></iconify-icon>
                                        </span>
                                    </span>
                                    <span class="nav-link-text">Support</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse"
                                    data-bs-target="#dash_reports">
                                    <span class="nav-icon-wrap">
                                        <span class="svg-icon">
                                            <iconify-icon icon="oui:nav-reports"></iconify-icon>
                                            <!-- <img src="dist/img/newimages/icons/reports.png" alt=""> -->
                                        </span>
                                    </span>
                                    <span class="nav-link-text">Reports & Analytics</span>
                                </a>
                                <ul id="dash_reports" class="nav flex-column collapse nav-children">
                                    <li class="nav-item">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="##"><span class="nav-link-text">Loan
                                                        Reports</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="##"><span class="nav-link-text">Collection
                                                        Reports</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="##"><span class="nav-link-text">Over Due
                                                        Report</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                             
                            <!-- 
                            <li class="nav-item">
                                <a class="nav-link" href="##">
                                    <span class="nav-icon-wrap">
                                        <span class="svg-icon">
                                            <img src="dist/img/newimages/icons/notifications.png" alt="">
                                        </span>

                                    </span>
                                    <span class="nav-link-text">Notifications</span>
                                </a>
                            </li> -->

                            <!-- <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse"
                                    data-bs-target="#dash_settings">
                                    <span class="nav-icon-wrap">
                                        <span class="svg-icon">
                                            <img src="dist/img/newimages/icons/riskrules.png" alt="">
                                        </span>
                                    </span>
                                    <span class="nav-link-text">Risk Management</span>
                                </a>
                                <ul id="dash_settings" class="nav flex-column collapse nav-children">
                                    <li class="nav-item">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="##"><span
                                                        class="nav-link-text">Approval/Decline Logic</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="##"><span class="nav-link-text">Loan Limit
                                                        Logic</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="##"><span class="nav-link-text">Manual
                                                        Override</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="##"><span class="nav-link-text">Threshold
                                                        Alerts</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> -->
                          
                        </ul>
                        
                    </div>

                    
                </div>
               
            </div>
             <div class="sidelogout_wrapper">
                    <a href="login.php">
                    <div class="callout card card-flush bg-orange-light-5 text-center mt-5  mx-auto">
                        <div class="card-body">
                            <div class="sidelog_mediawrap">
                                <div class="media">
                                <div class="media-head me-2">
                                    <div class="avatar avatar-xs avatar-rounded">
                                        <img src="dist/img/newimages/indian-users/user-in4.png" alt="user" class="avatar-img">
                                    </div>
                                </div>
                                <div class="adminuserLog">
                                   <h2 class="AdminUsername">Rahul Mehta</h2>
                                    <div class="userrole">super admin</div>
                                </div>
                            </div>
                            <div class="logouybutton">
                               <iconify-icon icon="solar:logout-2-outline"></iconify-icon>
                            </div>
                            </div>

                        </div>
                    </div>
                </a>
                </div>
            <!-- /Main Menu -->
        </div>
        <div id="hk_menu_backdrop" class="hk-menu-backdrop"></div>
        <!-- /Vertical Nav -->

        <!-- Main Content -->
        <div class="hk-pg-wrapper">