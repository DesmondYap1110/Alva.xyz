 <?php
    require_once('script.php');
    $pg = "mm";

?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-layout-mode="dark">
<head>
    <meta charset="utf-8">
    <title>Member Management | Add Member | <?php echo $base_name; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- HEADER CONS SECTION -->
    <?php include "inc/header-cons.php"; ?>
    <!-- END OF HEADER CONS SECTION -->

    <!-- COLOR THEME SECTION -->
    <?php include "inc/master-theme.php"; ?>
    <!-- END OF COLOR THEME SECTION -->

    <style>
        .nav-tabs {
            border-bottom: 1px solid #e8e8f7;
            border-bottom-width: 0;
        }
        .item1-links li {
            width: 100%;
            display: block;
        }
        #md-dialog {
            max-width: 800px;
        }
        #md-content {
            width: 800px;
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
                    <a href="<?php echo $base_url_dashboard; ?>/member-management.php">Member Management</a>
                    <span id="bc-arrow"><i class="ri-arrow-right-s-line"></i></span>
                    <span id="bc-active">Add Member</span>
                </div>
            </section>
            <!-- END OF BREADCRUMB SECTION -->

            <div class="page-content">
                <section id="general-section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12">
                                <div id="form-box" class="general-box">
                                    <form name="edit_form" method="POST" action="" enctype="multipart/form-data">
                                        <p id="form-sub-title">Add Member</p>
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
                                        <!-- ACCOUNT INFOMATION -->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-check form-switch form-switch-success" id="form-checkbox-div">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="statusbox" name="status" <?php if($row_member['status'] == 1){ ?>checked<?php }?>>
                                                    <label class="form-check-label" for="statusbox">Status</label>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Full Name</label>
                                                    <input type="text" class="form-control" id="f_name" name="f_name" maxlength="50" required value="">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Referral Code</label>
                                                    <input type="text" class="form-control" id="referral" name="referral" maxlength="50" required value="">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Contact Number</label>
                                                    <input type="text" class="form-control" id="contact" name="contact" maxlength="50" required value="" onkeypress="return validateHP(this, event);">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Registered Email</label>
                                                    <input type="text" class="form-control" id="email" name="email" maxlength="50" required value="">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Car Registration No.</label>
                                                    <input type="text" class="form-control" id="car_plate" name="car_plate" maxlength="50" required value="">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Car Model</label>
                                                    <input type="text" class="form-control" id="car_model" name="car_model" maxlength="50" required value="">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Visit Date</label>
                                                    <input type="text" class="form-control" id="visit_date" name="visit_date" maxlength="50" required value="">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Amount Spend</label>
                                                    <input type="text" class="form-control" id="total_amount" name="total_amount" maxlength="50" required value="">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Commission Entitled</label>
                                                    <input type="text" class="form-control" id="commission" name="commission" maxlength="50" required value="">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Verified Status</label>
                                                    <input type="text" class="form-control" id="verified" name="verified" maxlength="50" required value="">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END OF ACCOUNT INFORMATION -->

                                        <!-- DOCUMENT VERIFICATION -->
                                        <div class="row">
                                            <div class="col-lg-12"><hr></div>
                                            <div class="col-lg-12"><p id="form-sub-title">Document Verification</p></div>
                                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>My Kad (front)</label>
                                                    <div id="button-input-group">
                                                        <div style="width: 100%;">
                                                            <input class="form-control file-input" type="file" id="formFile" name="upload">
                                                            <span id="note-p" class="note-color-1">Allow Format: JPG, JPEG, PNG, PDF (Less than 5MB)</span>
                                                        </div>
                                                        <!-- DISPLAY DOCUMENT BUTTON -->
                                                        <a href="<?php echo $base_url; ?>/img/bg/bg14.jpg" target="_blank" style="margin-left:5px;" id="tb-ac-btn-5" class="tb-ac-btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="View Document"><i class="ri-file-text-line"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>My Kad (back)</label>
                                                    <div id="button-input-group">
                                                        <div style="width: 100%;">
                                                            <input class="form-control file-input" type="file" id="formFile" name="upload">
                                                            <span id="note-p" class="note-color-1">Allow Format: JPG, JPEG, PNG, PDF (Less than 5MB)</span>
                                                        </div>
                                                        <!-- DISPLAY DOCUMENT BUTTON -->
                                                        <a href="<?php echo $base_url; ?>/img/bg/bg14.jpg" target="_blank" style="margin-left:5px;" id="tb-ac-btn-5" class="tb-ac-btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="View Document"><i class="ri-file-text-line"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Geran / Insurance</label>
                                                    <div id="button-input-group">
                                                        <div style="width: 100%;">
                                                            <input class="form-control file-input" type="file" id="formFile" name="upload">
                                                            <span id="note-p" class="note-color-1">Allow Format: JPG, JPEG, PNG, PDF (Less than 5MB)</span>
                                                        </div>
                                                        <!-- DISPLAY DOCUMENT BUTTON -->
                                                        <a href="<?php echo $base_url; ?>/img/bg/bg14.jpg" target="_blank" style="margin-left:5px;" id="tb-ac-btn-5" class="tb-ac-btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="View Document"><i class="ri-file-text-line"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Bank Statement</label>
                                                    <div id="button-input-group">
                                                        <div style="width: 100%;">
                                                            <input class="form-control file-input" type="file" id="formFile" name="upload">
                                                            <span id="note-p" class="note-color-1">Allow Format: JPG, JPEG, PNG, PDF (Less than 5MB)</span>
                                                        </div>
                                                        <!-- DISPLAY DOCUMENT BUTTON -->
                                                        <a href="<?php echo $base_url; ?>/img/bg/bg14.jpg" target="_blank" style="margin-left:5px;" id="tb-ac-btn-5" class="tb-ac-btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="View Document"><i class="ri-file-text-line"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END OF DOCUMENT VERIFICATION -->

                                        <!-- MANAGE PAYMENT METHOD -->
                                        <div class="row">
                                            <div class="col-lg-12"><hr></div>
                                            <div class="col-lg-12"><p id="form-sub-title">Manage Payment Method</p></div>

                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Bank Name</label>
                                                    <input type="text" class="form-control" id="bank_name" name="bank_name" maxlength="50" required value="">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Account Holder</label>
                                                    <input type="text" class="form-control" id="account_holder" name="account_holder" maxlength="50" required value="">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Account Number</label>
                                                    <input type="text" class="form-control" id="account_num" name="account_num" maxlength="50" required value="">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END OF MANAGE PAYMENT METHOD -->

                                        <div class="row">
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