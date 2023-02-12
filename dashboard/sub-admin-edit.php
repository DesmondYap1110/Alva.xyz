 <?php
    require_once('script.php');
    $pg = "sub";

?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-layout-mode="dark">
<head>
    <meta charset="utf-8">
    <title>Sub Admin Module | Edit Sub Admin | <?php echo $base_name; ?></title>
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
                    <a href="<?php echo $base_url_dashboard; ?>/sub-admin.php">Sub Admin Module</a>
                    <span id="bc-arrow"><i class="ri-arrow-right-s-line"></i></span>
                    <span id="bc-active">Edit Sub Admin</span>
                </div>
            </section>
            <!-- END OF BREADCRUMB SECTION -->

            <div class="page-content">
                <section id="general-section">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- FORM START -->
                            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                                <div id="form-box" class="general-box">
                                    <form name="edit_form" method="POST" action="" enctype="multipart/form-data">
                                        <p id="form-sub-title">Edit Sub Admin</p>
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
                                            <div class="col-lg-12">
                                                <div class="form-check form-switch form-switch-success" id="form-checkbox-div">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="statusbox" name="status" <?php if($row_member['status'] == 1){ ?>checked<?php }?>>
                                                    <label class="form-check-label" for="statusbox">Status</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Sub Admin ID <span>*</span></label>
                                                    <input type="text" class="form-control" id="s_id" name="s_id" maxlength="50" required value="Sub Admin Name One">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Sub Admin Name <span>*</span></label>
                                                    <input type="text" class="form-control" id="s_name" name="s_name" maxlength="50" required value="Sub Admin Name One">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Contact No. <span>*</span></label>
                                                    <input type="text" class="form-control" id="contact" name="contact" maxlength="50" required value="Sub Admin Name One" onkeypress="return validateHP(this, event);">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Email <span>*</span></label>
                                                    <input type="text" class="form-control" id="email" name="email" maxlength="50" required value="Sub Admin Name One">
                                                </div>
                                            </div>

                                            <!-- SUB ADMIN PRIVELEGE SECTION -->
                                            <div class="col-lg-12">
                                                <hr>
                                                <p id="form-sub-title">Sub Admin Privelege</p>

                                                <!-- SUB ADMIN PRIVELEGE TABLE -->
                                                <div id="table-div">
                                                    <table class="table table-bordered nowrap table-striped dt-responsive align-middle">
                                                        <thead>
                                                            <tr>
                                                                <th>Description</th>
                                                                <th class="text-center">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Customer Enquiry Report</td>
                                                                <td class="text-center">
                                                                    <div class="form-check form-switch form-switch-success">
                                                                        <input class="form-check-input" type="checkbox" role="switch" name="customer_enquiry_report" >
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Customer Appointment Report</td>
                                                                <td class="text-center">
                                                                    <div class="form-check form-switch form-switch-success">
                                                                        <input class="form-check-input" type="checkbox" role="switch" name="customer_appointment_report" >
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Customer Booking Report</td>
                                                                <td class="text-center">
                                                                    <div class="form-check form-switch form-switch-success">
                                                                        <input class="form-check-input" type="checkbox" role="switch" name="customer_booking_report" >
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Sales Summary Report</td>
                                                                <td class="text-center">
                                                                    <div class="form-check form-switch form-switch-success">
                                                                        <input class="form-check-input" type="checkbox" role="switch" name="sales_summary_report" >
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Daily Sales Report</td>
                                                                <td class="text-center">
                                                                    <div class="form-check form-switch form-switch-success">
                                                                        <input class="form-check-input" type="checkbox" role="switch" name="daily_sales_report" >
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Monthly Sales Report</td>
                                                                <td class="text-center">
                                                                    <div class="form-check form-switch form-switch-success">
                                                                        <input class="form-check-input" type="checkbox" role="switch" name="monthly_sales_report" >
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Product Sales Report</td>
                                                                <td class="text-center">
                                                                    <div class="form-check form-switch form-switch-success">
                                                                        <input class="form-check-input" type="checkbox" role="switch" name="product_sales_report" >
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Sales Report</td>
                                                                <td class="text-center">
                                                                    <div class="form-check form-switch form-switch-success">
                                                                        <input class="form-check-input" type="checkbox" role="switch" name="sales_report" >
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Enquiry & Walk-In Statistic Report</td>
                                                                <td class="text-center">
                                                                    <div class="form-check form-switch form-switch-success">
                                                                        <input class="form-check-input" type="checkbox" role="switch" name="enquiry_walk_in_report" >
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Queue Management Report</td>
                                                                <td class="text-center">
                                                                    <div class="form-check form-switch form-switch-success">
                                                                        <input class="form-check-input" type="checkbox" role="switch" name="queue_management_report" >
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Operation Statistic Report</td>
                                                                <td class="text-center">
                                                                    <div class="form-check form-switch form-switch-success">
                                                                        <input class="form-check-input" type="checkbox" role="switch" name="operation_statistic_report" >
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Queue Management Summary Report</td>
                                                                <td class="text-center">
                                                                    <div class="form-check form-switch form-switch-success">
                                                                        <input class="form-check-input" type="checkbox" role="switch" name="queue_managemert_summary_report" >
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Revenue Audit Report</td>
                                                                <td class="text-center">
                                                                    <div class="form-check form-switch form-switch-success">
                                                                        <input class="form-check-input" type="checkbox" role="switch" name="revenue_audit_report" >
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- END OF SUBADMIN PRIVELEGE TABLE -->
                                            </div>
                                            <!-- END OF SUB ADMIN PRIVELEGE SECTION -->

                                            <div class="col-lg-12">
                                                <div id="form-btn-div">
                                                    <a href="<?php echo $base_url_dashboard; ?>/sub-admin.php" id="general-btn" class="btn2"><i class="ri-close-fill"></i>Cancel</a>
                                                    <button type="submit" id="general-btn" class="btn1"><i class="ri-save-3-fill"></i>Save Changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- FORM END -->

                            <!-- CHANGE PASSWORD SECTION -->
                            <?php include "outlet-setup-change-password.php" ?>
                            <!-- END OF CHANGE PASSWORD SECTION -->

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