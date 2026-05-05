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
    [data-footer=simple] .hk-footer, .footer-simple-example .hk-footer {
    z-index: 1;
}
</style>

</style>

<div class="container-xxl">

    <!-- Page Body Start-->
    <div class="hk-pg-body py-0">
        <div class="contactapp-wrap">

            <div class="contactapp-content">
                <div class="contactapp-detail-wrap">
                    <div class="contact-body">
                        <div class="contact-list-view">
                              <div class="row">
                <div class="col-lg-12">
                    <div class="role-main-sec">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Role Details</h5>
                            </div>
                            <div class="card-body">
                                <div class="row p-0">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="#">Role Name</label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                     <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="#">Description</label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <div class="permission-main-wrap">
                                <h3>User Permission</h3>
                                 <!-- <h6 class="product-hadding">Dashboard Permission   </h6> -->
                                <div class="multipermissions_list">
                                    <ul id="todo_list" class="advance-list">
                                        <li class="advance-list-item single-task-list width-100">
                                            <div class="prroleBox">
                                                <div class="moduleNM">
                                                    <div class="flex items-center gap-2">
                                                        <input id="selectAllClient" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" onchange="toggleCheckboxes(this, this.closest('.prroleBox'))">
                                                        <h5 onclick="toggleCheckboxOnHeaderClick(this)">Dashboard</h5>
                                                    </div>
                                                </div>
                                                <div class="prmission">
                                                    <div class="flex items-center gap-2">
                                                        <input id="dashboardTileView" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                        <label for="dashboardTileView" class="align-middle">Daily Application Overview</label>
                                                    </div>
                                                    <div class="flex items-center gap-2">
                                                        <input id="dashboardGraphView" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                        <label for="dashboardGraphView" class="align-middle">Loan Breakdown Overview</label>
                                                    </div>
                                                    <div class="flex items-center gap-2">
                                                        <input id="dashboardActivityView" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                        <label for="dashboardActivityView" class="align-middle">Recent System Activity</label>
                                                    </div>
                                                      <div class="flex items-center gap-2">
                                                        <input id="dashboardCustomerView" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                        <label for="dashboardCustomerView" class="align-middle">New Customer</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                               
                                <div class="multipermissions_list">
                                    <ul id="todo_list_suppliers" class="advance-list">
                                        <li class="advance-list-item single-task-list width-100">
                                            <div class="prroleBox">
                                                <div class="moduleNM">
                                                    <div class="flex items-center gap-2">
                                                        <input id="selectAllLocation" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" onchange="toggleCheckboxes(this, this.closest('.prroleBox'))">
                                                        <h5 onclick="toggleCheckboxOnHeaderClick(this)">Customer</h5>
                                                    </div>
                                                </div>
                                                <div class="prmission">
                                                    <div class="flex items-center gap-2">
                                                        <input id="suppliersAdd" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                        <label for="suppliersAdd" class="align-middle">Verify</label>
                                                    </div>
                                                    <div class="flex items-center gap-2">
                                                        <input id="suppliersEdit" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                        <label for="suppliersEdit" class="align-middle">Reject</label>
                                                    </div>
                                                    <div class="flex items-center gap-2">
                                                        <input id="suppliersView" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                        <label for="suppliersView" class="align-middle">Edit</label>
                                                    </div>
                                                    <div class="flex items-center gap-2">
                                                        <input id="suppliersDelete" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                        <label for="suppliersDelete" class="align-middle">Mark Profile Approved</label>
                                                    </div>
                                                       <div class="flex items-center gap-2">
                                                        <input id="suppliersVideo" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                        <label for="suppliersVideo" class="align-middle">Video KYC Call</label>
                                                    </div>
                                                    <div class="flex items-center gap-2">
                                                        <input id="suppliersProfile" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                        <label for="suppliersProfile" class="align-middle">Profile Activity</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                             
                                <div class="multipermissions_list">
                                    <ul id="todo_list_clients" class="advance-list">
                                        <li class="advance-list-item single-task-list width-100">
                                            <div class="prroleBox">
                                                <div class="moduleNM">
                                                    <div class="flex items-center gap-2">
                                                        <input id="selectAllTask" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" onchange="toggleCheckboxes(this, this.closest('.prroleBox'))">
                                                        <h5 onclick="toggleCheckboxOnHeaderClick(this)">KYC Business Management</h5>
                                                    </div>
                                                </div>
                                                <div class="prmission">
                                                    <div class="flex items-center gap-2">
                                                        <input id="clientsAdd" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                        <label for="clientsAdd" class="align-middle">Reject</label>
                                                    </div>
                                                    <div class="flex items-center gap-2">
                                                        <input id="clientsEdit" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                        <label for="clientsEdit" class="align-middle">Send to credit team</label>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="multipermissions_list">
                                    <ul id="todo_list_payment" class="advance-list">
                                        <li class="advance-list-item single-task-list width-100">
                                            <div class="prroleBox">
                                                <div class="moduleNM">
                                                    <div class="flex items-center gap-2">
                                                        <input id="selectAllStaffPermission" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" onchange="toggleCheckboxes(this, this.closest('.prroleBox'))">
                                                        <h5 onclick="toggleCheckboxOnHeaderClick(this)">Credit Assessment Status</h5>
                                                    </div>
                                                </div>
                                                <div class="prmission">
                                                    <div class="flex items-center gap-2">
                                                        <input id="paymentView" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                        <label for="paymentView" class="align-middle">Complete Credit Assessment </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
              
                                <div class="multipermissions_list">
                                    <ul id="todo_list_simple_products" class="advance-list">
                                        <li class="advance-list-item single-task-list width-100">
                                            <div class="prroleBox">
                                                <div class="moduleNM">
                                                    <div class="flex items-center gap-2">
                                                        <input id="selectAllViewClient" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" onchange="toggleCheckboxes(this, this.closest('.prroleBox'))">
                                                        <h5 onclick="toggleCheckboxOnHeaderClick(this)">Customer Consent</h5>
                                                    </div>
                                                </div>
                                                <div class="prmission">
                                                    <div class="flex items-center gap-2">
                                                        <input id="simpleProductsAdd" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                        <label for="simpleProductsAdd" class="align-middle">Schedule Disbursement</label>
                                                    </div>
                                                    <div class="flex items-center gap-2">
                                                        <input id="simpleProductsEdit" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                        <label for="simpleProductsEdit" class="align-middle">Reject Disbursement</label>
                                                    </div>
                                                    <div class="flex items-center gap-2">
                                                        <input id="simpleProductsView" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                        <label for="simpleProductsView" class="align-middle">Disbursed Now</label>
                                                    </div>
                                                    <div class="flex items-center gap-2">
                                                        <input id="simpleProductsDelete" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                        <label for="simpleProductsDelete" class="align-middle">Mask As Paid</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="multipermissions_list">
                                    <ul id="todo_list_combo_products" class="advance-list">
                                        <li class="advance-list-item single-task-list width-100">
                                            <div class="prroleBox">
                                                <div class="moduleNM">
                                                    <div class="flex items-center gap-2">
                                                        <input id="selectAllViewStaff" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" onchange="toggleCheckboxes(this, this.closest('.prroleBox'))">
                                                        <h5 onclick="toggleCheckboxOnHeaderClick(this)">Manage Categories</h5>
                                                    </div>
                                                </div>
                                                <div class="prmission">
                                                    <div class="flex items-center gap-2">
                                                        <input id="comboProductsAdd" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                        <label for="comboProductsAdd" class="align-middle">Add</label>
                                                    </div>
                                                    <div class="flex items-center gap-2">
                                                        <input id="comboProductsEdit" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                        <label for="comboProductsEdit" class="align-middle">Edit</label>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="multipermissions_list">
                                    <ul id="todo_list_expired_products" class="advance-list">
                                        <li class="advance-list-item single-task-list width-100">
                                            <div class="prroleBox">
                                                <div class="moduleNM">
                                                    <div class="flex items-center gap-2">
                                                        <input id="selectAllQuestionnaire" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" onchange="toggleCheckboxes(this, this.closest('.prroleBox'))">
                                                        <h5 onclick="toggleCheckboxOnHeaderClick(this)">Manage Products</h5>
                                                    </div>
                                                </div>
                                                <div class="prmission">
                                                    <div class="flex items-center gap-2">
                                                        <input id="expiredProductsView" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                        <label for="expiredProductsView" class="align-middle">Add</label>
                                                    </div>
                                                    <div class="flex items-center gap-2">
                                                        <input id="expiredProductsDelete" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                        <label for="expiredProductsDelete" class="align-middle">Edit</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="multipermissions_list">
                                    <ul id="todo_list_low_stocks" class="advance-list">
                                        <li class="advance-list-item single-task-list width-100">
                                            <div class="prroleBox">
                                                <div class="moduleNM">
                                                    <div class="flex items-center gap-2">
                                                        <input id="selectAllRoles" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" onchange="toggleCheckboxes(this, this.closest('.prroleBox'))">
                                                        <h5 onclick="toggleCheckboxOnHeaderClick(this)">Support</h5>
                                                    </div>
                                                </div>
                                                <div class="prmission">
                                                    <div class="flex items-center gap-2">
                                                        <input id="lowStocksEdit" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                        <label for="lowStocksEdit" class="align-middle">Mark all as closed</label>
                                                    </div>
                                                    <div class="flex items-center gap-2">
                                                        <input id="lowStocksView" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                        <label for="lowStocksView" class="align-middle">Status</label>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="multipermissions_list">
                                    <ul id="todo_list_category" class="advance-list">
                                        <li class="advance-list-item single-task-list width-100">
                                            <div class="prroleBox">
                                                <div class="moduleNM">
                                                    <div class="flex items-center gap-2">
                                                        <input id="selectAllTask2" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" onchange="toggleCheckboxes(this, this.closest('.prroleBox'))">
                                                        <h5 onclick="toggleCheckboxOnHeaderClick(this)">System Activity</h5>
                                                    </div>
                                                </div>
                                                <!-- <div class="prmission">
                                                    <div class="flex items-center gap-2">
                                                        <input id="categoryAdd" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                        <label for="categoryAdd" class="align-middle">Add</label>
                                                    </div>
                                                    <div class="flex items-center gap-2">
                                                        <input id="categoryEdit" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                        <label for="categoryEdit" class="align-middle">Edit</label>
                                                    </div>
                                                    <div class="flex items-center gap-2">
                                                        <input id="categoryView" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                        <label for="categoryView" class="align-middle">View</label>
                                                    </div>
                                                    <div class="flex items-center gap-2">
                                                        <input id="categoryDelete" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-orange-500 checked:border-orange-500 dark:after:text-orange-500 dark:checked:border-orange-800" type="checkbox" value="">
                                                        <label for="categoryDelete" class="align-middle">Delete</label>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                
                            </div>
                        <div class="FormSubmit_fix_container">
                            <a href="roles-permission.php" class="SaveDataBtn">
                                <button type="button" class="btn btn-primary commonUpdateButton">
                                <iconify-icon icon="ci:save"></iconify-icon> Update &amp; Save
                                </button>
                            </a>
                            <a href="role-permission.php"><button type="button" class="btn commonCancleButton">Cancel</button></a>
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

    <!-- /Page Body End-->

    
    <?php include('footer.php') ?>
<script>
        function toggleCheckboxes(checkbox, prroleBox) {
            const checkboxes = prroleBox.querySelectorAll('.prmission input[type="checkbox"]');
            checkboxes.forEach(cb => cb.checked = checkbox.checked);
        }

        function toggleCheckboxOnHeaderClick(header) {
            const checkbox = header.previousElementSibling;
            if (checkbox && checkbox.type === 'checkbox') {
                checkbox.checked = !checkbox.checked;
                toggleCheckboxes(checkbox, checkbox.closest('.prroleBox'));
            }
        }
    </script>