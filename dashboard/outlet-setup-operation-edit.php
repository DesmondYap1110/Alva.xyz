 <?php
    require_once('script.php');
    $pg = "os";
    $subpg = "operation";

?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-layout-mode="dark">
<head>
    <meta charset="utf-8">
    <title>Outlet Setup | Operation Manager Module | Edit Operation Manager | <?php echo $base_name; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- HEADER CONS SECTION -->
    <?php include "inc/header-cons.php"; ?>
    <!-- END OF HEADER CONS SECTION -->

    <!-- COLOR THEME SECTION -->
    <?php include "inc/master-theme.php"; ?>
    <!-- END OF COLOR THEME SECTION -->

    <style>

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
                    Outlet Setup
                    <span id="bc-arrow"><i class="ri-arrow-right-s-line"></i></span>                    
                    <a href="<?php echo $base_url_dashboard; ?>/outlet-setup-operation.php">Operation Manager Module</a>
                    <span id="bc-arrow"><i class="ri-arrow-right-s-line"></i></span>
                    <span id="bc-active">Edit Operation Manager</span>
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
                                        <p id="form-sub-title">Edit Operation Manager</p>
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
                                                    <input class="form-check-input" type="checkbox" role="switch" id="statusbox" name="status">
                                                    <label class="form-check-label" for="statusbox">Status</label>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Operation Manager ID <span>*</span></label>
                                                    <input type="text" class="form-control" id="operation_manager_id" name="operation_manager_id" maxlength="50" required value="A123333">
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Operation Manager Name <span>*</span></label>
                                                    <input type="text" class="form-control" id="operation_manager_name" name="operation_manager_name" maxlength="50" required value="Sample Name">
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Contact No. <span>*</span></label>
                                                    <input type="text" class="form-control" id="operation_manager_contact" name="operation_manager_contact" maxlength="50" required value="012345789" onkeypress="return validateHP(this, event);">
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Email <span>*</span></label>
                                                    <input type="text" class="form-control" id="operation_manager_email" name="operation_manager_email" maxlength="50" required value="">
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Location <span>*</span></label>
                                                    <select class="form-control js-example-basic-single" id="locate" name="locate" required>
                                                        <option disabled>Select Location</option>
                                                        <option value="1" selected>Damansara</option>
                                                        <option value="2" >ALVAPJ</option>
                                                        <option value="3" >Melaka</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control" id="add" name="add" maxlength="50" required disabled value="23, Jalan PJU 10/1a, Damansara Damai, 47830 Petaling Jaya, Selangor">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="input-group" >
                                                    <label>Available Services <span>*</span></label>
                                                    <select class="form-control js-example-basic-single" id="available_servieces" multiple="multiple" name="available_servieces" required>
                                                        <option disabled>Select Available Services</option>
                                                        <option value="1" selected>Tint</option>
                                                        <option value="2" >Coat</option>
                                                        <option value="3" >Aircond</option>
                                                        <option value="4" >Paint</option>
                                                        <option value="5" >Wrap</option>
                                                    </select>
                                                </div>
                                            </div>

                                            
                                            <div class="col-lg-12">
                                                <div id="form-btn-div">
                                                    <a href="<?php echo $base_url_dashboard; ?>/outlet-setup-operation.php" id="general-btn" class="btn2"><i class="ri-close-fill"></i>Cancel</a>
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