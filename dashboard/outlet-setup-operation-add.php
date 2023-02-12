 <?php
    require_once('script.php');
    require_once('../php/class/member.class.php');
    require_once('../php/function/location.function.php');
    require_once('../php/function/ui.function.php');

    $pg = "os";
    $subpg = "operation";

    //The Operation Manager Module : type 5
    $type = 5;

    if(isset($_POST['add']) && $_POST['add']=="add_form")
    {
        //Create object for member
        $OM = new member("member",$ALVADB);

        //Create object for Insert Member Service ($MS)
        $MS = new member("member_service",$ALVADB);

        $member_ID = mysqli_real_escape_string($ALVADB,$_POST['s_id']);

        $input = array
        (
            'status' =>mysqli_real_escape_string($ALVADB,$_POST['status']) ? 1 : 0,
            'member_ID' => $member_ID,
            'name' => mysqli_real_escape_string($ALVADB,$_POST['s_name']),
            'contact' => mysqli_real_escape_string($ALVADB,$_POST['contact']),
            'outlet_ID'=>mysqli_real_escape_string($ALVADB,$_POST['location']),
            'email' => mysqli_real_escape_string($ALVADB,$_POST['email']),
            'password' => $OM->setPassword("Aa12345678"),
            'created_date' => date("Y-m-d H:i:s"),
            'type' => $type
        );

        //Check Validation of exist of ID and Email 
        if( $OM->verifydata("member_ID" , $input['member_ID'])==1 or 
        $OM->verifydata("email" , $input['email'])==1)
        {
            echo "<script>window.location.href='outlet-setup-operation-add.php?process=invalid';</script>";
            exit;
        }

        //Insert Operation Manager Service
        insertMS($MS,$member_ID);


        //Insert Operation Manager Data
        $OM->adddata("outlet-setup-operation.php",$input);

    }

?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-layout-mode="dark">
<head>
    <meta charset="utf-8">
    <title>Outlet Setup | Operation Manager Module | Add Operation Manager | <?php echo $base_name; ?></title>
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
                    <span id="bc-active">Add Operation Manager</span>
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
                                        <p id="form-sub-title">Add Operation Manager</p>
                                        <!--Alert Message-->
                                        <?php alertinvalidmessage(); ?>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-check form-switch form-switch-success" id="form-checkbox-div">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="statusbox" name="status" checked>
                                                    <label class="form-check-label" for="statusbox">Status</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="input-group">
                                                    <label>Operation Manager ID <span>*</span></label>
                                                    <input type="text" class="form-control" id="s_id" name="s_id" maxlength="50" required  onchange="checkExist(0)">
                                                    <span id="idcheck"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <label>Operation Manager Name <span>*</span></label>
                                                    <input type="text" class="form-control" id="s_name" name="s_name" maxlength="50" required >
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="input-group">
                                                    <label>Contact No. <span>*</span></label>
                                                    <input type="text" class="form-control" id="contact" name="contact" maxlength="50" required onkeypress="return validateHP(this, event);">
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <label>Email <span>*</span></label>
                                                    <input type="text" class="form-control" id="email" name="email" maxlength="50" required onchange="checkExist(1)">
                                                    <span id="emailcheck"></span>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="input-group">
                                                    <label>Location <span>*</span></label>
                                                    <select class="form-control js-example-basic-single" id="location" name="location" required onchange="displayAddress()">
                                                        <option disabled selected>Select Location</option>
                                                        <?php
                                                        //Select Location For Operation Manager Manager (Optional) 
                                                        //import from ../php/function/location.function.php
                                                        selectlocation($ALVADB);
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control" id="address" name="address" maxlength="50" required disabled >
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="input-group" >
                                                    <label>Available Services <span>*</span></label>
                                                    <select class="form-control js-example-basic-single" id="available_servieces" multiple="multiple" name="available_services[]" required>
                                                        <option disabled >Select Available Services</option>
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
                                                    <input type="hidden" name="add" value="add_form">
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

    <!-- Checking Existing Email and ID in Input -->
    <script src="inc/checking-exist-input.js"></script>

</body>
</html>
<?php

function insertMS($object,$ID)
{
    
    foreach ($_POST['available_services'] as $service)
    {
    
        $input=array
        (
            'member_ID' => $ID,
            'service_code' => $service,
            'created_date' => date("Y-m-d H:i:s"),
            'status' => 1

        );

        $object->adddataonly($input);
    }
}
?>