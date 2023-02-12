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
    <title>Call Center | After Sales Enquiry | Customer Feedback Form | Edit Customer Feedback Form | <?php echo $base_name; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- HEADER CONS SECTION -->
    <?php include "inc/header-cons.php"; ?>
    <!-- END OF HEADER CONS SECTION -->

    <!-- COLOR THEME SECTION -->
    <?php include "inc/master-theme.php"; ?>
    <!-- END OF COLOR THEME SECTION -->

    <style>
        #img-div {
            margin-bottom: 15px;
            text-align: center;
        }
        #img-div img {
            width: 730px;
        }
        #issue_box .input-group {
            display: flex;
            align-items: center;
        }
        #issue_box label {
            margin-bottom: 0;
            margin-right: 3px;
        }
        #issue_select_div {
            width: 100%;
        }
        #issue_box textarea, #issue_box .select2-container--default .select2-selection--single {
            background: transparent !important;
            border-bottom: 1px solid #3a3a3a !important;
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
                    <span id="bc-active">Edit Customer Feedback Form</span>
                </div>
            </section>
            <!-- END OF BREADCRUMB SECTION -->

            <div class="page-content">
                <section id="general-section">
                    <div class="container-fluid">
                        <div class="row">

                            <!-- FORM START -->
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                <div id="form-box" class="general-box">
                                    <form name="edit_form" method="POST" action="" enctype="multipart/form-data">
                                        <p id="form-sub-title">Edit Customer Feedback Form</p>
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
                                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-6 col-12">
                                                <div class="input-group">
                                                    <label>Customer Name</label>
                                                    <input type="text" class="form-control" id="customer_name" name="customer_name" maxlength="50" required value="Chan">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="input-group">
                                                    <label>Car Model</label>
                                                    <input type="text" class="form-control" id="car_model" name="car_model" maxlength="50" required value="Persona">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="input-group">
                                                    <label>H/P</label>
                                                    <input type="text" class="form-control" id="contact" name="contact" maxlength="50" required value="011-123456789" onkeypress="return validateHP(this, event);">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="input-group">
                                                    <label>Number Plate</label>
                                                    <input type="text" class="form-control" id="plate" name="plate" maxlength="50" required value="MCG9967">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="input-group">
                                                    <label>Service Date</label>
                                                    <input class="form-control" id="service_date" name="service_date" maxlength="50" value="18/01/2023">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                                <div class="input-group">
                                                    <label>Service Time In</label>
                                                    <input class="form-control" id="service_time" name="service_time" maxlength="50" value="18/01/2023">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                                <div class="input-group">
                                                    <label>Service Time Out</label>
                                                    <input class="form-control" id="service_time" name="service_time" maxlength="50" value="18/01/2023">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div id="form-btn-div">
                                                    <a href="<?php echo $base_url_dashboard; ?>/cc-after-sales.php" id="general-btn" class="btn2"><i class="ri-close-fill"></i>Cancel</a>
                                                    <button type="submit" id="general-btn" class="btn1"><i class="ri-save-3-fill"></i>Save & Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- FORM END -->

                            <!-- COMPLAINT SECTION  -->
                            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                                <div id="form-box" class="general-box">
                                    <form name="edit_form" method="POST" action="" enctype="multipart/form-data">
                                        <div id="complaint_div">
                                            <div id="img-div">
                                                <img src="<?php echo $base_url; ?>/img/customer_feedback_car.jpg" alt="" width="150" class="rounded">
                                            </div>

                                            <!-- ISSUE DIV -->
                                            <div id="issue_div">
                                                <div class="row">
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                                        <div id="issue_box">
                                                            <div class="input-group">
                                                                <div><label>Service :</label></div>
                                                                <div id="issue_select_div">
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
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                                        <div id="issue_box">
                                                            <div class="input-group">
                                                                <div><label>Part :</label></div>
                                                                <div id="issue_select_div">
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
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div id="issue_box">
                                                            <div class="input-group">
                                                                <label>Issue</label>
                                                                <textarea class="form-control" id="issue" name="issue" maxlength="50" required value=""></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div id="issue_box">
                                                            <div class="input-group">
                                                                <label>Solution</label>
                                                                <textarea class="form-control" id="solution" name="solution" maxlength="50" required value=""></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END OF COMPLAINT SECTION -->

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

</body>
</html>