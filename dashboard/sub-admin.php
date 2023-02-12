 <?php
    require_once('script.php');
    $pg = "sub";

?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-layout-mode="dark">
<head>
    <meta charset="utf-8">
    <title>Sub Admin Module | <?php echo $base_name; ?></title>
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
        .table-cse th:nth-child(1), .table-cse td:nth-child(1),
        .table-cse th:nth-child(3), .table-cse td:nth-child(3),
        .table-cse th:nth-child(4), .table-cse td:nth-child(4),
        .table-cse th:nth-child(5), .table-cse td:nth-child(5),
        .table-cse th:nth-child(6), .table-cse td:nth-child(6) {
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
                    <span id="bc-active">Sub Admin Module</span>
                </div>
            </section>

            <!-- END OF BREADCRUMB SECTION -->
            <div class="page-content">
                <section id="general-section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="add-btn-div">
                                    <a href="<?php echo $base_url_dashboard; ?>/sub-admin-add.php" id="general-btn" class="btn1"><i class="ri-add-fill"></i>Add Sub Admin</a>
                                </div>
                                <div id="tb-box" class="general-box">
                                    <div id="tb-border-line">
                                        <div id="tb-title-div">
                                            <p id="tb-title">Sub Admin Module</p>
                                            <?php if (isset($_GET['add'])) { $register = $_GET['add']; if ($register == 'succ') { ?>
                                            <div class="alert alert-success" role="alert">
                                                <p class="alert-heading">Sub Admin Added Successfully.</p>
                                            </div>
                                            <?php } } ?>
                                            <?php if (isset($_GET['delete'])) { $register = $_GET['delete']; if ($register == 'succ') { ?>
                                            <div class="alert alert-success" role="alert">
                                                <p class="alert-heading">Sub Admin Deleted Successfully.</p>
                                            </div>
                                            <?php } } ?>
                                            <?php if (isset($_GET['update'])) { $register = $_GET['update']; if ($register == 'succ') { ?>
                                            <div class="alert alert-success" role="alert">
                                                <p class="alert-heading">Sub Admin Edited Successfully.</p>
                                            </div>
                                            <?php } } ?>
                                            <?php if (isset($_GET['process'])) { $register = $_GET['process']; if ($register == 'invalid') { ?>
                                            <div class="alert alert-danger" role="alert">
                                                <p class="alert-heading">Process Invalid.</p>
                                            </div>
                                            <?php } } ?>
                                        </div>
                                    </div>
                                    <div id="table-padding">
                                        <div id="table-div">
                                            <table id="example" class="table-cse table table-bordered nowrap table-striped align-middle">
                                                <thead>
                                                    <tr>   
                                                        <th>Sub Admin ID</th>
                                                        <th>Sub Admin Name</th>
                                                        <th>Contact No.</th>
                                                        <th>Email</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>sub123333</td>
                                                        <td>Sub Admin Name One</td>
                                                        <td>0112345678</td>
                                                        <td>SubAdmin1@email.com</td>
                                                        <td>
                                                            <div id="tb-status-btn-div">
                                                                <a href="" id="general-btn" class="btn3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Click to Block">Active</a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div id="tb-act-btn-div">
                                                                <a href="<?php echo $base_url_dashboard; ?>/sub-admin-edit.php" class="tb-ac-btn" id="tb-ac-btn-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Edit Sub Admin" ><i class="ri-edit-2-line"></i></a>
                                                                <a href="javascript:void(0);" class="tb-ac-btn" id="tb-ac-btn-2" data-bs-toggle="modal" data-bs-target="#DeleteModal"><i class="ri-delete-bin-6-line"></i></a>
                                                            </div>

                                                            <!-- DELETE MODAL -->
                                                            <div id="DeleteModal" class="modal fade flip" tabindex="-1" aria-labelledby="flipModalLabel" aria-hidden="true" style="display: none;">
                                                                <div class="modal-dialog modal-dialog-centered" id="md-dialog">
                                                                    <div class="modal-content" id="md-content">
                                                                        <form method="POST" name="delete_form" action="">
                                                                            <div class="modal-header">
                                                                                <p id="modal-title">Delete Sub Admin</p>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div id="modal-div" style="text-align: left;">
                                                                                <p id="modal-p" style="margin-bottom: 5px;">Are you sure you want to delete this Sub Admin?</p>
                                                                            </div>
                                                                            <div id="modal-btn-div">
                                                                                <a href="<?php echo $base_url_dashboard; ?>/sub-admin.php" id="general-btn" class="btn2" data-bs-dismiss="modal" aria-label="Close"><i class="ri-close-fill"></i>Cancel</a>
                                                                                <input type="hidden" name="downloadid" value="">
                                                                                <input type="hidden" name="delete" value="delete_form">
                                                                                <button id="general-btn" class="btn1">Confirm</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- END OF DELETE MODAL -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSE456666</td>
                                                        <td>Sub admin Name Two</td>
                                                        <td>017894561</td>
                                                        <td>Sub admin2@email.com</td>
                                                        <td>
                                                            <div id="tb-status-btn-div">
                                                                <a href="" id="general-btn" class="btn5" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Click to Active">Block</a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div id="tb-act-btn-div">
                                                                <a href="<?php echo $base_url_dashboard; ?>/sub-admin-edit.php" class="tb-ac-btn" id="tb-ac-btn-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Edit Sub admin" ><i class="ri-edit-2-line"></i></a>
                                                                <a href="javascript:void(0);" class="tb-ac-btn" id="tb-ac-btn-2" data-bs-toggle="modal" data-bs-target="#DeleteModal"><i class="ri-delete-bin-6-line"></i></a>
                                                            </div>

                                                            <!-- DELETE MODAL -->
                                                            <div id="DeleteModal" class="modal fade flip" tabindex="-1" aria-labelledby="flipModalLabel" aria-hidden="true" style="display: none;">
                                                                <div class="modal-dialog modal-dialog-centered" id="md-dialog">
                                                                    <div class="modal-content" id="md-content">
                                                                        <form method="POST" name="delete_form" action="">
                                                                            <div class="modal-header">
                                                                                <p id="modal-title">Delete Sub Admin</p>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div id="modal-div" style="text-align: left;">
                                                                                <p id="modal-p" style="margin-bottom: 5px;">Are you sure you want to delete this Sub Admin?</p>
                                                                            </div>
                                                                            <div id="modal-btn-div">
                                                                                <a href="<?php echo $base_url_dashboard; ?>/sub-admin.php" id="general-btn" class="btn2" data-bs-dismiss="modal" aria-label="Close"><i class="ri-close-fill"></i>Cancel</a>
                                                                                <input type="hidden" name="downloadid" value="">
                                                                                <input type="hidden" name="delete" value="delete_form">
                                                                                <button id="general-btn" class="btn1">Confirm</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- END OF DELETE MODAL -->
                                                        </td>
                                                    </tr>
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