 <?php
    require_once('script.php');
    require_once('../php/class/member.class.php');
    require_once('../php/function/ui.function.php'); //For Button Status
    require_once('../php/function/location.function.php');

    $pg = "os";
    $subpg = "operation";

    //The staff in Outlet Operation Module : type 5
    $type = 5;

    //Create Object for Operation Manager
    //Import from require_once('../php/class/member.class.php');
    $OM = new member("member",$ALVADB);

    //Create Object for Location
    $outlet = new member("outlet_module",$ALVADB);

    //Create object for Insert Member Service ($MS)
    $MS = new member("member_service",$ALVADB);

    if(isset($_GET['mid']) && $_GET['mid']!=NULL && $_GET['mid']!="")
    {
        //From Link
        $member_ID=mysqli_real_escape_string($ALVADB,$_GET['mid']);

        //Link for Password Edit Success
        $url= "outlet-setup-operation-edit.php?mid=$member_ID&edit=succ";

        //Link for Password Edit Fail
        $urlfail= "outlet-setup-operation-edit.php?mid=$member_ID&edit=fail";

        //If the URL Parameter is NOT valid Force them OUT
        //Else display THE DATA BASED ON THE URL Parameter
        $row=isvalidParameter($OM, $member_ID, $type);


        //PART TO EDIT MEMBER INFO
        editmemberInfo($member_ID, $OM, $MS, $ALVADB);

    }
    else
    {
        echo "<script>window.location.href='outlet-setup-operation.php?process=invalid';</script>";
        exit;
    }


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
                                                    <label>Operation Manager ID <span>*</span></label>
                                                    <input type="text" class="form-control" id="s_id" name="s_id" maxlength="50" required onchange="checkExist2(3,'<?php echo $member_ID;?>')" value="<?php echo $row['member_ID']; ?>">
                                                    <span id="idcheck"></span>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Operation Manager Name<span>*</span></label>
                                                    <input type="text" class="form-control" id="s_name" name="s_name" maxlength="50" required value="<?php echo $row['name']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Contact No. <span>*</span></label>
                                                    <input type="text" class="form-control" id="contact" name="contact" maxlength="50" required value="<?php echo $row['contact']; ?>" onkeypress="return validateHP(this, event);">
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Email <span>*</span></label>
                                                    <input type="text" class="form-control" id="email" name="email" maxlength="50" required onchange="checkExist2(4,'<?php echo $member_ID;?>')" value="<?php echo $row['email']; ?>">
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
                                                        selectlocation2($ALVADB,$row['outlet_ID']);
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12 col-12">
                                                <div class="input-group">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control" id="address" name="address" maxlength="50" required disabled value="<?php echo displaylocation($outlet,$row['outlet_ID']); ?>" >
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="input-group" >
                                                    <label>Available Services <span>*</span></label>
                                                    <select class="form-control js-example-basic-single" id="available_servieces" multiple="multiple" name="available_services[]" required>
                                                        <option disabled >Select Available Services</option>
                                                        <option value="1" <?php AvailableS($MS,$member_ID,1); ?>>Tint</option>
                                                        <option value="2" <?php AvailableS($MS,$member_ID,2); ?>>Coat</option>
                                                        <option value="3" <?php AvailableS($MS,$member_ID,3);?>>Aircond</option>
                                                        <option value="4" <?php AvailableS($MS,$member_ID,4);?>>Paint</option>
                                                        <option value="5" <?php AvailableS($MS,$member_ID,5);?>>Wrap</option>
                                                    </select>
                                                </div>
                                            </div>                                   
                                            <div class="col-lg-12">
                                                <div id="form-btn-div">
                                                    <a href="<?php echo $base_url_dashboard; ?>/outlet-setup-operation.php" id="general-btn" class="btn2"><i class="ri-close-fill"></i>Cancel</a>
                                                    <input type="hidden" name="edit" value="edit_form">
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

    <!-- Checking Existing Email and ID in Input -->
    <script src="inc/checking-exist-input.js"></script>
</body>
</html>
<?php

function isvalidParameter($object,$ID,$type)
{
    $len = $object->totaleachdata(" AND member_ID ='$ID' AND type ='$type'"); //Using ID
    

    if($len==0)
    {
        
        echo "<script>window.location.href='outlet-setup-operation.php?process=invalid';</script>";
        exit;

        return 0;
    }
    else
    {
        return $object->get_row();
    }
}

function editmemberInfo($ID,$object,$object2,$dbconn)
{
    //$ID is from Parameter

    if(isset($_POST['edit']) && $_POST['edit']=="edit_form")
    {
        //$member_ID From Input
        $member_ID = mysqli_real_escape_string($dbconn,$_POST['s_id']);
        $email = mysqli_real_escape_string($dbconn,$_POST['email']);

        $input = array
        (
            'status' =>mysqli_real_escape_string($dbconn,$_POST['status']) ? 1 : 0,
            'member_ID' => $member_ID,
            'name' => mysqli_real_escape_string($dbconn,$_POST['s_name']),
            'contact' => mysqli_real_escape_string($dbconn,$_POST['contact']),
            'outlet_ID' => mysqli_real_escape_string($dbconn,$_POST['location']),
            'email' => $email

        );

        checkexist($object,$ID,$member_ID,$email);

        //Update Function From Class
        $object->updateonly($input,'member_ID',$ID);

        //Edit Operation Manager Service
        editMS($object2,$member_ID);

        echo "<script>window.location.href='outlet-setup-operation-edit.php?mid=$member_ID&infoedit=succ';</script>";
        exit;
    }
}

function displaylocation($object,$ID)
{
    $len=$object->totaleachdata(" AND outlet_ID='$ID'");

    $row=$object->get_row();

    return $row['address'];

}

function checkexist($object,$ID1,$ID2,$email)
{
    //$ID1 => ID From Parameter
    //$ID2 => ID From Input Field
    //$Email => email From Input Field


    //ID CHECK EXISTING
    if($ID1!=$ID2)
    {
        $check = $object -> verifydata("member_ID" , $ID2);

        if($check==1)
        {
            echo "<script>window.location.href='outlet-setup-operation-edit.php?mid=$ID1&process=invalid';</script>";
            exit;
        }
        
    }

    //EMAIL CHECK EXISTING
    $isMyEmail = $object-> verifydatac(" AND member_ID='$ID1' AND email='$email'" );

    if($isMyEmail==0)
    {
        $check = $object -> verifydata("email" , $email);
        if($check==1)
        {
            echo "<script>window.location.href='outlet-setup-operation-edit.php?mid=$ID1&process=invalid';</script>";
            exit;
        }
    }
}

function editMS($object,$ID)
{
    $object->deletedata(" member_ID='$ID'");


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

function AvailableS($object,$ID,$value)
{
    $total_row = $object->totaldata(" AND member_ID='$ID' "); //Using ID

    if($total_row>0)
    {
        for($i=0; $i<$total_row; $i++)
        {
            $data= $object->get_row()[$i]['service_code'];

            if($data==$value){echo "selected";}
        }
    }
}

?>