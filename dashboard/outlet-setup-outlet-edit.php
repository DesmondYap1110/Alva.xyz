 <?php
    require_once('script.php');
    require_once('../php/class/member.class.php');
    require_once('../php/function/ui.function.php'); //For Button Status

    $pg = "os";
    $subpg = "outlet";

    //Create Object for Outlet Module: (tbname, dbconn)
    //Import from require_once('../php/class/member.class.php');
    $outlet = new member("outlet_module",$ALVADB);

    if(isset($_GET['oid']) && $_GET['oid']!=NULL && $_GET['oid']!="")
    {
        $outlet_ID=mysqli_real_escape_string($ALVADB,$_GET['oid']);


        //If the URL Parameter is NOT valid Force them OUT
        //Else display THE DATA BASED ON THE URL Parameter
        $row=isvalidParameter($outlet, $outlet_ID);


        //PART TO EDIT Outlet INFO
        editOutletInfo($outlet_ID, $outlet, $ALVADB);
    }
    else
    {
        echo "<script>window.location.href='outlet-setup-outlet.php?process=invalid';</script>";
        exit;
    }

?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-layout-mode="dark">
<head>
    <meta charset="utf-8">
    <title>Outlet Setup | Outlet Module | Edit Outlet | <?php echo $base_name; ?></title>
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
                    <a href="<?php echo $base_url_dashboard; ?>/outlet-setup-outlet.php">Outlet Module</a>
                    <span id="bc-arrow"><i class="ri-arrow-right-s-line"></i></span>
                    <span id="bc-active">Edit Outlet</span>
                </div>
            </section>
            <!-- END OF BREADCRUMB SECTION -->

            <div class="page-content">
                <section id="general-section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                                <div id="form-box" class="general-box">
                                    <form name="edit_form" method="POST" action="" enctype="multipart/form-data">
                                        <p id="form-sub-title">Edit Outlet</p>
                                        <?php alerteditmessage();?>
                                        <?php alertinvalidmessage(); ?>
                                       
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-check form-switch form-switch-success" id="form-checkbox-div">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="statusbox" name="status" <?php buttonstatus($row['status']); ?>>
                                                    <label class="form-check-label" for="statusbox">Status</label>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Outlet ID <span>*</span></label>
                                                    <input type="text" class="form-control" id="oid" name="oid" maxlength="50" required onchange="checkExist2(5,'<?php echo $outlet_ID; ?>')" value="<?php echo $row['outlet_ID']; ?>">
                                                    <span id="idcheck"></span>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Outlet Name <span>*</span></label>
                                                    <input type="text" class="form-control" id="name" name="name" maxlength="50" required value="<?php echo $row['name']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Location <span>*</span></label>
                                                    <input type="text" class="form-control" id="location" name="location" maxlength="50" required value="<?php echo $row['location']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Address <span>*</span></label>
                                                    <input type="text" class="form-control" id="address" name="address" maxlength="50" required value="<?php echo $row['address']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div id="form-btn-div">
                                                    <a href="<?php echo $base_url_dashboard; ?>/outlet-setup-outlet.php" id="general-btn" class="btn2"><i class="ri-close-fill"></i>Cancel</a>
                                                    <input type="hidden" name="edit" value="edit_form">
                                                    <button type="submit" id="general-btn" class="btn1">
                                                        <i class="ri-save-3-fill"></i>
                                                        Save Changes
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
<?php

function isvalidParameter($object,$ID)
{
    $len = $object->totaleachdata(" AND outlet_ID ='$ID'"); //Using ID
    

    if($len==0)
    {
        
        echo "<script>window.location.href='outlet-setup-outlet.php?process=invalid';</script>";
        exit;

        return 0;
    }
    else
    {
        return $object->get_row();
    }
}

function editOutletInfo($ID,$object,$dbconn)
{
    //$ID is from Parameter

    if(isset($_POST['edit']) && $_POST['edit']=="edit_form")
    {
        //$outlet_ID From Input
        $outlet_ID = mysqli_real_escape_string($dbconn,$_POST['oid']);

        $input = array
        (
            'status' =>mysqli_real_escape_string($dbconn,$_POST['status']) ? 1 : 0,
            'outlet_ID' => $outlet_ID,
            'name' => mysqli_real_escape_string($dbconn,$_POST['name']),
            'location' => mysqli_real_escape_string($dbconn,$_POST['location']),
            'address' => mysqli_real_escape_string($dbconn,$_POST['address'])

        );

        checkexist($object,$ID,$outlet_ID);

        //Update Function From Class
        $object->updateonly($input,'outlet_ID',$ID);

        echo "<script>window.location.href='outlet-setup-outlet-edit.php?oid=$outlet_ID&infoedit=succ';</script>";
        exit;
    }
}


function checkexist($object,$ID1,$ID2)
{
    //$ID1 => ID From Parameter
    //$ID2 => ID From Input Field


    //ID CHECK EXISTING
    if($ID1!=$ID2)
    {
        $check = $object -> verifydata("outlet_ID" , $ID2);

        if($check==1)
        {
            echo "<script>window.location.href='outlet-setup-outlet-edit.php?oid=$ID1&process=invalid';</script>";
            exit;
        }
    }
}

?>