 <?php
    require_once('script.php');
    $pg = "sp";

?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-layout-mode="dark">
<head>
    <meta charset="utf-8">
    <title>Services & Packages | <?php echo $base_name; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- HEADER CONS SECTION -->
    <?php include "inc/header-cons.php"; ?>
    <!-- END OF HEADER CONS SECTION -->

    <!-- COLOR THEME SECTION -->
    <?php include "inc/master-theme.php"; ?>
    <!-- END OF COLOR THEME SECTION -->

    <!-- DATATABLE CSS -->
    <?php include "inc/datatable-css.php"; ?>
    <!-- END OF DATATABLE CSS -->

    <style>
        @media (max-width: 991px) {
            #table-div {
                overflow-x: unset !important;
            }
            #table-div table {
                width: 100% !important;
            }
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
                    <span id="bc-active">Services & Packages</a>
                </div>
            </section>

            <!-- END OF BREADCRUMB SECTION -->
            <div class="page-content">
                <section id="general-section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="tb-box" class="general-box">
                                    <div id="tb-border-line">
                                        <div id="tb-title-div">
                                            <p id="tb-title">Services & Packages</p>
                                        </div>
                                    </div>
                                    <div id="table-padding">
                                        <div id="table-div">
                                            <table id="example" class="table table-bordered nowrap table-striped align-middle">
                                                <thead>
                                                    <tr>   
                                                        <th>Service Name</th>
                                                        <!-- <th class="text-center">Status</th> -->
                                                        <th class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Tint</td>
                                                        <td class="text-center">
                                                            <div id="tb-act-btn-div">
                                                                <a href="<?php echo $base_url_dashboard; ?>/service-tint-edit.php" class="tb-ac-btn" id="tb-ac-btn-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Edit Services & Packages" ><i class="ri-edit-2-line"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Coat</td>
                                                        <td class="text-center">
                                                            <div id="tb-act-btn-div">
                                                                <a href="<?php echo $base_url_dashboard; ?>/service-coat-edit.php" class="tb-ac-btn" id="tb-ac-btn-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Edit Services & Packages" ><i class="ri-edit-2-line"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Aircond</td>
                                                        <td class="text-center">
                                                            <div id="tb-act-btn-div">
                                                                <a href="<?php echo $base_url_dashboard; ?>/service-aircond-edit.php" class="tb-ac-btn" id="tb-ac-btn-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Edit Services & Packages" ><i class="ri-edit-2-line"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Paint</td>
                                                        <td class="text-center">
                                                            <div id="tb-act-btn-div">
                                                                <a href="<?php echo $base_url_dashboard; ?>/service-paint-edit.php" class="tb-ac-btn" id="tb-ac-btn-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Edit Services & Packages" ><i class="ri-edit-2-line"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Wrap</td>
                                                        <td class="text-center">
                                                            <div id="tb-act-btn-div">
                                                                <a href="<?php echo $base_url_dashboard; ?>/service-wrap-edit.php" class="tb-ac-btn" id="tb-ac-btn-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Edit Services & Packages" ><i class="ri-edit-2-line"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!-- <tr>
                                                        <td>After Sale</td>
                                                        <td class="text-center">
                                                            <div id="tb-act-btn-div">
                                                                <a href="<?php echo $base_url_dashboard; ?>/service-after-sale-edit.php" class="tb-ac-btn" id="tb-ac-btn-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Edit Services & Packages" ><i class="ri-edit-2-line"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr> -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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

    <!-- DATATABLE JS -->
    <?php include "inc/datatable-js.php"; ?>
    <!-- END OF DATATABLE JS -->

</body>
</html>