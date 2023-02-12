 <?php
    require_once('script.php');
    $pg = "os";
    $subpg = "sales";

?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-layout-mode="dark">
<head>
    <meta charset="utf-8">
    <title>Outlet Setup | Sales Advisor Module | Edit Sales Advisor | <?php echo $base_name; ?></title>
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
                    <span id="bc-active">Edit Sales Advisor</span>
                </div>
            </section>
            <!-- END OF BREADCRUMB SECTION -->

            <div class="page-content">
                <section id="general-section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                                <div id="form-box" class="general-box">
                                    <form name="edit_form" method="POST" action="" enctype="multipart/form-data">
                                        <p id="form-sub-title">Edit Sales Advisor</p>
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
                                            <div class="col-lg-4">
                                                <div class="input-group">
                                                    <label>Sales Leader</label>
                                                    <select class="form-control js-example-basic-single" id="leader" name="leader" required>
                                                        <option disabled>Select Sales Leader</option>
                                                        <option value="0" selected>No Leader</option>
                                                        <option value="1" >Sales Leader Name One</option>
                                                        <option value="2" >Sales Leader Name Two</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- JUST FOR SPACING DESIGN -->
                                            <div class="col-lg-8">
                                                <div></div>
                                            </div>
                                            <!-- END OF JUST FOR SPACING DESIGN -->

                                            <div class="col-lg-4">
                                                <div class="input-group">
                                                    <label>Sales Advisor ID <span>*</span></label>
                                                    <input type="text" class="form-control" id="sales_advisor_id" name="sales_advisor_id" maxlength="50" required value="A123333">
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <label>Sales Advisor Name <span>*</span></label>
                                                    <input type="text" class="form-control" id="sales_advisor_name" name="sales_advisor_name" maxlength="50" required value="ALVA Concept Store - Damansara">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="input-group">
                                                    <label>Contact No. <span>*</span></label>
                                                    <input type="text" class="form-control" id="sales_advisor_contact" name="sales_advisor_contact" maxlength="50" required value="012345789" onkeypress="return validateHP(this, event);">
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <label>Email <span>*</span></label>
                                                    <input type="text" class="form-control" id="sales_advisor_email" name="sales_advisor_email" maxlength="50" required value="ALVA Concept Store - Damansara">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="input-group">
                                                    <label>Location <span>*</span></label>
                                                    <select class="form-control js-example-basic-single" id="locate" name="locate" required>
                                                        <option disabled>Select Location</option>
                                                        <option value="2" selected>Damansara</option>
                                                        <option value="1" >ALVAPJ</option>
                                                        <option value="1" >Melaka</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control" id="address" name="address" maxlength="50" required disabled value="23, Jalan PJU 10/1a, Damansara Damai, 47830 Petaling Jaya, Selangor">
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
                                                                <td><input type="text" class="form-control" id="rate" name="rate" maxlength="20" required value="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>RM 3,000 or Above</td>
                                                                <td><input type="text" class="form-control" id="rate" name="rate" maxlength="50" required value="50"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="tb-title-td">Monthly Rating Bonus</td>
                                                                <td class="tb-title-td">Percentage(%) of Monthly Service Bonus</td>
                                                            </tr>
                                                            <tr>
                                                                <td>0 - 2</td>
                                                                <td><input type="text" class="form-control" id="rate" name="rate" maxlength="20" required value="0"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>3 - 5</td>
                                                                <td><input type="text" class="form-control" id="rate" name="rate" maxlength="20" required value="50"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>6 - 8</td>
                                                                <td><input type="text" class="form-control" id="rate" name="rate" maxlength="20" required value="75"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>9 - 10</td>
                                                                <td><input type="text" class="form-control" id="rate" name="rate" maxlength="20" required value="100"></td>
                                                            </tr>
                                                            <tr>   
                                                                <th colspan="2">Bonus Scheme 2</th>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" class="tb-title-td">3-month Sales Bonus</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Condition 1 : Total Sales Closed</td>
                                                                <td><input type="text" class="form-control" id="rate" name="rate" maxlength="20" required value="35"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Condition 2 : Total Sales Amount (RM)</td>
                                                                <td><input type="text" class="form-control" id="rate" name="rate" maxlength="50" required value="3000"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Bonus for SA's Parent</td>
                                                                <td><input type="text" class="form-control" id="rate" name="rate" maxlength="50" required value="888"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- END OF COMMISSION RATE TABLE -->
                                            </div>
                                            <!-- END OF COMMISSION RATE SECTION -->

                                            <!-- CHANGE PASSWORD SECTION -->
                                            <?php include "outlet-setup-change-password.php" ?>
                                            <!-- END OF CHANGE PASSWORD SECTION -->

                                            <div class="col-lg-12">
                                                <div id="form-btn-div">
                                                    <a href="<?php echo $base_url_dashboard; ?>/outlet-setup-sales.php" id="general-btn" class="btn2"><i class="ri-close-fill"></i>Cancel</a>
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