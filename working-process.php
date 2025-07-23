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

    .ErrorWrapper {
    width: 100%;
    height: 90vh;
}
 
.ErrorWrapper .card {
    height: 90vh;
    border: none !important;
}
 
.networkerrorCard {
    text-align: center;
}
 
.Errornetwork_image img {
    width: 25%;
    margin: 0 auto;
}
 
.errorContent_wrap {
    padding: 20px 0px;
    width: 45%;
    margin: 0 auto;
}
 
.errorContent_wrap h2 {
    font-size: 30px;
    margin-bottom: 10px;
}
 
.errorContent_wrap p {
    font-size: 16px;
    color: #625b8d;
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
                            

                           <div class="ErrorWrapper">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="networkerrorCard">
                                                    <div class="Errornetwork_image">
                                                        <img src="dist/img/newimages/work-process.jpg" alt="">
                                                    </div>
                                                   <div class="errorContent_wrap">
                                                        <h2>Design in Progress</h2>
                                                        <p>This section is currently in the design phase as we work to create a better experience for you. We're finalizing the layout and content — please check back soon for updates!</p>
                                                       
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




       





            <!-- /Page Body End-->
            <?php include('footer.php') ?>


