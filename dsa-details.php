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
                         <div class="dsa-container">
                            <!-- Header -->
                            <div class="dsa-header">
                                <div class="dsa-header-left">
                                    <a href="#" class="dsa-back-link" onclick="history.back()"><iconify-icon icon="icon-park-outline:arrow-left"></iconify-icon> Back to DSA List</a>
                                </div>
                                <div class="dsa-header-right">
                                    <div class="dsa-header-actions">
                                        <button class="dsa-freeze-btn" id="freezeBtn" onclick="openFreezeModal()">
                                            ⊘ Freeze Account
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Profile Card -->
                            <div class="dsa-profile-card">
                                <div class="dsa-profile-content">
                                    <div class="dsa-avatar-cell">
                                        <div class="dsa-avatar">AK</div>
                                    </div>
                                    <div class="dsa-info-cell">
                                        <div class="dsa-name-row">
                                            <span class="dsa-name">Amit Kumar</span>
                                            <span class="dsa-status-badge dsa-pending" id="statusBadge" onclick="openApproveModal()">Pending <iconify-icon icon="prime:angle-right"></iconify-icon></span>
                                        </div>
                                        <div class="dsa-id">DSA202500001</div>
                                        <div class="dsa-contact-row">
                                            <div class="dsa-contact-item"><span><iconify-icon icon="carbon:email"></iconify-icon></span> amit.kumar@email.com</div>
                                            <div class="dsa-contact-item"><span><iconify-icon icon="mingcute:phone-line"></iconify-icon></span> +91 98765 43210</div>
                                            <div class="dsa-contact-item"><span><iconify-icon icon="lsicon:location-outline"></iconify-icon></span> Bengaluru, Karnataka</div>
                                            <div class="dsa-contact-item"><span><iconify-icon icon="solar:calendar-linear"></iconify-icon></span> Joined 15 Jan 2025</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Stats Cards -->
                            <div class="dsa-stats-row">
                                <div class="dsa-stat-card">
                                    <div class="dsa-stat-content">
                                        <div class="dsa-stat-icon-cell">
                                            <div class="dsa-stat-icon dsa-blue"><iconify-icon icon="lucide:list-tree"></iconify-icon></div>
                                        </div>
                                        <div class="dsa-stat-info-cell">
                                            <div class="dsa-stat-label">Total Leads</div>
                                            <div class="dsa-stat-value">156</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dsa-stat-card">
                                    <div class="dsa-stat-content">
                                        <div class="dsa-stat-icon-cell">
                                            <div class="dsa-stat-icon dsa-green"><iconify-icon icon="proicons:task-list"></iconify-icon></div>
                                        </div>
                                        <div class="dsa-stat-info-cell">
                                            <div class="dsa-stat-label">Converted Leads</div>
                                            <div class="dsa-stat-value dsa-green-text">98</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dsa-stat-card">
                                    <div class="dsa-stat-content">
                                        <div class="dsa-stat-icon-cell">
                                            <div class="dsa-stat-icon dsa-orange"><iconify-icon icon="tabler:progress"></iconify-icon></div>
                                        </div>
                                        <div class="dsa-stat-info-cell">
                                            <div class="dsa-stat-label">In Progress Leads</div>
                                            <div class="dsa-stat-value dsa-orange-text">32</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dsa-stat-card">
                                    <div class="dsa-stat-content">
                                        <div class="dsa-stat-icon-cell">
                                            <div class="dsa-stat-icon dsa-red"><iconify-icon icon="mdi:cancel"></iconify-icon></div>
                                        </div>
                                        <div class="dsa-stat-info-cell">
                                            <div class="dsa-stat-label">Rejected Leads</div>
                                            <div class="dsa-stat-value dsa-red-text">26</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dsa-stat-card">
                                    <div class="dsa-stat-content">
                                        <div class="dsa-stat-icon-cell">
                                            <div class="dsa-stat-icon dsa-purple"><iconify-icon icon="ic:twotone-percent"></iconify-icon></div>
                                        </div>
                                        <div class="dsa-stat-info-cell">
                                            <div class="dsa-stat-label">Conversion Ratio</div>
                                            <div class="dsa-stat-value">62.8%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card mx-4">
                            <div class="card-header">
                                <h6>All Leads</h6>
                            </div>
                            <div class="card-body p-0">
                                <div class="custom-datatable-filter">
									<table class="table common-datatable nowrap w-100">
										<thead>
											<tr>
                                                <th>UTM Links</th>
                                                <th>Lead Id</th>
                                              
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
                                                <a href="#" class="utmLink">vasap.in/?utm=lead01</a>
                                            </td>
                                            <td>
                                                <a href="#" class="customerID">LD202500001</a>
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
                                                <a href="#" class="utmLink">vasap.in/?utm=lead02</a>
                                            </td>
                                            <td>
                                                <a href="#" class="customerID">LD202500002</a>
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
                                                <a href="#" class="utmLink">vasap.in/?utm=lead03</a>
                                            </td>
                                            <td>
                                                <a href="#" class="customerID">LD202500003</a>
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
                                                <a href="#" class="utmLink">vasap.in/?utm=lead04</a>
                                            </td>
                                            <td>
                                                <a href="#" class="customerID">LD202500004</a>
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
                                                <a href="#" class="utmLink">vasap.in/?utm=lead05</a>
                                            </td>
                                            <td>
                                                <a href="#" class="customerID">LD202500005</a>
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


    <!-- Freeze Modal -->
    <div class="dsa-modal-overlay" id="freezeModal">
        <div class="dsa-modal">
            <div class="dsa-modal-icon dsa-warning">!</div>
            <div class="dsa-modal-title" id="freezeModalTitle">Freeze Account</div>
            <div class="dsa-modal-text" id="freezeModalText">
                Are you sure you want to freeze this DSA account? The DSA will not be able to access their account.
            </div>
            <div class="dsa-modal-actions">
                <button class="dsa-modal-btn dsa-cancel" onclick="closeModal('freezeModal')">Cancel</button>
                <button class="dsa-modal-btn dsa-danger" id="freezeConfirmBtn" onclick="toggleFreeze()">Freeze</button>
            </div>
        </div>
    </div>

    <!-- Approve Modal -->
    <div class="dsa-modal-overlay" id="approveModal">
        <div class="dsa-modal">
            <div class="dsa-modal-icon dsa-success">✓</div>
            <div class="dsa-modal-title">Approve DSA</div>
            <div class="dsa-modal-text">
                Are you sure you want to approve this DSA account? This will grant them full access to the platform.
            </div>
            <div class="dsa-modal-actions">
                <button class="dsa-modal-btn dsa-cancel" onclick="closeModal('approveModal')">Cancel</button>
                <button class="dsa-modal-btn dsa-success" onclick="approveDsa()">Approve</button>
            </div>
        </div>
    </div>
    <!-- /Page Body End-->
    <?php include('footer.php') ?>

	<script>
        let isFrozen = false;
        let isApproved = false;

        function openFreezeModal() {
            const modal = document.getElementById('freezeModal');
            const title = document.getElementById('freezeModalTitle');
            const text = document.getElementById('freezeModalText');
            const btn = document.getElementById('freezeConfirmBtn');

            if (isFrozen) {
                title.textContent = 'Unfreeze Account';
                text.textContent = 'Are you sure you want to unfreeze this DSA account? The DSA will regain access to their account.';
                btn.textContent = 'Unfreeze';
                btn.className = 'dsa-modal-btn dsa-success';
            } else {
                title.textContent = 'Freeze Account';
                text.textContent = 'Are you sure you want to freeze this DSA account? The DSA will not be able to access their account.';
                btn.textContent = 'Freeze';
                btn.className = 'dsa-modal-btn dsa-danger';
            }

            modal.classList.add('dsa-active');
        }

        function openApproveModal() {
            if (!isApproved) {
                document.getElementById('approveModal').classList.add('dsa-active');
            }
        }

        function closeModal(modalId) {
            document.getElementById(modalId).classList.remove('dsa-active');
        }

        function toggleFreeze() {
            isFrozen = !isFrozen;
            const btn = document.getElementById('freezeBtn');

            if (isFrozen) {
                btn.innerHTML = '✓ Unfreeze Account';
                btn.classList.add('dsa-frozen');
            } else {
                btn.innerHTML = '⊘ Freeze Account';
                btn.classList.remove('dsa-frozen');
            }

            closeModal('freezeModal');
        }

        function approveDsa() {
            isApproved = true;
            const badge = document.getElementById('statusBadge');
            badge.textContent = 'Approved';
            badge.className = 'dsa-status-badge dsa-approved';
            badge.style.cursor = 'default';
            badge.style.textDecoration = 'none';
            badge.onclick = null;
            closeModal('approveModal');
        }

        // Close modal on overlay click
        document.querySelectorAll('.dsa-modal-overlay').forEach(overlay => {
            overlay.addEventListener('click', function(e) {
                if (e.target === this) {
                    this.classList.remove('dsa-active');
                }
            });
        });
    </script>