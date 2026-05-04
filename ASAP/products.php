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
                                            <div class="col-lg-8">
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
                                                        <div class="col-lg-5 col-sm-6 col-12">
                                                            <div class="input-blocks">
                                                                <div class="input-icon  position-relative">
                                                                    <span class="input-icon-addon">
                                                                       <iconify-icon icon="proicons:search" class="info-img"></iconify-icon>
                                                                    </span>
                                                                    <input type="text" class="form-control" placeholder="Search By Category & Product Name">
                                                                </div>

                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-lg-4 col-sm-6 col-12">
                                                            <div class="input-blocks">
                                                              
                                                                <div class="input-icon  position-relative">
                                                                    <span class="input-icon-addon">
                                                                        <i class="ti ti-calendar text-gray-9"></i>
                                                                    </span>
                                                                    <input type="text" class="form-control daterange"
                                                                        placeholder="dd/mm/yyyy - dd/mm/yyyy">
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-sm-6 col-12">
                                                            <div class="input-blocks">
                                                              
                                                                <iconify-icon icon="oui:app-users-roles"  class="info-img"></iconify-icon>
                                                                <select class="select2">
                                                                    <option disabled selected>Select Status</option>
                                                                    <option>Active</option>
                                                                    <option>Inactive</option>
                                                                </select>

                                                            </div>
                                                        </div>

                                                    
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="rightPrFilters">
                                                      <div class="contact-options-wrap">
                                                        <a href="#" class="btn d-flex align-items-center gap-2 btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#ProductAdd">
                                                            <iconify-icon icon="fluent-mdl2:add-to"></iconify-icon> Create Loan Product
                                                        </a>
                                                        <div class="v-separator d-lg-block d-none"></div>
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
                                                </div>
                                            </div>
                                            

                                        </div>
                                        <!-- /Filter -->
                                    </div>
                                    <table class="table common-datatable nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>Product Id</th>
                                                <th>Product Name</th>
                                                <th>Category</th>
                                                <th>Tenure</th>
                                                <th>Interest Type</th>
                                                <th>Interest Rate</th>
                                                <th>Processing Fee</th>
                                                <th>Created Date</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="#" class="customerID" data-bs-toggle="modal" data-bs-target="#ProductUpdate">PRD25001</a></td>
                                                <td>QuickBiz Boost</td>
                                                <td>Business Loan</td>
                                                <td>12 Months</td>
                                                <td>Flat</td>
                                                <td>14%</td>
                                                <td>₹2,000</td>
                                                <td>20/07/2025</td>
                                                <td><span class="badge badge-soft-success my-1 me-2">Active</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                        data-bs-toggle="modal" 
                                                        data-bs-target="#ProductUpdate"
                                                        title="Edit Product"
                                                        href="#">
                                                            <span class="icon">
                                                                <iconify-icon icon="basil:edit-outline"></iconify-icon>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                 <td><a href="#" class="customerID" data-bs-toggle="modal" data-bs-target="#ProductUpdate">PRD25002</a></td>
                                                <td>Solar Shakti</td>
                                                <td>Solar Loan</td>
                                                <td>24 Months</td>
                                                <td>Reducing</td>
                                                <td>11.5%</td>
                                                <td>₹1,500</td>
                                                <td>21/07/2025</td>
                                                <td><span class="badge badge-soft-success my-1 me-2">Active</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                        data-bs-toggle="modal" 
                                                        data-bs-target="#ProductUpdate"
                                                        title="Edit Product"
                                                        href="#">
                                                            <span class="icon">
                                                                <iconify-icon icon="basil:edit-outline"></iconify-icon>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                 <td><a href="#" class="customerID" data-bs-toggle="modal" data-bs-target="#ProductUpdate">PRD25003</a></td>
                                                <td>Agriculture Growth</td>
                                                <td>Agriculture Loan</td>
                                                <td>18 Months</td>
                                                <td>Fixed</td>
                                                <td>13%</td>
                                                <td>₹1,000</td>
                                                <td>22/07/2025</td>
                                                <td><span class="badge badge-soft-danger my-1 me-2">Inactive</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                        data-bs-toggle="modal" 
                                                        data-bs-target="#ProductUpdate"
                                                        title="Edit Product"
                                                        href="#">
                                                            <span class="icon">
                                                                <iconify-icon icon="basil:edit-outline"></iconify-icon>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                 <td><a href="#" class="customerID" data-bs-toggle="modal" data-bs-target="#ProductUpdate">PRD25004</a></td>
                                                <td>MSME Support Plan</td>
                                                <td>MSME Loan</td>
                                                <td>6 Months</td>
                                                <td>Flat</td>
                                                <td>15%</td>
                                                <td>₹1,200</td>
                                                <td>23/07/2025</td>
                                                <td><span class="badge badge-soft-success my-1 me-2">Active</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                        data-bs-toggle="modal" 
                                                        data-bs-target="#ProductUpdate"
                                                        title="Edit Product"
                                                        href="#">
                                                            <span class="icon">
                                                                <iconify-icon icon="basil:edit-outline"></iconify-icon>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                 <td><a href="#" class="customerID" data-bs-toggle="modal" data-bs-target="#ProductUpdate">PRD25005</a></td>
                                                <td>Machinery Flexi Plan</td>
                                                <td>Equipment Finance</td>
                                                <td>9 Months</td>
                                                <td>Reducing</td>
                                                <td>12%</td>
                                                <td>₹2,500</td>
                                                <td>24/07/2025</td>
                                                <td><span class="badge badge-soft-success my-1 me-2">Active</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                        data-bs-toggle="modal" 
                                                        data-bs-target="#ProductUpdate"
                                                        title="Edit Product"
                                                        href="#">
                                                            <span class="icon">
                                                                <iconify-icon icon="basil:edit-outline"></iconify-icon>
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


<!---------------------------------
Product Add Modal Code Start here
----------------------------------->
   <div class="ModalAddProduct">
    <div class="modal fade" id="ProductAdd" tabindex="-1" aria-labelledby="AddProductModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered   modal-dialog-scrollable">
            <div class="modal-content rounded-7 shadow">
                <div class="modal-header CustomModal">
                    <h5 class="ModalTitle">
                        <div class="IconBox">
                            <iconify-icon icon="fluent:document-bullet-list-20-regular"></iconify-icon>
                        </div>
                        <div class="TitleVox">
                            Create Loan Product
                            <span>Enter details to create a new loan product.</span>
                        </div>
                    </h5>
                    <button type="button" class="btnClose btn btn-sm btn-bg-transparent" data-bs-dismiss="modal">
                        <iconify-icon icon="oui:cross"></iconify-icon>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label">Product Name</label>
                                <input type="text" class="form-control" placeholder="Enter product name">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Category</label>
                                <select class="form-control select2">
                                    <option value="">Select Category</option>
                                    <option value="business">Business Loan</option>
                                    <option value="solar">Solar Loan</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Tenure</label>
                                <select class="form-control select2">
                                    <option value="">Select Tenure</option>
                                    <option value="6">6 Months</option>
                                    <option value="12">12 Months</option>
                                    <option value="24">24 Months</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Min Loan Amount</label>
                                <input type="number" class="form-control" placeholder="Enter min amount" min="0">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Max Loan Amount</label>
                                <input type="number" class="form-control" placeholder="Enter max amount" min="0">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Interest Type</label>
                                <select class="form-control select2">
                                    <option value="">Select Type</option>
                                    <option value="flat">Flat</option>
                                    <option value="reducing">Reducing</option>
                                    <option value="fixed">Fixed</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Interest Rate (%)</label>
                                <input type="number" class="form-control" placeholder="e.g., 12" step="0.01">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Processing Fee</label>
                                <input type="number" class="form-control" placeholder="Enter fee amount" step="0.01">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Pre-Closure Fee</label>
                                <input type="number" class="form-control" placeholder="Enter amount" step="0.01">
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-label">Late Payment Fee</label>
                                <input type="number" class="form-control" placeholder="Enter amount" step="0.01">
                            </div>
                        </div>

                        <div class="col-lg-4 px-0">
                            <div class="form-group">
                                <label class="form-label">Insurance Fee</label>
                                <input type="number" class="form-control" placeholder="Enter amount" step="0.01">
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-label">Platform Fee</label>
                                <input type="number" class="form-control" placeholder="Enter amount" step="0.01">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label">Description</label>
                                <textarea class="form-control formtextarea_height" placeholder="Enter product description" rows="3"></textarea>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-theme" data-bs-dismiss="modal">Create Product</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!---------------------------------
Product Add Modal Code End here
----------------------------------->
   

<!---------------------------------
Product Edit Modal Code Start here
----------------------------------->
   <div class="ModalAddProduct">
    <div class="modal fade" id="ProductUpdate" tabindex="-1" aria-labelledby="AddProductModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered   modal-dialog-scrollable">
            <div class="modal-content rounded-7 shadow">
                <div class="modal-header CustomModal">
                    <h5 class="ModalTitle">
                        <div class="IconBox">
                            <iconify-icon icon="fluent:document-bullet-list-20-regular"></iconify-icon>
                        </div>
                        <div class="TitleVox">
                            Update Loan Product
                            <span>Update details of loan product.</span>
                        </div>
                    </h5>
                    <button type="button" class="btnClose btn btn-sm btn-bg-transparent" data-bs-dismiss="modal">
                        <iconify-icon icon="oui:cross"></iconify-icon>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label">Product Name</label>
                                <input type="text" class="form-control" placeholder="Enter product name">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Category</label>
                                <select class="form-control select2">
                                    <option value="">Select Category</option>
                                    <option value="business">Business Loan</option>
                                    <option value="solar">Solar Loan</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Tenure</label>
                                <select class="form-control select2">
                                    <option value="">Select Tenure</option>
                                    <option value="6">6 Months</option>
                                    <option value="12">12 Months</option>
                                    <option value="24">24 Months</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Min Loan Amount</label>
                                <input type="number" class="form-control" placeholder="Enter min amount" min="0">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Max Loan Amount</label>
                                <input type="number" class="form-control" placeholder="Enter max amount" min="0">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Interest Type</label>
                                <select class="form-control select2">
                                    <option value="">Select Type</option>
                                    <option value="flat">Flat</option>
                                    <option value="reducing">Reducing</option>
                                    <option value="fixed">Fixed</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Interest Rate (%)</label>
                                <input type="number" class="form-control" placeholder="e.g., 12" step="0.01">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Processing Fee</label>
                                <input type="number" class="form-control" placeholder="Enter fee amount" step="0.01">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Pre-Closure Fee</label>
                                <input type="number" class="form-control" placeholder="Enter amount" step="0.01">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Late Payment Fee</label>
                                <input type="number" class="form-control" placeholder="Enter amount" step="0.01">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Insurance Fee</label>
                                <input type="number" class="form-control" placeholder="Enter amount" step="0.01">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Platform Fee</label>
                                <input type="number" class="form-control" placeholder="Enter amount" step="0.01">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Status</label>
                                <select class="select2">
                                    <option value="" disabled>Choose Status</option>
                                    <option value="Active" selected>Active</option>
                                    <option value="Inactive">Inactive</option>
                                    <!-- <option value="prefer_not_say">Prefer not to say</option> -->
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label">Description</label>
                                <textarea class="form-control formtextarea_height" placeholder="Enter product description" rows="3"></textarea>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-theme" data-bs-dismiss="modal">Update Product</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!---------------------------------
Product Add Modal Code End here
----------------------------------->
    <!-- /Page Body End-->
    <?php include('footer.php') ?>

 