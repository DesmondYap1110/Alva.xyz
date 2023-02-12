 <?php
    require_once('script.php');
    require_once('../php/class/member.class.php');
    require_once('../php/function/location.function.php');

    $pg = "os";
    $subpg = "manager";

    //The staff in Outlet Manager Module : type 2
    $type = 2;

    if(isset($_POST['add']) && $_POST['add']=="add_form")
    {
        $oom = new member("member",$ALVADB);

        $input = array
        (
            'status' =>mysqli_real_escape_string($ALVADB,$_POST['status']) ? 1 : 0,
            'member_ID' => mysqli_real_escape_string($ALVADB,$_POST['oid']),
            'name' => mysqli_real_escape_string($ALVADB,$_POST['oname']),
            'contact' => mysqli_real_escape_string($ALVADB,$_POST['contact']),
            'email' => mysqli_real_escape_string($ALVADB,$_POST['email']),
            'outlet_ID' => mysqli_real_escape_string($ALVADB,$_POST['location']),
            'password' => $oom->setPassword("aA12345678"),
            'created_date' => date("Y-m-d H:i:s"),
            'type' => $type
        );


        if( $oom->verifydata("member_ID" , $input['member_ID'])==1 or 
        $oom->verifydata("email" , $input['email'])==1)
        {
            echo "<script>window.location.href='outlet-setup-manager-add.php?process=invalid';</script>";
            exit;
        }

        $oom->adddata("outlet-setup-manager.php",$input);

    }



?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-layout-mode="dark">
<head>
    <meta charset="utf-8">
    <title>Outlet Setup | Outlet Manager Module | Add Outlet Manager | <?php echo $base_name; ?></title>
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
                    <a href="<?php echo $base_url_dashboard; ?>/outlet-setup-manager.php">Outlet Manager Module</a>
                    <span id="bc-arrow"><i class="ri-arrow-right-s-line"></i></span>
                    <span id="bc-active">Add Outlet Manager</span>
                </div>
            </section>
            <!-- END OF BREADCRUMB SECTION -->

            <div class="page-content">
                <section id="general-section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-8">
                                <div id="form-box" class="general-box">
                                    <form name="add_form" method="POST" action="" enctype="multipart/form-data">
                                        <p id="form-sub-title">Add Outlet Manager</p>
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
                                                    <input class="form-check-input" type="checkbox" role="switch" id="statusbox" name="status" checked>
                                                    <label class="form-check-label" for="statusbox">Status</label>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Outlet Manager ID</label>
                                                    <input type="text" class="form-control" id="s_id" name="oid" maxlength="50" required onchange="checkExist(0)">
                                                    <span id="idcheck"></span>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-7 col-md-8 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Outlet Manager Name</label>
                                                    <input type="text" class="form-control" id="oname" name="oname" maxlength="50" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Contact No. <span>*</span></label>
                                                    <input type="text" class="form-control" id="contact" name="contact" maxlength="50" required onkeypress="return validateHP(this, event);">
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-7 col-md-8 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Email <span>*</span></label>
                                                    <input type="email" class="form-control" id="email" name="email" maxlength="50" required onchange="checkExist(1)">
                                                    <span id="emailcheck"></span>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Location <span>*</span></label>
                                                    <select class="form-control js-example-basic-single" id="location" name="location" required onchange="displayAddress()">
                                                        <option disabled selected>Select Location</option>
                                                        <?php
                                                        //Select Location For Outlet Manager (Optional) 
                                                        //import from ../php/function/location.function.php
                                                        selectlocation($ALVADB);
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control" id="address" name="address" maxlength="50" readonly="readonly" disabled>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div id="form-btn-div">
                                                    <a href="<?php echo $base_url_dashboard; ?>/outlet-setup-manager.php" id="general-btn" class="btn2">
                                                        <i class="ri-close-fill"></i>
                                                        Cancel
                                                    </a>
                                                    <input type="hidden" name="add" value="add_form">
                                                    <button type="submit" id="general-btn" class="btn1">
                                                        <i class="ri-save-3-fill"></i>Save Changes
                                                    </button>
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

    <!-- Checking Existing Email and ID in Input -->
    <script src="inc/checking-exist-input.js"></script>

</body>
</html>