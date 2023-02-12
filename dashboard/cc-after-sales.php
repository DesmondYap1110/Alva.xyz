 <?php
    require_once('script.php');
    $pg = "cc";
    $subpg = "after";

?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-layout-mode="dark">
<head>
    <meta charset="utf-8">
    <title>Call Center | After Sales Enquiry | <?php echo $base_name; ?></title>
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
        .table-cse th:nth-child(2), .table-cse td:nth-child(2),
        .table-cse th:nth-child(4), .table-cse td:nth-child(4),
        .table-cse th:nth-child(5), .table-cse td:nth-child(5),
        .table-cse th:nth-child(6), .table-cse td:nth-child(6),
        .table-cse th:nth-child(7), .table-cse td:nth-child(7),
        .table-cse th:nth-child(8), .table-cse td:nth-child(8) {
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
                    <span id="bc-active">After Sales Enquiry</span>
                </div>
            </section>
            <!-- END OF BREADCRUMB SECTION -->
            
            <div class="page-content">
                <section id="general-section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="add-btn-div">
                                    <a href="<?php echo $base_url_dashboard; ?>/cc-after-sales-add.php" id="general-btn" class="btn1"><i class="ri-add-fill"></i>Add After Sales Enquiry</a>
                                </div>
                                <div id="tb-box" class="general-box">
                                    <div id="tb-border-line">
                                        <div id="tb-title-div">
                                            <p id="tb-title">After Sales Enquiry</p>
                                            <?php if (isset($_GET['add'])) { $register = $_GET['add']; if ($register == 'succ') { ?>
                                            <div class="alert alert-success" role="alert">
                                                <p class="alert-heading">After Sales Enquiry Added Successfully.</p>
                                            </div>
                                            <?php } } ?>
                                            <?php if (isset($_GET['delete'])) { $register = $_GET['delete']; if ($register == 'succ') { ?>
                                            <div class="alert alert-success" role="alert">
                                                <p class="alert-heading">After Sales Enquiry Deleted Successfully.</p>
                                            </div>
                                            <?php } } ?>
                                            <?php if (isset($_GET['update'])) { $register = $_GET['update']; if ($register == 'succ') { ?>
                                            <div class="alert alert-success" role="alert">
                                                <p class="alert-heading">After Sales Enquiry Edited Successfully.</p>
                                            </div>
                                            <?php } } ?>
                                            <?php if (isset($_GET['process'])) { $register = $_GET['process']; if ($register == 'invalid') { ?>
                                            <div class="alert alert-danger" role="alert">
                                                <p class="alert-heading">Process Invalid.</p>
                                            </div>
                                            <?php } } ?>
                                        </div>
                                        <form name="filter_form" method="POST" action="">
                                            <div class="row align-items-center">
                                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
                                                    <div class="input-group">
                                                        <label>Outlet</label>
                                                        <select class="form-control js-example-basic-single" id="outlet" name="outlet">
                                                            <option selected disabled>Select Outlet</option>
                                                            <option value="1" >Damansara Damai</option>
                                                            <option value="2" >ALVAPJ</option>
                                                            <option value="3" >Puchong</option>
                                                            <option value="4" >Melaka</option>
                                                            <option value="5" >Johor Bahru</option>
                                                            <option value="6" >Batu Pahat</option>
                                                            <option value="7" >Others/ Unknown</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
                                                    <div class="input-group">
                                                        <label>Key In Date Range</label>
                                                        <input type="text" class="form-control" id="date_range" name="date_range" data-provider="flatpickr" data-date-format="d M Y" data-range-date="true" placeholder="Select Date Range" autocomplete="off" value="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
                                                    <div class="input-group">
                                                        <label>Service</label>
                                                        <select class="form-control js-example-basic-single" id="service" name="service" required>
                                                            <option selected disabled>Select Services</option>
                                                            <option value="1" >Tint</option>
                                                            <option value="2" >Coat</option>
                                                            <option value="3" >Tint & Coat</option>
                                                            <option value="4" >Paint</option>
                                                            <option value="5" >Aircond</option>
                                                            <option value="6" >Wrap</option>
                                                            <option value="7" >Insurance</option>
                                                            <option value="8" >ARMP</option>
                                                            <option value="9" >Others</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
                                                    <div class="input-group">
                                                        <label>Category</label>
                                                        <select class="form-control js-example-basic-single" id="category" name="category" required>
                                                            <option disabled>Select Category</option>
                                                            <option value="1" selected >Warranty</option>
                                                            <option value="2" >Complaint</option>
                                                            <option value="3" >Refund or Compensation</option>
                                                            <option value="4" >Feedback</option>
                                                            <option value="5" >Others</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
                                                    <div id="filter-btn-div">
                                                        <a href="<?php echo $base_url_dashboard; ?>/cc-after-sales.php" id="general-btn" class="btn2"><i class="ri-refresh-line"></i>Reset</a>
                                                        <input type="hidden" name="MM_filter" value="filter_form">
                                                        <button type="submit" id="general-btn" class="btn1"><i class="ri-filter-2-line"></i>Search</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div id="table-padding">
                                        <div id="table-div">
                                            <table id="example" class="table-cse table table-bordered table-striped align-middle">
                                                <thead>
                                                    <tr>   
                                                        <th>Key In By</th>
                                                        <th>Key In Date Time</th>
                                                        <th>Description</th>
                                                        <!-- <th>Number Plate</th>
                                                        <th>Customer Name</th>
                                                        <th>Contact Number</th>
                                                        <th>Car Model</th> -->
                                                        <th>Outlet</th>
                                                        <th>Service</th>
                                                        <th>Category</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Alvin</td>
                                                        <td>2023-12-20 <span id="tb-time-p">12:45 pm</span></td>
                                                        <td>
                                                            <div>
                                                                <p style="margin-bottom: 0;">Customer Name : Mohamad
                                                                <br>
                                                                Contact Number : 011-10256245
                                                                <br>
                                                                Car Model : Persona
                                                                <br>
                                                                Number Plate : WKP7233</p>
                                                            </div>
                                                        </td>
                                                        <td>Damansara Damai</td>
                                                        <td>Tint & Coat</td>
                                                        <td>Warranty</td>
                                                        <td><b class="tb-orange-p">Pending</b></td>
                                                        <td>
                                                            <div class="dropdown d-inline-block">
                                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-fill align-middle"></i></button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li>
                                                                        <a href="<?php echo $base_url_dashboard; ?>/cc-after-sales-delivery.php" title="Car Delivery Form" class="dropdown-item">
                                                                            <i class="ri-roadster-fill align-bottom me-2 text-muted"></i>Car Delivery Status Form
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo $base_url_dashboard; ?>/cc-after-sales-feedback.php" title="Customer Feedback Form" class="dropdown-item">
                                                                            <i class="ri-feedback-line align-bottom me-2 text-muted"></i>Customer Feedback Form
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#RemarksModal" title="View Remarks" class="dropdown-item">
                                                                            <i class="ri-chat-quote-line align-bottom me-2 text-muted"></i>View Remarks
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo $base_url_dashboard; ?>/cc-after-sales-edit.php" class="dropdown-item">
                                                                            <i class="ri-edit-2-line align-bottom me-2 text-muted"></i>Edit
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#DeleteModal" class="dropdown-item">
                                                                            <i class="ri-delete-bin-6-line align-bottom me-2 text-muted"></i>Delete
                                                                        </a>
                                                                    </li>
                                                                </ul>
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
                                                        <td>
                                                            <div>
                                                                <p style="margin-bottom: 0;">Customer Name : Mohamad
                                                                <br>
                                                                Contact Number : 011-10256245
                                                                <br>
                                                                Car Model : Persona
                                                                <br>
                                                                Number Plate : MCG9967</p>
                                                            </div>
                                                        </td>
                                                        <td>Damansara Damai</td>
                                                        <td>Tint & Coat</td>
                                                        <td>Warranty</td>
                                                        <td><b class="tb-blue-p">In Process</b></td>
                                                        <td>
                                                            <div class="dropdown d-inline-block">
                                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-fill align-middle"></i></button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li>
                                                                        <a href="<?php echo $base_url_dashboard; ?>/cc-after-sales-delivery.php" title="Car Delivery Form" class="dropdown-item">
                                                                            <i class="ri-roadster-fill align-bottom me-2 text-muted"></i>Car Delivery Status Form
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo $base_url_dashboard; ?>/cc-after-sales-feedback.php" title="Customer Feedback Form" class="dropdown-item">
                                                                            <i class="ri-feedback-line align-bottom me-2 text-muted"></i>Customer Feedback Form
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#RemarksModal" title="View Remarks" class="dropdown-item">
                                                                            <i class="ri-chat-quote-line align-bottom me-2 text-muted"></i>View Remarks
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo $base_url_dashboard; ?>/cc-after-sales-edit.php" class="dropdown-item">
                                                                            <i class="ri-edit-2-line align-bottom me-2 text-muted"></i>Edit
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#DeleteModal" class="dropdown-item">
                                                                            <i class="ri-delete-bin-6-line align-bottom me-2 text-muted"></i>Delete
                                                                        </a>
                                                                    </li>
                                                                </ul>
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
                                                        <td>
                                                            <div>
                                                                <p style="margin-bottom: 0;">Customer Name : Mohamad
                                                                <br>
                                                                Contact Number : 011-10256245
                                                                <br>
                                                                Car Model : Persona
                                                                <br>
                                                                Number Plate : JPH802</p>
                                                            </div>
                                                        </td>
                                                        <td>Damansara Damai</td>
                                                        <td>Tint & Coat</td>
                                                        <td>Warranty</td>
                                                        <td><b class="tb-green-p">Done</b></td>
                                                        <td>
                                                            <div class="dropdown d-inline-block">
                                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-fill align-middle"></i></button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li>
                                                                        <a href="<?php echo $base_url_dashboard; ?>/cc-after-sales-delivery.php" title="Car Delivery Form" class="dropdown-item">
                                                                            <i class="ri-roadster-fill align-bottom me-2 text-muted"></i>Car Delivery Status Form
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo $base_url_dashboard; ?>/cc-after-sales-feedback.php" title="Customer Feedback Form" class="dropdown-item">
                                                                            <i class="ri-feedback-line align-bottom me-2 text-muted"></i>Customer Feedback Form
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#RemarksModal" title="View Remarks" class="dropdown-item">
                                                                            <i class="ri-chat-quote-line align-bottom me-2 text-muted"></i>View Remarks
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo $base_url_dashboard; ?>/cc-after-sales-edit.php" class="dropdown-item">
                                                                            <i class="ri-edit-2-line align-bottom me-2 text-muted"></i>Edit
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#DeleteModal" class="dropdown-item">
                                                                            <i class="ri-delete-bin-6-line align-bottom me-2 text-muted"></i>Delete
                                                                        </a>
                                                                    </li>
                                                                </ul>
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
                                                        <td>
                                                            <div>
                                                                <p style="margin-bottom: 0;">Customer Name : Mohamad
                                                                <br>
                                                                Contact Number : 011-10256245
                                                                <br>
                                                                Car Model : Persona
                                                                <br>
                                                                Number Plate : SME1688</p>
                                                            </div>
                                                        </td>
                                                        <td>Damansara Damai</td>
                                                        <td>Tint & Coat</td>
                                                        <td>Warranty</td>
                                                        <td><b class="tb-red-p">Ready for Collection</b></td>
                                                        <td>
                                                            <div class="dropdown d-inline-block">
                                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-fill align-middle"></i></button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li>
                                                                        <a href="<?php echo $base_url_dashboard; ?>/cc-after-sales-delivery.php" title="Car Delivery Form" class="dropdown-item">
                                                                            <i class="ri-roadster-fill align-bottom me-2 text-muted"></i>Car Delivery Status Form
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo $base_url_dashboard; ?>/cc-after-sales-feedback.php" title="Customer Feedback Form" class="dropdown-item">
                                                                            <i class="ri-feedback-line align-bottom me-2 text-muted"></i>Customer Feedback Form
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#RemarksModal" title="View Remarks" class="dropdown-item">
                                                                            <i class="ri-chat-quote-line align-bottom me-2 text-muted"></i>View Remarks
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?php echo $base_url_dashboard; ?>/cc-after-sales-edit.php" class="dropdown-item">
                                                                            <i class="ri-edit-2-line align-bottom me-2 text-muted"></i>Edit
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#DeleteModal" class="dropdown-item">
                                                                            <i class="ri-delete-bin-6-line align-bottom me-2 text-muted"></i>Delete
                                                                        </a>
                                                                    </li>
                                                                </ul>
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

    <script>
        $(document).ready(function(){
            document.getElementById('date_range').readOnly = false;
        });
    </script>

</body>
</html>