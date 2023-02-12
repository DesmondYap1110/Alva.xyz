 <?php
    require_once('script.php');
    $pg = "cc";
    $subpg = "customer";

	date_default_timezone_set("Asia/Kuala_Lumpur");

?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-layout-mode="dark">
<head>
    <meta charset="utf-8">
    <title>Call Center | Customer Enquiry | Add Customer Enquiry | <?php echo $base_name; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- HEADER CONS SECTION -->
    <?php include "inc/header-cons.php"; ?>
    <!-- END OF HEADER CONS SECTION -->

    <!-- COLOR THEME SECTION -->
    <?php include "inc/master-theme.php"; ?>
    <!-- END OF COLOR THEME SECTION -->

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
                    <a href="<?php echo $base_url_dashboard; ?>/cc-customer.php">Customer Enquiry</a>
                    <span id="bc-arrow"><i class="ri-arrow-right-s-line"></i></span>
                    <span id="bc-active">Add Customer Enquiry</span>
                </div>
            </section>
            <!-- END OF BREADCRUMB SECTION -->

            <div class="page-content">
                <section id="general-section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div id="form-box" class="general-box">
                                    <form name="edit_form" method="POST" action="" enctype="multipart/form-data">
                                        <p id="form-sub-title">Add Customer Enquiry</p>
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
                                                    <label>Enquiry Date</label>
                                                    <input type="date" class="form-control" id="date" name="date" maxlength="50" value="<?php echo date("Y-m-d")?>">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Enquiry Time</label>
                                                    <input type="time" class="form-control" id="time" name="time" maxlength="50" value="<?php echo date('h:i:s a') ?>">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Key In By</label>
                                                    <input type="text" class="form-control" id="s_id" name="s_id" maxlength="50" required value="">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Customer's Phone Number</label>
                                                    <input type="text" class="form-control" id="email" name="email" maxlength="50" required value="" onkeypress="return validateHP(this, event);">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Contact Method</label>
                                                    <select class="form-control js-example-basic-single" id="contact_method" name="contact_method" required>
                                                        <option selected disabled>Select Contact Method</option>
                                                        <option value="1" >Call</option>
                                                        <option value="2" >WhatsApp Message</option>
                                                        <option value="3" >Social Media</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Outlet's Location</label>
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
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Type of Services</label>
                                                    <select class="form-control js-example-basic-single" id="service_type" name="service_type" required>
                                                        <option selected disabled>Select Type of Services</option>
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
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Enquiry Category</label>
                                                    <select class="form-control js-example-basic-single" id="category" name="category" required>
                                                        <option selected disabled>Select Enquiry Category</option>
                                                        <option value="1" >Service Enquiry</option>
                                                        <option value="2" >Warranty</option>
                                                        <option value="3" >Complaint</option>
                                                        <option value="4" >Vacancy</option>
                                                        <option value="5" >Appointment</option>
                                                        <option value="6" >Supplier</option>
                                                        <option value="7" >Checking Car Status</option>
                                                        <option value="8" >Others</option>
                                                    </select>
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
                                                    <a href="<?php echo $base_url_dashboard; ?>/cc-customer.php" id="general-btn" class="btn2"><i class="ri-close-fill"></i>Cancel</a>
                                                    <button type="submit" id="general-btn" class="btn1"><i class="ri-save-3-fill"></i>Save & Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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
</body>
</html>