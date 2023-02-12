 <?php
    require_once('script.php');
    $pg = "report";
    $subpg = "appointment_report";

?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-layout-mode="dark">
<head>
    <meta charset="utf-8">
    <title>Reporting Module | Customer Appointment Report | <?php echo $base_name; ?></title>
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
        .table-cse th:nth-child(5), .table-cse td:nth-child(5),
        .table-cse th:nth-child(6), .table-cse td:nth-child(6),
        .table-cse th:nth-child(7), .table-cse td:nth-child(7),
        .table-cse th:nth-child(8), .table-cse td:nth-child(8) {
            text-align: center;
        }

        #number-div {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            background: #191919;
            margin-bottom: 15px;
            border-radius: 8px;
            box-shadow: 0 3px 9px 0 rgb(28 28 51 / 15%);
        }
        #number-box {
            display: inline-block;
            text-align: center;
            padding: 20px 0;
        }
        #number-title {
            color: #f9f9f9;
            font-size: 12px;
            font-weight: 500;
            margin-bottom: 0;
            letter-spacing: 2px;
            text-transform: uppercase;
        }
        #number-number {
            font-size: 27px;
            font-weight: 700;
            line-height: 1.4;
            margin-bottom: 0;
            color: #fff;
        }
        @media(max-width:991px){
            #number-title {
                font-size: 9px;
            }
            #number-number {
                font-size: 20px;
            }
        }

        /* #EditModal #md-dialog {
            max-width: 700px;
        }
        #EditModal #md-content {
            width: 100%;
        } */
        .modal label {
            font-weight: 300;
            font-size: 14px;
            line-height: 1.4;
        }
        #modal_bold {
            color: #fff;
            font-weight: 600;
            font-size: 15px;
            line-height: 1.4;
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
                    Reporting Module
                    <span id="bc-arrow"><i class="ri-arrow-right-s-line"></i></span>                    
                    <span id="bc-active">Customer Appointment Report</span>
                </div>
            </section>

            <!-- END OF BREADCRUMB SECTION -->
            <div class="page-content">
                <section id="general-section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="number-div">
                                    <div id="number-box">
                                        <p id="number-number">10,000</p>
                                        <p id="number-title">Tint</p>
                                    </div>
                                    <div id="number-box">
                                        <p id="number-number">25,000</p>
                                        <p id="number-title">Coat</p>
                                    </div>
                                    <div id="number-box">
                                        <p id="number-number">10,250</p>
                                        <p id="number-title">Tint & Coat</p>
                                    </div>
                                    <div id="number-box">
                                        <p id="number-number">9,820</p>
                                        <p id="number-title">Paint</p>
                                    </div>
                                    <div id="number-box">
                                        <p id="number-number">12,650</p>
                                        <p id="number-title">Aircond</p>
                                    </div>
                                    <div id="number-box">
                                        <p id="number-number">2,350</p>
                                        <p id="number-title">Wrap</p>
                                    </div>
                                    <div id="number-box">
                                        <p id="number-number">84,500</p>
                                        <p id="number-title">Total</p>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                <div id="contact-box">
                                    <p id="contact-number">100</p>
                                    <p id="contact-title">Tint</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                <div id="contact-box">
                                    <p id="contact-number">88</p>
                                    <p id="contact-title">Coat</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                <div id="contact-box">
                                    <p id="contact-number">230</p>
                                    <p id="contact-title">Tint & Coat</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                <div id="contact-box">
                                    <p id="contact-number">67</p>
                                    <p id="contact-title">Paint</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                <div id="contact-box">
                                    <p id="contact-number">89</p>
                                    <p id="contact-title">Aircond</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                <div id="contact-box">
                                    <p id="contact-number">1250</p>
                                    <p id="contact-title">Wrap</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                <div id="contact-box">
                                    <p id="contact-number">840</p>
                                    <p id="contact-title">Total</p>
                                </div>
                            </div> -->
                            <div class="col-lg-12">
                                <div id="tb-box" class="general-box">
                                    <div id="tb-border-line">
                                        <div id="tb-title-div">
                                            <p id="tb-title">Customer Appointment Report</p>
                                            <?php if (isset($_GET['process'])) { $register = $_GET['process']; if ($register == 'invalid') { ?>
                                            <div class="alert alert-danger" role="alert">
                                                <p class="alert-heading">Process Invalid.</p>
                                            </div>
                                            <?php } } ?>
                                        </div>
                                        <form name="filter_form" method="POST" action="">
                                            <div class="row align-items-center">
                                                <div class="col-lg-3 col-6">
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
                                                <div class="col-lg-3 col-6">
                                                    <div class="input-group">
                                                        <label>Appointment Date Range</label>
                                                        <input type="text" class="form-control" id="date_range" name="date_range" data-provider="flatpickr" data-date-format="d M Y" data-range-date="true" placeholder="Select Date Range" autocomplete="off" value="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-6">
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
                                                <div class="col-lg-3 col-6">
                                                    <div id="filter-btn-div">
                                                        <a href="<?php echo $base_url_dashboard; ?>/report-appointment.php" id="general-btn" class="btn2"><i class="ri-refresh-line"></i>Reset</a>
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
                                                        <th>Outlet</th>
                                                        <th>Appointment<br>Date</th>
                                                        <th>Appointment<br>Time</th>
                                                        <th>Description</th>
                                                        <!-- <th>Customer Name</th>
                                                        <th>Car Model</th>
                                                        <th>Number Plate</th> 
                                                        <th>Contact Number</th> -->
                                                        <th>Service</th>
                                                        <th>Attended by</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Damansara Damai</td>
                                                        <td>2023/01/01</td>
                                                        <td>12:30 pm</td>
                                                        <td>
                                                            <div>
                                                                <p style="margin-bottom: 0;">Customer Name : Danny Yup
                                                                <br>
                                                                Contact Number : 012-2233456
                                                                <br>
                                                                Car Model : Persona
                                                                <br>
                                                                Number Plate : MCG9967</p>
                                                            </div>
                                                        </td>
                                                        <td>Tint & Coat</td>
                                                        <td>Alvin</td>
                                                        <td>No Show</td>
                                                        <td>
                                                            <div id="tb-act-btn-div">
                                                                <a href="javascript:void(0);" class="tb-ac-btn" id="tb-ac-btn-3" data-bs-toggle="modal" data-bs-target="#RemarksModal" title="View Remarks"><i class="ri-chat-quote-line"></i></a>
                                                                <a href="javascript:void(0);" class="tb-ac-btn" id="tb-ac-btn-1" data-bs-toggle="modal" data-bs-target="#EditModal"><i class="ri-edit-2-line"></i></a>
                                                                <a href="javascript:void(0);" class="tb-ac-btn" id="tb-ac-btn-2" data-bs-toggle="modal" data-bs-target="#DeleteModal"><i class="ri-delete-bin-6-line"></i></a>
                                                            </div>

                                                            <!-- VIEW REMARKS MODAL -->
                                                            <div id="RemarksModal" class="modal fade flip" tabindex="-1" aria-labelledby="flipModalLabel" aria-hidden="true" style="display: none;">
                                                                <div class="modal-dialog modal-dialog-centered" id="md-dialog">
                                                                    <div class="modal-content" id="md-content">
                                                                        <form method="POST" name="delete_form" action="">
                                                                            <div class="modal-header">
                                                                                <p id="modal-title">Remarks</p>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div id="modal-div" style="text-align: left;">
                                                                                <p id="modal-p">Remarks display here. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- END OF VIEW REMARKS MODAL -->

                                                            <!-- EDIT MODAL -->
                                                            <div id="EditModal" class="modal fade flip" tabindex="-1" aria-labelledby="flipModalLabel" aria-hidden="true" style="display: none;">
                                                                <div class="modal-dialog modal-dialog-centered" id="md-dialog">
                                                                    <div class="modal-content" id="md-content">
                                                                        <form method="POST" name="edit_form" action="">
                                                                            <div class="modal-header">
                                                                                <p id="modal-title">Edit Appointment Report</p>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div id="modal-div" style="text-align: left;">
                                                                                <div class="row">
                                                                                    <div class="col-lg-12">
                                                                                        <label>Outlet : <span id="modal_bold">Damansara Damai</span></label>
                                                                                        <input type="text" class="form-control" id="locate" name="locate" maxlength="50" hidden required value="Damansara Damai">
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <label>Appointment Date Time : <span id="modal_bold">2023/01/01 12:30 PM</span></label>
                                                                                        <input type="text" class="form-control" id="appointment_date" name="appointment_date" maxlength="50" hidden required value="2023/01/01">
                                                                                        <input type="text" class="form-control" id="appointment_time" name="appointment_time" maxlength="50" hidden required value="12:30 PM">
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <label>Customer Name : <span id="modal_bold">Danny Yup</span></label>
                                                                                        <input type="text" class="form-control" id="name" name="name" maxlength="50" hidden required value="Danny Yup">
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <label>Car Model : <span id="modal_bold">Persona</span></label>
                                                                                        <input type="text" class="form-control" id="car" name="car" maxlength="50" hidden required value="Persona">
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <label>Number Plate : <span id="modal_bold">MCG9976</span></label>
                                                                                        <input type="text" class="form-control" id="plate" name="plate" maxlength="50" hidden required value="MCG9976">
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <label>Services : <span id="modal_bold">Tint & Coat</span></label>
                                                                                        <input type="text" class="form-control" id="service" name="service" maxlength="50" hidden required value="Tint & Coat">
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <label>Contact Number : <span id="modal_bold">011-10256245</span></label>
                                                                                        <input type="text" class="form-control" id="contact" name="contact" maxlength="50" hidden required value="011-10256245">
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <div class="input-group">
                                                                                            <label>Attended by</label>
                                                                                            <select class="form-control js-example-basic-single" id="attended" name="attended" required>
                                                                                                <option disabled>Select Sales Advisor</option>
                                                                                                <option value="1" selected>Alvin</option>
                                                                                                <option value="2" >Danny</option>
                                                                                                <option value="3" >Nelson</option>
                                                                                                <option value="4" >Jonathan</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <div class="input-group">
                                                                                            <label>Status</label>
                                                                                            <select class="form-control js-example-basic-single" id="status" name="status" required>
                                                                                                <option disabled>Select Status</option>
                                                                                                <option value="1" selected>No Show</option>
                                                                                                <option value="2" >Consider</option>
                                                                                                <option value="3" >Done</option>
                                                                                                <option value="4" >Cancelled</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <div class="input-group">
                                                                                            <label>Remarks</label>
                                                                                            <textarea class="form-control" name="remarks" id="remarks" cols="30" rows="10" required=""></textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div id="modal-btn-div">
                                                                                <a href="javascript:void(0);" id="general-btn" class="btn2" data-bs-dismiss="modal" aria-label="Close"><i class="ri-close-fill"></i>Cancel</a>
                                                                                <input type="hidden" name="downloadid" value="">
                                                                                <input type="hidden" name="edit" value="edit_form">
                                                                                <button id="general-btn" class="btn1"><i class="ri-check-line"></i>Save & Submit</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- END OF EDIT MODAL -->

                                                            <!-- DELETE MODAL -->
                                                            <div id="DeleteModal" class="modal fade flip" tabindex="-1" aria-labelledby="flipModalLabel" aria-hidden="true" style="display: none;">
                                                                <div class="modal-dialog modal-dialog-centered" id="md-dialog">
                                                                    <div class="modal-content" id="md-content">
                                                                        <form method="POST" name="delete_form" action="">
                                                                            <div class="modal-header">
                                                                                <p id="modal-title">Delete Appointment</p>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div id="modal-div" style="text-align: left;">
                                                                                <p id="modal-p" style="margin-bottom: 5px;">Are you sure you want to delete this Appointment?</p>
                                                                            </div>
                                                                            <div id="modal-btn-div">
                                                                                <a href="javascript:void(0);" id="general-btn" class="btn2" data-bs-dismiss="modal" aria-label="Close"><i class="ri-close-fill"></i>Cancel</a>
                                                                                <input type="hidden" name="downloadid" value="">
                                                                                <input type="hidden" name="delete" value="delete_form">
                                                                                <button id="general-btn" class="btn1"><i class="ri-check-line"></i>Confirm</button>
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

    <script>
        $(document).ready(function(){
            document.getElementById('date_range').readOnly = false;
        });
    </script>

</body>
</html>