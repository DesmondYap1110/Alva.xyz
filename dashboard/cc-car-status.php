 <?php
    require_once('script.php');
    $pg = "cc";
    $subpg = "status";

?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-layout-mode="dark">
<head>
    <meta charset="utf-8">
    <title>Call Center | Car Status Enquiry | <?php echo $base_name; ?></title>
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
        .table-cse th:nth-child(2), .table-cse td:nth-child(2),
        .table-cse th:nth-child(3), .table-cse td:nth-child(3),
        .table-cse th:nth-child(4), .table-cse td:nth-child(4),
        .table-cse th:nth-child(5), .table-cse td:nth-child(5),
        .table-cse th:nth-child(6), .table-cse td:nth-child(6),
        .table-cse th:nth-child(7), .table-cse td:nth-child(7),
        .table-cse th:nth-child(8), .table-cse td:nth-child(8) {
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
                    Call Center
                    <span id="bc-arrow"><i class="ri-arrow-right-s-line"></i></span>                    
                    <span id="bc-active">Car Status Enquiry</span>
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
                                            <p id="tb-title">Car Status Enquiry</p>
                                            <?php if (isset($_GET['process'])) { $register = $_GET['process']; if ($register == 'invalid') { ?>
                                            <div class="alert alert-danger" role="alert">
                                                <p class="alert-heading">Process Invalid.</p>
                                            </div>
                                            <?php } } ?>
                                        </div>
                                        <form name="filter_form" method="POST" action="">
                                            <div class="row align-items-center">
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                                    <div class="input-group">
                                                        <label>Key In By</label>
                                                        <input type="text" class="form-control" id="key_in" name="key_in" maxlength="50" required value="Chan">
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                                    <div class="input-group">
                                                        <label>Number Plate</label>
                                                        <input type="text" class="form-control" id="plate" name="plate" maxlength="50" required value="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                                    <div class="input-group">
                                                        <label>Contact Number</label>
                                                        <input type="text" class="form-control" id="phone" name="phone" maxlength="50" required value="" onkeypress="return validateHP(this, event);">
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                                    <div class="input-group">
                                                        <label>Customer Name</label>
                                                        <input type="text" class="form-control" id="customer_name" name="customer_name" maxlength="50" required value="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                                    <div class="input-group">
                                                        <label>Car Model</label>
                                                        <input type="text" class="form-control" id="car_model" name="car_model" maxlength="50" required value="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                                    <div id="filter-btn-div">
                                                        <a href="<?php echo $base_url_dashboard; ?>/<?php echo $filename;?>" id="general-btn" class="btn2"><i class="ri-refresh-line"></i>Reset</a>
                                                        <input type="hidden" name="MM_filter" value="filter_form">
                                                        <button type="submit" id="general-btn" class="btn1"><i class="ri-filter-2-line"></i>Search</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div id="table-padding">
                                        <div id="tb-title-div">
                                            <p id="tb-title">Vehicle's Status</p>
                                        </div>
                                        <div id="table-div">
                                            <table class="table-cse table table-bordered table-striped align-middle">
                                                <thead>
                                                    <tr>   
                                                        <th>Date</th>
                                                        <th>Time</th>
                                                        <th>Outlet</th>
                                                        <th>Service</th>
                                                        <th>Personnel's Name</th>
                                                        <th>Category</th>
                                                        <th>Progress</th>
                                                        <th>Estimated Completetion Time</th>
                                                        <th>Remarks</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>2023-12-20</td>
                                                        <td>12:45 pm</td>
                                                        <td>ALVAPJ</td>
                                                        <td>Coat</td>
                                                        <td>SA</td>
                                                        <td></td>
                                                        <td>Walk in</td>
                                                        <td></td>
                                                        <td><span id="break-word">Remarks display here</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2023-12-20</td>
                                                        <td>12:45 pm</td>
                                                        <td>ALVAPJ</td>
                                                        <td>Coat</td>
                                                        <td>SA</td>
                                                        <td>New Customer</td>
                                                        <td>Pending</td>
                                                        <td></td>
                                                        <td><span id="break-word">Remarks display here</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2023-12-20</td>
                                                        <td>12:45 pm</td>
                                                        <td>ALVAPJ</td>
                                                        <td>Coat</td>
                                                        <td>Supervisor</td>
                                                        <td>New Customer</td>
                                                        <td>In Process</td>
                                                        <td>12:45 pm</td>
                                                        <td><span id="break-word">Remarks display here</span></td>
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

    <script>
        $(document).ready(function(){
            document.getElementById('date_range').readOnly = false;
        });
    </script>

</body>
</html>