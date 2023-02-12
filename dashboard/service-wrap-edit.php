 <?php
    require_once('script.php');
    $pg = "sp";
    $subpg = "paint";

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
        .table th:nth-child(1), .table td:nth-child(1) {
            width: 62%;
        }
        .table th:nth-child(2), .table td:nth-child(2) {
            text-align: center;
            width: 23%;
        }
        .table th:nth-child(3), .table td:nth-child(3) {
            text-align: center;
            width: auto;
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

        <div class="main-content service_package">

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
                            <div class="col-lg-12">
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
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <label>Service Name : Wrap</label>
                                                
                                                <!-- TABLE START -->
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <!-- Wrapping Package Section -->
                                                        <div id="table-div">
                                                            <table class="tb-package table table-bordered nowrap table-striped align-middle">
                                                                <thead>
                                                                    <tr>   
                                                                        <th>Wrapping Package</th>
                                                                        <th>Price (RM)</th>
                                                                        <th class="text-center">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php 
                                                                    //Diplay Wrapping Package (P01)
                                                                    //<th class="text-center">Action</th>
                                                                    displayWrapPriceList($ALVADB,"P01",0);
                                                                    ?>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <!-- Type of Vehicle Section -->
                                                        <div id="table-div">
                                                            <table class="tb-type table table-bordered nowrap table-striped align-middle">
                                                                <thead>
                                                                    <tr>   
                                                                        <th>Type of Vehicle (Full Car)</th>
                                                                        <th>Price (RM)</th>
                                                                        <th class="text-center">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php 
                                                                    //Diplay Vehicle (P02)
                                                                    //<th class="text-center">Action</th>
                                                                    displayWrapPriceList($ALVADB,"P02",0);
                                                                    ?>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <!-- Bodywork Section -->
                                                        <div id="table-div">
                                                            <table class="tb-bodywork table table-bordered nowrap table-striped align-middle">
                                                                <thead>
                                                                    <tr>   
                                                                        <th>Bodywork</th>
                                                                        <th>Price (RM)</th>
                                                                        <th class="text-center">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php 
                                                                    //Diplay Bodywork (P03)
                                                                    //<th class="text-center">Action</th>
                                                                    displayWrapPriceList($ALVADB,"P03",0);
                                                                    ?>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <!-- Dissassemble / Installation Section -->
                                                        <div id="table-div">
                                                            <table class="tb-dissassemble table table-bordered nowrap table-striped align-middle">
                                                                <thead>
                                                                    <tr>   
                                                                        <th>Dissassemble / Installation</th>
                                                                        <th>Price (RM)</th>
                                                                        <th class="text-center">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php 
                                                                    //Diplay Dissassemble / Installation (P04)
                                                                    //<th class="text-center">Action</th>
                                                                    displayWrapPriceList($ALVADB,"P04",0);
                                                                    ?>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <!-- Sanding Section -->
                                                        <div id="table-div">
                                                            <table class="tb-sanding table table-bordered nowrap table-striped align-middle">
                                                                <thead>
                                                                    <tr>   
                                                                        <th>Sanding</th>
                                                                        <th>Price (RM)</th>
                                                                        <th class="text-center">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php 
                                                                    //Diplay Sanding (P05)
                                                                    displayWrapPriceList($ALVADB,"P05",0);
                                                                    ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        
                                                        <!-- Putty Filler Section -->
                                                        <div id="table-div">
                                                            <table class="tb-pf table table-bordered nowrap table-striped align-middle">
                                                                <thead>
                                                                    <tr>   
                                                                        <th>Putty Filler (Cement)</th>
                                                                        <th>Price (RM)</th>
                                                                        <th class="text-center">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php 
                                                                    //Diplay Putty Filler (P06)
                                                                    displayWrapPriceList($ALVADB,"P06",0);
                                                                    ?>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <!-- Optional Section -->
                                                        <div id="table-div">
                                                            <table class="tb-optional table table-bordered nowrap table-striped align-middle">
                                                                <thead>
                                                                    <tr>   
                                                                        <th>Optional</th>
                                                                        <th>Price (RM)</th>
                                                                        <th class="text-center">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php 
                                                                    //Diplay Optional (P07)
                                                                    displayWrapPriceList($ALVADB,"P07",0);
                                                                    ?>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <!-- Warranty Section -->
                                                        <div id="table-div">
                                                            <table class="tb-optional table table-bordered nowrap table-striped align-middle">
                                                                <thead>
                                                                    <tr>   
                                                                        <th>Warranty</th>
                                                                        <th>Month</th>
                                                                        <th class="text-center">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php 
                                                                    //Diplay Warranty (P08)
                                                                    displayWrapPriceList($ALVADB,"P08",1);
                                                                    ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- TABLE END -->
           
                                                <!-- ARMP RATE SECTION -->
                                                <?php
                                                //ARMP-Rate
                                                require_once('armp-rate.php');
                                                ?>
                                                <!-- END OF ARMP RATE SECTION -->
                                    
                                            </div>

                                            <!-- Button group -->
                                            <div class="col-lg-12">
                                                <div id="form-btn-div">
                                                    <a href="<?php echo $base_url_dashboard; ?>/service-package.php" id="general-btn" class="btn2"><i class="ri-close-fill"></i>Cancel</a>
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

    <script>

        function update(ID,type)
        {

            var price;
            var warranty;

            if(type==0)
            {
                //Mean Data Table doesn't have Warranty but Price
                warranty=0;
                price = document.getElementById("price"+ID).value;

            }
            else
            {
                //Mean Data Table doesn't have Price but Warranty
                warranty=document.getElementById("warranty"+ID).value;
                price = 0;
            }

            $.ajax({
                type:"POST",
                url:"service-wrap-edit.ajax.php",
                data:
                {
                    ID: ID,
                    price: price,
                    warranty: warranty
                }
            })
        }

        //ARMP RATE SECTION 
        //updateD: Discount rate
        //updateR: Referral rate
        function updateD(ID)
        {
            var rate = document.getElementById("discount_select").value;
            var amount = document.getElementById("discount_amount").value;
            $.ajax({
                type:"POST",
                url:"service-wrap-edit.ajax.php",
                data:
                {
                    DID: ID,
                    rate:rate,
                    amount:amount
                }
            })
        }

        function updateR(ID)
        {
            var rate = document.getElementById("referral_select").value;
            var amount = document.getElementById("referral_amount").value;
            $.ajax({
                type:"POST",
                url:"service-wrap-edit.ajax.php",
                data:
                {
                    RID: ID,
                    rate:rate,
                    amount:amount
                }
            })
        }
    </script>

    <!-- Validation Input -->
    <script src="inc/validation-input.js"></script>

</body>
</html>

<?php
function displayWrapPriceList($dbconn,$condition,$type)
{
    $sql="SELECT * FROM `wrap_pricelist` WHERE product_code = '$condition' AND status='1'";
    $query=mysqli_query($dbconn,$sql) or die (mysqli_error($dbconn));
    $totalrow = mysqli_num_rows($query);

    if($totalrow>0)
    {
        while($row = mysqli_fetch_assoc($query))
        {
            echo
            '
            <tr>
                <td>'.$row['product'].' <span id="tb-time-p">'.$row['short_desc'].'</span></td>
            ';

            //type = 0: Indicate the column consist Price => onkeypress="return isNumberKey(this,event);" 
            //type = 1: Indicate the column consist Warranty => onkeypress="return validateInt(this, event);"
            if($type==0)
            {
                echo
                '
                    <td>
                        <input type="text" class="form-control camount" id="price'.$row['ID'].'" max-length="100" value="'.$row['price'].'" onkeypress="return isNumberKey(this,event);">
                    </td>
                    <td class="text-center">
                        <button type="button" onclick="update('.$row['ID'].','.$type.')" data-toast data-toast-text="Successfully Save" data-toast-gravity="top" data-toast-position="right" data-toast-duration="3000" class="tb-ac-btn" id="tb-ac-btn-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Save">
                            <i class="ri-save-3-line"></i>
                        </button>
                    </td>
                </tr>
                ';
            }
            elseif($type==1)
            {
                echo
                '
                    <td>
                        <input type="text" class="form-control" id="warranty'.$row['ID'].'" max-length="100" value="'.$row['warranty'].'" onkeypress="return validateInt(this, event);">
                    </td>
                    <td class="text-center">
                        <button type="button" onclick="update('.$row['ID'].','.$type.')" data-toast data-toast-text="Successfully Save" data-toast-gravity="top" data-toast-position="right" data-toast-duration="3000" class="tb-ac-btn" id="tb-ac-btn-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Save">
                            <i class="ri-save-3-line"></i>
                        </button>
                    </td>
                </tr>
                ';

            }
        }
    }
}

function displayARMP($dbconn)
{
    $sql="SELECT * FROM `wrap_armp_rate` WHERE status='1'";
    $query=mysqli_query($dbconn,$sql) or die (mysqli_error($dbconn));
    $totalrow = mysqli_num_rows($query);

    if($totalrow>0)
    {
        return mysqli_fetch_assoc($query);
    }
}

?>