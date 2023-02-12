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
    <title>Call Center | After Sales Enquiry | Customer Feedback Form | Customer Feedback Form | <?php echo $base_name; ?></title>
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
        /* #issue_box textarea:focus, .select2-container--focus, .select2-container--default .select2-selection--single:focus {
            border: transparent !important;
            border-bottom: 1px solid #d1b365 !important;
            border-radius: 0 !important;
        } */
        #img-div {
            margin-bottom: 15px;
        }
        #img-div img {
            width: 730px;
        }
        #add_issue_btn_div {
            margin-bottom: 15px;
        }
        /* #issue_div {
            border-radius: 8px;
            margin-bottom: 15px;
            position: relative;
        }
        #issue_box .input-group {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        #issue_box label {
            margin-bottom: 0;
            margin-right: 4px;
        }
        #issue_select_div {
            width: 100%;
            display: flex;
            align-items: center;
        }
        #issue_select_div div {
            width: 100%;
            margin-left: 2px;
        }
        #issue_box textarea, #issue_box .select2-container--default .select2-selection--single {
            width: 100% !important;
            background: transparent !important;
            border-bottom: 1px solid #3a3a3a !important;
        } */
        /* textarea.form-control {
            height: 40px !important;
        } */
        @media(max-width:991px) {
            #img-div img {
                width: 536px;
            }
        }
        @media(max-width:576px) {
            #img-div img {
                width: 100%;
            }

        }
        #table-div {
            margin-bottom: 15px;
        }
        .table-status th:nth-child(1), .table-status td:nth-child(1),
        .table-status th:nth-child(2), .table-status td:nth-child(2),
        .table-status th:nth-child(5), .table-status td:nth-child(5),
        .table-status th:nth-child(6), .table-status td:nth-child(6),
        .table-status th:nth-child(7), .table-status td:nth-child(7),
        .table-status th:nth-child(8), .table-status td:nth-child(8) {
            text-align: center;
        }
        #md-dialog {
            max-width: 750px;
        }
        #md-content {
            width: 750px;
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
                            <!-- FORM START -->
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div id="form-box" class="general-box">
                                    <form name="edit_form" method="POST" action="" enctype="multipart/form-data">
                                        <p id="form-sub-title">Customer Feedback Form</p>
                                        <?php if (isset($_GET['edit'])) { $pw = $_GET['edit']; if ($pw == 'succ') { ?>
                                            <div class="alert alert-success" role="alert">
                                                <p class="alert-heading">Member's Info successfully edited.</p>
                                            </div>
                                        <?php } } ?>
                                        <?php if (isset($_GET['format'])) { $pw = $_GET['format']; if ($pw == 'fail') { ?>
                                        <div class="alert alert-danger" role="alert">
                                            <p class="alert-heading">Photo Format Invalid (File Size: < 10MB | File Type: PNG, JPEG, JPG)</p>
                                        </div>
                                        <?php } } ?>
                                        <?php if (isset($_GET['upload'])) { $pw = $_GET['upload']; if ($pw == 'fail') { ?>
                                            <div class="alert alert-danger" role="alert">
                                                <p class="alert-heading">Photo Fail to uplaod. Please try again.</p>
                                            </div>
                                        <?php } } ?>
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Outlet</label>
                                                    <!-- DISPLAY LOGIN SA CURRENT OUTLET -->
                                                    <input class="form-control" id="service_date" name="service_date" maxlength="50" value="Damansara Damai">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Attended by</label>
                                                    <!-- DISPLAY LOGIN SA NAME -->
                                                    <input class="form-control" id="service_date" name="service_date" maxlength="50" value="Chan">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Today Date</label>
                                                    <!-- GET CURRENT DATE -->
                                                    <input class="form-control" id="date" name="date" maxlength="50" value="18/01/2023">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Time In</label>
                                                    <!-- GET CURRENT TIME -->
                                                    <input class="form-control" id="service_time_in" name="service_time_in" maxlength="50" value="18/01/2023">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Time Out</label>
                                                    <!-- FILL IN TIME WHEN KEY IN PERSON CLICK SAVE / SUBMIT BUTTON -->
                                                    <input class="form-control" id="service_time_out" name="service_time_out" maxlength="50" value="18/01/2023">
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <!-- COMPLAINT FORM SECTION -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div id="complaint_div">
                                                <hr>
                                                <p id="form-sub-title">Complaint Form</p>

                                                <!-- ADD ISSUE BUTTON DIV -->
                                                <div id="add_issue_btn_div">
                                                    <a href="javascript:void(0);" id="general-btn" class="btn1" data-bs-toggle="modal" data-bs-target="#ADDModal" title="Add Issue & Solution"><i class="ri-add-line"></i>Add Issue & Solution</a>
                                                </div>
                                                <!-- ADD ISSUE BUTTON DIV END -->

                                                <!-- ADD ISSUE MODAL -->
                                                <div id="ADDModal" class="modal fade flip" tabindex="-1" aria-labelledby="flipModalLabel" aria-hidden="true" style="display: none;">
                                                    <div class="modal-dialog modal-dialog-centered" id="md-dialog">
                                                        <div class="modal-content" id="md-content">
                                                            <form method="POST" name="add_form" action="">
                                                                <div class="modal-header">
                                                                    <p id="modal-title">Add Issue & Solution</p>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div id="modal-div" style="text-align: left;">
                                                                    <div id="issue_div">
                                                                        <div class="row">
                                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                                                                <div class="input-group">
                                                                                    <label>Service</label>
                                                                                    <select class="form-control js-example-basic-single" id="service" name="service" required>
                                                                                        <option selected disabled>Select Service</option>
                                                                                        <option value="1">Tint</option>
                                                                                        <option value="2">Coat</option>
                                                                                        <option value="3">Paint</option>
                                                                                        <option value="4">Aircond</option>
                                                                                        <option value="5">Wrap</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                                                                <div class="input-group">
                                                                                    <label>Part</label>
                                                                                    <select class="form-control js-example-basic-single" id="part" name="part" required>
                                                                                        <option selected disabled>Select Part</option>
                                                                                        <option value="1">1</option>
                                                                                        <option value="2">2</option>
                                                                                        <option value="3">3</option>
                                                                                        <option value="4">4</option>
                                                                                        <option value="5">5</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                                <div class="input-group">
                                                                                    <label>Issue</label>
                                                                                    <textarea class="form-control" id="issue" name="issue" rows="2" maxlength="50" required value=""></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                                <div class="input-group">
                                                                                    <label>Solution</label>
                                                                                    <textarea class="form-control" id="solution" name="solution" rows="2" maxlength="50" required value=""></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
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
                                                <!-- ADD ISSUE MODAL END -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- COMPLAINT FORM SECTION END -->

                                    <!-- COMPLAINT TABLE SECTION -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div id="tb-padding">
                                                <div id="table-div">
                                                    <table class="table-status table table-bordered table-striped align-middle">
                                                        <thead>
                                                            <tr>   
                                                                <th>Service</th>
                                                                <th>Part</th>
                                                                <th>Issue</th>
                                                                <th>Solution</th>
                                                                <th>Sent to Operation</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Tint</td>
                                                                <td>1</td>
                                                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                                                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                                                                <td>No</td>
                                                                <td><b class="tb-red-p">Pending</b></td>
                                                                <td>
                                                                    <div id="tb-act-btn-div">
                                                                        <a href="javascript:void(0);" class="tb-ac-btn" id="tb-ac-btn-1" data-bs-toggle="modal" data-bs-target="#EDITModal" title="Edit Issue"><i class="ri-edit-2-line"></i></a>
                                                                        <a href="javascript:void(0);" class="tb-ac-btn" id="tb-ac-btn-2" data-bs-toggle="modal" data-bs-target="#DeleteModal"><i class="ri-delete-bin-6-line" title="Delete Issue"></i></a>
                                                                    </div>

                                                                    <!-- EDIT ISSUE MODAL -->
                                                                    <div id="EDITModal" class="modal fade flip" tabindex="-1" aria-labelledby="flipModalLabel" aria-hidden="true" style="display: none;">
                                                                        <div class="modal-dialog modal-dialog-centered" id="md-dialog">
                                                                            <div class="modal-content" id="md-content">
                                                                                <form method="POST" name="edit_form" action="">
                                                                                    <div class="modal-header">
                                                                                        <p id="modal-title">Edit Issue & Solution</p>
                                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                    </div>
                                                                                    <div id="modal-div" style="text-align: left;">
                                                                                        <div id="issue_div">
                                                                                            <div class="row">
                                                                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                                                                                    <div class="input-group">
                                                                                                        <label>Service</label>
                                                                                                        <select class="form-control js-example-basic-single" id="service" name="service" required>
                                                                                                            <option selected disabled>Select Service</option>
                                                                                                            <option value="1">Tint</option>
                                                                                                            <option value="2">Coat</option>
                                                                                                            <option value="3">Paint</option>
                                                                                                            <option value="4">Aircond</option>
                                                                                                            <option value="5">Wrap</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                                                                                    <div class="input-group">
                                                                                                        <label>Part</label>
                                                                                                        <select class="form-control js-example-basic-single" id="part" name="part" required>
                                                                                                            <option selected disabled>Select Part</option>
                                                                                                            <option value="1">1</option>
                                                                                                            <option value="2">2</option>
                                                                                                            <option value="3">3</option>
                                                                                                            <option value="4">4</option>
                                                                                                            <option value="5">5</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                                                    <div class="input-group">
                                                                                                        <label>Issue</label>
                                                                                                        <textarea class="form-control" id="issue" name="issue" rows="2" maxlength="50" required value=""></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                                                    <div class="input-group">
                                                                                                        <label>Solution</label>
                                                                                                        <textarea class="form-control" id="solution" name="solution" rows="2" maxlength="50" required value=""></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
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
                                                                    <!-- EDIT ISSUE MODAL END -->

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
                                                                <td>Wrap</td>
                                                                <td>1</td>
                                                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                                                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                                                                <td>Yes</td>
                                                                <td><b class="tb-orange-p">In Process</b></td>
                                                                <td>
                                                                    <div id="tb-act-btn-div">
                                                                        <a href="javascript:void(0);" class="tb-ac-btn" id="tb-ac-btn-1" data-bs-toggle="modal" data-bs-target="#EDITModal" title="Edit Issue"><i class="ri-edit-2-line"></i></a>
                                                                        <a href="javascript:void(0);" class="tb-ac-btn" id="tb-ac-btn-2" data-bs-toggle="modal" data-bs-target="#DeleteModal"><i class="ri-delete-bin-6-line" title="Delete Issue"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Paint</td>
                                                                <td>3</td>
                                                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                                                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                                                                <td>Yes</td>
                                                                <td><b class="tb-blue-p">Done</b></td>
                                                                <td>
                                                                    <div id="tb-act-btn-div">
                                                                        <a href="javascript:void(0);" class="tb-ac-btn" id="tb-ac-btn-1" data-bs-toggle="modal" data-bs-target="#EDITModal" title="Edit Issue"><i class="ri-edit-2-line"></i></a>
                                                                        <a href="javascript:void(0);" class="tb-ac-btn" id="tb-ac-btn-2" data-bs-toggle="modal" data-bs-target="#DeleteModal"><i class="ri-delete-bin-6-line" title="Delete Issue"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tint & Coat</td>
                                                                <td>4</td>
                                                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                                                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                                                                <td>Yes</td>
                                                                <td><b class="tb-green-p">Ready for Collection</b></td>
                                                                <td>
                                                                    <div id="tb-act-btn-div">
                                                                        <a href="javascript:void(0);" class="tb-ac-btn" id="tb-ac-btn-1" data-bs-toggle="modal" data-bs-target="#EDITModal" title="Edit Issue"><i class="ri-edit-2-line"></i></a>
                                                                        <a href="javascript:void(0);" class="tb-ac-btn" id="tb-ac-btn-2" data-bs-toggle="modal" data-bs-target="#DeleteModal"><i class="ri-delete-bin-6-line" title="Delete Issue"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- COMPLAINT SECTION END -->

                                    <!-------------------------------------------->
                                    <!--  DISPLAY ONLY FOR OPERATION TEAM START -->
                                    <!-------------------------------------------->
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <hr>
                                            <p id="form-sub-title">Update Status</p>
                                        </div>
                                        
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="input-group">
                                                <label>Satus<span>*</span></label>
                                                <select class="form-control js-example-basic-single" id="status" name="status" required="">
                                                    <option disabled>Select Status</option>
                                                    <option value="1" selected >Done</option>
                                                    <option value="2" >Pending</option>
                                                    <option value="3" >In Process</option>
                                                    <option value="4" >Ready for Collection</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="input-group">
                                                <label>Estimated Completetion Time</label>
                                                <!-- OPTIONAL INPUT -->
                                                <input type="time" class="form-control" id="estimate_complete_time" name="estimate_complete_time" maxlength="50" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <!------------------------------------------>
                                    <!--  DISPLAY ONLY FOR OPERATION TEAM END -->
                                    <!------------------------------------------>

                                    <!-- BTN DIV -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div id="form-btn-div">
                                                <a href="<?php echo $base_url_dashboard; ?>/cc-after-sales.php" id="general-btn" class="btn2"><i class="ri-close-fill"></i>Cancel</a>
                                                <button type="submit" id="general-btn" class="btn6"><i class="ri-save-3-fill"></i>Save</button>
                                                <!-- HIDE TO OPERATION TEAM -->
                                                <button type="submit" id="general-btn" class="btn1"><i class="ri-save-3-fill"></i>Submit to Operation Team</button>
                                                <!-- HIDE TO OPERATION TEAM END -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- BTN DIV END -->

                                </div>
                            </div>
                            <!-- FORM END  -->

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