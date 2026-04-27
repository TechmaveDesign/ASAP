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

    .TabInnerHead {
        justify-content: space-between;
        display: flex;
        align-items: center;
        margin-bottom: 15px;
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
                            <div class="TopCusHead">
                                <!-- <a href="#" class="back-link"><iconify-icon icon="cil:arrow-left"></iconify-icon> Back to Users</a> -->
                                <div class="info-banner">
                                    <img src="dist/img/newimages/gradient-blur-pink-blue-abstract.png" alt=""
                                        class="BnrGradientImg">
                                    <div class="banner-left">
                                        <div class="banner-icon">⚠</div>
                                        <div class="banner-content">
                                            <div class="banner-title">Cieco Securities Pvt. Ltd. has verified all information</div>
                                            <div class="progress-bar">
                                                <div class="progress-fill" style="width: 100%;"></div>
                                            </div>
                                            <div class="progress-percent">100% completed</div>
                                        </div>
                                    </div>

                                    <button class="banner-button" data-bs-toggle="offcanvas"
                                        data-bs-target="#activityOffcanvas">
                                        <iconify-icon icon="akar-icons:thunder"></iconify-icon> Profile Activity
                                    </button>
                                </div>

                                <div class="CustomerProfileWrap">
                                    <div class="user-profile">
                                        <div class="avatar">CS</div>

                                        <div class="user-details">
                                            <div class="user-email">Cieco Securities Pvt. Ltd.</div>
                                            <div class="user-id">
                                                customer_id: <code>VASAP202500001</code>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="enquiryRight_header_data TaskAction_wrapper ">
                                        <div class="enquiryDate dueDate_container">
                                            <iconify-icon icon="ion:calendar-outline"></iconify-icon>
                                            <div class="duedatelabel">Onboarded On : </div> July 01, 2025 15:20
                                        </div>
                                         <div class="enquiryDate dueDate_container">
                                            <iconify-icon icon="ion:calendar-outline"></iconify-icon>
                                            <div class="duedatelabel">Disbursed On : </div> July 20, 2025 
                                        </div>
                                        <div class="FileStatus">
                                            <div class="StatusBox">
                                            <span id="customerStatusBadge" class="badge badge-soft-success">Disbursed</span>
                                            </div>
                                                                                        <!-- <button type="button" id="markVASAPprovedBtn" class="btn markVASAPprovedBtn d-flex align-items-center gap-2">
                                            <input type="checkbox" class="form-check-input m-0" id="approvalCheckbox" />
                                            <span>Mark as Approved</span>
                                        </button> -->
                                           <!-- <a href="#" id="CreditApproveBTn" class="AssessmentBTn" data-bs-toggle="modal" data-bs-target="#DisburseConfirmModal">
                                            <iconify-icon icon="solar:hand-money-linear"></iconify-icon> Disburse Now
                                            </a> -->
                                        </div>

                                        <!-- <div class="enquiryID_container">
                                            <div class="EnquiryID">
                                               Customer Status
                                            </div>
                                            <div class="IDButton approval_status_update">
                                                <button type="button" class="SourceDataBtn pending" id="approvalStatusBtn" style="color: #4CAF50;background: #e9ffea;">
                                                    Active
                                                </button>
                                            </div>
                                        </div> -->

                                        <!-- <button class="ApproveButton" id="approveButton" onclick="handleApproveClick()">
                                            <iconify-icon icon="icon-park-outline:check"></iconify-icon>
                                            Approve
                                        </button> -->

                                    </div>
                                </div>


                            </div>

                            <div class="CustomerApprovalTab DisburesmentTab">
                                <!-- TAB HEADERS -->
                                <div class="tab-header ">
                                    <div class="tab active" data-tab="panel1">
                                    <div class="step-title">Customer Details</div>
                                    <!-- <div class="subtext"> <div class="status">Verified</div> 16 July,2025</div> -->
                                    </div>
                                    <div class="tab" data-tab="panel2">
                                    <div class="step-title"> Customer Loan Details & EMI Card</div>
                                    </div>
                                </div>

                                 <div class="tab-content p-0">
                                    <div class="tab-panel active" id="panel1">
                                        <section class="CustomerInformation">
                                <div class="TabInnerHead">
                                    <div class="HeadCnt">
                                        <h6>Customer Information
                                            <!-- <div class="subtext"> <div class="status-success">Verified</div> 16 July,2025</div> -->
                                        </h6>
                                        <!-- <p>Review the customer’s personal information to ensure accuracy before continuing.</p> -->
                                    </div>
                                    <!-- <div class="StepActions">
                                                    <a class="stepActionBtn" data-bs-toggle="modal" data-bs-target="#EditPersonalDetails"><iconify-icon icon="basil:edit-outline"></iconify-icon> Edit</a>
													<a class="stepActionBtn" href="#" data-bs-toggle="modal" data-bs-target="#VerifyModal"><iconify-icon icon="prime:check-square"></iconify-icon> Verify</a>
													<a class="stepActionBtn rejectBtn" href="#" data-bs-toggle="modal" data-bs-target="#RejectModal"><iconify-icon icon="radix-icons:cross-circled"></iconify-icon> Reject</a>
                                            </div> -->
                                    <!-- <div class="card-action-wrap">
												<a class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
												<div class="dropdown-menu dropdown-menu-end ActionDropDown">
													<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#EditPersonalDetails"><iconify-icon icon="basil:edit-outline"></iconify-icon> Edit</a>
													<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#VerifyModal"><iconify-icon icon="prime:check-square"></iconify-icon> Verify</a>
													<a class="dropdown-item rejectBtn" href="#" data-bs-toggle="modal" data-bs-target="#RejectModal"><iconify-icon icon="radix-icons:cross-circled"></iconify-icon> Reject</a>
													
												</div>
											</div> -->

                                </div>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="CustomCard">
                                            <!-- <div class="CustomCardHeader">
                                                    <h6 class="CustomCardTitle">2. Co-Applicant / Guarantor Details</h6>
                                                    <a href="#" class="EditGurantorDetailBTn" data-bs-toggle="modal" data-bs-target="#GurantorEdit">
                                                        <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                                    </a>
                                                    </div> -->
                                            <div class="CustomCardBody">
                                                <div class="ReportData_fields BussinessRepport">

                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container"> Customer Name</div>
                                                        <div class="userenuData">Atul Sharma</div>
                                                    </div>
                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Date of Birth</div>
                                                        <div class="userenuData">08 Aug 1995</div>
                                                    </div>
                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Gender</div>
                                                        <div class="userenuData">Male</div>
                                                    </div>
                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Mobile No.</div>
                                                        <div class="userenuData">+91 985 626 5426</div>
                                                    </div>

                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Marital Status</div>
                                                        <div class="userenuData">Single</div>
                                                    </div>
                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Email Address</div>
                                                        <div class="userenuData">atulSharma24@gmail.com</div>
                                                    </div>
                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Father’s / Spouse’s
                                                            Name</div>
                                                        <div class="userenuData">Mr. Rajesh Sharma</div>
                                                    </div>


                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Current Address</div>
                                                        <div class="userenuData"> 123, Shivaji Nagar, Near Central Mall,
                                                            Pune, Maharashtra - 411005</div>
                                                    </div>

                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Permanent Address
                                                        </div>
                                                        <div class="userenuData"> Same as current address</div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="AddressWrapper">
                                              <div class="CustomCard">
                                                <div class="CustomCardBody">
                                                    <div class="AddressCard">
                                                        <h6><iconify-icon icon="ion:location-outline"></iconify-icon> Current Address</h6>
                                                        <p>
                                                            123, Shivaji Nagar, Near Central Mall,<br>
                                                            Pune, Maharashtra - 411005
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="CustomCard">
                                                <div class="CustomCardBody">
                                                    <div class="AddressCard">
                                                       <h6><iconify-icon icon="ion:location-outline"></iconify-icon> Permanent Address</h6>
                                                        <p>
                                                            89, MG Road, Opposite City Library,<br>
                                                            Nagpur, Maharashtra - 440001
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            </div> -->
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="row p-0">
                                            <div class="col-lg-5">
                                                <label class="loan-card selected">
                                                    <input type="radio" name="loanType" value="personal_loan">
                                                    <div class="loan-card-body">
                                                        <h4><img src="dist/img/newimages/logotransparent.png"
                                                                alt="VASAP Finance Logo" class="inline-logo"> SolarBiz
                                                            Loan</h4>
                                                        <ul>
                                                            <li>

                                                                <div class="loancardpoints_content">
                                                                    <div class="pointlabel">Loan Size</div>₹1 lakh – ₹50
                                                                    lakh
                                                                </div>
                                                            </li>
                                                            <li>

                                                                <div class="loancardpoints_content">
                                                                    <div class="pointlabel">Tenure</div>Up to 4 years
                                                                </div>
                                                            </li>
                                                            <li>

                                                                <div class="loancardpoints_content">
                                                                    <div class="pointlabel">Collateral</div>Unsecured or
                                                                    secured
                                                                    (based on ticket size)
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-lg-7 ">
                                                <div class="CustomCard CustomerRequirement">
                                                    <div class="CustomCardHeader">
                                                        <h6 class="CustomCardTitle">Customer Requirements</h6>
                                                    </div>
                                                    <div class="CustomCardBody">
                                                        <div class="ReportData_fields">

                                                            <div class="cu-task-fields__row">
                                                                <div class="cu-task-label-icon__container">Loan Amount
                                                                    (₹)</div>
                                                                <div class="userenuData">₹20,00,000</div>
                                                            </div>

                                                            <div class="cu-task-fields__row">
                                                                <div class="cu-task-label-icon__container">Tenure (in
                                                                    months)</div>
                                                                <div class="userenuData">48 Months</div>
                                                            </div>

                                                            <div class="cu-task-fields__row fullWidth">
                                                                <div class="cu-task-label-icon__container">Write any
                                                                    specifics, where we can help you</div>
                                                                <div class="userenuData">I need urgent processing, or I
                                                                    need help understanding eligibility criteria...
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>



                                </div>
                            </section>
                            <section class="CustomerInformation">
                                <div class="TabInnerHead">
                                    <div class="HeadCnt">
                                        <h6> Guarantor/Co-Applicant Details
                                            <!-- <div class="subtext"> <div class="status-success">Verified</div> 16 July,2025</div> -->
                                        </h6>
                                        <!-- <p>Review the provided information for the co-applicant or guarantor to ensure accuracy before proceeding.</p> -->
                                    </div>
                                    <!-- <div class="StepActions">
                                                <a class="stepActionBtn" data-bs-toggle="modal" data-bs-target="#GurantorAdd"><iconify-icon icon="basil:add-outline" ></iconify-icon> Add New</a>
                                                <a class="stepActionBtn" href="#" data-bs-toggle="modal" data-bs-target="#GurantorDetailsModal">
                                                    <iconify-icon icon="prime:check-square"></iconify-icon> Verify 
                                                </a>
                                                <a class="stepActionBtn rejectBtn" href="#" data-bs-toggle="modal" data-bs-target="#GurantorDetailsRejectModal">
                                                    <iconify-icon icon="radix-icons:cross-circled"></iconify-icon> Reject 
                                                </a>
                                                    
                                            </div> -->
                                    <!-- <div class="card-action-wrap">
                                                <a class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown">
                                                <span class="icon">
                                                    <span class="feather-icon">
                                                    <i data-feather="more-vertical"></i>
                                                    </span>
                                                </span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end ActionDropDown">
                                                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#GurantorAdd"><iconify-icon icon="basil:add-outline" ></iconify-icon> Add New</a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#GurantorDetailsModal">
                                                    <iconify-icon icon="prime:check-square"></iconify-icon> Verify 
                                                </a>
                                                <a class="dropdown-item rejectBtn" href="#" data-bs-toggle="modal" data-bs-target="#GurantorDetailsRejectModal">
                                                    <iconify-icon icon="radix-icons:cross-circled"></iconify-icon> Reject 
                                                </a>
                                                </div>
                                            </div> -->
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="CustomCard">
                                            <div class="CustomCardHeader">
                                                <h6 class="CustomCardTitle">1. Co-Applicant / Guarantor Details</h6>
                                                <!-- <a href="#" class="EditGurantorDetailBTn" data-bs-toggle="modal" data-bs-target="#GurantorEdit">
                                                            <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                                        </a> -->
                                            </div>
                                            <div class="CustomCardBody">
                                                <div class="ReportData_fields">

                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Full Name</div>
                                                        <div class="userenuData">Mr. Rajeev Sharma</div>
                                                    </div>

                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Relationship with
                                                            Applicant</div>
                                                        <div class="userenuData">Father</div>
                                                    </div>

                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Mobile Number</div>
                                                        <div class="userenuData">+91 98760 12345</div>
                                                    </div>

                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Email Address</div>
                                                        <div class="userenuData">rajeev.sharma@gmail.com</div>
                                                    </div>

                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Address</div>
                                                        <div class="userenuData">E-42, Sector 15, Noida, Uttar Pradesh,
                                                            India</div>
                                                    </div>

                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Occupation</div>
                                                        <div class="userenuData">Retired Government Officer</div>
                                                    </div>

                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Annual Income (INR)
                                                        </div>
                                                        <div class="userenuData">₹5,00,000</div>
                                                    </div>

                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">ID Proof Type</div>
                                                        <div class="userenuData">Aadhaar Card</div>
                                                    </div>

                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">ID Number</div>
                                                        <div class="userenuData">XXXX-XXXX-1234</div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="CustomCard">
                                            <div class="CustomCardHeader">
                                                <h6 class="CustomCardTitle">2. Co-Applicant / Guarantor Details</h6>
                                                <!-- <a href="#" class="EditGurantorDetailBTn" data-bs-toggle="modal" data-bs-target="#GurantorEdit">
                                                        <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                                    </a> -->
                                            </div>
                                            <div class="CustomCardBody">
                                                <div class="ReportData_fields">

                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Full Name</div>
                                                        <div class="userenuData">Ms. Riya Kapoor</div>
                                                    </div>

                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Relationship with
                                                            Applicant</div>
                                                        <div class="userenuData">Spouse</div>
                                                    </div>

                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Mobile Number</div>
                                                        <div class="userenuData">+91 98765 43210</div>
                                                    </div>

                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Email Address</div>
                                                        <div class="userenuData">riya.kapoor@example.com</div>
                                                    </div>

                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Address</div>
                                                        <div class="userenuData">A-24, Green Park, New Delhi, India
                                                        </div>
                                                    </div>

                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Occupation</div>
                                                        <div class="userenuData">Marketing Manager</div>
                                                    </div>

                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Annual Income (INR)
                                                        </div>
                                                        <div class="userenuData">₹12,50,000</div>
                                                    </div>

                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">ID Proof Type</div>
                                                        <div class="userenuData">Voter ID</div>
                                                    </div>

                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">ID Number</div>
                                                        <div class="userenuData">DL/04/2019/213456</div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="CustomerInformation">
                                <div class="TabInnerHead">
                                    <div class="HeadCnt">
                                        <h6>Business Details
                                            <!-- <div class="subtext"> <div class="status-success">Verified</div> 16 July,2025</div> -->
                                        </h6>
                                        <!-- <p>Review the customer’s business information including type, ownership, income, and registration details before proceeding.</p> -->
                                    </div>
                                    <!-- <div class="StepActions">
                                                    <a class="stepActionBtn" data-bs-toggle="modal" data-bs-target="#BusinessDetailEdit"><iconify-icon icon="basil:edit-outline"></iconify-icon> Edit</a>

                                                    <a class="stepActionBtn" href="#" data-bs-toggle="modal" data-bs-target="#BusinessVerifyModal">
                                                        <iconify-icon icon="prime:check-square"></iconify-icon> Verify 
                                                    </a>
                                                    <a class="stepActionBtn rejectBtn" href="#" data-bs-toggle="modal" data-bs-target="#BusinessRejectModal">
                                                        <iconify-icon icon="radix-icons:cross-circled"></iconify-icon> Reject 
                                                    </a>
                                                    
                                            </div> -->
                                    <!-- <div class="card-action-wrap">
                                                    <a class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown">
                                                    <span class="icon">
                                                        <span class="feather-icon">
                                                        <i data-feather="more-vertical"></i>
                                                        </span>
                                                    </span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end ActionDropDown">
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#BusinessAddModal">
                                                        <iconify-icon icon="basil:add-outline"></iconify-icon> Add Business Info
                                                    </a>
													<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#BusinessDetailEdit"><iconify-icon icon="basil:edit-outline"></iconify-icon> Edit</a>

                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#BusinessVerifyModal">
                                                        <iconify-icon icon="prime:check-square"></iconify-icon> Verify 
                                                    </a>
                                                    <a class="dropdown-item rejectBtn" href="#" data-bs-toggle="modal" data-bs-target="#BusinessRejectModal">
                                                        <iconify-icon icon="radix-icons:cross-circled"></iconify-icon> Reject 
                                                    </a>
                                                    </div>
                                                </div> -->
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="CustomCard">
                                            <!-- <div class="CustomCardHeader">
                                                    <h6 class="CustomCardTitle">2. Co-Applicant / Guarantor Details</h6>
                                                    <a href="#" class="EditGurantorDetailBTn" data-bs-toggle="modal" data-bs-target="#GurantorEdit">
                                                        <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                                    </a>
                                                    </div> -->
                                            <div class="CustomCardBody">
                                                <div class="ReportData_fields BussinessRepport">

                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Business Name</div>
                                                        <div class="userenuData">Ms. Riya Kapoor</div>
                                                    </div>

                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Business Type</div>
                                                        <div class="userenuData">Partnership</div>
                                                    </div>

                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Business Start Date
                                                        </div>
                                                        <div class="userenuData">20 July, 2025</div>
                                                    </div>

                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Annual Turnover (INR)
                                                        </div>
                                                        <div class="userenuData">₹12,50,000</div>
                                                    </div>

                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">GST Number</div>
                                                        <div class="userenuData">07AAGPK1234L1Z1</div>
                                                    </div>

                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Business PAN Number
                                                        </div>
                                                        <div class="userenuData">Marketing Manager</div>
                                                    </div>

                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Business Address
                                                        </div>
                                                        <div class="userenuData">A-24, Green Park, New Delhi, India
                                                        </div>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="docCardWrapper BusinessDocument">
                                            <div class="docCard">
                                                <div class="docImage">
                                                    <a href="dist/img/newimages/dummy-pdf.pdf" download="">
                                                        <img src="dist/img/newimages/pdf.png" alt="bank statement">
                                                    </a>
                                                </div>
                                                <div class="docContent">
                                                    <span class="verified-badge">Verified</span>
                                                    <h6 class="doc-title">Business Proof </h6>
                                                    <p class="step-label">Uploaded on</p>
                                                    <p class="doc-meta">14 July 2025, 3:42 PM</p>

                                                </div>
                                            </div>
                                            <div class="docCard">
                                                <div class="docImage">
                                                    <a href="dist/img/newimages/dummy-pdf.pdf" download="">
                                                        <img src="dist/img/newimages/pdf.png" alt="bank statement">
                                                    </a>
                                                </div>
                                                <div class="docContent">
                                                    <span class="verified-badge">Verified</span>
                                                    <h6 class="doc-title"> ITR / Income Proof</h6>
                                                    <p class="step-label">Uploaded on</p>
                                                    <p class="doc-meta">14 July 2025, 3:42 PM</p>

                                                </div>
                                            </div>
                                            <div class="docCard">
                                                <div class="docImage">
                                                    <a href="dist/img/newimages/dummy-pdf.pdf" download="">
                                                        <img src="dist/img/newimages/pdf.png" alt="bank statement">
                                                    </a>
                                                </div>
                                                <div class="docContent">
                                                    <span class="verified-badge">Verified</span>
                                                    <h6 class="doc-title"> Office Rent Or Lease Agreement</h6>
                                                    <p class="step-label">Uploaded on</p>
                                                    <p class="doc-meta">14 July 2025, 3:42 PM</p>

                                                </div>
                                            </div>
                                            <div class="docCard">
                                                <div class="docImage">
                                                    <a href="dist/img/newimages/dummy-pdf.pdf" download="">
                                                        <img src="dist/img/newimages/pdf.png" alt="bank statement">
                                                    </a>
                                                </div>
                                                <div class="docContent">
                                                    <span class="verified-badge">Verified</span>
                                                    <h6 class="doc-title">Balance sheet</h6>
                                                    <p class="step-label">Uploaded on</p>
                                                    <p class="doc-meta">14 July 2025, 3:42 PM</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="CustomerInformation">
                                <div class="TabInnerHead">
                                    <div class="HeadCnt">
                                        <h6>Bank Details </h6>
                                        <!-- <p>Review the customer's bank information including account holder name, account number, IFSC code, and statements before proceeding.</p> -->
                                    </div>
                                    <!-- <div class="StepActions">
                                                    <a class="stepActionBtn" data-bs-toggle="modal" data-bs-target="#BankDetailEdit">
                                                        <iconify-icon icon="basil:edit-outline"></iconify-icon> Edit
                                                    </a>
                                                    <a class="stepActionBtn" href="#" data-bs-toggle="modal" data-bs-target="#BankVerifyModal">
                                                        <iconify-icon icon="prime:check-square"></iconify-icon> Verify
                                                    </a>
                                                    <a class="stepActionBtn rejectBtn" href="#" data-bs-toggle="modal" data-bs-target="#BankRejectModal">
                                                        <iconify-icon icon="radix-icons:cross-circled"></iconify-icon> Reject
                                                    </a>
                                            </div> -->
                                    <!-- <div class="card-action-wrap">
                                            <a class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                <i data-feather="more-vertical"></i>
                                                </span>
                                            </span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end ActionDropDown">
                                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#BankDetailEdit">
                                                <iconify-icon icon="basil:edit-outline"></iconify-icon> Edit
                                            </a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#BankVerifyModal">
                                                <iconify-icon icon="prime:check-square"></iconify-icon> Verify
                                            </a>
                                            <a class="dropdown-item rejectBtn" href="#" data-bs-toggle="modal" data-bs-target="#BankRejectModal">
                                                <iconify-icon icon="radix-icons:cross-circled"></iconify-icon> Reject
                                            </a>
                                            </div>
                                        </div> -->
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="CustomCard">
                                            <!-- <div class="CustomCardHeader">
                                                    <h6 class="CustomCardTitle">2. Co-Applicant / Guarantor Details</h6>
                                                    <a href="#" class="EditGurantorDetailBTn" data-bs-toggle="modal" data-bs-target="#GurantorEdit">
                                                        <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                                    </a>
                                                    </div> -->
                                            <div class="CustomCardBody">
                                                <div class="ReportData_fields BussinessRepport">
                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Account Holder Name
                                                        </div>
                                                        <div class="userenuData">Atul Sharma</div>
                                                    </div>

                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Bank Name</div>
                                                        <div class="userenuData">HDFC Bank</div>
                                                    </div>

                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Account Number</div>
                                                        <div class="userenuData">XXXXXXXX1234</div>
                                                    </div>

                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Confirm Account
                                                            Number</div>
                                                        <div class="userenuData">XXXXXXXX1234</div>
                                                    </div>

                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">IFSC Code</div>
                                                        <div class="userenuData">HDFC0001456</div>
                                                    </div>

                                                    <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Branch Name</div>
                                                        <div class="userenuData">Connaught Place, New Delhi</div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="docCardWrapper BankDocument">
                                            <div class="docCard">
                                                <div class="docImage">
                                                    <a href="dist/img/newimages/dummy-pdf.pdf" download="">
                                                        <img src="dist/img/newimages/pdf.png" alt="bank statement">
                                                    </a>


                                                </div>
                                                <div class="docContent">
                                                    <span class="verified-badge">Verified</span>
                                                    <h6 class="doc-title">Bank Statement</h6>
                                                    <p class="step-label">Uploaded on</p>
                                                    <p class="doc-meta">14 July 2025, 3:42 PM</p>
                                                    <a href="#" class="DownLoadBankSheet">
                                                        <iconify-icon icon="material-symbols:download"></iconify-icon>
                                                        Bank Analysis Sheet
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="CustomerInformation">
                                <div class="TabInnerHead">
                                    <div class="HeadCnt">
                                        <h6>KYC Document Review
                                            <!-- <div class="subtext"> <div class="status-success">Verified</div> 16 July,2025</div> -->
                                        </h6>
                                        <!-- <p>Verify the customer's identity by reviewing the submitted KYC documents, such as Aadhaar, PAN, and proof of address.</p> -->
                                    </div>
                                    <!-- <div class="StepActions">
                                                    <a class="stepActionBtn" data-bs-toggle="modal" data-bs-target="#EditPersonalDetails"><iconify-icon icon="basil:edit-outline"></iconify-icon> Edit</a>
													<a class="stepActionBtn" href="#" ><iconify-icon icon="iwwa:alert"></iconify-icon> Send KYC Docs Alert</a>
                                                    <a class="stepActionBtn" href="#" data-bs-toggle="modal" data-bs-target="#VerifyModal"><iconify-icon icon="prime:check-square"></iconify-icon> Verify</a>
													<a class="stepActionBtn rejectBtn" href="#" data-bs-toggle="modal" data-bs-target="#RejectModal"><iconify-icon icon="radix-icons:cross-circled"></iconify-icon> Reject</a>
                                            </div> -->
                                    <!-- <div class="card-action-wrap">
												<a class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
												<div class="dropdown-menu dropdown-menu-end ActionDropDown">
													<a class="dropdown-item"><iconify-icon icon="basil:edit-outline"></iconify-icon> Edit</a>
													<a class="dropdown-item"><iconify-icon icon="iwwa:alert"></iconify-icon> Send KYC Docs Alert</a>
													<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#KYCverifyModal"><iconify-icon icon="prime:check-square"></iconify-icon> Verify</a>
													<a class="dropdown-item rejectBtn" href="#" data-bs-toggle="modal" data-bs-target="#KYCRejectModal"><iconify-icon icon="radix-icons:cross-circled"></iconify-icon> Reject</a>
													
												</div>
											</div> -->

                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!-- <div class="MainDocWrapper">
                                                     <h3 class="DocMainTitle">Aadhar Card </h3>
                                                     
                                                </div> -->
                                        <div class="KYCdocumentTab">
                                            <ul class="KYC-tablist" role="tablist">
                                                <li class="KYC-tab KYC-active" data-target="KYC-customer">Customer
                                                    Documents</li>
                                                <li class="KYC-tab" data-target="KYC-partner1">Partner 1 Documents</li>
                                                <li class="KYC-tab" data-target="KYC-partner2">Partner 2 Documents</li>
                                            </ul>

                                            <div class="KYC-tabcontent">
                                                <div class="KYC-pane KYC-active" id="KYC-customer">
                                                    <div class="docCardWrapper">

                                                        <div class="docCard">
                                                            <div class="docImage">
                                                                <a data-fancybox="aadhar"
                                                                    href="dist/img/newimages/aadhar-front.png">
                                                                    <img src="dist/img/newimages/aadhar-front.png"
                                                                        alt="Aadhaar Front" />
                                                                </a>
                                                            </div>
                                                            <div class="docContent">
                                                                <span class="verified-badge">Verified</span>
                                                                <h6 class="doc-title">AADHAAR CARD (FRONT)</h6>
                                                                <p class="step-label">Uploaded on</p>
                                                                <p class="doc-meta">14 July 2025, 3:42 PM</p>
                                                            </div>
                                                        </div>


                                                        <div class="docCard">
                                                            <div class="docImage">
                                                                <a data-fancybox="aadhar"
                                                                    href="dist/img/newimages/aadhar-back.png">
                                                                    <img src="dist/img/newimages/aadhar-back.png"
                                                                        alt="Aadhaar Back" />
                                                                </a>
                                                            </div>
                                                            <div class="docContent">
                                                                <span class="verified-badge">Verified</span>
                                                                <h6 class="doc-title">AADHAAR CARD (BACK)</h6>
                                                                <p class="step-label">Uploaded on</p>
                                                                <p class="doc-meta">14 July 2025, 3:42 PM</p>
                                                            </div>
                                                        </div>

                                                        <div class="docCard">
                                                            <div class="docImage">
                                                                <a data-fancybox="aadhar"
                                                                    href="dist/img/newimages/pan-card.png">
                                                                    <img src="dist/img/newimages/pan-card.png"
                                                                        alt="PAN Card" />
                                                                </a>
                                                            </div>
                                                            <div class="docContent">
                                                                <span class="verified-badge">Verified</span>
                                                                <h6 class="doc-title">PAN Card</h6>
                                                                <p class="step-label">Uploaded on</p>
                                                                <p class="doc-meta">14 July 2025, 3:42 PM</p>
                                                            </div>
                                                        </div>

                                                        <div class="docCard">
                                                            <div class="docImage">
                                                                <a data-fancybox="aadhar"
                                                                    href="dist/img/newimages/voterid.png">
                                                                    <img src="dist/img/newimages/voterid.png"
                                                                        alt="Voter Id Card" />
                                                                </a>
                                                            </div>
                                                            <div class="docContent">
                                                                <span class="verified-badge">Verified</span>
                                                                <h6 class="doc-title"> Address Proof </h6>
                                                                <p class="step-label">Uploaded on</p>
                                                                <p class="doc-meta">14 July 2025, 3:42 PM</p>
                                                            </div>
                                                        </div>

                                                        <div class="docCard">
                                                            <div class="docImage">
                                                                <a data-fancybox="aadhar"
                                                                    href="dist/img/newimages/users/user2.jpg">
                                                                    <img src="dist/img/newimages/users/user2.jpg"
                                                                        alt="Voter Id Card" />
                                                                </a>
                                                            </div>
                                                            <div class="docContent">
                                                                <span class="verified-badge">Verified</span>
                                                                <h6 class="doc-title">Customer Photo</h6>
                                                                <p class="step-label">Uploaded on</p>
                                                                <p class="doc-meta">14 July 2025, 3:42 PM</p>
                                                            </div>
                                                        </div>
                                                        <div class="docCard">
                                                            <div class="docImage">
                                                                <a data-fancybox="aadhar"
                                                                    href="dist/img/newimages/sign.png">
                                                                    <img src="dist/img/newimages/sign.png"
                                                                        alt="Voter Id Card" />
                                                                </a>
                                                            </div>
                                                            <div class="docContent">
                                                                <span class="verified-badge">Verified</span>
                                                                <h6 class="doc-title">Signature</h6>
                                                                <p class="step-label">Uploaded on</p>
                                                                <p class="doc-meta">14 July 2025, 3:42 PM</p>
                                                            </div>
                                                        </div>
                                                        <div class="docCard">
                                                            <div class="docImage">
                                                                <a href="dist/img/newimages/dummy-pdf.pdf" download>
                                                                    <img src="dist/img/newimages/pdf.png"
                                                                        alt="bank statement" />
                                                                </a>


                                                            </div>
                                                            <div class="docContent">
                                                                <span class="verified-badge">Verified</span>
                                                                <h6 class="doc-title">Bank Statement</h6>
                                                                <p class="step-label">Uploaded on</p>
                                                                <p class="doc-meta">14 July 2025, 3:42 PM</p>
                                                                <a href="#" class="DownLoadBankSheet">
                                                                    <iconify-icon icon="material-symbols:download">
                                                                    </iconify-icon>
                                                                    Bank Analysis Sheet
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="KYC-pane" id="KYC-partner1">

                                                    <div class="docCardWrapper">

                                                        <div class="docCard">
                                                            <div class="docImage">
                                                                <a data-fancybox="aadhar"
                                                                    href="dist/img/newimages/aadhar-front.png">
                                                                    <img src="dist/img/newimages/aadhar-front.png"
                                                                        alt="Aadhaar Front" />
                                                                </a>
                                                            </div>
                                                            <div class="docContent">
                                                                <span class="verified-badge">Verified</span>
                                                                <h6 class="doc-title">AADHAAR CARD (FRONT)</h6>
                                                                <p class="step-label">Uploaded on</p>
                                                                <p class="doc-meta">14 July 2025, 3:42 PM</p>
                                                            </div>
                                                        </div>


                                                        <div class="docCard">
                                                            <div class="docImage">
                                                                <a data-fancybox="aadhar"
                                                                    href="dist/img/newimages/aadhar-back.png">
                                                                    <img src="dist/img/newimages/aadhar-back.png"
                                                                        alt="Aadhaar Back" />
                                                                </a>
                                                            </div>
                                                            <div class="docContent">
                                                                <span class="verified-badge">Verified</span>
                                                                <h6 class="doc-title">AADHAAR CARD (BACK)</h6>
                                                                <p class="step-label">Uploaded on</p>
                                                                <p class="doc-meta">14 July 2025, 3:42 PM</p>
                                                            </div>
                                                        </div>

                                                        <div class="docCard">
                                                            <div class="docImage">
                                                                <a data-fancybox="aadhar"
                                                                    href="dist/img/newimages/pan-card.png">
                                                                    <img src="dist/img/newimages/pan-card.png"
                                                                        alt="PAN Card" />
                                                                </a>
                                                            </div>
                                                            <div class="docContent">
                                                                <span class="verified-badge">Verified</span>
                                                                <h6 class="doc-title">PAN Card</h6>
                                                                <p class="step-label">Uploaded on</p>
                                                                <p class="doc-meta">14 July 2025, 3:42 PM</p>
                                                            </div>
                                                        </div>

                                                        <div class="docCard">
                                                            <div class="docImage">
                                                                <a data-fancybox="aadhar"
                                                                    href="dist/img/newimages/voterid.png">
                                                                    <img src="dist/img/newimages/voterid.png"
                                                                        alt="Voter Id Card" />
                                                                </a>
                                                            </div>
                                                            <div class="docContent">
                                                                <span class="verified-badge">Verified</span>
                                                                <h6 class="doc-title"> Address Proof </h6>
                                                                <p class="step-label">Uploaded on</p>
                                                                <p class="doc-meta">14 July 2025, 3:42 PM</p>
                                                            </div>
                                                        </div>

                                                        <div class="docCard">
                                                            <div class="docImage">
                                                                <a data-fancybox="aadhar"
                                                                    href="dist/img/newimages/users/user2.jpg">
                                                                    <img src="dist/img/newimages/users/user2.jpg"
                                                                        alt="Voter Id Card" />
                                                                </a>
                                                            </div>
                                                            <div class="docContent">
                                                                <span class="verified-badge">Verified</span>
                                                                <h6 class="doc-title">Customer Photo</h6>
                                                                <p class="step-label">Uploaded on</p>
                                                                <p class="doc-meta">14 July 2025, 3:42 PM</p>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="KYC-pane" id="KYC-partner2">

                                                    <div class="docCardWrapper">

                                                        <div class="docCard">
                                                            <div class="docImage">
                                                                <a data-fancybox="aadhar"
                                                                    href="dist/img/newimages/aadhar-front.png">
                                                                    <img src="dist/img/newimages/aadhar-front.png"
                                                                        alt="Aadhaar Front" />
                                                                </a>
                                                            </div>
                                                            <div class="docContent">
                                                                <span class="verified-badge">Verified</span>
                                                                <h6 class="doc-title">AADHAAR CARD (FRONT)</h6>
                                                                <p class="step-label">Uploaded on</p>
                                                                <p class="doc-meta">14 July 2025, 3:42 PM</p>
                                                            </div>
                                                        </div>


                                                        <div class="docCard">
                                                            <div class="docImage">
                                                                <a data-fancybox="aadhar"
                                                                    href="dist/img/newimages/aadhar-back.png">
                                                                    <img src="dist/img/newimages/aadhar-back.png"
                                                                        alt="Aadhaar Back" />
                                                                </a>
                                                            </div>
                                                            <div class="docContent">
                                                                <span class="verified-badge">Verified</span>
                                                                <h6 class="doc-title">AADHAAR CARD (BACK)</h6>
                                                                <p class="step-label">Uploaded on</p>
                                                                <p class="doc-meta">14 July 2025, 3:42 PM</p>
                                                            </div>
                                                        </div>

                                                        <div class="docCard">
                                                            <div class="docImage">
                                                                <a data-fancybox="aadhar"
                                                                    href="dist/img/newimages/pan-card.png">
                                                                    <img src="dist/img/newimages/pan-card.png"
                                                                        alt="PAN Card" />
                                                                </a>
                                                            </div>
                                                            <div class="docContent">
                                                                <span class="verified-badge">Verified</span>
                                                                <h6 class="doc-title">PAN Card</h6>
                                                                <p class="step-label">Uploaded on</p>
                                                                <p class="doc-meta">14 July 2025, 3:42 PM</p>
                                                            </div>
                                                        </div>

                                                        <div class="docCard">
                                                            <div class="docImage">
                                                                <a data-fancybox="aadhar"
                                                                    href="dist/img/newimages/voterid.png">
                                                                    <img src="dist/img/newimages/voterid.png"
                                                                        alt="Voter Id Card" />
                                                                </a>
                                                            </div>
                                                            <div class="docContent">
                                                                <span class="verified-badge">Verified</span>
                                                                <h6 class="doc-title"> Address Proof </h6>
                                                                <p class="step-label">Uploaded on</p>
                                                                <p class="doc-meta">14 July 2025, 3:42 PM</p>
                                                            </div>
                                                        </div>

                                                        <div class="docCard">
                                                            <div class="docImage">
                                                                <a data-fancybox="aadhar"
                                                                    href="dist/img/newimages/users/user2.jpg">
                                                                    <img src="dist/img/newimages/users/user2.jpg"
                                                                        alt="Voter Id Card" />
                                                                </a>
                                                            </div>
                                                            <div class="docContent">
                                                                <span class="verified-badge">Verified</span>
                                                                <h6 class="doc-title">Customer Photo</h6>
                                                                <p class="step-label">Uploaded on</p>
                                                                <p class="doc-meta">14 July 2025, 3:42 PM</p>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </section>
                            <section class="CustomerInformation">
                                <div class="TabInnerHead">
                                    <div class="HeadCnt">
                                        <h6>CIBIL Summary </h6>
                                        <!-- <p>Review the customer's credit and financial history from leading bureaus before making loan decisions.</p> -->

                                    </div>
                                    <!-- <a href="#" class="downloadReport"><iconify-icon icon="material-symbols:download"></iconify-icon> Bureau Report</a> -->
                                    <!-- <div class="card-action-wrap">
                                                    <a class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown">
                                                    <span class="icon">
                                                        <span class="feather-icon">
                                                        <i data-feather="more-vertical"></i>
                                                        </span>
                                                    </span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end ActionDropDown">
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#BusinessAddModal">
                                                        <iconify-icon icon="basil:add-outline"></iconify-icon> Add Business Info
                                                    </a>
													<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#BusinessDetailEdit"><iconify-icon icon="basil:edit-outline"></iconify-icon> Edit</a>

                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#BusinessVerifyModal">
                                                        <iconify-icon icon="prime:check-square"></iconify-icon> Verify 
                                                    </a>
                                                    <a class="dropdown-item rejectBtn" href="#" data-bs-toggle="modal" data-bs-target="#BusinessRejectModal">
                                                        <iconify-icon icon="radix-icons:cross-circled"></iconify-icon> Reject 
                                                    </a>
                                                    </div>
                                                </div> -->
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-body">

                                                <div id="creditChart2"></div>
                                                <div class="score-label">
                                                    <h1 id="scoreValue">781</h1>
                                                    <p id="scoreGrade">Very Good</p>
                                                </div>
                                                <div class="score-date">
                                                    is your <strong style="color: #0074cc">CIBIL</strong> Score as of
                                                    <strong>21 Feb 2025</strong><br>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </section>
                                      </div>
                                       <div class="tab-panel" id="panel2">
                                            <div class="loan-summary">
                                                <div class="summary-box">
                                                    <p class="label">Approved Disbursed Amount</p>
                                                    <div class="underline"></div>
                                                    <p class="amount">₹5,00,000</p>
                                                    <p class="note">Approved On 03/08/2025</p>
                                                </div>
                                                <div class="summary-box">
                                                    <p class="label">To Be Disbursed Amount</p>
                                                    <div class="underline"></div>
                                                    <p class="amount">₹1,50,000</p>
                                                    <p class="note">On 03/08/2025</p>
                                                </div>
                                                <div class="summary-box">
                                                    <p class="label">Remaining Disbursed Amount</p>
                                                    <div class="underline"></div>
                                                    <p class="amount">₹3,50,000</p>
                                                </div>
                                                <div class="summary-box">
                                                    <p class="label">EMI Amount</p>
                                                    <div class="underline"></div>
                                                    <p class="amount">₹7,500</p>
                                                    <p class="note">Next Due on 03/08/2025</p>
                                                </div>
                                                <div class="summary-box">
                                                    <p class="label">Outstanding Amount</p>
                                                    <div class="underline"></div>
                                                    <p class="amount">₹5,00,000</p>
                                                </div>
                                                </div>


                                       <section class="CustomerInformation">
                                             <div class="row p-0">
                                                <!-- <div class="col-lg-4">

                                                </div> -->
                                                <div class="col-lg-6">
                                                    <div class="CustomCard">
                                                        <div class="CustomCardHeader">
                                                            <h6 class="CustomCardTitle">Customer Loan Details</h6>
                                                       
                                                        </div>
                                                        <div class="CustomCardBody">
                                                            <div class="ReportData_fields">
                                                                <div class="cu-task-fields__row">
                                                                    <div class="cu-task-label-icon__container">Loan ID</div>
                                                                    <div class="userenuData">LN20250001</div>
                                                                </div>
                                                                <div class="cu-task-fields__row">
                                                                    <div class="cu-task-label-icon__container">ROI Type</div>
                                                                    <div class="userenuData">Reducing ROI</div>
                                                                </div>

                                                                <!-- <div class="cu-task-fields__row">
                                                                    <div class="cu-task-label-icon__container">Amount</div>
                                                                    <div class="userenuData">₹500000</div>
                                                                </div> -->

                                                                <div class="cu-task-fields__row">
                                                                    <div class="cu-task-label-icon__container">Product Name</div>
                                                                    <div class="userenuData">Business Loan / Unsecured</div>
                                                                </div>

                                                                <div class="cu-task-fields__row">
                                                                    <div class="cu-task-label-icon__container">Tenure </div>
                                                                    <div class="userenuData">36 Month</div>
                                                                </div>

                                                                <div class="cu-task-fields__row">
                                                                    <div class="cu-task-label-icon__container">Interest</div>
                                                                    <div class="userenuData">18%</div>
                                                                </div>

                                                                <div class="cu-task-fields__row">
                                                                    <div class="cu-task-label-icon__container">Total Interest</div>
                                                                    <div class="userenuData">₹150743</div>
                                                                </div>

                                                                <div class="cu-task-fields__row">
                                                                    <div class="cu-task-label-icon__container">Plateform Fee
                                                                    </div>
                                                                    <div class="userenuData">₹10800</div>
                                                                </div>

                                                                <div class="cu-task-fields__row">
                                                                    <div class="cu-task-label-icon__container">Insurance Fee</div>
                                                                    <div class="userenuData">₹8433</div>
                                                                </div>

                                                                <!-- <div class="cu-task-fields__row">
                                                                    <div class="cu-task-label-icon__container">Net Disbursement Amount</div>
                                                                    <div class="userenuData">₹480,767</div>
                                                                </div> -->
                                                                    <div class="cu-task-fields__row">
                                                                    <div class="cu-task-label-icon__container">Payble Amount</div>
                                                                    <div class="userenuData">₹6417491</div>
                                                                </div>
                                                                  <div class="cu-task-fields__row">
                                                                    <div class="cu-task-label-icon__container">Total Due Amount </div>
                                                                    <div class="userenuData redText">₹00.00</div>
                                                                </div>
                                                                  <!-- <div class="cu-task-fields__row">
                                                                    <div class="cu-task-label-icon__container">Outstanding Amount</div>
                                                                    <div class="userenuData">₹5,000,000.00</div>
                                                                </div> -->
                                                                 <div class="cu-task-fields__row">
                                                                    <div class="cu-task-label-icon__container">Include PF/Insurance Fee</div>
                                                                    <div class="userenuData">Yes</div>
                                                                </div>
                                                                 <div class="cu-task-fields__row">
                                                                    <div class="cu-task-label-icon__container">Include Extradays </div>
                                                                    <div class="userenuData">No</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="col-lg-6">
                                                        <div class="CustomCard">
                                                            <div class="CustomCardHeader">
                                                                <h6 class="CustomCardTitle">Disbursement Documents</h6>
                                                                <button id="uploadMoreBtn" class="btn btn-primary" style="display: none;" data-bs-toggle="modal" data-bs-target="#UploadFileModal">
                                                                   Upload Documents
                                                                </button>
                                                            </div>
                                                            <div class="CustomCardBody">
                                                                
                                                                <div id="noFilesMessage">
                                                                    <img src="dist/img/newimages/addmedia.png" alt="">
                                                                <h6>There is no document uploaded yet.</h6>
                                                                <p class="text-muted small">Please upload the necessary disbursement documents to proceed with the application process. Supported formats include PDF, DOC, and Excel files.</p>
                                                                <button class="btn btn-primary" id="uploadBtn" data-bs-toggle="modal" data-bs-target="#UploadFileModal">
                                                                    Upload Files
                                                                </button>
                                                                </div>
                                                             <div id="uploadedFilesList" style="display: none;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                     
                                        </section>

                                        <section class="CustomerInformation">
                                            <div class="row p-0">
                                                <div class="col-lg-12">
                                                    <div class="CustomCard ">
                                                            <div class="CustomCardHeader">
                                                                <h6 class="CustomCardTitle">Loan EMI Cards</h6>
                                                            </div>
                                                            <div class="CustomCardBody pt-0">
                                                                <div class="ModernEMICard">
                                                                        <table class="table common-datatable nowrap w-100">
                                                                            <thead>
                                                                                <tr>
                                                                                   <th>EMI Id</th>
                                                                                    <th>EMI Amount</th>
                                                                                    <th>Principle</th>
                                                                                    <th>Interest</th>
                                                                                    <th>Payble Amount</th>
                                                                                    <th>Balance</th>
                                                                                    <th>Start Date</th>
                                                                                    <th>Due Date</th>
                                                                                    <th>Status</th>
                                                                                    <th>Transaction Id</th>
                                                                                    <th>Transaction Date</th>
                                                                                    <th>Late Charges</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                           <tr>
                                                                            <td>EMI62501</td>
                                                                            <td>18,076.20</td>
                                                                            <td>10,576</td>
                                                                            <td>7,500</td>
                                                                            <td>18,076</td>
                                                                            <td>489,424</td>
                                                                            <td>01/09/2025</td>
                                                                            <td>08/09/2025</td>
                                                                            <td><span class="badge badge-soft-warning">Pending</span><br><a href="#">Mark as paid</a></td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>EMI62502</td>
                                                                            <td>18,076.20</td>
                                                                            <td>10,735</td>
                                                                            <td>7,341</td>
                                                                            <td>18,076</td>
                                                                            <td>478,689</td>
                                                                            <td>01/10/2025</td>
                                                                            <td>08/10/2025</td>
                                                                            <td><span class="badge badge-soft-warning">Pending</span><br><a href="#">Mark as paid</a></td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>EMI62503</td>
                                                                            <td>18,076.20</td>
                                                                            <td>10,896</td>
                                                                            <td>7,180</td>
                                                                            <td>18,076</td>
                                                                            <td>467,793</td>
                                                                            <td>01/11/2025</td>
                                                                            <td>08/11/2025</td>
                                                                            <td><span class="badge badge-soft-warning">Pending</span><br><a href="#">Mark as paid</a></td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>EMI62504</td>
                                                                            <td>18,076.20</td>
                                                                            <td>11,059</td>
                                                                            <td>7,017</td>
                                                                            <td>18,076</td>
                                                                            <td>456,734</td>
                                                                            <td>01/12/2025</td>
                                                                            <td>08/12/2025</td>
                                                                            <td><span class="badge badge-soft-warning">Pending</span><br><a href="#">Mark as paid</a></td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>EMI62505</td>
                                                                            <td>18,076.20</td>
                                                                            <td>11,225</td>
                                                                            <td>6,851</td>
                                                                            <td>18,076</td>
                                                                            <td>445,509</td>
                                                                            <td>01/01/2026</td>
                                                                            <td>08/01/2026</td>
                                                                            <td><span class="badge badge-soft-warning">Pending</span><br><a href="#">Mark as paid</a></td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>EMI62506</td>
                                                                            <td>18,076.20</td>
                                                                            <td>11,393</td>
                                                                            <td>6,683</td>
                                                                            <td>18,076</td>
                                                                            <td>434,116</td>
                                                                            <td>01/02/2026</td>
                                                                            <td>08/02/2026</td>
                                                                            <td><span class="badge badge-soft-warning">Pending</span><br><a href="#">Mark as paid</a></td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>EMI62507</td>
                                                                            <td>18,076.20</td>
                                                                            <td>11,564</td>
                                                                            <td>6,512</td>
                                                                            <td>18,076</td>
                                                                            <td>422,552</td>
                                                                            <td>01/03/2026</td>
                                                                            <td>08/03/2026</td>
                                                                            <td><span class="badge badge-soft-warning">Pending</span><br><a href="#">Mark as paid</a></td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>EMI62508</td>
                                                                            <td>18,076.20</td>
                                                                            <td>11,738</td>
                                                                            <td>6,338</td>
                                                                            <td>18,076</td>
                                                                            <td>410,814</td>
                                                                            <td>01/04/2026</td>
                                                                            <td>08/04/2026</td>
                                                                            <td><span class="badge badge-soft-warning">Pending</span><br><a href="#">Mark as paid</a></td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>EMI62509</td>
                                                                            <td>18,076.20</td>
                                                                            <td>11,914</td>
                                                                            <td>6,162</td>
                                                                            <td>18,076</td>
                                                                            <td>398,900</td>
                                                                            <td>01/05/2026</td>
                                                                            <td>08/05/2026</td>
                                                                            <td><span class="badge badge-soft-warning">Pending</span><br><a href="#">Mark as paid</a></td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>EMI62510</td>
                                                                            <td>18,076.20</td>
                                                                            <td>12,092</td>
                                                                            <td>5,984</td>
                                                                            <td>18,076</td>
                                                                            <td>386,808</td>
                                                                            <td>01/06/2026</td>
                                                                            <td>08/06/2026</td>
                                                                            <td><span class="badge badge-soft-warning">Pending</span><br><a href="#">Mark as paid</a></td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>EMI62511</td>
                                                                            <td>18,076.20</td>
                                                                            <td>12,274</td>
                                                                            <td>5,802</td>
                                                                            <td>18,076</td>
                                                                            <td>374,534</td>
                                                                            <td>01/07/2026</td>
                                                                            <td>08/07/2026</td>
                                                                            <td><span class="badge badge-soft-warning">Pending</span><br><a href="#">Mark as paid</a></td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>EMI62512</td>
                                                                            <td>18,076.20</td>
                                                                            <td>12,458</td>
                                                                            <td>5,618</td>
                                                                            <td>18,076</td>
                                                                            <td>362,076</td>
                                                                            <td>01/08/2026</td>
                                                                            <td>08/08/2026</td>
                                                                            <td><span class="badge badge-soft-warning">Pending</span><br><a href="#">Mark as paid</a></td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>EMI62513</td>
                                                                            <td>18,076.20</td>
                                                                            <td>12,645</td>
                                                                            <td>5,431</td>
                                                                            <td>18,076</td>
                                                                            <td>349,431</td>
                                                                            <td>01/09/2026</td>
                                                                            <td>08/09/2026</td>
                                                                            <td><span class="badge badge-soft-warning">Pending</span><br><a href="#">Mark as paid</a></td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>EMI62514</td>
                                                                            <td>18,076.20</td>
                                                                            <td>12,835</td>
                                                                            <td>5,241</td>
                                                                            <td>18,076</td>
                                                                            <td>336,596</td>
                                                                            <td>01/10/2026</td>
                                                                            <td>08/10/2026</td>
                                                                            <td><span class="badge badge-soft-warning">Pending</span><br><a href="#">Mark as paid</a></td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>EMI62515</td>
                                                                            <td>18,076.20</td>
                                                                            <td>13,027</td>
                                                                            <td>5,049</td>
                                                                            <td>18,076</td>
                                                                            <td>323,569</td>
                                                                            <td>01/11/2026</td>
                                                                            <td>08/11/2026</td>
                                                                            <td><span class="badge badge-soft-warning">Pending</span><br><a href="#">Mark as paid</a></td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>EMI62516</td>
                                                                            <td>18,076.20</td>
                                                                            <td>13,222</td>
                                                                            <td>4,854</td>
                                                                            <td>18,076</td>
                                                                            <td>310,347</td>
                                                                            <td>01/12/2026</td>
                                                                            <td>08/12/2026</td>
                                                                            <td><span class="badge badge-soft-warning">Pending</span><br><a href="#">Mark as paid</a></td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>EMI62517</td>
                                                                            <td>18,076.20</td>
                                                                            <td>13,421</td>
                                                                            <td>4,655</td>
                                                                            <td>18,076</td>
                                                                            <td>296,926</td>
                                                                            <td>01/01/2027</td>
                                                                            <td>08/01/2027</td>
                                                                            <td><span class="badge badge-soft-warning">Pending</span><br><a href="#">Mark as paid</a></td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>EMI62518</td>
                                                                            <td>18,076.20</td>
                                                                            <td>13,622</td>
                                                                            <td>4,454</td>
                                                                            <td>18,076</td>
                                                                            <td>283,304</td>
                                                                            <td>01/02/2027</td>
                                                                            <td>08/02/2027</td>
                                                                            <td><span class="badge badge-soft-warning">Pending</span><br><a href="#">Mark as paid</a></td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>EMI62519</td>
                                                                            <td>18,076.20</td>
                                                                            <td>13,826</td>
                                                                            <td>4,250</td>
                                                                            <td>18,076</td>
                                                                            <td>269,478</td>
                                                                            <td>01/03/2027</td>
                                                                            <td>08/03/2027</td>
                                                                            <td><span class="badge badge-soft-warning">Pending</span><br><a href="#">Mark as paid</a></td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>EMI62520</td>
                                                                            <td>18,076.20</td>
                                                                            <td>14,034</td>
                                                                            <td>4,042</td>
                                                                            <td>18,076</td>
                                                                            <td>255,444</td>
                                                                            <td>01/04/2027</td>
                                                                            <td>08/04/2027</td>
                                                                            <td><span class="badge badge-soft-warning">Pending</span><br><a href="#">Mark as paid</a></td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>EMI62521</td>
                                                                            <td>18,076.20</td>
                                                                            <td>14,244</td>
                                                                            <td>3,832</td>
                                                                            <td>18,076</td>
                                                                            <td>241,200</td>
                                                                            <td>01/05/2027</td>
                                                                            <td>08/05/2027</td>
                                                                            <td><span class="badge badge-soft-warning">Pending</span><br><a href="#">Mark as paid</a></td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>EMI62522</td>
                                                                            <td>18,076.20</td>
                                                                            <td>14,458</td>
                                                                            <td>3,618</td>
                                                                            <td>18,076</td>
                                                                            <td>226,742</td>
                                                                            <td>01/06/2027</td>
                                                                            <td>08/06/2027</td>
                                                                            <td><span class="badge badge-soft-warning">Pending</span><br><a href="#">Mark as paid</a></td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>EMI62523</td>
                                                                            <td>18,076.20</td>
                                                                            <td>14,675</td>
                                                                            <td>3,401</td>
                                                                            <td>18,076</td>
                                                                            <td>212,067</td>
                                                                            <td>01/07/2027</td>
                                                                            <td>08/07/2027</td>
                                                                            <td><span class="badge badge-soft-warning">Pending</span><br><a href="#">Mark as paid</a></td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>EMI62524</td>
                                                                            <td>18,076.20</td>
                                                                            <td>14,895</td>
                                                                            <td>3,181</td>
                                                                            <td>18,076</td>
                                                                            <td>197,172</td>
                                                                            <td>01/08/2027</td>
                                                                            <td>08/08/2027</td>
                                                                            <td><span class="badge badge-soft-warning">Pending</span><br><a href="#">Mark as paid</a></td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>EMI62525</td>
                                                                            <td>18,076.20</td>
                                                                            <td>15,118</td>
                                                                            <td>2,958</td>
                                                                            <td>18,076</td>
                                                                            <td>182,054</td>
                                                                            <td>01/09/2027</td>
                                                                            <td>08/09/2027</td>
                                                                            <td><span class="badge badge-soft-warning">Pending</span><br><a href="#">Mark as paid</a></td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>EMI62526</td>
                                                                            <td>18,076.20</td>
                                                                            <td>15,345</td>
                                                                            <td>2,731</td>
                                                                            <td>18,076</td>
                                                                            <td>166,709</td>
                                                                            <td>01/10/2027</td>
                                                                            <td>08/10/2027</td>
                                                                            <td><span class="badge badge-soft-warning">Pending</span><br><a href="#">Mark as paid</a></td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>EMI62527</td>
                                                                            <td>18,076.20</td>
                                                                            <td>15,575</td>
                                                                            <td>2,501</td>
                                                                            <td>18,076</td>
                                                                            <td>151,134</td>
                                                                            <td>01/11/2027</td>
                                                                            <td>08/11/2027</td>
                                                                            <td><span class="badge badge-soft-warning">Pending</span><br><a href="#">Mark as paid</a></td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>EMI62528</td>
                                                                            <td>18,076.20</td>
                                                                            <td>15,809</td>
                                                                            <td>2,267</td>
                                                                            <td>18,076</td>
                                                                            <td>135,325</td>
                                                                            <td>01/12/2027</td>
                                                                            <td>08/12/2027</td>
                                                                            <td><span class="badge badge-soft-warning">Pending</span><br><a href="#">Mark as paid</a></td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>EMI62529</td>
                                                                            <td>18,076.20</td>
                                                                            <td>16,046</td>
                                                                            <td>2,030</td>
                                                                            <td>18,076</td>
                                                                            <td>119,279</td>
                                                                            <td>01/01/2028</td>
                                                                            <td>08/01/2028</td>
                                                                            <td><span class="badge badge-soft-warning">Pending</span><br><a href="#">Mark as paid</a></td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>EMI62530</td>
                                                                            <td>18,076.20</td>
                                                                            <td>16,287</td>
                                                                            <td>1,789</td>
                                                                            <td>18,076</td>
                                                                            <td>102,992</td>
                                                                            <td>01/02/2028</td>
                                                                            <td>08/02/2028</td>
                                                                            <td><span class="badge badge-soft-warning">Pending</span><br><a href="#">Mark as paid</a></td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>EMI62531</td>
                                                                            <td>18,076.20</td>
                                                                            <td>16,531</td>
                                                                            <td>1,545</td>
                                                                            <td>18,076</td>
                                                                            <td>86,461</td>
                                                                            <td>01/03/2028</td>
                                                                            <td>08/03/2028</td>
                                                                            <td><span class="badge badge-soft-warning">Pending</span><br><a href="#">Mark as paid</a></td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>EMI62532</td>
                                                                            <td>18,076.20</td>
                                                                            <td>16,779</td>
                                                                            <td>1,297</td>
                                                                            <td>18,076</td>
                                                                            <td>69,682</td>
                                                                            <td>01/04/2028</td>
                                                                            <td>08/04/2028</td>
                                                                            <td><span class="badge badge-soft-warning">Pending</span><br><a href="#">Mark as paid</a></td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>EMI62533</td>
                                                                            <td>18,076.20</td>
                                                                            <td>17,031</td>
                                                                            <td>1,045</td>
                                                                            <td>18,076</td>
                                                                            <td>52,651</td>
                                                                            <td>01/05/2028</td>
                                                                            <td>08/05/2028</td>
                                                                            <td><span class="badge badge-soft-warning">Pending</span><br><a href="#">Mark as paid</a></td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>EMI62534</td>
                                                                            <td>18,076.20</td>
                                                                            <td>17,286</td>
                                                                            <td>790</td>
                                                                            <td>18,076</td>
                                                                            <td>35,365</td>
                                                                            <td>01/06/2028</td>
                                                                            <td>08/06/2028</td>
                                                                            <td><span class="badge badge-soft-warning">Pending</span><br><a href="#">Mark as paid</a></td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>EMI62535</td>
                                                                            <td>18,076.20</td>
                                                                            <td>17,546</td>
                                                                            <td>530</td>
                                                                            <td>18,076</td>
                                                                            <td>17,819</td>
                                                                            <td>01/07/2028</td>
                                                                            <td>08/07/2028</td>
                                                                            <td><span class="badge badge-soft-warning">Pending</span><br><a href="#">Mark as paid</a></td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>EMI62536</td>
                                                                            <td>18,076.20</td>
                                                                            <td>17,809</td>
                                                                            <td>267</td>
                                                                            <td>18,076</td>
                                                                            <td>10</td>
                                                                            <td>01/08/2028</td>
                                                                            <td>08/08/2028</td>
                                                                            <td><span class="badge badge-soft-warning">Pending</span><br><a href="#">Mark as paid</a></td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                            <td>—</td>
                                                                        </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                               
                                                        </div>
                                                </div>
                                            </div>
                                                     
                                        </section>

                                        
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




        <div class="ModalAddGurantor">
  <div class="modal fade" id="UploadFileModal" tabindex="-1" aria-labelledby="UploadFileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content rounded-7 shadow">
        <div class="modal-header CustomModal">
          <h5 class="ModalTitle">
            <div class="IconBox">
              <iconify-icon icon="material-symbols:upload-rounded"></iconify-icon>
            </div>
            <div class="TitleVox">
              Upload file
              <span>Upload documents for verification.</span>
            </div>
          </h5>
          <button type="button" class="btnClose btn btn-sm btn-bg-transparent" data-bs-dismiss="modal">
            <iconify-icon icon="oui:cross"></iconify-icon>
          </button>
        </div>
        <div class="modal-body">
          <div id="drop-area" class="border border-2 border-dashed p-4 text-center rounded-3 bg-light">
            <input type="file" id="fileElem" multiple accept=".pdf,.doc,.docx,.xls,.xlsx" style="display:none">
            <p>Drag and Drop file here or <a href="#" id="fileSelect">Choose file</a></p>
            <p class="UploadMsg">Supported formats: XLS, XLSX, DOC, DOCX, PDF &nbsp;&nbsp; | &nbsp;&nbsp; Maximum size: 25MB</p>
          </div>
          <div id="uploadError" class="alert alert-danger d-none mt-2" role="alert">
           Please wait for all files to finish uploading before submitting.
        </div>
          <div id="uploadList" class="mt-4"></div>
       
        </div>
        <div class="modal-footer">
          <button class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
          <button class="btn btn-theme" id="uploadAllBtn">Upload</button>
        </div>
      </div>
    </div>
  </div>
</div>








        <!-- Offcanvas -->
        <div class="offcanvas offcanvas-end ActivityOffcanvas" tabindex="-1" id="activityOffcanvas">
            <div class="offcanvas-header border-bottom">
                <h5 class="offcanvas-title">
                    <iconify-icon icon="hugeicons:activity-04"></iconify-icon> Loan Profile Activity
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body p-0">

                <!-- Activity Feed List -->
                <div class="activity-list">

                    <!-- Activity Item -->
                    <div class="activity-item">
                        <div class="activity-avatar">
                            <div class="icon-placeholder">RS</div>
                        </div>
                        <div class="activity-info">
                            <div class="activity-header">
                                <strong>Rahul Singh</strong>
                                <small class="text-muted">July 18</small>
                            </div>
                            <div class="activity-sub">KYC Documents Verified</div>
                            <div class="activity-text text-muted">Aadhaar and PAN matched successfully.</div>
                        </div>
                    </div>

                    <!-- Activity Item -->
                    <div class="activity-item">
                        <div class="activity-avatar">
                            <img src="https://i.pravatar.cc/40?img=5" alt="User" />
                        </div>
                        <div class="activity-info">
                            <div class="activity-header">
                                <strong>Rena Lalwani</strong>
                                <small class="text-muted">July 19</small>
                            </div>
                            <div class="activity-sub">Guarantor Details Approved</div>
                            <div class="activity-text text-muted">All co-applicant info confirmed by reviewer.</div>
                        </div>
                    </div>

                    <!-- Activity Item -->
                    <div class="activity-item">
                        <div class="activity-avatar">
                            <div class="icon-placeholder">RM</div>
                        </div>
                        <div class="activity-info">
                            <div class="activity-header">
                                <strong>Rajesh Mathur</strong>
                                <small class="text-muted">July 19</small>
                            </div>
                            <div class="activity-sub">Business Documents Uploaded</div>
                            <div class="activity-text text-muted">Uploaded GST certificate and registration proof.</div>
                        </div>
                    </div>

                    <!-- Activity Item -->
                    <div class="activity-item">
                        <div class="activity-avatar">
                            <img src="https://i.pravatar.cc/40?img=11" alt="User" />
                        </div>
                        <div class="activity-info">
                            <div class="activity-header">
                                <strong>Abhishek Kumar</strong>
                                <small class="text-muted">July 19</small>
                            </div>
                            <div class="activity-sub">Credit Report Generated</div>
                            <div class="activity-text text-muted">CIBIL Score 732 marked as Good.</div>
                        </div>
                    </div>

                    <!-- Activity Item -->
                    <div class="activity-item">
                        <div class="activity-avatar">
                            <div class="icon-placeholder">TM</div>
                        </div>
                        <div class="activity-info">
                            <div class="activity-header">
                                <strong>Tina Mathur</strong>
                                <small class="text-muted">July 20</small>
                            </div>
                            <div class="activity-sub">Bank Details Verified</div>
                            <div class="activity-text text-muted">IFSC and account number matched with holder.</div>
                        </div>
                    </div>

                    <!-- Activity Item -->
                    <div class="activity-item">
                        <div class="activity-avatar">
                            <img src="https://i.pravatar.cc/40?img=12" alt="User" />
                        </div>
                        <div class="activity-info">
                            <div class="activity-header">
                                <strong>Mahesh Kumar</strong>
                                <small class="text-muted">July 20</small>
                            </div>
                            <div class="activity-sub text-success">Loan Approved</div>
                            <div class="activity-text text-muted">Loan sanctioned for ₹8,00,000 at 12% interest.</div>
                        </div>
                    </div>


                    <!-- More Items... -->
                </div>
            </div>
        </div>


 

<!-- =============================================================
     Disbursement Confirmation Modal (Bootstrap 5)
     ============================================================= -->
<div class="modernModalWrapper">
  <div class="modal fade" id="DisburseConfirmModal" tabindex="-1" aria-labelledby="DisburseConfirmModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content rounded-7 shadow">

        <!-- Modal Header -->
        <div class="ModalHead">
          <h5 id="DisburseConfirmModalLabel" class="fw-semibold mb-0 d-flex align-items-center gap-2">
            <iconify-icon icon="fluent:warning-28-regular"></iconify-icon>
            Loan Disbursement Confirmation
          </h5>
          <button type="button" class="btnClose btn btn-sm btn-bg-transparent" data-bs-dismiss="modal" aria-label="Close">
            <iconify-icon icon="oui:cross"></iconify-icon>
          </button>
        </div>

        <!-- Modal Body -->
        <div class="modal-body">
          <div class="ContentWrapper">
            <h4 class="mb-3">Are you sure?</h4>
            <p class="mb-0">
              You are about to disburse the loan for 
              <strong id="DisburseCustomerName">Atul Sharma</strong>.
            </p>
            <ul class="LoanPoints">
              <li>All underwriting checks have been completed.</li>
              <li>Funding amount and account details are correct.</li>
              <li>This action will mark the loan as <em>disbursed</em> and move it to the active loan portfolio.</li>
            </ul>

            <!-- Footer Buttons -->
            <div class="FooterActionStyle1 ">
              <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
              <button type="button" id="confirmDisburseBtn" class="btn btn-theme">Yes, Disburse</button>
            </div>
          </div>
        </div>

        <!-- Optional Footer Branding -->
        <div class="silverrightloog ">
          <img src="dist/img/newimages/silverlogo.png" alt="logo" >
        </div>

      </div>
    </div>
  </div>
</div>
<!-- =============================================================
     Disbursement Confirmation Modal (Bootstrap 5) END
     ============================================================= -->
            <!-- /Page Body End-->
            <?php include('footer.php') ?>

<script>
document.getElementById("fileSelect").addEventListener("click", function(e) {
  e.preventDefault();
  document.getElementById("fileElem").click();
});

document.getElementById("drop-area").addEventListener("click", function (e) {
  if (e.target.id === "drop-area" || e.target.closest("#drop-area")) {
    document.getElementById("fileElem").click();
  }
});

document.getElementById("fileElem").addEventListener("change", handleFiles);

document.getElementById("drop-area").addEventListener("dragover", function (e) {
  e.preventDefault();
  e.dataTransfer.dropEffect = "copy";
});

document.getElementById("drop-area").addEventListener("drop", handleDrop);

function handleDrop(e) {
  e.preventDefault();
  handleFiles({ target: { files: e.dataTransfer.files } });
}

let fileIdCounter = 0;
const uploadedFilesData = [];

function handleFiles(e) {
  const files = Array.from(e.target.files);
  const uploadList = document.getElementById("uploadList");

  files.forEach((file) => {
    const id = `file-${fileIdCounter++}`;
    const fileURL = URL.createObjectURL(file);

    uploadedFilesData.push({
      name: file.name,
      size: file.size,
      date: new Date().toLocaleString(),
      url: fileURL,
      uploaded: false,
      id: id
    });

    const wrapper = document.createElement("div");
    wrapper.className = "d-flex align-items-center justify-content-between border rounded p-2 mb-2";

    wrapper.innerHTML = `
      <div>
        <h6 class="FileName">${file.name}</h6>
        <div class="text-muted small">${(file.size / (1024 * 1024)).toFixed(2)} MB</div>
      </div>
      <div class="flex-grow-1 mx-3">
        <div class="progress" style="height: 6px;">
          <div id="${id}" class="progress-bar bg-primary progress-bar-striped progress-bar-animated" style="width: 0%; transition: width 0.5s ease;"></div>
        </div>
      </div>
      <button class="btn removeBtndoc" onclick="this.closest('div').remove()">✕</button>
    `;

    uploadList.appendChild(wrapper);

    setTimeout(() => {
      const bar = document.getElementById(id);
      let percent = 0;
      const interval = setInterval(() => {
        percent += Math.floor(Math.random() * 15) + 5;
        if (percent >= 100) {
          percent = 100;
          clearInterval(interval);
          bar.classList.remove("progress-bar-animated", "progress-bar-striped");

          // ✅ Mark file as uploaded
          const fileEntry = uploadedFilesData.find(f => f.id === id);
          if (fileEntry) fileEntry.uploaded = true;
        }
        bar.style.width = percent + "%";
      }, 400);
    }, 100);
  });
}

document.getElementById("uploadAllBtn").addEventListener("click", () => {
  const uploadErrorBox = document.getElementById("uploadError");

  // Check if all files are uploaded
  const anyPending = uploadedFilesData.some(file => !file.uploaded);

  if (anyPending) {
    uploadErrorBox.classList.remove("d-none");
    uploadErrorBox.textContent = "Please wait for all files to finish uploading.";
    return;
  }

  uploadErrorBox.classList.add("d-none");

  const uploadedList = document.getElementById("uploadedFilesList");
  uploadedList.innerHTML = "";

  uploadedFilesData.forEach((file) => {
    const fileRow = document.createElement("div");
    fileRow.className = "d-flex justify-content-between align-items-center border rounded p-2 mb-2 bg-white";

    fileRow.innerHTML = `
      <div>
        <h6 class="FileName">${file.name}</h6>
        <div class="text-muted small">Uploaded: ${file.date}</div>
      </div>
      <div class="btn-groupBox">
        <a href="${file.url}" target="_blank" class="btn DocView"><iconify-icon icon="hugeicons:view"></iconify-icon></a>
        <a href="${file.url}" download="${file.name}" class="btn DocDownload"><iconify-icon icon="material-symbols:download"></iconify-icon></a>
      </div>
    `;

    uploadedList.appendChild(fileRow);
  });

  // ✅ Close modal and update UI
  const modal = bootstrap.Modal.getInstance(document.getElementById("UploadFileModal"));
  modal.hide();

  document.getElementById("noFilesMessage").style.display = "none";
  document.getElementById("uploadedFilesList").style.display = "block";
  document.getElementById("uploadMoreBtn").style.display = "inline-block";

  document.getElementById("uploadList").innerHTML = "";
});
</script>

            <!-- ✅ JS TO HANDLE TAB SWITCH -->
            <script>
                const tabs = document.querySelectorAll('.CustomerApprovalTab .tab');
                const panels = document.querySelectorAll('.CustomerApprovalTab .tab-panel');

                tabs.forEach(tab => {
                    tab.addEventListener('click', () => {
                        // Remove active from all
                        tabs.forEach(t => t.classList.remove('active'));
                        panels.forEach(p => p.classList.remove('active'));

                        // Add active to clicked tab and panel
                        tab.classList.add('active');
                        const panelId = tab.getAttribute('data-tab');
                        document.getElementById(panelId).classList.add('active');
                    });
                });
            </script>

            <!-- SweetAlert2 CSS & JS -->
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const statusBtn = document.getElementById('approvalStatusBtn');

                    statusBtn.addEventListener('click', function () {
                        const isActive = statusBtn.textContent.trim().toLowerCase() === 'active';

                        Swal.fire({
                            title: isActive ? 'Deactivate Customer?' : 'Activate Customer?',
                            text: `Are you sure you want to ${isActive ? 'deactivate' : 'activate'} this customer?`,
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: isActive ? '#d33' : '#4CAF50',
                            cancelButtonColor: '#aaa',
                            confirmButtonText: isActive ? 'Yes, Deactivate' : 'Yes, Activate'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // Toggle status
                                if (isActive) {
                                    statusBtn.textContent = 'Inactive';
                                    statusBtn.classList.remove('pending');
                                    statusBtn.style.color = '#d33';
                                    statusBtn.style.background = '#ffeaea';
                                } else {
                                    statusBtn.textContent = 'Active';
                                    statusBtn.classList.add('pending');
                                    statusBtn.style.color = '#4CAF50';
                                    statusBtn.style.background = '#e9ffea';
                                }

                                Swal.fire({
                                    title: 'Success!',
                                    text: `Customer is now ${isActive ? 'inactive' : 'active'}.`,
                                    icon: 'success',
                                    timer: 1500,
                                    showConfirmButton: false
                                });
                            }
                        });
                    });
                });
            </script>

            <!-- Fancybox 5 CSS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox/fancybox.css" />

            <!-- Fancybox 5 JS -->
            <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox/fancybox.umd.js"></script>
            <script>
                Fancybox.bind('[data-fancybox="aadhar"]', {
                    dragToClose: false,
                    Thumbs: false,
                    Toolbar: {
                        display: ["close"],
                    },
                });
            </script>


            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const kycTabWrapper = document.querySelector('.KYCdocumentTab');
                    const kycTabs = kycTabWrapper.querySelectorAll('.KYC-tab');
                    const kycPanes = kycTabWrapper.querySelectorAll('.KYC-pane');

                    kycTabs.forEach(tab => {
                        tab.addEventListener('click', () => {
                            const target = tab.getAttribute('data-target');

                            // Remove active from all
                            kycTabs.forEach(t => t.classList.remove('KYC-active'));
                            kycPanes.forEach(p => p.classList.remove('KYC-active'));

                            // Add active to selected
                            tab.classList.add('KYC-active');
                            kycTabWrapper.querySelector(`#${target}`).classList.add(
                                'KYC-active');
                        });
                    });
                });
            </script>

            <script>
                const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
                tooltipTriggerList.forEach(el => {
                    new bootstrap.Tooltip(el);
                });
            </script>

            <!-- profile upload js -->
            <script>
                document.addEventListener("change", function (event) {
                    if (event.target.classList.contains("uploadProfileInput")) {
                        var triggerInput = event.target;
                        var currentImg = triggerInput.closest(".pic-holder").querySelector(".pic").src;
                        var holder = triggerInput.closest(".pic-holder");
                        var wrapper = triggerInput.closest(".profile-pic-wrapper");
                        var alerts = wrapper.querySelectorAll('[role="alert"]');
                        alerts.forEach(function (alert) {
                            alert.remove();
                        });
                        triggerInput.blur();
                        var files = triggerInput.files || [];
                        if (!files.length || !window.FileReader) {
                            return;
                        }
                        if (/^image/.test(files[0].type)) {
                            var reader = new FileReader();
                            reader.readAsDataURL(files[0]);
                            reader.onloadend = function () {
                                holder.classList.add("uploadInProgress");
                                holder.querySelector(".pic").src = this.result;
                                var loader = document.createElement("div");
                                loader.classList.add("upload-loader");
                                loader.innerHTML =
                                    '<div class="spinner-border text-primary" role="status"><span class="sr-only">Loading...</span></div>';
                                holder.appendChild(loader);
                                setTimeout(function () {
                                    holder.classList.remove("uploadInProgress");
                                    loader.remove();
                                    var random = Math.random();
                                    if (random < 0.9) {
                                        wrapper.innerHTML +=
                                            '<div class="snackbar show" role="alert"><i class="fa fa-check-circle text-success"></i> Store image updated successfully</div>';
                                        triggerInput.value = "";
                                        // Hide the label by setting opacity to 0
                                        wrapper.querySelector(".upload-file-block").style.opacity =
                                            "0";
                                        setTimeout(function () {
                                            wrapper.querySelector('[role="alert"]')
                                                .remove();
                                        }, 3000);
                                    } else {
                                        holder.querySelector(".pic").src = currentImg;
                                        wrapper.innerHTML +=
                                            '<div class="snackbar show" role="alert"><i class="fa fa-times-circle text-danger"></i> There is an error while uploading! Please try again later.</div>';
                                        triggerInput.value = "";
                                        setTimeout(function () {
                                            wrapper.querySelector('[role="alert"]')
                                                .remove();
                                        }, 3000);
                                    }
                                }, 1500);
                            };
                        } else {
                            wrapper.innerHTML +=
                                '<div class="alert alert-danger d-inline-block p-2 small" role="alert">Please choose a valid image.</div>';
                            setTimeout(function () {
                                var invalidAlert = wrapper.querySelector('[role="alert"]');
                                if (invalidAlert) {
                                    invalidAlert.remove();
                                }
                            }, 3000);
                        }
                    }
                });
            </script>
            <!-- profile icon upload js -->
            <script>
                $(document).ready(function () {
                    const states = [
                        "Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chhattisgarh",
                        "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jharkhand",
                        "Karnataka", "Kerala", "Madhya Pradesh", "Maharashtra", "Manipur",
                        "Meghalaya", "Mizoram", "Nagaland", "Odisha", "Punjab",
                        "Rajasthan", "Sikkim", "Tamil Nadu", "Telangana", "Tripura",
                        "Uttar Pradesh", "Uttarakhand", "West Bengal"
                    ];

                    var $stateSelect = $('.State-select');
                    $stateSelect.empty();
                    $stateSelect.append('<option disabled selected value="">Please Select...</option>');
                    states.forEach(function (state) {
                        $stateSelect.append(`<option value="${state}">${state}</option>`);
                    });
                    $stateSelect.select2({
                        placeholder: "Select State",
                        width: '100%'
                    });
                });
            </script>

            <script>
                $(document).ready(function () {
                    $('#addressCheckbox').on('change', function () {
                        if ($(this).is(':checked')) {
                            // Show permanent address section and reset its values
                            $('#permanentAddressSection').slideDown();
                            $('#permanent_state').val('').trigger('change');
                            $('#permanent_city').val('');
                            $('#permanent_pin').val('');
                            $('#permanent_address').val('');
                        } else {
                            // Hide and copy data from current to permanent
                            $('#permanentAddressSection').slideUp();

                            $('#permanent_state').val($('#state').val()).trigger('change');
                            $('#permanent_city').val($('#billing_city').val());
                            $('#permanent_pin').val($('input[placeholder="Enter your pin code"]')
                                .val());
                            $('#permanent_address').val($('.formtextarea_height').val());
                        }
                    });
                });
            </script>



            <script>
                const addCheckbox = document.getElementById("addPartnerKycCheckbox");
                const wrapper = document.getElementById("partnerKycWrapper");
                const container = document.getElementById("partnerKycContainer");
                const addBtn = document.getElementById("addMorePartnerBtn");
                const template = document.getElementById("partnerKycTemplate").content;

                function updatePartnerTitles() {
                    const allPartners = container.querySelectorAll(".partner-kyc-item");
                    allPartners.forEach((item, index) => {
                        let title = item.querySelector(".partner-title");
                        if (!title) {
                            title = document.createElement("h4");
                            title.className = "partner-title";
                            title.style.marginBottom = "15px";
                            item.insertBefore(title, item.firstChild);
                        }
                        title.textContent = `Partner ${index + 1}`;
                    });
                }

                function addPartnerKycItem() {
                    const clone = document.importNode(template, true);
                    // Add remove event
                    clone.querySelector(".remove-partner-btn").addEventListener("click", function () {
                        this.closest(".partner-kyc-item").remove();
                        updatePartnerTitles();
                    });
                    container.appendChild(clone);
                    initUploader(container.lastElementChild.querySelectorAll('.upload-wrapper')); // init uploaders
                    updatePartnerTitles();
                }
                addCheckbox.addEventListener("change", function () {
                    if (this.checked) {
                        wrapper.style.display = "block";
                        container.innerHTML = "";
                        addPartnerKycItem();
                    } else {
                        wrapper.style.display = "none";
                        container.innerHTML = "";
                    }
                });
                addBtn.addEventListener("click", addPartnerKycItem);
            </script>

            <!-- Your existing uploader JS refactored as function -->
            <script>
                function initUploader(wrappers) {
                    const imageTypes = ['jpeg', 'jpg', 'png', 'gif'];
                    wrappers.forEach((wrapper) => {
                        const title = wrapper.getAttribute('data-title') || 'Upload Document';
                        wrapper.innerHTML = `
        <div class="upload-area">
          <div class="upload-area__header">
            <h3 class="upload-area__title">${title}</h3>
            <p class="upload-area__paragraph">Allowed types: <strong>.jpeg, .png, .gif</strong></p>
          </div>
          <div class="upload-area__drop-zoon">
            <div class="drop-zoon__icon">
              <iconify-icon icon="hugeicons:file-upload"></iconify-icon>
            </div>
            <p class="drop-zoon__paragraph">Drop & Drop or Choose File to upload</p>
            <span class="drop-zoon__loading-text" style="display:none;">Uploading...</span>
            <img src="" class="drop-zoon__preview-image" style="display:none;" />
            <input type="file" class="drop-zoon__file-input" accept="image/*" hidden />
          </div>
          <div class="uploaded-file__info" style="display:none;">
            <span class="uploaded-file__name"></span>
            <span class="uploaded-file__counter">0%</span>
            <button type="button" class="uploaded-file__remove-button" title="Remove" style="display:none;">
              Remove
            </button>
          </div>
          <div class="uploaded-file__status" style="display:none;">
            <span class="uploaded-file__size"></span> &nbsp;·&nbsp;
            <span class="uploaded-file__complete">✔ Complete</span>
          </div>
        </div>
      `;
                        const dropZoon = wrapper.querySelector('.upload-area__drop-zoon');
                        const fileInput = wrapper.querySelector('.drop-zoon__file-input');
                        const previewImage = wrapper.querySelector('.drop-zoon__preview-image');
                        const loadingText = wrapper.querySelector('.drop-zoon__loading-text');
                        const fileName = wrapper.querySelector('.uploaded-file__name');
                        const counter = wrapper.querySelector('.uploaded-file__counter');
                        const fileInfo = wrapper.querySelector('.uploaded-file__info');
                        const removeBtn = wrapper.querySelector('.uploaded-file__remove-button');
                        const status = wrapper.querySelector('.uploaded-file__status');
                        const sizeLabel = wrapper.querySelector('.uploaded-file__size');
                        // Drag and Drop Events
                        dropZoon.addEventListener('dragover', (e) => {
                            e.preventDefault();
                            dropZoon.classList.add('drag-over');
                        });
                        dropZoon.addEventListener('dragleave', () => {
                            dropZoon.classList.remove('drag-over');
                        });
                        dropZoon.addEventListener('drop', (e) => {
                            e.preventDefault();
                            dropZoon.classList.remove('drag-over');
                            const file = e.dataTransfer.files[0];
                            uploadFile(file);
                        });
                        dropZoon.addEventListener('click', () => fileInput.click());
                        fileInput.addEventListener('change', () => uploadFile(fileInput.files[0]));
                        removeBtn.addEventListener('click', () => {
                            previewImage.src = '';
                            previewImage.style.display = 'none';
                            fileName.textContent = '';
                            counter.textContent = '0%';
                            fileInfo.style.display = 'none';
                            fileInput.value = '';
                            status.style.display = 'none';
                            removeBtn.style.display = 'none';
                        });

                        function uploadFile(file) {
                            const fileExt = file.name.split('.').pop().toLowerCase();
                            if (!imageTypes.includes(fileExt)) {
                                alert('Only image files are allowed');
                                return;
                            }
                            const reader = new FileReader();
                            loadingText.style.display = 'block';
                            previewImage.style.display = 'none';
                            counter.textContent = '0%';
                            fileInfo.style.display = 'none';
                            status.style.display = 'none';
                            reader.onload = () => {
                                setTimeout(() => {
                                    loadingText.style.display = 'none';
                                    previewImage.src = reader.result;
                                    previewImage.style.display = 'block';
                                    fileName.textContent = file.name;
                                    fileInfo.style.display = 'flex';
                                    removeBtn.style.display = 'inline-block';
                                    removeBtn.style.visibility = 'visible';
                                    removeBtn.style.opacity = '1';
                                    removeBtn.style.pointerEvents = 'auto';
                                    const fileSizeMB = (file.size / (1024 * 1024)).toFixed(2) +
                                        'MB';
                                    sizeLabel.textContent = fileSizeMB;
                                    status.style.display = 'block';
                                    animateProgress();
                                }, 500);
                            };
                            reader.readAsDataURL(file);
                        }

                        function animateProgress() {
                            let val = 0;
                            const int = setInterval(() => {
                                if (val >= 100) {
                                    clearInterval(int);
                                } else {
                                    val += 10;
                                    counter.textContent = `${val}%`;
                                }
                            }, 80);
                        }
                    });
                }
                // Init uploader on page load for static elements
                window.addEventListener('DOMContentLoaded', () => {
                    initUploader(document.querySelectorAll('.upload-wrapper'));
                });
            </script>


            <script>
  const consentModal = new bootstrap.Modal(document.getElementById('AssessmentComplete'));
  const creditBtn = document.getElementById('CreditApproveBTn');
  const status = document.getElementById('customerStatusBadge');
  const sendBtn = document.getElementById('sendConsentBtn');

  // Show modal
  creditBtn.addEventListener('click', function (e) {
    e.preventDefault();
    consentModal.show();
  });

  // Save & Send to Consent
  sendBtn.addEventListener('click', function () {
    // Update status
    status.textContent = 'Customer Consent Sent';
    status.classList.remove('badge-soft-primary');
    status.classList.add('badge-soft-success');

    // Close modal
    consentModal.hide();

    // Disable CreditApproveBTn
    creditBtn.classList.add('disabled');
    creditBtn.setAttribute('aria-disabled', 'true');
    creditBtn.style.pointerEvents = 'none';
    creditBtn.style.opacity = '0.6';
  });
</script>


 <!-- =============================================================
     JS: Wire up dynamic text + redirect on confirm
     ============================================================= -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var trigger = document.getElementById('CreditApproveBTn');
    var confirmBtn = document.getElementById('confirmDisburseBtn');
    var nameSpan = document.getElementById('DisburseCustomerName');

    // function to compute redirect URL
    function buildRedirectUrl(triggerEl) {
      var base = 'disbursed-loan.php';
      var loanId = triggerEl?.dataset?.loanId;
      // If you prefer POST, you can change this logic (see alt below).
      if (loanId) {
        var url = new URL(base, window.location.origin);
        url.searchParams.set('loan_id', loanId);
        return url.toString();
      }
      return base; // fallback
    }

    // When the Disburse button is clicked, hydrate the modal with contextual data
    if (trigger) {
      trigger.addEventListener('click', function (e) {
            // Stash redirect URL on the confirm button
        if (confirmBtn) {
          confirmBtn.dataset.redirect = buildRedirectUrl(this);
        }
      });
    }

    // Handle confirm click -> redirect
    if (confirmBtn) {
      confirmBtn.addEventListener('click', function () {
        var redirectUrl = this.dataset.redirect || 'disbursed-loan.php';
        window.location.href = redirectUrl;
      });
    }
  });
</script>

<!-- =============================================================
     OPTIONAL: If you want to POST instead of GET redirect
     Uncomment and adapt below.
     ============================================================= -->
<!--
<script>
  function postDisburse(loanId) {
    var form = document.createElement('form');
    form.method = 'POST';
    form.action = 'disbursed-loan.php';

    var input = document.createElement('input');
    input.type = 'hidden';
    input.name = 'loan_id';
    input.value = loanId || '';
    form.appendChild(input);

    document.body.appendChild(form);
    form.submit();
  }
  // In the confirm click handler, call: postDisburse(trigger.dataset.loanId)
</script>
-->