 <?php
    require_once('script.php');
    $pg = "sp";
    $subpg = "coat";

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
    .tb-other th:nth-child(1), .tb-other td:nth-child(1) {
        width: 65.8%;
    }
    .tb-other th:nth-child(2), .tb-other td:nth-child(2) {
        text-align: center;
        width: auto;
    }
    .tb-other th:nth-child(3), .tb-other td:nth-child(3) {
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
                                                <label>Service Name : Coat</label>
                                                <div id="table-div">
                                                    <table id="example" class="table table-bordered nowrap table-striped align-middle">
                                                        <thead>
                                                            <tr>   
                                                                <th>Product</th>
                                                                <th class="text-center">Price (RM)</th>
                                                                <th class="text-center">Warranty (Year)</th>
                                                                <th class="text-center">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                            //Display The Price List OF COAT (Price & Warranty)
                                                            //Backend Section
                                                            displayPrice($ALVADB);
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div id="table-div">
                                                    <table id="example" class="tb-other table table-bordered nowrap table-striped align-middle">
                                                        <thead>
                                                            <tr>   
                                                                <th>Add-ons</th>
                                                                <th class="text-center">Price (RM)</th>
                                                                <th class="text-center">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            //Display Add On Price
                                                            displayAddOn($ALVADB);
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <!-- ARMP RATE SECTION -->
                                                <?php
                                                //ARMP-Rate
                                                require_once('armp-rate.php');
                                                ?>
                                                <!-- END OF ARMP RATE SECTION -->
                                            </div>
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

        function updateP(ID)
        {
            var price = document.getElementById("price"+ID).value;
            var warranty = document.getElementById("warranty"+ID).value;

            $.ajax({
                type:"POST",
                url:"service-coat-edit.ajax.php",
                data:
                {
                    ID: ID,
                    price:price,
                    warranty:warranty
                }
            })
        }

        function updateA(ID)
        {
            var price = document.getElementById("priceA"+ID).value;

            $.ajax({
                type:"POST",
                url:"service-coat-edit.ajax.php",
                data:
                {
                    AID: ID,
                    price:price
                }
            })
        }


        function updateD(ID)
        {
            var rate = document.getElementById("discount_select").value;
            var amount = document.getElementById("discount_amount").value;
            $.ajax({
                type:"POST",
                url:"service-coat-edit.ajax.php",
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
                url:"service-coat-edit.ajax.php",
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

function displayPrice($dbconn)
{
    $sql="SELECT * FROM coat_pricelist WHERE status='1'";
    $query=mysqli_query($dbconn,$sql) or die (mysqli_error($dbconn));
    $totalrow = mysqli_num_rows($query);

    if($totalrow>0)
    {
        while($row = mysqli_fetch_assoc($query))
        {
            echo $display = 
            '
            <tr>
                <td>'.$row['product'].'<span id="tb-time-p">'.$row['short_desc'].'</span></td>
                <td class="text-center"><input type="text" class="form-control camount" id="price'.$row['ID'].'" name="price" max-length="100" value="'.$row['price'].'" onkeypress="return isNumberKey(this,event)" ></td>
                <td class="text-center"><input type="text" class="form-control" id="warranty'.$row['ID'].'" name="warranty" max-length="100" value="'.$row['warranty'].'" onkeypress="return validateInt(this, event);"></td>
                <td class="text-center">
                    <button type="button" onclick="updateP('.$row['ID'].')" data-toast data-toast-text="Successfully Save" data-toast-gravity="top" data-toast-position="right" data-toast-duration="3000" class="tb-ac-btn" id="tb-ac-btn-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Save">
                        <i class="ri-save-3-line"></i>
                    </button>
                </td>
            </tr>
            ';
        }
    }
}

function displayAddOn($dbconn)
{
    $sql="SELECT * FROM `coat_addon_pricelist` WHERE status='1'";
    $query=mysqli_query($dbconn,$sql) or die (mysqli_error($dbconn));
    $totalrow = mysqli_num_rows($query);

    if($totalrow>0)
    {
        while($row = mysqli_fetch_assoc($query))
        {
            echo $display = 
            '
            <tr>
                <td>'.$row['product'].'<span id="tb-time-p">'.$row['short_desc'].'</span></td>
                <td class="text-center"><input type="text" class="form-control camount" id="priceA'.$row['ID'].'" name="priceA" max-length="100" value="'.$row['price'].'" onkeypress="return isNumberKey(this,event)"></td>
                <td class="text-center">
                    <button type="button" onclick="updateA('.$row['ID'].')" data-toast data-toast-text="Successfully Save" data-toast-gravity="top" data-toast-position="right" data-toast-duration="3000" class="tb-ac-btn" id="tb-ac-btn-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Save">
                        <i class="ri-save-3-line"></i>
                    </button>
                </td>
            </tr>
            ';
        }
    }

}

function displayARMP($dbconn)
{
    $sql="SELECT * FROM coat_armp_rate WHERE status='1'";
    $query=mysqli_query($dbconn,$sql) or die (mysqli_error($dbconn));
    $totalrow = mysqli_num_rows($query);

    if($totalrow>0)
    {
        return mysqli_fetch_assoc($query);
    }
}


?>