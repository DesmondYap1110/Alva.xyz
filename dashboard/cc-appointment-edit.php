 <?php
    require_once('script.php');
    $pg = "cc";
    $subpg = "appointment";

	date_default_timezone_set("Asia/Kuala_Lumpur");

?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-layout-mode="dark">
<head>
    <meta charset="utf-8">
    <title>Call Center | New Customer Appointment | Edit New Customer Appointment | <?php echo $base_name; ?></title>
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
                    <a href="<?php echo $base_url_dashboard; ?>/cc-appointment.php">New Customer Appointment</a>
                    <span id="bc-arrow"><i class="ri-arrow-right-s-line"></i></span>
                    <span id="bc-active">Edit New Customer Appointment</span>
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
                                        <p id="form-sub-title">Edit New Customer Appointment</p>
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
                                                    <input type="date" class="form-control" id="date" name="date" maxlength="50" required value="">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Key in Time</label>
                                                    <input type="time" class="form-control" id="time" name="time" maxlength="50" required value="">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Key In By</label>
                                                    <input type="text" class="form-control" id="key_in" name="key_in" maxlength="50" required value="Mohamad">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Appointment Date</label>
                                                    <input class="form-control" id="appointment_date" name="appointment_date" maxlength="50" value="18/01/2023" data-provider="flatpickr" data-date-format="d M, Y">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Appointment Time</label>
                                                    <select class="form-control js-example-basic-single" id="appointment_time" name="appointment_time" required>
                                                        <option selected disabled>Select Appointment Time</option>
                                                        <option value="1" selected >09:00 AM (1)</option>
                                                        <option value="2" >09:30 AM (0)</option>
                                                        <option value="3" >10:00 AM (0)</option>
                                                        <option value="4" >10:30 AM (0)</option>
                                                        <option value="5" >11:00 AM (0)</option>
                                                        <option value="6" >11:30 AM (0)</option>
                                                        <option value="7" >12:00 PM (0)</option>
                                                        <option value="8" >12:30 PM (0)</option>
                                                        <option value="9" >01:00 PM (0)</option>
                                                        <option value="10">01:30 PM (0)</option>
                                                        <option value="11">02:00 PM (0)</option>
                                                        <option value="12">02:30 PM (0)</option>
                                                        <option value="13">03:00 PM (0)</option>
                                                        <option value="14">03:30 PM (0)</option>
                                                        <option value="15">04:00 PM (0)</option>
                                                        <option value="16">04:30 PM (0)</option>
                                                        <option value="17">05:00 PM (0)</option>
                                                        <option value="18">05:30 PM (0)</option>
                                                        <option value="19">06:00 PM (0)</option>
                                                        <option value="20">06:30 PM (0)</option>
                                                        <option value="21">07:00 PM (0)</option>
                                                        <option value="22">07:30 PM (0)</option>
                                                        <option value="23">08:00 PM (0)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Customer's Phone Number</label>
                                                    <input type="text" class="form-control" id="phone" name="phone" maxlength="50" required value="011-123456789" onkeypress="return validateHP(this, event);">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control" id="email" name="email" maxlength="50" required value="email@email.com">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Customer Name</label>
                                                    <input type="text" class="form-control" id="customer_name" name="customer_name" maxlength="50" required value="Alvin">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Car Model</label>
                                                    <input type="text" class="form-control" id="car_model" name="car_model" maxlength="50" required value="Persona">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Number Plate</label>
                                                    <input type="text" class="form-control" id="plate" name="plate" maxlength="50" required value="MCG9967">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Outlet's Location</label>
                                                    <select class="form-control js-example-basic-single" id="outlet" name="outlet">
                                                        <option disabled>Select Outlet</option>
                                                        <option value="1" selected>Damansara Damai</option>
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
                                                    <label>Services</label>
                                                    <select class="form-control js-example-basic-single" id="service" name="service" required>
                                                        <option disabled>Select Services</option>
                                                        <option value="1" selected>Tint</option>
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
                                            <div class="col-lg-12">
                                                <div class="input-group">
                                                    <label>Remarks</label>
                                                    <textarea class="form-control" name="remarks" id="remarks" cols="30" rows="10" required=""></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div id="form-btn-div">
                                                    <a href="<?php echo $base_url_dashboard; ?>/cc-appointment.php" id="general-btn" class="btn2"><i class="ri-close-fill"></i>Cancel</a>
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

    <script>
        $(document).ready(function(){
            document.getElementById('appointment_date').readOnly = false;
        });
    </script>

</body>
</html>