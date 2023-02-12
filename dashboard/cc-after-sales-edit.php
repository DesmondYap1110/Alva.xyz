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
    <title>Call Center | After Sales Enquiry | Edit After Sales Enquiry | <?php echo $base_name; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- HEADER CONS SECTION -->
    <?php include "inc/header-cons.php"; ?>
    <!-- END OF HEADER CONS SECTION -->

    <!-- COLOR THEME SECTION -->
    <?php include "inc/master-theme.php"; ?>
    <!-- END OF COLOR THEME SECTION -->

    <style>
        #search-input-group {
            display: flex;
        }
        #history_info_div {
            padding: 15px;
            border: 2px dashed #fff3;
            border-radius: 8px;
            color: #ddd;
            margin-bottom: 15px;
        }
        #history_info_div:last-child {
            margin-bottom: 0;
        }
        #history_info_div.selected_history {
            border: 2px dashed #fff;
            background: #3a3a3a;
            color: #fff;
        }
        #history_title {
            font-size: 15px;
            font-weight: 500;
            line-height: 1.4;
            margin-bottom: 0;
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
                    <span id="bc-active">Edit After Sales Enquiry</span>
                </div>
            </section>
            <!-- END OF BREADCRUMB SECTION -->

            <div class="page-content">
                <section id="general-section">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- FORM START -->
                            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div id="form-box" class="general-box">
                                    <form name="edit_form" method="POST" action="" enctype="multipart/form-data">
                                        <p id="form-sub-title">Edit After Sales Enquiry</p>
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
                                                    <label>Key in Date</label>
                                                    <input placeholder="dd/mm/yyyy" class="form-control" id="date" name="date" maxlength="50" required value="<?php echo date("d/m/Y")?>" data-provider="flatpickr" data-date-format="d/m/Y">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Key in Time</label>
                                                    <input type="time" class="form-control" id="time" name="time" maxlength="50" required value="<?php echo date("H:i") ?>">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Key In By</label>
                                                    <input type="text" class="form-control" id="key_in" name="key_in" maxlength="50" required value="Chan">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Number Plate</label>
                                                    <!-- SEARCH NUMBER PLATE -->
                                                    <div id="search-input-group">
                                                        <input type="text" class="form-control" id="plate" name="plate" maxlength="50" required value="">
                                                        <!-- CHECK IF NUMBER PLATE EXISTS -->
                                                        <span id="numberplatecheck"></span>
                                                        <!-- NUMBER PLATE SEARCH BUTTON -->
                                                        <button style="margin-left:5px;" id="tb-ac-btn-5" class="tb-ac-btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Search Number Plate"><i class="ri-search-2-line"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Service Date</label>
                                                    <input class="form-control" id="service_date" name="service_date" maxlength="50" value="18/01/2023">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Service Time</label>
                                                    <input class="form-control" id="service_time" name="service_time" maxlength="50" value="18/01/2023">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Contact Number</label>
                                                    <input type="text" class="form-control" id="customer_contact" name="customer_contact" maxlength="50" required value="011-123456789" onkeypress="return validateHP(this, event);">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Customer Name</label>
                                                    <input type="text" class="form-control" id="customer_name" name="customer_name" maxlength="50" required value="Chan">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Car Model</label>
                                                    <input type="text" class="form-control" id="customer_car_model" name="customer_car_model" maxlength="50" required value="Persona">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Outlet's Location</label>
                                                    <select class="form-control js-example-basic-single" id="outlet" name="outlet">
                                                        <option disabled>Select Outlet</option>
                                                        <option value="1" selected >Damansara Damai</option>
                                                        <option value="2" >ALVAPJ</option>
                                                        <option value="3" >Puchong</option>
                                                        <option value="4" >Melaka</option>
                                                        <option value="5" >Johor Bahru</option>
                                                        <option value="6" >Batu Pahat</option>
                                                        <option value="7" >Others/ Unknown</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Service</label>
                                                    <select class="form-control js-example-basic-single" id="service" name="service" required>
                                                        <option disabled>Select Services</option>
                                                        <option value="1" selected >Tint</option>
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
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
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
                                            <div class="col-lg-12">
                                                <div class="input-group">
                                                    <label>Customer's Feedback</label>
                                                    <textarea class="form-control" name="feedback" id="feedback" cols="30" rows="10" required=""></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="input-group">
                                                    <label>Remarks</label>
                                                    <textarea class="form-control" name="remarks" id="remarks" cols="30" rows="10" required=""></textarea>
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

                            <!-- HISTORICAL VISIT RECORD SECTION -->
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                <div id="form-box" class="general-box">
                                    <p id="form-sub-title">Historical Visit Record</p>

                                    <!-- HISTORY BOX WITH SELECTED CLASS -->
                                    <div id="history_info_div" class="selected_history">
                                        <p id="history_title">Date : <b>25/02/2021</b></p>
                                        <p id="history_title">Outlet : <b>Damansara Damai</b></p>
                                        <p id="history_title">Service : <b>Tint</b></p>
                                        <p id="history_title">Service Advisor : <b>Tan</b></p>
                                    </div>

                                    <!-- NORMAL HISTORY BOX -->
                                    <div id="history_info_div">
                                        <p id="history_title">Date : <b>08/12/2022</b></p>
                                        <p id="history_title">Outlet : <b>Damansara Damai</b></p>
                                        <p id="history_title">Service : <b>Wrap</b></p>
                                        <p id="history_title">Service Advisor : <b>Tan</b></p>
                                    </div>
                                </div>
                            </div>
                            <!-- END OF HISTORICAL VISIT RECORD SECTION -->
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