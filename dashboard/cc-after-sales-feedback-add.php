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
    <title>Call Center | After Sales Enquiry | Customer Feedback Form | Add Customer Feedback Form | <?php echo $base_name; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- HEADER CONS SECTION -->
    <?php include "inc/header-cons.php"; ?>
    <!-- END OF HEADER CONS SECTION -->

    <!-- COLOR THEME SECTION -->
    <?php include "inc/master-theme.php"; ?>
    <!-- END OF COLOR THEME SECTION -->

    <style>
        /* .input-group {
            display: flex;
            align-items: center;
        }
        .input-group label {
            margin-bottom: 0;
            margin-right: 15px;
        }
        .input-group .form-control{
            width: 47% !important;
            background: transparent !important;
            border-bottom: 1px solid #fff3 !important;
            border-radius: 0 !important;
        }
        .input-group .form-control:focus, #issue_box textarea:focus, .select2-container--focus, .select2-container--default .select2-selection--single:focus {
            border: transparent !important;
            border-bottom: 1px solid #d1b365 !important;
        } */
        #issue_box textarea:focus, .select2-container--focus, .select2-container--default .select2-selection--single:focus {
            border: transparent !important;
            border-bottom: 1px solid #d1b365 !important;
            border-radius: 0 !important;
        }
        #img-div {
            margin-bottom: 15px;
            /* text-align: center; */
        }
        #img-div img {
            width: 730px;
        }
        /* #issue_dlt_div a {
            position: absolute;
            top: 0;
            right: 0;
        } */
        #issue_div {
            /* padding: 15px 20px 9px;
            border: 2px solid #ffffff30; */
            border-radius: 8px;
            /* background: #ffffff0a; */
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
        }
        .add_issue_btn {
            display: block;
            width: 100%;
            border: 2px dashed #ddd;
            border-radius: 8px;
        }
        .table-issue th:nth-child(1),.table-issue td:nth-child(1) {
            width: 220px;
        }
        .table-issue th:nth-child(2),.table-issue td:nth-child(2) {
            width: 155px;
        }
        .table-issue th:nth-child(5),.table-issue td:nth-child(5) {
            width: 155px;
        }
        .table-issue th:nth-child(5),.table-issue td:nth-child(5){
            text-align: center;
        }
        textarea.form-control {
            height: 40px !important;
        }
        @media(max-width:991px) {
            #img-div img {
                width: 536px;
            }
            .table-issue th:nth-child(1),.table-issue td:nth-child(1) {
                width: 160px;
            }
            .table-issue th:nth-child(2),.table-issue td:nth-child(2) {
                width: 137px;
            }
            .table-issue th:nth-child(5),.table-issue td:nth-child(5) {
                width: 90px;
            }
        }
        @media(max-width:576px) {
            #img-div img {
                width: 100%;
            }

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
                    <a href="<?php echo $base_url_dashboard; ?>/cc-after-sales-feedback.php">Customer Feedback Form</a>
                    <span id="bc-arrow"><i class="ri-arrow-right-s-line"></i></span>
                    <span id="bc-active">Add Customer Feedback Form</span>
                </div>
            </section>
            <!-- END OF BREADCRUMB SECTION -->

            <div class="page-content">
                <section id="general-section">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- FORM START -->
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div id="form-box" class="general-box">
                                    <form name="edit_form" method="POST" action="" enctype="multipart/form-data">
                                        <p id="form-sub-title">Add Customer Feedback Form</p>
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

                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <hr>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Satus<span>*</span></label>
                                                    <!--  -->
                                                    <select class="form-control js-example-basic-single" id="status" name="status" required>
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
                                                    <!--  -->
                                                    <input type="text" class="form-control" id="estimate_complete_time" name="estimate_complete_time" maxlength="50" value="">
                                                </div>
                                            </div>

                                            <!-- IF SA / ADMIN / CALL CENTRE LOGIN DISPLAY THIS SECTION -->
                                            <div class="col-lg-12">
                                                <div id="form-btn-div">
                                                    <a href="<?php echo $base_url_dashboard; ?>/cc-after-sales.php" id="general-btn" class="btn2"><i class="ri-close-fill"></i>Cancel</a>
                                                    <button type="submit" id="general-btn" class="btn6"><i class="ri-save-3-fill"></i>Save</button>
                                                    <button type="submit" id="general-btn" class="btn1"><i class="ri-save-3-fill"></i>Submit to Operation Team</button>
                                                </div>
                                            </div>

                                            <!-- IF OPERATION TEAM LOGIN DISPLAY THIS -->
                                            <!-- <div class="col-lg-12">
                                                <div id="form-btn-div">
                                                    <a href="<?php echo $base_url_dashboard; ?>/cc-after-sales.php" id="general-btn" class="btn2"><i class="ri-close-fill"></i>Cancel</a>
                                                    <button type="submit" id="general-btn" class="btn6"><i class="ri-save-3-fill"></i>Save</button>
                                                    <button type="submit" id="general-btn" class="btn1"><i class="ri-save-3-fill"></i>Submit & Update</button>
                                                </div>
                                            </div> -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END OF COMPLAINT SECTION -->

                            <!-- ISSUE DIV -->
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div id="form-box" class="general-box">
                                    <form name="edit_form" method="POST" action="" enctype="multipart/form-data">
                                        <!-- COMPLAINT SECTION -->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div id="complaint_div">
                                                    <!-- <div id="img-div">
                                                        <img src="<?php echo $base_url; ?>/img/customer_feedback_car.jpg" alt="" width="150" class="rounded">
                                                    </div> -->

                                                    <!-- ISSUE DIV -->
                                                    <div id="issue_div">
                                                        <!-- <div id="issue_dlt_div">
                                                            <a href="javascript:void(0)" id="general-btn" class="btn5"><i class="ri-delete-bin-line"></i></a>
                                                        </div> -->
                                                        <div class="row">
                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                                                <div id="issue_box">
                                                                    <div class="input-group">
                                                                        <div><label>Service</label></div>
                                                                        <div id="issue_select_div">
                                                                            : 
                                                                            <div>
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
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                                                <div id="issue_box">
                                                                    <div class="input-group">
                                                                        <div><label>Part</label></div>
                                                                        <div id="issue_select_div">
                                                                            : 
                                                                            <div>
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
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                <div id="issue_box">
                                                                    <div class="input-group">
                                                                        <div><label>Issue</label></div>
                                                                        <div id="issue_select_div">
                                                                            : 
                                                                            <div>
                                                                                <textarea class="form-control" id="issue" name="issue" maxlength="50" required value=""></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                <div id="issue_box">
                                                                    <div class="input-group">
                                                                        <div><label>Solution</label></div>
                                                                        <div id="issue_select_div">
                                                                            : 
                                                                            <div>
                                                                                <textarea class="form-control" id="solution" name="solution" maxlength="50" required value=""></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END OF ISSUE DIV-->

                                                    <!-- ADD ISSUE BUTTON DIV -->
                                                    <div id="add_issue">
                                                        <a href="javascript:void(0);" id="general-btn" class="add_issue_btn" onclick="addrow()"><i class="ri-add-circle-line"></i> Add Issue & Solution</a>
                                                    </div>
                                                    <!-- ADD ISSUE BUTTON DIV END -->
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- COMPLAINT DIV END -->
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

</body>
</html>