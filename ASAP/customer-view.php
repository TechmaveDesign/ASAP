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
                            <div class="TopCusHead">
                                 <!-- <a href="#" class="back-link"><iconify-icon icon="cil:arrow-left"></iconify-icon> Back to Users</a> -->
                            <div class="info-banner">
                                    <img src="dist/img/newimages/gradient-blur-pink-blue-abstract.png" alt="" class="BnrGradientImg">
                                <div class="banner-left">
                                    <div class="banner-icon">⚠</div>
                                    <div class="banner-content">
                                    <div class="banner-title">Cieco Securities Pvt. Ltd. has some unverified information</div>
                                    <div class="progress-bar">
                                        <div class="progress-fill" style="width: 15%;"></div>
                                    </div>
                                    <div class="progress-percent">15% completed</div>
                                    </div>
                                </div>

                                <button class="banner-button" data-bs-toggle="offcanvas" data-bs-target="#activityOffcanvas"><iconify-icon icon="akar-icons:thunder"></iconify-icon> Profile Activity</button>
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
                                        <div class="FileStatus">
                                            <div class="StatusBox">
                                                <span class="badge badge-soft-warning">In Progress</span>
                                            </div>
                                             <a href="#" class="VideoKYCbtn" data-bs-toggle="modal" data-bs-target="#VideoKYCModal"><iconify-icon icon="fluent:video-32-regular"></iconify-icon> Video KYC Call</a>
                                        <button type="button" id="markVASAPprovedBtn" class="btn markVASAPprovedBtn d-flex align-items-center gap-2">
                                                <label class="custom-checkbox mb-0">
                                                    <input type="checkbox" id="approvalCheckbox" />
                                                    <span class="checkmark"></span>
                                                </label>
                                                <span>Mark Profile Approved</span>
                                            </button>
                                           
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

                            <div class="CustomerApprovalTab">
                                <!-- TAB HEADERS -->
                                <div class="tab-header">
                                    <div class="tab Approved active" data-tab="panel1">
                                   
                                    <div class="step-title"><iconify-icon icon="ph:seal-check-fill"></iconify-icon> Personal Details</div>
                                    <!-- <div class="subtext"> <div class="status">Verified</div> 16 July,2025</div> -->
                                 
                                    </div>
                                    <div class="tab" data-tab="panel2">
                                    <div class="step-title"><iconify-icon icon="ph:seal-check-fill"></iconify-icon> KYC Verification</div>
                                   
                                  
                                    </div>
                                    <div class="tab" data-tab="panel3">
                                    
                                    <div class="step-title"> Guarantor/Co-Applicant Details</div>
                                   
                                    </div>
                                    <div class="tab" data-tab="panel4">
                                  
                                    <div class="step-title"> Business Details</div>
                                   
                                    
                                    </div>
                                    <div class="tab" data-tab="panel5">
                                     <div class="step-title"> Bank Details</div>
                                  
                                    </div>
                                    <div class="tab" data-tab="panel6">
                                    <div class="step-title"> Beureu Reports</div>
                                    <!-- <div class="subtext"><div class="status">Rejected</div> </div> -->
                                   
                                    </div>
                                </div>

                                <!-- TAB PANELS -->
                                <div class="tab-content">
                                    <div class="tab-panel active" id="panel1">
                                        <div class="TabInnerHead">
                                            <div class="HeadCnt">
                                               <h6>Customer Information
                                                <div class="subtext"> <div class="status-success">Verified</div> 16 July,2025</div>
                                               </h6>
                                               <p>Review the customer’s personal information to ensure accuracy before continuing.</p>
                                            </div>
                                            <div class="StepActions">
                                                   
													<a class="stepActionBtn" href="#" data-bs-toggle="modal" data-bs-target="#VerifyModal"><iconify-icon icon="prime:check-square"></iconify-icon> Verify</a>
													<a class="stepActionBtn rejectBtn" href="#" data-bs-toggle="modal" data-bs-target="#RejectModal"><iconify-icon icon="radix-icons:cross-circled"></iconify-icon> Reject</a>
                                                     <a class="stepActionBtn" data-bs-toggle="modal" data-bs-target="#EditPersonalDetails"><iconify-icon icon="basil:edit-outline"></iconify-icon> Edit</a>
                                            </div>
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
                                                        <div class="cu-task-label-icon__container">Father’s / Spouse’s Name</div>
                                                        <div class="userenuData">Mr. Rajesh Sharma</div>
                                                        </div>
                                                     

                                                          <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Current Address</div>
                                                        <div class="userenuData"> 123, Shivaji Nagar, Near Central Mall,
                                                            Pune, Maharashtra - 411005</div>
                                                        </div>
                                                   
                                                      <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Permanent Address</div>
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
                                                        <h4><img src="dist/img/newimages/logotransparent.png" alt="VASAP Finance Logo" class="inline-logo"> SolarBiz Loan</h4>
                                                        <ul>
                                                            <li>

                                                                <div class="loancardpoints_content">
                                                                    <div class="pointlabel">Loan Size</div>₹1 lakh – ₹50 lakh
                                                                </div>
                                                            </li>
                                                            <li>

                                                                <div class="loancardpoints_content">
                                                                    <div class="pointlabel">Tenure</div>Up to 4 years
                                                                </div>
                                                            </li>
                                                            <li>

                                                                <div class="loancardpoints_content">
                                                                    <div class="pointlabel">Collateral</div>Unsecured or secured
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
                                                            <div class="cu-task-label-icon__container">Loan Amount (₹)</div>
                                                            <div class="userenuData">₹20,00,000</div>
                                                            </div>

                                                            <div class="cu-task-fields__row">
                                                            <div class="cu-task-label-icon__container">Tenure (in months)</div>
                                                            <div class="userenuData">48 Months</div>
                                                            </div>

                                                            <div class="cu-task-fields__row fullWidth">
                                                            <div class="cu-task-label-icon__container">Write any specifics, where we can help you</div>
                                                            <div class="userenuData">I need urgent processing, or I need help understanding eligibility criteria...</div>
                                                            </div>

                                                        </div>
                                                        </div>
                                                    </div>
                                               
                                            </div>
                                            </div>
                                           
                                        </div>
                                      

                                      
                                      </div>
                                    </div>
                                    <div class="tab-panel" id="panel2">
                                       <div class="TabInnerHead">
                                            <div class="HeadCnt">
                                               <h6>KYC Document Review</h6>
                                            <p>Verify the customer's identity by reviewing the submitted KYC documents.</p>
                                            </div>
                                              <div class="StepActions">
                                                    <!-- <a class="stepActionBtn" data-bs-toggle="modal" data-bs-target="#EditPersonalDetails"><iconify-icon icon="basil:edit-outline"></iconify-icon> Edit</a> -->
													
                                                    <a class="stepActionBtn" href="#" data-bs-toggle="modal" data-bs-target="#VerifyModal"><iconify-icon icon="prime:check-square"></iconify-icon> Verify</a>
													<a class="stepActionBtn rejectBtn" href="#" data-bs-toggle="modal" data-bs-target="#RejectModal"><iconify-icon icon="radix-icons:cross-circled"></iconify-icon> Reject</a>
                                                    <a class="stepActionBtn" href="#" ><iconify-icon icon="iwwa:alert"></iconify-icon> Send KYC Docs Alert</a>
                                                    <!-- <a class="stepActionBtn" href="#" ><iconify-icon icon="iwwa:alert"></iconify-icon> Video K</a> -->
                                           
                                                </div>
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
                                                        <li class="KYC-tab KYC-active" data-target="KYC-customer">Customer Documents</li>
                                                        <li class="KYC-tab" data-target="KYC-partner1">Partner 1 Documents</li>
                                                        <li class="KYC-tab" data-target="KYC-partner2">Partner 2 Documents</li>
                                                    </ul>

                                                    <div class="KYC-tabcontent">
                                                        <div class="KYC-pane KYC-active" id="KYC-customer">
                                                           <div class="docCardWrapper">
                                                   
                                                                <div class="docCard">
                                                                <div class="docImage">
                                                                    <a data-fancybox="aadhar" href="dist/img/newimages/aadhar-front.png">
                                                                    <img src="dist/img/newimages/aadhar-front.png" alt="Aadhaar Front" />
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
                                                                        <a data-fancybox="aadhar" href="dist/img/newimages/aadhar-back.png">
                                                                        <img src="dist/img/newimages/aadhar-back.png" alt="Aadhaar Back" />
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
                                                                        <a data-fancybox="aadhar" href="dist/img/newimages/pan-card.png">
                                                                        <img src="dist/img/newimages/pan-card.png" alt="PAN Card" />
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
                                                                            <a data-fancybox="aadhar" href="dist/img/newimages/voterid.png">
                                                                            <img src="dist/img/newimages/voterid.png" alt="Voter Id Card" />
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
                                                                            <a data-fancybox="aadhar" href="dist/img/newimages/users/user2.jpg">
                                                                            <img src="dist/img/newimages/users/user2.jpg" alt="Voter Id Card" />
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
                                                                            <a data-fancybox="aadhar" href="dist/img/newimages/sign.png">
                                                                            <img src="dist/img/newimages/sign.png" alt="Voter Id Card" />
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
                                                                            <img src="dist/img/newimages/pdf.png" alt="bank statement" />
                                                                            </a>

                                                                            
                                                                        </div>
                                                                        <div class="docContent">
                                                                            <span class="verified-badge">Verified</span>
                                                                            <h6 class="doc-title">Bank Statement</h6>
                                                                            <p class="step-label">Uploaded on</p>
                                                                            <p class="doc-meta">14 July 2025, 3:42 PM</p>
                                                                            <a href="#" class="DownLoadBankSheet" >
                                                                              <iconify-icon icon="material-symbols:download"></iconify-icon> 
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
                                                                    <a data-fancybox="aadhar" href="dist/img/newimages/aadhar-front.png">
                                                                    <img src="dist/img/newimages/aadhar-front.png" alt="Aadhaar Front" />
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
                                                                        <a data-fancybox="aadhar" href="dist/img/newimages/aadhar-back.png">
                                                                        <img src="dist/img/newimages/aadhar-back.png" alt="Aadhaar Back" />
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
                                                                        <a data-fancybox="aadhar" href="dist/img/newimages/pan-card.png">
                                                                        <img src="dist/img/newimages/pan-card.png" alt="PAN Card" />
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
                                                                            <a data-fancybox="aadhar" href="dist/img/newimages/voterid.png">
                                                                            <img src="dist/img/newimages/voterid.png" alt="Voter Id Card" />
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
                                                                            <a data-fancybox="aadhar" href="dist/img/newimages/users/user2.jpg">
                                                                            <img src="dist/img/newimages/users/user2.jpg" alt="Voter Id Card" />
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
                                                                    <a data-fancybox="aadhar" href="dist/img/newimages/aadhar-front.png">
                                                                    <img src="dist/img/newimages/aadhar-front.png" alt="Aadhaar Front" />
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
                                                                        <a data-fancybox="aadhar" href="dist/img/newimages/aadhar-back.png">
                                                                        <img src="dist/img/newimages/aadhar-back.png" alt="Aadhaar Back" />
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
                                                                        <a data-fancybox="aadhar" href="dist/img/newimages/pan-card.png">
                                                                        <img src="dist/img/newimages/pan-card.png" alt="PAN Card" />
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
                                                                            <a data-fancybox="aadhar" href="dist/img/newimages/voterid.png">
                                                                            <img src="dist/img/newimages/voterid.png" alt="Voter Id Card" />
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
                                                                            <a data-fancybox="aadhar" href="dist/img/newimages/users/user2.jpg">
                                                                            <img src="dist/img/newimages/users/user2.jpg" alt="Voter Id Card" />
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
                                    </div>
                                    <div class="tab-panel" id="panel3">
                                       <div class="TabInnerHead">
                                            <div class="HeadCnt">
                                                <h6> Guarantor/Co-Applicant Details</h6>
                                                <p>Review the provided information for the co-applicant or guarantor to ensure accuracy before proceeding.</p>
                                            </div>
                                             <div class="StepActions">
                                                
                                                <a class="stepActionBtn" href="#" data-bs-toggle="modal" data-bs-target="#GurantorDetailsModal">
                                                    <iconify-icon icon="prime:check-square"></iconify-icon> Verify 
                                                </a>
                                                <a class="stepActionBtn rejectBtn" href="#" data-bs-toggle="modal" data-bs-target="#GurantorDetailsRejectModal">
                                                    <iconify-icon icon="radix-icons:cross-circled"></iconify-icon> Reject 
                                                </a>
                                                   <a class="stepActionBtn" data-bs-toggle="modal" data-bs-target="#GurantorAdd"><iconify-icon icon="basil:add-outline" ></iconify-icon> Add New</a> 
                                            </div>
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
                                                        <a href="#" class="EditGurantorDetailBTn" data-bs-toggle="modal" data-bs-target="#GurantorEdit">
                                                            <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                                        </a>
                                                        </div>
                                                        <div class="CustomCardBody">
                                                        <div class="ReportData_fields">

                                                            <div class="cu-task-fields__row">
                                                            <div class="cu-task-label-icon__container">Full Name</div>
                                                            <div class="userenuData">Mr. Rajeev Sharma</div>
                                                            </div>

                                                            <div class="cu-task-fields__row">
                                                            <div class="cu-task-label-icon__container">Relationship with Applicant</div>
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
                                                            <div class="userenuData">E-42, Sector 15, Noida, Uttar Pradesh, India</div>
                                                            </div>

                                                            <div class="cu-task-fields__row">
                                                            <div class="cu-task-label-icon__container">Occupation</div>
                                                            <div class="userenuData">Retired Government Officer</div>
                                                            </div>

                                                            <div class="cu-task-fields__row">
                                                            <div class="cu-task-label-icon__container">Annual Income (INR)</div>
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
                                                    <a href="#" class="EditGurantorDetailBTn" data-bs-toggle="modal" data-bs-target="#GurantorEdit">
                                                        <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                                    </a>
                                                    </div>
                                                    <div class="CustomCardBody">
                                                    <div class="ReportData_fields">

                                                        <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Full Name</div>
                                                        <div class="userenuData">Ms. Riya Kapoor</div>
                                                        </div>

                                                        <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Relationship with Applicant</div>
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
                                                        <div class="userenuData">A-24, Green Park, New Delhi, India</div>
                                                        </div>

                                                        <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Occupation</div>
                                                        <div class="userenuData">Marketing Manager</div>
                                                        </div>

                                                        <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Annual Income (INR)</div>
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
                                    </div>
                                    <div class="tab-panel" id="panel4">
                                        <div class="TabInnerHead">
                                                <div class="HeadCnt">
                                                    <h6>Business Details</h6>
                                                    <p>Review the customer’s business information including type, ownership, income, and registration details before proceeding.</p>
                                                </div>
                                                <div class="StepActions">
                                                   

                                                    <a class="stepActionBtn" href="#" data-bs-toggle="modal" data-bs-target="#BusinessVerifyModal">
                                                        <iconify-icon icon="prime:check-square"></iconify-icon> Verify 
                                                    </a>
                                                    <a class="stepActionBtn rejectBtn" href="#" data-bs-toggle="modal" data-bs-target="#BusinessRejectModal">
                                                        <iconify-icon icon="radix-icons:cross-circled"></iconify-icon> Reject 
                                                    </a>
                                                     <a class="stepActionBtn" data-bs-toggle="modal" data-bs-target="#BusinessDetailEdit"><iconify-icon icon="basil:edit-outline"></iconify-icon> Edit</a>
                                                    
                                            </div>
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
                                                        <div class="cu-task-label-icon__container">Business Start Date</div>
                                                        <div class="userenuData">20 July, 2025</div>
                                                        </div>

                                                        <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Annual Turnover (INR)</div>
                                                        <div class="userenuData">₹12,50,000</div>
                                                        </div>

                                                        <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">GST Number</div>
                                                        <div class="userenuData">07AAGPK1234L1Z1</div>
                                                        </div>

                                                        <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Business PAN Number</div>
                                                        <div class="userenuData">Marketing Manager</div>
                                                        </div>

                                                        <div class="cu-task-fields__row">
                                                        <div class="cu-task-label-icon__container">Business Address</div>
                                                        <div class="userenuData">A-24, Green Park, New Delhi, India</div>
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
                                               
                                                
                                    </div>
                                    <div class="tab-panel" id="panel5">
                                     <div class="TabInnerHead">
                                        <div class="HeadCnt">
                                            <h6>Bank Details</h6>
                                            <p>Review the customer's bank information including account holder name, account number, IFSC code, and statements before proceeding.</p>
                                        </div>
                                         <div class="StepActions">
                                                 
                                                    <a class="stepActionBtn" href="#" data-bs-toggle="modal" data-bs-target="#BankVerifyModal">
                                                        <iconify-icon icon="prime:check-square"></iconify-icon> Verify
                                                    </a>
                                                    <a class="stepActionBtn rejectBtn" href="#" data-bs-toggle="modal" data-bs-target="#BankRejectModal">
                                                        <iconify-icon icon="radix-icons:cross-circled"></iconify-icon> Reject
                                                    </a>
                                                       <a class="stepActionBtn" data-bs-toggle="modal" data-bs-target="#BankDetailEdit">
                                                        <iconify-icon icon="basil:edit-outline"></iconify-icon> Edit
                                                    </a>
                                            </div>
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
                                                            <div class="cu-task-label-icon__container">Account Holder Name</div>
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
                                                            <div class="cu-task-label-icon__container">Confirm Account Number</div>
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
                                    </div>
                                    <div class="tab-panel" id="panel6">
                                    <div class="TabInnerHead">
                                                <div class="HeadCnt">
                                                    <h6>Bureau Report Summary</h6>
                                                    <p>Review the customer's credit and financial history from leading bureaus before making loan decisions.</p>

                                                </div>
                                                <a href="#" class="downloadReport"><iconify-icon icon="material-symbols:download"></iconify-icon> Bureau Report</a>
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
                                                                            is your <strong style="color: #0074cc">CIBIL</strong> Score as of <strong>21 Feb 2025</strong><br>
                                                                           
                                                                        </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                         <div class="overview LoansCard">
                                                                <h3>Overview of Credit Score</h3>
                                                                <div class="card-grid">
                                                                     <div class="card left-red">
                                                                    <h4>Fair Range</h4>
                                                                    <p>580-669</p>
                                                                </div>
                                                                 <div class="card left-yellow">
                                                                    <h4>Good</h4>
                                                                    <p>670-739</p>
                                                                </div>
                                                                <div class="card left-emerald">
                                                                    <h4>Very Good</h4>
                                                                    <p>740-799</p>
                                                                </div>
                                                                <div class="card left-green">
                                                                    <h4>Excellent</h4>
                                                                    <p>800-899</p>
                                                                </div>
                                                               
                                                               
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
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

<!----------------------------------------------------
 Video KYC Verification Modal Start
----------------------------------------------------->
<div class="modernModalWrapper">
  <div class="modal fade" id="VideoKYCModal" tabindex="-1" aria-labelledby="VideoKYCVerifyModal" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content rounded-7 shadow">

        <!-- Modal Header -->
        <div class="ModalHead">
          <h5 class="fw-semibold">
          <iconify-icon icon="fluent:warning-28-regular"></iconify-icon>
            Video KYC Verification
          </h5>
          <button type="button" class="btnClose btn btn-sm btn-bg-transparent" data-bs-dismiss="modal">
            <iconify-icon icon="oui:cross"></iconify-icon>
          </button>
        </div>

        <!-- Modal Body -->
        <div class="modal-body">
          <div class="ContentWrapper">
            <h4>Confirm Video KYC Verification</h4>
            <p>
              Please confirm that you have successfully completed the Video KYC verification for customer
              <strong>Atul Sharma</strong>.
              Ensure the customer's face was clearly visible, ID was held up, and questions were answered in real-time.
            </p>

            <!-- Footer Buttons -->
            <div class="FooterActionStyle1">
              <button class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
              <button class="btn btn-theme" data-bs-dismiss="modal">Yes, Verified</button>
            </div>
          </div>
        </div>

        <!-- Optional Footer Branding -->
        <div class="silverrightloog">
          <img src="dist/img/newimages/silverlogo.png" alt="logo">
        </div>

      </div>
    </div>
  </div>
</div>
<!----------------------------------------------------
 Video KYC Verification Modal End
----------------------------------------------------->

    <!---------------------------------------------------------
 Customer Approval Modal - Modern Style 1 Start
---------------------------------------------------------->

<div class="modernModalWrapper">
  <div class="modal fade" id="CustomerApprovalModal" tabindex="-1" aria-labelledby="CustomerApprovalModal" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content rounded-7 shadow">

        <!-- Modal Header -->
        <div class="ModalHead">
          <h5 class="fw-semibold">
           <iconify-icon icon="quill:send"></iconify-icon>
            Approval Confirmation
          </h5>
          <button type="button" class="btnClose btn btn-sm btn-bg-transparent" data-bs-dismiss="modal">
            <iconify-icon icon="oui:cross"></iconify-icon>
          </button>
        </div>

        <!-- Modal Body -->
        <div class="modal-body">
          <div class="ContentWrapper">
            <h4>Approve Customer Details</h4>
            <p>
              Please confirm that you have thoroughly reviewed and verified all the customer details including identity, contact information, documents, and financial background.
              Once approved, the customer will be moved to the <strong>Approved Customers</strong> list.
            </p>

            <!-- Footer Buttons -->
            <div class="FooterActionStyle1">
              <button class="btn btn-cancel ApprovalCancelBtn" data-bs-dismiss="modal">Cancel</button>
              <button class="btn btn-theme ApprovalYesBtn" data-bs-dismiss="modal">Yes, Approved</button>
            </div>
          </div>
        </div>

        <!-- Optional Footer Branding -->
        <div class="silverrightloog">
          <img src="dist/img/newimages/silverlogo.png" alt="logo">
        </div>

      </div>
    </div>
  </div>
</div>

<!---------------------------------------------------------
 Customer Approval Modal - Modern Style 1 End
----------------------------------------------------------->

    <!-- Offcanvas -->
<div class="offcanvas offcanvas-end ActivityOffcanvas" tabindex="-1" id="activityOffcanvas">
  <div class="offcanvas-header border-bottom">
    <h5 class="offcanvas-title"><iconify-icon icon="hugeicons:activity-04"></iconify-icon> Loan Profile Activity</h5>
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

    <!----------------------------------------------------------------------------
 Edit Personal Detail Modern Modal style 1 Code Here Start Here
--------------------------------------------------------------------------->
   
   <div class="ModalAddGurantor">
        <div class="modal fade" id="EditPersonalDetails" tabindex="-1" aria-labelledby="KYCverifyModal" aria-hidden="true">
            <div class="modal-dialog modal-lg  modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content rounded-7 shadow">
                    <div class="modal-header CustomModal">
                         <h5 class="ModalTitle">
                            <div class="IconBox">
                                <iconify-icon icon="stash:user-id"></iconify-icon>
                            
                            </div>
                            <div class="TitleVox">
                             Edit Personal Details
                          <span>Edit the personal information of the customer.</span>
                            </div>
                        

                        </h5>
                        <button type="button" class="btnClose btn btn-sm btn-bg-transparent" data-bs-dismiss="modal">
                            <iconify-icon icon="oui:cross"></iconify-icon>
                        </button>
                    </div>
                    <div class="modal-body">

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Your Name </label>
                                                <input type="text" class="form-control" placeholder="Enter your name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Father’s / Spouse’s Name </label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter father’s or spouse’s name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Email Address </label>
                                                <input type="email" class="form-control email-field"
                                                    placeholder="Enter your email">
                                                <div class="error-message"
                                                    style="display:none; color: red; font-size: 13px;">Please enter a
                                                    valid email address.</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group enu_intl_inpWrap">
                                                <label class="form-label">Mobile Number</label>
                                                <input type="phone" name="" class="form-control"
                                                    placeholder="Enter mobile number">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-label">Your Date of Birth</label>
                                                <input type="text" class="form-control Ndatepicker"
                                                    placeholder="Select your date of birth">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-label">Marital Status <span
                                                        class="requiredLabel">*</span></label>
                                                <select class="select2">
                                                    <option>Choose</option>
                                                    <option>Married</option>
                                                    <option>Unmarried</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-label">Gender <span
                                                        class="requiredLabel">*</span></label>
                                                <select class="select2">
                                                    <option value="">Choose</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                    <!-- <option value="prefer_not_say">Prefer not to say</option> -->
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="header_btborder_title">
                                        <h2>Current Address</h2>
                                    </div>
                                    <div class="permissions-list">
                                        <div class="row">
                                          
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="form-label">Select State</label>
                                                    <select id="state" class="form-control select2 State-select">
                                                        <option disabled selected value="">Loading...</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="form-label">City</label>
                                                    <input type="text" class="form-control" id="billing_city"
                                                        placeholder="Enter your city">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="form-label">Pin Code</label>
                                                    <input type="number" class="form-control"
                                                        placeholder="Enter your pin code">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-label">Current Address</label>
                                                    <textarea placeholder="Enter your current address"
                                                        class="form-control formtextarea_height"
                                                        aria-invalid="false"></textarea>
                                                </div>
                                            </div>
                                           

                                            
                                        </div>
                                         </div>

                                         <!-- Checkbox -->
                                            <div class="form-check mt-2">
                                                <input type="checkbox" class="form-check-input" id="addressCheckbox">
                                                <label class="form-check-label" for="addressCheckbox">
                                                    Permanent address is not same as current
                                                </label>
                                            </div>

                                            <!-- Permanent Address -->
                                            <div id="permanentAddressSection" class="mt-4" style="display: none;">
                                                <div class="header_btborder_title">
                                                    <h2>Permanent Address</h2>
                                                </div>
                                                <div class="permissions-list">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Select State</label>
                                                                <select id="permanent_state" class="form-control select2 State-select">
                                                                    <option disabled selected value="">Loading...</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label class="form-label">City</label>
                                                                <input type="text" class="form-control" id="permanent_city"
                                                                    placeholder="Enter your city">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Pin Code</label>
                                                                <input type="number" class="form-control" id="permanent_pin"
                                                                    placeholder="Enter your pin code">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Permanent Address</label>
                                                                <textarea placeholder="Enter your permanent address"
                                                                    class="form-control formtextarea_height" id="permanent_address"
                                                                    aria-invalid="false"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                
                    
                </div>
                <div class="modal-footer">
                   <button class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                   <button class="btn btn-theme" data-bs-dismiss="modal">Submit</button>
                </div>
             
            </div>
        </div>
    </div>
<!----------------------------------------------------------------------------
  Edit Personal Detail Modern Modal style 1 Code Here End Here
--------------------------------------------------------------------------->
<!----------------------------------------------------------------------------
  Add Co-Applicant/Gurantor Detail Modern Modal style 1 Code Here Start Here
--------------------------------------------------------------------------->
   
   <div class="ModalAddGurantor">
        <div class="modal fade" id="GurantorAdd" tabindex="-1" aria-labelledby="KYCverifyModal" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered">
                <div class="modal-content rounded-7 shadow">
                    <div class="modal-header CustomModal">
                        <h5 class="ModalTitle">
                            <div class="IconBox">
                                <iconify-icon icon="hugeicons:ai-user"></iconify-icon>
                            
                            </div>
                            <div class="TitleVox">
                              Add Guarantor/Co-Applicant
                          <span>Enter guarantor or co-applicant details.</span>
                            </div>
                        

                        </h5>
                       
                        <button type="button" class="btnClose btn btn-sm btn-bg-transparent" data-bs-dismiss="modal">
                            <iconify-icon icon="oui:cross"></iconify-icon>
                        </button>
                    </div>
                    <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Full Name </label>
                                <input type="text" class="form-control" placeholder="Enter full name">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Relationship with Applicant </label>
                                <input type="text" class="form-control"
                                    placeholder="e.g., Friend, Colleague">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group enu_intl_inpWrap">
                                <label class="form-label">Mobile Number</label>
                                <input type="phone" class="form-control"
                                    placeholder="Enter mobile number">
                                <input type="hidden" class="selected-dial-code">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control email-field"
                                    placeholder="Enter your email">
                                <div class="error-message"
                                    style="display:none; color: red; font-size: 13px;">Please enter a
                                    valid email address.</div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label">Address </label>
                                <textarea class="form-control formtextarea_height"
                                    placeholder="Enter full address" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Occupation </label>
                                <input type="text" class="form-control"
                                    placeholder="e.g., Businessman, Govt. Employee">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Annual Income (INR)</label>
                                <input type="number" class="form-control"
                                    placeholder="Enter annual income" min="0">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">ID Proof Type </label>
                                    <select class="form-control select2">
                                    <option value="">Select ID Type</option>
                                    <option value="aadhaar">Aadhaar Card</option>
                                    <option value="pan">PAN Card</option>
                                    <option value="voter">Voter ID</option>
                                    <option value="passport">Passport</option>
                                    <option value="driving">Driving License</option>
                                    </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">ID Number </label>
                                <input type="number" class="form-control" placeholder="Enter ID number">
                            </div>
                        </div>
                        
                     </div>
                    
                </div>
                <div class="modal-footer">
                   <button class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                   <button class="btn btn-theme" data-bs-dismiss="modal">Submit</button>
                </div>
             
            </div>
        </div>
    </div>
<!----------------------------------------------------------------------------
  Add Co-Applicant/Gurantor Detail Modern Modal style 1 Code Here End Here
--------------------------------------------------------------------------->


<!----------------------------------------------------------------------------
  Edit Co-Applicant/Gurantor Detail Modern Modal style 1 Code Here Start Here
--------------------------------------------------------------------------->
   
   <div class="ModalAddGurantor">
        <div class="modal fade" id="GurantorEdit" tabindex="-1" aria-labelledby="KYCverifyModal" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered">
                <div class="modal-content rounded-7 shadow">
                    <div class="modal-header CustomModal">
                    
                         <h5 class="ModalTitle">
                            <div class="IconBox">
                                <iconify-icon icon="hugeicons:ai-user"></iconify-icon>
                            
                            </div>
                            <div class="TitleVox">
                             Edit Guarantor/Co-Applicant
                          <span>Update guarantor or co-applicant details.</span>
                            </div>
                        

                        </h5>
                        <button type="button" class="btnClose btn btn-sm btn-bg-transparent" data-bs-dismiss="modal">
                            <iconify-icon icon="oui:cross"></iconify-icon>
                        </button>
                    </div>
                    <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Full Name </label>
                                <input type="text" class="form-control" placeholder="Enter full name">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Relationship with Applicant </label>
                                <input type="text" class="form-control"
                                    placeholder="e.g., Friend, Colleague">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group enu_intl_inpWrap">
                                <label class="form-label">Mobile Number</label>
                                <input type="phone" class="form-control"
                                    placeholder="Enter mobile number">
                                <input type="hidden" class="selected-dial-code">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control email-field"
                                    placeholder="Enter your email">
                                <div class="error-message"
                                    style="display:none; color: red; font-size: 13px;">Please enter a
                                    valid email address.</div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label">Address </label>
                                <textarea class="form-control formtextarea_height"
                                    placeholder="Enter full address" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Occupation </label>
                                <input type="text" class="form-control"
                                    placeholder="e.g., Businessman, Govt. Employee">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Annual Income (INR)</label>
                                <input type="number" class="form-control"
                                    placeholder="Enter annual income" min="0">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">ID Proof Type </label>
                                    <select class="form-control select2">
                                    <option value="">Select ID Type</option>
                                    <option value="aadhaar">Aadhaar Card</option>
                                    <option value="pan">PAN Card</option>
                                    <option value="voter">Voter ID</option>
                                    <option value="passport">Passport</option>
                                    <option value="driving">Driving License</option>
                                    </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">ID Number </label>
                                <input type="number" class="form-control" placeholder="Enter ID number">
                            </div>
                        </div>
                        
                     </div>
                    
                </div>
                <div class="modal-footer">
                   <button class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                   <button class="btn btn-theme" data-bs-dismiss="modal">Update</button>
                </div>
             
            </div>
        </div>
    </div>
<!----------------------------------------------------------------------------
  Edit Co-Applicant/Gurantor Detail Modern Modal style 1 Code Here End Here
--------------------------------------------------------------------------->


<!----------------------------------------------------
 Gurantor Details Modern Modal style 1 Code Here Start Here
   ------------------------------------------------------->
   
   <div class="modernModalWrapper">
  <div class="modal fade" id="GurantorDetailsModal" tabindex="-1" aria-labelledby="GurantorVerifyModal" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content rounded-7 shadow">

        <!-- Modal Header -->
        <div class="ModalHead">
          <h5 class="fw-semibold">
            <iconify-icon icon="fluent:warning-28-regular"></iconify-icon>
            Confirmation Required
          </h5>
          <button type="button" class="btnClose btn btn-sm btn-bg-transparent" data-bs-dismiss="modal">
            <iconify-icon icon="oui:cross"></iconify-icon>
          </button>
        </div>

        <!-- Modal Body -->
        <div class="modal-body">
          <div class="ContentWrapper">
            <h4>Verify Guarantor Details</h4>
            <p>
              Please confirm that you have thoroughly reviewed the details and identity documents submitted by the guarantor,
              <strong>Atul Sharma</strong>. This includes verifying their relationship with the applicant, proof of ID, address, occupation, and income.
            </p>

            <!-- Footer Buttons -->
            <div class="FooterActionStyle1">
              <button class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
              <button class="btn btn-theme" data-bs-dismiss="modal">Yes, Verified</button>
            </div>
          </div>
        </div>

        <!-- Optional Footer Branding -->
        <div class="silverrightloog">
          <img src="dist/img/newimages/silverlogo.png" alt="logo">
        </div>

      </div>
    </div>
  </div>
</div>


 <!----------------------------------------------------
  Gurantor Details Modern Modal style 1 Code Here End Here
   ------------------------------------------------------->

    <!----------------------------------------------------
    Gurantor Details Rejection Modern Modal style 1 Code Here Start Here
   ------------------------------------------------------->


   <div class="modernModalWrapper ModernWraper-style2">
  <div class="modal fade" id="GurantorDetailsRejectModal" tabindex="-1" aria-labelledby="RejectModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content rounded-7 shadow">

        <!-- Modal Header -->
        <div class="ModalHead">
          <h5 class="fw-semibold">
            <iconify-icon icon="fluent:warning-28-regular"></iconify-icon>
            Reject Confirmation
          </h5>
          <button type="button" class="btnClose btn btn-sm btn-bg-transparent" data-bs-dismiss="modal">
            <iconify-icon icon="oui:cross"></iconify-icon>
          </button>
        </div>

       <!-- Modal Body -->
            <div class="modal-body">
            <div class="ContentWrapper">
                <h4>Reject Guarantor Details</h4>
                <p>
                You are about to reject the guarantor details submitted by <strong>Atul Sharma</strong>.<br>
                This may include identity, address, or income verification documents. Please provide a reason for rejection. You can optionally notify the customer via Email and/or SMS.
                </p>

                <!-- Notification Checkboxes -->
                           <!-- Modern Checkboxes -->
            <div class="d-flex gap-4 mt-3">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="customCheckList12">
                    <label class="form-check-label" for="customCheckList12">
                            Send reason via Email
                    </label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="customCheckList13">
                    <label class="form-check-label" for="customCheckList13">
                            Send reason via SMS
                    </label>
                </div>
             
            </div>

                <!-- Rejection Reason Textarea -->
                <div class="ModernTextArea mt-3">
                <textarea class="form-textarea" rows="4" placeholder="Enter rejection reason..." required></textarea>
                </div>

                <!-- Footer Buttons -->
                <div class="FooterActionStyle2 mt-4">
                <button class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                <button class="btn btn-danger" data-bs-dismiss="modal">Reject Details</button>
                </div>
            </div>
            </div>

        <!-- Optional Branding -->
        <div class="silverrightloog">
          <img src="dist/img/newimages/silverlogo.png" alt="logo">
        </div>

      </div>
    </div>
  </div>
</div>


    <!----------------------------------------------------------------
    Gurantor Details Rejection Modern Modal style 1 Code Here End Here
   ------------------------------------------------------------------->

<!----------------------------------------------------------------------------
  Edit Business Details Modern Modal style 1 Code Here Start Here
--------------------------------------------------------------------------->
   
   <div class="ModalAddGurantor">
        <div class="modal fade" id="BusinessDetailEdit" tabindex="-1" aria-labelledby="KYCverifyModal" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
                <div class="modal-content rounded-7 shadow">
                    <div class="modal-header CustomModal">
                    
                         <h5 class="ModalTitle">
                            <div class="IconBox">
                                <iconify-icon icon="hugeicons:ai-user"></iconify-icon>
                            
                            </div>
                            <div class="TitleVox">
                             Edit Business Details
                          <span>Update Customer Business Details details.</span>
                            </div>
                        

                        </h5>
                        <button type="button" class="btnClose btn btn-sm btn-bg-transparent" data-bs-dismiss="modal">
                            <iconify-icon icon="oui:cross"></iconify-icon>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-label">Business Name <span
                                            class="requiredLabel">*</span></label>
                                    <input type="text" class="form-control"
                                        placeholder="Enter your business name">
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-label">Business Type <span
                                            class="requiredLabel">*</span></label>
                                    <select class="form-control select2">
                                        <option value="">Select Type</option>
                                        <option value="proprietorship">Sole Proprietorship</option>
                                        <option value="partnership">Partnership</option>
                                        <option value="pvt_ltd">Private Limited</option>
                                        <option value="llp">LLP</option>
                                        <option value="public_ltd">Public Limited</option>
                                        <option value="startup">Startup / MSME</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-label">Business Start Date <span
                                            class="requiredLabel">*</span></label>
                                    <input type="text" class="form-control Ndatepicker"
                                        placeholder="Select start date">
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-label">Annual Turnover (INR)</label>
                                    <input type="number" class="form-control" placeholder="e.g. 12,00,000"
                                        min="0">
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-label">GST Number</label>
                                    <input type="text" class="form-control gst-input"
                                        placeholder="Enter GST Number" maxlength="15">

                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-label">Business PAN Number</label>
                                    <input type="text" class="form-control pan-input"
                                        placeholder="Enter PAN Number" maxlength="10">
                                    <div class="error-message text-danger" style="display:none;">Invalid PAN
                                        number format.</div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Business Address <span
                                            class="requiredLabel">*</span></label>
                                    <textarea class="form-control formtextarea_height" rows="3"
                                        placeholder="Enter full business address"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="monthlyIncome" class="form-label">Upload Business Proof
                                        (e.g., GST,
                                        Shop License) <span class="requiredLabel">*</span></label>
                                    <!-- Signature Upload -->
                                    <div class="upload-wrapper"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="monthlyIncome" class="form-label">Upload Latest ITR / Income
                                        Proof<span class="requiredLabel">*</span></label>
                                    <!-- Signature Upload -->
                                    <div class="upload-wrapper"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="monthlyIncome" class="form-label">
                                        Office Rent Or Lease Agreement <span
                                            class="requiredLabel">*</span>
                                    </label>
                                    <!-- Signature Upload -->
                                    <div class="upload-wrapper" data-title="Office Rent Or Lease Agreement"></div>
                                </div>
                            </div>
                             <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="monthlyIncome" class="form-label">
                                        Balance sheet <span
                                            class="requiredLabel">*</span>
                                    </label>
                                    <!-- Signature Upload -->
                                    <div class="upload-wrapper" data-title="Office Rent Or Lease Agreement"></div>
                                </div>
                            </div>

                        </div>
                </div>
                <div class="modal-footer">
                   <button class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                   <button class="btn btn-theme" data-bs-dismiss="modal">Update</button>
                </div>
             
            </div>
        </div>
    </div>
<!----------------------------------------------------------------------------
  Edit Business Details Modern Modal style 1 Code Here End Here
--------------------------------------------------------------------------->


<!---------------------------------------------------------
 Business Details Modern Modal style 1 Code Here Start Here
----------------------------------------------------------->
   
   <div class="modernModalWrapper">
  <div class="modal fade" id="BusinessVerifyModal" tabindex="-1" aria-labelledby="BusinessVerifyModal" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content rounded-7 shadow">

        <!-- Modal Header -->
        <div class="ModalHead">
          <h5 class="fw-semibold">
            <iconify-icon icon="fluent:warning-28-regular"></iconify-icon>
            Confirmation Required
          </h5>
          <button type="button" class="btnClose btn btn-sm btn-bg-transparent" data-bs-dismiss="modal">
            <iconify-icon icon="oui:cross"></iconify-icon>
          </button>
        </div>

        <!-- Modal Body -->
        <div class="modal-body">
          <div class="ContentWrapper">
            <h4>Verify Business Details</h4>
            <p>
              Please confirm that you have thoroughly reviewed the business information submitted by
              <strong>Atul Sharma</strong>. This includes verifying the business name, type, ownership, registration documents, address, and declared income.
            </p>

            <!-- Footer Buttons -->
            <div class="FooterActionStyle1">
              <button class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
              <button class="btn btn-theme" data-bs-dismiss="modal">Yes, Verified</button>
            </div>
          </div>
        </div>

        <!-- Optional Footer Branding -->
        <div class="silverrightloog">
          <img src="dist/img/newimages/silverlogo.png" alt="logo">
        </div>

      </div>
    </div>
  </div>
</div>



 <!----------------------------------------------------
 Business Details Modern Modal style 1 Code Here End Here
   ------------------------------------------------------->


    <!----------------------------------------------------
   Business Details Rejection Modern Modal style 1 Code Here Start Here
   ------------------------------------------------------->


   <div class="modernModalWrapper ModernWraper-style2">
  <div class="modal fade" id="BusinessRejectModal" tabindex="-1" aria-labelledby="RejectModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content rounded-7 shadow">

        <!-- Modal Header -->
        <div class="ModalHead">
          <h5 class="fw-semibold">
            <iconify-icon icon="fluent:warning-28-regular"></iconify-icon>
            Reject Confirmation
          </h5>
          <button type="button" class="btnClose btn btn-sm btn-bg-transparent" data-bs-dismiss="modal">
            <iconify-icon icon="oui:cross"></iconify-icon>
          </button>
        </div>

       <!-- Modal Body -->
<div class="modal-body">
  <div class="ContentWrapper">
    <h4>Reject Business Details</h4>
    <p>
      You are about to reject the business details submitted by <strong>Atul Sharma</strong>.<br>
      This may include business registration documents, address proof, financials, or ownership information. Please provide a reason for rejection. You can optionally notify the customer via Email and/or SMS.
    </p>

    <!-- Notification Checkboxes -->
                <!-- Modern Checkboxes -->
            <div class="d-flex gap-4 mt-3">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="customCheckList10">
                    <label class="form-check-label" for="customCheckList10">
                            Send reason via Email
                    </label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="customCheckList11">
                    <label class="form-check-label" for="customCheckList11">
                            Send reason via SMS
                    </label>
                </div>
             
            </div>

    <!-- Rejection Reason Textarea -->
    <div class="ModernTextArea mt-3">
      <textarea class="form-textarea" rows="4" placeholder="Enter rejection reason..." required></textarea>
    </div>

    <!-- Footer Buttons -->
    <div class="FooterActionStyle2 mt-4">
      <button class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
      <button class="btn btn-danger" data-bs-dismiss="modal">Reject Details</button>
    </div>
  </div>
</div>


        <!-- Optional Branding -->
        <div class="silverrightloog">
          <img src="dist/img/newimages/silverlogo.png" alt="logo">
        </div>

      </div>
    </div>
  </div>
</div>


    <!----------------------------------------------------------------
    Business Details Rejection Modern Modal style 1 Code Here End Here
   ------------------------------------------------------------------->

<!----------------------------------------------------------------------------
  Edit Bank Details Modern Modal style 1 Code Here Start Here
--------------------------------------------------------------------------->
   
   <div class="ModalAddGurantor">
        <div class="modal fade" id="BankDetailEdit" tabindex="-1" aria-labelledby="KYCverifyModal" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-scrollable modal-dialog-centered">
                <div class="modal-content rounded-7 shadow">
                    <div class="modal-header CustomModal">
                    
                         <h5 class="ModalTitle">
                            <div class="IconBox">
                                <iconify-icon icon="hugeicons:ai-user"></iconify-icon>
                            
                            </div>
                            <div class="TitleVox">
                             Edit Bank Details
                          <span>Update Customer Bank details.</span>
                            </div>
                        

                        </h5>
                        <button type="button" class="btnClose btn btn-sm btn-bg-transparent" data-bs-dismiss="modal">
                            <iconify-icon icon="oui:cross"></iconify-icon>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Account Holder Name <span class="requiredLabel">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter account holder's name">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Bank Name <span class="requiredLabel">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter bank name">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Account Number <span class="requiredLabel">*</span></label>
                                                <input type="number" class="form-control accountnumber-input" placeholder="Enter bank account number">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Confirm Account Number <span class="requiredLabel">*</span></label>
                                                <input type="number" class="form-control confirmnumber-input" placeholder="Re-enter account number for confirmation">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">IFSC Code <span class="requiredLabel">*</span></label>
                                                <input type="text" class="form-control ifsc-input" placeholder="Enter IFSC code">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Branch Name</label>
                                                <input type="text" class="form-control" placeholder="Enter branch name (optional)">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="monthlyIncome" class="form-label">
                                                   Bank Statement<span
                                                        class="requiredLabel">*</span>
                                                </label>
                                                <!-- Signature Upload -->
                                                <div class="upload-wrapper" data-title="Bank Statement"></div>
                                            </div>
                                        </div>


                                    </div>
                </div>
                <div class="modal-footer">
                   <button class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                   <button class="btn btn-theme" data-bs-dismiss="modal">Update</button>
                </div>
             
            </div>
        </div>
    </div>
<!----------------------------------------------------------------------------
  Edit Edit Bank Details Modern Modal style 1 Code Here End Here
--------------------------------------------------------------------------->

   <!---------------------------------------------------------
 Bank details Modern Modal style 1 Code Here Start Here
----------------------------------------------------------->
   
   <div class="modernModalWrapper">
  <div class="modal fade" id="BankVerifyModal" tabindex="-1" aria-labelledby="BankVerifyModal" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content rounded-7 shadow">

        <!-- Modal Header -->
        <div class="ModalHead">
          <h5 class="fw-semibold">
            <iconify-icon icon="fluent:warning-28-regular"></iconify-icon>
            Confirmation Required
          </h5>
          <button type="button" class="btnClose btn btn-sm btn-bg-transparent" data-bs-dismiss="modal">
            <iconify-icon icon="oui:cross"></iconify-icon>
          </button>
        </div>

        <!-- Modal Body -->
        <div class="modal-body">
          <div class="ContentWrapper">
            <h4>Verify Bank Details</h4>
            <p>
              Please confirm that you have thoroughly reviewed the bank information submitted by
              <strong>Atul Sharma</strong>. This includes verifying the account holder name, account number, IFSC code, branch details, and uploaded statements (if any).
            </p>

            <!-- Footer Buttons -->
            <div class="FooterActionStyle1">
              <button class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
              <button class="btn btn-theme" data-bs-dismiss="modal">Yes, Verified</button>
            </div>
          </div>
        </div>

        <!-- Optional Branding -->
        <div class="silverrightloog">
          <img src="dist/img/newimages/silverlogo.png" alt="logo">
        </div>

      </div>
    </div>
  </div>
</div>




 <!----------------------------------------------------
 Bank details Modern Modal style 1 Code Here End Here
   ------------------------------------------------------->


    <!----------------------------------------------------
    Bank details Rejection Modern Modal style 1 Code Here Start Here
   ------------------------------------------------------->


   <div class="modernModalWrapper ModernWraper-style2">
  <div class="modal fade" id="BankRejectModal" tabindex="-1" aria-labelledby="BankRejectModal" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content rounded-7 shadow">

        <!-- Modal Header -->
        <div class="ModalHead">
          <h5 class="fw-semibold">
            <iconify-icon icon="fluent:warning-28-regular"></iconify-icon>
            Reject Confirmation
          </h5>
          <button type="button" class="btnClose btn btn-sm btn-bg-transparent" data-bs-dismiss="modal">
            <iconify-icon icon="oui:cross"></iconify-icon>
          </button>
        </div>

        <!-- Modal Body -->
        <div class="modal-body">
          <div class="ContentWrapper">
            <h4>Reject Bank Details</h4>
            <p>
              You are about to reject the bank details submitted by <strong>Atul Sharma</strong>.<br>
              This may include incorrect account information, mismatched IFSC code, or missing statement uploads.<br>
              Please provide a reason for rejection. You can optionally notify the customer via Email and/or SMS.
            </p>

            <!-- Notification Checkboxes -->
                        <!-- Modern Checkboxes -->
            <div class="d-flex gap-4 mt-3">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="customCheckList8">
                    <label class="form-check-label" for="customCheckList8">
                            Send reason via Email
                    </label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="customCheckList9">
                    <label class="form-check-label" for="customCheckList9">
                            Send reason via SMS
                    </label>
                </div>
             
            </div>

            <!-- Rejection Reason Textarea -->
            <div class="ModernTextArea mt-3">
              <textarea class="form-textarea" rows="4" placeholder="Enter rejection reason..." required></textarea>
            </div>

            <!-- Footer Buttons -->
            <div class="FooterActionStyle2 mt-4">
              <button class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
              <button class="btn btn-danger" data-bs-dismiss="modal">Reject Details</button>
            </div>
          </div>
        </div>

        <!-- Optional Branding -->
        <div class="silverrightloog">
          <img src="dist/img/newimages/silverlogo.png" alt="logo">
        </div>

      </div>
    </div>
  </div>
</div>



    <!----------------------------------------------------------------
     Bank details Rejection Modern Modal style 1 Code Here End Here
   ------------------------------------------------------------------->
  <!----------------------------------------------------
   KYC Verified Modern Modal style 1 Code Here Start Here
   ------------------------------------------------------->
   
   <div class="modernModalWrapper">
  <div class="modal fade" id="KYCverifyModal" tabindex="-1" aria-labelledby="KYCverifyModal" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content rounded-7 shadow">

        <!-- Modal Header -->
        <div class="ModalHead">
          <h5 class="fw-semibold">
            <iconify-icon icon="fluent:warning-28-regular"></iconify-icon>
            Confirmation Required
          </h5>
          <button type="button" class="btnClose btn btn-sm btn-bg-transparent" data-bs-dismiss="modal">
            <iconify-icon icon="oui:cross"></iconify-icon>
          </button>
        </div>

        <!-- Modal Body -->
        <div class="modal-body">
          <div class="ContentWrapper">
            <h4>Verify KYC Documents</h4>
            <p>
              Please confirm that you have thoroughly reviewed the KYC documents submitted by
              <strong>Atul Sharma</strong>, including Aadhaar, PAN, and proof of address. <br>
              This also includes any documents submitted by associated partners (e.g., Partner 1 and Partner 2).
            </p>

            <!-- Footer Buttons -->
            <div class="FooterActionStyle1">
              <button class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
              <button class="btn btn-theme" data-bs-dismiss="modal">Yes, Verified</button>
            </div>
          </div>
        </div>

        <!-- Optional Footer Branding -->
        <div class="silverrightloog">
          <img src="dist/img/newimages/silverlogo.png" alt="logo">
        </div>

      </div>
    </div>
  </div>
</div>


 <!----------------------------------------------------
   KYC Verified Modern Modal style 1 Code Here End Here
   ------------------------------------------------------->


    <!----------------------------------------------------
   KYC Rejection Modern Modal style 1 Code Here Start Here
   ------------------------------------------------------->


   <div class="modernModalWrapper ModernWraper-style2">
  <div class="modal fade" id="KYCRejectModal" tabindex="-1" aria-labelledby="RejectModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content rounded-7 shadow">

        <!-- Modal Header -->
        <div class="ModalHead">
          <h5 class="fw-semibold">
            <iconify-icon icon="fluent:warning-28-regular"></iconify-icon>
            Reject Confirmation
          </h5>
          <button type="button" class="btnClose btn btn-sm btn-bg-transparent" data-bs-dismiss="modal">
            <iconify-icon icon="oui:cross"></iconify-icon>
          </button>
        </div>

        <!-- Modal Body -->
        <div class="modal-body">
          <div class="ContentWrapper">
            <h4>Reject KYC Documents</h4>
            <p>
              You are about to reject the KYC documents submitted by <strong>Atul Sharma</strong>.<br>
              This may include Aadhaar, PAN, address proof, and documents from associated partners (if applicable).
              Please provide a reason for rejection. You can optionally notify the customer via Email and/or SMS.
            </p>

            <!-- Notification Checkboxes -->
                        <!-- Modern Checkboxes -->
            <div class="d-flex gap-4 mt-3">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="customCheckList6">
                    <label class="form-check-label" for="customCheckList6">
                            Send reason via Email
                    </label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="customCheckList7">
                    <label class="form-check-label" for="customCheckList7">
                            Send reason via SMS
                    </label>
                </div>
             
            </div>

            <!-- Rejection Reason Textarea -->
            <div class="ModernTextArea mt-3">
              <textarea class="form-textarea" rows="4" placeholder="Enter rejection reason..." required></textarea>
            </div>

            <!-- Footer Buttons -->
            <div class="FooterActionStyle2 mt-4">
              <button class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
              <button class="btn btn-danger" data-bs-dismiss="modal">Reject KYC</button>
            </div>
          </div>
        </div>

        <!-- Optional Branding -->
        <div class="silverrightloog">
          <img src="dist/img/newimages/silverlogo.png" alt="logo">
        </div>

      </div>
    </div>
  </div>
</div>


    <!----------------------------------------------------
   KYC Rejection Modern Modal style 1 Code Here End Here
   ------------------------------------------------------->


   <!--------------------------------
   Modern Modal style 1 Code Here Start Here
   --------------------------------->
   <div class="modernModalWrapper">
        <div class="modal fade" id="VerifyModal" tabindex="-1" aria-labelledby="emailComposerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content rounded-7 shadow">
                  <div class="ModalHead">
                    <h5 class="fw-semibold"><iconify-icon icon="fluent:warning-28-regular"></iconify-icon> Confirmation Required</h5>
                    <button type="button" class="btnClose btn btn-sm btn-bg-transparent" data-bs-dismiss="modal"><iconify-icon icon="oui:cross"></iconify-icon></button>
                </div>
            <div class="modal-body">
                <!-- Header -->
              
              <div class="ContentWrapper">
                <h4>Verify Personal Details</h4>
                <p>Please confirm that you have reviewed and are proceeding to verify the personal details of <strong>Atul Sharma</strong>.</p>
              <!-- Footer Buttons -->
                <div class="FooterActionStyle1">
                    <button class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-theme" data-bs-dismiss="modal">Yes, Verified !</button>
                </div>
            </div>
             
            </div>
            <!-- <div class="modal-footer">
                
            </div> -->
            <div class="silverrightloog">
            <img src="dist/img/newimages/silverlogo.png" alt="">
        </div>
            </div>
        </div>
        </div>
   </div>

  <!--------------------------------
   Modern Modal style 1 Code Here End Here
   --------------------------------->

   <!--------------------------------
   Modern Modal style 2 Code Here Start Here
   --------------------------------->
  <div class="modernModalWrapper ModernWraper-style2">
  <div class="modal fade" id="RejectModal" tabindex="-1" aria-labelledby="RejectModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content rounded-7 shadow">

        <!-- Modal Header -->
        <div class="ModalHead">
          <h5 class="fw-semibold">
            <iconify-icon icon="fluent:warning-28-regular"></iconify-icon>
            Reject Confirmation
          </h5>
          <button type="button" class="btnClose btn btn-sm btn-bg-transparent" data-bs-dismiss="modal">
            <iconify-icon icon="oui:cross"></iconify-icon>
          </button>
        </div>

        <!-- Modal Body -->
        <div class="modal-body">
          <div class="ContentWrapper">
            <h4>Reject Personal Details</h4>
            <p>
              You are about to reject the personal details submitted by <strong>Atul Sharma</strong>.<br>
              Please provide a reason for rejection. You can choose to notify the customer via Email and/or SMS.
            </p>

            <!-- Modern Checkboxes -->
            <div class="d-flex gap-4 mt-3">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="customCheckList4">
                    <label class="form-check-label" for="customCheckList4">
                            Send reason via Email
                    </label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="customCheckList5">
                    <label class="form-check-label" for="customCheckList5">
                            Send reason via SMS
                    </label>
                </div>
             
            </div>

            <!-- Rejection Reason Textarea -->
            <div class="ModernTextArea mt-3">
              <textarea class="form-textarea" rows="4" placeholder="Enter rejection reason..." required></textarea>
            </div>

            <!-- Footer Buttons -->
            <div class="FooterActionStyle2 mt-4">
              <button class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
              <button class="btn btn-danger" data-bs-dismiss="modal">Confirm Rejection</button>
            </div>
          </div>
        </div>

        <!-- Optional Branding -->
        <div class="silverrightloog">
          <img src="dist/img/newimages/silverlogo.png" alt="logo">
        </div>

      </div>
    </div>
  </div>
</div>


  <!--------------------------------
   Modern Modal style 2 Code Here End Here
   --------------------------------->
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
      kycTabWrapper.querySelector(`#${target}`).classList.add('KYC-active');
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
        document.addEventListener("change", function(event) {
            if (event.target.classList.contains("uploadProfileInput")) {
                var triggerInput = event.target;
                var currentImg = triggerInput.closest(".pic-holder").querySelector(".pic").src;
                var holder = triggerInput.closest(".pic-holder");
                var wrapper = triggerInput.closest(".profile-pic-wrapper");
                var alerts = wrapper.querySelectorAll('[role="alert"]');
                alerts.forEach(function(alert) {
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
                    reader.onloadend = function() {
                        holder.classList.add("uploadInProgress");
                        holder.querySelector(".pic").src = this.result;
                        var loader = document.createElement("div");
                        loader.classList.add("upload-loader");
                        loader.innerHTML =
                            '<div class="spinner-border text-primary" role="status"><span class="sr-only">Loading...</span></div>';
                        holder.appendChild(loader);
                        setTimeout(function() {
                            holder.classList.remove("uploadInProgress");
                            loader.remove();
                            var random = Math.random();
                            if (random < 0.9) {
                                wrapper.innerHTML +=
                                    '<div class="snackbar show" role="alert"><i class="fa fa-check-circle text-success"></i> Store image updated successfully</div>';
                                triggerInput.value = "";
                                // Hide the label by setting opacity to 0
                                wrapper.querySelector(".upload-file-block").style.opacity = "0";
                                setTimeout(function() {
                                    wrapper.querySelector('[role="alert"]').remove();
                                }, 3000);
                            } else {
                                holder.querySelector(".pic").src = currentImg;
                                wrapper.innerHTML +=
                                    '<div class="snackbar show" role="alert"><i class="fa fa-times-circle text-danger"></i> There is an error while uploading! Please try again later.</div>';
                                triggerInput.value = "";
                                setTimeout(function() {
                                    wrapper.querySelector('[role="alert"]').remove();
                                }, 3000);
                            }
                        }, 1500);
                    };
                } else {
                    wrapper.innerHTML +=
                        '<div class="alert alert-danger d-inline-block p-2 small" role="alert">Please choose a valid image.</div>';
                    setTimeout(function() {
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
                $('#permanent_pin').val($('input[placeholder="Enter your pin code"]').val());
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
            clone.querySelector(".remove-partner-btn").addEventListener("click", function() {
                this.closest(".partner-kyc-item").remove();
                updatePartnerTitles();
            });
            container.appendChild(clone);
            initUploader(container.lastElementChild.querySelectorAll('.upload-wrapper')); // init uploaders
            updatePartnerTitles();
        }
        addCheckbox.addEventListener("change", function() {
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
                            const fileSizeMB = (file.size / (1024 * 1024)).toFixed(2) + 'MB';
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

     
<!-- Mark as Approved button js and move to the customer approved list -->
<script>
  const approveBtn = document.getElementById('markVASAPprovedBtn');
  const approvalCheckbox = document.getElementById('approvalCheckbox');
  let showModal = false;

  approveBtn.addEventListener('click', function () {
    // Only trigger modal if checkbox is not already checked
    if (!approvalCheckbox.checked) {
      showModal = true;
      const modal = new bootstrap.Modal(document.getElementById('CustomerApprovalModal'));
      modal.show();
    } else {
      // If unchecked manually, no action needed
      approvalCheckbox.checked = false;
    }
  });

  // YES: redirect
  document.querySelector('.ApprovalYesBtn').addEventListener('click', function () {
    approvalCheckbox.checked = true; // Confirm check
    window.location.href = 'customer-approved.php';
  });

  // CANCEL: uncheck
  document.querySelector('.ApprovalCancelBtn').addEventListener('click', function () {
    approvalCheckbox.checked = false;
  });
</script>