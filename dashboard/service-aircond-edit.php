 <?php
    require_once('script.php');
    $pg = "sp";
    $subpg = "aircond";

?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-layout-mode="dark">
<head>
    <meta charset="utf-8">
    <title>Services & Packages | Edit Services & Packages | <?php echo $base_name; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- HEADER CONS SECTION -->
    <?php include "inc/header-cons.php"; ?>
    <!-- END OF HEADER CONS SECTION -->

    <!-- COLOR THEME SECTION -->
    <?php include "inc/master-theme.php"; ?>
    <!-- END OF COLOR THEME SECTION -->

    <style>
        #ul-div {
            width: 64%;
        }
        #ul-title {
            font-size: 15px;
            line-height: 1.4;
            color: #fff;
            font-weight: 600;
            margin-bottom: 15px;
        }
        #ul-div ul {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            margin-bottom: 0;
        }
        #ul-div li {
            width: 33.33%;
            font-size: 15px;
            line-height: 1.4;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
        }
        #ul-div li:before {
            content: "";
            background-image: url(https://alvaerp.winnefy.xyz/img/logo-sm.png);
            display: inline-block;
            width: 16px;
            height: 16px;
            margin-right: 10px;
            background-size: contain;
            background-repeat: no-repeat;
        }
        .tb-ac th:nth-child(2),.tb-ac td:nth-child(2),
        .tb-ac th:nth-child(3),.tb-ac td:nth-child(3),
        .tb-ac th:nth-child(4),.tb-ac td:nth-child(4),
        .tb-ac th:nth-child(5),.tb-ac td:nth-child(5),
        .tb-armp th:nth-child(2),.tb-armp td:nth-child(2),
        .tb-armp th:nth-child(3),.tb-armp td:nth-child(3) {
            text-align: center;
        }
        .tb-warranty th:nth-child(2), .tb-warranty td:nth-child(2),
        .tb-warranty th:nth-child(3), .tb-warranty td:nth-child(3) {
            text-align: center;
        }
        #armp-div {
            margin-bottom: 30px;
        }
        #discount-div {
            margin-bottom: 15px;
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
                    <a href="<?php echo $base_url_dashboard; ?>/service-package.php">Services & Packages</a>
                    <span id="bc-arrow"><i class="ri-arrow-right-s-line"></i></span>
                    <span id="bc-active">Edit Services & Packages</span>
                </div>
            </section>
            <!-- END OF BREADCRUMB SECTION -->

            <div class="page-content">
                <section id="general-section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div id="form-box" class="general-box">
                                    <form name="edit_form" method="POST" action="" enctype="multipart/form-data">
                                        <p id="form-sub-title">Edit Services & Packages</p>
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

                                        <!-- Aircond Section Start -->
                                        <div class="row">
                                            <div class="col-lg-12">

                                                <label>Service Name : Aircond</label>

                                                <!-- Part / Services Section -->
                                                <div id="table-div">
                                                    <!-- Part / Services Table -->
                                                    <table id="example" class="tb-ac table table-bordered nowrap table-striped align-middle">
                                                        <thead>
                                                            <tr>   
                                                                <th>Parts / Services</th>
                                                                <th>OEM (RM)</th>
                                                                <th>OEM MY (RM)</th>
                                                                <th>ORIGINAL (RM)</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                                //Display aircond_pricelist function
                                                                airdcond_pricelist($ALVADB);
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                    <!-- Part / Services Table -->
                                                </div>
                                                <!-- End of Part / Services Section -->

                                                <!-- Warranty List Section -->
                                                <div class="row">
                                                    <div class="col-lg-8 col-md-8 col-sm-10 col-12">
                                                        <div id="table-div">
                                                            <p id="tb-title">Warranty List</p>
                                                            <!-- Warranty List Table -->
                                                            <table id="example" class="tb-warranty table table-bordered nowrap table-striped align-middle">
                                                                <thead>
                                                                    <tr>   
                                                                        <th>Brand</th>
                                                                        <th>Warranty (Months)</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                        //Display Warranty List function
                                                                        displayWarranty($ALVADB);
                                                                    ?>
                                                                    
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!-- End of Warranty List Table -->
                                                </div>
                                                <!-- End of Warranty List Section -->

                                                <!-- ARMP RATE SECTION -->
                                                <?php
                                                //ARMP-Rate
                                                require_once('armp-rate.php');
                                                ?>
                                                <!-- END OF ARMP RATE SECTION -->
                                                
                                            </div>
                                            <!-- Save & cancel button div -->
                                            <div class="col-lg-12">
                                                <div id="form-btn-div">
                                                    <a href="<?php echo $base_url_dashboard; ?>/service-package.php" id="general-btn" class="btn2"><i class="ri-close-fill"></i>Cancel</a>
                                                </div>
                                            </div>
                                            <!-- End of Save & cancel button div -->
                                        </div>
                                        <!-- End of Aircond Section Start -->
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

    <script>
        //AJAX SECTION

        function update(ID)
        {
            
            var oem = document.getElementById("oem"+ID).value;
            var oem_my = document.getElementById("oem_my"+ID).value;
            var original = document.getElementById("original"+ID).value;

            $.ajax({
                type:"POST",
                url:"service-aircond-edit.ajax.php",
                data:
                {
                    ID: ID,
                    oem:oem,
                    oem_my:oem_my,
                    original:original

                },
            })
        }

        function updateW(ID)
        {
            var warranty = document.getElementById("warranty"+ID).value;
            $.ajax({
                type:"POST",
                url:"service-aircond-edit.ajax.php",
                data:
                {
                    WID: ID,
                    warranty:warranty
                },
            })
        }

        //ARMP RATE SECTION
        //refer armp-rate.php
        //Customize

        function updateD(ID)
        {
            var rate = document.getElementById("discount_select").value;
            var amount = document.getElementById("discount_amount").value;
            $.ajax({
                type:"POST",
                url:"service-aircond-edit.ajax.php",
                data:
                {
                    DID: ID,
                    rate:rate,
                    amount:amount
                },
            })
        }

        function updateR(ID)
        {
            var rate = document.getElementById("referral_select").value;
            var amount = document.getElementById("referral_amount").value;
            $.ajax({
                type:"POST",
                url:"service-aircond-edit.ajax.php",
                data:
                {
                    RID: ID,
                    rate:rate,
                    amount:amount
                },
            })
        }
    </script>

    <!-- Validation Input -->
    <script src="inc/validation-input.js"></script>

</body>
</html>
<?php
function airdcond_pricelist($dbconn)
{
    $sql="SELECT * FROM aircond_pricelist WHERE status='1'";
    $query=mysqli_query($dbconn,$sql) or die (mysqli_error($dbconn));
    $totalrow = mysqli_num_rows($query);

    if($totalrow>0)
    {
        while($row = mysqli_fetch_assoc($query))
        {
            echo $display = 
            '
            <tr>
                <td>'.$row['product'].'</td>
                <td><input type="text" class="form-control camount" id="oem'.$row['ID'].'" name="oem" max-length="100" value="'.$row['oem'].'" onkeypress="return isNumberKey(this,event);"></td>
                <td><input type="text" class="form-control camount" id="oem_my'.$row['ID'].'" name="oem_my" max-length="100" value="'.$row['oem_my'].'" onkeypress="return isNumberKey(this,event);"></td>
                <td><input type="text" class="form-control camount" id="original'.$row['ID'].'" name="original" max-length="100" value="'.$row['original'].'" onkeypress="return isNumberKey(this,event);"></td>
                <td><button type="button" onclick="update('.$row['ID'].')" data-toast data-toast-text="Successfully Save" data-toast-gravity="top" data-toast-position="right" data-toast-duration="3000" class="tb-ac-btn" id="tb-ac-btn-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Save"><i class="ri-save-3-line"></i></button></td>
            </tr>
            ';
        }
    }
}

function displayWarranty($dbconn)
{
    $sql="SELECT * FROM aircond_warranty WHERE status='1'";
    $query=mysqli_query($dbconn,$sql) or die (mysqli_error($dbconn));
    $totalrow = mysqli_num_rows($query);

    if($totalrow>0)
    {
        while($row = mysqli_fetch_assoc($query))
        {
            echo $display = 
            '
            <tr>
                <td>'.$row['brand'].'</td>
                <td><input type="text" class="form-control" id="warranty'.$row['ID'].'" name="" max-length="100" value="'.$row['warranty'].'" onkeypress="return validateInt(this, event);"></td>
                <td><button type="button" onclick="updateW('.$row['ID'].')" data-toast data-toast-text="Successfully Save" data-toast-gravity="top" data-toast-position="right" data-toast-duration="3000" class="tb-ac-btn" id="tb-ac-btn-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Save"><i class="ri-save-3-line"></i></button></td>
            </tr>
            ';
        }
    }
}

function displayARMP($dbconn)
{
    $sql="SELECT * FROM aircond_armp_rate WHERE status='1'";
    $query=mysqli_query($dbconn,$sql) or die (mysqli_error($dbconn));
    $totalrow = mysqli_num_rows($query);

    if($totalrow>0)
    {
        return mysqli_fetch_assoc($query);
    }
}



?>
