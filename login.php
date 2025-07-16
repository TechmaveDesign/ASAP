<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta Tags -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login | ASAP - Super Admin</title>
	<meta name="description" content="" />
	<!-- Favicon -->
	<link rel="shortcut icon" href="dist/img/newimages/bgaimage.png">
	<link rel="icon" href="dist/img/newimages/bgaimage.png" type="image/x-icon">
	<!-- CSS -->
	<link href="dist/css/style.css" rel="stylesheet" type="text/css">
	<style>
		.form-control {
			height: 34px !important;
			border-color: #d8d6e3 !important;
			font-size: 13px !important;
			padding: 5px 8px !important;
		}

		.navbar-brand img {
			width: 95px;
		}

		.copyrightasapImg {
			width: 40px;
		}

		.footer-text {
			text-align: center;
		}

		.btn-primary:hover {
			color: #fff;
			background-color: #86c341;
			border-color: #86c341;
		}

		.formcardright {
			margin: auto;
			background: white;
			border-radius: 16px;
			box-shadow: 0px 5px 3px rgb(0 0 0 / 7%);
			width: 480px;
			overflow: hidden;
			border: 1px solid #e8e8e8;
			flex-direction: column;
			min-height: auto !important;
		}

		form {
			padding: 30px 20px 50px 20px;
		}

		form h4 {
			font-size: 16px;
			text-align: left;
			margin-bottom: 12px;
			font-weight: 600;
		}

		.login-header {
			background-image: linear-gradient(to bottom, #eafee975, #f8f6ff00), url(assets/img/newimages/Digital-Product-Hero-BG.png);
			background-size: cover;
			height: 100px;
			padding: 40px 0px 20px 0px;
			width: 100%;
			margin-bottom: 30px;
		}

		.login-header h3 {
			text-align: center;
			font-size: 20px;
		}

		.login-header p {
			text-align: center;
			font-size: 12px;
			color: #515151;
		}

		.form-label {
			margin-bottom: 4px;
			font-size: 13px;
		}

		.form-label-group a {
			font-size: 12px !important;
			font-weight: normal;
		}

		.switch-wrapper {
	display: flex;
	align-items: center;
	gap: 10px;
	font-family: sans-serif;
	font-size: 14px;
	color: #555;
	justify-content: space-between;
	margin-bottom: 30px;
}

		.switch {
			position: relative;
			display: inline-block;
			width: 42px;
			height: 24px;
		}

		.switch input {
			opacity: 0;
			width: 0;
			height: 0;
		}

		.slider {
			position: absolute;
			cursor: pointer;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background-color: #ccc;
			border-radius: 34px;
			transition: 0.3s;
		}

		.slider:before {
			position: absolute;
			content: "";
			height: 18px;
			width: 18px;
			left: 3px;
			top: 3px;
			background-color: white;
			border-radius: 50%;
			transition: 0.3s;
		}

	.switch input:checked + .slider {
	background-color: #86c341;
}

		.switch input:checked+.slider:before {
			transform: translateX(18px);
		}

[data-footer="simple"].hk-wrapper .hk-pg-wrapper, .footer-simple-example.hk-wrapper .hk-pg-wrapper {
	padding-bottom: 0px;
	padding-top: 40px;
}
.hk-pg-body {
	height: 90vh;
	display: flex;
	justify-content: center;
	align-items: center;
}
.silverrightloog {
	position: fixed;
	text-align: right;
	display: flex;
	justify-content: right;
	width: 100%;
	align-items: center;
	top: 0;
	height: 100vh;
	left: 0;
	margin-left: 110px;
	z-index: -1;
}
.silverrightloog img {
	width: 26%;
	margin-left: auto;
	text-align: right;
	display: flex;
	justify-content: flex-end;
	opacity: 0.1;
	transform: rotate(-10deg);
}
 .w-sm-40 {
	width: 40% !important;
}
  .btn.btn-primary.btn-uppercase.btn-block {
	font-size: 14px;
	font-weight: 500;
	text-transform: capitalize !important;
}
.hk-wrapper.hk-pg-auth .hk-pg-wrapper .hk-pg-body .auth-content {
	flex-direction: column;
}
.rowaligncenter{
	align-items:center;
}
.leftimagecontWrap{
	padding-right:50px;
}
	</style>
</head>

<body>
	<div class="silverrightloog">
            <img src="dist/img/newimages/silverlogo.png" alt="">
     </div>
	<!-- Wrapper -->
	<div class="hk-wrapper hk-pg-auth" data-footer="simple">
		<!-- Top Navbar -->
		<nav class="hk-navbar navbar navbar-expand-xl navbar-light fixed-top">
			<div class="container-xxl">
				<!-- Start Nav -->
				<div class="nav-start-wrap">
					<a class="navbar-brand" href="index.php">
						<img class="brand-img d-inline-block" src="dist/img/newimages/logotransparent.png"
							alt="Super Admin Portal" />
					</a>
				</div>
				<!-- /Start Nav -->

				<!-- End Nav -->
				<div class="nav-end-wrap">
					<ul class="navbar-nav flex-row">
						<li class="nav-item nav-link py-0">
							<button class="btn btn-sm btn-outline-light">
								<span>
									<span class="icon">
										<span class="feather-icon"><i data-feather="help-circle"></i></span>
									</span>
									<span>Support</span>
								</span>
							</button>
						</li>
					</ul>
				</div>
				<!-- /End Nav -->
			</div>
		</nav>
		<!-- /Top Navbar -->

		<!-- Main Content -->
		<div class="hk-pg-wrapper">
			<!-- Page Body -->
			<div class="hk-pg-body">
				<!-- Container -->
				<div class="container-xxl">
					<!-- Row -->
					<div class="row rowaligncenter">
						<div class="col-xxl-6 col-xl-6 col-lg-6 text-center mx-auto d-lg-block d-none v-separator separator-sm">
							<div class="auth-content py-md-0 py-8 leftimagecontWrap">
								<img src="dist/img/newimages/login4.png" class="img-fluid w-sm-40 w-50 mb-3" alt="login">
										<h3 class="mb-2">Welcome to the Super Admin Portal</h3>
										<p class="">Manage Customers, KYC,Loan Disbursements,EmI Collections and Borrower Profiles — all in one place.</p>
									
										<p class="p-xs mt-5 text-light">Admin access only. For support, contact IT.</p>
							</div>
						</div>
						<div class="col-xxl-6 col-xl-6 col-lg-6 col-sm-10 position-relative mx-auto">
							<div class="auth-content formcardright py-md-0 py-8">
								<div class="login-header">
									<h3 class="mb-2">Sign in to Admin Panel</h3>
									<p class="w-xxl-65 w-100 mx-auto">Manage borrowers, monitor disbursements, verify
										KYC, and take complete control of your lending platform.</p>
								</div>
								<form class="w-100">
									<div class="row">
										<div class="col-lg-12 mx-auto">
											<div class="row gx-3">
												<div class="form-group col-lg-12">
													<label class="form-label">Username or Email</label>
													<input class="form-control" placeholder="Enter username or email ID"
														type="text">
												</div>
												<div class="form-group col-lg-12">
													<div class="form-label-group">
														<label class="form-label">Password</label>
														<a href="#" class="fs-7 fw-medium">Forgot Password?</a>
													</div>
													<div class="input-group password-check">
														<span class="input-affix-wrapper">
															<input class="form-control"
																placeholder="Enter your password" type="password">
															<a href="#" class="input-suffix text-muted">
																<span class="feather-icon"><i class="form-icon"
																		data-feather="eye"></i></span>
																<span class="feather-icon d-none"><i class="form-icon"
																		data-feather="eye-off"></i></span>
															</a>
														</span>
													</div>
												</div>
											</div>
											<div class="keeploginwrap">
												<label class="switch-wrapper">
													Remember sign in details
													<label class="switch">
														<input type="checkbox" checked>
														<span class="slider"></span>
													</label>
												</label>
											</div>
											<a href="index.php"
												class="btn btn-primary btn-uppercase btn-block">Login</a>
											<!-- <p class="p-xs mt-2 text-center">Don’t have access? <a href="#"><u>Contact platform admin</u></a></p> -->
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- /Row -->
				</div>
				<!-- /Container -->
			</div>
			<!-- /Page Body -->

			<!-- Page Footer -->
			<div class="hk-footer">
				<footer class="container-xxl footer">
					<div class="row">
						<div class="col-xl-12">
							<p class="footer-text">
								<span class="copy-text"><img src="dist/img/newimages/logotransparent.png" alt=""
										class="copyrightasapImg"> Finance © 2025 All rights reserved.</span>
								<a href="##">Privacy Policy</a>
								<span class="footer-link-sep">|</span>
								<a href="##">Terms</a>

							</p>
						</div>

					</div>
				</footer>
			</div>
			<!-- / Page Footer -->
		</div>
		<!-- /Main Content -->
	</div>
	<!-- /Wrapper -->

	<!-- jQuery -->
	<script src="vendors/jquery/dist/jquery.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

	<!-- FeatherIcons JS -->
	<script src="dist/js/feather.min.js"></script>

	<!-- Fancy Dropdown JS -->
	<script src="dist/js/dropdown-bootstrap-extended.js"></script>

	<!-- Simplebar JS -->
	<script src="vendors/simplebar/dist/simplebar.min.js"></script>

	<!-- Init JS -->
	<script src="dist/js/init.js"></script>
</body>

<!-- Mirrored from hencework.com/theme/jampack/classic/login-simple.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 May 2024 12:47:13 GMT -->

</html>