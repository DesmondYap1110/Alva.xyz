 <?php
    require_once('script.php');
    $pg = "mm";
    $subpg = "commission";

?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="sm" data-sidebar-image="none" data-layout-mode="dark">
<head>
    <meta charset="utf-8">
    <title>Member Management | Commission List | <?php echo $base_name; ?></title>
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
        #point-box {
            position: relative;
            overflow: hidden;
            padding: 17px 15px;
            border-radius: 8px;
            background-color: #303030;
        }
        #point-box:before {
            content: "";
            position: absolute;
            top: 4px;
            left: 10px;
            width: 95%;
            height: 95%;
            z-index: 1;
            filter: brightness(0) invert(1);
            background-size: contain;
            background-position: right;
            background-repeat: no-repeat;
            background-image: url('<?php echo $base_url;?>/img/logo-sm.png');
            opacity: 0.1;
        }
        #point-p {
            color: #fff;
            font-size: 16px;
            font-weight: 500;
            line-height: 1.4;
            margin-bottom: 3px;
        }
        #point-number {
            display: flex;
            height: 34px;
            align-items: center;
            color: #fff;
            font-size: 39px;
            font-weight: 700;
            line-height: 1.4;
            margin-bottom: 0;
            background: -webkit-linear-gradient(#ca9e29, #553703);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
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
                    <span id="bc-active">Commission List</span>
                </div>
            </section>
            <!-- END OF BREADCRUMB SECTION -->

            <div class="page-content">
                <section id="general-section">
                    <div class="container-fluid">
                        <div class="row">

                            <!-- MEMBER SIDEBAR SECTION -->
                            <?php include 'member-management-sidebar.php'; ?>
                            <!-- END OF MEMBER SIDEBAR SECTION -->

                            <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12">
                                <div id="form-box" class="general-box">
                                    <form name="edit_form" method="POST" action="" enctype="multipart/form-data">
                                        <p id="form-sub-title">Commission List</p>
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
                                        <!-- COMMISSION SECTION -->
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                                <div id="point-box">
                                                    <p id="point-p">Total Referral</p>
                                                    <p id="point-number">20</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                                <div id="point-box">
                                                    <p id="point-p">Commission Earned</p>
                                                    <p id="point-number">20</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                                <div id="point-box">
                                                    <p id="point-p">Balance Amount</p>
                                                    <p id="point-number">20</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END OF COMMISSION SECTION -->

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