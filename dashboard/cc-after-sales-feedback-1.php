 <?php
    require_once('script.php');
    $pg = "cc";
    $subpg = "after";

	date_default_timezone_set("Asia/Kuala_Lumpur");

?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-layout-mode="dark">
<head>
    <meta charset="utf-8">
    <title>Call Center | After Sales Enquiry | Customer Feedback Form | <?php echo $base_name; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- HEADER CONS SECTION -->
    <?php include "inc/header-cons.php"; ?>
    <!-- END OF HEADER CONS SECTION -->

    <!-- COLOR THEME SECTION -->
    <?php include "inc/master-theme.php"; ?>
    <!-- END OF COLOR THEME SECTION -->

    <!-- DATATABLE CSS -->
    <?php include "inc/datatable-css.php"; ?>
    <!-- END OF DATATABLE CSS -->
    <style>
        #info_div {
            margin-bottom: 0;
        }
        #info_div_title {
            font-size: 15px;
            font-weight: 500;
            line-height: 1.4;
            margin-bottom: 0;
        }
        #tb-box {
            margin-bottom: 25px;
        }
        .table-cse th:nth-child(2), .table-cse td:nth-child(2),
        .table-cse th:nth-child(3), .table-cse td:nth-child(3),
        .table-cse th:nth-child(4), .table-cse td:nth-child(4),
        .table-cse th:nth-child(5), .table-cse td:nth-child(5),
        .table-cse th:nth-child(6), .table-cse td:nth-child(6) {
            text-align: center;
        }
    </style>

</head>
<body class="body-d">
    <div id="layout-wrapper">

        <!-- HEADER SECTION -->
        <?php include "inc/header.php"; ?>
        <!-- END OF HEADER SECTION -->

        <!-- SIDEBAR SECTION -->
        <?php include "inc/sidebar.php"; ?>
        <!-- END OF SIDEBAR SECTION -->

        <div class="vertical-overlay"></div>

        <div class="main-content">

             <!-- BREADCRUMB SECTION -->
             <section id="bc-section">
                <div id="bc-div">
                    <a href="<?php echo $base_url_dashboard; ?>"><i class="ri-dashboard-2-line"></i></a>
                    <span id="bc-arrow"><i class="ri-arrow-right-s-line"></i></span>                    
                    Call Center
                    <span id="bc-arrow"><i class="ri-arrow-right-s-line"></i></span>                    
                    <a href="<?php echo $base_url_dashboard; ?>/cc-after-sales.php">After Sales Enquiry</a>
                    <span id="bc-arrow"><i class="ri-arrow-right-s-line"></i></span>
                    <span id="bc-active">Customer Feedback Form</span>
                </div>
            </section>
            <!-- END OF BREADCRUMB SECTION -->

            <div class="page-content">
                <section id="general-section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="add-btn-div">
                                    <a href="<?php echo $base_url_dashboard; ?>/cc-after-sales-feedback-add.php" id="general-btn" class="btn1"><i class="ri-add-fill"></i>Add Customer Feedback Form</a>
                                </div>
                            </div>
                            <!-- <div class="col-lg-4">
                                <div id="tb-box" class="general-box">
                                    <div id="table-padding">
                                        <div id="tb-title-div">
                                            <p id="tb-title">Customer Basic Information</p>
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div id="info_div">
                                                        <p id="info_div_title">Customer Name : Mohamad
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div id="info_div">
                                                        <p id="info_div_title">Contact Number : 011-10256245
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div id="info_div">
                                                        <p id="info_div_title">Car Model : Persona
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div id="info_div">
                                                        <p id="info_div_title">Number Plate : WKP7233
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div id="info_div">
                                                        <p id="info_div_title">Outlet : Damansara Damai
                                                    </div>
                                                </div>
                                            </div>
                                            <?php if (isset($_GET['add'])) { $register = $_GET['add']; if ($register == 'succ') { ?>
                                            <div class="alert alert-success" role="alert">
                                                <p class="alert-heading">Customer Feedback Form Added Successfully.</p>
                                            </div>
                                            <?php } } ?>
                                            <?php if (isset($_GET['delete'])) { $register = $_GET['delete']; if ($register == 'succ') { ?>
                                            <div class="alert alert-success" role="alert">
                                                <p class="alert-heading">Customer Feedback Form Deleted Successfully.</p>
                                            </div>
                                            <?php } } ?>
                                            <?php if (isset($_GET['update'])) { $register = $_GET['update']; if ($register == 'succ') { ?>
                                            <div class="alert alert-success" role="alert">
                                                <p class="alert-heading">Customer Feedback Form Edited Successfully.</p>
                                            </div>
                                            <?php } } ?>
                                            <?php if (isset($_GET['process'])) { $register = $_GET['process']; if ($register == 'invalid') { ?>
                                            <div class="alert alert-danger" role="alert">
                                                <p class="alert-heading">Process Invalid.</p>
                                            </div>
                                            <?php } } ?>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-lg-12">
                                <div id="tb-box" class="general-box">
                                    <div id="tb-border-line">
                                        <div id="tb-title-div">
                                            <p id="tb-title">Customer Feed Back Form</p>
                                            <div id="info_div">
                                                <p id="info_div_title">Customer Name : <b>Mohamad</b></p>
                                                <p id="info_div_title">Contact Number : <b>011-10256245</b></p>
                                                <p id="info_div_title">Car Model : <b>Persona</b></p>
                                                <p id="info_div_title">Number Plate : <b>WKP7233</b></p>
                                                <p id="info_div_title">Outlet : <b>Damansara Damai</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="table-padding">
                                        <div id="table-div">
                                            <table id="example" class="table-cse table table-bordered table-striped align-middle">
                                                <thead>
                                                    <tr>   
                                                        <th>Key In By</th>
                                                        <th>Date Time</th>
                                                        <th>Service</th>
                                                        <th>Sent to Operation</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Alvin</td>
                                                        <td>2023-12-20 <span id="tb-time-p">12:45 pm</span></td>
                                                        <td>Tint & Coat</td>
                                                        <td>Yes</td>
                                                        <td><b class="tb-orange-p">Pending</b></td>
                                                        <td>
                                                            <div id="tb-act-btn-div">
                                                                <!-- <a href="<?php echo $base_url_dashboard; ?>/customer-feedback-form.php" class="tb-ac-btn" id="tb-ac-btn-5" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Edit Customer Feedback Form"><i class="ri-survey-line"></i></a>
                                                                <a href="javascript:void(0);" class="tb-ac-btn" id="tb-ac-btn-3" data-bs-toggle="modal" data-bs-target="#RemarksModal" title="View Remarks"><i class="ri-chat-quote-line"></i></a> -->
                                                                <a href="<?php echo $base_url_dashboard; ?>/cc-after-sales-feedback-edit.php" class="tb-ac-btn" id="tb-ac-btn-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Edit Customer Feedback Form" ><i class="ri-edit-2-line"></i></a>
                                                                <a href="javascript:void(0);" class="tb-ac-btn" id="tb-ac-btn-2" data-bs-toggle="modal" data-bs-target="#DeleteModal"><i class="ri-delete-bin-6-line"></i></a>
                                                            </div>

                                                            <!-- VIEW REMARKS MODAL -->
                                                            <div id="RemarksModal" class="modal fade flip" tabindex="-1" aria-labelledby="flipModalLabel" aria-hidden="true" style="display: none;">
                                                                <div class="modal-dialog modal-dialog-centered" id="md-dialog">
                                                                    <div class="modal-content" id="md-content">
                                                                        <form method="POST" name="delete_form" action="">
                                                                            <div class="modal-header">
                                                                                <p id="modal-title">Feedback & Remarks</p>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div id="modal-div" style="text-align: left;">
                                                                                <p id="modal-sub-title">Customer Feedback</p>
                                                                                <p id="modal-p">Feedback display here. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                                                <p id="modal-sub-title">Remarks</p>
                                                                                <p id="modal-p">Remarks display here. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- END OF VIEW REMARKS MODAL -->

                                                            <!-- DELETE MODAL -->
                                                            <div id="DeleteModal" class="modal fade flip" tabindex="-1" aria-labelledby="flipModalLabel" aria-hidden="true" style="display: none;">
                                                                <div class="modal-dialog modal-dialog-centered" id="md-dialog">
                                                                    <div class="modal-content" id="md-content">
                                                                        <form method="POST" name="delete_form" action="">
                                                                            <div class="modal-header">
                                                                                <p id="modal-title">Delete After Sales Enquiry</p>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div id="modal-div" style="text-align: left;">
                                                                                <p id="modal-p" style="margin-bottom: 5px;">Are you sure you want to delete this After Sales Enquiry?</p>
                                                                            </div>
                                                                            <div id="modal-btn-div">
                                                                                <a href="javascript:void(0);" id="general-btn" class="btn2" data-bs-dismiss="modal" aria-label="Close"><i class="ri-close-fill"></i>Cancel</a>
                                                                                <input type="hidden" name="downloadid" value="">
                                                                                <input type="hidden" name="delete" value="delete_form">
                                                                                <button id="general-btn" class="btn1">Confirm</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- END OF DELETE MODAL -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alvin</td>
                                                        <td>2023-12-20 <span id="tb-time-p">12:45 pm</span></td>
                                                        <td>Tint & Coat</td>
                                                        <td>Yes</td>
                                                        <td><b class="tb-blue-p">In Process</b></td>
                                                        <td>
                                                            <div id="tb-act-btn-div">
                                                                <!-- <a href="<?php echo $base_url_dashboard; ?>/customer-feedback-form.php" class="tb-ac-btn" id="tb-ac-btn-5" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Edit Customer Feedback Form"><i class="ri-survey-line"></i></a>
                                                                <a href="javascript:void(0);" class="tb-ac-btn" id="tb-ac-btn-3" data-bs-toggle="modal" data-bs-target="#RemarksModal" title="View Remarks"><i class="ri-chat-quote-line"></i></a> -->
                                                                <a href="<?php echo $base_url_dashboard; ?>/cc-after-sales-feedback-edit.php" class="tb-ac-btn" id="tb-ac-btn-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Edit Customer Feedback Form" ><i class="ri-edit-2-line"></i></a>
                                                                <a href="javascript:void(0);" class="tb-ac-btn" id="tb-ac-btn-2" data-bs-toggle="modal" data-bs-target="#DeleteModal"><i class="ri-delete-bin-6-line"></i></a>
                                                            </div>

                                                            <!-- VIEW REMARKS MODAL -->
                                                            <div id="RemarksModal" class="modal fade flip" tabindex="-1" aria-labelledby="flipModalLabel" aria-hidden="true" style="display: none;">
                                                                <div class="modal-dialog modal-dialog-centered" id="md-dialog">
                                                                    <div class="modal-content" id="md-content">
                                                                        <form method="POST" name="delete_form" action="">
                                                                            <div class="modal-header">
                                                                                <p id="modal-title">Feedback & Remarks</p>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div id="modal-div" style="text-align: left;">
                                                                                <p id="modal-sub-title">Customer Feedback</p>
                                                                                <p id="modal-p">Feedback display here. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                                                <p id="modal-sub-title">Remarks</p>
                                                                                <p id="modal-p">Remarks display here. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- END OF VIEW REMARKS MODAL -->

                                                            <!-- DELETE MODAL -->
                                                            <div id="DeleteModal" class="modal fade flip" tabindex="-1" aria-labelledby="flipModalLabel" aria-hidden="true" style="display: none;">
                                                                <div class="modal-dialog modal-dialog-centered" id="md-dialog">
                                                                    <div class="modal-content" id="md-content">
                                                                        <form method="POST" name="delete_form" action="">
                                                                            <div class="modal-header">
                                                                                <p id="modal-title">Delete After Sales Enquiry</p>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div id="modal-div" style="text-align: left;">
                                                                                <p id="modal-p" style="margin-bottom: 5px;">Are you sure you want to delete this After Sales Enquiry?</p>
                                                                            </div>
                                                                            <div id="modal-btn-div">
                                                                                <a href="javascript:void(0);" id="general-btn" class="btn2" data-bs-dismiss="modal" aria-label="Close"><i class="ri-close-fill"></i>Cancel</a>
                                                                                <input type="hidden" name="downloadid" value="">
                                                                                <input type="hidden" name="delete" value="delete_form">
                                                                                <button id="general-btn" class="btn1">Confirm</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- END OF DELETE MODAL -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alvin</td>
                                                        <td>2023-12-20 <span id="tb-time-p">12:45 pm</span></td>
                                                        <td>Tint & Coat</td>
                                                        <td>Yes</td>
                                                        <td><b class="tb-green-p">Done</b></td>
                                                        <td>
                                                            <div id="tb-act-btn-div">
                                                                <!-- <a href="<?php echo $base_url_dashboard; ?>/customer-feedback-form.php" class="tb-ac-btn" id="tb-ac-btn-5" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Edit Customer Feedback Form"><i class="ri-survey-line"></i></a>
                                                                <a href="javascript:void(0);" class="tb-ac-btn" id="tb-ac-btn-3" data-bs-toggle="modal" data-bs-target="#RemarksModal" title="View Remarks"><i class="ri-chat-quote-line"></i></a> -->
                                                                <a href="<?php echo $base_url_dashboard; ?>/cc-after-sales-feedback-edit.php" class="tb-ac-btn" id="tb-ac-btn-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Edit Customer Feedback Form" ><i class="ri-edit-2-line"></i></a>
                                                                <a href="javascript:void(0);" class="tb-ac-btn" id="tb-ac-btn-2" data-bs-toggle="modal" data-bs-target="#DeleteModal"><i class="ri-delete-bin-6-line"></i></a>
                                                            </div>

                                                            <!-- VIEW REMARKS MODAL -->
                                                            <div id="RemarksModal" class="modal fade flip" tabindex="-1" aria-labelledby="flipModalLabel" aria-hidden="true" style="display: none;">
                                                                <div class="modal-dialog modal-dialog-centered" id="md-dialog">
                                                                    <div class="modal-content" id="md-content">
                                                                        <form method="POST" name="delete_form" action="">
                                                                            <div class="modal-header">
                                                                                <p id="modal-title">Feedback & Remarks</p>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div id="modal-div" style="text-align: left;">
                                                                                <p id="modal-sub-title">Customer Feedback</p>
                                                                                <p id="modal-p">Feedback display here. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                                                <p id="modal-sub-title">Remarks</p>
                                                                                <p id="modal-p">Remarks display here. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- END OF VIEW REMARKS MODAL -->

                                                            <!-- DELETE MODAL -->
                                                            <div id="DeleteModal" class="modal fade flip" tabindex="-1" aria-labelledby="flipModalLabel" aria-hidden="true" style="display: none;">
                                                                <div class="modal-dialog modal-dialog-centered" id="md-dialog">
                                                                    <div class="modal-content" id="md-content">
                                                                        <form method="POST" name="delete_form" action="">
                                                                            <div class="modal-header">
                                                                                <p id="modal-title">Delete After Sales Enquiry</p>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div id="modal-div" style="text-align: left;">
                                                                                <p id="modal-p" style="margin-bottom: 5px;">Are you sure you want to delete this After Sales Enquiry?</p>
                                                                            </div>
                                                                            <div id="modal-btn-div">
                                                                                <a href="javascript:void(0);" id="general-btn" class="btn2" data-bs-dismiss="modal" aria-label="Close"><i class="ri-close-fill"></i>Cancel</a>
                                                                                <input type="hidden" name="downloadid" value="">
                                                                                <input type="hidden" name="delete" value="delete_form">
                                                                                <button id="general-btn" class="btn1">Confirm</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- END OF DELETE MODAL -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alvin</td>
                                                        <td>2023-12-20 <span id="tb-time-p">12:45 pm</span></td>
                                                        <td>Tint & Coat</td>
                                                        <td>Yes</td>
                                                        <td><b class="tb-red-p">Ready for Collection</b></td>
                                                        <td>
                                                            <div id="tb-act-btn-div">
                                                                <!-- <a href="<?php echo $base_url_dashboard; ?>/customer-feedback-form.php" class="tb-ac-btn" id="tb-ac-btn-5" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Edit Customer Feedback Form"><i class="ri-survey-line"></i></a>
                                                                <a href="javascript:void(0);" class="tb-ac-btn" id="tb-ac-btn-3" data-bs-toggle="modal" data-bs-target="#RemarksModal" title="View Remarks"><i class="ri-chat-quote-line"></i></a> -->
                                                                <a href="<?php echo $base_url_dashboard; ?>/cc-after-sales-feedback-edit.php" class="tb-ac-btn" id="tb-ac-btn-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Edit Customer Feedback Form" ><i class="ri-edit-2-line"></i></a>
                                                                <a href="javascript:void(0);" class="tb-ac-btn" id="tb-ac-btn-2" data-bs-toggle="modal" data-bs-target="#DeleteModal"><i class="ri-delete-bin-6-line"></i></a>
                                                            </div>

                                                            <!-- VIEW REMARKS MODAL -->
                                                            <div id="RemarksModal" class="modal fade flip" tabindex="-1" aria-labelledby="flipModalLabel" aria-hidden="true" style="display: none;">
                                                                <div class="modal-dialog modal-dialog-centered" id="md-dialog">
                                                                    <div class="modal-content" id="md-content">
                                                                        <form method="POST" name="delete_form" action="">
                                                                            <div class="modal-header">
                                                                                <p id="modal-title">Feedback & Remarks</p>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div id="modal-div" style="text-align: left;">
                                                                                <p id="modal-sub-title">Customer Feedback</p>
                                                                                <p id="modal-p">Feedback display here. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                                                <p id="modal-sub-title">Remarks</p>
                                                                                <p id="modal-p">Remarks display here. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- END OF VIEW REMARKS MODAL -->

                                                            <!-- DELETE MODAL -->
                                                            <div id="DeleteModal" class="modal fade flip" tabindex="-1" aria-labelledby="flipModalLabel" aria-hidden="true" style="display: none;">
                                                                <div class="modal-dialog modal-dialog-centered" id="md-dialog">
                                                                    <div class="modal-content" id="md-content">
                                                                        <form method="POST" name="delete_form" action="">
                                                                            <div class="modal-header">
                                                                                <p id="modal-title">Delete After Sales Enquiry</p>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div id="modal-div" style="text-align: left;">
                                                                                <p id="modal-p" style="margin-bottom: 5px;">Are you sure you want to delete this After Sales Enquiry?</p>
                                                                            </div>
                                                                            <div id="modal-btn-div">
                                                                                <a href="javascript:void(0);" id="general-btn" class="btn2" data-bs-dismiss="modal" aria-label="Close"><i class="ri-close-fill"></i>Cancel</a>
                                                                                <input type="hidden" name="downloadid" value="">
                                                                                <input type="hidden" name="delete" value="delete_form">
                                                                                <button id="general-btn" class="btn1">Confirm</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- END OF DELETE MODAL -->
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
                </section>
            
            </div>

            <!-- FOOTER SECTION -->
            <?php include "inc/footer.php"; ?>
            <!-- END OF FOOTER SECTION -->
        </div>
    </div>

    <!-- FOOTER CONS SECTION -->
    <?php include "inc/footer-cons.php"; ?>
    <!-- END OF FOOTER CONS SECTION -->

    <!-- DATATABLE JS -->
    <?php include "inc/datatable-js.php"; ?>
    <!-- END OF DATATABLE JS -->

</body>
</html>