 <?php
    require_once('script.php');
    $pg = "report";
    $subpg = "customer_report";

?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-layout-mode="dark">
<head>
    <meta charset="utf-8">
    <title>Reporting Module | Customer Enquiry Report | <?php echo $base_name; ?></title>
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
        .table-cse th:nth-child(8), .table-cse td:nth-child(8),
        .table-cse th:nth-child(10), .table-cse td:nth-child(10) {
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
                    <span id="bc-active">Customer Enquiry Report</span>
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
                                            <p id="tb-title">Customer Enquiry Report</p>
                                            <?php if (isset($_GET['process'])) { $register = $_GET['process']; if ($register == 'invalid') { ?>
                                            <div class="alert alert-danger" role="alert">
                                                <p class="alert-heading">Process Invalid.</p>
                                            </div>
                                            <?php } } ?>
                                        </div>
                                        <form name="filter_form" method="POST" action="">
                                            <div class="row align-items-center">
                                                <div class="col-lg-3">
                                                    <div class="input-group">
                                                        <label>Outlet</label>
                                                        <select class="form-control js-example-basic-single" id="outlet" name="outlet">
                                                            <option selected disabled>Select Outlet</option>
                                                            <option value="1" >Damansara Damai</option>
                                                            <option value="2" >ALVAPJ</option>
                                                            <option value="3" >Puchong</option>
                                                            <option value="4" >Melaka</option>
                                                            <option value="5" >Johor Bahru</option>
                                                            <option value="6" >Batu Pahat</option>
                                                            <option value="7" >Others/ Unknown</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="input-group">
                                                        <label>Date Range</label>
                                                        <input type="text" class="form-control" id="date_range" name="date_range" data-provider="flatpickr" data-date-format="d M Y" data-range-date="true" placeholder="Select Date Range" autocomplete="off" value="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="input-group">
                                                        <label>Service</label>
                                                        <select class="form-control js-example-basic-single" id="service" name="service">
                                                            <option selected disabled>Select Service</option>
                                                            <option value="1" >Tint</option>
                                                            <option value="2" >Coat</option>
                                                            <option value="3" >Tint & Coat</option>
                                                            <option value="4" >Paint</option>
                                                            <option value="5" >Aircond</option>
                                                            <option value="6" >Wrap</option>
                                                            <option value="7" >Insurance</option>
                                                            <option value="8" >ARMP</option>
                                                            <option value="9" >Others</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="input-group">
                                                        <label>Contact Method</label>
                                                        <select class="form-control js-example-basic-single" id="contact_method" name="contact_method">
                                                            <option selected disabled>Select Contact Method</option>
                                                            <option value="1" >Call</option>
                                                            <option value="2" >WhatsApp Message</option>
                                                            <option value="3" >Social Media</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="input-group">
                                                        <label>Particulars</label>
                                                        <select class="form-control js-example-basic-single" id="particulars" name="particulars">
                                                            <option selected disabled>Select Particulars</option>
                                                            <option value="1" >Service Enquiry</option>
                                                            <option value="2" >Warranty</option>
                                                            <option value="3" >Complaint</option>
                                                            <option value="4" >Vacancy</option>
                                                            <option value="5" >Appointment</option>
                                                            <option value="6" >Supplier</option>
                                                            <option value="7" >Checking Car Status</option>
                                                            <option value="8" >Refund or Compensation</option>
                                                            <option value="9" >Feedback</option>
                                                            <option value="10" >Others</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="input-group">
                                                        <label>After Sales</label>
                                                        <select class="form-control js-example-basic-single" id="after_sales" name="after_sales">
                                                            <option selected disabled>Select After Sales</option>
                                                            <option value="1" >Yes</option>
                                                            <option value="2" >No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
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
                                        <div id="table-div">
                                            <table id="example" class="table-cse table table-bordered table-striped align-middle">
                                                <thead>
                                                    <tr>   
                                                        <th style="width: 120px;">Outlet</th>
                                                        <th style="width: 70px;">Date</th>
                                                        <th style="width: 80px;">Time</th>
                                                        <th style="width: 92px;">Service</th>
                                                        <th style="width: 110px;">Contact Number</th>
                                                        <th style="width: 110px;">Contact Method</th>
                                                        <th style="width: 95px;">After Sales</th>
                                                        <th style="width: 115px;">Particulars</th>
                                                        <th style="width: 550px;">Remarks</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Damansara Damai</td>
                                                        <td>2023/01/01</td>
                                                        <td>12:45:47 pm</td>
                                                        <td>Tint & Coat</td>
                                                        <td>011-10256245</td>
                                                        <td>WhatsApp</td>
                                                        <td>Yes</td>
                                                        <td>Refund or Compensation</td>
                                                        <td>Refund or Compensation as sds dasd ewedfs sdfs. Refund or Compensation as sds dasd ewedfs sdfs Refund or Compensation as sds dasd ewedfs sdfs Refund or Compensation as sds dasd ewedfs sdfs Refund or Compensation as sds dasd ewedfs sdfs v Refund or Compensation as sds dasd ewedfs sdfs.</td>
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