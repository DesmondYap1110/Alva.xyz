 <?php
    require_once('script.php');
    require_once('../php/class/member.class.php');
    require_once('../php/function/location.function.php');

    $pg = "os";
    $subpg = "sales";

    //The Sales Advisor in Sales Advisor Module : type 3
    $type = 3;

    if(isset($_POST['add']) && $_POST['add']=="add_form")
    {
        //Object for Sales Advisor
        $sa = new member("member",$ALVADB);

        //Object for Comission Rate 
        $cr = new member("commision_rate",$ALVADB);

        //Member Info
        $minfo = array
        (
            'status' =>mysqli_real_escape_string($ALVADB,$_POST['status']) ? 1 : 0,
            'leader_ID' => mysqli_real_escape_string($ALVADB,$_POST['leader']),
            'member_ID' => mysqli_real_escape_string($ALVADB,$_POST['s_id']),
            'name' => mysqli_real_escape_string($ALVADB,$_POST['s_name']),
            'contact' => mysqli_real_escape_string($ALVADB,$_POST['contact']),
            'email' => mysqli_real_escape_string($ALVADB,$_POST['email']),
            'outlet_ID' => mysqli_real_escape_string($ALVADB,$_POST['location']),
            'password' => $sa->setPassword("Aa12345678"),
            'created_date' => date("Y-m-d H:i:s"),
            'type' => $type
        );

        //Commision Rate Info

        $crinfo = array
        (
            'msb_1' => mysqli_real_escape_string($ALVADB,$_POST['msb1']),
            'msb_2' => mysqli_real_escape_string($ALVADB,$_POST['msb2']),
            'mrb_1' => mysqli_real_escape_string($ALVADB,$_POST['mrb1']),
            'mrb_2' => mysqli_real_escape_string($ALVADB,$_POST['mrb2']),
            'mrb_3' => mysqli_real_escape_string($ALVADB,$_POST['mrb3']),
            'mrb_4' => mysqli_real_escape_string($ALVADB,$_POST['mrb4']),
            'c1' => mysqli_real_escape_string($ALVADB,$_POST['c1']),
            'c2' => mysqli_real_escape_string($ALVADB,$_POST['c2']),
            'bsa' => mysqli_real_escape_string($ALVADB,$_POST['bsa']),
            'member_ID' => mysqli_real_escape_string($ALVADB,$_POST['s_id'])
        );


        if( $sa->verifydata("member_ID" , $minfo['member_ID'])==1 or 
        $sa->verifydata("email" , $minfo['email'])==1)
        {
            echo "<script>window.location.href='outlet-setup-sales-add.php?process=invalid';</script>";
            exit;
        }

        $sa->adddataonly($minfo);
        $cr->adddataonly($crinfo);

        $togo="outlet-setup-sales.php?add=succ";
       	header(sprintf("Location: %s",$togo)); 


    }

?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-layout-mode="dark">
<head>
    <meta charset="utf-8">
    <title>Outlet Setup | Sales Advisor Module | Add Sales Advisor | <?php echo $base_name; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- HEADER CONS SECTION -->
    <?php include "inc/header-cons.php"; ?>
    <!-- END OF HEADER CONS SECTION -->

    <!-- COLOR THEME SECTION -->
    <?php include "inc/master-theme.php"; ?>
    <!-- END OF COLOR THEME SECTION -->

    <style>
        .table-cse th:nth-child(2), .table-cse td:nth-child(2) {
            text-align: center;
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
                    Outlet Setup
                    <span id="bc-arrow"><i class="ri-arrow-right-s-line"></i></span>                    
                    <a href="<?php echo $base_url_dashboard; ?>/outlet-setup-sales.php">Sales Advisor Module</a>
                    <span id="bc-arrow"><i class="ri-arrow-right-s-line"></i></span>
                    <span id="bc-active">Add Sales Advisor</span>
                </div>
            </section>
            <!-- END OF BREADCRUMB SECTION -->

            <div class="page-content">
                <section id="general-section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                                <div id="form-box" class="general-box">
                                    <form name="add_form" method="POST" action="" enctype="multipart/form-data">
                                        <p id="form-sub-title">Add Sales Advisor</p>
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
                                            <div class="col-lg-4">
                                                <div class="input-group">
                                                    <label>Sales Leader <span>*</span></label>
                                                    <select class="form-control js-example-basic-single" id="leader" name="leader" required >
                                                        <option disabled selected>Select Sales Leader</option>
                                                        <option value="" >No Leader</option>
                                                        <?php
                                                        //display leader
                                                        allMember($ALVADB);
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div></div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="input-group">
                                                    <label>Sales Advisor ID <span>*</span></label>
                                                    <input type="text" class="form-control" id="s_id" name="s_id" maxlength="50" required onchange="checkExist(0)">
                                                    <span id="idcheck"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <label>Sales Advisor Name <span>*</span></label>
                                                    <input type="text" class="form-control" id="s_name" name="s_name" maxlength="50" required>
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
                                                    <input type="text" class="form-control" id="address" name="address" maxlength="50" required disabled >
                                                </div>
                                            </div>

                                            <!-- COMMISSION RATE SECTION -->
                                            <div class="col-lg-12">
                                                <hr>
                                                <p id="form-sub-title">Commission Rate</p>

                                                <!-- COMMISSION RATE TABLE -->
                                                <div id="table-div">
                                                    <table class="table-cse table table-bordered nowrap table-striped align-middle">
                                                        <tbody>
                                                            <tr>   
                                                                <th colspan="2">Bonus Scheme 1</th>
                                                            </tr>
                                                            <tr>
                                                                <td class="tb-title-td">Monthly Service Bonus</td>
                                                                <td class="tb-title-td">Amount (RM)</td>
                                                            </tr>
                                                            <tr>
                                                                <td>RM 2,000 - RM 2,999.99</td>
                                                                <td><input type="text" class="form-control camount" id="msb1" name="msb1" maxlength="20" required value="20.00" onkeypress="return isNumberKey(this,event);"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>RM 3,000 or Above</td>
                                                                <td><input type="text" class="form-control camount" id="msb2" name="msb2" maxlength="50" required value="50.00" onkeypress="return isNumberKey(this,event);"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="tb-title-td">Monthly Rating Bonus</td>
                                                                <td class="tb-title-td">Percentage(%) of Monthly Service Bonus</td>
                                                            </tr>
                                                            <tr>
                                                                <td>0 - 2</td>
                                                                <td><input type="text" class="form-control camount" id="mrb1" name="mrb1" maxlength="20" required value="0" onkeypress="return isNumberKey(this,event);"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>3 - 5</td>
                                                                <td><input type="text" class="form-control camount" id="mrb2" name="mrb2" maxlength="20" required value="50" onkeypress="return isNumberKey(this,event);"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>6 - 8</td>
                                                                <td><input type="text" class="form-control camount" id="mrb3" name="mrb3" maxlength="20" required value="75" onkeypress="return isNumberKey(this,event);"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>9 - 10</td>
                                                                <td><input type="text" class="form-control camount" id="mrb4" name="mrb4" maxlength="20" required value="100" onkeypress="return isNumberKey(this,event);"></td>
                                                            </tr>
                                                            <tr>   
                                                                <th colspan="2">Bonus Scheme 2</th>
                                                            </tr>
                                                            <tr>
                                                                <td class="tb-title-td">3-month Sales Bonus</td>
                                                                <td class="tb-title-td"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Condition 1 : Total Sales Closed</td>
                                                                <td><input type="text" class="form-control" id="c1" name="c1" maxlength="20" required value="35" onkeypress="return validateInt(this, event);"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Condition 2 : Total Sales Amount (RM)</td>
                                                                <td><input type="text" class="form-control camount" id="c2" name="c2" maxlength="50" required value="3000.00" onkeypress="return isNumberKey(this,event);"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Bonus for SA's Parent (RM)</td>
                                                                <td><input type="text" class="form-control camount" id="bsa" name="bsa" maxlength="50" required value="888.00" onkeypress="return isNumberKey(this,event);"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- END OF COMMISSION RATE TABLE -->
                                            </div>
                                            <!-- END OF COMMISSION RATE SECTION -->
                                            <div class="col-lg-12">
                                                <div id="form-btn-div">
                                                    <a href="<?php echo $base_url_dashboard; ?>/outlet-setup-sales.php" id="general-btn" class="btn2">
                                                        <i class="ri-close-fill"></i>
                                                        Cancel
                                                    </a>
                                                    <input type="hidden" name="add" value="add_form">
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

    <!-- Validation Input -->
    <script src="inc/validation-input.js"></script>

    <!-- Checking Existing Email and ID in Input -->
    <script src="inc/checking-exist-input.js"></script>

</body>
</html>
<?php

function allMember($dbconn)
{
    $sql = "SELECT * FROM `member` WHERE leader_ID ='' AND deleted='0' AND type='3'";
    $query = mysqli_query($dbconn, $sql) or die (mysqli_error($dbconn));
    $total_row = mysqli_num_rows($query);

    $data=array();

    if($total_row>0)
    {
        while($row = mysqli_fetch_assoc($query))
        {
            echo
            '
            <option value="'.$row['member_ID'].'" >'.$row['name'].'</option>
            ';
        }
    }
}
?>