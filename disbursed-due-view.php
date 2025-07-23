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
                                            <div class="banner-title">Atul Sharma has verified all information</div>
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
                                        <div class="avatar">AS</div>

                                        <div class="user-details">
                                            <div class="user-email">Atul Sharma</div>
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
                                            <div class="duedatelabel">Due Date : </div> July 15, 2025 
                                        </div>
                                        <div class="FileStatus">
                                            <div class="StatusBox">
                                            <span id="customerStatusBadge" class="badge badge-soft-warning">Pending Disbursement</span>
                                            </div>
                                                                                        <!-- <button type="button" id="markVASAPprovedBtn" class="btn markVASAPprovedBtn d-flex align-items-center gap-2">
                                            <input type="checkbox" class="form-check-input m-0" id="approvalCheckbox" />
                                            <span>Mark as Approved</span>
                                        </button> -->
                                           <a href="#" id="CreditApproveBTn" class="AssessmentBTn" data-bs-toggle="modal" data-bs-target="#DisburseConfirmModal">
                                            <iconify-icon icon="solar:hand-money-linear"></iconify-icon> Disburse Now
                                            </a>
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
                                    <div class="step-title"> Customer Consent Details</div>
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
                                       <div class="tab-panel active" id="panel2">

                                       <section class="CustomerInformation">
                                            <div class="TabInnerHead">
                                                <div class="HeadCnt">
                                                    <h6> Customer Consent Details
                                                        <div class="subtext"> <div class="status-success">Accepted</div> 16 July,2025</div>
                                                    </h6>
                                                    <!-- <p>Review the provided information for the co-applicant or guarantor to ensure accuracy before proceeding.</p> -->
                                                </div>
                                                <!-- <div class="StepActions">
                                                            <a class="ScheduleDisbuBtn" data-bs-toggle="modal" data-bs-target="#GurantorAdd"><iconify-icon icon="solar:calendar-linear"></iconify-icon> Schedule Disbursement</a>
                                                            <a class="stepActionBtn" href="#" data-bs-toggle="modal" data-bs-target="#GurantorAdd">
                                                                <iconify-icon icon="solar:calendar-linear"></iconify-icon> Schedule Disbursement
                                                            </a>
                                                            <a class="stepActionBtn rejectBtn" href="#" data-bs-toggle="modal" data-bs-target="#GurantorDetailsRejectModal">
                                                                <iconify-icon icon="radix-icons:cross-circled"></iconify-icon> Reject For Customer Consent
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
                                                        <!-- <div class="CustomCardHeader">
                                                            <h6 class="CustomCardTitle">1. Co-Applicant / Guarantor Details</h6>
                                                       
                                                        </div> -->
                                                        <div class="CustomCardBody">
                                                            <div class="ReportData_fields">

                                                                <div class="cu-task-fields__row">
                                                                    <div class="cu-task-label-icon__container">ROI Type</div>
                                                                    <div class="userenuData">Reducing ROI</div>
                                                                </div>

                                                                <div class="cu-task-fields__row">
                                                                    <div class="cu-task-label-icon__container">Amount</div>
                                                                    <div class="userenuData">₹500000</div>
                                                                </div>

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

                                                                <div class="cu-task-fields__row">
                                                                    <div class="cu-task-label-icon__container">Net Disbursement Amount</div>
                                                                    <div class="userenuData">₹480,767</div>
                                                                </div>
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
      var base = 'disbursed-loans.php';
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
        var redirectUrl = this.dataset.redirect || 'disbursed-loans.php';
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